<?php
 
$cities=array();
require_once('../../config.php');
 $sql = mysql_query("SELECT * FROM sh_practitioners");
 while($row=mysql_fetch_array($sql))
 {
	$cities[] = array('city'=>$row['Names'], 'reg'=>$row['RegNo'], 'zip'=>$row['Specialty'], 'state'=>$row['Qualifications']);
 }


 
// Cleaning up the term
$term = trim(strip_tags($_GET['term']));
 
// Rudimentary search
$matches = array();
foreach($cities as $city){
	if(stripos($city['city'], $term) !== false){
		// Add the necessary "value" and "label" fields and append to result set
		$city['value'] = $city['city'];
		$city['label'] = "{$city['city']}, {$city['reg']} {$city['zip']} {$city['state']}";
		$matches[] = $city;
	}
}
 
// Truncate, encode and return the results
//$matches = array_slice($matches, 0, 5);

print json_encode($matches);
