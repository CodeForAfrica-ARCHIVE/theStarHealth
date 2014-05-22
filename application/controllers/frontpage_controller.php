<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontpage_controller extends CI_Controller {

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
		
		$data['sofar'] = $this->welcome_m->get_story_sofar($data['news'][0]['id']);
		
		$data['helplines'] = $this->welcome_m->get_helplines($data['news'][0]['id']);
		$data['supportgroups'] = $this->welcome_m->get_supportgroups($data['news'][0]['id']);
		$data['socialmedias'] = $this->welcome_m->get_socialmedias($data['news'][0]['id']);
	
		if($cat==0){
			$data['more_news'] = $this->welcome_m->get_all();
		}else{
			$data['more_news'] = $this->welcome_m->get_featured($cat, 0);
		}
		
		$data['featured'] = $this->welcome_m->get_all_featured();
		
		$data['counties'] = $this->welcome_m->get_facilities_counties();
		$data['towns'] = $this->welcome_m->get_towns();
		
		$this->load->view('layout/header.php', $data);	
		$this->load->view('layout/header_widgets.php', $data);
		$this->load->view('frontpage', $data);
		$this->load->view('layout/footer.php');
	}
	public function filter_feed(){
		$section = $_POST['section'];
		$this->load->model('welcome_m');
		$data['filtered_feed'] = $this->welcome_m->get_filtered_feed($section);
		if($section==1){
			$data['title'] = "Latest";
		}elseif($section==2){
			$data['title'] = "Features";
		}elseif($section==3){
			$data['title'] = "Opinion";
		}elseif($section==4){
			$data['title'] = "News";
		}else{
			$data['title'] = "Other Health News";
		}
		$this->load->view('filtered', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
