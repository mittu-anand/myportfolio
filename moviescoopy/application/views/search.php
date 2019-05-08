 <section id="content">
 <section class="vbox">
  
 <section class="hbox stretch">
 <section class="vbox">
 <section class="wrapper">
 <div class="spacer"></div>

  <div class="row"> 
  
<div class="col-md-6 col-md-offset-1">  
<p><strong><i class="fa fa-search icon">
                            
                           
                    </i>  Search results for '<?php echo $_GET['keyword']; ?>'</strong></p>
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
<?php }} ?>

<input type="hidden" class="flagstopper" value="
  
  <?php
	  $CI =& get_instance();
	
	  if(isset($_GET['keyword']))
	  {
		echo $total_data=$CI->user_model->get_all_search_data($_GET['keyword']);
	
	  }
	  
	  ?>
  "/>	
 <input type="hidden" class="keyword" value="
  
  <?php
	  
	
	  if(isset($_GET['keyword']))
	  {
		echo $_GET['keyword'];
	
	  }
	  
	  ?>
  "/>	

<?php
}
else
{
?>
<div class="display_box_m" align="left">
<div class="text-center" style="margin-top:10px;">
<i class="fa fa-search icon">
                            
                           
                    </i>  No search results were found.
</div>
</div>
<?php } ?>
</div>
<div class="col-sm-6 col-sm-offset-3">
						<?php if($srchh){
						if($total_data<=10){?>
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block hideme"><strong>End of results</strong></button> 
					</div>
					
					<?php }
					else if($total_data>10){?>
					
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block tsloadmore hideme"><strong>Load more results</strong></button> 
					</div>
					<img src="<?php echo base_url();?>images/loader.gif" style="display:none;" class="pull-center loader-img">
					<?php } }?>
						</div>

</div>
<div class="spacer"></div>
<div class="spacer"></div>
<div class="spacer"></div>
<div class="spacer"></div>
</section>
</section>
</section>
</section>
</section>
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
				
					   limit=5;
					
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