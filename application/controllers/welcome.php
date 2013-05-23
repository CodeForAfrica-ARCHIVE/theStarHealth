<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['title'] = "Welcome";
		$this->db->select("*");
		$this->db->from("news");
		$this->db->where("featured", 1);
		
		$result = $this->db->get();
		$news = $result->result_array();
		
		$this->db->select("*");
		$this->db->from("news");
		$this->db->where("featured", 0);
		$result = $this->db->get();
		$more_news = $result->result_array();
		
		$data['news'] = $news;
		$data['more_news'] = $more_news;
		
		$this->load->view('layout/header.php', $data);	
		$this->load->view('layout/header_widgets.php');
		$this->load->view('welcome_message', $data);
		$this->load->view('layout/footer.php');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */