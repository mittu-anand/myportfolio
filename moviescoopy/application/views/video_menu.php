<nav class="nav-primary" >
<?php $video_active=$this->session->userdata('video_menu');?>
<ul class="nav video_menu">
<li class="<?php if($video_active=='trailor'){ echo 'active';} else { echo '';}?>">
                        
                       <a href="<?php echo base_url(); ?>index.php/videos/filter?cat=<?php echo 'Trailors'; ?>" class="<?php if($video_active=='trailor'){ echo 'vactive';} else { echo '';}?>" >
                            
                          <i class="fa fa-film icon">
                            
                            <b class="bg-warning">
                            </b>
                            
                          </i>
                          
                         
                          </span>
                          
                          <span>
                            Trailors
                          </span>
                          
                        </a>
                       
                      </li>
					  <li class="<?php if($video_active=='songs'){ echo 'active';} else { echo '';}?>">
                        
                       <a href="<?php echo base_url(); ?>index.php/videos/filter?cat=<?php echo 'Songs'; ?>" class="<?php if($video_active=='songs'){ echo 'vactive';} else { echo '';}?>">
                            
                          <i class="fa fa-music icon">
                            
                            
                            
                          </i>
                          
                         
                          </span>
                          
                          <span>
                            Songs
                          </span>
                          
                        </a>
                       
                      </li>
					  <li class="<?php if($video_active=='interview'){ echo 'active';} else { echo '';}?>">
                        
                       <a href="<?php echo base_url(); ?>index.php/videos/filter?cat=<?php echo 'Interviews'; ?>" class="<?php if($video_active=='interview'){ echo 'vactive';} else { echo '';}?>">
                            
                          <i class="fa fa-microphone icon">
                            
                           
                            
                          </i>
                          
                         
                          </span>
                          
                          <span>
                            Interviews
                          </span>
                          
                        </a>
                       
                      </li>
					  <li class="<?php if($video_active=='events'){ echo 'active';} else { echo '';}?>">
                        
                       <a href="<?php echo base_url(); ?>index.php/videos/filter?cat=<?php echo 'Events'; ?>" class="<?php if($video_active=='events'){echo 'vactive';} else { echo '';}?>">
                            
                          <i class="fa fa-puzzle-piece icon">
                            
                            <b class="bg-warning">
                            </b>
                            
                          </i>
                          
                         
                          </span>
                          
                          <span>
                            Events
                          </span>
                          
                        </a>
                       
                      </li>
					  <li class="<?php if($video_active=='monline'){ echo 'active';} else { echo '';}?>">
                        
                       <a href="<?php echo base_url(); ?>index.php/videos/filter?cat=<?php echo 'Movies Online'; ?>" class="<?php if($video_active=='monline'){ echo 'vactive';} else { echo '';}?>">
                            
                          <i class="fa fa-desktop icon">
                            
                            <b class="bg-warning">
                            </b>
                            
                          </i>
                          
                         
                          </span>
                          
                          <span>
                            Movies Online
                          </span>
                          
                        </a>
                       
                      </li>
					  <li class="<?php if($video_active=='sf'){ echo 'active';} else { echo '';}?>">
                        
                       <a href="<?php echo base_url(); ?>index.php/videos/filter?cat=<?php echo 'Short Films'; ?>" class="<?php if($video_active=='sf'){ echo 'vactive';} else { echo '';}?>">
                            
                          <i class="fa fa-star icon">
                            
                            <b class="bg-warning">
                            </b>
                            
                          </i>
                          
                         
                          </span>
                          
                          <span>
                            Short Films
                          </span>
                          
                        </a>
                       
                      </li>
</ul>
</nav>
