<section id="main-content">
          <section class="wrapper">
		     <?php if($this->session->flashdata('item')){ ?>
                      <div class="alert alert-success fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('item'); ?>
                      </div>
                    <?php } ?>
                     
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                           Section Titles
                          </header>
                          <div class="panel-body">
                              <form  action="<?php echo base_url();?>index.php/admin/titles/update_title"  method="post" role="form" class="form-horizontal tasi-form">
                                  <div class="form-group has-success">
                                      <label class="col-lg-2 control-label">About us</label>
                                      <div class="col-lg-10">
									  
                                          <input type="text" name="about" value="<?php if(isset($titles)){ echo $titles[0]->about; } ?>"  class="form-control">
                                          
                                      </div>
                                  </div>
                                  <div class="form-group has-success">
                                      <label class="col-lg-2 control-label">Services</label>
                                      <div class="col-lg-10">
									  
                                          <input type="text" name="services" value="<?php if(isset($titles)){ echo $titles[0]->services; } ?>"  class="form-control">
                                         
                                      </div>
                                  </div>
								   <div class="form-group has-success">
                                      <label class="col-lg-2 control-label">Social</label>
                                      <div class="col-lg-10">
									  
                                          <input type="text" name="social" value="<?php if(isset($titles)){ echo $titles[0]->social; } ?>"  class="form-control">
                                          
                                      </div>
                                   </div>
								  <div class="form-group has-success">
                                      <label class="col-lg-2 control-label">Contact us</label>
                                      <div class="col-lg-10">
									  
                                          <input type="text" name="contact" value="<?php if(isset($titles)){ echo $titles[0]->contact; } ?>"  class="form-control">
                                          
                                      </div>
                                  </div>
								<div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-danger" type="submit">Save</button>
                                             
                                          </div>
                                      </div>
                              </form>
                          </div>
                      </section>
                  </div>
              </div>
			  
			  
			
      
              <!-- page end-->
          </section>
      </section>
	