 <!--footer start
      <footer class="site-footer">
          <div class="text-center">
              Copyright &copy; <?php echo date('Y'); ?> by Mather Builders.<br/>
		All Rights Reserved.<br/>
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  <!--</section>-->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>/admin/js/jquery.js"></script>
	 <script src="<?php echo base_url(); ?>admin/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="<?php echo base_url(); ?>/admin/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url(); ?>/admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url(); ?>/admin/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/admin/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="<?php echo base_url(); ?>/admin/js/owl.carousel.js" ></script>
    <script src="<?php echo base_url(); ?>/admin/js/jquery.customSelect.min.js" ></script>
    <script src="<?php echo base_url(); ?>/admin/js/respond.min.js" ></script>

    <!--right slidebar-->
    <script src="<?php echo base_url(); ?>/admin/js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="<?php echo base_url(); ?>/admin/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="<?php echo base_url(); ?>/admin/js/sparkline-chart.js"></script>
    <script src="<?php echo base_url(); ?>/admin/js/easy-pie-chart.js"></script>
    <script src="<?php echo base_url(); ?>/admin/js/count.js"></script>
    <script>
		$(".confirmClick").click( function() {	
				if ($(this).attr('title')) {
					var question = 'Are you sure you want to ' + $(this).attr('title').toLowerCase() + '?';
				} else {
					var question = 'Are you sure you want to do this action?';
				}
				if ( confirm( question ) ) {
					[removed].href = this.src;
				} else {
					return false;
				}
			});
			
			
			
			
			
			

	</script>
 
 
 <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

</body>

</html>
