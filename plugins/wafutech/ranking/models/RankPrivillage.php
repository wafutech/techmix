<?php namespace Wafutech\Ranking\Models;

use Model;

/**
 * Model
 */
class RankPrivillage extends Model
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
    public $table = 'wafutech_ranking_rank_privillages';

    public $hasOne = [];
    public $hasMany = [
        'rankWithPrivillages' =>['Wafutech\Ranking\Models\RankWithPrivillage']


    ];
   
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
