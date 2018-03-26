<?php namespace Wafutech\Stackexchange\Models;

use Model;

/**
 * Model
 */
class Usefulanswer extends Model
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
    public $table = 'wafutech_stackexchange_useful_answers';

    public $belongsToMany = ['user'=>'RainLab\User\Models\User','question'=>'\wafutech\Questions\Models\Question','answer'=>'\wafutech\Questions\Models\Answer'];
}
