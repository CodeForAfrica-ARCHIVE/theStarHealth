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

        if(isFresh($featured_news, $file)){
            $this->write_to_file($featured_news, $file);
        }
    }

    /*
     * Write new content to file
     */
    public function write_to_file($featured_news, $file){
        file_put_contents($file, json_encode($featured_news));
    }

    /*
     * Function to check if content is new
     */
    public function isFresh($content, $file){
        $old = file_get_contents($file, true);
        $new = sha1($content);

        if($old == $new){
            return false;
        }else{
            return true;
        }
    }
}
