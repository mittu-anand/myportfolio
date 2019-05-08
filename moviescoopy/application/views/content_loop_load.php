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
	<?php } }?>



