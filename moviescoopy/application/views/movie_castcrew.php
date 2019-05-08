<div class="spacer"></div>
<div class="row">
<?php $CI =& get_instance(); ?>
 <div class="col-md-10 col-md-offset-1">
	
<section class="panel panel-default">
  <header class="panel-heading">
    Cast
	<?php
		$movieid=$this->session->userdata('movie_id');
	    if($this->session->userdata('mlogged_in',true) && $movieid==$movie[0]->mid) { 
					       
	?>
		  
		  
		  
						  <a class="pull-right" href="<?php echo base_url();?>index.php/moviefolio/edit_cast_crew?id=<?php echo $this->session->userdata('movie_id'); ?>&&name=<?php echo $this->session->userdata('movie_name'); ?>" title="Edit Profile"> <i class="fa fa-pencil "></i> </a>
						 
                          
						  <?php } ?>
  </header>
  <div class="row" style="margin-top:20px;margin-left:2px;margin-right:2px;margin-bottom:20px;">
  <?php
if($cast){  
  foreach($cast as $cst) { ?>
 
    <?php $this_celeb=$CI->get_this_celebrity($cst->cid); ?>
  <div class="col-lg-3">
  
  <section class="panel panel-default">
    
    <div class="panel-body">
      
      <div class="clearfix text-center m-t">
        
        <div class="inline">
          
          <div data-animate="1000" data-line-cap="butt" data-size="130" data-scale-color="false" data-track-color="#f5f5f5" data-bar-color="#4cc0c1" data-line-width="5" data-percent="75" class="easypiechart easyPieChart" style="width: 130px; height: 130px; line-height: 130px;">
            
            <div class="thumb-lg">
              
         
              <img class="img-circle" src="<?php echo base_url();?>uploads/celebs/<?php if(isset($this_celeb[0]->images) && $this_celeb[0]->images!=''){echo $this_celeb[0]->images; }else{ if($this_celeb[0]->gender=='M'){ echo "avatar_default.jpg";}else{echo "favatar_default.jpg";} } ?>">
            
            </div>
            
            <canvas height="130" width="130">
            </canvas>
          </div>
          
          <div class="h4 m-t m-b-xs">
            <?php echo $this_celeb[0]->name?>
          </div>
          
          <small class="text-muted m-b">
            <?php echo $this_celeb[0]->type?>
          </small>
          
        </div>
        
      </div>
      
    </div>
    
    
  </section>
  
</div>
<?php } }?>
  </div>
</section>
	</div>
	<div class="spacer"></div>

	
	
	
	
	  <div class="col-md-10 col-md-offset-1">
	
<section class="panel panel-default">
  <header class="panel-heading">
    Crew  <?php if(isset($movie[0]->name)){echo $movie[0]->name; } ?>
	  <?php

								  $movieid=$this->session->userdata('movie_id');
								  if($this->session->userdata('mlogged_in',true) && $movieid==$movie[0]->mid) { 
					       
						   ?>
		  
		  
		  
						  <a class="pull-right" href="<?php echo base_url();?>index.php/moviefolio/edit_cast_crew?id=<?php echo $this->session->userdata('movie_id'); ?>&&name=<?php echo $this->session->userdata('movie_name'); ?>" title="Edit Profile"> <i class="fa fa-pencil "></i> </a>
						 
                          
						  <?php } ?>
  </header>
    <div class="row" style="margin-top:20px;margin-left:2px;margin-right:2px;margin-bottom:20px;">
  <?php 
  if($crew){
  foreach($crew as $crw) { ?>
 
 
    <?php $this_celeb=$CI->get_this_celebrity($crw->cid); ?>
  <div class="col-lg-3">
  
  <section class="panel panel-default">
    
    <div class="panel-body">
      
      <div class="clearfix text-center m-t">
        
        <div class="inline">
          
          <div data-animate="1000" data-line-cap="butt" data-size="130" data-scale-color="false" data-track-color="#f5f5f5" data-bar-color="#4cc0c1" data-line-width="5" data-percent="75" class="easypiechart easyPieChart" style="width: 130px; height: 130px; line-height: 130px;">
            
            <div class="thumb-lg">
              
         
              <img class="img-circle" src="<?php echo base_url();?>uploads/celebs/<?php if(isset($this_celeb[0]->images) && $this_celeb[0]->images!=''){echo $this_celeb[0]->images; }else{ if($this_celeb[0]->gender=='M'){ echo "avatar_default.jpg";}else{echo "favatar_default.jpg";} } ?>">
            
            </div>
            
            <canvas height="130" width="130">
            </canvas>
          </div>
          
          <div class="h4 m-t m-b-xs">
            <?php echo $this_celeb[0]->name?>
          </div>
          
          <small class="text-muted m-b">
            <?php echo $this_celeb[0]->type?>
          </small>
          
        </div>
        
      </div>
      
    </div>
    
    
  </section>
  
</div>
<?php }} ?>
  </div>
</section>
	</div>
	
 
	
</div>
