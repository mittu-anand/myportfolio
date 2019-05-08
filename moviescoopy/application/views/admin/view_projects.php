 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  
		  <?php if($this->session->flashdata('serv_suc')){ ?>
                      <div class="alert alert-success fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('serv_suc'); ?>
                      </div>
                    <?php } ?>
                     <?php if($this->session->flashdata('serv_err')){ ?>
                      <div class="alert alert-danger fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('serv_err'); ?>
                      </div>
                <?php } ?>
				
				
				
              <!-- page start-->
              <div class="row">
                <div class="col-sm-12">
              <section class="panel">
              <header class="panel-heading">
                  View Projects
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
                  <th>Project Name</th>
                  <th>Project Status</th>
				  <th>Project Type</th>
				  <th>Location</th>
                  <th>Action</th>
                  
              </tr>
              </thead>
              <tbody>
			  <?php if(isset($projects)){ foreach($projects as $project) { ?>
              <tr class="gradeX">
                  <td><?php echo $project->name; ?></td>
                  <td><?php echo $project->project_status; ?></td>
				  <td><?php echo $project->project_type; ?></td>
                  <td><?php echo $project->location; ?></td>
                  <td>
                     <a class="btn btn-primary btn-xs" href="<?php echo base_url();?>index.php/admin/projects/project?id=<?php echo $project->id; ?>"><i class="fa fa-pencil"></i></a>
                     <a class="btn btn-danger btn-xs confirmClicksproj" href="<?php echo base_url();?>index.php/admin/projects/delete_projects?id=<?php echo $project->id; ?>"><i class="fa fa-trash-o "></i></a>
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
	
	<script>
		$(".confirmClicksproj").click(function() {	
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