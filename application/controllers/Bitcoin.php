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
        $this->load->library('session');
        $this->load->database();
        if(!$this->session->userdata('user_id'))
         {
             redirect(base_url().'login');
         }
    }
    public function index()
    {
        $email= $this->session->userdata('user_email');
        $data=$this->Daemon_model->daemonData();
        $user=$data[0]->daemon_name;
        $pass=$data[0]->daemon_password;
        $host=$data[0]->daemon_ip;
        $port=$data[0]->daemon_port;

        $deamon=new Client($host, $port, $user, $pass);
     $response['new']= $deamon->getAddress($email);
        $response['listing']= $deamon->getAddressList($email);
        //print_r($response); die();
        $this->load->view('page/address',$response);
    }
    public function createAddress()
    {
        $email= $this->session->userdata('user_email');
        $data=$this->Daemon_model->daemonData();
        $user=$data[0]->daemon_name;
        $pass=$data[0]->daemon_password;
        $host=$data[0]->daemon_ip;
        $port=$data[0]->daemon_port;
        $deamon=new Client($host, $port, $user, $pass);
        echo $response['new']= $deamon->getAddress($email);
        $response['listing']= $deamon->getAddressList($email);
        //print_r($response); die();
        $this->load->view('page/address',$response);
    }
}
