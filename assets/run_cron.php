<?php
require_once 'alchemyapi.php';
$alchemyapi = new AlchemyAPI();

$feed_url = "http://www.the-star.co.ke/star-health";

$feed = json_decode(file_get_contents($feed_url, true));

if(property_exists($feed, "nodes")){

    $items = $feed->nodes;

    $articles = array();

    $concepts = array();

    foreach($items as $d){

        $item = $d->node;
        $response = $alchemyapi->concepts('text',$item->body, null);

        $tags = array();

        $weighted_tags = array();

        if ($response['status'] == 'OK') {

            foreach ($response['concepts'] as $concept) {

                if (!array_key_exists($concept['text'], $tags))
                {
                    //No exact match
                    //check if this key is substring of existing key or vice versa
                    $existing_key = sub_exists($concept['text'], $concepts);

                    if($existing_key != null){

                        $new_value = $concepts[$existing_key] + 1;
                        $concepts[$existing_key] = $new_value;

                        $tags[] = $existing_key;

                    }else{

                        $concepts[$concept['text']] = 1;

                        $tags[] = $concept['text'];
                    }
                    //TODO: check for close levenshtein matches?
                }
                else
                {
                    $new_value = $concepts[$concept['text']] + 1;
                    $concepts[$concept['text']] = $new_value;

                    $tags[] = $concept['text'];
                }


                $weighted_tags[$concept['text']] = $concept['relevance'];

            }

        } else {
            //echo 'Error in the concept tagging call: ', $response['statusInfo'];
        }

        //add to articles
        $item->sorted_tags = $tags;

        //sort tags array most popular first
        arsort($weighted_tags);

        $item->theme = $weighted_tags;

        $articles[] = array("node"=>$item);

    }

    file_put_contents("feed.json", json_encode(array("nodes"=>$articles, "tags"=>$concepts)));

}


function sub_exists($text, $array){
    $str = null;

    foreach($array as $k=>$v){

        if (strpos($k,$text) !== false) {
            $str = $k;
            return $str;
            break;

        }elseif(strpos($text,$k) !== false){
            $str = $k;
            return $str;
            break;

        }else{
            $str = null;
        }
    }

    return $str;
}

?>
