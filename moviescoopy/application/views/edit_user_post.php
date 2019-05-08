<div class="spacer"></div>
<div class="row">



  <div class="col-md-8 col-md-offset-1">
	
<section class="panel panel-default">
  
  <header class="panel-heading">
    Edit Post
  </header>
   <div class="wrapper">
                  
                 
                  
                  <form data-validate="parsley" action="<?php echo base_url();?>index.php/portfolio/save_post_portfolio?id=<?php echo $this->session->userdata('user_id'); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="post_id" value="<?php echo $this_post[0]->upid;?>"/>
                    <div class="form-group">
                      
                      <label>
                        Post Tile
                      </label>
                      
                      <input type="text" name="post_title" value="<?php echo $this_post[0]->post_title;?>" data-required="true" placeholder="" class="input-sm form-control">
                      
                    </div>
                    
                    <div class="form-group">
                      
                      <label>
                        Post Text
                      </label>
                      
                      <textarea  placeholder="" name="post_text" class="datepicker input-sm form-control"><?php echo $this_post[0]->post_text;?></textarea>
                      
                    </div>
                    
                    <div class="form-group">
                      
                      <label>
                        Youtube Video URL
                      </label>
                      
                      <input type="text" name="post_video" value="<?php echo html_entity_decode($this_post[0]->post_video); ?>" placeholder="" class="input-sm form-control">
                      
                    </div>
					<?php if($this_post[0]->post_image!='') { ?>
					<div class="form-group">
                    <img src="<?php echo base_url();?>uploads/user_post/<?php echo $this_post[0]->post_image;?>" style="width:100%;"/>
					</div>
					<?php } ?>
                    <div class="form-group"> 
					<label>
                       Add a Photo
                    </label>

 <input type="file" name="post_img" data-classinput="form-control inline input-s" data-classbutton="btn btn-default" data-icon="false" class="filestyle" id="filestyle-0" style="position: fixed; left: -500px;">
 
 

 </div>
                    
                    <div class="m-t-lg">
                      <button type="submit" class="btn btn-sm btn-default">
                        Save
                      </button>
                    </div>
                    
                  </form>
                  
                </div>
                
</section>
<div class="spacer"></div>
<div class="spacer"></div>
	</div>
</div>
