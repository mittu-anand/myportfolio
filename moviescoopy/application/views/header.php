<!DOCTYPE html>
<html lang="en" class=" ">
  
  <head>
    
    <meta charset="utf-8" />
    
    <title>
     <?php if($this->session->userdata('title')) { echo $this->session->userdata('title'); } else { echo "Moviescoopy | Online Face OF Cinema";} ?>
    </title>
    
    <meta name="description" content="online cinema, movie reviews, malayalam cinema,tamil cinema" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta property="og:title" content=" <?php if($this->session->userdata('ogtitle')) { echo $this->session->userdata('ogtitle'); } else { echo "Moviescoopy | Online Face OF Cinema";} ?>" /> 
	<meta property="og:image" content="<?php if($this->session->userdata('ogtitleimg')) { echo $this->session->userdata('ogtitleimg'); } else { echo "Moviescoopy | Online Face OF Cinema";} ?>" /> 
	<meta property="og:description" content=" <?php if($this->session->userdata('ogdesc')) { echo $this->session->userdata('ogdesc'); } else { echo "Moviescoopy | Online Face OF Cinema";} ?>" /> 
	<meta property="og:url" content=" <?php echo $_SERVER["REQUEST_URI"];?>">
    <meta property="fb:app_id" content="[335787393186742]"/>
	<meta property="og:site_name" content="Moviescoopy" />
   <link rel="icon" type="image/png" href="<?php echo base_url();?>favicn.png">
   
   <link rel="stylesheet" href="<?php echo base_url();?>css/font.css" type="text/css" />
    
    <link rel="stylesheet" href="<?php echo base_url();?>css/landing.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>css/main.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>css/app.v1.css" type="text/css" />
	
	 <link rel="stylesheet" href="<?php echo base_url();?>js/select2/select2.css" type="text/css" />
	    <link rel="stylesheet" href="<?php echo base_url();?>js/fuelux/fuelux.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>js/select2/theme.css" type="text/css" />
	 <link rel="stylesheet" href="<?php echo base_url();?>js/datepicker/datepicker.css" type="text/css" />
	<link href="<?php echo base_url();?>css/photoswipe.css" type="text/css" rel="stylesheet" />
    <script src="<?php echo base_url();?>js/app.v1.js">
    </script>
	 <script type="text/javascript" src="<?php echo base_url();?>js/klass.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/code.photoswipe-3.0.5.min.js"></script>
	<script type="text/javascript">

		(function(window, PhotoSwipe){
		
			document.addEventListener('DOMContentLoaded', function(){
			
				var
					options = {},
					instance = PhotoSwipe.attach( window.document.querySelectorAll('#Gallery a'), options );
			
			}, false);
			
			
		}(window, window.Code.PhotoSwipe));
		
	</script>
    <!--[if lt IE 9]>

<script src="js/ie/html5shiv.js">
</script>

<script src="js/ie/respond.min.js">
</script>

<script src="js/ie/excanvas.js">
</script>

<![endif]-->
  </head>
   <?php flush(); ?>
  <body class="">
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=335787393186742&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <!-- header -->
    
    <header id="header" class="navbar navbar-fixed-top bg-white box-shadow b-b b-light" style="z-index: 10000;"data-spy="affix" data-offset-top="1">
     
      <div class="container">
        
        <div class="navbar-header">
          
          <a href="<?php echo base_url();?>" class="navbar-brand">
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
           <li style="margin-right:6px;">
		   <input type="text" name="search" class="sr-mv-sp" placeholder="Search Moviescoopy" 
		   style="width:350px;position:relative;top:10px;padding:6px;border:1px solid #d3d6db; height:30px;outline:none;background:whitesmoke;"/>
		 <div id="s-dsp">
		 </div>
		 </li>
            <li>
              
              <a href="<?php echo base_url();?>index.php/feeds"  class="<?php if($active=='blog'){ echo 'activeis';} else { echo '';}?>">
                Feeds
              </a>
              
            </li>
            <li>
              
              <a href="<?php echo base_url(); ?>index.php/moviefolio" class="<?php if($active=='movie'){ echo 'activeis';} else { echo '';}?>">
                Moviefolio
              </a>
              
            </li>
			 <li> 
              
              <a href="<?php echo base_url(); ?>index.php/portfolio" class="<?php if($active=='portfolio'){ echo 'activeis';} else { echo '';}?>">
                Portfolio
              </a>
              
            </li>
			
			<li> 
              
              <a href="<?php echo base_url(); ?>index.php/celebfolio/celebrity_circle" class="<?php if($active=='celebfolio'){ echo 'activeis';} else { echo '';}?>">
                Celebfolio
              </a>
              
            </li>
			 <li>
              
              <a href="<?php echo base_url();?>index.php/videos"  class="<?php if($active=='stack'){ echo 'activeis';} else { echo '';}?>">
                Videos
              </a>
              
            </li>
              <li >
              
              <a href="<?php echo base_url();?>index.php/classifieds" class="<?php if($active=='classifieds'){ echo 'activeis';} else { echo '';}?>">
                Classifieds
              </a>
              
            </li>
           
           
            <li>
              
              
			  	<!--<a href="<?php echo base_url();?>index.php/signup" class="btn btn-sm btn-warning m-l">
                  <strong>
                    What's new?
                  </strong>
                </a>-->
				
              
				
				<?php if($this->session->userdata('logged_in',true)) { ?>
			  <?php
			  $img=$this->session->userdata('user_image');
			  $gender=$this->session->userdata('user_gender');
			  
			  ?>
			  <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user"> 
			  <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			  <!----<span class="thumb-sm avatar pull-left"> 
			  <img src="<?php echo base_url();?>uploads/users/<?php if($img!=''){echo $img; }else{ if($gender=='M'){ echo "mdummy.jpg";}else{echo "fdummy.jpg";} } ?>"> </span>---->
			  
			  <?php echo $this->session->userdata('user_name'); ?><b class="caret"></b> </a> 
			  <ul class="dropdown-menu animated fadeInRight"> <span class="arrow top"></span> 
			  <li> <a href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $this->session->userdata('user_id'); ?>">My Portfolio</a> </li> 
			  <li> <a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a> </li> 
			  <li> <a href="#">Settings</a> </li>  <li class="divider"></li> 
			  <li> <a href="<?php echo base_url();?>index.php/login/logout">Logout</a> </li> </ul> </li> </ul>
			 
			 <?php } else if($this->session->userdata('mlogged_in',true)) { ?> 
			 
			 
			 <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user"> 
			  <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> 
			  </span><?php echo $this->session->userdata('movie_name'); ?><b class="caret"></b> </a> 
			  <ul class="dropdown-menu animated fadeInRight"> <span class="arrow top"></span> 
			  <li> <a href="<?php echo base_url();?>index.php/moviemaker">Movie Maker</a> </li> 
			  <li> <a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a> </li> 
			  <li class="divider"></li> 
			  <li> <a href="<?php echo base_url();?>index.php/mymovie/logout">Logout</a> </li> </ul> </li> </ul>
			 
			 
			 
			 <?php } else { ?>
			 <div class="m-t-sm">
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