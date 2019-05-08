
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
      
      <li>
        <a href="<?php echo base_url();?>index.php/moviefolio/add_classifieds?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?> ">
          Post a Classified
        </a>
      </li>
      <li class="active">
        <a href="<?php echo base_url();?>index.php/moviefolio/add_classifieds?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?>&&edit=<?php echo $classified[0]->classifiedid; ?>">
          Edit Classified
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
                        Edit Classified
                      </header>
                      
                      <div class="panel-body">
                     
                        <form data-validate="parsley" action="<?php echo base_url();?>index.php/moviefolio/save_edit_classified?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?> " method="post" class="bs-example form-horizontal">
                          
                          <div class="form-group">
                            
                            <label class="col-lg-2 control-label">
                              Title
                            </label>
                            <input type="hidden" name="classified_id" value="<?php echo $classified[0]->classifiedid; ?>">
                            <div class="col-lg-10">
                              
                              <input data-required="true" type="title" value="<?php echo $classified[0]->title;?>" name="title" class="form-control">
                              
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
                              
                              <textarea data-required="true" class="form-control" name="description"><?php echo $classified[0]->description; ?></textarea>
                              
                            </div>
                            
                          </div>
                          
                         
                          
                          <div class="form-group">
                            
                            <div class="col-lg-offset-2 col-lg-10">
                              
                              <button class="btn btn-sm btn-success" type="submit">
                                Save classified
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
