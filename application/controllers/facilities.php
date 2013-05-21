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
		$name = $_POST['name'];
		$this->db->select("abbr.full,
							abbr.id,
							abbr.abbr,
							sh_facilities.id,
							sh_facilities.name,
							sh_facilities.Geolocation,
							sh_facilities.Facility,
							sh_facilities.County");
		$this->db->from("abbr");
		$this->db->join("sh_facilities", "abbr.id=sh_facilities.Facility");
		$this->db->where("abbr.full", $name);
		
		$result = $this->db->get();
		$facilities = $result->result_array();
		foreach($facilities as $facility){
			print "<a href='https://maps.google.com/maps?q=".$facility['Geolocation']."+(".$facility['name'].")' target='_blank'>".$facility['name']."</a><br />";		
		}
		
	}
}