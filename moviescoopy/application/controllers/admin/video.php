<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Video extends CI_Controller {


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
			$this->load->view('admin/add_video');
			$this->load->view('admin/footer');
			}
			else
			{
				 redirect('index.php/admin/home');
			}
		}
		
		public function add_video()
		{	
			 if($this->session->userdata('alogged_in',true))
		   {
		   if(isset($_POST['video_submit']))
			{
						$this->form_validation->set_rules('sname', 'Video Name', 'required');
						$this->form_validation->set_rules('slink', 'Video URL', 'required');
						$this->form_validation->set_rules('snamet', 'Video Category', 'required');
						
						if (empty($_FILES['service_img']['name']))
							{
								$this->form_validation->set_rules('service_img', 'Image', 'required');
							}
						
					if ($this->form_validation->run() == FALSE)
					{
						$this->load->view('admin/header');
						$this->load->view('admin/add_video');
						$this->load->view('admin/footer');
					}
					else
					{
						$result=$this->input->post(NUll,true);
						$config['upload_path'] = './uploads/videos/';
						$config['allowed_types'] = 'gif|jpg|png';
						$config['max_size']	= '30000';
						$config['max_width']  = '1024';
						$config['max_height']  = '768';

					   $this->load->library('upload', $config);

						if (! $this->upload->do_upload('service_img'))
						{
							$error = array('error' => $this->upload->display_errors());
							$this->load->view('admin/header');
							$this->load->view('admin/add_video', $error);
							$this->load->view('admin/footer');
						}
						else
						{
							$imgdata = $this->upload->data();
							 $config = array(
									'source_image'      => $imgdata['full_path'], //path to the uploaded image
									'new_image'         => './uploads/videos/thumb_medium', //path to
									'maintain_ratio'    => false,
									'width'             => 400,
									'height'            => 250
									);
								 
    
												$this->image_lib->initialize($config);
												$this->image_lib->resize();
																					  $config = array(
										'source_image'      => $imgdata['full_path'],
										'new_image'         => './uploads/videos/thumb_small',
										'maintain_ratio'    => false,
										'width'             => 260,
										'height'            => 150
										);
										//here is the second thumbnail, notice the call for the initialize() function again
										$this->image_lib->initialize($config);
										$this->image_lib->resize();
	
 
							$fname=$imgdata['file_name'];
							$db_response=$this->admin_model->add_video($result,$fname);
							if($db_response)
							{
									$this->session->set_flashdata('serv_suc', 'Video has been added successfully');
									redirect('admin/video');
							}
							else
							{
								$this->session->set_flashdata('serv_err', 'Oops! Something wrong happened! Please retry!');
								redirect('admin/video');
							}
						}
					}
					}
					else
					{
						redirect('admin/home');
					}
		
		 }   
		else
		{
			 redirect('admin/home');
        }		
			
		   
		}	
		

        public function view_video()
		{
			 if($this->session->userdata('alogged_in',true))
		   {
			
		
		         $data['services']=$this->admin_model->get_all_services();
			     $this->load->view('admin/header');
				 $this->load->view('admin/view_services',$data);
			}
			else
			{
				 redirect('index.php/admin/home');
			}
		}		
		

		public function service()
		{
		 if($this->session->userdata('alogged_in',true))
		   {
			
			     $id = $_GET['id'];
				 $data['services']=$this->admin_model->get_this_service($id);
				 
				 $this->load->view('admin/header');
				 $this->load->view('admin/view_one_service',$data);
				 $this->load->view('admin/footer');
		    }
			else
			{
				 redirect('index.php/admin/home');
			}
		}		
		
		public function delete_services()
		{
					if($this->session->userdata('alogged_in',true))
					{
							$id=$_GET['id']; 
							$db_response=$this->admin_model->delete_services($id);
							  if($db_response)
							  {
								$this->session->set_flashdata('serv_suc', 'Blog deleted successfully');
								redirect('admin/services/view_services');
							  }
							  else
							  {
								$this->session->set_flashdata('serv_err', 'Oops some error occured! Please retry!');
								redirect('admin/services/view_services');
							  }
					}
					else
						{
						
							 redirect('admin/home');
							 
						}
		} 
		public function edit_service()
		{
			 if($this->session->userdata('alogged_in',true))
		   {
				
			$this->form_validation->set_rules('sname', 'Blog Name', 'required');
			$this->form_validation->set_rules('snamet', 'Category', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			
			
		if ($this->form_validation->run() == FALSE)
		{
			$id = $_GET['id'];
		    $data['services']=$this->admin_model->get_this_service($id);
			$this->load->view('admin/header');
			$this->load->view('admin/view_one_service',$data);
			$this->load->view('admin/footer');
		}
		else
		{
			
			$result=$this->input->post(NUll,true);
			$config['upload_path'] = './uploads/blogs/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '30000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';

		   $this->load->library('upload', $config);

			
			$id = $_GET['id'];
			if (empty($_FILES['service_img']['name']))
				{
					 $imgdata=$this->admin_model->get_this_service($id);
					 $fname=$imgdata[0]->image;
				}
				else
				{
				    $this->upload->do_upload('service_img');
					$imgdata = $this->upload->data();
					$fname=$imgdata['file_name'];
					
			    }
			    $db_response=$this->admin_model->update_services($result,$fname,$id);
				if($db_response)
				{
						$this->session->set_flashdata('serv_suc', 'Blog has been updated successfully');
		   				redirect('admin/services');
				}
				else
				{
					$this->session->set_flashdata('serv_err', 'Oops! Something wrong happened! Please retry!');
		   			redirect('admin/services');
				}
			
		}
		 }   
		else
		{
			 redirect('admin/home');
        }		
			
		   
		}
		
		
}
