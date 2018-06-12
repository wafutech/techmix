<?php namespace Wafutech\Ranking\Models;

use Model;

/**
 * Model
 */
class RPSType extends Model
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
    public $table = 'wafutech_ranking_rps_types';

    public $hasMany = [
        'rps' =>['Wafutech\Ranking\Models\RPS']

        ];
}
