      <section id="content">
        
        <section class="vbox">
          
          <section>
            
            <section class="hbox stretch">
              
              <section>
                
                <section class="vbox">
                
				 <section class="scrollable wrapper">
                   
<section class="scrollable wrapper">

  <div class="row">
    <?php if($reviews){ foreach($reviews as $rev) { ?>
	<?php $CI =& get_instance();
	$movie_likes=$CI->user_model->get_this_movie_total_likes($rev->mid);
	$movie_loves=$CI->user_model->get_this_movie_total_loves($rev->mid);
										  ?>
    <div class="col-lg-3 moviefolio">
      
						
      <section class="panel panel-default">
        
        <div class="panel-body">
            <span class="label bg-danger">Review of <?php echo $rev->name; ?></span>
          <div class="clearfix text-center m-t">
          
            <div class="inline">
              
              
                <a href="<?php echo base_url();?>index.php/reviews/review?id=<?php echo $rev->mid; ?>&& name=<?php echo $rev->name; ?>"> <img src="<?php echo base_url();?>uploads/movie_main/<?php echo $rev->image; ?>" style="width:170px;height:240px;" alt="" title="<?php echo $rev->name; ?>"/></a>
								
               
              
              <div class="h4 m-t m-b-xs">
                <a href="<?php echo base_url();?>index.php/reviews/review?id=<?php echo $rev->mid; ?>&& name=<?php echo $rev->name; ?>"><?php echo $rev->name; ?></a>
              </div>
              
              <small class="text-muted m-b">
                <?php echo $rev->language; ?>
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
	
    
  </div>
  
<div class="spacer"></div>
  
</section>

				  
				  
				  </section>
               
                  
                </section>
                
              </section>
              <!---
              <aside class="bg-light lter b-l aside-md">
                
              </aside>---->
              
            </section>
            
          </section>
          
        </section>
        
        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav.html">
        </a>
        
      </section>
      
    </section>
    <script>
 $(window).scroll(function(){
       if($(window).scrollTop() + $(window).height() == $(document).height()) 
   {
        urlstatus=$('.urlstatus').val();
		urllanguage=$('.urllanguage').val();
		limitdata=$('.limitdata').val();
		flagger=$('.flagstopper').val();
		moviefoliocount=$('.moviefolio').length;
		
		if(moviefoliocount<=flagger)
		{
       $.post("<?php echo base_url();?>index.php/moviefolio/get_movie_scroll_data",{urlstatus:urlstatus,urllanguage:urllanguage,limitdata:limitdata},function(response)
	   {
				
			$('.moviefolio').last().after(response);
				newlimit=parseInt(limitdata)+8;
				$('.limitdata').val(newlimit);
				
	   }
	   );
	   }
	   else
	   {
			return false;
	   }
	   
   }
	  
    });
	
</script>
    <!-- Bootstrap -->
    
    <!-- App -->
    <!--
    <script src="js/app.v1.js">
    </script>
    
    <script src="js/app.plugin.js">
    </script>-->
  </body>

</html>