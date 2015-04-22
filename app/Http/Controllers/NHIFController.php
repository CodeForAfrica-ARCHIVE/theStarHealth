<?php
namespace App\Http\Controllers;

class NHIFController extends Controller {

	public static function coverage($min, $max, $town)
	{
        $town = strtoupper($town);

        $key = config('custom_config.google_api_key');
        $table = config('custom_config.nhif_table');

        $url = "https://www.googleapis.com/fusiontables/v1/query?";

        $sql = "SELECT * FROM ".$table." where Rate<=$max AND Rate>=$min AND Town LIKE '%$town%'";

        $options = array("sql"=>$sql, "key"=>$key, "sensor"=>"false");

        $url .= http_build_query($options,'','&');

        $page = file_get_contents($url);

        $data = json_decode($page, TRUE);

        $result = "";

        if(!array_key_exists("rows", $data)){
            $result .= "No hospitals found for those parameters.";
        }else{
            $rows = $data['rows'];


            foreach($rows as $row){
                $cname = $row['2'];
                $cname .= " KSH ".$row['8'];
                $result .= $cname . "<br/>";
            }
        }

        return $result;

	}
}