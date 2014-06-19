<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('news_model');
		$this->load->library('homepage');
		$this->load->library('page');
		// $this->output->enable_profiler(true);
	}

	public function index()
	{
		$data['homepage'] = $this->homepage->get_homepage_info();

		$data['page'] = $this->page->get_page_info(1);
		$data['keywords'] = $data['page']->keywords;
		$data['description'] = $data['page']->description;

		$data['news'] = $this->news_model->get_latest_news();
		$data['promo'] = $this->news_model->get_latest_promo();
		$data['archives2014'] = $this->news_model->get_archives(2014);

		$this->load->view('news_view', $data);
	}

	public function news_detail(){
		$data['homepage'] = $this->homepage->get_homepage_info();

		$news_id = $this->uri->segment(3);
		$data['news'] = $this->news_model->get_news_detail($news_id);
		$data['keywords'] = $data['news']->keywords;
		$data['description'] = $data['news']->description;
		$data['promo'] = $this->news_model->get_latest_promo();
		$data['archives2014'] = $this->news_model->get_archives(2014);

		$this->load->view('news_detail_view', $data);
	}
}

/* End of file news.php */
/* Location: ./application/controllers/news.php */