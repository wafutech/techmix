<?php namespace Wafutech\Ranking\Models;

use Model;

/**
 * Model
 */
class RankWithPrivillage extends Model
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
    public $table = 'wafutech_ranking_rank_with_privillages';

    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'rank' =>['Wafutech\Ranking\Models\Rank'],
        'privillage' =>['Wafutech\Ranking\Models\RankPrivillage']


    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
