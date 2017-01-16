<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/yy',function(){
// 	return 'yy123';
// });

// Route::post('/zz',function(){
// 	return 'zz123';
// });
// Route::get('/', function () {
//     return 'hello';
// });
// Route::match(['get','post'],'/user',function(){
// 	return 'match route';
// });

Route::any('/test',function(){
	return 'test hello world';
});

Route::get('user/{id}/{name}',function($id,$name){
	return $id."-".$name;
});
// Route::get('user/{name?}',function($name='john'){
// 	return $name;
// });
// Route::get('user/{name}',function($name){
// 	return $name;
// })->where('name','[A-Za-z]+');

// Route::get('user/{id}',function($id){
// 	return $id;
// })->where('id','[0-9]+');

Route::get('user/{id}/{name}',function($id,$name){
	return $id.'   '.$name;
})->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);