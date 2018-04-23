<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class  User_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database(); 
		}
		public function login($user_email,$user_pass)
		{
			return $data=$this->db->get_where('users',array('user_email'=>$user_email,'user_pass'=>$user_pass))->num_rows();
    	}
		
		public function signup($data)
		{	
			$this->db->insert('users',$data);
		}

		public function ForgetPassword($email,$new_pass)
 		{
        	$data =	$this->db->get_where('users',array('user_email'=>$email))->num_rows();
        	if($data==1)
        	{
				$this->db->set('user_pass', $new_pass); 
				$this->db->where('user_email', $email);   
				return	$set_pass=$this->db->update('users'); 
        	} 	
		}
	}


	