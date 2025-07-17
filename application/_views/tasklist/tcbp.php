<style>
@media (min-width: 576px){
.modal-dialog {
    max-width: 950px;
    margin: 1.75rem auto;
}
}
.myCollapse {
    display: none;
}
 .in {
  visibility: visible !important;
}
</style>
<section>
	<div class="container-fluid">
		<div class="row list-view">
			<div class="col-md-3">
				<div class="sidebar">
					<ul>
						<li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<!--li><a href="state-list">State List</a></li-->
						<li><a href="<?php echo base_url(); ?>task-list" class="active">Task List</a></li>
						<li><a href="task-manager">Task Manager</a></li>
						<?php  if($this->session->userdata('admin_session')['user_group_id'] == '3' || $this->session->userdata('admin_session')['user_group_id'] == '1' ){ ?><li><a href="<?php echo base_url(); ?>verifier-manager"  ><b style="padding: 5px 7px;background:rgba(255,255,255,0.4);border-radius:100%;/* width: 23px; */font-size: 13px;"><?php echo $vcount;?></b>&nbsp;Verifier Manager </a></li><?php  } ?>
						<?php  if($this->session->userdata('admin_session')['user_group_id'] == '3' || $this->session->userdata('admin_session')['user_group_id'] == '2'){ ?><li><a href="<?php echo base_url(); ?>approval-manager" class="active"><b style="padding: 5px 7px;background:rgba(255,255,255,0.4);border-radius:100%;/* width: 23px; */font-size: 13px;"><?php echo $acount;?></b>&nbsp;Approval Manager </a></li><?php  } ?>
						<?php  if($this->session->userdata('admin_session')['user_group_id'] == '3'){ ?><li><a href="<?php echo base_url(); ?>users-list">Users List</a></li><?php  } ?>
						
						<!--li><a href="change-password">Change Password</a></li-->
						<li><a href="<?php echo base_url(); ?>login/logout">Logout</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-9">
				<div class="content content-box">
				<div class="card-header m-b-10">
				<div class="row">
				<div class="col-md-11">
							<h4 class="m-0"> Task List</h4>
						</div>
						<div class="col-md-1">
							<a href="<?php  echo base_url();?>task-manager" class="btn-sm btn-info" title="Add Task"><i class="fa fa-plus"></i></a>
						</div>	
						</div>
						
						<center>
			  <?php if(isset($msg) && $msg !='') echo '<label class="error"  style="color:green;font-weight:bolder;">'.$msg.'</label>';?>
			  <?php if($this->input->get('msg') == true){ echo '<label class="error" style="color:green;font-weight:bolder;">'.$this->input->get('msg').'</label>'; }?>
			  </center>
	       </div>
		   <div class="row m-0 pl-2 pr-2">
						<div class="col-md-3">
						<strong>State: </strong>
						</div>
						<div class="col-md-3">
						<p> Haryana</p>
						</div>
						<div class="col-md-3">
						<strong>PMU Manager: </strong>
						</div>
						<div class="col-md-3">
						<p> Prashant Bhatt</p>
						</div>
						
						<div class="col-md-3">
						<strong>Business Analyst: </strong>
						</div>
						<div class="col-md-3">
						<p> Pavan Singh</p>
						</div>						
							<div class="col-md-3">
						<strong>State Nodal Officer: </strong>
						</div>
						<div class="col-md-3">
						<p>Janak Patel</p>
						</div>		
</div>							
 <div class="row m-0 pl-2 pr-2">	
						<div class="col-md-12">
							<table class="table table-bordered table-width dataTable no-footer" id="taskTable">
							  <thead>
								<tr>
								  <th scope="col" class="col-md-8">Task List</th>
								  <th scope="col" class="col-md-2">View/Upload</th>
								  <th scope="col" class="col-md-2">Total Uploads</th>
								  <th scope="col" class="col-md-2">PMU Users</th>
								  <th scope="col" class="col-md-2">Total Participants</th>
								  <th scope="col" class="col-md-2">Status</th>
								</tr>
							  </thead>
							  <tbody>
							  <?php foreach($tcbps as $tcbp){ //print_r($tcbp);
								$CI =&get_instance();
								$CI->load->model('main_model');
							  $resultp= $CI->main_model->getnumberparticipantbytask($tcbp['id']);
							 $result= $CI->main_model->getnumberuploadedbytask($tcbp['id']); 
							  $chiltasks = $CI->main_model->tcpcpageentrieschild($tcbp['id']);

							  ?>
							  
							    <tr data-toggle="myCollapse<?php echo $tcbp['id'];?>" data-target=".taskid_<?php echo $tcbp['id'];?>" style="cursor:pointer;background-color: rgba(0, 0, 0, 0.05);">
								  <td class="col-md-7"><?php if(count($chiltasks)){ ?><i class="fa fa-angle-double-down"></i>&nbsp;<?php } ?><?php echo $tcbp['taskname'];  ?></td>
								   <td class="col-md-2">								 
								   <?php if(count($chiltasks) == 0){ ?><a href="" class="btn-action btn-sm btn-info" data-toggle="modal" data-target="#uploadModal<?php echo $tcbp['id'];?>"><i class="fa fa-upload"></i></a><?php } ?>
								   	<!-- Upload File Modal -->
									<div class="modal" id="uploadModal<?php echo $tcbp['id'];?>">
									
									<form method="post" id="frm_<?php echo $tcbp['id'];?>" action="<?php echo base_url();?>task-manager/add" enctype="multipart/form-data">
									<input type="hidden" name="utaskid" value="<?php echo $tcbp['id'];?>">
									  <div class="modal-dialog">
										<div class="modal-content">
										
										  <div class="modal-header">
											<h5 class="modal-title">Upload Task File </h5>
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										  </div>
										
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
										 
										  <div class="modal-footer">
											<button type="submit"  name="submitdata" value="Submit" class="btn btn-success">Upload</button>
											
										  </div>  
									  </div>
									</div>
									</form>
									</div>
									<?php if(count($result) > 0){ ?> 	
								   <a href="" onclick="gettaskdetails(<?php echo $tcbp['id'];?>)" class="btn-action btn-sm btn-info" data-toggle="modal" data-target=""><i class="fa fa-eye"></i></a>
								    <?php } ?>
								  </td>
								  <td class="col-md-1" align="center"><b id="totaluploadsum<?php echo $tcbp['id'];?>">0</b></td>
								  <td class="col-md-1" align="center"><b id="totalparticipentsum<?php echo $tcbp['id'];?>"><?php  echo count($resultp);?></b> <!--/ <b id="sumtotalparticipentcount<?php echo $tcbp['id'];?>"><?php echo $tcbp['totalparticipants'];?></b--></td>
								  <td class="col-md-1" align="center"><b id="sumtotalparticipentcount<?php echo $tcbp['id'];?>"><?php echo $tcbp['totalparticipants'];?></b></td>
								  <td class="col-md-1">
								<?php if(count($chiltasks) <= 0){  if(count($resultp) > 0){ ?> 	<a href="" class="btn-action btn-sm btn-success"><i class="fa fa-check-circle"></i></a> <?php } else { ?>
								<a href="" class="btn-action btn-sm btn-danger"><i class="fa fa-times-circle"></i></a>		<?php } } ?>
								  </td>
							
								 </tr>
								
								  <?php
									$sumtotapuploads = 0;
									$sumtotalparticipent = 0;
									$sumtotalparticipentcount = 0;
									 foreach($chiltasks as $chiltask){

									$childresultp= $CI->main_model->getnumberparticipantbytask($chiltask['id']);
									$childresult= $CI->main_model->getnumberuploadedbytask($chiltask['id']); 
									
									?>
									
								<tr id="taskid_<?php echo $tcbp['id'];?>"  class="myCollapse<?php echo $tcbp['id'];?> taskid_<?php echo $tcbp['id'];?>"  style="visibility: collapse;">
								<td class="col-md-7"><?php echo $chiltask['taskname'];  ?></td>
								<td class="col-md-2">								 
								   <a href="" class="btn-action btn-sm btn-info" data-toggle="modal" data-target="#uploadModa<?php echo $chiltask['id'];?>"><i class="fa fa-upload"></i></a>
								   	<!-- Upload File Modal -->
									<div class="modal" id="uploadModa<?php echo $chiltask['id'];?>">
									<form method="post" action="<?php echo base_url();?>task-manager/add" enctype="multipart/form-data">
									<input type="hidden" name="utaskid" value="<?php echo $chiltask['id'];?>">
									  <div class="modal-dialog">
										<div class="modal-content">
										  <!-- Modal Header -->
										  <div class="modal-header">
											<h5 class="modal-title"><?php echo $chiltask['id'];?> Upload Task File </h5>
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
									<?php if(count($childresult) > 0){ ?> 	
								   <a href="" onclick="gettaskdetails(<?php echo $chiltask['id'];?>)" class="btn-action btn-sm btn-info" data-toggle="modal" data-target=""><i class="fa fa-eye"></i></a>
								    <?php } ?>
								  </td>
								<td class="col-md-1" align="center"><b><?php $sumtotapuploads += count($childresult); echo count($childresult); ?></b>
								<td class="col-md-1" align="center"><b><?php $sumtotalparticipent += count($childresultp); $sumtotalparticipentcount += $chiltask['totalparticipants'];  echo count($childresultp);?> <!--/ <?php echo $chiltask['totalparticipants'];?> --></b></td>
								<td class="col-md-1" align="center"><b><?php echo $chiltask['totalparticipants'];?></b></td>
								<td class="col-md-1">
								<?php if(count($childresultp) > 0){ ?> 	<a href="" class="btn-action btn-sm btn-success"><i class="fa fa-check-circle"></i></a> <?php } else { ?>
								<a href="" class="btn-action btn-sm btn-danger"><i class="fa fa-times-circle"></i></a>		<?php } ?>
								</td>						 
								 
								 </tr>
									<?php  }
								   ?>
							
								<script>
								$(document).on("click", "#submitdata<?php echo $tcbp['id'];?>", function(event){
									document.getElementById("frm_<?php echo $tcbp['id'];?>").submit();
									    event.preventDefault();


								});
								document.getElementById("totaluploadsum<?php echo $tcbp['id'];?>").innerHTML = '<?php echo $sumtotapuploads; ?>';
								document.getElementById("totalparticipentsum<?php echo $tcbp['id'];?>").innerHTML = '<?php echo $sumtotalparticipent; ?>';
								document.getElementById("sumtotalparticipentcount<?php echo $tcbp['id'];?>").innerHTML = '<?php echo $sumtotalparticipentcount; ?>';
								 $("[data-toggle='myCollapse<?php echo $tcbp['id'];?>']").click(function( ev ) {
									ev.preventDefault();
									var target;
									//alert(this.hasAttribute('data-target'));
									
									if (this.hasAttribute('data-target')) {
										target = $(this.getAttribute('data-target'));
										//document.getElementById("taskid_<?php echo $tcbp['id'];?>").style.display = "block";
									} else {
										target = $(this.getAttribute('href'));
										//document.getElementById("taskid_<?php echo $tcbp['id'];?>").style.display = "none";
									};
									target.toggleClass("in");
									//console.log(target.hasClass('in'));
								});
								 </script>
								
							  <?php } ?>
								
								
							  </tbody>
							</table>
						</div>
						<!--div class="col-md-12 text-center mb-1 pb-3">
						<button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#approveRejectModal">Approve/Reject</button>
						</div-->	
						<div class="col-md-12 text-center mb-1 pb-3">
							<br/><br/><br/><br/><br/><br/> 
						</div>	
					
						</div>
						</div>
			</div>
		</div>		
	</div>
</section>


<!-- Approve/Reject Modal -->
<div class="modal" id="approveRejectModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title">Approve/Reject Remark</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
	  <div class="row">
	  <div class="col-md-12">
	  <div class="form-group">
	  <textarea class="form-control" type="text" name="remark" placeholder="Remarks"></textarea>
	  </div>
	  </div>
 </div>
   </div>
      <!-- Modal footer -->
      <div class="modal-footer">
	    <button type="submit" class="btn btn-success">Submit</button>
      </div>  
  </div>
</div>
</div>


<script>
function opensub(id){
	//alert('hii');
	document.getElementById('childtask_'+id).style.display = "block";
}
</script>

			       <!-- Modal HTML -->
					  <div id="myModal_test" class="modal fade">
							<div class="modal-dialog modal-confirm">
								<div class="modal-content">
									<div class="modal-header">
																		
										<h4 class="modal-title">Uploaded Documents :</h4>	
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
										<p id="hms_result"></p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
										<!--button type="button" class="btn btn-danger"  style="background: red;">Reject</button><!--onclick="window.location='<?php echo base_url().'tcbp/reject/'.$datemanag['id']; ?>'"-->
									</div>
								</div>
							</div>
						</div> 
			  <script>
			  
			  function gettaskdetails(tid){
			  $('document').ready(function() {
				 // alert(tid);
			  $('#myModal_test').modal('show');
			  
			  
				$.ajax({
					url: "<?php echo base_url() ?>tcbp/getdocumentsbytasks",
					method: "POST",
					data: {taskid:tid},
					success: function(data){
						$('#hms_result').html(data);
						$('#modal_tableHMS').modal('show');
					}
			 });
	         
			  });
			  }
			  
			  function deldoc(docid){
				  
				var txt;
				var r = confirm("Do you want to Delete this document ?");
				if (r == true) {
				  txt = "You pressed OK!";
				  window.location.href = "<?php  echo base_url().'task-list/deletedoc/'; ?>"+ docid;
				  //  alert(txt);
				} else {
				 // txt = "You pressed Cancel!";
				//    alert(txt);
				}
				  
			  }
			  </script>			  


