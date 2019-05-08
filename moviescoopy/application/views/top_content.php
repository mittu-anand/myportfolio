 <section id="content">
      
      <div class="bg-primary dk">
        
        <div class="text-center wrapper">
          
          <div class="m-t-xl m-b-xl">
            
            <div class="text-uc h1 font-bold inline">
               <?php $sel_feed=$this->session->userdata('sel_feed');?>
           
            
              <?php if($sel_feed=='moviefeed') {?>
                
              <div class="pull-left m-r-sm text-white">
                Movie
                <span class="text-warning">
                Feed
                 
                </span>
              </div>
			  <?php } ?>
			   <?php if($sel_feed=='celebfeed') {?>
                
              <div class="pull-left m-r-sm text-white">
                Celebrity
                <span class="text-warning">
                Feed
                 
                </span>
              </div>
			  <?php } ?>
			   <?php if($sel_feed=='portfeed') {?>
                
              <div class="pull-left m-r-sm text-white">
                Portfolio
                <span class="text-warning">
                Feed
                 
                </span>
              </div>
			  <?php } ?>
               <?php if($sel_feed=='newsfeed') {?>
                
              <div class="pull-left m-r-sm text-white">
                News
                <span class="text-warning">
                Feed
                 
                </span>
              </div>
			  <?php } ?>
			   <?php if($sel_feed=='blogfeed') {?>
                
              <div class="pull-left m-r-sm text-white">
                Blog
                <span class="text-warning">
                Feed
                 
                </span>
              </div>
			  <?php } ?>
            </div>
            
            <div class="h4 text-muted m-t-sm">
					
            
			</div>
            
          </div>
         
		 <p class="text-center m-b-xl">
		 <strong>
		
		 </strong>
		 </p>
                  
          <p class="text-center m-b-xl">
            
            
            <div class="fb-share-button" data-href="<?php echo $_SERVER["REQUEST_URI"];?>" data-layout="button"></div>
           
			
          </p>
	   
        </div>
		</div>
		</section>
		<header class="panel-heading bg-light">
     <?php $hm_l_active=$this->session->userdata('hm_l_active');?>
               
    <ul class="nav nav-tabs nav-justified mid-top-bar">
      
      <li class="<?php if($hm_l_active=='lmfeeds'){ echo 'tactive';} else { echo '';}?>">
        <a href="<?php echo base_url();?>index.php/feeds">
          <strong>Movie Feed</strong>
        </a>
		<?php if($hm_l_active=='lmfeeds') {?>
		<span class="arrow bottom yellow">
        </span>
		<?php } ?>
      </li>
      
      <li class="<?php if($hm_l_active=='lmcelebs'){ echo 'tactive';} else { echo '';}?>">
        <a href="<?php echo base_url();?>index.php/celebfolio">
         Celebrity Feed
        </a>
		<?php if($hm_l_active=='lmcelebs') {?>
		<span class="arrow bottom yellow">
        </span>
		<?php } ?>
      </li>
      <li class="<?php if($hm_l_active=='lmpf'){ echo 'tactive';} else { echo '';}?>">
        <a href="<?php echo base_url();?>index.php/portfolio/feed">
          Portfolio Feed
        </a>
		<?php if($hm_l_active=='lmpf') {?>
		<span class="arrow bottom yellow">
        </span>
		<?php } ?>
      </li>
      <li class="<?php if($hm_l_active=='lmnews'){ echo 'tactive';} else { echo '';}?>">
        <a href="<?php echo base_url();?>index.php/newszone">
          News Feed
        </a>
		<?php if($hm_l_active=='lmnews') {?>
		<span class="arrow bottom yellow">
        </span>
		<?php } ?>
      </li>
      
      <li class="<?php if($hm_l_active=='lmblogs'){ echo 'tactive';} else { echo '';}?>">
        <a href="<?php echo base_url();?>index.php/blogzone">
        Blogger
        </a>
		<?php if($hm_l_active=='lmblogs') {?>
		<span class="arrow bottom yellow">
        </span>
		<?php } ?>
      </li>
      
    </ul>
    
  </header>