<div class="spacer"></div>
<div class="row">



  <div class="col-md-8 col-md-offset-1">
	
<section class="panel panel-default">
  
  <header class="panel-heading">
    About  <?php if(isset($movie[0]->name)){echo $movie[0]->name; } ?>
	  <?php

								  $movieid=$this->session->userdata('movie_id');
								  if($this->session->userdata('mlogged_in',true) && $movieid==$movie[0]->mid) { 
					       
						   ?>
		  
		  
		  
						  <a class="pull-right" href="<?php echo base_url();?>index.php/moviefolio/edit?id=<?php echo $this->session->userdata('movie_id'); ?>&&name=<?php echo $this->session->userdata('movie_name'); ?>" title="Edit Profile"> <i class="fa fa-pencil "></i> </a>
						 
                          
						  <?php } ?>
  </header>
  <img src="<?php echo base_url();?>uploads/movie_other/<?php if(isset($movie[0]->banner_img)){echo $movie[0]->banner_img; } ?>" style="max-height:300px;width:100%;"/>
  <section class="chat-list panel-body">
    <article class="chat-item right" id="chat-id-1">
  
  <h5 class="pull-right" style="font-weight:bold;">
    Plot
  </h5>
  
  <section class="chat-body">
    
    <div class="panel bg bg-success text-sm m-b-none">
      
      <div class="panel-body">
        
        <span class="arrow right">
        </span>
        
        <p class="m-b-none">
         <?php if(isset($movie[0]->plot)){echo $movie[0]->plot; } ?>
		</p>
        
      </div>
      
    </div>
    
    
  </section>
  
</article>
    <article class="chat-item left" id="chat-id-1">
      <table class="table">
		  <tr>
		  <td><h5>Director</h5></td><td><h6> <?php if(isset($movie[0]->director)){echo $movie[0]->director; } ?></h6></td>
		  </tr>
		  <tr>
		  <td><h5>Players</h5></td><td><h6><?php if(isset($movie[0]->maincaste)){echo $movie[0]->maincaste; } ?></h6></td>
		  </tr>
		  <tr>
		  <td><h5>Producers</h5></td><td><h6><?php if(isset($movie[0]->producer)){echo $movie[0]->producer; } ?></h6></td>
		  </tr>
		  <tr>
		  <td><h5>Music</h5></td><td><h6><?php if(isset($movie[0]->music)){echo $movie[0]->music; } ?></h6></td>
		  </tr>
		  <tr>
		  <td><h5>Language</h5></td><td><h6><?php if(isset($movie[0]->language)){echo $movie[0]->language; } ?></h6></td>
		  </tr>
		  <tr>
		  <td><h5>Status</h5></td><td><h6><?php if(isset($movie[0]->moviestatus)){echo $movie[0]->moviestatus; } ?></h6></td>
		  </tr>
		  <tr>
		  <td><h5>Genre</h5></td><td><h6><?php if(isset($movie[0]->genres)){echo $movie[0]->genres; } ?></h6></td>
		  </tr>
		  <tr>
		  <td><h5>Release</h5></td><td><h6><?php if(isset($movie[0]->expected_release)){echo $movie[0]->expected_release; } ?></h6></td>
		  </tr>
	  </table>

    </article>
    
  </section>
  
 
</section>
	</div>
</div>
