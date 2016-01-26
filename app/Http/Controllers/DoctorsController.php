<?php namespace App\Http\Controllers;


class DoctorsController extends Controller {

    public function getData($name, $isSMS)
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
                    if ($i < 6) {
                        $result_array[$i] = $i .". ". $row[1]." - ". $row[2]." - ". $row[7]."\n";
                    }
                    if ($i == 6) {
                        $result_array[$i] = "\n".'Find the full list at http://health.the-star.co.ke';
                    }
                }else{
                    $result_array[] = $row[1]."\n";
                }
            }

            if(count($rows)<1){

                $result = "No doctor with that name. Check for spelling mistakes.";
                $found = false;
            }else{
                $glue = "";

                if($isSMS){
                    //$glue = ", ";
                }

                $result = implode($glue, $result_array);

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
                $result .= $row[1]." - ". $row[2]." - ". $row[7]."\n";
            }else{
                $result .= $row[1]."\n";
            }
        }
        return $result;

    }

    public function singleDoctor($name){

        if($name==''){

            $result = "Please enter a name!";

        }else{


        $data = $this->get_list($name);

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
                $result .= "Name: " . $doc[1];
                $result .= "<br />";
                $result .= "Reg No: " . $doc[2];
                $result .= "<br />";
                $result .= "Qualification :" . $doc[7];
                    if($doc[5]!="NONE"){
                        $result .= "Specialty :" . $doc[5];
                    }
                $result .= "</p>";

                }
            }
        }

        }

        return $result;
    }

	public function get_list($name){
        $q = strtoupper($name);
        $q = str_replace("DR ", "", $q);
        $q = str_replace("DR. ", "", $q);

        $key = config('custom_config.google_api_key');
        $table = config('custom_config.dodgy_docs_table');

        $url = "https://www.googleapis.com/fusiontables/v1/query?";

        //split name into different parts, and return rows that have all names
        $raw_query_parts = explode(' ', $q);
        $query_parts = array();
        foreach($raw_query_parts as $part){

            $query_parts[] = "Name LIKE '%".$part."%'";

        }
        $query_parts = implode(" AND ", $query_parts);

        $sql = "SELECT * FROM ".$table." WHERE ".$query_parts;

        $options = array("sql"=>$sql, "key"=>$key, "sensor"=>"false");

        $url .= http_build_query($options,'','&');

        $page = file_get_contents($url);

        $data = json_decode($page, TRUE);

        return $data;
    }

}
?>
