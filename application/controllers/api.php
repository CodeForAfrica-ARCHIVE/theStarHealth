<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('api_m');
	}
	public function get_news(){
		
		if(isset($_GET['category'])&&($_GET['category']!="0")){
			$type = $_GET['category'];
			$data['news'] = $this->api_m->get_archive($type);
		}else{
			$data['news'] = $this->api_m->get_all();
		}
		
		$this->load->view('api/show_news', $data);
	}
	public function show_article(){
		$id = $_GET['id'];
		$data['news'] = $this->api_m->show_article($id);
		$this->load->view('api/show_full_news', $data);
	}
	public function nhif(){
		$min = $_GET['min'];
		$max = $_GET['max'];
		$town = $_GET['town'];
		$data['facilities'] = $this->api_m->get_nhif_facilities($min, $max, $town);
		$this->load->view('api/show_nhif', $data);
	}

}