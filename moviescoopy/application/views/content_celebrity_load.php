   <?php $i=$flag; if($celebrity_posts){ foreach($celebrity_posts as $cpost) { $i++; ?>
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
  <?php } } ?>
  <script>
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