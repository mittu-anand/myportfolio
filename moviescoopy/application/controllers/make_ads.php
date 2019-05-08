<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Make_ads extends CI_Controller {
     
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
		$title = array('title'=>'Make ads | Moviescoopy'); 
							$this->session->set_userdata($title);
							$this->load->view('header');
							$this->load->view('make_ads.php');
							$this->load->view('footer');
	}
	
	public function ad_page()
	{
							if(isset($_GET['id']))
							{
							$data['page']=$this->user_model->get_this_ad($_GET['id']);
							
								if($data['page'])
								{
									
									$title = array(
													'title'=>$data['page'][0]->name.' | Moviescoopy'); 
													$this->session->set_userdata($title);
									$data['ad_tasks']=$this->user_model->get_this_ad_tasks($_GET['id']);
									$this->load->view('header');
									$this->load->view('ad_page.php',$data);
									$this->load->view('footer');
								}
								else
								{
									
								}
							}
							else
							{
							}
	}
	
	public function ad_task()
	{
					if(isset($_GET['id']))
							{
							$data['task']=$this->user_model->get_this_ad_task($_GET['id']);
							
								if($data['task'])
								{
									$data['page']=$this->user_model->get_this_ad($data['task'][0]->aid);
									$title = array(
													'title'=>$data['page'][0]->name.' | Moviescoopy'); 
													$this->session->set_userdata($title);
									$data['ad_tasks']=$this->user_model->get_this_ad_tasks($_GET['id']);
									$this->load->view('header');
									$this->load->view('ad_task.php',$data);
									$this->load->view('footer');
								}
								else
								{
									
								}
							}
							else
							{
							}		
	}
}
