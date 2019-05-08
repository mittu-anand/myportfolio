    <link rel="stylesheet" href="<?php echo base_url();?>js/datatables/datatables.css" type="text/css"/>
   <section id="content">
      <div class="container m-t-lg m-b-lg">
        <div class="row">
          <div class="col-sm-10" >
<section class="vbox">

 <section class="panel panel-default">
                      
                      <header class="panel-heading font-bold">
                        Publish a Blog
                      </header>
                      
                      <div class="panel-body">
                     
                        <form data-validate="parsley" action="<?php echo base_url();?>index.php/moviefolio/post_classified?id=" method="post" class="bs-example form-horizontal">
                          
                          <div class="form-group">
                            
                            <label class="col-lg-2 control-label">
                              Title
                            </label>
                            <input type="hidden" name="movie_id" value="">
                            <div class="col-lg-10">
                              
                              <input data-required="true" type="title" name="title" class="form-control">
                              
                              <!--<span class="help-block m-b-none">
                                Example block-level help text here.
                              </span>-->
                              
                            </div>
                            
                          </div>
                          
                          <div class="form-group">
                            
                            <label class="col-lg-2 control-label">
                              Blog
                            </label>
                            
                            <div class="col-lg-10">
                              
                              <textarea data-required="true" style="height:400px;" class="form-control" name="description"></textarea>
                              
                            </div>
                            
                          </div>
                           <div class="form-group">
                            
                            <label class="col-lg-2 control-label">
                              Image
                            </label>
                            
                            <div class="col-lg-10">
                              
                             <input type="file" name="user_img" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline input-s">
                          
                            </div>
                            
                          </div>
                         
                          
                          <div class="form-group">
                            
                            <div class="col-lg-offset-2 col-lg-10">
                              
                              <button class="btn btn-sm btn-success" type="submit">
                                Publish Blog
                              </button>
                              
                            </div>
                            
                          </div>
                          
                        </form>
                        
                      </div>
                      
                    </section>
</section>
            
            
          </div>
          
    
          
        </div>
        
      </div>
    </section>
	  <!-- datatables -->
   