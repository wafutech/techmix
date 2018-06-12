<?php
//Route::group(['middleware'=>'jwt.auth:api'],function()
//{
	//List Ranks
	Route::get('api/v1/ranks','Wafutech\Ranking\Controllers\RankController@index');
	//Create new rank
	Route::post('api/v1/ranks','Wafutech\Ranking\Controllers\RankController@store');

	Route::post('api/v1/assign-rank','Wafutech\Ranking\Controllers\RankingController@assignUserRank');

//});
