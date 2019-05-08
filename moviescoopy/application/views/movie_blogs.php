
<section id="content">
        
        <section class="vbox">
          
         
            
            <section class="hbox stretch">
			<section class="vbox">
                
				 <section class="scrollable wrapper">
				 <div class="spacer"></div>
<div class="row">
      <input type="hidden" class="userlog" value="<?php echo $this->session->userdata('user_id');?>" />
  <div class="col-lg-9">
    
    <!-- chat -->
    
    <section class="panel panel-default">
      
      <header class="panel-heading">
       <?php if($mblog){echo $mblog[0]->sname;} ?>
	   &nbsp;<span class="label bg-success"><?php if($mblog){echo $mblog[0]->stitle;} ?></span>
	   
	      <span> 
								<?php
									if($mblog){
									$CI =& get_instance();
									$usid=$this->session->userdata('user_id');
									if($this->session->userdata('logged_in',true) && $this->session->userdata('user_type')=='P')  {
									$sharetypeis='blog';
									$sharecheck=$CI->user_model->check_share($sharetypeis,$usid,$mblog[0]->id);
								?>
							  
								<?php if($sharecheck==0) {?>
							
								<button class="btn btn-info cntnt blogshare btn-xs" rel="<?php echo $mblog[0]->id;?>">Share</button></td>
							  
							  <?php } else { ?>
							  
							  <button class="btn btn-info btn-xs">You shared this post</button>
							  
							  <?php } ?>
							  
							 
							  <?php } } ?>
							  
							  </span>
	   
	   <span class="text-muted m-l-sm pull-right" style="margin:4px;">
          
          <i class="fa fa-clock-o">
          </i><?php echo $mblog[0]->postdate;?></span>
      </header>
	 <table class="table table-bordered">
	 <tr>
	 <td>
	 <img src="<?php echo base_url();?>uploads/blogs/<?php echo $mblog[0]->image;?>">
	 </td>
	 <td>
	 <p><?php echo $mblog[0]->description; ?></p>
	 </td>
	 </tr>
	 </table>
      
    </section>
    
    <!-- /chat -->
   
  </div>
  
 
   <div class="col-lg-2-4">
                    
        
                    
                    <section class="panel panel-default">
                      
                      <header class="panel-heading">
                       <a href="<?php echo base_url();?>index.php/blogzone"> Latest Blogs</a>
                      </header>
                      
                      <section class="panel-body slim-scroll" data-height="600px">
                        <?php if($latest_blogs) { foreach($latest_blogs as $lblg) { ?>
                        <article class="media">
                          
                         
                          
                          <div class="media-body">
                            
                           
                            <a href="<?php echo base_url();?>index.php/blogzone/blog?id=<?php echo $lblg->id; ?>" class="h4">
                              <?php echo $lblg->sname;?>
                            </a>
                            
                            <small class="block">
                             
                              <span class="label label-success">
                               <?php echo $lblg->stitle;?>
                              </span>
                            </small>
                            
                            <small class="block m-t-sm">
                           <?php 
								echo substr($lblg->description,0,90);?>.....
						  </small>
                            <a href="<?php echo base_url();?>index.php/blogzone/blog?id=<?php echo $lblg->id; ?>"><span class="label label-warning pull-right">
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
                            
                            
                                  
                                  <a class="btn btn-default" href="<?php echo base_url();?>index.php/blogzone">
                                    More of Latest Blogs
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
 <script src="<?php echo base_url();?>js/charts/sparkline/jquery.sparkline.min.js">
    </script>
	<script>
	$(".blogshare").one("click",function()
	{
		sharetype='blog';
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
			//$(this).removeClass('movpostshare');
			//$(this).html('You shared this post');
	}
	);
	
	
</script>