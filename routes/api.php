<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('groups', 'App\Http\Controllers\GroupController@apiIndex');
Route::post('group/add', 'App\Http\Controllers\GroupController@store');
Route::patch('group/update/{id}', 'App\Http\Controllers\GroupController@update');
Route::get('group/delete/{id}', 'App\Http\Controllers\GroupController@delete');

Route::any('school', 'App\Http\Controllers\SchoolController@apiIndex');




Route::get('/book'          ,       'App\Http\Controllers\BookController@index');
Route::get('/book/{id}'     ,       'App\Http\Controllers\BookController@show');
Route::post('/book'         ,       'App\Http\Controllers\BookController@store');
Route::put('/book/{id}'         ,   'App\Http\Controllers\BookController@update');
Route::delete('/book/{id}'         ,   'App\Http\Controllers\BookController@delete');
