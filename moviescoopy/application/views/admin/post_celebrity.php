    <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                
               <div class="col-sm-8 ">
                  <?php if(isset($error)) {echo $error['error'];} ?>
               <?php if($this->session->flashdata('suc')){ ?>
                      <div class="alert alert-success fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('suc'); ?>
                      </div>
                    <?php } ?>
                     <?php if($this->session->flashdata('err')){ ?>
                      <div class="alert alert-danger fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('err'); ?>
                      </div>
                    <?php } ?>
                  <h4 class="m-t-none">
                    Postline
                  </h4>
                  
                <form action="<?php echo base_url();?>index.php/admin/celebrity/post_celebrity" class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="<?php if($celebrity){ echo $celebrity[0]->cid;}?>" name="id"/>
                    <div class="form-group">
                      
                      <label>
                        Post Tile
                      </label>
                      
                      <input type="text" name="post_title" data-required="true" placeholder="" class="input-sm form-control">
                      
                    </div>
                    
                    <div class="form-group">
                      
                      <label>
                        Post Text
                      </label>
                      
                      <textarea  placeholder="" name="post_text" class="datepicker input-sm form-control"></textarea>
                      
                    </div>
                    
                    <div class="form-group">
                      
                      <label>
                        Youtube Video URL
                      </label>
                      
                      <input type="text" name="post_video" placeholder="" class="input-sm form-control">
                      
                    </div>
                    
                    <div class="form-group"> 
					<label>
                       Add a Photo
                      </label>

 <input type="file" name="post_img" ">
 
 

 </div>
                    
                    <div class="m-t-lg">
                      <button type="submit" class="btn btn-sm btn-default">
                        Post
                      </button>
                    </div>
                    
                  </form>
                  </div>
                </section>
				</section>
                
          