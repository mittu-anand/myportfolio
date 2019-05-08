<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Classifieds extends CI_Controller {
     
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
			'active' =>'classifieds',
			'title'=>'Moviescoopy | Classifieds');                     
			$this->session->set_userdata($header_links);
         
       }
	
	public function index()
	{
	
		$data['classifieds']=$this->user_model->get_all_classifieds();
		$data['industries']=$this->user_model->get_all_industry();
		$this->load->view('header');
		$this->load->view('content_classifieds',$data);
		$this->load->view('footer');
	}
	
	public function apply_classified()
	{
		if(isset($_POST))
		{
			$appliedby=$_POST['appliedby'];
			$classifiedid=$_POST['classifiedid'];
			return $this->user_model->apply_classified($appliedby,$classifiedid);
		}
		
	}
}
