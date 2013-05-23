<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['title'] = "Welcome";
		
		$this->load->model('welcome_m');
		
		if(isset($_GET['cat'])){
			$cat = $_GET['cat'];			
		}else{
			$cat = 0;
		}
		$data['news'] = $this->welcome_m->get_featured($cat, 1);
		
		if($cat==0){
			$data['more_news'] = $this->welcome_m->get_all();
		}else{
			$data['more_news'] = $this->welcome_m->get_featured($cat, 0);
		}
	
		
			
		$this->load->view('layout/header.php', $data);	
		$this->load->view('layout/header_widgets.php');
		$this->load->view('welcome_message', $data);
		$this->load->view('layout/footer.php');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */