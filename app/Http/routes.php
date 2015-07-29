<?php
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\NHIFController;
use App\Http\Controllers\HospitalsController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SMSController;
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

Route::get('sms', function()
{

    $phone = Request::input('phoneNumber');

    $message = Request::input('message');

    $result = (new SMSController())->process_received($phone, $message);

    if($result==null){
        //do nothing
        return null;
    }



    return $result;
});

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
Route::get('/filter_feed', function()
{
    $tag = Request::input('tag');
    return (new WelcomeController())->filter_feed($tag);
});
Route::get('/reverse_geocode', function()
{
    $q = Request::input('q');
    return (new HospitalsController())->reverse_geocode($q);
});
Route::get('nhifcoverage', function()
{
    $type = Request::input('type');
    $gps = Request::input('gps');
    $address = Request::input('address');

    return NHIFController::coverage($type, $gps, $address);
});
Route::get('specialty', function()
{
    $specialty = Request::input('specialty');
    $county = Request::input('county');

    return HospitalsController::specialty($specialty, $county);
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