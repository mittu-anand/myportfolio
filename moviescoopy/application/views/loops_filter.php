
<input type="hidden" class="flagstoppers" value="<?php $CI =& get_instance();
echo $total_data=$count_loops;?>"/>
<?php if($loops){ foreach($loops as $loop) { ?>
 
 <?php $CI =& get_instance();
	if($loop->friendid==$current_user)
	{
	$usr=$CI->get_user_from_view($loop->userid);
	}
	else if($loop->userid==$current_user)
	{
		$usr=$CI->get_user_from_view($loop->friendid);
	}
	$user_likes=$CI->get_this_user_total_likes($usr[0]->uid);
	$user_loves=$CI->get_this_user_total_loves($usr[0]->uid);
  ?>
  
  
    <div class="col-sm-3 loopfeed">
    <section class="panel panel-info">
  
  <div class="panel-body">
    
    <a class="thumb pull-right m-l" href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $usr[0]->uid;?>">
      
      <img class="img-circle" style="height:50px;width:50px;" src="<?php echo base_url();?>uploads/users/<?php if(isset($usr[0]->profile_img) && $usr[0]->profile_img!=''){echo $usr[0]->profile_img; }else{ if($usr[0]->gender=='M'){ echo "avatar_default.jpg";}else{echo "favatar_default.jpg";} } ?>">
      
    </a>
    
    <div class="clear">
      
      <a class="text-info" href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $usr[0]->uid;?>">
        <?php echo $usr[0]->name; ?>
        <i class="icon-twitter">
        </i>
      </a>
      <?php
			if($user_likes==0)
			{
				$ulikes='0 Likes';
			}
			else if($user_likes==1)
			{
				$ulikes='1 Like';
			}
			else
			{
				$ulikes=$user_likes.' Likes';
			}
			if($user_loves==0)
			{
				$uloves='0 Loves';
			}
			else if($user_loves==1)
			{
				$uloves='1 Love';
			}
			else
			{
				$uloves=$user_loves.' Loves';
			}
	  ?>
      <small class="block text-muted">
        <?php echo $ulikes;?> / <?php echo $uloves;?>
      </small>
      
      <a class="btn btn-xs btn-success m-t-xs" href="#">
        <?php echo $usr[0]->desig; ?>
      </a>
      
    </div>
    
  </div>
  
</section>
    </div>
	<?php } }else {?>
	<div class="col-sm-3">	
				<section class="panel panel-default text-sm doc-buttons">
				  
				  <div class="panel-body">
				  
				    <i class="fa fa-search icon">
                            
                            <b class="bg-danger">
                            </b>
                            
                    </i>
						 &nbsp; <strong>No matches found in the loop</strong>
				  </div>
				  
				</section>
				<div class="spacer"></div>
			</div>	
	<?php } ?><br/>
		 <div class="col-sm-4 col-sm-offset-4">
  <?php if($loops){
						if($total_data<=8){?>
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block hideme"><strong>End of loop members</strong></button> 
					</div>
					
					<?php }
					else if($total_data>8){?>
					
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block looploadmore hideme"><strong>Show more loop members</strong></button> 
					</div>
					<img src="<?php echo base_url();?>images/loader.gif" style="display:none;" class="pull-center loader-img">
					<?php } }?>
					<div class="spacer"></div>
					 <div class="spacer"></div>
					</div>
					<script>

$('.looploadmore').one('click',function()
	{
		$('.loader-img').show();
		search=$('.search-loop').val();
		user=$('.loguser').val();
		flagger=$('.flagstopper').val();
		timelinecount=$('.loopfeed').length;
		remaining_data=parseInt(flagger)-parseInt(timelinecount);
		$('.looploadmore').text('Loading...');
	
	if(timelinecount<flagger)
		{
				
					   limit=5;
					
			   $.post("<?php echo base_url();?>index.php/portfolio/get_loop_data",{timelinecount:timelinecount,limit:limit,search:search,user:user},function(response)
			   {
			  		
						if(response)
						{
							$('.loopfeed').last().after(response);
							if($('.loopfeed').length==$('.flagstoppers').val())
							{
								$('.btn-cont').html('<button class="btn btn-success btn-block"><strong>End of loop members</strong></button>');
								
								$('.loader-img').hide();
							}
							else
							{
								$('.looploadmore').html('<strong>Show more loop members</strong>');
								$('.loader-img').hide();
							}
						}
						
						
			   }
	   );
	   }
	   else
	   {
			$('.looploadmore').html('<strong>Show more loop members</strong>');
	   }
	   
	}
	);

</script>  