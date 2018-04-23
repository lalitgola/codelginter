<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* create model
*/
class Daemon_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}
	public function daemonData()
	{
		 return $query=$this->db->get('daemon')->result();
		//print_r($query); die();
	}
}