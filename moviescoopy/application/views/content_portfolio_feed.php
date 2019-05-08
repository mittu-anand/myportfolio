
<section id="content">
        
        <section class="vbox">
          
         
            
            <section class="hbox stretch">
			<section class="vbox">
                
				 <section class="scrollable wrapper">
				 <div class="spacer"></div>
<div class="row">
  
 
		
		<div class="col-sm-8 col-sm-offset-1">
<section class="vbox">
 <div class="timeline">
                      
                      <article class="timeline-item active">
                        
                        <div class="timeline-caption">
                          
                          <div class="panel bg-primary lter no-borders">
                         
                             <div class="panel-body">
						 

						 <strong class="block">
                         
                          </strong>
						  
                              <h5></h5>
                            
							
								<section class="comment-list block">
								  <section class="comment-list block">
							 <?php if($best_portfolio){ ?>
  <section class="panel bg-dark">
  
  <div id="c-fade" class="carousel slide carousel-fade panel-body">
    
  
    
    <div class="carousel-inner">
      
    
      
      
     
	  <?php $j=0; foreach($best_portfolio as $run) { $j++;?>
       <div class="item <?php if($j==1){echo 'active';}?>">
        
        <p class="text-center">
           <a href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $run->uid; ?>">
           <img  style="width:100%;" title="<?php  echo $run->name; ?>" src="<?php echo base_url();?>uploads/users/<?php  if($run->profile_img!=''){echo $run->profile_img; }else{ if($run->gender=='M'){ echo "avatar_default.jpg";}else{echo "favatar_default.jpg";} } ?>"></a>
       
		  <br/>
          <br/>
          <small class="text-muted">
             <a href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $run->uid; ?>"><?php echo  $run->name; ?></a>
          </small>
          
        </p>
        
      </div>
	  <?php } ?>
    </div>
    
    <a data-slide="prev" href="#c-fade" class="left carousel-control">
      <div class="h1 font-bold m-t-xl m-b-xl">
 <i class="fa fa-angle-left" style="color:#FFB70A;">
      </i>
</div>
     
      
    </a>
    
    <a data-slide="next" href="#c-fade" class="right carousel-control">
      
      <div class="h1 font-bold m-t-xl m-b-xl">
 <i class="fa fa-angle-right" style="color:#FFB70A;">
      </i>
</div>
      
    </a>
    
  </div>
  
</section>
<?php } ?>
  
  <article class="comment-item" id="comment-id-1">
    
    <span class="fa-stack pull-left m-l-xs">
      
      <i class="fa fa-circle text-danger fa-stack-2x">
      </i>
      
      <i class="fa fa-file-o text-white fa-stack-1x">
      </i>
      
    </span>
    
    <section class="comment-body m-b-lg">
      
      <header>
        
        <a href="#">
          <strong>
            Portfolio Feeds
          </strong>
        </a>
        a feed
        <a class="text-info" href="#">
          Page
        </a>
        
      
      </header>
      
      <div>
        where you new talents are showcased!
      </div>
      
    </section>
    
  </article>
  
  
  
 
  <article class="comment-item" id="comment-id-2">
    
    <span class="fa-stack pull-left m-l-xs">
      
      <i class="fa fa-circle text-success fa-stack-2x">
      </i>
      
      <i class="fa fa-check text-white fa-stack-1x">
      </i>
      
    </span>
    
    <section class="comment-body m-b-lg">
      
      <header>
        
        <a href="#">
          <strong>
           Verified
          </strong>
        </a>
        by Moviescoopy
        
        
      </header>
      
      <div>
       <strong>
          originaly
          </strong> authentified by the celebrities!
      </div>
      
    </section>
    
  </article>
   <article class="comment-item" id="comment-id-2">
    
    <span class="fa-stack pull-left m-l-xs">
      
      <i class="fa fa-circle text-warning fa-stack-2x">
      </i>
      
      <i class="fa fa-clock-o text-white fa-stack-1x">
      </i>
      
    </span>
    
    <section class="comment-body m-b-lg">
      
      <header>
        
        <a href="#">
          <strong>
           Last updated
          </strong>
        </a>
       
        
        
      </header>
      
      <div>
       <strong>
          
          </strong>  <?php if($userfeeds)
							{				
							$last_update= reset($userfeeds); 
							$CI =& get_instance();
							$lupdate=$CI->user_model->ago($last_update->post_date);
								echo $lupdate;
								}
								else
								{
								 echo "No updates";
								}
					?>
      </div>
      
    </section>
    
  </article>
    <div class="m-t-sm timeline-action">
	<a class="btn btn-sm btn-default btn-dark" href="<?php echo base_url();?>index.php/portfolio">
	View all portfolio's
     </a>
                           <div class="btn-group">
  
						  <button data-toggle="dropdown" class="btn btn-dark btn-sm dropdown-toggle">
							Language 
							<span class="caret">
							</span>
						  </button>
						  
						  <ul class="dropdown-menu">
						  
							 <?php if($industries) { foreach($industries as $ind) { ?>
    <li>
      <a href="<?php
	  
	   echo base_url().'index.php/portfolio/feed_filter?language='.$ind->industry;
	 
	  ?>">
        <?php echo $ind->industry; ?>
      </a>
    </li>
    
    <?php } } ?>
		
						
						  </ul>
		<input type="hidden" class="urllanguage" value="<?php if(isset($_GET['language'])){ echo $_GET['language'];} ?>"/>
		<input type="hidden" class="limitdata" value="5"/>					
		<input type="hidden" class="flagstopper" value="
  
  <?php
	  $CI =& get_instance();
	
	  if(isset($_GET['language']))
	  {
		echo $total_data=$CI->user_model->get_portfolio_feed_count($_GET['language']);
	
	  }
	  else
	  {
		echo $total_data=$CI->user_model->get_portfolio_feed_count();
	
	  }
	 
	  
	  ?>
  "/>	
						</div>
						 <?php if(isset($_GET['language'])){?>
<strong style="margin:10px;"><?php echo $_GET['language']; ?></strong>

<?php }?>
	</div>
</section>

               
		 
                            </div>
                          </div>
                          
                        </div>
                        
                      </article>
                     
					
                       <?php $i=0; if($userfeeds){ foreach($userfeeds as $uf) { $i++; ?>
                      <article class="timeline-item timlinefeed <?php if($i%2==0){echo "";} else {echo "alt";}?>">
                        <input type="hidden" class="ifinder" value="<?php echo $i;?>"/>
                        <div class="timeline-caption">
                        <?php
						  $CI =& get_instance();
						  $share_for='userpost';
						  $count_shares=$CI->user_model->get_this_share_count($share_for,$uf->upid);
						  ?>
                          <div class="panel panel-default">
                            
                            <div class="panel-body">
                              <table style="margin-bottom:20px;">
							  <tr>
							  <td>
							  <a href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $uf->uid; ?>">
							 <img class="img-circle" style="height:60px;width:60px;" src="<?php echo base_url();?>uploads/users/thumb_small/<?php if($uf->profile_img!=''){echo $uf->profile_img; }else{ if($uf->gender=='M'){ echo "avatar_default.jpg";}else{echo "favatar_default.jpg";} } ?>">
            
							 </a>
							 </td>
							  <td>
							  <a href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $uf->uid; ?>"><label class="label bg-success m-l-xs" style="cursor:pointer;">
            <?php echo $uf->name; ?> </label></a>
							 <p style="padding-left:10px;"><?php echo $uf->desig; ?></p>
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
                                <?php 
								$CI =& get_instance();
								$dsend=$CI->user_model->ago($uf->post_date);
								echo $dsend;
								
								?>
                              </span>
                              
                                <span>
                                  <h5 style="font-weight:bold;padding-bottom:10px;color:#000;"><?php echo $uf->post_title; ?><h5>
                                </span>
								<?php if($uf->post_text!=''){ ?>
								<span style="padding-bottom:10px;">
								<p>
								
								<?php echo $uf->post_text; ?>
								</p>
								</span>
								<?php } ?>
								<?php if($uf->post_image!=''){ ?>
                                <img style="width:100%;margin-bottom:10px;" src="<?php echo base_url();?>uploads/user_post/<?php echo $uf->post_image; ?>"/>
                                <?php } ?>
								
							    <div class="small-sp"></div>
								<?php if($uf->post_video!=''){ ?>
								<div  class="videocontainer" rel='<?php echo html_entity_decode($uf->post_video); ?>'>
                                  
								  <img src="<?php echo base_url();?>images/youtube.png" style="cursor: pointer;width:100%;" />
								   
								</div>   
								 <div class="small-sp"></div>
								  <div class="small-sp"></div>
								    <div class="small-sp"></div>
							   <?php } ?>
							  </h5>
							  
							   <input type="hidden" class="userlog" value="<?php echo $this->session->userdata('user_id');?>" />
							  	<?php
								
									$CI =& get_instance();
									$usid=$this->session->userdata('user_id');
									if($this->session->userdata('logged_in',true) && $this->session->userdata('user_type')=='P')  {
									$sharetypeis='userpost';
									$sharecheck=$CI->user_model->check_share($sharetypeis,$usid,$uf->upid);
									
								?>
							  
								<?php if($sharecheck==0) {?>
							
								<button class="btn btn-info cntnt userpostshare btn-xs" rel="<?php echo $uf->upid;?>">Share<label class="label shr-label bg-danger points" rel="<?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?>"><?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?></label></button></td>
							  
							    <?php } else { ?>
							  
								<button class="btn btn-info btn-xs"><i class="fa fa-check ">
                              </i>
                            Shared<label class="label shr-label label-danger points"><?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?></label></button>
							  
								<?php } ?>
							  
							 
								<?php }?>
						&nbsp;<a href="<?php echo base_url();?>index.php/portfolio/page?id=<?php echo $uf->upid; ?>" class="btn btn-dark btn-xs pull-right">View Large</a>
                            	 
						
                            </div>
                            
                          </div>
                          
                        </div>
                        
                      </article>
					  <?php } } else { ?>
					  <article class="timeline-item">
                        
                        <div class="timeline-caption">
                          
                          <div class="panel panel-default">
                            
                            <div class="panel-body">
					  Oops! No Posts in the shootline!
					        </div>
					     </div>
					   </div>
					  </article>
					  <?php } ?>
					                        
                      
                      
                      <div class="timeline-footer">
                        <a href="#">
                          <i class="fa fa-plus time-icon inline-block bg-dark">
                          </i>
                        </a>
                      </div>
                      
                    </div>
						<div class="col-sm-6 col-sm-offset-3">
						<?php if($userfeeds){
						if($total_data<=5){?>
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block hideme"><strong>End of posts</strong></button> 
					</div>
					
					<?php }
					else if($total_data>5){?>
					
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block pfloadmore hideme"><strong>Load more posts</strong></button> 
					</div>
					<img src="<?php echo base_url();?>images/loader.gif" style="display:none;" class="pull-center loader-img">
					<?php } }?>
						</div>
					<div class="spacer"></div>
					<div class="spacer"></div>
					<div class="spacer"></div>
					<div class="spacer"></div>
</section>
            
            
          </div>
   	 <div class="col-sm-2">
			 <div class="spacer"></div>
			  <div class="spacer"></div>
			   <ul class="list-unstyled">
			  
			   <label class="label bg bg-dark m-l-xs center">
				   <a href="<?php echo base_url();?>index.php/make_ads">Featured Tasks</a>
			 </label>
			  <li class="line">
              </li>
			 <?php
					$CI =& get_instance();
				   $ad_tasks=$CI->user_model->get_ad_tasks();
				 foreach($ad_tasks as $adt){
			?>
			
              <li>
			  <label class="label bg-danger m-l-xs">
				   <a href="<?php echo base_url();?>index.php/make_ads/ad_page?id=<?php echo $adt->aid; ?>"><?php echo $adt->name; ?></a>
			 </label>
             <div class="small-sp"></div>
			 <a href="<?php echo base_url();?>index.php/make_ads/ad_page?id=<?php echo $adt->aid; ?>"><img src="<?php echo base_url();?>uploads/ads/<?php echo $adt->profile_img; ?>" title="<?php echo $adt->name; ?>" alt="<?php echo $adt->name; ?>" style="border:1px solid #ddd;padding:2px;"></a>
			  <div class="small-sp"></div>
			 <a class="text-info" href="<?php echo base_url();?>index.php/make_ads/ad_task?id=<?php echo $adt->promo_id; ?>"><?php echo $adt->promo_task; ?> </a>
			 <br/>
			 <label class="label bg-warning m-l-xs pull-right">
				   <a href="<?php echo base_url();?>index.php/make_ads/ad_task?id=<?php echo $adt->promo_id; ?>">Task</a>
			 </label>
              </li>
              
              <li class="line">
              </li>
               <div class="small-sp"></div> 
            
			 
			 <?php } ?>
			 <li>
			 <a href="<?php echo base_url();?>index.php/make_ads" class="btn btn-success btn-xs">View all tasks</a>
			 </li>
			  <li class="line">
              </li>
			 </ul>
			 </div>
 
  
  
</div>
</section>
</section>
</section>
</section>
</section>
<script>

$('.pfloadmore').one('click',function()
	{
		$('.loader-img').show();
		urllanguage=$('.urllanguage').val();
		flagdata=$('.ifinder').last().val();
		flagger=$('.flagstopper').val();
		timelinecount=$('.timlinefeed').length;
		remaining_data=parseInt(flagger)-parseInt(timelinecount);
		$('.pfloadmore').text('Loading...');
	
	if(timelinecount<flagger)
		{
				
					   limit=5;
					
			   $.post("<?php echo base_url();?>index.php/feeds/get_portfolio_feed_data",{timelinecount:timelinecount,flagdata:flagdata,limit:limit,urllanguage:urllanguage},function(response)
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
								$('.pfloadmore').html('<strong>Load more posts</strong>');
								$('.loader-img').hide();
							}
						}
						
						
			   }
	   );
	   }
	   else
	   {
			$('.pfloadmore').html('<strong>Load more posts</strong>');
	   }
	   
	}
	);

</script>
