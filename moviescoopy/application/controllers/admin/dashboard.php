<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {


      public function __construct()
       {
           parent::__construct();
			$this->load->model('admin_model','',TRUE);
			$this->load->library('form_validation');
			$this->load->library('image_lib');
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->helper('date');
			$this->load->helper('security');
			$this->load->library('session');
			date_default_timezone_set('UTC');
         
       }
	    
		public function index()
		{
		   if($this->session->userdata('alogged_in',true))
		   {
  			    $this->load->view('admin/header');
				$this->load->view('admin/dash_content');
				$this->load->view('admin/footer');
				}
				else
				{
				 redirect('index.php/admin/home');
				}
				
		}
		
		
		
		
		public function update_password()
		{
				if($this->session->userdata('alogged_in',true))
			   {
					$this->form_validation->set_rules('cpassword', 'Current Password', 'required');
			        $this->form_validation->set_rules('newpassword', 'New Password', 'required');
			        $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required');
			    if($this->form_validation->run() == FALSE)
				{
					$this->load->view('admin/header');
					$this->load->view('admin/update_password');
					$this->load->view('admin/footer');
					
				}
				else
				{
					$result=$this->input->post(NUll,true);
					//$pass = do_hash($result['password'], 'md5'); // MD5
					
					$db_response=$this->admin_model->get_this_credential($result);
					if($db_response)
					{
						if($result['newpassword']==$result['confirmpassword'])
							{
								$pass = do_hash($result['cpassword'], 'md5'); // MD5
								$db_response=$this->admin_model->update_passwords($pass);
								$this->session->set_flashdata('login_suc','Admin password has been changed successfully');
						        redirect('admin/update_password');
							}
						else
							{
								$this->session->set_flashdata('login_err','Passwords you entered does not  match!');
						        redirect('admin/update_password');
							}						
					}
					else
					{
						
						    $this->session->set_flashdata('login_err','Current Password seems to have wrongly entered!');
						    redirect('admin/update_password');
					}
				}
			   }
		   else
			   {
					redirect('admin/home');
			   }
		}
		
}