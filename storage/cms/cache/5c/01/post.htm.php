<?php 
use RainLab\Blog\Models\Post;class Cms5b1813bf79cce206728590_b22b97be342379a175239b64cac57b77Class extends \Cms\Classes\PageCode
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
