<?php $CI =& get_instance();?>
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
                <input type="hidden" class="flagstopper" value="
  
					  <?php
						  $CI =& get_instance();
						
							echo $total_data=$CI->user_model->get_sharefeed_count($user_portfolio[0]->uid);
						
						  ?>
					  "/>
<input type="hidden" class="useris" value="<?php if($user_portfolio){ echo $user_portfolio[0]->uid;} ?>" />	       
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
           stuffs shared
          </strong>
        </a>
        
        <a class="text-info" href="#">
           by people in loop
        </a>
        
      
      </header>
      
      <div>
       
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
          
          </strong>   <?php if($shares)
												{		
												
												$last_update= reset($shares); 
												$CI =& get_instance();
												$lupdate=$CI->user_model->ago($last_update->sharedtime);
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
  
</section>

               
		 
                            </div>
                          </div>
                          
                        </div>
                        
                      </article>
						
                            <?php $i=0; if($shares){ foreach($shares as $shr) { $i++; ?>
                      <article class="timeline-item timelinefeed <?php if($i%2==0){echo "";} else {echo "alt";}?>">
                        <input type="hidden" class="ifinder" value="<?php echo $i;?>"/>
                        <div class="timeline-caption">
                         
                          <div class="panel panel-default">
                            
                            <?php if($shr->shares=='movie'){
							
							$movie=$CI->user_model->get_this_movie($shr->shreditemid);
							
							?>
							
							<div class="panel-body">
							<span><strong><a  data-title="Portfolio User" data-placement="bottom" data-toggle="tooltip" class="text-green" href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $shr->sharedby; ?>"><?php echo $shr->name; ?></a></strong> shared a movie<strong><a   class="text-blue" data-title="Movie" data-placement="bottom" data-toggle="tooltip" href="<?php echo base_url();?>index.php/moviefolio/movie?id=<?php echo $movie[0]->mid; ?>&&name=<?php echo $movie[0]->name; ?>"> <?php echo $movie[0]->name; ?></a></strong></span>
                              
							  <hr/>
                              <table style="margin-bottom:20px;">
							  <tr>
							  <td>
							  <a href="<?php echo base_url();?>index.php/moviefolio/movie?id=<?php echo $movie[0]->mid; ?>&&name=<?php echo $movie[0]->name; ?>">
							 <img class="img-circle" style="height:60px;width:60px;" src="<?php echo base_url();?>uploads/movie_main/<?php if($movie){ if($movie[0]->image!=''){echo $movie[0]->image; }else{ echo "moviedummy.jpg";} }?>">
            
							 </a>
							 </td>
							  <td>
							  <a href="<?php echo base_url();?>index.php/moviefolio/movie?id=<?php echo $movie[0]->mid; ?>&&name=<?php echo $movie[0]->name; ?>"><label class="label bg-success m-l-xs">
            <?php echo $movie[0]->name; ?> </label></a>
							 
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
                                <?php 
								
								$dsend=$CI->user_model->ago($shr->sharedtime);
								echo $dsend;
								
								?>
                              </span>
							  </h5>
                            </div>
							
							  
							
						    <?php } else if($shr->shares=='moviepost') { 
							
								
							$moviepost=$CI->user_model->get_one_movie_posts($shr->shreditemid);
						    $moviename=$CI->user_model->get_moviename($moviepost[0]->mid);
							
							?>
						   
						   <div class="panel-body">
                              
                              <span class="arrow <?php if($i%2==0){echo "left";} else {echo "right";}?>">
                              </span>
                              
                              <span class="timeline-icon">
                                <i class="fa fa-bars time-icon bg-primary">
                                </i>
                              </span>
                              
                              <span class="timeline-date">
                                <?php 
								$dsend=$CI->user_model->ago($shr->sharedtime);
								echo $dsend;
								?>
                              </span>
                              
                              
                                <span>
								<strong>
								<a  class="text-green" data-title="Portfolio User" data-placement="bottom" data-toggle="tooltip" href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $shr->sharedby; ?>"><?php echo $shr->name; ?></a></strong> shared a post of movie <strong><a   class="text-blue" data-title="Movie" data-placement="bottom" data-toggle="tooltip" href="<?php echo base_url();?>index.php/moviefolio/movie?id=<?php echo $moviename[0]->mid; ?>&&name=<?php echo $moviename[0]->name; ?>"><?php echo $moviename[0]->name; ?></a></strong></span>
                              
							  <hr/>
                                <span>
                                  <h5 style="font-weight:bold;padding-bottom:2px;color:#000;"><?php echo $moviepost[0]->post_title; ?><h5>
                                </span>
								<?php if($moviepost[0]->post_text!=''){ ?>
								<span style="padding-bottom:8px;">
								<p>
								
								<?php echo $moviepost[0]->post_text; ?>
								</p>
								</span>
								<?php } ?>
								<?php if($moviepost[0]->post_image!=''){ ?>
                                <img style="width:100%;" src="<?php echo base_url();?>uploads/moviepost/<?php echo $moviepost[0]->post_image; ?>"/>
                                <?php } ?>
								 <div class="small-sp"></div>
								<?php if($moviepost[0]->post_video!=''){ ?>
								<div  class="videocontainer" rel='<?php echo html_entity_decode($moviepost[0]->post_video); ?>'>
                                  
								  <img src="<?php echo base_url();?>images/youtube.png" style="cursor: pointer;width:100%;" />
								   
								</div>   
								
							   <?php } ?>
							   
							
							  </h5>
                      
                            </div>
							
						   
						   
						    <?php } else if($shr->shares=='blog') { 
							
							$blog=$CI->user_model->get_this_blog($shr->shreditemid);
						
							
							?>
						   <div class="panel-body">
                              
                              <span class="arrow <?php if($i%2==0){echo "left";} else {echo "right";}?>">
                              </span>
                              
                              <span class="timeline-icon">
                                <i class="fa fa-bold time-icon bg-primary">
                                </i>
                              </span>
                              
                              <span class="timeline-date">
                                 <?php 
								 
									$dsend=$CI->user_model->ago($shr->sharedtime);
									echo $dsend;
								?>
                              </span>
                              
                               <span><strong><a  data-title="Portfolio User" data-placement="bottom" data-toggle="tooltip" class="text-green" href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $shr->sharedby; ?>"><?php echo $shr->name; ?></a></strong> shared a<strong><a   class="text-blue" data-title="Blog" data-placement="bottom" data-toggle="tooltip" href="<?php echo base_url();?>index.php/blogzone/blog?id=<?php echo  $blog[0]->id; ?>"> Blog</a></strong> </span>
                              
							    <hr/>
                                <span>
									<label class="label bg-success m-l-xs">
								  <?php echo $blog[0]->stitle; ?>
									</label>
								</span>
                                <span>
                                  <h5 style="font-weight:bold;padding-bottom:10px;padding-top:10px;color:#000;"><?php echo  $blog[0]->sname; ?><h5>
								  
                                </span>
								 <img style="width:100%;" src="<?php echo base_url();?>uploads/blogs/<?php echo  $blog[0]->image; ?>"/>
								<span style="padding-bottom:8px;">
								<p>
								<?php echo substr($blog[0]->description,0,180);?>.....
								</p>
								</span>
								 <span>
								 <a href="<?php echo base_url();?>index.php/blogzone/blog?id=<?php echo  $blog[0]->id; ?>">
									<label class="label bg-warning m-l-xs pull-right" style="cursor:pointer;">
								  Read More
									</label></a>
								</span>
							
                               
                              
							  </h5>
                            </div>
						   
						    <?php } else if($shr->shares=='news') { 
							$news=$CI->user_model->get_this_news($shr->shreditemid);
							
							
							?>
						   <div class="panel-body">
                              
                              <span class="arrow <?php if($i%2==0){echo "left";} else {echo "right";}?>">
                              </span>
                              
                              <span class="timeline-icon">
                                <i class="fa fa-bold time-icon bg-primary">
                                </i>
                              </span>
                              
                              <span class="timeline-date">
                                <?php 
								$dsend=$CI->user_model->ago($shr->sharedtime);
								echo $dsend;
								?>
                              </span>
                              
                              
                                 <span><strong><a  data-title="Portfolio User" data-placement="bottom" data-toggle="tooltip" class="text-green" href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $shr->sharedby; ?>"><?php echo $shr->name; ?></a></strong> shared a<strong><a   class="text-blue" data-title="Movie News" data-placement="bottom" data-toggle="tooltip" href="<?php echo base_url();?>index.php/newszone/news?id=<?php echo  $news[0]->eid; ?>"> News</a></strong> </span>
                              
							    <hr/>
                                <span>
								 <a href="<?php echo base_url();?>index.php/newszone/news?id=<?php echo $news[0]->eid; ?>"> 
                                  <h5 style="font-weight:bold;padding-bottom:10px;padding-top:10px;color:#000;"><?php echo  $news[0]->title; ?><h5></a>
								  
                                </span>
								 <img style="width:100%;" src="<?php echo base_url();?>uploads/news/<?php echo  $news[0]->images; ?>"/>
								<span style="padding-bottom:8px;">
								<p>
								<?php echo substr($news[0]->description,0,180);?>.....
								</p>
								</span>
								 <span>
								 <a href="<?php echo base_url();?>index.php/newszone/news?id=<?php echo  $news[0]->eid; ?>">
									<label class="label bg-warning m-l-xs pull-right">
								  Read More
									</label></a>
								</span>
							
                               
                              
							  </h5>
                            </div>
						   
						   
						    <?php } else if($shr->shares=='celebrity') { 
							$celeb=$CI->user_model->get_this_celeb($shr->shreditemid);
						
							?>
						    <div class="panel-body">
							<span><strong><a  data-title="Portfolio User" data-placement="bottom" data-toggle="tooltip" class="text-green" href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $shr->sharedby; ?>"><?php echo $shr->name; ?></a></strong> shared celebrity page of<strong><a   class="text-blue" data-title="Celebrity" data-placement="bottom" data-toggle="tooltip" href="<?php echo base_url();?>index.php/celebfolio/celeb?id=<?php echo $celeb[0]->cid; ?>&&name=<?php echo $celeb[0]->name; ?>"> <?php echo $celeb[0]->name; ?></a></strong></span>
                              
							  <hr/>
                              <table style="margin-bottom:20px;">
							  <tr>
							  <td>
							  <a href="<?php echo base_url();?>index.php/celebfolio/celeb?id=<?php echo $celeb[0]->cid; ?>&&name=<?php echo $celeb[0]->name; ?>">
							 <img class="img-circle" style="width:60px;height:60px;" title="<?php if($celeb){ echo $celeb[0]->name;} ?>" src="<?php echo base_url();?>uploads/celebs/<?php if($celeb){ if($celeb[0]->images!=''){echo $celeb[0]->images; }else{ if($celeb[0]->gender=='M'){ echo "avatar_default.jpg";}else{echo "favatar_default.jpg";} }} ?>">
       
							 </a>
							 </td>
							  <td>
							  <a href="<?php echo base_url();?>index.php/celebfolio/celeb?id=<?php echo $celeb[0]->cid; ?>&&name=<?php echo $celeb[0]->name; ?>"><label class="label bg-success m-l-xs">
            <?php echo $celeb[0]->name; ?> </label></a>
							 
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
                                <?php 
								$dsend=$CI->user_model->ago($shr->sharedtime);
								echo $dsend;
								?>
                              </span>
							  </h5>
                            </div>
							
						   
						    <?php } else if($shr->shares=='celebritypost') {
							$celebpost=$CI->user_model->get_one_celeb_post($shr->shreditemid);
							
							$celeb=$CI->user_model->get_this_celeb($celebpost[0]->cid);
								?>
						   
							
							<div class="panel-body">
                              
                              <span class="arrow <?php if($i%2==0){echo "left";} else {echo "right";}?>">
                              </span>
                              
                              <span class="timeline-icon">
                                <i class="fa fa-bars time-icon bg-primary">
                                </i>
                              </span>
                              
                              <span class="timeline-date">
                                <?php 
								$dsend=$CI->user_model->ago($shr->sharedtime);
								echo $dsend;
								?>
                              </span>
                              
                              <span><strong><a  data-title="Portfolio User" data-placement="bottom" data-toggle="tooltip" class="text-green" href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $shr->sharedby; ?>"><?php echo $shr->name; ?></a></strong> shared a post of<strong><a   class="text-blue" data-title="Celebrity" data-placement="bottom" data-toggle="tooltip" href="<?php echo base_url();?>index.php/celebfolio/celeb?id=<?php echo $celeb[0]->cid; ?>&&name=<?php echo $celeb[0]->name; ?>"> <?php echo $celeb[0]->name; ?></a></strong></span>
                              
							  <hr/>
                                
                                <span>
                                  <h5 style="font-weight:bold;padding-bottom:2px;color:#000;"><?php echo $celebpost[0]->post_title; ?><h5>
                                </span>
								<?php if($celebpost[0]->post_text!=''){ ?>
								<span style="padding-bottom:8px;">
								<p>
								
								<?php echo $celebpost[0]->post_text; ?>
								</p>
								</span>
								<?php } ?>
								<?php if($celebpost[0]->post_image!=''){ ?>
                                <img style="width:100%;" src="<?php echo base_url();?>uploads/celeb_post/<?php echo $celebpost[0]->post_image; ?>"/>
                                <?php } ?>
							
							   <div class="small-sp"></div>
								<?php if($celebpost[0]->post_video!=''){ ?>
								<div  class="videocontainer" rel='<?php echo html_entity_decode($celebpost[0]->post_video); ?>'>
                                  
								  <img src="<?php echo base_url();?>images/youtube.png" style="cursor: pointer;width:100%;" />
								   
								</div>   
								
							   <?php } ?>
							  </h5>
                      
                            </div>
							
						   
						    <?php } else if($shr->shares=='classifieds') { 
							$classified=$CI->user_model->get_one_classified($shr->shreditemid);
							
							?>
						    <div class="panel-body">
                              
                              <span class="arrow <?php if($i%2==0){echo "left";} else {echo "right";}?>">
                              </span>
                              
                              <span class="timeline-icon">
                                <i class="fa fa-bars time-icon bg-primary">
                                </i>
                              </span>
                              
                              <span class="timeline-date">
                                <?php 
								$dsend=$CI->user_model->ago($shr->sharedtime);
								echo $dsend;
								?>
                              </span>
                              
                               <span><strong><a  data-title="Portfolio User" data-placement="bottom" data-toggle="tooltip" class="text-green" href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $shr->sharedby; ?>"><?php echo $shr->name; ?></a></strong> shared a  <strong><a   class="text-blue" data-title="Classified" data-placement="bottom" data-toggle="tooltip" href="<?php echo base_url();?>index.php/classifieds/classified_detail?id=<?php echo $classified[0]->classifiedid; ?>">classified</a></strong> </span>
                              
							  <hr/>
                                
                                <span>
                                  <h5 style="font-weight:bold;padding-bottom:2px;color:#000;"><?php echo $classified[0]->title; ?><h5>
                                </span>
								
								<span style="padding-bottom:8px;">
								<p>
								
								<?php echo $classified[0]->description; ?>
								</p>
								</span>
								<?php
								$movie=$CI->user_model->get_this_movie($classified[0]->postedby);?>
								 <a href="<?php echo base_url();?>index.php/moviefolio/movie?id=<?php echo $movie[0]->mid; ?>&&name=<?php echo $movie[0]->name; ?>"><label class="label bg-success m-l-xs">Posted by <?php echo $movie[0]->name; ?></label></a>
								
							  </h5>
                      
                            </div>
						   <?php } else if($shr->shares=='userpost') { 
							
							$userpost=$CI->user_model->get_this_user_post($shr->shreditemid);
							$postedby=$CI->user_model->get_username($userpost[0]->uid);
							?>
							<div class="panel-body">
                              
								<?php

								  $userid=$this->session->userdata('user_id');
								  if($this->session->userdata('logged_in',true) && ($userid==$shr->sharedby)) { 
					       
						        ?>
								 <div class="btn-group pull-right">
  
									  <button data-toggle="dropdown" class="btn btn-success dropdown-toggle">
										
										<span class="caret">
										</span>
									  </button>
									  
									  <ul class="dropdown-menu">
										<li>
										 <a  data-title="Edit this post" data-placement="left" data-toggle="tooltip" href="<?php echo base_url();?>index.php/portfolio/edit_user_post?id=<?php echo $this->session->userdata('user_id'); ?>&&post=<?php echo $userpost[0]->upid; ?>" title="Edit Post">Edit</a>
									   </li>
									   	<li>
										 <a  data-title="Delete this post" data-placement="left" data-toggle="tooltip" href="<?php echo base_url();?>index.php/portfolio/delete_post?post=<?php echo $this->session->userdata('user_id'); ?>&&<?php echo $userpost[0]->upid; ?>" title="Delete Post">Delete</a>
								 
										</li>
									</ul>	
							     </div>
								 
						       <?php } ?>
                              <span class="arrow <?php if($i%2==0){echo "left";} else {echo "right";}?>">
                              </span>
                              
                              <span class="timeline-icon">
                                <i class="fa fa-bars time-icon bg-primary">
                                </i>
                              </span>
                              
                              <span class="timeline-date">
                                 <?php 
								$dsend=$CI->user_model->ago($shr->sharedtime);
								echo $dsend;
								?>
                              </span>
							   <span><strong><a  data-title="Portfolio User" data-placement="bottom" data-toggle="tooltip" class="text-green" href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $shr->sharedby; ?>"><?php echo $shr->name; ?></a></strong> shared a post of <strong><a   class="text-blue" data-title="Portfolio User" data-placement="bottom" data-toggle="tooltip" href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $postedby[0]->uid; ?>"><?php echo $postedby[0]->name; ?></a></strong> </span>
                            
							
							  <hr/>
							  <span>
                                  <h5 style="font-weight:bold;padding-bottom:2px;color:#000;"><?php echo $userpost[0]->post_title; ?><h5>
                               </span>
								<?php if($userpost[0]->post_text!=''){ ?>
								<span style="padding-bottom:8px;">
								<p>
								
								<?php echo $userpost[0]->post_text; ?>
								</p>
								</span>
								<?php } ?>
								<?php if($userpost[0]->post_image!=''){ ?>
                                <img style="width:100%;" src="<?php echo base_url();?>uploads/user_post/<?php echo $userpost[0]->post_image; ?>"/>
                                <?php } ?>
								 <div class="small-sp"></div>
								<?php if($userpost[0]->post_video!=''){ ?>
								<div  class="videocontainer" rel='<?php echo html_entity_decode($userpost[0]->post_video); ?>'>
                                  
								  <img src="<?php echo base_url();?>images/youtube.png" style="cursor: pointer;width:100%;" />
								   
								</div>   
								
							   <?php } ?>
							  </h5>
							  
                            </div>
							
						    <?php } else if($shr->shares=='review') { 
							
							$review=$CI->user_model->get_this_review($shr->shreditemid);
							$moviename=$CI->user_model->get_moviename($review[0]->mid);
							?>
						   
						   <div class="panel-body">
                              
                              <span class="arrow <?php if($i%2==0){echo "left";} else {echo "right";}?>">
                              </span>
                              
                              <span class="timeline-icon">
                                <i class="fa fa-bars time-icon bg-primary">
                                </i>
                              </span>
                              
                              <span class="timeline-date">
                                <?php 
								$dsend=$CI->user_model->ago($shr->sharedtime);
								echo $dsend;
								?>
                              </span>
                              
                              
                                 <span><strong><a  data-title="Portfolio User" data-placement="bottom" data-toggle="tooltip" class="text-green" href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $shr->sharedby; ?>"><?php echo $shr->name; ?></a></strong> shared a movie <strong><a   class="text-blue" data-title="Review" data-placement="bottom" data-toggle="tooltip" href="<?php echo base_url();?>index.php/reviews/review?id=<?php echo $moviename[0]->mid; ?>&&name=<?php echo $moviename[0]->name; ?>">Review</a></strong> </span>
                              
							     <hr/>
                                <span>
                                  <h5 style="font-weight:bold;padding-bottom:2px;color:#000;">
								  <?php echo $review[0]->review_title; ?>
								<h5>
                                </span>
								<span>
								<img src="<?php echo base_url();?>uploads/reviews/<?php echo $review[0]->image;?>" style="width:100%;"/>
								</span>
								<span>
								<a href="<?php echo base_url();?>index.php/reviews/review?id=<?php echo $moviename[0]->mid; ?>&&name=<?php echo $moviename[0]->name; ?>"><label class="label bg-danger m-l-xs pull-right" style="cursor:pointer;">
								  Read Review
									</label></a>
								</span>
								
							  </h5>
                      
                            </div>
							
							<?php } ?>
                          
                        </div>
                        
                      </article>
					  <?php } } else { ?>
					  <article class="timeline-item">
                        
                        <div class="timeline-caption">
                          
                          <div class="panel panel-default">
                            
                            <div class="panel-body">
					  Oops! No Posts in the Shareline!
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
                    	<?php if($shares){
						if($total_data<=5){?>
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block hideme"><strong>End of posts</strong></button> 
					</div>
					
					<?php }
					else if($total_data>5){?>
					
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block slloadmore hideme"><strong>Load more posts</strong></button> 
					</div>
					<img src="<?php echo base_url();?>images/loader.gif" style="display:none;" class="pull-center loader-img">
					<?php } }?>
					</div>
</section>
            
            
          </div>
   
 
  
  
</div>
<div class="spacer"></div>
<div class="spacer"></div>
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

 <script>
	$('.slloadmore').one('click',function()
	{
		$('.loader-img').show();
		flagdata=$('.ifinder').last().val();
		flagger=$('.flagstopper').val();
		timelinecount=$('.timelinefeed').length;
		useris=$(".useris").val();
		remaining_data=parseInt(flagger)-parseInt(timelinecount);
		$('.slloadmore').text('Loading...');
	
	if(timelinecount<flagger)
		{
				
					   limit=5;
					
			   $.post("<?php echo base_url();?>index.php/feeds/get_this_user_share_data",{timelinecount:timelinecount,flagdata:flagdata,limit:limit,useris:useris},function(response)
			   {
			  		
						if(response)
						{
							
							$('.timelinefeed').last().after(response);
							if($('.timelinefeed').length==flagger)
							{
								$('.btn-cont').html('<button class="btn btn-success btn-block"><strong>End of Posts</strong></button>');
								
								$('.loader-img').hide();
							}
							else
							{
								$('.slloadmore').html('<strong>Load more posts</strong>');
								$('.loader-img').hide();
							}
						}
						
						
			   }
	   );
	   }
	   else
	   {
			$('.slloadmore').html('<strong>Load more posts</strong>');
	   }
	   
	}
	);
	
</script>
 