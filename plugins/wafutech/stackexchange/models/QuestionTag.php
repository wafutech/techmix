<?php namespace Wafutech\Stackexchange\Models;

use Model;

/**
 * Model
 */
class QuestionTag extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'wafutech_stackexchange_question_tags';
    protected $fillable =['question_id','tag_id'];

     public $hasOne = ['question'=>'Wafutech\Stackexchange\Models\Question'];



}
