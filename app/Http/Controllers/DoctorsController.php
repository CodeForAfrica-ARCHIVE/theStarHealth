<?php namespace App\Http\Controllers;


class DoctorsController extends Controller {

    public static function getData($q, $isSMS)
    {
        $found = true;
        $q = strtoupper($q);

        $key = config('custom_config.google_api_key');
        $table = config('custom_config.dodgy_docs_table');

        $url = "https://www.googleapis.com/fusiontables/v1/query?";

        //split name into different parts, and return rows that have all names
        $raw_query_parts = explode(' ', $q);
        $query_parts = array();
        foreach($raw_query_parts as $part){

            $query_parts[] = "Names LIKE '%".$part."%'";

        }
        $query_parts = implode(" AND ", $query_parts);

        $sql = "SELECT * FROM ".$table." WHERE ".$query_parts;

        $options = array("sql"=>$sql, "key"=>$key, "sensor"=>"false");

        $url .= http_build_query($options,'','&');

        $page = file_get_contents($url);

        $data = json_decode($page, TRUE);

        if(array_key_exists(('rows'), $data)){
            $rows = $data['rows'];

            $result = "Found:\r\n";

            foreach($rows as $row){
                if($isSMS){
                    $result .= $row['1']." - ". $row['6']."\r\n";
                }else{
                    $result .= $row['1']."\r\n";
                }
            }

            if(count($rows)<1){

                $result = "No doctor with that name. Check for spelling mistakes.";
                $found = false;
            }

        }else{
            $result = "No doctor with that name. Check for spelling mistakes.";
            $found = false;
        }

        if($isSMS && !$found){
            return false;
        }
        return $result;
    }

    public function process_rows($data, $isSMS){
        $rows = $data['rows'];

        $result = "Found:\n";

        foreach($rows as $row){
            if($isSMS){
                $result .= $row['1']." - ". $row['6']."\r\n";
            }else{
                $result .= $row['1']."\r\n";
            }
        }
        return $result;

    }

    public static function singleDoctor($name){

        if($name==''){

            $result = "Please enter a name!";

        }else{

            $key = config('custom_config.google_api_key');

            $table = config('custom_config.dodgy_docs_table');

            $url = "https://www.googleapis.com/fusiontables/v1/query?";

            $sql = "SELECT * FROM ".$table." WHERE Names LIKE '%".$name."%'";

            $options = array("sql"=>$sql, "key"=>$key, "sensor"=>"false");

            $url .= http_build_query($options,'','&');

            $page = file_get_contents($url);

            $data = json_decode($page, TRUE);

            $result = '';
            if(!array_key_exists('rows', $data)){
                $result .= "No registered doctor found with that name!";
            }else {

                $rows = $data['rows'];

                $total = 0;

                if (sizeof($rows) == 0) {

                    $result .= "No registered doctor found with that name!";

                } else {
                    foreach($rows as $doc){

                    //$doc = $rows[0];
                    $total++;
                    $result .= "<p>";
                    $result .= "Name: " . $doc['1'];
                    $result .= "<br />";
                    $result .= "Reg No: " . $doc['3'];
                    $result .= "<br />";
                    $result .= "Specialty :" . $doc['6'];
                    $result .= "</p>";

                    }
                }
            }

        }

        return $result;
    }

}
?>
