<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_data_homepage()
	{
		$this->db->where("homepage_id", "1");
		$result = $this->db->get("homepage");
		return $result;
	}

	public function get_news()
	{
		$this->db->order_by("created_at", "desc");
		$result = $this->db->get("news");
		return $result;
	}

	public function get_data_news($news_id)
	{
		$this->db->where("news_id", $news_id);
		$result = $this->db->get("news");
		return $result;
	}

	public function create_new_news($title, $keywords, $description, $content, $promo, $admin_id)
	{
		$data = array("title" => $title, "keywords" => $keywords, "description" => $description, "content" => $content, "promo" => $promo, "admin_id" => $admin_id);
		$result = $this->db->insert("news", $data);
		return $this->db->insert_id();
	}

	public function update_news($news_id, $title, $keywords, $description, $content, $promo, $admin_id)
	{
		$data = array("title" => $title, "keywords" => $keywords, "description" => $description, "content" => $content, "promo" => $promo, "admin_id" => $admin_id);
		$this->db->where("news_id", $news_id);
		$result = $this->db->update("news", $data);
		return $result;
	}

	public function delete_news($news_id)
	{
		$this->db->where("news_id", $news_id);
		$result = $this->db->delete("news");
		return $result;
	}

	public function upload_thumbnail($file_path, $news){
		$data = array("thumbnail" => $file_path);
		$this->db->where("news_id", $news);
		$result = $this->db->update("news", $data);
		return $result;
	}

	public function get_news_path($news_id){
		$this->db->select('thumbnail')->from('news')->where('news_id',$news_id);
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->row()->thumbnail;
    }
    return false;
	}
}

?>