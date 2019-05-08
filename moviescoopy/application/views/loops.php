<section class="panel panel-default">
  	<?php
					$CI =& get_instance();
				
					 $total_data=$CI->user_model->get_this_user_loops_count($user_portfolio[0]->uid);
				    
				  ?>
 
  <header class="panel-heading">
    <strong><?php echo $user_portfolio[0]->name; ?>'s</strong> Loop  &nbsp;&nbsp; <span>(<?php echo $total_data;?> people)</span>
  </header>
 
  <div class="row wrapper">

    <?php

		 $userid=$this->session->userdata('user_id');
		 if($this->session->userdata('logged_in',true) && $userid==$user_portfolio[0]->uid) { 
					       
						   ?>
		  
		  
    
      <div class="col-sm-2">
	 <span>
     <a href="<?php echo base_url();?>index.php/portfolio/loopsin?id=<?php echo $this->session->userdata('user_id'); ?>" class="btn btn-xs btn-success m-t-xs" > Loops In <?php if($count_new_inloops){ ?><b style="background:#FFC333 !important;color:#ffffff;" class="badge bg-warning"> <?php print_r($count_new_inloops);?></b><?php } ?></a>
   
	 </span>
	 <span>
	 
	  
	 <a href="<?php echo base_url();?>index.php/portfolio/loopsout?id=<?php echo $this->session->userdata('user_id'); ?>" class="btn btn-xs btn-success m-t-xs">Loops Out</a>
	
    </span>
	</div>
	
  <?php } ?>  
    
   <?php if($loops){ ?>
  <div class="col-sm-3 pull-right">
      
      <div class="input-group">
        
        <input type="text" placeholder="Search members in loop" class="input-sm form-control search-loop">
        
        <span class="input-group-btn">
          
          <button type="button" class="btn btn-sm btn-default">
          <i class="fa fa-search icon">
                            
                            <b class="bg-danger">
                            </b>
                            
                          </i>
          </button>
          
        </span>
        
      </div>
      
    </div>
    <?php } ?>
  </div>
  <div class="spacer"></div>
  <input type="hidden" class="loguser" value="<?php echo $user_portfolio[0]->uid;?>"/>
   <input type="hidden" class="flagstopper" value="
  
				<?php
					
					echo $total_data;
				    
				  ?>
  "/>
  <div class="table-responsive">
  <?php if($loops){ foreach($loops as $loop) { ?>
  <?php $CI =& get_instance();
	  if($loop->friendid==$user_portfolio[0]->uid)
	  {
	$usr=$CI->get_user_from_view($loop->userid);
	}
	else if($loop->userid==$user_portfolio[0]->uid)
	{
		$usr=$CI->get_user_from_view($loop->friendid);
	}
	$user_likes=$CI->get_this_user_total_likes($usr[0]->uid);
	$user_loves=$CI->get_this_user_total_loves($usr[0]->uid);
  ?>
    <div class="col-sm-3 loopfeed">
    <section class="panel panel-info">
  
  <div class="panel-body">
    
    <a class="thumb pull-right m-l" href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $usr[0]->uid;?>">
      
      <img class="img-circle" style="height:50px;width:50px;" src="<?php echo base_url();?>uploads/users/<?php if(isset($usr[0]->profile_img) && $usr[0]->profile_img!=''){echo $usr[0]->profile_img; }else{ if($usr[0]->gender=='M'){ echo "avatar_default.jpg";}else{echo "favatar_default.jpg";} } ?>">
      
    </a>
    
    <div class="clear">
      
      <a class="text-info" href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $usr[0]->uid;?>">
        <?php echo $usr[0]->name; ?>
        <i class="icon-twitter">
        </i>
      </a>
      <?php
			if($user_likes==0)
			{
				$ulikes='0 Likes';
			}
			else if($user_likes==1)
			{
				$ulikes='1 Like';
			}
			else
			{
				$ulikes=$user_likes.' Likes';
			}
			if($user_loves==0)
			{
				$uloves='0 Loves';
			}
			else if($user_loves==1)
			{
				$uloves='1 Love';
			}
			else
			{
				$uloves=$user_loves.' Loves';
			}
	  ?>
      <small class="block text-muted">
        <?php echo $ulikes;?> / <?php echo $uloves;?>
      </small>
      
      <a class="btn btn-xs btn-success m-t-xs" href="#">
        <?php echo $usr[0]->desig; ?>
      </a>
      
    </div>
    
  </div>
  
</section>
    </div>
	<?php } }else {?>
				
			 <div class="col-sm-3">	
				<section class="panel panel-default text-sm doc-buttons">
				  
				  <div class="panel-body">
				  
				    <i class="fa fa-search icon">
                            
                            <b class="bg-danger">
                            </b>
                            
                    </i>
						 &nbsp; <strong>Loop is empty</strong>
				  </div>
				  
				</section>
				<div class="spacer"></div>
			</div>	
				
				
				
	<?php } ?>
	 <div class="col-sm-4 col-sm-offset-4">
  <?php if($loops){
						if($total_data<=8){?>
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block hideme"><strong>End of loop members</strong></button> 
					</div>
					
					<?php }
					else if($total_data>8){?>
					
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block looploadmore hideme"><strong>Show more loop members</strong></button> 
					</div>
					<img src="<?php echo base_url();?>images/loader.gif" style="display:none;" class="pull-center loader-img">
					<?php } }?>
					<div class="spacer"></div>
					 <div class="spacer"></div>
					</div>
					 
  </div>
  

</section>
