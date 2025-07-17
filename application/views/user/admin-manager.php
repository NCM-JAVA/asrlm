<link href="<?php echo base_url(); ?>charts/css/c3.css" rel="stylesheet" type="text/css">
<script src="https://d3js.org/d3.v5.min.js" charset="utf-8"></script>
<script src="<?php echo base_url(); ?>charts/js/c3.js"></script>
<?php if($this->input->get('atype') == false){ ?>
<section style="min-height: 700px;">
<div class="container-fluid">
<button class="btn btn-sm btn-default mb-4	" style="padding: 5px 10px 5px 10px;" onclick="window.location='<?php echo base_url() ?>user-profile'"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</button>
	<div class="row">
	
	<div class="col-md-12 mt-5 text-center">
	
	<a class="btn btn-primary"  href="?atype=commodity"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Producer Group</a>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-primary ml-5"  href="?atype=membergroup&mtype=landarea"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Member</a>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-primary ml-5"  href="?atype=producergroupdetails"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;PG Details</a>
	</div>
	</div>
		

</div>
</section>

<?php } ?>

<?php if($this->input->get('atype') == true ){ ?>
    <section>
        <div class="container-fluid">
            <div class="row list-view">
                <!--div class="col-md-3">
                    <div class="sidebar">
                     	<ul>
						<li><a href="<?php echo base_url(); ?>admin-manager" class="active">PG Entry</a></li>
						<li><a href="<?php echo base_url(); ?>user-profile" >Profile</a></li>
						<li><a href="<?php echo base_url(); ?>form-filling">GT PG Panel</a></li>
						<li><a href="<?php echo base_url(); ?>members/memberslist">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel" >Approver Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel">Verifier Panel</a></li>
						
						<?php // if($this->session->userdata('admin_session')['user_group_id'] == '3'){ ?><li><a href="<?php echo base_url(); ?>users-list"  >Users List</a></li>  <?php // } ?>
						
						<li><a href="<?php echo base_url(); ?>upload-data">Upload/Sync Records(CSV)</a></li>						
						<li><a href="<?php echo base_url(); ?>login/logout">Logout</a></li>
					</ul>
                    </div>
                </div-->
				
				
                <div class="col-md-12">
				 <button class="btn btn-sm btn-default mb-4	" style="padding: 5px 10px 5px 10px;" onclick="window.location='<?php echo base_url(); ?>user-profile'"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</button>
				<?php if($this->input->get('atype') != 'producergroupdetails' && $this->input->get('atype') != 'membergroup'){ ?>
				<div class="row mb-4">
				 <div class="col-md-2 mt-4">
				 <button class="btn btn-sm btn-primary" style="padding: 5px 10px 5px 10px;" onclick="window.location='?atype=commodity'"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Commodity Details</button>
				 </div>
				 <div class="col-md-2 mt-4">
				 <button class="btn btn-sm btn-primary" style="padding: 5px 10px 5px 10px;" onclick="window.location='?atype=valueaddition'"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Value Addition</button>
				 </div>
				 <div class="col-md-2 mt-4">
				 <button class="btn btn-sm btn-primary" style="padding: 5px 10px 5px 10px;" onclick="window.location='?atype=financialstatements'"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Fianancial Statements</button>
				 </div>
				 <div class="col-md-2 mt-4">
				 <button class="btn btn-sm btn-primary" style="padding: 5px 10px 5px 10px;" onclick="window.location='?atype=trainingrecords'"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Training Records</button>
				 </div>
				 <div class="col-md-2 mt-4">
				 <button class="btn btn-sm btn-primary" style="padding: 5px 10px 5px 10px;" onclick="window.location='?atype=bor'"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;Book of Records</button>
				 </div>
				 <div class="col-md-2">
				 <label for="validationTooltip04"><b>Other Reports</b></label>
				  <select class="custom-select" id="validationTooltip04" required="" onchange="window.location='<?php echo base_url().'admin-manager?atype='?>'+(this.value)">
					<option value="">Choose...</option>
					<option value="closingbalance" <?php echo $this->input->get('atype') == 'closingbalance'?'selected="selected"':''; ?>>Closing Balance</option>
					<option value="newmemberadded" <?php echo $this->input->get('atype') == 'newmemberadded'?'selected="selected"':''; ?>>New Member Added</option>
					<option value="monthlybussiness" <?php echo $this->input->get('atype') == 'monthlybussiness'?'selected="selected"':''; ?>>Monthly Business</option>
					<option value="mtd" <?php echo $this->input->get('atype') == 'mtd'?'selected="selected"':''; ?>>Monthly Transactional Details</option>
					
				  </select>
				 </div>
				</div>
				
				<?php } ?>
				
				
				<?php if( $this->input->get('atype') == 'membergroup'){ ?>
				
				<div class="row mb-4">
				 <div class="col-md-2 mt-4">
				 <button class="btn btn-sm btn-primary" style="padding: 5px 10px 5px 10px;" onclick="window.location='?atype=membergroup&mtype=landarea'"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Land Area</button>
				 </div>
				 <div class="col-md-2 mt-4">
				 <button class="btn btn-sm btn-primary" style="padding: 5px 10px 5px 10px;" onclick="window.location='?atype=membergroup&mtype=commodity1'"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Commodity 1</button>
				 </div>
				 <div class="col-md-2 mt-4">
				 <button class="btn btn-sm btn-primary" style="padding: 5px 10px 5px 10px;" onclick="window.location='?atype=membergroup&mtype=commodity2'"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Commodity 2</button>
				 </div>
				 <div class="col-md-2 mt-4">
				 <button class="btn btn-sm btn-primary" style="padding: 5px 10px 5px 10px;" onclick="window.location='?atype=membergroup&mtype=commodity3'"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Commodity 3</button>
				 </div>
				 <div class="col-md-2 mt-4">
				 <button class="btn btn-sm btn-primary" style="padding: 5px 10px 5px 10px;" onclick="window.location='?atype=membergroup&mtype=commodityall'"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;All Aggregate</button>
				 </div>
				 <div class="col-md-2">
				 <label for="validationTooltip04"><b>Other Reports</b></label>
				  <select class="custom-select" id="validationTooltip04" required="" onchange="window.location='<?php echo base_url().'admin-manager?atype='?>'+(this.value)">
					<option value="">Choose...</option>
					
				  </select>
				 </div>
				</div>
				
				<?php } ?>
				
				               
                    <div class="content content-box pb-3">
					<div class="col-md-12">
                    <div class="pb-3">
					<div class="col-md-12 text-right mb-1 pt-3 pb-3">
						  <button class="btn btn-sm btn-primary" style="padding: 5px 10px 5px 10px;" title="Delete" target ="_blank" onclick="window.location.href='<?php echo base_url() ?>admin-manager?atype=producergroupdetails'"><i class="fa fa-refresh" aria-hidden="true"></i></button>&nbsp;
						  <button class="btn btn-success" type="button" name="memberslist" value="Members List" onclick="window.location.href='<?php echo base_url() ?>admin-manager?atype=producergroupdetails'">PG List</button>
						
						<button class="btn btn-primary" type="button" name="addpg" value="Add PG" onclick="window.location.href='<?php echo base_url() ?>form-filling'">Add PG</button>
					</div>
                        <div class="card-header m-b-10">
                            <div class="row">
				<div class="col-md-11">
							<h4 class="m-0"> PG List</h4>
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
		
		<?php if($this->input->get('atype') == 'producergroupdetails'){ ?>
			 <form method="get" action="<?php echo base_url().'admin-manager?atype=producergroupdetails' ?>">	  
		   <div class="col-md-12 row mt-4">
		   <div class="col-md-2">
		   <h6 class="m-0">Search</h6>
		   </div>
		    <div class="col-md-10">
			  <div class="form-row">
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip03"><b>District</b></label>
					<select class="custom-select" id="districtname" name="districtname">
					<option  value="">Choose...</option>
					  <?php foreach($districts as $district){ ?>
						
						<option value="<?php echo $district['district']; ?>"  <?php if($district['district']  == $this->input->get('districtname')){ echo 'selected="selected"'; } ?>><?php echo ucfirst($district['district']); ?></option>
				  
					  <?php } ?>					
				  </select>				  
				</div>
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip04"><b>Block</b></label>
				  <select class="custom-select" id="blocknames" name="blockname">
					<option value="">Choose...</option>
					
				  </select>
				  <div class="invalid-tooltip">
					Please select a valid Block.
				  </div>
				</div>
				<div class="col-md-3 mb-3">
				  <label for="validationTooltip04"><b>Gram Panchayat</b></label>
				  <select class="custom-select" id="grampachayatname" name="grampanchayatname" >
				  <option value="">Choose...</option>
				
				  </select>
				
				</div>
				<div class="col-md-2 mb-3">
				  <label><b>Date From</b></label>
				  <input type="date" class="form-control" name="datefrom" value=""/>
				</div>
				<div class="col-md-2 mb-3">
				  <label><b>To Date </b></label>
				  <input type="date" class="form-control" name="datefrom" value=""/>
				</div>
				<!--div class="col-md-3 mb-3">
				  <label for="validationTooltip05"><b>Village</b></label>
				  <select class="custom-select" name="villagename" id="validationTooltip04" >
				  <option value="">Choose...</option>
						<?php foreach($villages as $village){ ?>
						
						<option value="<?php echo $village['village']; ?>"  <?php if($village['village']  == $this->input->get('villagename')){ echo 'selected="selected"'; } ?>><?php echo ucfirst($village['village']); ?></option>
				  
					  <?php } ?>
				  </select>
				  <div class="invalid-tooltip">
					Please provide a valid Village.
				  </div>
				</div-->
				<div class="col-md-3 mt-4">
				<input type="hidden" name="atype" value="producergroupdetails" />
				<input type="submit" class="btn btn-primary" name="submit1" value="Search">
				</div>
				<!--div class="col-md-3 mb-3">
				  <label for="validationTooltip05"><b>Producer Group</b></label>
				  <select class="custom-select" id="validationTooltip04" required="">
					<option selected="" disabled="" value="">Choose...</option>
					<option>Kanchanjhangha Goatry PG	</option>
				  </select>
				  <div class="invalid-tooltip">
					Producer Group
				  </div>
				</div-->
			  </div>
		   </div>
		   </div>
		   </form>
          
                <div class="col-sm-12 table-responsive" >
				
                  <table id="taskTable" class="table table-bordered table-width dataTable no-footer">
                    <thead>
                      <tr>                         
                        <th>Producer Group</th>
                        <th>Date of Formation</th>
                        <th>District</th>
                        <th>Block</th>
						<th>Gram Panchayat</th>
						<th>Village</th>
						<th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php 
					//print_r($getpglist);
					foreach($getpglist as $pg){ ?>
					<tr>
					<td><?php echo ucfirst($pg['pgname']); ?></td>
					<td><?php echo ucfirst($pg['dof']); ?></td>
					<td><?php echo ucfirst($pg['district']); ?></td>
					<td><?php echo ucfirst($pg['block']); ?></td>
					<td><?php echo ucfirst($pg['grampanchayat']); ?></td>
					<td><?php echo ucfirst($pg['village']); ?></td>
					<td>
						  <button class="btn btn-sm btn-warning mb-1" style="padding: 5px 5px 5px 12px;color:#fff;" onclick="window.location='<?php echo base_url()."form-filling?editpg=".$pg['pgid'] ?>' "><i class="fa fa-edit" aria-hidden="true"></i>&nbsp; </button>&nbsp;&nbsp;
						  <button class="btn btn-sm btn-success" style="padding: 5px 10px 5px 10px;" target ="_blank" onclick="window.location='<?php echo base_url().'pgreview/'.$pg['pgid'] ?>' " ><i class="fa fa-download" aria-hidden="true"></i>&nbsp; </button>
						 </td>
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
				
				<?php } ?>
				
				
				<?php if($this->input->get('atype') == 'membergroup' ){ ?>
				
							<?php if($this->input->get('mtype') == 'landarea' ){ ?>
						<div class="row">
						  <div class="col-md-11"><h5 class="ml-3">Land Area</h6><br></div>
						  <?php print_r($landarea[0]['landareacount']); ?>
						 
						 <div class="col-md-12 row mt-0">
					   <div class="col-md-12">
					   <h6 class="m-0 ml-3">Search</h6><br/>
					   </div>
						<div class="col-md-12">
						<form method="get">
						  <div class="form-row">
							<div class="col-md-2 mb-3">
							  <label for="validationTooltip03"><b>District</b></label>
								<select class="custom-select" id="district" name="districtname">
								<option  value="">Choose...</option>
								  <?php foreach($districts as $district){ ?>
									
									<option value="<?php echo $district['district']; ?>"  <?php if($district['district']  == $this->input->get('districtname')){ echo 'selected="selected"'; } ?>><?php echo ucfirst($district['district']); ?></option>
							  
								  <?php } ?>
								
							  </select>
							</div>
							<div class="col-md-2 mb-3">
							  <label for="validationTooltip04"><b>Block</b></label>
							  <select class="custom-select" id="blocks" name="blockname">
								<option value="">Choose...</option>
								<?php foreach($blocks as $block){ ?>
									
									<option value="<?php echo $block['block']; ?>" <?php if($block['block']  ==  $this->input->get('blockname') ){ echo 'selected="selected"'; } ?>><?php echo ucfirst($block['block']); ?></option>
							  
								  <?php } ?>
							  </select>
							</div>
							
							<div class="col-md-2 mb-3">
							  <label><b>Date From</b></label>
							  <input type="date" class="form-control" name="datefrom" value=""/>
							</div>
							<div class="col-md-2 mb-3">
							  <label><b>To Date </b></label>
							  <input type="date" class="form-control" name="datefrom" value=""/>
							</div>
							 <div class="col-md-3 mb-3">
							 <input type="hidden" name="atype" value="membergroup" />
							  <input type="hidden" name="mtype" value="landarea" />
							<!--button class="btn btn-sm btn-primary mt-4" name="btnvalueadd" style="margin: 10px;margin-top: 32px !important;" type="submit"><i class="fa fa-filter" aria-hidden="true"></i>&nbsp;Filter</button-->
							<input type="submit" class="btn btn-sm btn-primary mt-4" name="submitva" value="Search" style="margin-top: 31px !important;"/>
							</div>
						  </div>
						  </form>
						  
						   <div id="chart"></div>
							
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
							
							<br/>
							<br/>
					   </div>
					   </div>
						  <script>
				  var chart = c3.generate({
					data: {
					json: [{label: "Total Agricultural land*", val:<?php echo $landarea[0]['landareacount']; ?>},{label: "Total Irrigated Land*",val:<?php echo $irrigatedland[0]['irrigatedlandcount']; ?>},{label: "Total Non Irrigated land",val:<?php echo $nonirrigatedland[0]['nonirrigatedlandcount']; ?>},{label: "Total Water bodies",val:<?php echo $totalwaterbody[0]['totalwaterbodycount']; ?>},{label: "Grazing land",val:<?php echo $grazingland[0]['grazinglandcount']; ?>}],
								keys: {
									x: 'label',
									value: ["val"],
								},
					 /* columns: [
						['data1', 1030, 1200, 1100, 1400, 1150, 1250],
					  //  ['data2', 2130, 2100, 2140, 2200, 2150, 1850]
			//           ['data1', 30, 200, 100, 400, 150, 250],
			//           ['data2', 130, 100, 140, 200, 150, 50]
					  ],*/
					  //row:['data1',22,33,55,66,44,55],
					  type: 'bar',
					  onclick: function (d, element) { console.log("onclick", d, element); },
					  onmouseover: function (d) { console.log("onmouseover", d); },
					  onmouseout: function (d) { console.log("onmouseout", d); }
					},
					axis: {
					  x: {
						type: 'categorized'
					  }
					},
					bar: {
					  width: {
						ratio: 0.3,
			//            max: 30
					  },
					}
				  });
				</script>
						   </div>
							
				<?php } ?>
				
				
					<?php if($this->input->get('mtype') == 'commodity1' ){ ?>
						<div class="row">
						  <div class="col-md-11"><h5 class="ml-3">Commodity 1</h6><br></div>
						 
						 <div class="col-md-12 row mt-0">
					   <div class="col-md-12">
					   <h6 class="m-0 ml-3">Search</h6><br/>
					   </div>
						<div class="col-md-12">
						<form method="get">
						  <div class="form-row">
							<div class="col-md-2 mb-3">
							  <label for="validationTooltip03"><b>District</b></label>
									<select class="custom-select" name="districtname">
									<option  value="">Choose...</option>
									  <?php foreach($districts as $district){ ?>
										
										<option value="<?php echo $district['district']; ?>"  <?php if($district['district']  == $this->input->get('districtname')){ echo 'selected="selected"'; } ?>><?php echo ucfirst($district['district']); ?></option>
								  
									  <?php } ?>
									
								  </select>
							</div>
							<div class="col-md-2 mb-3">
							  <label for="validationTooltip04"><b>Block</b></label>
							 <select class="custom-select" name="blockname">
								<option value="">Choose...</option>
								<?php foreach($blocks as $block){ ?>
									
									<option value="<?php echo $block['block']; ?>" <?php if($block['block']  ==  $this->input->get('blockname') ){ echo 'selected="selected"'; } ?>><?php echo ucfirst($block['block']); ?></option>
							  
								  <?php } ?>
							  </select>
							
							</div>
							<div class="col-md-2 mb-3">
							  <label><b>From Date</b></label>
							  <input type="date" class="form-control" name="datefrom" value=""/>
							</div>
							<div class="col-md-2 mb-3">
							  <label><b>To Date </b></label>
							  <input type="date" class="form-control" name="datefrom" value=""/>
							</div>
							  <div class="col-md-3 mb-3">
							 <input type="hidden" name="atype" value="membergroup" />
							 <input type="hidden" name="mtype" value="commodity1" />
							<!--button class="btn btn-sm btn-primary mt-4" name="btnvalueadd" style="margin: 10px;margin-top: 32px !important;" type="submit"><i class="fa fa-filter" aria-hidden="true"></i>&nbsp;Filter</button-->
							<input type="submit" class="btn btn-sm btn-primary mt-4" name="submitva" value="Search" style="margin-top: 31px !important;"/>
							</div>
						  </div>
						  </form>
						  
						   <div id="chart"></div>
							
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
							
							<br/>
							<br/>
					   </div>
					   </div>
						  <script>
				  var chart = c3.generate({
					data: {
					json: [{label: "Agri. - Paddy", val:<?php echo $agricommo1; ?>},{label: "Horticulture - Arecanut",val:<?php echo $horticommo1; ?>},{label: "Livestocks- Backyard Poultry",val:<?php echo $livestockscommo1; ?>}],
								keys: {
									x: 'label',
									value: ["val"],
								},
					 /* columns: [
						['data1', 1030, 1200, 1100, 1400, 1150, 1250],
					  //  ['data2', 2130, 2100, 2140, 2200, 2150, 1850]
			//           ['data1', 30, 200, 100, 400, 150, 250],
			//           ['data2', 130, 100, 140, 200, 150, 50]
					  ],*/
					  //row:['data1',22,33,55,66,44,55],
					  type: 'bar',
					  onclick: function (d, element) { console.log("onclick", d, element); },
					  onmouseover: function (d) { console.log("onmouseover", d); },
					  onmouseout: function (d) { console.log("onmouseout", d); }
					},
					axis: {
					  x: {
						type: 'categorized'
					  }
					},
					bar: {
					  width: {
						ratio: 0.3,
			//            max: 30
					  },
					}
				  });
				</script>
						   </div>
							
				<?php } ?>



		<?php if($this->input->get('mtype') == 'commodity2' ){ ?>
						<div class="row">
						 <div class="col-md-11"><h5 class="ml-3">Commodity 2</h6><br></div>
						 
						 <div class="col-md-12 row mt-0">
					   <div class="col-md-12">
					   <h6 class="m-0 ml-3">Search</h6><br/>
					   </div>
						<div class="col-md-12">
						<form method="get">
						  <div class="form-row">
							<div class="col-md-2 mb-3">
							  <label for="validationTooltip03"><b>District</b></label>
								<select class="custom-select" name="districtname">
								<option  value="">Choose...</option>
								  <?php foreach($districts as $district){ ?>
									
									<option value="<?php echo $district['district']; ?>"  <?php if($district['district']  == $this->input->get('districtname')){ echo 'selected="selected"'; } ?>><?php echo ucfirst($district['district']); ?></option>
							  
								  <?php } ?>
								
							  </select>
							</div>
							<div class="col-md-2 mb-3">
							  <label for="validationTooltip04"><b>Block</b></label>
							  <select class="custom-select" name="blockname">
								<option value="">Choose...</option>
								<?php foreach($blocks as $block){ ?>
									
									<option value="<?php echo $block['block']; ?>" <?php if($block['block']  ==  $this->input->get('blockname') ){ echo 'selected="selected"'; } ?>><?php echo ucfirst($block['block']); ?></option>
							  
								  <?php } ?>
							  </select>
							</div>
							
							<div class="col-md-2 mb-3">
							  <label><b>Date From</b></label>
							  <input type="date" class="form-control" name="datefrom" value=""/>
							</div>
							<div class="col-md-2 mb-3">
							  <label><b>To Date  </b></label>
							  <input type="date" class="form-control" name="datefrom" value=""/>
							</div>
							 <div class="col-md-3 mb-3">
							 <input type="hidden" name="atype" value="membergroup" />
							  <input type="hidden" name="mtype" value="commodity2" />
							<!--button class="btn btn-sm btn-primary mt-4" name="btnvalueadd" style="margin: 10px;margin-top: 32px !important;" type="submit"><i class="fa fa-filter" aria-hidden="true"></i>&nbsp;Filter</button-->
							<input type="submit" class="btn btn-sm btn-primary mt-4" name="submitva" value="Search" style="margin-top: 31px !important;"/>
							</div>
						  </div>
						  </form>
						  
						   <div id="chart"></div>
							
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
							
							<br/>
							<br/>
					   </div>
					   </div>
						  <script>
						  
						 
				  var chart = c3.generate({
					data: {
						json: [{label: "Agri - Mustard", val:<?php echo $agricommo2; ?>},{label: "Horticulture - Coconut",val:<?php echo $horticommo2; ?>},{label: "Livestocks- Pig",val:<?php echo $livestockscommo2; ?>}],
								keys: {
									x: 'label',
									value: ["val"],
								},
					 /* columns: [
						['data1', 1030, 1200, 1100, 1400, 1150, 1250],
					  //  ['data2', 2130, 2100, 2140, 2200, 2150, 1850]
			//           ['data1', 30, 200, 100, 400, 150, 250],
			//           ['data2', 130, 100, 140, 200, 150, 50]
					  ],*/
					  //row:['data1',22,33,55,66,44,55],
					  type: 'bar',
					  onclick: function (d, element) { console.log("onclick", d, element); },
					  onmouseover: function (d) { console.log("onmouseover", d); },
					  onmouseout: function (d) { console.log("onmouseout", d); }
					},
					axis: {
					  x: {
						type: 'categorized'
					  }
					},
					bar: {
					  width: {
						ratio: 0.3,
			//            max: 30
					  },
					}
				  });
				</script>
						   </div>
							
											<?php } ?>


					<?php if($this->input->get('mtype') == 'commodity3' ){ ?>
						<div class="row">
						<div class="col-md-11"><h5 class="ml-3">Commodity 3</h6><br></div>
						 
						 <div class="col-md-12 row mt-0">
					   <div class="col-md-12">
					   <h6 class="m-0 ml-3">Search</h6><br/>
					   </div>
						<div class="col-md-12">
						<form method="get">
						  <div class="form-row">
							<div class="col-md-2 mb-3">
							  <label for="validationTooltip03"><b>District</b></label>
								<select class="custom-select" name="districtname">
								<option  value="">Choose...</option>
								  <?php foreach($districts as $district){ ?>
									
									<option value="<?php echo $district['district']; ?>"  <?php if($district['district']  == $this->input->get('districtname')){ echo 'selected="selected"'; } ?>><?php echo ucfirst($district['district']); ?></option>
							  
								  <?php } ?>
								
							  </select>
							</div>
							<div class="col-md-2 mb-3">
							  <label for="validationTooltip04"><b>Block</b></label>
							   <select class="custom-select" name="blockname">
									<option value="">Choose...</option>
									<?php foreach($blocks as $block){ ?>
										
										<option value="<?php echo $block['block']; ?>" <?php if($block['block']  ==  $this->input->get('blockname') ){ echo 'selected="selected"'; } ?>><?php echo ucfirst($block['block']); ?></option>
								  
									  <?php } ?>
								  </select>
							</div>
							
								<div class="col-md-2 mb-3">
								  <label><b>Date From</b></label>
								  <input type="date" class="form-control" name="datefrom" value=""/>
								</div>
								<div class="col-md-2 mb-3">
								  <label><b>To Date  </b></label>
								  <input type="date" class="form-control" name="datefrom" value=""/>
								</div>
								 <div class="col-md-3 mb-3">
								 <input type="hidden" name="atype" value="membergroup" />
								  <input type="hidden" name="mtype" value="commodity3" />
								<!--button class="btn btn-sm btn-primary mt-4" name="btnvalueadd" style="margin: 10px;margin-top: 32px !important;" type="submit"><i class="fa fa-filter" aria-hidden="true"></i>&nbsp;Filter</button-->
								<input type="submit" class="btn btn-sm btn-primary mt-4" name="submitva" value="Search" style="margin-top: 31px !important;"/>
								</div>
						  </div>
						  </form>
						  
						   <div id="chart"></div>
							
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
							
							<br/>
							<br/>
					   </div>
					   </div>
						  <script>
						  
						
				  var chart = c3.generate({
					data: {
					json: [{label: "Agri. - Vegetables", val:<?php echo $agricommo3; ?>},{label: "Horticulture - Mango",val:<?php echo $horticommo3; ?>},{label: "Livestocks- Goat",val:<?php echo $livestockscommo3; ?>}],
								keys: {
									x: 'label',
									value: ["val"],
								},
					 /* columns: [
						['data1', 1030, 1200, 1100, 1400, 1150, 1250],
					  //  ['data2', 2130, 2100, 2140, 2200, 2150, 1850]
			//           ['data1', 30, 200, 100, 400, 150, 250],
			//           ['data2', 130, 100, 140, 200, 150, 50]
					  ],*/
					  //row:['data1',22,33,55,66,44,55],
					  type: 'bar',
					  onclick: function (d, element) { console.log("onclick", d, element); },
					  onmouseover: function (d) { console.log("onmouseover", d); },
					  onmouseout: function (d) { console.log("onmouseout", d); }
					},
					axis: {
					  x: {
						type: 'categorized'
					  }
					},
					bar: {
					  width: {
						ratio: 0.3,
			//            max: 30
					  },
					}
				  });
				</script>
						   </div>
							
											<?php } ?>


							<?php if($this->input->get('mtype') == 'commodityall' ){ ?>
							<div class="row">
						  <div class="col-md-11"><h5 class="ml-3">Other All </h6><br></div>
						 
						 <div class="col-md-12 row mt-0">
					   <div class="col-md-12">
					   <h6 class="m-0 ml-3">Search</h6><br/>
					   </div>
						<div class="col-md-12">
						 <form method="get">
						  <div class="form-row">
							<div class="col-md-2 mb-3">
							  <label for="validationTooltip03"><b>District</b></label>
								<select class="custom-select" name="districtname">
								<option  value="">Choose...</option>
								  <?php foreach($districts as $district){ ?>
									
									<option value="<?php echo $district['district']; ?>"  <?php if($district['district']  == $this->input->get('districtname')){ echo 'selected="selected"'; } ?>><?php echo ucfirst($district['district']); ?></option>
							  
								  <?php } ?>
								
							  </select>
							</div>
							<div class="col-md-2 mb-3">
							  <label for="validationTooltip04"><b>Block</b></label>
							 <select class="custom-select" name="blockname">
								<option value="">Choose...</option>
								<?php foreach($blocks as $block){ ?>
									
									<option value="<?php echo $block['block']; ?>" <?php if($block['block']  ==  $this->input->get('blockname') ){ echo 'selected="selected"'; } ?>><?php echo ucfirst($block['block']); ?></option>
							  
								  <?php } ?>
							  </select>
							</div>
							
							<div class="col-md-2 mb-3">
							  <label><b>Date From</b></label>
							  <input type="date" class="form-control" name="datefrom" value=""/>
							</div>
				            <div class="col-md-2 mb-3">
							  <label><b>To Date  </b></label>
							  <input type="date" class="form-control" name="datefrom" value=""/>
							</div>
							<div class="col-md-3 mb-3">
							 <input type="hidden" name="atype" value="membergroup" />
							 <input type="hidden" name="mtype" value="commodityall" />
							<!--button class="btn btn-sm btn-primary mt-4" name="btnvalueadd" style="margin: 10px;margin-top: 32px !important;" type="submit"><i class="fa fa-filter" aria-hidden="true"></i>&nbsp;Filter</button-->
							<input type="submit" class="btn btn-sm btn-primary mt-4" name="submitva" value="Search" style="margin-top: 31px !important;"/>
							</div>
				
						  </div>
						  </form>
						  
						   <div id="chart"></div>
							
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
							
							<br/>
							<br/>
					   </div>
					   </div>
						  <script>
				  var chart = c3.generate({
					data: {
					json: [{label: "Agri. - Paddy", val:0},{label: "Horticulture - Green vegetables",val:0},{label: "Livestocks- Pig, BYP, Duck",val:0},{label: "Fishery - Catfish(Magur)",val:0},{label: "Sericulture- Eri",val:0}],
								keys: {
									x: 'label',
									value: ["val"],
								},
					 /* columns: [
						['data1', 1030, 1200, 1100, 1400, 1150, 1250],
					  //  ['data2', 2130, 2100, 2140, 2200, 2150, 1850]
			//           ['data1', 30, 200, 100, 400, 150, 250],
			//           ['data2', 130, 100, 140, 200, 150, 50]
					  ],*/
					  //row:['data1',22,33,55,66,44,55],
					  type: 'bar',
					  onclick: function (d, element) { console.log("onclick", d, element); },
					  onmouseover: function (d) { console.log("onmouseover", d); },
					  onmouseout: function (d) { console.log("onmouseout", d); }
					},
					axis: {
					  x: {
						type: 'categorized'
					  }
					},
					bar: {
					  width: {
						ratio: 0.3,
			//            max: 30
					  },
					}
				  });
				</script>
						   </div>
											<?php } ?>



				<?php } ?>
				
				<?php if($this->input->get('atype') == 'commodity'){ ?>
				
			<div class="row">
			  <div class="col-md-11"><h5 class="ml-3">Commodity Details</h6><br></div>
			 
			 <div class="col-md-12 row mt-0">
		   <div class="col-md-12">
		   <h6 class="m-0 ml-3">Search</h6><br/>
		   </div>
		    <div class="col-md-12">
			<form method="get">
			  <div class="form-row">
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip03"><b>District</b></label>
						<select class="custom-select" name="districtname">
					<option  value="">Choose...</option>
					  <?php foreach($districts as $district){ ?>
						
						<option value="<?php echo $district['district']; ?>"  <?php if($district['district']  == $this->input->get('districtname')){ echo 'selected="selected"'; } ?>><?php echo ucfirst($district['district']); ?></option>
				  
					  <?php } ?>
					
				  </select>
				  <div class="invalid-tooltip">
					Please select a valid Block.
				  </div>
				</div>
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip04"><b>Block</b></label>
				 <select class="custom-select" name="blockname">
					<option value="">Choose...</option>
					<?php foreach($blocks as $block){ ?>
						
						<option value="<?php echo $block['block']; ?>" <?php if($block['block']  ==  $this->input->get('blockname') ){ echo 'selected="selected"'; } ?>><?php echo ucfirst($block['block']); ?></option>
				  
					  <?php } ?>
				  </select>
				  <div class="invalid-tooltip">
					Please select a valid Block.
				  </div>
				</div>
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip04"><b>Commodity Category</b></label>
				  <select class="custom-select" id="validationTooltip04" required="">
					<option selected="" disabled="" value="">Choose...</option>
					<option>Agri Commodity</option>
					<option>Horticulture</option>
					<option>Livestock</option>
				  </select>
				  <div class="invalid-tooltip">
					Please select a valid Commodity.
				  </div>
				</div>
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip05"><b>Sub Category</b></label>
				  <select class="custom-select" id="validationTooltip04" required="">
					<option selected="" disabled="" value="">Choose...</option>
					<option>Paddy</option>
					<option>Vegetables</option>
					<option>Potato</option>
				  </select>
				  <div class="invalid-tooltip">
					Please provide a valid Sub Category.
				  </div>
				</div>
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip05"><b>Name of commodity</b></label>
				  <select class="custom-select" id="validationTooltip04" required="">
					<option selected="" disabled="" value="">Choose...</option>
					<option>Paddy</option>
					<option>Vegetables</option>
					<option>Potato</option>
				  </select>
				  <div class="invalid-tooltip">
					Please provide a valid Sub Category.
				  </div>
				</div>
				<div class="col-md-2 mb-3">
				  <label><b>Date From</b></label>
				  <input type="date" class="form-control" name="datefrom" value=""/>
				</div>
				<div class="col-md-2 mb-3">
				  <label><b>To Date  </b></label>
				  <input type="date" class="form-control" name="datefrom" value=""/>
				</div>
				 <div class="col-md-3 mb-3">
				 <input type="hidden" name="atype" value="commodity" />
				<!--button class="btn btn-sm btn-primary mt-4" name="btnvalueadd" style="margin: 10px;margin-top: 32px !important;" type="submit"><i class="fa fa-filter" aria-hidden="true"></i>&nbsp;Filter</button-->
				<input type="submit" class="btn btn-sm btn-primary mt-4" name="submitva" value="Search" style="margin-top: 31px !important;"/>
				</div>
			  </div>
			  </form>
			  
			  <div class="row">
			  <div class="col-sm-6 table-responsive" >
                  <table id="taskTable" class="table table-bordered table-width dataTable no-footer">
                    <thead>
                      <tr>                         
                        <th>District</th>
                        <th>Block</th>                       
						<th>Name of commodity</th>
						<th>Qty of commodity</th>

                      </tr>
                    </thead>
                    <tbody>
				   
                    </tbody>
                  </table>
				  
                </div>
				
				 <div class="col-sm-6 table-responsive" >
				 <h6 class="m-0 ml-3"><b>Commodity v/s Qty.</b></h6><br/>
				   <div id="chart"></div>
				
				 </div>
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
				
				<br/>
				<br/>
		   </div>
		   </div>
            <script>
      var chart = c3.generate({
        data: {
		json: [{label: "Groundnut", val:0},{label: "Paddy",val:0},{label: "Green Vegetables, Potato, Tomato",val:0},{label: "Pork",val:0},{label: "Water melon, starwberry, Pumpkin, Potato, Tomato,",val:0},{label: "Others",val:0}],
                    keys: {
                        x: 'label',
                        value: ["val"],
                    },
         /* columns: [
            ['data1', 1030, 1200, 1100, 1400, 1150, 1250],
          //  ['data2', 2130, 2100, 2140, 2200, 2150, 1850]
//           ['data1', 30, 200, 100, 400, 150, 250],
//           ['data2', 130, 100, 140, 200, 150, 50]
          ],*/
		  //row:['data1',22,33,55,66,44,55],
          type: 'bar',
          onclick: function (d, element) { console.log("onclick", d, element); },
          onmouseover: function (d) { console.log("onmouseover", d); },
          onmouseout: function (d) { console.log("onmouseout", d); }
        },
        axis: {
          x: {
            type: 'categorized'
          }
        },
        bar: {
          width: {
            ratio: 0.3,
//            max: 30
          },
        }
      });
    </script>
			   </div>
				<?php } ?>
				
				
						<?php if($this->input->get('atype') == 'valueaddition'){ ?>
				
			<div class="row">
			  <div class="col-md-11"><h5 class="ml-3">Value Addition Details</h6><br></div>
			 
			 <div class="col-md-12 row mt-0">
		   <div class="col-md-12">
		   <h6 class="m-0 ml-3">Search</h6><br/>
		   </div>
		    <div class="col-md-12">
			<form method="get">
			  <div class="form-row">
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip03"><b>District</b></label>
					<select class="custom-select" name="districtname">
					<option  value="">Choose...</option>
					  <?php foreach($districts as $district){ ?>
						
						<option value="<?php echo $district['district']; ?>"  <?php if($district['district']  == $this->input->get('districtname')){ echo 'selected="selected"'; } ?>><?php echo ucfirst($district['district']); ?></option>
				  
					  <?php } ?>
					
				  </select>
				  <div class="invalid-tooltip">
					Please select a valid Block.
				  </div>
				</div>
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip04"><b>Block</b></label>
				  <select class="custom-select" name="blockname">
					<option value="">Choose...</option>
					<?php foreach($blocks as $block){ ?>
						
						<option value="<?php echo $block['block']; ?>" <?php if($block['block']  ==  $this->input->get('blockname') ){ echo 'selected="selected"'; } ?>><?php echo ucfirst($block['block']); ?></option>
				  
					  <?php } ?>
				  </select>
				  <div class="invalid-tooltip">
					Please select a valid Block.
				  </div>
				</div>
				<div class="col-md-2 mb-3">
				  <label><b>Date From</b></label>
				  <input type="date" class="form-control" name="datefrom" value=""/>
				</div>
				<div class="col-md-2 mb-3">
				  <label><b>To Date  </b></label>
				  <input type="date" class="form-control" name="datefrom" value=""/>
				</div>
				<div class="col-md-3 mb-3">
				 <input type="hidden" name="atype" value="valueaddition" />
				<!--button class="btn btn-sm btn-primary mt-4" name="btnvalueadd" style="margin: 10px;margin-top: 32px !important;" type="submit"><i class="fa fa-filter" aria-hidden="true"></i>&nbsp;Filter</button-->
				<input type="submit" class="btn btn-sm btn-primary mt-4" name="submitva" value="Search" style="margin-top: 31px !important;"/>
				</div>
			  </div>
			  </form>
			  
			   <div id="chart"></div>
				
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
				
				<br/>
				<br/>
		   </div>
		   </div>
              <script>
      var chart = c3.generate({
        data: {
		json: [{label: "Drying", val:<?php echo count($dryingno); ?>},{label: "Grading",val:<?php echo count($gradingno); ?>},{label: "Sorting",val:<?php echo count($sortingno); ?>},{label: "Processing",val:<?php echo count($processingno); ?>},{label: "Storing",val:<?php echo count($storingno); ?>},{label: "Packaging",val:<?php echo count($packagingno); ?>},{label: "Labelling",val:<?php echo count($labellingno); ?>},{label: "Weighing",val:<?php echo count($weighingno); ?>},{label: "Collective marketing",val:<?php echo count($cmno); ?>},{label: "Others",val:<?php echo count($othersno); ?>}],
                    keys: {
                        x: 'label',
                        value: ["val"],
                    },
         /* columns: [
            ['data1', 1030, 1200, 1100, 1400, 1150, 1250],
          //  ['data2', 2130, 2100, 2140, 2200, 2150, 1850]
//           ['data1', 30, 200, 100, 400, 150, 250],
//           ['data2', 130, 100, 140, 200, 150, 50]
          ],*/
		  //row:['data1',22,33,55,66,44,55],
          type: 'bar',
          onclick: function (d, element) { console.log("onclick", d, element); },
          onmouseover: function (d) { console.log("onmouseover", d); },
          onmouseout: function (d) { console.log("onmouseout", d); }
        },
        axis: {
          x: {
            type: 'categorized'
          }
        },
        bar: {
          width: {
            ratio: 0.3,
//            max: 30
          },
        }
      });
    </script>
			   </div>
				<?php } ?>
				
				
		<?php if($this->input->get('atype') == 'bor'){ ?>
				
			<div class="row">
			  <div class="col-md-11"><h5 class="ml-3">Book of Records Details</h6><br></div>
			 
			 <div class="col-md-12 row mt-0">
		   <div class="col-md-12">
		   <h6 class="m-0 ml-3">Search</h6><br/>
		   </div>
		    <div class="col-md-12">
			  <form>
			  <div class="form-row">
			
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip03"><b>District</b></label>
					<select class="custom-select" name="districtname">
					<option  value="">Choose...</option>
					  <?php foreach($districts as $district){ ?>
						
						<option value="<?php echo $district['district']; ?>"  <?php if($district['district']  == $this->input->get('districtname')){ echo 'selected="selected"'; } ?>><?php echo ucfirst($district['district']); ?></option>
				  
					  <?php } ?>
					
				  </select>
				  <div class="invalid-tooltip">
					Please select a valid Block.
				  </div>
				</div>
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip04"><b>Block</b></label>
				  <select class="custom-select" name="blockname">
					<option value="">Choose...</option>
					<?php foreach($blocks as $block){ ?>
						
						<option value="<?php echo $block['block']; ?>" <?php if($block['block']  ==  $this->input->get('blockname') ){ echo 'selected="selected"'; } ?>><?php echo ucfirst($block['block']); ?></option>
				  
					  <?php } ?>
				  </select>
				  <div class="invalid-tooltip">
					Please select a valid Block.
				  </div>
				</div>
				<div class="col-md-2 mb-3">
				  <label><b>Date From</b></label>
				  <input type="date" class="form-control" name="datefrom" value=""/>
				</div>
				<div class="col-md-2 mb-3">
				  <label><b>To Date  </b></label>
				  <input type="date" class="form-control" name="datefrom" value=""/>
				</div>
				<div class="col-md-2 mb-3">
				 <input type="hidden" name="atype" value="bor" />
				<!--button class="btn btn-sm btn-primary mt-4" name="btnvalueadd" style="margin: 10px;margin-top: 32px !important;" type="submit"><i class="fa fa-filter" aria-hidden="true"></i>&nbsp;Filter</button-->
				<input type="submit" class="btn btn-sm btn-primary mt-4" name="submitva" value="Search" style="margin-top: 31px !important;"/>
				</div>
			
			  </div>
			    </form>
				
			  <div class="row">
			  <div class="col-sm-6 table-responsive" >
                  <table id="taskTable" class="table table-bordered table-width dataTable no-footer">
                    <thead>
                      <tr> 
						<th>No</th>	
						<th>PG Name</th>								
                        <th>Types of Record Books Maintained</th>
                        <th>Block</th>
                        <th>District</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php $row=1; foreach($getpglist as $pg){ ?>
						
					<tr>
					<td><?php echo $row; ?>.</td>
					<td><?php echo strtoupper($pg['pgname']); ?>.</td>
					<td><?php echo strtoupper($pg['BOR']).','.strtoupper($pg['ABOR']); ?></td>
					
					<td><?php echo ucfirst($pg['district']); ?></td>
					<td><?php echo ucfirst($pg['block']); ?></td>
					</tr>
						
					<?php $row++; }
					
					?>
				    
                    </tbody>
                  </table>
				  
                </div>
				
				 <div class="col-sm-6 table-responsive" >
				 <h6 class="m-0 ml-3"><b> Qty. v/s Types of Record Books</b></h6><br/>
				 
				 <div id="chart"></div>
				 </div>
				</div>
                <footer class="panel-footer">
				
				    <script>
					  var chart = c3.generate({
						data: {
						json: [{label: "Minutes of the Meeting Book", val:<?php echo count($book1); ?>},{label: "Bank Book for all transactions*",val:<?php echo count($book2); ?>},{label: "Saving Register*",val:<?php echo count($book3); ?>},{label: "Purchase Sale and Stock Register*",val:<?php echo count($book4); ?>},{label: "Stock Movement Register*",val:<?php echo count($book5); ?>},{label: "Bill Book and Receipt Book*	",val:<?php echo count($book6); ?>},{label: "Entry Cash Book*",val:<?php echo count($book7); ?>},{label: "Weighing",val:<?php echo count($book8); ?>},{label: "Loan Ledger*",val:<?php echo count($book9); ?>}],
									keys: {
										x: 'label',
										value: ["val"],
									},
						 /* columns: [ ,{label: "Additional Book of Record as per requirement*",val:6}
							['data1', 1030, 1200, 1100, 1400, 1150, 1250],
						  //  ['data2', 2130, 2100, 2140, 2200, 2150, 1850]
				//           ['data1', 30, 200, 100, 400, 150, 250],
				//           ['data2', 130, 100, 140, 200, 150, 50]
						  ],*/
						  //row:['data1',22,33,55,66,44,55],
						  type: 'bar',
						  onclick: function (d, element) { console.log("onclick", d, element); },
						  onmouseover: function (d) { console.log("onmouseover", d); },
						  onmouseout: function (d) { console.log("onmouseout", d); }
						},
						axis: {
						  x: {
							type: 'categorized'
						  }
						},
						bar: {
						  width: {
							ratio: 0.3,
				//            max: 30
						  },
						}
					  });
					</script>
				
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
				
				<br/>
				<br/>
		   </div>
		   </div>
          
			   </div>
				<?php } ?>
				
				
			<?php if($this->input->get('atype') == 'monthlybussiness'){ ?>
				
			<div class="row">
			  <div class="col-md-11"><h5 class="ml-3">Monthly Business Details</h6><br></div>
			 
			 <div class="col-md-12 row mt-0">
		   <div class="col-md-12">
		   <h6 class="m-0 ml-3">Search</h6><br/>
		   </div>
		    <div class="col-md-12">
			  <div class="form-row">
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip03"><b>District</b></label>
				<select class="custom-select" name="districtname">
					<option  value="">Choose...</option>
					  <?php foreach($districts as $district){ ?>
						
						<option value="<?php echo $district['district']; ?>"  <?php if($district['district']  == $this->input->get('districtname')){ echo 'selected="selected"'; } ?>><?php echo ucfirst($district['district']); ?></option>
				  
					  <?php } ?>
					
				  </select>
				</div>
				<div class="col-md-2 mb-3">
				 <label for="validationTooltip03"><b>Block</b></label>
				  <select class="custom-select" name="blockname">
					<option value="">Choose...</option>
					<?php foreach($blocks as $block){ ?>
						
						<option value="<?php echo $block['block']; ?>" <?php if($block['block']  ==  $this->input->get('blockname') ){ echo 'selected="selected"'; } ?>><?php echo ucfirst($block['block']); ?></option>
				  
					  <?php } ?>
				  </select>
				</div>
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip04"><b>Commodity Category</b></label>
				  <select class="custom-select" id="validationTooltip04" required="">
					<option selected="" disabled="" value="">Choose...</option>
					<option>Agri Commodity</option>
					<option>Horticulture</option>
					<option>Livestock</option>
				  </select>
				  <div class="invalid-tooltip">
					Please select a valid Commodity.
				  </div>
				</div>
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip05"><b>Sub Category</b></label>
				  <select class="custom-select" id="validationTooltip04" required="">
					<option selected="" disabled="" value="">Choose...</option>
					<option>Paddy</option>
					<option>Vegetables</option>
					<option>Potato</option>
				  </select>
				  <div class="invalid-tooltip">
					Please provide a valid Sub Category.
				  </div>
				</div>
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip05"><b>Name of commodity</b></label>
				  <select class="custom-select" id="validationTooltip04" required="">
					<option selected="" disabled="" value="">Choose...</option>
					<option>Paddy</option>
					<option>Vegetables</option>
					<option>Potato</option>
				  </select>
				  <div class="invalid-tooltip">
					Please provide a valid Sub Category.
				  </div>
				</div>
					<div class="col-md-2 mb-3">
				  <label><b>Date From</b></label>
				  <input type="date" class="form-control" name="datefrom" value=""/>
				</div>
				
				 <div class="col-md-3 mb-3">
				 <input type="hidden" name="atype" value="monthlybussiness" />
				<!--button class="btn btn-sm btn-primary mt-4" name="btnvalueadd" style="margin: 10px;margin-top: 32px !important;" type="submit"><i class="fa fa-filter" aria-hidden="true"></i>&nbsp;Filter</button-->
				<input type="submit" class="btn btn-sm btn-primary mt-4" name="submitva" value="Search" style="margin-top: 31px !important;"/>
				</div>
				
			  </div>
			   <div class="row" >
			  <div class="col-sm-6 table-responsive" >
                  <table id="taskTable" class="table table-bordered table-width dataTable no-footer">
                    <thead>
                      <tr>                         
                        <th>District</th>
                        <th>Block</th>
                        <th>Procurement Qty.</th>
                        <th>Sales Qty.</th>
						<th>Name of commodity</th>
                      </tr>
                    </thead>
                    <tbody>
				   
                    </tbody>
                  </table>
				  
                </div>
				<div class="col-sm-6 table-responsive" >
				 <h6 class="m-0 ml-3"><b> Commodity v/s Qty.</b></h6><br/>
				 
				 <div id="chart"></div>
				 </div>
				 </div>
                <footer class="panel-footer">
				
				     <!--script>
					  var chart = c3.generate({
						data: {
						json: [{label: "Bhindi", Procurementqty:10, Salesqty:10},{label: "Petty",Procurementqty:16, Salesqty:10},{label: "Groundnut",Procurementqty:3, Salesqty:10}],
									keys: {
										x: 'label',
										value: ["Procurementqty","Salesqty"],
									},
						 /* columns: [
							['data1', 1030, 1200, 1100, 1400, 1150, 1250],
						  //  ['data2', 2130, 2100, 2140, 2200, 2150, 1850]
				//           ['data1', 30, 200, 100, 400, 150, 250],
				//           ['data2', 130, 100, 140, 200, 150, 50]
						  ],*/
						  //row:['data1',22,33,55,66,44,55],
						  type: 'bar',
						  onclick: function (d, element) { console.log("onclick", d, element); },
						  onmouseover: function (d) { console.log("onmouseover", d); },
						  onmouseout: function (d) { console.log("onmouseout", d); }
						},
						axis: {
						  x: {
							type: 'categorized'
						  }
						},
						bar: {
						  width: {
							ratio: 0.3,
				//            max: 30
						  },
						}
					  });
					</script-->
					  <script>
					  var chart = c3.generate({
						data: {
						json: [{label: "Proc. Qty", value:0},{label: "Sales Qty.",value:0}],
									keys: {
										x: 'label',
										value: ["value"],
									},
						 /* columns: [
							['data1', 1030, 1200, 1100, 1400, 1150, 1250],
						  //  ['data2', 2130, 2100, 2140, 2200, 2150, 1850]
				//           ['data1', 30, 200, 100, 400, 150, 250],
				//           ['data2', 130, 100, 140, 200, 150, 50]
						  ],*/
						  //row:['data1',22,33,55,66,44,55],
						  type: 'bar',
						  onclick: function (d, element) { console.log("onclick", d, element); },
						  onmouseover: function (d) { console.log("onmouseover", d); },
						  onmouseout: function (d) { console.log("onmouseout", d); }
						},
						axis: {
						  x: {
							type: 'categorized'
						  }
						},
						bar: {
						  width: {
							ratio: 0.3,
				//            max: 30
						  },
						}
					  });
					</script>
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
				
				<br/>
				<br/>
		   </div>
		   </div>
          
			   </div>
				<?php } ?>
				
				
			<?php if($this->input->get('atype') == 'mtd'){ ?>
				
			<div class="row">
			  <div class="col-md-11"><h5 class="ml-3">Monthly Transactional Details</h6><br></div>
			 
			 <div class="col-md-12 row mt-0">
		   <div class="col-md-12">
		   <h6 class="m-0 ml-3">Search</h6><br/>
		   </div>
		    <div class="col-md-12">
			<form method="get">
			  <div class="form-row">
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip03"><b>District</b></label>
					<select class="custom-select" name="districtname">
					<option  value="">Choose...</option>
					  <?php foreach($districts as $district){ ?>
						
						<option value="<?php echo $district['district']; ?>"  <?php if($district['district']  == $this->input->get('districtname')){ echo 'selected="selected"'; } ?>><?php echo ucfirst($district['district']); ?></option>
				  
					  <?php } ?>
					
				  </select>
				</div>
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip04"><b>Block</b></label>
				  <select class="custom-select" name="blockname">
					<option value="">Choose...</option>
					<?php foreach($blocks as $block){ ?>
						
						<option value="<?php echo $block['block']; ?>" <?php if($block['block']  ==  $this->input->get('blockname') ){ echo 'selected="selected"'; } ?>><?php echo ucfirst($block['block']); ?></option>
				  
					  <?php } ?>
				  </select>
				</div>
				<div class="col-md-2 mb-3">
				  <label><b>Date From</b></label>
				  <input type="date" class="form-control" name="datefrom" value=""/>
				</div>
				<div class="col-md-3 mb-3">
				 <input type="hidden" name="atype" value="valueaddition" />
				<!--button class="btn btn-sm btn-primary mt-4" name="btnvalueadd" style="margin: 10px;margin-top: 32px !important;" type="submit"><i class="fa fa-filter" aria-hidden="true"></i>&nbsp;Filter</button-->
				<input type="submit" class="btn btn-sm btn-primary mt-4" name="submitva" value="Search" style="margin-top: 31px !important;"/>
				</div>
			  </div>
			  </form>
			  <div class="row">
			  <div class="col-sm-6 table-responsive" >
                  <table id="taskTable" class="table table-bordered table-width dataTable no-footer">
                    <thead>
                      <tr>      
						<th>Block</th>
						<th>Distict</th>
                        <th>Total Reciepts</th>
                        <th>Total Expenditure </th>
                       
                      </tr>
                    </thead>
                    <tbody>
				   
                    </tbody>
                  </table>
				  
                </div>
				<div class="col-sm-6">
				<h6 class="m-0 ml-3"><b>Reciepts v/s Expenditure.</b></h6>
				 <div id="chart"></div>
				 </div>
                <footer class="panel-footer">
				  <script>
					  var chart = c3.generate({
						data: {
						json: [{label: "Reciept1", value:0},{label: "Reciept2",value:0},{label: "Reciept3",value:0},{label: "Reciept4",value:0},{label: "Reciept5",value:0}],
									keys: {
										x: 'label',
										value: ["value"],
									},
						 /* columns: [
							['data1', 1030, 1200, 1100, 1400, 1150, 1250],
						  //  ['data2', 2130, 2100, 2140, 2200, 2150, 1850]
				//           ['data1', 30, 200, 100, 400, 150, 250],
				//           ['data2', 130, 100, 140, 200, 150, 50]
						  ],*/
						  //row:['data1',22,33,55,66,44,55],
						  type: 'bar',
						  onclick: function (d, element) { console.log("onclick", d, element); },
						  onmouseover: function (d) { console.log("onmouseover", d); },
						  onmouseout: function (d) { console.log("onmouseout", d); }
						},
						axis: {
						  x: {
							type: 'categorized'
						  }
						},
						bar: {
						  width: {
							ratio: 0.3,
				//            max: 30
						  },
						}
					  });
					</script>
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
				
				<br/>
				<br/>
		   </div>
		   </div>
          
			   </div>
				<?php } ?>
				
				
						<?php if($this->input->get('atype') == 'newmemberadded'){ ?>
				
			<div class="row">
			  <div class="col-md-11"><h5 class="ml-3">New Member Entry Details</h6><br></div>
			 
			 <div class="col-md-12 row mt-0">
		   <div class="col-md-12">
		   <h6 class="m-0 ml-3">Search</h6><br/>
		   </div>
		    <div class="col-md-12">
			<form method="get">
			  <div class="form-row">
				<div class="col-md-2 mb-3">
				  <label><b>District</b></label>
					<select class="custom-select" name="districtname">
					<option  value="">Choose...</option>
					  <?php foreach($districts as $district){ ?>
						
						<option value="<?php echo $district['district']; ?>"  <?php if($district['district']  == $this->input->get('districtname')){ echo 'selected="selected"'; } ?>><?php echo ucfirst($district['district']); ?></option>
				  
					  <?php } ?>
					
				  </select>
				</div>
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip04"><b>Block</b></label>
				 <select class="custom-select" name="blockname">
					<option value="">Choose...</option>
					<?php foreach($blocks as $block){ ?>
						
						<option value="<?php echo $block['block']; ?>" <?php if($block['block']  ==  $this->input->get('blockname') ){ echo 'selected="selected"'; } ?>><?php echo ucfirst($block['block']); ?></option>
				  
					  <?php } ?>
				  </select>
				</div>
				
				<div class="col-md-2 mb-3">
				  <label><b>Date From</b></label>
				  <input type="date" class="form-control" name="datefrom" value=""/>
				</div>
				
				<div class="col-md-3 mb-3">
				 <input type="hidden" name="atype" value="newmemberadded" />
				<!--button class="btn btn-sm btn-primary mt-4" name="btnvalueadd" style="margin: 10px;margin-top: 32px !important;" type="submit"><i class="fa fa-filter" aria-hidden="true"></i>&nbsp;Filter</button-->
				<input type="submit" class="btn btn-sm btn-primary mt-4" name="submitva" value="Search" style="margin-top: 31px !important;"/>
				</div>
			  </div>
			  </form>
			  
			  <div class="row">
			  <div class="col-sm-6 table-responsive" >
                  <table id="taskTable" class="table table-bordered table-width dataTable no-footer">
                    <thead>
                      <tr>                         
                        <th>District</th>
                        <th>Block</th>
                        <th>Monthly</th>
                        <th>Annually</th>
                      </tr>
                    </thead>
                    <tbody>
				   
                    </tbody>
                  </table>
				  
				 </div>
				 <div class="col-sm-6" >
				 <div id="chart"></div>
				 </div>
				 </div>
				 </div>
				
                <footer class="panel-footer">
				  <script>
					  var chart = c3.generate({
						data: {
						json: [{label: "Jan", value:0},{label: "Feb",value:0},{label: "Mar",value:0},{label: "Apr",value:0},{label: "May",value:0}],
									keys: {
										x: 'label',
										value: ["value"],
									},
						 /* columns: [
							['data1', 1030, 1200, 1100, 1400, 1150, 1250],
						  //  ['data2', 2130, 2100, 2140, 2200, 2150, 1850]
				//           ['data1', 30, 200, 100, 400, 150, 250],
				//           ['data2', 130, 100, 140, 200, 150, 50]
						  ],*/
						  //row:['data1',22,33,55,66,44,55],
						  type: 'bar',
						  onclick: function (d, element) { console.log("onclick", d, element); },
						  onmouseover: function (d) { console.log("onmouseover", d); },
						  onmouseout: function (d) { console.log("onmouseout", d); }
						},
						axis: {
						  x: {
							type: 'categorized'
						  }
						},
						bar: {
						  width: {
							ratio: 0.3,
				//            max: 30
						  },
						}
					  });
					</script>
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
				
				<br/>
				<br/>
		   </div>
		   </div>
				<?php } ?>
				
				
			<?php if($this->input->get('atype') == 'trainingrecords'){ ?>
				
			<div class="row">
			  <div class="col-md-11"><h5 class="ml-3">Training Records Details</h6><br></div>
			 
			 <div class="col-md-12 row mt-0">
		   <div class="col-md-12">
		   <h6 class="m-0 ml-3">Search</h6><br/>
		   </div>
		    <div class="col-md-12">
			  <form method="get">
			  <div class="form-row">
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip03"><b>District</b></label>
					<select class="custom-select" name="districtname">
					<option  value="">Choose...</option>
					  <?php foreach($districts as $district){ ?>
						
						<option value="<?php echo $district['district']; ?>"  <?php if($district['district']  == $this->input->get('districtname')){ echo 'selected="selected"'; } ?>><?php echo ucfirst($district['district']); ?></option>
				  
					  <?php } ?>
					
				  </select>
				  <div class="invalid-tooltip">
					Please select a valid Block.
				  </div>
				</div>
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip04"><b>Block</b></label>
				   <select class="custom-select" name="blockname">
					<option value="">Choose...</option>
					<?php foreach($blocks as $block){ ?>
						
						<option value="<?php echo $block['block']; ?>" <?php if($block['block']  ==  $this->input->get('blockname') ){ echo 'selected="selected"'; } ?>><?php echo ucfirst($block['block']); ?></option>
				  
					  <?php } ?>
				  </select>
				  <div class="invalid-tooltip">
					Please select a valid Block.
				  </div>
				</div>
				<div class="col-md-2 mb-3">
				  <label><b>Date From</b></label>
				  <input type="date" class="form-control" name="datefrom" value=""/>
				</div>
				<div class="col-md-2 mb-3">
				  <label><b>To Date  </b></label>
				  <input type="date" class="form-control" name="datefrom" value=""/>
				</div>
				<div class="col-md-2 mb-3">
				 <input type="hidden" name="atype" value="trainingrecords" />
				<!--button class="btn btn-sm btn-primary mt-4" name="btnvalueadd" style="margin: 10px;margin-top: 32px !important;" type="submit"><i class="fa fa-filter" aria-hidden="true"></i>&nbsp;Filter</button-->
				<input type="submit" class="btn btn-sm btn-primary mt-4" name="submitva" value="Search" style="margin-top: 31px !important;"/>
				</div>
			  </form>
			  </div>
			  
			  <div class="row">
			  <div class="col-sm-6 table-responsive" >
                  <table id="taskTable" class="table table-bordered table-width dataTable no-footer">
                    <thead>
                      <tr>                         
                        <th>S.No</th>
						<th>PG</th>
                        <th>Types of Training</th>
						<th>Distict</th>						
						<th>Block</th>
                      </tr>
                    </thead>
					
					<tbody>
					<?php $row=1; foreach($getpglist as $pg){ ?>
						
					<tr>
					<td><?php echo $row; ?>.</td>
					<td><?php echo strtoupper($pg['pgname']); ?></td>
					<td><?php if($pg['TLAgriculture'] != ''){ echo '<b>Agriculture : </b>'.strtoupper($pg['TLAgriculture']).'<br/>'; } ?>
					<?php if($pg['TLOthers'] != ''){ echo '<b>Others : </b>'.strtoupper($pg['TLOthers']).'<br/>'; } ?>
					<?php if($pg['TLHorticulture'] != ''){ echo '<b>Horticulture : </b>'.strtoupper($pg['TLHorticulture']).'<br/>'; } ?>
					<?php if($pg['TLLivestock'] != ''){ echo '<b>Livestock : </b>'.strtoupper($pg['TLLivestock']).'<br/>'; } ?>
					<?php if($pg['TLFishery'] != ''){ echo '<b>Fishery : </b>'.strtoupper($pg['TLFishery']).'<br/>'; } ?>
					<?php if($pg['TLSericulture'] != ''){ echo '<b>Sericulture : </b>'.strtoupper($pg['TLSericulture']).'<br/>'; } ?></td>
					<td><?php echo ucfirst($pg['district']); ?></td>
					<td><?php echo ucfirst($pg['block']); ?></td>
					</tr>
						
					<?php $row++; }
					
					?>
				   
                  </table>
				  
                </div>
				
				
				
				
				  
                
				
             <div class="col-sm-6 table-responsive" >
				 <h6 class="m-0 ml-3"><b>Qty v/s Types of Training.</b></h6><br/>
				   <div id="chart"></div>
				
				 </div>
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
				
				<br/>
				<br/>
		   </div>
		   </div>
            <script>
      var chart = c3.generate({
        data: {
		json: [{label: "Agricuture", val:<?php echo $TLAgriculturecount; ?>},{label: "Horticulture",val:<?php echo $TLHorticulturecount; ?>},{label: "Livestocks",val:<?php echo $TLLivestockcount; ?>},{label: "Fishery",val:<?php echo $TLFisherycount; ?>},{label: "Sericulture,",val:<?php echo $TLSericulturecount; ?>},{label: "Others",val:<?php echo $TLOtherscount; ?>}],
                    keys: {
                        x: 'label',
                        value: ["val"],
                    },
         /* columns: [
            ['data1', 1030, 1200, 1100, 1400, 1150, 1250],
          //  ['data2', 2130, 2100, 2140, 2200, 2150, 1850]
//           ['data1', 30, 200, 100, 400, 150, 250],
//           ['data2', 130, 100, 140, 200, 150, 50]
          ],*/
		  //row:['data1',22,33,55,66,44,55],
          type: 'bar',
          onclick: function (d, element) { console.log("onclick", d, element); },
          onmouseover: function (d) { console.log("onmouseover", d); },
          onmouseout: function (d) { console.log("onmouseout", d); }
        },
        axis: {
          x: {
            type: 'categorized'
          }
        },
        bar: {
          width: {
            ratio: 0.3,
//            max: 30
          },
        }
      });
    </script>
			   </div>
				<?php } ?>
				
				
						<?php if($this->input->get('atype') == 'financialstatements'){ ?>
				
			<div class="row">
			  <div class="col-md-11"><h5 class="ml-3">Financial Statements Details</h6><br></div>
			 
			 <div class="col-md-12 row mt-0">
		   <div class="col-md-12">
		   <h6 class="m-0 ml-3">Search</h6><br/>
		   </div>
		    <div class="col-md-12">
			 <form method="get">
			  <div class="form-row">
			 
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip03"><b>District</b></label>
					<select class="custom-select" name="districtname">
					<option  value="">Choose...</option>
					  <?php foreach($districts as $district){ ?>
						
						<option value="<?php echo $district['district']; ?>"  <?php if($district['district']  == $this->input->get('districtname')){ echo 'selected="selected"'; } ?>><?php echo ucfirst($district['district']); ?></option>
				  
					  <?php } ?>
					
				  </select>
				  <div class="invalid-tooltip">
					Please select a valid Block.
				  </div>
				</div>
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip04"><b>Block</b></label>
				    <select class="custom-select" name="blockname">
					<option value="">Choose...</option>
					<?php foreach($blocks as $block){ ?>
						
						<option value="<?php echo $block['block']; ?>" <?php if($block['block']  ==  $this->input->get('blockname') ){ echo 'selected="selected"'; } ?>><?php echo ucfirst($block['block']); ?></option>
				  
					  <?php } ?>
				  </select>
				  <div class="invalid-tooltip">
					Please select a valid Block.
				  </div>
				</div>
				<div class="col-md-2 mb-3">
				  <label><b>Date From</b></label>
				  <input type="date" class="form-control" name="datefrom" value=""/>
				</div>
				<div class="col-md-2 mb-3">
				  <label><b>To Date  </b></label>
				  <input type="date" class="form-control" name="datefrom" value=""/>
				</div>
				<div class="col-md-2 mb-3">
				 <input type="hidden" name="atype" value="financialstatements" />
				<!--button class="btn btn-sm btn-primary mt-4" name="btnvalueadd" style="margin: 10px;margin-top: 32px !important;" type="submit"><i class="fa fa-filter" aria-hidden="true"></i>&nbsp;Filter</button-->
				<input type="submit" class="btn btn-sm btn-primary mt-4" name="submitva" value="Search" style="margin-top: 31px !important;"/>
				</div>
				
			  </div>
			  </form>
			  <div class="row">
			  
			 
			  <div class="col-sm-6 table-responsive" >
                  <table id="taskTable" class="table table-bordered table-width dataTable no-footer">
                    <thead>
                      <tr>                         
                        <th>District</th>
                        <th>Block</th>
                        <th>Cash In Hand</th>
                        <th>Cash In Bank</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php
                    foreach($getpglist as $pg){ ?>
						
					<tr>
					<td><?php  echo ucfirst($pg['district']); ?></td>
					<td><?php  echo ucfirst($pg['block']); ?></td>
					<td><?php  echo $pg['cb_cihcb']; ?></td>
					<td><?php  echo $pg['cb_cihbb']; ?></td>					
					</tr>
						
						
					<?php }

					?>
				    
                    </tbody>
                  </table>
				  
                </div>
				
				 <div class="col-sm-6" >
				 <div id="chart"></div>
				 </div>
				 </div>
				
                <footer class="panel-footer">
				  <script>
					  var chart = c3.generate({
						data: {
						json: [{label: "Cash In Hand", value:<?php echo (int)$cb_cihcb[0]['cihcbcount']; ?>},{label: "Cash In Bank",value:<?php echo (int)$cb_cihbb[0]['cihbbcount']; ?>}],
									keys: {
										x: 'label',
										value: ["value"],
									},
						 /* columns: [
							['data1', 1030, 1200, 1100, 1400, 1150, 1250],
						  //  ['data2', 2130, 2100, 2140, 2200, 2150, 1850]
				//           ['data1', 30, 200, 100, 400, 150, 250],
				//           ['data2', 130, 100, 140, 200, 150, 50]
						  ],*/
						  //row:['data1',22,33,55,66,44,55],
						  type: 'bar',
						  onclick: function (d, element) { console.log("onclick", d, element); },
						  onmouseover: function (d) { console.log("onmouseover", d); },
						  onmouseout: function (d) { console.log("onmouseout", d); }
						},
						axis: {
						  x: {
							type: 'categorized'
						  }
						},
						bar: {
						  width: {
							ratio: 0.3,
				//            max: 30
						  },
						}
					  });
					</script>
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
				
				<br/>
				<br/>
		   </div>
		   </div>
          
			   </div>
				<?php } ?>
				
								
			<?php if($this->input->get('atype') == 'closingbalance'){ ?>
				
			<div class="row">
			  <div class="col-md-11"><h5 class="ml-3">Closing Balance Details</h6><br></div>
			 
			 <div class="col-md-12 row mt-0">
		   <div class="col-md-12">
		   <h6 class="m-0 ml-3">Search</h6><br/>
		   </div>
		    <div class="col-md-12">
			<form method="get">
			  <div class="form-row">
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip03"><b>District</b></label>
					<select class="custom-select" name="districtname">
					<option  value="">Choose...</option>
					  <?php foreach($districts as $district){ ?>
						
						<option value="<?php echo $district['district']; ?>"  <?php if($district['district']  == $this->input->get('districtname')){ echo 'selected="selected"'; } ?>><?php echo ucfirst($district['district']); ?></option>
				  
					  <?php } ?>
					
				  </select>
				  <div class="invalid-tooltip">
					Please select a valid Block.
				  </div>
				</div>
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip04"><b>Block</b></label>
				  <select class="custom-select" name="blockname">
					<option value="">Choose...</option>
					<?php foreach($blocks as $block){ ?>
						
						<option value="<?php echo $block['block']; ?>" <?php if($block['block']  ==  $this->input->get('blockname') ){ echo 'selected="selected"'; } ?>><?php echo ucfirst($block['block']); ?></option>
				  
					  <?php } ?>
				  </select>
				  <div class="invalid-tooltip">
					Please select a valid Block.
				  </div>
				</div>
				<div class="col-md-2 mb-3">
				  <label><b>Date From</b></label>
				  <input type="date" class="form-control" name="datefrom" value=""/>
				</div>
				<div class="col-md-3 mb-3">
				 <input type="hidden" name="atype" value="closingbalance" />
				<!--button class="btn btn-sm btn-primary mt-4" name="btnvalueadd" style="margin: 10px;margin-top: 32px !important;" type="submit"><i class="fa fa-filter" aria-hidden="true"></i>&nbsp;Filter</button-->
				<input type="submit" class="btn btn-sm btn-primary mt-4" name="submitva" value="Search" style="margin-top: 31px !important;"/>
				</div>
				</form>
			  </div>
			  
			 		  <div class="row">
			  <div class="col-sm-6 table-responsive" >
                  <table id="taskTable" class="table table-bordered table-width dataTable no-footer">
                    <thead>
                      <tr>                         
                        <th>District</th>
                        <th>Block</th>
						<th>PG</th>
                        <th>Cash In Hand</th>
                        <th>Cash In Bank</th>
						<th>Payment yet to made producers member</th>
						<th>Payment yet to recieved producers member</th>
                      </tr>
                    </thead>
                    <tbody>
					
					<?php $row=1; foreach($getpglist as $pg){ ?>
						
					<tr>
					<td><?php echo ucfirst($pg['district']); ?></td>
					<td><?php echo ucfirst($pg['block']); ?></td>
					<td><?php echo ucfirst($pg['pgname']); ?></td>
					<td><?php echo strtoupper($pg['cb_cihcb']); ?></td>
					<td><?php echo strtoupper($pg['cb_cihbb']); ?></td>
					<td><?php echo strtoupper($pg['cb_frombuyer']); ?></td>
					<td><?php echo strtoupper($pg['cb_payproducermember']); ?></td>
					
					
					</tr>
						
					<?php $row++; }
					
					?>
				  
                    </tbody>
                  </table>
				  
                </div>
				
				 <div class="col-sm-6" >
				 <div id="chart"></div>
				 </div>
				 </div>
				
                <footer class="panel-footer">
				  <script>
					  var chart = c3.generate({
						data: {
						json: [{label: "Cash In Hand", value:<?php echo (int)$cb_cihcb[0]['cihcbcount']; ?>},{label: "Cash In Bank",value:<?php echo (int)$cb_cihbb[0]['cihbbcount']; ?>},{label: "Payment yet to made producers member",value:<?php echo (int)$cb_payproducermember[0]['aspayproducermembercount']; ?>},{label: "Payment yet to recieved producers member",value:<?php echo (int)$cb_frombuyer[0]['frombuyercount']; ?>}],
									keys: {
										x: 'label',
										value: ["value"],
									},
						 /* columns: [
							['data1', 1030, 1200, 1100, 1400, 1150, 1250],
						  //  ['data2', 2130, 2100, 2140, 2200, 2150, 1850]
				//           ['data1', 30, 200, 100, 400, 150, 250],
				//           ['data2', 130, 100, 140, 200, 150, 50]
						  ],*/
						  //row:['data1',22,33,55,66,44,55],
						  type: 'bar',
						  onclick: function (d, element) { console.log("onclick", d, element); },
						  onmouseover: function (d) { console.log("onmouseover", d); },
						  onmouseout: function (d) { console.log("onmouseout", d); }
						},
						axis: {
						  x: {
							type: 'categorized'
						  }
						},
						bar: {
						  width: {
							ratio: 0.3,
				//            max: 30
						  },
						}
					  });
					</script>
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
				
				<br/>
				<br/>
		   </div>
		   </div>
          
			   </div>
				<?php } ?>
				
				
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
<div class="modal" id="uploadModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title">Upload Task File</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
	  <div class="row">
	   <div class="col-md-12">
	   <div class="form-group">
	   <label>Upload Govt. Officials Files</label>
	   <input type="file" name="docname"  />
	   </div>				
      </div>
	  <div class="col-md-12">
	  <div class="form-group">
	  <textarea class="form-control" type="text" name="remark" placeholder="Remark"></textarea>
	  </div>
	  </div>
 </div>
   </div>
      <!-- Modal footer -->
      <div class="modal-footer">
	    <button type="submit" class="btn btn-success">Upload</button>
      </div>  
  </div>

</div>
</div>

<?php } ?>

<script>
$(document).ready(function(){
 $('#districtname').change(function(){
  var districtname = $('#districtname').val();

  if(districtname != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>admin-manager/fetch_block",
    method:"POST",
    data:{districtname:districtname},
    success:function(data)
    {
		 // alert(data);
     $('#blocknames').html(data);
     
    }
   });
  }
  else
  {
   $('#districtname').html('<option value="">Select Distict</option>');
   $('#blocknames').html('<option value="">Select Block</option>');
  }
 });

 $('#blocknames').change(function(){
  var blocknames = $('#blocknames').val();
  //alert(blocknames);
  if(blocknames != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>admin-manager/fetchgrampachayat",
    method:"POST",
    data:{blocknames:blocknames},
    success:function(data)
    {
		//alert(data);
     $('#grampachayatname').html(data);
    }
   });
  }
  else
  {
   $('#grampachayatname').html('<option value="">Select Gram Pachayat</option>');
  }
 });
 
});
</script>