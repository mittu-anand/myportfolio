
<section class="vbox" >

      <section>
        
        <section class="hbox stretch">
          
          
          <section id="content">
            
            <section class="hbox stretch">
<div class="row">


<div class="spacer"></div>
  <div class="col-md-8 col-md-offset-2">
	
<section class="panel panel-default">
 
  <img src="<?php echo base_url(); ?>uploads/ads_banner/<?php echo $page[0]->banner; ?>" style="max-height:400px;width:100%;">
  <footer class="panel-footer bg-white no-padder"> <div class="row text-center no-gutter"> 
  <div class="col-xs-3 b-r b-light"> <span class="h4 font-bold m-t block">Open</span> <small class="text-muted m-b block">Task</small> </div> 
  <div class="col-xs-3 "> <span class="h4 font-bold m-t block">
  <a class="btn btn-sm btn-icon btn-warning" target="_blank" href="">
			 <i class="fa fa-twitter"></i>
			 </a>
			 <a class="btn btn-sm btn-icon btn-success" target="_blank"  href="">
			 <i class="fa fa-facebook"></i>
			 </a> 
			 <a class="btn btn-sm btn-icon btn-warning" target="_blank"  href="">
			 <i class="fa fa-google-plus"></i>
			 </a> 
			 <a class="btn btn-sm btn-icon btn-success" target="_blank"  href="">
			 <i class="fa fa-linkedin"></i>
			 </a></span> </div>
 
  <div class="col-xs-6"> <span class="h4 font-bold m-t block"><a href="http://<?php echo $page[0]->website;?>" target="_blank"><?php echo $page[0]->website;?></a></span>
  <small class="text-muted m-b block">Log on to</small> 
  </div> </div> 
  </footer>
  
 
</section>
<div class="spacer"></div>
  <section class="chat-list panel-body">
  <div class="row"> 
  <div class="col-md-4"> 
  <section class="panel panel-default"> <header class="panel-heading font-bold">Statistics</header> 

  <div class="panel-body"> <div> 
  <span class="text-muted">Open to:</span>
 <div class="small-sp"></div>
  <span class="h3 block"><label class="label bg-success m-l-xs">
            <?php echo $task[0]->promo_limit;?> <small style="color:#ffffff;"> Applications</small></label> </span>
			 <div class="small-sp"></div>
  <div class="line pull-in"></div>
<span class="text-muted">Accepted:</span>
  <div class="small-sp"></div>
  <span class="h3 block"><label class="label bg-warning m-l-xs">40<small style="color:#ffffff;"> Applications</small></label></span>
   <div class="small-sp"></div>
  <div class="line pull-in"></div>
<span class="text-muted">Remaining:</span>
  <div class="small-sp"></div>
  <span class="h3 block"><label class="label bg-danger m-l-xs">60<small style="color:#ffffff;"> Applications</small></label></span>
   <div class="small-sp"></div>
  </div> 
  </div> </section> 
  <section class="panel panel-default"> <header class="panel-heading font-bold">Statistics</header> 

  <div class="panel-body"> 
  </div> </section> 
  </div>
  <div class="col-md-8"> 
  <section class="panel panel-default">
  <header class="panel-heading font-bold"><?php echo $task[0]->promo_task; ?> </header> <div class="panel-body"> 
  <div style="height:210px" id="flot-1ine"></div> </div> 
   </section> </div>  </div>
  </section>
  
	</div>
	
</div>
<div class="spacer"></div>
	<div class="spacer"></div>
</section>
</section>
</section>
</section>
</section>