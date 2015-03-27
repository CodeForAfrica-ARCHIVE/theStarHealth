<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontpage_controller extends CI_Controller {

	public function index()
	{
		$data['title'] = "Welcome";
		
		$this->load->model('welcome_m');
		
		$data['featured'] = $this->welcome_m->get_featured();
		$data['overview'] = $data['featured']['0']['description'];

		$featured_theme = 	$data['featured'][0]['theme'];

		$data['sofar'] = $this->welcome_m->get_story_sofar($featured_theme);

		$data['more_news'] = $this->welcome_m->get_all('All');
		$data['tags'] = $this->welcome_m->get_tags();
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

		$data['filtered_feed'] = $this->welcome_m->get_all($section);
		$data['title'] = $section;
		$this->load->view('filtered', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
