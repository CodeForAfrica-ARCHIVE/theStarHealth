<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome_m extends CI_Model {
 
 public function get_featured($cat, $featured){
 	
		$this->db->select("*, UNIX_TIMESTAMP() - timestamp AS TimeSpent, timestamp, categories.*");
	$this->db->from("news");	
	$this->db->join("categories", "categories.cat_id=news.category");
	
	$this->db->where("news.featured", $featured);
	$this->db->where("news.section", $cat);
	
	
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
   public function get_archive($cat){
 	
	$this->db->select("*, UNIX_TIMESTAMP() - timestamp AS TimeSpent, timestamp, categories.*");
	$this->db->from("news");	
	$this->db->join("categories", "categories.cat_id=news.category");
	$this->db->where("category", $cat);
	
	$result = $this->db->get();
	$news = $result->result_array();
	return $news;
 }
}