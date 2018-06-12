<?php namespace Wafutech\Ranking\Models;

use Model;

/**
 * Model
 */
class RankUser extends Model
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
    public $table = 'wafutech_ranking_rank_user';
        public $belongsToMany = [
        'users' =>['RainLab\User\Models\User'],
        'ranks' =>['Wafutech\Ranking\Models\Rank']

        ];

}
