<?php namespace Wafutech\Ranking\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Input;
use RainLab\User\Models\User;
use Wafutech\Ranking\Models\Rank;
use Wafutech\Ranking\Models\RankUser;
use Wafutech\Ranking\Models\RPS;
use Wafutech\Ranking\Models\RPSType;
use Wafutech\Ranking\Models\UserRps;
use Wafutech\Ranking\Models\RankWithPrivillage;
use Wafutech\Ranking\Models\RankPrivillage;
use Event;
use Wafutech\Ranking\Events\Test;



/**
 * Ranking Controller Back-end Controller
 */
class RankingController extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Wafutech.Ranking', 'ranking', 'rankingcontroller');
    }

    /**
    Assigns rank to user based on users rps points
    */

    public function assignUserRPS(Request $request)

    {
        /**
        Assigns user RPS Points

        */
        $rpsType = RPSType::where('id',$request->id)->first();
        $fromUser = $user->id;
        $toUser = $request->$toUser;
        //check if the user already assigned rps on the subject
        $rps = new RPS;
        $rps->to_user_id = $toUser;
        $rps->from_user_id = $fromUser;
        $rps->rps_type_id = $rpsType->id;
        $rps->url = $request->url;
        $rps->save();
        //Rainlab user auth events
        //rainlab.user.register
        //rainlab.user.login
        //Socila login
        //flynsarmy.sociallogin.afterRegister
        



        return 'success';
    }




}
