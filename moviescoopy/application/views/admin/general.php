<section id="main-content">
          <section class="wrapper">
		     <?php if($this->session->flashdata('tag_suc')){ ?>
                      <div class="alert alert-success fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('tag_suc'); ?>
                      </div>
                    <?php } ?>
                     <?php if($this->session->flashdata('tag_err')){ ?>
                      <div class="alert alert-danger fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('tag_err'); ?>
                      </div>
                    <?php } ?>
					
					
					<?php if($this->session->flashdata('copy_suc')){ ?>
                      <div class="alert alert-success fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('copy_suc'); ?>
                      </div>
                    <?php } ?>
                     <?php if($this->session->flashdata('copy_err')){ ?>
                      <div class="alert alert-danger fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('copy_err'); ?>
                      </div>
                    <?php } ?>
              <!-- page start-->
			  
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                           General Information
                          </header>
                          <div class="panel-body">
                              <form  action="<?php echo base_url();?>index.php/admin/general/update_general_info"  method="post" role="form" class="form-horizontal tasi-form">
                                  <div class="form-group has-success">
                                      <label class="col-lg-2 control-label">Address</label>
                                      <div class="col-lg-10">
									  
                                          <input type="text" name="address" value="<?php if(isset($general_info)){ echo $general_info[0]->address; } ?>"  class="form-control">
                                          
                                      </div>
                                  </div>
                                  <div class="form-group has-success">
                                      <label class="col-lg-2 control-label">City</label>
                                      <div class="col-lg-10">
									  
                                          <input type="text" name="city" value="<?php if(isset($general_info)){ echo $general_info[0]->city; } ?>"  class="form-control">
                                         
                                      </div>
                                  </div>
								   <div class="form-group has-success">
                                      <label class="col-lg-2 control-label">Pincode</label>
                                      <div class="col-lg-10">
									  
                                          <input type="text" name="pincode" value="<?php if(isset($general_info)){ echo $general_info[0]->pincode; } ?>"  class="form-control">
                                          
                                      </div>
                                   </div>
								  <div class="form-group has-success">
                                      <label class="col-lg-2 control-label">Email</label>
                                      <div class="col-lg-10">
									  
                                          <input type="text" name="email" value="<?php if(isset($general_info)){ echo $general_info[0]->email; } ?>"  class="form-control">
                                          
                                      </div>
                                  </div>
								  <div class="form-group has-success">
                                      <label class="col-lg-2 control-label">Alternate Email</label>
                                      <div class="col-lg-10">
									  
                                          <input type="text" name="altemail" value="<?php if(isset($general_info)){ echo $general_info[0]->alternate_email; } ?>"  class="form-control">
                                          
                                      </div>
                                  </div>
								  <div class="form-group has-success">
                                      <label class="col-lg-2 control-label">Phone</label>
                                      <div class="col-lg-10">
									  
                                          <input type="text" name="phone" value="<?php if(isset($general_info)){ echo $general_info[0]->phone; } ?>"  class="form-control">
                                          
                                      </div>
                                  </div>
								  <div class="form-group has-success">
                                      <label class="col-lg-2 control-label">Mobile</label>
                                      <div class="col-lg-10">
									  
                                          <input type="text" name="mobile" value="<?php if(isset($general_info)){ echo $general_info[0]->mobile; } ?>"  class="form-control">
                                          
                                      </div>
                                  </div>
								  <div class="form-group has-success">
                                      <label class="col-lg-2 control-label">Whats App</label>
                                      <div class="col-lg-10">
									  
                                          <input type="text" name="whatsap1" value="<?php if(isset($general_info)){ echo $general_info[0]->whats_app_one; } ?>"  class="form-control">
                                          
                                      </div>
                                  </div>
								  <div class="form-group has-success">
                                      <label class="col-lg-2 control-label">Whats App Alternate</label>
                                      <div class="col-lg-10">
									  
                                          <input type="text" name="whatsap2" value="<?php if(isset($general_info)){ echo $general_info[0]->whats_app_two; } ?>"  class="form-control">
                                          
                                      </div>
                                  </div>
								  <div class="form-group has-success">
                                      <label class="col-lg-2 control-label">Skype</label>
                                      <div class="col-lg-10">
									  
                                          <input type="text" name="skype1" value="<?php if(isset($general_info)){ echo $general_info[0]->skype_one; } ?>"  class="form-control">
                                          
                                      </div>
                                  </div>
								  <div class="form-group has-success">
                                      <label class="col-lg-2 control-label">Skype Alternate</label>
                                      <div class="col-lg-10">
									  
                                          <input type="text" name="skype2" value="<?php if(isset($general_info)){ echo $general_info[0]->skype_two; } ?>"  class="form-control">
                                          
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
			  
			  
			  
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Social Media Links
                          </header>
                          <div class="panel-body">
                              <form  action="<?php echo base_url();?>index.php/admin/general/update_social"  method="post" role="form" class="form-horizontal tasi-form">
                                  <div class="form-group has-success">
                                      <label class="col-lg-2 control-label">Facebook</label>
                                      <div class="col-lg-10">
									  
                                          <input type="text" name="facebook" value="<?php if(isset($socials)){ echo $socials[0]->facebook; } ?>"  class="form-control">
                                          
                                      </div>
                                  </div>
                                  <div class="form-group has-success">
                                      <label class="col-lg-2 control-label">Linked In</label>
                                      <div class="col-lg-10">
									  
                                          <input type="text" name="linkedin" value="<?php if(isset($socials)){ echo $socials[0]->linkedin; } ?>"  class="form-control">
                                         
                                      </div>
                                  </div>
								   <div class="form-group has-success">
                                      <label class="col-lg-2 control-label">Twitter</label>
                                      <div class="col-lg-10">
									  
                                          <input type="text" name="twitter" value="<?php if(isset($socials)){ echo $socials[0]->twitter; } ?>"  class="form-control">
                                          
                                      </div>
                                  </div>
								  <div class="form-group has-success">
                                      <label class="col-lg-2 control-label">Google Plus</label>
                                      <div class="col-lg-10">
									  
                                          <input type="text" name="google" value="<?php if(isset($socials)){ echo $socials[0]->google; } ?>"  class="form-control">
                                          
                                      </div>
                                  </div>
								  <div class="form-group has-success">
                                      <label class="col-lg-2 control-label">Youtube</label>
                                      <div class="col-lg-10">
									  
                                          <input type="text" name="youtube" value="<?php if(isset($socials)){ echo $socials[0]->youtube; } ?>"  class="form-control">
                                          
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
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Slideshow Contents
                          </header>
                          <div class="panel-body">
                              <form  action="<?php echo base_url();?>index.php/admin/general/update_tagline"  method="post" role="form" class="form-horizontal tasi-form">
                                  <div class="form-group has-success">
                                      <label class="col-lg-2 control-label">Title One</label>
                                      <div class="col-lg-10">
									  
                                          <input type="text" name="tagline" value="<?php if(isset($tagline)){ echo $tagline[0]->text; } ?>"  class="form-control">
                                          <?php echo form_error('tagline'); ?>
                                      </div>
                                  </div>
								   <div class="form-group has-success">
                                      <label class="col-lg-2 control-label">Title Two</label>
                                      <div class="col-lg-10">
									  
                                          <input type="text" name="tagline1" value="<?php if(isset($tagline)){ echo $tagline[0]->text1; } ?>"  class="form-control">
                                          <?php echo form_error('tagline1'); ?>
                                      </div>
                                  </div>
								   <div class="form-group has-success">
                                      <label class="col-lg-2 control-label">Title Three</label>
                                      <div class="col-lg-10">
									  
                                          <input type="text" name="tagline2" value="<?php if(isset($tagline)){ echo $tagline[0]->text2; } ?>"  class="form-control">
                                          <?php echo form_error('tagline2'); ?>
                                      </div>
                                  </div>
								   <div class="form-group has-success">
                                      <label class="col-lg-2 control-label">Sub Title</label>
                                      <div class="col-lg-10">
									  
                                          <input type="text" name="tagline3" value="<?php if(isset($tagline)){ echo $tagline[0]->text3; } ?>"  class="form-control">
                                          <?php echo form_error('tagline3'); ?>
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
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Copyright
                          </header>
                         <div class="panel-body">
                              <form action="<?php echo base_url();?>index.php/admin/general/update_copyright" role="form" method="post" class="form-horizontal tasi-form">
                                  <div class="form-group has-success">
                                      <label class="col-lg-2 control-label">Your Website Copyright Text Here</label>
                                      <div class="col-lg-10">
                                          <input type="text" name="copyright" value="<?php if(isset($copyright)){ echo $copyright[0]->text;} ?>"  class="form-control">
                                         <?php echo form_error('copyright'); ?>
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
	