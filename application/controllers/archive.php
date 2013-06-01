<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Archive extends CI_Controller {

	public function index()
	{
		$data['title'] = "Archive";
		
		$this->load->model('welcome_m');

			$cat = $_GET['cat'];			

			$data['more_news'] = $this->welcome_m->get_archive($cat);

	
		
			
		$this->load->view('layout/header.php', $data);	
		$this->load->view('layout/header_widgets.php');
		$this->load->view('archive', $data);
		$this->load->view('layout/footer.php');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */