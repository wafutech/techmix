<?php namespace Wafutech\Stackexchange\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Wafutech\Stackexchange\Models\Question as Question;
use Wafutech\Stackexchange\Models\QuestionTag as QuestionTag;
use Wafutech\Stackexchange\Models\QuestionVote as QuestionVote;

use Illuminate\Http\Request as Request;
use Validator;
use Illuminate\Support\Facades\Input;
use DB;
use BackendAuth;
use October\Rain\Database\ModelException; use RainLab\User\Facades\Auth
use RainLab\User\Classes\AuthManager\User as User;

/**
 * Questions Back-end Controller
 */
class Questions extends Controller
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

        BackendMenu::setContext('Wafutech.Stackexchange', 'stackexchange', 'questions');
    }


    //List questions

    public function index()
    {
        $questions = DB::table('wafutech_stackexchange_questions')
        ->join('wafutech_stackexchange_question_categories','wafutech_stackexchange_questions.category_id','wafutech_stackexchange_questions.category_id','wafutech_stackexchange_question_categories.id')
        ->join('wafutech_stackexchange_question_tags','wafutech_stackexchange_questions.id','wafutech_stackexchange_question_tags.question_id','wafutech_stackexchange_questions.id')
        ->orderBy('created_at','desc')
        ->get();

        if(empty($questions))
        {
            return 'No questions so far, be the first one to post';
        }

        return $questions;
    }


    //Create a question
    public function store(Request $request)
    {
        //Validate user input

         $rules = [
            'question'           => 'required|string|unique:wafutech_stackexchange_questions',
          'category_id'           => 'required',
            'question_detail' =>'required|string',
            'tags'=>'required',
                ];

                $validator = Validator::make(Input::all(), $rules);

     // Return back to form w/ validation errors & session data as input

     if($validator->fails()) {
        return $validator->messages();

    }
        $question = new Question;
        $question->question = $request->question;
        $question->question_detail = $request->question_detail;
        $question->category_id = $request->category_id;
        $question->user_id =1;// Auth::getUser();
        $question->save();

        //Save each question with its tags
        $tags = $request->tags;
       for($i=0;$i<count($tags);$i++)
       {
        $tag = new QuestionTag;
        $tag->question_id = $question->id;
        $tag->tag_id =$tags[$i];
        $tag->save();
       }

        return 'Question Posted, wait for response from the community!';


    }

    public function show($id)
    {
        /*$question = DB::table('wafutech_stackexchange_questions')
        ->join('wafutech_stackexchange_question_categories','wafutech_stackexchange_questions.category_id','wafutech_stackexchange_questions.category_id','wafutech_stackexchange_question_categories.id')
        ->join('wafutech_stackexchange_question_tags','wafutech_stackexchange_questions.id','wafutech_stackexchange_question_tags.question_id','wafutech_stackexchange_questions.id')
        ->where('wafutech_stackexchange_questions.id',$id)
        ->first();*/
        $question = Question::with(['answers','tags'])->where('wafutech_stackexchange_questions.id',$id)->first();

        return $question;
    }

    public function update(Request $request,$id)
    {
        $input = $request->all();
        $question = Question::findOrFail($id);
        $question->update($input);
        return $question;
    }

    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();
        return 'Question removed by'.BackendAuth::getUser()->id;
    }

    //Fetch questions with answers
    public function questionsWithAnswers()
    {
        $questions = Question::with('answers')->get();
        return $questions;
    }

    //Vote on questions

    public function questionVote($id)
    {
       $votes = 1;
        $alreadyVoted = QuestionVote::where(['question_id',$id,'user_id',1])->first();
        if($alreadyVoted)
        {
            return 'You already voted on this question';
        }

        $vote = new QuestionVote;
        $vote->question_id = $id;
        $vote->user_id = 1;
        $vote->vote = $votes;
        $vote->save();

        return 'Voting Successful';


    }

}
