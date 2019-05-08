<div class="spacer"></div>
<div class="row">


  <div class="col-md-10 col-md-offset-1">
	
<section class="panel panel-default">
  <header class="panel-heading">
    Videos
	  <?php

								  $movieid=$this->session->userdata('movie_id');
								  if($this->session->userdata('mlogged_in',true) && $movieid==$movie[0]->mid) { 
					       
						   ?>
		  
		  
		  
						  <a class="pull-right" href="<?php echo base_url();?>index.php/moviefolio/edit_videos?id=<?php echo $this->session->userdata('movie_id'); ?>&&name=<?php echo $this->session->userdata('movie_name'); ?>" title="Edit Profile"> <i class="fa fa-pencil "></i> </a>
						 
                          
						  <?php } ?>
  </header>
  <div class="row" style="margin-top:20px;margin-left:2px;margin-right:2px;margin-bottom:20px;">
  <?php if($mvideos) { foreach($mvideos as $mvd){ ?>
  <div class="col-lg-6">
  
  <section class="panel panel-default">
    
    <div class="panel-body">
      
	   <?php if(isset($mvd->video)){echo html_entity_decode($mvd->video); } ?>
      
    </div>
    
    
  </section>
  
</div>
<?php } }?>
  </div>
</section>
	</div>
	
</div>
 <style>
			 
			 iframe
{

width:100% !important;
}
			 </style>