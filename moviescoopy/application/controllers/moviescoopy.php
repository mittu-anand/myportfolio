<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Moviescoopy extends CI_Controller {
     
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
			date_default_timezone_set('UTC');
			           $header_links = array(
			'active' =>'');                     
			$this->session->set_userdata($header_links);
         
       }  
         
      
	
	public function index()
	{
		
		  $m_sub_active = array(
			'm_sub' =>'home');                     
			$this->session->set_userdata($m_sub_active);
		$data['content']=$this->user_model->get_moviescoopy_data();
		$this->load->view('header');
		$this->load->view('moviescoopy_sub_header');
		$this->load->view('moviescoopy_about',$data);
		$this->load->view('footer');
	}
	public function company()
	{
		
		  $m_sub_active = array(
			'm_sub' =>'company');                     
			$this->session->set_userdata($m_sub_active);
			$data['content']=$this->user_model->get_moviescoopy_data();
		$this->load->view('header');
		$this->load->view('moviescoopy_sub_header');
		$this->load->view('moviescoopy_company',$data);
		$this->load->view('footer');
	}
	public function services()
	{
		
		  $m_sub_active = array(
			'm_sub' =>'services');                     
			$this->session->set_userdata($m_sub_active);
			$data['content']=$this->user_model->get_moviescoopy_data();
		$this->load->view('header');
		$this->load->view('moviescoopy_sub_header');
		$this->load->view('moviescoopy_services',$data);
		$this->load->view('footer');
	}
	public function advertise()
	{
		
		  $m_sub_active = array(
			'm_sub' =>'advertise');                     
			$this->session->set_userdata($m_sub_active);
			$data['content']=$this->user_model->get_moviescoopy_data();
		$this->load->view('header');
		$this->load->view('moviescoopy_sub_header');
		$this->load->view('moviescoopy_advertise',$data);
		$this->load->view('footer');
	}
	public function privacy()
	{
		
		  $m_sub_active = array(
			'm_sub' =>'privacy');                     
			$this->session->set_userdata($m_sub_active);
			$data['content']=$this->user_model->get_moviescoopy_data();
		$this->load->view('header');
		$this->load->view('moviescoopy_sub_header');
		$this->load->view('moviescoopy_privacy',$data);
		$this->load->view('footer');
	}
	public function terms()
	{
		
		  $m_sub_active = array(
			'm_sub' =>'terms');                     
			$this->session->set_userdata($m_sub_active);
			$data['content']=$this->user_model->get_moviescoopy_data();
		$this->load->view('header');
		$this->load->view('moviescoopy_sub_header');
		$this->load->view('moviescoopy_terms',$data);
		$this->load->view('footer');
	}
	public function contact()
	{
		
		  $m_sub_active = array(
			'm_sub' =>'contact');                     
			$this->session->set_userdata($m_sub_active);
			$data['content']=$this->user_model->get_moviescoopy_data();
		$this->load->view('header');
		$this->load->view('moviescoopy_sub_header');
		$this->load->view('moviescoopy_contact',$data);
		$this->load->view('footer');
	}
	public function whats_new()
	{
		
		  $m_sub_active = array(
			'm_sub' =>'');                     
			$this->session->set_userdata($m_sub_active);
			$data['content']=$this->user_model->get_moviescoopy_data();
		$this->load->view('header');
		$this->load->view('moviescoopy_sub_header');
		$this->load->view('moviescoopy_new',$data);
		$this->load->view('footer');
	}
	
}
