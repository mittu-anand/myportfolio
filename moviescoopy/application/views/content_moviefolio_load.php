 <?php if($movies){ foreach($movies as $mov) { ?>
 <?php $CI =& get_instance();
	$movie_likes=$CI->user_model->get_this_movie_total_likes($mov->mid);
	$movie_loves=$CI->user_model->get_this_movie_total_loves($mov->mid);
										  ?>
    <div class="col-lg-3 moviefolio">
      
						
      <section class="panel panel-default">
        
        <div class="panel-body">
          
          <div class="clearfix text-center m-t">
            
            <div class="inline">
              
              
                <a href="<?php echo base_url();?>index.php/moviefolio/movie?id=<?php echo $mov->mid; ?>&& name=<?php echo $mov->name; ?>"> <img src="<?php echo base_url();?>uploads/movie_main/<?php echo $mov->image; ?>" style="width:170px;height:240px;" alt="" title="<?php echo $mov->name; ?>"/></a>
								
               
              
              <div class="h4 m-t m-b-xs">
                <a href="<?php echo base_url();?>index.php/moviefolio/movie?id=<?php echo $mov->mid; ?>&& name=<?php echo $mov->name; ?>"><?php echo $mov->name; ?></a>
              </div>
              
              <small class="text-muted m-b">
                <?php echo $mov->language; ?>
              </small>
              
            </div>
            
          </div>
          
        </div>
        
        <footer class="panel-footer bg-info text-center">
          
          <div class="row pull-out">
            
            <div class="col-xs-6">
              
              <div class="padder-v">
                
                <span class="m-b-xs h3 block text-white">
                    <?php if($movie_likes==''){echo '0';}else{echo $movie_likes;} ?>
                </span>
                
                <small class="text-muted">
                  Likes
                </small>
                
              </div>
              
            </div>
            
            <div class="col-xs-6 dk">
              
              <div class="padder-v">
                
                <span class="m-b-xs h3 block text-white">
                    <?php if($movie_loves==''){echo '0';}else{echo $movie_loves;} ?>
                </span>
                
                <small class="text-muted">
                  Loves
                </small>
                
              </div>
              
            </div>
            
            
            
          </div>
          
        </footer>
        
      </section>
      
    </div>
	<?php } } ?>
<script>
$('.mloadmore').one('click',function()
	{
		$('.loader-img').show();
		 urlstatus=$('.urlstatus').val();
		urllanguage=$('.urllanguage').val();
		flagger=$('.flagstopper').val();
		timelinecount=$('.moviefolio').length;
		remaining_data=parseInt(flagger)-parseInt(timelinecount);
		$('.mloadmore').text('Loading...');
		
	if(timelinecount<flagger)
		{
				
					   limit=6;
					
			   $.post("<?php echo base_url();?>index.php/moviefolio/get_movie_scroll_data",{timelinecount:timelinecount,urlstatus:urlstatus,urllanguage:urllanguage,limit:limit},function(response)
			   {
			  		
						if(response)
						{
							
							$('.moviefolio').last().after(response);
							if($('.moviefolio').length==flagger)
							{
								$('.btn-cont').html('<button class="btn btn-success btn-block"><strong>End of Posts</strong></button>');
								
								$('.loader-img').hide();
							}
							else
							{
								$('.mloadmore').html('<strong>Load more posts</strong>');
								$('.loader-img').hide();
							}
						}
						
						
			   }
	   );
	   }
	   else
	   {
			$('.mloadmore').html('<strong>Load more posts</strong>');
	   }
	   
	}
	);

</script>