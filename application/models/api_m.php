<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Api_m extends CI_Model {
	public function get_nhif_facilities($min, $max, $town){
		$result = $this->db->query("select * from nhif where Rate<=$max AND Rate>=$min AND Town='$town' AND Rate!=''");
		return $result->result_array();	
	}
	public function get_archive($cat){
 	
	$this->db->select("*, UNIX_TIMESTAMP() - timestamp AS TimeSpent, timestamp, categories.*");
	$this->db->from("news");	
	$this->db->join("categories", "categories.cat_id=news.category");
	$this->db->where("category", $cat);
	
	$result = $this->db->get();
	$news = $result->result_array();
	return $news;
 	}
	public function show_article($id){
 	
	$this->db->select("*, UNIX_TIMESTAMP() - timestamp AS TimeSpent, timestamp, categories.*");
	$this->db->from("news");	
	$this->db->join("categories", "categories.cat_id=news.category");
	$this->db->where("id", $id);
	
	$result = $this->db->get();
	$news = $result->result_array();
	return $news;
 	}
   	public function get_all(){
 	
	$this->db->select("*, UNIX_TIMESTAMP() - timestamp AS TimeSpent, timestamp, categories.*");
	$this->db->from("news");	
	$this->db->join("categories", "categories.cat_id=news.category");
	$result = $this->db->get();
	$news = $result->result_array();
	return $news;
 	}
	public function get_specialists($specialty, $county){
	$this->db->select("abbr.*,sh_facilities.*");
	$this->db->from("abbr");
	$this->db->join("sh_facilities", "abbr.id=sh_facilities.Facility");
	$this->db->where("abbr.full", $specialty);
	$this->db->where("sh_facilities.County", $county);
	$result = $this->db->get();
	return $result->result_array();
	}
}
?>
