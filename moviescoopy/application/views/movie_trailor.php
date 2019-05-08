<div class="spacer"></div>
<div class="row">



  <div class="col-md-8 col-md-offset-1">
	
<section class="panel panel-default">
  <header class="panel-heading">
    Official Trailor <?php if(isset($movie[0]->name)){echo $movie[0]->name; } ?>
	  <?php

								  $movieid=$this->session->userdata('movie_id');
								  if($this->session->userdata('mlogged_in',true) && $movieid==$movie[0]->mid) { 
					       
						   ?>
		  
		  
		  
						  <a class="pull-right" href="<?php echo base_url();?>index.php/moviefolio/edit_trailor?id=<?php echo $this->session->userdata('movie_id'); ?>&&name=<?php echo $this->session->userdata('movie_name'); ?>" title="Edit Profile"> <i class="fa fa-pencil "></i> </a>
						 
                          
						  <?php } ?>
  </header>

  <?php if(isset($movie[0]->trailor)){echo html_entity_decode($movie[0]->trailor); } ?>
  
</section>
	</div>
</div>
 <style>
			 
			 iframe
{
height:400px !important;
width:100% !important;
}
			 </style>