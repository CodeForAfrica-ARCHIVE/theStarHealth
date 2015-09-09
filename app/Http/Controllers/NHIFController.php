<?php
namespace App\Http\Controllers;

class NHIFController extends Controller {

	public static function coverage($type, $gps, $address, $isSMS)
	{
        $found = true;

        $result = "";

        if($address=='' && $gps==""){
            $result = 'You have to set location!';
            $found = false;
        }else{

            if($gps==""){
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
            $table = config('custom_config.nhif_table');

            $url = "https://www.googleapis.com/fusiontables/v1/query?";

            if($type == "0"){

                $sql = "SELECT * FROM ".$table." ORDER BY ST_DISTANCE(gps, LATLNG(". $gps .")) LIMIT 10";
            }else{
                $sql = "SELECT * FROM ".$table." WHERE Category='".$type."' ORDER BY ST_DISTANCE(gps, LATLNG(". $gps .")) LIMIT 10";
            }


            $options = array("sql"=>$sql, "key"=>$key, "sensor"=>"false");

            $url .= http_build_query($options,'','&');

            $page = file_get_contents($url);

            $data = json_decode($page, TRUE);



            if(!array_key_exists("rows", $data)){
                $result = "No hospitals found for those parameters.";
                $found = false;
            }else{
                $rows = $data['rows'];

                $i = 0;
                $result_array = array();

                foreach($rows as $row){
                    $cname = ucwords(strtolower($row['1']));
                    //$cname .= " KSH ".$row['8'];
                    if(!$isSMS){
                        $result_array[] = "<p><a target='_blank' href='https://www.google.com/maps/?q=".$row[6]."'>".$cname."</a></p>";
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
    public static function reverseGeocode($q){

        $q = urlencode($q);

        $geocode_url = "https://maps.googleapis.com/maps/api/geocode/json?address=".$q."&key=".Config::get('custom_config.google_api_key');

        $response = json_decode(file_get_contents($geocode_url));

        if($response->status =="OK"){
            return $response->results[0]->geometry->location;
        }else{
            return "0,0";
        }

    }
}