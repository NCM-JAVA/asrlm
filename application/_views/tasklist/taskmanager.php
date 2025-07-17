    <section>
        <div class="container-fluid">
            <div class="row list-view">
                <div class="col-md-3">
                    <div class="sidebar">
                      <ul>
						<li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list" >State List</a></li-->
						<li><a href="<?php echo base_url(); ?>task-list">Task List</a></li>
						<li><a href=" " class="active" >Task Manager</a></li>
						<?php  if($this->session->userdata('admin_session')['user_group_id'] == '3' || $this->session->userdata('admin_session')['user_group_id'] == '1' ){ ?><li><a href="<?php echo base_url(); ?>verifier-manager"  ><b style="padding: 5px 7px;background:rgba(255,255,255,0.4);border-radius:100%;/* width: 23px; */font-size: 13px;"><?php echo $vcount;?></b>&nbsp;Verifier Manager </a></li><?php  } ?>
						<?php  if($this->session->userdata('admin_session')['user_group_id'] == '3' || $this->session->userdata('admin_session')['user_group_id'] == '2'){ ?><li><a href="<?php echo base_url(); ?>approval-manager" class="active"><b style="padding: 5px 7px;background:rgba(255,255,255,0.4);border-radius:100%;/* width: 23px; */font-size: 13px;"><?php echo $acount;?></b>&nbsp;Approval Manager </a></li><?php  } ?>
						<?php  if($this->session->userdata('admin_session')['user_group_id'] == '3'){ ?><li><a href="<?php echo base_url(); ?>users-list">Users List</a></li><?php  } ?>
						<!--li><a href="<?php echo base_url(); ?>change-password" >Change Password</a></li-->
						<li><a href="<?php echo base_url(); ?>login/logout">Logout</a></li>
					</ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="content content-box pb-3">
                        <div class="card-header m-b-10">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="m-0"> Task Manager</h4>
                                </div>
                            </div>
                        </div>
						<center>
  <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error"  style="color:green;font-weight:bolder;">'.$msg.'</label></fieldset>';?>
			  <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset"><label class="error" style="color:green;font-weight:bolder;">'.$this->input->get('msg').'</label></fieldset>'; }?>
			  </center>
<?php  if($this->session->userdata('admin_session')['user_group_id'] != '4'){ ?>
<form class="row m-0 pl-2 pr-2" method="post">

		       <div class="col-md-4" style="padding-right: 0px;">
 <div>
    <input type="text" class="form-control" name="taskname" id="exampleInputTask" aria-describedby="taskHelp" placeholder="Task Name" required="">
  <small id="taskHelp" class="form-text text-danger d-none">Task name is required</small>
  </div>       
  </div> 
    <div class="col-md-3">
<div class="form-group">
<?php //print_r($parenttasks); ?>
    	<select class="form-control" name="ptask" id="ptask">
						<option>--Parent Task--</option>
						<?php foreach($parenttasks as $ptask){ ?>
						<option value="<?php  echo $ptask['id'];?>"><?php  echo ucfirst($ptask['taskname']);?></option>
						<?php } ?>
						
					  </select>
	  <small id="branchHelp" class="form-text text-danger d-none">Please select branch</small>
	   </div>  
  </div> 
    <div class="col-md-3">
 <div>
  <label class="form-text text-danger d-none">Total Participants </label>
    <input type="number" class="form-control" name="totalparticipants" id="totalparticipants" aria-describedby="taskHelp" placeholder="Enter Total Participants" min="1"  required />
 
  </div>  
  </div>   
   <div class="col-md-2">
 <div >
    <button type="submit" name="submitaddtask" class="btn  btn-info">Submit</button>
  </div>       
  </div>  
  </form>
  <?php  } ?>
  <?php //print_r($tcbps); ?>
  <div class="row m-0 pl-2 pr-2">
                        <div class="col-md-12 mt-2">
                            <table class="table table-striped table-bordered table-width dataTable no-footer" id="taskTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Task List Name</th>
										<th scope="col">Parent Tasks</th>
										<th scope="col">Total Participants</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php 
								
								$CI =&get_instance();
								$CI->load->model('main_model');
							
								foreach($tcbps as $tasklist){ 
								
								$taskname= $CI->main_model->getpatenttaskname($tasklist['parenttask']);
								  
								  ?>
									 <tr>
                                        <td><?php echo  $tasklist['taskname'];?></td>
										 <td><?php echo ($tasklist['parenttask'] != 0)?$taskname[0]['taskname']:'';?></td>
										 <td><?php echo $tasklist['totalparticipants'];?></td>
                                        <td>Active</td>
                                        <td><a href="" class="btn-action btn-sm btn-info" data-toggle="modal" data-target="#uploadModa<?php echo $tasklist['id'];?>"><i class="fa fa-gear"></i></a></td>
                                    </tr>
										<!-- Upload File Modal -->
									<div class="modal" id="uploadModa<?php echo $tasklist['id'];?>">
									<form method="post" action="<?php echo base_url();?>task-manager/add" enctype="multipart/form-data">
									<input type="hidden" name="utaskid" value="<?php echo $tasklist['id'];?>">
									  <div class="modal-dialog">
										<div class="modal-content">
										  <!-- Modal Header -->
										  <div class="modal-header">
											<h5 class="modal-title"><?php echo $tasklist['id'];?> Upload Task File </h5>
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										  </div>
										  <!-- Modal body -->
										  <div class="modal-body">
										  <div class="row">
										   <div class="col-md-12">
										   <div class="form-group">
										   <label>Upload Govt. Officials Files</label>
										   <input type="file" name="docname"  required />
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
											<button type="submit"  name="submitdata" value="Submit" class="btn btn-success">Upload</button>
											
										  </div>  
									  </div>
									</div>
									</form>
									</div>
								<?php }
								
								?>
                                   
                            </table>
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