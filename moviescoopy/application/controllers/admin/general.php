<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class General extends CI_Controller {



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
		 	if($this->session->userdata('logged_in',true))
		   {
			
			$data['tagline']=$this->admin_model->get_tagline();
			$data['copyright']=$this->admin_model->get_copyright();
			$data['socials']=$this->admin_model->get_socials();
			$data['general_info']=$this->admin_model->get_general_info();
			$this->load->view('admin/header');
			$this->load->view('admin/general',$data);
			$this->load->view('admin/footer');
			}
			else
			{
				 redirect('index.php/admin/home');
			}
			
		}
		
		public function update_tagline()
		{
		if($this->session->userdata('logged_in',true))
		   {
			
			$this->form_validation->set_rules('tagline', 'Tagline', 'required');
			if ($this->form_validation->run() == FALSE)
			{
			   
				$this->load->view('admin/header');
				$this->load->view('admin/general');
				$this->load->view('admin/footer');
			}
		else
			{
			   $result=$this->input->post(Null,true);
			   $db_response=$this->admin_model->update_tagline($result);
			   if($db_response)
			   {
			            $this->session->set_flashdata('tag_suc', 'Slideshow Content has been updated successfully');
		   				redirect('index.php/admin/general');
			   }
			   else
			   {
						$this->session->set_flashdata('tag_err', 'Oops! Something wrong happened! Please retry!');
		   				redirect('index.php/admin/general');
			   }
			}
			}
			else
			{
				 redirect('index.php/admin/home');
			}
		}
		
		
		public function update_copyright()
		{
		if($this->session->userdata('logged_in',true))
		   {
			$this->form_validation->set_rules('copyright', 'Copyright', 'required');
			if ($this->form_validation->run() == FALSE)
			{
			   
				$this->load->view('admin/header');
				$this->load->view('admin/general');
				$this->load->view('admin/footer');
			}
		else
			{
			   $result=$this->input->post(Null,true);
			   $db_response=$this->admin_model->update_copyright($result);
			   if($db_response)
			   {
			            $this->session->set_flashdata('copy_suc', 'Copyright has been updated successfully');
		   				redirect('index.php/admin/general');
			   }
			   else
			   {
						$this->session->set_flashdata('copy_err', 'Oops! Something wrong happened! Please retry!');
		   				redirect('index.php/admin/general');
			   }
			}
			}
			else
			{
				 redirect('index.php/admin/home');
			}
		}
			 
			
		public function update_social()
		{
			if($this->session->userdata('logged_in',true))
		     {
		     $result=$this->input->post(null,true);
			 $dbresponse=$this->admin_model->update_social($result);
			 $this->session->set_flashdata('copy_suc', 'Social media information has been updated successfully');
		   	 redirect('index.php/admin/general');
			 }
			 else
			 {
				 redirect('index.php/admin/home');
			 }
		}
		
		public function update_general_info()
		{
			if($this->session->userdata('logged_in',true))
		     {
		     $result=$this->input->post(null,true);
			 $dbresponse=$this->admin_model->update_general_info($result);
			 $this->session->set_flashdata('copy_suc', 'General information has been updated successfully');
		   	 redirect('index.php/admin/general');
			 }
			 else
			 {
				 redirect('index.php/admin/home');
			 }
		}
}
