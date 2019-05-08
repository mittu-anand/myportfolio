<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {


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
         
       }
	
		public function index()
		{
			if($this->session->userdata('logged_in',true))
		   {
			
				$this->load->view('admin/header');
				$this->load->view('admin/add_news');
				$this->load->view('admin/footer');
			
			}
			else
			{
				 redirect('index.php/admin/home');
			}
			
		}
		
		
		public function view_news()
		{
			if($this->session->userdata('logged_in',true))
		   {
			
		   $data['news']=$this->admin_model->get_all_news();
		   $this->load->view('admin/header');
		   $this->load->view('admin/view_news',$data);
		   }
		   else
		   {
			 redirect('index.php/admin/home');
		   }
		}
		
		public function add_news()
		{	 
			if($this->session->userdata('logged_in',true))
		   {
			$this->form_validation->set_rules('name', 'News Title', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			if (empty($_FILES['news_img']['name']))
				{
					$this->form_validation->set_rules('news_img', 'Image', 'required');
				}
			
		if ($this->form_validation->run() == FALSE)
		{
		   
			$this->load->view('admin/header');
			$this->load->view('admin/add_news');
			$this->load->view('admin/footer');
		}
		else
		{
			$result=$this->input->post(NUll,true);
			
			$config['upload_path'] = './uploads/news/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '30000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';

		   $this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('news_img'))
			{
				$error = array('error' => $this->upload->display_errors());
	            $this->load->view('admin/header');
				$this->load->view('admin/add_news', $error);
				$this->load->view('admin/footer');
			}
			else
			{
			    
				$imgdata = $this->upload->data();
				$fname=$imgdata['file_name'];
			    $db_response=$this->admin_model->add_news($result,$fname);
				if($db_response)
				{
						$this->session->set_flashdata('news_suc', 'News has been added successfully');
		   				redirect('index.php/admin/news');
				}
				else
				{
					$this->session->set_flashdata('news_err', 'Oops! Something wrong happened! Please retry!');
		   			redirect('index.php/admin/news');
				}
			}
		}
		    
			
		}
		   else
		   {
			 redirect('index.php/admin/home');
		   }	
			
		   
		}	
			 
			
		
		
		
}
