<?php namespace Terne\Hubspot\Components;

use Cms\Classes\ComponentBase;
use Terne\Hubspot\Models\Settings;

class TrackingCode extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'terne.hubspot::lang.components.tracking_code.name',
            'description' => 'terne.hubspot::lang.components.tracking_code.desc',
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['hub_id'] = Settings::get('hub_id');
    }
}