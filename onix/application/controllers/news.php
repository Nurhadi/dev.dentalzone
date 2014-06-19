<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('news_model');
		$this->load->model('page_model');
		$this->load->library('sidebar');
		// $this->output->enable_profiler(true);
	}

	public function index()
	{
		if($this->session->userdata('logged_in') == 1){
			$admin = $this->admin_model->get_data_admin($this->session->userdata('email'));
			foreach ($admin->result() as $row)
			{
				$data["fullname"] = $row->firstname . " " . $row->lastname;
			}

			$data["newss"] = $this->news_model->get_news();

			$news = $this->page_model->get_data_page(1);
			foreach ($news->result() as $hp)
			{
				$data["title"] = $hp->title;
				$data["keywords"] = $hp->keywords;
				$data["description"] = $hp->description;
				$data["content"] = $hp->content;
			}

			$data['unread_message'] = $this->sidebar->get_unread_message_count();
			$this->load->view('news_view', $data);
		}
		else
		{
			redirect('/login', 'refresh');
		}
	}

	public function news_process()
	{
		$title = $this->input->post("title");
		$keywords = $this->input->post("keywords");
		$description = $this->input->post("description");
		$thumbnail = $this->input->post("thumbnail");
		$content = $this->input->post("content");
		$promo = $this->input->post("promo");
		$form_action = $this->input->post("form_action");
		$admin_id = $this->admin_model->get_admin_id($this->session->userdata('email'));

		if($this->input->post("form_action") === "create"){
			$news = $this->news_model->create_new_news($title, $keywords, $description, $content, $promo, $admin_id);
			$news_id = $news;
		}
		else{
			$news_id = $this->input->post("news_id");
			$news = $this->news_model->update_news($news_id, $title, $keywords, $description, $content, $promo, $admin_id);
		}


		if($news){
			$config['upload_path'] = './../assets/uploads/news/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload("thumbnail"))
			{
				if($thumbnail === true){
					$this->session->set_flashdata("status", $this->upload->display_errors());
					redirect("news");
				}
				else{
					$this->session->set_flashdata("status", "Success update data news");
					redirect("news");
				}
			}
			else
			{
				$old_thumbnail_path = $this->news_model->get_news_path($news_id);
				if($old_thumbnail_path){
					unlink("./../".$old_thumbnail_path);
				}

				$data = array('upload_data' => $this->upload->data());
				$file_path = "assets/uploads/news/" . $data["upload_data"]["file_name"];
				$upload_slider = $this->news_model->upload_thumbnail($file_path, $news_id);

				$this->session->set_flashdata("status", "Success create data news");
				redirect("news");
			}
		}
		else{
			$this->session->set_flashdata("status", "Error");
			redirect("news");
		}
	}

	// create news ajax
	// public function create_new_news()
	// {
	// 	$title = $this->input->post("title");
	// 	$keywords = $this->input->post("keywords");
	// 	$description = $this->input->post("description");
	// 	$thumbnail = $this->input->post("thumbnail");
	// 	$content = $this->input->post("content");
	// 	$promo = $this->input->post("promo");
	// 	$admin_id = $this->admin_model->get_admin_id($this->session->userdata('email'));

	// 	$new_news = $this->news_model->create_new_news($title, $keywords, $description, $thumbnail, $content, $promo, $admin_id);

	// 	if($new_news){
	// 		echo "success";
	// 	}
	// 	else{
	// 		echo "error";
	// 	}
	// }

	public function edit_news()
	{
		$news_id = $this->input->post("news_id");

		$news = $this->news_model->get_data_news($news_id);
		foreach($news->result() as $b)
		{
			$title = $b->title;
			$keywords = $b->keywords;
			$description = $b->description;
			$thumbnail = $b->thumbnail;
			$content = $b->content;
			$promo = $b->promo;
		}

		echo $title . "|" . $keywords . "|" . $description . "|" . $thumbnail . "|" . $content . "|" . $promo;
	}

	public function update_news()
	{
		$news_id = $this->input->post("news_id");
		$title = $this->input->post("title");
		$keywords = $this->input->post("keywords");
		$description = $this->input->post("description");
		$thumbnail = $this->input->post("thumbnail");
		$content = $this->input->post("content");
		$promo = $this->input->post("promo");
		$admin_id = $this->admin_model->get_admin_id($this->session->userdata('email'));

		$update_news = $this->news_model->update_news($news_id, $title, $keywords, $description, $thumbnail, $content, $promo, $admin_id);

		if($update_news){
			echo "success";
		}
		else{
			echo "error";
		}
	}

	public function delete_news()
	{
		$news_id = $this->input->post("news_id");
		$thumbnail = $this->news_model->get_news_path($news_id);
		$news = $this->news_model->delete_news($news_id);

		if($news){
			if($thumbnail){
				unlink("./../".$thumbnail);
			}
			echo "success";
		}
		else{
			echo "error";
		}
	}
}

/* End of file news.php */
/* Location: ./application/controllers/news.php */