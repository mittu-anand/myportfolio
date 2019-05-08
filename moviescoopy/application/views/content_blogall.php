    <link rel="stylesheet" href="<?php echo base_url();?>js/datatables/datatables.css" type="text/css"/>
   <section id="content">
   
        <div class="" style="margin-top:100px;">
          
          
          
        </div>
    
      <div class="container m-t-lg m-b-lg">
        <div class="row">
          
          <div class="col-sm-9" >
<section class="vbox">
 <div class="timeline">
                      
                      <article class="timeline-item active">
                        
                        <div class="timeline-caption">
                          
                          <div class="panel bg-primary lter no-borders">
                         
                             <div class="panel-body">
						 <section class="comment-list block">
  
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
            Moviescoopy Blogger
          </strong>
        </a>
        a blog
        <a class="text-info" href="#">
          Page
        </a>
        
      
      </header>
      
      <div>
       Read,think and share movie blogs here!
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
          
          </strong>   <?php if($blogs)
												{		
												
												$last_update= reset($blogs); 
												$CI =& get_instance();
												$lupdate=$CI->user_model->ago($last_update->postdate);
													echo $lupdate;
													}
													else
													{
													 echo "No updates";
													}
									  ?>
		<input type="hidden" class="urlcategory" value="<?php if(isset($_GET['category'])){ echo $_GET['category'];} ?>"/>
				
		<input type="hidden" class="flagstopper" value="
		  <?php
			  $CI =& get_instance();
			
			  if(isset($_GET['category']))
			  {
				echo $total_data=$CI->user_model->get_blog_count($_GET['category']);
			
			  }
			  else
			  {
				echo $total_data=$CI->user_model->get_blog_count();
			
			  }
			 
			  
			  ?>
		  "/>	
      </div>
      <?php if(isset($_GET['category'])){?>
	  <br/>
<strong style="margin:10px;"><?php echo $_GET['category']; ?></strong>

<?php }?>
    </section>
    
  </article>
   
</section>

                            </div>
                          </div>
                          
                        </div>
                        
                      </article>
                     
					  <?php $i=0; if($blogs){ foreach($blogs as $blg) { $i++; ?>
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
						<?php if($blogs){
						if($total_data<=5){?>
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block hideme"><strong>End of posts</strong></button> 
					</div>
					
					<?php }
					else if($total_data>5){?>
					
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block bfloadmore hideme"><strong>Load more posts</strong></button> 
					</div>
					<img src="<?php echo base_url();?>images/loader.gif" style="display:none;" class="pull-center loader-img">
					<?php } }?>
					</div>
					<div class="spacer"></div>
					<div class="spacer"></div>
					<div class="spacer"></div>
</section>
            
            
          </div>
          
          <div class="col-sm-3">
            
             <h5 class="font-semibold">
              Categories
            </h5>
            
            <div class="line line-dashed">
            </div>
            
            <ul class="list-unstyled">
               <?php if($blogcategories){ foreach($blogcategories as $blgct) { ?>
             <li>
                
                <a href="<?php echo base_url();?>index.php/blogzone/filter?category=<?php echo $blgct->stitle; ?>" class="dk">
                  
                  
                  <?php echo $blgct->stitle;?>
                </a>
                
              </li>
              
              <li class="line">
              </li>
            <?php } } ?>
              
              
             
            </ul>
            
          
           
          </div>
          
        </div>
        <div class="spacer"></div>
      </div>
    </section>
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
 
</script>  