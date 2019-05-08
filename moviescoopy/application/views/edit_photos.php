
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
      
      <li >
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
      
      <li class="active">
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
  <form action="<?php echo base_url();?>index.php/moviefolio/change_movie_image?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?>" method="post" enctype="multipart/form-data">
   <?php if($movie[0]->banner_img!='') {?>   
   <input type="hidden" name="previmg" value="<?php echo $movie[0]->image; ?>" /> 
   <?php } else { ?>
    <input type="hidden" name="previmg" value=">" /> 
   <?php } ?>
  <table class="table table-striped">
  <tr>
  <td> <img class="img-circle pull-left thumb" src="<?php echo base_url();?>uploads/movie_main/<?php echo $movie[0]->image; ?>"></td>
  <td>
  
   <div class="form-group">
                        
						
                       
                        <div class="col-sm-10">
                          <input type="file" name="movie_img" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline input-s">
                          
                          
                        </div>
 </div>
  
  </td>
  <td>
  <input type="submit" value="Change" class="btn btn-info"/>
  </td>
  </tr>
  </table>
  </form>
  
 
</section>

<section class="panel panel-default">
  <form action="<?php echo base_url();?>index.php/moviefolio/upload_movie_images?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?>" method="post" enctype="multipart/form-data">
  <table class="table table-striped">
  <tr>
  <td>
  
   <div class="form-group">
                        
                        <label class="col-sm-3 control-label">
                          Upload Images
                        </label>
                        <div class="col-sm-8">
                          <input type="file" name="userfile[]" id="userfile"  multiple="" name="banner_img" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline input-s">
                          
                          
                        </div>
 </div>
  
  </td>
  <td>
  <input type="submit" value="Upload" class="btn btn-info"/>
  </td>
  </tr>
  </table>
  </form>
 
</section>
<div class="row">
  <?php if($movie_photos) { foreach($movie_photos as $mf) { ?>

    <div class="col-lg-3" style="">
  
  <section class="panel panel-default">
    
    <div class="panel-body">
      
      <img src="<?php echo base_url();?>uploads/movie_gallery/<?php echo $mf->image; ?>" style="width:100px;height:150px;"/>
      <a href="<?php echo base_url();?>index.php/moviefolio/delete_gallery_images?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?>&&dimg_id= <?php echo $mf->m_img_id;?>" title="Delete Image"><i class="fa fa-times-circle pull-right">
          </i></a>
    </div>
    
    
  </section>
  
</div>
  <?php } } ?>
  </div>
		</div>
      </div>
     
      
    </div>
    
  </div>
  
</section>
  </div>
</div>  