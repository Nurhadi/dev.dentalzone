<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class About_us_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function send_message($fullname, $email, $subject, $message)
	{
		$data = array("fullname" => $fullname, "email" => $email, "subject" => $subject, "message" => $message);
		$result = $this->db->insert("inbox", $data);
		return $result;
	}
}

?>