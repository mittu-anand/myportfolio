<!--<footer class="footer bg-white b-t b-light"> <p>This is a footer</p> </footer>-->
    
    <!-- / footer -->
    
    <!-- Bootstrap -->
    
    <!-- App -->
	<a href="#" class="footer-plus pull-right" style="display:none;"><img src="<?php echo base_url();?>images/plus.png" alt="Maximize" title="Show Footer" ></a>

    <footer class="footer bg-white b-t b-light footer-control" style="background:#FB6B5B;">
	
	<div class="row">
  
  <div class="col-lg-12">
    
    <!-- .breadcrumb -->
    
    <ul class="breadcrumb" style="border:none !important;margin-top:8px;background:#FB6B5B !important;">
	<li class="min-pos">
       <a href="#" class="footer-min"><img src="<?php echo base_url();?>images/minus.png" alt="Minimize" title="Hide Footer" ></a>

      </li>
	
      <li>
        <a href="#">
          &copy; <strong class="text-warning">Moviescoopy</strong> 2015.All rights reserved.
        </a>
      </li>
      <li>
        <a href="<?php echo base_url();?>index.php/moviescoopy" style="font-weight:bold;">
          <i class="fa fa-list-ul">
          </i>
          About Moviescoopy
        </a>
      </li>
	  
	   <li>
			 
			 <a class="btn btn-sm btn-icon btn-warning" target="_blank" href="<?php if(isset($movie[0]->twitter)){echo $movie[0]->twitter; } ?>">
			 <i class="fa fa-twitter"></i>
			 </a>
			 <a class="btn btn-sm btn-icon btn-success" target="_blank"  href="<?php if(isset($movie[0]->facebook)){echo $movie[0]->facebook; } ?>">
			 <i class="fa fa-facebook"></i>
			 </a> 
			 <a class="btn btn-sm btn-icon btn-warning" target="_blank"  href="<?php if(isset($movie[0]->google)){echo $movie[0]->google; } ?>">
			 <i class="fa fa-google-plus"></i>
			 </a> 
			 <a class="btn btn-sm btn-icon btn-success" target="_blank"  href="<?php if(isset($movie[0]->linkedin)){echo $movie[0]->linkedin; } ?>">
			 <i class="fa fa-linkedin"></i>
			 </a>
			  <a class="btn btn-sm btn-icon btn-warning" target="_blank"  href="<?php if(isset($movie[0]->linkedin)){echo $movie[0]->linkedin; } ?>">
			 <i class="fa fa-youtube"></i>
			 </a>
		 </li>
		 
		 <li>
        <button class="btn btn-danger" data-title="We love colors!" data-placement="top" data-toggle="tooltip" href="<?php echo base_url();?>index.php/moviescoopy" style="font-weight:bold;">
          <i class="fa fa-heart">
          </i>
         
        </button>
      </li>	  
	  <li>
        <button class="btn btn-danger" data-title="For best view,update your browser!" data-placement="top" data-toggle="tooltip" href="<?php echo base_url();?>index.php/moviescoopy" style="font-weight:bold;">
          <i class="fa fa-css3">
          </i>
         
        </button>
      </li>	
		<li>
        <button class="btn btn-danger" data-title="Save paper,Go green!" data-placement="top" data-toggle="tooltip" href="<?php echo base_url();?>index.php/moviescoopy" style="font-weight:bold;">
          <i class="fa fa-leaf">
          </i>
         
        </button>
      </li>	
	<li>
				<i class="fa fa-home icon text-white ">
                       
                          </i>   
    <strong class="text-white">From the hub of</strong>						  
		</li> 
		<li>
        <a href="#"  data-title="Idea n Loops Technologies" data-placement="top" data-toggle="tooltip">
          
         <strong class="text-warning" > Idea n loops</strong>
        </a>
       </li>
		<li>
        <a href="#" data-title="Travelscoopy Tours" data-placement="top" data-toggle="tooltip">
           <strong class="text-info" >
          Travelscoopy
		  </strong>
        </a>
      </li>	  
	 <li>
        <a href="#" data-title="Year3000 Events" data-placement="top" data-toggle="tooltip">
           <strong class="text-primary">
				Y3k Events
		   </strong>
        </a>
      </li>
	 
      
	 
    </ul>
    
    <!-- / .breadcrumb -->
    
  </div>
  
</div>
	</footer>
    <style>
	.footer {
    
    position: fixed !important;
    left: 0 !important;
    right: 0 !important;
    bottom: 0 !important;
    min-height: 50px !important;
	z-index:10000 !important;
}    
.footer-plus
{
	position: fixed !important;
    left: 0 !important;
    right: 0 !important;
    bottom: 0 !important;
    min-height: 25px !important;
	z-index:10000 !important;
}
.idea
{
font-weight:bold;
color:#FFC333 !important;
}
.travel
{
font-weight:bold;
color:#81BA53 !important;
}
.year3000
{
font-weight:bold;
color:#3FB4B5 !important;
}

iframe
{
	width:100% !important;
	height:300px !important;
}
.small-sp
{
 height:6px;
}
.text-green
{
color:#7EB950;
}
.text-blue
{
color:#3FB4B5;
}
.tactive
{
background:#FFBC1A !important;
}
.stack_active
{
background:#FFBC1A !important;
}
.mid-top-bar li a
{
border-left:none;color:#ffffff;
font-weight:bold;
}
.mid-top-bar li a:hover
{
color:#ffffff;
}
.mid-top-bar li
{
background:#FB6B5B;
}
.yellow
{
border-top-color:#FFC333 !important;
}
.yellow:after
{
border-top-color:#FFC333 !important;
}
.about-moviescoopy ul li a
{
text-transform:uppercase;
font-size:13px !important;
}
.60-border
{
	height:60px !important;
	width:60px !important;
	border:3px solid #FFC333 !important;
}
.breadcrumb li a
{
	color:#ffffff !important;
}
.footer-min
{
	
}
.usr-edt
{
border-right:none !important;
}
.min-pos
{
position:relative;
top:-40px;
}
.vactive
{
color:#FFC333 !important;
}
.video_menu li
{
border:1px solid #EAEAEA;
}
.shr-label
{
	margin-left:5px;
}
.pluginButton

{
background-color:#f0ad4e !important;
-webkit-linear-gradient(#f0ad4e, #f0ad4e);
}	

#s-dsp
{
display:none;
position:fixed;
top:50px;
border-left:solid 1px #dedede;
border-right:solid 1px #dedede;
border-bottom:solid 1px #dedede;
overflow:hidden;
min-width:350px;
background:#ffffff;
}
.display_box
{
padding:4px; border-top:solid 1px #dedede; font-size:12px; height:50px;
}
.display_box_m
{
	padding:4px; border-top:solid 1px #dedede; font-size:12px; height:80px;
}
.display_box_m:hover
{
	background:#FB6B5B;
color:#FFFFFF !important;
}
.display_box_m strong
{
padding-right:10px;
}
.display_box1
{
padding:4px; border-top:solid 1px #dedede; font-size:12px; height:50px;
background:#8ec165;
color:#FFFFFF;
}
.display_box:hover
{
background:#FB6B5B;
color:#FFFFFF;
}
#shade
{
background-color:#00CCFF;

}

	</style>
  
    <script src="<?php echo base_url();?>js/appear/jquery.appear.js">
    </script>
	
    <script src="<?php echo base_url();?>js/fuelux/fuelux.js"></script>
    <script src="<?php echo base_url();?>js/scroll/smoothscroll.js">
    </script>
     <script src="<?php echo base_url();?>js/file-input/bootstrap-filestyle.min.js">
    </script>
    <script src="<?php echo base_url();?>js/landing.js">
    </script>
     
    <script src="<?php echo base_url();?>js/app.plugin.js">
    </script>
	 <script src="<?php echo base_url();?>js/datatables/jquery.dataTables.min.js">
    </script>

   
	<script src="<?php echo base_url();?>js/select2/select2.min.js"></script>
    <script src="<?php echo base_url();?>js/datatables/demo.js">
    </script>
	
	<!-- parsley -->
    <script src="<?php echo base_url();?>js/parsley/parsley.min.js">
    </script>
    <script src="<?php echo base_url();?>js/parsley/parsley.extend.js">
    </script>
	<script src="<?php echo base_url();?>js/datepicker/bootstrap-datepicker.js"></script>
	 <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	  <script src="<?php echo base_url();?>js/main.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39161546-1']);
  _gaq.push(['_setDomainName', 'skyplugins.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
 <script type="text/javascript" src="<?php echo base_url();?>js/moviefolio.js"></script>

	<script>
	$(".videocontainer").click(function()
		{
			video=$(this).attr('rel');
			$(this).html(video);
		}
		);
	
	$("#like").one('click',function()
	{
	
   loguser=$("#loguser").val();
   enduser=$("#enduser").val();
  
	$.post("<?php echo base_url();?>index.php/portfolio/add_like",{loguser:loguser,enduser:enduser},function(response)
	{
		if(response)
		{
			location.href ="<?php echo base_url();?>index.php/portfolio/user?id="+enduser;
		}
		else
		{
		}
	}
	
	);
	
	}
	
	);
	

	$("#love").one('click',function()
	{
	
   loguser=$("#loguser").val();
   enduser=$("#enduser").val();
  
	$.post("<?php echo base_url();?>index.php/portfolio/add_love",{loguser:loguser,enduser:enduser},function(response)
	{
		if(response)
		{
			location.href ="<?php echo base_url();?>index.php/portfolio/user?id="+enduser;
		}
		else
		{
		}
	}
	
	);
	
	}
	
	);


$("#notlike").one('click',function()
	{
	
  loguser=$("#loguser").val();
    enduser=$("#enduser").val();
	$(this).attr('id','');
	$.post("<?php echo base_url();?>index.php/portfolio/delete_like",{loguser:loguser,enduser:enduser},function(response)
	{
		if(response)
		{
			location.href ="<?php echo base_url();?>index.php/portfolio/user?id="+enduser;
		}
		else
		{
		}
	}
	
	);
	
	}
	
	);
	
$("#notlove").one('click',function()
	{
	
  loguser=$("#loguser").val();
    enduser=$("#enduser").val();
	$(this).attr('id','');
	$.post("<?php echo base_url();?>index.php/portfolio/delete_love",{loguser:loguser,enduser:enduser},function(response)
	{
		if(response)
		{
			location.href ="<?php echo base_url();?>index.php/portfolio/user?id="+enduser;
		}
		else
		{
		}
	}
	
	);
	
	}
	
	);

	$(".search-loop").keyup(function()
	{
		loguser=$('.loguser').val();
		keyword=$('.search-loop').val();
	
		$('.table-responsive').load("<?php echo base_url();?>index.php/portfolio/filter_loops",{loguser:loguser,keyword:keyword});
	}
	);
		
	$(".movpostshare").one("click",function()
	{
		sharetype='moviepost';
		sharedby=$(".userlog").val();
		shareid=$(this).attr('rel');
		sharedc=parseInt($(this).find('label').attr('rel'))+1;
		
		$.post("<?php echo base_url();?>index.php/moviefolio/share_movie",{sharetype:sharetype,sharedby:sharedby,shareid:shareid},function(response)
	{
		if(response)
		{
			
		}
		else
		{
		}
	}
	
	);
	$(this).removeClass('movpostshare');
	$(this).html('<i class="fa fa-check "></i> Shared <label class="label shr-label bg-danger points">'+sharedc+'</label>');	
	}
	);
	   
	   
	   $(".celebpostshare").one("click",function()
	{
		sharetype='celebritypost';
		sharedby=$(".userlog").val();
		shareid=$(this).attr('rel');
		sharedc=parseInt($(this).find('label').attr('rel'))+1;
		$.post("<?php echo base_url();?>index.php/moviefolio/share_movie",{sharetype:sharetype,sharedby:sharedby,shareid:shareid},function(response)
	{
		if(response)
		{
			
		}
		else
		{
		}
	}
	
	);
	$(this).removeClass('celebritypost');
	$(this).html('<i class="fa fa-check "></i> Shared <label class="label shr-label bg-danger points">'+sharedc+'</label>');	
	}
	);
	
	$(".userpostshare").one("click",function()
	{
		sharetype='userpost';
		sharedby=$(".userlog").val();
		shareid=$(this).attr('rel');
		sharedc=parseInt($(this).find('label').attr('rel'))+1;
		//total_points=parseInt($('.user_points').html())+3;
		$.post("<?php echo base_url();?>index.php/moviefolio/share_movie",{sharetype:sharetype,sharedby:sharedby,shareid:shareid},function(response)
	{
		if(response)
		{
			
		}
		else
		{
		}
	}
	
	);
	$(this).removeClass('userpostshare');
	$(this).html('<i class="fa fa-check "></i> Shared <label class="label shr-label bg-danger points">'+sharedc+'</label>');	
	}
	);
	
	
	 $(".blogshare").one("click",function()
	{
		sharetype='blog';
		sharedby=$(".userlog").val();
		shareid=$(this).attr('rel');
		sharedc=parseInt($(this).find('label').attr('rel'))+1;
		
		$.post("<?php echo base_url();?>index.php/moviefolio/share_movie",{sharetype:sharetype,sharedby:sharedby,shareid:shareid},function(response)
	{
		if(response)
		{
			
		}
		else
		{
		}
	}
	
	);
	$(this).removeClass('blogshare');
	$(this).html('<i class="fa fa-check "></i> Shared <label class="label shr-label bg-danger points">'+sharedc+'</label>');
	}
	);
	
	   $(".newsshare").one("click",function()
	{
		sharetype='news';
		sharedby=$(".userlog").val();
		shareid=$(this).attr('rel');
		sharedc=parseInt($(this).find('label').attr('rel'))+1;
		$.post("<?php echo base_url();?>index.php/moviefolio/share_movie",{sharetype:sharetype,sharedby:sharedby,shareid:shareid},function(response)
	{
		if(response)
		{
			
		}
		else
		{
		}
	}
	
	);
	$(this).removeClass('newsshare');
	$(this).html('<i class="fa fa-check "></i> Shared <label class="label shr-label bg-danger points">'+sharedc+'</label>');
	}
	);
	
	$(".classifiedshare").one("click",function()
                            {
                              sharetype='classifieds';
                              sharedby=$(".userlog").val();
                              shareid=$(this).attr('rel');
                              sharedc=parseInt($(this).find('label').attr('rel'))+1;
                              $.post("<?php echo base_url();?>index.php/moviefolio/share_movie",{
                                sharetype:sharetype,sharedby:sharedby,shareid:shareid}
                                     ,function(response)
                                     {
                                       if(response)
                                       {
                                         
                                       }
                                       else
                                       {
                                       }
                                     }
                                     
                                    );
                              $(this).removeClass('classifiedshare');
                             $(this).html('<i class="fa fa-check "></i> Shared <label class="label shr-label bg-danger points">'+sharedc+'</label>');
                            }
                           );
  
  $(".applyclassified").one("click",function()
	{
		
		appliedby=$(".userlog").val();
		classifiedid=$(this).attr('rel');
		
		$.post("<?php echo base_url();?>index.php/classifieds/apply_classified",{appliedby:appliedby,classifiedid:classifiedid},function(response)
	{
		if(response)
		{
			
			
		}
		else
		{
		}
	}
	
	);
	$(this).removeClass('applyclassified');
			$(this).html('<i class="fa fa-check"></i> Applied');
	}
	);
	
	
	
	
	$(".footer-min").click(function()
	{	
		$('.footer-control').hide();
		$('.footer-plus').show();
		return false;
	}
	);
	$(".footer-plus").click(function()
	{	
		$('.footer-control').show();
		return false;
	}
	);
	$(".reviewshare").one("click",function()
	{
		sharetype='review';
		sharedby=$(".userlog").val();
		shareid=$(this).attr('rel');
		
		$.post("<?php echo base_url();?>index.php/moviefolio/share_movie",{sharetype:sharetype,sharedby:sharedby,shareid:shareid},function(response)
	{
		if(response)
		{
			location.href="";
		}
		else
		{
		}
	}
	
	);
			//$(this).removeClass('movpostshare');
			//$(this).html('You shared this post');
	}
	);
		function validateEmail($email) {
	  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	  if( !emailReg.test( $email ) ) {
		return false;
	  } else {
		return true;
	  }
	}
	
	$('#email').blur(function()
	{
	
		if($('#email').val()!='')
		{
			if(!validateEmail($('#email').val())) 
			{ 
				
				$('.email-err').html('<label class="label bg-danger"><i class="fa fa-times-circle"></i>Email is invalid</label>');
			}
			else
			{
				$.post("<?php echo base_url();?>index.php/signup/check_email",{email:$('#email').val()},function(response)
				{
				
					$('.email-err').html(response);
				
				}
				
			
				);
				}
	}
	
	
	}
	);
	
	$('.news-lttr').click(function()
	{
	
		mail=$('.news_letter').val();
		
		if(mail=='')
		{
		
			$('.em-err').html('<label class="label bg-danger"><i class="fa fa-times-circle"></i>&nbsp;Email is required</label>');
			return false;
		}
		else
		{
			if(!validateEmail(mail))
			{ 
				//alert('invalid email');
				$('.em-err').html('<label class="label bg-danger"><i class="fa fa-times-circle"></i>&nbsp;Email is invalid</label>');
			}
			else
			{
				$.post("<?php echo base_url();?>index.php/signup/add_newsletter",{mail:mail},function(response)
				{
				
					$('.em-err').html(response);
					$('.news_letter').val('')
				
				}
				
			
				);
			}
		}
	}
	);
	$('.sr-mv-sp').keyup(function()
	{
		var srch=$('.sr-mv-sp').val();
		$('.sr-mv-sp').css("background", "whitesmoke url(<?php echo base_url();?>images/loader.gif)no-repeat right center");
		$.post("<?php echo base_url();?>index.php/feeds/srch",{srch:srch},function(response)
				{
				$('.sr-mv-sp').css("background","whitesmoke");
				$('#s-dsp').html(response);
				$("#s-dsp").show();
					$(document).click(function (e)
{
    var container = $("#s-dsp");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.hide();
    }
});
				}
				);
	}
	);

	</script>
	
  </body>
  
</html>