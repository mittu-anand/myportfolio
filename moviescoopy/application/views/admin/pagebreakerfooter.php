<section id="main-content">


          <section class="wrapper site-min-height">
		   <?php if(isset($error)) { echo $error['error'];} ?>
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
              <!-- page start-->
              <div class="row">
                  <div class="col-md-9">
                
			
				      <h5 style="margin-top:10px;margin-bottom:10px;">Recommended Image Dimension: 1900*1200</h5>
                      <section class="panel profile-info">
                          <form action="<?php echo base_url();?>index.php/admin/pagebreaker/update_footer" method="post" enctype="multipart/form-data">
								<div class="panel-body">
								 
								  <div class="fb-user-details">
									  
									 <!-- <h3><a href="#" class="#">First Slide</a></h3>--->
									 
								  </div>
								  <div class="clearfix"></div>
								  
								  <img src="<?php echo base_url();?>uploads/pagebreakers/<?php if($pagebfooter[0]->img==''){echo "";} else { echo $pagebfooter[0]->img;} ?>" style="width:806px;height:300px;padding:5px;"/>
							 
							   </div>
							  
							  <footer class="panel-footer">
							  
									 
								  <button class="btn btn-danger pull-right" type="submit" name="footer_img_sbmit">Change</button>
								  <ul class="nav nav-pills">
									 <li>
									
									   <input type="file" name="service_img" class="fa fa-camera" />
										 <?php echo form_error('banner1'); ?>
									  </li>
									  
								  </ul>
                          </footer>
						</form>
                      </section>
					
                  </div>
            
              </div>
              <!-- page end-->
          </section>
      </section>