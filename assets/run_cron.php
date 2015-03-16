<?php
$feed_url = "http://www.the-star.co.ke/star-health";
$data = json_decode(file_get_contents($feed_url, true));

print_r($data);

if($data!=null){
    file_put_contents('/home/nick/public_html/StarHealth/assets/feed2.json', $data);
}

?>