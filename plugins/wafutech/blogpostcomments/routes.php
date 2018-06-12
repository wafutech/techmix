<?php
use Wafutech\Blogpostcomments\Controllers\BlogPostsController;


Route::get('api/v1/post-comments/{post}','Wafutech\Blogpostcomments\Controllers\BlogPostsController@listPostsWithComments');


Route::group(['middleware'=>'jwt:api'],function()
{
Route::post('api/v1/post-comments/{post}','Wafutech\Blogpostcomments\Controllers\BlogPostsController@storePostComment');

});


Route::post('test', function (\Request $request) {
   return response()->json(('The test was successful'));
})->middleware('\Tymon\JWTAuth\Middleware\GetUserFromToken');









