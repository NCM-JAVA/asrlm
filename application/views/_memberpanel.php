<section>
	<div class="container-fluid">
		<div class="row list-view">
 
			<?php 	if($this->uri->segment(2) == '' || $this->uri->segment(2) == '0'  || $this->uri->segment(2) == '1' ){ ?>
			<div class="col-md-2">
				<div class="sidebar">
					<ul>						
						<li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>members/memberslist" class="active">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel">Approver Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel">Verifier Panel</a></li>
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
				<div class="col-md-12 text-right mb-1 pt-3 pb-3">
						<button class="btn btn-primary" type="button" name="memberslist" value="Members List" onclick="window.location.href='<?php echo base_url() ?>members/memberslist'">Members List</button>
						<button class="btn btn-primary" type="button" name="dashboard" value="Dashboard" onclick="window.location.href='<?php echo base_url() ?>members/memberdashboard'">Dashboard</button>
						<button class="btn btn-success" type="button" name="addmember" value="Add Member" onclick="window.location.href='<?php echo base_url() ?>memberpanel'">Add Member</button>
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
			  <option value="<?php echo $plist['pgid']; ?>" <?php if($this->session->userdata('pgid') == $plist['pgid']){ echo 'selected="selected"'; } ?> ><?php echo strtoupper($plist['pgname']); ?></option>
				  
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
			<input type="text" name="name" class="form-control col-md-6"  placeholder="Name*" required />
			 </div>
		   </div>
		   </div>
		   
		   <div class="col-md-12 row mt-4">
		   <div class="col-md-3">
		   <h6 class="m-0">SHG Name*</h6>
		   </div>
		    <div class="col-md-9">
			<div class="input-group">			 
			<input type="text" name="shgname" class="form-control col-md-6"  placeholder="SHG Name*" required />
			 </div>
		   </div>
		   </div>
		    <div class="col-md-12 row mt-4">
		   <div class="col-md-3">
		   <h6 class="m-0">SHG Code*</h6>
		   </div>
		    <div class="col-md-9">
			<div class="input-group">
			<input type="hidden" class="form-control col-md-6" name="stepno" value="1" />			
			<input type="text" name="shgcode" class="form-control col-md-2"  placeholder="SHG Code*" required />
			 </div>
		   </div>
		   </div>
			   <div class="col-md-12 row mt-4">
		   <div class="col-md-3">
		   <h6 class="m-0">Location</h6>
		   </div>
		    <div class="col-md-9">
			  <div class="form-row">
				<div class="col-md-3 mb-3">
				  <label for="validationTooltip03"><b>District</b></label>
					<select class="custom-select" id="districtname" name="districtname">
					<option  value="">Choose...</option>
					  <?php foreach($districts as $district){ ?>
						
						<option value="<?php echo $district['district']; ?>"  <?php if($district['district']  == $this->input->get('districtname')){ echo 'selected="selected"'; } ?>><?php echo ucfirst($district['district']); ?></option>
				  
					  <?php } ?>					
				  </select>	
				  <div class="invalid-tooltip">
					Please select a valid Block.
				  </div>
				</div>
				<div class="col-md-2 mb-3">
				  <label for="validationTooltip04"><b>Block</b></label>
				  <select class="custom-select" id="blocknames" name="blockname">
					<option value="">Choose...</option>
					
				  </select>
				  <div class="invalid-tooltip">
					Please select a valid Block.
				  </div>
				</div>
			<div class="col-md-3 mb-3">
				  <label for="validationTooltip04"><b>Gram Panchayat</b></label>
				  <select class="custom-select" id="grampachayatname" name="grampanchayatname" >
				  <option value="">Choose...</option>
				
				  </select>
				
				</div>
				<div class="col-md-3 mb-3">
				  <label for="validationTooltip05"> <b>Village</b> <b>(multiple selection)</b> </label>
				  <select name="villagename" class="custom-select" id="villagename" multiple>
					<option selected disabled value="">Choose...</option>
					
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
			<input type="text" class="form-control col-md-6" name="middlename" Details  placeholder=" Husband / Father of Women Member* " 
 required />
			 </div>
		   </div>
		   </div>
		   
		   
		    <div class="col-md-12 row mt-4">
		   <div class="col-md-3">
		   <h6 class="m-0">Education*</h6>
		   </div>
		    <div class="col-md-9">
			<div class="input-group">			 
			 <select class="custom-select col-md-6" name="education" id="validationTooltip04" required>
					<option selected disabled value="">Choose...</option>
					<option>Literate </option>
					<option>Illiterate</option>
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
			
			<input type="tel" class="form-control col-md-6" name="contactno" placeholder=" Contact No*" maxlength="10" required />
			
			
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
				<select class="form-control col-md-2" name="adharno" onchange="getfisheryoptions(this.value)">
					<option value="others">Select ID</option>
					<option value="others">Adhaar Card.</option>
					<option value="others">Driving License</option>
					<option value="others">Voter ID</option>
					 <option value="others">Other</option>
				  </select>
				  <p style="display:none;max-width: 350px;" id="commodityfishothers"> <input type="text" class="form-control col-md-5 mt-2" name="commodityseriothers"  placeholder="ID Number" style="margin-left: 15px;max-width: 250px;margin-top: 0px!important"/>
			 </div>
			 </div>
		   </div>
		   </div>
		   
		     <div class="col-md-12 row mt-4">
		   <div class="col-md-3">
		   <h6 class="m-0">Membership Type*</h6>
		   </div>
		    <div class="col-md-9">
			<div class="input-group">			 
			<input type="text" class="form-control col-md-6" name="membershiptype" placeholder=" Membership Type*"  required />
				  <div class="invalid-tooltip">
					Please provide a valid zip.
				  </div>
			 </div>
		   </div>
		   </div>
		   
	
		
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
			<div class="col-md-3">
				<div class="sidebar">
					<ul>						
						<li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>members/memberslist" class="active">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel">Approver Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel">Verifier Panel</a></li>
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
			
				<div class="col-md-9">
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
				<input type="text" name="landarea"  class="form-control col-md-6" placeholder="0" required />
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
				
				<input type="text" class="form-control col-md-6" name="irrigatedland" maxlength="12" min="0" placeholder="0"required />
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
				<input type="text" class="form-control col-md-6" name="nonirrigatedland" placeholder="0" required />
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
				<input type="text" class="form-control col-md-6" name="totalwaterbody" placeholder="0" required />
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
				<input type="text" class="form-control col-md-6" name="grazingland" placeholder="0" required />
				 </div>
				 </div>
			   </div>
			   </div>
			 
			
			<br/>
			  
			  
			  <div class="col-md-12 text-right mb-1">
			  <br/>
			  <a class="btn btn-primary" href="<?php echo base_url();?>memberpanel">Previous</a>
				<button class="btn btn-primary" type="submit" name="submit" value="Signup" onclick="window.location='<?php echo base_url().'memberpanel/3'; ?>'">Next</button>
			  </div>
				  
			</form>
			</div>
			</div>
			</div>
			</div>
			
			<?php } ?>
			
			<?php 	if($this->uri->segment(3) == '3'){ ?>
			
			<div class="row mt-5">
				<div class="col-md-3">
				<div class="sidebar">
					<ul>						
						<li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>members/memberslist" class="active">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel">Approver Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel">Verifier Panel</a></li>
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
			
				<div class="col-md-9">
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
					Commodity 1 *
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">
                 <input type="hidden" name="stepno3" value="3" />		
                 <input type="hidden" name="memberid" value="<?php echo $this->uri->segment(2); ?>" />					
				<select class="custom-select col-md-6" name="agriculture1" id="validationTooltip04" required>
					<option     value="">Choose...</option>
					<?php foreach($agrycommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>"><?php echo ucfirst($ac['commodity']) ?></option>
					<?php } ?>
				</select>
			     </div>
				 </div>
			   </div>
			   </div>
				  
				<div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Commodity 2 *
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select class="custom-select col-md-6" name="agriculture2" id="validationTooltip04" required>
					<option   value="">Choose...</option>
					<?php foreach($agrycommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>"><?php echo ucfirst($ac['commodity']) ?></option>
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
					Commodity 3 *
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select class="custom-select col-md-6" name="agriculture3" id="validationTooltip04" required>
					<option value="">Choose...</option>
					<?php foreach($agrycommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>"><?php echo ucfirst($ac['commodity']) ?></option>
					<?php } ?>
				</select>
				
			     </div>
				 </div>
			   </div>
			   </div>
			   <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Commodity 4 *
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select class="custom-select col-md-6" name="agriculture4" id="validationTooltip04" required>
					<option value="">Choose...</option>
					<?php foreach($agrycommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>"><?php echo ucfirst($ac['commodity']) ?></option>
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
					Commodity 5 *
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select class="custom-select col-md-6" name="agriculture5" id="validationTooltip04" required>
					<option   value="">Choose...</option>
					 <?php foreach($agrycommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>"><?php echo ucfirst($ac['commodity']) ?></option>
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
					Commodity 1 *
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select class="custom-select col-md-6" name="horticulture1" id="validationTooltip04" required>
					<option   value="">Choose...</option>
					<?php foreach($horticommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>"><?php echo ucfirst($ac['commodity']) ?></option>
					<?php } ?>
					</select>
			     </div>
				 </div>
			   </div>
			   </div>
				  
			  <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Commodity 2 *
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select class="custom-select col-md-6"  name="horticulture2" id="validationTooltip04" required>
					<option   value="">Choose...</option>
					<?php foreach($horticommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>"><?php echo ucfirst($ac['commodity']) ?></option>
					<?php } ?>
				  </select>
				 
			     </div>
				 </div>
			   </div>
			   </div>
			   <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Commodity 3 *
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select class="custom-select col-md-6"  name="horticulture2" id="validationTooltip04" required>
					<option   value="">Choose...</option>
					<?php foreach($horticommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>"><?php echo ucfirst($ac['commodity']) ?></option>
					<?php } ?>
				  </select>
			     </div>
				 </div>
			   </div>
			   </div>
				  
				
				<div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Commodity 4 *
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select class="custom-select col-md-6" name="horticulture4" id="validationTooltip04" required>
					<option   value="">Choose...</option>
					  <?php foreach($horticommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>"><?php echo ucfirst($ac['commodity']) ?></option>
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
					Commodity 5 *
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select class="custom-select col-md-6" name="horticulture5" id="validationTooltip04" required>
					<option  value="">Choose...</option>
					<?php foreach($horticommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>"><?php echo ucfirst($ac['commodity']) ?></option>
					<?php } ?>
					
				</select>
				  
			     </div>
				 </div>
			   </div>
			   </div>
				  
				</div>
				  <div class="col-md-12 text-right mb-1"> <br/> <br/>
				   <a class="btn btn-primary" href="<?php echo base_url();?>memberpanel/2">Previous</a>
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
		    <div class="col-md-3">
				<div class="sidebar">
					<ul>						
						<li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>members/memberslist" class="active">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel">Approver Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel">Verifier Panel</a></li>
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
			
				<div class="col-md-9">
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
			   <label class="form-check-label" for="gridCheck1" style="font-weight:500;">Commodity 1 * </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">	
                 <input type="hidden" name="stepno4" value="4" />		
                 <input type="hidden" name="memberid" value="<?php echo $this->uri->segment(2); ?>" />					
				<select class="custom-select col-md-6" name="livestock1" id="validationTooltip04" required>
					<option   value="">Choose...</option>
					<?php foreach($livestockcommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>"><?php echo ucfirst($ac['commodity']) ?></option>
					<?php } ?>
				</select>
				  
			     </div>
				 </div>
			   </div>
			   </div>
				  
			  <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1" style="font-weight:500;">Commodity 2 * </label>
			   
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select class="custom-select col-md-6" name="livestock2" id="validationTooltip04" required>
					<option   value="">Choose...</option>
				<?php foreach($livestockcommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>"><?php echo ucfirst($ac['commodity']) ?></option>
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
			   <label class="form-check-label" for="gridCheck1" style="font-weight:500;">Commodity 3 * </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select name="livestock3" class="custom-select col-md-6" id="validationTooltip04" required>
					<option  value="">Choose...</option>
					<?php foreach($livestockcommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>"><?php echo ucfirst($ac['commodity']) ?></option>
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
			   <label class="form-check-label" for="gridCheck1" style="font-weight:500;">Commodity 4 * </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select name="livestock4" class="custom-select col-md-6" id="validationTooltip04" required>
					<option value="">Choose...</option>
					<?php foreach($livestockcommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>"><?php echo ucfirst($ac['commodity']) ?></option>
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
			   <label class="form-check-label" for="gridCheck1" style="font-weight:500;">Commodity 5 * </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select name="livestock5" class="custom-select col-md-6" id="validationTooltip04" required>
					<option value="">Choose...</option>
					<?php foreach($livestockcommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>"><?php echo ucfirst($ac['commodity']) ?></option>
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
			   
			   <div class="col-md-12 form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-3" style="font-weight:500;">Fishery</label>
			     <div class="form-group col-md-7">
					<select class="form-control col-md-6" name="fishery" onchange="getserioptions(this.value)">
					<option value="">Choose...</option>
					<?php foreach($fisherycommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>"><?php echo ucfirst($ac['commodity']) ?></option>
					<?php } ?>
				<option value="others">Other</option>
				    </select>
					<p style="display:none;max-width: 330px;" id="commodityseriothers"> <input type="text" class="form-control col-md-5 mt-2" name="commodityseriother"  placeholder="Other  " style="    max-width: 273px;"/>  <a href="#" class="btn-sm btn-info" title="Add Task" style="float: right;margin-top: -35px;"><i class="fa fa-plus"></i></span></a>
				  </div>
				  </div>
			   
			   <div class="col-md-12 form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-3"   style="font-weight:500;">Sericulture</label>
			      <div class="form-group col-md-7">
					<select class="form-control col-md-6" name="sericulture" onchange="getserioption(this.value)">
					<option value="">Choose...</option>
					<?php foreach($sericommo as $ac){ ?>
						<option value="<?php echo $ac['commodity'] ?>"><?php echo ucfirst($ac['commodity']) ?></option>
					<?php } ?>
					<option value="other">Other</option>
				    </select>
					<p style="display:none;max-width: 330px;" id="commodityseriother"> <input type="text" class="form-control col-md-5 mt-2" name="commodityseriother"  placeholder="Other Commodity" style="    max-width: 273px;"/>  <a href="#" class="btn-sm btn-info" title="Add Task" style="float: right;margin-top: -35px;"><i class="fa fa-plus"></i></span></a>
				  </div>
				  </div>
				 
				  
				  <div class="col-md-12 form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-3" style="font-weight:500;">Others</label>
			      <div class="form-group col-md-7">
					<input type="text" name="others" class="form-control col-md-6">
					  
				  </div>
			   </div>
				
				<div class="col-md-12 text-right mb-1">
				
				<!--div class="col-md-12 text-left mb-1"> <br/> <br/>
				   <a class="btn btn-primary" href="<?php echo base_url();?>memberpanel/3">Back</a>
					
				  </div>
				
				<button class="btn btn-primary" type="button" name="submit" value="Signup" onclick="window.location='<?php echo base_url().'memberpanel/4'; ?>'">Submit</button>
				<button class="btn btn-primary" type="button" name="submit" value="Signup" onclick="window.location='<?php echo base_url().'memberpanel/4'; ?>'">Review</button-->
				
				<a class="btn btn-primary" href="<?php echo base_url().'memberpanel/3'; ?>">Previous</a>
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
		    <div class="col-md-3">
				<div class="sidebar">
					<ul>						
						<li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>members/memberslist" class="active">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel">Approver Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel">Verifier Panel</a></li>
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
			
				<div class="col-md-9">
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
				   	<input class="form-control" type="text"  name="commodity"  placeholder="Name of Commodity" />
					<!--select class="form-control form-control" name="commodity">
				
				  <option>Commodity name</option>
				  <option>Commodity name</option>
				</select-->
			  
			   </td>
				   
				  <td><input class="form-control" type="number" name="qty" id="saleqty" placeholder="Enter Qty." min="0">
				  <input type="hidden" name="stepno5" value="5" />		
                 <input type="hidden" name="memberid" value="<?php echo $this->uri->segment(2); ?>" />	
				  <!--div class="row mt-2"> 
				  <div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="0"> </div>
				  <div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"></div>
				  
				  </div-->
				  </td>
				  <td><input class="form-control" type="number"  name="price" id="saleamount"  placeholder="Enter Price/Amount" min="0" >
				   <!--div class="row mt-2"> 
				  <div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="0"> </div>
				  <div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"></div>
				  </div-->
				  </td>
				   <td><input class="form-control" name="saleamount" id="totalamount" type="number" placeholder="Total Amount"  min="0"> </td>
				  
				</tr>
				
			  </tbody>
			</table>
			   
			   	<br/>
				<h6 class="m-0" style="font-size:18px;">Payment From PG</h6> <br/> 
				 
				<input class="form-control" type="number"  name="paymentrecieved"  placeholder="Payment From PG Recieved" min="0" >
			   <br/><br/>
				<h6 class="m-0" style="font-size:18px;">Payment Due From PG</h6> <br/> 
				
				<input class="form-control" type="number"  name="paymentdue"  placeholder="Payment Due From PG" min="0" >
				<br/> 
				
			
				
				<div class="col-md-12 text-right mb-1">
				
				<div class="col-md-12 text-left mb-1"> <br/> <br/>
				   <a class="btn btn-primary" href="<?php echo base_url();?>memberpanel/4">Back</a>
					
				  </div>
				
				<button class="btn btn-primary" type="submit" name="submit" value="Signup"  >Submit</button>
				<button class="btn btn-primary" type="button" name="submit" value="Signup" onclick="window.location='<?php echo base_url().'memberpanel/5'; ?>'">Review</button>
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