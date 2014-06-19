<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('news_model');
		$this->load->library('homepage');
		// $this->output->enable_profiler(true);
	}

	public function index()
	{
		$data['sliders'] = $this->home_model->get_sliders();
		$data['homepage'] = $this->homepage->get_homepage_info();
		$data['keywords'] = $data['homepage']->keywords;
		$data['description'] = $data['homepage']->description;
		$data['news'] = $this->news_model->get_latest_news();

		$this->load->view('home_view', $data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */