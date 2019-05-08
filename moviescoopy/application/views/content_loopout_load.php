   <?php foreach($outloops as $outlp) { ?>
		  <?php $CI =& get_instance();
					$fto=$CI->get_user_from_view($outlp->friendid);
				
              ?>
        <li class="list-group-item loopsoutfeed">
          
          <a class="thumb-xs pull-left m-r-sm" href="#">
            
            <img class="img-circle" src="<?php echo base_url();?>uploads/users/thumb_small/<?php if(isset($fto[0]->profile_img) && $fto[0]->profile_img!=''){echo $fto[0]->profile_img; }else{ if($fto[0]->gender=='M'){ echo "avatar_default.jpg";}else{echo "favatar_default.jpg";} } ?>">
            
          </a>
          
          
            
            <small class="pull-right text-muted">
               <?php 
			   
					$CI =& get_instance();
								$dsend=$CI->user_model->ago($outlp->date_send);
								echo $dsend;
                ?>
            </small>
            <?php if($outlp->accepted=='2') { ?>
				  
            <strong>
            <a href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $fto[0]->uid; ?>"> <?php 	echo $fto[0]->name; ?></a>
            </strong>
				<span>
				  is in your loop
				</span>
				<span class="label label-sm bg-success text-uc">
				  In Loop
				</span>
            <?php } else if($outlp->accepted=='1') { ?>
			
				<strong>
				  <a href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $fto[0]->uid; ?>"> <?php 	echo $fto[0]->name; ?></a>
				</strong>
				<span>
				  and you are not looped 
				</span>
				<span class="label label-lg bg-success">Waiting</span>
				<form action="<?php echo base_url();?>index.php/portfolio/cancel_loop_request" method="post" >
					<input type="hidden" name="loop_id" value="<?php echo $outlp->loopid; ?>" />
					<input type="hidden" name="current_user" value="<?php echo $this->session->userdata('user_id'); ?>" />
					
			<button type="submit" name="cancel_loop_requests" style="margin-left:4px;" class="btn btn-xs btn-danger m-t-xs">
				  Cancel Request
				</button>
			</form>
            <?php } ?>
            
          
		  
		  
				
        </li>
        
      <?php }  ?>