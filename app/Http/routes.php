<?php
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\NHIFController;
use App\Http\Controllers\HospitalsController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SMSController;
use App\Http\Controllers\GenerateJSONController;
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

/*
 * Generate featured news
 */
Route::get('generateJSONFeed', function()
{
    (new GenerateJSONController())->index();
});


Route::get('sms', function()
{

    $phone = Request::input('phoneNumber');

    $message = Request::input('message');

    $result = (new SMSController())->process_received($phone, $message);

    $result = (new SMSController())->send_response($phone, $result);

    //return $result;
});

Route::get('getDoctors', function()
{
    $term = Request::input('q');

    $result = '';

    if(isset($term)){
        $result = (new DoctorsController())->getData($term, false);
    }

    return $result;
});

Route::get('singleDoctor', function()
{
    $term = Request::input('q');

    $result = '';

    if(isset($term)){
        $result = str_replace("\n", "<br />", (new DoctorsController())->singleDoctor($term));
    }

    return $result;
});

Route::get('getClinics', function()
{
    $term = Request::input('q');

    $result = '';

    if(isset($term)){
        $result = str_replace("\n", "<br />", (new HospitalsController())->getClinic($term, false));
    }

    return $result;
});

Route::get('singleClinic', function()
{
    $term = Request::input('q');

    $result = '';

    if(isset($term)){
        $result = str_replace("\n", "<br />", (new HospitalsController())->singleClinic($term));
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

    return str_replace("\n", "<br />", NHIFController::coverage($type, $gps, $address, false));
});
Route::get('specialty', function()
{
    $specialty = Request::input('specialty');
    $gps = Request::input('gps');
    $address = Request::input('address');

    return str_replace("\n", "<br />", HospitalsController::specialty($specialty, $gps, $address, false));
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
