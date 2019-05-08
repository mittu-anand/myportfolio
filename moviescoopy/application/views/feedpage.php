
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
						 
						  $share_for='moviepost';
						  $count_shares=$CI->user_model->get_this_share_count($share_for,$feedpost[0]->mpid);
						  
						  ?>
                          <div class="panel panel-default">
                            
                            <div class="panel-body">
                              <table style="margin-bottom:20px;">
							  <tr>
							  <td>
							  <a href="<?php echo base_url();?>index.php/moviefolio/movie?id=<?php echo $movieis[0]->mid; ?>&&name=<?php echo $movieis[0]->name; ?>"><img class="img-circle 60-border" src="<?php echo base_url();?>uploads/movie_main/<?php if(isset($movieis[0]->image) && $movieis[0]->image!=''){echo $movieis[0]->image; }else{ echo "moviedummy.jpg"; } ?>" title="<?php echo $movieis[0]->name; ?>" alt="<?php echo $movieis[0]->name; ?>" style="height:60px;width:60px;border:3px solid #FFC333;">
							  </a>
							 </td>
							  <td>
							  <a href="<?php echo base_url();?>index.php/moviefolio/movie?id=<?php echo $movieis[0]->mid; ?>&&name=<?php echo $movieis[0]->name; ?>"><label class="label bg-success m-l-xs" style="cursor:pointer;">
            <?php echo $movieis[0]->name; ?> </label></a>
							 
							  </td>
							  </tr>
							    <span class="timeline-date pull-right">
                                <?php 
								$CI =& get_instance();
								$dsend=$CI->user_model->ago($feedpost[0]->postdate);
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
                                <img style="width:100%;margin-bottom:10px;" src="<?php echo base_url();?>uploads/moviepost/<?php echo $feedpost[0]->post_image; ?>"/>
                                <?php } ?>
								
							   <div class="small-sp"></div>
								<?php if($feedpost[0]->post_video!=''){ ?>
								<div  class="videocontainer" rel='<?php echo html_entity_decode($feedpost[0]->post_video); ?>'>
                                  
								  <img src="<?php echo base_url();?>images/youtube.png" style="cursor: pointer;width:100%;" />
								   
								</div>   
								
							   <?php } ?>
							  </h5>
							    <div class="small-sp"></div>
								  <div class="small-sp"></div>
								    <div class="small-sp"></div>
							    <?php
								$usid=$this->session->userdata('user_id');
								if($this->session->userdata('logged_in',true) && $this->session->userdata('user_type')=='P')  {
								$sharetypeis='moviepost';
								$sharecheck=$CI->user_model->check_share($sharetypeis,$usid,$feedpost[0]->mpid);
								?>
							  
								<?php if($sharecheck==0) {?>
							
								<button class="btn btn-info cntnt movpostshare btn-xs" rel="<?php echo $feedpost[0]->mpid;?>">Share<label class="label shr-label bg-danger points" rel="<?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?>"><?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?></label></button>
							  
							  <?php } else { ?>
							  
							  <button class="btn btn-info btn-xs">
							  <i class="fa fa-check ">
                              </i>
							  Shared<label class="label shr-label label-danger points"><?php if($count_shares==''){ echo "0";} else { echo $count_shares;}?></label></button>
							  
							  <?php } ?>
							  
							 
							  <?php } ?>
							
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