<?php namespace Wafutech\Blogpostcomments;

use System\Classes\PluginBase;
use RainLab\User\Models\User;
use RainLab\Blog\Models\Post;


class Plugin extends PluginBase
{
    
	public function pluginDetails()
    {
        return [
            'name'        => 'Blogpostcomments',
            'description' => 'Lets registered users leave comments ona blog post',
            'author'      => 'wafutech',
            'icon'        => 'icon-comment'
        ];
    }

    public function boot()
    {
    	//Define back-reference relationships
    	User::extend(function($model)
        {
            $model->hasMany['postcomments'] =['Wafutech\Blogpostcomments\Models\PostComment'];
        });

        Post::extend(function($model)
        {
            $model->hasMany['comments'] =['Wafutech\Blogpostcomments\Models\PostComment'];
        });
    }
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }


}
