<?php
use App\Http\Controllers\DoctorsController;
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

Route::get('/', 'WelcomeController@index');


Route::get('getDoctors', function()
{
    $term = Request::input('q');

    $result = '';

    if(isset($term)){
        $result = DoctorsController::getData($term);
    }

    return $result;
});
Route::get('singleDoctor', function()
{
    $term = Request::input('q');

    $result = '';

    if(isset($term)){
        $result = DoctorsController::singleDoctor($term);
    }

    return $result;
});

Route::get('profile', [
    'middleware' => 'auth',
    'uses' => 'UserController@showProfile'
]);

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);