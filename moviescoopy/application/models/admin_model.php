<?php

Class Admin_model extends CI_Model

{


/*-------------------------------------For Clear Lifestyle Services----------------------*/
public function get_title_data()
{
	$this->db->select();
			$this->db->from('titles');
			$this->db->where('tid',1);
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


public function update_title($result)
{

	$data=array(
		 'about'=>$result['about'],
		 'services'=>$result['services'],
		 'social'=>$result['social'],
		 'contact'=>$result['contact'],
	 );
	    $this->db->where("tid",1);
		$this->db->update("titles",$data);
		return $this->db->affected_rows();

}

/*---------------------------------------------------------------------------------------*/


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


public function add_celebrity_posts_imageless($result,$uid)
{
	$data= array(
		
				'cid'=>$uid,
				'post_title'=>$result['post_title'],
				'post_text'=>$result['post_text'],
				'post_image'=>'',
				'post_video'=>$result['post_video']
				
		);
		    $this->db->escape($data);
			$this->db->insert('celebrity_posts',$data);
			return $this->db->insert_id();
}

public function update_moviescoopy($result)
{
 if(isset($result['about']))
 {
	$data=array(
		 'about'=>$result['about'],	
	 );
}
else if(isset($result['company']))
 {
	$data=array(
		 'company'=>$result['company'],	
	 );
}
	
else if(isset($result['services']))
 {
	$data=array(
		 'services'=>$result['services'],	
	 );
}
else if(isset($result['advertise']))
 {
	$data=array(
		 'advertise'=>$result['advertise'],	
	 );
}
else if(isset($result['privacy']))
 {
	$data=array(
		 'privacy'=>$result['privacy'],	
	 );
}
else if(isset($result['terms']))
 {
	$data=array(
		 'terms'=>$result['terms'],	
	 );
}
else if(isset($result['contacts']))
 {
	$data=array(
		 'contacts'=>$result['contacts'],	
	 );
}
else if(isset($result['news']))
 {
	$data=array(
		 'news'=>$result['news'],	
	 );
}	
	    $this->db->where("moviescoopy_id",1);
		$this->db->update("moviescoopy",$data);
		return $this->db->affected_rows();
}


public function get_login_details($result)
{
	$username=$result['username'];
	$password=$result['password'];
	$this->db->select();
			$this->db->from('adminusers');
			$this->db->where('username',$username);
			$this->db->where('password',$password);
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

public function update_password($result,$pass)

{
	 $data=array(
		 'username'=>$result['username'],
		 'password'=>$pass
	 );
	    $this->db->where("id",'1');
		$this->db->update("adminusers",$data);
		return $this->db->affected_rows();
		
}

public function update_about($result)
{
	
		$data=array(
			'title_main'=>$result['title_main'],
			'title_main_description'=>$result['title_main_description']
		);

			$this->db->update("about_us",$data);
            return $this->db->affected_rows();
}

public function update_social($result)
{
	
	$data=array(
	        
			'facebook'=>$result['facebook'],
			'linkedin'=>$result['linkedin'],
			'twitter'=>$result['twitter'],
			'google'=>$result['google'],
			'youtube'=>$result['youtube'],
	
	);
	        $this->db->where('id',1);
			$this->db->update("socials",$data);
            return $this->db->affected_rows();

}


public function update_general_info($result)
{
	
	$data=array(
	        
			'address'=>$result['address'],
			'city'=>$result['city'],
			'pincode'=>$result['pincode'],
			'email'=>$result['email'],
			'mobile'=>$result['mobile'],
			'phone'=>$result['phone'],
			'alternate_email'=>$result['altemail'],
			'whats_app_one'=>$result['whatsap1'],
			'whats_app_two'=>$result['whatsap2'],
			'skype_one'=>$result['skype1'],
			'skype_two'=>$result['skype2']
	
	);
	        $this->db->where('id',1);
			$this->db->update("common_data",$data);
            return $this->db->affected_rows();

}

public function insert_specifications($aminities,$aminities_des,$pid)
{
	 foreach($aminities as $key => $value)
	   {
		
		$data= array(
				'project_id'=>$pid,
				'title'=>$aminities[$key],
				'desc'=>$aminities_des[$key]
		);
			$this->db->insert('specifications',$data);
		
	   }
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

public function get_general_info()
{
	$this->db->select();
			$this->db->from('common_data');
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
public function get_gallery_images()
{
		$this->db->select();
			$this->db->from('gallery_images');
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
public function get_home_banner_images()
{

$this->db->select();
			$this->db->from('home_banner_images');
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



public function get_one_image($id)
{
	$this->db->select();
			$this->db->from('gallery_images');
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

public function get_one_project_image($id)
{
	$this->db->select();
			$this->db->from('project_img');
			$this->db->where('project_id',$id);
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

public function get_one_floortype($id)
{
	$this->db->select();
			$this->db->from('floor_types');
			$this->db->where('project_id',$id);
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

public function get_one_specification($id)
{
	$this->db->select();
			$this->db->from('specifications');
			$this->db->where('project_id',$id);
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

public function get_one_amenities($id)
{
	$this->db->select();
			$this->db->from('amenities');
			$this->db->where('project_id',$id);
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


public function delete_images($id)
{
	$this->db->where('id', $id)->delete('gallery_images');
	return $this->db->affected_rows();
}

public function get_one_service($id)
{
	$this->db->select();
			$this->db->from('services');
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

public function get_one_project($id)
{
	$this->db->select();
			$this->db->from('projects');
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


public function delete_services($id)
{
	$this->db->where('id', $id)->delete('services');
	return $this->db->affected_rows();
}

public function delete_events($id)
{
	$this->db->where('eid', $id)->delete('events');
	return $this->db->affected_rows();
}

public function get_this_credential($result)
{
	        $this->db->select();
			$this->db->from('adminusers');
			$this->db->where('id',1);
			$this->db->where('password',$result['cpassword']);
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


public function add_services($result,$fname)
{
	$data=array(
			'sname'=>$result['sname'],
			'stitle'=>$result['snamet'],
			'description'=>$result['description'],
			'image'=>$fname
			);
	$retres=$this->db->insert('services', $data);
    return $retres;
}
public function add_video($result,$fname)
{
	$data=array(
			'vname'=>$result['sname'],
			'vurl'=>$result['slink'],
			'vcategory'=>$result['snamet'],
			'other_url'=>$result['description'],
			'image'=>$fname
			);
	$retres=$this->db->insert('videos', $data);
    return $retres;
}

public function get_top_page_breaker()
{
	$this->db->select();
			$this->db->from('pagebreaker_top');
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


public function get_bottom_page_breaker()
{
	
	$this->db->select();
			$this->db->from('pagebreaker_bottom');
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


public function get_footer_page_breaker()
{
	$this->db->select();
			$this->db->from('footer_img');
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

public function add_celebrity($result,$fname)

{
	$data=array(
		
				
				'name' =>$result['name'],
				'email'=>$result['email'],
				'password'=>$result['password'],
				'dob'=>$result['dob'],
				'images'=>$fname,
				'type'=>$result['type'],
				'gender'=>$result['gender'],
				'industry'=>$result['industry'],
				'contact'=>$result['contact'],
				'facebook'=>$result['facebook'],
				'twitter'=>$result['twitter'],
				'google'=>$result['google'],
				'linkedin'=>$result['linkedin'],
				'location'=>$result['location'],
				'aboutme'=>$result['aboutme'],
		
		
					);
					
					$this->db->insert('celebrity',$data);
					return $this->db->insert_id();
		
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
public function get_this_celebrity($cid)
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
public function add_celebrity_posts($result,$fname,$cid)
{
	$data= array(
		
				'cid'=>$cid,
				'post_title'=>$result['post_title'],
				'post_text'=>$result['post_text'],
				'post_image'=>$fname,
				'post_video'=>$result['post_video']
				
		);
		    $this->db->escape($data);
			$this->db->insert('celebrity_posts',$data);
			return $this->db->insert_id();
}

public function add_celebrity_imageless($result,$cid)
{
		$data= array(
		
				'cid'=>$cid,
				'post_title'=>$result['post_title'],
				'post_text'=>$result['post_text'],
				'post_image'=>'',
				'post_video'=>$result['post_video']
				
		);
		    $this->db->escape($data);
			$this->db->insert('celebrity_posts',$data);
			return $this->db->insert_id();
	
}
public function add_talent_posts($result,$fname)
{
	$data= array(
		
				'uid'=>$result['id'],
				'post_title'=>$result['post_title'],
				'post_text'=>$result['post_text'],
				'post_image'=>$fname,
				'post_video'=>$result['post_video']
				
		);
		    $this->db->escape($data);
			$this->db->insert('talents',$data);
			return $this->db->insert_id();
}

public function add_talent_posts_imageless($result)
{
		$data= array(
		
				'uid'=>$result['id'],
				'post_title'=>$result['post_title'],
				'post_text'=>$result['post_text'],
				'post_image'=>'',
				'post_video'=>$result['post_video']
				
		);
		    $this->db->escape($data);
			$this->db->insert('talents',$data);
			return $this->db->insert_id();
	
}
public function update_passwords($result)
{
	$data=array(
			'password'=>$result,
			);
			
			$this->db->where('id',1);
			$this->db->update('adminusers',$data);
            return $this->db->affected_rows();
}


public function get_all_portfolio()
{
	
			$this->db->select();
			$this->db->from('users');
			$this->db->where('type','P');
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


public function add_events($result,$fname)
{
	$data=array(
			'title'=>$result['ename'],

			'description'=>$result['edescription'],
			'images'=>$fname
			);
	$retres=$this->db->insert('events', $data);
    return $retres;
}

public function add_news($result,$fname)
{
	$data=array(
			'title'=>$result['name'],
			'description'=>$result['description'],
			'image'=>$fname
			);
	$retres=$this->db->insert('news', $data);
    return $retres;
}

public function add_contact($result)
{
			
	$data=array(
			'fname'=>$result['fname'],
			'email'=>$result['email'],
			'subject'=>$result['subject'],
			'message'=>$result['message'],
			);
	$retres=$this->db->insert('contact', $data);
    return $retres;
}

public function add_write_us($result)
{
			
	$data=array(
				'first_name'=>$result['app_fname'],
				'email'=>$result['app_email_address'],
				'phone'=>$result['app_phone'],
				'project'=>$result['projects'],
				'message'=>$result['app_msg'],
			);
	$retres=$this->db->insert('write_us', $data);
    return $retres;
}

public function add_enquiry($result)
{
	
	$data=array(
			'name'=>$result['name'],
			'email'=>$result['email'],
			'projects'=>$result['projects'],
			'comments'=>$result['comments'],
			);
	$retres=$this->db->insert('enquiry', $data);
    return $retres;
}

public function add_project($name_array,$result)
{

$data=array(
'name'=>$result['project_name'],
'location'=>$result['location'],
'project_type'=>$result['project_type'],
'floors'=>$result['floors'],
'unit_type'=>$result['unit_type'],
'project_status'=>$result['project_status'],
'summary'=>$result['summary']
);
$this->db->insert('projects',$data);
$insert_id=$this->db->insert_id();
$pstatus=$result['project_status'];
foreach($name_array as $values)
	   {
			
			
			$sql="insert into project_img(project_id,images,project_status)values('".$insert_id."','".$values."','".$pstatus."')";
			mysql_query($sql) or die(mysql_error());
			
			
	   }
	   return $insert_id;
}
public function get_all_services()
{
	$this->db->select();
			$this->db->from('services');
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

public function get_all_projects()
{
	$this->db->select();
			$this->db->from('projects');
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
public function get_ongoing_projects()
{
	$this->db->select();
			$this->db->from('projects');
			$this->db->where('project_status','Ongoing Project');
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
public function get_completed_projects()
{
	$this->db->select();
			$this->db->from('projects');
			$this->db->where('project_status','Completed Project');
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


public function get_new_projects()
{
	$this->db->select();
			$this->db->from('projects');
			$this->db->where('project_status','New Launches');
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


public function get_all_events()
{
	$this->db->select();
			$this->db->from('events');
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

public function get_all_socials()
{
	$this->db->select();
			$this->db->from('socials');
			$this->db->where('id','1');
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

public function update_about_image($fname)
{
	 $data=array(
			'img'=>$fname
			);
			$this->db->where('banner_page','about');
			$this->db->update("banners",$data);
            return $this->db->affected_rows();
}

public function delete_projects($id)
{
	$delete=$this->db->where('id', $id)->delete('projects');
	if($delete)
	{
		$this->db->where('project_id', $id)->delete('project_img');
		$this->db->where('project_id', $id)->delete('specifications');
		$this->db->where('project_id', $id)->delete('amenities');
		$this->db->where('project_id', $id)->delete('other_project_data');
	}
	return $this->db->affected_rows();
}
public function update_home_banner_image($fname,$result)
{

	$data=array(
	
			'img'=>$fname
			);
			$this->db->where('id',$result['thisid']);
			$this->db->update("home_banner_images",$data);
            return $this->db->affected_rows();
}
public function update_second_banner_image($fname)
{

	$data=array(
			'img'=>$fname
			);
			$this->db->where('id',2);
			$this->db->update("home_banner_images",$data);
            return $this->db->affected_rows();
}
public function update_third_banner_image($fname)
{

	$data=array(
			'img'=>$fname
			);
			$this->db->where('id',3);
			$this->db->update("home_banner_images",$data);
            return $this->db->affected_rows();
}
public function update_fourth_banner_image($fname)
{

	$data=array(
			'img'=>$fname
			);
			$this->db->where('id',4);
			$this->db->update("home_banner_images",$data);
            return $this->db->affected_rows();
}

public function get_banner_images()
{
	        $this->db->select();
			$this->db->from('banners');
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


public function update_gallery($name_array)
{
	 foreach($name_array as $values)
	   {
			
			
			$sql="insert into gallery_images(photo_name)values('".$values."')";
			mysql_query($sql) or die(mysql_error());
			
			
	   }

}
public function update_home_banners($name_array)
{
	 foreach($name_array as $values)
	   {
			
			
			$sql="insert into home_banner_images(photo_name)values('".$values."')";
			mysql_query($sql) or die(mysql_error());
			
			
	   }

}


public function add_floor_types($name_array,$pid)
{
	foreach($name_array as $values)
	   {
			
			
			$sql="insert into floor_types(project_id,filename)values('".$pid."','".$values."')";
			mysql_query($sql) or die(mysql_error());
			
			
	   }
}



public function add_other_project($result,$fname,$pid)
{
	$data=array(
	 'project_id'=>$pid,
	 'location_img'=>$fname,
	 'youtube_video'=>$result['youtube_video']
	);
	
	$this->db->insert('other_project_data',$data);
}


public function update_project_image($fname)
{
	 $data=array(
			'img'=>$fname
			);
			$this->db->where('banner_page','project');
			$this->db->update("banners",$data);
            return $this->db->affected_rows();
}

public function update_service_image($fname)
{
	 $data=array(
			'img'=>$fname
			);
			$this->db->where('banner_page','services');
			$this->db->update("banners",$data);
            return $this->db->affected_rows();
}

public function update_news_image($fname)
{
	 $data=array(
			'img'=>$fname
			);
			$this->db->where('banner_page','news');
			$this->db->update("banners",$data);
            return $this->db->affected_rows();
}


public function update_gallery_image($fname)
{
	 $data=array(
			'img'=>$fname
			);
			$this->db->where('banner_page','gallery');
			$this->db->update("banners",$data);
            return $this->db->affected_rows();
}

public function update_write_image($fname)
{
	 $data=array(
			'img'=>$fname
			);
			$this->db->where('banner_page','write');
			$this->db->update("banners",$data);
            return $this->db->affected_rows();
}

public function update_contact_image($fname)
{
	 $data=array(
			'img'=>$fname
			);
			$this->db->where('banner_page','contact');
			$this->db->update("banners",$data);
            return $this->db->affected_rows();
}


public function get_all_news()
{
	$this->db->select();
			$this->db->from('news');
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


public function get_about_us()
{
	$this->db->select();
			$this->db->from('about_us');
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

public function get_tagline()
{
	$this->db->select();
			$this->db->from('tagline');
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

public function update_tagline($result)
{
  	        $data=array(
			'text'=>$result['tagline'],
			'text1'=>$result['tagline1'],
			'text2'=>$result['tagline2'],
			'text3'=>$result['tagline3']
			);
			$this->db->update("tagline",$data);
            return $this->db->affected_rows();
}

public function update_copyright($result)
{
  	        $data=array(
			'text'=>$result['copyright']
			);
			$this->db->update("copyright",$data);
            return $this->db->affected_rows();
}

public function get_copyright()
{
$this->db->select();
			$this->db->from('copyright');
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

public function get_this_event($id)
{
	$this->db->select();
			$this->db->from('events');
			$this->db->where('status','A');
			$this->db->where('eid',$id);
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
public function get_logo()
{
	$this->db->select();
			$this->db->from('logo');			
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

public function get_Admin($values)
{
			
			$this->db->select();
			$this->db->from('admin');
			$this->db->where('username',$values['adminusername']);
			$this->db->where('password',$values['adminpassword']);
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


	public function update_services($result,$fname,$id)
	{
		$data=array(
		'sname' =>$result['sname'],
		'stitle'=>$result['snamet'],
		'description' => $result['description'],
		'image' => $fname,
					);
		$this->db->where("id",$id);
		$this->db->update("services",$data);

		return $this->db->affected_rows();
	}
	
	public function update_pagebreakertop($result,$fname)
	{
		$data=array(
		'title' =>$result['sname'],
		'desc' => $result['description'],
		'img' => $fname,
					);
		$this->db->where("pid",1);
		$this->db->update("pagebreaker_top",$data);

		return $this->db->affected_rows();
	}
	public function update_pagebreakerfooter($fname)
	{
		$data=array(
		
		'img' => $fname,
					);
		$this->db->where("id",1);
		$this->db->update("footer_img",$data);

		return $this->db->affected_rows();
	}
	public function update_logo($fname)
	{
		$data=array(
		
		'img' => $fname,
					);
		$this->db->where("id",1);
		$this->db->update("logo",$data);

		return $this->db->affected_rows();
	}
	
	public function update_pagebreakerbottom($result,$fname)
	{
		$data=array(
		'title' =>$result['sname'],
		'desc' => $result['description'],
		'img' => $fname,
					);
		$this->db->where("pbid",1);
		$this->db->update("pagebreaker_bottom",$data);

		return $this->db->affected_rows();
	}

	public function update_events($result,$fname,$id)
	{
		
		$data=array(
		'title' =>$result['ename'],
		
		'description' => $result['edescription'],
		'images' => $fname,
					);
		$this->db->where("eid",$id);
		$this->db->update("events",$data);

		return $this->db->affected_rows();
	}
	
  
}
?>
