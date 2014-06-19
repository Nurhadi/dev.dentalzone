<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Treatment_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_treatments()
	{
		$this->db->select('treatment_id, title, big_image, small_image_1, small_image_2, small_image_3, small_image_4');
		$this->db->where('status', 'Active');
		$this->db->order_by('created_at', 'desc');
		$result = $this->db->get('treatment');
		return $result;
	}
}

?>