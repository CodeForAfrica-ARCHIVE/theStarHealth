<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome_m extends CI_Model {
 
 public function get_featured($cat, $featured){
 	
	$this->db->select("*");
	$this->db->from("news");
	
	$this->db->where("featured", $featured);
	$this->db->where("section", $cat);
	
	
	$result = $this->db->get();
	$news = $result->result_array();
	return $news;
 }
  public function get_all(){
 	
	$this->db->select("*");
	$this->db->from("news");
		
	$result = $this->db->get();
	$news = $result->result_array();
	return $news;
 }
}