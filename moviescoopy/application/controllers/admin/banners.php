<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Banners extends CI_Controller {


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
		
		    $data['banner_images']=$this->admin_model->get_banner_images();
			
			if($this->session->userdata('logged_in',true))
		   {
				$this->load->view('admin/header');
				$this->load->view('admin/banners',$data);
				$this->load->view('admin/footer');
			}
		   else
		   {
					redirect('index.php/admin/home');
		   }
		}
		public function home()
		{       
		        // $data['banner_images']=$this->admin_model->get_banner_images();
			    $data['banner_images']=$this->admin_model->get_home_banner_images();
				if($this->session->userdata('logged_in',true))
			   {
					$this->load->view('admin/header');
					$this->load->view('admin/home_banners',$data);
					$this->load->view('admin/footer');
				}
			   else
			   {
						redirect('index.php/admin/home');
			   }
		}
		
		
		
		public function banners_upload()
		{
		
					
	    if($this->session->userdata('logged_in',true))
		   {
				    $name_array = array();
					$count = count($_FILES['userfile']['size']);
					foreach($_FILES as $key=>$value)
					for($s=0; $s<=$count-1; $s++) {
					$_FILES['userfile']['name']=$value['name'][$s];
					$_FILES['userfile']['type']    = $value['type'][$s];
					$_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
					$_FILES['userfile']['error']       = $value['error'][$s];
					$_FILES['userfile']['size']    = $value['size'][$s];   
						$config['upload_path'] = './uploads/home';
						$config['allowed_types'] = 'gif|jpg|png';
						$config['max_size']    = '3000';
						$config['max_width']  = '1024';
						$config['max_height']  = '768';
					$this->load->library('upload', $config);
					   if (!$this->upload->do_upload())
						{
							$data['error'] = array('error' => $this->upload->display_errors());
							//$data['banner_images']=$this->admin_model->get_banner_images();
							$data['gallery_images']=$this->admin_model->get_home_banner_images();
							$this->load->view('admin/header');
							$this->load->view('admin/home_banners', $data);
							$this->load->view('admin/footer');
						}
						else
						{
							$this->upload->do_upload();
							$data = $this->upload->data();
							$name_array[] = $data['file_name'];
							
                         					
			              $this->session->set_flashdata('gal_suc','Images uploaded successfully!');
		   			    
					    }
						}
						
						   
							//$names= implode(',', $name_array);
							/*            $this->load->database();
							$db_data = array('id'=> NULL,
											 'name'=> $names);
						    $this->db->insert('testtable',$db_data);
							*/ 
                            $dbresponse=$this->admin_model->update_home_banners($name_array);	
			                redirect('index.php/admin/banners/home');
					
           }
	else
			{
				 redirect('index.php/admin/home');
			}
		
		}
		
		
		public function update_about()
		{
		  
			 if($this->session->userdata('logged_in',true))
		   {
		 
			$config['upload_path'] = './uploads/banners/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']	= '30000';
			$config['max_width']  = '1600';
			$config['max_height']  = '508';

		   $this->load->library('upload', $config);

			if (! $this->upload->do_upload('abt_img'))
			{
				$data['error'] = array('error' => $this->upload->display_errors());
	            $this->load->view('admin/header');
				$data['banner_images']=$this->admin_model->get_banner_images();
				$this->load->view('admin/banners',$data);
				$this->load->view('admin/footer');
			}
			else
			{
				$imgdata = $this->upload->data();
				$fname=$imgdata['file_name'];
			    $db_response=$this->admin_model->update_about_image($fname);
				if($db_response)
				{
						$this->session->set_flashdata('abt_suc', 'Image has been updated successfully');
		   				redirect('index.php/admin/banners');
				}
				else
				{
					$this->session->set_flashdata('abt_err', 'Oops! Something wrong happened! Please retry!');
		   			redirect('index.php/admin/banners');
				}
			}
		

		  }
		   else
		   {
				redirect('index.php/admin/home');
		   }
		}
		public function update_home_banner()
		{
		  
			 if($this->session->userdata('logged_in',true))
		   {
		 
			$config['upload_path'] = './uploads/home/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']	= '30000';
			$config['max_width']  = '2000';
			$config['max_height']  = '1200';

		   $this->load->library('upload', $config);

			if (! $this->upload->do_upload('banner1'))
			{
				$data['error'] = array('error' => $this->upload->display_errors());
	            $this->load->view('admin/header');
				$data['banner_images']=$this->admin_model->get_home_banner_images();
				$this->load->view('admin/home_banners',$data);
				$this->load->view('admin/footer');
			}
			else
			{   
			    $result=$this->input->post(null,true);
				$imgdata = $this->upload->data();
				$fname=$imgdata['file_name'];
			    $db_response=$this->admin_model->update_home_banner_image($fname,$result);
				if($db_response)
				{
						$this->session->set_flashdata('abt_suc', 'Image has been updated successfully');
		   				redirect('index.php/admin/banners/home');
				}
				else
				{
					$this->session->set_flashdata('abt_err', 'Oops! Something wrong happened! Please retry!');
		   			redirect('index.php/admin/banners/home');
				}
			}
		

		  }
		   else
		   {
				redirect('index.php/admin/home');
		   }
		}
		
		
			public function update_second_banner()
		{
		  
			 if($this->session->userdata('logged_in',true))
		   {
		 
			$config['upload_path'] = './uploads/home/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']	= '30000';
			$config['max_width']  = '1900';
			$config['max_height']  = '900';

		   $this->load->library('upload', $config);

			if (! $this->upload->do_upload('banner2'))
			{
				$data['error'] = array('error' => $this->upload->display_errors());
	            $this->load->view('admin/header');
				$data['banner_images']=$this->admin_model->get_home_banner_images();
				$this->load->view('admin/home_banners',$data);
				$this->load->view('admin/footer');
			}
			else
			{
				$imgdata = $this->upload->data();
				$fname=$imgdata['file_name'];
			    $db_response=$this->admin_model->update_second_banner_image($fname);
				if($db_response)
				{
						$this->session->set_flashdata('abt_suc', 'Image has been updated successfully');
		   				redirect('index.php/admin/banners/home');
				}
				else
				{
					$this->session->set_flashdata('abt_err', 'Oops! Something wrong happened! Please retry!');
		   			redirect('index.php/admin/banners/home');
				}
			}
		

		  }
		   else
		   {
				redirect('index.php/admin/home');
		   }
		}
		
			public function update_third_banner()
		{
		  
			 if($this->session->userdata('logged_in',true))
		   {
		 
			$config['upload_path'] = './uploads/home/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']	= '30000';
			$config['max_width']  = '1900';
			$config['max_height']  = '900';

		   $this->load->library('upload', $config);

			if (! $this->upload->do_upload('banner3'))
			{
				$data['error'] = array('error' => $this->upload->display_errors());
	            $this->load->view('admin/header');
				$data['banner_images']=$this->admin_model->get_home_banner_images();
				$this->load->view('admin/home_banners',$data);
				$this->load->view('admin/footer');
			}
			else
			{
				$imgdata = $this->upload->data();
				$fname=$imgdata['file_name'];
			    $db_response=$this->admin_model->update_third_banner_image($fname);
				if($db_response)
				{
						$this->session->set_flashdata('abt_suc', 'Image has been updated successfully');
		   				redirect('index.php/admin/banners/home');
				}
				else
				{
					$this->session->set_flashdata('abt_err', 'Oops! Something wrong happened! Please retry!');
		   			redirect('index.php/admin/banners/home');
				}
			}
		

		  }
		   else
		   {
				redirect('index.php/admin/home');
		   }
		}
		
		
			public function update_fourth_banner()
		{
		  
			 if($this->session->userdata('logged_in',true))
		   {
		 
			$config['upload_path'] = './uploads/home/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']	= '30000';
			$config['max_width']  = '1900';
			$config['max_height']  = '900';

		   $this->load->library('upload', $config);

			if (! $this->upload->do_upload('banner4'))
			{
				$data['error'] = array('error' => $this->upload->display_errors());
	            $this->load->view('admin/header');
				$data['banner_images']=$this->admin_model->get_home_banner_images();
				$this->load->view('admin/home_banners',$data);
				$this->load->view('admin/footer');
			}
			else
			{
				$imgdata = $this->upload->data();
				$fname=$imgdata['file_name'];
			    $db_response=$this->admin_model->update_fourth_banner_image($fname);
				if($db_response)
				{
						$this->session->set_flashdata('abt_suc', 'Image has been updated successfully');
		   				redirect('index.php/admin/banners/home');
				}
				else
				{
					$this->session->set_flashdata('abt_err', 'Oops! Something wrong happened! Please retry!');
		   			redirect('index.php/admin/banners/home');
				}
			}
		

		  }
		   else
		   {
				redirect('index.php/admin/home');
		   }
		}
		
		
		
		public function update_project()
		{
		  
			 if($this->session->userdata('logged_in',true))
		   {
		 
		
			$config['upload_path'] = './uploads/banners/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']	= '30000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';

		   $this->load->library('upload', $config);

			if (! $this->upload->do_upload('pro_img'))
			{
				$data['error']= array('error' => $this->upload->display_errors());
				$data['banner_images']=$this->admin_model->get_banner_images();
	            $this->load->view('admin/header');
				$this->load->view('admin/banners',$data);
				$this->load->view('admin/footer');
			}
			else
			{
				$imgdata = $this->upload->data();
				$fname=$imgdata['file_name'];
			    $db_response=$this->admin_model->update_project_image($fname);
				if($db_response)
				{
						$this->session->set_flashdata('abt_suc', 'Image has been updated successfully');
		   				redirect('index.php/admin/banners');
				}
				else
				{
					$this->session->set_flashdata('abt_err', 'Oops! Something wrong happened! Please retry!');
		   			redirect('index.php/admin/banners');
				}
			}
		

		  }
		   else
		   {
				redirect('index.php/admin/home');
		   }
		}
		
		
		public function update_service()
		{
		  
			 if($this->session->userdata('logged_in',true))
		   {
		 
		
			$config['upload_path'] = './uploads/banners/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']	= '30000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';

		   $this->load->library('upload', $config);

			if (! $this->upload->do_upload('ser_img'))
			{
				$data['error'] = array('error' => $this->upload->display_errors());
				$data['banner_images']=$this->admin_model->get_banner_images();
	            $this->load->view('admin/header');
				$this->load->view('admin/banners', $data);
				$this->load->view('admin/footer');
			}
			else
			{
				$imgdata = $this->upload->data();
				$fname=$imgdata['file_name'];
			    $db_response=$this->admin_model->update_service_image($fname);
				if($db_response)
				{
						$this->session->set_flashdata('abt_suc', 'Image has been updated successfully');
		   				redirect('index.php/admin/banners');
				}
				else
				{
					$this->session->set_flashdata('abt_err', 'Oops! Something wrong happened! Please retry!');
		   			redirect('index.php/admin/banners');
				}
			}
		

		  }
		   else
		   {
				redirect('index.php/admin/home');
		   }
		}
		
		public function update_news()
		{
		  
			 if($this->session->userdata('logged_in',true))
		   {
		 
		
			$config['upload_path'] = './uploads/banners/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']	= '30000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';

		   $this->load->library('upload', $config);

			if (! $this->upload->do_upload('news_img'))
			{
				$data['error'] = array('error' => $this->upload->display_errors());
				$data['banner_images']=$this->admin_model->get_banner_images();
	            $this->load->view('admin/header');
				$this->load->view('admin/banners',$data);
				$this->load->view('admin/footer');
			}
			else
			{
				$imgdata = $this->upload->data();
				$fname=$imgdata['file_name'];
			    $db_response=$this->admin_model->update_news_image($fname);
				if($db_response)
				{
						$this->session->set_flashdata('abt_suc', 'Image has been updated successfully');
		   				redirect('index.php/admin/banners');
				}
				else
				{
					$this->session->set_flashdata('abt_err', 'Oops! Something wrong happened! Please retry!');
		   			redirect('index.php/admin/banners');
				}
			}
		

		  }
		   else
		   {
				redirect('index.php/admin/home');
		   }
		}
		
		public function update_gallery()
		{
		  
			 if($this->session->userdata('logged_in',true))
		   {
		 
		
			$config['upload_path'] = './uploads/banners/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']	= '30000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';

		   $this->load->library('upload', $config);

			if (! $this->upload->do_upload('gal_img'))
			{
				$data['error'] = array('error' => $this->upload->display_errors());
				$data['banner_images']=$this->admin_model->get_banner_images();
	            $this->load->view('admin/header');
				$this->load->view('admin/banners', $data);
				$this->load->view('admin/footer');
			}
			else
			{
				$imgdata = $this->upload->data();
				$fname=$imgdata['file_name'];
			    $db_response=$this->admin_model->update_gallery_image($fname);
				if($db_response)
				{
						$this->session->set_flashdata('abt_suc', 'Image has been updated successfully');
		   				redirect('index.php/admin/banners');
				}
				else
				{
					$this->session->set_flashdata('abt_err', 'Oops! Something wrong happened! Please retry!');
		   			redirect('index.php/admin/banners');
				}
			}
		

		  }
		   else
		   {
				redirect('index.php/admin/home');
		   }
		}
		
		public function update_write()
		{
		  
			 if($this->session->userdata('logged_in',true))
		   {
		 
		
			$config['upload_path'] = './uploads/banners/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']	= '30000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';

		   $this->load->library('upload', $config);

			if (! $this->upload->do_upload('write_img'))
			{
				$data['error'] = array('error' => $this->upload->display_errors());
				$data['banner_images']=$this->admin_model->get_banner_images();
	            $this->load->view('admin/header');
				$this->load->view('admin/banners',$data);
				$this->load->view('admin/footer');
			}
			else
			{
				$imgdata = $this->upload->data();
				$fname=$imgdata['file_name'];
			    $db_response=$this->admin_model->update_write_image($fname);
				if($db_response)
				{
						$this->session->set_flashdata('abt_suc', 'Image has been updated successfully');
		   				redirect('index.php/admin/banners');
				}
				else
				{
					$this->session->set_flashdata('abt_err', 'Oops! Something wrong happened! Please retry!');
		   			redirect('index.php/admin/banners');
				}
			}
		

		  }
		   else
		   {
				redirect('index.php/admin/home');
		   }
		}
		
		public function logo()
		{
			if($this->session->userdata('logged_in',true))
		   {
		        $data['logo']=$this->admin_model->get_logo();
				$this->load->view('admin/header');
				$this->load->view('admin/logo',$data);
				$this->load->view('admin/footer');
			}
		   else
		   {
					redirect('index.php/admin/home');
		   }
		}
		
		
		public function update_logo()
		{
				 if($this->session->userdata('logged_in',true))
				   {
					
					
					$config['upload_path'] = './uploads/home/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']	= '30000';
					$config['max_width']  = '3000';
					$config['max_height']  = '1600';

				   $this->load->library('upload', $config);

					
					if (empty($_FILES['service_img']['name']))
						{
							 $imgdata=$this->admin_model->get_logo();
							 $fname=$imgdata[0]->img;
						}
						else
						{
							$this->upload->do_upload('service_img');
							$imgdata = $this->upload->data();
							$fname=$imgdata['file_name'];
							
						}
						
						$db_response=$this->admin_model->update_logo($fname);
						if($db_response)
						{
								$this->session->set_flashdata('serv_suc', 'Page Breaker has been updated successfully');
								redirect('index.php/admin/banners/logo');
						}
						else
						{
							$this->session->set_flashdata('serv_err', 'No logo is selected to update');
							redirect('index.php/admin/banners/logo');
						}
					
				
				 }   
				else
				{
					 redirect('index.php/admin/home');
				}	
				
		}
		
		public function update_contact()
		{
		  
			 if($this->session->userdata('logged_in',true))
		   {
		 
		
			$config['upload_path'] = './uploads/banners/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']	= '30000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';

		   $this->load->library('upload', $config);

			if (! $this->upload->do_upload('contact_img'))
			{
				$data['error'] = array('error' => $this->upload->display_errors());
				$data['banner_images']=$this->admin_model->get_banner_images();
	            $this->load->view('admin/header');
				$this->load->view('admin/banners', $data);
				$this->load->view('admin/footer');
			}
			else
			{
				$imgdata = $this->upload->data();
				$fname=$imgdata['file_name'];
			    $db_response=$this->admin_model->update_contact_image($fname);
				if($db_response)
				{
						$this->session->set_flashdata('abt_suc', 'Image has been updated successfully');
		   				redirect('index.php/admin/banners');
				}
				else
				{
					$this->session->set_flashdata('abt_err', 'Oops! Something wrong happened! Please retry!');
		   			redirect('index.php/admin/banners');
				}
			}
		

		  }
		   else
		   {
				redirect('index.php/admin/home');
		   }
		}
		
}
