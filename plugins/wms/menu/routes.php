<?php

use Wms\Menu\Controllers\Index as MenuControllers;

Route::get(config('cms.backendUri') . '/wms/menu/{menu}', function($menu) {
    $controller = App::make(MenuControllers::class);
    \BackendMenu::setContext('Wms.Menu', 'main', "$menu|");
    return $controller->run('index', ['menu' => $menu]);
})->middleware('web');