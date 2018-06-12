<?php namespace Wafutech\Blogpostcomments\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Rainlab\Blog\Models\Post;
use Wafutech\Blogpostcomments\Models\PostComment as Comment;
use October\Rain\Database\ModelException; 
use RainLab\User\Facades\Auth;
use Illuminate\Http\Request as Request;
use JWTAuth;

/**
 * Blog Posts Controller Back-end Controller
 */
class BlogPostsController extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Wafutech.Blogpostcomments', 'blogpostcomments', 'blogpostscontroller');
    }

    public function listPostsWithComments($id)
    {
        $post = Post::find($id)->postcomments;
    return $post;
    }
    public function storePostComment(Request $request,Post $post)
    {
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->user_id = JWTAuth::parseToken()->authenticate()->id;
        $comment->post_id = $post;
        $comment->parent_id = $request->parent_id;
        $post->comments()->save($comment); 
        return $post->comments()->comment;
    }

    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        return $comment;
    }

    public function update(Request $request)
    {

    $input = $request->all();
    $comment = Comment::findOrFail($id);
    $comment->update($input);
    return $comment;

    }

    public function destroy($id)
    {
    $comment = Comment::findOrFail($id);
    $comment->delete();
    return 'Comment Deleted!';

    }
}
