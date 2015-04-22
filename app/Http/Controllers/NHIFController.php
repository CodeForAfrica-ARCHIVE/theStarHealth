<?php
namespace App\Http\Controllers;

class NHIFController extends Controller {

	public static function coverage($min, $max, $town)
	{
        $town = strtoupper($town);
		/*if(($max=='')||($min=='')){
			print "Please enter both maximum and minimum values";
		}else{
		if($town=="Select town"){
			$result = $this->db->query("select * from nhif where Rate<=$max AND Rate>=$min AND Rate!=''");
	
		}
		else{
			$result = $this->db->query("select * from nhif where Rate<=$max AND Rate>=$min AND Town='$town' AND Rate!=''");
		
		}
		$facilities = $result->result_array();
		print "<!-- <select onchange=\"filter_town('');\" id='town'>";
		$sql = "select DISTINCT Town as town from nhif where town !=''";
		$rsd = mysql_query($sql);
		while($rs = mysql_fetch_array($rsd)) {
			print "<option value='".$rs['town']."'>".$rs['town']."</option>";
		}
		print "</select>";

		print "<br /><strong>";
		echo "Hospitals that cover KSH ".$amount." or less";
		print "</strong><br />-->";
		foreach($facilities as $facility){
			
			print $facility['Name'].' - '.$facility['Rate']."<br />";
			}
		if(count($facilities)==0){
			print "No facilities found";
		}
		}*/
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