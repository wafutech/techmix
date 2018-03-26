<?php 
use RainLab\Blog\Models\Post;class Cms5ab8a2bfb0fd1072836865_1effcdd25d1625b4d0d5f50ba483fa2bClass extends \Cms\Classes\PageCode
{

public function onStart(){
    $this['posts'] = Post::isPublished()
					    ->orderBy('published_at', 'desc')
					    ->take(5)
					    ->with('categories')
					    ->get();
}
}
