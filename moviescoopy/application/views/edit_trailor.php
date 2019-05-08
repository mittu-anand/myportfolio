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
      
      <li class="">
        <a href="<?php echo base_url();?>index.php/moviefolio/edit?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?> " style="border-left:none;">
          About
        </a>
      </li>
      
      <li class="active">
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
  
  <section class="chat-list panel-body">
 
<form action="<?php echo base_url();?>index.php/moviefolio/save_trailor?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?>" method="post">
    <article class="chat-item left" id="chat-id-1">
	<div class="form-group">
  
  <label class="col-sm-2 control-label">
    Youtube Embed URL
  </label>
  
  <div class="col-sm-10">
    
    <input class="form-control" type="text"  name="trailor" value='<?php if(isset($movie[0]->trailor)){echo html_entity_decode($movie[0]->trailor); } ?>'>
    
  </div>
  
</div>
<div class="spacer">
</div>
      <div class="col-sm-12">
       <input type="submit" class="btn btn-info" style="float:right;" value="Save"/>
	   </div>
    </article>
</form>   
  </section>
  
 
</section>
		</div>
      </div>
     
      
    </div>
    
  </div>
  
</section>
  </div>
</div>  