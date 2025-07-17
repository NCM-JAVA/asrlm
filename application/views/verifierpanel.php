<style>
.btn-close {
    box-sizing: content-box;
    width: 1em;
    height: 1em;
    padding: 0.25em 0.25em;
    color: #000;
    background: transparent url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e) center/1em auto no-repeat;
    border: 0;
    border-radius: 0.25rem;
    opacity: .5;
}
</style>
<section>
	<div class="container-fluid">
		<div class="row list-view">
			<?php 	if($this->uri->segment(2) == '' || $this->uri->segment(2) == '0'  || $this->uri->segment(2) == '1' ){ ?>
			<div class="col-md-2">
				<?php $this->load->view('include/sidebar'); ?>
			</div>
			
			
			<div class="col-md-10">
				<div class="content content-box">
					<div class="card-header">
				<div class="row">
				<div class="col-md-11">
				 <h4 class="m-0"> Verifier List</h4>
				</div>
				<div class="col-md-1">						
				<button class="btn btn-sm btn-primary" style="padding: 5px 10px 5px 10px;" title="Delete" target="_blank" onclick="window.location.href='<?php echo base_url(); ?>verifierpanel'"><i class="fa fa-refresh" aria-hidden="true"></i></button>
				</div>							
				</div>
	       </div>
		   <center>  <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error">'.$msg.'</label></fieldset>';?>
			  <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">'.$this->input->get('msg').'</label></fieldset>'; }?></center>
			
		   <form class="row pr-4 pl-4" method="post">
		    <div class="col-md-12 row">
		   <div class="col-md-12 text-right mb-1"><br/>
		   <h6 class="m-0"> Welcome Verifer</h6><br/>
		   </div>
		    <div class="col-md-12 pr-0 mb-1">
			
			<div class="input-group col-md-3 float-right">			 
			<input type="text" class="form-control" name="searchtxt" value="<?php echo $this->input->post('searchtxt'); ?>" placeholder="Search Member/PG Name" >
			 </div>
		   </div>
		   </div>
		  </form>
		   
		   <div class="col-md-12 row mt-4">
		   <div class="col-md-12">
		  <table class="table p-3 table-bordered table-striped">
		  <thead>
			<tr>
			  <?php // print_r($vdatas); ?>
			  <th scope="col">S.No.</th>
			  <th scope="col">PG Name</th>
			  <th scope="col">Member Name</th>
			  <th scope="col" >District</th>
			    <th scope="col">Block</th>
			  <th scope="col">Action</th>
			  <th scope="col" width="20%">Remark</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php foreach($vdatas as $vdata){ ?>
			<tr>
			  <td><?php echo $vdata['mid']; ?></td>
			  <td><?php echo ucfirst($vdata['pgname']); ?></td>
			  <td><?php echo ucfirst($vdata['membername']); ?></td>
			  <td><?php echo ucfirst($vdata['district']); ?></td>			  
			  <td><?php echo ucfirst($vdata['block']); ?></td>
			  <td style="word-wrap: break-word;font-size:13px;">
			  <?php  if($vdata['isverified'] == true){ echo '<b style="color:#FFC107;">Verified</b><br/>'; } if($vdata['isrejected'] == true ){ echo '<b style="color:red;">Rejected</b>';  }
							if($vdata['isrejected'] == false && $vdata['isverified'] == false) { ?> 
							
							<button class="btn btn-warning btn-sm" style="padding: 5px 10px 5px 10px;color:#fff;backgroud:#4154f1;" onclick="doverify(<?php echo $vdata['mid'] ?>,'Verify')">Verify</button>&nbsp;&nbsp;
							
			 <button class="btn btn-danger btn-sm" style="padding: 5px 10px 5px 10px;color:#fff;" onclick="doreject(<?php echo $vdata['mid'] ?>,'Reject')">Reject</button>
							
							<?php } ?>
						
							</div></td>
			  <td><?php echo '<b>Remarks:</b> &nbsp;'.str_replace('~~',' ',ucfirst($vdata['remarks'])); ?></td>
			</tr>
		  <?php } ?>
		  </tbody>
		</table>
		   </div>
		    
		   </div>
		
		  
			</div>
			</div>
			
			<?php } ?>
			</div>
			
			
			
		</div>		
	</div>
	<br/><br/><br/>
		<div class="modal fade"  id="verifyModal">
		

					<form method="post" id="vfrm" action="" enctype="multipart/form-data">
					<input type="hidden" name="utaskid" value="">
					<input type="hidden" name="pagetype" value="verifier" />
					  <div class="modal-dialog">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title"><b id="dtype"></b> Member </h5>
							<button type="button" class="btn-close fa fa-times-circle-o" data-dismiss="modal" aria-label="Close"></button>
						  </div>
					
						  <div class="modal-body">
						  <div class="row">
						  <input type="hidden" name="memberid" id="memberid" value=""  />
						  <div class="col-md-12">
						  <div class="form-group">
						  <textarea class="form-control" type="text" name="remark" placeholder="Remark" required></textarea>
						  </div>
						  </div>
					 </div>
					   </div>
						  <div class="modal-footer">
							<button type="submit"  name="submitdata" value="Submit" class="btn btn-success">Submit</button>
							
						  </div>  
					  </div>
					</div>
					</form>
				</div>
</section>

<script language='javascript' type='text/javascript'>
    function check(input) {
		
		if(document.getElementById('password').value != ''){
		//alert(document.getElementById('password').value);
        if (input.value != document.getElementById('password').value) {
            input.setCustomValidity('Password Must be Matching.');
			//alert('Password Must be Matching.');
			input.value = '';
			return;
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
		}
    }

function doreject(memberid,type){
 
var r = confirm("Do you want to Reject this Member entry?");
if (r == true) {
	$('#dtype').text(type);
	
	document.getElementById('memberid').value = memberid;
	$('#verifyModal').modal('show');
	//$('#vfrm').action('<?php echo base_url(); ?>tcbp/rejectdoc/'+docid);
	$('#vfrm').attr('action','<?php echo base_url(); ?>rejectmember/'+memberid);
//window.location.href= '<?php echo base_url(); ?>tcbp/rejectdoc/'+docid;
} else {
  return false;
}
}

function doverify(memberid,type){
	
var r = confirm("Do you want to verify this Member ?");
if (r == true) {
//$('#dtype').text(type);
	//$('#verifyModal').modal('show');
	window.location.href= '<?php echo base_url(); ?>verifymember/'+memberid;
} else {
  return false;
}

}
</script>