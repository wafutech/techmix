<?php namespace Wafutech\Stackexchange\Models;

use Model;

/**
 * Model
 */
class Answer extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
   

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'wafutech_stackexchange_answers';

 protected $fillable = ['question_id','answer','user_id'];

public $belongsTo = ['question'=>'\wafutech\Questions\Models\Question','user'=>'\Backend\Models\User'];
}
