<div class="spacer"></div>
<div class="row">


  <div class="col-md-10 col-md-offset-1">
	
<section class="panel panel-default">
  <header class="panel-heading">
    Photos
	  <?php

								  $movieid=$this->session->userdata('movie_id');
								  if($this->session->userdata('mlogged_in',true) && $movieid==$movie[0]->mid) { 
					       
						   ?>
		  
		  
		  
						  <a class="pull-right" href="<?php echo base_url();?>index.php/moviefolio/edit_photos?id=<?php echo $this->session->userdata('movie_id'); ?>&&name=<?php echo $this->session->userdata('movie_name'); ?>" title="Edit Profile"> <i class="fa fa-pencil "></i> </a>
						 
                          
						  <?php } ?>
  </header>
  <div class="row gallery" id="Gallery" style="margin-top:20px;margin-left:2px;margin-right:2px;margin-bottom:20px;">
  <?php if($movie_photos){foreach($movie_photos as $mp) { ?>

		
		<a href="<?php echo base_url();?>uploads/movie_gallery/<?php echo $mp->image; ?>">
		<div class="col-lg-3">
  
  <section class="panel panel-default">
    
    <div class="panel-body">
      
      <img src="<?php echo base_url();?>uploads/movie_gallery/<?php echo $mp->image; ?>"  alt="Image 001" style="width:180px;height:160px;"/>
      
    </div>
    
    
  </section>
  
</div>
		
		
		</a>
 
  
<?php } }?>
  </div>
</section>
	</div>
	
</div>
