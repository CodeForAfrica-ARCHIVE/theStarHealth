<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontpage_controller extends CI_Controller {

	public function index()
	{
		$data['title'] = "Welcome";
		
		$this->load->model('welcome_m');
		
		$data['featured'] = $this->welcome_m->get_featured();
		$data['overview'] = $data['featured']['0']['description'];
		$nid = 	0;//$data['featured'][0]['nid'];
		$data['sofar'] = $this->welcome_m->get_story_sofar($nid);
		$data['more_news'] = $this->welcome_m->get_all(null);
		$data['major'] = array_slice($data['featured'], 1);

		$data['helplines'] = $this->welcome_m->get_helplines();
		$data['supportgroups'] = $this->welcome_m->get_supportgroups();
		$data['socialmedias'] = $this->welcome_m->get_socialmedias();
		
		$data['counties'] = $this->welcome_m->get_facilities_counties();
		$data['towns'] = $this->welcome_m->get_towns();

        $data['specialties'] = $this->welcome_m->get_specialties();

		$this->load->view('layout/header.php', $data);	
		$this->load->view('layout/header_widgets.php', $data);
		$this->load->view('frontpage', $data);
		$this->load->view('layout/footer.php');
	}
	public function filter_feed(){
		$section = $_POST['section'];
		$this->load->model('welcome_m');
		$data['filtered_feed'] = $this->welcome_m->get_all($section, false);
		if($section==1){
			$data['title'] = "Features";
		}elseif($section==2){
			$data['title'] = "Opinion";
		}elseif($section==3){
			$data['title'] = "News";
		}else{
			$data['title'] = "Other Health News";
		}
		$this->load->view('filtered', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
