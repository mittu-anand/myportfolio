<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mymovie extends CI_Controller {
     
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
			'active' =>'no');                     
			$this->session->set_userdata($header_links);
       }
	
	public function index()
	{
	
		$this->load->view('header');
		$this->load->view('movie_login');
		$this->load->view('footer');
	}
	
	public function login()
	{
		    $this->form_validation->set_rules('uname', 'Username', 'required');
			$this->form_validation->set_rules('upassword', 'Password', 'required');
			
			    if($this->form_validation->run() == FALSE)
				{
					$this->load->view('header');
					$this->load->view('movie_login');
					$this->load->view('footer');
					
				}
				else
				{
					$result=$this->input->post(NUll,true);
					//$pass = do_hash($$result['password'], 'md5'); // MD5
					$db_response=$this->user_model->get_movie_login_details($result);
					
					if($db_response)
					{
							$movielogin = array(
							
									   'mlogged_in' => TRUE,
									   'movie_id'=>$db_response[0]->mid,
									   'movie_name'=>$db_response[0]->name,
									   'movie_email'=>$db_response[0]->email,
									   'movie_language'=>$db_response[0]->language,
									   'movie_status'=>$db_response[0]->moviestatus
								   );

							$this->session->set_userdata($movielogin);
							redirect('moviemaker');
					}
					else
					{
						
						    $this->session->set_flashdata('login_err','Invalid Login! Please try again!');
						    redirect('mymovie');
					}
				}
		
	}
	
	
	public function logout()
	{
			if($this->session->userdata('mlogged_in',true))
		   {
			
				$this->session->set_flashdata('logout_suc','You are Successfully Logged Out');
				$this->session->sess_destroy();
			    redirect('mymovie');
			}
			else
			{
				redirect('home');
			}
	}
}
