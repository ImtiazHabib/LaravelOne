<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// ---------------- Course ----------------- CRUD apis start

Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    
    // get all course informations
Route::get('/allcourse','App\Http\Controllers\Api\ApiController@allcourse');
// create new course -- for now only three items
Route::post('/create_course','App\Http\Controllers\Api\ApiController@create_course');

// edit specific course 
Route::put('/edit_course','App\Http\Controllers\Api\ApiController@edit_course');

// delete specific course 
Route::delete('/delete_course/{id}','App\Http\Controllers\Api\ApiController@delete_course');

    });

Route::post("/login",[UserController::class,'index']);



// ---------------- Course ----------------- CRUD apis end



