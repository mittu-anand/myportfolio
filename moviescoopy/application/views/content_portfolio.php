      <section id="content">
        
        <section class="vbox">
          
          <section>
            
            <section class="hbox stretch">
              
              <section>
                
                <section class="vbox">
                 
                  <section class="scrollable wrapper">
             
<section class="scrollable wrapper">
<div class="row">
<div class="col-md-2 col-sm-offset-1 pull-right">
<?php if(!$this->session->userdata('logged_in',true)) { ?>
  <a href="<?php echo base_url(); ?>index.php/login" class=" btn btn-danger btn-large">Make my portfolio</a>    
<?php } else { ?>
  <a href="<?php echo base_url(); ?>index.php/portfolio/user?id=<?php echo $this->session->userdata('user_id');?>" class=" btn btn-danger btn-large">My Portfolio</a>    
<?php } ?>
</div>
</div>
<div class="small-sp"></div>
<div class="small-sp"></div>
<div class="row">

<div class="col-md-4">
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
    Moviewoods
  </header>
  
  <div class="panel-body clearfix collapse">
    <div class="dropdown pull-left m-r">
      
      <ul class="dropdown-menu pos-stc inline" role="menu" aria-labelledby="dropdownMenu">
         <?php if($industries) { foreach($industries as $ind) { ?>
    <li>
      <a href="<?php
	  
	  if(isset($_GET['portfolio']) && isset($_GET['language']))
	  {
	   echo base_url().'index.php/portfolio/filter?portfolio='.$_GET['portfolio'].'&&language='.$ind->industry;
	  }
	  else if(isset($_GET['portfolio']) && !isset($_GET['language']))
	  {
		echo base_url().'index.php/portfolio/filter?portfolio='.$_GET['portfolio'].'&&language='.$ind->industry;
	  }
	  else if(!isset($_GET['portfolio']) && isset($_GET['language']))
	  {
		echo base_url().'index.php/portfolio/filter?language='.$ind->industry;
	  }
	  else
	  {
		echo base_url().'index.php/portfolio/filter?language='.$ind->industry;
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
	<div class="col-md-8">
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
    Portfolio Of
  </header>
  
  <div class="panel-body clearfix collapse">
<?php
if($portfolio_types) { foreach($portfolio_types as $ptf) {
?>

<div class="col-sm-4">
 <a href="<?php
	  
	  if(isset($_GET['portfolio']) && isset($_GET['language']))
	  {
	   echo base_url().'index.php/portfolio/filter?language='.$_GET['language'].'&&portfolio='.$ptf->type;
	  }
	  else if(isset($_GET['language']) && !isset($_GET['portfolio']))
	  {
		echo base_url().'index.php/portfolio/filter?language='.$_GET['language'].'&&portfolio='.$ptf->type;
	  }
	  else if(!isset($_GET['language']) && isset($_GET['portfolio']))
	  {
		echo base_url().'index.php/portfolio/filter?portfolio='.$ptf->type;
	  }
	  else
	  {
		echo base_url().'index.php/portfolio/filter?portfolio='.$ptf->type;
	  }
	  
	  ?>"><?php echo $ptf->type; ?></a>
</div>


<?php } } ?>
  </div>
  
</section>
<?php if(isset($_GET['portfolio'])){?>
<strong style="margin:10px;"><?php echo $_GET['portfolio']; ?></strong>
<hr/>
<?php }?>

  </div>
	
	</div>
  <input type="hidden" class="urlportfolio" value="<?php if(isset($_GET['portfolio'])){ echo $_GET['portfolio'];} ?>"/>
  <input type="hidden" class="urllanguage" value="<?php if(isset($_GET['language'])){ echo $_GET['language'];} ?>"/>
  <input type="hidden" class="flagstopper" value="
  
  <?php
	  $CI =& get_instance();
	
	  if(isset($_GET['portfolio']) && isset($_GET['language']))
	  {
			echo $total_data=$CI->user_model->get_total_portfolios($_GET['portfolio'],$_GET['language']);
	
	  }
	  else if(isset($_GET['portfolio']) && !isset($_GET['language']))
	  {
		echo $total_data=$CI->user_model->get_total_portfolios($_GET['portfolio']);
	
	  }
	  else if(!isset($_GET['portfolio']) && isset($_GET['language']))
	  {
		echo $total_data=$CI->user_model->get_total_portfolios($_GET['language']);
	
	  }
	  else
	  {
		echo $total_data=$CI->user_model->get_total_portfolios();
	
	  }
	  
	  ?>"/>
  <div class="row">

  <?php if($portfolio) { foreach($portfolio as $port) { ?>
	<?php 
	$CI =& get_instance();
	$user_likes=$CI->get_this_user_total_likes($port->uid);
	$user_loves=$CI->get_this_user_total_loves($port->uid);
	
	?>
<div class="col-sm-4 portfoliofeed"> <section class="panel panel-default"> <header class="panel-heading bg-danger lt no-border">
 <div class="clearfix"> <a href="#" class="pull-left thumb avatar b-3x m-r">
 
<img class="img-circle" style="height:60px;width:60px;" src="<?php echo base_url();?>uploads/users/<?php if(isset($port->profile_img) && $port->profile_img!=''){echo $port->profile_img; }else{ if($port->gender=='M'){ echo "avatar_default.jpg";}else{echo "favatar_default.jpg";} } ?>">
            
 </a> <div class="clear"> <div class="h3 m-t-xs m-b-xs text-white">
 <a href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $port->uid; ?>">
 <?php echo $port->name;?></a>
 </div> <small class="text-muted"><?php echo $port->desig;?></small> 
 </div> </div> </header> 
 <div class="list-group no-radius alt"> 
 <a class="list-group-item" href="#"> 
 <span class="badge bg-light"><?php echo $port->industry;?></span> <i class="fa fa-eye icon-muted"></i> Industry </a> 

 <a class="list-group-item" href="#"> <span class="badge bg-success">
 <?php if($user_loves){echo $user_loves;}else{echo "0";} ?></span> 
 <i class="fa fa-heart icon-muted"></i> Loves </a> <a class="list-group-item" href="#"> <span class="badge bg-info">
 <?php if($user_likes){echo $user_likes;}else{echo "0";} ?></span> 
 <i class="fa fa-thumbs-up icon-muted"></i> Likes </a> </div> </section>
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
						 &nbsp; <strong>No portfolio's found.</strong>
				  </div>
				  
				</section>
				<div class="spacer"></div>
			</div>	

<?php } ?>

  </div>
     <div class="col-sm-4 col-sm-offset-4">
  <?php if($portfolio){
						if($total_data<=12){?>
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block hideme"><strong>End of posts</strong></button> 
					</div>
					
					<?php }
					else if($total_data>12){?>
					
					<div class="spacer"></div>
					<div class="btn-cont">
					<button class="btn btn-success btn-block ploadmore hideme"><strong>Load more posts</strong></button> 
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
              
             <!--- <aside class="bg-light lter b-l aside-md">
                
              </aside>----->
              
            </section>
            
          </section>
          
        </section>
        
      </section>
      
<script>
$('.ploadmore').one('click',function()
	{
		$('.loader-img').show();
        urlportfolio=$('.urlportfolio').val();
		urllanguage=$('.urllanguage').val();
		flagger=$('.flagstopper').val();
		timelinecount=$('.portfoliofeed').length;
		remaining_data=parseInt(flagger)-parseInt(timelinecount);
		$('.ploadmore').text('Loading...');
	if(timelinecount<flagger)
		{
				
					   limit=6;
					
			   $.post("<?php echo base_url();?>index.php/feeds/get_portfolio_data",{timelinecount:timelinecount,limit:limit,urlportfolio:urlportfolio,urllanguage:urllanguage},function(response)
			   {
			  		
						if(response)
						{
							
							$('.portfoliofeed').last().after(response);
							if($('.portfoliofeed').length==flagger)
							{
								$('.btn-cont').html('<button class="btn btn-success btn-block"><strong>End of Posts</strong></button>');
								
								$('.loader-img').hide();
							}
							else
							{
								$('.ploadmore').html('<strong>Load more posts</strong>');
								$('.loader-img').hide();
							}
						}
						
						
			   }
	   );
	   }
	   else
	   {
			$('.ploadmore').html('<strong>Load more posts</strong>');
	   }
	   
	}
	);

</script>


