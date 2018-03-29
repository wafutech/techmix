<?php namespace Wafutech\Stackexchange\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Wafutech\Stackexchange\Models\QuestionCategory as QuestionCategory;

use Illuminate\Http\Request as Request;
use Validator;
use Illuminate\Support\Facades\Input;
use DB;
use BackendAuth;

/**
 * Question Categories Back-end Controller
 */
class QuestionCategories extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    protected $fillable =['category','description'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Wafutech.Stackexchange', 'stackexchange', 'questioncategories');
    }


    //List all question categories

    public function index()
    {
       
        
            $categories = QuestionCategory::all();
        


        return $categories;
    }

    //list single category

    public function show($id)
    {
        $category = QuestionCategory::findOrFail($id);
        return $category;
    }

    //Create new question category

    public function store(Request $request)
    {
        $rules = [
            'category'           => 'required|string|unique:wafutech_stackexchange_question_categories',
            'description'           => 'required',
                ];
    

    $validator = Validator::make(Input::all(), $rules);

     // Return back to form w/ validation errors & session data as input

     if($validator->fails()) {
        return $validator->messages();

    }

    $category = new QuestionCategory;
    $category->category = $request->category;
    $category->description = $request->description;
    $category->save();
    return 'Category created!';

}


    //update category

    public function update(Request $request,$id)
    {
        $input = $request->all();
        $category = QuestionCategory::findOrFail($id);
        $category->update($input);
        return $category;
    }

    //Delete question category
    public function destroy($id)
    {
        $question = QuestionCategory::findOrFail($id);
        $question->delete();
        return 'Question deleted';
    }
}
