<?php

namespace Wms\Menu\Classes;

use Backend\Models\User;
use System\Classes\PluginManager;

class Extend
{
    /**
     * @var User
     */
    protected static $user;
    /**
     * @var PluginManager
     */
    protected static $manager;
    protected static $icon;
    protected static $defaultMenuName;
    protected static $navigation = [
        'first'           => null,
        'sideMenu'        => [],
        'subMenus'        => [],
        'permissions'     => [],
    ];

    /**
     * @param PluginManager $pluginManager
     * @param string $defaultMenuName
     * @param string $defaultIcon
     * @return array
     */
    public static function collectNavigation(string $defaultMenuName, string $defaultIcon): array
    {
        self::$manager = PluginManager::instance();
        self::$defaultMenuName = $defaultMenuName;
        self::$icon = $defaultIcon;
        self::$user = \BackendAuth::getUser();

        $navigation = self::getPluginsNavigation();
        self::removeOrder($navigation);
        if (!$navCount = count($navigation)) {
            return [null, null];
        }

        foreach ($navigation as $group => $pages) {
            if ($group == '{default_name}') {
                $group = self::$defaultMenuName;
            }
            foreach ($pages as $name => $page) {
                if ($page) {
                    self::$navigation['sideMenu'][$name] = [
                        'label'       => isset($page['label']) ? $page['label'] : 'wms.menu::lang.no-name',
                        'group'       => $group,
                        'url'         => isset($page['url']) ? $page['url'] : '#',
                        'icon'        => isset($page['icon']) ? $page['icon'] : 'icon-leaf',
                        'permissions' => isset($page['permissions']) ? $page['permissions'] : ['wms.*'],
                    ];
                }
            }
        }

        return [
            self::$navigation,
            self::$defaultMenuName,
        ];
    }

    protected static function removeOrder(&$array, $name = null)
    {
        if ($name && isset($array['subMenu']) && is_array($array['subMenu'])) {
            $subPermissions = [];
            $subFirst = null;
            $subCount = 0;
            foreach ($array['subMenu'] as $subGroup => $subMenu) {
                if ($subGroup == '{default_name}') {
                    $subGroup = self::$defaultMenuName;
                }
                foreach ($subMenu as $subName => $subPage) {
                    $subPermission = isset($subPage['permissions']) ? $subPage['permissions'] : ['wms.*'];
                    if (!is_array($subPermission)) {
                        $subPermission = [$subPermission];
                    }
                    $hasPermissions = false;
                    foreach ($subPermission as $perm) {
                        $hasPermissions = $hasPermissions || self::$user->hasPermission($perm);
                    }
                    if ($hasPermissions) {
                        $subUrl = isset($subPage['url']) ? $subPage['url'] : '#';
                        foreach ($subPermission as $perm) {
                            $subPermissions[$perm] = true;
                        }
                        if (!$subFirst && isset($subPage['first']) && $subPage['first'] && self::$user->hasPermission($subPermission)) {
                            $subFirst = $subUrl;
                        }
                        self::$navigation['subMenus'][$name][$subGroup][$subName] = [
                            'label'       => isset($subPage['label']) ? $subPage['label'] : 'wms.menu::lang.no-name',
                            'group'       => $subGroup,
                            'url'         => $subUrl,
                            'icon'        => isset($subPage['icon']) ? $subPage['icon'] : 'icon-leaf',
                            'permissions' => $subPermission,
                        ];
                        $subCount++;
                    }
                }
            }
            $subFirst = $subFirst ?: \Backend::url("wms/menu/$name");
            if ($subFirst && $subCount) {
                $array['url'] = $subFirst;
                $array['permissions'] = array_keys($subPermissions);
                unset($array['subMenu']);
            } else {
                $array = [];
            }
        }
        foreach ($array as $key => $val) {
            if (is_array($array[$key])) {
                if (isset($array[$key]['order'])) {
                    unset($array[$key]['order']);
                }
                self::removeOrder($array[$key], $key);
            }
        }
        if (isset($array['first']) && $array['first']) {
            unset($array['first']);
            if (!self::$navigation['first']) {
                self::$navigation['first'] = self::getFirstUrl($array);
            }
        }
        if (isset($array['permissions'])) {
            foreach ($array['permissions'] as $permission) {
                self::$navigation['permissions'][$permission] = true;
            }
        }
    }

    protected static function getFirstUrl($field)
    {
        if (!isset($field['url'])) {
            return null;
        }

        $url = null;
        if (isset($field['permissions'])) {
            $hasPermissions = false;
            if (!is_array($field['permissions'])) {
                $field['permissions'] = [$field['permissions']];
            }
            foreach ($field['permissions'] as $permission) {
                $hasPermissions = $hasPermissions || self::$user->hasPermission($permission);
            }
            if ($hasPermissions) {
                $url = $field['url'];
            }
        } else {
            $url = $field['url'];
        }

        return $url;
    }

    protected static function getPluginsNavigation()
    {
        $navigation = [];

        foreach (self::$manager->getRegistrationMethodValues('addToMainNavigation') as $plugin => $subNavigation) {
            if (empty($subNavigation)) {
                continue;
            }

            $class = str_replace('.', '\\', $plugin) . '\Plugin';

            if (defined($class . '::DEFAULT_MENU_NAME') && !empty($class::DEFAULT_MENU_NAME)) {
                self::$defaultMenuName = $class::DEFAULT_MENU_NAME;
            }

            $details = self::$manager->getRegistrationMethodValues('pluginDetails');
            if (isset($details[$plugin]['icon'])) {
                $defaultIcon = $details[$plugin]['icon'];
            } else {
                $defaultIcon = self::$icon;
            }

            foreach ($subNavigation as $group => $pages) {
                foreach ($pages as $name => $page) {
                    if (is_array($page)) {
                        if (!isset($page['icon'])) {
                            $subNavigation[$group][$name]['icon'] = $defaultIcon;
                        }
                    }
                }
            }
            self::arrayMerge($navigation, $subNavigation);
        }

        return $navigation;
    }

    protected static function arrayMerge(&$array, $merge)
    {
        foreach ($merge as $key => $val) {
            if (!is_array($val)) {
                $array[$key] = $val;
            } else {
                if (!isset($array[$key])) {
                    $array[$key] = [];
                }
                self::arrayMerge($array[$key], $merge[$key]);
            }
        }
        uasort($array, function(&$arr1, &$arr2) {
            $order1 = isset($arr1['order']) ? $arr1['order'] : -1;
            $order2 = isset($arr2['order']) ? $arr2['order'] : -1;

            return $order1 == $order2 ? 0 : ($order1 < $order2 ? -1 : 1);
        });
    }
}