<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Treatment extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('treatment_model');
		$this->load->library('homepage');
		$this->load->library('page');
		// $this->output->enable_profiler(true);
	}

	public function index()
	{
		$data['homepage'] = $this->homepage->get_homepage_info();

		$data['page'] = $this->page->get_page_info(3);
		$data['keywords'] = $data['page']->keywords;
		$data['description'] = $data['page']->description;

		$data['treatments'] = $this->treatment_model->get_treatments();

		$this->load->view('treatment_view', $data);
	}
}

/* End of file treatment.php */
/* Location: ./application/controllers/treatment.php */