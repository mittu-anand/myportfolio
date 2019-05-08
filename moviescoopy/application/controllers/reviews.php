<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reviews extends CI_Controller {
     
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
			'active' =>'reviews',
			'title'=>'Moviescoopy | Latest Movie Reviews');                     
			$this->session->set_userdata($header_links);
         
       }
	
	public function index()
	{
	
	    $data['reviews']=$this->user_model->get_reviews();
		$this->load->view('header');
		$this->load->view('content_reviews',$data);
		$this->load->view('footer');
		
	}

	public function review()
	{
	
			
		if(isset($_GET['id']))
		{	
        		
			$data['mreview']=$this->user_model->get_this_movie_review($_GET['id']);
			if($data['mreview'])
			{
			
			$title = array(
				'title'=>'Moviescoopy | Review of Movie'.$data['mreview'][0]->name.' | '.$data['mreview'][0]->review_title); 
				$this->session->set_userdata($title);
			$data['reviews']=$this->user_model->get_reviews();
			$data['latest_news']=$this->user_model->get_latest_news();
			$this->load->view('header');
			$this->load->view('movie_review',$data);
			$this->load->view('footer');
			}
			else
			{
				$title = array(
				'title'=>''); 
				$this->session->set_userdata($title);
				$this->load->view('header');
				$this->load->view('page_not_found.php');
				$this->load->view('footer');
			}
		
		}
		else
		{
				$title = array(
				'title'=>''); 
				$this->session->set_userdata($title);
				$this->load->view('header');
				$this->load->view('page_not_found.php');
				$this->load->view('footer');
		}
	}
}
