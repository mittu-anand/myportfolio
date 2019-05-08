
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
  <div class="col-xs-3 b-r b-light"> <span class="h4 font-bold m-t block">5,860</span> <small class="text-muted m-b block">Tasks</small> </div> 
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
   <div class="col-md-2">
   <a href="" class="btn btn-success btn-xs">Tasks</a>
  
  </div>
  <div class="col-md-8">
  <?php if($ad_tasks){ foreach($ad_tasks as $adt) { ?>
  <ul class="list-group gutter list-group-lg list-group-sp sortable"> 
  
  <li class="list-group-item box-shadow">
  <a class="pull-right" href="<?php echo base_url();?>index.php/make_ads/ad_task?id=<?php echo $adt->promo_id; ?>"> 
  <i class="fa fa-eye icon-muted"></i> </a>  <div  class="clear text-success"><a href="<?php echo base_url();?>index.php/make_ads/ad_task?id=<?php echo $adt->promo_id; ?>"><?php echo $adt->promo_task; ?> </a></div> </li> 
 </ul>
 <?php } } ?>
  </div>
   </div>
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