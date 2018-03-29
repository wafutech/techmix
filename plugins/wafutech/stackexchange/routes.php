<?php
use Wafutech\Stackexchange\Controllers\Tags;
use Wafutech\Stackexchange\Models\QuestionTag as QuestionTag;
//Pass the route to index action in Tags Controller and retrive all question tags;
Route::get('api/tags','Wafutech\Stackexchange\Controllers\Tags@index');

//Create new tag record
Route::post('apiv1/tags','Wafutech\Stackexchange\Controllers\Tags@store');

//Show A single tag

Route::get('apiv1/tags/{id}','Wafutech\Stackexchange\Controllers\Tags@show');

//Delete a tag by id

Route::delete('apiv1/tags/{id}','Wafutech\Stackexchange\Controllers\Tags@destroy');

//Update question tags

Route::put('apiv1/tags/{id}','Wafutech\Stackexchange\Controllers\Tags@update');

/*-------------------------
* STACK QUESTIONS API ROUTES
--------------------------*/

//Fetch all questions
Route::get('apiv1/questions',
	'Wafutech\Stackexchange\Controllers\Questions@index');
//Post new question

Route::post('apiv1/questions','Wafutech\Stackexchange\Controllers\Questions@store');

//Show question details

Route::get('apiv1/questions/{id}',
	'Wafutech\Stackexchange\Controllers\Questions@show');
//Update question
Route::put('apiv1/questions/{id}',
	'Wafutech\Stackexchange\Controllers\Questions@update');

//Delete question
Route::delete('apiv1/questions/{id}',
	'Wafutech\Stackexchange\Controllers\Questions@destroy');

/*-------------------------
* STACK QUESTIONS CATEGORIES API ROUTES
--------------------------*/
//List  all question categories
Route::get('apiv1/question/categories',
	'Wafutech\Stackexchange\Controllers\QuestionCategories@index');
//List a single category
Route::get('apiv1/question/categories/{id}',
	'Wafutech\Stackexchange\Controllers\QuestionCategories@show');
//Post new question category
Route::post('apiv1/question/categories',
	'Wafutech\Stackexchange\Controllers\QuestionCategories@store');

//update exisiting question category

Route::put('apiv1/question/categories/{id}',
	'Wafutech\Stackexchange\Controllers\QuestionCategories@update');

//Delete question category

Route::delete('apiv1/question/categories/{id}',
	'Wafutech\Stackexchange\Controllers\QuestionCategories@destroy');
Route::get('apiv1/question/withanswers',
	'Wafutech\Stackexchange\Controllers\Questions@questionsWithAnswers');

Route::get('apiv1/question/votes/{id}',
	'Wafutech\Stackexchange\Controllers\Questions@questionVote');

/*-------------------------
* STACK QUESTIONS ANSWERS API ROUTES
--------------------------*/

//Post new answer
Route::post('apiv1/question/answers',
	'Wafutech\Stackexchange\Controllers\Answers@newAnswer');

//Update answer

Route::put('apiv1/question/answers/{id}',
	'Wafutech\Stackexchange\Controllers\Answers@updateAnswer');

//Delete answer
Route::delete('apiv1/question/answers/{id}',
	'Wafutech\Stackexchange\Controllers\Answers@deleteAnswer');

//Mark answer as useful
Route::get('apiv1/question/answers/useful/{id}',
	'Wafutech\Stackexchange\Controllers\Answers@usefulAnswer');

//Accept answer
Route::get('apiv1/question/answers/accepted/{id}',
	'Wafutech\Stackexchange\Controllers\Answers@acceptedAnswer');

//check for question tags if actually exists

/*Route::get('apiv1/question/tags',function()
{
$tags = QuestionTag::all();
return $tags;
});*/






