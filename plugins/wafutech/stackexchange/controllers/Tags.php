<?php namespace Wafutech\Stackexchange\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Wafutech\Stackexchange\Models\Tag as Tag;
use Illuminate\Http\Request as Request;
use Validator;
use Illuminate\Support\Facades\Input;




class Tags extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Wafutech.Stackexchange', 'stack-exchange');
    }

    //Lists tags from the Tag model
    public function index()
    {
    	$tags = Tag::all();
    	return $tags;
    }

    //Store new tag record

    public function store(Request $request)

    	{
    		 $validation_rules = array(

          'tag'           => 'required|string|unique:wafutech_stackexchange_tags',
          'approved'           => 'required|numeric',          
         

      );

    $validator = Validator::make(Input::all(), $validation_rules);

     // Return back to form w/ validation errors & session data as input

     if($validator->fails()) {
        return $validator->messages();

    }
    		$tag = new Tag;
    		$tag->tag = $request->tag;
    		$tag->approved = $request->approved;
    		$tag->save();
    		return 'Tag created!';

    	}

   //Show a single tag

    public function show($id)
    {
    	$tag = Tag::findOrFail($id);
    	return $tag;
    }

    //update a tag
    public function update(Request $request, $id)
    {
    	$input = $request->all();
    	$tag = Tag::findOrFail($id);
    	$tag->update($input);
    	return $tag();

    }

    //delete a tag

    public function destroy($id)
    {
    	  $tag = Tag::findOrFail($id);
    	  $tag->delete();
    	  return 'Tag removed!';

    }


}
