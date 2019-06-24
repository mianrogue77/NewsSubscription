<?php

use Illuminate\Http\Request;

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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

/*
 * User Controller
 */
Route::resource('users', 'User\UserController', [ 'except' => ['create', 'edit'] ]);

/*
 * News Controller
 */
Route::resource('news', 'News\NewsController', [ 'only' => ['index', 'store', 'show'] ]);

/*
 * Topic Controller
 */
Route::resource('topics', 'Topic\TopicController', [ 'except' => ['create', 'edit'] ]);
