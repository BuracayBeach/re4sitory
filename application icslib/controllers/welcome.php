<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		/*	

			Php Coding ( for Learning/Recalling guys :D  )


			1) to Declare a variable with initialization:

				$variable_name = "String here";



			2) to Check if the search button from the View  search_view.php  is clicked
	
				if (isset($_POST["submit"])) { 	// the value "submit" is the name given to the search button in    search_view.php : 	<input type="submit" name="submit" value="Search" /><br/>
					<do something>
				}

				//NOTE: It must be checked first if the search/submit button is clicked, or else an error will occur in getting data (i.e Search Terms) which is done in #3



			3) to get the Data from the objects on our View (Textbox for Search Terms and Dropdowns for Search By & Order By) and put them to variables

				$search_term = $_POST['search'];	// the value  'search'  in   $_POST['search']   came from   search_view.php  , the name attribute of the textbox:  <input type="text" name='search'/>
													
				// the same goes for the dropdowns 'Search By' & 'Order By'
					// the Attribute name of  Search By is  'search_by'  from the line   <select name="search_by">      in  search_view.php
					// the Attribute name of  Search By is  'order_by'  from the line   <select name="order_by">      in  search_view.php


			
			4) to send a query to the database and put the result to the key 	$data['query']

				$data['query'] = $this->db->query("select * from book")->result();


				//hint: Recall and use the keywork LIKE to get results that has the substring of a column's string
					// here's a sample query that uses LIKE
					// SELECT * FROM book WHERE book_title LIKE '%sample%'

			

			5) to show the page, after sending  $data  as data package containing the query result to  search_view

				$this->load->view('search_view' , $data);

		*/


		// Here's the sample query that prints all data from the book table then sent to search_view.php

		// $data['query'] = $this->db->query("select * from book")->result();


		$query = $this->db->query("select * from book")->result();

		$this->load->model('sample_model');

		$data['all'] = $this->sample_model->show_all($query);



		$this->load->view('search_view', $data); //show the page, sending $data as data package containing the query result
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */