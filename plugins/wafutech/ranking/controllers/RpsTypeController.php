<?php namespace Wafutech\Ranking\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Wafutech\Ranking\Models\RpsType;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Input;


/**
 * Rps Type Controller Back-end Controller
 */
class RpsTypeController extends Controller
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

        BackendMenu::setContext('Wafutech.Ranking', 'ranking', 'rpstypecontroller');
    }

     //List ranks
    public function index()
    {
        $types = RpsType::all();
        return $types;
    }

    //Create new type

    public function store(Request $request)

    {
        $types = $request->all();
        $types = RpsType::create($types);
        return 'RPS Type Created!';
    }

    //Edit type

    public function edit($id)
    {
        $type = RpsType::findOrFail($id);
        return $type;
    }

//Update rps type record
    public function update(Request $request, $id)
    {
           $input = $request->all();
            $type = RpsType::findOrFail($id);
            $type->update($input);
            return $type;


    }

    //Delete rps type
    public function destroy($id)
    {
        $type = RpsType::findOrFail($id);
        $type->delete();
        return 'RPS Type Deleted!';

    }
}
