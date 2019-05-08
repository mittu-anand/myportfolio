
              <!-- .aside -->
              
              <aside>
                
                <section class="vbox">
                  
                  <header class="header">
                     <?php
									$CI =& get_instance();
								  $movieid=$this->session->userdata('movie_id');
								  if($this->session->userdata('mlogged_in',true) && $movieid==$movie[0]->mid) { 
					       
						   ?>
                    <a href="#aside" data-toggle="class:show" class="btn btn-sm btn-default pull-right">
                      Post to shootline
                    </a>
                    <?php } ?>
                    
                  </header>
                  <?php if($this->session->flashdata('serv_err')){ ?>
                      <div class="alert alert-danger fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('serv_err'); ?>
                      </div>
                <?php } ?>
				<?php if($this->session->flashdata('serv_suc')){ ?>
                      <div class="alert alert-success fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('serv_suc'); ?>
                      </div>
                <?php } ?>
				 <?php if(isset($error)){ ?>
				 <div class="alert alert-danger fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                        <?php print_r($error['error']);?>
                      </div>
				<?php } ?>
				<input type="hidden" class="flagstopper" value="
  
					  <?php
						  $CI =& get_instance();
						
							echo $total_data=$CI->user_model->get_one_movie_feed_count($movie[0]->mid);
						
						  ?>
					  "/>	
                  <section class="scrollable wrapper">
                    
                    <div class="timeline">
                      
                      <article class="timeline-item active">
                        
                        <div class="timeline-caption">
                        
						<div class="panel bg-primary lter no-borders">
                              <img src="<?php echo base_url();?>uploads/movie_other/<?php echo  $movie[0]->banner_img; ?>" title="<?php echo $movie[0]->name; ?>" alt="<?php echo $movie[0]->name; ?>" style="width:100%;"/>
                         
                          <!---<div class="panel-body">
                              
                              <span class="timeline-icon">
                                <i class="fa fa-film time-icon bg-primary">
                                </i>
                              </span>
                              
                              <span class="h4  m-r-sm">
                                <?php if($movie) { echo $movie[0]->name; } ?>
                              </span>
                             <img src="<?php echo base_url();?>uploads/movie_main/<?php if($movie) { echo $movie[0]->image; } ?>">
                              <div class="m-t-sm timeline-action">
                                
                                
                                
                                <button class="btn btn-sm btn-default btn-bg">
                                   <?php if($movie) { echo $movie[0]->moviestatus; } ?>
                                </button>
                               <button class="btn btn-sm btn-default btn-bg">
                                   <?php if($movie) { echo $movie[0]->language; } ?>
                                </button>
                              </div>
                              
                            </div>--->
                             <div class="panel-body">
						  
						   <?php
;
								  $movieid=$this->session->userdata('movie_id');
								  if($this->session->userdata('mlogged_in',true) && $movieid==$movie[0]->mid) { 
					       
						   ?>
		  
		  
		  
						  <a class="pull-right" href="<?php echo base_url();?>index.php/moviefolio/edit?id=<?php echo $this->session->userdata('movie_id'); ?>&&name=<?php echo $this->session->userdata('movie_name'); ?>" title="Edit Profile"> <i class="fa fa-pencil "></i> </a>
						 
                          
						  <?php } ?>

						 <strong class="block">
                          <?php if(isset($movie[0]->name)){echo $movie[0]->name; } ?>
                          </strong>
						  
                              <h5></h5>
                              <table class="table p-sizer" style="background:none;">
							  <tr>
							  <td><img src="<?php echo base_url();?>uploads/movie_main/<?php if(isset($movie[0]->image) && $movie[0]->image!=''){echo $movie[0]->image; }else{ echo "moviedummy.jpg"; } ?>" style="height:200px;width:150px;"></td>
							  <td><p><?php if(isset($movie[0]->language)){echo $movie[0]->language; } ?></p>
							   <p><?php if(isset($movie[0]->moviestatus)){if($movie[0]->moviestatus=='upcoming'){ echo "Up Coming"; } else if($movie[0]->moviestatus=='nowrunning'){ echo "Now Running";} else { echo "In Shoot";}} ?></p>
							  <p>Genre<label class="label bg-warning m-l-xs"><?php if(isset($movie[0]->genres)){echo $movie[0]->genres; } ?></label></p>
							 
							  <p>Expected Release<label class="label bg-warning m-l-xs"><?php if(isset($movie[0]->expected_release)){
							  
								  
								  echo $movie[0]->expected_release; 
							  } 
							  
							  ?></label></p>
							   <p>Starring<label class="label bg-warning m-l-xs"><?php if(isset($movie[0]->maincaste)){echo $movie[0]->maincaste; } ?></label></p>
							  <p>A film by<label class="label bg-warning m-l-xs"><?php if(isset($movie[0]->director)){echo $movie[0]->director; } ?></label></p>
							  </td>
							  </tr>
							    <?php
								$usid=$this->session->userdata('user_id');
								if($this->session->userdata('logged_in',true) && $this->session->userdata('user_type')=='P')  {
								$sharetypeis='movie';
								$sharecheck=$CI->user_model->check_share($sharetypeis,$usid,$movie[0]->mid);
								?>
							  <tr>
							  <td></td>
								<td>
								<?php if($sharecheck==0) {?>
							
								<button class="btn btn-info btn-xs" id="movshare" data-title="Share within loop" data-placement="bottom" data-toggle="tooltip">Share <?php if(isset($movie[0]->name)){echo $movie[0]->name; } ?></button></td>
							  
							  <?php } else { ?>
							  
							  <button class="btn btn-info btn-xs" data-title="You shared this post within loop" data-placement="bottom" data-toggle="tooltip">
									<i class="fa fa-check ">
                              </i>
                            Shared
                          </button>
							  </td>
							  
							  <?php } ?>
							  
							  </tr>
							  <?php } ?>
							  </table>
							 
								    <?php
				 
								$usid=$this->session->userdata('user_id');
								if($this->session->userdata('logged_in',true)) { ?>
										 <?php 
											   $this_movie_likes=$CI->get_this_movie_likes($usid,$movie[0]->mid);
											   $this_movie_loves=$CI->get_this_movie_loves($usid,$movie[0]->mid);
											   $movie_likes=$CI->get_this_movie_total_likes($movie[0]->mid);
											   $movie_loves=$CI->get_this_movie_total_loves($movie[0]->mid);
										  ?>
										  <input type="hidden" id="loguser" value="<?php echo $usid; ?>"/>
										   <input type="hidden" class="userlog" value="<?php echo $usid; ?>"/>
										   <input type="hidden" id="movieid" value="<?php echo $movie[0]->mid; ?>"/>
										  <input type="hidden" id="moviename" value="<?php echo $movie[0]->name; ?>"/>
										  <?php if($this_movie_loves==0) { ?>
								<button class="btn btn-default" id="mlove" data-title="Love" data-placement="bottom" data-toggle="tooltip"> 
							   <span class="text">  <i class="fa fa-heart  text-danger"></i>  <?php echo $movie_loves; ?> </span> 
							   </button>	
										<?php } else { ?>	
											<button class="btn btn-default" id="mnotlove" data-title="Unlove" data-placement="bottom" data-toggle="tooltip"> 
										   <span class="text">  <i class="fa fa-heart-o text"></i>  <?php echo $movie_loves; ?> </span> 
										   </button>
										<?php } ?>
										
								<?php if($this_movie_likes==0) { ?>		
							   <button class="btn btn-default" id="mlike" data-title="Like" data-placement="bottom" data-toggle="tooltip" > 
							   <span class="text"> <i class="fa fa-thumbs-up text-success"></i> <?php echo $movie_likes; ?> </span> 
							   </button>
							   <?php } else { ?>
								 <button class="btn btn-default" id="mnotlike" data-title="Unlike" data-placement="bottom" data-toggle="tooltip"> 
							   <span class="text"> <i class="fa fa-thumbs-down text-danger"></i> <?php echo $movie_likes; ?> </span> 
							   </button>
							   <?php } ?>
							   
							   
							   
								<?php } else { ?>
									<?php $CI =& get_instance();
								
											   $movie_likes=$CI->user_model->get_this_movie_total_likes($movie[0]->mid);
											   $movie_loves=$CI->user_model->get_this_movie_total_loves($movie[0]->mid);
										  ?>
								   <button class="btn btn-default"> 
								   <span class="text">  <i class="fa fa-heart  text-danger"></i>  <?php echo $movie_loves; ?>  </span> 
								   </button>		
								   <button class="btn btn-default"> 
								   <span class="text"> <i class="fa fa-thumbs-up text-success"></i> <?php echo $movie_likes; ?>  </span> 
								   </button>
								
								<?php } ?>
								
								
							 <a class="btn btn-sm btn-default pull-right" data-title="More about this movie" data-placement="bottom" data-toggle="tooltip" href="<?php echo base_url();?>index.php/moviefolio/about?id=<?php if(isset($movie[0]->mid)){echo $movie[0]->mid; } ?>&&name=<?php if(isset($movie[0]->name)){echo $movie[0]->name; } ?>"> 
							  <i class="fa fa-plus text"></i> <span class="text">More About <?php if(isset($movie[0]->name)){echo $movie[0]->name; } ?></span> 
							  </a>
							  
                              <ul style="list-style:none;margin-top:15px;">
		 <li>
			 <p id="social-buttons"> 
			 <a class="btn btn-sm btn-icon btn-info" target="_blank" href="<?php if(isset($movie[0]->twitter)){echo $movie[0]->twitter; } ?>">
			 <i class="fa fa-twitter"></i>
			 </a>
			 <a class="btn btn-sm btn-icon btn-info" target="_blank"  href="<?php if(isset($movie[0]->facebook)){echo $movie[0]->facebook; } ?>">
			 <i class="fa fa-facebook"></i>
			 </a> 
			 <a class="btn btn-sm btn-icon btn-info" target="_blank"  href="<?php if(isset($movie[0]->google)){echo $movie[0]->google; } ?>">
			 <i class="fa fa-google-plus"></i>
			 </a> 
			 <a class="btn btn-sm btn-icon btn-info" target="_blank"  href="<?php if(isset($movie[0]->linkedin)){echo $movie[0]->linkedin; } ?>">
			 <i class="fa fa-linkedin"></i>
			 </a>
			 </p>
		 </li>
		 </ul>
		 
	
                            </div>
                          </div>
                          
                        </div>
                        
                      </article>
                     
					  <?php $i=0; if($post){ foreach($post as $fds) { $i++; ?>
                       <article class="timeline-item timelinefeed <?php if($i%2==0){echo "";} else {echo "alt";}?>">
                        <input type="hidden" class="ifinder" value="<?php echo $i;?>"/>
                        <div class="timeline-caption">
                          <?php
						  $CI =& get_instance();
						  $movieis=$CI->user_model->get_this_movie($fds->mid);
						  $share_for='moviepost';
						  $count_shares=$CI->user_model->get_this_share_count($share_for,$fds->mpid);
						  
						  ?>
                          <div class="panel panel-default">
                            
                            <div class="panel-body">
                              <table style="margin-bottom:20px;">
							  <tr>
							  <td>
							  <a href="<?php echo base_url();?>index.php/moviefolio/movie?id=<?php echo $movieis[0]->mid; ?>&&name=<?php echo $movieis[0]->name; ?>"><img class="60-border" src="<?php echo base_url();?>uploads/movie_main/thumb_small/<?php if(isset($movieis[0]->image) && $movieis[0]->image!=''){echo $movieis[0]->image; }else{ echo "moviedummy.jpg"; } ?>" title="<?php echo $movieis[0]->name; ?>" alt="<?php echo $movieis[0]->name; ?>" style="height:60px;width:60px;border:3px solid #FFC333;">
							  </a>
							 </td>
							  <td>
							  <a href="<?php echo base_url();?>index.php/moviefolio/movie?id=<?php echo $movieis[0]->mid; ?>&&name=<?php echo $movieis[0]->name; ?>"><label class="label bg-success m-l-xs" style="cursor:pointer;">
            <?php echo $movieis[0]->name; ?> </label></a>
							 
							  </td>
							  </tr>
							  </table>
							  <hr/>
                              <span class="arrow <?php if($i%2==0){echo "left";} else {echo "right";}?>">
                              </span>
                              
                              <span class="timeline-icon">
                                <i class="fa fa-bars time-icon bg-primary">
                                </i>
                              </span>
                              
                              <span class="timeline-date">
                                <?php $post_date =  $fds->postdate;
								$CI =& get_instance();
								$dsend=$CI->user_model->ago($fds->postdate);
								echo $dsend;
								?>
                              </span>
                              
                                <span>
                                  <h5 style="font-weight:bold;padding-bottom:10px;color:#000;"><?php echo $fds->post_title; ?><h5>
                                </span>
								<?php if($fds->post_text!=''){ ?>
								<span style="padding-bottom:10px;">
								<p>
								
								<?php echo $fds->post_text; ?>
								</p>
								</span>
								<?php } ?>
								<?php if($fds->post_image!=''){ ?>
                                <img style="width:100%;margin-bottom:10px;" src="<?php echo base_url();?>uploads/moviepost/<?php echo $fds->post_image; ?>"/>
                                <?php } ?>
								
							   <div class="small-sp"></div>
								<?php if($fds->post_video!=''){ ?>
								<div  class="videocontainer" rel='<?php echo html_entity_decode($fds->post_video); ?>'>
                                  
								  <img src="<?php echo base_url();?>images/youtube.png" style="cursor: pointer;width:100%;" />
								   
								</div>   
								
							   <?php } ?>
							  </h5>
							    <div class="small-sp"></div>
								  <div class="small-sp"></div>
								    <div class="small-sp"></div>
							    <?php
								$usid=$this->session->userdata('user_id');
								if($this->session->userdata('logged_in',true) && $this->session->userdata('user_type')=='P')  {
								$sharetypeis='moviepost';
								$sharecheck=$CI->user_model->check_share($sharetypeis,$usid,$fds->mpid);
								?>
							  
								<?php if($sharecheck==0) {?>
							
								<button class="btn btn-info cntnt movpostshare btn-xs" rel="<?php echo $fds->mpid;?>">Share<label class="label shr-label bg-danger points" rel="<?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?>"><?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?></label></button></td>
							  
							  <?php } else { ?>
							  
							  <button class="btn btn-info btn-xs">
							  <i class="fa fa-check ">
                              </i>
							  Shared<label class="label shr-label label-danger points"><?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?></label>
						    </button>
							  
							  <?php } ?>
							  
							 
							  <?php } ?>
						 
							&nbsp;<a href="<?php echo base_url();?>index.php/feeds/page?id=<?php echo $fds->mpid; ?>" class="btn btn-dark btn-xs pull-right">View Large</a>
                            
                            </div>
                            
                          </div>
                          
                        </div>
                        
                      </article>
					  <?php } } else { ?>
					  <article class="timeline-item">
                        
                        <div class="timeline-caption">
                          
                          <div class="panel panel-default">
                            
                            <div class="panel-body">
					  Oops! No Posts in the shootline!
					        </div>
					     </div>
					   </div>
					  </article>
					  <?php } ?>
                      
                      
                      
                      <div class="timeline-footer">
                        <a href="#">
                          <i class="fa fa-plus time-icon inline-block bg-dark">
                          </i>
                        </a>
                      </div>
                      
                    </div>
					<div class="col-sm-6 col-sm-offset-3">
                    	<?php if($post){
						if($total_data<=5){?>
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block hideme"><strong>End of posts</strong></button> 
					</div>
					
					<?php }
					else if($total_data>5){?>
					
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block mvloadmore hideme"><strong>Load more posts</strong></button> 
					</div>
					<img src="<?php echo base_url();?>images/loader.gif" style="display:none;" class="pull-center loader-img">
					<?php } }?>
					</div>
                  </section>
                 
 <div class="spacer"></div> <div class="spacer"></div>
                </section>
                
              </aside>
              
              <!-- /.aside -->
              
              <!-- .aside -->
               <aside class="aside-lg bg-white b-l hide" id="aside" >
                
                <div class="wrapper" style="position:fixed;">
                  
                  <h4 class="m-t-none">
                    Shootline
                  </h4>
                  
                  <form data-validate="parsley" action="<?php echo base_url();?>index.php/moviefolio/post_moviefolio?id=<?php echo $this->session->userdata('movie_id'); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="curnt_user" value="<?php if($movie) { echo $movie[0]->mid; } ?>" />
					<input type="hidden" name="movie_name" value="<?php if($movie) { echo $movie[0]->name; } ?>" />
                    <div class="form-group">
                      
                      <label>
                        Post Tile
                      </label>
                      
                      <input type="text" name="post_title" data-required="true" placeholder="" class="input-sm form-control">
                      
                    </div>
                    
                    <div class="form-group">
                      
                      <label>
                        Post Text
                      </label>
                      
                      <textarea  placeholder="" name="post_text" class="datepicker input-sm form-control"></textarea>
                      
                    </div>
                    
                    <div class="form-group">
                      
                      <label>
                        Youtube Video URL
                      </label>
                      
                      <input type="text" name="post_video" placeholder="" class="input-sm form-control">
                      
                    </div>
                    
                    <div class="form-group"> 
					<label>
                       Add a Photo
                      </label>

 <input type="file" name="post_img" data-classinput="form-control inline input-s" data-classbutton="btn btn-default" data-icon="false" class="filestyle" id="filestyle-0" style="position: fixed; left: -500px;">
 
 

 </div>
                    
                    <div class="m-t-lg">
                      <button type="submit" name="movie_post" class="btn btn-sm btn-default">
                        Post
                      </button>
                    </div>
                    
                  </form>
                  
                </div>
                
              </aside>
              
              
             <style>
			 
			 iframe
{

width:100% !important;
}
			 </style>
			 	<script>
	
	
	$("#mlike").one('click',function()
	{
	
   loguser=$("#loguser").val();
   movie=$("#movieid").val();
   moviename=$("#moviename").val();
  
	$.post("<?php echo base_url();?>index.php/moviefolio/add_movie_like",{loguser:loguser,movie:movie},function(response)
	{
		if(response)
		{
			location.href ="<?php echo base_url();?>index.php/moviefolio/movie?id="+movie+"&&name="+moviename;
		}
		else
		{
		}
	}
	
	);
	
	}
	
	);
	

	$("#mlove").one('click',function()
	{
	
   loguser=$("#loguser").val();
   movie=$("#movieid").val();
   moviename=$("#moviename").val();
  
	$.post("<?php echo base_url();?>index.php/moviefolio/add_movie_love",{loguser:loguser,movie:movie},function(response)
	{
		if(response)
		{
			location.href ="<?php echo base_url();?>index.php/moviefolio/movie?id="+movie+"&&name="+moviename;
		}
		else
		{
		}
	}
	
	);
	
	}
	
	);


$("#mnotlike").one('click',function()
	{
	
  loguser=$("#loguser").val();
   movie=$("#movieid").val();
   moviename=$("#moviename").val();
	$(this).attr('id','');
	$.post("<?php echo base_url();?>index.php/moviefolio/delete_movie_like",{loguser:loguser,movie:movie},function(response)
	{
		if(response)
		{
			location.href ="<?php echo base_url();?>index.php/moviefolio/movie?id="+movie+"&&name="+moviename;
		}
		else
		{
		}
	}
	
	);
	
	}
	
	);
	
$("#mnotlove").one('click',function()
	{
	
  loguser=$("#loguser").val();
  movie=$("#movieid").val();
   moviename=$("#moviename").val();
	$(this).attr('id','');
	$.post("<?php echo base_url();?>index.php/moviefolio/delete_movie_love",{loguser:loguser,movie:movie},function(response)
	{
		if(response)
		{
			location.href ="<?php echo base_url();?>index.php/moviefolio/movie?id="+movie+"&&name="+moviename;
		}
		else
		{
		}
	}
	
	);
	
	}
	
	);

	$("#movshare").one("click",function()
	{
		sharetype='movie';
		sharedby=$("#loguser").val();
		shareid=$("#movieid").val();
		moviename=$("#moviename").val();
		$.post("<?php echo base_url();?>index.php/moviefolio/share_movie",{sharetype:sharetype,sharedby:sharedby,shareid:shareid},function(response)
	{
		if(response)
		{
			location.href ="<?php echo base_url();?>index.php/moviefolio/movie?id="+shareid+"&&name="+moviename;
		}
		else
		{
		}
	}
	
	);
	}
	);
	
	
	$('.mvloadmore').one('click',function()
	{
		$('.loader-img').show();
		flagdata=$('.ifinder').last().val();
		flagger=$('.flagstopper').val();
		timelinecount=$('.timelinefeed').length;
		movieis=$("#movieid").val();
		remaining_data=parseInt(flagger)-parseInt(timelinecount);
		$('.mvloadmore').text('Loading...');
	
	if(timelinecount<flagger)
		{
				
					   limit=5;
					
			   $.post("<?php echo base_url();?>index.php/feeds/get_this_movie_feed_data",{timelinecount:timelinecount,flagdata:flagdata,limit:limit,movieis:movieis},function(response)
			   {
			  		
						if(response)
						{
							
							$('.timelinefeed').last().after(response);
							if($('.timelinefeed').length==flagger)
							{
								$('.btn-cont').html('<button class="btn btn-success btn-block"><strong>End of Posts</strong></button>');
								
								$('.loader-img').hide();
							}
							else
							{
								$('.mvloadmore').html('<strong>Load more posts</strong>');
								$('.loader-img').hide();
							}
						}
						
						
			   }
	   );
	   }
	   else
	   {
			$('.mvloadmore').html('<strong>Load more posts</strong>');
	   }
	   
	}
	);

	</script>