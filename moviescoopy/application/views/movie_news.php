
<section id="content">
        
        <section class="vbox">
          
         
            
            <section class="hbox stretch">
			<section class="vbox">
                
				 <section class="scrollable wrapper">
				 <div class="spacer"></div>
<div class="row">
  
  <div class="col-lg-9">
    
    <!-- chat -->
    <input type="hidden" class="userlog" value="<?php echo $this->session->userdata('user_id');?>" />
    <section class="panel panel-default">
      
      <header class="panel-heading">
       <?php if($mnews){echo $mnews[0]->title;} ?>   <span class="label bg-success">Posted by Admin</span>
	   <span> 
								<?php
									if($mnews){
									$CI =& get_instance();
									$usid=$this->session->userdata('user_id');
									if($this->session->userdata('logged_in',true) && $this->session->userdata('user_type')=='P')  {
									$sharetypeis='news';
									$sharecheck=$CI->user_model->check_share($sharetypeis,$usid,$mnews[0]->eid);
								?>
							  
								<?php if($sharecheck==0) {?>
							
								<button class="btn btn-info cntnt newsshare btn-xs" rel="<?php echo $mnews[0]->eid;?>">Share</button>
							  
							  <?php } else { ?>
							  
							  <button class="btn btn-info btn-xs"><i class="fa fa-check ">
                              </i>
                            Shared</button>
							  
							  <?php } ?>
							  
							 
							  <?php } } ?>
							  
							  </span>
	   
	   <span class="text-muted m-l-sm pull-right" style="margin:4px;">
          
          <i class="fa fa-clock-o">
          </i><?php echo $mnews[0]->postedon;?></span>
      </header>
	 <table class="table table-bordered">
	 <tr>
	 <td>
	 <img src="<?php echo base_url();?>uploads/news/<?php echo $mnews[0]->images;?>" style="max-width:400px;">
	 </td>
	 <td>
	 <p><?php echo $mnews[0]->description; ?></p>
	 </td>
	 </tr>
	 </table>
      
    </section>
    
    <!-- /chat -->
   
  </div>
  
 
   <div class="col-lg-2-4">
                    
        
                    
                    <section class="panel panel-default">
                      
                      <header class="panel-heading">
                       <a href="<?php echo base_url();?>index.php/newszone"> Latest News</a>
                      </header>
                      
                      <section class="panel-body slim-scroll" data-height="600px">
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
<div class="spacer"></div>
</section>
</section>
</section>
</section>
</section>
<script src="<?php echo base_url();?>js/charts/sparkline/jquery.sparkline.min.js">
</script>
 <script>
   $(".newsshare").one("click",function()
	{
		sharetype='news';
		sharedby=$(".userlog").val();
		shareid=$(this).attr('rel');
		
		$.post("<?php echo base_url();?>index.php/moviefolio/share_movie",{sharetype:sharetype,sharedby:sharedby,shareid:shareid},function(response)
	{
		if(response)
		{
			location.href="";
		}
		else
		{
		}
	}
	
	);
	
	}
	);
	
	
</script>

