
<section class="vbox" >

      <section>
        
        <section class="hbox stretch">
          
          
          <section id="content">
            
            <section class="hbox stretch">
<div class="row">


<div class="spacer"></div>
  <div class="col-md-10 col-md-offset-1">
	
<section class="panel panel-default">
 
  <img src="http://localhost/moviescoopy.com/uploads/movie_other/bg1.jpg" style="max-height:300px;width:100%;">
  <div class="spacer"></div>
  <section class="chat-list panel-body">
  <div class="row">
    <?php
					$CI =& get_instance();
				   $ad_tasks=$CI->user_model->get_ad_tasks();
				 foreach($ad_tasks as $adt){
			?>
<div class="col-sm-3"> 
<section class="panel panel-default">
 <header class="panel-heading lt no-border">
 <label class="label bg-danger m-l-xs">
				   <a href="<?php echo base_url();?>index.php/make_ads/ad_page?id=<?php echo $adt->aid; ?>"><?php echo $adt->name; ?></a>
 </label>
</header> 
 <div class="list-group no-radius alt" style="margin-left:10px;margin-right:10px;margin-top:15px;"> 
 	<a href="<?php echo base_url();?>index.php/make_ads/ad_page?id=<?php echo $adt->aid; ?>"><img src="<?php echo base_url();?>uploads/ads/<?php echo $adt->profile_img; ?>" title="<?php echo $adt->name; ?>" alt="<?php echo $adt->name; ?>" style="border:1px solid #ddd;padding:2px;width:100%;"></a>
  <br/>
  <div class="small-sp"></div>
  <a class="text-info" href="<?php echo base_url();?>index.php/make_ads/ad_task?id=<?php echo $adt->promo_id; ?>"><?php echo $adt->promo_task; ?> </a>
  <div class="small-sp"></div>
 <label class="label bg-warning m-l-xs pull-right">
				   <a href="<?php echo base_url();?>index.php/make_ads/ad_task?id=<?php echo $adt->promo_id; ?>">Task</a>
			 </label>
 </div> 
 </section>
</div>


			
	<?php } ?>
    </div>
  </section>
  
 
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