<section>
	<div class="container-fluid">
		<div class="row list-view">
 <?php //print_r($memberdetails); ?>
			<?php 	if($this->uri->segment(2) == '' || $this->uri->segment(2) == '0'  || $this->uri->segment(3) == '1' ){ ?>
			<div class="col-md-2">
				<?php $this->load->view('include/sidebar'); ?>
			</div>
			
			
			<div class="col-md-10">
				<div class="content content-box">
				<div class="row col-md-12">
				<h4  class="col-md-6 mt-3"> Edit Member</h4>
				<div class="col-md-6 text-right mb-1 pt-3 pb-3">
						<button class="btn btn-primary" type="button" name="memberslist" value="Members List" onclick="window.location.href='<?php echo base_url() ?>members/memberslist'">Members List</button>
						<!-- <button class="btn btn-primary" type="button" name="dashboard" value="Dashboard" onclick="window.location.href='<?php echo base_url() ?>members/memberdashboard'">Dashboard</button> -->
						<button class="btn btn-success" type="button" name="addmember" value="Add Member" onclick="window.location.href='<?php echo base_url() ?>memberpanel'">Add Member</button>
					</div>
					</div>
					
					<div class="card-header">
				<div class="row">
				<div class="col-md-12">
							<h4 class="m-0"> Basic Details</h4>
						</div>												
						</div>
	       </div>
		   <center>  <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error">'.$msg.'</label></fieldset>';?>
			  <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">'.$this->input->get('msg').'</label></fieldset>'; }?></center>
			
		   <form class="row pr-4 pl-4" method="post">
		    <div class="col-md-12 row">
		   <div class="col-md-3">
		   <h6 class="m-0"> Name of Producer Group*</h6>
		   </div>
		    <div class="col-md-9">
			  <select class="custom-select col-md-12" name="pgid" id="validationTooltip04" required>
					 <option value="">----- Select Producer Group ------</option>
			  <?php foreach($getpglist as $plist){ ?>
			  <option value="<?php echo $plist['pgid']; ?>" <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['pgid'] == $plist['pgid']) {  echo 'selected="selected"'; } } ?> ><?php echo strtoupper($plist['pgname']); ?></option>
				  
			  <?php } ?>
				  </select>
				  <div class="invalid-tooltip">
					Please select a valid Producer Group.
				  </div>
		   </div>
		   </div>
		   
		   <div class="col-md-12 row mt-4">
		   <div class="col-md-3">
		   <h6 class="m-0">Name*</h6>
		   </div>
		    <div class="col-md-9">
			<div class="input-group">			 
			<input type="text" name="name" class="form-control col-md-6" value="<?php echo ($this->uri->segment(3) == true)? $memberdetails[0]['name']:''; ?>" placeholder="Name*" required />
			 </div>
		   </div>
		   </div>
		   
		   <div class="col-md-12 row mt-4">
		   <div class="col-md-3">
		   <h6 class="m-0">SHG Name*</h6>
		   </div>
		    <div class="col-md-9">
			<div class="input-group">			 
			<input type="text" name="shgname" class="form-control col-md-6"  placeholder="SHG Name*" value="<?php echo ($this->uri->segment(3) == true)? $memberdetails[0]['SHGname']:''; ?>"  required />
			 </div>
		   </div>
		   </div>
		    <div class="col-md-12 row mt-4">
		   <div class="col-md-3">
		   <h6 class="m-0">SHG Code*</h6>
		   </div>
		    <div class="col-md-9">
			<div class="input-group">
			<input type="hidden" name="stepno" value="1" />
			<input type="hidden" name="isedit" value="<?php echo ($this->uri->segment(3) == true)? '1':'0'; ?>" />	
			<input type="hidden" name="memberid" value="<?php echo ($this->uri->segment(3) == true)?$this->uri->segment(2):''; ?>" />							
			<input type="text" name="shgcode" class="form-control col-md-2" value="<?php echo ($this->uri->segment(3) == true)? $memberdetails[0]['SHGcode']:''; ?>"  placeholder="SHG Code*" required />
			 </div>
		   </div>
		   </div>
		   
		   <div class="col-md-12 row mt-4">
		   <div class="col-md-3">
		   <h6 class="m-0">Location*</h6>
		   </div>
		    <div class="col-md-9">
			  <div class="form-row">
				<div class="col-md-3 mb-3">
				  <label for="validationTooltip03"><b>District*</b></label>
					<select class="custom-select" id="districtname" name="districtname" required>
					<option  value="">Choose...</option>
					  <?php foreach($districts as $district){ ?>
						
						<option value="<?php echo $district['district']; ?>"  <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['district'] == $district['district']) {  echo 'selected="selected"'; } } ?>><?php echo ucfirst($district['district']); ?></option>
				  
					  <?php } ?>					
				  </select>	
				  <div class="invalid-tooltip">
					Please select a valid Block.
				  </div>
				</div>
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip04"><b>Block*</b></label>
				  <select class="custom-select" id="blocknames" name="blockname" required>
					<option value="">Choose...</option>
					<?php if($this->uri->segment(3) == true){ if($memberdetails[0]['block'] == true) {  echo ' <option value="'.$memberdetails[0]['block'].'"  selected="selected">'.ucfirst($memberdetails[0]['block']).'</option>'; } } ?>
				  </select>
				  <div class="invalid-tooltip">
					Please select a valid Block.
				  </div>
				</div>
			<div class="col-md-3 mb-3">
				  <label for="validationTooltip04"><b>Gram Panchayat*</b></label>
				  <select class="custom-select" id="grampachayatname" name="grampanchayatname" required>
				  <option value="">Choose...</option>
					<?php if($this->uri->segment(3) == true){ if($memberdetails[0]['grampanchayat'] == true) {  echo ' <option value="'.$memberdetails[0]['grampanchayat'].'"  selected="selected">'.ucfirst($memberdetails[0]['grampanchayat']).'</option>'; } } ?>
				  </select>
				
				</div>
				<div class="col-md-3 mb-3">
				  <label for="validationTooltip05"> <b>Village</b> <b>(multiple selection)*</b> </label>
				  <select name="villagename[]" class="custom-select" id="villagename" multiple required>
					<option value="">Choose...</option>
					<?php if($this->uri->segment(3) == true){ if($memberdetails[0]['village'] == true) { $villages = explode(',',$memberdetails[0]['village']);
						foreach($villages as $village){ 	echo ' <option value="'.$village.'"  selected="selected">'.ucfirst($village).'</option>';  } } } ?>
				  </select>
				  <div class="invalid-tooltip">
					Please provide a valid Village.
				  </div>
				</div>
			  </div>
		   </div>
		   </div>
		   
		   <div class="col-md-12 row mt-4">
		   <div class="col-md-3">
		   <h6 class="m-0">Name of the Husband / Father of Women Member*</h6>
		   </div>
		    <div class="col-md-9">
			<div class="input-group">			 
			<input type="text" class="form-control col-md-6" name="middlename"  value="<?php echo ($this->uri->segment(3) == true)? $memberdetails[0]['middlename']:''; ?>" placeholder=" Husband / Father of Women Member* "  required />
			 </div>
		   </div>
		   </div>
		   
		   
		    <div class="col-md-12 row mt-4">
		   <div class="col-md-3">
		   <h6 class="m-0">Qualification*</h6>
		   </div>
		    <div class="col-md-9">
			<div class="input-group">			 
			 <select class="custom-select col-md-6" name="education" id="validationTooltip04" required>
					<option value="">Choose...</option>
					<option value="illiterate"  <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['education'] == 'illiterate') {  echo 'selected="selected"'; } } ?>>Illiterate</option>
					<option value="primary" <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['education'] == 'primary') {  echo 'selected="selected"'; } } ?>>Primary (up to class 5) </option>
					<option value="upper_primary" <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['education'] == 'upper_primary') {  echo 'selected="selected"'; } } ?>>Upper Primary (class 6-8) </option>
					<option value="secondary" <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['education'] == 'secondary') {  echo 'selected="selected"'; } } ?>>Secondary (class 9-10) </option>
					<option value="higher_secondary" <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['education'] == 'higher_secondary') {  echo 'selected="selected"'; } } ?>>Higher Secondary (class 11-12) </option>
					<option value="graduate" <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['education'] == 'graduate') {  echo 'selected="selected"'; } } ?>>Graduate </option>
					<option value="postgraduate" <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['education'] == 'postgraduate') {  echo 'selected="selected"'; } } ?>>Postgraduate and above </option>
				  </select>
				  <div class="invalid-tooltip">
					Please provide a valid zip.
				  </div>
			 </div>
		   </div>
		   </div>
		   
		     <div class="col-md-12 row mt-4">
		   <div class="col-md-3">
		   <h6 class="m-0">Contact No*</h6>
		   </div>
		    <div class="col-md-9">
			<div class="input-group">			 
			<div class="input-group">			 
			
			<input type="tel" class="form-control col-md-6" name="contactno" placeholder=" Contact No*" value="<?php echo ($this->uri->segment(3) == true)? $memberdetails[0]['contactno']:''; ?>" maxlength="10" required />
			
			
			 </div>
			 </div>
		   </div>
		   </div>
		   
		   <div class="col-md-12 row mt-4">
		   <div class="col-md-3">
		   <h6 class="m-0"> Identity Document* </h6>
		   </div>
		    <div class="col-md-9">
			<div class="input-group">			 
			<div class="input-group">			 
				<select class="form-control col-md-2" name="doctype" onchange="getdocoptions(this.value)">
					<option value="">Select ID</option>
					<option value="AdhaarCard" <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['doctype'] == 'AdhaarCard') {  echo 'selected="selected"'; } } ?>>Adhaar Card.</option>
					<option value="DrivingLicense" <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['doctype'] == 'DrivingLicense') {  echo 'selected="selected"'; } } ?>>Driving License</option>
					<option value="VoterID" <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['doctype'] == 'VoterID') {  echo 'selected="selected"'; } } ?>>Voter ID</option>
					 <option value="Other" <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['doctype'] == 'Other') {  echo 'selected="selected"'; } } ?>>Other</option>
				  </select>
				  <p style="<?php if($this->uri->segment(3) == true){ if($memberdetails[0]['doctype'] != '') { echo 'display:block;'; }else { echo 'display:none;'; } } ?>max-width: 350px;" id="docidno"> <input type="text" class="form-control col-md-5 mt-2" name="docidno"  placeholder="ID Number" style="margin-left: 15px;max-width: 250px;margin-top: 0px!important" value="<?php if($this->uri->segment(3) == true){ if($memberdetails[0]['docidno'] != '') { echo $memberdetails[0]['docidno']; } } ?>"/>
			 </div>
			 </div>
		   </div>
		   </div>
		   
			<div class="col-md-12 row mt-4">
		   		<div class="col-md-3">
		   			<h6 class="m-0">Active Member*</h6>
		   		</div>
		    	<div class="col-md-9">
					<div class="input-group">	
						<select name="membershiptype" class="form-control col-md-6" required>
							<option value="yes">Yes</option>
							<option value="no">No</option>
						</select>	 	 
			
						<div class="invalid-tooltip">
							Please provide a valid zip.
						</div>
			 		</div>
		   		</div>
		   	</div>

			<div class="col-md-12 row mt-4">
		   		<div class="col-md-3">
		   			<h6 class="m-0">FPC Member*</h6>
		   		</div>
		    	<div class="col-md-9">
					<div class="input-group">	
						<select name="FPCmember" class="form-control col-md-6" id="fpcmember" required>
							<option value="">---- Select ----</option>
							<option value="yes" <?php echo $memberdetails[0]['FPCmember'] === 'yes' ? 'selected' : '' ?>>Yes</option>
							<option value="no" <?php echo $memberdetails[0]['FPCmember'] === 'no' ? 'selected' : '' ?>>No</option>
						</select>	
						<div class="invalid-tooltip">
							Please provide a valid selection.
						</div>
			 		</div>
		   		</div>
		   	</div>

			<div class="col-md-12 row mt-4" style="display: none;" id="fpcNameField">
				<div class="col-md-3">
					<h6 class="m-0">FPC Name*</h6>
				</div>
				<div class="col-md-9">
					<div class="input-group">	
						<input type="text" name="FPCname" value="<?= htmlspecialchars($memberdetails[0]['FPCname']) ?>" id="fpcname" class="form-control col-md-6" placeholder="Enter FPC Name" />
						<div class="invalid-tooltip">
							Please provide a valid FPC name.
						</div>
					</div>
				</div>
			</div>

			<script>
				$(document).ready(function () {
					// $('#fpcmember').on('change', function () {
					// 	if ($(this).val() === 'yes') {
					// 		$('#fpcNameField').slideDown();
					// 	} else {
					// 		$('#fpcNameField').slideUp();
					// 		$('#fpcNameField input').val('');
					// 	}
					// });

					function toggleFPCField() {
						if ($('#fpcmember').val() === 'yes') {
							$('#fpcNameField').slideDown();
						} else {
							$('#fpcNameField').slideUp();
							$('#fpcname').val('');
						}
					}

					toggleFPCField();
       				$('#fpcmember').on('change', toggleFPCField);
				});
			</script>

		   
	
		
		    <div class="col-md-12 text-right mb-1"><br/>
			
				<button class="btn btn-primary" type="submit" name="submit" value="submit"  >Next</button>
		    </div>				
			</form>
			</div>
			</div>
			
			<?php } ?>
			</div>
			
			
			<?php 	if($this->uri->segment(3) == '2'){ ?>
			<div class="row mt-5">
			<div class="col-md-2">
				<?php $this->load->view('include/sidebar'); ?>
			</div>
			
				<div class="col-md-10">
				<div class="content content-box">
				<div class="card-header">
				<div class="row">
				<div class="col-md-12">
				<h4 class="m-0"> Land area</h4>
				</div>												
				</div>
				</div>
		       <center>  <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error">'.$msg.'</label></fieldset>';?>
			  <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">'.$this->input->get('msg').'</label></fieldset>'; }?></center>
			
		   <form class="row pr-4 pl-4" action="<?php echo base_url().'memberpanel/3'; ?>" method="post">
		   
		   <?php //print_r($userdetails); ?>
		      <div class="col-md-12">
			  <br/>
			  <h6 class="m-0"> Total Land Area*(bighas)</h6><br/>
			  <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					 Total Agricultural land*(bighas)
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<input type="text" name="landarea"  class="form-control col-md-6" value="<?php echo ($this->uri->segment(3) == true)? $memberdetails[0]['landarea']:''; ?>" placeholder="0" required />
				 </div>
				 </div>
			   </div>
			   </div>
			   
			   <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Total Irrigated Land*(bighas)
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				
				<input type="text" class="form-control col-md-6" name="irrigatedland" value="<?php echo ($this->uri->segment(3) == true)? $memberdetails[0]['irrigatedland']:''; ?>" maxlength="12" min="0" placeholder="0"required />
				 </div>
				 </div>
			   </div>
			   </div>
			   
			   <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					 Total Non Irrigated land*(bighas)
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<input type="text" class="form-control col-md-6" name="nonirrigatedland" value="<?php echo ($this->uri->segment(3) == true)? $memberdetails[0]['nonirrigatedland']:''; ?>" placeholder="0" required />
				 </div>
				 </div>
			   </div>
			   </div>
			   
			   <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					 Total Water bodies*(bighas)
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<input type="text" class="form-control col-md-6" name="totalwaterbody" value="<?php echo ($this->uri->segment(3) == true)? $memberdetails[0]['totalwaterbody']:''; ?>" placeholder="0" required />
				 </div>
				 </div>
			   </div>
			   </div>
			   
			   <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Grazing land*(bighas)
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">	
                <input type="hidden" name="stepno2" value="2" />		
                 <input type="hidden" name="memberid" value="<?php echo $this->uri->segment(2); ?>" />						
				<input type="text" class="form-control col-md-6" name="grazingland" value="<?php echo ($this->uri->segment(3) == true)? $memberdetails[0]['grazingland']:''; ?>"  placeholder="0" required />
				 </div>
				 </div>
			   </div>
			   </div>
			 
			
			<br/>
			  
			  
			  <div class="col-md-12 text-right mb-1">
			  <br/>
			    <a class="btn btn-primary" onclick="javascript:history.back()" style="color:#fff;">Previous</a>
				<button class="btn btn-primary" type="submit" name="submit" value="submit">Next</button>
			  </div>
				  
			</form>
			</div>
			</div>
			</div>
			</div>
			
			<?php } ?>
			
			<?php 	if($this->uri->segment(3) == '3'){ ?>
			
			<div class="row mt-5">
				<div class="col-md-2">
					<?php $this->load->view('include/sidebar'); ?>
				</div>
			
				<div class="col-md-10">
				<div class="content content-box">
					<div class="card-header">
				<div class="row">
				<div class="col-md-12">
							<h4 class="m-0">Agri/Horti</h4>
						</div>												
						</div>
	       </div>
		   <center>  <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error">'.$msg.'</label></fieldset>';?>
			  <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">'.$this->input->get('msg').'</label></fieldset>'; }?></center>
			
		   <form class="row pr-4 pl-4" method="post">
		   
		   <?php //print_r($userdetails); ?>
		       <div class="col-md-12">
					<br/>
			  <h6 class="m-0">Agricuture</h6> <br/> 
			   <div class="col-md-12">
				  <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Commodity 1 
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">
                 <input type="hidden" name="stepno3" value="3" />		
                 <input type="hidden" name="memberid" value="<?php echo $this->uri->segment(2); ?>" />					
				<select class="custom-select col-md-6" name="agriculture1" id="validationTooltip04">
					<option     value="">Choose...</option>
					<?php foreach($agrycommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>" <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['agriculture1'] == $ac['commodity']) {  echo 'selected="selected"'; } } ?>><?php echo ucfirst($ac['commodity']) ?></option>
					<?php } ?>
				</select>
			     </div>
				 </div>
			   </div>
			   </div>
				  
				<div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Commodity 2 
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select class="custom-select col-md-6" name="agriculture2" id="validationTooltip04">
					<option   value="">Choose...</option>
					<?php foreach($agrycommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>" <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['agriculture2'] == $ac['commodity']) {  echo 'selected="selected"'; } } ?>><?php echo ucfirst($ac['commodity']) ?></option>
					<?php } ?>
				</select>
				  <div class="invalid-tooltip">
					Please provide a valid zip.
				  </div>
			     </div>
				 </div>
			   </div>
			   </div>
			   <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Commodity 3 
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select class="custom-select col-md-6" name="agriculture3" id="validationTooltip04">
					<option value="">Choose...</option>
					<?php foreach($agrycommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>" <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['agriculture3'] == $ac['commodity']) {  echo 'selected="selected"'; } } ?>><?php echo ucfirst($ac['commodity']) ?></option>
					<?php } ?>
				</select>
				
			     </div>
				 </div>
			   </div>
			   </div>
			   <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Commodity 4 
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select class="custom-select col-md-6" name="agriculture4" id="validationTooltip04">
					<option value="">Choose...</option>
					<?php foreach($agrycommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>" <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['agriculture4'] == $ac['commodity']) {  echo 'selected="selected"'; } } ?>><?php echo ucfirst($ac['commodity']) ?></option>
					<?php } ?>
				</select>
				  <div class="invalid-tooltip">
					Please provide a valid zip.
				  </div>
			     </div>
				 </div>
			   </div>
			   </div>
			    <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Commodity 5 
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select class="custom-select col-md-6" name="agriculture5" id="validationTooltip04">
					<option   value="">Choose...</option>
					 <?php foreach($agrycommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>" <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['agriculture5'] == $ac['commodity']) {  echo 'selected="selected"'; } } ?>><?php echo ucfirst($ac['commodity']) ?></option>
					<?php } ?>
				</select>
				 
			     </div>
				 </div>
			   </div>
			   </div>
			   <br/>
			   
			    <h6 class="m-0">Horticulture</h6> <br/> 
			   <div class="col-md-12">
			   <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Commodity 1 
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select class="custom-select col-md-6" name="horticulture1" id="validationTooltip04">
					<option   value="">Choose...</option>
					<?php foreach($horticommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>" <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['horticulture1'] == $ac['commodity']) {  echo 'selected="selected"'; } } ?>><?php echo ucfirst($ac['commodity']) ?></option>
					<?php } ?>
					</select>
			     </div>
				 </div>
			   </div>
			   </div>
				  
			  <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Commodity 2 
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select class="custom-select col-md-6"  name="horticulture2" id="validationTooltip04">
					<option   value="">Choose...</option>
					<?php foreach($horticommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>" <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['horticulture2'] == $ac['commodity']) {  echo 'selected="selected"'; } } ?>><?php echo ucfirst($ac['commodity']) ?></option>
					<?php } ?>
				  </select>
				 
			     </div>
				 </div>
			   </div>
			   </div>
			   <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Commodity 3 
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select class="custom-select col-md-6"  name="horticulture3" id="validationTooltip04">
					<option   value="">Choose...</option>
					<?php foreach($horticommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>" <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['horticulture3'] == $ac['commodity']) {  echo 'selected="selected"'; } } ?>><?php echo ucfirst($ac['commodity']) ?></option>
					<?php } ?>
				  </select>
			     </div>
				 </div>
			   </div>
			   </div>
				  
				
				<div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Commodity 4 
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select class="custom-select col-md-6" name="horticulture4" id="validationTooltip04">
					<option   value="">Choose...</option>
					  <?php foreach($horticommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>" <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['horticulture4'] == $ac['commodity']) {  echo 'selected="selected"'; } } ?>><?php echo ucfirst($ac['commodity']) ?></option>
					<?php } ?>
						
				</select>
				  <div class="invalid-tooltip">
					Please provide a valid zip.
				  </div>
			     </div>
				 </div>
			   </div>
			   </div>
				  
				
				<div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Commodity 5 
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select class="custom-select col-md-6" name="horticulture5" id="validationTooltip04">
					<option  value="">Choose...</option>
					<?php foreach($horticommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>"  <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['horticulture5'] == $ac['commodity']) {  echo 'selected="selected"'; } } ?>><?php echo ucfirst($ac['commodity']) ?></option>
					<?php } ?>
					
				</select>
				  
			     </div>
				 </div>
			   </div>
			   </div>
				  
				</div>
				  <div class="col-md-12 text-right mb-1"> <br/> <br/>
				   <a class="btn btn-primary" onclick="javascript:history.back()" style="color:#fff;">Previous</a>
					<button class="btn btn-primary" type="submit" name="submit" value="Signup">Next</button>
				  </div>
				  
				</form>
				</div>
			</div>
			</div>		
			</div>
			<?php } ?>
			
			<?php 	if($this->uri->segment(3) == '4'){ ?>

			<div class="row mt-5">
		    <div class="col-md-2">
				<?php $this->load->view('include/sidebar'); ?>
			</div>
			
				<div class="col-md-10">
				<div class="content content-box">
					<div class="card-header">
				<div class="row">
				<div class="col-md-12">
							<h4 class="m-0">Livestocks/Fishery/Sericulture/Others</h4>
						</div>												
						</div>
	       </div>
		   <center>  <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error">'.$msg.'</label></fieldset>';?>
			  <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">'.$this->input->get('msg').'</label></fieldset>'; }?></center>
			
		   <form class="row pr-4 pl-4" method="post">
		   
		   <?php //print_r($userdetails); ?>
		       <div class="col-md-12">
				<br/>
				<h6 class="m-0" style="font-size:18px;">Livestocks</h6> <br/> 
				<br/> 
				
			<div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1" style="font-weight:500;">Commodity 1  </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">	
                 <input type="hidden" name="stepno4" value="4" />		
                 <input type="hidden" name="memberid" value="<?php echo $this->uri->segment(2); ?>" />					
				<select class="custom-select col-md-6" name="livestock1" id="validationTooltip04">
					<option   value="">Choose...</option>
					<?php foreach($livestockcommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>" <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['livestock1'] == $ac['commodity']) {  echo 'selected="selected"'; } } ?>><?php echo ucfirst($ac['commodity']) ?></option>
					<?php } ?>
				</select>
				  
			     </div>
				 </div>
			   </div>
			   </div>
				  
			  <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1" style="font-weight:500;">Commodity 2  </label>
			   
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select class="custom-select col-md-6" name="livestock2" id="validationTooltip04">
					<option   value="">Choose...</option>
				<?php foreach($livestockcommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>" <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['livestock2'] == $ac['commodity']) {  echo 'selected="selected"'; } } ?>><?php echo ucfirst($ac['commodity']) ?></option>
					<?php } ?>
				</select>
				  <div class="invalid-tooltip">
					Please provide a valid zip.
				  </div>
			     </div>
				 </div>
			   </div>
			   </div>
			   <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1" style="font-weight:500;">Commodity 3  </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select name="livestock3" class="custom-select col-md-6" id="validationTooltip04">
					<option  value="">Choose...</option>
					<?php foreach($livestockcommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>" <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['livestock3'] == $ac['commodity']) {  echo 'selected="selected"'; } } ?>><?php echo ucfirst($ac['commodity']) ?></option>
					<?php } ?>
				</select>
				  <div class="invalid-tooltip">
					Please provide a valid zip.
				  </div>
			     </div>
				 </div>
			   </div>
			   </div>
			   
			   <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1" style="font-weight:500;">Commodity 4  </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select name="livestock4" class="custom-select col-md-6" id="validationTooltip04" >
					<option value="">Choose...</option>
					<?php foreach($livestockcommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>" <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['livestock4'] == $ac['commodity']) {  echo 'selected="selected"'; } } ?>><?php echo ucfirst($ac['commodity']) ?></option>
					<?php } ?>
				</select>
				  <div class="invalid-tooltip">
					Please provide a valid zip.
				  </div>
			     </div>
				 </div>
			   </div>
			   </div>
			   
			   <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1" style="font-weight:500;">Commodity 5  </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select name="livestock5" class="custom-select col-md-6" id="validationTooltip04" >
					<option value="">Choose...</option>
					<?php foreach($livestockcommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>" <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['livestock5'] == $ac['commodity']) {  echo 'selected="selected"'; } } ?>><?php echo ucfirst($ac['commodity']) ?></option>
					<?php } ?>					
				</select>
				  <div class="invalid-tooltip">
					Please provide a valid zip.
				  </div>
			     </div>
				 </div>
			   </div>
			   </div>
			   
			   		   
			   <br/><br/>
			   <?php if($this->uri->segment(3) == true){ if($memberdetails[0]['village'] == true) { $villages = explode(',',$memberdetails[0]['village']);
						foreach($villages as $village){ 	echo ' <option value="'.$village.'"  selected="selected">'.ucfirst($village).'</option>';  } } } ?>
			   <div class="col-md-12 form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-3" style="font-weight:500;">Fishery</label>
			     <div class="form-group col-md-7">
					<select class="form-control col-md-6" name="fishery[]" onchange="getserioptions(this.value)" multiple>
					<option value="">Choose...</option>
					<?php foreach($fisherycommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>" <?php  if($this->uri->segment(3) == true){ if($memberdetails[0]['fishery'] == true) { $fisheries = explode(',',$memberdetails[0]['fishery']); foreach($fisheries as $fishery){ if($fishery == $ac['commodity']){	echo 'selected="selected"'; }  } } } ?>><?php echo ucfirst($ac['commodity']) ?></option>
					<?php } ?>
				<option value="others">Other</option>
				    </select>
					<p style="display:none;max-width: 330px;" id="commodityseriothers"> <input type="text" class="form-control col-md-5 mt-2" name="commodityseriother"  placeholder="Other  " style="    max-width: 273px;"/>  <a href="#" class="btn-sm btn-info" title="Add Task" style="float: right;margin-top: -35px;"><i class="fa fa-plus"></i></span></a>
				  </div>
				  </div>
			   
			   <div class="col-md-12 form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-3"   style="font-weight:500;">Sericulture</label>
			      <div class="form-group col-md-7">
					<select class="form-control col-md-6" name="sericulture[]" onchange="getserioption(this.value)" multiple>
					<option value="">Choose...</option>
					<?php foreach($sericommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>"  <?php  if($this->uri->segment(3) == true){ if($memberdetails[0]['fishery'] == true) { $sericultures = explode(',',$memberdetails[0]['sericulture']); foreach($sericultures as $sericulture){ if($sericulture == $ac['commodity']){	echo 'selected="selected"'; }  } } } ?>><?php echo ucfirst($ac['commodity']) ?></option>
					<?php } ?>
					<option value="other">Other</option>
				    </select>
					<p style="display:none;max-width: 330px;" id="commodityseriother"> <input type="text" class="form-control col-md-5 mt-2" name="commodityseriother"  placeholder="Other Commodity" style="    max-width: 273px;"/>  <a href="#" class="btn-sm btn-info" title="Add Task" style="float: right;margin-top: -35px;"><i class="fa fa-plus"></i></span></a>
				  </div>
				  </div>
				 
				  
				  <div class="col-md-12 form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-3" style="font-weight:500;">Others</label>
			      <div class="form-group col-md-7">
					<input type="text" name="others" value="<?php echo $memberdetails[0]['others']; ?>" class="form-control col-md-6" />
					  
				  </div>
			   </div>
				
				<div class="col-md-12 text-right mb-1">
				
				<!--div class="col-md-12 text-left mb-1"> <br/> <br/>
				   <a class="btn btn-primary" href="<?php echo base_url();?>memberpanel/3">Back</a>
					
				  </div>
				
				<button class="btn btn-primary" type="button" name="submit" value="Signup" onclick="window.location='<?php echo base_url().'memberpanel/4'; ?>'">Submit</button>
				<button class="btn btn-primary" type="button" name="submit" value="Signup" onclick="window.location='<?php echo base_url().'memberpanel/4'; ?>'">Review</button-->
				
				<!--a class="btn btn-primary" href="<?php echo base_url().'memberpanel/3'; ?>">Previous</a-->
				 <a class="btn btn-primary" onclick="javascript:history.back()" style="color:#fff;">Previous</a>
				<button class="btn btn-primary" type="submit" name="submit" value="Next" >Next</button>
				
				
				</div>
				  
			</form>
			
			</div>
			</div>
			</div>		
			</div>
			<?php } ?>
			
			
			<?php 	if($this->uri->segment(3) == '5'){ ?>

			<div class="row mt-5">
		    <div class="col-md-2">
				<?php $this->load->view('include/sidebar'); ?>	
			</div>
			
				<div class="col-md-10">
				<div class="content content-box">
					<div class="card-header">
				<div class="row">
				<div class="col-md-12">
							<h4 class="m-0">Sale to PG</h4>
						</div>												
						</div>
	       </div>
		   <center>  <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error">'.$msg.'</label></fieldset>';?>
			  <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">'.$this->input->get('msg').'</label></fieldset>'; }?></center>
			
		   <form class="row pr-4 pl-4" method="post">
		   
		   <?php //print_r($userdetails); ?>
		       <div class="col-md-12">
				<br/>
				<h6 class="m-0" style="font-size:18px;">Sale to PG</h6> <br/> 
				<br/> 
				
			    <table class="table p-3 table-bordered table-striped">
			  <thead>
				<tr>				  
				  <th scope="col">Commodity Name*</th>
				   <th scope="col">Qty.</th>
				  <th scope="col">Price</th>
				  <th scope="col">Sale</th>
				</tr>
			  </thead>
			  <tbody>
				
				
				<tr>
				
				   <td>
				   <input class="form-control" name="commodity" id="commodity" type="text" value="<?php echo $memberdetails[0]['commodity']; ?>" placeholder="Commodity Name" /> 
				   <!--select class="form-control form-control" name="commodity">
				  <div class="col-md-8">
				  <option>Commodity name</option>
				  <option>Commodity name</option>
				</select>
				</div-->
			  
			   </td>
				   
				  <td><input class="form-control" type="number" name="qty" id="saleqty" value="<?php echo $memberdetails[0]['qty']; ?>" placeholder="Enter Qty." min="0">
				  <input type="hidden" name="stepno5" value="5" />		
                 <input type="hidden" name="memberid" value="<?php echo $this->uri->segment(2); ?>" />	
				  <!--div class="row mt-2"> 
				  <div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="0"> </div>
				  <div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"></div>
				  
				  </div-->
				  </td>
				  <td><input class="form-control" type="number"  name="price" id="saleamount"  value="<?php echo $memberdetails[0]['price']; ?>" placeholder="Enter Price/Amount" min="0" >
				   <!--div class="row mt-2"> 
				  <div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="0"> </div>
				  <div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"></div>
				  </div-->
				  </td>
				   <td><input class="form-control" name="saleamount" id="totalamount" type="number" value="<?php echo $memberdetails[0]['saleamount']; ?>" placeholder="Total Amount"  min="0"> </td>
				  
				</tr>
				
			  </tbody>
			</table>
			   
			   	<br/>
				<h6 class="m-0" style="font-size:18px;">Payment From PG</h6> <br/> 
				 
				<input class="form-control" type="number"  name="paymentrecieved"  placeholder="Payment From PG Recieved" value="<?php echo $memberdetails[0]['paymentrecieved']; ?>"  min="0" >
			   <br/><br/>
				<h6 class="m-0" style="font-size:18px;">Payment Due From PG</h6> <br/> 
				
				<input class="form-control" type="number"  name="paymentdue"  placeholder="Payment Due From PG" value="<?php echo $memberdetails[0]['paymentdue']; ?>"  min="0" >
				<br/> 
				
			
				
				<div class="col-md-12 text-right mb-1">
				
				<div class="col-md-12 text-left mb-1"> <br/> <br/>
				   <a class="btn btn-primary" onclick="javascript:history.back()" style="color:#fff;">Back</a>
					
				  </div>
				
				<button class="btn btn-primary" type="submit" name="submit" value="Signup"  >Submit</button>
				<!--button class="btn btn-primary" type="button" name="submit" value="Signup" onclick="window.location='<?php echo base_url().'members/memberslist'; ?>'">Review</button-->
				</div>
				   </div>
			</form>
			
			</div>
			</div>
			</div>		
			</div>
			<script>
			$('#saleamount').on('input', function() {
				
				//alert(document.getElementById('saleamount').value);
				var totalamount = document.getElementById('saleamount').value * document.getElementById('saleqty').value ;
				document.getElementById('totalamount').value = totalamount;
				
				 })
				 
				 $('#saleqty').on('input', function() {
				
				//alert(document.getElementById('saleamount').value);
				var totalamount = document.getElementById('saleamount').value * document.getElementById('saleqty').value ;
				document.getElementById('totalamount').value = totalamount;
				
				 })
			</script>
			<?php } ?>
			
		</div>		
	</div>
	<br/><br/><br/>
</section>

<script language='javascript' type='text/javascript'>


    function getdocoptions(doctype){
		
			if(doctype != ''){ document.getElementById('docidno').style.display = 'block';  } else { document.getElementById('docidno').style.display = 'none'; }
				
	}
	
	function getfisheryoption(fisheryvalue){
		
		if(fisheryvalue == 'others'){ document.getElementById('commodityfishother').style.display = 'block';  } else { document.getElementById('commodityfishother').style.display = 'none'; }
		
	}
	
	function getfisheryoptions(fisheryvalues){
		
		if(fisheryvalues == 'others'){ document.getElementById('commodityfishothers').style.display = 'block';  } else { document.getElementById('commodityfishothers').style.display = 'none'; }
				
	}
	
	function getserioption(sericulture){
		
		if(sericulture == 'other'){ document.getElementById('commodityseriother').style.display = 'block';  } else { document.getElementById('commodityseriother').style.display = 'none'; }
		
	}
	
	function getserioptions(sericulture){
		
		if(sericulture == 'others'){ document.getElementById('commodityseriothers').style.display = 'block';  } else { document.getElementById('commodityseriothers').style.display = 'none'; }
			
	}


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
  $('#grampachayatname').change(function(){
  var grampanchayat = $('#grampachayatname').val();
  //alert(villagename);
  if(villagename != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>admin-manager/fetchvillage",
    method:"POST",
    data:{grampanchayat:grampanchayat},
    success:function(data)
    {
		//alert(data);
     $('#villagename').html(data);
    }
   });
  }
  else
  {
   $('#villagename').html('<option value="">Select Villagename</option>');
  }
 });
});
</script>