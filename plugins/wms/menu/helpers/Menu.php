<?php

namespace Wms\Menu\Helpers;

class Menu
{
    public static function setMainActive($sideMenuItemCode = null)
    {
        \BackendMenu::setContext('Wms.Menu', 'main', $sideMenuItemCode);
    }

    public static function setSubnavActive($mainMenuItemCode, $sideMenuItemCode = null)
    {
        \BackendMenu::setContext('Wms.Menu', 'main', "$mainMenuItemCode|$sideMenuItemCode");
    }
}