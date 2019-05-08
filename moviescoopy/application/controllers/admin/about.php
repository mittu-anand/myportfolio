<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {


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
			 $data['about_us']=$this->admin_model->get_about_us();
			
			if($this->session->userdata('logged_in',true))
		   {
				$this->load->view('admin/header');
				$this->load->view('admin/about',$data);
				$this->load->view('admin/footer');
			}
		   else
		   {
					redirect('index.php/admin/home');
		   }
		
		}
		
		public function update_about()
		{
		   if($this->session->userdata('logged_in',true))
		   {
		    $result=$this->input->post(NUll,true);
			$sql_response=$this->admin_model->update_about($result);
			$this->session->set_flashdata('item', 'Successfully Updated');
		    redirect('index.php/admin/about');
		   }
		   else
		   {
					redirect('index.php/admin/home');
		   }
		   
		}	
			 
			
		
		
		
}
