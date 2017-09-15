<?php
defined('BASEPATH') OR exit('no direct script access allowed');
class User extends CI_Controller
{
	 function __construct()
	 {
         parent::__construct();
         $this->load->library('form_validation');
         $this->load->helper('url');
       
        
       
	 }

	 
 	public function login()
 	{
       
       $this->load->view('header');
       $this->load->view('login');
        $this->load->view('footer');
      
 	}

 	public function register()
 	{
      $this->form_validation->set_rules('uname', 'Username', 'trim|required|min_length[3]|max_length[4]');
	  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
	  $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
	   if ($this->form_validation->run() == FALSE)
                {
                         $this->load->view('header');
                         $this->load->view('login');
                         $this->load->view('footer');
                }
                else
                {
                	die("test");
                        $this->load->view('formsuccess');
                }
 	}

	 	
	 
}
?>