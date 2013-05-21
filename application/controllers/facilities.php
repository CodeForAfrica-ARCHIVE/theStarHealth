<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Facilities extends CI_Controller {

	public function index()
	{
		
	}
	
	public function data(){
		
		$q = strtolower($_GET["q"]);
		if (!$q) return;
		
		$sql = "select DISTINCT full as facility from abbr where full LIKE '%$q%'";
		$rsd = mysql_query($sql);
		while($rs = mysql_fetch_array($rsd)) {
			$cname = $rs['facility'];
			echo "$cname\n";
		}

	}
	public function search(){
		
	}
}