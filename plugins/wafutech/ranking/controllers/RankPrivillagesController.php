<?php namespace Wafutech\Ranking\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Input;
use Wafutech\Ranking\Models\RankPrivillage;


/**
 * Rank Privillages Controller Back-end Controller
 */
class RankPrivillagesController extends Controller
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

        BackendMenu::setContext('Wafutech.Ranking', 'ranking', 'rankprivillagescontroller');
    }

    //List ranks
    public function index()
    {
        $privillages = Rank::all();
        return $privillages;
    }

    //Create new rank privillage

    public function store(Request $request)

    {
        $privillages = $request->all();
        $privillages = RankPrivillage::create($privillages);
        return 'Rank Privillage Created!';
    }

    //Edit Rank privillage

    public function edit($id)
    {
        $privillage = RankPrivillage::findOrFail($id);
        return $privillage;
    }

//Update rank privillage record
    public function update(Request $request, $id)
    {
           $input = $request->all();
            $privillage = RankPrivillage::findOrFail($id);
            $privillage->update($input);
            return $privillage;


    }

    //Delete rank privillage
    public function destroy($id)
    {
        $privillage = RankPrivillage::findOrFail($id);
        $privillage->delete();
        return 'Rank Privillage Deleted!';

    }
}
