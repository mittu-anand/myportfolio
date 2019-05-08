<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blogzone extends CI_Controller {
     
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
			'active' =>'blogs',
			'sel_feed'=>'blogfeed',
			'title'=>'Moviescoopy | Blogs');                     
			$this->session->set_userdata($header_links);
         
       }
	
	public function index()
	{
		$hml = array(
			'hm_l_active'=>'lmblogs',
			'ogtitle'=>'Moviescoopy Blogger',
			'ogtitleimg'=>'http://www.moviescoopy.com/images/moviescoopy_blog_feed.jpg',
			'ogdesc'=>'Blogs are history! Read, think and share!');                     
			$this->session->set_userdata($hml);
		$data['blogs']=$this->user_model->get_all_blogs();
		$data['blogcategories']=$this->user_model->get_all_blog_categories();
		$this->load->view('header');
		$this->load->view('top_content');
		$this->load->view('content_blogall',$data);
		$this->load->view('footer');
	}
	
	public function blog()
	{
	
			
		if(isset($_GET['id']))
		{	
        		
			$data['mblog']=$this->user_model->get_this_blog($_GET['id']);
			if($data['mblog'])
			{
			     $title = array(
				'title'=>$data['mblog'][0]->sname); 
				$this->session->set_userdata($title);
			$data['latest_blogs']=$this->user_model->get_latest_blogs();
			$this->load->view('header');
			$this->load->view('movie_blogs',$data);
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
	
	public function filter()
	{
		if(isset($_GET['category']))
		{	
        		
			$data['blogs']=$this->user_model->get_all_blogs_category($_GET['category']);
			$data['blogcategories']=$this->user_model->get_all_blog_categories();
			$this->load->view('header');
			$this->load->view('top_content');
			$this->load->view('content_blogall',$data);
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
}
