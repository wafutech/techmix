<?php namespace Wafutech\Stackexchange\Models;

use Model;

/**
 * Model
 */
class QuestionCategory extends Model
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
    public $table = 'wafutech_stackexchange_question_categories';

    protected $fillable = ['category','description'];

    /**
     * @var array Relations
     */
    public $hasMany = ['questions'=>'\wafutech\questions\Models\Question'];
}
