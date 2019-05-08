<aside id="email-list" class="bg-light lter b-l">
   <input type="hidden" class="flagstopper" value="
  
				<?php
					$CI =& get_instance();
				
					echo $total_data=$CI->user_model->get_loopsin_count($user_portfolio[0]->uid);
				
				  ?>"/>
  <input type="hidden" class="loguser" value="<?php echo $user_portfolio[0]->uid;?>"/>
  <section class="vbox">
    <?php if($inloops) { ?>
    <header class="bg-light dk header clearfix">
      
     
      <div class="btn-toolbar">
	  <div class="btn-group pull-left">
          
          <button data-title="Loops In" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm btn-default" data-original-title="">
            Loop In Requests
          </button>
          
        </div>
      
      
          <div class="btn-group pull-right">
          
          <button data-title="Refresh" data-placement="bottom" data-toggle="tooltip" class="btn btn-sm btn-default" data-original-title="" >
            <i class="fa fa-refresh">
            </i>
          </button>
          
        </div>
        
        
      </div>
      
    </header>
    
    <section class="hover">
      
      <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-alt list-group-lg">
       
      
         <?php foreach($inloops as $inlp) { ?>
		  <?php $CI =& get_instance();
					$ffromo=$CI->get_user_from_view($inlp->userid);
				
              ?>
        <li class="list-group-item loopsinfeed">
          
          <a class="thumb-xs pull-left m-r-sm" href="#">
            
           <img class="img-circle" src="<?php echo base_url();?>uploads/users/thumb_small/<?php if(isset($ffromo[0]->profile_img) && $ffromo[0]->profile_img!=''){echo $ffromo[0]->profile_img; }else{ if($ffromo[0]->gender=='M'){ echo "avatar_default.jpg";}else{echo "favatar_default.jpg";} } ?>">
            
          </a>
          
         
            
            <small class="pull-right text-muted">
               <?php 
								$CI =& get_instance();
								$dsend=$CI->user_model->ago($inlp->date_send);
								echo $dsend;
                ?>
            </small>
            <?php if($inlp->accepted=='2') { ?>
				  
            <strong>
             <a href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $ffromo[0]->uid; ?>"><?php 	echo $ffromo[0]->name; ?></a>
            </strong>
				<span>
				 and you are looped
				</span>
				<span class="label label-sm bg-success text-uc">
				  In Loop
				</span>
            <?php } else if($inlp->accepted=='1') { ?>
			
				<strong>
				  <a href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $ffromo[0]->uid; ?>"><?php 	echo $ffromo[0]->name; ?></a>
				</strong>
				<span>
				  has requested you to loop him 
				</span>
				<span class="label label-sm bg-danger text-uc">
				  Waiting
				</span>
				 <form action="<?php echo base_url();?>index.php/portfolio/accept_loopin_request" method="post" >
					<input type="hidden" name="loop_id" value="<?php echo $inlp->loopid; ?>" />
					<input type="hidden" name="current_user" value="<?php echo $this->session->userdata('user_id'); ?>" />
					
			<button type="submit" name="accept_loopin" style="margin-left:4px;" class="btn btn-xs btn-success m-t-xs">
				  Accept Loop Request
				</button>
				</form>
			
            <?php } ?>
           
          
        </li>
        
      <?php }  ?>
	  </ul>
	 
      
    </section>
 <?php } else { ?>
  
	    
          <div class="row wrapper">

				<div class="col-sm-1 m-b-xs">
          
						<span class="label label-sm bg-danger text-uc">
						  You have no loops requests so far!
						</span>
            
				</div>
		  </div>		 
          
        
		
	 
      
  <?php } ?>
  <div class="col-sm-4 col-sm-offset-4">
  <?php if($inloops){
						if($total_data<=10){?>
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block hideme"><strong>End of requests</strong></button> 
					</div>
					
					<?php }
					else if($total_data>10){?>
					
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block loopinloadmore hideme"><strong>Load more requests</strong></button> 
					</div>
					<img src="<?php echo base_url();?>images/loader.gif" style="display:none;" class="pull-center loader-img">
					<?php } }?>
					</div>
					 <div class="spacer"></div>
			  <div class="spacer"></div>
				<div class="spacer"></div>
				<div class="spacer"></div>
  </section>
 
</aside>
