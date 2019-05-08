
<section id="content">
        
<section class="vbox">
          
<section class=" wrapper">
 <div class="spacer"></div>
<div class="row">
<div class="col-md-6 col-md-offset-3">
<input type="hidden" class="userlog" value="<?php echo $this->session->userdata('user_id');?>" />
 <div class="timeline-caption">
                        <?php
						  $CI =& get_instance();
						  $share_for='userpost';
						  $count_shares=$CI->user_model->get_this_share_count($share_for,$feedpost[0]->upid);
						  ?>
                          <div class="panel panel-default">
                            
                            <div class="panel-body">
                              <table style="margin-bottom:20px;">
							  <tr>
							  <td>
							  <a href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $feedpost[0]->uid; ?>">
							 <img class="img-circle" style="height:60px;width:60px;" src="<?php echo base_url();?>uploads/users/<?php if($feedpost[0]->profile_img!=''){echo $feedpost[0]->profile_img; }else{ if($feedpost[0]->gender=='M'){ echo "avatar_default.jpg";}else{echo "favatar_default.jpg";} } ?>">
            
							 </a>
							 </td>
							  <td>
							  <a href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $feedpost[0]->uid; ?>"><label class="label bg-success m-l-xs" style="cursor:pointer;">
            <?php echo $feedpost[0]->name; ?> </label></a>
							 <p style="padding-left:10px;"><?php echo $feedpost[0]->desig; ?></p>
							  </td>
							  </tr>
							  <span class="timeline-date pull-right">
                                <?php 
								$CI =& get_instance();
								$dsend=$CI->user_model->ago($feedpost[0]->post_date);
								echo $dsend;
								
								?>
                              </span>
							  </table>
							  <hr/>
                              
                              
                              
                              
                              
                                <span>
                                  <h5 style="font-weight:bold;padding-bottom:10px;color:#000;"><?php echo $feedpost[0]->post_title; ?><h5>
                                </span>
								<?php if($feedpost[0]->post_text!=''){ ?>
								<span style="padding-bottom:10px;">
								<p>
								
								<?php echo $feedpost[0]->post_text; ?>
								</p>
								</span>
								<?php } ?>
								<?php if($feedpost[0]->post_image!=''){ ?>
                                <img style="width:100%;margin-bottom:10px;" src="<?php echo base_url();?>uploads/user_post/<?php echo $feedpost[0]->post_image; ?>"/>
                                <?php } ?>
								
							    <div class="small-sp"></div>
								<?php if($feedpost[0]->post_video!=''){ ?>
								<div  class="videocontainer" rel='<?php echo html_entity_decode($feedpost[0]->post_video); ?>'>
                                  
								  <img src="<?php echo base_url();?>images/youtube.png" style="cursor: pointer;width:100%;" />
								   
								</div>   
								 <div class="small-sp"></div>
								  <div class="small-sp"></div>
								    <div class="small-sp"></div>
							   <?php } ?>
							  </h5>
							  
							   <input type="hidden" class="userlog" value="<?php echo $this->session->userdata('user_id');?>" />
							  	<?php
								
									$CI =& get_instance();
									$usid=$this->session->userdata('user_id');
									if($this->session->userdata('logged_in',true) && $this->session->userdata('user_type')=='P')  {
									$sharetypeis='userpost';
									$sharecheck=$CI->user_model->check_share($sharetypeis,$usid,$feedpost[0]->upid);
									
								?>
							  
								<?php if($sharecheck==0) {?>
							
								<button class="btn btn-info cntnt userpostshare btn-xs" rel="<?php echo $feedpost[0]->upid;?>">Share<label class="label shr-label bg-danger points" rel="<?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?>"><?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?></label></button></td>
							  
							    <?php } else { ?>
							  
								<button class="btn btn-info btn-xs"><i class="fa fa-check ">
                              </i>
                            Shared<label class="label shr-label label-danger points"><?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?></label></button>
							  
								<?php } ?>
							  
							 
								<?php }?>
						
                            </div>
                            
                          </div>
                          
                        </div>
						 </div>
						  </div>
						  <div class="spacer"></div>
						   <div class="spacer"></div>
						</section>
						</section>
						</section>