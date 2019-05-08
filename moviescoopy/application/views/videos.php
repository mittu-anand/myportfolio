
 <section class="vbox">
      
     <!--<?php echo $this->load->view('stack_menu'); ?>-->
      
      <section>
        <div class="spacer"></div>
        <section class="hbox stretch">
          
     
          <section id="content">
            
            <section class="wrapper">
			 <div class="col-lg-12">
			
			<div class="row">
			 <div class="col-sm-2">
                <?php echo $this->view('video_menu'); ?>
			</div>
				 <div class="col-lg-10">
					 <div class="row">
					 
					 <?php if($videos) { foreach($videos as $vds) { ?>
							<div class="col-sm-3">
							<div class="panel-body">
			
									<a href="<?php echo base_url();?>index.php/videos/watch_video?id=<?php echo  $vds->vid; ?>">
                                  	<?php if($vds->image!=''){ ?>
								   <img src="http://i1.ytimg.com/vi/<?php echo $vds->image; ?>/hqdefault.jpg" class="img-port" rel="http://i1.ytimg.com/vi/<?php echo $vds->image; ?>/hqdefault.jpg" style="cursor: pointer;width:100%;" />
								   <?php } else { ?>
								<img src="<?php echo base_url();?>images/novprev_img.jpg"  style="cursor: pointer;width:100%;" />
								
								<?php } ?>
								</a> 
                           <div class="small-sp"></div>
						   <p><a href=""><?php echo $vds->vname;?></a></p>
							</div>
							</div>
					<?php } }?>
					 </div>
				 </div>
			 </div>
			 </div>
            </section>
            
            
          </section>
          
          
        </section>
        
      </section>
      
    </section>
    <div class="spacer"></div>
	 <div class="spacer"></div>
	  <div class="spacer"></div>