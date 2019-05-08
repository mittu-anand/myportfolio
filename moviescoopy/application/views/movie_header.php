<!DOCTYPE html>
<html lang="en" class=" ">
  
  <head>
    
    <meta charset="utf-8" />
    
    <title>
     Moviefolio| Online Face of Cinema
    </title>
    
    <meta name="description" content="online cinema, movie reviews, malayalam cinema,tamil cinema" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    
    <link rel="stylesheet" href="<?php echo base_url();?>css/font.css" type="text/css" />
    
    <link rel="stylesheet" href="<?php echo base_url();?>css/landing.css" type="text/css" />
    
    <link rel="stylesheet" href="<?php echo base_url();?>css/app.v1.css" type="text/css" />
	
	<link href="<?php echo base_url();?>css/default_skin_variation.css" type="text/css" rel="stylesheet" />
    
    <!--[if lt IE 9]>

<script src="js/ie/html5shiv.js">
</script>

<script src="js/ie/respond.min.js">
</script>

<script src="js/ie/excanvas.js">
</script>

<![endif]-->
  </head>
  <body class="">
    
    <!-- header -->
    
    <header id="header" class="navbar navbar-fixed-top bg-white box-shadow b-b b-light" style="z-index: 10000;"data-spy="affix" data-offset-top="1">
      
      <div class="container">
        
        <div class="navbar-header">
          
          <a href="#" class="navbar-brand">
            <img src="<?php echo base_url();?>images/logo.png"  title="Moviefolio" class="m-r-sm">
            <span class="text-muted">
             
            </span>
          </a>
          
          <button class="btn btn-link visible-xs" type="button" data-toggle="collapse" data-target=".navbar-collapse">
            
            <i class="fa fa-bars">
            </i>
            
          </button>
          
        </div>
       
        <div class="collapse navbar-collapse">
         <ul class="nav navbar-nav navbar-right">
            <?php $active=$this->session->userdata('active');?>
            <li >
              
              <a href="<?php echo base_url();?>index.php/home" class="<?php if($active=='home'){ echo 'activeis';} else { echo '';}?>">
                Home
              </a>
              
            </li>
            <li>
              
              <a href="<?php echo base_url();?>index.php/feeds"  class="<?php if($active=='blog'){ echo 'activeis';} else { echo '';}?>">
                Feeds
              </a>
              
            </li>
            <li >
              
              <a href="<?php echo base_url(); ?>index.php/moviefolio" class="<?php if($active=='movie'){ echo 'activeis';} else { echo '';}?>">
                Moviefolio
              </a>
              
            </li>
			 <li > 
              
              <a href="<?php echo base_url(); ?>index.php/portfolio" class="<?php if($active=='portfolio'){ echo 'activeis';} else { echo '';}?>">
                Portfolio
              </a>
              
            </li>
              <li >
              
              <a href="<?php echo base_url();?>index.php/classifieds" class="<?php if($active=='classifieds'){ echo 'activeis';} else { echo '';}?>">
                Classifieds
              </a>
              
            </li>
            <!---<li class="<?php if($active=='blog'){ echo 'activeis';} else { echo '';}?>">
              
              <a href="<?php echo base_url();?>index.php/blogzone">
                Blogger Zone
              </a>
              
            </li>-->
            
            <li >
              
              <a href="<?php echo base_url();?>index.php/newszone" class="<?php if($active=='news'){ echo 'activeis';} else { echo '';}?>">
                News zone
              </a>
              
            </li>
           
            <li>
              
              <div class="m-t-sm">
			  	<a href="<?php echo base_url();?>index.php/signup" class="btn btn-sm btn-warning m-l">
                  <strong>
                    What's new?
                  </strong>
                </a>
				
              
				
				<?php if($this->session->userdata('mlogged_in',true)) { ?>
			  
			  <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user"> 
			  <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> 
			  <img src="<?php echo base_url();?>images/avatar.jpg"> </span><?php echo $this->session->userdata('user_name'); ?><b class="caret"></b> </a> 
			  <ul class="dropdown-menu animated fadeInRight"> <span class="arrow top"></span> 
			  <li> <a href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $this->session->userdata('user_id'); ?>">My Portfolio</a> </li> 
			  <li> <a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a> </li> 
			  <li> <a href="#">Settings</a> </li>  <li class="divider"></li> 
			  <li> <a href="<?php echo base_url();?>index.php/login/logout">Logout</a> </li> </ul> </li> </ul>
			 
			 <?php } else { ?>
			   <a href="<?php echo base_url();?>index.php/login" class="btn btn-sm btn-info btn-sm m-l">
				<strong>
                 Login
				 </strong>
                </a>
                
                <a href="<?php echo base_url();?>index.php/signup" class="btn btn-sm btn-success m-l">
                  <strong>
                    Sign up
                  </strong>
                </a>
			  <?php } ?>
              </div>
            
            </li>
            
          </ul>
          
        </div>
        
      </div>
      
    </header>
    
    <!-- / header -->