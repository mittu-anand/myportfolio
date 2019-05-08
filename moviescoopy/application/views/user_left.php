 <section>
        
        <section class="hbox stretch">
          
          <!-- .aside -->
          <?php 
		  $utype=$user_portfolio[0]->type;
		  $log_user_type=$this->session->userdata('user_type');
			
			
		  if($utype=='P') { ?>
          <aside class="bg-light lter b-r aside-md hidden-print" style="background:none;border:none;">
            
            <section class="vbox" style="position:fixed;width:220px;">
              
           
                 <?php
				 
					$usid=$this->session->userdata('user_id');
					if($this->session->userdata('logged_in',true) && $usid!=$user_portfolio[0]->uid) {
					if($log_user_type=='P' && $utype=='P') {?>
				
              
                  
				  	<?php if($loopstatus){?>
					<?php if($loopstatus[0]->accepted=='1')
						{?>
						
						<form action="<?php echo base_url();?>index.php/portfolio/cancel_loop_requst" method="post" >
						<input type="hidden" name="current_user" value="<?php echo $this->session->userdata('user_name'); ?>" />
						<input type="hidden" name="friend_user" value="<?php if(isset($user_portfolio[0]->uid)){echo $user_portfolio[0]->uid; } ?>" />
						<input type="hidden" name="loop_id" value="<?php if(isset($loopstatus[0]->loopid)){echo $loopstatus[0]->loopid; } ?>" />
						   <header class="header bg-primary lter text-center clearfix">
					  <div class="btn-group">
					  <button type="button" class="btn btn-sm btn-dark btn-icon" title="New project">
						<i class="fa fa-plus">
						</i>
					  </button>
					  
					  <div class="btn-group hidden-nav-xs">
						
						<button type="submit" name="cancel_loop_request" class="btn btn-sm btn-primary">
						  Cancel Request
						
						</button>
					 
						
					  </div>
					  </div>
					  </header>
					  </form>
					  <?php }  else if($loopstatus[0]->accepted==2){ ?>
					 
						<header class="header bg-primary lter text-center clearfix">
						 <div class="btn-group">
						<button type="button" class="btn btn-sm btn-dark btn-icon" title="New project">
						<i class="fa fa-plus">
						</i>
					  </button>
					  
					  <div class="btn-group hidden-nav-xs">
						
						<a href="" class="btn btn-sm btn-primary">
						  In Loop
						
						</a>
					 
						
					  </div>
					  </div>
					  </header>
					 
               <?php } else if($loopstatus[0]->accepted==0){ ?>
			   <form action="<?php echo base_url();?>index.php/portfolio/add_to_loop" method="post" >
			   <input type="hidden" name="current_user" value="<?php echo $this->session->userdata('user_id'); ?>" />
			   <input type="hidden" name="friend_user" value="<?php if(isset($user_portfolio[0]->uid)){echo $user_portfolio[0]->uid; } ?>" />
			   <header class="header bg-primary lter text-center clearfix">
			    <div class="btn-group">
					  <button type="button" class="btn btn-sm btn-dark btn-icon" title="New project">
						<i class="fa fa-plus">
						</i>
					  </button>
					  
					  <div class="btn-group hidden-nav-xs">
						
						<button type="submit" name="add_loop" class="btn btn-sm btn-primary">
						  Add to Loop
						
						</button>
					 
						
					  </div>
					  </div>
			   </header>
			   </form>
				<?php } } else if($loopotherstatus) { ?>

					<?php if($loopotherstatus[0]->accepted=='1')
						{?>
						
						<form action="<?php echo base_url();?>index.php/portfolio/accept_loop_request" method="post" >
						<input type="hidden" name="current_user" value="<?php echo $this->session->userdata('user_id'); ?>" />
						<input type="hidden" name="friend_user" value="<?php if(isset($user_portfolio[0]->uid)){echo $user_portfolio[0]->uid; } ?>" />
						<input type="hidden" name="loop_id" value="<?php if(isset($loopotherstatus[0]->loopid)){echo $loopotherstatus[0]->loopid; } ?>" />
						   <header class="header bg-primary lter text-center clearfix">
					  <div class="btn-group">
					  <button type="button" class="btn btn-sm btn-dark btn-icon" title="New project">
						<i class="fa fa-plus">
						</i>
					  </button>
					  
					  <div class="btn-group hidden-nav-xs">
						
						<button type="submit" name="accept_loop" class="btn btn-sm btn-primary">
						  Accept Loop Request
						
						</button>
					 
						
					  </div>
					  </div>
					  </header>
					  </form>
					  <?php }  else if($loopotherstatus[0]->accepted==2){ ?>
					 
						<header class="header bg-primary lter text-center clearfix">
						 <div class="btn-group">
						<button type="button" class="btn btn-sm btn-dark btn-icon" title="New project">
						<i class="fa fa-plus">
						</i>
					  </button>
					  
					  <div class="btn-group hidden-nav-xs">
						
						<a href="" class="btn btn-sm btn-primary">
						  In Loop
						
						</a>
					 
						
					  </div>
					  </div>
					  </header>
					 
               <?php } ?>
				
        			<?php } else	{ ?> 
			   <form action="<?php echo base_url();?>index.php/portfolio/add_to_loop" method="post" >
			   <input type="hidden" name="current_user" value="<?php echo $this->session->userdata('user_id'); ?>" />
			   <input type="hidden" name="friend_user" value="<?php if(isset($user_portfolio[0]->uid)){echo $user_portfolio[0]->uid; } ?>" />
			   <header class="header bg-primary lter text-center clearfix">
			    <div class="btn-group">
					  <button type="button" class="btn btn-sm btn-dark btn-icon" title="New project">
						<i class="fa fa-plus">
						</i>
					  </button>
					  
					  <div class="btn-group hidden-nav-xs">
						
						<button type="submit" name="add_loop" class="btn btn-sm btn-primary">
						  Add to Loop
						
						</button>
					 
						
					  </div>
					  </div>
			   </header>
			   </form>
			   <?php } }}?>
              <?php $usactive=$this->session->userdata('usactive');?>
              <section>
                
                <div class="slim-scroll">
                  
                  <!-- nav -->
                  
                  <nav class="nav-primary" >
                    
                    <ul class="nav">
                      <li class="<?php if($usactive=='feeds'){ echo 'active';} else { echo '';}?>">
                        
                        <a href="<?php echo base_url();?>index.php/portfolio/user?id=<?php if(isset($user_portfolio[0]->uid)){echo $user_portfolio[0]->uid; } ?>"  class="<?php if($usactive=='feeds'){ echo 'active';} else { echo '';}?>" >
                          
                          <i class="fa fa-file-text icon">
                            
                            <b class="bg-primary">
                            </b>
                            
                          </i>
                          
                          
                          <span>
                            Feeds
                          </span>
                          
                        </a>
                        
                      
                        
                      </li>
					    <li  class="<?php if($usactive=='abt'){ echo 'active';} else { echo '';}?>">
                        
                       <a href="<?php echo base_url();?>index.php/portfolio/about?id=<?php if(isset($user_portfolio[0]->uid)){echo $user_portfolio[0]->uid; } ?>"  class="<?php if($usactive=='abt'){ echo 'active';} else { echo '';}?>" >
                            
                          <i class="fa fa-user icon">
                            
                            <b class="bg-success">
                            </b>
                            
                          </i>
                          
                         
                          </span>
                          
                          <span>
                            About Me
                          </span>
                          
                        </a>
                       
                      </li>
					    <li  class="<?php if($usactive=='shareline'){ echo 'active';} else { echo '';}?>">
                        
                       <a href="<?php echo base_url();?>index.php/portfolio/shareline?id=<?php if(isset($user_portfolio[0]->uid)){echo $user_portfolio[0]->uid; } ?>"  class="<?php if($usactive=='abt'){ echo 'active';} else { echo '';}?>" >
                            
                          <i class="fa fa-chain icon">
                            
                            <b class="bg-success">
                            </b>
                            
                          </i>
                          
                         
                          </span>
                          
                          <span>
                            Shareline
                          </span>
                          
                        </a>
                       
                      </li>
                      <li  class="<?php if($usactive=='loops'){ echo 'active';} else { echo '';}?>">
                        <?php
							$CI =& get_instance();
						
						$total_datal=$CI->user_model->get_this_user_loops_count($user_portfolio[0]->uid);
						
						  ?>
                        <a href="<?php echo base_url();?>index.php/portfolio/loops?id=<?php if(isset($user_portfolio[0]->uid)){echo $user_portfolio[0]->uid; } ?>"  class="<?php if($usactive=='feeds'){ echo 'loops';} else { echo '';}?>" >
                          
                          <i class="fa fa-retweet icon">
                            
                            <b class="bg-danger">
                            </b>
                            
                          </i>
                          
                          
                          <span>
                            Loops <small>(<?php if($total_datal==''){echo "0";}else{ echo $total_datal;}?>)</small>
                          </span>
                          
                        </a>
                    
                        
                      </li>
                      
                    
					  <?php

								  $userid=$this->session->userdata('user_id');
								  if($this->session->userdata('logged_in',true) && $userid==$user_portfolio[0]->uid) { 
					       
						   ?>
                      <li  class="<?php if($usactive=='password'){ echo 'active';} else { echo '';}?>">
                        
                         <a href="<?php echo base_url();?>index.php/portfolio/edit_portfolio_authentication?id=<?php if(isset($user_portfolio[0]->uid)){echo $user_portfolio[0]->uid; } ?>"  class="<?php if($usactive=='stats'){ echo 'active';} else { echo '';}?>" >
                         
                          <i class="fa fa-columns icon">
                            
                            <b class="bg-warning">
                            </b>
                            
                          </i>
                          
                          
                          
                          <span>
                            Settings
                          </span>
                          
                        </a>
                        
                       
                        
                      </li>
                      <?php } ?>
					 <?php
					$usid=$this->session->userdata('user_id');
					if($this->session->userdata('logged_in',true) && $usid==$user_portfolio[0]->uid) { ?><?php } ?>
					  
					
					  
					
					  
					
                    </ul>
                    
                  </nav>
                  
                  <!-- / nav -->
                  
                </div>
                
              </section>
              
            </section>
            
          </aside>
        <?php } ?>  
          
          
          
        