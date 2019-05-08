<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {
     
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
			'active' =>'',
			'title'=>'Moviescoopy | Search');                     
			$this->session->set_userdata($header_links);
         
       }
	
	public function index()
	{
		if(isset($_GET['keyword']))
		{
		    $data['keyword']=$_GET['keyword'];
			$data['srchh']=$this->user_model->get_search_data_all($_GET['keyword']);
			$this->load->view('header');
			$this->load->view('search',$data);
			$this->load->view('footer');
		}
		else
		{
		}
		
	}

}
