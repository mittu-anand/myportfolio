
<section id="content">
        
        <section class="vbox">
          
         
            
            <section class="hbox stretch">
			<section class="vbox">
                
				 <section class="scrollable wrapper">
				 <div class="spacer"></div>
<div class="row">
  
  <input type="hidden" class="urlfilter" value="<?php if(isset($_GET['filter'])){ echo $_GET['filter'];} ?>"/>
				
		<input type="hidden" class="flagstopper" value="
		  <?php
			  $CI =& get_instance();
			
			  if(isset($_GET['filter']))
			  { 
			  if($_GET['filter']!='')
			  {
				echo $total_data=$CI->user_model->get_celebrity_circle_count_filter($_GET['filter']);
				}else
				{
									echo $total_data=$CI->user_model->get_celebrity_circle_count();
				}
			
			  }
			  else
			  {
				echo $total_data=$CI->user_model->get_celebrity_circle_count();
			
			  }
			 
			  
			  ?> "/>	
 
		
		<div class="col-sm-10 col-sm-offset-1">
<section class="vbox">
 <div class="m-b-lg text-center">
 
 <?php $lactive=$this->session->userdata('lactive'); ?>

  
  <p class="m-b-none"> 
<?php if($alphabets){foreach($alphabets as $alph) {?>  
    <a href="<?php echo base_url();?>index.php/celebfolio/celebrity_like?filter=<?php echo $alph->letter; ?>" class="alphabelts" rel="<?php echo $alph->letter; ?>"><span class="badge  <?php if($lactive==$alph->letter){ echo 'bg-warning';} else { echo 'bg-success';}?>">
      <?php echo $alph->letter; ?>
    </span></a> 
	<?php } } ?>
  </p>
  
</div>
 <?php if($allcelebs){ ?>
 <div class="col-sm-3 pull-right">
      
      <div class="input-group">
        
        <input type="text"  placeholder="Celebrity Name" class="input-sm form-control celebsearch">
        
        <span class="input-group-btn">
          
          <button type="button" class="btn btn-sm btn-default celebsearchbtn">
            Go!
          </button>
          
        </span>
        
      </div>
      
    </div>
<?php } ?>
</section>
<div class="spacer"></div>
        <div class="table-responsive">
  <?php if($allcelebs){ foreach($allcelebs as $allceleb) { ?>

    <div class="col-sm-4 timlinefeed">
    <section class="panel panel-info">
  
  <div class="panel-body">
    
    <a class="thumb pull-right m-l" href="<?php echo base_url();?>index.php/celebfolio/celeb?id=<?php echo $allceleb->cid;?>&&name=<?php echo $allceleb->name;?>">
      
      <img class="img-circle"  style="height:50px;width:50px;" src="<?php echo base_url();?>uploads/celebs/<?php if($allceleb->images!=''){echo $allceleb->images; }else{ if($allceleb->gender=='M'){ echo "avatar_default.jpg";}else{echo "favatar_default.jpg";}  }?>">
      
    </a>
    
    <div class="clear">
      
      <a class="text-info" href="<?php echo base_url();?>index.php/celebfolio/celeb?id=<?php echo $allceleb->cid;?>&&name=<?php echo $allceleb->name;?>">
        <?php echo $allceleb->name; ?>
       
      </a>
      
      <small class="block text-muted">
        <?php 
	
		  $CI =& get_instance();
		  $followers=$CI->user_model->users_following($allceleb->cid);
		  if($followers==0)
		  {
			$flw='0 followers';
		  }
		   else if($followers==1)
		  {
			$flw='1 follower';
		  }
		  else
		  {
			$flw=$followers.' followers';
		  }
	      echo $flw;
	  ?>
      </small>
      
      <a class="btn btn-xs btn-success m-t-xs" href="#">
        <?php echo $allceleb->type; ?>
      </a>
      
    </div>
    
  </div>
  
</section>
    </div>
	<?php } }else {?>
	<div class="col-md-5 col-md-offset-2">	
				<section class="panel panel-default text-sm doc-buttons">
				  
				  <div class="panel-body">
				  
				    <i class="fa fa-search icon">
                            
                            <b class="bg-danger">
                            </b>
                            
                    </i>
						 &nbsp; <strong>No Celebrities Found</strong>
				  </div>
				  
				</section>
				<div class="spacer"></div>
			</div>
	<?php } ?>
  </div>    
  </div>
   
  <div class="col-sm-4 col-sm-offset-4">
						<?php if($allcelebs){
						if($total_data<=2){?>
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block hideme"><strong>End of Celebrities</strong></button> 
					</div>
					
					<?php }
					else if($total_data>2){?>
					
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block cbcloadmore hideme"><strong>More Celebrities</strong></button> 
					</div>
					<img src="<?php echo base_url();?>images/loader.gif" style="display:none;" class="pull-center loader-img">
					<?php } }?>
					</div>
  
  
</div>
<div class="spacer"></div>
<div class="spacer"></div>
</section>
</section>
</section>
</section>
</section>
<style>
iframe
{
	width:100% !important;
}
</style>

<script>
$('.celebsearchbtn').click(function()
{
srchval=$('.celebsearch').val();
location.href="<?php echo base_url();?>index.php/celebfolio/celebrity_like?filter="+srchval;
}
);


$('.cbcloadmore').one('click',function()
	{
		$('.loader-img').show();
		urlfilteris=$('.urlfilter').val();
		urlfilter=$.trim(urlfilteris);
		flagger=$('.flagstopper').val();
		timelinecount=$('.timlinefeed').length;
		remaining_data=parseInt(flagger)-parseInt(timelinecount);
		$('.cbcloadmore').text('Loading...');
	
	if(timelinecount<flagger)
		{
				
					   limit=9;
					
			   $.post("<?php echo base_url();?>index.php/feeds/get_celeb_circle_ajax",{timelinecount:timelinecount,limit:limit,urlfilter:urlfilter},function(response)
			   {
			  		
						if(response)
						{
							$('.timlinefeed').last().after(response);
							if($('.timlinefeed').length==flagger)
							{
								$('.btn-cont').html('<button class="btn btn-success btn-block"><strong>End of Celebrities</strong></button>');
								
								$('.loader-img').hide();
							}
							else
							{
								$('.cbcloadmore').html('<strong>More Celebrities</strong>');
								$('.loader-img').hide();
							}
						}
						
						
			   }
	   );
	   }
	   else
	   {
			$('.cbcloadmore').html('<strong>More Celebrities</strong>');
	   }
	   
	}
	);
 
</script>  