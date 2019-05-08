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
				 <?php if($this->session->flashdata('img_err')){ ?>
                      <div class="alert alert-danger fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  $imgerror=$this->session->flashdata('img_err'); echo $imgerror['error']; ?>
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
    
    <ul class="nav nav-tabs nav-justified ">
      
      <li class="active">
        <a href="<?php echo base_url();?>index.php/portfolio/edit_portfolio?id=<?php echo $this->session->userdata('user_id'); ?>" style="border-left:none;">
          About Me
        </a>
      </li>
      <li class="">
        <a href="<?php echo base_url();?>index.php/portfolio/edit_portfolio_social?id=<?php echo $this->session->userdata('user_id'); ?>" style="border-left:none;">
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
  
  
 
 <section class="panel panel-default"  style="background:#f9f9f9;">
  <form action="<?php echo base_url();?>index.php/portfolio/change_profile_image?id=<?php echo $this->session->userdata('user_id'); ?>" method="post" enctype="multipart/form-data">
  <table class="table table-striped">
  <tr>
  <td> <img style="border:1px solid #e8e8e8;padding:3px;" src="<?php echo base_url();?>uploads/users/thumb_medium/<?php if(isset($user_portfolio[0]->profile_img) && $user_portfolio[0]->profile_img!=''){echo $user_portfolio[0]->profile_img; }else{ if($user_portfolio[0]->gender=='M'){ echo "mdummy.jpg";}else{echo "fdummy.jpg";} } ?>"></td>
  <td>
  
   <div class="form-group" style="margin-top:20px;">
                        
						
                       
                        <div class="col-sm-10">
                          <input type="file" name="user_img" class="filestyle" data-icon="false" style="height:20px !important;" data-classButton="btn btn-default btn-xs" data-classInput="form-control inline input-s">
						<?php if(isset($user_portfolio[0]->profile_img) && $user_portfolio[0]->profile_img!=''){ ?>
					   <input type="hidden" name="previmg" value="<?php echo $user_portfolio[0]->profile_img;?>"/>
					   <?php } else { ?>
					    <input type="hidden" name="previmg" value="" />
					   <?php } ?>
                          
                        </div>
 </div>
  
  </td>
  <td>
  <input type="submit" value="Change" class="btn btn-info" style="margin-top:20px;"/>
  </td>
  </tr>
  </table>
  </form>
  
 
</section>

  
  <form data-validate="parsley" action="<?php echo base_url();?>index.php/portfolio/save_about?id=<?php echo $this->session->userdata('user_id'); ?>" method="post">
  <section class="chat-list panel-body">
    <article class="chat-item right" id="chat-id-1">
  
  <h6 class="pull-right" style="font-weight:bold;">
    About
  </h6>
  
  <section class="chat-body">
    
    <div class="panel bg text-sm m-b-none" style="background:#f9f9f9 !important;">
      
      <div class="panel-body">
        
       
        <p class="m-b-none">
         <textarea name="aboutme" style="height:250px;" class="form-control"><?php if(isset($user_portfolio[0]->aboutme)){echo $user_portfolio[0]->aboutme; } ?></textarea>
		</p>
        
      </div>
      
    </div>
    
    
  </section>
  
</article>

    <article class="chat-item left" id="chat-id-1">
      <table class="table">
	      <tr>
		  <td><h5>Name</h5></td><td><h6>
		  <input type="text" name="name" id="input-id-1" data-required="true" value="<?php if(isset($user_portfolio[0]->name)){echo $user_portfolio[0]->name; } ?>" class="form-control">
		  
		  </h6><?php echo form_error('name');?></td>
		  </tr>
		  <tr>
		  <td><h5>Portfolio</h5></td><td>
		  <select name="portfolio" class="form-control">
		  <?php if($portfolio_type) { foreach($portfolio_type as $ptyp) {?>
		  <option value="<?php echo $ptyp->type; ?>" <?php if(isset($user_portfolio[0]->desig) && $user_portfolio[0]->desig==$ptyp->type){echo "selected"; } ?> ><?php echo $ptyp->type; ?></option>
		  <?php } }?>
		 </select>
		  </td>
		  </tr>
		  <tr>
		  <td><h5>Industry</h5></td><td>
		  <select name="industry" class="form-control">
		   <?php if($industry) { foreach($industry as $ind) {?>
		  <option value="<?php echo $ind->industry; ?>" <?php if(isset($user_portfolio[0]->industry) && $user_portfolio[0]->industry==$ind->industry){echo "selected"; } ?> ><?php echo $ind->industry; ?></option>
		  <?php } }?>
		  </select>
		  </td>
		  </tr>
		 
		  <tr>
		  <td><h5>Place</h5></td><td><h6><input type="text" name="location" id="input-id-1" value="<?php if(isset($user_portfolio[0]->location)){echo $user_portfolio[0]->location; } ?>" class="form-control"></h6></td>
		  </tr>
		   <tr>
		  <td><h5>I work as</h5></td><td><h6> <input type="text" name="current_job" id="input-id-1" value="<?php if(isset($user_portfolio[0]->current_job)){echo $user_portfolio[0]->current_job; } ?>" class="form-control"></h6></td>
		  </tr>
		 
		  <tr>
		  <td><h5>Date of birth</h5></td><td><h6>
		  <input type="text" name="dob" class="datepicker-input form-control" data-type="dateIso" data-required="true" data-date-format="yyyy-mm-dd" value="<?php if(isset($user_portfolio[0]->dob)){echo $user_portfolio[0]->dob; } ?>"></h6>
		  <?php echo form_error('dob');?>
		  </td>
		  </tr>
		   <tr>
		  <td><h5>Gender</h5></td><td>
		  <select name="gender" class="form-control">
		  
			  <option value="F" <?php if(isset($user_portfolio[0]->gender) && $user_portfolio[0]->gender=='F'){echo "selected"; } ?>>Female</option>
			  <option value="M" <?php if(isset($user_portfolio[0]->gender) && $user_portfolio[0]->gender=='M'){echo "selected"; } ?>>Male</option>
			 
		 </select>
		  </td>
		  
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