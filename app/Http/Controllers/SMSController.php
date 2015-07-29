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
            $response = $this->error_message(null, true);

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
        return $response;

    }

    public function location_tags(){
        return array("City");
    }

    public function error_message($message=null, $isEmpty=false){

        if($isEmpty){
            $response = "Example query formats:\n";
            $response .= "1. Doctor James Gicheru\n";
            $response .= "2. X-Ray in Kiambu\n";
            $response .= "3. NHIF in Karatina\n";
        }else if($message != null){
            $response = $message;
        }else{
            $response = "Could not understand your request. Please try the web services at http://health.the-star.co.ke";
        }

        return $response;
    }

    public function find_nhif_coverage($message){

        $location = $this->get_location($message);

        if($location == null){
            return $this->error_message("Could not decode location");
        }else{
            //Get NHIF coverage
            return NHIFController::coverage("0", "", $location);
        }

    }

    public function get_location($message){

        $found = false;

        $found_location = $this->find_entities($message);

        if ($found_location != null) {

            if (count($found_location) != 0) {
                foreach ($found_location as $item) {
                    if (in_array($item["type"], $this->location_tags())) {
                        //return first location
                        $response = $item["text"];
                        $found = true;
                        break;
                    }
                }

            }
        }

        if($found==false && $this->has_location_adj($message)){

                $response = $this->process_for_location($message);
                return $response;

        }else if($found == false) {

            return null;

        }
        return $response;

    }



    public function find_doctor($message){

    }

    public function find_facilities($message){

    }

    public function find_doctor_by_name($name){

    }

    public function find_facilities_by_location($address){

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
    }

    public function has_doctor_keywords($message){

        $doctor_keywords = $this->doctor_keywords();

        return $this->array_element_in_string($message, $doctor_keywords);
    }

    public function doctor_keywords(){
        return array("doctor", "daktari", "laktar", "dr.", "daktar");
    }

    public function nhif_keywords(){
        return array("nhif", "nihf", "nhfi");
    }

    public function has_nhif_keywords($message){

        $nhif_keywords = $this->nhif_keywords();

        return $this->array_element_in_string($message, $nhif_keywords);
    }
    public function has_location_adj($message){
        $loc_adjs = $this->location_adjectives();

        return $this->array_element_in_string($message, $loc_adjs);

    }

    public function array_element_in_string($string, $array){

        foreach($array as $key){

            if($this->string_in_string($string, $key)){
                return true;
                break;
            }

        }
        return false;

    }

    public function string_in_string($string, $key){
        if (strpos($string, $key) !== false){
            return true;
        }else{
            return false;
        }
    }

    public function location_adjectives(){
        return array("in", "near", "around", "next to", "at");
    }

    public function process_for_location($message){
        //Hopefully it doesn't come to this
        for($i=0; $i<count($this->location_adjectives()); $i++){
            $separator = $this->location_adjectives()[$i];
            if($this->string_in_string($message, $separator)){
                $location = explode(" ".$separator." ", $message);
                if(count($location)>0){
                    return $location[1];
                }
            }
        }
        return null;
    }
}