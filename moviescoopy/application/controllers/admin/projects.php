<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projects extends CI_Controller {



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
				$this->load->view('admin/add_project');
				$this->load->view('admin/footer');
			}
			else
			{
				 redirect('index.php/admin/home');
			}
		}
		/*<?php ?> public function view_events()
		{
		       if($this->session->userdata('logged_in',true))
		   {
		         $data['events']=$this->admin_model->get_all_events();
			     $this->load->view('admin/header');
				 $this->load->view('admin/view_events',$data);
			}
			else
			{
				 redirect('index.php/admin/home');
			}
		}	<?php ?>*/
		public function add_project()
		{	
             if($this->session->userdata('logged_in',true))
		   {
			   
			    
			       $result=$this->input->post(null,true);
					$name_array = array();
					$count = count($_FILES['userfile']['size']);
					foreach($_FILES as $key=>$value)
					for($s=0; $s<=$count-1; $s++) {
					$_FILES['userfile']['name']=$value['name'][$s];
					$_FILES['userfile']['type']    = $value['type'][$s];
					$_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
					$_FILES['userfile']['error'] = $value['error'][$s];
					$_FILES['userfile']['size']    = $value['size'][$s];   
						$config['upload_path'] = './uploads/projects';
						$config['allowed_types'] = 'gif|jpg|png';
						$config['max_size']    = '3000';
						$config['max_width']  = '1024';
						$config['max_height']  = '768';
					$this->load->library('upload', $config);
					   if (!$this->upload->do_upload())
						{
							$data['error'] = array('error' => $this->upload->display_errors());
							//$data['banner_images']=$this->admin_model->get_banner_images();
							$data['gallery_images']=$this->admin_model->get_gallery_images();
							$this->load->view('admin/header');
							$this->load->view('admin/gallery', $data);
							$this->load->view('admin/footer');
						}
						else
						{
							$this->upload->do_upload();
							$data = $this->upload->data();
							$name_array[] = $data['file_name'];
							
                         					
			           //   
					    }
						
						}
						
						   
							//$names= implode(',', $name_array);
							/*            $this->load->database();
							$db_data = array('id'=> NULL,
											 'name'=> $names);
						    $this->db->insert('testtable',$db_data);
							*/ 
							$this->session->set_flashdata('proj_suc','Project has been Saved. Please do update other project related informations here!');
                            $dbresponse=$this->admin_model->add_project($name_array,$result);
							
							 $last_id = array(
										'lid' =>$dbresponse);                     
										$this->session->set_userdata($last_id);
								 
							
			                redirect('index.php/admin/projects/add_project_step2');
			 
			
		   }
			
		else
			{
			
				 redirect('index.php/admin/home');
			
			}
		   
		}	
			 
			
		public function add_project_step2()
		{
	
			 if($this->session->userdata('logged_in',true))
				   {
							$this->load->view('admin/header');
							$this->load->view('admin/add_project_step2');
							$this->load->view('admin/footer');
						
				   }
			   else
				   {
							redirect('index.php/admin/home');
				   }
		}
		
		public function add_project_step3()
		{
	
			 if($this->session->userdata('logged_in',true))
				   {
							$this->load->view('admin/header');
							$this->load->view('admin/add_project_step3');
							$this->load->view('admin/footer');
						
				   }
			   else
				   {
							redirect('index.php/admin/home');
				   }
		}
		
			public function add_project_step4()
		{
	
			 if($this->session->userdata('logged_in',true))
				   {
							$this->load->view('admin/header');
							$this->load->view('admin/add_project_step4');
							$this->load->view('admin/footer');
						
				   }
			   else
				   {
							redirect('index.php/admin/home');
				   }
		}
		public function add_project_step5()
		{
			
			 if($this->session->userdata('logged_in',true))
				   {
							$this->load->view('admin/header');
							$this->load->view('admin/add_project_step5');
							$this->load->view('admin/footer');
						
				   }
			   else
				   {
							redirect('index.php/admin/home');
				   }
		}
		
		public function add_project_specifications()
		{
			if($this->session->userdata('logged_in',true))
				   {
			   	$pid= $this->session->userdata('lid'); 
				
				$result=$this->input->post(null,true);
			    $aminities=$result['am'];
				$aminities_des=$result['ad'];
				$this->session->set_flashdata('proj_suc','Specications has been Saved. Please do add Amenities!');
				$db_response=$this->admin_model->insert_specifications($aminities,$aminities_des,$pid);
				redirect('index.php/admin/projects/add_project_step3');
		        //print_r($aminities);print_r($aminities_des);exit;   
				}
			   else
				   {
							redirect('index.php/admin/home');
				   }
		}
		
		public function add_project_floortypes()
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
					$_FILES['userfile']['error'] = $value['error'][$s];
					$_FILES['userfile']['size']    = $value['size'][$s];   
						$config['upload_path'] = './uploads/floors';
						$config['allowed_types'] = 'gif|jpg|png';
						$config['max_size']    = '3000';
						$config['max_width']  = '1024';
						$config['max_height']  = '768';
					$this->load->library('upload', $config);
					   if (!$this->upload->do_upload())
						{
							$data['error'] = array('error' => $this->upload->display_errors());
							//$data['banner_images']=$this->admin_model->get_banner_images();
							$data['gallery_images']=$this->admin_model->get_gallery_images();
							$this->load->view('admin/header');
							$this->load->view('admin/gallery', $data);
							$this->load->view('admin/footer');
						}
						else
						{
							$this->upload->do_upload();
							$data = $this->upload->data();
							$name_array[] = $data['file_name'];
							
                         					
			           //   
					    }
						
						}
						
						   
							//$names= implode(',', $name_array);
							/*            $this->load->database();
							$db_data = array('id'=> NULL,
											 'name'=> $names);
						    $this->db->insert('testtable',$db_data);
							*/ 
							$pid= $this->session->userdata('lid'); 
							$this->session->set_flashdata('proj_suc','Floor Types has been Saved. Please do update other project related informations here!');
                            $dbresponse=$this->admin_model->add_floor_types($name_array,$pid);
							
			                redirect('index.php/admin/projects/add_project_step5');
				}
			   else
				   {
							redirect('index.php/admin/home');
				   }
		}
		
		public function add_project_others()
		{
			 if($this->session->userdata('logged_in',true))
		   {
			
			$result=$this->input->post(NUll,true);
			$config['upload_path'] = './uploads/location/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '30000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';

		   $this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('service_img'))
			{
				$imgdata = $this->upload->data();
				$fname='';
				$pid= $this->session->userdata('lid'); 
			    $db_response=$this->admin_model->add_other_project($result,$fname,$pid);
				
						$this->session->set_flashdata('proj_suc','The Complete Project  has been added successfully');
		   				redirect('index.php/admin/projects');
			}
			else
			{
				$imgdata = $this->upload->data();
				$fname=$imgdata['file_name'];
				$pid= $this->session->userdata('lid'); 
			    $db_response=$this->admin_model->add_other_project($result,$fname,$pid);
				
						$this->session->set_flashdata('proj_suc','The Complete Project  has been added successfully');
		   				redirect('index.php/admin/projects');
				
			}
		
		 }   
		else
			{
				 redirect('index.php/admin/home');
			}
		}
		
		
		
		
			public function add_project_amenities()
		{
			if($this->session->userdata('logged_in',true))
				   {
			   	 
				$pid= $this->session->userdata('lid');
				$result=$this->input->post(null,true);
			    $aminities=$result['sp'];
				$this->session->set_flashdata('proj_suc','Amenities has been Saved. Please add these informations too!');
				$db_response=$this->admin_model->insert_amenities($aminities,$pid);
				redirect('index.php/admin/projects/add_project_step4');
		        //print_r($aminities);print_r($aminities_des);exit;   
				}
			   else
				   {
							redirect('index.php/admin/home');
				   }
		}
		
		
		
		public function view_projects()
		{
			    if($this->session->userdata('logged_in',true))
		   {
		         $data['projects']=$this->admin_model->get_all_projects();
			     $this->load->view('admin/header');
				 $this->load->view('admin/view_projects',$data);
			}
			else
			{
				 redirect('index.php/admin/home');
			}
		}
		
		public function delete_projects()
		{
		 if($this->session->userdata('logged_in',true))
					{
							$id=$_GET['id']; 
							$db_response=$this->admin_model->delete_projects($id);
							  if($db_response)
							  {
								$this->session->set_flashdata('serv_suc', 'Project deleted successfully');
								redirect('index.php/admin/projects/view_projects');
							  }
							  else
							  {
								$this->session->set_flashdata('serv_err', 'Oops some error occured! Please retry!');
								redirect('index.php/admin/projects/view_projects');
							  }
					}
					else
						{
						
							 redirect('index.php/admin/home');
							 
						}
		}
		public function project()
		{
			if($this->session->userdata('logged_in',true))
		   {
		        $id=$_GET['id'];
		        $data['project']=$this->admin_model->get_this_project($id);
				$data['pimages']=$this->admin_model->get_this_project_images($id);
				$this->load->view('admin/header');
				$this->load->view('admin/edit_project',$data);
				$this->load->view('admin/footer');
			}
			else
			{
				 redirect('index.php/admin/home');
			}
		}
		
}
