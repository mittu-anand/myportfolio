
    <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
      
      <div class="container aside-xxl">
        <?php if($this->session->flashdata('success_msg')){ ?>
                     
					  <div class="alert alert-success"> 
	 <button type="button" class="close" data-dismiss="alert">×</button>
	 <i class="fa fa-success-sign"></i><strong>Welcome to </strong> 
	 moviefolio! <a href="#" class="alert-link"> <?php  echo $this->session->flashdata('success_msg'); ?></a>,stay cool :). 
	 </div>
                    <?php } ?>
					
					
					
		<?php if($this->session->flashdata('login_err')){ ?>
                     
					  <div class="alert alert-danger"> 
	 <button type="button" class="close" data-dismiss="alert">×</button>
	 <i class="fa fa-danger-sign"></i><strong></strong> 
	 <?php  echo $this->session->flashdata('login_err'); ?>. 
	 </div>
                    <?php } ?>
					
					
		<?php if($this->session->flashdata('logout_suc')){ ?>
                     
					  <div class="alert alert-info"> 
	 <button type="button" class="close" data-dismiss="alert">×</button>
	 <i class="fa fa-info-sign"></i><strong></strong> 
	 <?php  echo $this->session->flashdata('logout_suc'); ?>. 
	 </div>
                    <?php } ?>			
					
					
        <section class="panel panel-default bg-white m-t-lg">
          
          <header class="panel-heading text-center">
            
            <strong>
              Login
            </strong>
            
          </header>
          
          <form action="<?php echo base_url();?>index.php/login/user_login" method="post" class="panel-body wrapper-lg">
            
            <div class="form-group">
              
              <label class="control-label">
                Email
              </label>
              
              <input type="email" placeholder="" name="uname" class="form-control input-lg">
              
            </div>
            
            <div class="form-group">
              
              <label class="control-label">
                Password
              </label>
              
              <input type="password" id="inputPassword" name="upassword" placeholder="" class="form-control input-lg">
              
            </div>
            
            <div class="checkbox">
              
              <!--<label>
                
                <input type="checkbox">
                Keep me logged in 
              </label>-->
              
            </div>
            
            <a href="#" class="pull-right m-t-xs">
              <small>
                Forgot password?
              </small>
            </a>
            
            <button type="submit" name="user_login" class="btn btn-primary">
             Login
            </button>
            
            <div class="line line-dashed">
            </div>
            
         
            <p class="text-muted text-center">
              <small>
                Do not have an account?
              </small>
            </p>
            
            <a href="<?php echo base_url();?>index.php/signup" class="btn btn-info btn-block">
              Create an account
            </a>
            
          </form>
          
        </section>
        
      </div>
      
    </section>
    