<?php namespace Wafutech\Stackexchange\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Wafutech\Stackexchange\Models\Answer as Answer;
use Wafutech\Stackexchange\Models\Usefulanswer as Usefulanswer;
use Illuminate\Support\Facades\Input;
use Validator;
use Illuminate\Http\Request as Request;
use DB;
use Auth;

class Answers extends Controller
{
    public $implement = [    ];
    
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Wafutech.Stackexchange', 'stack-exchange');
    }

    //Post new answer

    public function newAnswer(Request $request)

    {
    	$rules =
    	[
    		'answer'=>'required|unique:wafutech_stackexchange_answers',
    	];

    	 $validator = Validator::make(Input::all(), $rules);

     // Return back to form w/ validation errors & session data as input

     if($validator->fails()) {
        return $validator->messages();

    }

    	$answer = new Answer;
    	$answer->question_id = $request->question_id;
    	$answer->user_id = 1;
    	$answer->answer = $request->answer;
    	$answer->save();
    	//Fire stack exchange response event
    	//Then pass back the posted answer to the view for immediate rendering with an ajax call
    	return $answer->answer;


    }

    //Owners of the answers or other users with permissions to edit other people's answers can do so.

    public function updateAnswer(Request $request,$id)
    {
    	//Fetch new input data
    	$input = $request->all();
    	//find the answer by id from database model
    	$answer = Answer::findOrFail($id);
    	//then update the answer with new input
    	$answer->update($input);
    	//If the editor is not the owner, fire the event to notify the owner about this development
    	//Event::Fire(AnswerUpdatedEvent($owner,$editor))

    	//Return updated version to the user

    	return $answer;
    }

    //Users with permissions can also remove an answer

    public function deleteAnswer($id)
    {
    	$answer = Answer::findOrFail($id);
    	$answer->delete();

    	return 'Answer removed!';
    }

    public function acceptedAnswer(Request $request,$id)
    {
    	//Method marks the answer as accepted. The only user with permission to do this the owner of the question
    	
    $user = 2;//Auth::getUser()->id;
    $question = Answer::findOrFail($id);

    $answer = DB::table('wafutech_stackexchange_answers')
    ->join('wafutech_stackexchange_questions','wafutech_stackexchange_answers.question_id','wafutech_stackexchange_questions.id','wafutech_stackexchange_answers.question_id')
    ->first();

    if($user==$answer->user_id and $question->question_id==$answer->question_id)
    {
    	//First the question already has accepted answer

    $alreadyAccepted = Answer::where('question_id',$question->question_id)->where('accepted',1);
    if($alreadyAccepted)
    {
    	return 'You already accepted an answer for this question';
    }
    	//Then update the answer as accepted
    	DB::update('update wafutech_stackexchange_answers set accepted=? where id =?',[1,$id]); 
    

    //Fire some events to inform the author of the answer that has been accepted and has earned him some reputation points
    //Event::Fire(some event)
    return 'You accepted the answer, question closed! thank you for joining TechMix';

    }

    return 'Only the author of the question can mark answer as accepted';
    


    }

    public function usefulAnswer(Request $request,$id)

    {
    	$answer = Answer::findOrFail($id);

    	$doubleEndorsement = Usefulanswer::where('user_id',1)
    		->where('question_id',$answer->question_id)
    		->get();
    		if(count($doubleEndorsement)!=0)
    		{
    			return 'You cannot endorse same answer twice or more than one answer on the same question';
    		}

    		$usefulAnswer = new Usefulanswer;
    		$usefulAnswer->user_id =1;
    		$usefulAnswer->question_id = $answer->question_id;
    		$usefulAnswer->answer_id = $id;
    		$usefulAnswer->save();

    		//Fire some notification events and rps update events

    		return 'Thank you for liking my answer';

    }
}
