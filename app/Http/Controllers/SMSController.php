<?php
namespace App\Http\Controllers;

class SMSController extends Controller
{
    public function process_received($phone, $message){
        //log message

        //check if has phone number
        if($phone=="") {
            return null;
        }

        //clean message
        $message = trim($message);

        //check if message is empty
        if(strlen($message)<1){
            $response = "Example query formats:\n";
            $response .= "1. Doctor James Gicheru\n";
            $response .= "2. X-Ray in Kiambu";
            $response .= "3. NHIF in Karatina";

            return $response;
        }

        //if has nhif keywords: get location
        if($this->has_nhif_keywords(strtolower($message))){

            $response = $this->find_nhif_coverage($message);

        }else if($this->has_doctor_keywords(strtolower($message))){

            $response = $this->find_doctor($message);

        }else if ($this->has_medical_service_tags($message)){

            $response = $this->find_facilities($message);

        }else {
            //If else fails try Artificial Intelligence
            $found_entities = $this->find_entities($message);

            if ($found_entities != null) {
                //sort by relevance
                if (count($found_entities) == 0) {
                    $response = $this->error_message();
                } else {

                    $found = false;

                    foreach ($found_entities as $item){
                        if ($item["type"] == "Person"){
                            $response = $this->find_doctor_by_name($item["text"]);
                            $found = true;
                            break;
                        }else if(in_array($item["type"], $this->location_tags())){
                            //if has location return nearest facilities
                            $response = $this->find_facilities_by_location($item["text"]);
                            $found = true;
                            break;
                        }
                    }
                    //if nothing found, error
                    if($found == false){
                        $response = $this->error_message();
                    }
                }
            } else {

                $response = $this->error_message();

            }
        }
        //process according to keyword
        //return response
        return $response;

    }

    public function location_tags(){
        return array("City");
    }

    public function error_message(){
        return "Could not understand your request. Please go to http://health.the-star.co.ke for the web services.";
    }

    public function find_nhif_coverage($message){

    }

    public function find_doctor($message){

    }

    public function find_facilities($message){

    }

    public function has_medical_service_tags($message){

    }

    public function find_entities($message){
        $alchemyapi = new \AlchemyAPI();

        $response = $alchemyapi->entities("text", $message, null);

        if ($response['status'] == 'OK') {
            /*//sort by relevance
            usort($response['entities'], function($a, $b) {
                return $a['relevance'] - $b['relevance'];
            });
            */
            return $response['entities'];

        }else{
            return null;
        }

        return $response;
    }

    public function has_doctor_keywords($message){

        $doctor_keywords = array("doctor", "daktari", "laktar", "dr.", "daktar");

        foreach($doctor_keywords as $key){

            if (strpos($key, $message) !== false){
                return true;
            }

        }
        return false;
    }

    public function has_nhif_keywords($message){

        $nhif_keywords = array("nhif", "nihf", "nhfi");

        foreach($nhif_keywords as $key){

            if (strpos($key, $message) !== false){
                return true;
            }

        }
        return false;
    }
}