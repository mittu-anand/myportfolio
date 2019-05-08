<div class="spacer"></div>
<div class="row">


  <div class="col-md-10 col-md-offset-1">
	<section class="panel panel-default">
  
  <header class="panel-heading bg-light">
    
    <ul class="nav nav-tabs nav-justified">
      
      <li >
        <a href="<?php echo base_url();?>index.php/moviefolio/classifieds?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?> " style="border-left:none;">
          View Classifieds
        </a>
      </li>
      
      <li class="active">
        <a href="<?php echo base_url();?>index.php/moviefolio/add_classifieds?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?> ">
          Post a Classified
        </a>
      </li>
      
    </ul>
    
  </header>
  
  <div class="panel-body">
    
    <div class="tab-content">
      
      
      
 <div id="profile" class="tab-pane active">
 
<div class="col-sm-8 col-md-offset-2">
                    <?php if($this->session->flashdata('success_on')){ ?>
                      <div class="alert alert-success fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('success_on'); ?>
                      </div>
                <?php } ?>
				<?php if($this->session->flashdata('error_on')){ ?>
                      <div class="alert alert-danger fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('error_on'); ?>
                      </div>
                <?php } ?>
                    <section class="panel panel-default">
                      
                      <header class="panel-heading font-bold">
                        Post a Classified
                      </header>
                      
                      <div class="panel-body">
                     
                        <form data-validate="parsley" action="<?php echo base_url();?>index.php/moviefolio/post_classified?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?> " method="post" class="bs-example form-horizontal">
                          
                          <div class="form-group">
                            
                            <label class="col-lg-2 control-label">
                              Title
                            </label>
                            <input type="hidden" name="movie_id" value="<?php echo $this->session->userdata('movie_id'); ?>">
                            <div class="col-lg-10">
                              
                              <input data-required="true" type="title" name="title" class="form-control">
                              
                              <!--<span class="help-block m-b-none">
                                Example block-level help text here.
                              </span>-->
                              
                            </div>
                            
                          </div>
                          
                          <div class="form-group">
                            
                            <label class="col-lg-2 control-label">
                              Description
                            </label>
                            
                            <div class="col-lg-10">
                              
                              <textarea data-required="true" class="form-control" name="description"></textarea>
                              
                            </div>
                            
                          </div>
                          
                         
                          
                          <div class="form-group">
                            
                            <div class="col-lg-offset-2 col-lg-10">
                              
                              <button class="btn btn-sm btn-success" type="submit">
                                Post  classified
                              </button>
                              
                            </div>
                            
                          </div>
                          
                        </form>
                        
                      </div>
                      
                    </section>
                    
                  </div>
	
  
		

      </div>
     
      
    </div>
    
  </div>
  
</section>
  </div>
</div>  
