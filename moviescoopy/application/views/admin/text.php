
 <form action="<?php echo base_url();?>index.php/admin/projects/add_project" class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">	
<section id="main-content">
          <section class="wrapper site-min-height">
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
                                              <a href="#amenities">
                                                  Amenities
                                              </a>
                                          </li>
                                          <li class="">
                                              <a href="#specifications">
                                                  Specifications
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
                                              <option>Option 1</option>
                                              <option>Option 2</option>
                                              <option>Option 3</option>
                                           </select>
											
                                          </div>
										  
                                      </div>
									   <div class="form-group">
                                          <label class="control-label col-md-3">Summary</label>
                                          <div class="col-md-4">
                                             <textarea class="form-control" name="summary" cols="60" rows="5"></textarea>
											 
                                          </div>
                                      </div>
							  <input type="submit" class="btn btn-success" name="proj_submit" style="float:right;" value="Save and Continue"/>    
                          </div>
                      </section>
                  </div>
              </div>
                                          </div>
                                          <div class="tab-pane" id="amenities">
                                                  <div class="panel-body">
                                                  	<div class="form-group">
                                          <label class="control-label col-md-3">Amenity</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="am[]" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div>
									   <div class="form-group">
                                          <label class="control-label col-md-3">Description</label>
                                          <div class="col-md-4">
                                             <textarea class="form-control" name="ad[]" cols="60" rows="5"></textarea>
											 
                                          </div>
                                      </div>
                                      	<div class="form-group">
                                          <label class="control-label col-md-3">Amenity</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="am[]" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div>
									   <div class="form-group">
                                          <label class="control-label col-md-3">Description</label>
                                          <div class="col-md-4">
                                             <textarea class="form-control" name="ad[]" cols="60" rows="5"></textarea>
											 
                                          </div>
                                      </div>	<div class="form-group">
                                          <label class="control-label col-md-3">Amenity</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="am[]" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div>
									   <div class="form-group">
                                          <label class="control-label col-md-3">Description</label>
                                          <div class="col-md-4">
                                             <textarea class="form-control" name="ad[]" cols="60" rows="5"></textarea>
											 
                                          </div>
                                      </div>	<div class="form-group">
                                          <label class="control-label col-md-3">Amenity</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="am[]" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div>
									   <div class="form-group">
                                          <label class="control-label col-md-3">Description</label>
                                          <div class="col-md-4">
                                             <textarea class="form-control" name="ad[]" cols="60" rows="5"></textarea>
											 
                                          </div>
                                      </div>	<div class="form-group">
                                          <label class="control-label col-md-3">Amenity</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="am[]" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div>
									   <div class="form-group">
                                          <label class="control-label col-md-3">Description</label>
                                          <div class="col-md-4">
                                             <textarea class="form-control" name="ad[]" cols="60" rows="5"></textarea>
											 
                                          </div>
                                      </div>	<div class="form-group">
                                          <label class="control-label col-md-3">Amenity</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="am[]" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div>
									   <div class="form-group">
                                          <label class="control-label col-md-3">Description</label>
                                          <div class="col-md-4">
                                             <textarea class="form-control" name="ad[]" cols="60" rows="5"></textarea>
											 
                                          </div>
                                      </div>	<div class="form-group">
                                          <label class="control-label col-md-3">Amenity</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="am[]" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div>
									   <div class="form-group">
                                          <label class="control-label col-md-3">Description</label>
                                          <div class="col-md-4">
                                             <textarea class="form-control" name="ad[]" cols="60" rows="5"></textarea>
											 
                                          </div>
                                      </div>	<div class="form-group">
                                          <label class="control-label col-md-3">Amenity</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="am[]" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div>
									   <div class="form-group">
                                          <label class="control-label col-md-3">Description</label>
                                          <div class="col-md-4">
                                             <textarea class="form-control" name="ad[]" cols="60" rows="5"></textarea>
											 
                                          </div>
                                      </div>	<div class="form-group">
                                          <label class="control-label col-md-3">Amenity</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="am[]" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div>
									   <div class="form-group">
                                          <label class="control-label col-md-3">Description</label>
                                          <div class="col-md-4">
                                             <textarea class="form-control" name="ad[]" cols="60" rows="5"></textarea>
											 
                                          </div>
                                      </div>	<div class="form-group">
                                          <label class="control-label col-md-3">Amenity</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="am[]" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div>
									   <div class="form-group">
                                          <label class="control-label col-md-3">Description</label>
                                          <div class="col-md-4">
                                             <textarea class="form-control" name="ad[]" cols="60" rows="5"></textarea>
											 
                                          </div>
                                      </div>	<div class="form-group">
                                          <label class="control-label col-md-3">Amenity</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="am[]" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div>
									   <div class="form-group">
                                          <label class="control-label col-md-3">Description</label>
                                          <div class="col-md-4">
                                             <textarea class="form-control" name="ad[]" cols="60" rows="5"></textarea>
											 
                                          </div>
                                      </div>
                                                  </div>
									      		      
                              
                                          </div>
                                          <div class="tab-pane " id="specifications">
                                                <div class="panel-body">
                                                  	<div class="form-group">
                                          <label class="control-label col-md-3">Specification</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="sp[]" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label col-md-3">Specification</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="sp[]" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div><div class="form-group">
                                          <label class="control-label col-md-3">Specification</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="sp[]" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div><div class="form-group">
                                          <label class="control-label col-md-3">Specification</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="sp[]" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div><div class="form-group">
                                          <label class="control-label col-md-3">Specification</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="sp[]" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div><div class="form-group">
                                          <label class="control-label col-md-3">Specification</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="sp[]" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div><div class="form-group">
                                          <label class="control-label col-md-3">Specification</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="sp[]" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div><div class="form-group">
                                          <label class="control-label col-md-3">Specification</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="sp[]" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div><div class="form-group">
                                          <label class="control-label col-md-3">Specification</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="sp[]" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div><div class="form-group">
                                          <label class="control-label col-md-3">Specification</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="sp[]" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div><div class="form-group">
                                          <label class="control-label col-md-3">Specification</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="sp[]" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div><div class="form-group">
                                          <label class="control-label col-md-3">Specification</label>
                                          <div class="col-md-4">
                                             <input class="form-control form-control-inline input-medium" name="sp[]" size="16" type="text" value="">
											
                                          </div>
										  
                                      </div>
                                      </div>
                                          </div>
                                           <div class="tab-pane " id="others">
                                              <div class="panel-body">
                                              			<div class="form-group">
                                          <label class="control-label col-md-3">Upload Project Photos</label>
                                          <div class="col-md-4">
                                            <input name="userfile[]" id="userfile" type="file" multiple="" />
											
                                          </div>
										  
                                      </div>
                                              <div class="form-group">
                                          <label class="control-label col-md-3">Upload Floor Types</label>
                                          <div class="col-md-4">
                                            <input name="floor_pic[]" id="userfile1" type="file" multiple="" />
											
                                          </div>
										  
                                      </div><div class="form-group">
                                          <label class="control-label col-md-3">Location Map</label>
                                          <div class="col-md-4">
                                            <input name="location_map[]" id="userfile2" type="file" multiple="" />
											
                                          </div>
										  
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
