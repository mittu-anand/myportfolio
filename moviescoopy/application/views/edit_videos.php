<div class="spacer"></div>
<div class="row">


  <div class="col-md-10 col-md-offset-1">
	<section class="panel panel-default">
  
  <header class="panel-heading bg-light">
    
    <ul class="nav nav-tabs nav-justified">
      
      <li>
        <a href="<?php echo base_url();?>index.php/moviefolio/edit?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?> " style="border-left:none;">
          About
        </a>
      </li>
      
      <li >
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
       
	   <li  class="active">
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
<form action="<?php echo base_url();?>index.php/moviefolio/save_video?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?> " method="post">
  <table class="table table-striped">
  <tr>
  <td>
		 
	
      
      <div class="form-group"> <label class="col-sm-2 control-label">Add Video</label> 
	  <div class="col-sm-10"> <div class="m-b">
      <input type="hidden" name="movieid" value="<?php echo $movie[0]->mid;?>"/>
	  <input name="movie_video"  style="width:100%;" placeholder="Youtube Embed Url" class="form-control" type="text">
 </div> 
 <div> 
</div> </div> </div> 
      
 
	
    
	
  </td>
  <td>
   <input type="submit" class="btn btn-info" value="Add">
  </td>
  </tr>
  
  </table>
  </form>
  
 
</section>
		</div>
		
		
  <div class="col-md-10 col-md-offset-1">
  <div class="row">
  <?php if($mvideos) { foreach($mvideos as $mv) { ?>

    <div class="col-lg-3" style="">
  
  <section class="panel panel-default">
    
    <div class="panel-body">
      
     <?php echo html_entity_decode($mv->video); ?>
	  
      <a href="<?php echo base_url();?>index.php/moviefolio/delete_gallery_videos?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?>&&dv_id= <?php echo $mv->mv_id;?>" title="Delete Video"><i class="fa fa-times-circle pull-right">
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

 <style>
			 
			 iframe
{

width:100% !important;
height:200px;
}
			 </style>