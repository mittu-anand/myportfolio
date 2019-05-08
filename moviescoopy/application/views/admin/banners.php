<section id="main-content">


          <section class="wrapper site-min-height">
		   <?php if(isset($error)) { echo $error['error'];} ?>
               <?php if($this->session->flashdata('abt_suc')){ ?>
                      <div class="alert alert-success fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('abt_suc'); ?>
                      </div>
                    <?php } ?>
                     <?php if($this->session->flashdata('abt_err')){ ?>
                      <div class="alert alert-danger fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('abt_err'); ?>
                      </div>
                <?php } ?>
              <!-- page start-->
              <div class="row">
                  <div class="col-md-9">
                 
                      <section class="panel profile-info">
                          <form action="<?php echo base_url();?>index.php/admin/banners/update_about" method="post" enctype="multipart/form-data">
								<div class="panel-body">
								 
								  <div class="fb-user-details">
									  
									  <h3><a href="#" class="#">About Us</a></h3>
									 
								  </div>
								  <div class="clearfix"></div>
								  <img src="<?php echo base_url();?>uploads/banners/<?php if($banner_images[0]->img==''){echo "";} else { echo $banner_images[0]->img;} ?>" style="width:806px;height:300px;padding:5px;"/>
							 
							   </div>
							  
							  <footer class="panel-footer">
							  
									 
								  <button class="btn btn-danger pull-right" type="submit" name="about_img_sbmit">Change</button>
								  <ul class="nav nav-pills">
									 <li>
									  
									   <input type="file" name="abt_img" class="fa fa-camera" />
										 <?php echo form_error('abt_img'); ?>
									  </li>
									  
								  </ul>
                          </footer>
						</form>
                      </section>
					   <section class="panel profile-info">
                          <form action="<?php echo base_url();?>index.php/admin/banners/update_project" method="post" enctype="multipart/form-data">
								<div class="panel-body">
								 
								  <div class="fb-user-details">
									  
									  <h3><a href="#" class="#">Our Projects</a></h3>
									 
								  </div>
								  <div class="clearfix"></div>
								  <img src="<?php echo base_url();?>uploads/banners/<?php if($banner_images[1]->img==''){echo "";} else { echo $banner_images[1]->img;} ?>" style="width:806px;height:300px;padding:5px;"/>
							 
							   </div>
							  
							  <footer class="panel-footer">
							  
									 
								  <button class="btn btn-danger pull-right" type="submit" name="project_img_sbmit">Change</button>
								  <ul class="nav nav-pills">
									 <li>
									  
									   <input type="file" name="pro_img" class="fa fa-camera" />
										 <?php echo form_error('pro_img'); ?>
									  </li>
									  
								  </ul>
                          </footer>
						</form>
                        </section>
                          <section class="panel profile-info">
                        <form action="<?php echo base_url();?>index.php/admin/banners/update_service" method="post" enctype="multipart/form-data">
								<div class="panel-body">
								 
								  <div class="fb-user-details">
									  
									  <h3><a href="#" class="#">Our Services</a></h3>
									 
								  </div>
								  <div class="clearfix"></div>
								  <img src="<?php echo base_url();?>uploads/banners/<?php if($banner_images[2]->img==''){echo "";} else { echo $banner_images[2]->img;} ?>" style="width:806px;height:300px;padding:5px;"/>
							 
							   </div>
							  
							  <footer class="panel-footer">
							  
									 
								  <button class="btn btn-danger pull-right" type="submit" name="service_img_sbmit">Change</button>
								  <ul class="nav nav-pills">
									 <li>
									  
									   <input type="file" name="ser_img" class="fa fa-camera" />
										 <?php echo form_error('ser_img'); ?>
									  </li>
									  
								  </ul>
                          </footer>
						</form>
                        </section>
                          <section class="panel profile-info">
                        <form action="<?php echo base_url();?>index.php/admin/banners/update_news" method="post" enctype="multipart/form-data">
								<div class="panel-body">
								 
								  <div class="fb-user-details">
									  
									  <h3><a href="#" class="#">News</a></h3>
									 
								  </div>
								  <div class="clearfix"></div>
								  <img src="<?php echo base_url();?>uploads/banners/<?php if($banner_images[3]->img==''){echo "";} else { echo $banner_images[3]->img;} ?>" style="width:806px;height:300px;padding:5px;"/>
							 
							   </div>
							  
							  <footer class="panel-footer">
							  
									 
								  <button class="btn btn-danger pull-right" type="submit" name="news_img_sbmit">Change</button>
								  <ul class="nav nav-pills">
									 <li>
									  
									   <input type="file" name="news_img" class="fa fa-camera" />
										 <?php echo form_error('news_img'); ?>
									  </li>
									  
								  </ul>
                          </footer>
						</form>
                        </section>
                          <section class="panel profile-info">
                        <form action="<?php echo base_url();?>index.php/admin/banners/update_gallery" method="post" enctype="multipart/form-data">
								<div class="panel-body">
								 
								  <div class="fb-user-details">
									  
									  <h3><a href="#" class="#">Gallery</a></h3>
									 
								  </div>
								  <div class="clearfix"></div>
								  <img src="<?php echo base_url();?>uploads/banners/<?php if($banner_images[4]->img==''){echo "";} else { echo $banner_images[4]->img;} ?>" style="width:806px;height:300px;padding:5px;"/>
							 
							   </div>
							  
							  <footer class="panel-footer">
							  
									 
								  <button class="btn btn-danger pull-right" type="submit" name="gal_img_sbmit">Change</button>
								  <ul class="nav nav-pills">
									 <li>
									  
									   <input type="file" name="gal_img" class="fa fa-camera" />
										 <?php echo form_error('gal_img'); ?>
									  </li>
									  
								  </ul>
                          </footer>
						</form>
                        </section>
                        <section class="panel profile-info">
                        <form action="<?php echo base_url();?>index.php/admin/banners/update_write" method="post" enctype="multipart/form-data">
								<div class="panel-body">
								 
								  <div class="fb-user-details">
									  
									  <h3><a href="#" class="#">Write To Us</a></h3>
									 
								  </div>
								  <div class="clearfix"></div>
								  <img src="<?php echo base_url();?>uploads/banners/<?php if($banner_images[5]->img==''){echo "";} else { echo $banner_images[5]->img;} ?>" style="width:806px;height:300px;padding:5px;"/>
							 
							   </div>
							  
							  <footer class="panel-footer">
							  
									 
								  <button class="btn btn-danger pull-right" type="submit" name="write_img_sbmit">Change</button>
								  <ul class="nav nav-pills">
									 <li>
									  
									   <input type="file" name="write_img" class="fa fa-camera" />
										 <?php echo form_error('write_img'); ?>
									  </li>
									  
								  </ul>
                          </footer>
						</form>
                        </section>
                        <section class="panel profile-info">
                        <form action="<?php echo base_url();?>index.php/admin/banners/update_contact" method="post" enctype="multipart/form-data">
								<div class="panel-body">
								 
								  <div class="fb-user-details">
									  
									  <h3><a href="#" class="#">Contact Us</a></h3>
									 
								  </div>
								  <div class="clearfix"></div>
								  <img src="<?php echo base_url();?>uploads/banners/<?php if($banner_images[6]->img==''){echo "";} else { echo $banner_images[6]->img;} ?>" style="width:806px;height:300px;padding:5px;"/>
							 
							   </div>
							  
							  <footer class="panel-footer">
							  
									 
								  <button class="btn btn-danger pull-right" type="submit" name="contact_img_sbmit">Change</button>
								  <ul class="nav nav-pills">
									 <li>
									  
									   <input type="file" name="contact_img" class="fa fa-camera" />
										 <?php echo form_error('contact_img'); ?>
									  </li>
									  
								  </ul>
                          </footer>
						</form>
                        </section>
                      </section>
                  </div>
            
              </div>
              <!-- page end-->
          </section>
      </section>