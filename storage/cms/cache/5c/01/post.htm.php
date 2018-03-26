<?php 
use RainLab\Blog\Models\Post;class Cms5ab8a1cc05b19018433256_b0796404073b8be5dd90532b6bd289c7Class extends \Cms\Classes\PageCode
{

public function onStart(){
    $slug = $this->param('slug');
    $this['post'] = Post::where('slug', '=', $slug)
                            ->isPublished()
                            ->with('categories')
                            ->first();
     
    if( !$this['post'] )
        return Redirect::to('/404');
}
}
