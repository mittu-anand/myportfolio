<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="img/favicon.html">
    <title>Clear Lifestyle Services Admin Panel</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>admin/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>admin/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>admin/css/style-responsive.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">
               <?php if($this->session->flashdata('login_err')){ ?>
                      <div class="alert alert-danger fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('login_err'); ?>
                      </div>
                    <?php } ?>
					 <?php if($this->session->flashdata('logout_suc')){ ?>
                      <div class="alert alert-success fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('logout_suc'); ?>
                      </div>
                    <?php } ?>
      <form class="form-signin" action="<?php echo base_url();?>index.php/admin/login" method="post">
        <h2 class="form-signin-heading">Clear Lifestyle Admin Panel</h2>
        <div class="login-wrap">
            <input type="text" class="form-control" name="username" placeholder="username" autofocus>
			 <?php echo form_error('username'); ?>
            <input type="password" class="form-control" name="password" placeholder="Password">
			 <?php echo form_error('password'); ?>
            <!--<label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                </span>
            </label>-->
            <button class="btn btn-lg btn-login btn-block" type="submit">Login</button>
           <!-- <p>or you can sign in via social network</p>
            <div class="login-social-link">
                <a href="index-2.html" class="facebook">
                    <i class="fa fa-facebook"></i>
                    Facebook
                </a>
                <a href="index-2.html" class="twitter">
                    <i class="fa fa-twitter"></i>
                    Twitter
                </a>
            </div>
            <div class="registration">
                Don't have an account yet?
                <a class="" href="registration.html">
                    Create an account
                </a>
            </div>---->

        </div>

          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Enter your e-mail address below to reset your password.</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                          <button class="btn btn-success" type="button">Submit</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->

      </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>admin/js/jquery.js"></script>
    <script src="<?php echo base_url();?>admin/js/bootstrap.min.js"></script>


  </body>

</html>
