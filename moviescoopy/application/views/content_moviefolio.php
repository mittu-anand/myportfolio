      <section id="content">
        
        <section class="vbox">
          
          <section>
            
            <section class="hbox stretch">
              
              <section>
                
                <section class="vbox">
                
				 <section class="scrollable wrapper">
                   
<section class="scrollable wrapper">
<div class="row">
<div class="col-md-2 pull-right">

 <a href="<?php echo base_url(); ?>index.php/reviews" class=" btn btn-danger btn-large">Movie Reviews</a>    

</div>
</div>
<div class="small-sp"></div>
<div class="small-sp"></div>
<div class="row">
<div class="col-md-6">
   <section class="panel panel-default pos-rlt clearfix">
  <header class="panel-heading">
    
    <ul class="nav nav-pills pull-right">
      
      <li>
        
        <a href="#" class="panel-toggle text-muted active">
          <i class="fa fa-caret-down text-active">
          </i>
          <i class="fa fa-caret-up text">
          </i>
        </a>
        
      </li>
    </ul>
    Language
  </header>
  <input type="hidden" class="urlstatus" value="<?php if(isset($_GET['status'])){ echo $_GET['status'];} ?>"/>
  <input type="hidden" class="urllanguage" value="<?php if(isset($_GET['language'])){ echo $_GET['language'];} ?>"/>
  <input type="hidden" class="limitdata" value="8"/>
  <input type="hidden" class="flagstopper" value="
  
  <?php
	  $CI =& get_instance();
	
	  if(isset($_GET['status']) && isset($_GET['language']))
	  {
			echo $total_data=$CI->user_model->get_total_movie_all($_GET['status'],$_GET['language']);
	
	  }
	  else if(isset($_GET['status']) && !isset($_GET['language']))
	  {
		echo $total_data=$CI->user_model->get_total_movie_status($_GET['status']);
	
	  }
	  else if(!isset($_GET['status']) && isset($_GET['language']))
	  {
		echo $total_data=$CI->user_model->get_total_movie_language($_GET['language']);
	
	  }
	  else
	  {
		echo $total_data=$CI->user_model->get_total_movie_no_parameters();
	
	  }
	  
	  ?>
  "/>
  <div class="panel-body clearfix collapse">
    <div class="dropdown pull-left m-r">
      
      <ul class="dropdown-menu pos-stc inline" role="menu" aria-labelledby="dropdownMenu">
	    <?php if($industries) { foreach($industries as $ind) { ?>
    <li>
      <a href="<?php
	  
	  if(isset($_GET['status']) && isset($_GET['language']))
	  {
	   echo base_url().'index.php/moviefolio/filter?status='.$_GET['status'].'&&language='.$ind->industry;
	  }
	  else if(isset($_GET['status']) && !isset($_GET['language']))
	  {
		echo base_url().'index.php/moviefolio/filter?status='.$_GET['status'].'&&language='.$ind->industry;
	  }
	  else if(!isset($_GET['status']) && isset($_GET['language']))
	  {
		echo base_url().'index.php/moviefolio/filter?language='.$ind->industry;
	  }
	  else
	  {
		echo base_url().'index.php/moviefolio/filter?language='.$ind->industry;
	  }
	  
	  ?>">
        <?php echo $ind->industry; ?>
      </a>
    </li>
    
    <?php } } ?>
      
      </ul>
      
    </div>

    
  </div>
  
</section>
<?php if(isset($_GET['language'])){?>
<strong style="margin:10px;"><?php echo $_GET['language']; ?></strong>
<hr/>
<?php }?>

   </div>
 <div class="col-md-6">
   <section class="panel panel-default pos-rlt clearfix">
  <header class="panel-heading">
    
    <ul class="nav nav-pills pull-right">
      
      <li>
        
        <a href="#" class="panel-toggle text-muted active">
          <i class="fa fa-caret-down text-active">
          </i>
          <i class="fa fa-caret-up text">
          </i>
        </a>
        
      </li>
    </ul>
    Status
  </header>
  
  <div class="panel-body clearfix collapse">
    <div class="dropdown pull-left m-r">
      
      <ul class="dropdown-menu pos-stc inline" role="menu" aria-labelledby="dropdownMenu">
       <?php if($moviestatus) { foreach($moviestatus as $movstatus) { ?>
	<li>
      <a href="
	  
	  <?php
	  
	  if(isset($_GET['status']) && isset($_GET['language']))
	  {
	   echo base_url().'index.php/moviefolio/filter?status='.$movstatus->statuscode.'&&language='.$_GET['language'];
	  }
	  else if(isset($_GET['status']) && !isset($_GET['language']))
	  {
		echo base_url().'index.php/moviefolio/filter?status='.$movstatus->statuscode;
	  }
	  else if(!isset($_GET['status']) && isset($_GET['language']))
	  {
		echo base_url().'index.php/moviefolio/filter?status='.$movstatus->statuscode.'&&language='.$_GET['language'];
	  }
	  else
	  {
		echo base_url().'index.php/moviefolio/filter?status='.$movstatus->statuscode;
	  }
	  
	  ?>
	  
	  ">
       <?php echo $movstatus->name;?>
      </a>
    </li>
    <?php } } ?>
        
      
        
       
        
      </ul>
      
    </div>
    
  </div>
  
</section>
<?php if(isset($_GET['status'])){?>
<strong style="margin:10px;"><?php if($_GET['status']=='nowrunning'){ echo "Now Running";}else if($_GET['status']=='inshoot')  { echo "In Shoot";} else if($_GET['status']=='upcoming'){ echo "Up Coming"; } ?></strong>
<hr/>
<?php }?>

 </div>

</div> 
  <div class="row">
    <?php if($movies){ foreach($movies as $mov) { ?>
	<?php $CI =& get_instance();
	$movie_likes=$CI->user_model->get_this_movie_total_likes($mov->mid);
	$movie_loves=$CI->user_model->get_this_movie_total_loves($mov->mid);
										  ?>
    <div class="col-lg-3 moviefolio">
      
						
      <section class="panel panel-default">
        
        <div class="panel-body">
          
          <div class="clearfix text-center m-t">
            
            <div class="inline">
              
              
                <a href="<?php echo base_url();?>index.php/moviefolio/movie?id=<?php echo $mov->mid; ?>&& name=<?php echo $mov->name; ?>"> <img src="<?php echo base_url();?>uploads/movie_main/<?php echo $mov->image; ?>" style="width:170px;height:240px;" alt="" title="<?php echo $mov->name; ?>"/></a>
								
               
              
              <div class="h4 m-t m-b-xs">
                <a href="<?php echo base_url();?>index.php/moviefolio/movie?id=<?php echo $mov->mid; ?>&& name=<?php echo $mov->name; ?>"><?php echo $mov->name; ?></a>
              </div>
              
              <small class="text-muted m-b">
                <?php echo $mov->language; ?>
              </small>
              
            </div>
            
          </div>
          
        </div>
        
        <footer class="panel-footer bg-info text-center">
          
          <div class="row pull-out">
            
            <div class="col-xs-6">
              
              <div class="padder-v">
                
                <span class="m-b-xs h3 block text-white">
                  <?php if($movie_likes==''){echo '0';}else{echo $movie_likes;} ?>
                </span>
                
                <small class="text-muted">
                  Likes
                </small>
                
              </div>
              
            </div>
            
            <div class="col-xs-6 dk">
              
              <div class="padder-v">
                
                <span class="m-b-xs h3 block text-white">
                    <?php if($movie_loves==''){echo '0';}else{echo $movie_loves;} ?>
                </span>
                
                <small class="text-muted">
                  Loves
                </small>
                
              </div>
              
            </div>
            
          
            
          </div>
          
        </footer>
        
      </section>
      
    </div>
	<?php } } else
{ ?>

 <div class="col-sm-4 col-sm-offset-2" style="margin-top:50px;">	
				<section class="panel panel-default text-sm doc-buttons">
				  
				  <div class="panel-body">
				  
				    <i class="fa fa-search icon">
                            
                            <b class="bg-danger">
                            </b>
                            
                    </i>
						 &nbsp; <strong>No Movies found.</strong>
				  </div>
				  
				</section>
				<div class="spacer"></div>
			</div>	

<?php } ?>
	
    
  </div>
    <div class="col-sm-4 col-sm-offset-4">
  <?php if($movies){
						if($total_data<=12){?>
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block hideme"><strong>End of posts</strong></button> 
					</div>
					
					<?php }
					else if($total_data>12){?>
					
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block mloadmore hideme"><strong>Load more posts</strong></button> 
					</div>
					<img src="<?php echo base_url();?>images/loader.gif" style="display:none;" class="pull-center loader-img">
					<?php } }?>
					</div>
<div class="spacer"></div>
 <div class="spacer"></div>
<div class="spacer"></div>
<div class="spacer"></div> 
</section>

				  
				  
				  </section>
               
                  
                </section>
                
              </section>
              
              <!---<aside class="bg-light lter b-l aside-md">
                
              </aside>---->
              
            </section>
            
          </section>
          
        </section>
       
      </section>
      
    </section>

<script>
$('.mloadmore').one('click',function()
	{
		$('.loader-img').show();
		 urlstatus=$('.urlstatus').val();
		urllanguage=$('.urllanguage').val();
		flagger=$('.flagstopper').val();
		timelinecount=$('.moviefolio').length;
		remaining_data=parseInt(flagger)-parseInt(timelinecount);
		$('.mloadmore').text('Loading...');
		
	if(timelinecount<flagger)
		{
				
					   limit=8;
					
			   $.post("<?php echo base_url();?>index.php/moviefolio/get_movie_scroll_data",{timelinecount:timelinecount,urlstatus:urlstatus,urllanguage:urllanguage,limit:limit},function(response)
			   {
			  		
						if(response)
						{
							
							$('.moviefolio').last().after(response);
							if($('.moviefolio').length==flagger)
							{
								$('.btn-cont').html('<button class="btn btn-success btn-block"><strong>End of Posts</strong></button>');
								
								$('.loader-img').hide();
							}
							else
							{
								$('.mloadmore').html('<strong>Load more posts</strong>');
								$('.loader-img').hide();
							}
						}
						
						
			   }
	   );
	   }
	   else
	   {
			$('.mloadmore').html('<strong>Load more posts</strong>');
	   }
	   
	}
	);

</script>