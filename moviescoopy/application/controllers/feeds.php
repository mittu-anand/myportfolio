<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Feeds extends CI_Controller {
     
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
			'active' =>'blog',
			'sel_feed'=>'moviefeed',
			'title'=>'Moviescoopy | Official Movie Feed'
			);                     
			$this->session->set_userdata($header_links);
         
       }
	
	public function index()
	{
	
		$hml = array(
			'hm_l_active'=>'lmfeeds',
			'ogtitle'=>'Moviescoopy Movie Feed',
			'ogtitleimg'=>'http://www.moviescoopy.com/images/moviescoopy_movie_feed.jpg',
			'ogdesc'=>'Get updated about latest movies from the very beigining of their birth. Go through the making, location, casts, photos, Videos and many more from
			the official online page of Movies.');                     
			$this->session->set_userdata($hml);
	    $data['feeds']=$this->user_model->get_all_movie_feeds();
		$data['lmovies']=$this->user_model->get_latest_movies();
		$data['industries']=$this->user_model->get_all_industry();
		$data['moviestatus']=$this->user_model->get_all_movie_status();
		$this->load->view('header');
		$this->load->view('top_content');
		$this->load->view('content_feeds',$data);
		$this->load->view('footer');
	}
	
	public function srch()
	{
		if(isset($_POST))
		{
			$srch=$_POST['srch'];
			$data['srchh']=$this->user_model->get_search_data($srch);
			$data['keyword']=$srch;
			return $this->load->view('searh_mov',$data);
		}
		else
		{
		}
	}
	public function get_all_search_ajax()
	{
		if(isset($_POST))
		{
			$srch=$_POST['keyword'];
			$limit=$_POST['limit'];
			$ofset=$_POST['timelinecount'];
			$data['srchh']=$this->user_model->get_all_search_ajax($srch,$limit,$ofset);
			
           $data['keyword']=$srch;
		  
			$this->load->view('searh_load',$data);
			
		}
		else
		{
		}
	}
	public function filter()
	{
	
		 if(isset($_GET['status']) && isset($_GET['language']))
	  {
			$data['feeds']=$this->user_model->get_all_movie_feeds_all($_GET['status'],$_GET['language']);
			$data['lmovies']=$this->user_model->get_latest_movies_all($_GET['status'],$_GET['language']);
			$title = array(
				'title'=>'Moviescoopy Official | '.$_GET['language'].' Movie Feeds'); 
				$this->session->set_userdata($title);
	  }
	  else if(isset($_GET['status']) && !isset($_GET['language']))
	  {
			$title = array(
				'title'=>'Moviescoopy | Official Movie Feeds'); 
				$this->session->set_userdata($title);
			$data['feeds']=$this->user_model->get_all_movie_feeds_status($_GET['status']);
			$data['lmovies']=$this->user_model->get_latest_movies_status($_GET['status']);
	  }
	  else if(!isset($_GET['status']) && isset($_GET['language']))
	  {
		         $title = array(
				'title'=>'Moviescoopy Official | '.$_GET['language'].' Movie Feeds'); 
				$this->session->set_userdata($title);
			$data['feeds']=$this->user_model->get_all_movie_feeds_language($_GET['language']);
			$data['lmovies']=$this->user_model->get_latest_movies_language($_GET['language']);
	  }
	  else
	  {
			$title = array(
				'title'=>'Moviescoopy | Official Movie Feeds'); 
				$this->session->set_userdata($title);
			$data['feeds']=$this->user_model->get_all_movie_feeds();
			$data['lmovies']=$this->user_model->get_latest_movies();
	  }
	
		$data['industries']=$this->user_model->get_all_industry();
		$data['moviestatus']=$this->user_model->get_all_movie_status();
		
		$this->load->view('header');
		$this->load->view('top_content');
		$this->load->view('content_feeds',$data);
		$this->load->view('footer');
	}
	
	public function get_feed_data()
	{
		$status=$_POST['urlstatus'];
		$language=$_POST['urllanguage'];
		$ofset=$_POST['timelinecount'];
		$limit=$_POST['limit'];
		 if($status!='' && $language!='')
	  {
			$data['feeds']=$this->user_model->get_all_movie_feeds_all_post($status,$language,$ofset,$limit);
	  }
	  else if($status!='' && $language=='')
	  {
			$data['feeds']=$this->user_model->get_all_movie_feeds_status_post($status,$ofset,$limit);
	  }
	  else if($status=='' && $language!='')
	  {
			$data['feeds']=$this->user_model->get_all_movie_feeds_language_post($language,$ofset,$limit);
	  }
	  else if($status=='' && $language=='')
	  {
			$data['feeds']=$this->user_model->get_all_movie_feeds_no_parameters($ofset,$limit);
	  }
	
		$data['industries']=$this->user_model->get_all_industry();
		$data['moviestatus']=$this->user_model->get_all_movie_status();
		$data['flag']=$_POST['flagdata'];
		$this->load->view('content_feeds_load',$data);
		
	}
	
	
	public function get_portfolio_feed_data()
	{
		if(isset($_POST))
		{
		$language=$_POST['urllanguage'];
		$ofset=$_POST['timelinecount'];
		$limit=$_POST['limit'];
		 if($language!='')
	  {
			$data['userfeeds']=$this->user_model->get_all_userfeeds_language_ajax($language,$ofset,$limit);
	  }
	  else if($language=='')
	  {
			$data['userfeeds']=$this->user_model->get_all_userfeeds_ajax($ofset,$limit);
	  }
	
		$data['industries']=$this->user_model->get_all_industry();
		$data['flag']=$_POST['flagdata'];
		$this->load->view('content_portfolio_feed_load',$data);
		}
		else
		{
		}
	}
	
	public function get_celeb_circle_ajax()
	{
		if(isset($_POST))
		{
		$urlfilter=$_POST['urlfilter'];
		$ofset=$_POST['timelinecount'];
		$limit=$_POST['limit'];
		 if($urlfilter!='')
	  {
			$data['allcelebs']=$this->user_model->get_all_celeb_filter_ajax($urlfilter,$ofset,$limit);
	  }
	  else if($urlfilter=='')
	  {
			$data['allcelebs']=$this->user_model->get_all_celeb_ajax($ofset,$limit);
	  }
	
		$data['alphabets']=$this->user_model->get_alphabets();
		$this->load->view('content_celeb_circle_load',$data);
		}
		else
		{
		}
	}
	
	
	public function get_blog_feed_data()
	{
		if(isset($_POST))
		{
		$category=$_POST['urlcategory'];
		$ofset=$_POST['timelinecount'];
		$limit=$_POST['limit'];
		 if($category!='')
	  {
			$data['blogs']=$this->user_model->get_all_blogfeeds_category_ajax($category,$ofset,$limit);
	  }
	  else if($category=='')
	  {
			$data['blogs']=$this->user_model->get_all_blogfeeds_ajax($ofset,$limit);
	  }
	
		$data['flag']=$_POST['flagdata'];
		$this->load->view('content_blog_feed_load',$data);
		}
		else
		{
		}
	}
	
	
	
	
	public function get_news_feed_data()
	{
		if(isset($_POST))
		{
			$ofset=$_POST['timelinecount'];
			$limit=$_POST['limit'];
			$data['news']=$this->user_model->get_all_newsfeeds_ajax($ofset,$limit);
			$this->load->view('content_newsall_load',$data);
		}
	}
	
	public function get_classified_data()
	{
		if(isset($_POST))
		{
			$ofset=$_POST['timelinecount'];
			$limit=$_POST['limit'];
			$data['classifieds']=$this->user_model->get_all_classifieds_ajax($ofset,$limit);
			$this->load->view('content_classifieds_load',$data);
		}
	}
	
	
	public function get_this_movie_feed_data()
	{
		if(isset($_POST))
		{
			$ofset=$_POST['timelinecount'];
			$limit=$_POST['limit'];
			$movie=$_POST['movieis'];
			$data['post']=$this->user_model->get_this_movie_feed_ajax($movie,$ofset,$limit);
			$data['flag']=$_POST['flagdata'];
			$this->load->view('content_movie_load',$data);
		}
	}
	
	public function get_this_celebrity_feed_data()
	{
		if(isset($_POST))
		{
			$ofset=$_POST['timelinecount'];
			$limit=$_POST['limit'];
			$celebrityis=$_POST['celebrityis'];
			$data['celebrity_posts']=$this->user_model->get_this_celebrity_feed_ajax($celebrityis,$ofset,$limit);
			$data['thiscelebrity']=$this->user_model->get_this_celeb($celebrityis);
			$data['flag']=$_POST['flagdata'];
			$this->load->view('content_celebrity_load',$data);
		}
	}
	
	public function get_this_user_feed_data()
	{
			if(isset($_POST))
			{
				$ofset=$_POST['timelinecount'];
				$limit=$_POST['limit'];
				$useris=$_POST['useris'];
				$data['post']=$this->user_model->get_this_user_posts_ajax($useris,$ofset,$limit);
				$data['user_portfolio']=$this->user_model->get_this_user_all($useris);
				$data['flag']=$_POST['flagdata'];
				$this->load->view('content_user_load',$data);
			}
	}
	
	public function get_portfolio_data()
	{
		if(isset($_POST))
			{
				$ofset=$_POST['timelinecount'];
				$limit=$_POST['limit'];
				$language=$_POST['urllanguage'];
				$portfolio=$_POST['urlportfolio'];
					 if($portfolio!='' && $language!='')
					  {
							$data['portfolio']=$this->user_model->get_portfolio_all_ajax($portfolio,$language,$ofset,$limit);
					  }
					  else if($portfolio!='' && $language=='')
					  {
							$data['portfolio']=$this->user_model->get_portfolio_portfolio_ajax($portfolio,$ofset,$limit);
					  }
					  else if($portfolio=='' && $language!='')
					  {
							$data['portfolio']=$this->user_model->get_portfolio_language_ajax($language,$ofset,$limit);
					  }
					  else if($portfolio=='' && $language=='')
					  {
							$data['portfolio']=$this->user_model->get_portfolio_ajax($ofset,$limit);
					  }
					 $this->load->view('content_portfolio_load',$data);
			}
	}
	
	
	public function get_this_user_share_data()
	{
		if(isset($_POST))
			{
				$ofset=$_POST['timelinecount'];
				$limit=$_POST['limit'];
				$useris=$_POST['useris'];
				$data['shares']=$this->user_model->get_this_user_shares_ajax($useris,$ofset,$limit);
				$data['user_portfolio']=$this->user_model->get_this_user_all($useris);
				$data['flag']=$_POST['flagdata'];
				$this->load->view('content_shareline_load',$data);
			}
	}
	
		public function get_celebrity_feed_data()
	{
		if(isset($_POST))
		{
		$language=$_POST['urllanguage'];
		$ofset=$_POST['timelinecount'];
		$limit=$_POST['limit'];
		 if($language!='')
	  {
			$data['celebrityposts']=$this->user_model->get_all_celebrity_feed_language_ajax($language,$ofset,$limit);
	  }
	  else if($language=='')
	  {
			$data['celebrityposts']=$this->user_model->get_all_celebrity_feed_ajax($ofset,$limit);
	  }
	
		$data['industries']=$this->user_model->get_all_industry();
		$data['flag']=$_POST['flagdata'];
		$this->load->view('content_celebrity_feed_load',$data);
		}
		else
		{
		}
	}
	
	public function get_total_data_all($status,$language)
	{
		$datacount=$this->user_model->get_total_data_all($status,$language);
		return $datacount;
	}
	public function get_total_data_status($status)
	{
		$datacount=$this->user_model->get_total_data_status($status);
		return $datacount;
	}
	public function get_total_data_language($language)
	{
		$datacount=$this->user_model->get_total_data_language($language);
		return $datacount;
	}
	public function get_total_data_no_parameters()
	{
		$datacount=$this->user_model->get_total_data_no_parameters();
		return $datacount;
	}
	
	public function page()
	{
		if(isset($_GET['id']))
		{
				$data['feedpost']=$this->user_model->get_this_movie_post($_GET['id']);
				if($data['feedpost'])
				{
				$data['movieis']=$this->user_model->get_this_movie($data['feedpost'][0]->mid);
				$title = array(
							'title'=>$data['feedpost'][0]->post_title .' | ' .$data['movieis'][0]->name); 
							$this->session->set_userdata($title);
				$this->load->view('header');
				$this->load->view('feedpage',$data);
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
}
