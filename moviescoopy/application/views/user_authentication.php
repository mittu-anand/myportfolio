<div class="spacer"></div>
<div class="row">


  <div class="col-md-10 col-md-offset-1">
   <?php if($this->session->flashdata('serv_err')){ ?>
                      <div class="alert alert-danger fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('serv_err'); ?>
                      </div>
                <?php } ?>
				<?php if($this->session->flashdata('serv_suc')){ ?>
                      <div class="alert alert-success fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('serv_suc'); ?>
                      </div>
                <?php } ?>
	<section class="panel panel-default">
  
  <header class="panel-heading bg-light">
    
    <ul class="nav nav-tabs nav-justified">
      
      <li class="">
        <a href="<?php echo base_url();?>index.php/portfolio/edit_portfolio?id=<?php echo $this->session->userdata('user_id'); ?>" style="border-left:none;">
          About Me
        </a>
      </li>
      <li class="">
        <a href="<?php echo base_url();?>index.php/portfolio/edit_portfolio_social?id=<?php echo $this->session->userdata('user_id'); ?>" style="border-left:none;">
          Social Hub
        </a>
      </li>
      <li class="active">
        <a href="<?php echo base_url();?>index.php/portfolio/edit_portfolio_authentication?id=<?php echo $this->session->userdata('user_id'); ?>" style="border-right:none;">
          Authentication
        </a>
      </li>
      
    </ul>
    
  </header>
  
  <div class="panel-body">
    
    <div class="tab-content">
      
      
      
      <div id="profile" class="tab-pane active">
        <div class="col-md-10 col-md-offset-1">
			<section class="panel panel-default">
  
  

  
  <form data-validate="parsley" action="<?php echo base_url();?>index.php/portfolio/save_email?id=<?php echo $this->session->userdata('user_id'); ?>" method="post">
  <section class="chat-list panel-body">
    <article class="chat-item right" id="chat-id-1">
  
  <h5 class="pull-right" style="font-weight:bold;">
    Change Email
  </h5>
 
</article>

    <article class="chat-item left" id="chat-id-1">
      <table class="table">
	      
		  <tr>
		  <td><h5>Email</h5></td><td><h6>
		  <input type="text" data-type="email" data-required="true" name="email" id="email" value="<?php if(isset($user_portfolio[0]->email)){echo $user_portfolio[0]->email; } ?>" class="form-control">
		   <br/><span class="email-err"><?php echo form_error('email'); ?></span>
		  </h6></td>
		  
			 
		  </tr>
		
	  </table>
       <input type="submit" class="btn btn-info" style="float:right;" value="Save"/>
    </article>
    
  </section>
 
</form> 
   <form data-validate="parsley" action="<?php echo base_url();?>index.php/portfolio/save_password?id=<?php echo $this->session->userdata('user_id'); ?>" method="post">
  <section class="chat-list panel-body">
    <article class="chat-item right" id="chat-id-1">
  
  <h5 class="pull-right" style="font-weight:bold;">
    Change Password
  </h5>
 
</article>

    <article class="chat-item left" id="chat-id-1">
      <table class="table">
	      
		  <tr>
		  <td><h5>Current Password</h5></td><td><h6><input type="password" name="cpassword" id="input-id-1" value="" class="form-control"></h6>
		  
		  <?php echo form_error('cpassword'); ?>
		  </td>
		  </tr>
		  <tr>
		  <td><h5>New Password</h5></td><td><h6><input type="password" name="newpassword" id="input-id-1" value="" class="form-control"></h6>
		  <?php echo form_error('newpassword'); ?>
		  </td>
		  </tr>
		  <tr>
		  <td><h5>Confirm Password</h5></td><td><h6><input type="password" name="confirmpassword" id="input-id-1" value="" class="form-control"></h6>
		  <?php echo form_error('confirmpassword'); ?>
		  
		  </td>
		  </tr>
	  </table>
       <input type="submit" class="btn btn-info" style="float:right;" value="Save"/>
    </article>
    
  </section>
 
</form> 
</section>
		</div>
      </div>
     
      
    </div>
    
  </div>
  
</section>
  </div>
</div>  
<div class="spacer"></div>
<div class="spacer"></div>