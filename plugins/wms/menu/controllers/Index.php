<?php

namespace Wms\Menu\Controllers;

use Backend\Classes\Controller;

/**
 * Settings controller
 *
 * @package october\system
 * @author Alexey Bobkov, Samuel Georges
 *
 */
class Index extends Controller
{
    public function __construct()
    {
        parent::__construct();
        \BackendMenu::setContext('Wms.Menu', 'main');
    }

    public function index()
    {
        $this->pageTitle = 'wms.menu::plugin.name';
        $this->bodyClass = 'compact-container sidenav-tree-root';
    }
}
