<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class wordmodel extends CI_Model {

	public function getwords()
	{
		$this->db->select("English,German");
		$this->db->from("wordmatch");
		
		$query = $this->db->get();
		
		return $query->result();
		
		$num_data_returned = $query->num_rows;
		
		if ($num_data_returned < 1) {
		  echo "There is no data in the database";
		  exit();	
		}
	}
}