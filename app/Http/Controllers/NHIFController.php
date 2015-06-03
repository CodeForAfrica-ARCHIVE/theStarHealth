<?php
namespace App\Http\Controllers;

class NHIFController extends Controller {

	public static function coverage($type, $gps)
	{
        $result = "";

        if($gps==''){
            $result = 'You have to set location!';
        }else{
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
                $result .= "No hospitals found for those parameters.";
            }else{
                $rows = $data['rows'];

                foreach($rows as $row){
                    $cname = $row['1'];
                    //$cname .= " KSH ".$row['8'];
                    $result .= $cname . "<br/>";
                }
            }

        }


        return $result;

	}
}