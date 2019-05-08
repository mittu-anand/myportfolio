<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax_manager extends CI_Controller {


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
		
		    $data['banner_images']=$this->admin_model->get_banner_images();
			
			if($this->session->userdata('logged_in',true))
		    {
				$this->load->view('admin/header');
				$this->load->view('admin/update_password');
				$this->load->view('admin/footer');
			}
		   else
		   {
					redirect('index.php/admin/home');
		   }
		}
		public function checkcurrentpassword()
		{
			$password=$_POST['current_password'];
			echo "yes";
		}
		
		
}
