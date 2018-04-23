<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* developed by Shubham Sahu
*/

include APPPATH . 'third_party/jsonRPCClient.php';
include APPPATH . 'third_party/Client.php';

class Bitcoin extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Daemon_model');
		$this->load->database();
	}
	public function index()
	{
		$data=$this->Daemon_model->daemonData();
		$user=$data[0]->daemon_name;
		$pass=$data[0]->daemon_password;
		$ip=$data[0]->daemon_ip;
		$port=$data[0]->daemon_port;
		$deamon=new Client($user,$pass,$ip,$port);
		echo $deamon->getAddress('shubhamsahu707@gmail.com');

	}
}