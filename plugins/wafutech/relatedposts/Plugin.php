<?php namespace Wafutech\RelatedPosts;
use RainLab\Blog\Models\Post;
use RainLab\Blog\Controllers\Posts as PostsController;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public $require = ['RainLab.Blog'];
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function pluginDetails()
    {
        return [
            'name'        => 'RelatedPosts',
            'description' => 'Extends RainLab plugin to fetch related articles to current blog posts',
            'author'      => 'wafutech',
            'icon'        => 'icon-user'
        ];
    }

    public function boot()
    {
    	 //Add custom fields on posts list at the backend
        PostsController::extendListColumns(function($list,$model)
        {
            if(!$model instanceof Post)
                return;
            $list->addColumns([
                'category_id'=>[
                        'label'=>'Post Category'
                    ]



            ]);



        });

    	 

    }
    
}
