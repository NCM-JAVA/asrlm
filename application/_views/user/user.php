    <section>
        <div class="container-fluid">
            <div class="row list-view">
                <div class="col-md-2">
                    <div class="sidebar">
                     	<ul>
						
						 <li><a href="<?php echo base_url(); ?>user-profile" >Profile</a></li>
						<li><a href="<?php echo base_url(); ?>form-filling">  PG Panel</a></li>
						<li><a href="<?php echo base_url(); ?>memberpanel">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel" >Approver Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel">Verifier Panel</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						 <li><a href="<?php echo base_url(); ?>admin-manager">Reports</a></li>
						<?php // if($this->session->userdata('admin_session')['user_group_id'] == '3'){ ?><li><a href="<?php echo base_url(); ?>users-list"  class="active">Users List</a></li>  <?php // } ?>
						<!--li><a href="<?php echo base_url(); ?>change-password">Change Password</a></li-->
						
						<li><a href="<?php echo base_url(); ?>upload-data">Upload/Sync Records(CSV)</a></li>						
						<li><a href="<?php echo base_url(); ?>login/logout">Logout</a></li>
					</ul>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="content content-box pb-3">
                        <div class="card-header m-b-10">
                            <div class="row">
				<div class="col-md-11">
							<h4 class="m-0"> Register Users</h4>
						</div>
						<div class="col-md-1">
							<a href="<?php  echo base_url();?>register" class="btn-sm btn-info" title="Add Task"><i class="fa fa-plus"></i></a>
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
                
				<?php /* if($this->input->get('msg')){ ?>
				<div class="alert alert-success" id="msg">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <i class="fa fa-ok-sign"></i><strong>Well done!</strong> <?php echo $this->input->get('msg'); ?>	
				</div>
				<?php } */ ?>

				<!-- <div class="col-sm-12"><br>
				  <div class="col-sm-6" style="float:right;margin-right:340px;">
                    <div class="input-group">
                     <input  type="text" id="scan" name="scan" class="input-sm form-control calbarcode" size="20" autocomplete="off" placeholder="Scan QR code" style="height:35px;" >
                      <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="submit" style="height:35px;">Scan!</button>
                      </span>
					   </div>
                    </div>
                  </div><br><br><br>-->
          
                <div class="col-sm-12 table-responsive" >
                  <table id="taskTable" class="table table-bordered table-width dataTable no-footer">
                    <thead>
                      <tr>                         
                        <th>Full Name</th>
                        <th>Email address</th>
                        <th>State</th>
                        <th>Mobile No</th>
						<th>Role</th>
						<th>Last Modified</th>
						<th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
					
					<?php 
					foreach($users as $user ){ ?>
						<tr style="cursor:pointer;background-color: rgba(0, 0, 0, 0.05);">
                      <!--  <td><label class="checkbox m-l m-t-none m-b-none i-checks"><input type="checkbox" name="post[]"><i></i></label></td> -->
                        <td><?php echo $user['name']; ?></td>
						<td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['state']; ?></td>
						<td><?php echo $user['phone']; ?></td>                        
					    <td><?php if($user['user_group_id'] == '1'){ echo ucfirst('verifier'); } else if($user['user_group_id'] == '2'){ echo ucfirst('approver'); }  else if($user['user_group_id'] == '3'){ echo ucfirst('PG Admin'); }  else if($user['user_group_id'] == '4'){ echo ucfirst('Member'); } ?></td>
					    <td><?php echo $user['last_modified']; ?></td>
                        <td>
						  <button  class="btn btn-sm btn-primary" style="padding: 5px 10px 5px 10px;" onclick="window.location='<?php echo base_url().'user-profile/'.$user['id']; ?>'">Edit</button>
						  <button  class="btn btn-sm btn-danger" href="#myModal_<?php echo $user['id']; ?>"" class="trigger-btn" data-toggle="modal" >Delete</button>
						 </td>
                         </tr>
					  						<!-- Modal HTML -->
						<div id="myModal_<?php echo $user ['id']; ?>" class="modal fade">
							<div class="modal-dialog modal-confirm">
								<div class="modal-content">
									<div class="modal-header">
										<div class="icon-box">
					                   <i class="fa fa-times" aria-hidden="true"></i>
				                          </div>	
                                        										
										<h4 class="modal-title">Are you sure?</h4>	
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
										<p>Do you really want to delete these records? This process cannot be undone.</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
										<button type="button" class="btn btn-danger" onclick="window.location='<?php echo base_url().'user/delete/'.$user['id']; ?>'">Delete</button>
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