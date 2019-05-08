
  
  
             
  <section id="main-content">
          <section class="wrapper">
          <!-- page start-->
              <!--Advanced File Input start-->
			  
			   <?php if(isset($error)) {echo $error['error'];} ?>
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
					
              <div class="row">
                  <div class="col-md-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Add Celebrity
                                  <span class="tools pull-right">
                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    <a href="javascript:;" class="fa fa-times"></a>
                                </span>
                          </header>
                          <div class="panel-body">
							   <form action="<?php echo base_url();?>index.php/admin/celebrity/edit_this_celebrity" class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">					
                                      <div class="form-group">
                                          <label class="control-label col-md-3">Name</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="name" size="16" type="text" value="<?php if($celebrity){ echo $celebrity[0]->name;} ?>">
											
                                          </div>
										  
                                      </div>
									 
									   
									   <div class="form-group">
                                          <label class="control-label col-md-3">Email</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="email" size="16" type="text" value="<?php if($celebrity){ echo $celebrity[0]->email;} ?>">
											
                                          </div>
										  
                                      </div>
									 
									   
									   <div class="form-group">
                                          <label class="control-label col-md-3">Password</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="password" size="16" type="text" value="<?php if($celebrity){ echo $celebrity[0]->password;} ?>">
											
                                          </div>
										  
                                      </div>
									 
									   
									   <div class="form-group">
                                          <label class="control-label col-md-3">Dob</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" placeholder="YYYY-MM-DD" name="dob" size="16" type="text" value="<?php if($celebrity){ echo $celebrity[0]->dob;} ?>">
											
                                          </div>
										  
                                      </div>
									   <div class="form-group">
                                          <label class="control-label col-md-3">Gender</label>
                                          <div class="col-md-4">
                                             <select class="form-control form-control-inline input-medium" name="gender">
											 
												<option value="M" <?php if($celebrity){if($celebrity[0]->gender=='M'){ echo 'selected';}} ?>>Male</option>
												<option value="F" <?php if($celebrity){if($celebrity[0]->gender=='F'){ echo 'selected';}} ?>>Female</option>
											 
											 </select>
                                          </div>
										  
                                      </div>
									  
									   <div class="form-group">
                                          <label class="control-label col-md-3">Type</label>
                                          <div class="col-md-4">
                                             <select class="form-control form-control-inline input-medium" name="type">
											 <?php if($ptp) { foreach($ptp as $pt) {?>
												<option value="<?php echo $pt->type ?>"  <?php if($celebrity){if($celebrity[0]->type==$pt->type){ echo 'selected';}} ?>> <?php echo $pt->type ?></option>
											 <?php } } ?>
											 </select>
                                          </div>
										  
                                      </div>
									 
									  <div class="form-group">
                                          <label class="control-label col-md-3">Industry</label>
                                          <div class="col-md-4">
                                             <select class="form-control form-control-inline input-medium" name="industry">
											 <?php if($industry) { foreach($industry as $ind) {?>
												<option value=" <?php echo $ind->industry; ?>" <?php if($celebrity){if($celebrity[0]->industry==$ind->industry){ echo 'selected';}} ?>> <?php echo $ind->industry; ?></option>
											 <?php } } ?>
											 </select>
                                          </div>
										  
                                      </div>
									   <div class="form-group">
                                          <label class="control-label col-md-3">Location</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="location" size="16" type="text" value="<?php if($celebrity){ echo $celebrity[0]->location;} ?>">
											
                                          </div>
										  
                                      </div>
									
									   <div class="form-group">
                                          <label class="control-label col-md-3">About </label>
                                          <div class="col-md-4">
                                             <textarea class="form-control" name="aboutme" style="width:800px;" cols="200" rows="15"><?php if($celebrity){ echo $celebrity[0]->aboutme;} ?></textarea>
											 
                                          </div>
                                      </div>
									 
									 
									    <div class="form-group">
                                          <label class="control-label col-md-3">Contact</label>
                                          <div class="col-md-4">
										  
                                             <input class="form-control form-control-inline input-medium" name="contact" size="16" type="text" value="<?php if($celebrity){ echo $celebrity[0]->contact;} ?>">
											
                                          </div>
										  </div>
										  <div class="form-group">
                                          <label class="control-label col-md-3">Facebook</label>
                                          <div class="col-md-4">
										  
                                             <input class="form-control form-control-inline input-medium" name="facebook" size="16" type="text" value="<?php if($celebrity){ echo $celebrity[0]->facebook;} ?>">
											
                                          </div>
										  </div>
										  <div class="form-group">
                                          <label class="control-label col-md-3">Twitter</label>
                                          <div class="col-md-4">
										  
                                             <input class="form-control form-control-inline input-medium" name="twitter" size="16" type="text" value="<?php if($celebrity){ echo $celebrity[0]->twitter;} ?>">
											
                                          </div>
										  </div>
										  <div class="form-group">
                                          <label class="control-label col-md-3">Google Plus</label>
                                          <div class="col-md-4">
										  
                                             <input class="form-control form-control-inline input-medium" name="google" size="16" type="text" value="<?php if($celebrity){ echo $celebrity[0]->google;} ?>">
											
                                          </div>
										  </div>
										  <div class="form-group">
                                          <label class="control-label col-md-3">Linkedin</label>
                                          <div class="col-md-4">
										  
                                             <input class="form-control form-control-inline input-medium" name="linkedin" size="16" type="text" value="<?php if($celebrity){ echo $celebrity[0]->linkedin;} ?>">
											
                                          </div>
										  </div>
									  
                                      <div class="form-group">
                                          <label class="control-label col-md-3">Add Image</label>
                                          <div class="controls col-md-9" id="img_more_app">
                                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <span class="btn btn-white btn-file">
                                                
                                                <input type="file" name="event_img" id="InputsWrapper" class="default" />
												
                                                </span>
                                                  <span class="fileupload-preview" style="margin-left:5px;"></span>
                                                  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                                              </div>
                                          </div>
										 
                                      </div>
                                   
                                     <input type="submit" class="btn btn-success" name="serv_submit" value="Save"/>
                              </form>
                          </div>
                      </section>
                  </div>
              </div>
              <!--Advanced File Input end-->
            


          <!-- page end-->
          </section>
      </section>