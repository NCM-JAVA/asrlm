<section>
	<div class="container-fluid">
		<div class="row list-view">
			<?php 	if($this->uri->segment(2) == '' || $this->uri->segment(2) == '0'  || $this->uri->segment(2) == '1' ){ ?>
			<div class="col-md-2">
				<div class="sidebar">
					<ul>
						 

						<li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>memberpanel">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel">Approver Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel" class="active">Verifier Panel</a></li>
						<li><a href="<?php echo base_url(); ?>form-filling"> PG Panel</a></li>
						<li><a href="<?php echo base_url(); ?>buyerdetails-list"> Buyer Details List</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						<li><a href="<?php echo base_url(); ?>admin-manager"> Reports</a></li>	
						<?php // if($this->session->userdata('admin_session')['user_group_id'] == '3'){ ?><li><a href="<?php echo base_url(); ?>users-list">Users List</a></li>  <?php // } ?>
						<!--li><a href="<?php echo base_url(); ?>change-password">Change Password</a></li-->
						
						<li><a href="<?php echo base_url(); ?>upload-data">Upload/Sync Records(CSV)</a></li>
                         					
						<li><a href="<?php echo base_url(); ?>login/logout">Logout</a></li>
					</ul>
				</div>
			</div>
			
			
			<div class="col-md-10">
				<div class="content content-box">
					<div class="card-header">
				<div class="row">
				<div class="col-md-12">
							<h4 class="m-0"> Verifier Task List</h4>
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
			<input type="text" class="form-control" placeholder="Search PG Names" required="">
			 </div>
		   </div>
		   </div>
		  
		   
		   <div class="col-md-12 row mt-4">
		   <div class="col-md-12">
		  <table class="table p-3 table-bordered table-striped">
		  <thead>
			<tr>
			  
			  <th scope="col">S.No.</th>
			  <th scope="col">PG Name</th>
			  <th scope="col" colspan="2">Location</th>
			  <th scope="col">Promoted Under</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <td></td>
			  <td></td>
			  <td style="font-weight:500;" align="center">District</td>			  
			  <td style="font-weight:500;" align="center">Block</td>
			  <td></td>
			</tr>
			<tr>
			  <td>1.</td>
			  <td></td>
			  <td></td>
			  <td></td>
			  <td></td>
			</tr>
			<tr>
			  <td>2.</td>
			  <td></td>
			  <td></td>
			  <td></td>
			  <td></td>
			</tr>
			<tr>
			  <td>3.</td>
			  <td></td>
			  <td></td>
			  <td></td>
			  <td></td>
			</tr>
			<tr>
			  <td>4.</td>
			  <td></td>
			  <td></td>
			  <td></td>
			  <td></td>
			</tr>
		  </tbody>
		</table>
		   </div>
		    
		   </div>
		
		    <div class="col-md-12 text-right mb-1"><br/>
				<button class="btn btn-primary" type="button" name="submit" value="Signup" >View</button>
		    </div>				
			</form>
			</div>
			</div>
			
			<?php } ?>
			</div>
			
			
			
		</div>		
	</div>
	<br/><br/><br/>
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