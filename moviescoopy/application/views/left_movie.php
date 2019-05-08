


<section class="vbox">

      <section>
        
        <section class="hbox stretch">
          
          
          <section id="content">
            
            <section class="hbox stretch">
              <aside class="bg-light lter b-r aside-md hidden-print hidden-xs" id="nav" style="border:none;background:none !important;">
  
  <section class="vbox">
    
    <?php $mactive=$this->session->userdata('mactive');?>
    <section >
      
      <section>
        
        <section id="mail-nav" class="hidden-xs" style="position:fixed;">
           <nav class="nav-primary hidden-xs" >
          <ul class="nav">
            
            <li class="<?php if($mactive=='feeds'){ echo 'active';} else { echo '';}?>" style="border-right:1px solid #DDDDDD;">
              
              <a href="<?php echo base_url();?>index.php/moviefolio/movie?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?> ">
                
               <i class="fa fa-file-text icon">
                            
                            <b class="bg-warning">
                            </b>
                            
                          </i>
                          
                          
                          <span>
                            Feeds
                          </span>
						  </a>
              
            </li>
            
            <li class="<?php if($mactive=='mabout'){ echo 'active';} else { echo '';}?>" style="border-right:1px solid #DDDDDD;">
              
              <a href="<?php echo base_url();?>index.php/moviefolio/about?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?> ">
                
                <i class="fa fa-fw fa-film icon">
				<b class="bg-warning">
                            </b>
                </i>
                <span>
                 About
                </span> 
              </a>
              
            </li>
            <li class="<?php if($mactive=='mtrailor'){ echo 'active';} else { echo '';}?>" style="border-right:1px solid #DDDDDD;">
              
              <a href="<?php echo base_url();?>index.php/moviefolio/trailor?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?> ">
                
                <i class="fa fa-fw fa-youtube-play icon">
				<b class="bg-warning">
                            </b>
                </i>
				<span>
                Official Trailor 
				</span>
              </a>
              
            </li>
            <li class="<?php if($mactive=='mcastcrew'){ echo 'active';} else { echo '';}?>" style="border-right:1px solid #DDDDDD;">
              
              <a href="<?php echo base_url();?>index.php/moviefolio/cast_crew?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?> ">
                
                
                
                <i class="fa fa-fw fa-users icon">
				<b class="bg-warning">
                            </b>
                </i>
				<span>
                Cast & crew
				</span>
              </a>
              
            </li>
            
            <li class="<?php if($mactive=='mphoto'){ echo 'active';} else { echo '';}?>" style="border-right:1px solid #DDDDDD;">
              
              <a href="<?php echo base_url();?>index.php/moviefolio/photos?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?> ">
                
                <i class="fa fa-fw fa-camera icon">
				<b class="bg-warning">
                            </b>
                </i>
				<span>
                Photos
				</span>
              </a>
              
            </li>
            
            <li class="<?php if($mactive=='mvideo'){ echo 'active';} else { echo '';}?>" style="border-right:1px solid #DDDDDD;">
             
              <a href="<?php echo base_url();?>index.php/moviefolio/video?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?> ">
               <i class="fa fa-fw fa-video-camera icon">
			   <b class="bg-warning">
                            </b>
                </i>
				<span>
                Videos 
				</span>
              </a>
              
            </li>
            
          </ul>
		   </nav>
          <?php
         
		  $movieid=$this->session->userdata('movie_id');
		  if($this->session->userdata('mlogged_in',true) && $movieid==$movie[0]->mid) { ?>
		<nav class="nav-primary hidden-xs">
          <ul class="nav">
            
           
            
            <li class="<?php if($mactive=='mclassifieds'){ echo 'active';} else { echo '';}?>">
              
              <a href="<?php echo base_url();?>index.php/moviefolio/classifieds?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?> ">
                
                
                 <i class="fa fa-fw fa-ticket icon">
			   <b class="bg-success">
                            </b>
                </i>
				<span>
                Classifieds 
				</span>
              </a>
              
            </li>
            
            <!--<li class="<?php if($mactive=='mfsupport'){ echo 'active';} else { echo '';}?>">
              
              <a href="<?php echo base_url();?>index.php/moviefolio/find_support?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?> ">            
                <i class="fa fa-fw fa-bold icon">
			   <b class="bg-success">
                            </b>
                </i>
				<span>
                Blogs 
				</span>
              </a>
              
            </li>-->
            <li class="<?php if($mactive=='settings'){ echo 'active';} else { echo '';}?>">
              
              <a href="<?php echo base_url();?>index.php/moviefolio/settings?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?> ">            
                <i class="fa fa-fw fa-gears icon">
			   <b class="bg-success">
                            </b>
                </i>
				<span>
                Settings 
				</span>
              </a>
              
            </li>
           
            
          </ul>
		  </nav>
         <?php } ?> 
		 
        </section>
        
      </section>
      
    </section>
    
  </section>
  
</aside>