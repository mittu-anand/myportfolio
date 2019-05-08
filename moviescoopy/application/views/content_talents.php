
<section id="content">
        
        <section class="vbox">
          
         
            
            <section class="hbox stretch">
			<section class="vbox">
                
				 <section class="scrollable wrapper">
				 <div class="spacer"></div>
<div class="row">
  
 
		
		<div class="col-sm-8 col-sm-offset-2">
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
            Talent Feeds
          </strong>
        </a>
        a feed
        <a class="text-info" href="#">
          Page
        </a>
        
      
      </header>
      
      <div>
        for the upcoming talents!
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
          Originally
          </strong> authentified by moviescoopy!
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
           Qualified Users
          </strong>
        </a>
        met the constraints of talent feeds
        
        
      </header>
      
      <div>
       <strong>
          Know
          </strong>more?
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
          
          </strong>  5mins ago
      </div>
      
    </section>
    
  </article>
  
</section>

               
		 
                            </div>
                          </div>
                          
                        </div>
                        
                      </article>
						
                       <?php $i=0; if($talents){ foreach($talents as $tal) { $i++; ?>
                      <article class="timeline-item timlinefeed <?php if($i%2==0){echo "";} else {echo "alt";}?>">
                        <input type="hidden" class="ifinder" value="<?php echo $i;?>"/>
                        <div class="timeline-caption">
                          <?php
						  $CI =& get_instance();
						  $useris=$CI->user_model->get_this_user($tal->uid);
						  
						  ?>
                          <div class="panel panel-default">
                            
                            <div class="panel-body">
                              <table style="margin-bottom:20px;">
							  <tr>
							  <td>
							  <a href="">
							 <img class="img-circle" style="height:60px;width:60px;" src="<?php echo base_url();?>uploads/users/<?php if($useris){ if($useris[0]->profile_img!=''){echo $useris[0]->profile_img; }else{ if($useris[0]->gender=='M'){ echo "avatar_default.jpg";}else{echo "favatar_default.jpg";} }} ?>">
            
							 </a>
							 </td>
							  <td>
							  <a href=""><label class="label bg-success m-l-xs">
								<?php echo $useris[0]->name; ?> </label></a>
							 
							  </td>
							  </tr>
							  </table>
                              <span class="arrow <?php if($i%2==0){echo "left";} else {echo "right";}?>">
                              </span>
                              
                              <span class="timeline-icon">
                                <i class="fa fa-bars time-icon bg-primary">
                                </i>
                              </span>
                              
                              <span class="timeline-date">
                                <?php $post_date =  $tal->post_date;
								$now = time();
								echo timespan($post_date, $now) . ' ago' ;?>
                              </span>
                              
                                <span>
                                  <h5 style="font-weight:bold;padding-bottom:10px;color:#000;"><?php echo $tal->post_title; ?><h5>
                                </span>
								<?php if($tal->post_text!=''){ ?>
								<span style="padding-bottom:10px;">
								<p>
								
								<?php echo $tal->post_text; ?>
								</p>
								</span>
								<?php } ?>
								<?php if($tal->post_image!=''){ ?>
                                <img style="width:100%;margin-bottom:10px;" src="<?php echo base_url();?>uploads/talents/<?php echo $tal->post_image; ?>"/>
                                <?php } ?>
								<?php if($tal->post_video!=''){ ?>
								<div>
                                  <!--
								   <?php echo html_entity_decode($tal->post_video); ?>
								   -->
								   <img src="<?php echo base_url();?>images/youtube.png"/>
								</div>   
							   <?php } ?>
							  </h5>
							  
							    <input type="hidden" class="userlog" value="<?php echo $this->session->userdata('user_id');?>" />
							  	<?php
								
									$CI =& get_instance();
									$usid=$this->session->userdata('user_id');
									if($this->session->userdata('logged_in',true) && $this->session->userdata('user_type')=='P')  {
									$sharetypeis='talents';
									$sharecheck=$CI->user_model->check_share($sharetypeis,$usid,$tal->tid);
									
								?>
							  
								<?php if($sharecheck==0) {?>
							
								<button class="btn btn-info cntnt talentsshare btn-xs" rel="<?php echo $tal->tid;?>">Share</button></td>
							  
							    <?php } else { ?>
							  
								<button class="btn btn-info btn-xs">You shared this post</button>
							  
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
</section>
            
            
          </div>
   
 
  
  
</div>
</section>
</section>
</section>
</section>
</section>
<style>
iframe
{
	width:100% !important;
}
</style>
<script src="<?php echo base_url();?>js/charts/sparkline/jquery.sparkline.min.js">
</script>
   <script>
   $(".talentsshare").one("click",function()
	{
		sharetype='talents';
		sharedby=$(".userlog").val();
		shareid=$(this).attr('rel');
		
		$.post("<?php echo base_url();?>index.php/moviefolio/share_movie",{sharetype:sharetype,sharedby:sharedby,shareid:shareid},function(response)
	{
		if(response)
		{
			
		}
		else
		{
		}
	}
	
	);
	$(this).removeClass('talentsshare');
	$(this).html('You shared this post');
	}
	);
	
	
</script>
 