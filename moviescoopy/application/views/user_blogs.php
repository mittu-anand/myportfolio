    <link rel="stylesheet" href="<?php echo base_url();?>js/datatables/datatables.css" type="text/css"/>
   <section id="content">
      <div class="container m-t-lg m-b-lg">
        <div class="row">
          <div class="col-sm-10" >
<section class="vbox">

  <header class="bg-light dk header clearfix">
     <?php
					$usid=$this->session->userdata('user_id');
					if($this->session->userdata('logged_in',true) && $usid==$user_portfolio[0]->uid) { ?>
    <div class="btn-group pull-right">
      
      <a href="<?php echo base_url();?>index.php/portfolio/write_blog?id=<?php echo $this->session->userdata('user_id'); ?>" class="btn btn-success">Write a blog</a>
      
    </div>
    <?php } ?>
    <div class="btn-toolbar">
     
      <h6>My BLogs</h6>
    </div>
    
  </header>
   
  <section class="scrollable hover">
    
    <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-alt list-group-lg">
      
      <li class="list-group-item">
       
        <a href="#" class="clear">
          
          <small class="pull-right text-muted">
            3 minuts ago
          </small>
          
          <strong>
            Drew Wllon
          </strong>
          
          
          
          <span>
            Wellcome and play this web application template ... 
          </span>
          
        </a>
        
      </li>
       <li class="list-group-item">
       
        <a href="#" class="clear">
          
          <small class="pull-right text-muted">
            3 minuts ago
          </small>
          
          <strong>
            Drew Wllon
          </strong>
          
          
          
          <span>
            Wellcome and play this web application template ... 
          </span>
          
        </a>
        
      </li>
       <li class="list-group-item">
       
        <a href="#" class="clear">
          
          <small class="pull-right text-muted">
            3 minuts ago
          </small>
          
          <strong>
            Drew Wllon
          </strong>
          
          
          
          <span>
            Wellcome and play this web application template ... 
          </span>
          
        </a>
        
      </li>
       <li class="list-group-item">
       
        <a href="#" class="clear">
          
          <small class="pull-right text-muted">
            3 minuts ago
          </small>
          
          <strong>
            Drew Wllon
          </strong>
          
          
          
          <span>
            Wellcome and play this web application template ... 
          </span>
          
        </a>
        
      </li>
	   <li class="list-group-item">
       
        <a href="#" class="clear">
          
          <small class="pull-right text-muted">
            3 minuts ago
          </small>
          
          <strong>
            Drew Wllon
          </strong>
          
          
          
          <span>
            Wellcome and play this web application template ... 
          </span>
          
        </a>
        
      </li>
	   <li class="list-group-item">
       
        <a href="#" class="clear">
          
          <small class="pull-right text-muted">
            3 minuts ago
          </small>
          
          <strong>
            Drew Wllon
          </strong>
          
          
          
          <span>
            Wellcome and play this web application template ... 
          </span>
          
        </a>
        
      </li>
	   <li class="list-group-item">
       
        <a href="#" class="clear">
          
          <small class="pull-right text-muted">
            3 minuts ago
          </small>
          
          <strong>
            Drew Wllon
          </strong>
          
          
          
          <span>
            Wellcome and play this web application template ... 
          </span>
          
        </a>
        
      </li>
    </ul>
    
  </section>
  

  
</section>
            
            
          </div>
          
    
          
        </div>
        
      </div>
    </section>
	  <!-- datatables -->
   