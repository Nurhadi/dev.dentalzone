<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About_us extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('about_us_model');
		$this->load->library('homepage');
		$this->load->library('page');
		// $this->output->enable_profiler(true);
	}

	public function index()
	{
		$data['homepage'] = $this->homepage->get_homepage_info();

		$data['page'] = $this->page->get_page_info(4);
		$data['keywords'] = $data['page']->keywords;
		$data['description'] = $data['page']->description;

		$this->load->view('about_us_view', $data);
	}

	public function send_message()
	{
		$fullname = $this->input->post("fullname");
		$email = $this->input->post("email");
		$subject = $this->input->post("subject");
		$message = $this->input->post("message");

		$send_message = $this->about_us_model->send_message($fullname, $email, $subject, $message);

		if($send_message){
			redirect("about_us");
		}
		else{
			redirect("home");
		}
	}
}

/* End of file about_us.php */
/* Location: ./application/controllers/about_us.php */