<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Sample_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	public function show_all($query){
		$str = "";
		foreach($query as $row):
			$str .= "<tr>";
			$str .= "<td>" . $row->Book_No . "</td>";
			$str .= "<td>" . $row->Book_Title . "</td>";
			$str .= "<td>" . $row->Status . "</td>";
			$str .= "<td>" . $row->Description . "</td>";
			$str .= "<td>" . $row->Publisher . "</td>";
			$str .= "<tr>";
		endforeach;
		return $str;
	}
}