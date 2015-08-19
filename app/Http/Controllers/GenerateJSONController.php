<?php

namespace App\Http\Controllers;

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

    public function __construct(){

    }

    public function index(){
        $newsController = new WelcomeController();

        //get featured news
        $featured_news = $newsController->get_featured();
        $this->generate_featured($featured_news);

        //get all news
        $all_news = $newsController->get_all('All');
        $this->generate_all_news($all_news);
	
	
	//get help desk
	$helpdesk = array();
	$helpdesk['helplines'] = $newsController->get_helplines();
        $helpdesk['supportgroups'] = $newsController->get_support_groups();
        $helpdesk['socialmedias'] = $newsController->get_social_media();
	$this->generate_help_desk($helpdesk);

	//get tags
	$tags = $newsController->get_tags();
	$this->generate_tags($tags);
    }

    public function generate_help_desk($helpdesk){

        $file = public_path()."/feeds/helpdesk.yaml";
	
        yaml_emit_file ( $file , $helpdesk );

    }

    public function generate_featured($featured_news)
    {
        $file = public_path()."/feeds/featured.yaml";

        yaml_emit_file ( $file , $featured_news );

    }

    public function generate_all_news($all_news)
    {
        $file = public_path()."/feeds/all_news.yaml";

        yaml_emit_file ( $file , $all_news );
    }

   public function generate_tags($tags)
    {
        $file = public_path()."/feeds/tags.yaml";

        yaml_emit_file ( $file , $tags );

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
