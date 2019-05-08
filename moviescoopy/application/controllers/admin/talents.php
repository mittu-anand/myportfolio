<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Talents extends CI_Controller {



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
				$data['users']=$this->admin_model->get_all_portfolio();
			
				$this->load->view('admin/header');
				$this->load->view('admin/add_talents',$data);
				$this->load->view('admin/footer');
			}
			else
			{
				 redirect('admin/home');
			}
		}

		public function add_talents()
		{
			 if($this->session->userdata('alogged_in',true))
			{
					$result=$this->input->post(NUll,true);
				   $this->form_validation->set_rules('post_title', 'Post title', 'required');

												
												
											if ($this->form_validation->run() == FALSE)
											{
											
												 $data['users']=$this->admin_model->get_all_portfolio();
											
												$this->load->view('admin/header');
												$this->load->view('admin/add_talents',$data);
												$this->load->view('admin/footer');
											}
											else
											{
												
												if (!empty($_FILES['post_img']['name']))
													{
														$config['upload_path'] = './uploads/talents/';
												$config['allowed_types'] = 'gif|jpg|png';
												$config['max_size']	= '30000';
												$config['max_width']  = '2000';
												$config['max_height']  = '2000';

											   $this->load->library('upload', $config);

												if ( ! $this->upload->do_upload('post_img'))
												{
												
													$data['error'] = array('error' => $this->upload->display_errors());
													 $data['users']=$this->admin_model->get_all_portfolio();
													
														$this->load->view('admin/header');
														$this->load->view('admin/add_talents',$data);
														$this->load->view('admin/footer');
												}
												else
												{
													$imgdata = $this->upload->data();
													$fname=$imgdata['file_name'];
													$db_response=$this->admin_model->add_talent_posts($result,$fname);
													if($db_response)
													{
															$this->session->set_flashdata('suc', 'Your post has been added');
															redirect('admin/talents');
													}
													else
													{
														$this->session->set_flashdata('err', 'Oops! Something wrong happened! Please retry!');
														redirect('admin/talents');
													}
												}
														
													}
													else
													{
														
													$db_response=$this->admin_model->add_talent_posts_imageless($result);
													if($db_response)
													{
															$this->session->set_flashdata('serv_suc', 'Your post has been added');
															redirect('admin/talents');
													}
													else
													{
														$this->session->set_flashdata('serv_err', 'Oops! Something wrong happened! Please retry!');
														redirect('admin/talents');
													}
												
													}
												
											}
				 
		    }
			else
			{
				 redirect('admin/home');
			}
		}
	
		 public function view_talents()
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
		
		
		
}
