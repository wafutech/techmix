<?php namespace Wafutech\Stackexchange;

use System\Classes\PluginBase;

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
            'name'        => 'Stackexchange',
            'description' => 'A question and answer plugin that lets user post questions and share answers in a forum',
            'author'      => 'wafutech',
            'icon'        => 'icon-leaf'
        ];
    }
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }
}
