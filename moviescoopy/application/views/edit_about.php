<div class="spacer"></div>
<div class="row">


  <div class="col-md-10 col-md-offset-1">
   <?php if($this->session->flashdata('serv_err')){ ?>
                      <div class="alert alert-danger fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('serv_err'); ?>
                      </div>
                <?php } ?>
				<?php if($this->session->flashdata('serv_suc')){ ?>
                      <div class="alert alert-success fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('serv_suc'); ?>
                      </div>
                <?php } ?>
	<section class="panel panel-default">
  
  <header class="panel-heading bg-light">
    
    <ul class="nav nav-tabs nav-justified">
      
      <li class="active">
        <a href="<?php echo base_url();?>index.php/moviefolio/edit?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?> " style="border-left:none;">
          About
        </a>
      </li>
      
      <li class="">
        <a href="<?php echo base_url();?>index.php/moviefolio/edit_trailor?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?> ">
          Official Trailor
        </a>
      </li>
      
      <li>
        <a href="<?php echo base_url();?>index.php/moviefolio/edit_cast_crew?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?> ">
          Cast & Crew
        </a>
      </li>
      
      <li>
        <a href="<?php echo base_url();?>index.php/moviefolio/edit_photos?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?> ">
          Photos
        </a>
      </li>
       
	   <li>
        <a href="<?php echo base_url();?>index.php/moviefolio/edit_videos?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?> ">
          Videos
        </a>
      </li>
    </ul>
    
  </header>
  
  <div class="panel-body">
    
    <div class="tab-content">
      
      
      
      <div id="profile" class="tab-pane active">
        <div class="col-md-10 col-md-offset-1">
			<section class="panel panel-default">
  
  
  <img src="<?php echo base_url();?>uploads/movie_other/<?php if(isset($movie[0]->banner_img)){echo $movie[0]->banner_img; } ?>" style="max-height:300px;width:100%;"/>
  <form action="<?php echo base_url();?>index.php/moviefolio/change_banner?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?>" method="post" enctype="multipart/form-data">
<?php if($movie[0]->banner_img!='') {?>   
   <input type="hidden" name="previmg" value="<?php echo $movie[0]->banner_img; ?>" /> 
   <?php } else { ?>
    <input type="hidden" name="previmg" value=">" /> 
   <?php } ?>
  <table class="table table-striped">
  <tr>
  <td>
  
   <div class="form-group">
                        
                        <label class="col-sm-3 control-label">
                          Change Banner
                        </label>
                        <div class="col-sm-8">
                          <input type="file" name="banner_img" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline input-s">
                          
                          
                        </div>
 </div>
  
  </td>
  <td>
  <input type="submit" value="Change" class="btn btn-info"/>
  </td>
  </tr>
  </table>
  </form>
  
  <form data-validate="parsley" action="<?php echo base_url();?>index.php/moviefolio/save_about?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?>" method="post">
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
         <textarea name="plot" style="height:250px;" class="form-control"><?php if(isset($movie[0]->plot)){echo $movie[0]->plot; } ?></textarea>
		</p>
        
      </div>
      
    </div>
    
    
  </section>
  
</article>

    <article class="chat-item left" id="chat-id-1">
      <table class="table">
	      <tr>
		  <td><h5>Movie</h5></td><td><h6> <input type="text" name="movie" id="input-id-1" data-required="true" value="<?php if(isset($movie[0]->name)){echo $movie[0]->name; } ?>" class="form-control"></h6><?php echo form_error('movie');?></td>
		  </tr>
		  <tr>
		  <td><h5>Director</h5></td><td><h6> <input type="text" name="director" id="input-id-1" value="<?php if(isset($movie[0]->director)){echo $movie[0]->director; } ?>" class="form-control"></h6></td>
		  </tr>
		  <tr>
		  <td><h5>Players</h5></td><td><h6> <input type="text" name="players" id="input-id-1" value="<?php if(isset($movie[0]->maincaste)){echo $movie[0]->maincaste; } ?>" class="form-control"></h6></td>
		  </tr>
		 
		  <tr>
		  <td><h5>Producers</h5></td><td><h6><input type="text" name="producer" id="input-id-1" value="<?php if(isset($movie[0]->producer)){echo $movie[0]->producer; } ?>" class="form-control"></h6></td>
		  </tr>
		   <tr>
		  <td><h5>Music</h5></td><td><h6> <input type="text" name="music" id="input-id-1" value="<?php if(isset($movie[0]->music)){echo $movie[0]->music; } ?>" class="form-control"></h6></td>
		  </tr>
		 
		  <tr>
		  <td><h5>Language</h5></td><td><h6><input type="text" name="language" id="input-id-1" value="<?php if(isset($movie[0]->language)){echo $movie[0]->language; } ?>" class="form-control"></h6></td>
		  </tr>
		   <tr>
		  <td><h5>Status</h5></td><td>
		  <select name="status" class="form-control">
			  <option value="nowrunning" <?php if(isset($movie[0]->moviestatus) && $movie[0]->moviestatus=='nowrunning'){echo "selected"; } ?>> Now Running </option>
			  <option value="upcoming" <?php if(isset($movie[0]->moviestatus) && $movie[0]->moviestatus=='upcoming'){echo "selected"; } ?>>Up Coming</option>
			  <option value="inshoot" <?php if(isset($movie[0]->moviestatus) && $movie[0]->moviestatus=='inshoot'){echo "selected"; } ?>>In Shoot</option>
		  </select>
		  </td>
		  </tr>
		  <tr>
		  <td><h5>Genre</h5></td><td><h6><input type="text" name="genre" id="input-id-1" value="<?php if(isset($movie[0]->genres)){echo $movie[0]->genres; } ?>" class="form-control"></h6></td>
		  </tr>
		  <tr>
		  <td><h5>Release</h5></td><td><h6><input type="text" name="release" id="input-id-1" value="<?php if(isset($movie[0]->expected_release)){echo $movie[0]->expected_release; } ?>" class="form-control"></h6></td>
		  </tr>
	  </table>
       <input type="submit" class="btn btn-info" style="float:right;" value="Save"/>
    </article>
    
  </section>
 
</form> 
 
</section>
		</div>
      </div>
     
      
    </div>
    
  </div>
  
</section>
  </div>
</div>  
<div class="spacer"></div>
<div class="spacer"></div>