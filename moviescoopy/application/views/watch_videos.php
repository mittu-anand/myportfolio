
 <section class="vbox">
      
     <?php echo $this->load->view('stack_menu'); ?>
      
      <section>
        <div class="spacer"></div>
        <section class="hbox stretch">
          
     
          <section id="content">
            
            <section class="wrapper">
			 <div class="col-lg-12">
			
			<div class="row">
				 <div class="col-lg-2">
					 <?php echo $this->view('video_menu'); ?>
				</div>
				 <div class="col-lg-6">
				 <?php if(isset($video)){echo html_entity_decode($video[0]->vurl);}?>
									
			    </div>
				 <div class="col-lg-2">
				 <?php if($latest_videos) { foreach($latest_videos as $vds) { ?>
							
							
								<a href="<?php echo base_url();?>index.php/videos/watch_video?id=<?php echo  $vds->vid; ?>"><img src="<?php echo base_url();?>uploads/videos/thumb_small/<?php echo $vds->image;?>" title="Watch <?php echo $vds->vname;?>" alt="<?php echo $vds->vname;?>" style="border:1px solid white;padding:2px;width:100%;"></a>	
                           <div class="small-sp"></div>
						   <p><a href=""><?php echo $vds->vname;?></a></p>
						
							
					<?php } }?>
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