<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Celebrity extends CI_Controller {



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
				$data['ptp']=$this->admin_model->get_all_portfolio_types();
				$data['industry']=$this->admin_model->get_all_industry();
				$this->load->view('admin/header');
				$this->load->view('admin/add_celebrity',$data);
				$this->load->view('admin/footer');
			}
			else
			{
				 redirect('admin/home');
			}
		}

	
		 public function view_celebrity()
		 {
		      if($this->session->userdata('alogged_in',true))
		    {
		         $data['celebs']=$this->admin_model->get_all_celebs();
			     $this->load->view('admin/header');
				 $this->load->view('admin/view_celebrity',$data);
			}
			else
			{
				 redirect('admin/home');
			}
		 }
		
		
		public function delete_celebrity()
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
		
		
		public function editcelebrity()
		{
		 if($this->session->userdata('alogged_in',true))
		   {
			
				 $id =$_GET['id'];
				 $data['ptp']=$this->admin_model->get_all_portfolio_types();
					$data['industry']=$this->admin_model->get_all_industry();
				 $data['celebrity']=$this->admin_model->get_this_celebrity($id);
				 $this->load->view('admin/header');
				 $this->load->view('admin/edit_celebrity',$data);
				 $this->load->view('admin/footer');
		    }
			else
			{
				 redirect('admin/home');
			}
		}	

		public function celebritypost()
		{
			 if($this->session->userdata('alogged_in',true))
			{
			
				 $id =$_GET['id'];
				 $data['celebrity']=$this->admin_model->get_this_celebrity($id);
				 $this->load->view('admin/header');
				 $this->load->view('admin/post_celebrity',$data);
				 $this->load->view('admin/footer');
		    }
			else
			{
				 redirect('admin/home');
			}
		}
		
		
		
		
		public function post_celebrity()
		{
			 if($this->session->userdata('alogged_in',true))
			{
					$result=$this->input->post(NUll,true);
				   $this->form_validation->set_rules('post_title', 'Post title', 'required');

												
												
											if ($this->form_validation->run() == FALSE)
											{
											
												 $id =$result['id'];
												 $data['celebrity']=$this->admin_model->get_this_celebrity($id);
												 $this->load->view('admin/header');
												 $this->load->view('admin/post_celebrity',$data);
												 $this->load->view('admin/footer');
											}
											else
											{
												
												if (!empty($_FILES['post_img']['name']))
													{
														$config['upload_path'] = './uploads/celeb_post/';
												$config['allowed_types'] = 'gif|jpg|png';
												$config['max_size']	= '30000';
												$config['max_width']  = '2000';
												$config['max_height']  = '2000';

											   $this->load->library('upload', $config);

												if ( ! $this->upload->do_upload('post_img'))
												{
												
													$data['error'] = array('error' => $this->upload->display_errors());
													 //print_r($data['error']);exit;
													$id =$result['id'];
												 $data['celebrity']=$this->admin_model->get_this_celebrity($id);
												 $this->load->view('admin/header');
												 $this->load->view('admin/post_celebrity',$data);
												 $this->load->view('admin/footer');
												}
												else
												{
													$imgdata = $this->upload->data();
													$fname=$imgdata['file_name'];
													$db_response=$this->admin_model->add_celebrity_posts($result,$fname,$result['id']);
													if($db_response)
													{
															$this->session->set_flashdata('suc', 'Your post has been added');
															redirect('admin/celebrity/celebritypost?id='.$result['id']);
													}
													else
													{
														$this->session->set_flashdata('err', 'Oops! Something wrong happened! Please retry!');
														redirect('admin/celebrity/celebritypost?id='.$result['id']);
													}
												}
														
													}
													else
													{
														
													$db_response=$this->admin_model->add_celebrity_posts_imageless($result,$result['id']);
													if($db_response)
													{
															$this->session->set_flashdata('serv_suc', 'Your post has been added');
															redirect('admin/celebrity/celebritypost?id='.$result['id']);
													}
													else
													{
														$this->session->set_flashdata('serv_err', 'Oops! Something wrong happened! Please retry!');
														redirect('admin/celebrity/celebritypost?id='.$result['id']);
													}
												
													}
												
											}
				 
		    }
			else
			{
				 redirect('admin/home');
			}
		}
		
		
		
		public function add_celebrity()
		{
		
             if($this->session->userdata('alogged_in',true))
		   {		
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			
			if (empty($_FILES['event_img']['name']))
				{
					$this->form_validation->set_rules('event_img', 'Image', 'required');
				}
			
		if ($this->form_validation->run() == FALSE)
		{
		   
				$data['ptp']=$this->admin_model->get_all_portfolio_types();
				$data['industry']=$this->admin_model->get_all_industry();
				$this->load->view('admin/header');
				$this->load->view('admin/add_celebrity',$data);
				$this->load->view('admin/footer');
		}
		else
		{
			$result=$this->input->post(NUll,true);
			
			$config['upload_path'] = './uploads/celebs/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '30000';
			$config['max_width']  = '2000';
			$config['max_height']  = '2000';

		   $this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('event_img'))
			{
				$data['error'] = array('error' => $this->upload->display_errors());
	            $data['ptp']=$this->admin_model->get_all_portfolio_types();
				$data['industry']=$this->admin_model->get_all_industry();
				$this->load->view('admin/header');
				$this->load->view('admin/add_celebrity',$data);
				$this->load->view('admin/footer');
			}
			else
			{
			    
				$imgdata = $this->upload->data();
				 $config = array(
    'source_image'      => $imgdata['full_path'], //path to the uploaded image
    'new_image'         => './uploads/celebs/thumb_medium', //path to
    'maintain_ratio'    => false,
    'width'             => 256,
    'height'            => 256
    );
 
    //this is the magic line that enables you generate multiple thumbnails
    //you have to call the initialize() function each time you call the resize()
    //otherwise it will not work and only generate one thumbnail
    $this->image_lib->initialize($config);
    $this->image_lib->resize();
 
    $config = array(
    'source_image'      => $imgdata['full_path'],
    'new_image'         => './uploads/celebs/thumb_small',
    'maintain_ratio'    => false,
    'width'             => 60,
    'height'            => 60
    );
    //here is the second thumbnail, notice the call for the initialize() function again
    $this->image_lib->initialize($config);
    $this->image_lib->resize();
	
	
	
				$fname=$imgdata['file_name'];
			    $db_response=$this->admin_model->add_celebrity($result,$fname);
				if($db_response)
				{
						$this->session->set_flashdata('event_suc', 'News has been added successfully');
		   				redirect('admin/celebrity');
				}
				else
				{
					$this->session->set_flashdata('event_err', 'Oops! Something wrong happened! Please retry!');
		   			redirect('admin/celebrity');
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
