<?php namespace Wafutech\Stackexchange\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Wafutech\Stackexchange\Models\Answer as Answer;
use Wafutech\Stackexchange\Models\Usefulanswer as Usefulanswer;


use Illuminate\Http\Request as Request;
use Validator;
use Illuminate\Support\Facades\Input;
use DB;

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

    public function updateAnswer(Request $request)
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

    public function acceptedAnswer(Request $request)
    {
    	//Method marks the answer as accepted. The only user with permission to do this the owner of the question

    $user = Auth::getUser()->id;
    $answer = DB::table('wafutech_stackexchange_answers')
    ->join('wafutech_stackexchange_questions','wafutech_stackexchange_answers.question_id','wafutech_stackexchange_questions.id','wafutech_stackexchange_answers.question_id')
    ->first();
    if($user==$answer->user_id and $request->question_id==$answer->question_id)
    {
    	//Then update the answer as accepted
    $answer = Answer::findOrFail($request->answer_id);
    $answer->accepted->update(1);

    //Fire some events to inform the author of the answer that has been accepted and has earned him some reputation points
    //Event::Fire(some event)
    return 'You accepted the answer, question closed! thank you for joining TechMix';

    }
    


    }

    public function usefulAnswer(Request $request)

    {
    	$doubleEndorsement = Usefulanswer::where('user_id',Auth::getUser()->id)
    		->where('question_id',$request->question_id)
    		->get();
    		if($doubleEndorsement)
    		{
    			return 'You cannot endorse same answer twice or more than one answer on the same question';
    		}

    		$usefulAnswer = new Usefulanswer;
    		$usefulAnswer->user_id =Auth::getUser()->id;
    		$usefulAnswer->question_id = $request->question_id;
    		$usefulAnswer->answer_id = $request->answer_id;
    		$usefulAnswer->save();

    		//Fire some notification events and rps update events

    		return 'Thank you for liking my answer';

    }
}
