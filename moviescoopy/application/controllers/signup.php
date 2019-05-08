<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {
     
	  public function __construct()
       {
           parent::__construct();
			$this->load->model('user_model','',TRUE);
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<label class="label bg-danger"><i class="fa fa-times-circle"></i>','</label>');
			$this->load->library('image_lib');
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->helper('date');
			$this->load->library('session');
			date_default_timezone_set('UTC');
             $header_links = array(
			'active' =>'',
			'title'=>'Signup to Moviescoopy');                     
			$this->session->set_userdata($header_links);
       }
	
	public function index()
	{
	
		$this->load->view('header');
		$this->load->view('signup');
		$this->load->view('footer');
	}
	
	
	public function create_account()
	{		
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_isEmailExist');
			$this->form_validation->set_rules('password','Password','trim|required');
			$this->form_validation->set_rules('dob','Date of Birth','trim|required');
			$this->form_validation->set_rules('gender','Gender','trim|required');
			
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header');
			$this->load->view('signup');
			$this->load->view('footer');
			$this->form_validation->set_value('name');
			$this->form_validation->set_value('email');
			$this->form_validation->set_value('gender');
			$this->form_validation->set_value('dob');
		}
		else
		{
		        $result=$this->input->post(NUll,true);
				
			    $db_response=$this->user_model->create_user($result);
				if($db_response)
				{
							$config = Array(
							  'protocol' => 'smtp',
							  'smtp_host' => 'ssl://smtp.googlemail.com',
							  'smtp_port' => 465,
							  'smtp_user' => ' mittu.kytes@gmail.com', // change it to yours
							  'smtp_pass' => 'mittu@kytes', // change it to yours
							  'mailtype' => 'html',
							  'charset' => 'iso-8859-1',
							  'wordwrap' => TRUE
							);
						$this->load->library('email');
						$data['title']='HELLO WORLD';
						$this->email->from('narroweyes.007@gmail.com', 'EMAIL');
						$this->email->to($result['email']); 
						$this->email->subject('Accountability for'. $result['email']);
						$this->email->set_mailtype("html");
						$msg = $this->load->view('welcome_mail',$data,TRUE);
						$this->email->message($msg);
						$this->email->send();

						$this->session->set_flashdata('success_msg',' A mail has been sent to your email. Please very your account!');
		   				redirect('login');
			    }
				else
				{
						$this->session->set_flashdata('error_msg', 'Oops! Something wrong happened! Please retry!');
						redirect('signup');
				}
			
		}
	}
	
	public function isEmailExist($email) 
	{
   
		$is_exist = $this->user_model->isEmailExist($email);

		if ($is_exist) {
			$this->form_validation->set_message(
				'isEmailExist','Email address is already in use'
			);    
			return false;
		} else {
			return true;
		}
	}
	
	public function add_newsletter()
	{
		if(isset($_POST))
		{
			$email=$_POST['mail'];
			$is_exist = $this->user_model->isnewsEmailExist($email);
				
				if($is_exist) 
				{
					echo "<label class='label bg-danger'><i class='fa fa-times-circle'></i>&nbsp;Email already in use</label>";
				} 
				else 
				{
					$update_newsletter=$this->user_model->update_this_newsletter($email);
					if($update_newsletter)
					{
						echo "<label class='label bg-success'><i class='fa fa-check'></i>&nbsp;You are now subscribed to moviescoopy</label>";
					}
					else
					{
						echo "<label class='label bg-danger'><i class='fa fa-times-circle'></i>&nbsp;oops! Something went wrong.</label>";
					}
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
	
	
	public function check_email()
	{
		if(isset($_POST))
		{
			$email=$_POST['email'];
			
			if($this->user_model->email_check($email))
			{
				echo "<label class='label bg-danger'><i class='fa fa-times-circle'></i>Email already in use</label>";
				
			}
			else
			{
				echo "<label class='label bg-success'><i class='fa fa-check'></i> Email is free to use</label>";
			}
		}
	}
}
