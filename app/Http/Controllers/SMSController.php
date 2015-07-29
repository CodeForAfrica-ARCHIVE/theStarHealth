<?php
namespace App\Http\Controllers;

class SMSController extends Controller
{
    public static function process_received($phone, $message)
    {

        //log message

        //check if values exist
        if($phone==""){
            return null;
        }

        //clean message

        //check for keywords
        //process according to keyword
        //return response
        return $response;

    }
}