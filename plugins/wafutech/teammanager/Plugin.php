<?php namespace Wafutech\TeamManager;

use Backend;
use System\Classes\PluginBase;

/**
 * TeamManager Plugin Information File
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
            'name'        => 'TeamManager',
            'description' => 'No description provided yet...',
            'author'      => 'Wafutech',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Wafutech\TeamManager\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'wafutech.teammanager.some_permission' => [
                'tab' => 'TeamManager',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'teammanager' => [
                'label'       => 'TeamManager',
                'url'         => Backend::url('wafutech/teammanager/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['wafutech.teammanager.*'],
                'order'       => 500,
            ],
        ];
    }
}
