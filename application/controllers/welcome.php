<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$to_view['table'] = $this->search();
		
		$this->load->view('search_view', $to_view);
		// $this->load->view('search_view', json_encode($to_view));
	}

	public function search(){
		//set defaults
		$search_term = "";
		$search_by = "book_title";
		$order_by = "a.book_no";
		$status_check = "status='available' or status='borrowed' or status='reserved'";

		if (isset($_POST["submit"])){
			//get user input
			$search_term = $_POST['search'];
			$search_by = $_POST['search_by'];
			$order_by = $_POST['order_by'];			

			//filter by book status
			if (!isset($_POST["available"])) $status_check = str_replace("status='available' or ","",$status_check);
			if (!isset($_POST["borrowed"])) $status_check = str_replace("status='borrowed' or ","",$status_check);
			if (!isset($_POST["reserved"])){
				$status_check = str_replace(" or status='reserved'","",$status_check);
				$status_check = str_replace("status='reserved'","",$status_check);
			}

			if($search_by == "book_no")	$search_by = "a.book_no";
			if($order_by == "book_no") $order_by = "a.book_no";
		}


		if($status_check!="") $status_check = "(" . $status_check . ") and";


		$details = array(
			'search_term' 	=> $search_term,
			'search_by' 	=> $search_by,
			'order_by' 		=> $order_by,
			'status_check' 	=> $status_check
		);

		$this->load->model("search_model");		
		return $this->search_model->query_result($details);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */