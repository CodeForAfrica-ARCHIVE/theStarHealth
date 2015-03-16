<?php
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
                //No exact match
                    //check if this key is substring of existing key or vice versa
                    $existing_key = sub_exists($concept['text'], $concepts);

                    if($existing_key != null){

                        $new_value = $concepts[$existing_key] + 1;
                        $concepts[$existing_key] = $new_value;

                    }else{

                        $concepts[$concept['text']] = 1;
                    }
                    //check for closes levenshtein match
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

arsort($concepts);

    print "<pre>";
    print_r($concepts);
    print "</pre>";


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

function fuzzy_match($input, $words){

// no shortest distance found, yet
    $shortest = -1;

// loop through words to find the closest
    foreach ($words as $word) {

        // calculate the distance between the input word,
        // and the current word
        $lev = levenshtein($input, $word);

        // check for an exact match
        if ($lev == 0) {

            // closest word is this one (exact match)
            $closest = $word;
            $shortest = 0;

            // break out of the loop; we've found an exact match
            break;
        }

        // if this distance is less than the next found shortest
        // distance, OR if a next shortest word has not yet been found
        if ($lev <= $shortest || $shortest < 0) {
            // set the closest match, and shortest distance
            $closest  = $word;
            $shortest = $lev;
        }
    }

    echo "Input word: $input\n";

    if ($shortest == 0) {
        echo "Exact match found: $closest\n";
    } else {
        echo "Did you mean: $closest?\n" . " +".$shortest;
    }

}

?>
