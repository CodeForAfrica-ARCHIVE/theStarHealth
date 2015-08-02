<?php namespace App\Http\Controllers;


class DoctorsController extends Controller {

    public static function getData($q, $isSMS)
    {
        $q = strtoupper($q);

        $key = config('custom_config.google_api_key');
        $table = config('custom_config.dodgy_docs_table');

        $url = "https://www.googleapis.com/fusiontables/v1/query?";

        $sql = "SELECT * FROM ".$table." WHERE Names LIKE '%".$q."%'";

        $options = array("sql"=>$sql, "key"=>$key, "sensor"=>"false");

        $url .= http_build_query($options,'','&');

        $page = file_get_contents($url);

        $data = json_decode($page, TRUE);

        if(array_key_exists('rows', $data)){
            $rows = $data['rows'];

            $result = "";

            if (sizeof($rows) == 0) {

                $result .= "No registered doctor found with that name!";

            }else{
                $result = "Found:\n";

                foreach($rows as $row){
                    if($isSMS){
                        $result .= $row['1']." - ". $row['6']."\n";
                    }else{
                        $result .= $row['1']."\n";
                    }
                }
            }

        }else{
            $result = "No doctor with that name. Check for spelling mistakes.";
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
