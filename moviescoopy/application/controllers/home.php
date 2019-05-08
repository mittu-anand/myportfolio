<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
     
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
			'active' =>'home',
			'title'=>'Moviescoopy | Official Online Face OF Cinema',
			'ogtitle'=>'Moviescoopy',
			'ogtitleimg'=>'http://www.moviescoopy.com/images/moviescoopy.jpg',
			'ogdesc'=>'Moviescoopy is the online face of cinema, which has now become a revolution in the word of cinema. Moviescoopy is all about pages,
			yes,the official online page that comes straight away from movies and celebrities and most importantly it let talented people to make their entry to Indian Cinema,despite of language. ');                     
			$this->session->set_userdata($header_links);
       }
	
	public function index()
	{
	
		$this->load->view('header');
		$data['running']=$this->user_model->get_running_movies();
		$data['upcoming']=$this->user_model->get_upcoming_movies();
		$data['lead_portfolios']=$this->user_model->get_lead_portfolios();
		$this->load->view('content_home',$data);
		$this->load->view('footer');
	
	}
}
