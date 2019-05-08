<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {


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
            $header_links = array(
			'active' =>'home');                     
			$this->session->set_userdata($header_links);
		   
			
       }
	
	public function index()
	{
	
		 if($this->session->userdata('logged_in',true))
		   {
		    $data['gallery_images']=$this->admin_model->get_gallery_images();
			$this->load->view('admin/header');
			$this->load->view('admin/gallery',$data);
			$this->load->view('admin/footer');
			}
			else
			{
				 redirect('index.php/admin/home');
			}
	}
	
	
	public function delete_image()
	{
		  	    if($this->session->userdata('logged_in',true))
			    {
						$id=$_GET['id'];
						$image=$this->admin_model->get_one_image($id);
						$this_img = $image[0]->photo_name;
						$db_response=$this->admin_model->delete_images($id);
						if($db_response)
						{
							   $this->session->set_flashdata('serv_suc', 'Image deleted successfully');
								redirect('index.php/admin/gallery');
						}
						else
						{
						        $this->session->set_flashdata('serv_err', 'Oops some error occured! Please retry!');
								redirect('index.php/admin/gallery');
						}
						//$filestring = APPPATH.'../uploads/gallery/'.$this_img;
						//unlink ($filestring);
						//unlink(base_url().'/uploads/gallery'.$db_response);
				          
				}
				else
				{
				
					 redirect('index.php/admin/home');
					 
				}
	}
	
	

	 public function gallery_upload() 
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
						$config['upload_path'] = './uploads/gallery';
						$config['allowed_types'] = 'gif|jpg|png';
						$config['max_size']    = '3000';
						$config['max_width']  = '600';
						$config['max_height']  = '400';
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
							
                         					
			              $this->session->set_flashdata('gal_suc','Images uploaded to the gallery!');
		   			    
					    }
						}
						
						   
							//$names= implode(',', $name_array);
							/*            $this->load->database();
							$db_data = array('id'=> NULL,
											 'name'=> $names);
						    $this->db->insert('testtable',$db_data);
							*/ 
                            $dbresponse=$this->admin_model->update_gallery($name_array);	
			                redirect('index.php/admin/gallery');
					
           }
	else
			{
				 redirect('index.php/admin/home');
			}
}
}


/* End of file welcome.php */
/* Location: ./application/controllers/home.php */