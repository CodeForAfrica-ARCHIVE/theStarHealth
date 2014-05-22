<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller {

	public function index()
	{
		$article = $_GET['id'];
		
		$this->load->model('article_m');
		$story = $this->article_m->get_article($article);
		
		$data['story'] = $story[0];
		$data['title'] = $story[0]['title'];
		
		$this->load->view('layout/header.php', $data);	
		$this->load->view('layout/header_widgets.php');
		$this->load->view('article', $data);
		$this->load->view('layout/footer.php');
	}
}