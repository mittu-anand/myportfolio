  <?php if($allcelebs){ foreach($allcelebs as $allceleb) { ?>

    <div class="col-sm-4 timlinefeed">
    <section class="panel panel-info">
  
  <div class="panel-body">
    
    <a class="thumb pull-right m-l" href="<?php echo base_url();?>index.php/celebfolio/celeb?id=<?php echo $allceleb->cid;?>&&name=<?php echo $allceleb->name;?>">
      
      <img class="img-circle"  style="height:50px;width:50px;" src="<?php echo base_url();?>uploads/celebs/<?php if($allceleb->images!=''){echo $allceleb->images; }else{ if($allceleb->gender=='M'){ echo "avatar_default.jpg";}else{echo "favatar_default.jpg";}  }?>">
      
    </a>
    
    <div class="clear">
      
      <a class="text-info" href="<?php echo base_url();?>index.php/celebfolio/celeb?id=<?php echo $allceleb->cid;?>&&name=<?php echo $allceleb->name;?>">
        <?php echo $allceleb->name; ?>
       
      </a>
      
      <small class="block text-muted">
        <?php 
	
		  $CI =& get_instance();
		  $followers=$CI->user_model->users_following($allceleb->cid);
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
	      echo $flw;
	  ?>
      </small>
      
      <a class="btn btn-xs btn-success m-t-xs" href="#">
        <?php echo $allceleb->type; ?>
      </a>
      
    </div>
    
  </div>
  
</section>
    </div>
	<?php } }?>
	<script>
	$('.cbcloadmore').one('click',function()
	{
		$('.loader-img').show();
		urlfilteris=$('.urlfilter').val();
		urlfilter=$.trim(urlfilteris);
		flagger=$('.flagstopper').val();
		timelinecount=$('.timlinefeed').length;
		remaining_data=parseInt(flagger)-parseInt(timelinecount);
		$('.cbcloadmore').text('Loading...');
	
	if(timelinecount<flagger)
		{
				
					   limit=9;
					
			   $.post("<?php echo base_url();?>index.php/feeds/get_celeb_circle_ajax",{timelinecount:timelinecount,limit:limit,urlfilter:urlfilter},function(response)
			   {
			  		
						if(response)
						{
							$('.timlinefeed').last().after(response);
							if($('.timlinefeed').length==flagger)
							{
								$('.btn-cont').html('<button class="btn btn-success btn-block"><strong>End of Celebrities</strong></button>');
								
								$('.loader-img').hide();
							}
							else
							{
								$('.cbcloadmore').html('<strong>More Celebrities</strong>');
								$('.loader-img').hide();
							}
						}
						
						
			   }
	   );
	   }
	   else
	   {
			$('.cbcloadmore').html('<strong>More Celebrities</strong>');
	   }
	   
	}
	);
</script>  
	