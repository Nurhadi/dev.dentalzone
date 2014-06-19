<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_profiles()
	{
		$this->db->select('profile_id, fullname, position, description, photo');
		$this->db->where('status', 'Active');
		$this->db->order_by('profile_id', 'asc');
		$result = $this->db->get('profile');
		return $result;
	}

	public function get_profile_detail($profile_id){
		$this->db->select('fullname, position, description, photo');
		$this->db->where('profile_id', $profile_id);
		$result = $this->db->get('profile');
		return $result->row();
	}
}

?>