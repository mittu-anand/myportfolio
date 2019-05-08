 <section class="vbox">
      <section>
        
        <section class="hbox stretch">
          
          <!-- .aside -->
          
          <aside class="bg-light lter b-r aside-md hidden-print hidden-xs" id="nav">
            
            <section class="vbox">
             
              <section class="w-f scrollable">
                
                <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
                  
                  <!-- nav -->
                  
                  <nav class="nav-primary hidden-xs about-moviescoopy">
                     <?php $m_sub_active=$this->session->userdata('m_sub');?>
                    <ul class="nav">
                      
                      <li class="<?php if($m_sub_active=='home'){ echo 'active';} else { echo '';}?>">
                        
                        <a href="<?php echo base_url();?>index.php/moviescoopy">
                          
                          <i class="fa fa-hand-o-up icon">
                            
                            <b class="bg-danger">
                            </b>
                            
                          </i>
                          
                          
                          <span>
                            Moviescoopy.com
                          </span>
                          
                        </a>
                      
                      </li>
                      
                      <li class="<?php if($m_sub_active=='company'){ echo 'active';} else { echo '';}?>">
                        
                        <a href="<?php echo base_url();?>index.php/moviescoopy/company" >
                          
                          <i class="fa fa-building-o icon">
                            
                            <b class="bg-warning">
                            </b>
                            
                          </i>
                          
                         
                          
                          <span>
                            As a company
                          </span>
                          
                        </a>
                        
                      </li>
                      
                      <li class="<?php if($m_sub_active=='services'){ echo 'active';} else { echo '';}?>">
                        
                        <a href="<?php echo base_url();?>index.php/moviescoopy/services" >
                          
                          <i class="fa fa-tasks icon">
                            
                            <b class="bg-warning">
                            </b>
                            
                          </i>
                          <span>
                            Services
                          </span>
                          
                        </a>
                      </li>
                      
                      <li class="<?php if($m_sub_active=='advertise'){ echo 'active';} else { echo '';}?>">
                        
                        <a href="<?php echo base_url();?>index.php/moviescoopy/advertise">
                           
                          <i class="fa fa-volume-up icon">
                            
                            <b class="bg-warning">
                            </b>
                            
                          </i>
                          
                          
                          <span>
                            Advertise
                          </span>
                          
                        </a>
                        
                      </li>
                      
                      <li class="<?php if($m_sub_active=='privacy'){ echo 'active';} else { echo '';}?>">
                        
                        <a href="<?php echo base_url();?>index.php/moviescoopy/privacy">
                           
                          <i class="fa fa-lock icon">
                            
                            <b class="bg-warning">
                            </b>
                            
                          </i>
                          
                          <span>
                            Privacy Policy
                          </span>
                          
                        </a>
                        
                      </li>
                      
                      <li class="<?php if($m_sub_active=='terms'){ echo 'active';} else { echo '';}?>">
                        
                        <a href="<?php echo base_url();?>index.php/moviescoopy/terms">
                           
                          <i class="fa fa-file-text-o icon">
                            
                            <b class="bg-warning">
                            </b>
                            
                          </i>
                          
                          <span>
                            Terms of use
                          </span>
                          
                        </a>
                        
                      </li>
                        <li class="<?php if($m_sub_active=='contact'){ echo 'active';} else { echo '';}?>">
                        
                        <a href="<?php echo base_url();?>index.php/moviescoopy/contact">
                           
                          <i class="fa fa-envelope-o icon">
                            
                            <b class="bg-warning">
                            </b>
                            
                          </i>
                          
                          <span>
                            Contact us
                          </span>
                          
                        </a>
                        
                      </li>
					   <li style="background:#3FB4B5;color:#ffffff;">
                        
                        <a style="color:#ffffff !important;" href="<?php echo base_url();?>index.php/moviescoopy/whats_new">
                           
                          
                            <b class="bg-warning">
                            </b>
                         
                          
                          <span>
                            What's New?
                          </span>
                          
                        </a>
                        
                      </li>
                    </ul>
                    
                  </nav>
                  
                  <!-- / nav -->
                  
                </div>
                
              </section>
              
            </section>
            
          </aside>