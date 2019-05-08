<section id="content">
  
  <section class="vbox">
    
    <section>
      
      <section class="hbox stretch">
        
        <section>
          
          <section class="vbox">
            
            <section class="scrollable wrapper">
              
              <section class="scrollable wrapper">
                
                
                
                <input type="hidden" class="flagstopper" value="
  
				<?php
					$CI =& get_instance();
				
					echo $total_data=$CI->user_model->get_all_classifieds_count();
				
				  ?>
  "/>
                <div class="row">
                  
                  <div class="col-sm-8 col-sm-offset-2">
                  <section class="comment-list block">
                    <?php if($classifieds){ foreach($classifieds as $classi) { ?>
                    <?php
$CI =& get_instance();
if($classi->
type=='M')
{
$movie=$CI->
user_model->
get_this_movie($classi->
postedby);
$postedby=$movie[0]->
name;
$img=base_url().'uploads/movie_main/'.$movie[0]->
image;
$title=$movie[0]->
name;
}
else if($classi->
type=='A')
{
$postedby='Admin';
$img=base_url().'images/admin.jpg';
$title='admin';
}
?>
                    <article id="comment-id-1" class="comment-item classifiedfeed">
                      
                      <a class="pull-left thumb-sm avatar">
                        
                     <img src="
<?php echo $img; ?>" class="img-circle" style="" title="<?php echo $title;?>"></a>
                        
                     
                      
                      <span class="arrow left">
                      </span>
                      
                      <section class="comment-body panel panel-default">
                        
                        <header class="panel-heading bg-white">
                           <span class="text-muted m-l-sm pull-right">
                            
                            <i class="fa fa-clock-o">
                            </i>
                            <?php 
								 $CI =& get_instance();
							    	$dsend=$CI->user_model->ago($classi->postedon);
								echo $dsend;
								?>
                          </span><br/>
                          <a href="#">
                          <strong>  <?php echo $classi->
title; ?></strong>
                          </a>
                          
						  <a style="mouse:pointer;" href="<?php echo base_url();?>index.php/moviefolio/movie?id=<?php echo $movie[0]->mid; ?>&&name=<?php echo $movie[0]->name; ?>"><br/><br/>
                          <label class="label bg-success m-l-xs" data-title="Click to view the movie page" data-placement="right" data-toggle="tooltip">
                            <?php echo 'Posted by'.' '.$postedby; ?>
                          </label></a>
                          
                         
                          
                        </header>
                        
                        <div class="panel-body">
                          
                          <div>
                            <?php echo $classi->
description; ?>
                          </div>
                          <input type="hidden" class="userlog" value="<?php echo $this->session->userdata('user_id');?>" />
                          <div class="comment-action m-t-sm">
                            
                            
                            <?php if($this->
session->
userdata('logged_in',true) && $this->
session->
userdata('user_type')=='P')  {
$CI =& get_instance();
$usr=$this->
session->
userdata('user_id');
$points=$CI->
user_model->
get_this_user_points($usr);
?>
                            <?php if($points[0]->
points
<300) { ?>
                            <a href="#comment-form" class="btn btn-warning btn-xs" data-title="You need atleast 300 points to apply" data-placement="right" data-toggle="tooltip">
                              
                              <i class="fa fa-mail-reply ">
                              </i>
                              Apply
                            </a>
                            <?php } else {
							$checkapplied=$CI->user_model->check_applied($this->session->userdata('user_id'),$classi->classifiedid);
							?>
							<?php if($checkapplied==0) {?>
                            <a href="#" class="btn btn-warning btn-xs applyclassified" rel="<?php echo $classi->classifiedid; ?>" data-title="Yes you can apply" data-placement="right" data-toggle="tooltip">
                              
                              <i class="fa fa-mail-reply ">
                              </i>
                              Apply
                            </a>
							<?php } else {?>
							<a href="#" class="btn btn-warning btn-xs" data-title="You applied to this post" data-placement="right" data-toggle="tooltip">
                              
                              <i class="fa fa-check ">
                              </i>
                              Applied
                            </a>
							<?php }?>
							
                            <?php } ?>
                            <?php } ?>
                            <?php if($this->session->userdata('logged_in',true) && $this->session->userdata('user_type')!='P')  {?>
                            <a href="#comment-form" class="btn btn-warning btn-xs" data-title="Please make a portfolio to apply" data-placement="right" data-toggle="tooltip">
                              
                              <i class="fa fa-mail-reply ">
                              </i>
                              Apply
                            </a>
                            <?php } ?>
                            <?php if(!$this->
session->
userdata('logged_in',true)){ ?>
                            <a href="#comment-form" class="btn btn-warning btn-xs" data-title="You are not logged in with a portfolio account" data-placement="right" data-toggle="tooltip">
                              
                              <i class="fa fa-mail-reply ">
                              </i>
                              Apply
                            </a>
                            <?php } ?>
                            
                            <?php

$CI =& get_instance();
$usid=$this->
session->
userdata('user_id');
if($this->
session->
userdata('logged_in',true) && $this->
session->
userdata('user_type')=='P')  {
$sharetypeis='classifieds';
$sharecheck=$CI->
user_model->
check_share($sharetypeis,$usid,$classi->
classifiedid);
 $count_shares=$CI->user_model->get_this_share_count($sharetypeis,$classi->classifiedid);
?>
                            
                            <?php if($sharecheck==0) {?>
                            
                            <button class="btn btn-info cntnt classifiedshare btn-xs" rel="<?php echo $classi->classifiedid;?>">
  Share<label class="label shr-label bg-danger points" rel="<?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?>"><?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?></label>
                            </button>
                          </td>
                          
                          <?php } else { ?>
                          
                          <button class="btn btn-info btn-xs" data-title="You shared this post within loop" data-placement="right" data-toggle="tooltip">
						  <i class="fa fa-check ">
                              </i>
                            Shared<label class="label shr-label label-danger points"><?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?></label>
                          </button>
                          
                          <?php } ?>
                          
                          
                          <?php }?>
                          
                        </div>
                        
                      </div>
                      
                    </section>
                    
                  </article>
                  
                  <?php } } ?>
                  
                  
                </section>
				</div>
				<div class="spacer"></div>
				
              </div>
			   <div class="col-sm-4 col-sm-offset-4">
  <?php if($classifieds){
						if($total_data<=10){?>
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block hideme"><strong>End of posts</strong></button> 
					</div>
					
					<?php }
					else if($total_data>10){?>
					
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block cloadmore hideme"><strong>Load more posts</strong></button> 
					</div>
					<img src="<?php echo base_url();?>images/loader.gif" style="display:none;" class="pull-center loader-img">
					<?php } }?>
					</div>
					 <div class="spacer"></div>
			  <div class="spacer"></div>
				<div class="spacer"></div>
				<div class="spacer"></div>
            </section>
            
            
            
          </section>
          
          
        </section>
        
      </section>
      
      <!--<aside class="bg-light lter b-l aside-md">
        
      </aside>--->
      
    </section>
    
  </section>
  
</section>


</section>

</section>
 <script>

$('.cloadmore').one('click',function()
	{
		$('.loader-img').show();
		flagger=$('.flagstopper').val();
		timelinecount=$('.classifiedfeed').length;
		remaining_data=parseInt(flagger)-parseInt(timelinecount);
		$('.cloadmore').text('Loading...');
	
	if(timelinecount<flagger)
		{
				
					   limit=6;
					
			   $.post("<?php echo base_url();?>index.php/feeds/get_classified_data",{timelinecount:timelinecount,limit:limit},function(response)
			   {
			  		
						if(response)
						{
							
							$('.classifiedfeed').last().after(response);
							if($('.classifiedfeed').length==flagger)
							{
								$('.btn-cont').html('<button class="btn btn-success btn-block"><strong>End of Posts</strong></button>');
								
								$('.loader-img').hide();
							}
							else
							{
								$('.cloadmore').html('<strong>Load more posts</strong>');
								$('.loader-img').hide();
							}
						}
						
						
			   }
	   );
	   }
	   else
	   {
			$('.cloadmore').html('<strong>Load more posts</strong>');
	   }
	   
	}
	);

</script>      
