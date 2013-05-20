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
		
	}
}