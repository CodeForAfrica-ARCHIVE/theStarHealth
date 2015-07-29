<?php
namespace App\Http\Controllers;

class SMSController extends Controller
{
    public function process_received($phone, $message)
    {

        //log message

        //check if has phone number
        if($phone=="") {
            return null;
        }

        //clean message
        $message = trim($message);

        //check if message is empty
        if(strlen($message)<1){
            $response = "Allowed message formats:\n";
            $response .= "1. Doctor James Gicheru for registration info\n";
            $response .= "2. XRay in Kiambu for health services";

            return $response;
        }

         if($this->find_keywords($message)!=null){

             

         }else {

             //check for keywords
             //TODO: What if message has both keywords?
             if ($this->has_doctor_keywords(strtolower($message))) {

                 $response = $this->check_if_registered($message);

             } else if ($this->has_health_keywords($message)) {

                 $response = $this->check_for_health_services($message);

             } else {

                 $response = "Could not understand your request. Please go to http://health.the-star.co.ke for the web services.";

             }

         }
        //process according to keyword
        //return response
        return $response;

    }

    public function find_keywords($message){
        $alchemyapi = new \AlchemyAPI();

        $response = $alchemyapi->entities("text", $message, null);

        if ($response['status'] == 'OK') {

            foreach ($response['entities'] as $entity) {

            }

        }else{
            return null;
        }

        return $response;
    }

    public function has_doctor_keywords($message){

        $doctor_keywords = array("doctor", "daktari", "laktar", "DR", "dr.", "Dr.", "DR.", "daktar");

        foreach($doctor_keywords as $key){

            if (strpos($key, $message) !== false){
                return true;
            }

        }

        return false;

    }
    public function has_health_keywords($message){

    }
    public function check_for_health_services($message){

    }
}