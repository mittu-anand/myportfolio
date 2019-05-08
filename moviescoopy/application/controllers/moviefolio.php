<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Moviefolio extends CI_Controller {
     
	  public function __construct()
       {
           parent::__construct();
			$this->load->model('user_model','',TRUE);
			$this->load->library('form_validation');
			$this->load->library('image_lib');
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->helper('date');
			$this->load->library('session');
			date_default_timezone_set('UTC');
			             $header_links = array(
			'active' =>'movie',
			'title'=>'Moviescoopy | Official Latest Movie Pages'); 
			
			$this->session->set_userdata($header_links);
         
       }
	
	public function index()
	{
		$title=array('title'=>'Official Latest Movie Pages'); 
		$this->session->set_userdata($title);
		$this->load->view('header');
		$data['movies']=$this->user_model->get_movies();
		$data['industries']=$this->user_model->get_all_industry();
		$data['moviestatus']=$this->user_model->get_all_movie_status();
		$this->load->view('content_moviefolio',$data);
		$this->load->view('footer');
		
	}
	public function filter()
	{
		
		 if(isset($_GET['status']) && isset($_GET['language']))
	  {
			$data['movies']=$this->user_model->get_all_moviefolio_all($_GET['status'],$_GET['language']);
			$title=array(
			'title'=>'Moviescoopy | Official Latest '.$_GET['language'].' Movie Pages'); 
				$this->session->set_userdata($title);
	  }
	  else if(isset($_GET['status']) && !isset($_GET['language']))
	  {
			$data['movies']=$this->user_model->get_all_moviefolio_status($_GET['status']);
			$title=array(
			'title'=>'Moviescoopy | Official Latest Movie Pages'); 
				$this->session->set_userdata($title);
	  }
	  else if(!isset($_GET['status']) && isset($_GET['language']))
	  {
			$data['movies']=$this->user_model->get_all_moviefolio_language($_GET['language']);
			$title=array(
			'title'=>'Moviescoopy | Official Latest '.$_GET['language'].' Movie Pages'); 
				$this->session->set_userdata($title);
	  }
	  else
	  {
			$data['movies']=$this->user_model->get_movies();
			$title=array(
			'title'=>'Moviescoopy | Official Latest Movie Pages'); 
				$this->session->set_userdata($title);
	  }
		
		$data['industries']=$this->user_model->get_all_industry();
		$data['moviestatus']=$this->user_model->get_all_movie_status();
		$this->load->view('header');
		$this->load->view('content_moviefolio',$data);
		$this->load->view('footer');
	}
	
	
	public function get_movie_scroll_data()
	{
	if(isset($_POST))
	{
		$status=$_POST['urlstatus'];
		$language=$_POST['urllanguage'];
		$ofset=$_POST['timelinecount'];
		$limit=$_POST['limit'];
		 if($status!='' && $language!='')
	  {
			$data['movies']=$this->user_model->get_all_moviefolio_all_post($status,$language,$ofset,$limit);
	  }
	  else if($status!='' && $language=='')
	  {
			$data['movies']=$this->user_model->get_all_moviefolio_status_post($status,$ofset,$limit);
	  }
	  else if($status=='' && $language!='')
	  {
			$data['movies']=$this->user_model->get_all_moviefolio_language_post($language,$ofset,$limit);
	  }
	  else if($status=='' && $language=='')
	  {
			$data['movies']=$this->user_model->get_all_moviefolio_no_parameters($ofset,$limit);
	  }
	
		$data['industries']=$this->user_model->get_all_industry();
		$data['moviestatus']=$this->user_model->get_all_movie_status();
		$this->load->view('content_moviefolio_load',$data);
		
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
	
	
	public function movie()
	{
	
	   
			
		if(isset($_GET['id']))
		{			
			$id=$_GET['id'];
			$data['movie']=$this->user_model->get_this_movie($id);
			if($data['movie'])
			{
				 $movie_links = array(
				'mactive' =>'feeds');                     
				$this->session->set_userdata($movie_links);
				$this->load->view('header');
				$data['post']=$this->user_model->get_this_movie_posts($id);
				$this->load->view('left_movie',$data);
				$this->load->view('content_movie',$data);
				$this->load->view('movie_bottom',$data);
				$this->load->view('footer');
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
	
	public function about()
	{
		
		if(isset($_GET['id']))
		{	
        		
	    $id=$_GET['id'];
		$data['movie']=$this->user_model->get_this_movie($id);
		if($data['movie'])
		{
		$movie_links = array(
			'mactive' =>'mabout');                     
			$this->session->set_userdata($movie_links);
			
		$this->load->view('header');
		$this->load->view('left_movie',$data);
		$this->load->view('movie_about',$data);
		$this->load->view('movie_bottom',$data);
		$this->load->view('footer');
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
	
	public function edit()
	{
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
			$data['movie']=$this->user_model->get_this_movie($id);
					if($data['movie'])
					{
									if($this->session->userdata('mlogged_in',true))
									{
										$thismovieid=$this->session->userdata('movie_id');
													if($thismovieid==$_GET['id'])
													{
														
															$this->load->view('header');
															$this->load->view('left_movie',$data);
															$this->load->view('edit_about',$data);
															$this->load->view('movie_bottom',$data);
															$this->load->view('footer');
														
														
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
	
	
	
	public function change_banner()
	{
	
					if(isset($_GET['id']))
					{
					$data['movie']=$this->user_model->get_this_movie($_GET['id']);
					 if($data['movie'])
					 {
						if($this->session->userdata('mlogged_in',true))
						{
							$thismovieid=$this->session->userdata('movie_id');
									if($thismovieid==$_GET['id'])
									{
											
											$mid=$_GET['id'];
											$movie_name=$_GET['name'];
											$config['upload_path'] = './uploads/movie_other/';
											$config['allowed_types'] = 'gif|jpg|png';
											$config['max_size']	= '30000';
											$config['max_width']  = '3000';
											$config['max_height']  = '1600';
									   
										   $this->load->library('upload', $config);

											
											if (empty($_FILES['banner_img']['name']))
												{
													 
													 $imgdata=$this->user_model->get_this_movie($mid);
													 $fname=$imgdata[0]->banner_img;
												}
												else
												{
													$this->upload->do_upload('banner_img');
													$imgdata = $this->upload->data();
													
				 $config = array(
    'source_image'      => $imgdata['full_path'], //path to the uploaded image
    'new_image'         => './uploads/movie_other/thumb_medium', //path to
    'maintain_ratio'    => false,
    'width'             => 728,
    'height'            => 300
    );
 
    //this is the magic line that enables you generate multiple thumbnails
    //you have to call the initialize() function each time you call the resize()
    //otherwise it will not work and only generate one thumbnail
    $this->image_lib->initialize($config);
    $this->image_lib->resize();
 
    $config = array(
    'source_image'      => $imgdata['full_path'],
    'new_image'         => './uploads/movie_other/thumb_small',
    'maintain_ratio'    => false,
    'width'             => 206,
    'height'            => 106
    );
    //here is the second thumbnail, notice the call for the initialize() function again
    $this->image_lib->initialize($config);
    $this->image_lib->resize();
	$config = array(
    'source_image'      => $imgdata['full_path'],
    'new_image'         => './uploads/movie_other/thumb_small_sr',
    'maintain_ratio'    => false,
    'width'             => 50,
    'height'            => 50
    );
    //here is the second thumbnail, notice the call for the initialize() function again
    $this->image_lib->initialize($config);
    $this->image_lib->resize();
													$fname=$imgdata['file_name'];
													
												}
												$result=$this->input->post(null,true);
												$db_response=$this->user_model->change_banner($fname,$result,$mid);
												if($db_response)
												{
														
														redirect('moviefolio/edit?id='.$mid.'&&name='.$movie_name);
												}
												else
												{
													$this->session->set_flashdata('serv_err', 'No image is selected to update');
													redirect('moviefolio/edit?id='.$mid.'&&name='.$movie_name);
												}
										
									}
									else
									{
									  redirect('mymovie');	
									}
						}
						else
						{
							redirect('mymovie');	
						}
						
						}
						else
						{
							redirect('mymovie');	
						}
					}
					else
					{
						redirect('mymovie');	
					}
	
	}
	public function change_movie_image()
	{
	
		if(isset($_GET['id']))
		{
		$data['movie']=$this->user_model->get_this_movie($_GET['id']);
					 if($data['movie'])
					 {
		if($this->session->userdata('mlogged_in',true))
		{
			$thismovieid=$this->session->userdata('movie_id');
			if($thismovieid==$_GET['id'])
			{
				    
					$mid=$_GET['id'];
					$movie_name=$_GET['name'];
				    $config['upload_path'] = './uploads/movie_main/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']	= '30000';
					$config['max_width']  = '3000';
					$config['max_height']  = '1600';
               
				   $this->load->library('upload', $config);

					
					if (empty($_FILES['movie_img']['name']))
						{
						     
							 $imgdata=$this->user_model->get_this_movie($mid);
							 $fname=$imgdata[0]->image;
						}
						else
						{
							$this->upload->do_upload('movie_img');
							$imgdata = $this->upload->data();
																
				
 
    $config = array(
    'source_image'      => $imgdata['full_path'],
    'new_image'         => './uploads/movie_main/thumb_small',
    'maintain_ratio'    => false,
    'width'             => 106,
    'height'            => 126
    );
    //here is the second thumbnail, notice the call for the initialize() function again
    $this->image_lib->initialize($config);
    $this->image_lib->resize();
							$fname=$imgdata['file_name'];
							
						}
						$result=$this->input->post(null,true);
						$db_response=$this->user_model->change_movie_image($fname,$result,$mid);
						if($db_response)
						{
								
								redirect('moviefolio/edit_photos?id='.$mid.'&&name='.$movie_name);
						}
						else
						{
							$this->session->set_flashdata('serv_err', 'No image is selected to update');
							redirect('moviefolio/edit_photos?id='.$mid.'&&name='.$movie_name);
						}
				
			}
			else
			{
			  redirect('mymovie');	
			}
		}
		else
		{
			redirect('mymovie');	
		}
			
		}
		else
		{
			redirect('mymovie');	
		}		
		
		
		
		}
		else
		{
			redirect('mymovie');	
		}
	
	}
	
	public function post_moviefolio()
	{
		
						
						if(isset($_POST['movie_post']))
						{
												$result=$this->input->post(NUll,true);
												$id=$result['curnt_user'];
												
											    $this->form_validation->set_rules('post_title', 'Post title', 'required');

												
												
											if ($this->form_validation->run() == FALSE)
											{
											
												
												$this->load->view('header');
												$data['movie']=$this->user_model->get_this_movie($id);
												$data['post']=$this->user_model->get_this_movie_posts($id);
												$this->load->view('left_movie',$data);
												$this->load->view('content_movie',$data);
												$this->load->view('movie_bottom',$data);
												$this->load->view('footer');
											}
											else
											{
												
												if (!empty($_FILES['post_img']['name']))
													{
														$config['upload_path'] = './uploads/moviepost/';
												$config['allowed_types'] = 'gif|jpg|png';
												$config['max_size']	= '30000';
												$config['max_width']  = '1024';
												$config['max_height']  = '768';

											   $this->load->library('upload', $config);

												if ( ! $this->upload->do_upload('post_img'))
												{
												
													$data['error'] = array('error' => $this->upload->display_errors());
													$this->load->view('header');
												$data['movie']=$this->user_model->get_this_movie($id);
												$data['post']=$this->user_model->get_this_movie_posts($id);
												$this->load->view('left_movie',$data);
												$this->load->view('content_movie',$data);
												$this->load->view('movie_bottom',$data);
												$this->load->view('footer');
												}
												else
												{
													$imgdata = $this->upload->data();
													$fname=$imgdata['file_name'];
													$db_response=$this->user_model->add_movie_posts($result,$fname,$id);
													if($db_response)
													{
															$this->session->set_flashdata('serv_suc', 'Your post has been added');
															redirect('moviefolio/movie?id='.$id.'&&name='.$result['movie_name']);
															
													}
													else
													{
														$this->session->set_flashdata('serv_err', 'Oops! Something wrong happened! Please retry!');
														redirect('moviefolio/movie?id='.$id.'&&name='.$result['movie_name']);
													}
												}
														
													}
													else
													{
														
													$db_response=$this->user_model->add_movie_posts_imageless($result,$id);
													if($db_response)
													{
															$this->session->set_flashdata('serv_suc', 'Your post has been added');
															redirect('moviefolio/movie?id='.$id.'&&name='.$result['movie_name']);
													}
													else
													{
														$this->session->set_flashdata('serv_err', 'Oops! Something wrong happened! Please retry!');
														redirect('moviefolio/movie?id='.$id.'&&name='.$result['movie_name']);
													}
												
													}
												
											} 
							
									
						}
						else
						{
							redirect('login');
						}
				
			  
	   
	}
	
	
	
	
	
	public function upload_movie_images()
	{
		if(isset($_GET['id']))
		{
		$data['movie']=$this->user_model->get_this_movie($_GET['id']);
					 if($data['movie'])
					 {
		
		
		$mid=$_GET['id'];
		$movie_name=$_GET['name'];
		if($this->session->userdata('mlogged_in',true))
		{
			$thismovieid=$this->session->userdata('movie_id');
			if($thismovieid==$_GET['id'])
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
						$config['upload_path'] = './uploads/movie_gallery';
						$config['allowed_types'] = 'gif|jpg|png';
						$config['max_size']    = '3000';
						$config['max_width']  = '3000';
						$config['max_height']  = '1600';
					$this->load->library('upload', $config);
					   if (!$this->upload->do_upload())
						{
							$data['error'] = array('error' => $this->upload->display_errors());
							$this->session->set_flashdata('serv_err',$data['error']);
							redirect('moviefolio/edit_photos?id='.$mid.'&&name='.$movie_name);
				
						}
						else
						{
							$this->upload->do_upload();
							$data = $this->upload->data();
							$name_array[] = $data['file_name'];
							
                         					
			              $this->session->set_flashdata('serv_suc','Images uploaded to the gallery!');
		   			    
					    }
						}
						
						   
							//$names= implode(',', $name_array);
							/*            $this->load->database();
							$db_data = array('id'=> NULL,
											 'name'=> $names);
						    $this->db->insert('testtable',$db_data);
							*/ 
                            $dbresponse=$this->user_model->upload_movie_images($name_array,$mid);	
			                redirect('moviefolio/edit_photos?id='.$mid.'&&name='.$movie_name);   	
			}
			else
			{
			  redirect('mymovie');	
			}
		}
		else
		{
			redirect('mymovie');	
		}
			
		}
		else
		{
			redirect('mymovie');
		}		
		
		
		
		}
		else
		{
			redirect('mymovie');
		}
	}
	
	public function save_about()
	{
		if(isset($_GET['id']))
		{
		$data['movie']=$this->user_model->get_this_movie($_GET['id']);
					 if($data['movie'])
					 {
						if($this->session->userdata('mlogged_in',true))
						{
							$thismovieid=$this->session->userdata('movie_id');
							if($thismovieid==$_GET['id'])
							{
							  
							  $this->form_validation->set_rules('movie', 'Movie', 'required');
							
							if ($this->form_validation->run() == True)
							{
							   
							   $result=$this->input->post(null,true);
							   $mid=$_GET['id'];
							   $movie_name=$_GET['name'];
							   $dbresponse=$this->user_model->update_about($result,$mid);
								 if($dbresponse)
								{
											$this->session->set_flashdata('serv_suc', 'About is successfully updated!');
												redirect('moviefolio/edit?id='.$mid.'&&name='.$movie_name); 
								}
								else
								{
											$this->session->set_flashdata('serv_err', 'Oops! An error occured! Please retry!');
											
											redirect('moviefolio/edit?id='.$mid.'&&name='.$movie_name); 
								}  
							}
							else
							{
								$id=$_GET['id'];
								$this->load->view('header');
								$data['movie']=$this->user_model->get_this_movie($id);
								$this->load->view('left_movie',$data);
								$this->load->view('edit_about',$data);
								$this->load->view('movie_bottom',$data);
								$this->load->view('footer');
							}
								   
							}
							else
							{
							  redirect('mymovie');	
							}
						}
						else
						{
							redirect('mymovie');	
						}
							
						}
else
{
redirect('mymovie');	
}						
						
						
		
		}
		else
		{
		 redirect('mymovie');	
		}	
	}
	
	public function trailor()
	{
		
		if(isset($_GET['id']))
		{	
        $data['movie']=$this->user_model->get_this_movie($_GET['id']);
					 if($data['movie'])
					 {		
									 $movie_links = array(
							'mactive' =>'mtrailor');                     
							$this->session->set_userdata($movie_links);
			
							$id=$_GET['id'];
							$this->load->view('header');
							$this->load->view('left_movie',$data);
							$this->load->view('movie_trailor',$data);
							$this->load->view('movie_bottom',$data);
							$this->load->view('footer');
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
	
	public function edit_trailor()
	{
		if(isset($_GET['id']))
		{
		 $data['movie']=$this->user_model->get_this_movie($_GET['id']);
					 if($data['movie'])
					 {		
		
					if($this->session->userdata('mlogged_in',true))
					{
						$thismovieid=$this->session->userdata('movie_id');
						if($thismovieid==$_GET['id'])
						{
							
							$id=$_GET['id'];
							$this->load->view('header');
							$data['movie']=$this->user_model->get_this_movie($id);
							$this->load->view('left_movie',$data);
							$this->load->view('edit_trailor',$data);
							$this->load->view('movie_bottom',$data);
							$this->load->view('footer');
							
							
						}
						else
						{
						  redirect('mymovie');	
						}
					}
					else
					{
						redirect('mymovie');	
					}
						
				}else
				{
				   redirect('mymovie');
				}				
					
					
		
		}
		else
		{
			redirect('mymovie');
		}
	}
	
	public function save_trailor()
	{
		if(isset($_GET['id']))
		{
			$data['movie']=$this->user_model->get_this_movie($_GET['id']);
					 if($data['movie'])
					 {	
				if($this->session->userdata('mlogged_in',true))
				{
					$thismovieid=$this->session->userdata('movie_id');
					if($thismovieid==$_GET['id'])
					{
						
					   $result=$this->input->post(null,true);
					   $mid=$_GET['id'];
					   $movie_name=$_GET['name'];
					   $dbresponse=$this->user_model->update_trailor($result,$mid);
						 if($dbresponse)
						{
									$this->session->set_flashdata('serv_suc', 'Trailor is successfully updated!');
										redirect('moviefolio/edit_trailor?id='.$mid.'&&name='.$movie_name); 
						}
						else
						{
									$this->session->set_flashdata('serv_err', 'Oops! An error occured! Please retry!');
									
									redirect('moviefolio/edit_trailor?id='.$mid.'&&name='.$movie_name); 
						}  
						
					}
					else
					{
					  redirect('mymovie');	
					}
				}
				else
				{
					redirect('mymovie');	
				}
				}
				else
				{
					redirect('mymovie');	
				}
					
		
		
		
		}
		else
		{
		 redirect('mymovie');	
		}
	}
	public function cast_crew()
	{
		
			
		if(isset($_GET['id']))
		{	
		
		$data['movie']=$this->user_model->get_this_movie($_GET['id']);
					 if($data['movie'])
					 {	
							$movie_links = array(
								'mactive' =>'mcastcrew');                     
								$this->session->set_userdata($movie_links);		
							$id=$_GET['id'];
							$this->load->view('header');
						
							$data['crew']=$this->user_model->get_this_crew($id);
							
							$data['cast']=$this->user_model->get_this_cast($id);
							$this->load->view('left_movie',$data);
							$this->load->view('movie_castcrew',$data);
							$this->load->view('movie_bottom',$data);
							$this->load->view('footer');
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
	
	public function edit_cast_crew()
	{
		if(isset($_GET['id']))
		{
		$data['movie']=$this->user_model->get_this_movie($_GET['id']);
					 if($data['movie'])
					 {	
					if($this->session->userdata('mlogged_in',true))
					{
						$thismovieid=$this->session->userdata('movie_id');
						if($thismovieid==$_GET['id'])
						{
							
							
							$id=$_GET['id'];
							$this->load->view('header');
							$data['actors']=$this->user_model->get_all_actors();
							$data['casts']=$this->user_model->get_this_movie_casts($id);
							$data['celebs']=$this->user_model->get_all_celebs();
							$data['crew']=$this->user_model->get_this_crew($id);
							$this->load->view('left_movie',$data);
							$this->load->view('edit_cast_crew',$data);
							$this->load->view('movie_bottom',$data);
							$this->load->view('footer');
							
							
						}
						else
						{
						  redirect('mymovie');	
						}
					}
					else
					{
						redirect('mymovie');	
					}
					}
		else
		{
			redirect('mymovie');	
		}					
			
				}
		else
		{
			redirect('mymovie');	
		}
	}
	
	public function save_caste_crew()
	{
		
		if(isset($_GET['id']))
		{
		$data['movie']=$this->user_model->get_this_movie($_GET['id']);
					 if($data['movie'])
					 {	
		if($this->session->userdata('mlogged_in',true))
		{
			$thismovieid=$this->session->userdata('movie_id');
			if($thismovieid==$_GET['id'])
			{
				
				
				$result=$this->input->post(null,true);
				$cid=$result['cast'];
				$cast_data=$this->user_model->get_this_celebrity($cid);
				$dbinsert=$this->user_model->add_movie_cast($cast_data,$result['movieid']);
				$mid=$result['movieid'];
				$movie_name=$_GET['name'];
				if($dbinsert)
				{
					
								redirect('moviefolio/edit_cast_crew?id='.$mid.'&&name='.$movie_name); 
				}
				else
				{
							//$this->session->set_flashdata('err', 'No logo is selected to update');
							//redirect('index.php/admin/banners/logo');
							redirect('moviefolio/edit_cast_crew?id='.$mid.'&&name='.$movie_name); 
				}
				
			}
			else
			{
			  redirect('mymovie');	
			}
		}
		else
		{
			redirect('mymovie');	
		}
			
		}
else
{
redirect('mymovie');	
}		
		
		
		
		}
		else
		{
		 redirect('mymovie');	
		}
		
		
	}
	
	public function get_this_celebrity($cid)
	{
		return $this->user_model->get_this_celebrity_all($cid);
	}
	
	
	public function save_movie_crew()
	{
		if(isset($_GET['id']))
		{
		$data['movie']=$this->user_model->get_this_movie($_GET['id']);
					 if($data['movie'])
					 {	
		if($this->session->userdata('mlogged_in',true))
		{
			$thismovieid=$this->session->userdata('movie_id');
			if($thismovieid==$_GET['id'])
			{
				
				
				$result=$this->input->post(null,true);
				$cid=$result['crew'];
				$cast_data=$this->user_model->get_this_celebrity($cid);
				$dbinsert=$this->user_model->add_movie_crew($cast_data,$result['movieid']);
				$mid=$result['movieid'];
				$movie_name=$_GET['name'];
				if($dbinsert)
				{
					
								redirect('moviefolio/edit_cast_crew?id='.$mid.'&&name='.$movie_name); 
				}
				else
				{
							//$this->session->set_flashdata('err', 'No logo is selected to update');
							//redirect('index.php/admin/banners/logo');
							redirect('moviefolio/edit_cast_crew?id='.$mid.'&&name='.$movie_name); 
				}
				
			}
			else
			{
			  redirect('mymovie');	
			}
		}
		else
		{
			redirect('mymovie');	
		}
			
		}
else
{
redirect('mymovie');	
}		
		
		
		
		}
		else
		{
		 redirect('mymovie');	
		}
		
	}
	
	
	
	
	
	
	public function save_video()
	{
		
		if(isset($_GET['id']))
		{
		$data['movie']=$this->user_model->get_this_movie($_GET['id']);
					 if($data['movie'])
					 {	
		if($this->session->userdata('mlogged_in',true))
		{
			$thismovieid=$this->session->userdata('movie_id');
			if($thismovieid==$_GET['id'])
			{
				
				
				$result=$this->input->post(null,true);
				$dbinsert=$this->user_model->save_video($result['movie_video'],$result['movieid']);
				$mid=$result['movieid'];
				$movie_name=$_GET['name'];
				if($dbinsert)
				{
					
								redirect('moviefolio/edit_videos?id='.$mid.'&&name='.$movie_name); 
				}
				else
				{
							//$this->session->set_flashdata('err', 'No logo is selected to update');
							//redirect('index.php/admin/banners/logo');
							redirect('moviefolio/edit_videos?id='.$mid.'&&name='.$movie_name); 
				}
				
			}
			else
			{
			  redirect('mymovie');	
			}
		}
		else
		{
			redirect('mymovie');	
		}
		}
else
{
	redirect('mymovie');	
}		
	
		}
		else
		{
		 redirect('mymovie');
		}
		
		
	}
	
	
	
	
	public function delete_movie_cast()
	{
		if(isset($_GET['id']))
		{
		$data['movie']=$this->user_model->get_this_movie($_GET['id']);
					 if($data['movie'])
					 {	
		if($this->session->userdata('mlogged_in',true))
		{
			$thismovieid=$this->session->userdata('movie_id');
			if($thismovieid==$_GET['id'])
			{
				
			    $mcid=$_GET['dc_id'];
				$mid=$_GET['id'];
				$movie_name=$_GET['name'];
				$dbresponse=$this->user_model->delete_movie_cast($mcid);
				
				if($dbresponse)
				{
					
								redirect('moviefolio/edit_cast_crew?id='.$mid.'&&name='.$movie_name); 
				}
				else
				{
							//$this->session->set_flashdata('err', 'No logo is selected to update');
							//redirect('index.php/admin/banners/logo');
							redirect('moviefolio/edit_cast_crew?id='.$mid.'&&name='.$movie_name); 
				}
				
			}
			else
			{
			  redirect('mymovie');	
			}
		}
		else
		{
			redirect('mymovie');	
		}
		}
else
{
	redirect('mymovie');	
}		
			
		
		
		
		}
		else
		{
			redirect('mymovie');	
		}
		
	}
	
	public function delete_movie_crew()
	{
			if(isset($_GET['id']))
		{
		$data['movie']=$this->user_model->get_this_movie($_GET['id']);
					 if($data['movie'])
					 {	
		if($this->session->userdata('mlogged_in',true))
		{
			$thismovieid=$this->session->userdata('movie_id');
			if($thismovieid==$_GET['id'])
			{
				
			    $mcrewid=$_GET['dc_id'];
				$mid=$_GET['id'];
				$movie_name=$_GET['name'];
				$dbresponse=$this->user_model->delete_movie_crew($mcrewid);
				
				if($dbresponse)
				{
					
								redirect('moviefolio/edit_cast_crew?id='.$mid.'&&name='.$movie_name); 
				}
				else
				{
							//$this->session->set_flashdata('err', 'No logo is selected to update');
							//redirect('index.php/admin/banners/logo');
							redirect('moviefolio/edit_cast_crew?id='.$mid.'&&name='.$movie_name); 
				}
				
			}
			else
			{
			  redirect('mymovie');	
			}
		}
		else
		{
			redirect('mymovie');	
		}
		}
else
{
redirect('mymovie');
}		
	}
		else
		{
		 redirect('mymovie');
		}
	}
	
	
	
	
	public function delete_gallery_images()
	{
		if(isset($_GET['id']))
		{
			$data['movie']=$this->user_model->get_this_movie($_GET['id']);
					 if($data['movie'])
					 {	
		if($this->session->userdata('mlogged_in',true))
		{
			$thismovieid=$this->session->userdata('movie_id');
			if($thismovieid==$_GET['id'])
			{
				
			    $dimg_id=$_GET['dimg_id'];
				$mid=$_GET['id'];
				$movie_name=$_GET['name'];
				$dbresponse=$this->user_model->delete_gallery_images($dimg_id);
				
				if($dbresponse)
				{
					
								redirect('moviefolio/edit_photos?id='.$mid.'&&name='.$movie_name); 
				}
				else
				{
							//$this->session->set_flashdata('err', 'No logo is selected to update');
							//redirect('index.php/admin/banners/logo');
							redirect('moviefolio/edit_photos?id='.$mid.'&&name='.$movie_name); 
				}
				
			}
			else
			{
			  redirect('mymovie');	
			}
		}
		else
		{
			redirect('mymovie');	
		}
			
		}
		else
		{
			redirect('mymovie');	
		}
		
		}
		else
		{
			redirect('mymovie');	
		}
		
	}
	
	
	
	public function delete_gallery_videos()
	{
		if(isset($_GET['id']))
		{
		$data['movie']=$this->user_model->get_this_movie($_GET['id']);
					 if($data['movie'])
					 {	
		if($this->session->userdata('mlogged_in',true))
		{
			$thismovieid=$this->session->userdata('movie_id');
			if($thismovieid==$_GET['id'])
			{
				
			    $dv_id=$_GET['dv_id'];
				$mid=$_GET['id'];
				$movie_name=$_GET['name'];
				$dbresponse=$this->user_model->delete_gallery_videos($dv_id);
				
				if($dbresponse)
				{
					
								redirect('moviefolio/edit_videos?id='.$mid.'&&name='.$movie_name); 
				}
				else
				{
							//$this->session->set_flashdata('err', 'No logo is selected to update');
							//redirect('index.php/admin/banners/logo');
							redirect('moviefolio/edit_videos?id='.$mid.'&&name='.$movie_name); 
				}
				
			}
			else
			{
			  redirect('mymovie');	
			}
		}
		else
		{
			redirect('mymovie');	
		}
			
		}
else
{
redirect('mymovie');
}		
		
		
		
		}
		else
		{
		 redirect('mymovie');
		}
		
	}
	
	public function test($s)
	{
	  return $s;
	}
	
	public function photos()
	{
	
			
		if(isset($_GET['id']))
		{	
		
				$data['movie']=$this->user_model->get_this_movie($_GET['id']);
							 if($data['movie'])
							 {	
					$movie_links = array(
					'mactive' =>'mphoto');                     
					$this->session->set_userdata($movie_links);		
				$id=$_GET['id'];
				$this->load->view('header');
				$data['movie_photos']=$this->user_model->get_this_movie_photos($id);
				$this->load->view('left_movie',$data);
				$this->load->view('movie_photos',$data);
				$this->load->view('movie_bottom',$data);
				$this->load->view('footer');
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
	
	public function edit_photos()
	{
		if(isset($_GET['id']))
		{
			$data['movie']=$this->user_model->get_this_movie($_GET['id']);
			 if($data['movie'])
			 {	
			if($this->session->userdata('mlogged_in',true))
			{
				$thismovieid=$this->session->userdata('movie_id');
				if($thismovieid==$_GET['id'])
				{
					
					
					$id=$_GET['id'];
					$this->load->view('header');
					$data['movie_photos']=$this->user_model->get_this_movie_gallery($id);
					$this->load->view('left_movie',$data);
					$this->load->view('edit_photos',$data);
					$this->load->view('movie_bottom',$data);
					$this->load->view('footer');
					
					
				}
				else
				{
				  redirect('mymovie');	
				}
			}
			else
			{
				redirect('mymovie');	
			}
				
			}
			else
			{
			redirect('mymovie');	
			}
		}
		else
		{
		 redirect('mymovie');	
		}
	}
	
	public function classifieds()
	{
	
		
		if(isset($_GET['id']))
		{
		$data['movie']=$this->user_model->get_this_movie($_GET['id']);
			 if($data['movie'])
			 {	
		if($this->session->userdata('mlogged_in',true))
		{
			$thismovieid=$this->session->userdata('movie_id');
			if($thismovieid==$_GET['id'])
			{
				
				$movie_links = array(
				'mactive' =>'mclassifieds');                     
				$this->session->set_userdata($movie_links);
				$id=$_GET['id'];
				$type="M";
				$this->load->view('header');
				$data['classifieds']=$this->user_model->get_this_movie_classifieds($id,$type);
				$this->load->view('left_movie',$data);
				$this->load->view('view_classifieds',$data);
				$this->load->view('movie_bottom',$data);
				$this->load->view('footer');
				
				
			}
			else
			{
			  redirect('mymovie');	
			}
		}
		else
		{
			redirect('mymovie');	
		}
		}
		else
		{
			redirect('mymovie');	
		}
		}
		else
		{
			redirect('mymovie');	
		}
	}
	
	
	
	public function add_classifieds()
	{
	
		$movie_links = array(
			'mactive' =>'mclassifieds');                     
			$this->session->set_userdata($movie_links);
		if(isset($_GET['id']))
		{
		$data['movie']=$this->user_model->get_this_movie($_GET['id']);
			 if($data['movie'])
			 {	
		if($this->session->userdata('mlogged_in',true))
		{
			$thismovieid=$this->session->userdata('movie_id');
			if($thismovieid==$_GET['id'])
			{
				
				
				$id=$_GET['id'];
				$this->load->view('header');
				
				$this->load->view('left_movie',$data);
				$this->load->view('add_classifieds',$data);
				$this->load->view('movie_bottom',$data);
				$this->load->view('footer');
				
				
			}
			else
			{
			  redirect('mymovie');	
			}
		}
		else
		{
			redirect('mymovie');	
		}
			
		}
else
{
	redirect('mymovie');
}		
		
		
		
		}
		else
		{
		 redirect('mymovie');
		}
	}
	
	
	public function edit_classified()
	{
	
		$movie_links = array(
			'mactive' =>'mclassifieds');                     
			$this->session->set_userdata($movie_links);
		if(isset($_GET['id']))
		{
		$data['movie']=$this->user_model->get_this_movie($_GET['id']);
			 if($data['movie'])
			 {	
		if($this->session->userdata('mlogged_in',true))
		{
			$thismovieid=$this->session->userdata('movie_id');
			if($thismovieid==$_GET['id'])
			{
				
				
				$id=$_GET['id'];
				$this->load->view('header');
				$data['classified']=$this->user_model->get_this_classified($_GET['edit']);
				$this->load->view('left_movie',$data);
				$this->load->view('edit_classified',$data);
				$this->load->view('movie_bottom',$data);
				$this->load->view('footer');
				
				
			}
			else
			{
			  redirect('mymovie');	
			}
		}
		else
		{
			redirect('mymovie');	
		}
		}
else
{
redirect('mymovie');
}
		}
		else
		{
		 redirect('mymovie');
		}
	}
	
	
	public function delete_classified()
	{
	
		$movie_links = array(
			'mactive' =>'mclassifieds');                     
			$this->session->set_userdata($movie_links);
		if(isset($_GET['id']))
		{
		$data['movie']=$this->user_model->get_this_movie($_GET['id']);
			 if($data['movie'])
			 {
		if($this->session->userdata('mlogged_in',true))
		{
			$thismovieid=$this->session->userdata('movie_id');
			if($thismovieid==$_GET['id'])
			{
				
				
				$did=$_GET['delete'];
				$dbresponse=$this->user_model->delete_classified($did);
													if($dbresponse)
													{
														$this->session->set_flashdata('success_on', 'Post has been deleted!');
														//redirect('index.php/admin/banners/logo');
														redirect('moviefolio/classifieds?id='.$thismovieid.'&&name='.$movie_name); 
													}
													else
													{
														$this->session->set_flashdata('error_on', 'An error occured! Please retry!');
														//redirect('index.php/admin/banners/logo');
														redirect('moviefolio/classifieds?id='.$thismovieid.'&&name='.$movie_name); 
													}
				
				
			}
			else
			{
			  redirect('mymovie');	
			}
		}
		else
		{
			redirect('mymovie');	
		}
			}
			else
			{
			redirect('mymovie');
			}
			
		
		
		
		}
		else
		{
		 redirect('mymovie');
		}
	}
	
	
	
	
	
	
	public function save_edit_classified()
	{
	
		
		if(isset($_GET['id']))
		{
		$data['movie']=$this->user_model->get_this_movie($_GET['id']);
			 if($data['movie'])
			 {
			 $movie_links = array(
			'mactive' =>'mclassifieds');                     
			$this->session->set_userdata($movie_links);
		if($this->session->userdata('mlogged_in',true))
		{
			$thismovieid=$this->session->userdata('movie_id');
			$movie_name=$this->session->userdata('movie_name');
			if($thismovieid==$_GET['id'])
			{
				
				
												$result=$this->input->post(NUll,true);
											    $this->form_validation->set_rules('title', 'Post Title', 'required');
												 $this->form_validation->set_rules('description', 'Description', 'required');
												if ($this->form_validation->run() == FALSE)
												{
													$id=$_GET['id'];
													$this->load->view('header');
													$data['classified']=$this->user_model->get_this_classified($result['classified_id']);
													$this->load->view('left_movie',$data);
													$this->load->view('edit_classified',$data);
													$this->load->view('movie_bottom',$data);
													$this->load->view('footer');
												}
												else
												{
													$dbresponse=$this->user_model->edit_classified($result);
													if($dbresponse)
													{
														$this->session->set_flashdata('success_on', 'Post has been saved!');
														//redirect('index.php/admin/banners/logo');
														redirect('moviefolio/classifieds?id='.$thismovieid.'&&name='.$movie_name); 
													}
													else
													{
														$this->session->set_flashdata('error_on', 'An error occured! Please retry!');
														//redirect('index.php/admin/banners/logo');
														redirect('moviefolio/classifieds?id='.$thismovieid.'&&name='.$movie_name); 
													}
												}
				
				
			}
			else
			{
			  redirect('mymovie');	
			}
		}
		else
		{
			redirect('mymovie');	
		}
			}
			else
			{
				redirect('mymovie');
			}
		
		}
		else
		{
		 redirect('mymovie');
		}
	}
	
	
	
	
	
	public function post_classified()
	{
	
		if(isset($_GET['id']))
		{
		$data['movie']=$this->user_model->get_this_movie($_GET['id']);
			 if($data['movie'])
			 {
			 
		$movie_links = array(
			'mactive' =>'mclassifieds');                     
			$this->session->set_userdata($movie_links);
		if($this->session->userdata('mlogged_in',true))
		{
			$thismovieid=$this->session->userdata('movie_id');
			$movie_name=$this->session->userdata('movie_name');
			if($thismovieid==$_GET['id'])
			{
				
				
												$result=$this->input->post(NUll,true);
											    $this->form_validation->set_rules('title', 'Post Title', 'required');
												 $this->form_validation->set_rules('description', 'Description', 'required');
												if ($this->form_validation->run() == FALSE)
												{
													$id=$_GET['id'];
													$this->load->view('header');
													$this->load->view('left_movie',$data);
													$this->load->view('add_classifieds',$data);
													$this->load->view('movie_bottom',$data);
													$this->load->view('footer');
												}
												else
												{
													$dbresponse=$this->user_model->add_classified($result);
													if($dbresponse)
													{
														$this->session->set_flashdata('success_on', 'Post has been published!');
														//redirect('index.php/admin/banners/logo');
														redirect('moviefolio/add_classifieds?id='.$thismovieid.'&&name='.$movie_name); 
													}
													else
													{
														$this->session->set_flashdata('error_on', 'An error occured! Please retry!');
														//redirect('index.php/admin/banners/logo');
														redirect('moviefolio/add_classifieds?id='.$thismovieid.'&&name='.$movie_name); 
													}
												}
				
				
			}
			else
			{
			  redirect('mymovie');	
			}
		}
		else
		{
			redirect('mymovie');	
		}
			
		}
			else
			{
				redirect('mymovie');	
			}
		
		}
		else
		{
		 redirect('mymovie');	
		}
	}
	
	
	
	
	
	
	
	public function settings()
	{
	
		if(isset($_GET['id']))
		{
		$data['movie']=$this->user_model->get_this_movie($_GET['id']);
			 if($data['movie'])
			 {
			 $movie_links = array(
			'mactive' =>'msettings');                     
			$this->session->set_userdata($movie_links);
		if($this->session->userdata('mlogged_in',true))
		{
			$thismovieid=$this->session->userdata('movie_id');
			if($thismovieid==$_GET['id'])
			{
				
				
				$id=$_GET['id'];
				$this->load->view('header');
		
				$this->load->view('left_movie',$data);
				$this->load->view('movie_settings',$data);
				$this->load->view('movie_bottom',$data);
				$this->load->view('footer');
				
				
			}
			else
			{
			  redirect('mymovie');	
			}
		}
		else
		{
			redirect('mymovie');	
		}
		}
		else
		{
			redirect('mymovie');
		}
		
		}
		else
		{
			redirect('mymovie');
		}
	}
	
	
	
	
	public function video()
	{
		
		if(isset($_GET['id']))
		{	
		$data['movie']=$this->user_model->get_this_movie($_GET['id']);
			 if($data['movie'])
			 {
        	$movie_links = array(
			'mactive' =>'mvideo');                     
			$this->session->set_userdata($movie_links);
			$id=$_GET['id'];
			$this->load->view('header');
			$data['mvideos']=$this->user_model->get_this_movie_videos($id);
			$this->load->view('left_movie',$data);
			$this->load->view('movie_videos',$data);
			$this->load->view('movie_bottom',$data);
			$this->load->view('footer');
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
	
	
	public function edit_videos()
	{
		if(isset($_GET['id']))
		{
		$data['movie']=$this->user_model->get_this_movie($_GET['id']);
			 if($data['movie'])
			 {
		if($this->session->userdata('mlogged_in',true))
		{
			$thismovieid=$this->session->userdata('movie_id');
			if($thismovieid==$_GET['id'])
			{
				
				
				$id=$_GET['id'];
				$this->load->view('header');
				$data['movie']=$this->user_model->get_this_movie($id);
				$data['mvideos']=$this->user_model->get_this_movie_videos($id);
				$this->load->view('left_movie',$data);
				$this->load->view('edit_videos',$data);
				$this->load->view('movie_bottom',$data);
				$this->load->view('footer');
				
				
			}
			else
			{
			  redirect('mymovie');	
			}
		}
		else
		{
			redirect('mymovie');	
		}
		}
		else
		{
		redirect('mymovie');
		}
			
		
		
		
		}
		else
		{
		 redirect('mymovie');
		}
	}
	
	
	
	public function get_this_movie_likes($loguser,$mov)
	{
		$dbcheck=$this->user_model->get_this_movie_likes($loguser,$mov);
		return $dbcheck;
	}
	public function get_this_movie_loves($loguser,$mov)
	{
		$dbcheck=$this->user_model->get_this_movie_loves($loguser,$mov);
		return $dbcheck;
	}
	
	public function get_this_movie_total_likes($mov)
	{
		$dbcheck=$this->user_model->get_this_movie_total_likes($mov);
		return $dbcheck;
	}
	
	public function get_this_movie_total_loves($mov)
	{
		$dbcheck=$this->user_model->get_this_movie_total_loves($mov);
		return $dbcheck;
	}
	
	
		public function add_movie_like()
	{
		if(isset($_POST))
		{
		$loguser=$_POST['loguser'];
		$movie=$_POST['movie'];
		
		$dbresponse=$this->user_model->add_movie_like($loguser,$movie);
		return $dbresponse;
		}
		else
		{
			redirect('login');
		}
		
	}
	
	public function add_movie_love()
	{
		if(isset($_POST))
		{
		$loguser=$_POST['loguser'];
		$movie=$_POST['movie'];
		
		$dbresponse=$this->user_model->add_movie_love($loguser,$movie);
		return $dbresponse;
		}
		else
		{
			redirect('login');
		}
		
		
	}
	
	public function delete_movie_love()
	{
		if(isset($_POST))
		{
		$loguser=$_POST['loguser'];
		$movie=$_POST['movie'];
		
		$dbresponse=$this->user_model->delete_movie_love($loguser,$movie);
		return $dbresponse;
		}
		else
		{
			redirect('login');
		}
	}
	
	public function delete_movie_like()
	{
		if(isset($_POST))
		{
		$loguser=$_POST['loguser'];
		$movie=$_POST['movie'];
		
		$dbresponse=$this->user_model->delete_movie_like($loguser,$movie);
		return $dbresponse;
		}
		else
		{
			redirect('login');
		}
	}
	
	
	/*--------------Sharing Code-------------------*/
			
	  public function share_movie()
	{
		if(isset($_POST))
		{
			$sharetype=$_POST['sharetype'];
			$sharedby=$_POST['sharedby'];
			$sharedid=$_POST['shareid'];
		    $this->add_points($sharedby);
			echo $dbresponse=$this->user_model->add_a_share($sharetype,$sharedby,$sharedid);
			
				 
			
		}
		else
		{
			redirect('login');
		}
	}
	
	public function add_points($sharedby)
	{
		$points=$this->user_model->get_this_user($sharedby);
		$upoints=$points[0]->points+3;
		$this->user_model->add_points($upoints,$sharedby);
	}
	
	/*--------------end of sharing code-------------*/
}
