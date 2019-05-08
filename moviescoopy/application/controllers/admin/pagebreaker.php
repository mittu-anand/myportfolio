<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pagebreaker extends CI_Controller {


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
		        $data['pagebtop']=$this->admin_model->get_top_page_breaker();
				$this->load->view('admin/header');
				$this->load->view('admin/pagebreakertop',$data);
				$this->load->view('admin/footer');
			}
		   else
		   {
					redirect('index.php/admin/home');
		   }
		
		}
		
		
		public function update_top()
		{
			 if($this->session->userdata('logged_in',true))
		   {
				
			$this->form_validation->set_rules('sname', 'Title', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			
		if ($this->form_validation->run() == FALSE)
		{
			
		    $data['pagebtop']=$this->admin_model->get_top_page_breaker();
			$this->load->view('admin/header');
			$this->load->view('admin/pagebreakertop',$data);
			$this->load->view('admin/footer');
		}
		else
		{
			
			$result=$this->input->post(NUll,true);
			$config['upload_path'] = './uploads/pagebreakers/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '30000';
			$config['max_width']  = '2000';
			$config['max_height']  = '1600';

		   $this->load->library('upload', $config);

			
				if (empty($_FILES['service_img']['name']))
				{
					 $imgdata=$this->admin_model->get_top_page_breaker();
					 $fname=$imgdata[0]->img;
				}
				else
				{
				    $this->upload->do_upload('service_img');
					$imgdata = $this->upload->data();
					$fname=$imgdata['file_name'];
					
			    }
				
			    $db_response=$this->admin_model->update_pagebreakertop($result,$fname);
				if($db_response)
				{
						$this->session->set_flashdata('serv_suc', 'Page Breaker has been updated successfully');
		   				redirect('index.php/admin/pagebreaker');
				}
				else
				{
					$this->session->set_flashdata('serv_err', 'Oops! Something wrong happened! Please retry!');
		   			redirect('index.php/admin/pagebreaker');
				}
			
		}
		 }   
		else
		{
			 redirect('index.php/admin/home');
        }		
			
		}
		
		
		
		
		public function update_bottom()
		{
			 if($this->session->userdata('logged_in',true))
		   {
				
			$this->form_validation->set_rules('sname', 'Title', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			
			
		if ($this->form_validation->run() == FALSE)
		{
			
		    $data['pagebbottom']=$this->admin_model->get_bottom_page_breaker();
			$this->load->view('admin/header');
			$this->load->view('admin/pagebreakerbottom',$data);
			$this->load->view('admin/footer');
		}
		else
		{
			
			$result=$this->input->post(NUll,true);
			$config['upload_path'] = './uploads/pagebreakers/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '30000';
			$config['max_width']  = '2000';
			$config['max_height']  = '1600';

		   $this->load->library('upload', $config);

			
			if (empty($_FILES['service_img']['name']))
				{
					 $imgdata=$this->admin_model->get_bottom_page_breaker();
					 $fname=$imgdata[0]->img;
				}
				else
				{
				    $this->upload->do_upload('service_img');
					$imgdata = $this->upload->data();
					$fname=$imgdata['file_name'];
					
			    }
				
			    $db_response=$this->admin_model->update_pagebreakerbottom($result,$fname);
				if($db_response)
				{
						$this->session->set_flashdata('serv_suc', 'Page Breaker has been updated successfully');
		   				redirect('index.php/admin/pagebreaker/pagebreaker_bottom');
				}
				else
				{
					$this->session->set_flashdata('serv_err', 'Oops! Something wrong happened! Please retry!');
		   			redirect('index.php/admin/pagebreaker/pagebreaker_bottom');
				}
			
		}
		 }   
		else
		{
			 redirect('index.php/admin/home');
        }		
			
		}
		
		
		public function update_footer()
		{
						 if($this->session->userdata('logged_in',true))
				   {
					
					
					$config['upload_path'] = './uploads/pagebreakers/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']	= '30000';
					$config['max_width']  = '2000';
					$config['max_height']  = '1600';

				   $this->load->library('upload', $config);

					
					if (empty($_FILES['service_img']['name']))
						{
							 $imgdata=$this->admin_model->get_footer_page_breaker();
							 $fname=$imgdata[0]->img;
						}
						else
						{
							$this->upload->do_upload('service_img');
							$imgdata = $this->upload->data();
							$fname=$imgdata['file_name'];
							
						}
						
						$db_response=$this->admin_model->update_pagebreakerfooter($fname);
						if($db_response)
						{
								$this->session->set_flashdata('serv_suc', 'Page Breaker has been updated successfully');
								redirect('index.php/admin/pagebreaker/pagebreaker_footer');
						}
						else
						{
							$this->session->set_flashdata('serv_err', 'You did not choose a picture to change!');
							redirect('index.php/admin/pagebreaker/pagebreaker_footer');
						}
					
				
				 }   
				else
				{
					 redirect('index.php/admin/home');
				}	
				
		
		}
		
		
		
		
	public function pagebreaker_bottom()
		{
			 
			
			if($this->session->userdata('logged_in',true))
		   {
		        $data['pagebbottom']=$this->admin_model->get_bottom_page_breaker();
				$this->load->view('admin/header');
				$this->load->view('admin/pagebreakerbottom',$data);
				$this->load->view('admin/footer');
			}
		   else
		   {
					redirect('index.php/admin/home');
		   }
		
		}
		

    public function pagebreaker_footer()
	{
		if($this->session->userdata('logged_in',true))
		   {
		        $data['pagebfooter']=$this->admin_model->get_footer_page_breaker();
				$this->load->view('admin/header');
				$this->load->view('admin/pagebreakerfooter',$data);
				$this->load->view('admin/footer');
			}
		   else
		   {
					redirect('index.php/admin/home');
		   }
	}	
		
}
