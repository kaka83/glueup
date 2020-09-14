<?php

namespace Wms\Menu;

use Backend\Classes\Controller as BackendController;
use Cms\Classes\Controller as CmsController;
use Cms\Classes\Page as CmsPage;
use System\Classes\PluginBase;

/**
 * Menu Plugin Information File
 */
class Plugin extends PluginBase
{
    protected const ICON = 'icon-sliders';

    /**
     * @var CmsController
     */
    protected $cmsController;
    protected $defaultMenuName = 'wms.menu::plugin.default-menu';
    protected $navigation = [
        'first'       => null,
        'sideMenu'    => [],
        'subMenus'    => [],
        'permissions' => [],
    ];

    public function pluginDetails()
    {
        return [
            'name'        => 'wms.menu::plugin.name',
            'description' => 'wms.menu::plugin.description',
            'author'      => 'WMStudio',
            'icon'        => self::ICON,
        ];
    }

    public function register()
    {
        BackendController::extend(function($controller) {
            /* @var $controller BackendController */
            $controller->addDynamicMethod('getMenu', function($name) {
                return isset($this->navigation['subMenus'][$name]) ? $this->navigation['subMenus'][$name] : null;
            });
        });

        /**
         * Скрывает содержимое заголовка или после символа `, или между символами ``
         *  прим:
         *      "Заголовок `Скрытый тектс"
         *      "`Скрытый текст` Заголовок"
         */
        CmsPage::extend(function($page) {
            /* @var $page CmsPage */
            $page->addDynamicMethod('getTitle', function($withHidden = false) use (&$page) {
                $title = $page->title;
                if (($pos = mb_strpos($title, '`')) === false) {
                    return $title;
                }
                if ($withHidden) {
                    return str_replace('`', '', $title);
                } else {
                    $result = mb_substr($title, 0, $pos);
                    $title = mb_substr($title, $pos + 1);
                    if (($pos = mb_strpos($title, '`')) === false) {
                        return $result;
                    }

                    return trim($result . mb_substr($title, $pos + 1));
                }
            });
        });

        \Event::listen('cms.page.beforeRenderPage', function($controller, $page) {
            /* @var $page CmsPage */
            $config = $page->theme->getConfig();
            $page->theme->menu = $this->getMenu(optional($config)['menu'] ?: [], !!optional($config)['pageTitleMoreImportant']);
        });
    }

    public function registerNavigation()
    {
        list($navigation, $defaultMenuName) = Classes\Extend::collectNavigation($this->defaultMenuName, self::ICON);
        if ($navigation) {
            $this->navigation = $navigation;
        }
        if ($defaultMenuName) {
            $this->defaultMenuName = $defaultMenuName;
        }

        $navigation = [];
        if (count($this->navigation['sideMenu'])) {
            \BackendMenu::registerContextSidenavPartial('Wms.Menu', 'main', '~/plugins/wms/menu/partials/menu/main/_system_sidebar.phtml');
            $navigation['main'] = [
                'label'       => 'wms.menu::plugin.name',
                'url'         => $this->navigation['first'] ?: \Backend::url('wms/menu'),
                'icon'        => self::ICON,
                'permissions' => array_keys($this->navigation['permissions']),
                'order'       => 999, // before CMS Settings
                'sideMenu'    => $this->navigation['sideMenu'],
            ];

            if (is_array($this->navigation['subMenus'])) {
                foreach ($this->navigation['subMenus'] as $name => $menu) {
                    if (!isset($navigation[$name])) {
                        \BackendMenu::registerContextSidenavPartial('Wms.Menu', $name, '~/plugins/wms/menu/partials/menu/secondary/_sidenav.phtml');
                    }
                }
            }
        }

        return $navigation;
    }

    protected function getPage($name, $title = null, $pageTitleMoreImportant = false, $active = null, $attributes = [])
    {
        /* @var $page CmsPage */
        if (!$this->cmsController) {
            $this->cmsController = CmsController::getController() ?: new CmsController;
        }

        $page = CmsPage::find($name);
        if (!$page) {
            $result = [
                'url'        => '#',
                'name'       => $title ?? $name,
                'class'      => optional($attributes)['class'],
                'attributes' => $this->renderAttributes($attributes),
            ];
        } else {
            $result = [
                'url'        => $this->cmsController->pageUrl($name, false),
                'name'       => $pageTitleMoreImportant ? $page->getTitle(true) : (($title ?? $page->getTitle(true)) ?: $name),
                'class'      => optional($attributes)['class'],
                'attributes' => $this->renderAttributes($attributes),
            ];
        }
        $current = CmsPage::url('');
        if ($current == $result['url']) {
            $result['active'] = true;
        } elseif ($active) {
            if (is_string($active) && $current == CmsPage::url($active)) {
                $result['active'] = true;
            } elseif (is_array($active)) {
                $isActive = false;
                foreach ($active as $page) {
                    if ($isActive) {
                        break;
                    }
                    if ($current == CmsPage::url($page)) {
                        $isActive = true;
                    }
                }
                if ($isActive) {
                    $result['active'] = true;
                }
            }
        }

        return $result;
    }

    protected function getMenu($menu, $pageTitleMoreImportant = true)
    {
        $result = [];
        foreach ($menu as $key => $value) {
            if (!is_array($value)) {
                $result[$key] = $this->getPage($key, $value, $pageTitleMoreImportant);
            } else {
                $result[$key] = $this->getPage(
                    $key,
                    optional($value)['name'],
                    $pageTitleMoreImportant,
                    optional($value)['active'],
                    optional($value)['attributes'] ?: []
                );
                if (isset($value['url'])) {
                    $result[$key]['url'] = url($value['url']);
                }
                if (isset($value['pages'])) {
                    $result[$key]['pages'] = $this->getMenu($value['pages'], $pageTitleMoreImportant);
                }
            }
        }

        return $result;
    }

    protected function renderAttributes($attributes)
    {
        $result = '';
        foreach ($attributes as $name => $attribute) {
            if ($name == 'class' || $name == 'href') {
                continue;
            }
            $result .= "$name=\"$attribute\" ";
        }
        if (strlen($result)) {
            $result = substr($result, 0, -1);
        }

        return $result;
    }
}
