 <header class="bg-primary header navbar navbar-fixed-top-xs">
        <div class="navbar-header aside-md">
          
         
          <a href="<?php echo base_url();?>index.php/videos" class="navbar-brand">
       Stack
          </a>
          
         
          
        </div>
        <?php $stack_active=$this->session->userdata('stack_menu');?>
        <ul class="nav navbar-nav">
          <li class="<?php if($stack_active=='video'){ echo 'stack_active';} else { echo '';}?>">
            
            <a href="<?php echo base_url();?>index.php/videos">
              
              <i class="fa fa-building-o">
              </i>
              
              <span class="font-bold">
               Videos
              </span>
              
            </a>
            
          </li>
           <li class="<?php if($stack_active=='book'){ echo 'stack_active';} else { echo '';}?>">
            
            <a href="<?php echo base_url();?>index.php/booking">
              
              <i class="fa fa-building-o">
              </i>
              
              <span class="font-bold">
               Book Gigs
              </span>
              
            </a>
            
          </li>
        </ul>
       
      </header>