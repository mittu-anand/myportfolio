
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
                
			
                      <section class="panel profile-info">
					   <header class="panel-heading">
                              Moviescoopy Terms
                                  <span class="tools pull-right">
                                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                                    <a class="fa fa-times" href="javascript:;"></a>
                                </span>
                          </header>
                          <form action="<?php echo base_url();?>index.php/admin/moviescoopy/moviescoopy_save" method="post" enctype="multipart/form-data">
								 <div class="form-group">
								 
								<textarea name="terms" class="form-control form-control-inline input-medium" style="width:100%;height:500px;"><?php if(isset($content)){echo $content[0]->terms;} ?></textarea>
						
                                      </div>

						<div class="form-group">

						<input type="submit" name="save_moviescoopy" value="save" class="btn btn-info">
						</div>
						</form>
                      </section>
					
                  </div>
            
              </div>
              <!-- page end-->
          </section>
      </section>
          <!-- /.aside -->
       
       
       