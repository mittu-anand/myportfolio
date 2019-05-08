<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from thevectorlab.net/flatlab/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Sep 2014 09:28:17 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Moviescoopy Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>admin/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url(); ?>admin/assets//font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>admin/assets//jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php base_url(); ?>admin/css/owl.carousel.css" type="text/css">

      <!--right slidebar-->
      <link href="<?php echo base_url(); ?>admin/css/slidebars.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="<?php echo base_url(); ?>admin/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>admin/css/style-responsive.css" rel="stylesheet" />



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url(); ?>/protected/modules/admin/js/html5shiv.js"></script>
      <script src="<?php echo base_url(); ?>/protected/modules/admin/js/respond.min.js"></script>
    <![endif]-->


<!--  <section id="container" >
-->      <!--header start-->
      <header class="header white-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="" class="logo">Movie <span>Scoopy</span></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
               
            </div>
             
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                   
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          
                            <span class="username">Administrator</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="<?php echo base_url(); ?>index.php/admin/home/logout"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                  
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="active" href="<?php echo base_url(); ?>index.php/admin/dashboard">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-laptop"></i>
                          <span>Contents</span>
                      </a>
                      <ul class="sub">
                     
                     
                          <!--<li><a  href="<?php echo base_url(); ?>index.php/admin/titles">Section Titles</a></li>
                          <li><a  href="<?php echo base_url(); ?>index.php/admin/about">About</a></li>-->
                          <li><a  href="<?php echo base_url(); ?>index.php/admin/general">General</a></li>
						  <!--<li><a  href="<?php echo base_url(); ?>index.php/admin/pagebreaker">Page Breaker Top</a></li>
						  <li><a  href="<?php echo base_url(); ?>index.php/admin/pagebreaker/pagebreaker_bottom">Page Breaker Bottom</a></li>
						  <li><a  href="<?php echo base_url(); ?>index.php/admin/pagebreaker/pagebreaker_footer">Page Breaker Footer</a></li>--->
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Media</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url();?>index.php/admin/gallery">About Images</a></li>
						  <li><a  href="<?php echo base_url();?>index.php/admin/banners/home">Home Page Banners</a></li>
						  <li><a  href="<?php echo base_url();?>index.php/admin/banners/logo">Logo</a></li>
						  
                      </ul>
                  </li>
                   <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Moviescoopy</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url();?>index.php/admin/moviescoopy">About</a></li>
						  <li><a  href="<?php echo base_url();?>index.php/admin/moviescoopy/moviescoopy_company">Company</a></li>
						  <li><a  href="<?php echo base_url();?>index.php/admin/moviescoopy/moviescoopy_services">Services</a></li>
						  <li><a  href="<?php echo base_url();?>index.php/admin/moviescoopy/moviescoopy_advertise">Advertise</a></li>
						  <li><a  href="<?php echo base_url();?>index.php/admin/moviescoopy/moviescoopy_privacy">Privacy</a></li>
						  <li><a  href="<?php echo base_url();?>index.php/admin/moviescoopy/moviescoopy_terms">Terms</a></li>
						  <li><a  href="<?php echo base_url();?>index.php/admin/moviescoopy/moviescoopy_contact">Contact</a></li>
						  <li><a  href="<?php echo base_url();?>index.php/admin/moviescoopy/moviescoopy_new">New</a></li>
						  
                      </ul>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Videos</span>
                      </a>
                      <ul class="sub">
                          <li> 
							<a  href="<?php echo base_url(); ?>index.php/admin/video">Add Video</a>
						  </li>
                          <li><a  href="<?php echo base_url(); ?>index.php/admin/video/view_video">View Video</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Blogs</span>
                      </a>
                      <ul class="sub">
                          <li> 
							<a  href="<?php echo base_url(); ?>index.php/admin/services">Add Blogs</a>
						  </li>
                          <li><a  href="<?php echo base_url(); ?>index.php/admin/services/view_services">View Blogs</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-envelope"></i>
                          <span>News</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url(); ?>index.php/admin/events">Add News</a></li>
                          <li><a  href="<?php echo base_url(); ?>index.php/admin/events/view_events">View News</a></li>
						  <!--<li><a  href="<?php echo base_url(); ?>index.php/admin/news">Add News</a></li>
                          <li><a  href="<?php echo base_url(); ?>index.php/admin/news/view_news">View News</a></li>-->
                      </ul>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-user"></i>
                          <span>Celebrity</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url(); ?>index.php/admin/celebrity">Add Celebrity</a></li>
                          <li><a  href="<?php echo base_url(); ?>index.php/admin/celebrity/view_celebrity">View celebrity</a></li>
						  <!--<li><a  href="<?php echo base_url(); ?>index.php/admin/news">Add News</a></li>
                          <li><a  href="<?php echo base_url(); ?>index.php/admin/news/view_news">View News</a></li>-->
                      </ul>
                  </li>
				   <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-user"></i>
                          <span>Talents</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url(); ?>index.php/admin/talents">Add Talents</a></li>
                          <li><a  href="<?php echo base_url(); ?>index.php/admin/talents/view_talents">View Talents</a></li>
						  <!--<li><a  href="<?php echo base_url(); ?>index.php/admin/news">Add News</a></li>
                          <li><a  href="<?php echo base_url(); ?>index.php/admin/news/view_news">View News</a></li>-->
                      </ul>
                  </li>
                  <!--<li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Newsletter</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                          <li><a  href="advanced_form_components.html">Advanced Components</a></li>
                      </ul>
                  </li>-->
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Settings</span>
                      </a>
                      <ul class="sub">
                          
						  <li><a  href="<?php echo base_url(); ?>index.php/admin/update_password">Change Password</a></li>
                          
                      </ul>
                  </li>
                  
                  <!--
                 
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-shopping-cart"></i>
                          <span>Shop</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="product_list.html">List View</a></li>
                          <li><a  href="product_details.html">Details View</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="google_maps.html" >
                          <i class="fa fa-map-marker"></i>
                          <span>Google Maps </span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-comments-o"></i>
                          <span>Chat Room</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="lobby.html">Lobby</a></li>
                          <li><a  href="chat_room.html"> Chat Room</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-glass"></i>
                          <span>Extra</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="sidebar_closed.html">Sidebar Closed</a></li>
                          <li><a  href="people_directory.html">People Directory</a></li>
                          <li><a  href="coming_soon.html">Coming Soon</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                          <li><a  href="profile.html">Profile</a></li>
                          <li><a  href="invoice.html">Invoice</a></li>
                          <li><a  href="search_result.html">Search Result</a></li>
                          <li><a  href="pricing_table.html">Pricing Table</a></li>
                          <li><a  href="faq.html">FAQ</a></li>
                          <li><a  href="fb_wall.html">FB Wall</a></li>
                          <li><a  href="404.html">404 Error</a></li>
                          <li><a  href="500.html">500 Error</a></li>
                      </ul>
                  </li>
                  <li>
                      <a  href="login.html">
                          <i class="fa fa-user"></i>
                          <span>Login Page</span>
                      </a>
                  </li>-->

                  <!--multi level menu start
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-sitemap"></i>
                          <span>Multi level Menu</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="javascript:;">Menu Item 1</a></li>
                          <li class="sub-menu">
                              <a  href="boxed_page.html">Menu Item 2</a>
                              <ul class="sub">
                                  <li><a  href="javascript:;">Menu Item 2.1</a></li>
                                  <li class="sub-menu">
                                      <a  href="javascript:;">Menu Item 3</a>
                                      <ul class="sub">
                                          <li><a  href="javascript:;">Menu Item 3.1</a></li>
                                          <li><a  href="javascript:;">Menu Item 3.2</a></li>
                                      </ul>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </li>-->
                  <!--multi level menu end-->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
       </head>

  <body>
