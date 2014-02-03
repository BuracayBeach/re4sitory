<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search_model extends CI_Model {
	function query_result($details){
		$details['search_term'] = filter_var($details['search_term'], FILTER_SANITIZE_STRING);

		//construct query strings
		$q = array(
			'select'	=> "select * from book b, author a ",
			'where'		=> "where " . $details['status_check'] . " b.book_no = a.book_no and " . $details['search_by'] . " like '%" . $details['search_term'] . "%' ",
			'orderby'   => "order by " . $details['order_by']
		);

		$query_string = $q['select'] . $q['where'] . $q['orderby'];

		return $this->db->query($query_string)->result();

		// return json_encode(ajshdfgajs);
	}
}

/* End of file search_model.php */
/* Location: ./application/controllers/search_model.php */