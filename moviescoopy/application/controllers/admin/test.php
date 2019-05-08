<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller 
{
      public function __construct()
       {
           parent::__construct();
			$this->load->model('user_model','',TRUE);
			$this->load->library('form_validation');
			$this->load->library('image_lib');
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->helper('date');
			$this->load->library('session');
			$this->load->helper('security');
			date_default_timezone_set('UTC');
         
       }
	    public function update_password()
		{
			$this->load->view('admin/update_password');
		}
		public function index()
		{
		  
		   $result=$this->input->post(null,true);
		   $pass = do_hash($result['password'], 'md5'); 
		   $db_response=$this->user_model->update_password($result,$pass);
		
		}
}