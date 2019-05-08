<section id="main-content">
          <section class="wrapper site-min-height">
		  <div class="col-md-6">
		  
		  <?php if($this->session->flashdata('login_err')){ ?>
                      <div class="alert alert-danger fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('login_err'); ?>
                      </div>
                    <?php } ?>
					 <?php if($this->session->flashdata('login_suc')){ ?>
                      <div class="alert alert-success fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('login_suc'); ?>
                      </div>
                    <?php } ?>
      <form class="form-signin" action="<?php echo base_url();?>index.php/admin/dashboard/update_password" method="post">
        <h2 class="form-signin-heading">Change Admin Password</h2>
        <div class="login-wrap">
		
		     <input type="password" class="form-control current_password"  name="cpassword" placeholder="Current Password" autofocus>
			<?php echo form_error('cpassword'); ?>
            <input type="password" class="form-control new_password"  name="newpassword" placeholder="New Password">
			 <?php echo form_error('newpassword'); ?>
		    <input type="password" class="form-control confirm_new_password" name="confirmpassword" placeholder="Confirm Password" autofocus>
			<?php echo form_error('confirmpassword'); ?>
			
			
           
            <button class="btn btn-lg btn-login btn-block" type="submit">Change Password</button>
           

        </div>

        

      </form>
       
        </div>
      </section>
	  </section>
    