<?php 
use RainLab\Blog\Models\Post;class Cms5aba36db7e69f591413488_3e21477e03146c9e43df60cedbd50e9aClass extends \Cms\Classes\PageCode
{

public function onStart(){
    $this['posts'] = Post::isPublished()
					    ->orderBy('published_at', 'desc')
					    ->take(5)
					    ->with('categories')
					    ->get();
}
}
