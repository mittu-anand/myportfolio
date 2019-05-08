<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Celebfolio extends CI_Controller {
     
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
			'active' =>'blog',
			'lactive'=>'',
			'sel_feed'=>'celebfeed',
			'title'=>'Moviescoopy | Official Celebrity Feed');                     
			$this->session->set_userdata($header_links);
         
       }
	
	public function index()
	{
		$hml = array(
			'hm_l_active'=>'lmcelebs',
			'ogtitle'=>'Moviescoopy Celebrity Feed',
			'ogtitleimg'=>'http://www.moviescoopy.com/images/moviescoopy_celeb_feed.jpg',
			'ogdesc'=>'Who is your favourite celebrity? What your favourite celebrity is upto? Do they have got something to tell you?');                     
			$this->session->set_userdata($hml);
		$data['industries']=$this->user_model->get_all_industry();
		$data['celebrityposts']=$this->user_model->get_all_celebrity_posts();
		$data['randomceleb']=$this->user_model->get_random_celebs();
		$this->load->view('header');
		$this->load->view('top_content');
		$this->load->view('content_celebfolio',$data);
		$this->load->view('footer');
	}
	
	public function celeb()
	{
		if(isset($_GET['id']))
		{
		   
			$data['celebrity_posts']=$this->user_model->get_this_celebrity_posts($_GET['id']);
			$data['thiscelebrity']=$this->user_model->get_this_celeb($_GET['id']);
			$this->load->view('header');
			$this->load->view('celebrity',$data);
			$this->load->view('footer');
		}
		else
		{
			echo "404";
		}
	}
	
	public function celebrity_circle()
	{
			 $hdr = array(
			'active' =>'celebfolio');
			$this->session->set_userdata($hdr);
			$data['alphabets']=$this->user_model->get_alphabets();
			$data['allcelebs']=$this->user_model->get_all_celebs_alternate();
			$this->load->view('header');
			$this->load->view('celebrity_circle',$data);
			$this->load->view('footer');
	}
	
	public function filter()
	{
		if(isset($_GET['language']))
		{
		    
			$data['industries']=$this->user_model->get_all_industry();
			$data['randomceleb']=$this->user_model->get_random_celebs_language($_GET['language']);
			$data['celebrityposts']=$this->user_model->get_all_celebrity_posts_language($_GET['language']);
			$this->load->view('header');
			$this->load->view('top_content');
			$this->load->view('content_celebfolio',$data);
			$this->load->view('footer');
		}
		else
		{
			echo "404";
		}
	}
	public function celebrity_like()
	{
				if(isset($_GET['filter']))
				{
					 $letter = array(
					'lactive' =>$_GET['filter']);                     
					$this->session->set_userdata($letter);
				 $hdr = array(
			'active' =>'celebfolio');
			$this->session->set_userdata($hdr);
			  
			$data['alphabets']=$this->user_model->get_alphabets();
			$data['allcelebs']=$this->user_model->get_all_celebs_letter($_GET['filter']);
			$this->load->view('header');
			$this->load->view('celebrity_circle',$data);
			$this->load->view('footer');
		}
		else
		{
			echo "404";
		}
	}
	
	public function follow_celebrity()
	{
		if(isset($_POST))
		{
			$followedby=$_POST['followedby'];
			$followed=$_POST['followed'];
			return $this->user_model->follow_celebrity($followedby,$followed);
		}
	}
	
	public function page()
	{
		if(isset($_GET['id']))
		{
				$data['feedpost']=$this->user_model->get_this_user_celebrityposts($_GET['id']);
				if($data['feedpost'])
				{
			
				$title = array(
						'title'=>$data['feedpost'][0]->post_title .' | ' .$data['feedpost'][0]->name); 
							$this->session->set_userdata($title);
				$this->load->view('header');
				$this->load->view('celebrityfeedpage',$data);
				$this->load->view('footer');
				}
				else
				{
						$title = array(
							'title'=>'Page Not Found'); 
							$this->session->set_userdata($title);
							$this->load->view('header');
							$this->load->view('page_not_found.php');
							$this->load->view('footer');
				}
		}
		else
		{
				$title = array(
							'title'=>'Page Not Found'); 
							$this->session->set_userdata($title);
							$this->load->view('header');
							$this->load->view('page_not_found.php');
							$this->load->view('footer');
		}
	}
}
