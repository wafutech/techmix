<?php 
use RainLab\Blog\Models\Post;class Cms5aba36e4826b1781591408_aa5b0b89e6723593a50e6e668f0bb5b6Class extends \Cms\Classes\PageCode
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
