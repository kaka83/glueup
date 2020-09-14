<?php namespace Terne\Hubspot;

use System\Classes\PluginBase;

/**
 * HubspotTrackingCode Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'terne.hubspot::lang.plugin.name',
            'description' => 'terne.hubspot::lang.plugin.desc',
            'author'      => 'Terne',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            'Terne\Hubspot\Components\TrackingCode' => 'hubspotTrackingCode',
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'terne.hubspot::lang.settings.menu_label',
                'description' => 'terne.hubspot::lang.settings.menu_description',
                'category'    => 'terne.hubspot::lang.settings.category',
                'icon'        => 'icon-cog',
                'class'       => 'Terne\Hubspot\Models\Settings',
                'order'       => 100,
                'permissions' => ['terne.hubspot.access_settings'],
            ]
        ];
    }
}
