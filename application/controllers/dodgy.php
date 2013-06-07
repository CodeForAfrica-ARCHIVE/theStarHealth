<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dodgy extends CI_Controller {

	public function index()
	{
		//$this->load->view('dodgy');
	}
	
	public function data(){
		
		$q = strtolower($_GET["q"]);
		if (!$q) return;
		
		$sql = "select DISTINCT Names as course_name from sh_practitioners where Names LIKE '%$q%'";
		$rsd = mysql_query($sql);
		while($rs = mysql_fetch_array($rsd)) {
			$cname = $rs['course_name'];
			echo "$cname\n";
		}

	}
	public function search(){
		$name = $_POST['name'];
		if($name==''){
			print "Please enter a name!";
		}else{
		$this->db->select("*");
		$this->db->from("sh_practitioners");
		$this->db->where("Names", $name);
		
		$result = $this->db->get();
		
		$docs = $result->result_array();
		
		$total = 0;
		foreach($docs as $doc){
			$total++;
			print "<p>";
			print "Name: ".$doc['Title'].' '.$doc['Names'];
			print "<br />";
			print "Reg No: ".$doc['RegNo'];
			print "<br />";
			print "Specialty :".$doc['Specialty'];
			print "</p>";
		}
		if($total<1){
			print "No registered doctor found with that name!";
		}
	}
	}
}