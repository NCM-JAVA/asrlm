    <section>
        <div class="container-fluid">
            <div class="row list-view">
         	  <div class="col-md-2">
				<div class="sidebar">
					<ul>
						
						 <li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>memberpanel" class="active">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel">Verifier Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel">Approver Panel</a></li>
						<li><a href="<?php echo base_url(); ?>admin-manager?atype=producergroupdetails"> PG Panel</a></li>
						<li><a href="<?php echo base_url(); ?>buyerdetails-list"> Buyer Details List</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						<li><a href="<?php echo base_url(); ?>admin-manager"> Reports</a></li>	
						<?php // if($this->session->userdata('admin_session')['user_group_id'] == '3'){ ?><li><a href="<?php echo base_url(); ?>users-list">Users List</a></li>  <?php // } ?>
						<!--li><a href="<?php echo base_url(); ?>change-password">Change Password</a></li-->
						
						<li><a href="<?php echo base_url(); ?>upload-data">Upload/Sync Records(CSV)</a></li>
                         					
						<li><a href="<?php echo base_url(); ?>login/logout">Logout</a></li>
				</div>
			</div>
  		<div class="col-md-10">
				<div class="content content-box">
					<div class="col-md-12 text-right mb-1 pt-3 pb-3">
						<button class="btn btn-primary" type="button" name="memberslist" value="Members List" onclick="window.location.href='<?php echo base_url() ?>members/memberslist'">Members List</button>
						<button class="btn btn-success" type="button" name="dashboard" value="Dashboard" onclick="window.location.href='<?php echo base_url() ?>members/memberdashboard'">Dashboard</button>
						<button class="btn btn-primary" type="button" name="addmember" value="Add Member" onclick="window.location.href='<?php echo base_url() ?>memberpanel'">Add Member</button>
					</div>
					<div class="card-header">
				<div class="row">
				<div class="col-md-12">
							<h4 class="m-0"> Monthly Finance/Strength</h4>
						</div>												
						</div>
	       </div>
		   <center>  <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error">'.$msg.'</label></fieldset>';?>
			  <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">'.$this->input->get('msg').'</label></fieldset>'; }?></center>
			
		   <form class="row pr-4 pl-4" method="post">
		   
		  	<div class="col-md-12">
			  <br><br>
			   <div class="row">
			   <div class="col-md-11"><h6 class="m-0"> MONTHLY STRENGTH OF MEMBERS OF THE PG</h6><br></div>
			   <div class="col-md-1">
			   <a href="#" class="btn-sm btn-info" title="Add Task"><i class="fa fa-plus"></i></a>
			   </div>
			   </div>
			  
			  <table class="table p-3 table-bordered table-striped">
			  <thead>
				<tr>
				  
				  <th scope="col">Number of new members added in PG</th>
				  <th scope="col">Number of members transacted with PG</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <td><input class="form-control" type="text" placeholder=" "><br>
				  <div class="row mt-2"> 
				  
				  <div class="col-md-5"> <label><b>Name</b></label></div>
				  <div class="col-md-6"> <input class="form-control" type="text" placeholder="Name"  ></div>
				   </div>
				  <div class="row mt-2"> 
				 
				  <div class="col-md-5"> <label><b>Husband / Father Name</b></label></div>
				  <div class="col-md-6"> <input class="form-control" type="text" placeholder="Husband / Father Name"  ></div>
				   </div>
				   <div class="row mt-2"> 
				  
				  <div class="col-md-5"> <label><b>Commodity</b></label></div>
				  <div class="col-md-6"> <input class="form-control" type="text" placeholder="Commodity"   ></div>
				   </div>
				  </td>
				  <td><input class="form-control" type="text" placeholder=" "><br>
				  <div class="row mt-2"> 
			 
				  <div class="col-md-5"> <label><b>Name</b></label></div>
				  <div class="col-md-6"> <input class="form-control" type="text" placeholder="Name"  ></div>
				   </div>
				  <div class="row mt-2"> 
				   
				  <div class="col-md-5"> <label><b>Husband / Father Name</b></label></div>
				  <div class="col-md-6"> <input class="form-control" type="text" placeholder="Husband / Father Name"  ></div>
				   </div>
				   <div class="row mt-2"> 
				 
				  <div class="col-md-5"> <label><b>Commodity</b></label></div>
				  <div class="col-md-6"> <input class="form-control" type="text" placeholder="Commodity"   ></div>
				   </div>
				   <div class="row mt-2"> 
				 
				  <div class="col-md-5"> <label><b>Quantity</b></label></div>
				  <div class="col-md-6"> <input class="form-control" type="number" placeholder="Quantity" min="0"  ></div>
				   </div>
				  </td>
				</tr>
				
				<!--tr>
				  <td><input class="form-control" type="text" placeholder=" "></td>
				  <td><input class="form-control" type="text" placeholder=" "></td>
				</tr-->
				
			  </tbody>
			</table>
			
			  <div class="col-md-12 text-right mb-1">
			  <br>
			  <a class="btn btn-primary"  href="<?php echo base_url().'form-filling/7'; ?>" >Previous</a>
				<button class="btn btn-primary" type="button" name="submit" value="Signup" onclick="window.location='<?php echo base_url().'form-filling/9'; ?>'">Next</button>
			  </div>
				  
			
			</div>
						
		   </form>
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