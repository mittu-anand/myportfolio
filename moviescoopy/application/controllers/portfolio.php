<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends CI_Controller {
     
	  public function __construct()
       {
           parent::__construct();
			$this->load->model('user_model','',TRUE);
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<label class="label bg-danger"><i class="fa fa-times-circle"></i>','</label>');
			$this->load->library('image_lib');
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->helper('date');
			$this->load->library('session');
			date_default_timezone_set('UTC');
                         $header_links = array(
			'active' =>'portfolio',
			'sel_feed'=>'portfeed',
			'title'=>'Moviescoopy | Official Portfolios');                     
			$this->session->set_userdata($header_links);
       }
	
	public function index()
	{
	    
		$data['portfolio']=$this->user_model->get_all_portfolio();
		$data['industries']=$this->user_model->get_all_industry();
		$data['portfolio_types']=$this->user_model->get_all_portfolio_types();
		$this->load->view('header');
		$this->load->view('content_portfolio',$data);
		$this->load->view('footer',$data);
	}
	public function feed()
	{
			$hml = array(
			'hm_l_active'=>'lmpf',
			'title'=>'Moviescoopy | Official Portfolio Feed',
			'ogtitle'=>'Moviescoopy Portfolio Feed',
			'ogtitleimg'=>'http://www.moviescoopy.com/images/moviescoopy_portfolio_feed.jpg',
			'ogdesc'=>'See what new comers have shared with you. See a filtered showcase of new talents. They are making their way towards the big screen.How about you?');                     
			$this->session->set_userdata($hml);
		    $data['userfeeds']=$this->user_model->get_all_userfeeds();
			$data['industries']=$this->user_model->get_all_industry();
			$data['best_portfolio']=$this->user_model->get_best_portfolio();
			$this->load->view('header');
			$this->load->view('top_content');
			$this->load->view('content_portfolio_feed',$data);
			$this->load->view('footer');
	}
	public function feed_filter()
	{
		if(isset($_GET['language']))
		{
		    $hml = array(
			'hm_l_active'=>'lmpf',
			'title'=>'Moviescoopy | Official '.$_GET['language'].' Portfolio Feeds'); 
             $this->session->set_userdata($hml);			
			$data['industries']=$this->user_model->get_all_industry();
			$data['best_portfolio']=$this->user_model->get_best_portfolio_language($_GET['language']);
			$data['userfeeds']=$this->user_model->get_all_userfeeds_language($_GET['language']);
			$this->load->view('header');
			$this->load->view('top_content');
			$this->load->view('content_portfolio_feed',$data);
			$this->load->view('footer');
		}
		else
		{
			$title = array(
				'title'=>''); 
				$this->session->set_userdata($title);
				$this->load->view('header');
				$this->load->view('page_not_found.php');
				$this->load->view('footer');
		}
	}
	public function filter()
	{
	
		 if(isset($_GET['portfolio']) && isset($_GET['language']))
	  {
			 $title = array(
				'title'=>'Moviescoopy | Portfolios of Fresh '.$_GET['language'].' '.$_GET['portfolio']); 
				$this->session->set_userdata($title);
			$data['portfolio']=$this->user_model->get_all_portfolio_all($_GET['portfolio'],$_GET['language']);
	  }
	  else if(isset($_GET['portfolio']) && !isset($_GET['language']))
	  {
			 $title = array(
				'title'=>'Moviescoopy | Portfolios of Fresh  '.$_GET['portfolio'] ); 
				$this->session->set_userdata($title);
			$data['portfolio']=$this->user_model->get_all_portfolio_status($_GET['portfolio']);
	  }
	  else if(!isset($_GET['portfolio']) && isset($_GET['language']))
	  {		
			 $title = array(
				'title'=>'Moviescoopy | Portfolios | '.$_GET['language']); 
				$this->session->set_userdata($title);
			$data['portfolio']=$this->user_model->get_all_portfolio_language($_GET['language']);
	  }
	  else
	  {      $title = array(
				'title'=>'Moviescoopy | Official Portfolios'); 
				$this->session->set_userdata($title);
			$data['portfolio']=$this->user_model->get_all_portfolio();
	  }
		
	
		$data['industries']=$this->user_model->get_all_industry();
		$data['portfolio_types']=$this->user_model->get_all_portfolio_types();
		$this->load->view('header');
		$this->load->view('content_portfolio',$data);
		$this->load->view('footer',$data);
	}
	
	
	
	public function user()
	{
		if(isset($_GET['id']))
		{
		$data['user_portfolio']=$this->user_model->get_this_user_all($_GET['id']);
		if($data['user_portfolio'])
					{
										//if($data['user_portfolio'][0]->type=='N'&& $data['user_portfolio'][0]->uid==$this->session_userdata('user_id'))
							if($data['user_portfolio'][0]->type=='P')
								{
																	$user_links = array(
																		'usactive' =>'feeds',
																		'title'=>$data['user_portfolio'][0]->name);                     
																		$this->session->set_userdata($user_links);
																	$data['post']=$this->user_model->get_this_user_posts($_GET['id']);
																	$data['portfolio_type']=$this->user_model->get_all_portfolio_types();
																	
																	if($this->session->userdata('logged_in',true))
																	{
																		$current_user=$this->session->userdata('user_id');
																		$data['loopstatus']=$this->user_model->get_this_loop_status($current_user,$_GET['id']);
																		$data['loopotherstatus']=$this->user_model->get_this_loop_other_status($current_user,$_GET['id']);
																	}
																	$this->load->view('header');
																	$this->load->view('user_left',$data);
																	$this->load->view('user',$data);
																	$this->load->view('user_bottom',$data);
																	$this->load->view('footer');
								}
								else if($data['user_portfolio'][0]->type=='N')
								{
										if($this->session->userdata('logged_in',true) && $this->session->userdata('user_id')==$data['user_portfolio'][0]->uid)
										{
												$user_links = array(
																		'usactive' =>'feeds',
																		'title'=>$data['user_portfolio'][0]->name);                     
																		$this->session->set_userdata($user_links);
																	$data['post']=$this->user_model->get_this_user_posts($_GET['id']);
																	$data['portfolio_type']=$this->user_model->get_all_portfolio_types();
																	
																	if($this->session->userdata('logged_in',true))
																	{
																		$current_user=$this->session->userdata('user_id');
																		$data['loopstatus']=$this->user_model->get_this_loop_status($current_user,$_GET['id']);
																		$data['loopotherstatus']=$this->user_model->get_this_loop_other_status($current_user,$_GET['id']);
																	}
																	$this->load->view('header');
																	$this->load->view('user_left',$data);
																	$this->load->view('user',$data);
																	$this->load->view('user_bottom',$data);
																	$this->load->view('footer');
										}
										else
										{
											$title = array(
											'title'=>''); 
											$this->session->set_userdata($title);
											$this->load->view('header');
											$this->load->view('page_not_found.php');
											$this->load->view('footer');
											
										}
								}
		
					}
					else
					{
						$title = array(
						'title'=>''); 
						$this->session->set_userdata($title);
						$this->load->view('header');
						$this->load->view('page_not_found.php');
						$this->load->view('footer');
					}
		}
		else
		{
			            $title = array(
						'title'=>''); 
						$this->session->set_userdata($title);
						$this->load->view('header');
						$this->load->view('page_not_found.php');
						$this->load->view('footer');
		}
	}
	
	
	
	public function loops()
	{
		if(isset($_GET['id']))
		{
					$data['user_portfolio']=$this->user_model->get_this_user($_GET['id']);
					if($data['user_portfolio'])
					{
					 $user_links = array(
					'usactive' =>'loops',
					'title'=>$data['user_portfolio'][0]->name);                     
						$this->session->set_userdata($user_links);
						
						$data['count_new_inloops']=$this->user_model->get_count_of_new_in_loops($_GET['id']);
						$data['loops']=$this->user_model->get_user_loops($_GET['id']);
						if($this->session->userdata('logged_in',true))
					{
						$current_user=$this->session->userdata('user_id');
						$data['loopstatus']=$this->user_model->get_this_loop_status($current_user,$_GET['id']);
						$data['loopotherstatus']=$this->user_model->get_this_loop_other_status($current_user,$_GET['id']);
					}
						$this->load->view('header');
						$this->load->view('user_left',$data);
						$this->load->view('loops',$data);
						$this->load->view('user_bottom',$data);
						$this->load->view('footer');
				 }
				 else
				 {
					 $title = array(
						'title'=>''); 
						$this->session->set_userdata($title);
						$this->load->view('header');
						$this->load->view('page_not_found.php');
						$this->load->view('footer');
				 }
		}
		else
		{
			 $title = array(
						'title'=>''); 
						$this->session->set_userdata($title);
						$this->load->view('header');
						$this->load->view('page_not_found.php');
						$this->load->view('footer');
		}
	}
	public function get_loop_data()
	{
		if(isset($_POST))
		{
		$search=$_POST['search'];
		$ofset=$_POST['timelinecount'];
		$limit=$_POST['limit'];
		$user=$_POST['user'];
		 if($search!='')
	  {
			$data['loops']=$this->user_model->get_user_loops_search_ajax($user,$search,$ofset,$limit);
	  }
	  else if($search=='')
	  {
			$data['loops']=$this->user_model->get_user_loops_ajax($user,$ofset,$limit);
	  }
		$data['search']=$search;
		$data['user_portfolio']=$this->user_model->get_this_user($user);
		$this->load->view('content_loop_load',$data);
		}
		else
		{
		}
	}
	public function filter_loops()
	{
	    if(isset($_POST))
		{
			$userid=$_POST['loguser'];
			$keyword=$_POST['keyword'];
			$data['loops']=$this->user_model->get_user_loops_keyword($userid,$keyword);
			$data['count_loops']=$this->user_model->get_user_loops_keyword_count($userid,$keyword);
			$data['current_user']=$userid;
			$this->load->view('loops_filter',$data);
		}
	}
	
	
	
	public function shareline()
	{
		if(isset($_GET['id']))
		{
			$data['user_portfolio']=$this->user_model->get_this_user($_GET['id']);
			 if($data['user_portfolio'])
			{
				 $user_links = array(
				'usactive' =>'shareline',
				'title'=>$data['user_portfolio'][0]->name);                     
					$this->session->set_userdata($user_links);
					
					$data['shares']=$this->user_model->get_this_user_shares($_GET['id']);
						if($this->session->userdata('logged_in',true))
		{
		    $current_user=$this->session->userdata('user_id');
			$data['loopstatus']=$this->user_model->get_this_loop_status($current_user,$_GET['id']);
			$data['loopotherstatus']=$this->user_model->get_this_loop_other_status($current_user,$_GET['id']);
		}
					$this->load->view('header');
					$this->load->view('user_left',$data);
					$this->load->view('shareline',$data);
					$this->load->view('user_bottom',$data);
					$this->load->view('footer');
			}
			else
			{
				 $title = array(
						'title'=>''); 
						$this->session->set_userdata($title);
						$this->load->view('header');
						$this->load->view('page_not_found.php');
						$this->load->view('footer');
			}
				
		}
		else
		{
			 $title = array(
						'title'=>''); 
						$this->session->set_userdata($title);
						$this->load->view('header');
						$this->load->view('page_not_found.php');
						$this->load->view('footer');
		}
	}
	
	
	
	
	public function statistics()
	{
		if(isset($_GET['id']))
		{
		 $user_links = array(
		'usactive' =>'stats');                     
			$this->session->set_userdata($user_links);
			$data['user_portfolio']=$this->user_model->get_this_user($_GET['id']);
			if($this->session->userdata('logged_in',true))
		{
		    $current_user=$this->session->userdata('user_id');
			$data['loopstatus']=$this->user_model->get_this_loop_status($current_user,$_GET['id']);
			$data['loopotherstatus']=$this->user_model->get_this_loop_other_status($current_user,$_GET['id']);
		}
			$this->load->view('header');
			$this->load->view('user_left',$data);
			$this->load->view('statistics',$data);
			$this->load->view('user_bottom',$data);
			$this->load->view('footer');
				
		}
		else
		{
			echo "404";
		}
	}
	public function blogs()
	{
		if(isset($_GET['id']))
		{
		 $user_links = array(
		'usactive' =>'blogs');                     
			$this->session->set_userdata($user_links);
			$data['user_portfolio']=$this->user_model->get_this_user($_GET['id']);
			if($this->session->userdata('logged_in',true))
		{
		    $current_user=$this->session->userdata('user_id');
			$data['loopstatus']=$this->user_model->get_this_loop_status($current_user,$_GET['id']);
			$data['loopotherstatus']=$this->user_model->get_this_loop_other_status($current_user,$_GET['id']);
		}
			$this->load->view('header');
			$this->load->view('user_left',$data);
			$this->load->view('user_blogs',$data);
			$this->load->view('user_bottom',$data);
			$this->load->view('footer');
				
		}
		else
		{
			echo "404";
		}
	}
	
	
	public function write_blog()
	{
		if(isset($_GET['id']))
		{
					if($this->session->userdata('logged_in',true))
				   {
						$thisuserid=$this->session->userdata('user_id');
						if($thisuserid==$_GET['id'])
						{
						
						            
								$user_links = array(
								'usactive' =>'blogs');                     
									$this->session->set_userdata($user_links);
									$data['user_portfolio']=$this->user_model->get_this_user($_GET['id']);
									if($this->session->userdata('logged_in',true))
								{
									$current_user=$this->session->userdata('user_id');
									$data['loopstatus']=$this->user_model->get_this_loop_status($current_user,$_GET['id']);
									$data['loopotherstatus']=$this->user_model->get_this_loop_other_status($current_user,$_GET['id']);
								}
									$this->load->view('header');
									$this->load->view('user_left',$data);
									$this->load->view('write_user_blogs',$data);
									$this->load->view('user_bottom',$data);
									$this->load->view('footer');
									
						}
						else
						{
							redirect('login');
						}
				   }
				else
				  {
						redirect('login');
				  }		
			  
			  
	    }
		else
		{
			echo "404";
		}
	}
	
	public function edit_user_post()
	{
			if(isset($_GET['id']))
		{
		$data['user_portfolio']=$this->user_model->get_this_user($_GET['id']);  
		if($data['user_portfolio'])
		{
					if($this->session->userdata('logged_in',true))
				   {
						$thisuserid=$this->session->userdata('user_id');
						if($thisuserid==$_GET['id'])
						{
						      		
							      
								$user_links = array(
								'usactive' =>'feeds',
								'title'=>$data['user_portfolio'][0]->name);                     
									$this->session->set_userdata($user_links);
								
									if($this->session->userdata('logged_in',true))
								{
									$current_user=$this->session->userdata('user_id');
									$data['loopstatus']=$this->user_model->get_this_loop_status($current_user,$_GET['id']);
									$data['loopotherstatus']=$this->user_model->get_this_loop_other_status($current_user,$_GET['id']);
								}	
									$data['this_post']=$this->user_model->get_this_user_post($_GET['post']);
									$this->load->view('header');
									$this->load->view('user_left',$data);
									$this->load->view('edit_user_post',$data);
									$this->load->view('user_bottom',$data);
									$this->load->view('footer');
									
						}
						else
						{
							$title = array(
							'title'=>''); 
							$this->session->set_userdata($title);
							$this->load->view('header');
							$this->load->view('page_not_found.php');
							$this->load->view('footer');
						}
				   }
				else
				  {
						redirect('login');
				  }		
		}
		 else
	    {
			$title = array(
							'title'=>''); 
							$this->session->set_userdata($title);
							$this->load->view('header');
							$this->load->view('page_not_found.php');
							$this->load->view('footer'); 
        }	 
			  
	    }
		else
		{
							$title = array(
							'title'=>''); 
							$this->session->set_userdata($title);
							$this->load->view('header');
							$this->load->view('page_not_found.php');
							$this->load->view('footer');
		}
	}
	
	public function save_post_portfolio()
	{
		
		if(isset($_POST))
		{
		if(isset($_GET['id']))
		{
			
		$data['user_portfolio']=$this->user_model->get_this_user($_GET['id']);  
		if($data['user_portfolio'])
		{
			if($this->session->userdata('logged_in',true))
				   {
						$thisuserid=$this->session->userdata('user_id');
						if($thisuserid==$_GET['id'])
						{
						
											$this->form_validation->set_rules('post_title', 'Post title', 'required');
												
											if ($this->form_validation->run() == FALSE)
											{
											
												$data['portfolio_type']=$this->user_model->get_all_portfolio_types();
												$this->load->view('header');
												$this->load->view('user_left',$data);
												$this->load->view('user',$data);
												$this->load->view('user_bottom',$data);
												$this->load->view('footer');
											}
											else
											{
												$result=$this->input->post(NUll,true);
												if (!empty($_FILES['post_img']['name']))
													{
												$config['upload_path'] = './uploads/user_post/';
												$config['allowed_types'] = 'gif|jpg|png';
												$config['max_size']	= '30000';
												$config['max_width']  = '1024';
												$config['max_height']  = '768';

											   $this->load->library('upload', $config);

												if ( ! $this->upload->do_upload('post_img'))
												{
												
													$data['error'] = array('error' => $this->upload->display_errors());
													$data['portfolio_type']=$this->user_model->get_all_portfolio_types();
													$this->load->view('header');
													$this->load->view('user_left',$data);
													$this->load->view('user',$data);
													$this->load->view('user_bottom',$data);
													$this->load->view('footer');
												}
												else
												{
													$imgdata = $this->upload->data();
													$fname=$imgdata['file_name'];
													$db_response=$this->user_model->update_user_posts($result,$fname,$_GET['id']);
													if($db_response)
													{
															$this->session->set_flashdata('serv_suc', 'Your post has been updated');
															redirect('portfolio/user?id='.$_GET['id']);
													}
													else
													{
														$this->session->set_flashdata('serv_err', 'Oops! Something wrong happened! Please retry!');
														redirect('portfolio/user?id='.$_GET['id']);
													}
												}
														
													}
													else
													{
														
													$db_response=$this->user_model->update_user_posts_imageless($result,$_GET['id']);
													if($db_response)
													{
															$this->session->set_flashdata('serv_suc', 'Your post has been updated');
															redirect('portfolio/user?id='.$_GET['id']);
													}
													else
													{
														$this->session->set_flashdata('serv_err', 'Oops! Something wrong happened! Please retry!');
														redirect('portfolio/user?id='.$_GET['id']);
													}
												
													}
												
											} 
							
									
						}
						else
						{
							$title = array(
							'title'=>''); 
							$this->session->set_userdata($title);
							$this->load->view('header');
							$this->load->view('page_not_found.php');
							$this->load->view('footer');
						}
				   }
				else
				  {
						redirect('login');
				  }	
		}
					else
					{
						$title = array(
							'title'=>''); 
							$this->session->set_userdata($title);
							$this->load->view('header');
							$this->load->view('page_not_found.php');
							$this->load->view('footer');
					}
			  
			  
	    }
		else
		{
							$title = array(
							'title'=>''); 
							$this->session->set_userdata($title);
							$this->load->view('header');
							$this->load->view('page_not_found.php');
							$this->load->view('footer');
		}
		}
		else
		{
			$title = array(
							'title'=>''); 
							$this->session->set_userdata($title);
							$this->load->view('header');
							$this->load->view('page_not_found.php');
							$this->load->view('footer');
		}
	}
	
	
	
	public function make_portfolio()
	{
	
		if(isset($_POST))
		{
		if(isset($_GET['id']))
		{
		
		$data['user_portfolio']=$this->user_model->get_this_user($_GET['id']);  
		if($data['user_portfolio'])
		{
					if($this->session->userdata('logged_in',true))
				   {
						$thisuserid=$this->session->userdata('user_id');
						if($thisuserid==$_GET['id'])
						{
						
						            
									$result=$this->input->post(null,true);
									if($result['portfolio_type']!='')
									{
										$dbresponse=$this->user_model->update_to_portfolio($result,$_GET['id']);
										if($dbresponse)
										{
											$this->session->set_userdata('user_type','P');	
								            redirect('portfolio/user?id='.$_GET['id']);
										}
										else
										{
											$this->session->set_flashdata('serv_err', 'Something wrong happened.Please retry!');
											redirect('portfolio/user?id='.$_GET['id']); 
										}
										   
									}
									else
									{
									      $this->session->set_flashdata('serv_err', 'Please choose your category!');
								          redirect('portfolio/user?id='.$_GET['id']); 
									}
									
						}
						else
						{
							$title = array(
							'title'=>''); 
							$this->session->set_userdata($title);
							$this->load->view('header');
							$this->load->view('page_not_found.php');
							$this->load->view('footer');
						}
				   }
				else
				  {
						redirect('login');
				  }		
			  }
			  else
			  {
							$title = array(
							'title'=>''); 
							$this->session->set_userdata($title);
							$this->load->view('header');
							$this->load->view('page_not_found.php');
							$this->load->view('footer');
			  }
			  
	    }
		else
		{
							$title = array(
							'title'=>''); 
							$this->session->set_userdata($title);
							$this->load->view('header');
							$this->load->view('page_not_found.php');
							$this->load->view('footer');
		}
		}
		else
		{
			$title = array(
							'title'=>''); 
							$this->session->set_userdata($title);
							$this->load->view('header');
							$this->load->view('page_not_found.php');
							$this->load->view('footer');
		}
	}
	
	
	
	public function accept_loop_request()
	{
		if($this->session->userdata('logged_in',true))
				   {
						
						if(isset($_POST['accept_loop']))
						{
						        
							  $result=$this->input->post(null,true);	
							 
											  $dbresponse=$this->user_model->accept_loop_request($result);
												if($dbresponse)
												{
													
													
													 redirect('portfolio/user?id='.$result['friend_user']); 
												}
												else
												{ 
													 
												 redirect('portfolio/user?id='.$result['friend_user']); 
												}
											
							
									
						}
						else
						{
							redirect('login');
						}
				   }
	}
	
	public function edit_portfolio()
	{
		if(isset($_GET['id']))
		{
		  $data['user_portfolio']=$this->user_model->get_this_user($_GET['id']);
		  if($data['user_portfolio'])
		  {
					if($this->session->userdata('logged_in',true))
				   {
						$thisuserid=$this->session->userdata('user_id');
						if($thisuserid==$_GET['id'])
						{
						        $user_links = array(
								'abt' =>'password',
								'title'=>$data['user_portfolio'][0]->name); 
								$this->session->set_userdata($user_links);
								$data['industry']=$this->user_model->get_all_industry();
						        $data['portfolio_type']=$this->user_model->get_all_portfolio_types();
								
								$this->load->view('header');
								$this->load->view('user_left',$data);
								$this->load->view('user_edit',$data);
								$this->load->view('user_bottom',$data);
								$this->load->view('footer');       
									
						}
						else
						{
							$title = array(
							'title'=>''); 
							$this->session->set_userdata($title);
							$this->load->view('header');
							$this->load->view('page_not_found.php');
							$this->load->view('footer');
						}
				   }
				   else
				   {
						$title = array(
							'title'=>''); 
							$this->session->set_userdata($title);
							$this->load->view('header');
							$this->load->view('page_not_found.php');
							$this->load->view('footer');
				   }
				   }
				   else
				   {
						$title = array(
							'title'=>''); 
							$this->session->set_userdata($title);
							$this->load->view('header');
							$this->load->view('page_not_found.php');
							$this->load->view('footer');
				   }
				   
				   
				
			  
	    }
		else
		{
			redirect('login');
		}
	}
	
	
	public function accept_loopin_request()
	{
		if($this->session->userdata('logged_in',true))
				   {
						
						if(isset($_POST['accept_loopin']))
						{
						        
							  $result=$this->input->post(null,true);	
							 
											  $dbresponse=$this->user_model->accept_loop_request($result);
												if($dbresponse)
												{
													
													
													 redirect('portfolio/loopsin?id='.$result['current_user']); 
												}
												else
												{ 
													 
												 redirect('portfolio/loopsin?id='.$result['current_user']); 
												}
											
							
									
						}
						else
						{
							redirect('login');
						}
				   }
	}
	
	public function add_to_loop()
	{
		if($this->session->userdata('logged_in',true))
				   {
						
						if(isset($_POST['add_loop']))
						{
						        
							  $result=$this->input->post(null,true);	
							 
											  $dbresponse=$this->user_model->send_friend_request($result);
												if($dbresponse)
												{
													
													
													 redirect('portfolio/user?id='.$result['friend_user']); 
												}
												else
												{ 
													 
												 redirect('portfolio/user?id='.$result['friend_user']); 
												}
											
							
									
						}
						else
						{
							redirect('login');
						}
				   }
	}
	
	
	public function cancel_loop_requst()
	{
	
			if($this->session->userdata('logged_in',true))
				   {
						
						if(isset($_POST['cancel_loop_request']))
						{
						        
							  $result=$this->input->post(null,true);	
							 
											  $dbresponse=$this->user_model->cancel_loop_request($result);
												if($dbresponse)
												{
													
													
													 redirect('portfolio/user?id='.$result['friend_user']); 
												}
												else
												{ 
													 
												 redirect('portfolio/user?id='.$result['friend_user']); 
												}
											
							
									
						}
						else
						{
							redirect('login');
						}
				   }
	
	}
	
	
	public function cancel_loop_request()
	{
	
			if($this->session->userdata('logged_in',true))
				   {
						
						if(isset($_POST['cancel_loop_requests']))
						{
						        
							  $result=$this->input->post(null,true);	
							 
											  $dbresponse=$this->user_model->cancel_loop_request($result);
												if($dbresponse)
												{
													
													
													 redirect('portfolio/loopsout?id='.$result['current_user']); 
												}
												else
												{ 
													 
												 redirect('portfolio/loopsout?id='.$result['current_user']); 
												}
											
							
									
						}
						else
						{
							redirect('login');
						}
				   }
	
	}
	
	public function get_this_user_likes($loguser,$oppuser)
	{
		$dbcheck=$this->user_model->get_this_user_likes($loguser,$oppuser);
		return $dbcheck;
	}
	public function get_this_user_loves($loguser,$oppuser)
	{
		$dbcheck=$this->user_model->get_this_user_loves($loguser,$oppuser);
		return $dbcheck;
	}
	
	public function get_this_user_total_likes($userid)
	{
		$dbcheck=$this->user_model->get_this_user_total_likes($userid);
		return $dbcheck;
	}
	
	public function get_this_user_total_loves($userid)
	{
		$dbcheck=$this->user_model->get_this_user_total_loves($userid);
		return $dbcheck;
	}
	
	public function add_like()
	{
		if(isset($_POST))
		{
		$loguser=$_POST['loguser'];
		$enduser=$_POST['enduser'];
		
		$dbresponse=$this->user_model->add_like($loguser,$enduser);
		return $dbresponse;
		}
		else
		{
			redirect('login');
		}
		
	}
	
	public function add_love()
	{
		if(isset($_POST))
		{
		$loguser=$_POST['loguser'];
		$enduser=$_POST['enduser'];
		
		$dbresponse=$this->user_model->add_love($loguser,$enduser);
		return $dbresponse;
		}
		else
		{
			redirect('login');
		}
		
		
	}
	
	public function delete_love()
	{
		if(isset($_POST))
		{
		$loguser=$_POST['loguser'];
		$enduser=$_POST['enduser'];
		
		$dbresponse=$this->user_model->delete_love($loguser,$enduser);
		return $dbresponse;
		}
		else
		{
			redirect('login');
		}
	}
	
	public function delete_like()
	{
		if(isset($_POST))
		{
		$loguser=$_POST['loguser'];
		$enduser=$_POST['enduser'];
		
		$dbresponse=$this->user_model->delete_like($loguser,$enduser);
		return $dbresponse;
		}
		else
		{
			redirect('login');
		}
	}
	
	public function save_about()
	{
		if(isset($_POST))
		{
		if(isset($_GET['id']))
		{

				$data['user_portfolio']=$this->user_model->get_this_user_all($_GET['id']);
				if($data['user_portfolio'])
				{
				
			if($this->session->userdata('logged_in',true))
				   {
						$thisuserid=$this->session->userdata('user_id');
						if($thisuserid==$_GET['id'])
						{
						      
								
								
							  $result=$this->input->post(null,true);	
							  $this->form_validation->set_rules('name', 'Name', 'trim|required');
							  $this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required');
												
												
											if ($this->form_validation->run() == FALSE)
											{
												$data['industry']=$this->user_model->get_all_industry();
												$data['portfolio_type']=$this->user_model->get_all_portfolio_types();
												 $title=array(
												  'title'=>$data['user_portfolio'][0]->name); 
													$this->session->set_userdata($title);  
												$this->load->view('header');
												$this->load->view('user_left',$data);
												$this->load->view('user_edit',$data);
												$this->load->view('user_bottom',$data);
												$this->load->view('footer'); 
											}
											else
											{
											  $dbresponse=$this->user_model->update_user_about($result,$_GET['id']);
												if($dbresponse)
												{
													 $this->session->set_flashdata('serv_suc', 'About updated successfully!');
													 $user=$this->user_model->get_this_user($_GET['id']);
												
													 $this->session->set_userdata('user_name',$user[0]->name);
													 $this->session->set_userdata('user_type',$user[0]->type);
													 $this->session->set_userdata('user_gender',$user[0]->gender);
													
													 redirect('portfolio/edit_portfolio?id='.$_GET['id']); 
												}
												else
												{ 
													 $this->session->set_flashdata('serv_err', 'Oops! Something wrong happened.Please retry!');
													 redirect('portfolio/edit_portfolio?id='.$_GET['id']); 
												}
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
						redirect('login');
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
	
	public function save_socials()
	{
	
	if(isset($_POST))
	{
		if(isset($_GET['id']))
		{
					if($this->session->userdata('logged_in',true))
				   {
						$thisuserid=$this->session->userdata('user_id');
						if($thisuserid==$_GET['id'])
						{
						       
							  $result=$this->input->post(null,true);	
							 
											  $dbresponse=$this->user_model->update_user_social($result,$_GET['id']);
												if($dbresponse)
												{
													 $this->session->set_flashdata('serv_suc', 'Social hub updated successfully!');
													
													 redirect('portfolio/edit_portfolio_social?id='.$_GET['id']); 
												}
												else
												{ 
													 $this->session->set_flashdata('serv_err', 'Oops! Something wrong happened.Please retry!');
													 redirect('portfolio/edit_portfolio_social?id='.$_GET['id']); 
												}
											
							
									
						}
						else
						{
							$title = array(
							'title'=>''); 
							$this->session->set_userdata($title);
							$this->load->view('header');
							$this->load->view('page_not_found.php');
							$this->load->view('footer');
						}
				   }
				else
				  {
						redirect('login');
				  }		
			  
			  
	    }
		else
		{
			$title = array(
							'title'=>''); 
							$this->session->set_userdata($title);
							$this->load->view('header');
							$this->load->view('page_not_found.php');
							$this->load->view('footer');
		}
		}
		else
		{
			$title = array(
							'title'=>''); 
							$this->session->set_userdata($title);
							$this->load->view('header');
							$this->load->view('page_not_found.php');
							$this->load->view('footer');
		}
	}
	
	public function save_email()
	{
		if(isset($_GET['id']))
		{
					if($this->session->userdata('logged_in',true))
				   {
						$thisuserid=$this->session->userdata('user_id');
						if($thisuserid==$_GET['id'])
						{
						$data['user_portfolio']=$this->user_model->get_this_user($_GET['id']);
						       $title=array(
						      'title'=>$data['user_portfolio'][0]->name); 
								$this->session->set_userdata($title);  
								
							 $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_isEmailExist');
							 if ($this->form_validation->run() == FALSE)
								{
									
									$user_links = array(
									'usactive' =>'password',
									'title'=>$data['user_portfolio'][0]->name); 
									$this->session->set_userdata($user_links);
									$data['portfolio_type']=$this->user_model->get_all_portfolio_types();
								
									$this->load->view('header');
									$this->load->view('user_left',$data);
									$this->load->view('user_authentication',$data);
									$this->load->view('user_bottom',$data);
									$this->load->view('footer');
								}
								else{
											  $result=$this->input->post(null,true);
											  $dbresponse=$this->user_model->update_user_email($result,$_GET['id']);
												if($dbresponse)
												{
													 $this->session->set_flashdata('serv_suc', 'Email updated successfully!');
													
													 redirect('portfolio/edit_portfolio_authentication?id='.$_GET['id']); 
												}
												else
												{ 
													 $this->session->set_flashdata('serv_err', 'Oops! Something wrong happened.Please retry!');
													 redirect('portfolio/edit_portfolio_authentication?id='.$_GET['id']); 
												}
												
									}
											
							
									
						}
						else
						{
							$title = array(
							'title'=>''); 
							$this->session->set_userdata($title);
							$this->load->view('header');
							$this->load->view('page_not_found.php');
							$this->load->view('footer');
						}
				   }
				else
				  {
						redirect('login');
				  }		
			  
			  
	    }
		else
		{
			redirect('login');
		}
	}
	
	public function isEmailExist($email) 
	{
   
		$is_exist = $this->user_model->isEmailExist($email);

		if ($is_exist) {
			$this->form_validation->set_message(
				'isEmailExist','Email address is already in use'
			);    
			return false;
		} else {
			return true;
		}
	}
	
	public function save_password()
	{
			if(isset($_POST))
			{
			if(isset($_GET['id']))
		{
					if($this->session->userdata('logged_in',true))
				   {
				   
						$data['user_portfolio']=$this->user_model->get_this_user($_GET['id']);
						 $title=array(
						      'title'=>$data['user_portfolio'][0]->name); 
								$this->session->set_userdata($title);
						$thisuserid=$this->session->userdata('user_id');
						if($thisuserid==$_GET['id'])
						{
						        
								$this->form_validation->set_rules('cpassword', 'Current Password', 'required');
								$this->form_validation->set_rules('newpassword', 'New Password', 'required');
								$this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required');
			    if($this->form_validation->run() == FALSE)
				{
					
							
								$this->load->view('header');
								$this->load->view('user_left',$data);
								$this->load->view('user_authentication',$data);
								$this->load->view('user_bottom',$data);
								$this->load->view('footer');  
					
				}
				else
				{
					$result=$this->input->post(NUll,true);
					//$pass = do_hash($$result['password'], 'md5'); // MD5
					$db_response=$this->user_model->get_this_credential($result,$_GET['id']);
					if($db_response)
					{
					
						if($result['newpassword']==$result['confirmpassword'])
							{
								$db_response=$this->user_model->update_passwords($result,$_GET['id']);
								$this->session->set_flashdata('serv_suc','Your password has been changed successfully');
						        redirect('portfolio/edit_portfolio_authentication?id='.$_GET['id']);
							}
						else
							{
								$this->session->set_flashdata('serv_err','Passwords you entered does not  match!');
						        redirect('portfolio/edit_portfolio_authentication?id='.$_GET['id']);
							}						
					}
					else
					{
						
						    $this->session->set_flashdata('serv_err','Current Password seems to have wrongly entered!');
						    redirect('portfolio/edit_portfolio_authentication?id='.$_GET['id']);
					}
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
						redirect('login');
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
	
	function _prep_password($password)
		{
			 return sha1($password.$this->config->item('encryption_key'));
		}
	public function edit_portfolio_social()
	{
			if(isset($_GET['id']))
		{
					if($this->session->userdata('logged_in',true))
				   {
						$thisuserid=$this->session->userdata('user_id');
						if($thisuserid==$_GET['id'])
						{
							$data['user_portfolio']=$this->user_model->get_this_user($_GET['id']);
								$user_links = array(
								'usactive' =>'abt',
								'title'=>$data['user_portfolio'][0]->name); 
								$this->session->set_userdata($user_links);
						        $data['portfolio_type']=$this->user_model->get_all_portfolio_types();
								
								$this->load->view('header');
								$this->load->view('user_left',$data);
								$this->load->view('user_social',$data);
								$this->load->view('user_bottom',$data);
								$this->load->view('footer');       
									
						}
						else
						{
							    $title = array(
								'title'=>''); 
								$this->session->set_userdata($title);
								$this->load->view('header');
								$this->load->view('page_not_found.php');
								$this->load->view('footer');
						}
				   }
				else
				  {
						redirect('login');
				  }		
			  
			  
	    }
		else
		{
			redirect('login');
		}
	}
	public function page()
	{
		if(isset($_GET['id']))
		{
				$data['feedpost']=$this->user_model->get_this_user_postis($_GET['id']);
				if($data['feedpost'])
				{
			
				$title = array(
						'title'=>$data['feedpost'][0]->post_title .' | ' .$data['feedpost'][0]->name); 
							$this->session->set_userdata($title);
				$this->load->view('header');
				$this->load->view('portfoliofeedpage',$data);
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
	public function edit_portfolio_authentication()
	{
			if(isset($_GET['id']))
		{
					if($this->session->userdata('logged_in',true))
				   {
						$thisuserid=$this->session->userdata('user_id');
						if($thisuserid==$_GET['id'])
						{
							$data['user_portfolio']=$this->user_model->get_this_user($_GET['id']);
								$user_links = array(
								'usactive' =>'password',
								'title'=>$data['user_portfolio'][0]->name); 
								$this->session->set_userdata($user_links);
						        $data['portfolio_type']=$this->user_model->get_all_portfolio_types();
							
								$this->load->view('header');
								$this->load->view('user_left',$data);
								$this->load->view('user_authentication',$data);
								$this->load->view('user_bottom',$data);
								$this->load->view('footer');       
									
						}
						else
						{
							$title = array(
								'title'=>''); 
								$this->session->set_userdata($title);
								$this->load->view('header');
								$this->load->view('page_not_found.php');
								$this->load->view('footer');
								}
				   }
				else
				  {
						redirect('login');
				  }		
			  
			  
	    }
		else
		{
			redirect('login');
		}
	}
	
	
	
	
	public function change_profile_image()
	{
		if(isset($_POST))
		{
			if(isset($_GET['id']))
		{
				$data['user_portfolio']=$this->user_model->get_this_user_all($_GET['id']);
				if($data['user_portfolio'])
				{
				
					if($this->session->userdata('logged_in',true))
				   {
						$thisuserid=$this->session->userdata('user_id');
						if($thisuserid==$_GET['id'])
						{
						
									 $uid=$_GET['id'];
									 $result=$this->input->post(null,true);
									 if(empty($_FILES['user_img']['name']))
									{ 
										 $this->session->set_flashdata('serv_err', 'Please choose an image to change!');
										 redirect('portfolio/edit_portfolio?id='.$uid);
									}
									else
									{
									       
											$config['upload_path'] = './uploads/users/';
											$config['allowed_types'] = 'gif|jpg|png';
											$config['max_size']	= '30000';
											$config['max_width']  = '2000';
											$config['max_height']  = '1600';
											$this->load->library('upload', $config);
													if(!$this->upload->do_upload('user_img'))
													{
														$error = array('error' => $this->upload->display_errors());
														$this->session->set_flashdata('img_err',$error);
														redirect('portfolio/edit_portfolio?id='.$uid);
													}
													else
													{
														
														$imgdata = $this->upload->data();
														$fname=$imgdata['file_name'];
														
														 $config = array(
														'source_image'      => $imgdata['full_path'], //path to the uploaded image
														'new_image'         => './uploads/users/thumb_medium', //path to
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
														'new_image'         => './uploads/users/thumb_small',
														'maintain_ratio'    => false,
														'width'             => 90,
														'height'            => 90
														);
														//here is the second thumbnail, notice the call for the initialize() function again
														$this->image_lib->initialize($config);
														$this->image_lib->resize();
														$config = array(
														'source_image'      => $imgdata['full_path'],
														'new_image'         => './uploads/users/thumb_small_sr',
														'maintain_ratio'    => false,
														'width'             => 50,
														'height'            => 50
														);
														//here is the second thumbnail, notice the call for the initialize() function again
														$this->image_lib->initialize($config);
														$this->image_lib->resize();
														$db_response=$this->user_model->change_user_image($fname,$uid,$result);
														if($db_response)
														{
																
																$this->session->set_userdata('user_image',$fname);
																redirect('portfolio/edit_portfolio?id='.$uid);
																
														}
														else
														{
															$this->session->set_flashdata('serv_err', 'Oops Something wrong happened! Please retry!');
															redirect('portfolio/edit_portfolio?id='.$uid);
														} 
													}
										
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
						redirect('login');
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
	
	

	public function about()
	{
		if(isset($_GET['id']))
		{
					
						$data['user_portfolio']=$this->user_model->get_this_user($_GET['id']);	
						if($data['user_portfolio'])
						{
						        $user_links = array(
								'usactive' =>'abt',
								'title'=>$data['user_portfolio'][0]->name);                     
								$this->session->set_userdata($user_links);

						        $data['portfolio_type']=$this->user_model->get_all_portfolio_types();
							
								if($this->session->userdata('logged_in',true))
								{
									$current_user=$this->session->userdata('user_id');
									$data['loopstatus']=$this->user_model->get_this_loop_status($current_user,$_GET['id']);
									$data['loopotherstatus']=$this->user_model->get_this_loop_other_status($current_user,$_GET['id']);
								}
								$this->load->view('header',$data);
								$this->load->view('user_left',$data);
								$this->load->view('user_about',$data);
								$this->load->view('user_bottom',$data);
								$this->load->view('footer');       
						
				   	}
					else
					{
						$title = array(
						'title'=>''); 
						$this->session->set_userdata($title);
						$this->load->view('header');
						$this->load->view('page_not_found.php');
						$this->load->view('footer');
					}
			  
			  
	    }
		else
		{
			    $title = array(
				'title'=>''); 
				$this->session->set_userdata($title);
				$this->load->view('header');
				$this->load->view('page_not_found.php');
				$this->load->view('footer');
		}
	}
	
	
	
	
	public function loopsin()
	{
			if(isset($_GET['id']))
		{
					if($this->session->userdata('logged_in',true))
				   {
						$thisuserid=$this->session->userdata('user_id');
						if($thisuserid==$_GET['id'])
						{
						$data['user_portfolio']=$this->user_model->get_this_user($_GET['id']);
									  $user_links = array(
								'usactive' =>'loops',
								'title'=>$data['user_portfolio'][0]->name);                     
								$this->session->set_userdata($user_links);
								
								$this->user_model->update_inloops($_GET['id']);
								$data['inloops']=$this->user_model->get_inloop_request($_GET['id']);
								
								$this->load->view('header',$data);
								$this->load->view('user_left',$data);
								$this->load->view('loopsin',$data);
								$this->load->view('user_bottom',$data);
								$this->load->view('footer');    
						      
									
						}
						
						
						
						else
						{
							$title = array(
							'title'=>''); 
							$this->session->set_userdata($title);
							$this->load->view('header');
							$this->load->view('page_not_found.php');
							$this->load->view('footer');
						}
				   }
				else
				  {
						redirect('login');
				  }		
			  
			  
	    }
		else
		{
			redirect('login');
		}
	}
	
	
	
	public function get_loopin_data()
	{
		if(isset($_POST))
		{
		
		$ofset=$_POST['timelinecount'];
		$limit=$_POST['limit'];
		$user=$_POST['user'];
	
			$data['inloops']=$this->user_model->get_user_loopsin_ajax($user,$ofset,$limit);
	  
		$data['user_portfolio']=$this->user_model->get_this_user($user);
		$this->load->view('content_loopin_load',$data);
		}
	}
	public function get_loopout_data()
	{
		if(isset($_POST))
		{
		
		$ofset=$_POST['timelinecount'];
		$limit=$_POST['limit'];
		$user=$_POST['user'];
	
			$data['outloops']=$this->user_model->get_user_loopsout_ajax($user,$ofset,$limit);
	  
		$data['user_portfolio']=$this->user_model->get_this_user($user);
		$this->load->view('content_loopout_load',$data);
		}
	}
	
	public function loopsout()
	{
		
			if(isset($_GET['id']))
		{
					if($this->session->userdata('logged_in',true))
				   {
						$thisuserid=$this->session->userdata('user_id');
						if($thisuserid==$_GET['id'])
						{
									$data['user_portfolio']=$this->user_model->get_this_user($_GET['id']);
									  $user_links = array(
								'usactive' =>'loops',
								'title'=>$data['user_portfolio'][0]->name);                     
								$this->session->set_userdata($user_links);
								
								
								$data['outloops']=$this->user_model->get_outloop_request($_GET['id']);
							
								
							
								$this->load->view('header',$data);
								$this->load->view('user_left',$data);
								$this->load->view('loopsout',$data);
								$this->load->view('user_bottom',$data);
								$this->load->view('footer');    
						      
									
						}
						
						
						
						else
						{
							    $title = array(
								'title'=>''); 
								$this->session->set_userdata($title);
								$this->load->view('header');
								$this->load->view('page_not_found.php');
								$this->load->view('footer');
						}
				   }
				else
				  {
						redirect('login');
				  }		
			  
			  
	    }
		else
		{
				redirect('login');
		}
	}
	
	
	public function get_user_from_view($uid)
	{
		$user=$this->user_model->get_this_user($uid);
		return $user;
	}
	
	public  function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}
	public function post_portfolio()
	{
		if(isset($_GET['id']))
		{
					if($this->session->userdata('logged_in',true))
				   {
						$thisuserid=$this->session->userdata('user_id');
						if($thisuserid==$_GET['id'])
						{
						
											    $this->form_validation->set_rules('post_title', 'Post title', 'required');

												
												
											if ($this->form_validation->run() == FALSE)
											{
																	$data['user_portfolio']=$this->user_model->get_this_user_all($_GET['id']);
																	$data['post']=$this->user_model->get_this_user_posts($_GET['id']);
																	$data['portfolio_type']=$this->user_model->get_all_portfolio_types();
																	
																	if($this->session->userdata('logged_in',true))
																	{
																		$current_user=$this->session->userdata('user_id');
																		$data['loopstatus']=$this->user_model->get_this_loop_status($current_user,$_GET['id']);
																		$data['loopotherstatus']=$this->user_model->get_this_loop_other_status($current_user,$_GET['id']);
																	}
																	$this->load->view('header');
																	$this->load->view('user_left',$data);
																	$this->load->view('user',$data);
																	$this->load->view('user_bottom',$data);
																	$this->load->view('footer');
											}
											else
											{
												$result=$this->input->post(NUll,true);
												if (!empty($_FILES['post_img']['name']))
													{
														$config['upload_path'] = './uploads/user_post/';
												$config['allowed_types'] = 'gif|jpg|png';
												$config['max_size']	= '30000';
												$config['max_width']  = '1024';
												$config['max_height']  = '768';

											   $this->load->library('upload', $config);

												if ( ! $this->upload->do_upload('post_img'))
												{
												
													$data['error'] = array('error' => $this->upload->display_errors());
													$data['user_portfolio']=$this->user_model->get_this_user_all($_GET['id']);
																	$data['post']=$this->user_model->get_this_user_posts($_GET['id']);
																	$data['portfolio_type']=$this->user_model->get_all_portfolio_types();
																	
																	if($this->session->userdata('logged_in',true))
																	{
																		$current_user=$this->session->userdata('user_id');
																		$data['loopstatus']=$this->user_model->get_this_loop_status($current_user,$_GET['id']);
																		$data['loopotherstatus']=$this->user_model->get_this_loop_other_status($current_user,$_GET['id']);
																	}
																	$this->load->view('header');
																	$this->load->view('user_left',$data);
																	$this->load->view('user',$data);
																	$this->load->view('user_bottom',$data);
																	$this->load->view('footer');
												}
												else
												{
													$imgdata = $this->upload->data();
													$fname=$imgdata['file_name'];
													$db_response=$this->user_model->add_user_posts($result,$fname,$_GET['id']);
													if($db_response)
													{
															$this->session->set_flashdata('serv_suc', 'Your post has been added');
															redirect('portfolio/user?id='.$_GET['id']);
													}
													else
													{
														$this->session->set_flashdata('serv_err', 'Oops! Something wrong happened! Please retry!');
														redirect('portfolio/user?id='.$_GET['id']);
													}
												}
														
													}
													else
													{
														
													$db_response=$this->user_model->add_user_posts_imageless($result,$_GET['id']);
													if($db_response)
													{
															$this->session->set_flashdata('serv_suc', 'Your post has been added');
															redirect('portfolio/user?id='.$_GET['id']);
													}
													else
													{
														$this->session->set_flashdata('serv_err', 'Oops! Something wrong happened! Please retry!');
														redirect('portfolio/user?id='.$_GET['id']);
													}
												
													}
												
											} 
							
									
						}
						else
						{
							redirect('login');
						}
				   }
				else
				  {
						redirect('login');
				  }		
			  
			  
	    }
		else
		{
			echo "404";
		}
	}
	
	
	
	
	
	
	/*public function update()
	{
	  if(isset($_POST))
	  {
		if($this->session->userdata('logged_in',true))
			   {
			        $user=$this->session->userdata('user_id');
				    $result=$this->input->post(null,true);
					$dbresponse=$this->user_model->update_userdata($result,$user);
					if($dbresponse)
					{
						$this->session->set_flashdata('edit_success', 'Your profile has been updated successfully');
		   				redirect('portfolio/edit');
					}
					else
					{
						$this->session->set_flashdata('edit_error', 'Oops! Something wrong might have happened! Please try again!');
		   				redirect('portfolio/edit');
					}
			   }
		  else
			  {
					redirect('login');
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
	*/
}
