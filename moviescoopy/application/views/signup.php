 <section id="content" class="m-t-lg wrapper-md animated fadeInDown">
      
      <div class="container aside-xxl">
        
		  <?php if($this->session->flashdata('error_msg')){ ?>
                     
					  <div class="alert alert-danger"> 
	 <button type="button" class="close" data-dismiss="alert">×</button>
	 <i class="fa fa-danger-sign"></i><strong></strong> 
	 <?php  echo $this->session->flashdata('error_msg'); ?>. 
	 </div>
                    <?php } ?>
		
		
		
		
     
        <section class="panel panel-default m-t-lg bg-white">
          
          <header class="panel-heading text-center">
            
            <strong>
              Sign up
            </strong>
            
          </header>
          
          <form data-validate="parsley"  action="<?php echo base_url();?>index.php/signup/create_account" method="post" class="panel-body wrapper-lg">
            
            <div class="form-group">
              
              <label class="control-label">
                Name
              </label>
              
              <input type="text" name="name" placeholder="" value="<?php echo set_value('name');?>"class="form-control input-lg"/>
              <?php echo form_error('name'); ?>
            </div>
            
            <div class="form-group">
              
              <label class="control-label">
                Email
              </label>
              
              <input type="email" name="email" id="email" value="<?php echo set_value('email');?>" placeholder="" class="form-control input-lg"/>
              <?php echo form_error('email'); ?>
			  <span class="email-err"></span>
            </div>
            
            <div class="form-group">
              
              <label class="control-label">
                Password
              </label>
              
              <input type="password" name="password" id="inputPassword" placeholder="" class="form-control input-lg"/>
              <?php echo form_error('password'); ?>
            </div>
            <div class="form-group">
			
			<label class="control-label">
                Gender
              </label>
			  
							<div class="radio">
                                
                                <label class="radio-custom">
                                  
                                  <input name="gender" value="M" type="radio" <?php if(set_value('gender')=='M'){echo 'checked';} ?> />
                                  
                                  <i class="fa fa-circle-o">
                                  </i>
                                  Male 
                                </label>
                                
                              </div>
							  <div class="radio">
                                
                                <label class="radio-custom">
                                  
                                  <input name="gender" value="F" type="radio" <?php if(set_value('gender')=='F'){echo 'checked';} ?>>
                                  
                                  <i class="fa fa-circle-o">
                                  </i>
                                  Female 
                                </label>
                                
                              </div>
					   <?php echo form_error('gender'); ?>
			</div>
			<div class="form-group">
              
              <label class="control-label">
                Date of birth
              </label>
              
              <input type="text" name="dob" value="<?php echo set_value('dob');?>" id="dob" readonly style="background:#ffffff;" data-type="dateIso"  data-date-format="yyyy-mm-dd" placeholder="" class="form-control datepicker-input input-lg">
              <?php echo form_error('dob'); ?>
            </div>
            <div class="checkbox">
              
              <label>
                
               By signing up,you
                agree to our 
                <a href="<?php echo base_url();?>index.php/moviescoopy/terms">
                  terms and policy
                </a>
               
              </label>
              
            </div>
            
            <button type="submit" class="btn btn-primary btn-block signup">
              Sign up
            </button>
            
            <div class="line line-dashed">
            </div>
            
            <p class="text-muted text-center">
              <small>
                Already have an account?
              </small>
            </p>
            
            <a href="<?php echo base_url();?>index.php/login" class="btn btn-default btn-block">
              Login
            </a>
            
          </form>
          
        </section>
        
      </div>
      
    </section>
    <div class="spacer"></div>
	<div class="spacer"></div>
	