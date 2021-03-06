<?php
use Wafutech\Stackexchange\Controllers\Tags;
use Wafutech\Stackexchange\Models\QuestionTag as QuestionTag;
use Wafutech\Stackexchange\Models\Answer as Answer;
use Rainlab\User\Models\User as ExtUser;


//Pass the route to index action in Tags Controller and retrive all question tags;
Route::get('api/tags','Wafutech\Stackexchange\Controllers\Tags@index');

//Create new tag record
Route::post('api/v1/tags','Wafutech\Stackexchange\Controllers\Tags@store');

//Show A single tag

Route::get('api/v1/tags/{id}','Wafutech\Stackexchange\Controllers\Tags@show');

//Delete a tag by id

Route::delete('api/v1/tags/{id}','Wafutech\Stackexchange\Controllers\Tags@destroy');

//Update question tags

Route::put('api/v1/tags/{id}','Wafutech\Stackexchange\Controllers\Tags@update');

/*-------------------------
* STACK QUESTIONS API ROUTES
--------------------------*/

//Fetch all questions
Route::get('api/v1/questions',
	'Wafutech\Stackexchange\Controllers\Questions@index');//->middleware('\Tymon\JWTAuth\Middleware\GetUserFromToken');
//Post new question

Route::post('api/v1/questions','Wafutech\Stackexchange\Controllers\Questions@store');

//Show question details

Route::get('api/v1/questions/{id}',
	'Wafutech\Stackexchange\Controllers\Questions@show');
//Update question
Route::put('api/v1/questions/{id}',
	'Wafutech\Stackexchange\Controllers\Questions@update');

//Delete question
Route::delete('api/v1/questions/{id}',
	'Wafutech\Stackexchange\Controllers\Questions@destroy');

/*-------------------------
* STACK QUESTIONS CATEGORIES API ROUTES
--------------------------*/
//List  all question categories
Route::get('api/v1/question/categories',
	'Wafutech\Stackexchange\Controllers\QuestionCategories@index');
//List a single category
Route::get('api/v1/question/categories/{id}',
	'Wafutech\Stackexchange\Controllers\QuestionCategories@show');
//Post new question category
Route::post('api/v1/question/categories',
	'Wafutech\Stackexchange\Controllers\QuestionCategories@store');

//update exisiting question category

Route::put('api/v1/question/categories/{id}',
	'Wafutech\Stackexchange\Controllers\QuestionCategories@update');

//Delete question category

Route::delete('api/v1/question/categories/{id}',
	'Wafutech\Stackexchange\Controllers\QuestionCategories@destroy');
Route::get('api/v1/question/withanswers',
	'Wafutech\Stackexchange\Controllers\Questions@questionsWithAnswers');

Route::post('api/v1/question/votes/{id}',
	'Wafutech\Stackexchange\Controllers\Questions@questionVote');

/*-------------------------
* STACK QUESTIONS ANSWERS API ROUTES
--------------------------*/
//List answers
Route::get('api/v1/answers',function(){
$answers = ExtUser::all();
return $answers;
});
//Post new answer
Route::post('api/v1/question/answers',
	'Wafutech\Stackexchange\Controllers\Answers@newAnswer');
//Update answer

Route::put('api/v1/question/answers/{id}',
	'Wafutech\Stackexchange\Controllers\Answers@updateAnswer');

//Delete answer
Route::delete('api/v1/question/answers/{id}',
	'Wafutech\Stackexchange\Controllers\Answers@deleteAnswer');

//Mark answer as useful
Route::get('api/v1/question/answers/useful/{id}',
	'Wafutech\Stackexchange\Controllers\Answers@usefulAnswer');

//Accept answer
Route::get('api/v1/question/answers/accepted/{id}',
	'Wafutech\Stackexchange\Controllers\Answers@acceptedAnswer');

//check for question tags if actually exists

/*Route::get('api/v1/question/tags',function()
{
$tags = QuestionTag::all();
return $tags;
});*/






