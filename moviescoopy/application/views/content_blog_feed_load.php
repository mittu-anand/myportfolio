  
					  <?php $i=$flag; if($blogs){ foreach($blogs as $blg) { $i++; ?>
                      <article class="timeline-item timlinefeed <?php if($i%2==0){echo "";} else {echo "alt";}?>">
                         <input type="hidden" class="ifinder" value="<?php echo $i;?>"/>
                        <div class="timeline-caption">
                          
                          <div class="panel panel-default">
                            
                            <div class="panel-body">
                              
                              <span class="arrow <?php if($i%2==0){echo "left";} else {echo "right";}?>">
                              </span>
                              
                              <span class="timeline-icon">
                                <i class="fa fa-bold time-icon bg-primary">
                                </i>
                              </span>
                              
                              <span class="timeline-date">
                                <?php 
								 $CI =& get_instance();
							    	$dsend=$CI->user_model->ago($blg->postdate);
								echo $dsend;
								?>
                              </span>
                              
                              
                                <span>
									<label class="label bg-success m-l-xs">
								  <?php echo $blg->stitle; ?>
									</label>
								</span>
                                <span>
                                  <h5 style="font-weight:bold;padding-bottom:10px;padding-top:10px;color:#000;"><?php echo $blg->sname; ?><h5>
								  
                                </span>
								 <img style="width:100%;" src="<?php echo base_url();?>uploads/blogs/<?php echo $blg->image; ?>"/>
								<span style="padding-bottom:8px;">
								<p>
								<?php echo substr($blg->description,0,180);?>.....
								</p>
								</span>
								 <span>
								 <a href="<?php echo base_url();?>index.php/blogzone/blog?id=<?php echo $blg->id; ?>" class="btn btn-warning btn-xs pull-right">
									
								  Read More
									</a>
								</span>
							
                               
                              
							  </h5>
                                 <input type="hidden" class="userlog" value="<?php echo $this->session->userdata('user_id');?>" />
							  	<?php
									
								$CI =& get_instance();
									$usid=$this->session->userdata('user_id');
									if($this->session->userdata('logged_in',true) && $this->session->userdata('user_type')=='P')  {
									$sharetypeis='blog';
									$sharecheck=$CI->user_model->check_share($sharetypeis,$usid,$blg->id);
									 $count_shares=$CI->user_model->get_this_share_count($sharetypeis,$blg->id);
								?>
							  
								<?php if($sharecheck==0) {?>
							
								<button class="btn btn-info cntnt blogshare btn-xs" rel="<?php echo $blg->id;?>">Share<label class="label shr-label bg-danger points" rel="<?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?>"><?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?></label></button>
							  
							  <?php } else { ?>
							  
							  <button class="btn btn-info btn-xs"><i class="fa fa-check ">
                              </i>
                            Shared<label class="label shr-label label-danger points"><?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?></label></button>
							  
							  <?php } ?>
							  
							 
							  <?php }?>
							  
								
								
							 
                            </div>
                            
                          </div>
                          
                        </div>
                        
                      </article>
					  <?php } } ?>
					  
<script>

$('.bfloadmore').one('click',function()
	{
		$('.loader-img').show();
		urlcategory=$('.urlcategory').val();
		flagdata=$('.ifinder').last().val();
		flagger=$('.flagstopper').val();
		timelinecount=$('.timlinefeed').length;
		remaining_data=parseInt(flagger)-parseInt(timelinecount);
		$('.bfloadmore').text('Loading...');
	
	if(timelinecount<flagger)
		{
				
					   limit=5;
					
			   $.post("<?php echo base_url();?>index.php/feeds/get_blog_feed_data",{timelinecount:timelinecount,flagdata:flagdata,limit:limit,urlcategory:urlcategory},function(response)
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
								$('.bfloadmore').html('<strong>Load more posts</strong>');
								$('.loader-img').hide();
							}
						}
						
						
			   }
	   );
	   }
	   else
	   {
			$('.bfloadmore').html('<strong>Load more posts</strong>');
	   }
	   
	}
	);
$(".blogshare").one("click",function()
	{
		sharetype='blog';
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
	$(this).removeClass('blogshare');
	$(this).html('<i class="fa fa-check "></i> Shared <label class="label shr-label bg-danger points">'+sharedc+'</label>');
	}
	);
</script>  