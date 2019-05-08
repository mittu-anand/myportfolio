<?php $CI =& get_instance();
$usid=$this->session->userdata('user_id'); ?>
<input type="hidden" class="userlog" value="<?php echo $this->session->userdata('user_id');?>" />
<section id="content">
  
  <section class="vbox">
    
    
    
    <section class="hbox stretch">
      <section class="vbox">
        
        <section class="scrollable wrapper">
          <div class="spacer">
          </div>
		  <div class="spacer">
          </div>
          <div class="row">
            
            
            
            <div class="col-sm-8 col-sm-offset-2">
              <section class="vbox">
                <div class="timeline">
                  
                  <article class="timeline-item active">
                    
                    <div class="timeline-caption">
                      
                      <div class="panel bg-primary lter no-borders">
                        
                        <div class="panel-body">
                          
                          <section class=" clearfix bg-warning lter" style="margin-bottom:10px;">
                            
  <div class="panel-body">
    
    <a class="thumb pull-left m-r" href="#">
      <img class="img-circle" style="height:60px;width:60px;" title="<?php if($thiscelebrity){ echo $thiscelebrity[0]->name;} ?>" src="<?php echo base_url();?>uploads/celebs/<?php if($thiscelebrity){ if($thiscelebrity[0]->images!=''){echo $thiscelebrity[0]->images; }else{ if($thiscelebrity[0]->gender=='M'){ echo "avatar_default.jpg";}else{echo "favatar_default.jpg";} }} ?>">
            
      
      
    </a>
    <input type="hidden" class="flagstopper" value="
  
					  <?php
						  $CI =& get_instance();
						
							echo $total_data=$CI->user_model->get_one_celebrity_feed_count($thiscelebrity[0]->cid);
						
						  ?>
					  "/>
<input type="hidden" class="celebrityis" value="<?php if($thiscelebrity){ echo $thiscelebrity[0]->cid;} ?>" />					  
    <div class="clear">
      <strong>
      <a class="text-info" href="#">
       <?php if($thiscelebrity){ echo $thiscelebrity[0]->name;} ?>
      </a>
	  <span></span>
	  </strong>
      
      <small class="block text-muted">
	  <?php 
	  $followers=$CI->user_model->users_following($thiscelebrity[0]->cid);
	  if($followers==0)
	  {
		$flw='0 followers';
	  }
	   else if($followers==1)
	  {
		$flw='1 follower';
	  }
	  else
	  {
		$flw=$followers.' followers';
	  }
	  
		
	 $celeb_share_for='celebrity';
	 $celeb_count_shares=$CI->user_model->get_this_share_count($celeb_share_for,$thiscelebrity[0]->cid);
	  if($celeb_count_shares==0)
	  {
		$celeb_shares='0 share';
	  }
	  else if($celeb_count_shares==1)
	  {
		$celeb_shares='1 share';
	  }
	  else
	  {
		$celeb_shares=$celeb_count_shares.' share';
	  }
	  ?>
        <?php echo $flw;?> / <?php echo $celeb_shares; ?>
      </small>
      
      <?php
								
									
									
									if($this->session->userdata('logged_in',true) && $this->session->userdata('user_type')=='P')  {
									$followcheck=$CI->user_model->check_follow($usid,$thiscelebrity[0]->cid);
									
								?>
							  
								<?php if($followcheck==0) {?>
							
								<button class="btn btn-success cntnt celebfollow btn-xs" rel="<?php echo $thiscelebrity[0]->cid;?>">Follow</button>
							  
							    <?php } else { ?>
							  
								<button class="btn btn-success btn-xs"><i class="fa fa-check ">
                              </i>
                            Follows</button>
							  
								<?php } ?>
							  
							 
								<?php }?>
       	<?php
								
								
									
									if($this->session->userdata('logged_in',true) && $this->session->userdata('user_type')=='P')  {
									$sharetypeis='celebrity';
									$sharecheck=$CI->user_model->check_share($sharetypeis,$usid,$thiscelebrity[0]->cid);
									
								?>
							  
								<?php if($sharecheck==0) {?>
							
								<button class="btn btn-info cntnt celebshare btn-xs" rel="<?php echo $thiscelebrity[0]->cid;?>">Share</button>
							  
							    <?php } else { ?>
							  
								<button class="btn btn-info btn-xs"><i class="fa fa-check ">
                              </i>
                            Shared</button>
							  
								<?php } ?>
							  
							 
								<?php }?>
    </div>
    
  </div>
  
                               </section>
                               
                               
                               <section class="comment-list block">
                                 
                                 <article class="comment-item" id="comment-id-1">
                                   
                                   <span class="fa-stack pull-left m-l-xs">
                                     
                                     <i class="fa fa-circle text-danger fa-stack-2x">
                                     </i>
                                     
                                     <i class="fa fa-file-o text-white fa-stack-1x">
                                     </i>
                                     
                                   </span>
                                   
                                   <section class="comment-body m-b-lg">
                                     
                                     <header>
                                       
                                       <a href="#">
                                         <strong>
                                            <?php if($thiscelebrity){ echo $thiscelebrity[0]->type;} ?>
                                         </strong>
                                       </a>
                                       
                                       
                                       
                                     </header>
                                     
                                     <div>
                                      <?php if($thiscelebrity){ echo $thiscelebrity[0]->industry;} ?> Industry
                                     </div>
                                     
                                   </section>
                                   
                                 </article>
                                 
                                 
                                 
                                 
                                 <article class="comment-item" id="comment-id-2">
                                   
                                   <span class="fa-stack pull-left m-l-xs">
                                     
                                     <i class="fa fa-circle text-success fa-stack-2x">
                                     </i>
                                     
                                     <i class="fa fa-check text-white fa-stack-1x">
                                     </i>
                                     
                                   </span>
                                   
                                   <section class="comment-body m-b-lg">
                                     
                                     <header>
                                       
                                       <a href="#">
                                         <strong>
                                           Verified
                                         </strong>
                                       </a>
                                       
                                       
                                       
                                     </header>
                                     
                                     <div>
                                       <strong>
                                         Profile
                                       </strong>
                                       is verified by moviescoopy
                                     </div>
                                     
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
                                       
                                       <ul style="list-style:none;margin-left:-45px;">
		 <li>
			 <p id="social-buttons"> 
			 <a class="btn btn-sm btn-icon btn-info" target="_blank" href="<?php if($thiscelebrity){echo $thiscelebrity[0]->twitter; } ?>">
			 <i class="fa fa-twitter"></i>
			 </a>
			 <a class="btn btn-sm btn-icon btn-info" target="_blank"  href="<?php if($thiscelebrity){echo $thiscelebrity[0]->facebook; } ?>">
			 <i class="fa fa-facebook"></i>
			 </a> 
			 <a class="btn btn-sm btn-icon btn-info" target="_blank"  href="<?php if($thiscelebrity){echo $thiscelebrity[0]->google; } ?>">
			 <i class="fa fa-google-plus"></i>
			 </a> 
			 <a class="btn btn-sm btn-icon btn-info" target="_blank"  href="<?php if($thiscelebrity){echo $thiscelebrity[0]->linkedin; } ?>">
			 <i class="fa fa-linkedin"></i>
			 </a>
			 </p>
		 </li>
		 </ul>
                                       
                                       
                                       
                                     </header>
                                     
                                     <div>
                                       <strong>
                                         Social Hub
                                       </strong>
                                       
                                     </div>
                                     
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
                                       <?php if($celebrity_posts)
												{		
												
												$last_update= reset($celebrity_posts); 
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
                               
                               
                               
                            </div>
                          </div>
                          
                        </div>
                        
   </article>

   <?php $i=0; if($celebrity_posts){ foreach($celebrity_posts as $cpost) { $i++; ?>
   <article class="timeline-item timelinefeed 
<?php if($i%2==0){echo "";} else {echo "alt";}?>
">
  <input type="hidden" class="ifinder" value="
<?php echo $i;?>
"/>
						  <?php
						  $CI =& get_instance();
						  $share_for='celebritypost';
						  $count_shares=$CI->user_model->get_this_share_count($share_for,$cpost->cpid);
						  ?>
  <div class="timeline-caption">
    
    <div class="panel panel-default">
      
      <div class="panel-body">
         <table style="margin-bottom:20px;">
							  <tr>
							  <td>
							  <a href="<?php echo base_url();?>index.php/celebfolio/celeb?id=<?php echo $thiscelebrity[0]->cid; ?>&&name=<?php echo $thiscelebrity[0]->name; ?>">
							 <img class="img-circle" src="<?php echo base_url();?>uploads/celebs/thumb_small/<?php if($thiscelebrity){ if($thiscelebrity[0]->images!=''){echo $thiscelebrity[0]->images; }else{ if($thiscelebrity[0]->gender=='M'){ echo "avatar_default.jpg";}else{echo "favatar_default.jpg";} }} ?>">
            
							 </a>
							 </td>
							  <td>
							  <a href="<?php echo base_url();?>index.php/celebfolio/celeb?id=<?php echo $thiscelebrity[0]->cid; ?>&&name=<?php echo $thiscelebrity[0]->name; ?>"><label class="label bg-success m-l-xs" style="cursor:pointer;">
            <?php echo $thiscelebrity[0]->name; ?> </label></a>
							
							  </td>
							  </tr>
							  </table>
							  <hr/>
        <span class="arrow 
<?php if($i%2==0){echo "left";} else {echo "right";}?>
">
                              </span>
                              
                              <span class="timeline-icon">
                                <i class="fa fa-bars time-icon bg-primary">
                                </i>
                              </span>
                              
                              <span class="timeline-date">
                                <?php 
								$CI =& get_instance();
								$dsend=$CI->user_model->ago($cpost->post_date);
								echo $dsend;
								?>
                              </span>
                              
                              <span>
                                <h5 style="font-weight:bold;padding-bottom:10px;color:#000;">
                                  <?php echo $cpost->
post_title; ?>
                                    <h5>
                                    </span>
                                    <?php if($cpost->
post_text!=''){ ?>
                                    <span style="padding-bottom:10px;">
                                      <p>
                                        
                                        <?php echo $cpost->
post_text; ?>
                                  </p>
                                    </span>
                                    <?php } ?>
                                    <?php if($cpost->
post_image!=''){ ?>
                                    <img style="width:100%;margin-bottom:10px;" src="
<?php echo base_url();?>
uploads/celeb_post/
<?php echo $cpost->
post_image; ?>
"/>
                                    <?php } ?>
                                 
									 <div class="small-sp"></div>
								<?php if($cpost->post_video!=''){ ?>
								<div  class="videocontainer" rel='<?php echo html_entity_decode($cpost->post_video); ?>'>
                                  
								  <img src="<?php echo base_url();?>images/youtube.png" style="cursor: pointer;width:100%;" />
								   
								</div>   
								
							   <?php } ?>
							  </h5>
							  <div class="small-sp"></div>
								  <div class="small-sp"></div>
								    <div class="small-sp"></div>
                                  </h5>
                                  
                                  
							  	<?php
								
									$CI =& get_instance();
									$usid=$this->session->userdata('user_id');
									if($this->session->userdata('logged_in',true) && $this->session->userdata('user_type')=='P')  {
									$sharetypeis='celebritypost';
									$sharecheck=$CI->user_model->check_share($sharetypeis,$usid,$cpost->cpid);
									
								?>
							  
								<?php if($sharecheck==0) {?>
							
								<button class="btn btn-info cntnt celebpostshare btn-xs" rel="<?php echo $cpost->cpid;?>">Share<label class="label shr-label bg-danger points" rel="<?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?>"><?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?></label></button></td>
							  
							    <?php } else { ?>
							  
								<button class="btn btn-info btn-xs"><i class="fa fa-check ">
                              </i>
                            Shared<label class="label shr-label label-danger points"><?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?></label></button>
							  
								<?php } ?>
							  
							 
								<?php }?>
                            &nbsp;<a href="<?php echo base_url();?>index.php/celebfolio/page?id=<?php echo $cpost->cpid; ?>" class="btn btn-dark btn-xs pull-right">View Large</a>
                              
                         
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
                    	<?php if($celebrity_posts){
						if($total_data<=5){?>
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block hideme"><strong>End of posts</strong></button> 
					</div>
					
					<?php }
					else if($total_data>5){?>
					
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block cbloadmore hideme"><strong>Load more posts</strong></button> 
					</div>
					<img src="<?php echo base_url();?>images/loader.gif" style="display:none;" class="pull-center loader-img">
					<?php } }?>
					</div>
   
  </section>
  
  
          </div>
          
          
          
          
  </div>
  <div class="spacer">
          </div>
		  <div class="spacer">
          </div>
                   </section>
              </section>
              </section>
          </section>
  </section>
 
  
  <script>
   $(".celebshare").one("click",function()
	{
		sharetype='celebrity';
		sharedby=$(".userlog").val();
		shareid=$(this).attr('rel');
		
		$.post("<?php echo base_url();?>index.php/moviefolio/share_movie",{sharetype:sharetype,sharedby:sharedby,shareid:shareid},function(response)
	{
		if(response)
		{
			$(this).removeClass('celebshare');
			$(this).html('<i class="fa fa-check "></i> Shared');
			location.href="";
		}
		else
		{
		}
	}
	
	);
	
	}
	);
	
	
</script>
<script>
   $(".celebfollow").one("click",function()
	{

		followedby=$(".userlog").val();
		followed=$(this).attr('rel');
		
		$.post("<?php echo base_url();?>index.php/celebfolio/follow_celebrity",{followedby:followedby,followed:followed},function(response)
	{
		if(response)
		{
		
			$(this).removeClass('celebfollow');
			$(this).html('<i class="fa fa-check "></i> Follows');
			location.href="";
			
		}
		else
		{
		}
	}
	
	);
	
	}
	);
	
	$('.cbloadmore').one('click',function()
	{
		$('.loader-img').show();
		flagdata=$('.ifinder').last().val();
		flagger=$('.flagstopper').val();
		timelinecount=$('.timelinefeed').length;
		celebrityis=$(".celebrityis").val();
		remaining_data=parseInt(flagger)-parseInt(timelinecount);
		$('.cbloadmore').text('Loading...');
	
	if(timelinecount<flagger)
		{
				
					   limit=5;
					
			   $.post("<?php echo base_url();?>index.php/feeds/get_this_celebrity_feed_data",{timelinecount:timelinecount,flagdata:flagdata,limit:limit,celebrityis:celebrityis},function(response)
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
								$('.cbloadmore').html('<strong>Load more posts</strong>');
								$('.loader-img').hide();
							}
						}
						
						
			   }
	   );
	   }
	   else
	   {
			$('.cbloadmore').html('<strong>Load more posts</strong>');
	   }
	   
	}
	);
</script>	