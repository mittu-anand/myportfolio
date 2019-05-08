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
      <li class="active">
        <a href="<?php echo base_url();?>index.php/portfolio/edit_portfolio_social?id=<?php echo $this->session->userdata('user_id'); ?>" >
          Social Hub
        </a>
      </li>
      <li class="">
        <a href="<?php echo base_url();?>index.php/portfolio/edit_portfolio_authentication?id=<?php echo $this->session->userdata('user_id'); ?>">
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
  
  

  
  <form data-validate="parsley" action="<?php echo base_url();?>index.php/portfolio/save_socials?id=<?php echo $this->session->userdata('user_id'); ?>" method="post">
  <section class="chat-list panel-body">
    <article class="chat-item right" id="chat-id-1">
  
  <h5 class="pull-right" style="font-weight:bold;">
    Social Hub
  </h5>
 
</article>

    <article class="chat-item left" id="chat-id-1">
      <table class="table">
	      
		  <tr>
		  <td><h5>Facebook</h5></td><td><h6><input type="text" data-type="url" name="facebook" id="input-id-1" value="<?php if(isset($user_portfolio[0]->facebook)){echo $user_portfolio[0]->facebook; } ?>" class="form-control"></h6></td>
		  </tr>
		  <tr>
		  <td><h5>Twitter</h5></td><td><h6><input type="text" data-type="url" name="twitter" id="input-id-1" value="<?php if(isset($user_portfolio[0]->twitter)){echo $user_portfolio[0]->twitter; } ?>" class="form-control"></h6></td>
		  </tr>
		  <tr>
		  <td><h5>Google Plus</h5></td><td><h6><input type="text" data-type="url" name="google" id="input-id-1" value="<?php if(isset($user_portfolio[0]->google)){echo $user_portfolio[0]->google; } ?>" class="form-control"></h6></td>
		  </tr>
		  <tr>
		  <td><h5>Linkedin</h5></td><td><h6><input type="text" name="linkedin" data-type="url" id="input-id-1" value="<?php if(isset($user_portfolio[0]->linkedin)){echo $user_portfolio[0]->linkedin; } ?>" class="form-control"></h6></td>
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