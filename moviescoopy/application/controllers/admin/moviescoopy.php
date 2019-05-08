<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Moviescoopy extends CI_Controller {
     
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
			if($this->session->userdata('alogged_in',true))
				   {
							$data['content']=$this->admin_model->get_moviescoopy_data();
							$this->load->view('admin/header');
							$this->load->view('admin/moviescoopy_about',$data);
							$this->load->view('admin/footer');
					}
				   else
				   {
							redirect('index.php/admin/home');
				   }
	
	}
	public function moviescoopy_company()
	{
			if($this->session->userdata('alogged_in',true))
				   {
							$data['content']=$this->admin_model->get_moviescoopy_data();
			$this->load->view('admin/header');
			$this->load->view('admin/moviescoopy_company',$data);
			$this->load->view('admin/footer');
					}
				   else
				   {
							redirect('index.php/admin/home');
				   }
			
	}
	public function moviescoopy_services()
	{
		if($this->session->userdata('alogged_in',true))
				   {
							$data['content']=$this->admin_model->get_moviescoopy_data();
		$this->load->view('admin/header');
		$this->load->view('admin/moviescoopy_services',$data);
		$this->load->view('admin/footer');
					}
				   else
				   {
							redirect('index.php/admin/home');
				   }
	
		
	}
	public function moviescoopy_advertise()
	{
		
		if($this->session->userdata('alogged_in',true))
				   {
							$data['content']=$this->admin_model->get_moviescoopy_data();
		$this->load->view('admin/header');
		$this->load->view('admin/moviescoopy_advertise',$data);
		$this->load->view('admin/footer');
					}
				   else
				   {
							redirect('index.php/admin/home');
				   }
		
		
	}
	public function moviescoopy_privacy()
	{
		

		if($this->session->userdata('alogged_in',true))
				   {
				    $data['content']=$this->admin_model->get_moviescoopy_data();
					$this->load->view('admin/header');
					$this->load->view('admin/moviescoopy_privacy',$data);
					$this->load->view('admin/footer');
					}
				   else
				   {
							redirect('index.php/admin/home');
				   }
		
	}
	public function moviescoopy_terms()
	{
		
		if($this->session->userdata('alogged_in',true))
				   {
							$data['content']=$this->admin_model->get_moviescoopy_data();
		$this->load->view('admin/header');
		$this->load->view('admin/moviescoopy_terms',$data);
		$this->load->view('admin/footer');
					}
				   else
				   {
							redirect('index.php/admin/home');
				   }
	
		
	}
	public function moviescoopy_contact()
	{
		
		if($this->session->userdata('alogged_in',true))
				   {
							$data['content']=$this->admin_model->get_moviescoopy_data();
		$this->load->view('admin/header');
		$this->load->view('admin/moviescoopy_contact',$data);
		$this->load->view('admin/footer');
					}
				   else
				   {
							redirect('index.php/admin/home');
				   }
		
		
	}
	public function moviescoopy_new()
	{
		
		if($this->session->userdata('alogged_in',true))
				   {
							$data['content']=$this->admin_model->get_moviescoopy_data();
		$this->load->view('admin/header');
		$this->load->view('admin/moviescoopy_new',$data);
		$this->load->view('admin/footer');
					}
				   else
				   {
							redirect('index.php/admin/home');
				   }
		
	}
	
	public function moviescoopy_save()
		{
		   if($this->session->userdata('alogged_in',true))
		   {
		    $result=$this->input->post(NUll,true);
			$sql_response=$this->admin_model->update_moviescoopy($result);
			$this->session->set_flashdata('serv_suc', 'Successfully Updated');
		    redirect('admin/moviescoopy');
		   }
		   else
		   {
					redirect('admin/home');
		   }
		   
		}	
	
}
