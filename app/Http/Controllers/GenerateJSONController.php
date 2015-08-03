<?php namespace App\Http\Controllers;

class GenerateJSONController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | GenerateJSON Controller
    |--------------------------------------------------------------------------
    |
    |This controller is used to generate JSON data files for a
    |Jekyll frontend
    |
    */
    public function generate_featured($featured_news)
    {
        $file = public_path()."/feeds/featured.json";

        print "<pre>";
        print_r($featured_news);
        print "</pre>";

        $this->write_to_file($featured_news, $file);
    }

    public function write_to_file($featured_news, $file){
        file_put_contents($file, json_encode($featured_news));
    }

}
