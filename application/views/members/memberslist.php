    <section>
        <div class="container-fluid">
            <div class="row list-view">
				<div class="col-md-2">
					<?php $this->load->view('include/sidebar'); ?>
				</div>
                <div class="col-md-10">
                    <div class="content content-box pb-3">
					<div class="col-md-12 text-right mb-1 pt-3 pb-3">
						  <button class="btn btn-sm btn-primary" style="padding: 5px 10px 5px 10px;" title="Delete" target ="_blank" onclick="window.location.href='<?php echo base_url() ?>members/memberslist'"><i class="fa fa-refresh" aria-hidden="true"></i></button>&nbsp;
						  <button class="btn btn-success" type="button" name="memberslist" value="Members List" onclick="window.location.href='<?php echo base_url() ?>members/memberslist'">Members List</button>
						<!-- <button class="btn btn-primary" type="button" name="dashboard" value="Dashboard" onclick="window.location.href='<?php echo base_url() ?>members/memberdashboard'">Dashboard</button> -->
						<button class="btn btn-primary" type="button" name="addmember" value="Add Member" onclick="window.location.href='<?php echo base_url() ?>memberpanel'">Add Member</button>
					</div>
                        <div class="card-header m-b-10">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="m-0"> Members List </h4>
                                </div>
                            </div>
                        </div>
						
						<center>
  <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error"  style="color:green;font-weight:bolder;">'.$msg.'</label></fieldset>';?>
			  <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset"><label class="error" style="color:green;font-weight:bolder;">'.$this->input->get('msg').'</label></fieldset>'; }
			   ?>
			  </center>
			  <div class="col-sm-12 table-responsive" >
				 <div class="col-md-12 row mt-4">
				  <div class="col-md-6">
				  </div>
					<div class="col-md-6">
					<form method="post">
					<div class="input-group">			 
					<input type="text" name="searchentry" class="form-control col-md-12" placeholder="Enter Search Text" value="<?php echo $this->input->post('searchentry'); ?>">&nbsp;&nbsp;
					  <button class="btn btn-primary" type="submit" name="searchmembers" value="searchmembers" ><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search</button>
					 </div>
					 </form>
				    </div>
					
				  </div>
                  <table id="taskTable2" class="table table-bordered table-width dataTable no-footer">
                    <thead>
                      <tr>   
						<th>#</th>  
						<th>Name</th>						
                        <th>Producer Group</th>                       
                        <th>SHGName</th>
                        <th>SHGCode</th>
						<th>Location</th>
						<th>Payment Recieved</th>
						<th>Payment Due</th>
						<th>Last Updated</th>
						<th width="10%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php 
					//print_r($getpglist);
					foreach($members as $member){ ?>
					<tr>
					<td><?php echo $member['mid']; ?></td>
					<td><?php echo ucfirst($member['name']); ?></td>
					<td><?php echo ucfirst($member['pgname']); ?></td>					
					<td><?php echo ucfirst($member['SHGname']); ?></td>
					<td><?php echo ucfirst($member['SHGcode']); ?></td>
					<td><?php echo ucfirst($member['district']).'-'.ucfirst($member['block']).'-'.ucfirst($member['grampanchayat']).'-'.ucfirst($member['village']); ?></td>
					<td>₹<?php echo ($member['paymentrecieved'] == '')?' NA':$member['paymentrecieved']; ?></td>
					<td>₹<?php echo ($member['paymentdue'] == '')?' NA':$member['paymentdue']; ?></td>
					<td><?php echo $member['last_updated']; ?></td>
					<td>
						  <!--button class="btn btn-sm btn-primary " style="padding: 5px 10px 5px 10px;" onclick="window.location='<?php echo base_url()."form-filling?editpg=".$member['mid'] ?>' "><i class="fa fa-eye" aria-hidden="true"></i></button>&nbsp;-->
						  <!-- <button class="btn btn-sm btn-success mb-1" style="padding: 4px 8px 4px 8px;font-size: 11px;" title="Download" target ="_blank" onclick="window.location='<?php echo base_url().'reviewmember/'.$member['mid'] ?>'" ><i class="fa fa-download" aria-hidden="true"></i></button> -->
						  <a class="btn btn-sm btn-warning mb-1" href="<?php echo base_url().'memberpanel/'.$member['mid'].'/1'; ?>"  style="padding:4px 8px 4px 8px;color:#fff;font-size: 11px;" title="Edit"><i class="fa fa-edit" aria-hidden="true"></i></a>						  
						  <button class="btn btn-sm btn-primary mb-1" href="#myModal_<?php echo $member['mid']; ?>"" data-toggle="modal"  style="padding:4px 8px 4px 8px;font-size: 11px;" title="Delete" target ="_blank"><i class="fa fa-times" aria-hidden="true"></i></button>
					</td>
					</tr>
					<div id="myModal_<?php echo $member['mid']; ?>" class="modal fade">
							<div class="modal-dialog modal-confirm">
								<div class="modal-content">
									<div class="modal-header">
										<div class="icon-box" style="border: 3px solid red;">
					                  <i class="fa fa-times" aria-hidden="true"></i>
				                          </div>	
                                        										
										<h4 class="modal-title">Are you sure?</h4>	
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
										<p>Do you really want to Delete This Record?</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-sm btn-success" data-dismiss="modal">Cancel</button>
										 
										<button type="button" class="btn btn-sm btn-primary" onclick="window.location='<?php echo base_url().'members/memberslist/delete/'.$member['mid']; ?>'">Delete</button>
									</div>
								</div>
							</div>
						</div> 
					<?php } ?>
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
			 
                </div>
                 </div>
            </div>
        </div>
    </section>
	

