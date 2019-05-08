	  <?php $i=$flag; if($post){ foreach($post as $fds) { $i++; ?>
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
					  <?php } }
					  ?>

<script>
$('.mvloadmore').one('click',function()
	{
		$('.loader-img').show();
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
					  $(".movpostshare").one("click",function()
	{
		sharetype='moviepost';
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
	$(this).removeClass('movpostshare');
	$(this).html('<i class="fa fa-check "></i> Shared <label class="label shr-label bg-danger points">'+sharedc+'</label>');
	}
	);
	</script>