<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article_m extends CI_Model {

	public function index()
	{
	}
	public function get_article($article){
		$this->db->select("*");
		$this->db->from("news");
		$this->db->where("id", $article);
		
		$result = $this->db->get();
		$story = $result->result_array();
		return $story;
	}
}