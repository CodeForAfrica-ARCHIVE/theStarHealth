<?php
header("Content-type: text/xml");
$total = 0;
$Result = "<?xml version='1.0' encoding='utf-8'?>\n<articles>\n";

foreach($news as $article){
	if($total<20){
	$Result .= " <news>\n";	
	$Result .= "<id>".$article['id']."</id>";	
	$Result .= "<title>".$article['title']."</title>";
	$Result .= "<description>".$article['content']."</description>";
	$Result .= "<signatures>".$article['timestamp']."</signatures>";
	$Result .= "<category>".$article['cat_name']."</category>";
	$Result .= "<thumb_url>".base_url()."assets/uploads/".$article['thumb']."</thumb_url>";
	$Result .= " </news>\n";
		}
	$total++;
}
$Result .= "</articles>\n"; 
echo $Result;
?>