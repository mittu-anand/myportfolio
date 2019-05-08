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

