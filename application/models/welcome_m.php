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
 public function get_all_featured(){
	$this->db->select("*, UNIX_TIMESTAMP() - timestamp AS TimeSpent, timestamp, categories.*");
	$this->db->from("news");	
	$this->db->join("categories", "categories.cat_id=news.category");

	$this->db->where("news.featured", 1);
	
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
   public function get_facilities_counties(){
   	$this->db->select("*");
   	$this->db->from("counties");
	
	$result = $this->db->get();
	return $result->result_array();
   }
   public function get_towns(){
   	$this->db->select("*");
	$this->db->from("nhif");
	$this->db->where("Town !=", "");
	$this->db->group_by("Town");
	$result = $this->db->get();
	return $result->result_array();
   }
   public function get_story_sofar($parent){
   	$this->db->select("*, UNIX_TIMESTAMP() - timestamp AS TimeSpent, timestamp");
	$this->db->from("news");

	$this->db->where("parent", $parent);
	
	
	$result = $this->db->get();
	return $result->result_array();

   }
}