 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                <div class="col-sm-12">
              <section class="panel">
              <header class="panel-heading">
                  View News
             <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
              </header>
              <div class="panel-body">
              <div class="adv-table">
              <table  class="display table table-bordered table-striped" id="dynamic-table">
              <thead>
              <tr>
                  <th>News Title</th>
                  <th>News Description</th>
                  <th>Action</th>
                  
              </tr>
              </thead>
              <tbody>
			  <?php if(isset($news)){ foreach($news as $new) { ?>
              <tr class="gradeX">
                  <td><?php echo $new->title; ?></td>
                  <td><?php echo $new->description; ?></td>
                  <td>
                         <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                         <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                  </td>
                 
              </tr>
              <?php } } ?>
              </tfoot>
              </table>
              </div>
              </div>
              </section>
              </div>
              </div>
              
              <!-- page end-->
          </section>
      </section>
      <!-- js placed at the end of the document so the pages load faster -->

    <script src="<?php echo base_url(); ?>admin/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>admin/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="<?php echo base_url(); ?>admin/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>admin/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url(); ?>admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url(); ?>admin/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>admin/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/data-tables/DT_bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>admin/js/respond.min.js" ></script>

    <!--right slidebar-->
    <script src="<?php echo base_url(); ?>admin/js/slidebars.min.js"></script>

    <!--dynamic table initialization -->
    <script src="<?php echo base_url(); ?>admin/js/dynamic_table_init.js"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url(); ?>admin/js/common-scripts.js"></script>