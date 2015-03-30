<?php
header("Content-type: text/xml");
	function first_paragraph($content) {

						$pos = strpos($content, '[p]');
						return substr($content, 0, $pos);
					   
					}
	
$total = 0;
$Result = "<?xml version='1.0' encoding='utf-8'?>\n<articles>\n";

foreach($news as $article){
	if($total<20){
		
	//timeplay
					$days = floor($article['TimeSpent'] / (60 * 60 * 24)); 
					
					$remainder = $article['TimeSpent'] % (60 * 60 * 24);
					$hours = floor($remainder / (60 * 60));
					$remainder = $remainder % (60 * 60);
					$minutes = floor($remainder / 60);
					$seconds = $remainder % 60;

					if($days > 0) {
					//$oldLocale = setlocale(LC_TIME, 'pt_BR');
					$article['timestamp'] = strftime("%b %#d %Y", $article['timestamp']);
					$lapse = $article['timestamp'];
					// setlocale(LC_TIME, $oldLocale);
					}
						
					elseif($days == 0 && $hours == 0 && $minutes == 0)
					$lapse .= "few seconds ago";						
					elseif($hours)
					$lapse .=  $hours.' hours ago';
					elseif($days == 0 && $hours == 0)
					$lapse .=  $minutes.' minutes ago';
					else
					$lapse .=  "few seconds ago";
					//end timeplay
	$Result .= " <news>\n";	
	$Result .= "<id>".$article['id']."</id>";	
	$Result .= "<title>".$article['title']."</title>";
	$Result .= "<description>".first_paragraph($article['content'])."</description>";
	$Result .= "<timestamp>".$lapse."</timestamp>";
	$Result .= "<category>".$article['cat_name']."</category>";
	$Result .= "<thumb_url>".base_url()."assets/thumbs/".$article['thumb']."</thumb_url>";
	$Result .= " </news>\n";
		}
	$total++;
}
$Result .= "</articles>\n"; 
echo $Result;
?>