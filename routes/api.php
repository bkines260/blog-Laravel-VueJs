<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API  routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); 

Route::apiResource('posts','PostController');
Route::apiResource('categories','CategoryController');

Route::get('categories/{slug}/posts','PostController@categoryPosts');
Route::get('searchposts/{query}','PostController@searchPosts');

Route::post('login','UserController@login');
Route::post('register', 'UserController@register');

Route::middleware('auth:sanctum')->group(function () {    
    Route::get('user','UserController@details');
    Route::post('comment/create','CommentController@store');
});
Route::group(['prefix'=>'/admin', 'middleware'=>'auth:sanctum'],function(){
    Route::get('posts','AdminController@getPosts');

});