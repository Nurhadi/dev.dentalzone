<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page {

    public function get_page_info($page_id)
    {
    	$ci =& get_instance();

			$ci->db->select('title, keywords, description, content');
			$ci->db->where('page_id', $page_id);
			$ci->db->limit(1);
			$result = $ci->db->get('page');

			return $result->row();
    }
}

/* End of file Page.php */