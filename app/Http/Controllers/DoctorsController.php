<?php namespace App\Http\Controllers;


class DoctorsController extends Controller {

    public static function getData($q)
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

        $rows = $data['rows'];

        $result = "";

        foreach($rows as $row){
            $cname = $row['2'];
            $result .= "$cname\n";
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

            $sql = "SELECT * FROM ".$table." WHERE Names = '".$name."'";

            $options = array("sql"=>$sql, "key"=>$key, "sensor"=>"false");

            $url .= http_build_query($options,'','&');

            $page = file_get_contents($url);

            $data = json_decode($page, TRUE);

            $rows = $data['rows'];

            $total = 0;

            $result = '';

            foreach($rows as $doc){

                $total++;
                $result .= "<p>";
                $result .= "Name: ".$doc['1'].' '.$doc['2'];
                $result .= "<br />";
                $result .= "Reg No: ".$doc['4'];
                $result .= "<br />";
                $result .= "Specialty :".$doc['6'];
                $result .= "</p>";

            }

            if($total<1){

                $result .= "No registered doctor found with that name!";

            }

        }

        return $result;
    }

}
?>