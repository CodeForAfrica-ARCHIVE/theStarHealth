<?php
        $url = "http://the-star.co.ke/star-health-json";
		$data = file_get_contents($url);	
		/*		
		$ch = curl_init();
		$timeout = 5;
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$data = curl_exec($ch);
		curl_close($ch);
		*/
		if($data!=null){
			file_put_contents('./feed.json', $data);	
		}
?>