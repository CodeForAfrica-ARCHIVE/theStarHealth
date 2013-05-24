<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nhif extends CI_Controller {

	public function index()
	{
		
		$amount = $_POST['amount'];
		/*$this->db->select("*");
		$this->db->from("nhif");
		$this->db->where("abbr.full", $name);
		
		$result = $this->db->get();
		 * */
		
		$result = $this->db->query("select * from nhif where Rate<=$amount AND Rate!=''");
		$facilities = $result->result_array();
		
		
		print "<select onchange=\"filter_town('".$amount."');\" id='town'>";
		$sql = "select DISTINCT Town as town from nhif where town !=''";
		$rsd = mysql_query($sql);
		while($rs = mysql_fetch_array($rsd)) {
			print "<option value='".$rs['town']."'>".$rs['town']."</option>";
		}
		print "</select>";
		print "<br /><strong>";
		echo "Hospitals that cover KSH ".$amount." or less";
		print "</strong><br />";
		foreach($facilities as $facility){
			
			print $facility['Name'].' - '.$facility['Rate']."<br />";
			}
		if(count($facilities)==0){
			print "No facilities found";
		}
		
	}
	public function filter_town(){
		
		$town = $_POST['town'];
		$amount = $_POST['amount'];
		/*$this->db->select("*");
		$this->db->from("nhif");
		$this->db->where("abbr.full", $name);
		
		$result = $this->db->get();
		 * */
		$result = $this->db->query("select * from nhif where Rate<=$amount and Town='$town' AND Rate!=''");
		$facilities = $result->result_array();
		
		
		print "<select onchange=\"filter_town('".$amount."');\" id='town'>";
		$sql = "select DISTINCT Town as town from nhif where town !=''";
		$rsd = mysql_query($sql);
		while($rs = mysql_fetch_array($rsd)) {
			print "<option value='".$rs['town']."'>".$rs['town']."</option>";
		}
		print "</select>";
		print "<br /><strong>";
		echo "Hospitals in ".$town." that cover KSH ".$amount." or less";
		print "</strong><br />";
		foreach($facilities as $facility){
			
			print $facility['Name']." - ".$facility['Rate']."<br />";
			}
		if(count($facilities)==0){
			print "No facilities found";
		}
			
	}
}