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

    /*
     * Create JSON dictionary for list of health services
     */

    public function createServicesDictionary(){

        $result = array();

        foreach($this->service_abbr() as $abbr){
            $service = array();
            //add the other keywords
            $service[] = $service

            $result[$abbr] = $service;
        }

    }

    public function service_abbr(){
        return array("ANC", "ART", "BEOC", "BLOOD", "CAES SEC", "CEOC", "C-IMCI", "EPI", "FP", "GROWM", "HBC", "HCT", "IPD", "OPD", "OUTREACH", "PMTCT", "RAD/XRAY", "RHTC/RHDC", "TB DIAG", "TB LABS", "TB TREAT", "YOUTH");

    }

    public function services_keywords(){
        return array("Antenatal Care (care of mother while pregnant)", "Anteretroviral Therapy ( drugs for HIV)", "Beoc", "Blood", "Caeserean section", "Ceoc", "C-IMCI", "Epidemiology ( study of disease spread and distribution)", "Family planning", "GROWM", "Heamogram ( blood test checking all blood parameters)", "Heamatocrit ( simple blood test to analyse anaemia)", "In- patient department", "Out -patient department", "Outreach programs ie. go out and give treatment in the villages", "Prevention of mother to child transmission ( of HIV/AIDS)", "Radiology/ x-ray", "Reproductive health treatment center/diagnostic center", "Tuberculosis diagnosis", "Tuberculosis laboratory work up", "Tuberculosis treatment", "Youth");
    }
}
