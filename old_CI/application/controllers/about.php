<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data['title'] = "About";
		$this->load->view('layout/header.php', $data);	
		$this->load->view('layout/header_widgets.php');
		$this->load->view('about');
		$this->load->view('layout/footer.php');
	}
}