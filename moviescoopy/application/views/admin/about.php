<style>
 .about-data
 {
 border:none !important;
 }
 .abt_test
 {
 height:140px;
 width:450px;
 }
</style> 

 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                  <?php if($this->session->flashdata('item')){ ?>
                      <div class="alert alert-success fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('item'); ?>
                      </div>
                    <?php } ?>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              About Page
                          </header>
                          
						  <form action="<?php echo base_url(); ?>index.php/admin/about/update_about" method="post">
                          <div class="panel-body">
                              <div id="editor-container">
                                  <div id="header-editor">
                                      <div id="">
                                          <h2 id="sampleTitle" contenteditable="true">
                                           <input type="text" class="about-data" style="width:850px;font-size:18px;" name="title_main" value="<?php if($about_us[0]->title_main==''){echo "";} else { echo $about_us[0]->title_main;} ?>"/>
                                          </h2>
                                        
                                      </div>
                                      <div id="">
                                          <div contenteditable="true">
                                              <p>
											     <textarea class="about-data abt_test" style="width:800px;height:200px;"name="title_main_description">
                                                 <?php if($about_us[0]->title_main_description==''){echo "";} else { echo $about_us[0]->title_main_description;} ?>
                                                </textarea>                                             
											 </p>
                                             
                                          </div>
                                      </div>
                                  </div>
                                      
                               <input type="submit" value="Save & Publish" name="update_about" class="btn btn-success" style="float:right;margin-top:20px;"/>
                              <?php /*?><?php echo CHtml::button('Save & Publish',  array('name'=>'about','submit'=>array('default/about_update',array('class'=>'btn btn-success'))));?><?php */?> 
    
                              </div>
                          </div>
						  <form>
                      </section>

                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->