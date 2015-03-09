<?php
	$feed_url = "http://www.the-star.co.ke/star-health";
        $feed = json_decode(file_get_contents($feed_url, true));
	if($feed!=null){
	  file_put_contents('./assets/feed.json', $data);
	}else{
		print "sdfa";
	}
		/*		
		$ch = curl_init();
		$timeout = 5;
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$data = curl_exec($ch);
		curl_close($ch);
		

        //if($data!=null){
		//	file_put_contents('./assets/feed.json', $data);
		//}


        require_once 'alchemyapi.php';
        $alchemyapi = new AlchemyAPI();


        $feed_url = "http://www.the-star.co.ke/star-health";
        $feed = json_decode(file_get_contents($feed_url, true));
        $items = $feed->nodes;

        $concepts = array();

        foreach($items as $d){
            $item = $item->node;
            print_r($item);
            $response = $alchemyapi->concepts('text',$item->body, null);
            if ($response['status'] == 'OK') {

                foreach ($response['concepts'] as $concept) {

                    if(!in_array($concept, $concepts)){
                        $concepts[] = $concept;
                    }

                }

            } else {
                echo 'Error in the concept tagging call: ', $response['statusInfo'];
            }
        }

        print "<pre>";
        print_r($concepts);
        print "</pre>";
*/
?>
