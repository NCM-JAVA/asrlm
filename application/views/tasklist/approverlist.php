    <section>
        <div class="container-fluid">
            <div class="row list-view">
                <div class="col-md-3">
                    <div class="sidebar">
                      <ul>
						<li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list" >State List</a></li-->
						<li><a href="<?php echo base_url(); ?>task-list">Task List</a></li>
						<li><a href="<?php echo base_url(); ?>task-manager " >Task Manager</a></li>
						
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
                                    <h4 class="m-0"> Approval Manager </h4>
                                </div>
                            </div>
                        </div>
						
						<center>
  <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error"  style="color:green;font-weight:bolder;">'.$msg.'</label></fieldset>';?>
			  <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset"><label class="error" style="color:green;font-weight:bolder;">'.$this->input->get('msg').'</label></fieldset>'; }
			   ?>
			  </center>
  <div class="row m-0 pl-2 pr-2">
                        <div class="col-md-12 mt-2">
                            <table width="100%" class="table table-striped table-bordered table-width dataTable no-footer" id="taskTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Uploaded By</th>
										<th scope="col">Task ID/Name</th>
										<th scope="col">Document</th>
										<th scope="col">Verified By</th>
                                        <th scope="col">Last Updated</th>
                                        <th scope="col">Action</th>
										<th width="20%" >Remarks</th>
										
                                    </tr>
                                </thead>
                                <tbody>
								<?php 
								
								$CI =&get_instance();
								$CI->load->model('main_model');
							
								foreach($cdocs as $cdoc){ 
								
								  $taskname= $CI->main_model->getpatenttaskname($cdoc['taskid']);
								  //print_r($taskname);
								  if(count($taskname) > 0){
									  
									  $taskname = $taskname[0]['taskname'];
								  }
								  else
								  {
									  $taskname = '';
								  }
								  ?>
									 <tr>
                                        <td><?php echo ucfirst($cdoc['name']); ?><br/><a href="mailto:<?php echo $cdoc['email']; ?>"><?php echo  $cdoc['email']; ?></a><br/><a href="callto:<?php echo  $cdoc['mobile']; ?>"><?php echo $cdoc['mobile']; ?></a></td>
										 <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;"><?php echo $cdoc['taskid'].' / '.$taskname; ?></td>
										 <td><a href="<?php echo base_url().'uploads/documents/'.$cdoc['document']; ?>"><?php echo  $cdoc['document']; ?></a></td>
										 <td><?php echo ucfirst($cdoc['vname']); ?><br/><a href="mailto:<?php echo $cdoc['vemail']; ?>"><?php echo  $cdoc['vemail']; ?></a><br/><a href="callto:<?php echo  $cdoc['vmobile']; ?>"><?php echo $cdoc['vmobile']; ?></a></td>
										 <td><?php echo  $cdoc['lastupdated'];?></td>
                                        <td style="word-wrap: break-word;min-width: 126px;max-width: 126px;"><?php if($cdoc['isapproved'] == true){ echo '<b style="color:green;">Approved</b>'; }else if($cdoc['isrejected'] == true ){ echo '<b style="color:red;">Rejected</b>';  } else { ?>  <button class="btn btn-sm btn-success" style="padding: 5px 10px 5px 10px;color:#fff;margin:5px;" onclick="doapproved(<?php echo $cdoc['docid'] ?>,'Verify')">Approve</button>
										<button class="btn btn-sm btn-danger" onclick="doreject(<?php echo $cdoc['docid'] ?>,'Reject')" style="padding: 5px 10px 5px 10px;color:#fff;margin:5px;">Reject</button> <?php } ?></td>
										<td style="word-wrap: break-word;min-width: 160px;max-width: 160px;"><?php echo  $cdoc['remarks'];?></td>
                                        
                                    </tr>
								
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
	
	<div class="modal" id="verifyModal">
					<form method="post" id="vfrm" action="" enctype="multipart/form-data">
					<input type="hidden" name="utaskid" value="">
					<input type="hidden" name="pagetype" value="approver" />
					  <div class="modal-dialog">
						<div class="modal-content">
						  <!-- Modal Header -->
						  <div class="modal-header">
							<h5 class="modal-title"><b id="dtype"></b> Document </h5>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						  </div>
						  <!-- Modal body -->
						  <div class="modal-body">
						  <div class="row">
						  <input type="hidden" name="docid" id="docid" value=""  />
						  <div class="col-md-12">
						  <div class="form-group">
						  <textarea class="form-control" type="text" name="remark" placeholder="Remark" required></textarea>
						  </div>
						  </div>
					 </div>
					   </div>
						  <!-- Modal footer -->
						  <div class="modal-footer">
							<button type="submit"  name="submitdata" value="Submit" class="btn btn-success">Submit</button>
							
						  </div>  
					  </div>
					</div>
					</form>
				</div>
<script>

function doapproved(docid){
	
var r = confirm("Do you want to Approved this Document ?");
if (r == true) {
window.location.href= '<?php echo base_url(); ?>tcbp/approvedoc/'+docid;
} else {
  return false;
}

}


function doreject(docid,type){
 
var r = confirm("Do you want to Reject this Document entry?");
if (r == true) {
	$('#dtype').text(type);
	//$('#docid').value(docid);
	document.getElementById('docid').value = docid;
	$('#verifyModal').modal('show');
	//$('#vfrm').action('<?php echo base_url(); ?>tcbp/rejectdoc/'+docid);
	$('#vfrm').attr('action','<?php echo base_url(); ?>tcbp/rejectdoc/'+docid);
//window.location.href= '<?php echo base_url(); ?>tcbp/rejectdoc/'+docid;
} else {
  return false;
}
}
</script>