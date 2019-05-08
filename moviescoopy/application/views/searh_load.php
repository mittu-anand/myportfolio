<?php
if($srchh)
{
foreach($srchh as $sr)
{
?>
<div class="searchfd">
<?php if($sr->iden=='U'){?>
<a href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $sr->id; ?>">
<div class="display_box_m" align="left">
<img src="<?php echo base_url();?>uploads/users/thumb_small_sr/<?php if($sr->profile_img!=''){echo $sr->profile_img; }else{  echo "avatar_default.jpg"; } ?>" style="width:50px;height:50px; float:left; margin-right:6px"/>
<strong><?php echo $sr->name; ?></strong>&nbsp;
<br/>
<span style="font-size:11px; color:#ADB9D3"><strong><?php echo 'Portfolio'; ?></strong></span><br/>
<strong class="pull-right"><?php if($sr->industry!=''){ echo $sr->industry.' Industry'; } else { echo "Unknown Industry"; } ?> </strong>
</div>
</a>
<?php } else if($sr->iden=='M') {?>
<a href="<?php echo base_url();?>index.php/moviefolio/movie?id=<?php echo $sr->id; ?>&&name=<?php echo $sr->name; ?>">
<div class="display_box_m" align="left">
<img src="<?php echo base_url();?>uploads/movie_main/thumb_small_sr/<?php if(isset($sr->profile_img) && $sr->profile_img!=''){echo $sr->profile_img; }else{ echo "moviedummy.jpg"; } ?>" title="<?php echo $sr->name; ?>" style="width:50px;height:50px; float:left; margin-right:6px" />
<strong><?php echo $sr->name; ?></strong>&nbsp;
<br/>
<span style="font-size:11px; color:#ADB9D3"><strong><?php echo 'Movie'; ?></strong></span>
<br/>
<strong class="pull-right"><?php if($sr->industry!=''){ echo $sr->industry.' Industry'; } else { echo "Unknown Industry"; } ?> </strong>
</div>
</a>
<?php } else if($sr->iden=='C') {?>
<a href="<?php echo base_url();?>index.php/celebfolio/celeb?id=<?php echo $sr->id; ?>&&name=<?php echo $sr->name; ?>">
<div class="display_box_m" align="left">
<img src="<?php echo base_url();?>uploads/celebs/thumb_small/<?php if($sr->profile_img!=''){echo $sr->profile_img; }else{  echo 'avatar_default.jpg'; } ?>" style="width:50px;height:50px; float:left; margin-right:6px"/>
<strong><?php echo $sr->name; ?></strong>&nbsp;
<br/>
<span style="font-size:11px; color:#ADB9D3"><strong><?php echo 'Celebrity'; ?></strong></span>
<br/>
<strong class="pull-right"><?php if($sr->industry!=''){ echo $sr->industry.' Industry'; } else { echo "Unknown Industry"; } ?> </strong>
</div>
</a>
</div>
<?php }}} ?>
<script>

$('.tsloadmore').one('click',function()
	{
		$('.loader-img').show();
		word=$('.keyword').val();
		keyword=$.trim(word);
		flagger=$('.flagstopper').val();
		timelinecount=$('.searchfd').length;
		remaining_data=parseInt(flagger)-parseInt(timelinecount);
		$('.tsloadmore').text('Loading...');
	
	if(timelinecount<flagger)
		{
				
					   limit=15;
					
			   $.post("<?php echo base_url();?>index.php/feeds/get_all_search_ajax",{timelinecount:timelinecount,limit:limit,keyword:keyword},function(response)
			   {
			  		
						if(response)
						{
						
							$('.searchfd').last().after(response);
							if($('.searchfd').length==flagger)
							{
								$('.btn-cont').html('<button class="btn btn-success btn-block"><strong>End of results</strong></button>');
								
								$('.loader-img').hide();
							}
							else
							{
								$('.tsloadmore').html('<strong>Load more results</strong>');
								$('.loader-img').hide();
							}
						}
						
						
			   }
	   );
	   }
	   else
	   {
			$('.tsloadmore').html('<strong>Load more results</strong>');
	   }
	   
	}
	);

</script>