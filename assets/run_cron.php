<?php
        $url = "http://www.the-star.co.ke/star-health";
		$data = json_decode(file_get_contents($url), TRUE);
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
			file_put_contents('./assets/feed.json', $data);
		}

?>