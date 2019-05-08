<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {


      public function __construct()
       {
           parent::__construct();
			$this->load->model('admin_model','',TRUE);
			$this->load->library('form_validation');
			$this->load->library('image_lib');
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->helper('date');
			$this->load->library('session');
			date_default_timezone_set('UTC');
			$this->load->helper('security');
         
       }
	
		public function index()
		{
		
		    $this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			
			    if($this->form_validation->run() == FALSE)
				{
					
					$this->load->view('admin/landing');
					
				}
				else
				{
					$result=$this->input->post(NUll,true);
					//$pass = do_hash($$result['password'], 'md5'); // MD5
					$db_response=$this->admin_model->get_login_details($result);
					if($db_response)
					{
							$adminlogin = array(
							
									   'alogged_in' => TRUE
								   );

							$this->session->set_userdata($adminlogin);
							redirect('admin/dashboard');
					}
					else
					{
						
						    $this->session->set_flashdata('login_err','Invalid Login! Please try again!');
						    redirect('admin/home');
					}
				}
		

		
		
		}
}