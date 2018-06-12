<?php namespace Wafutech\Ranking\Models;

use Model;

/**
 * Model
 */
class RPS extends Model
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
    public $table = 'wafutech_ranking_rps';

     public $belongsTo = [
        'user' =>['RainLab\User\Models\User'],
        'rpstype' =>['Wafutech\Ranking\Models\RPSType']


    ];
}
