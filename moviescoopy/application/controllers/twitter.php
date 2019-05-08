<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Twitter extends CI_Controller {
     
		  public function __construct()
		   {
			   parent::__construct();
				
				$this->load->library('form_validation');
				$this->load->library('image_lib');
				$this->load->helper('url');
				$this->load->helper('form');
				$this->load->helper('date');
			
				date_default_timezone_set('UTC');
			
		   }
	
		public function index()
		{
		
		
			$this->load->view('twitter');
			
		}
	    
		public function buildBaseString($baseURI, $method, $params) {
			$r = array();
			ksort($params);
			foreach($params as $key=>$value){
				$r[] = "$key=" . rawurlencode($value);
			}
			return $method."&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $r));
		}
 
		public function buildAuthorizationHeader($oauth) {
			$r = 'Authorization: OAuth ';
			$values = array();
			foreach($oauth as $key=>$value)
				$values[] = "$key=\"" . rawurlencode($value) . "\"";
			$r .= implode(', ', $values);
			return $r;
		}
		
		public function twittersapi()
						{
							$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
				 
				$oauth_access_token = "2598191887-bbyx0zbL1gXAVvqAkDohU1CMtGazAk2poo9PuJe";
				$oauth_access_token_secret = "mE2WQG7xM4KFa0szzG43rzhFKi2OVCYzaMO01SEBfKzQr";
				$consumer_key = "rsEtq1A6QiGc1qoaT1vI2Nu1T";
				$consumer_secret = "BjT0fN4ccxa6l0u8M6UI22psmH2XezNIL0E71VLJsy0YBPErfV";
				 
				$oauth = array( 'screen_name' => 'CLSLondon',
								'count' => 5,
								'oauth_consumer_key' => $consumer_key,
								'oauth_nonce' => time(),
								'oauth_signature_method' => 'HMAC-SHA1',
								'oauth_token' => $oauth_access_token,
								'oauth_timestamp' => time(),
								'oauth_version' => '1.0');
				 
				$base_info = $this->buildBaseString($url, 'GET', $oauth);
				$composite_key = rawurlencode($consumer_secret) . '&' . rawurlencode($oauth_access_token_secret);
				$oauth_signature = base64_encode(hash_hmac('sha1', $base_info, $composite_key, true));
				$oauth['oauth_signature'] = $oauth_signature;
				 
				// Make Requests
				$header = array($this->buildAuthorizationHeader($oauth), 'Expect:');
				$options = array( CURLOPT_HTTPHEADER => $header,
								  //CURLOPT_POSTFIELDS => $postfields,
								  CURLOPT_HEADER => false,
								  CURLOPT_URL => $url.'?screen_name=CLSLondon&count=5',
								  CURLOPT_RETURNTRANSFER => true,
								  CURLOPT_SSL_VERIFYPEER => false);
				 
				$feed = curl_init();
				curl_setopt_array($feed, $options);
				$json = curl_exec($feed);
				curl_close($feed);
				 
				$twitter_data = json_decode($json);
				return $twitter_data;
		}
	
}
