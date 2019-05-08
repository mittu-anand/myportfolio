<div class="spacer"></div>
<div class="row">



  <div class="col-md-8 col-md-offset-1">
	
<section class="panel panel-default">
  
  <header class="panel-heading">
    About - <strong><?php if(isset($user_portfolio[0]->name)){echo $user_portfolio[0]->name; } ?></strong>
	<?php

								  $userid=$this->session->userdata('user_id');
								  if($this->session->userdata('logged_in',true) && $userid==$user_portfolio[0]->uid) { 
					       
						   ?>
		  
		  
		  
						  <a class="pull-right" href="<?php echo base_url();?>index.php/portfolio/edit_portfolio?id=<?php echo $this->session->userdata('user_id'); ?>" title="Edit Profile"> <i class="fa fa-pencil "></i> </a>
						 
                          
						  <?php } ?>
  </header>
 
 <section class="chat-list panel-body">
    <article class="chat-item right" id="chat-id-1">
  
  <h6 class="pull-right" style="font-weight:bold;">
    About
  </h6>
  
  <section class="chat-body">
    
    <div class="panel bg bg-success text-sm m-b-none">
      
      <div class="panel-body">
        
        <span class="arrow right">
        </span>
        
        <p class="m-b-none">
         <?php if(isset($user_portfolio[0]->aboutme)){echo $user_portfolio[0]->aboutme; } ?>
		</p>
        
      </div>
      
    </div>
    
    
  </section>
  
</article>
    <article class="chat-item left" id="chat-id-1">
      <table class="table">
		  <tr>
		  <td><h5>Name</h5></td><td><h6> <?php if(isset($user_portfolio[0]->name)){echo $user_portfolio[0]->name; } ?></h6></td>
		  </tr>
		  <tr>
		  <td><h5>Portfolio</h5></td><td><h6><?php if(isset($user_portfolio[0]->desig)){echo $user_portfolio[0]->desig; } ?></h6></td>
		  </tr>
		  <tr>
		  <td><h5>Industry</h5></td><td><h6><?php if(isset($user_portfolio[0]->industry)){echo $user_portfolio[0]->industry; } ?></h6></td>
		  </tr>
		  <tr>
		  <td><h5>Place</h5></td><td><h6><?php if(isset($user_portfolio[0]->location)){echo $user_portfolio[0]->location; } ?></h6></td>
		  </tr>
		  <tr>
		  <td><h5>I work as</h5></td><td><h6><?php if(isset($user_portfolio[0]->current_job)){echo $user_portfolio[0]->current_job; } ?></h6></td>
		  </tr>
		  <tr>
		  <td><h5>Dob</h5></td><td><h6><?php if(isset($user_portfolio[0]->dob)){echo $user_portfolio[0]->dob; } ?></h6></td>
		  </tr>
		  <tr>
		  <td><h5>Gender</h5></td><td><h6><?php if(isset($user_portfolio[0]->gender)){if($user_portfolio[0]->gender=='M'){ echo "Male"; } else { echo "Female";}} ?></h6></td>
		  </tr>
		   <tr>
		  <td><h5>Email</h5></td><td><h6><?php if(isset($user_portfolio[0]->email)){echo $user_portfolio[0]->email; } ?></h6></td>
		  </tr>
		   <tr>
		  <td><h5>Ping me</h5></td><td> <ul style="list-style:none;margin-top:15px;">
		 <li>
			 <p id="social-buttons"> 
			 <a class="btn btn-sm btn-icon btn-info" target="_blank" href="<?php if(isset($user_portfolio[0]->twitter)){echo $user_portfolio[0]->twitter; } ?>">
			 <i class="fa fa-twitter"></i>
			 </a>
			 <a class="btn btn-sm btn-icon btn-info" target="_blank"  href="<?php if(isset($user_portfolio[0]->facebook)){echo $user_portfolio[0]->facebook; } ?>">
			 <i class="fa fa-facebook"></i>
			 </a> 
			 <a class="btn btn-sm btn-icon btn-info" target="_blank"  href="<?php if(isset($user_portfolio[0]->google)){echo $user_portfolio[0]->google; } ?>">
			 <i class="fa fa-google-plus"></i>
			 </a> 
			 <a class="btn btn-sm btn-icon btn-info" target="_blank"  href="<?php if(isset($user_portfolio[0]->linkedin)){echo $user_portfolio[0]->linkedin; } ?>">
			 <i class="fa fa-linkedin"></i>
			 </a>
			 </p>
		 </li>
		 </ul></td>
		  </tr>
	  </table>

    </article>
    
  </section>
 
</section>
	</div>
</div>
 
 <div class="spacer"></div>
  <div class="spacer"></div>