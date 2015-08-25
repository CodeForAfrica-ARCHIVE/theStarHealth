<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
class SMSController extends Controller
{

    public $success = 1;
    public $found = 1;
    public $id = 0;

    public function process_received($phone, $message){
        //log message
        $this->id = $this->log_received($phone, $message);

        $response = null;

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

        }else{
            $specialty = $this->has_medical_service_tags($message);

            if($specialty!=false){
                $response = $this->find_facilities($message, $specialty);
            }else{
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
                                $response = $this->find_facilities_by_location("", "", $item["text"]);
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

        }

        return array("id"=>$this->id, "response"=>$response, "success"=>$this->success, "found"=>$this->found);

    }


    public function location_tags(){
        return array("City");
    }

    public function error_message($type=null, $isEmpty=false){
        $examples = "Example query formats:\n";
        $examples .= "1. Doctor James Gicheru\n";
        $examples .= "2. X-Ray in Kiambu\n";
        $examples .= "3. NHIF in Karatina\n";

        if($isEmpty){
            $response = $examples;
        }else if($type != null){
            if($type == 1){
                $response = "Could not find a doctor with that name.";
            }else if($type == 2){
                $response = "Location could not be understood. Check for spelling mistakes";
            }else{
                $response = "Location could not be understood. Check for spelling mistakes";
            }

        }else{
            $response = "Could not understand your request. Please try the web services at http://health.the-star.co.ke\n".$examples;
            $this->success = 0;
        }

        return $response;
    }

    public function find_nhif_coverage($message){

        $location = $this->get_location($message);

        if($location == null){
            $this->success = 0;
            return $this->error_message(2);
        }else{
            //Get NHIF coverage
            $result = NHIFController::coverage("0", "", $location, true);
            return $this->process_result($result, 1);
        }

    }
    public function find_doctor($message){
        $name = $this->process_for_doctor_name($message);

        return $this->find_doctor_by_name($name);
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

    public function find_facilities($message, $specialty){
        //medical service tag has been found, now find location
        $location = $this->get_location($message);

        if($location == null){
            $this->success = 0;
            return $this->error_message(3);
        }else{
            //we have location, so output results
            return $this->find_facilities_by_location($specialty, "", $location);
        }
    }

    public function find_doctor_by_name($name){

        if($name == null){
            $this->success = 0;
            return $this->error_message(1);
        }else{
            $result = DoctorsController::getData($name, true);
            return $this->process_result($result, 1);
        }
    }

    public function process_result($result, $type){

        if($result == false){
            $this->found = 0;
            return $this->error_message($type);
        }else{
            return $result;
        }
    }

    public function find_facilities_by_location($specialty, $address, $location){
        $result = HospitalsController::specialty($specialty, $address, $location, true);
        return $this->process_result($result, 3);
    }

    public function has_medical_service_tags($message){
        $services_keywords = $this->services_keywords();
        //return $this->array_element_in_string($message, $services_keywords);

        $i = 0;
        foreach($services_keywords as $key){

            //explode by comma first
            $keys = explode(", ", $key);

            foreach($keys as $word) {

                if($this->string_in_string($message, $word)){
                    $service_abbr = $this->services_abbr()[$i];
                    return $service_abbr;
                    break;
                }

            }

            $i++;

        }

        return false;
    }

    public function services_abbr(){
        return array("ANC", "ART", "BEOC", "BLOOD", "CAES SEC", "CEOC", "C-IMCI", "EPI", "FP", "GROWM", "HBC", "HCT", "IPD", "OPD", "OUTREACH", "PMTCT", "RAD/XRAY", "RHTC/RHDC", "TB DIAG", "TB LABS", "TB TREAT", "YOUTH");

    }

    public function services_keywords(){
        return array("Antenatal Care, antenatal, pregnant, pregnancy", "Anteretroviral, anteretrovials, ARV, ARvs", "Beoc", "Blood", "Caeserean section, Caeserean", "Ceoc", "C-IMCI", "Epidemiology", "Family planning", "GROWM", "Heamogram, blood test", "Heamatocrit, anaemia", "In-patient, inpatient", "Out-patient, outpatien", "Outreach", "Prevention of mother to child transmission HIV/AIDS", "Radiology, x-ray, xray", "Reproductive health, reproductive", "Tuberculosis diagnosis, TB", "Tuberculosis laboratory work up, TB", "Tuberculosis treatment, TB", "Youth");
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
        return array("doctor", "daktari", "laktar", "dr.", "daktar", "dr");
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
        $string = strtolower($string);
        $key = strtolower($key);

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
        $response = $this->find_string_after_keyword($message, $this->location_adjectives(), "location");

        return $response;
    }

    public function process_for_doctor_name($message){
        $response = $this->find_string_after_keyword($message, $this->doctor_keywords(), "doctor");

        return $response;
    }

    public function find_string_after_keyword($message, $array_of_keywords, $type){
        $response = null;
        for($i=0; $i<count($array_of_keywords); $i++){
            $separator = $array_of_keywords[$i];
            if($this->string_in_string($message, $separator)){
                if($type == "location"){
                    $parts = explode(" ".$separator." ", $message);
                }else{
                    //type is doc
                    $parts = explode($separator." ", $message);
                }
                if(count($parts)>1){
                    $response = $parts[1];
                }else{
                    $response = $parts[0];
                }
            }
        }
        return $response;
    }

    public function send_response($phoneNumber, $result){

        $message = $result["response"];

        $url = config('custom_config.sms_send_url');

        $user = config('custom_config.sms_user');
        $pass = config('custom_config.sms_pass');
        $messageID = "";
        $shortCode = config('custom_config.sms_shortCode');

        $options = array("user"=>$user, "pass"=>$pass, "messageID"=>$this->id, "shortCode"=>$shortCode, "MSISDN"=>$phoneNumber, "MESSAGE"=>$message);

        $url .= http_build_query($options,'','&');

        $page = file_get_contents($url);

        //$data = json_decode($page, TRUE);
        //TODO: Ask provider to provide json reponse

        //log sent message
        $this->log_sent($result);
    }
    public function log_received($phone, $message){

        $now = date('Y-m-d H:i:s');//TODO: Find out why migration timestamps() doesn't work

        $id = DB::table('sms')->insertGetId(
            array('query' => $message, 'phone_number' => $phone, 'created_at' => $now)
        );

        return $id;
    }

    public function log_sent($result){
        DB::table('sms')
            ->where('id', $result["id"])
            ->update(array('found' => $result["found"], "successfull"=>$result["success"], "responded"=>1, "response"=>$result["response"]));
    }
}