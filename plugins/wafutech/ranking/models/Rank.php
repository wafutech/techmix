<?php namespace Wafutech\Ranking\Models;

use Model;

/**
 * Model
 */
class Rank extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];
    protected $fillable = ['rank','description','rps_points'];

    /**
     * @var array Validation rules
     */
   public $rules = [
        'rank' =>'required|string|unique:wafutech_ranking_ranks',
        'description' =>'required|string',
        //'rps_points'=>'required|numeric',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'wafutech_ranking_ranks';
        public $hasMany = [
        'rank_privillages' =>['Wafutech\Ranking\Models\RankWithPrivillage'],
        'rank-users' =>['Wafutech\Ranking\Models\RankUser']


        ];

}
