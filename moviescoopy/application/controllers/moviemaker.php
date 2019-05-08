<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Moviemaker extends CI_Controller {
     
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
         
       }
	
	public function index()
	{
	          if($this->session->userdata('mlogged_in',true))
		   {
		   
		   $movie_links = array(
			'mactive' =>'feeds');                     
			$this->session->set_userdata($movie_links);
			
		            $id=$this->session->userdata('movie_id');
		            $data['movie']=$this->user_model->get_this_movie($id);
					$data['post']=$this->user_model->get_this_movie_posts($id);
					$this->load->view('header');
					$this->load->view('left_movie',$data);
					$this->load->view('content_movie',$data);
					$this->load->view('movie_bottom',$data);
					$this->load->view('footer');
			}
			else
			{
				redirect('mymovie');
			}
	}
		public function get_this_movie_likes($loguser,$mov)
	{
		$dbcheck=$this->user_model->get_this_movie_likes($loguser,$mov);
		return $dbcheck;
	}
	public function get_this_movie_loves($loguser,$mov)
	{
		$dbcheck=$this->user_model->get_this_movie_loves($loguser,$mov);
		return $dbcheck;
	}
	
	public function get_this_movie_total_likes($mov)
	{
		$dbcheck=$this->user_model->get_this_movie_total_likes($mov);
		return $dbcheck;
	}
	
	public function get_this_movie_total_loves($mov)
	{
		$dbcheck=$this->user_model->get_this_movie_total_loves($mov);
		return $dbcheck;
	}
	
}
