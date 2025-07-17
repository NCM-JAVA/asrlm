<link href="<?php echo base_url(); ?>charts/css/c3.css" rel="stylesheet" type="text/css">
<script src="https://d3js.org/d3.v5.min.js" charset="utf-8"></script>
<script src="<?php echo base_url(); ?>charts/js/c3.js"></script>
 

 
    <section>
        <div class="container-fluid" style="min-height:600px;">
            <div class="row list-view">
        
				
				
                <div class="col-md-12">
				 <button class="btn btn-sm btn-default mb-4	" style="padding: 5px 10px 5px 10px;" onclick="window.location='<?php echo base_url(); ?>'"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</button>
			 
				
			 
				
				
                    <div class="content content-box pb-3">
                        <div class="card-header m-b-10">
                            <div class="row">
				<div class="col-md-11">
							<h4 class="m-0"> Buyer Enquiry List</h4>
						</div>
						
						</div>
						
                        </div>
						
						<center>
  <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error"  style="color:green;font-weight:bolder;">'.$msg.'</label></fieldset>';?>
			  <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset"><label class="error" style="color:green;font-weight:bolder;">'.$this->input->get('msg').'</label></fieldset>'; }?>
			  </center>

      <div class="content_right_part column">
        <div class="chart_bg" style="margin-bottom: 50px;">
          <div class="reportrgs_container">
             
		<section class="panel panel-default">
		
		 
          
                <div class="col-sm-12 table-responsive" >
                  <table id="taskTable" class="table table-bordered table-width dataTable no-footer">
                    <thead>
                      <tr>                         
                        <th>Name</th>
                        <th>District</th>
                        <th>Block</th>
                        <th>Contact</th>
						<th>Email</th>
						<th>Commodity</th>
					 
                      </tr>
                    </thead>
                    <tbody>
					<?php 
					//print_r($buyerdetail);
				 foreach($buyerdetail as $pg){ ?>
					<tr>
					<td><?php echo ucfirst($pg['name']); ?></td>
					<td><?php echo ucfirst($pg['district']); ?></td>
					<td><?php echo ucfirst($pg['block']); ?></td>
					<td><?php echo ucfirst($pg['contactno']); ?></td>
					<td><?php echo ucfirst($pg['email']); ?></td>
					<td><?php echo ucfirst($pg['commodity']); ?></td>
				 
					</tr>
						<?php 
						
						
					} ?>
				  
                    </tbody>
                  </table>
				  
                </div>
				
                <footer class="panel-footer">
				
                  <div class="row">
				
                   <!-- <div class="col-sm-4 hidden-xs">
					 
                      <select class="input-sm form-control input-s-sm inline v-middle">
                        <option value="0">Bulk action</option>
                        <option value="1">Delete selected</option>
                        <option value="2">Bulk edit</option>
                        <option value="3">Export</option>
                      </select>
                      <button class="btn btn-sm btn-default">Apply</button>                  
                    </div>-->
                    <div class="col-sm-4 text-center">
                     <!-- <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>-->
                    </div>
                    <div class="col-sm-4 text-right text-center-xs">
				     <?php echo  $this->pagination->create_links(); ?>	
                    <!--  <ul class="pagination pagination-sm m-t-none m-b-none">
                        <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                      </ul-->
                    </div>
                  </div>
                </footer>
			 
				
	  

 


			 
				
 
								
			 
				
              </section>
			  
				
			  
			    </div>
            </div>
        </div>
		</div>
		</div>
		</div>
		</div>
    </section>
	
	<!-- Upload File Modal -->
 
 
 