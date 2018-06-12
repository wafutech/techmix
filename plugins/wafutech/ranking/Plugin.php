<?php namespace Wafutech\Ranking;

use System\Classes\PluginBase;
use Rainlab\User\Models\User;
use Wafutech\Ranking\Events\Test;
use Event;
use Wafutech\Ranking\Models\RankUser;
use Wafutech\Ranking\Models\Rank;
use Wafutech\Stackexchange\Classes\Events\QuestionVote;
use Wafutech\Stackexchange\Models\Question;
use Wafutech\Ranking\Models\RPSType;
use Wafutech\Ranking\Models\RPS;
use DB;



class Plugin extends PluginBase
{
    public function boot()
    {
    	User::extend(function($model)
        {
            $model->hasOne['rank'] =['Wafutech\Ranking\Models\RankUser'];
            $model->hasMany['rps'] =['Wafutech\Ranking\Models\RPS'];
            $model->hasOne['user-rps'] =['Wafutech\Ranking\Models\UserRps'];
        });

        //Assign default rank to user on registration
        Event::listen('eloquent.created: RainLab\User\Models\User', function($user) {

        	$rank = Rank::where('rank','Junker')->first();
        	$assign_rank = new RankUser;
        	$assign_rank->user_id = $user->id;
        	$assign_rank->rank_id = $rank->id;
        	$assign_rank->save();
});

    //Hook into user login event and recalculate user rank
        Event::listen('eloquent.login: RainLab\User\Models\User', function($user) {
        	$rps = DB::table('wafutech_ranking_rps')
        	->select(DB::row('sum(rps) as points'))
        	->where('to_user_id',$user->id)
        	->get();
        	//add handshake points before update
        	$points = $rps->points+10;
        //Now update user's reputation points
        DB::update('update wafutech_ranking_user_rps set points=? where user_id =?',[$points,$user->id]);
        //update rank
        if($points<100)
        {
        	$rank = 'Junker';
        }
        else if($points<200)
        {
        	$rank = 'Knight';
        }
        else if($points<300)
        {
        	$rank = "Duke";
        }
        else
        {
        	$rank = 'Grand Duke';
        }

        //get rank
        $newRank = Rank::where('rank',$rank)->first();
        if(!$newRank)
        {
        	return 'Type Error! Rank'.$rank.' does not exist';
        }

        //else update user ranks

DB::update('update  wafutech_ranking_rank_user
 set rank_id=? where user_id =?',[$newRank->id,$user->id]);        

        	
});
  //Process user RPS earned from question upvotes in the stackexchange

Event::listen('wafutech.stackexchange.QuestionVoteEvent', function($question,$vote,$voter,$url) {
	$author = Question::where('id',$question)->first();
	if(!$author)
	{
		return false;
	}
	//Check if the is an upvote and award rps to the author of the question
	if($vote==1)
	{
		//Get rps type
		$rpsType = RPSType::where('code','UV')->first();
		$rps = new RPS;
		$rps->from_user_id = $voter;
		$rps->to_user_id = $author->user_id;
		$rps->rps_type_id = $rpsType->id;
		$rps->rps = $rpsType->points;
		$rps->url = $url;
		$rps->save();
		//Next send notfication to the user to inform him that has earned an upvote that has earned some rps
		//mailing login goes here...

	}

        		


});

    }

    public function pluginDetails()
    {
        return [
            'name'        => 'Ranking',
            'description' => 'Tally and assign rank to technical users through site ranked activities such as answering questions in the stackExchange, posting useful questions or blog posts, authoring helpful applications such as plugins and much more.',
            'author'      => 'wafutech',
            'icon'        => 'icon-graduation-cap'
        ];
    }

    public function registerComponents()
    {
    	
    }

    public function registerSettings()
    {
    }
}
