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

/*$user = App\User::findOrFail(1);
Mail::send('emails.test', ['user' => $user], function ($m) use ($user) {
    $m->from('hello@app.com', 'Your Application');

    $m->to($user->email, $user->name)->subject('Your Reminder!');
});*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/statistics', function () {
    return view('statistics');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/my-profile', function () {
    return view('myprofile');
});

Route::get('/donate', function () {
    return view('donate');
});

Route::get('/thankyou', function () {
    return view('thankyou');
});

Route::auth();

Route::get('/home', 'HomeController@index');

/*
 * Route for verifying registered users
 *
 */

Route::get('register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'RegistrationController@confirm'
]);

Route::group(['middleware' => 'auth'], function(){
    Route::resource('/post', 'PostsController');
    Route::get('/my_posts', 'PostsController@my_index');
    Route::post('/post_reply', 'PostRepliesController@create');
    Route::post('/solution_select/{id}', 'PostRepliesController@select_solution');

    Route::get('/me', 'UserController@index');
    Route::post('/me', 'UserController@update');

    Route::get('/listusers', 'UserController@listallusers');

    Route::get('/user/{id}', 'UserController@singleuser');
});

Route::get('/post', 'PostsController@index');




