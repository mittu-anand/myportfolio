<?php if($portfolio) { foreach($portfolio as $port) { ?>
	<?php 
	$CI =& get_instance();
	$user_likes=$CI->user_model->get_this_user_total_likes($port->uid);
	$user_loves=$CI->user_model->get_this_user_total_loves($port->uid);
	
	?>
<div class="col-sm-4 portfoliofeed"> <section class="panel panel-default"> <header class="panel-heading bg-danger lt no-border">
 <div class="clearfix"> <a href="#" class="pull-left thumb avatar b-3x m-r">
 
<img class="img-circle" style="height:60px;width:60px;" src="<?php echo base_url();?>uploads/users/<?php if(isset($port->profile_img) && $port->profile_img!=''){echo $port->profile_img; }else{ if($port->gender=='M'){ echo "avatar_default.jpg";}else{echo "favatar_default.jpg";} } ?>">
            
 </a> <div class="clear"> <div class="h3 m-t-xs m-b-xs text-white">
 <a href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $port->uid; ?>">
 <?php echo $port->name;?></a>
 </div> <small class="text-muted"><?php echo $port->desig;?></small> 
 </div> </div> </header> 
 <div class="list-group no-radius alt"> 
 <a class="list-group-item" href="#"> 
 <span class="badge bg-light"><?php echo $port->industry;?></span> <i class="fa fa-eye icon-muted"></i> Industry </a> 

 <a class="list-group-item" href="#"> <span class="badge bg-success">
 <?php if($user_loves){echo $user_loves;}else{echo "0";} ?></span> 
 <i class="fa fa-heart icon-muted"></i> Loves </a> <a class="list-group-item" href="#"> <span class="badge bg-info">
 <?php if($user_likes){echo $user_likes;}else{echo "0";} ?></span> 
 <i class="fa fa-thumbs-up icon-muted"></i> Likes </a> </div> </section>
</div>

<?php } }?>
      
<script>
$('.ploadmore').one('click',function()
	{
		$('.loader-img').show();
        urlportfolio=$('.urlportfolio').val();
		urllanguage=$('.urllanguage').val();
		flagger=$('.flagstopper').val();
		timelinecount=$('.portfoliofeed').length;
		remaining_data=parseInt(flagger)-parseInt(timelinecount);
		$('.ploadmore').text('Loading...');
	if(timelinecount<flagger)
		{
				
					   limit=6;
					
			   $.post("<?php echo base_url();?>index.php/feeds/get_portfolio_data",{timelinecount:timelinecount,limit:limit,urlportfolio:urlportfolio,urllanguage:urllanguage},function(response)
			   {
			  		
						if(response)
						{
							
							$('.portfoliofeed').last().after(response);
							if($('.portfoliofeed').length==flagger)
							{
								$('.btn-cont').html('<button class="btn btn-success btn-block"><strong>End of Posts</strong></button>');
								
								$('.loader-img').hide();
							}
							else
							{
								$('.ploadmore').html('<strong>Load more posts</strong>');
								$('.loader-img').hide();
							}
						}
						
						
			   }
	   );
	   }
	   else
	   {
			$('.ploadmore').html('<strong>Load more posts</strong>');
	   }
	   
	}
	);

</script>