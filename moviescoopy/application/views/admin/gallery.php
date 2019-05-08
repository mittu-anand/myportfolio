       <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>admin/css/gallery.css" />      
		  <section id="main-content">
          <section class="wrapper">
           <?php if(isset($error)){ ?>
                      <div class="alert alert-danger fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $error['error']; ?>
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
                     <?php if($this->session->flashdata('serv_err')){ ?>
                      <div class="alert alert-danger fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('serv_err'); ?>
                      </div>
                <?php } ?>
		 <form action="<?php echo base_url();?>index.php/admin/gallery/gallery_upload" class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">					
			
			<input name="userfile[]" id="userfile" type="file" multiple="" />
			<input type="submit" class="btn btn-success" style="margin:7px;" name="Submit" value="upload" />
			
		 </form>
           <!--main content start-->
      
              <!-- page start-->
			  <?php if($gallery_images){ ?>
			   <h5 style="margin-top:10px;margin-bottom:10px;">Recommended Image Dimension: 500*350</h5>
              <section class="panel" style="margin-top:30px;">
                  <header class="panel-heading">
                      About Images
                  </header>
                  <div class="panel-body">
                      <ul class="grid cs-style-3">
					  <?php foreach($gallery_images as $gimg) { ?>
                          <li>
                              <figure>
                                  <img src="<?php echo base_url();?>uploads/gallery/<?php echo $gimg->photo_name; ?>" style="width:200px;" alt="">
                                  
                                      
                                      <a  style="float:right;margin-right: 154px;margin-top: 15px;" class="btn btn-danger confirmClick" href="<?php echo base_url();?>index.php/admin/gallery/delete_image?id=<?php echo $gimg->id; ?>">Delete</a>
                                 
                              </figure>
                          </li>
					  <?php } ?>
                         
                         
                          
                      </ul>

                  </div>
              </section>
			<?php } ?>
              <!-- page end-->
          
		  </section>
		  </section>
		  
		   