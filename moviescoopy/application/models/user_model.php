                 <?php

Class User_model extends CI_Model

{

public function create_user($result)
{
		$dateis=now();
		$data= array(
		
				'name'=>$result['name'],
				'email'=>$result['email'],
				'password'=>$this->_prep_password($result['password']),
				'dob'=>$result['dob'],
				'gender'=>$result['gender'],
				'type'=>'N',
				'date_joined'=>$dateis
				
		);
		    $this->db->escape($data);
			$this->db->insert('users',$data);
			return $this->db->insert_id();

}
function _prep_password($password)
{
     return sha1($password.$this->config->item('encryption_key'));
}

public function add_user_posts($result,$fname,$uid)
{
	$data= array(
		
				'uid'=>$uid,
				'post_title'=>$result['post_title'],
				'post_text'=>$result['post_text'],
				'post_image'=>$fname,
				'post_video'=>$result['post_video']
				
		);
		    $this->db->escape($data);
			$this->db->insert('user_posts',$data);
			return $this->db->insert_id();
}

public function add_user_posts_imageless($result,$uid)
{
		$data= array(
		
				'uid'=>$uid,
				'post_title'=>$result['post_title'],
				'post_text'=>$result['post_text'],
				'post_image'=>'',
				'post_video'=>$result['post_video']
				
		);
		    $this->db->escape($data);
			$this->db->insert('user_posts',$data);
			return $this->db->insert_id();
	
}



public function update_user_posts($result,$fname,$uid)
{
	$data= array(
		
				'uid'=>$uid,
				'post_title'=>$result['post_title'],
				'post_text'=>$result['post_text'],
				'post_image'=>$fname,
				'post_video'=>$result['post_video']
				);
				$this->db->escape($data);
				$this->db->where('upid',$result['post_id']);
				$this->db->update('user_posts',$data);
				return $this->db->affected_rows();
}

public function update_user_posts_imageless($result,$uid)
{
	$data= array(
		
				'uid'=>$uid,
				'post_title'=>$result['post_title'],
				'post_text'=>$result['post_text'],
				'post_video'=>$result['post_video']
				
		);
		        $this->db->escape($data);
				$this->db->where('upid',$result['post_id']);
				$this->db->update('user_posts',$data);
				return $this->db->affected_rows();
}


public function add_movie_posts($result,$fname,$mid)
{
	$data= array(
		
				'mid'=>$mid,
				'post_title'=>$result['post_title'],
				'post_text'=>$result['post_text'],
				'post_image'=>$fname,
				'post_video'=>$result['post_video']
				
		);
		    $this->db->escape($data);
			$this->db->insert('movie_post',$data);
			return $this->db->insert_id();
}

public function add_movie_posts_imageless($result,$mid)
{
		$data= array(
		
				'mid'=>$mid,
				'post_title'=>$result['post_title'],
				'post_text'=>$result['post_text'],
				'post_image'=>'',
				'post_video'=>$result['post_video']
				
		);
		    $this->db->escape($data);
			$this->db->insert('movie_post',$data);
			return $this->db->insert_id();
	
}
public function update_to_portfolio($result,$uid)
{
	$data= array(
		
				'type'=>'P',
				'desig'=>$result['portfolio_type']
				
		);
    	$this->db->where("uid",$uid);
		$this->db->update("users",$data);
		return $this->db->affected_rows();		
}

public function add_points($upoints,$sharedby)
{
	$data= array(
		
				'points'=>$upoints,
		);
    	$this->db->where("uid",$sharedby);
		$this->db->update("users",$data);
		return $this->db->affected_rows();	
}

public function get_this_share_count($shared_for,$sid)
{
			$this->db->select();
			$this->db->from('shares');
			$this->db->where('shares',$shared_for);
			$this->db->where('shreditemid',$sid);
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}

public function get_latest_movies()
{
			$this->db->select();
			$this->db->from('movies');
			$this->db->where('status','1');
			$this->db->order_by('mid','random');
			$this->db->limit(20,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_random_celebs()
{
	$this->db->select();
			$this->db->from('celebrity');
			$this->db->where('status','1');
			$this->db->order_by('cid','random');
			$this->db->limit(20,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_random_celebs_language($lang)
{
			$this->db->select();
			$this->db->from('celebrity');
			$this->db->where('industry',$lang);
			$this->db->where('status','1');
			$this->db->order_by('cid','random');
			$this->db->limit(20,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}
public function get_reviews()
{			
			$this->db->select();
			$this->db->from('movie_reviews');	
			$this->db->join('movies', 'movie_reviews.mid = movies.mid', 'left join');
			$this->db->where('movie_reviews.status','1');
			$this->db->order_by('mrevid','desc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}	
					}
public function get_latest_movies_all($status,$language)
{
	$this->db->select();
			$this->db->from('movies');
			$this->db->where('status','1');
			$this->db->where('moviestatus',$status);
			$this->db->where('language',$language);
			$this->db->order_by('mid','random');
			$this->db->limit(20,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}
public function get_latest_movies_status($status)
{
	$this->db->select();
			$this->db->from('movies');
			$this->db->where('status','1');
			$this->db->where('moviestatus',$status);
			$this->db->order_by('mid','random');
			$this->db->limit(20,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}
public function get_latest_movies_language($language)
{
	$this->db->select();
			$this->db->from('movies');
			$this->db->where('status','1');
			$this->db->where('language',$language);
			$this->db->order_by('mid','random');
			$this->db->limit(20,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}
public function ago($ts)
{
    //type cast, current time, difference in timestamps
	$tst=date(strtotime($ts));
    $time      = $tst;
   $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
   $lengths = array("60","60","24","7","4.35","12","10");

   $now = time();

       $difference     = $now - $time;
       $tense         = "ago";

   for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
       $difference /= $lengths[$j];
   }

   $difference = round($difference);

   if($difference != 1) {
       $periods[$j].= "s";
   }

   return "$difference $periods[$j] 'ago' ";
}



public function get_this_user($id)
{
			$this->db->select();
			$this->db->from('users');
			$this->db->where('uid',$id);
			$this->db->where('type','P');
			$this->db->where('status',1);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}


public function get_this_user_all($id)
{
	$this->db->select();
			$this->db->from('users');
			$this->db->where('uid',$id);
			$this->db->where('status',1);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_best_portfolio()
{
		    $this->db->select();
			$this->db->from('users');
			$this->db->where('status','1');
			$this->db->limit(20,0);
			$this->db->order_by('points','desc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_best_portfolio_language($lang)
{
		    $this->db->select();
			$this->db->from('users');
			$this->db->where('industry',$lang);
			$this->db->where('status','1');
			$this->db->limit(20,0);
			$this->db->order_by('points','desc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}
public function get_this_loop_status($current_user,$uid)
{

			$this->db->select();
			$this->db->from('loops');
			$this->db->where('userid',$current_user);
			$this->db->where('friendid',$uid);
			$this->db->where('status',1);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_this_loop_other_status($current_user,$uid)
{
	
			$this->db->select();
			$this->db->from('loops');
			$this->db->where('userid',$uid);
			$this->db->where('friendid',$current_user);
			$this->db->where('status',1);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function accept_loop_request($result)
{
	$data=array(
	'accepted'=>'2',
	'date_accepted'=>''
	);
	$this->db->where('loopid',$result['loop_id']);
	$this->db->update('loops',$data);
	
}

public function get_login_details($result)
{
	$username=$result['uname'];
	$password=$this->_prep_password($result['upassword']);
	$this->db->select();
			$this->db->from('users');
			$this->db->where('email',$username);
			$this->db->where('password',$password);
			$this->db->where('status',1);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}
public function email_check($email)
{
	
			$this->db->select('uid');
			$this->db->from('users');
			$this->db->where('email',$email);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}

public function isEmailExist($email) {
    
	$this->db->select('uid');
	$this->db->from('users');
    $this->db->where('email', $email);
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
        return true;
    } else {
        return false;
    }
}
public function isnewsEmailExist($email) 
{
    
	$this->db->select();
	$this->db->from('newsletter_emails');
    $this->db->where('email', $email);
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
        return true;
    } else {
        return false;
    }
}

public function update_this_newsletter($email)
{
	$data= array(
		
				'email'=>$email
				
				
		);
	
	$this->db->insert('newsletter_emails',$data);
	return $this->db->insert_id();
}
public function get_movie_login_details($result)
{
	$username=$result['uname'];
	$password=$result['upassword'];
	$this->db->select();
			$this->db->from('movies');
			$this->db->where('email',$username);
			$this->db->where('password',$password);
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}





public function update_userdata($result,$user)
{

	$data= array(
		
				'name'=>$result['name'],
				'email'=>$result['email'],
				'password'=>$result['password'],
				'type'=>'N',
				'date_joined'=>$dateis
				
		);

}
public function get_users()
{
	$this->db->select();
			$this->db->from('users');
			
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_running_movies()
{
	$this->db->select();
			$this->db->from('movies');
			$this->db->where('moviestatus','nowrunning');
			$this->db->where('status','1');
			$this->db->order_by('mid','desc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}
public function get_this_movie_review($movid)
{
	
					
				$this->db->select();
			$this->db->from('movie_reviews');	
			$this->db->join('movies', 'movie_reviews.mid = movies.mid', 'left join');
			$this->db->where('moviestatus','nowrunning');
			$this->db->where('movie_reviews.mid',$movid);
			$this->db->where('movie_reviews.status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}	
					
}

public function get_this_review($rid)
{
			$this->db->select();
			$this->db->from('movie_reviews');
			$this->db->where('mrevid',$rid);
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}
public function get_this_talent($tid)
{
			$this->db->select();
			$this->db->from('talents');
			$this->db->where('tid',$tid);
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_latest_news()
{
	$this->db->select();
			$this->db->from('events');
			$this->db->where('status','A');
			$this->db->order_by('eid','desc');
			$this->db->limit(10,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_latest_blogs()
{
	$this->db->select();
			$this->db->from('services');
			$this->db->where('status','A');
			$this->db->order_by('id','desc');
			$this->db->limit(10,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}
public function get_this_news($nid)
{
	$this->db->select();
			$this->db->from('events');
			$this->db->where('eid',$nid);
			$this->db->where('status','A');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_this_blog($bid)
{
	$this->db->select();
			$this->db->from('services');
			$this->db->where('id',$bid);
			$this->db->where('status','A');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}


public function get_all_blogs_category($category)
{
			$this->db->select();
			$this->db->from('services');
			$this->db->where('stitle',$category);
			$this->db->where('status','A');
			$this->db->order_by('id','desc');
			$this->db->limit(5,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}


public function get_this_crew($id)
{
		$this->db->select();
			$this->db->from('movie_crew');
			$this->db->where('mid',$id);
			$this->db->order_by('mcrewid','desc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}
public function get_this_cast($id)
{
		$this->db->select();
			$this->db->from('movie_cast');
			
			$this->db->where('mid',$id);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}


public function get_all_actors()
{
	$this->db->select();
			$this->db->from('celebrity');			
			$this->db->where('type','Actor');
			$this->db->where('status','1');
			$this->db->order_by('cid','desc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}


public function get_all_celebs()
{
	$this->db->select();
			$this->db->from('celebrity');			
			$this->db->where('status','1');
			$this->db->order_by('cid','desc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_all_celebs_alternate()
{
	$this->db->select();
			$this->db->from('celebrity');			
			$this->db->where('status','1');
			$this->db->order_by('cid','desc');
			$this->db->limit(12,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}
public function get_all_celeb_filter_ajax($urlfilter,$ofset,$limit)
{
	$this->db->select();
			$this->db->from('celebrity');			
			$this->db->where('status','1');
			$this->db->like('name',$urlfilter,'after');
			$this->db->order_by('cid','desc');
			$this->db->limit($limit,$ofset);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}
public function get_all_celeb_ajax($ofset,$limit)
{
	$this->db->select();
			$this->db->from('celebrity');			
			$this->db->where('status','1');
			
			$this->db->order_by('cid','desc');
			$this->db->limit($limit,$ofset);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}
public function get_celebrity_circle_count()
{

		$this->db->select();
			$this->db->from('celebrity');			
			$this->db->where('status','1');
			
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}

}

public function get_celebrity_circle_count_filter($letter)
{
	$this->db->select();
			$this->db->from('celebrity');			
			$this->db->where('status','1');
			$this->db->like('name',$letter,'after');
			
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}


public function get_all_celebs_letter($letter)
{
	$this->db->select();
			$this->db->from('celebrity');			
			$this->db->where('status','1');
			$this->db->like('name',$letter,'after');
			$this->db->order_by('cid','desc');
			$this->db->limit(12,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}



public function get_this_celebrity($cid)
{
	$this->db->select('cid,name');
			$this->db->from('celebrity');	
			$this->db->where('cid',$cid);			
			$this->db->where('status','1');
			$this->db->order_by('cid','desc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_this_celeb($cid)
{
	$this->db->select();
			$this->db->from('celebrity');	
			$this->db->where('cid',$cid);			
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_this_celebrity_posts($cid)
{
			$this->db->select();
			$this->db->from('celebrity_posts');	
			$this->db->where('cid',$cid);			
			$this->db->where('status','1');
			$this->db->order_by('cpid','desc');
			$this->db->limit(5,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}
public function get_this_user_celebrityposts($cpid)
{
			$this->db->select();
			$this->db->from('celebrity_posts');	
			$this->db->join('celebrity', 'celebrity.cid = celebrity_posts.cid', 'left join');
			$this->db->where('celebrity_posts.status','1');	
			$this->db->where('cpid',$cpid);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}
public function get_this_celebrity_feed_ajax($cid,$ofset,$limit)
{
			$this->db->select();
			$this->db->from('celebrity_posts');	
			$this->db->where('cid',$cid);			
			$this->db->where('status','1');
			$this->db->order_by('cpid','desc');
			$this->db->limit($limit,$ofset);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_one_celebrity_feed_count($cid)
{
	$this->db->select();
			$this->db->from('celebrity_posts');	
			$this->db->where('cid',$cid);			
			$this->db->where('status','1');
			$this->db->order_by('cpid','desc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}


public function get_one_celeb_post($cpid)
{
			$this->db->select();
			$this->db->from('celebrity_posts');	
			$this->db->where('cpid',$cpid);			
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_this_user_points($usr)
{
			$this->db->select('points');
			$this->db->from('users');	
			$this->db->where('uid',$usr);			
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}
public function check_applied($usr,$clsid)
{
			$this->db->select();
			$this->db->from('classified_applied');	
			$this->db->where('appliedby',$usr);	
			$this->db->where('classifiedid',$clsid);	
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}

public function get_alphabets()
{
	$this->db->select();
			$this->db->from('alphabets');	
			$this->db->order_by('alph_id','asc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}


public function get_all_talents()
{
	$this->db->select();
			$this->db->from('talents');				
			$this->db->where('status','1');
			$this->db->order_by('tid','desc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}


public function get_this_celebrity_all($cid)
{
	$this->db->select();
			$this->db->from('celebrity');	
			$this->db->where('cid',$cid);			
			$this->db->where('status','1');
			$this->db->order_by('cid','desc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_this_movie_photos($mid)
{
	$this->db->select();
			$this->db->from('movie_images');	
			$this->db->where('mid',$mid);			
			$this->db->where('status','1');
			$this->db->order_by('m_img_id','desc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function check_follow($uid,$cid)
{
	$this->db->select();
			$this->db->from('celebrity_followers');	
			$this->db->where('followed_celebrity',$cid);	
			$this->db->where('followedby',$uid);			
			$this->db->where('status','1');	
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}

public function follow_celebrity($uid,$cid)
{
	$data=array(
	'followed_celebrity'=>$cid,
	'followedby'=>$uid
	);
	$this->db->insert('celebrity_followers',$data);
	return $this->db->insert_id();
}

public function apply_classified($appliedby,$classifiedid)
{
	$data=array(
	'appliedby'=>$appliedby,
	'classifiedid'=>$classifiedid
	);
	$this->db->insert('classified_applied',$data);
	return $this->db->insert_id();
}


public function users_following($cid)
{
	$this->db->select();
			$this->db->from('celebrity_followers');	
			$this->db->where('followed_celebrity',$cid);
			$this->db->where('status','1');	
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}


public function get_this_user_shares($uid)
{
	$sql="SELECT U.name, U.email, U.type, D.shareid, D.shreditemid, D.shares, D.sharedby, D.sharedtime FROM users U, shares D,  loops F WHERE D.sharedby = U.uid AND CASE WHEN F.userid ='$uid' THEN F.friendid = D.sharedby WHEN F.friendid='$uid' THEN F.userid= D.sharedby END AND F.accepted = '2' ORDER BY D.shareid DESC LIMIT 5 OFFSET 0";
	
	$query=$this->db->query($sql);
	if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_this_user_shares_ajax($uid,$ofset,$limit)
{
	$sql="SELECT U.name, U.email, U.type, D.shareid, D.shreditemid, D.shares, D.sharedby, D.sharedtime FROM users U, shares D,  loops F WHERE D.sharedby = U.uid AND CASE WHEN F.userid ='$uid' THEN F.friendid = D.sharedby WHEN F.friendid='$uid' THEN F.userid= D.sharedby END AND F.accepted = '2' ORDER BY D.shareid DESC LIMIT $limit OFFSET $ofset";
	
	$query=$this->db->query($sql);
	if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}


public function get_sharefeed_count($uid)
{
	$sql="SELECT U.name, U.email, U.type, D.shareid, D.shreditemid, D.shares, D.sharedby, D.sharedtime FROM users U, shares D,  loops F WHERE D.sharedby = U.uid AND CASE WHEN F.userid ='$uid' THEN F.friendid = D.sharedby WHEN F.friendid='$uid' THEN F.userid= D.sharedby END AND F.accepted = '2' ORDER BY D.shareid DESC";
	
	$query=$this->db->query($sql);
	if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}


public function get_user_loops_keyword($userid,$keyword)
{
	$sql="SELECT F.*  FROM users U,loops F WHERE CASE WHEN F.userid ='$userid' THEN F.friendid = U.uid WHEN F.friendid='$userid' THEN F.userid= U.uid END AND F.accepted = '2' AND U.name like '$keyword%' ORDER BY F.loopid DESC LIMIT 8 OFFSET 0";
	$query=$this->db->query($sql);
	if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}	
}
public function get_user_loops_keyword_count($userid,$keyword)
{
	$sql="SELECT F.*  FROM users U,loops F WHERE CASE WHEN F.userid ='$userid' THEN F.friendid = U.uid WHEN F.friendid='$userid' THEN F.userid= U.uid END AND F.accepted = '2' AND U.name like '$keyword%' ORDER BY F.loopid DESC";
	$query=$this->db->query($sql);
	if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}
public function get_username($uid)
{
			$this->db->select('name,uid,profile_img');
			$this->db->from('users');	
			$this->db->where('uid',$uid);			
			$this->db->where('status','1');
			$query = $this->db->get();

					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_moviename($mid)
{
	$this->db->select('name,mid,image');
			$this->db->from('movies');	
			$this->db->where('mid',$mid);			
			$this->db->where('status','1');
			$query = $this->db->get();

					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_this_movie_gallery($id)
{
	$this->db->select();
			$this->db->from('movie_images');	
			$this->db->where('mid',$id);			
			$this->db->where('status','1');
			$query = $this->db->get();

					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function add_movie_cast($cast_data,$mid)
{
	$data=array(
	 'mid'=>$mid,
	 'cid'=>$cast_data[0]->cid,
	 'cast'=>$cast_data[0]->name
	
	);
	
	$this->db->insert('movie_cast',$data);
	return $this->db->insert_id();
}

public function add_movie_crew($crew_data,$mid)
{
	$data=array(
	 'mid'=>$mid,
	 'cid'=>$crew_data[0]->cid,
	 'crew'=>$crew_data[0]->name
	
	);
	
	$this->db->insert('movie_crew',$data);
	return $this->db->insert_id();
}


public function send_friend_request($result)
{
	$data=array(
	'userid'=>$result['current_user'],
	'friendid'=>$result['friend_user'],
	'accepted'=>'1',
	'date_accepted'=>'',
	'date_req_removed'=>''
	);
	$this->db->insert('loops',$data);
	return $this->db->insert_id();
}

public function cancel_loop_request($result)
{
	$this->db->where('loopid', $result['loop_id']);
    $this->db->delete('loops');
	return true;
}


public function get_this_user_likes($loguser,$oppuser)
{
			$this->db->select();
			$this->db->from('userlikes');				
			$this->db->where('likedby',$loguser);
			$this->db->where('liked',$oppuser);
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}

public function get_this_user_loves($loguser,$oppuser)
{
			$this->db->select();
			$this->db->from('userloves');				
			$this->db->where('lovedby',$loguser);
			$this->db->where('loved',$oppuser);
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}

public function get_this_user_total_likes($user)
{
	$this->db->select();
			$this->db->from('userlikes');				
			$this->db->where('liked',$user);
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}

public function get_this_user_total_loves($user)
{
	$this->db->select();
			$this->db->from('userloves');				
			$this->db->where('loved',$user);
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}

public function get_movies_for_admin()
{
			$this->db->select();
			$this->db->from('movies');
			$this->db->where('status','1');
			$this->db->order_by('mid','desc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}

public function get_this_movie_likes($loguser,$mov)
{
			$this->db->select();
			$this->db->from('movie_likes');				
			$this->db->where('mlikedby',$loguser);
			$this->db->where('mliked',$mov);
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}

public function get_this_movie_loves($loguser,$mov)
{
			$this->db->select();
			$this->db->from('movie_loves');				
			$this->db->where('mlovedby',$loguser);
			$this->db->where('mloved',$mov);
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}

public function get_this_movie_total_likes($mov)
{
	$this->db->select();
			$this->db->from('movie_likes');				
			$this->db->where('mliked',$mov);
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}

public function get_this_movie_total_loves($mov)
{
	$this->db->select();
			$this->db->from('movie_loves');				
			$this->db->where('mloved',$mov);
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}



public function get_inloop_request($this_userid)
{

			$this->db->select();
			$this->db->from('loops');				
			$this->db->where('friendid',$this_userid);
			/*$this->db->where('accepted','1');*/
			$this->db->where('status','1');
			$this->db->order_by('loopid','desc');
			$this->db->limit(10,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}

}

public function get_user_loopsin_ajax($user,$ofset,$limit)
{
	$this->db->select();
			$this->db->from('loops');				
			$this->db->where('friendid',$user);
			/*$this->db->where('accepted','1');*/
			$this->db->where('status','1');
			$this->db->order_by('loopid','desc');
			$this->db->limit($limit,$ofset);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_user_loopsout_ajax($user,$ofset,$limit)
{
	
		$this->db->select();
			$this->db->from('loops');				
			$this->db->where('userid',$user);
			/*$this->db->where('accepted','1');*/
			$this->db->where('status','1');
			$this->db->order_by('loopid','desc');
			$this->db->limit($limit,$ofset);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_music_bands()
{
echo "hi";
	
}

public function get_loopsin_count($this_userid)
{
			$this->db->select();
			$this->db->from('loops');				
			$this->db->where('friendid',$this_userid);
			/*$this->db->where('accepted','1');*/
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}

}


public function get_outloop_request($this_userid)
{

		$this->db->select();
			$this->db->from('loops');				
			$this->db->where('userid',$this_userid);
			/*$this->db->where('accepted','1');*/
			$this->db->where('status','1');
			$this->db->order_by('loopid','desc');
			$this->db->limit(10,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}

}


public function get_loopsout_count($this_userid)
{
			$this->db->select();
			$this->db->from('loops');				
			$this->db->where('userid',$this_userid);
			/*$this->db->where('accepted','1');*/
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}

}


public function get_count_of_new_in_loops($uid)
{

	        $this->db->select();
			$this->db->from('loops');				
			$this->db->where('friendid',$uid);
			$this->db->where('notification_update','1');
			$this->db->where('status','1');
			
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						  return $query->num_rows();
					}
					else
					{
						return false;
					}
	
}

public function update_inloops($uid)
{
	$data=array(
	'notification_update'=>'0'
	);
	$this->db->where('friendid',$uid);
	$this->db->update('loops',$data);
	return $this->db->affected_rows();
}
public function save_video($video,$mid)
{
	$data=array(
	 'mid'=>$mid,
	 'video'=>$video	
	);
	
	$this->db->insert('movie_videos',$data);
	return $this->db->insert_id();
}

public function add_like($loguser,$enduser)
{
	$data=array(
	 'liked'=>$enduser,
	 'likedby'=>$loguser	
	);
	
	$this->db->insert('userlikes',$data);
	return $this->db->insert_id();
}

public function add_love($loguser,$enduser)
{
	$data=array(
	 'loved'=>$enduser,
	 'lovedby'=>$loguser	
	);
	
	$this->db->insert('userloves',$data);
	return $this->db->insert_id();
}


public function delete_love($loguser,$enduser)
{
	$this->db->where('lovedby',$loguser);
	$this->db->where('loved',$enduser);
    $this->db->delete('userloves');
	return true;
}

public function delete_like($loguser,$enduser)
{
	
	$this->db->where('likedby',$loguser);
	$this->db->where('liked',$enduser);
    $this->db->delete('userlikes');
	return true;
}





public function add_movie_like($loguser,$movie)
{
	$data=array(
	 'mliked'=>$movie,
	 'mlikedby'=>$loguser	
	);
	
	$this->db->insert('movie_likes',$data);
	return $this->db->insert_id();
}

public function add_movie_love($loguser,$movie)
{
	$data=array(
	 'mloved'=>$movie,
	 'mlovedby'=>$loguser	
	);
	
	$this->db->insert('movie_loves',$data);
	return $this->db->insert_id();
}


public function delete_movie_love($loguser,$movie)
{
	$this->db->where('mlovedby',$loguser);
	$this->db->where('mloved',$movie);
    $this->db->delete('movie_loves');
	return true;
}

public function delete_movie_like($loguser,$movie)
{
	
	$this->db->where('mlikedby',$loguser);
	$this->db->where('mliked',$movie);
    $this->db->delete('movie_likes');
	return true;
}



public function get_user_loops($userid)
{
	$sql="SELECT F.*  FROM users U,loops F WHERE CASE WHEN F.userid ='$userid' THEN F.friendid = U.uid WHEN F.friendid='$userid' THEN F.userid= U.uid END AND F.accepted = '2' AND F.status='1' ORDER BY F.loopid DESC LIMIT 8 OFFSET 0";
	$query=$this->db->query($sql);
	if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}	
}

public function get_user_loops_search_ajax($userid,$search,$ofset,$limit)
{
	$sql="SELECT F.*  FROM users U,loops F WHERE CASE WHEN F.userid ='$userid' THEN F.friendid = U.uid WHEN F.friendid='$userid' THEN F.userid= U.uid END AND F.accepted = '2' AND F.status='1' AND U.name like '$search%' ORDER BY F.loopid DESC LIMIT $limit OFFSET $ofset";
	$query=$this->db->query($sql);
	if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}	
}

public function get_user_loops_ajax($userid,$ofset,$limit)
{
	$sql="SELECT F.*  FROM users U,loops F WHERE CASE WHEN F.userid ='$userid' THEN F.friendid = U.uid WHEN F.friendid='$userid' THEN F.userid= U.uid END AND F.accepted = '2' AND F.status='1' ORDER BY F.loopid DESC LIMIT $limit OFFSET $ofset";
	$query=$this->db->query($sql);
	if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}	
}

public function get_this_user_loops_count($userid)
{
	$sql="SELECT F.*  FROM users U,loops F WHERE CASE WHEN F.userid ='$userid' THEN F.friendid = U.uid WHEN F.friendid='$userid' THEN F.userid= U.uid END AND F.accepted = '2' AND F.status='1' ORDER BY F.loopid DESC";
	$query=$this->db->query($sql);
	if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}

public function get_this_user_loops_search_count($userid,$search)
{
	$sql="SELECT F.*  FROM users U,loops F WHERE CASE WHEN F.userid ='$userid' THEN F.friendid = U.uid WHEN F.friendid='$userid' THEN F.userid= U.uid END AND F.accepted = '2' AND F.status='1' U.name like '$search%' ORDER BY F.loopid DESC";
	$query=$this->db->query($sql);
	if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}


public function get_moviescoopy_data()
{
			$this->db->select();
			$this->db->from('moviescoopy');	
			$this->db->where('moviescoopy_id','1');			
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_all_userfeeds($language=null,$offset=null,$limit=null)
{

			
			$this->db->select();
			$this->db->from('user_posts');	
			$this->db->join('users', 'users.uid = user_posts.uid', 'left join');
			$this->db->where('user_posts.status','1');	
			if($language!='')
			{
				$this->db->where('users.industry',$language);
			}
			$this->db->order_by('user_posts.upid','desc');	
			
			if($offset=='')
			{
				$this->db->limit(5,0);	
			}
			else if($offset!='')
			{
				
				$this->db->limit($limit,$offset);
			}
				
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_all_userfeeds_language_ajax($language,$offset,$limit)
{

			
			$this->db->select();
			$this->db->from('user_posts');	
			$this->db->join('users', 'users.uid = user_posts.uid', 'left join');
			$this->db->where('user_posts.status','1');	
			$this->db->where('users.industry',$language);
			$this->db->order_by('user_posts.upid','desc');	
			$this->db->limit($limit,$offset);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_all_userfeeds_ajax($offset,$limit)
{

			
			$this->db->select();
			$this->db->from('user_posts');	
			$this->db->join('users', 'users.uid = user_posts.uid', 'left join');
			$this->db->where('user_posts.status','1');	
			$this->db->order_by('user_posts.upid','desc');
			$this->db->limit($limit,$offset);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}


public function get_portfolio_feed_count($language=null)
{
			$this->db->select();
			$this->db->from('user_posts');	
			$this->db->join('users', 'users.uid = user_posts.uid', 'left join');
			$this->db->where('user_posts.status','1');	
			if($language!='')
			{
				$this->db->where('users.industry',$language);
			}
			$this->db->order_by('user_posts.upid','desc');	
			
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}

public function get_all_celebrity_posts($language=null,$offset=null,$limit=null)
{
			$this->db->select();
			$this->db->from('celebrity_posts');	
			$this->db->join('celebrity', 'celebrity_posts.cid = celebrity.cid', 'left join');
			$this->db->where('celebrity_posts.status','1');
			if($language!='')
			{
				$this->db->where('celebrity.industry',$language);
			}
			if($offset=='')
			{
				$this->db->limit(5,0);	
			}
			else if($offset!='')
			{
				$this->db->limit($limit,$offset);
			}
			$this->db->order_by('cpid','desc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_celebrity_feed_count($language=null)
{
			$this->db->select();
			$this->db->from('celebrity_posts');	
			$this->db->join('celebrity', 'celebrity_posts.cid = celebrity.cid', 'left join');
			$this->db->where('celebrity_posts.status','1');
			if($language!='')
			{
				$this->db->where('celebrity.industry',$language);
			}
			$this->db->order_by('cpid','desc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}
public function get_all_celebrity_feed_language_ajax($language,$offset,$limit)
{

			
			$this->db->select();
			$this->db->from('celebrity_posts');	
			$this->db->join('celebrity', 'celebrity_posts.cid = celebrity.cid', 'left join');
			$this->db->where('celebrity_posts.status','1');
			$this->db->where('celebrity.industry',$language);
			$this->db->order_by('cpid','desc');	
			$this->db->limit($limit,$offset);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_all_celebrity_feed_ajax($offset,$limit)
{

			
			$this->db->select();
			$this->db->from('celebrity_posts');	
			$this->db->join('celebrity', 'celebrity_posts.cid = celebrity.cid', 'left join');
			$this->db->where('celebrity_posts.status','1');
			$this->db->order_by('cpid','desc');	
			$this->db->limit($limit,$offset);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_all_userfeeds_language($lang)
{
			$this->db->select();
			$this->db->from('user_posts');	
			$this->db->join('users', 'users.uid = user_posts.uid', 'left join');
			$this->db->where('users.industry',$lang);
			$this->db->where('user_posts.status','1');	
			$this->db->order_by('user_posts.upid','desc');
			$this->db->limit(5,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_trailors()
{
	
			$this->db->select();
			$this->db->from('videos');
			$this->db->where('vcategory','Trailors');	
			$this->db->where('status','1');	
			$this->db->order_by('vid','random');					
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}
public function get_video_filter($cat)
{
	$this->db->select();
			$this->db->from('videos');
			$this->db->where('vcategory',$cat);	
			$this->db->where('status','1');	
			$this->db->order_by('vid','desc');					
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_this_video($vid)
{
	$this->db->select();
			$this->db->from('videos');
			$this->db->where('vid',$vid);	
			$this->db->where('status','1');	
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_latest_videos()
{
	$this->db->select();
			$this->db->from('videos');
			$this->db->where('status','1');	
			$this->db->order_by('vid','random');
			$this->db->limit(10,0);					
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function change_banner($fname,$result,$mid) 
{
	$data=array(
		
		'banner_img' => $fname,
					);
		$this->db->where("mid",$mid);
		$this->db->update("movies",$data);
		if($result['previmg']!='')
		{
			@unlink('./uploads/movie_other/'.$result['previmg']);
			@unlink('./uploads/movie_other/thumb_medium/'.$result['previmg']);
			@unlink('./uploads/movie_other/thumb_small/'.$result['previmg']);
		}
		return $this->db->affected_rows();
}

public function get_search_data($keyword)
{
	$query = "(SELECT uid as id,profile_img,iden,industry,name  FROM users WHERE name LIKE '$keyword%' and status='1') 
           UNION
           (SELECT  mid as id,image,iden,language,name FROM movies WHERE name LIKE '$keyword%' and status='1') 
           UNION
           (SELECT cid as id,images,iden,industry,name FROM celebrity WHERE name LIKE '$keyword%' and status='1') LIMIT 10 OFFSET 0" ;
			
			$queryres=$this->db->query($query);
	if($queryres->num_rows() > 0)
					{
						return $queryres->result();
					}
					else
					{
						return false;
					}	
}
public function get_all_search_data($keyword)
{
	$query = "(SELECT uid as id,profile_img,iden,industry,name  FROM users WHERE name LIKE '$keyword%' and status='1') 
           UNION
           (SELECT  mid as id,image,iden,language,name FROM movies WHERE name LIKE '$keyword%' and status='1') 
           UNION
           (SELECT cid as id,images,iden,industry,name FROM celebrity WHERE name LIKE '$keyword%' and status='1') " ;
			
			$queryres=$this->db->query($query);
	if($queryres->num_rows() > 0)
					{
						return $queryres->num_rows();
					}
					else
					{
						return false;
					}	
}
public function get_search_data_all($keyword)
{
	$query = "(SELECT uid as id,profile_img,iden,industry,name  FROM users WHERE name LIKE '$keyword%' and status='1') 
           UNION
           (SELECT  mid as id,image,iden,language,name FROM movies WHERE name LIKE '$keyword%' and status='1') 
           UNION
           (SELECT cid as id,images,iden,industry,name FROM celebrity WHERE name LIKE '$keyword%' and status='1') LIMIT 10 OFFSET 0" ;
			
			$queryres=$this->db->query($query);
	if($queryres->num_rows() > 0)
					{
						return $queryres->result();
					}
					else
					{
						return false;
					}	
}

public function get_all_search_ajax($keyword,$limit,$ofset)
{
$query = "(SELECT uid as id,profile_img,iden,industry,name  FROM users WHERE name LIKE '$keyword%' and status='1') 
           UNION
           (SELECT  mid as id,image,iden,language,name FROM movies WHERE name LIKE '$keyword%' and status='1') 
           UNION
           (SELECT cid as id,images,iden,industry,name FROM celebrity WHERE name LIKE '$keyword%' and status='1') LIMIT $limit OFFSET $ofset" ;
			$queryres=$this->db->query($query);
	if($queryres->num_rows() > 0)
					{
						return $queryres->result();
					}
					else
					{
						return false;
					}	
}
public function change_movie_image($fname,$result,$mid)
{
	$data=array(
		
		'image' => $fname,
					);
		$this->db->where("mid",$mid);
		$this->db->update("movies",$data);
		@unlink('./uploads/movie_main/'.$fname);
		if($result['previmg']!='')
		{
			
			@unlink('./uploads/movie_main/thumb_small/'.$result['previmg']);
			@unlink('./uploads/movie_main/thumb_small_sr/'.$result['previmg']);
		}
		return $this->db->affected_rows();
}

public function change_user_image($fname,$uid,$result)
{
	$data=array(
		
		'profile_img' => $fname,
					);
		$this->db->where("uid",$uid);
		$this->db->update("users",$data);
		if($result['previmg']!='')
		{
			@unlink('./uploads/users/'.$result['previmg']);
			@unlink('./uploads/users/thumb_medium/'.$result['previmg']);
			@unlink('./uploads/users/thumb_small/'.$result['previmg']);
			@unlink('./uploads/users/thumb_small_sr/'.$result['previmg']);
		}
		return $this->db->affected_rows();
}


public function upload_movie_images($name_array,$mid)
{
	 foreach($name_array as $values)
	   {
			
			
			$sql="insert into movie_images(mid,image)values('".$mid."','".$values."')";
			mysql_query($sql) or die(mysql_error());
			
			
	   }
	
}


public function update_trailor($result,$mid)
{
	
	$data=array(
		
		'trailor' =>$result['trailor'],
					);
		$this->db->where("mid",$mid);
		$this->db->update("movies",$data);

		return $this->db->affected_rows();
}
public function get_all_industry()
{
			$this->db->select();
			$this->db->from('industry');				
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_one_classified($clsid)
{
	$this->db->select();
			$this->db->from('classifieds');	
			$this->db->where('classifiedid',$clsid);			
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}



public function get_all_movie_status()
{
	$this->db->select();
			$this->db->from('moviestatus');				
			$this->db->where('status','1');
			$this->db->limit(20,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}


public function get_all_movie_feeds_all($status,$language)
{
	$this->db->select();
			$this->db->from('movie_post');	
			$this->db->join('movies', 'movie_post.mid = movies.mid', 'left join');
			$this->db->where('moviestatus',$status);
			$this->db->where('language',$language);
			$this->db->where('movie_post.status','1');
			$this->db->order_by('mpid','desc');
			$this->db->limit(5,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_all_movie_feeds_status($status)
{
	$this->db->select();
			$this->db->from('movie_post');
			$this->db->join('movies', 'movie_post.mid = movies.mid', 'left join');
			$this->db->where('moviestatus',$status);
			$this->db->where('movie_post.status','1');
			$this->db->order_by('mpid','desc');
			$this->db->limit(5,0);
			$query = $this->db->get();
			
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_all_movie_feeds_language($language)
{
	$this->db->select();
			$this->db->from('movie_post');	
			$this->db->join('movies', 'movie_post.mid = movies.mid', 'left join');
			$this->db->where('language',$language);
			$this->db->where('movie_post.status','1');
			$this->db->order_by('mpid','desc');
			$this->db->limit(5,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}


public function get_all_moviefolio_all($status,$language)
{
	$this->db->select();
			$this->db->from('movies');	
			$this->db->where('moviestatus',$status);
			$this->db->where('language',$language);
			$this->db->where('status','1');
			$this->db->order_by('mid','desc');
			$this->db->limit(12,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_all_moviefolio_status($status)
{
	$this->db->select();
			$this->db->from('movies');	
			$this->db->where('moviestatus',$status);
			$this->db->where('status','1');
			$this->db->order_by('mid','desc');
			$this->db->limit(12,0);
			$query = $this->db->get();
			
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_all_moviefolio_language($language)
{
			$this->db->select();
			$this->db->from('movies');	
			$this->db->where('language',$language);
			$this->db->where('status','1');
			$this->db->order_by('mid','desc');
			$this->db->limit(12,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}



public function get_all_portfolio_all($portfolio,$industry)
{
	$this->db->select();
			$this->db->from('users');
			$this->db->where('type','P');
			$this->db->where('industry',$industry);
			$this->db->where('desig',$portfolio);
			$this->db->where('status','1');
			$this->db->order_by('points','desc');
			$this->db->limit(12,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
					
					
}

public function get_all_portfolio_status($portfolio)
{
	$this->db->select();
			$this->db->from('users');
			$this->db->where('type','P');
			$this->db->where('desig',$portfolio);
			$this->db->where('status','1');
			$this->db->order_by('points','desc');
			$this->db->limit(12,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_all_portfolio_language($industry)
{
			$this->db->select();
			$this->db->from('users');
			$this->db->where('type','P');
			$this->db->where('industry',$industry);
			$this->db->where('status','1');
			$this->db->order_by('points','desc');
			$this->db->limit(12,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}




public function get_all_movie_feeds_all_post($status,$language,$ofset,$limit)
{

			$this->db->select();
			$this->db->from('movie_post');	
			$this->db->join('movies', 'movie_post.mid = movies.mid', 'left join');
			$this->db->where('moviestatus',$status);
			$this->db->where('language',$language);
			$this->db->where('movie_post.status','1');
			$this->db->order_by('mpid','desc');
			$this->db->limit($limit,$ofset);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_all_movie_feeds_status_post($status,$ofset,$limit)
{

	$this->db->select();
			$this->db->from('movie_post');
			$this->db->join('movies', 'movie_post.mid = movies.mid', 'left join');
			$this->db->where('moviestatus',$status);
			$this->db->where('movie_post.status','1');
			$this->db->order_by('mpid','desc');
			$this->db->limit($limit,$ofset);
			$query = $this->db->get();
			
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_all_movie_feeds_language_post($language,$ofset,$limit)
{

	$this->db->select();
			$this->db->from('movie_post');	
			$this->db->join('movies', 'movie_post.mid = movies.mid', 'left join');
			$this->db->where('language',$language);
			$this->db->where('movie_post.status','1');
			$this->db->order_by('mpid','desc');
			$this->db->limit($limit,$ofset);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_all_moviefolio_all_post($status,$language,$ofset,$limit)
{

	$this->db->select();
			$this->db->from('movies');	
			$this->db->where('moviestatus',$status);
			$this->db->where('language',$language);
			$this->db->where('status','1');
			$this->db->order_by('mid','desc');
			$this->db->limit($limit,$ofset);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_all_moviefolio_status_post($status,$ofset,$limit)
{

	$this->db->select();
			$this->db->from('movies');	
			$this->db->where('moviestatus',$status);
			$this->db->where('status','1');
			$this->db->order_by('mid','desc');
			$this->db->limit($limit,$ofset);
			$query = $this->db->get();
			
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_all_moviefolio_language_post($language,$ofset,$limit)
{

		$this->db->select();
			$this->db->from('movies');	
			$this->db->where('language',$language);
			$this->db->where('status','1');
			$this->db->order_by('mid','desc');
			$this->db->limit($limit,$ofset);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}


public function update_about($result,$id)
{
	$data=array(
		
		'name' =>$result['movie'] ,
		'language'=>$result['language'],
		'genres'=>$result['genre'],
		'plot'=>$result['plot'],
		'moviestatus'=>$result['status'],
		'expected_release'=>$result['release'],
		'director'=>$result['director'],
		'producer'=>$result['producer'],
		'maincaste'=>$result['players'],
		'music'=>$result['music'],
					
					);
		$this->db->where("mid",$id);
		$this->db->update("movies",$data);

		return $this->db->affected_rows();
}

public function update_user_about($result,$uid)
{
	$data=array(
		
		'name' =>$result['name'] ,
		'dob'=>$result['dob'],
		'gender'=>$result['gender'],
		'industry'=>$result['industry'],
		'current_job'=>$result['current_job'],
		'desig'=>$result['portfolio'],
		'location'=>$result['location'],
		'aboutme'=>$result['aboutme'],
		
					);
		$this->db->where("uid",$uid);
		$this->db->update("users",$data);

		return $this->db->affected_rows();
}

public function update_user_social($result,$uid)
{

	$data=array(
		
		'facebook' =>$result['facebook'] ,
		'twitter'=>$result['twitter'],
		'google'=>$result['google'],
		'linkedin'=>$result['linkedin'],
		
					);
		$this->db->where("uid",$uid);
		$this->db->update("users",$data);

		return $this->db->affected_rows();
}
public function update_user_email($result,$uid)
{

	$data=array(
		
		'email' =>$result['email'] ,
		
		
					);
		$this->db->where("uid",$uid);
		$this->db->update("users",$data);

		return $this->db->affected_rows();
}


public function get_this_credential($result,$uid)
{
	        $this->db->select();
			$this->db->from('users');
			$this->db->where('uid',$uid);
			$this->db->where('password',$this->_prep_password($result['cpassword']));
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
			
						return $query->result();
			
					}
			
					else
			
					{
			
						return false;
			
					}
}


public function update_passwords($result,$uid)
{
	$data=array(
			'password'=>$this->_prep_password($result['newpassword']),
			);
			
			$this->db->where('uid',$uid);
			$this->db->update('users',$data);
            return $this->db->affected_rows();
}

public function get_ad_tasks()
{
			$this->db->select();
			$this->db->from('ad_promo');	
			$this->db->join('adv', 'ad_promo.aid = adv.aid', 'left join');
			$this->db->where('adv.status','1');
			$this->db->where('ad_promo.status','1');
			$this->db->order_by('promo_id','random');
			$this->db->limit(10);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_this_ad($id)
{
			$this->db->select();
			$this->db->from('adv');	
			$this->db->where('aid',$id);			
			$this->db->where('status','1');
			$this->db->order_by('aid','desc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_this_ad_tasks($id)
{
			$this->db->select();
			$this->db->from('ad_promo');	
			$this->db->where('aid',$id);			
			$this->db->where('status','1');
			$this->db->order_by('promo_id','desc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_this_ad_task($id)
{
	$this->db->select();
			$this->db->from('ad_promo');	
			$this->db->where('promo_id',$id);			
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_this_movie_casts($id)
{
			$this->db->select();
			$this->db->from('movie_cast');	
			$this->db->where('mid',$id);			
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_this_movie_videos($id)
{
			$this->db->select();
			$this->db->from('movie_videos');	
			$this->db->where('mid',$id);			
			$this->db->where('status','1');
			$this->db->order_by('mv_id','desc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function add_classified($result)
{
	if(isset($result['movie_id']))
	{
		$type='M';
		$postedby=$result['movie_id'];
		
	}
	else if(isset($result['admin_id']))
	{
		$type='A';
		$postedby=$result['admin_id'];
	}
	$data=array(
	 'title'=>$result['title'],
	 'description'=>$result['description'],
	 'postedby'=>$postedby,
	 'type'=>$type	 
	);
	
	$this->db->insert('classifieds',$data);
	return $this->db->insert_id();
}

public function edit_classified($result)
{
	$data=array(
	 'title'=>$result['title'],
	 'description'=>$result['description']
	);
	
	$this->db->where('classifiedid',$result['classified_id']);
	$this->db->update('classifieds',$data);
	return $this->db->affected_rows();
}
public function get_this_movie_classifieds($id,$type)
{
			$this->db->select();
			$this->db->from('classifieds');	
			$this->db->where('postedby',$id);			
			$this->db->where('type',$type);
			$this->db->where('status','1');
			$this->db->order_by('classifiedid','desc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_this_classified($clid)
{
	$this->db->select();
			$this->db->from('classifieds');	
			$this->db->where('classifiedid',$clid);			
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}


public function delete_movie_cast($mcid)
{
	$this->db->where('mcid', $mcid);
    $this->db->delete('movie_cast');
	return true;
}

public function delete_movie_crew($mcrewid)
{
	$this->db->where('mcrewid', $mcrewid);
    $this->db->delete('movie_crew');
	return true;
}
public function delete_classified($did)
{
	$this->db->where('classifiedid', $did);
    $this->db->delete('classifieds');
	return true;
}

public function delete_gallery_images($dimg_id)
{
	$this->db->where('m_img_id', $dimg_id);
    $this->db->delete('movie_images');
	return true;
}

public function delete_gallery_videos($dv_id)
{
	$this->db->where('mv_id', $dv_id);
    $this->db->delete('movie_videos');
	return true;
}

public function get_upcoming_movies()
{
	$this->db->select();
			$this->db->from('movies');
			$this->db->where('moviestatus','upcoming');
			$this->db->where('status','1');
			$this->db->order_by('mid','desc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_all_portfolio_types()
{
			$this->db->select();
			$this->db->from('portfolio_types');
			$this->db->where('status','1');
			$this->db->order_by('pt_id','asc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_all_portfolio()
{
	
			$this->db->select();
			$this->db->from('users');
			$this->db->where('type','P');
			$this->db->where('status','1');
			$this->db->order_by('points','desc');
			$this->db->limit(12,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_portfolio_all_ajax($portfolio,$language,$ofset,$limit)
{
			$this->db->select();
			$this->db->from('users');
			$this->db->where('type','P');
			$this->db->where('status','1');
			$this->db->where('industry',$language);
			$this->db->where('desig',$portfolio);
			$this->db->order_by('points','desc');
			$this->db->limit($limit,$ofset);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_portfolio_portfolio_ajax($portfolio,$ofset,$limit)
{
	$this->db->select();
			$this->db->from('users');
			$this->db->where('type','P');
			$this->db->where('status','1');
			$this->db->where('desig',$portfolio);
			$this->db->order_by('points','desc');
			$this->db->limit($limit,$ofset);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_portfolio_language_ajax($language,$ofset,$limit)
{
	$this->db->select();
			$this->db->from('users');
			$this->db->where('type','P');
			$this->db->where('status','1');
			$this->db->where('industry',$language);
			$this->db->order_by('points','desc');
			$this->db->limit($limit,$ofset);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_portfolio_ajax($ofset,$limit)
{
	$this->db->select();
			$this->db->from('users');
			$this->db->where('type','P');
			$this->db->where('status','1');
			$this->db->order_by('points','desc');
			$this->db->limit($limit,$ofset);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}



public function get_total_portfolios($portfolio=null,$language=null)
{
			$this->db->select();
			$this->db->from('users');
			$this->db->where('type','P');
			$this->db->where('status','1');
			if($portfolio!='')
			{
				$this->db->where('desig',$portfolio);
			}
			if($language!='')
			{
				$this->db->where('industry',$language);
			}
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}


public function get_all_celebrity_posts_language($language)
{
			$this->db->select();
			$this->db->from('celebrity_posts');	
			$this->db->join('celebrity', 'celebrity_posts.cid = celebrity.cid', 'left join');
			$this->db->where('celebrity_posts.status','1');
			$this->db->where('celebrity.industry',$language);
			$this->db->order_by('cpid','desc');
			$this->db->limit(5,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}


public function get_lead_portfolios()
{

	$this->db->select();
			$this->db->from('users');
			$this->db->where('type','P');
			$this->db->where('status','1');
			$this->db->order_by('points','desc');
			$this->db->limit(30,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}

}

public function get_all_movie_feeds()
{
	$this->db->select();
			$this->db->from('movie_post');
			$this->db->where('status','1');
			$this->db->order_by('mpid','desc');
			$this->db->limit(5,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_all_moviefolio_feeds()
{
	$this->db->select();
			$this->db->from('movies');
			$this->db->where('status','1');
			$this->db->order_by('mid','desc');
			$this->db->limit(12,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_all_movie_feeds_no_parameters($ofset,$limit)
{
	
	$this->db->select();
			$this->db->from('movie_post');
			$this->db->where('status','1');
			$this->db->order_by('mpid','desc');
			$this->db->limit($limit,$ofset);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

			
			
			
public function get_all_moviefolio_no_parameters($ofset,$limit)
{
			
			$this->db->select();
			$this->db->from('movies');	
			$this->db->where('status','1');
			$this->db->order_by('mid','desc');
			$this->db->limit($limit,$ofset);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}
			
public function get_movies()
{
	$this->db->select();
			$this->db->from('movies');
			$this->db->where('status','1');
			$this->db->order_by('mid','desc');
			$this->db->limit(12,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}




public function get_this_movie_posts($id)
{
	$this->db->select();
			$this->db->from('movie_post');
			$this->db->where('mid',$id);
			$this->db->where('status','1');
			$this->db->order_by('mpid','desc');
			$this->db->limit(5,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}
public function get_this_movie_post($id)
{
	$this->db->select();
			$this->db->from('movie_post');
			$this->db->where('mpid',$id);
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}


public function get_this_movie_feed_ajax($id,$ofset,$limit)
{
	$this->db->select();
			$this->db->from('movie_post');
			$this->db->where('mid',$id);
			$this->db->where('status','1');
			$this->db->order_by('mpid','desc');
			$this->db->limit($limit,$ofset);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}


public function get_one_movie_feed_count($id)
{
			$this->db->select();
			$this->db->from('movie_post');
			$this->db->where('mid',$id);
			$this->db->where('status','1');
			$this->db->order_by('mpid','desc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}




public function get_one_movie_posts($id)
{
	$this->db->select();
			$this->db->from('movie_post');
			$this->db->where('mpid',$id);
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_this_user_posts($id)
{
	$this->db->select();
			$this->db->from('user_posts');
			$this->db->where('uid',$id);
			$this->db->where('status','1');
			$this->db->order_by('upid','desc');
			$this->db->limit(5,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}
public function get_this_user_postis($id)
{
	$this->db->select();
			$this->db->from('user_posts');
			$this->db->join('users', 'user_posts.uid = users.uid', 'left join');
			$this->db->where('upid',$id);
			$this->db->where('user_posts.status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_this_user_posts_ajax($id,$ofset,$limit)
{
	$this->db->select();
			$this->db->from('user_posts');
			$this->db->where('uid',$id);
			$this->db->where('status','1');
			$this->db->order_by('upid','desc');
			$this->db->limit($limit,$ofset);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function get_one_user_feed_count($id)
{
	$this->db->select();
			$this->db->from('user_posts');
			$this->db->where('uid',$id);
			$this->db->where('status','1');
			$this->db->order_by('upid','desc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}

public function get_this_user_post($post_id)
{
	$this->db->select();
			$this->db->from('user_posts');
			$this->db->where('upid',$post_id);
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}


public function get_this_movie($id)
{
	$this->db->select();
			$this->db->from('movies');
			$this->db->where('mid',$id);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

public function add_a_share($sharetype,$sharedby,$sharedid)
{
	$data=array(
	'sharedby'=>$sharedby,
	'shares'=>$sharetype,
	'shreditemid'=>$sharedid
	);

	$this->db->insert('shares',$data);
	return $this->db->insert_id();
}


public function check_share($sharetypeis,$sharedby,$shreditemid)
{
	$this->db->select();
			$this->db->from('shares');
			$this->db->where('sharedby',$sharedby);
			$this->db->where('shares',$sharetypeis);
			$this->db->where('shreditemid',$shreditemid);
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}

public function update_password($result,$pass)

{
	 $data=array(
		 'username'=>$result['username'],
		 'password'=>$pass
	 );
	    $this->db->where("id",1);
		$this->db->update("users",$data);
		return $this->db->affected_rows();
		
}



public function insert_amenities($aminities,$pid)
{
	
	foreach($aminities as $key => $value)
	   {
		
		$data= array(
				'project_id'=>$pid,
				'amenities'=>$aminities[$key],
				
		);
			$this->db->insert('amenities',$data);
		
	   }
	
}
public function get_socials()
{
			$this->db->select();
			$this->db->from('socials');
			$this->db->where('id',1);
			$query = $this->db->get();
					if($query->num_rows() > 0)
			
					{
			
						return $query->result();
			
					}
			
					else
			
					{
			
						return false;
			
					}
}


public function get_this_service($id)
{
	$this->db->select();
			$this->db->from('services');
			$this->db->where('status','A');
			$this->db->where('id',$id);
			$query = $this->db->get();
					if($query->num_rows() > 0)
			
					{
			
						return $query->result();
			
					}
			
					else
			
					{
			
						return false;
			
					}
}

 /* Functions to get the count of feeds */
public function get_total_data_all($status,$language)
{

			$this->db->select();
			$this->db->from('movie_post');	
			$this->db->join('movies', 'movie_post.mid = movies.mid', 'left join');
			$this->db->where('moviestatus',$status);
			$this->db->where('language',$language);
			$this->db->where('movie_post.status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}
public function get_total_data_status($status)
{
			$this->db->select();
			$this->db->from('movie_post');	
			$this->db->join('movies', 'movie_post.mid = movies.mid', 'left join');
			$this->db->where('moviestatus',$status);
			$this->db->where('movie_post.status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}

}

public function update_user_points($points,$sharedby)
{
	$data=array(
	'points'=>$points
	);
	$this->db-where("uid",$sharedby);
	$this->db->update("users",$data);
}


public function get_total_data_language($language)
{
		$this->db->select();
			$this->db->from('movie_post');	
			$this->db->join('movies', 'movie_post.mid = movies.mid', 'left join');
			$this->db->where('language',$language);
			$this->db->where('movie_post.status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}

}
public function get_total_data_no_parameters()
{
	$this->db->select();
			$this->db->from('movie_post');	
			$this->db->join('movies', 'movie_post.mid = movies.mid', 'left join');
			$this->db->where('movie_post.status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}
/* End of Functions to get the count of feeds */ 


 /* Functions to get the count of movies */
public function get_total_movie_all($status,$language)
{

			$this->db->select();
			$this->db->from('movies');	
			$this->db->where('moviestatus',$status);
			$this->db->where('language',$language);
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}
public function get_total_movie_status($status)
{
			$this->db->select();
			$this->db->from('movies');	
			$this->db->where('moviestatus',$status);
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}

}
public function get_total_movie_language($language)
{
		
			$this->db->select();
			$this->db->from('movies');	
			$this->db->where('language',$language);
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}

}
public function get_total_movie_no_parameters()
{
			$this->db->select();
			$this->db->from('movies');	
			$this->db->where('status','1');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}
/* End of Functions to get the count of movies */ 

/*-----------------------classifieds------------------------- */



public function get_all_classifieds()
{
			$this->db->select();
			$this->db->from('classifieds');	
			$this->db->where('status','1');
		    $this->db->order_by('classifiedid','desc');
			$this->db->limit(10,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}


public function get_all_classifieds_ajax($ofset,$limit)
{
			$this->db->select();
			$this->db->from('classifieds');	
			$this->db->where('status','1');
		    $this->db->order_by('classifiedid','desc');
			$this->db->limit($limit,$ofset);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}



public function get_all_classifieds_count()
{
		$this->db->select();
			$this->db->from('classifieds');	
			$this->db->where('status','1');
		    $this->db->order_by('classifiedid','desc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}

/*-------------------End classifieds------------------------- */


/*--------------------Blogs-----------------------------------*/


public function get_all_blogs()
{
			$this->db->select();
			$this->db->from('services');	
			$this->db->where('status','A');
		    $this->db->order_by('id','desc');
			$this->db->limit(5,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}
public function get_all_blogfeeds_category_ajax($category,$ofset,$limit)
{
	$this->db->select();
			$this->db->from('services');	
			$this->db->where('status','A');
			$this->db->where('stitle',$category);
		    $this->db->order_by('id','desc');
			$this->db->limit($limit,$ofset);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}
public function get_all_blogfeeds_ajax($ofset,$limit)
{
	$this->db->select();
			$this->db->from('services');	
			$this->db->where('status','A');
		    $this->db->order_by('id','desc');
			$this->db->limit($limit,$ofset);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}


public function get_blog_count($category=null)
{
			$this->db->select();
			$this->db->from('services');	
			$this->db->where('status','A');
			if($category!='')
			{
			$this->db->where('stitle',$category);
			}
			
		    $this->db->order_by('id','desc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
}

public function get_all_blog_categories()
{
	$this->db->distinct();
	$this->db->select('stitle');
			$this->db->from('services');	
			$this->db->where('status','A');
		    $this->db->order_by('id','desc');
			
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
}

/*--------------------------------------------------------------*/

/*--------------------News---------------------------------------*/

	public function get_all_news()
	{
		$this->db->select();
			$this->db->from('events');	
			$this->db->where('status','A');
		    $this->db->order_by('eid','desc');
			$this->db->limit(6,0);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
	}
	
	public function get_all_newsfeeds_ajax($ofset,$limit)
	{
			$this->db->select();
			$this->db->from('events');	
			$this->db->where('status','A');
		    $this->db->order_by('eid','desc');
			$this->db->limit($limit,$ofset);
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->result();
					}
					else
					{
						return false;
					}
	}

	public function get_news_count()
	{
		$this->db->select();
			$this->db->from('events');	
			$this->db->where('status','A');
		    $this->db->order_by('eid','desc');
			$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						return $query->num_rows();
					}
					else
					{
						return false;
					}
	}
	
/*----------------------End--------------------------------------*/
}
?>
