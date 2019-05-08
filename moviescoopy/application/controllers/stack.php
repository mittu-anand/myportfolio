<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stack extends CI_Controller {
     
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
			'active' =>'stack');                     
			$this->session->set_userdata($header_links);
         
       }
	
	public function index()
	{
		
		//$data['videos']=$this->user_model->get_all_talents();
		$this->load->view('header');
		$this->load->view('stack');
		$this->load->view('footer');
		
	}
	
	
}
