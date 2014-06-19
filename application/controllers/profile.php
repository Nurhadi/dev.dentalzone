<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('profile_model');
		$this->load->library('homepage');
		$this->load->library('page');
		// $this->output->enable_profiler(true);
	}

	public function index()
	{
		$data['homepage'] = $this->homepage->get_homepage_info();

		$data['page'] = $this->page->get_page_info(2);
		$data['keywords'] = $data['page']->keywords;
		$data['description'] = $data['page']->description;

		$data['profiles'] = $this->profile_model->get_profiles();

		$this->load->view('profile_view', $data);
	}

	public function profile_detail()
	{
		$data['homepage'] = $this->homepage->get_homepage_info();

		$data['page'] = $this->page->get_page_info(2);
		$data['keywords'] = $data['page']->keywords;
		$data['description'] = $data['page']->description;

		$profile_id = $this->uri->segment(3);
		$data['profile'] = $this->profile_model->get_profile_detail($profile_id);

		$this->load->view('profile_detail_view', $data);
	}
}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */