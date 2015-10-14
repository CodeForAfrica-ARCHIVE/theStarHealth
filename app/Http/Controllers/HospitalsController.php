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

        if($address=='' && ($gps=='' || $gps=="undefined")){
            $result = 'You have to set location!';
            $found = false;
        }else{

            if($gps=='' || $gps=="undefined"){
                //reverse geocode address
                $q = urlencode($address);

                $geocode_url = "https://maps.googleapis.com/maps/api/geocode/json?address=".$q."&key=".config('custom_config.google_api_key');

                $response = json_decode(file_get_contents($geocode_url));

                if($response->status =="OK"){
                    $gps = $response->results[0]->geometry->location;
                    $gps = $gps->lat.",".$gps->lng;
                }else{
                    $gps = "0,0";
                }
            }

            $key = config('custom_config.google_api_key');

            $table = config('custom_config.facilities_table');

            $url = "https://www.googleapis.com/fusiontables/v1/query?";


            if($specialty == "0"){

                $sql = "SELECT * FROM ".$table." ORDER BY ST_DISTANCE(geo, LATLNG(". $gps .")) LIMIT 10";
            }else{
                $sql = "SELECT * FROM ".$table." WHERE $specialty='Y' ORDER BY ST_DISTANCE(geo, LATLNG(". $gps .")) LIMIT 10";
            }

            $options = array("sql"=>$sql, "key"=>$key, "sensor"=>"false");

            $url .= http_build_query($options,'','&');

            $page = file_get_contents($url);

            $data = json_decode($page, TRUE);

            if(!array_key_exists("rows", $data)){
                $result .= "No hospitals found for those parameters.";
                $found = false;
            }else{
                $rows = $data['rows'];

                $i = 0;
                $result_array = array();
                foreach($rows as $row){
                    $cname = ucwords(strtolower($row['2']));
                    //$cname .= " KSH ".$row['8'];
                    if(!$isSMS){
                        $result_array[] = "<p><a target='_blank' href='https://www.google.com/maps/?q=".$row[49]."'>".$cname."</a></p>";
                    }else{
                        $i++;
                        $result_array[] = $i .". ". $cname . "\n";
                    }
                }
                $glue = "";

                if($isSMS){
                    $glue = ", ";
                }

                $result = implode($glue, $result_array);
                }
        }

        if($isSMS && !$found){
            return false;
        }

        return $result;

    }
    public function reverse_geocode($q){
        $geocode_url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=".$q."&key=".config("custom_config.google_api_key");

        $response = json_decode(file_get_contents($geocode_url));

        if($response->status =="OK"){
            return $response->results[0]->formatted_address;
        }else{
            return null;
        }

    }

}