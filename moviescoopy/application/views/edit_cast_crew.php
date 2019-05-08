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
      
      <li class="active">
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
<form action="<?php echo base_url();?>index.php/moviefolio/save_caste_crew?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?> " method="post">
  <table class="table table-striped">
  <tr>
  <td>
		 
	 <div class="input-group text-sm">
      
      <div class="form-group"> <label class="col-sm-2 control-label">Add Cast</label> 
	  <div class="col-sm-10"> <div class="m-b">
      <input type="hidden" name="movieid" value="<?php echo $movie[0]->mid;?>"/>
	  <select id="select2-option" name="cast" style="width:260px"> 
	<?php if($actors) { foreach($actors as $act) { ?>
		<option value="<?php echo $act->cid; ?>"><?php echo $act->name; ?></option>
	<?php } }?>
 </select>
 </div> 
 <div> 
</div> </div> </div> 
      
    </div>
	
    
	
  </td>
  <td>
   <input type="submit" class="btn btn-info" value="Add">
  </td>
  </tr>
  
  </table>
  </form>
  <section class="chat-list panel-body">
 

    <article class="chat-item left" id="chat-id-1">

	   <section class="panel panel-default">
  
  <header class="panel-heading">
    
    Cast <?php if(isset($movie[0]->name)){echo $movie[0]->name; } ?>
  </header>
  
  <ul class="list-group alt">
    
	<?php if($casts){ foreach($casts as $cas) { ?>
    <li class="list-group-item">
      
      <div class="media">
        
        
        
        <div class="pull-right text-success m-t-sm">
          
          <a href="<?php echo base_url();?>index.php/moviefolio/delete_movie_cast?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?>&&dc_id= <?php echo $cas->mcid;?>"><i class="fa fa-times-circle">
          </i></a>
          
        </div>
        
        <div class="media-body">
          
          <div>
            <a href="#">
              <?php echo $cas->cast;?>
            </a>
          </div>
          
         
        </div>
        
      </div>
      
    </li>
    <?php } } ?>
   
  </ul>
  
</section>

    </article>
  
  </section>
  
 
</section>
		</div>
		
	<div class="col-md-10 col-md-offset-1">
<section class="panel panel-default">
<form action="<?php echo base_url();?>index.php/moviefolio/save_movie_crew?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?> " method="post">
  <table class="table table-striped">
  <tr>
  <td>
		 
	 <div class="input-group text-sm">
      
      <div class="form-group"> <label class="col-sm-2 control-label">Add Crew</label> 
	  <div class="col-sm-10"> <div class="m-b">
      <input type="hidden" name="movieid" value="<?php echo $movie[0]->mid;?>"/>
	  <select class="select2-option" name="crew" style="width:260px;height:30px;"> 
	<?php if($celebs) { foreach($celebs as $clb) { ?>
		<option value="<?php echo $clb->cid; ?>"><?php echo $clb->name; ?></option>
	<?php } }?>
 </select>
 </div> 
 <div> 
</div> </div> </div> 
      
    </div>
	
    
	
  </td>
  <td>
   <input type="submit" class="btn btn-info" value="Add">
  </td>
  </tr>
  
  </table>
  </form>
  <section class="chat-list panel-body">
 

    <article class="chat-item left" id="chat-id-1">

	   <section class="panel panel-default">
  
  <header class="panel-heading">
    
    Crew <?php if(isset($movie[0]->name)){echo $movie[0]->name; } ?>
  </header>
  
  <ul class="list-group alt">
    
	<?php if($crew){ foreach($crew as $crw) { ?>
    <li class="list-group-item">
      
      <div class="media">
        
        
        
        <div class="pull-right text-success m-t-sm">
          
          <a href="<?php echo base_url();?>index.php/moviefolio/delete_movie_crew?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?>&&dc_id= <?php echo $crw->mcrewid;?>"><i class="fa fa-times-circle">
          </i></a>
          
        </div>
        
        <div class="media-body">
          
          <div>
            <a href="#">
              <?php echo $crw->crew;?>
            </a>
          </div>
          
         
        </div>
        
      </div>
      
    </li>
    <?php } } ?>
   
  </ul>
  
</section>

    </article>
  
  </section>
  
 
</section>
		</div>	
		
		
		
		
		
		
		
      </div>
     
      
    </div>
    
  </div>
  
</section>
  </div>
</div>  