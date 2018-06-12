<?php 
use RainLab\Blog\Models\Post;class Cms5af2f1fbd1df6956848038_cb4c5505b5fc7c58f8c1eb5e14544851Class extends \Cms\Classes\PageCode
{

public function onStart(){
    $this['posts'] = Post::isPublished()
					    ->orderBy('published_at', 'desc')
					    ->take(5)
					    ->with('categories')
					    ->get();
}
}
