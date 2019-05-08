<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {



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
			if($this->session->userdata('alogged_in',true))
		   {
				$this->load->view('admin/header');
				$this->load->view('admin/add_event');
				$this->load->view('admin/footer');
			}
			else
			{
				 redirect('admin/home');
			}
		}
		
	
		 public function view_events()
		 {
		      if($this->session->userdata('alogged_in',true))
		    {
		         $data['events']=$this->admin_model->get_all_events();
			     $this->load->view('admin/header');
				 $this->load->view('admin/view_events',$data);
			}
			else
			{
				 redirect('admin/home');
			}
		 }
		
		
		public function delete_events()
		{
			if($this->session->userdata('alogged_in',true))
					{
							$id=$_GET['id']; 
							$db_response=$this->admin_model->delete_events($id);
							  if($db_response)
							  {
								$this->session->set_flashdata('serv_suc', 'News deleted successfully');
								redirect('admin/events/view_events');
							  }
							  else
							  {
								$this->session->set_flashdata('serv_err', 'Oops some error occured! Please retry!');
								redirect('admin/events/view_events');
							  }
					}
					else
						{
						
							 redirect('admin/home');
							 
						}
		}
		
		
		public function event()
		{
		 if($this->session->userdata('alogged_in',true))
		   {
			
				 $id =$_GET['id'];
				 $data['events']=$this->admin_model->get_this_event($id);
				
				 $this->load->view('admin/header');
				 $this->load->view('admin/view_one_event',$data);
				 $this->load->view('admin/footer');
		    }
			else
			{
				 redirect('admin/home');
			}
		}		
		public function add_event()
		{
		
             if($this->session->userdata('alogged_in',true))
		   {		
			$this->form_validation->set_rules('ename', 'News Name', 'required');
			$this->form_validation->set_rules('edescription', 'Description', 'required');
			if (empty($_FILES['event_img']['name']))
				{
					$this->form_validation->set_rules('event_img', 'Image', 'required');
				}
			
		if ($this->form_validation->run() == FALSE)
		{
		   
			$this->load->view('admin/header');
			$this->load->view('admin/add_event');
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

			if ( ! $this->upload->do_upload('event_img'))
			{
				$error = array('error' => $this->upload->display_errors());
	            $this->load->view('admin/header');
				$this->load->view('admin/add_event', $error);
				$this->load->view('admin/footer');
			}
			else
			{
			    
				$imgdata = $this->upload->data();
				$fname=$imgdata['file_name'];
			    $db_response=$this->admin_model->add_events($result,$fname);
				if($db_response)
				{
						$this->session->set_flashdata('event_suc', 'News has been added successfully');
		   				redirect('admin/events');
				}
				else
				{
					$this->session->set_flashdata('event_err', 'Oops! Something wrong happened! Please retry!');
		   			redirect('admin/events');
				}
			}
		}
		    
			
			
			}
			else
			{
				 redirect('admin/home');
			}
		   
		}
		
		public function edit_events()
		{ 
		
			 if($this->session->userdata('alogged_in',true))
		   {
				
			$this->form_validation->set_rules('ename', 'News Name', 'required');
			
			$this->form_validation->set_rules('edescription', 'Description', 'required');
			
		if ($this->form_validation->run() == FALSE)
		{
			
			$id = $_GET['id'];
		    $data['events']=$this->admin_model->get_this_event($id);
			$this->load->view('admin/header');
			$this->load->view('admin/view_one_event',$data);
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
            $id = $_GET['id']; 
			if (empty($_FILES['event_img']['name']))
				{
					$imgdata=$this->admin_model->get_this_event($id);
					 $fname=$imgdata[0]->images;
				}
			else
			{
			    $this->upload->do_upload('event_img');
				$imgdata = $this->upload->data();
				$fname = $imgdata['file_name'];
				}
			    $db_response = $this->admin_model->update_events($result,$fname,$id);
				if($db_response)
				{
					$this->session->set_flashdata('event_suc', 'News has been updated successfully');
					redirect('admin/events');
				}
				else
				{
					$this->session->set_flashdata('event_err', 'Oops! Something wrong happened! Please retry!');
		   			redirect('admin/events');
				}
			
		}
		 }   
		else
		{
			 redirect('admin/home');
        }		
			
		   
		
		}
			 
			
		
		
		
}
