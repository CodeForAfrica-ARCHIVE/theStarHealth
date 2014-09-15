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
		$county = strtoupper($_POST['county']);
		
		if($name==''){
			print "You didn't enter a facility type";
		}else{
		if($county == "SELECT COUNTY"){
			print $name." in all counties";
			
			$this->db->select("abbr.*,sh_facilities.*");
			$this->db->from("abbr");
			$this->db->join("sh_facilities", "abbr.id=sh_facilities.Facility");
			$this->db->where("abbr.full", $name);
			
		}else{
			print $name." in ".$county." county";
			
			$this->db->select("abbr.*,sh_facilities.*");
			$this->db->from("abbr");
			$this->db->join("sh_facilities", "abbr.id=sh_facilities.Facility");
			$this->db->where("abbr.full", $name);
			$this->db->where("sh_facilities.County", $county);
		}
		
		
		
		$result = $this->db->get();
		$facilities = $result->result_array();
		
		
		
		print "<!-- <select onchange=\"filter_location('".$name."');\" id='county'>";
		$sql = "select DISTINCT County as county from sh_facilities";
		$rsd = mysql_query($sql);
		while($rs = mysql_fetch_array($rsd)) {
			print "<option value='".$rs['county']."'>".$rs['county']."</option>";
		}
		print "</select>-->";
		print "<br />";
		
		foreach($facilities as $facility){
			$filtered_name = str_replace(')', '', str_replace('(', '', $facility['name']));
			print "<a href='https://maps.google.com/maps?q=".$facility['Geolocation']."+(".$filtered_name.")' target='_blank'>".$facility['name']."</a> - ".$facility['County']."<br />";		
		}
		if(count($facilities)==0){
			if($name==''){
				print "missing values";
			}else{
			print "No facilities found";
			}
		}
		}
		
	}
	public function filter_county(){
		$name = $_POST['name'];
		$county = $_POST['county'];
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
		$this->db->where("sh_facilities.County", $county);
		
		$result = $this->db->get();
		$facilities = $result->result_array();
		
		print "<select onchange=\"filter_location('".$name."');\" id='county'>";
		$sql = "select DISTINCT County as county from sh_facilities";
		$rsd = mysql_query($sql);
		while($rs = mysql_fetch_array($rsd)) {
			print "<option value='".$rs['county']."'>".$rs['county']."</option>";
		}
		print "</select>";
		print "<br />";
		
		foreach($facilities as $facility){
			$filtered_name = str_replace(')', '', str_replace('(', '', $facility['name']));
			print "<a href='https://maps.google.com/maps?q=".$facility['Geolocation']."+(".$filtered_name.")' target='_blank'>".$facility['name']."</a> - ".$facility['County']."<br />";		
		}
		if(count($facilities)==0){
			print "No facilities found";
		}	
	}
}
