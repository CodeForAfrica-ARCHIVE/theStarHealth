<?php
namespace App\Http\Controllers;

class SMSController extends Controller
{
    public static function process_received($phone, $message)
    {

        //log message

        //check if has phone number
        if($phone=="") {
            return null;
        }

        //clean message
        $trimmed_message = trim($message);

        //check if message is empty
        if(strlen($trimmed_message)<1){
            $response = "Allowed message formats:\n";
            $response .= "1. Doctor James Gicheru for registration info\n";
            $response .= "2. XRay in Kiambu for health services";

            return $response;
        }

        //check for keywords
        //process according to keyword
        //return response
        return $response;

    }
}