<?php namespace Terne\Hubspot\Models;

use Model;

/**
 * Settings Model
 */
class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'terne_hubspot_settings';
    public $settingsFields = 'fields.yaml';

    public function initSettingsData() {}

}