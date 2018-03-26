<?php namespace Wafutech\Stackexchange\Models;

use Model;

/**
 * Model
 */
class Question extends Model
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
    public $table = 'wafutech_stackexchange_questions';

     protected $fillable = ['question','question_detail','category_id','user_id'];
 public $hasOne = ['user'=>'RainLab\User\Models\User'];

    public $hasMany = ['answers'      => '\wafutech\Questions\Models\Answer'];

    public $belongsTo = ['user'=>'RainLab\User\Models\User','questionCategory'=>'\wafutech\Questions\Models\QuestionCategory'];

    public function getCategoriesOptions()
    {
        return \Wafutech\Stackexchange\Models\QuestionCategory::pluck('category', 'id');
    }
}
