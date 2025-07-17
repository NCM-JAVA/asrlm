<section>
	<div class="container-fluid">
		<div class="row list-view">
			<div class="col-md-2">
				<div class="sidebar">
					<ul>
						
						
						<li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>memberpanel">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel" >Approver Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel">Verifier Panel</a></li>
						<li><a href="<?php echo base_url(); ?>form-filling"> PG Panel</a></li>
						<li><a href="<?php echo base_url(); ?>buyerdetails-list"> Buyer Details List</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						<li><a href="<?php echo base_url(); ?>admin-manager"> Reports</a></li>	
						<?php // if($this->session->userdata('admin_session')['user_group_id'] == '3'){ ?><li><a href="<?php echo base_url(); ?>users-list">Users List</a></li>  <?php // } ?>
						<!--li><a href="<?php echo base_url(); ?>change-password">Change Password</a></li-->
						
						<li><a href="<?php echo base_url(); ?>upload-data" class="active">Upload/Sync Records(CSV)</a></li>
                         					
						<li><a href="<?php echo base_url(); ?>login/logout">Logout</a></li>
				</div>
			</div>
			<div class="col-md-10">
				<div class="content content-box">
					<div class="card-header">
				<div class="row">
				<div class="col-md-12">
							<h4 class="m-0"> Upload Data/Records</h4>
						</div>												
						</div>
	       </div>
		   <center>  <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error">'.$msg.'</label></fieldset>';?>
			  <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">'.$this->input->get('msg').'</label></fieldset>'; }?></center>
			
		   <form class="row pr-4 pl-4" method="post" enctype='multipart/form-data'>
		   
		   <div class="col-md-12 row mt-4">
		   <div class="col-md-3">
		   <h6 class="m-0"> Blocks & GP Lists</h6>
		   </div>
		    <div class="col-md-9">
			<div class="custom-file">
			  <input type="file" name="uploadblocks"  class="custom-file-input" id="uploadblocks">
			  <label class="custom-file-label" for="customFile">Choose file</label>
			  <a href="<?php echo base_url(); ?>uploads/samplecsv/locations.csv">Sample File</a>
			</div>
		   </div>
		   </div>
		   
		   <div class="col-md-12 row mt-5">
		   <div class="col-md-3">
		   <h6 class="m-0"> PG Profiling data entry</h6>
		   </div>
		    <div class="col-md-9">
			<div class="custom-file">
			  <input type="file" name="uploadpg" class="custom-file-input" id="customFile2">
			  <label class="custom-file-label" for="customFile2">Choose file</label>
			   <a href="<?php echo base_url(); ?>uploads/samplecsv/pg_profile.csv">Sample File</a>
			   <br/><b style="font-size:13px;">*Before upload PG profile confirm  first update Blocks & GP Lists (District	Block	Gram Panchayat	Village) respectively as per new PG data</b>
			</div>
		   </div>
		   </div>
		   
		   <div class="col-md-12 row mt-5">
		   <div class="col-md-3">
		   <h6 class="m-0"> Member Data</h6>
		   </div>
		    <div class="col-md-9">
			<div class="custom-file">
			  <input type="file" name="uploadmember" class="custom-file-input" id="customFile3">
			  <label class="custom-file-label" for="customFile">Choose file</label>
			   <a href="<?php echo base_url(); ?>uploads/samplecsv/memberdataall20-02.csv">Sample File</a>
			      <br/><b style="font-size:13px;">*Before upload Member Date Make sure PG name should be same exactly as per PG Profile name entry</b>
			</div>
		   </div>
		   </div>
		   
		   <div class="col-md-12 row mt-5">
		   <div class="col-md-3">
		   <h6 class="m-0"> Commodity</h6>
		   </div>
		    <div class="col-md-9">
			<div class="custom-file">
			  <input type="file" class="custom-file-input" id="customFile">
			  <label class="custom-file-label" for="customFile">Choose file</label>
			</div>
		   </div>
		   </div>
		   
	
		   
		    
		   
		 
		
		    <div class="col-md-12 text-center mt-4 mt-5 mb-5">
				<button class="btn btn-primary" type="submit" name="submit" value="Signup" >Upload</button>
		    </div>				
			</form>
			</div>
			</div>
			</div>
			
			
		</div>		
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

</script>