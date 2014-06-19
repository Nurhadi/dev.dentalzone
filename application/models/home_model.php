<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_sliders()
	{
		$this->db->select('slider_name, slider_path');
		$this->db->where('status', 'Active');
		$this->db->order_by('slider_id', 'desc');
		$result = $this->db->get('slider');
		return $result;
	}

	public function get_homepage_info(){
		$this->db->select('logo, title, keywords, description, slider_title, slider_description, content, image_address, address, phone, image_founder_1, image_founder_2, facebook, twitter');
		$this->db->limit(1);
		$this->db->order_by('homepage_id', 'asc');
		$result = $this->db->get('homepage');
		return $result->row();
	}
}

?>