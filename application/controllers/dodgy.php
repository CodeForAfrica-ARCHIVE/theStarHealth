<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dodgy extends CI_Controller {

	public function index()
	{
		//$this->load->view('dodgy');
	}
	public function data(){

		$q = strtoupper($_GET["q"]);	
		$key = "AIzaSyCAI2GoGWfLBvgygLKQp5suUk3RCG7r_ME";
		$table = "1sHohYSC7eaJQ3wenE6-4zrhIYc45lLX_Fb04Hzjo"; 
		
		$url = "https://www.googleapis.com/fusiontables/v1/query?sql=";
		
		$sql = "SELECT * FROM ".$table." WHERE Names LIKE '%".$q."%'";

		$page = file_get_contents($url.rawurlencode($sql)."&key=".$key);
		
		$data = json_decode($page, TRUE);
		
		
		$rows = $data['rows'];
		
		foreach($rows as $row){
			$cname = $row['2'];
			echo "$cname\n";		
		}

	}

	public function search(){
		$name = $_POST['name'];
		if($name==''){
			print "Please enter a name!";
		}else{
			
		$key = "AIzaSyCAI2GoGWfLBvgygLKQp5suUk3RCG7r_ME";
		$table = "1sHohYSC7eaJQ3wenE6-4zrhIYc45lLX_Fb04Hzjo"; 
		
		$url = "https://www.googleapis.com/fusiontables/v1/query?sql=";
		
		$sql = "SELECT * FROM ".$table." WHERE Names = '".$name."'";

		$page = file_get_contents($url.rawurlencode($sql)."&key=".$key);
		
		$data = json_decode($page, TRUE);
		
		
		$rows = $data['rows'];

		$total = 0;
		foreach($rows as $doc){
			$total++;
			print "<p>";
			print "Name: ".$doc['1'].' '.$doc['2'];
			print "<br />";
			print "Reg No: ".$doc['4'];
			print "<br />";
			print "Specialty :".$doc['7'];
			print "</p>";
		}
		if($total<1){
			print "No registered doctor found with that name!";
		}
		}
	}

}
?>
