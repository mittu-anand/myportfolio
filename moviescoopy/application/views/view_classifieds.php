<div class="spacer"></div>
<div class="row">


  <div class="col-md-10 col-md-offset-1">
	<section class="panel panel-default">
  
  <header class="panel-heading bg-light">
    
    <ul class="nav nav-tabs nav-justified">
      
      <li class="active">
        <a href="<?php echo base_url();?>index.php/moviefolio/classifieds?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?> " style="border-left:none;">
          View Classifieds
        </a>
      </li>
      
      <li >
        <a href="<?php echo base_url();?>index.php/moviefolio/add_classifieds?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?> ">
         Post a Classified
        </a>
      </li>
     
      
    </ul>
    
  </header>
  
  <div class="panel-body">
    
    <div class="tab-content">
      
      
      
 <div id="profile" class="tab-pane active">
 
<div class="col-sm-10 col-md-offset-1">
              <?php if($this->session->flashdata('success_on')){ ?>
                      <div class="alert alert-success fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('success_on'); ?>
                      </div>
                <?php } ?>
				<?php if($this->session->flashdata('error_on')){ ?>
                      <div class="alert alert-danger fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         <?php  echo $this->session->flashdata('error_on'); ?>
                      </div>
                <?php } ?>      
                   <section class="panel panel-default">
  
  
  <div class="table-responsive">
    
    <table class="table table-striped b-t b-light">
      
      <thead>
        
        <tr>
          
          
          
          <th data-toggle="class" class="th-sortable">
            Title 
         
            
          </th>
          
         
          
          <th>
            Date
          </th>
          <th>
            Application
          </th>
          <th width="90">
          </th>
          
        </tr>
        
      </thead>
      
      <tbody>
        <?php if($classifieds) { foreach($classifieds as $classfd) {?>
        <tr>
          
         
          <td>
            <?php echo $classfd->title; ?>
          </td>
          
        
          
          <td>
            <?php echo $classfd->postedon; ?>
          </td>
           <td>
            <a href="<?php echo base_url();?>index.php/moviefolio/applications?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?>&&app=<?php echo $classfd->classifiedid; ?>"><span class="label label-lg bg-success">view applications</span></a>
          </td>
          
          <td>
            
             
             <a  class="active" href="<?php echo base_url();?>index.php/moviefolio/edit_classified?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?>&&edit=<?php echo $classfd->classifiedid; ?>">
              <i class="fa fa-pencil text-info text-active">
              </i>
              
            </a>
			
            <a  class="active" href="<?php echo base_url();?>index.php/moviefolio/delete_classified?id=<?php echo $movie[0]->mid; ?>&& name=<?php echo $movie[0]->name; ?>&&delete=<?php echo $classfd->classifiedid; ?>">
              <i class="fa fa-times text-danger text-active">
              </i>
              
            </a>
          </td>
          
        </tr>
		
        <?php } } ?>
        
        
      </tbody>
      
    </table>
    
  </div>
 
</section>
                    
                  </div>
	
  
		

      </div>
     
      
    </div>
    
  </div>
  
</section>
  </div>
</div>  
