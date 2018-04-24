<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->library('session'); 
		$this->load->database();
		 $this->load->library('form_validation');
	}	
	public function index()
	{			
		$this->load->view('page/login');		
	}
	public function login_user()
	{
		$this->form_validation->set_rules('user_email', 'User_Email', 'required');
        $this->form_validation->set_rules('user_pass', 'Password', 'required',
                        		array('required' => 'You must provide value') );

		if ($this->form_validation->run() == FALSE)
        {     echo "hello";die();
             redirect(base_url().'login');
        }
        else
        {
            $user_email = $this->input->post('user_email');
			$user_pass = $this->input->post('user_pass');
			$data = $this->User_model->login($user_email,$user_pass);
			$data2 = $this->db->get('users');
			if($data == 1)
			{
			    $row = $data2->row();
				$data1 = array(
				                'user_id' => $row->user_id,
				                'user_name' => $row->user_name,
				                'user_email' => $row->user_email,
				                'user_pass' => $row->user_pass,
				                'login_ind'=>true,
				               );
				$this->session->set_userdata($data1);
				redirect(base_url().'login/profile');
			}
			else
			{  
			    redirect(base_url().'login');  
			}   
        }
		
	}
	public function signup_user()
	{
		$this->load->view('page/signup');
	}
	public function signup()
	{
		$data=array(
		'user_name'=> $this->input->post('user_name'),
		'user_email' => $this->input->post('user_email'),
		'user_pass' => $this->input->post('user_pass'),
					);
		$data = $this->User_model->signup($data);
		$this->load->view('page/login');
	}

	public function forget()
	{
		$this->load->view('page/forget');
	}
	public function forget_pass()
	{
		$email = $this->input->post('email');
		$new_pass = $this->input->post('new_pass');     
        $set_pass = $this->User_model->ForgetPassword($email,$new_pass); 
        if($set_pass)
        {
        	$this->load->view('page/login');        
        }
        else
        {
            $this->load->view('page/forget');
   		}
	}
	public function logout()
	{
        $this->session->sess_destroy();
        redirect(base_url().'login');
    }
    public function profile()
	{
        $this->load->view('page/profile');    
    }
    public function user_dashboard()
	{			
		$this->load->view('page/user_dashboard');		
	}
	public function address()
	{			
		$this->load->view('page/address');		
	}
	public function payment()
	{			
		$this->load->view('page/payment');		
	}
	public function Security()
	{			
		$this->load->view('page/security');		
	}
	public function transaction()
	{			
		$this->load->view('page/transaction');		
	}
	public function support()
	{			
		$this->load->view('page/support');		
	}
	public function demo()
	{			
		$this->load->view('page/dashboards');		
	}
}
