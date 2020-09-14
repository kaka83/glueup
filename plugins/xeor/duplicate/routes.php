<?php

use Xeor\Duplicate\Classes\Duplicate;

Route::group(['prefix' => Config::get('cms.backendUri', 'backend')], function () {
    Route::get('xeor/duplicate', function () {
        $loggedIn = BackendAuth::check();
        $redirectTo = Config::get('cms.backendUri', 'backend');
        if ($loggedIn) {
            $plugin = Input::get('plugin');
            $messageType = 'error';
            switch ($plugin) {
                case 'cms':
                    $messageType = Duplicate::cloneCmsFile(Input::get('type'),
                        Input::get('file')) ? 'success' : 'error';
                    $redirectTo .= '/cms';
                    break;
                case 'rainlab.blog':
                    $messageType = Duplicate::cloneBlogPost(Input::get('id')) ? 'success' : 'error';
                    $redirectTo .= '/rainlab/blog/posts';
                    break;
            }
            Flash::$messageType(e(trans('xeor.duplicate::lang.settings.' . $messageType)));
        }
        return Redirect::to($redirectTo);
    })->middleware('web');
});
