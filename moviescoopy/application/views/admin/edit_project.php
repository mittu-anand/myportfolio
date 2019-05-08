
 <form action="<?php echo base_url();?>index.php/admin/projects/edit_project" class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">	
<section id="main-content">
          <section class="wrapper site-min-height">
		    <?php if($this->session->flashdata('proj_suc')){ ?>
                      <div class="alert alert-success fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('proj_suc'); ?>
                      </div>
                    <?php } ?>
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                  
                  
                  
                  <section class="panel">
                                  <header class="panel-heading tab-bg-dark-navy-blue">
                                      <ul class="nav nav-tabs nav-justified ">
                                          <li class="active">
                                              <a href="#general" data-toggle="tab">
                                                  General Info
                                              </a>
                                          </li>
                                          <li>
                                              <a href="#Specifications">
                                                 Specifications 
                                              </a>
                                          </li>
                                          <li class="">
                                              <a href="#Amenities">
                                                  Amenities
                                              </a>
                                          </li>
										   <li class="">
                                              <a href="#floor_types">
                                                  Floor Types
                                              </a>
                                          </li>
                                          <li class="">
                                              <a href="#others">
                                                  Others
                                              </a>
                                          </li>
                                      </ul>
                                  </header>
                                  <div class="panel-body">
                                      <div class="tab-content tasi-tab">
                                          <div class="tab-pane active" id="general">
                                              <div class="row">
                  <div class="col-md-12">
                      <section class="panel">
                          <header class="panel-heading">
                           
                                  
                          </header>
                          <div class="panel-body">
							  				
                                      <div class="form-group">
                                          <label class="control-label col-md-3">Project Name</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="project_name" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label col-md-3">Project Type</label>
                                          <div class="col-md-4">
                                             <select class="form-control input-sm m-bot15" name="project_type">
                                              <option>Option 1</option>
                                              <option>Option 2</option>
                                              <option>Option 3</option>
                                           </select>
											
                                          </div>
										  
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label col-md-3">Location</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="location" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label col-md-3">Floors</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="floors" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div>
									   
                                       <div class="form-group">
                                          <label class="control-label col-md-3">Unit Type</label>
                                          <div class="col-md-4">
                                            <select class="form-control input-sm m-bot15" name="unit_type">
                                              <option>Option 1</option>
                                              <option>Option 2</option>
                                              <option>Option 3</option>
                                           </select>
                                          </div>
										  
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label col-md-3">Project Status</label>
                                          <div class="col-md-4">
                                            <select class="form-control input-sm m-bot15" name="project_status">
                                              <option>Ongoing Project</option>
                                              <option>Completed Project</option>
                                              <option>New Launches</option>
                                           </select>
											
                                          </div>
										  
                                      </div>
									   <div class="form-group">
                                          <label class="control-label col-md-3">Summary</label>
                                          <div class="col-md-4">
                                             <textarea class="form-control" name="summary" cols="60" rows="5"></textarea>
											 
                                          </div>
                                      </div>
									  <div class="form-group">
                                          <label class="control-label col-md-3">Upload Images</label>
                                          <div class="col-md-4">
                                           <input name="userfile[]" id="userfile" type="file" multiple="" />
                                          </div>
                                      </div>
							  <input type="submit" class="btn btn-success" name="proj_submit" style="float:right;" value="Save and Continue"/>    
                          </div>
                      </section>
                  </div>
              </div>
                                          </div>
                                          
                                      </div>
                                  </div>
                              </section>
                      
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
  </form>
<script src="<?php echo base_url(); ?>admin/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>admin/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="<?php echo base_url(); ?>admin/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>admin/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url(); ?>admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url(); ?>admin/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>admin/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/data-tables/DT_bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>admin/js/respond.min.js" ></script>

    <!--right slidebar-->
    <script src="<?php echo base_url(); ?>admin/js/slidebars.min.js"></script>

    <!--dynamic table initialization -->
    <script src="<?php echo base_url(); ?>admin/js/dynamic_table_init.js"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url(); ?>admin/js/common-scripts.js"></script>