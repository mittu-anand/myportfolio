<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
     
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
	
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}
	
	public function user_login()
	{
		    $this->form_validation->set_rules('uname', 'Username', 'required');
			$this->form_validation->set_rules('upassword', 'Password', 'required');
			
			    if($this->form_validation->run() == FALSE)
				{
					
					$this->load->view('login');
					
				}
				else
				{
					$result=$this->input->post(NUll,true);
					//$pass = do_hash($$result['password'], 'md5'); // MD5
					$db_response=$this->user_model->get_login_details($result);
					
					if($db_response)
					{
							$adminlogin = array(
							
									   'logged_in' => TRUE,
									   'user_id'=>$db_response[0]->uid,
									   'user_name'=>$db_response[0]->name,
									   'user_email'=>$db_response[0]->email,
									   'user_type'=>$db_response[0]->type,
									   'user_gender'=>$db_response[0]->gender,
									   'user_image'=>$db_response[0]->profile_img,
									   'user_activation'=>$db_response[0]->user_activation
								   );

							$this->session->set_userdata($adminlogin);
							redirect('portfolio/user?id='.$this->session->userdata('user_id'));
					}
					else
					{
						
						    $this->session->set_flashdata('login_err','Invalid Login! Please try again!');
						    redirect('login');
					}
				}
		
	}
	
	
	public function logout()
	{
			if($this->session->userdata('logged_in',true))
		   {
			
				$this->session->set_flashdata('logout_suc','You are Successfully Logged Out');
				$this->session->sess_destroy();
			    redirect('login');
			}
			else
			{
				redirect('home');
			}
	}
}
