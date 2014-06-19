<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_latest_news()
	{
		$this->db->select('news_id, title, thumbnail, content, news.created_at, firstname, lastname');
		$this->db->from('news');
		$this->db->join('admin', 'admin.id = news.admin_id');
		$this->db->where('promo', 0);
		$this->db->limit(3);
		$this->db->order_by('news_id', 'desc');
		$result = $this->db->get();
		return $result;
	}

	public function get_latest_promo()
	{
		$this->db->select('news_id, title, thumbnail, content, created_at');
		$this->db->where('promo', 0); // this should be 1 for promo
		$this->db->order_by('news_id', 'desc');
		$result = $this->db->get('news');
		return $result;
	}

	public function get_news_detail($news_id)
	{
		$this->db->select('title, keywords, description, thumbnail, content, news.created_at, firstname, lastname');
		$this->db->from('news');
		$this->db->join('admin', 'admin.id = news.admin_id');
		$result = $this->db->get();
		return $result->row();
	}

	public function get_homepage_info(){
		$this->db->select('logo, title, keywords, description, slider_title, slider_description, content, image_address, address, phone, image_founder_1, image_founder_2, facebook, twitter');
		$this->db->limit(1);
		$this->db->order_by('homepage_id', 'asc');
		$result = $this->db->get('homepage');
		return $result->row();
	}

	public function get_archives($year)
	{
		$this->db->select('news_id, title');
		$this->db->like('created_at', $year);
		$this->db->order_by('created_at', 'desc');
		$result = $this->db->get('news');
		return $result;
	}
}

?>