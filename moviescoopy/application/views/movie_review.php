
<section id="content">
        
        <section class="vbox">
          
         
            
            <section class="hbox stretch">
			<section class="vbox">
                
				 <section class="scrollable wrapper">
				 <div class="spacer"></div>
<div class="row">
  
  <div class="col-lg-7">
    
    <!-- chat -->
    <input type="hidden" class="userlog" value="<?php echo $this->session->userdata('user_id');?>" />
    <section class="panel panel-default">
      
      <header class="panel-heading">
	  <a class="h5" href="<?php echo base_url();?>index.php/moviefolio/movie?id=<?php echo $mreview[0]->mid; ?>&&name=<?php echo $mreview[0]->name; ?>">
       Review of <strong><?php if($mreview){echo $mreview[0]->name;} ?></strong></a>
	   <span> 
								<?php
									$CI =& get_instance();
									$share_for='moviepost';
						             $count_shares=$CI->user_model->get_this_share_count($share_for,$mreview[0]->mrevid);
									if($mreview){
								    
									$usid=$this->session->userdata('user_id');
									if($this->session->userdata('logged_in',true) && $this->session->userdata('user_type')=='P')  {
									$sharetypeis='review';
									$sharecheck=$CI->user_model->check_share($sharetypeis,$usid,$mreview[0]->mrevid);
									 
								?>
							  
								<?php if($sharecheck==0) {?>
							
								<button class="btn btn-info cntnt reviewshare btn-xs pull-right" data-title="Share this within loop" data-placement="bottom" data-toggle="tooltip" rel="<?php echo $mreview[0]->mrevid;?>">Share</button>
							  
							  <?php } else { ?>
							  
							  <button class="btn btn-info btn-xs pull-right" data-title="You shared this review within loop" data-placement="bottom" data-toggle="tooltip"><i class="fa fa-check ">
                              </i>
							  Shared</button>
							  
							  <?php } ?>
							  
							 
							  <?php } }?>
							
							  </span>
							 <button class="btn btn-dark btn-xs points pull-right"> <?php if($count_shares==''){ echo "0 shares";} else if($count_shares=='1'){ echo "1 share";} else { echo $count_shares.' shares';}?></button>
						    
	   	 
      </header>
      <img src="<?php echo base_url();?>uploads/movie_other/<?php if($mreview){echo $mreview[0]->banner_img;} ?>" title="Review of <?php if($mreview){echo $mreview[0]->name;} ?>" style="width:100%;" />
      <section class="chat-list panel-body" >
        
          <section class="chat-body">
            
            <div class="panel b-light text-sm m-b-none">
                 <span class="text-muted m-l-sm pull-right" style="padding:20px;">
          
          <i class="fa fa-clock-o">
          </i>
		 
		  
		  <?php if($mreview){
		  
				  $CI =& get_instance();
										$dsend=$CI->user_model->ago($mreview[0]->postedon);
										echo $dsend;
				
					} 
		  
		  ?>
		  
		  </span>
		 
              <div class="panel-body">
                
               <h5><strong> <?php if($mreview){echo $mreview[0]->review_title;} ?></strong></h5>
                 <hr/>
                <p class="m-b-none">
                 <?php if($mreview){echo $mreview[0]->review;} ?>
                </p>
                
              </div>
              
            </div>
            
           
            
          </section>
        

        
      </section>
   
      
    </section>
    
    <!-- /chat -->
   
  </div>
  
  <div class="col-lg-2-4">
    
    <!-- .comment-list -->
     <section class="panel panel-default">
	  <header class="panel-heading">
              <a href="<?php echo base_url();?>index.php/reviews"> More Reviews</a>
                      </header>
    <section class="panel-body slim-scroll" data-height="700">
      <?php if($reviews) { foreach($reviews as $rev) {  ?>
      <article class="comment-item" id="comment-id-1">
        
       
        
        
        <section class="comment-body panel panel-default">
          
          <header class="panel-heading bg-white">
            
           <a href="<?php echo base_url();?>index.php/reviews/review?id=<?php echo $rev->mid; ?>&& name=<?php echo $rev->name; ?>">
            <label class="label bg-danger m-l-xs" style="cursor:pointer;">
              <?php echo $rev->name;?>
            </label></a>
            
           
          </header>
          
          <div class="panel-body">
		  <div>
		    <a class="btn btn-default btn-xs active" style="margin-top:20px;"  href="<?php echo base_url();?>index.php/reviews/review?id=<?php echo $rev->mid; ?>&& name=<?php echo $rev->name; ?>">
            <img class="pull-left" style="width:100%;" title="Review of <?php echo $rev->name;?>" src="<?php echo base_url();?>uploads/movie_main/<?php echo $rev->image;?>"/>
            </a>
			</div>
			<p style="margin-top:5px;"><?php echo $rev->language;?></p>
            <div class="comment-action m-t-sm" >
              
              <a class="btn btn-default btn-xs active" style="margin-top:20px;"  href="<?php echo base_url();?>index.php/reviews/review?id=<?php echo $rev->mid; ?>&& name=<?php echo $rev->name; ?>">
                
                Read Review 
              </a>
              
             
            </div>
            
          </div>
          
        </section>
        
      </article>
     <?php } }?>
	
    </section>
	
                      <footer class="panel-footer">
                        
                        <!-- chat form -->
                        
                        <article class="chat-item" id="chat-form">
                         
                          <section class="chat-body">
                            
                            
                                  
                                  <a class="btn btn-default" href="<?php echo base_url();?>index.php/reviews">
                                    All Reviews
                                  </a>
                               
                            
                          </section>
                          
                        </article>
                        
                      </footer>
    </section>
    <!-- / .comment-list -->
    
  </div>
   <div class="col-lg-2-4">
                    
        
                    
                    <section class="panel panel-default">
                      
                      <header class="panel-heading">
                       <a href="<?php echo base_url();?>index.php/newszone"> Latest News</a>
                      </header>
                      
                      <section class="panel-body slim-scroll" data-height="700px">
                        <?php if($latest_news) { foreach($latest_news as $lnw) { ?>
                        <article class="media">
                          
                         
                          
                          <div class="media-body">
                            
                           
                            <a href="<?php echo base_url();?>index.php/newszone/news?id=<?php echo $lnw->eid; ?>" class="h4">
                              <?php echo $lnw->title;?>
                            </a>
                            
                            <small class="block">
                             
                              <span class="label label-success">
                                By Admin
                              </span>
                            </small>
                            
                            <small class="block m-t-sm">
                           <?php 
								echo substr($lnw->description,0,90);?>.....
						  </small>
                            <a href="<?php echo base_url();?>index.php/newszone/news?id=<?php echo $lnw->eid; ?>"><span class="label label-warning pull-right">
                                Read more
                              </span></a>
                          </div>
                          
                        </article>
						<div class="line pull-in">
                        </div>
                        <?php } } ?>
                        
                        
                        
                      </section>
                       <footer class="panel-footer">
                        
                        <!-- chat form -->
                        
                        <article class="chat-item" id="chat-form">
                         
                          <section class="chat-body">
                            
                            
                                  
                                  <a class="btn btn-default" href="<?php echo base_url();?>index.php/newszone">
                                    More of Latest News
                                  </a>
                               
                            
                          </section>
                          
                        </article>
                        
                      </footer>
                    </section>
                     
                  </div>
</div>
</section>
</section>
</section>
</section>
</section>
<div class="spacer"></div>
<div class="spacer"></div>
