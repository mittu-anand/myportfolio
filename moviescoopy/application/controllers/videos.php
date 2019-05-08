<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Videos extends CI_Controller {
     
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
			'active' =>'stack',
			'stack_menu'=>'video',
			'title'=>'Moviescoopy | Latest Movie Videos');                     
			$this->session->set_userdata($header_links);
         
       }
	
	public function index()
	{
		$video_menu = array(
			'video_menu' =>'trailor');                     
			$this->session->set_userdata($video_menu);
		$data['videos']=$this->user_model->get_trailors();
		$this->load->view('header');
		$this->load->view('videos',$data);
		$this->load->view('footer');
		
	}
	
	public function filter()
	{
		if(isset($_GET['cat']))
		{
			$cat=$_GET['cat'];
			if($cat=='Trailors')
			{
				$video_menu = array(
			    'video_menu' =>'trailor',
				'title'=>'Moviescoopy | Latest Movie Trailors');                     
			    $this->session->set_userdata($video_menu);
			}
			else if($cat=='Songs')
			{
				$video_menu = array(
				'video_menu' =>'songs',
				'title'=>'Moviescoopy | Latest Songs');                     
				$this->session->set_userdata($video_menu);
			}
			else if($cat=='Interviews')
			{
				$video_menu = array(
			'video_menu' =>'interview',
			'title'=>'Moviescoopy | Latest Interviews');                     
			$this->session->set_userdata($video_menu);
			}
			else if($cat=='Events')
			{
			$video_menu = array(
			'video_menu' =>'events',
			'title'=>'Moviescoopy | Latest Events');                     
			$this->session->set_userdata($video_menu);
			}
			else if($cat=='Short Films')
			{
			$video_menu = array(
			'video_menu' =>'sf',
			'title'=>'Moviescoopy | Latest Short Films');                     
			$this->session->set_userdata($video_menu);
			}
			else if($cat=='Movies Online')
			{
				$video_menu = array(
				'video_menu' =>'monline',
				'title'=>'Moviescoopy | Watch Movies Online');                     
				$this->session->set_userdata($video_menu);
			}
			$data['videos']=$this->user_model->get_video_filter($cat);
			$this->load->view('header');
			$this->load->view('videos',$data);
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
	
	public function watch_video()
	{
		if(isset($_GET['id']))
		{
			
			$data['video']=$this->user_model->get_this_video($_GET['id']);
			if($data['video'])
			{
			$title = array(
				'title'=>'Moviescoopy | '.$data['video'][0]->vname);                     
				$this->session->set_userdata($title);
			$data['latest_videos']=$this->user_model->get_latest_videos();
			$this->load->view('header');
			$this->load->view('watch_videos',$data);
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
