<?php
use Rainlab\Blog\Models\Post;
use Rainlab\Blog\Models\Category;

/*Route::get('apiv1/related-posts/{id}',function($id)
{
$post = Post::where('id',$id)->first();

$posts = Post::where('category_id',$post->category_id)
->where('id','!=',$id)
->orderBy('views','desc')
->get()->take(5);
return $posts;
});*/
Route::get('apiv1/related-posts/{postid}', function($id)
{
    $post = Post::where('id',$id)->first();

    // we need this because there will be mm relation so
    // we fetch first category and this will be based on 
    // [ name sorting - does not matter as there will be only one cat. ]
    $firstCategory = $post->categories()->first();
    dd($firstCategory);
    // now we fetch only that post which are related to that category
    // but we skip current post and sort them and pick 5 posts
    $posts = $firstCategory->posts()
        ->where('id', '!=', $id)
        ->orderBy('views','desc')
        ->limit(5) // use limit instead of take()
        ->get(); 

    // use limit instead of take() as we don't need extra data so 
    // just put limit in sql rather fetching it from db then 
    // putting limit by code - limit() is more optimised way

    return $posts;
});

Route::post('test', function (\Request $request) {
   return response()->json(('The test was successful'));
})->middleware('\Tymon\JWTAuth\Middleware\GetUserFromToken');









