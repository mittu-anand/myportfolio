
	 <link rel="stylesheet" href="<?php echo base_url();?>js/fuelux/fuelux.css" type="text/css"/> 
	 <link rel="stylesheet" href="<?php echo base_url();?>js/datepicker/datepicker.css" type="text/css" />
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=335787393186742&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>  
<style>
iframe { 
width: 100% !important; 

}
</style>   
	 <section id="content">
        
        <section class="vbox" >
          
          <section>
            
            <section class="hbox stretch">
              
              <section>
                
                <section class="vbox" >
                
                  <section class="scrollable wrapper">
                   
<section class="scrollable wrapper">
  
  <div class="row" style="position:relative;top:50px;">


<section class="vbox" >
  

  
  <section class="scrollable">
    
    <section class="hbox stretch">
      
     
      
      <aside class="bg-white">
        
        <section class="vbox" >
		<section class="scrollable">
	<?php if($this->session->flashdata('edit_success')){ ?>
                     
					  <div class="alert alert-info"> 
	 <button type="button" class="close" data-dismiss="alert">×</button>
	 <i class="fa fa-info-sign"></i><strong></strong> 
	 <?php  echo $this->session->flashdata('edit_success'); ?>. 
	 </div>
                    <?php } ?>	
					
					
	<?php if($this->session->flashdata('edit_error')){ ?>
                     
					  <div class="alert alert-danger"> 
	 <button type="button" class="close" data-dismiss="alert">×</button>
	 <i class="fa fa-danger-sign"></i><strong></strong> 
	 <?php  echo $this->session->flashdata('edit_error'); ?>. 
	 </div>
                    <?php } ?>				
					
					
 <div class="panel panel-default wizard" style="margin:20px;">
 <div class="wizard-steps clearfix" id="form-wizard"> 
 <ul class="steps"> 
 <li data-target="#step1" class="active">
 <span class="badge badge-info">1</span>General</li> 
 <li data-target="#step2"><span class="badge">2</span>Portfolio</li>
 <li data-target="#step3"><span class="badge">3</span>Social</li> 
 </ul> 
 </div> 
 <div class="step-content clearfix">
 <form class="m-b-sm" action="<?php echo base_url();?>index.php/portfolio/update" method="post">
 <div class="step-pane active" id="step1"> 
  <p>Change Profile Picture:</p>
 <div class="form-group"> 
 <div class="col-sm-10">
 <input type="file" class="filestyle" data-icon="false" name="profile_pic" data-classButton="btn btn-default" data-classInput="form-control inline input-s"> 
 
 </div> 
 </div> 
 <br/>

  <p class="m-t">Name:</p> 
 <input type="text" class="form-control" name="name" data-trigger="change" data-required="false" data-type="" > 
 <p class="m-t">Email:</p> 
 <input type="text" class="form-control" name="email" data-trigger="change" data-required="true" data-type="email" >
 <p class="m-t">Gender:</p> 
 <div class="radio"> <label class="radio-custom"> 
 <input type="radio" name="radio" checked="checked"> 
 <i class="fa fa-circle-o checked"></i> Male 
 </label> 
 </div>
  <div class="radio"> <label class="radio-custom"> 
 <input type="radio" name="radio" > 
 <i class="fa fa-circle-o "></i> Female 
 </label> 
 </div>
 <p class="m-t">Date Of Birth:</p> 
 <input class="input-sm input-s datepicker-input form-control" name="dob" type="text" value="12-02-2013" data-date-format="dd-mm-yyyy">
 <p class="m-t">Location:</p> 
 <input type="text" class="form-control" name="location" data-trigger="change" data-required="false" data-type="">
 
  <p class="m-t">About Me:</p> <div class="form-group">  
 <textarea class="form-control parsley-validated" name="about" rows="6" data-minwords="6" data-required="false" placeholder="Type your message">
 </textarea> 
 </div>
 

 
 </div>
 <div class="step-pane" id="step2">
<p class="m-t">Contact Number:</p> 
 <input type="text" class="form-control" name="contact" data-trigger="change" data-required="true" data-type="number" > 
 
  <p class="m-t">Facebook:</p> 
 <input type="text" class="form-control" name="facebook" data-trigger="change" data-required="true" data-type="url" > 
 
  <p class="m-t">Twitter:</p> 
 <input type="text" class="form-control" name="twitter" data-trigger="change" data-required="true" data-type="url" > 
 
 
  <p class="m-t">Google Plus:</p> 
 <input type="text" class="form-control" name="google" data-trigger="change" data-required="true" data-type="url" > 
 
 
 </div> 
 <div class="step-pane" id="step3">
 
 <p>Your email:</p> 
  <?php for($i=1; $i<=13;$i++){ ?>
 <div class="col-sm-3"> <!-- radio --> <div class="radio"> <label class="radio-custom"> <input type="radio" name="radio" value="<?php echo $i; ?>"> <i class="fa fa-circle-o"></i> Item two </label> </div> </div>
 <?php } ?>
 <br/>
 </div> 
 <div class="actions pull-left"> <button type="button" class="btn btn-default btn-sm btn-prev" disabled="disabled">Prev</button>
 <button type="button" class="btn btn-default btn-sm btn-next">Next</button>
 <button type="submit" class="btn btn-success btn-sm" >Save</button>
 </form>
 </div>
 </div> 
 </div> 
          
        </section>
        </section>
      </aside>
      
    
      
    </section>
    
  </section>
  
</section>
  </div>
</section>

				  
				  
				  </section>
               
                  
                </section>
                
              </section>
              
              <aside class="bg-light lter b-l aside-md">
                
              </aside>
              
            </section>
            
          </section>
          
        </section>
        
        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav.html">
        </a>
        
      </section>
      
    </section>
    
    <!-- Bootstrap -->
    
    <!-- App -->
    <!--
    <script src="js/app.v1.js">
    </script>
    
    <script src="js/app.plugin.js">
    </script>-->

	 
  </body>

</html>

