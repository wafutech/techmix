<?php namespace Wafutech\Blogpostcomments\Models;

use Model;

/**
 * Model
 */
class BlogPostComment extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
      'comment'=>'required|string',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'wafutech_blogpostcomments_';

     public $belongsTo = [
        'user' =>['RainLab\User\Models\User'],
        'post' =>['RainLab\Blog\Models\Post'],
        'parentid' =>['Wafutech\Blogpostcomments\Models\BlogPostComment']


    ];

   
}
