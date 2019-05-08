<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Titles extends CI_Controller {


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
			 $data['titles']=$this->admin_model->get_title_data();
			
			if($this->session->userdata('logged_in',true))
		   {
				$this->load->view('admin/header');
				$this->load->view('admin/titles',$data);
				$this->load->view('admin/footer');
			}
		   else
		   {
					redirect('index.php/admin/home');
		   }
		}
		
		public function update_title()
		{
		   if($this->session->userdata('logged_in',true))
		   {
		    $result=$this->input->post(NUll,true);
			$sql_response=$this->admin_model->update_title($result);
			$this->session->set_flashdata('item', 'Section titles has been updated Successfully');
		    redirect('index.php/admin/titles');
		   }
		   else
		   {
					redirect('index.php/admin/home');
		   }
		   
		}	
			 
			
		
		
		
}
