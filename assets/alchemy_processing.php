<?php
$feed_url = "http://www.the-star.co.ke/star-health";
$feed = json_decode(file_get_contents($feed_url, true));

require_once 'alchemyapi.php';
$alchemyapi = new AlchemyAPI();


$feed_url = "http://www.the-star.co.ke/star-health";
$feed = json_decode(file_get_contents($feed_url, true));
$items = $feed->nodes;

$concepts = array();

foreach($items as $d){
    $item = $d->node;
    $response = $alchemyapi->concepts('text',$item->body, null);

    if ($response['status'] == 'OK') {

        foreach ($response['concepts'] as $concept) {

            if (!array_key_exists($concept['text'], $concepts))
            {
                $concepts[$concept['text']] = 0;
            }
            else
            {
                $new_value = $concepts[$concept['text']] + 1;
                $concepts[$concept['text']] = $new_value;
            }

        }

    } else {
        echo 'Error in the concept tagging call: ', $response['statusInfo'];
    }
}

    print "<pre>";
    print_r($concepts);
    print "</pre>";

?>
