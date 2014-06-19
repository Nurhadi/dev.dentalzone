<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage {

    public function get_homepage_info()
    {
    	$ci =& get_instance();

			$ci->db->select('logo, title, keywords, description, slider_title, slider_description, content, image_address, address, phone, image_founder_1, image_founder_2, facebook, twitter');
			$ci->db->limit(1);
			$ci->db->order_by('homepage_id', 'asc');
			$result = $ci->db->get('homepage');

			return $result->row();
    }
}

/* End of file Someclass.php */