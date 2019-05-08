      <section id="content">
        
        <section class="vbox">
          
<section class="scrollable wrapper">
 <div class="spacer"></div>
  <div class="row">
 <div class="col-lg-12">
			
		<input type="hidden" class="flagstopper" value="
  
  <?php
	  $CI =& get_instance();
	
		echo $total_data=$CI->user_model->get_news_count();
	
	  ?>
  "/>	
 <?php if($news){ foreach($news as $nw) {?>
 <div class="col-sm-4 newsline"> 

 <div class="panel panel-default">
  <div class="panel-body">
  
  
		<a href="<?php echo base_url();?>index.php/newszone/news?id=<?php echo $nw->eid; ?>">
			<img src="<?php echo base_url();?>uploads/news/thumb/<?php echo $nw->images;?>" title="<?php echo $nw->title;?>" alt="<?php echo $nw->title;?>" style="width:100%;height:230px;">
		</a>

               <p>
			    <span class="text-muted m-l-sm pull-right" style="margin:10px;">
					  
					  <i class="fa fa-clock-o">
					  </i>
					   <?php 
								$CI =& get_instance();
								$dsend=$CI->user_model->ago($nw->postedon);
								echo $dsend;
						?>
					  
			    </span>
				</p>
				<br/>
	
			 <h5 class="font-semibold">
				<a href="<?php echo base_url();?>index.php/newszone/news?id=<?php echo $nw->eid; ?>">         
				<?php echo $nw->title;?></a>
			 </h5>
			
			 <p style="padding:10px;">
			 <?php 
			echo substr($nw->description,0,180);?>.....
			 </p>

 
	 
  <a href="<?php echo base_url();?>index.php/newszone/news?id=<?php echo $nw->eid; ?>" class="btn btn-warning btn-xs pull-right">read more</a>
  <input type="hidden" class="userlog" value="<?php echo $this->session->userdata('user_id');?>" />
							  	<?php
									
								$CI =& get_instance();
									$usid=$this->session->userdata('user_id');
									if($this->session->userdata('logged_in',true) && $this->session->userdata('user_type')=='P')  {
									$sharetypeis='news';
									$sharecheck=$CI->user_model->check_share($sharetypeis,$usid,$nw->eid);
									     
						          $count_shares=$CI->user_model->get_this_share_count($sharetypeis,$nw->eid);
						  
								?>
							  
								<?php if($sharecheck==0) {?>
							
								<button class="btn btn-info cntnt newsshare btn-xs" rel="<?php echo $nw->eid;?>">Share<label class="label shr-label bg-danger points" rel="<?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?>"><?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?></label></button></td>
							  
							  <?php } else { ?>
							  
							  <button class="btn btn-info btn-xs"><i class="fa fa-check ">
                              </i>
                            Shared<label class="label shr-label label-danger points"><?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?></label></button>
							  
							  <?php } ?>
							  
							 
							  <?php }?>
	 </div>
	</div>						  
  </div>

<?php } } ?>

  </div>
  </div>
   <div class="col-sm-4 col-sm-offset-4">
  <?php if($news){
						if($total_data<=6){?>
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block hideme"><strong>End of posts</strong></button> 
					</div>
					
					<?php }
					else if($total_data>6){?>
					
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block nfloadmore hideme"><strong>Load more posts</strong></button> 
					</div>
					<img src="<?php echo base_url();?>images/loader.gif" style="display:none;" class="pull-center loader-img">
					<?php } }?>
					</div>
					 <div class="spacer"></div>
  <div class="spacer"></div>
  <div class="spacer"></div>
  <div class="spacer"></div>
</section>

				  
				  
				
               
              
              
            </section>
            
          </section>
          
  <script>

$('.nfloadmore').one('click',function()
	{
		$('.loader-img').show();
		flagger=$('.flagstopper').val();
		timelinecount=$('.newsline').length;
		remaining_data=parseInt(flagger)-parseInt(timelinecount);
		$('.nfloadmore').text('Loading...');
	
	if(timelinecount<flagger)
		{
				
					   limit=6;
					
			   $.post("<?php echo base_url();?>index.php/feeds/get_news_feed_data",{timelinecount:timelinecount,limit:limit},function(response)
			   {
			  		
						if(response)
						{
							
							$('.newsline').last().after(response);
							if($('.newsline').length==flagger)
							{
								$('.btn-cont').html('<button class="btn btn-success btn-block"><strong>End of Posts</strong></button>');
								
								$('.loader-img').hide();
							}
							else
							{
								$('.nfloadmore').html('<strong>Load more posts</strong>');
								$('.loader-img').hide();
							}
						}
						
						
			   }
	   );
	   }
	   else
	   {
			$('.nfloadmore').html('<strong>Load more posts</strong>');
	   }
	   
	}
	);

</script>      