<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {


		    public function __construct()
		    {
				parent::__construct();
				$this->load->model('admin_model','',TRUE);
				$this->load->library('form_validation');
				$this->load->library('image_lib');
				$this->load->helper('url');
				$this->load->helper('form');
				$this->load->helper('date');
				$this->load->library('session');
				date_default_timezone_set('UTC');
			 
		    }
	
			public function index()
			{
				
				$this->load->view('admin/landing');
				
			}
			
			public function logout()
			{
				if($this->session->userdata('logged_in',true))
		   {
			
				$this->session->set_flashdata('logout_suc','You are Successfully Logged Out');
				$this->session->sess_destroy();
			    redirect('index.php/admin/home');
			}
			else
			{
				redirect('index.php/admin/home');
			}
		}
		
		
			
}
