<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
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
Route::resource('/images', ImageController::class);
Route::get('pagered/{id}', 'App\Http\Controllers\PageRedController@index');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/pagered', 'App\Http\Controllers\PageRedController@store')->name('pagered.store');
Route::get('/page', 'PageController@index');
Route::post('/page', 'PageController@store');
Route::put('/page/{id}', 'PageController@update');
Route::delete('/page/{id}', 'PageController@destroy');
Route::get('/social', 'SocialNetworkController@index');

