<?php $i=$flag; if($post){ foreach($post as $pos) { $i++; ?>
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
							 <img class="img-circle" src="<?php echo base_url();?>uploads/users/thumb_small/<?php if($user_portfolio[0]->profile_img!=''){echo $user_portfolio[0]->profile_img; }else{ if($user_portfolio[0]->gender=='M'){ echo "avatar_default.jpg";}else{echo "favatar_default.jpg";} } ?>">
            
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
					  <?php } }?>
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