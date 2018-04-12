<?php namespace Wafutech\Stackexchange;

use System\Classes\PluginBase;
Use Event;
use Wafutech\Stackexchange\Models\Answer as Answer;
use Wafutech\Stackexchange\Models\question as question;
use DB;


class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */

    /**
    * array plugin dependences
    */

   // public $require = ['acme.user'];
    public function pluginDetails()
    {
        return [
            'name'        => 'Stackexchange',
            'description' => 'A question and answer plugin that lets user post questions and share answers in a forum',
            'author'      => 'wafutech',
            'icon'        => 'icon-leaf'
        ];
    }
    public function register()
    {
        //Register method called when the plugin is first registered
    }
    public function boot()
    {
        //boot method called right before the request route
       /* User::extend(function($model)
        {
            $model->hasOne['author'] = ['Rainlab.blog.Models.Post'];
        });*/

        //Event listeners
        Event::listen('Wafutech.Stackexchange.Classes.Events.AnswerPostedEvent',function(AnswerPostedEvent $event)
            {
             //Listner logic here 

        DB::update('update wafutech_stackexchange_questions set closed=? where id =?',[1,$event->question->id]);
           

            });

        //Subscribing to a class listener instead of a closure
        //Event::listen('Wafutech.Stackexchange.Events.AnswerPostedEvent','EventHandler@onAnswerPosted');
    }

    public function registerMarkUpTags()
    {
        //Registers additional markup tags that can be used in the CMS
    }
    public function registerComponents()
    {
        //Register any front-end components used by this plugin
    }

    public function registerSettings()
    {
        //registers any backend configuration links used by this plugin
    }

    public function registerPermissions()
    {
        //Registers any backend permissions used by this plugin
    }



    

}
