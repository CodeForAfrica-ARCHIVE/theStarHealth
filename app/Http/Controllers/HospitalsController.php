<?php
namespace App\Http\Controllers;

class HospitalsController extends Controller {

    /**
     * Method to find facilities within location providing specific services
     * @param $specialty
     * @param $gps
     * @param $address
     * @param $isSMS
     * @return bool|string
     */
    public static function specialty($specialty, $gps, $address, $isSMS)
    {
        $found = true;

        $result = "";

        if ($address=='' && ($gps=='' || $gps=="undefined")) {
            $result = 'You have to set location!';
            $found = false;
        } else {

            if ($gps=='' || $gps=="undefined") {
                //reverse geocode address
                $q = urlencode($address);

                $geocode_url = "https://maps.googleapis.com/maps/api/geocode/json?address=".$q."&key=".config('custom_config.google_api_key');

                $response = json_decode(file_get_contents($geocode_url));

                if ($response->status =="OK") {
                    $gps = $response->results[0]->geometry->location;
                    $gps = $gps->lat.",".$gps->lng;
                } else {
                    if ($isSMS) {
                        $examples = "Example query formats:\n";
                        $examples .= "1. Doctor James Gicheru\n";
                        $examples .= "2. Hospital in Kiambu\n";
                        $examples .= "3. NHIF in Karatina\n";
                        $response = "Could not understand your request. Please try the web services at http://health.the-star.co.ke\n".$examples;
                        return $response;
                    }
                    return "Sorry, location could not be understood. Check for spelling mistakes.";
                }
            }

            $key = config('custom_config.google_api_key');

            $table = config('custom_config.facilities_table');

            $url = "https://www.googleapis.com/fusiontables/v1/query?";

            if ($specialty == "0" || $specialty == "ALL" || $specialty == '') {
                $sql = "SELECT * FROM ".$table." ORDER BY ST_DISTANCE(geo, LATLNG(". $gps .")) LIMIT 10";
            } else {
                $sql = "SELECT * FROM ".$table." WHERE '$specialty'='Y' ORDER BY ST_DISTANCE(geo, LATLNG(". $gps .")) LIMIT 10";
            }

            $options = array("sql"=>$sql, "key"=>$key, "sensor"=>"false");

            $url .= http_build_query($options,'','&');

            $page = file_get_contents($url);

            $data = json_decode($page, TRUE);

            if (!array_key_exists("rows", $data)) {
                $result .= "No hospitals found for those parameters.";
                $found = false;
            } else {
                $rows = $data['rows'];

                $i = 0;
                $result_array = array();
                foreach ($rows as $row) {
                    $i++;
                    $cname = ucwords(strtolower($row['2']));
                    //$cname .= " KSH ".$row['8'];
                    if (!$isSMS) {
                        $result_array[] = "<p><a target='_blank' href='https://www.google.com/maps/?q=".$row[49]."'>".$cname."</a></p>";
                    } else {
                        if ($i < 6) {
                            $result_array[] = $i .". ". $cname . "\n";
                        }
                        if ($i == 6) {
                            $result_array[$i] = "\n".'Find the full list at http://health.the-star.co.ke';
                        }

                    }
                }
                $glue = "";

                $result = implode($glue, $result_array);
            }
        }

        if ($isSMS && !$found) {
            return false;
        }

        return $result;

    }

    public function reverse_geocode($q){
        $geocode_url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=".$q."&key=".config("custom_config.google_api_key");

        $response = json_decode(file_get_contents($geocode_url));

        if ($response->status =="OK") {
            return $response->results[0]->formatted_address;
        } else {
            return null;
        }

    }

    /**
     * @param $name
     * @return string
     */
    public function singleClinic($name) {

        if ($name=='') {

            $result = "Please enter a name!";

        } else {


            $data = $this->get_single($name);

            $result = '';
            if(!array_key_exists('rows', $data)){
                $result .= "No registered clinic found with that name!";
            }else {

                $rows = $data['rows'];

                $total = 0;

                if (sizeof($rows) == 0) {

                    $result .= "No registered clinic found with that name!";

                } else {
                    foreach($rows as $clinic){

                        //$doc = $rows[0];
                        $total++;
                        $result .= "<p>";
                        $result .= "Name: " . $clinic[2];
                        $result .= "<br />";
                        $result .= "Reg No: " . $clinic[1];
                        $result .= "<br />";
                        $result .= "County :" . $clinic[4];
                        $result .= "</p>";

                    }
                }
            }

        }

        return $result;
    }

    /**
     * @param $name
     * @param $isSMS
     * @return bool|string
     */
    public function getClinic($name, $isSMS)
    {
        $found = true;

        $data = $this->get_list($name);

        if(array_key_exists(('rows'), $data)){
            $rows = $data['rows'];

            $i = 0;
            $result_array = array();

            foreach($rows as $row){
                if($isSMS){
                    $i++;
                    $result_array[] = $i .". ". $row[2]." - ". $row[1]." - ". $row[4]."\n";
                }else{
                    $result_array[] = $row[2]."\n";
                }
            }

            if(count($rows)<1){

                $result = "No facility found with that name. Check for spelling mistakes.";
                $found = false;
            }else{
                $glue = "";

                if($isSMS){
                    $glue = ", ";
                }

                $result = implode($glue, $result_array);

            }

        }else{
            $result = "No facility with that name. Check for spelling mistakes.";
            $found = false;
        }

        if($isSMS && !$found){
            return false;
        }
        return $result;
    }


    /**Get hospital name by
     * @param $name
     * @return mixed
     */
    public function get_list($name){
        $q = strtoupper($name);

        $key = config('custom_config.google_api_key');
        $table = config('custom_config.facilities_table');

        $url = "https://www.googleapis.com/fusiontables/v1/query?";

        //split name into different parts, and return rows that have all names
        $raw_query_parts = explode(' ', $q);
        $query_parts = array();
        foreach($raw_query_parts as $part){

            $query_parts[] = "FacilityName LIKE '%".$part."%'";

        }
        $query_parts = implode(" AND ", $query_parts);

        $sql = "SELECT * FROM ".$table." WHERE ".$query_parts;

        $options = array("sql"=>$sql, "key"=>$key, "sensor"=>"false");

        $url .= http_build_query($options,'','&');

        $page = file_get_contents($url);

        $data = json_decode($page, TRUE);

        return $data;
    }

    public function get_single($name){
        $q = strtoupper($name);

        $key = config('custom_config.google_api_key');
        $table = config('custom_config.facilities_table');

        $url = "https://www.googleapis.com/fusiontables/v1/query?";

        //split name into different parts, and return rows that have all names
        $raw_query_parts = explode(' ', $q);
        $query_parts = array();
        foreach($raw_query_parts as $part){

            $query_parts[] = "FacilityName LIKE '%".$part."%'";

        }
        $query_parts = implode(" AND ", $query_parts);

        $sql = "SELECT * FROM ".$table." WHERE FacilityName='".$name."'";

        $options = array("sql"=>$sql, "key"=>$key, "sensor"=>"false");

        $url .= http_build_query($options,'','&');

        $page = file_get_contents($url);

        $data = json_decode($page, TRUE);

        return $data;
    }


}