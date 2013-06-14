<?php
//print_r($facilities);
header("Content-type: text/xml");
$Result = "<?xml version='1.0' encoding='utf-8'?>\n<facilities>\n";
$Result .= " <facility>\n";	
		$description ='';
		foreach($facilities as $facility){
			$description .=$facility['name']." - ".$facility['County']."\n";		
		}
		if(count($facilities)==0){
			$description = "No facilities found";
		}
$Result .="<description>".str_replace('&', 'and', $description)."</description>";		
$Result .= " </facility>\n";
$Result .= "</facilities>\n"; 
echo $Result;
?>