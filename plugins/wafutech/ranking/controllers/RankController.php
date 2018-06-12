<?php namespace Wafutech\Ranking\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Wafutech\Ranking\Models\Rank;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Input;
use Event;
use Wafutech\Ranking\Events\Test;

/**
 * Rank Controller Back-end Controller
 */
class RankController extends Controller
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

        BackendMenu::setContext('Wafutech.Ranking', 'ranking', 'rankcontroller');
    }

    //List ranks
    public function index()
    {
        $ranks = Rank::all();
        return $ranks;
       

    }

    //Create new rank

    public function store(Request $request)

    {
        $ranks = $request->all();
        $ranks = Rank::create($ranks);
        return 'Rank Created!';
    }

    //Edit Rank

    public function edit($id)
    {
        $rank = Rank::findOrFail($id);
        return $rank;
    }

//Update rank record
    public function update(Request $request, $id)
    {
           $input = $request->all();
            $rank = Rank::findOrFail($id);
            $rank->update($input);
            return $rank;


    }

    //Delete rank
    public function destroy($id)
    {
        $rank = Rank::findOrFail($id);
        $rank->delete();
        return 'Rank Deleted!';

    }
}
