
<section class="vbox">

      <section>
        
        <section class="hbox stretch">
          
          
          <section id="content">
            
            <section class="hbox stretch">
               <input type="hidden" class="flagstopper" value="
  
					  <?php
						  $CI =& get_instance();
						
							echo $total_data=$CI->user_model->get_one_user_feed_count($user_portfolio[0]->uid);
						
						  ?>
					  "/>
<input type="hidden" class="useris" value="<?php if($user_portfolio){ echo $user_portfolio[0]->uid;} ?>" />	
              <!-- .aside -->
               <?php $usertype= $user_portfolio[0]->type; ?> 
              <aside>
                
                <section class="vbox">
                  
                  <header class="header">
				  
				 
				  <?php if($usertype=='N') { ?>
				  <div class="spacer"></div>
				 <form method="post" action="<?php echo base_url();?>index.php/portfolio/make_portfolio?id=<?php echo $this->session->userdata('user_id'); ?>">
				  <div class="row">
				  <div class="col-md-12 col-md-offset-1" style="margin:25px;">
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
				<?php if(isset($error)){print_r($error);}?>
				  <label class="label bg-success m-l-xs">To start making posts,choose where do you belong to?</label>
				  </div>
				    <div class="col-md-12 col-md-offset-1">
					
				  <?php if($portfolio_type) { foreach($portfolio_type as $ptype){?>
				  <div class="col-sm-3" >
                    <div class="radio">
                                
                                <label class="radio-custom">
                                  
                                  <input type="radio" name="portfolio_type" value="<?php echo $ptype->type;?>">
                                  
                                  <i class="fa fa-circle-o">
                                  </i>
                                 <label class="label bg-success m-l-xs"> <?php echo $ptype->type;?> </label>
                                </label>
                                
                              </div>
							  </div>
							  <?php } } ?>
							  </div>
							  </div>
							   <div class="spacer"></div>
							    <div class="col-md-10 col-md-offset-1" >
							    <input type="submit"  class="btn btn-sm btn-warning pull-right" value="Make my portfolio">
							   </div>
							  <div class="spacer"></div>
							  <div class="spacer"></div>
                  </form>
                     
                    <?php } else { ?>
						
						<?php
						
						$usid=$this->session->userdata('user_id');
					    if($this->session->userdata('logged_in',true) && $usid==$user_portfolio[0]->uid) { ?>
						<a href="#aside" data-toggle="class:show" class="btn btn-sm btn-warning pull-right">
                        Make a Post
                        </a>
						<?php } ?>
					<?php } ?>
                    
                  </header>
                    <?php if($usertype=='P') { ?>
					<div class="col-md-6 col-md-offset-1" >
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
				</div>
				<div class="col-md-10 col-md-offset-1" >
                  <section class="scrollable wrapper">
                    
                    <div class="timeline" id="tmline">
                      
                       <article class="timeline-item active">
                        
                        <div class="timeline-caption">
                          
                          <div class="panel bg-primary lter no-borders">
                            
                          <div class="panel-body">
						  
						   <?php

								  $userid=$this->session->userdata('user_id');
								  if($this->session->userdata('logged_in',true) && $userid==$user_portfolio[0]->uid) { 
					       
						   ?>
		  
		  
		  
						  <a class="pull-right" data-title="Edit my profile" data-placement="left" data-toggle="tooltip" href="<?php echo base_url();?>index.php/portfolio/edit_portfolio?id=<?php echo $this->session->userdata('user_id'); ?>" title="Edit Profile"> <i class="fa fa-pencil "></i> </a>
						 
                          
						  <?php } ?>

						 <strong class="block">
                          <?php if(isset($user_portfolio[0]->name)){echo $user_portfolio[0]->name; } ?>
                          </strong>
						  
                              <hr/>
							  
							  
							  <section class="comment-list block">
  
  <article class="comment-item" id="comment-id-1">
    
    <span class="fa-stack pull-left m-l-xs">
      
      <i class="fa fa-circle text-danger fa-stack-2x">
      </i>
      
      <i class="fa fa-user text-white fa-stack-1x">
      </i>
      
    </span>
    
    <section class="comment-body m-b-lg">
      
      <header>
        
        <a href="#">
          <strong>
           <?php if(isset($user_portfolio[0]->desig)){echo $user_portfolio[0]->desig; } ?>
          </strong>
        </a>
        at
        <a class="text-info" href="#">
          <?php if(isset($user_portfolio[0]->industry)){echo $user_portfolio[0]->industry; } ?>
        </a>
        
        <span class="text-muted text-xs">
         
        </span>
        
      </header>
      <div>I'm  <strong>
              <?php if(isset($user_portfolio[0]->gender)){if($user_portfolio[0]->gender=='M'){ echo "Male"; } else { echo "Female";}} ?>
            </strong>, <strong><?php if(isset($user_portfolio[0]->dob)){
							  
								  $dobis=$user_portfolio[0]->dob;
								  $current_time = time();
								  $curdt=date("Y-m-d", $current_time);
                                  $dob=date_diff(date_create($dobis), date_create($curdt));
								  $age=$dob->y; 
								  echo $age ." ". "years old" ; 
							  } 
							  
							  ?></strong> and currently working as  <label class="label bg-warning m-l-xs"><?php if(isset($user_portfolio[0]->current_job)){echo $user_portfolio[0]->current_job; } ?></label>
       </div>
      
      
    </section>
    
  </article>
  
  <!-- .comment-reply -->
  
  <article class="comment-reply" id="comment-id-2">
    
    <article class="comment-item">
      
      
      
      <section class="comment-body m-b-lg">
        
        <header>
          
         <img src="<?php echo base_url();?>uploads/users/<?php if(isset($user_portfolio[0]->profile_img) && $user_portfolio[0]->profile_img!=''){echo $user_portfolio[0]->profile_img; }else{ if($user_portfolio[0]->gender=='M'){ echo "mdummy.jpg";}else{echo "fdummy.jpg";} } ?>" style="background:#ffffff; padding:5px;width:100%;">
		
          
         
          
        </header>
        
       
        
      </section>
      
    </article>
    
  </article>
  
  <!-- / .comment-reply -->
  
  <article class="comment-item" id="comment-id-2">
    
    <span class="fa-stack pull-left m-l-xs">
      
      <i class="fa fa-circle text-success fa-stack-2x">
      </i>
      
      <i class="fa fa-smile-o text-white fa-stack-1x">
      </i>
      
    </span>
    
    <section class="comment-body m-b-lg">
      
      <header>
        
          <?php
				 
								$usid=$this->session->userdata('user_id');
								if($this->session->userdata('logged_in',true) && $usid!=$user_portfolio[0]->uid) { ?>
										 <?php $CI =& get_instance();
											   $this_user_likes=$CI->get_this_user_likes($usid,$user_portfolio[0]->uid);
											   $this_user_loves=$CI->get_this_user_loves($usid,$user_portfolio[0]->uid);
											   $user_likes=$CI->get_this_user_total_likes($user_portfolio[0]->uid);
											   $user_loves=$CI->get_this_user_total_loves($user_portfolio[0]->uid);
										  ?>
										  <input type="hidden" id="loguser" value="<?php echo $usid; ?>"/>
										   <input type="hidden" id="enduser" value="<?php echo $user_portfolio[0]->uid; ?>"/>
										  <?php if($this_user_loves==0) { ?>
								<button class="btn btn-default" id="love" data-title="Love" data-placement="bottom" data-toggle="tooltip"> 
							   <span class="text">  <i class="fa fa-heart  text-danger"></i>  <?php echo $user_loves; ?> </span> 
							   </button>	
										<?php } else { ?>	
											<button class="btn btn-default" id="notlove" data-title="Unlove" data-placement="bottom" data-toggle="tooltip"> 
										   <span class="text">  <i class="fa fa-heart-o text"></i>  <?php echo $user_loves; ?> </span> 
										   </button>
										<?php } ?>
										
								<?php if($this_user_likes==0) { ?>		
							   <button class="btn btn-default" id="like" data-title="Like" data-placement="bottom" data-toggle="tooltip"> 
							   <span class="text"> <i class="fa fa-thumbs-up text-success"></i> <?php echo $user_likes; ?> </span> 
							   </button>
							   <?php } else { ?>
								 <button class="btn btn-default" id="notlike" data-title="Unlike" data-placement="bottom" data-toggle="tooltip"> 
							   <span class="text"> <i class="fa fa-thumbs-down text-danger"></i> <?php echo $user_likes; ?> </span> 
							   </button>
							   <?php } ?>
							   
							   
							   
								<?php } else { ?>
									<?php $CI =& get_instance();
								
											   $user_likes=$CI->get_this_user_total_likes($user_portfolio[0]->uid);
											   $user_loves=$CI->get_this_user_total_loves($user_portfolio[0]->uid);
										  ?>
								   <button class="btn btn-default" style="cursor:default;" data-title="Loves" data-placement="bottom" data-toggle="tooltip"> 
								   <span class="text">  <i class="fa fa-heart  text-danger"></i>  <?php echo $user_loves; ?>  </span> 
								   </button>		
								   <button class="btn btn-default" style="cursor:default;" data-title="Likes" data-placement="bottom" data-toggle="tooltip"> 
								   <span class="text"> <i class="fa fa-thumbs-up text-success"></i> <?php echo $user_likes; ?>  </span> 
								   </button>
								
								<?php } ?>
        
      <span>
	  </span>
        
      </header>
      
     <div></div>
      
    </section>
    
  </article>
  <article class="comment-item" id="comment-id-2">
    
    <span class="fa-stack pull-left m-l-xs">
      
      <i class="fa fa-circle text-info fa-stack-2x">
      </i>
      
      <i class="fa fa-chain text-white fa-stack-1x">
      </i>
      
    </span>
    
    <section class="comment-body m-b-lg">
      
      <header>
        
          <ul style="list-style:none;margin-left:-47px;">
		 <li>
			 <p id="social-buttons"> 
			 <a class="btn btn-sm btn-icon btn-info" target="_blank" href="<?php if(isset($user_portfolio[0]->twitter)){echo $user_portfolio[0]->twitter; } ?>">
			 <i class="fa fa-twitter"></i>
			 </a>
			 <a class="btn btn-sm btn-icon btn-info" target="_blank"  href="<?php if(isset($user_portfolio[0]->facebook)){echo $user_portfolio[0]->facebook; } ?>">
			 <i class="fa fa-facebook"></i>
			 </a> 
			 <a class="btn btn-sm btn-icon btn-info" target="_blank"  href="<?php if(isset($user_portfolio[0]->google)){echo $user_portfolio[0]->google; } ?>">
			 <i class="fa fa-google-plus"></i>
			 </a> 
			 <a class="btn btn-sm btn-icon btn-info" target="_blank"  href="<?php if(isset($user_portfolio[0]->linkedin)){echo $user_portfolio[0]->linkedin; } ?>">
			 <i class="fa fa-linkedin"></i>
			 </a>
			 </p>
		 </li>
		 </ul>
        
      <span>
	  </span>
        
      </header>
      
     <div></div>
      
    </section>
    
  </article>
   <article class="comment-item" id="comment-id-2">
                                   
                                   <span class="fa-stack pull-left m-l-xs">
                                     
                                     <i class="fa fa-circle text-warning fa-stack-2x">
                                     </i>
                                     
                                     <i class="fa fa-clock-o text-white fa-stack-1x">
                                     </i>
                                     
                                   </span>
                                   
                                   <section class="comment-body m-b-lg">
                                     
                                     <header>
                                       
                                       <a href="#">
                                         <strong>
                                           Last updated
                                         </strong>
                                       </a>
                                       
                                       
                                       
                                     </header>
                                     
                                     <div>
                                       <strong>
                                         
                                       </strong>
                                       <?php if($post)
												{		
												
												$last_update= reset($post); 
												$CI =& get_instance();
												$lupdate=$CI->user_model->ago($last_update->post_date);
													echo $lupdate;
													}
													else
													{
													 echo "No updates";
													}
									  ?>
                                     </div>
                                     
                                   </section>
                                   
                                 </article>
</section>
							
	 <a class="btn btn-sm btn-default pull-right" data-title="Click to know more about <?php echo $user_portfolio[0]->name; ?>" data-placement="left" data-toggle="tooltip" href="<?php echo base_url();?>index.php/portfolio/about?id=<?php if(isset($user_portfolio[0]->uid)){echo $user_portfolio[0]->uid; } ?>"> 
							  <i class="fa fa-plus text"></i> <span class="text">More About Me</span> 
							  </a>						
							 
                              
		 <label class="label label-warning user_points" rel="<?php if(isset($user_portfolio[0]->points)){echo $user_portfolio[0]->points; } ?>"><?php if(isset($user_portfolio[0]->points)){echo $user_portfolio[0]->points; } ?></label><label class="label label-success">Points</label>
                            </div>
                            
                          </div>
                          
                        </div>
                        
                      </article>
                      <?php $i=0; if($post){ foreach($post as $pos) { $i++; ?>
                      <article class="timeline-item timelinefeed <?php if($i%2==0){echo "";} else {echo "alt";}?>">
                         <input type="hidden" class="ifinder" value="<?php echo $i;?>"/>
                        <div class="timeline-caption">
                          <?php
						  $CI =& get_instance();
						  $share_for='userpost';
						  $count_shares=$CI->user_model->get_this_share_count($share_for,$pos->upid);
						  ?>
                          <div class="panel panel-default">
                            
                            <div class="panel-body">
                              
								<?php

								  $userid=$this->session->userdata('user_id');
								  if($this->session->userdata('logged_in',true) && $userid==$user_portfolio[0]->uid) { 
					       
						        ?>
								 <div class="btn-group pull-right">
  
									  <button data-toggle="dropdown" class="btn btn-dark dropdown-toggle">
										
										<span class="caret">
										</span>
									  </button>
									  
									  <ul class="dropdown-menu">
										<li>
										 <a  data-title="Edit this post" data-placement="left" data-toggle="tooltip" href="<?php echo base_url();?>index.php/portfolio/edit_user_post?id=<?php echo $this->session->userdata('user_id'); ?>&&post=<?php echo $pos->upid; ?>" title="Edit Post">Edit</a>
									   </li>
									   	<li>
										 <a  data-title="Delete this post" data-placement="left" data-toggle="tooltip" href="<?php echo base_url();?>index.php/portfolio/delete_post?post=<?php echo $this->session->userdata('user_id'); ?>&&<?php echo $pos->upid; ?>" title="Delete Post">Delete</a>
								 
										</li>
									</ul>	
							     </div>
								 
						       <?php } ?>
							    <table style="margin-bottom:20px;">
							  <tr>
							  <td>
							  <a href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $user_portfolio[0]->uid; ?>">
							 <img class="img-circle"  src="<?php echo base_url();?>uploads/users/thumb_small/<?php if($user_portfolio[0]->profile_img!=''){echo $user_portfolio[0]->profile_img; }else{ if($user_portfolio[0]->gender=='M'){ echo "avatar_default.jpg";}else{echo "favatar_default.jpg";} } ?>">
            
							 </a>
							 </td>
							  <td>
							  <a href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $user_portfolio[0]->uid; ?>"><label class="label bg-success m-l-xs" style="cursor:pointer;">
            <?php echo $user_portfolio[0]->name; ?> </label></a>
							
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
                               
								 <?php 
								$CI =& get_instance();
								$dsend=$CI->user_model->ago($pos->post_date);
								echo $dsend;
								
								?>
                              </span>
                               
                               <span>
                                  <h5 style="font-weight:bold;padding-bottom:2px;color:#000;"><?php echo $pos->post_title; ?><h5>
                                </span>
								<?php if($pos->post_text!=''){ ?>
								<span style="padding-bottom:8px;">
								<p>
								
								<?php echo $pos->post_text; ?>
								</p>
								</span>
								<?php } ?>
								<?php if($pos->post_image!=''){ ?>
                                <img style="width:100%;" src="<?php echo base_url();?>uploads/user_post/<?php echo $pos->post_image; ?>"/>
                                <?php } ?>
								 <div class="small-sp"></div>
								<?php if($pos->post_video!=''){ ?>
								<div  class="videocontainer" rel='<?php echo html_entity_decode($pos->post_video); ?>'>
                                  
								  <img src="<?php echo base_url();?>images/youtube.png" style="cursor: pointer;width:100%;" />
								   
								</div>   
								<div class="small-sp"></div>
								  <div class="small-sp"></div>
								    <div class="small-sp"></div>
							   <?php } ?>
							  </h5>
							  <input type="hidden" class="userlog" value="<?php echo $this->session->userdata('user_id');?>" />
							  <div class="small-sp"></div>
                              <?php
								$usid=$this->session->userdata('user_id');
								if($this->session->userdata('logged_in',true) && $this->session->userdata('user_type')=='P')  {
								$sharetypeis='userpost';
								$sharecheck=$CI->user_model->check_share($sharetypeis,$usid,$pos->upid);
								?>
							  
								<?php if($sharecheck==0) {?>
							
								<button class="btn btn-info cntnt userpostshare btn-xs" rel="<?php echo $pos->upid;?>">Share<label class="label shr-label bg-danger points" rel="<?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?>"><?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?></label>
						</button></td>
							  
							  <?php } else { ?>
							  
							  <button class="btn btn-info btn-xs" data-title="You shared this post within loop" data-placement="right" data-toggle="tooltip">
							  <i class="fa fa-check ">
                              </i>
							  Shared <label class="label shr-label label-danger points"><?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?></label>
						             </button>
							  
							  <?php } ?>
							  
							 
							  
							  <?php } ?>
							  &nbsp;<a href="<?php echo base_url();?>index.php/portfolio/page?id=<?php echo $pos->upid; ?>" class="btn btn-dark btn-xs pull-right">View Large</a>
                        
                            </div>
                            
                          </div>
                          
                        </div>
                        
                      </article>
					  <?php } } else { ?>
					  <article class="timeline-item">
                        
                        <div class="timeline-caption">
                          
                          <div class="panel panel-default">
                            
                            <div class="panel-body">
					  Oops! No posts in the feed.
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
					<button class="btn btn-success btn-block usloadmore hideme"><strong>Load more posts</strong></button> 
					</div>
					<img src="<?php echo base_url();?>images/loader.gif" style="display:none;" class="pull-center loader-img">
					<?php } }?>
					</div>
                  </section>
				  </div>
                  <?php } ?>
                </section>
                <div class="spacer"></div>
				 <div class="spacer"></div>
              </aside>
              
              <!-- /.aside -->
              
              <!-- .aside -->
              
                <aside class="aside-lg bg-white b-l hide" id="aside" >
                
                <div class="wrapper" style="position:fixed;">
                  
                  <h4 class="m-t-none">
                    Postline
                  </h4>
                  
                  <form data-validate="parsley" action="<?php echo base_url();?>index.php/portfolio/post_portfolio?id=<?php echo $this->session->userdata('user_id'); ?>" method="post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                      
                      <label>
                       What is your post about?
                      </label>
                      
                      <input type="text" name="post_title" data-required="true" placeholder="" class="input-sm form-control">
                      
                    </div>
                    
                    <div class="form-group">
                      
                      <label>
                        Write something more!
                      </label>
                      
                      <textarea  placeholder="" name="post_text" class="datepicker input-sm form-control"></textarea>
                      
                    </div>
                    
                    <div class="form-group">
                      
                      <label>
                        Youtube Video Embed Code
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
                      <button type="submit" class="btn btn-sm btn-default">
                        Post
                      </button>
                    </div>
                    
                  </form>
                  
                </div>
                
              </aside>
              
              <!-- /.aside -->
              
            </section>
          
          </section>
          
          
        </section>
        
      </section>
      
    </section>
	
    <style>
	.aside-lg
	{
		display:block;
	}
	</style>
<script>
	$('.usloadmore').one('click',function()
	{
		$('.loader-img').show();
		flagdata=$('.ifinder').last().val();
		flagger=$('.flagstopper').val();
		timelinecount=$('.timelinefeed').length;
		useris=$(".useris").val();
		remaining_data=parseInt(flagger)-parseInt(timelinecount);
		$('.usloadmore').text('Loading...');
	
	if(timelinecount<flagger)
		{
				
					   limit=5;
					
			   $.post("<?php echo base_url();?>index.php/feeds/get_this_user_feed_data",{timelinecount:timelinecount,flagdata:flagdata,limit:limit,useris:useris},function(response)
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
								$('.usloadmore').html('<strong>Load more posts</strong>');
								$('.loader-img').hide();
							}
						}
						
						
			   }
	   );
	   }
	   else
	   {
			$('.usloadmore').html('<strong>Load more posts</strong>');
	   }
	   
	}
	);
	
</script>