<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newszone extends CI_Controller {
     
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
			'active' =>'news',
			'sel_feed'=>'newsfeed',
			'title'=>'Moviescoopy | Latest News');                     
			$this->session->set_userdata($header_links);
         
       }
	
	public function index()
	{
		$hml = array(
			'hm_l_active'=>'lmnews',
			'ogtitle'=>'Moviescoopy News Feed',
			'ogtitleimg'=>'http://www.moviescoopy.com/images/moviescoopy_news_feed.jpg',
			'ogdesc'=>'Get updated about all the latest news around indian cinema. We do not serve gossips.');                     
			$this->session->set_userdata($hml);
		$data['news']=$this->user_model->get_all_news();
		$this->load->view('header');
		$this->load->view('top_content');
		$this->load->view('content_newsall',$data);
		$this->load->view('footer');
	}
	
	public function news()
	{
	
			
		if(isset($_GET['id']))
		{	
        		
			$data['mnews']=$this->user_model->get_this_news($_GET['id']);
			$data['latest_news']=$this->user_model->get_latest_news();
			$this->load->view('header');
			$this->load->view('movie_news',$data);
			$this->load->view('footer');
		
		}
		else
		{
		 echo "404";
		}
	}
}
