 <?php $i=$flag; if($celebrityposts){ foreach($celebrityposts as $cps) { $i++; ?>
                      <article class="timeline-item timlinefeed <?php if($i%2==0){echo "";} else {echo "alt";}?>">
                        <input type="hidden" class="ifinder" value="<?php echo $i;?>"/>
                        <div class="timeline-caption">
                          <?php
						  $CI =& get_instance();
						  $useris=$CI->user_model->get_this_celeb($cps->cid);
						 
						  ?>
                          <div class="panel panel-default">
                            
                            <div class="panel-body">
                              <table style="margin-bottom:20px;">
							  <tr>
							  <td>
							  <a href="<?php echo base_url();?>index.php/celebfolio/celeb?id=<?php echo $cps->cid; ?>&&name=<?php echo $cps->name; ?>">
							
							<img class="img-circle" src="<?php echo base_url();?>uploads/celebs/thumb_small/<?php if($useris){ if($useris[0]->images!=''){echo $useris[0]->images; }else{ if($useris[0]->gender=='M'){ echo "avatar_default.jpg";}else{echo "favatar_default.jpg";} }} ?>">
            
							 </a>
							 </td>
							  <td>
							  <a href="<?php echo base_url();?>index.php/celebfolio/celeb?id=<?php echo $cps->cid; ?>&&name=<?php echo $cps->name; ?>"><label class="label bg-success m-l-xs" style="cursor:pointer;">
            <?php echo $useris[0]->name; ?> </label></a>
							 <p style="padding-left:10px;"><?php echo $useris[0]->type; ?></p>
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
								$dsend=$CI->user_model->ago($cps->post_date);
								echo $dsend;
								?>
                              </span>
                              
                                <span>
                                  <h5 style="font-weight:bold;padding-bottom:10px;color:#000;"><?php echo $cps->post_title; ?><h5>
                                </span>
								<?php if($cps->post_text!=''){ ?>
								<span style="padding-bottom:10px;">
								<p>
								
								<?php echo $cps->post_text; ?>
								</p>
								</span>
								<?php } ?>
								<?php if($cps->post_image!=''){ ?>
                                <img style="width:100%;margin-bottom:10px;" src="<?php echo base_url();?>uploads/celeb_post/<?php echo $cps->post_image; ?>"/>
                                <?php } ?>
								
							    <div class="small-sp"></div>
								<?php if($cps->post_video!=''){ ?>
								<div  class="videocontainer" rel='<?php echo html_entity_decode($cps->post_video); ?>'>
                                  
								  <img src="<?php echo base_url();?>images/youtube.png" style="cursor: pointer;width:100%;" />
								   
								</div>   
								
							   <?php } ?>
							  </h5>
							  <div class="small-sp"></div>
								  <div class="small-sp"></div>
								    <div class="small-sp"></div>
							   <input type="hidden" class="userlog" value="<?php echo $this->session->userdata('user_id');?>" />
							  	<?php
								
									$CI =& get_instance();
									$usid=$this->session->userdata('user_id');
									if($this->session->userdata('logged_in',true) && $this->session->userdata('user_type')=='P')  {
									$sharetypeis='celebritypost';
									$sharecheck=$CI->user_model->check_share($sharetypeis,$usid,$cps->cpid);
									$count_shares=$CI->user_model->get_this_share_count($sharetypeis,$cps->cpid);
								?>
							  
								<?php if($sharecheck==0) {?>
							
								<button class="btn btn-info cntnt celebpostshare btn-xs" rel="<?php echo $cps->cpid;?>">Share
								<label class="label shr-label bg-danger points" rel="<?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?>"><?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?></label>
								</button></td>
							  
							    <?php } else { ?>
							  
								<button class="btn btn-info btn-xs"><i class="fa fa-check ">
                              </i>
                            Shared<label class="label shr-label label-danger points"><?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?></label></button>
							  
								<?php } ?>
							  
							 
								<?php }?>
							  
						    &nbsp;<a href="<?php echo base_url();?>index.php/celebfolio/page?id=<?php echo $cps->cpid; ?>" class="btn btn-dark btn-xs pull-right">View Large</a>
                        
                            </div>
                            
                          </div>
                          
                        </div>
                        
                      </article>
					  <?php } } ?>
					  <script>

$('.cfloadmore').one('click',function()
	{
		$('.loader-img').show();
		urllanguage=$('.urllanguage').val();
		flagdata=$('.ifinder').last().val();
		flagger=$('.flagstopper').val();
		timelinecount=$('.timlinefeed').length;
		remaining_data=parseInt(flagger)-parseInt(timelinecount);
		$('.cfloadmore').text('Loading...');
	
	if(timelinecount<flagger)
		{
				
					   limit=5;
					
			   $.post("<?php echo base_url();?>index.php/feeds/get_celebrity_feed_data",{timelinecount:timelinecount,flagdata:flagdata,limit:limit,urllanguage:urllanguage},function(response)
			   {
			  		
						if(response)
						{
							
							$('.timlinefeed').last().after(response);
							if($('.timlinefeed').length==flagger)
							{
								$('.btn-cont').html('<button class="btn btn-success btn-block"><strong>End of Posts</strong></button>');
								
								$('.loader-img').hide();
							}
							else
							{
								$('.cfloadmore').html('<strong>Load more posts</strong>');
								$('.loader-img').hide();
							}
						}
						
						
			   }
	   );
	   }
	   else
	   {
			$('.cfloadmore').html('<strong>Load more posts</strong>');
	   }
	   
	}
	);
 $(".celebpostshare").one("click",function()
	{
		sharetype='celebritypost';
		sharedby=$(".userlog").val();
		shareid=$(this).attr('rel');
		sharedc=parseInt($(this).find('label').attr('rel'))+1;
		$.post("<?php echo base_url();?>index.php/moviefolio/share_movie",{sharetype:sharetype,sharedby:sharedby,shareid:shareid},function(response)
	{
		if(response)
		{
			
		}
		else
		{
		}
	}
	
	);
	$(this).removeClass('celebritypost');
	$(this).html('<i class="fa fa-check "></i> Shared <label class="label shr-label bg-danger points">'+sharedc+'</label>');	
	}
	);
</script>

