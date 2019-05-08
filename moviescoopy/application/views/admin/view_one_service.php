
  
  
             
  <section id="main-content">
          <section class="wrapper">
          <!-- page start-->
              <!--Advanced File Input start-->
			  
			   <?php if(isset($error)) {echo $error;} ?>
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
                              Update Blogs
                                  <span class="tools pull-right">
                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    <a href="javascript:;" class="fa fa-times"></a>
                                </span>
                          </header>
                          <div class="panel-body">
							   <form action="<?php echo base_url();?>index.php/admin/services/edit_service?id=<?php echo $services[0]->id; ?>"class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">					
                                      <div class="form-group">
                                          <label class="control-label col-md-3">Add Blog</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" value="<?php echo $services[0]->sname; ?>" name="sname" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div>
									   <?php echo form_error('sname'); ?>
									     <div class="form-group">
                                          <label class="control-label col-md-3">Category</label>
                                          <div class="col-md-4">
										  
                                             <input class="form-control form-control-inline input-medium" name="snamet" size="16" type="text" value="<?php echo $services[0]->stitle; ?>">
											
                                          </div>
										  <?php echo form_error('snamet'); ?>
                                      </div>
									   <div class="form-group">
                                          <label class="control-label col-md-3">Description</label>
                                          <div class="col-md-4">
                                             <textarea class="form-control" name="description" cols="60" rows="5"><?php echo $services[0]->description; ?></textarea>
											 
                                          </div>
                                      </div>
									   <?php echo form_error('description'); ?>
                                      <div class="form-group">
                                          <label class="control-label col-md-3">Add Image</label>
                                          <div class="controls col-md-9" id="img_more_app">
                                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <span class="btn btn-white btn-file">
                                                
                                                <input type="file" name="service_img" id="InputsWrapper" class="default" />
												
                                                </span>
                                                  <span class="fileupload-preview" style="margin-left:5px;"></span>
                                                  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                                              </div>
                                          </div>
										    <img src="<?php echo base_url();?>uploads/blogs/<?php echo $services[0]->image; ?>" style="height:80px;width:80px;padding-top:10px;padding-left:20px;">
									
                                      </div>
                                      <?php echo form_error('service_img'); ?>
                                     <input type="submit" class="btn btn-success" name="edit_serv_submit" value="Update"/>
                              </form>
                          </div>
                      </section>
                  </div>
              </div>
              <!--Advanced File Input end-->
            


          <!-- page end-->
          </section>
      </section>