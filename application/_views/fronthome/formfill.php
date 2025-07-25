<section>
	<div class="container-fluid">
		<div class="row list-view">
			<?php 	if($this->uri->segment(2) == '' || $this->uri->segment(2) == '0'  || $this->uri->segment(2) == '1' ){ ?>
			<div class="col-md-2">
				<div class="sidebar">
					<ul>
						<li><a href="<?php echo base_url(); ?>admin-manager">PG Entry</a></li>
						<li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>form-filling" class="active">GT PG Panel</a></li>
						<li><a href="<?php echo base_url(); ?>memberpanel">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel">Approver Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel">Verifier Panel</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						
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
			  <select class="custom-select col-md-12" id="validationTooltip04" required>
					<option>Kanchanjhangha Goatry PG</option>
					<option>Rupali PG</option>
				  </select>
				  <div class="invalid-tooltip">
					Please select a valid Producer Group.
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
					<select class="custom-select" id="validationTooltip04" required>
					<option selected disabled value="">Choose...</option>
					<option>Udalguri</option>
					
				  </select>
				  <div class="invalid-tooltip">
					Please select a valid Block.
				  </div>
				</div>
				<div class="col-md-3 mb-3">
				  <label for="validationTooltip04"><b>Block</b></label>
				  <select class="custom-select" id="validationTooltip04" required>
					<option selected disabled value="">Choose...</option>
					<option>Rowta</option>
					<option>Mazbat</option>
					<option>Udalguri</option>
				  </select>
				  <div class="invalid-tooltip">
					Please select a valid Block.
				  </div>
				</div>
				<div class="col-md-3 mb-3">
				  <label for="validationTooltip04"> <b>Gram Panchayat</b> <b>(multiple selection)</b></label>
				  	<select class="custom-select" id="validationTooltip04"  multiple>
					<option selected disabled value="">Choose...</option>
					<option>Purani Hapagaon</option>
					<option>Rowta Station</option>
					<option>Mohanpur</option>
					<option>Phuhurabari</option>
				  </select>
				  <div class="invalid-tooltip">
					Please select a valid Gram Panchayat.
				  </div>
				</div>
				<div class="col-md-3 mb-3">
				  <label for="validationTooltip05"> <b>Village</b> <b>(multiple selection)</b> </label>
				  <select class="custom-select" id="validationTooltip04" multiple>
					<option selected disabled value="">Choose...</option>
					<option>Bajrajhar</option>
					<option>Mohanpur</option>
					<option>Alabari</option>
					<option>Rowta</option>
					<option>Mazbat</option>
					<option>Udalguri</option>
					<option>Odola</option>
					<option>Amjuli</option>
					<option>Murmela</option>
					<option>Habigaon</option>
					<option>Purani Hapagaon</option>
					<option>Sonaigaon</option>
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
		   <h6 class="m-0">Date of Formation</h6>
		   </div>
		    <div class="col-md-9">
			<div class="input-group">
			 
			<input type="date" class="form-control" required />
			 </div>
		   </div>
		   </div>
		   
		   <div class="col-md-12 row mt-4">
		   <div class="col-md-12">
		  <table class="table p-3 table-bordered table-striped">
		  <thead>
			<tr>
			  
			  <th scope="col"></th>
			  <th scope="col">Name</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <th>Designation(President/Secretary/ Treasurer)</th>
			  <td><input type="text" class="form-control" style="width:100%;"></td>
			</tr>
			<tr>
			  <th>Designation(President/Secretary/ Treasurer)</th>
			  <td><input type="text" class="form-control" style="width:100%;"></td>
			</tr>
			<tr>
			  <th>Designation(President/Secretary/ Treasurer)</th>
			  <td><input type="text" class="form-control" style="width:100%;"></td>
			</tr>
		  </tbody>
		</table>
		   </div>
		    
		   </div>
		   
		   <div class="col-md-12 row mt-4">
		   <div class="col-md-3">
		   <h6 class="m-0"> PG promoted under</h6>
		   </div>
		    <div class="col-md-9">
			  <select class="custom-select col-md-12" id="validationTooltip04" required>
					<option>SRLM-AAP</option> 
					<option>NERTP</option>
				  </select>
				  <div class="invalid-tooltip">
					Please select a valid Producer Group.
				  </div>
		   </div>
		   </div>
		
		    <div class="col-md-12 text-right mb-1"><br/>
				<button class="btn btn-primary" type="submit" name="submit" value="Signup" onclick="window.location='<?php echo base_url().'form-filling/2'; ?>'">Next</button>
		    </div>				
			</form>
			</div>
			</div>
			
			<?php } ?>
			</div>
			
			
			<?php 	if($this->uri->segment(2) == '2'){ ?>
			<div class="row mt-5">
			<div class="col-md-3">
				<div class="sidebar">
					<ul>
						<li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>form-filling" class="active">GT PG Panel</a></li>
						<li><a href="<?php echo base_url(); ?>memberpanel">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel">Approver Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel">Verifier Panel</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						
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
							<h4 class="m-0"> Bank/ Commodity Details</h4>
						</div>												
						</div>
	       </div>
		   <center>  <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error">'.$msg.'</label></fieldset>';?>
			  <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">'.$this->input->get('msg').'</label></fieldset>'; }?></center>
			
		   <form class="row pr-4 pl-4" action="<?php echo base_url().'form-filling/3'; ?>" method="post">
		   
		   <?php //print_r($userdetails); ?>
		      <div class="col-md-12">
			  <br/><br/>
			  <div class="row">
			  <div class="col-md-11"><h6 class="m-0"> BANK ACCOUNT DETAILS *</h6><br/></div>
			  <div class="col-md-1">
			   <a href="#" class="btn-sm btn-info" title="Add Task"><i class="fa fa-plus"></i></a>
			   </div>
			   </div>
			  <table class="table p-3 table-bordered table-striped">
			  <thead>
				<tr>
				  
				  <th scope="col">Bank name:</th>
				  <th scope="col">Type of Account</th>
				  <th scope="col">Branch Location</th>
				  <th scope="col">IFSC Code</th>
				  <th scope="col">Account Number</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <td>
				  
				   <select class="form-control">
					<option>AGVB</option>
					<option>HDFC</option>
					<option>ICICI</option>
					<option>ADC</option>
				  </select>
				  </td>
				  <td>
				  <select class="form-control">
					<option>Saving</option>
					<option>Current</option>
					</select>
				  </td>
				  <td><input class="form-control" type="text" placeholder=" "></td>
				  <td><input class="form-control" type="text" placeholder=" "></td>
				  <td><input class="form-control" type="text" placeholder=" "></td>
				</tr>
				
			  </tbody>
			</table>
			
			
			<br/>
			   <div class="row">
			   <div class="col-md-11"><h6 class="m-0"> COMMODITY DETAILS</h6><br/></div>
			   <div class="col-md-1">
			   <a href="#" class="btn-sm btn-info" title="Add Task"><i class="fa fa-plus"></i></a>
			   </div>
			   </div>
			   
		      <div class="col-md-12 row">
			   <div class="col-md-4">
			  
			   
			   <div class="form-group row">
				<label for="inputPassword" class="col-form-label col-md-4">Category*</label>
				<div class="col-md-8">
				  <select class="form-control form-control">
				  <option>AGRICULTURE</option>
				  <option>ANIMAL HUSBANDRY/LIVESTOCK</option>
				  <option>HORTICULTURE</option>
				  <option>SERICULTURE</option>
				  <option>FISHERY</option>
				</select>
				</div>
			   </div>
			   
			   </div>
			   
			   
			   <div class="col-md-3">
			   <div class="col-md-12">
			   <div class="form-group row">
				
				  <select class="form-control form-control">
				  <div class="col-md-8">
				  <option>Sub-category</option>
				  <option>Rabi </option>
				  <option>Kharif </option>
				  <option>Zaid </option>
				  <option>Cattle</option>
				  <option>Poultry</option>
				  <option>Fruits</option>
				  <option>Fruits</option>
				  <option>Vegetables</option>
				  <option>Tuber Crops</option>
				  <option>Spices Crops</option>
				  <option>Flowers</option>
				  <option>Types</option>
				  <option>Species</option>
				</select>
				</div>
			   </div>
			   
			   </div>
			   <div class="col-md-3">
			   <div class="col-md-12">
			   <div class="form-group row">
				
				  <select class="form-control form-control">
				  <option>Name of community</option>
				  <option>Paddy (Dhaan)</option>
				  <option>Bajra</option>
				  <option>Mungbean/ Urdbean (Mug Dail)</option>
				  <option>Cow (Goru)</option>
				  <option>Backyarad Poultry</option>
				  <option>Banana</option>
				  <option>Ash Gourd(Kumoora)</option>
				  <option>Carambola (Kordoi)</option>
				  <option>Patato (Aloo)</option>
				  <option>Coriander (Dhonia)</option>
				  <option>Marigold</option>
				  <option>Muga</option>
				  <option>Catfish (Magur)</option>
				  <option>Grass Carp</option>
				  <option>Groundnut (Badam)</option>
				  <option>Pineapple (Anarokh)</option>
				</select>
				</div>
			   </div>
			   
			   </div>
			  
			  <div class="col-md-12 text-right mb-2">
			  
			  <br/>
			  <a class="btn btn-primary"  href="<?php echo base_url().'form-filling/1'; ?>" >Previous</a>
				<button class="btn btn-primary" type="submit" name="submit" value="Signup" onclick="window.location='<?php echo base_url().'form-filling/3'; ?>'">Next</button>
			  </div>
				  
			</form>
			</div>
			</div>
			</div>
			</div>
			
			<?php } ?>
			
			<?php 	if($this->uri->segment(2) == '4'){ ?>
			
			<div class="row mt-5">
				<div class="col-md-3">
				<div class="sidebar">
				<ul>
						<li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>form-filling" class="active">GT PG Panel</a></li>
						<li><a href="<?php echo base_url(); ?>memberpanel">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel">Approver Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel">Verifier Panel</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						
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
							<h4 class="m-0">Additinal Activities</h4>
						</div>												
						</div>
	       </div>
		   <center>  <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error">'.$msg.'</label></fieldset>';?>
			  <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">'.$this->input->get('msg').'</label></fieldset>'; }?></center>
			
		   <form class="row pr-4 pl-4" method="post">
		   
		   <?php //print_r($userdetails); ?>
		       <div class="col-md-12">
					<br/>
			  <h6 class="m-0">VALUE ADDITION ACTIVITY MANAGED BY Udyog Sakhi / Pashu Sakhi / Krishi Sakhi /CRP </h6> <br/>
			
			   <!--div class="row  col-md-12 mt-2">
				  <div>
					<label class="btn btn-success" id="uslabelva" style="margin-right: 14px;font-weight: 500;"><input type="checkbox" id="uscheckboxva"  name="uspgtypeva[]"  value="udyogsakhipg" checked="checked">&nbsp;Udyog Sakhi </label>
					<label class="btn btn-primary"  id="pslabelva"  style="margin-right: 14px;font-weight: 500;"><input type="checkbox" id="pscheckboxva" name="uspgtypeva[]" value="pashusakhipg">&nbsp;Pashu Sakhi</label>
					<label class="btn btn-primary"  id="kslabelva"   style="margin-right: 14px;font-weight: 500;"><input type="checkbox" id="kscheckboxva" name="uspgtypeva[]" value="krishisakhipg">&nbsp;Krishi Sakhi</label>
					<label class="btn btn-primary"  id="crplabelva"  style="margin-right: 14px;font-weight: 500;"><input type="checkbox" id="crpcheckboxva"  name="uspgtypeva[]" value="crppg">&nbsp;CRP</label>
				  </div>
				</div-->  <br>

			<div class="row col-md-12">
			<div class="col-md-9"> </div> 
			<div class="col-md-3 p-3  card"  style="background-color: #e1e1e1;"> 
				<b>Shubham Sharma</b>
			   <a href="tel:+91 9990008970" ><i class="fa fa-phone" aria-hidden="true"></i>+91 9990008970</a>
			</div>
			</div>

                <div class="row col-md-12"> 
			    <div class="col-md-6"  id="udyogsakhipgva">		
				  <h4 style="text-decoration: underline;">Udyog Sakhi</h4>		   
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Drying
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Grading
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Sorting
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Processing
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Storing
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Packaging
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Labelling
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Weighing
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Collective marketing
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox"   id="vlothers" value='1'  onclick="additionalactothers()" />
					<label class="form-check-label" for="gridCheck1">
					 Others
					</label>
					
					<div class="form-group col-md-4"  id="inputadditionalactothers" style="display:none;">
					<input type="text" class="form-control">
					</div>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalactnoa" type="checkbox" id="gridCheck1" value='1'  onclick="additionalactnota()">
					<label class="form-check-label" for="gridCheck1">
					 None of The Above
					</label>
				  </div>				  
				</div>
				
				
				
				 <div class="col-md-6"  id="pashusakhipgga"> 
					 <h4 style="text-decoration: underline;">Pashu Sakhi</h4>
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Drying
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Grading
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Sorting
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Processing
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Storing
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Packaging
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Labelling
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Weighing
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Collective marketing
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox"   id="vlothers" value='1'  onclick="additionalactothers()" />
					<input class="form-check-input addtnalact" type="checkbox"   id="vlothers" value='1'  onclick="additionalactothers()" />
					<label class="form-check-label" for="gridCheck1">
					 Others
					</label>
					
					<div class="form-group col-md-4"  id="inputadditionalactothers" style="display:none;">
					<input type="text" class="form-control">
					</div>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalactnoa" type="checkbox" id="gridCheck1" value='1'  onclick="additionalactnota()">
					<label class="form-check-label" for="gridCheck1">
					 None of The Above
					</label>
				  </div>				  
				</div>
				</div>
				<div class="row col-md-12"> 
				 <div class="col-md-6"  id="krishisakhipgga">	<br/>	
				  <h4 style="text-decoration: underline;">Krishi Sakhi</h4>				 
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Drying
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Grading
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Sorting
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Processing
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Storing
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Packaging
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Labelling
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Weighing
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Collective marketing
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox"   id="vlothers" value='1'  onclick="additionalactothers()" />
					<label class="form-check-label" for="gridCheck1">
					 Others
					</label>
					
					
					<div class="form-group col-md-2"  id="inputadditionalactothers" style="display:none;">
					<input type="text" class="form-control">
					</div>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalactnoa" type="checkbox" id="gridCheck1" value='1'  onclick="additionalactnota()">
					<label class="form-check-label" for="gridCheck1">
					 None of The Above
					</label>
				  </div>				  
				</div>
				
				
				 <div class="col-md-6"  id="crppgga"><br/>	
					<h4 style="text-decoration: underline;">CRP</h4> 		 
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Drying
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Grading
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Sorting
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Processing
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Storing
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Packaging
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Labelling
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Weighing
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox" id="gridCheck1">
					<label class="form-check-label" for="gridCheck1">
					 Collective marketing
					</label>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" type="checkbox"   id="vlothers" value='1'  onclick="additionalactothers()" />
					<label class="form-check-label" for="gridCheck1">
					 Others
					</label>
					
					
					<div class="form-group col-md-2"  id="inputadditionalactothers" style="display:none;">
					<input type="text" class="form-control">
					</div>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalactnoa" type="checkbox" id="gridCheck1" value='1'  onclick="additionalactnota()">
					<label class="form-check-label" for="gridCheck1">
					 None of The Above
					</label>
				  </div>				  
				</div>
				</div>
				
				  <div class="col-md-12 text-right mb-1"> <br/>
				   <a class="btn btn-primary"  href="<?php echo base_url().'form-filling/3'; ?>" >Previous</a>
					<button class="btn btn-primary" type="button" name="submit" value="Signup" onclick="window.location='<?php echo base_url().'form-filling/5'; ?>'">Next</button>
				  </div>
				  
				</form>
				</div>
			</div>
			</div>		
			</div>
			<?php } ?>
			
			<?php 	if($this->uri->segment(2) == '3'){ ?>

			<div class="row mt-5">
		    <div class="col-md-3">
				<div class="sidebar">
					<ul>
						<li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>form-filling" class="active">GT PG Panel</a></li>
						<li><a href="<?php echo base_url(); ?>memberpanel">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel">Approver Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel">Verifier Panel</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						
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
							<h4 class="m-0">Udyog Sakhi And PG Details</h4>
						</div>												
						</div>
	       </div>
		   <center>  <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error">'.$msg.'</label></fieldset>';?>
			  <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">'.$this->input->get('msg').'</label></fieldset>'; }?></center>
			
		   <form class="row pr-4 pl-4" method="post">
		   
		   <?php //print_r($userdetails); ?>
		       <div class="col-md-12">
				<br/>
				<h6 class="m-0">VALUE ADDITION ACTIVITY MANAGED BY Udyog Sakhi / Pashu Sakhi / Krishi Sakhi / CRP</h6> <br/> <br/>
			 
		
      <div class="buttons">
      <div class="row  col-md-12 mt-2">
      <div>
        <label class="btn btn-success" id="uslabel" style="margin-right: 14px;font-weight: 500;"><input type="checkbox" id="uscheckbox"  name="uspgtype[]" onclick="pgaddionalresponse('uscheckbox','udyogsakhipg','uslabel')" value="udyogsakhipg" checked="checked">&nbsp;Udyog Sakhi </label>
        <label class="btn btn-primary"  id="pslabel"  style="margin-right: 14px;font-weight: 500;"><input type="checkbox" id="pscheckbox" name="uspgtype[]" onclick="pgaddionalresponse('pscheckbox','pashusakhipg','pslabel')" value="pashusakhipg">&nbsp;Pashu Sakhi</label>
        <label class="btn btn-primary"  id="kslabel"   style="margin-right: 14px;font-weight: 500;"><input type="checkbox" id="kscheckbox" name="uspgtype[]" onclick="pgaddionalresponse('kscheckbox','krishisakhipg','kslabel')" value="krishisakhipg">&nbsp;Krishi Sakhi</label>
		<label class="btn btn-primary"  id="crplabel"  style="margin-right: 14px;font-weight: 500;"><input type="checkbox" id="crpcheckbox"  name="uspgtype[]" onclick="pgaddionalresponse('crpcheckbox','crppg','crplabel')" value="crppg">&nbsp;CRP</label>
      </div>
      </div>  <br> 
	 
		     <div id="udyogsakhipg">
			 <h4 style="text-decoration: underline;">Udyog Sakhi</h4><br/>
             <div class="form-group col-md-12 row">
			 <div class="red box col-md-5 px-0 ">Name of Udyog Sakhi Associated with the PG</div>
				<div class="col-md-2">
				  <div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id='expradio' value="option1"  checked>
				  <label class="form-check-label" for="exampleRadios1">
					Yes
				  </label>
				   <div class="form-group col-md-11 px-0">
					<input type="text" class='txbx form-control'  hidden="true"/>  
					</div>
				  </div>
				</div>
				
				<div class="col-md-3">
				  <div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id='frsradio' value="option1" checked>
				  <label class="form-check-label" for="exampleRadios1">
					No
				  </label>				 
				  </div>
				</div>	
			    </div>
				
			   <div class="form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-5">No. of Village Covered by PG</label>
			     <div class="form-group col-md-7 px-0">
					<select class="form-control col-md-2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				  </select>
				 </div>
			   </div>
			   
			   <div class="form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-5">No. of Member Associated with PG</label>
			      <div class="form-group col-md-7 px-0">
					<select class="form-control col-md-2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				  </select>
				  </div>
			   </div>
			   
			   <div class="form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-5">No. of Participants in PG</label>
			     <div class="form-group col-md-7 px-0">
					<select class="form-control col-md-2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				  </select>
				 </div>
			   </div>

			</form>			
			</div>
			
			<div id="pashusakhipg" style="display:none">
			 <h4 style="text-decoration: underline;">Pashu Sakhi</h4><br/>
             <div class="form-group col-md-12 row">
			 <div class="red box col-md-5 px-0">Name of Pashu Sakhi Associated with the PG</div>
			 
				
				<div class="col-md-2">
				  <div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id='expradio1' value="option1" checked>
				  <label class="form-check-label" for="exampleRadios1">
					Yes
				  </label>
				   <div class="form-group col-md-7 px-0">
					<input type="text" class='txbx1 form-control' hidden="true"/>  
					</div>
				  </div>
				</div>
				
				<div class="col-md-4">
				  <div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id='frsradio1' value="option1" checked>
				  <label class="form-check-label" for="exampleRadios1">
					No
				  </label>				 
				  </div>
				</div>	
			    </div>
				
			   <div class="form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-5">No. of Village Covered by PG</label>
			     <div class="form-group col-md-7 px-0">
					<select class="form-control col-md-2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				  </select>
				 </div>
			   </div>
			   
			   <div class="form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-5">No. of Member Associated with PG</label>
			      <div class="form-group col-md-7 px-0">
					<select class="form-control col-md-2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				  </select>
				  </div>
			   </div>
			   
			   <div class="form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-5">No. of Participants in PG</label>
			     <div class="form-group col-md-7 px-0">
					<select class="form-control col-md-2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				  </select>
				 </div>
			   </div>
							  
			</form>			
			</div>
			
			<div id="krishisakhipg" style="display:none">
			 <h4 style="text-decoration: underline;">Krishi Sakhi</h4><br/>
             <div class="form-group col-md-12 row">
			 <div class="red box col-md-5 px-0">Name of Krishi Sakhi Associated with the PG</div>
			 
				
					<div class="col-md-2">
				  <div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id='expradio2' value="option1" checked>
				  <label class="form-check-label" for="exampleRadios1">
					Yes
				  </label>
				   <div class="form-group col-md-7 px-0">
					<input type="text" class='txbx2 form-control' hidden="true"/>  
					</div>
				  </div>
				</div>
				
				<div class="col-md-4">
				  <div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id='frsradio2' value="option1" checked>
				  <label class="form-check-label" for="exampleRadios1">
					No
				  </label>				 
				  </div>
				</div>	
			    </div>
				
			   <div class="form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-5">No. of Village Covered by PG</label>
			     <div class="form-group col-md-7 px-0">
					<select class="form-control col-md-2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				  </select>
				 </div>
			   </div>
			   
			   <div class="form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-5">No. of Member Associated with PG</label>
			      <div class="form-group col-md-7 px-0">
					<select class="form-control col-md-2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				  </select>
				  </div>
			   </div>
			   
			   <div class="form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-5">No. of Participants in PG</label>
			     <div class="form-group col-md-7 px-0">
					<select class="form-control col-md-2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				  </select>
				 </div>
			   </div>	  
			</form>			
			</div> 
			
			<div id="crppg" style="display:none">
			 <h4 style="text-decoration: underline;">CRP</h4><br/>
             <div class="form-group col-md-12 row">
			 <div class="red bo col-md-5 px-0">Name of CRP Associated with the PG</div>
			 
       			 <div class="col-md-2">
				  <div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id='expradio3' value="option1" checked>
				  <label class="form-check-label" for="exampleRadios1">
					Yes
				  </label>
				   <div class="form-group col-md-7 px-0">
					<input type="text" class='txbx3 form-control' hidden="true"/>  
					</div>
				  </div>
				</div>
				
				<div class="col-md-4">
				  <div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id='frsradio3' value="option1" checked>
				  <label class="form-check-label" for="exampleRadios1">
					No
				  </label>				 
				  </div>
				</div>	
			    </div>
				
			   <div class="form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-5">No. of Village Covered by PG</label>
			     <div class="form-group col-md-7 px-0">
					<select class="form-control col-md-2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				  </select>
				 </div>
			   </div>
			   
			   <div class="form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-5">No. of Member Associated with PG</label>
			      <div class="form-group col-md-7 px-0">
					<select class="form-control col-md-2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				  </select>
				  </div>
			   </div>
			   
			   <div class="form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-5">No. of Participants in PG</label>
			     <div class="form-group col-md-7 px-0">
					<select class="form-control col-md-2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				  </select>
				 </div>
			   </div>
					</div>
 
				<div class="col-md-12 text-right mb-1">
				<input type="hidden" name="totalvlpgcoung" id="totalvlpgcoung"  value="1" >
				<a class="btn btn-primary"  href="<?php echo base_url().'form-filling/2'; ?>" >Previous</a>
				<button class="btn btn-primary" type="button" name="submit" id="uspgainext" value="Signup" style="display:inline-block;" onclick="window.location='<?php echo base_url().'form-filling/4'; ?>'">Next</button>
				</div>	
				
			</form>			
		
			
			</div>
			</div>
			</div>		
			</div>
			<?php } ?>
			
			
			<?php 	if($this->uri->segment(2) == '5'){ ?>

			<div class="row mt-5">
			<div class="col-md-3">
				<div class="sidebar">
					<ul>
						<li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>form-filling" class="active">GT PG Panel</a></li>
						<li><a href="<?php echo base_url(); ?>memberpanel">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel">Approver Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel">Verifier Panel</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						
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
				<h4 class="m-0"> Book Of Records</h4>
				</div>												
				</div>
				</div>
				<center>  <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error">'.$msg.'</label></fieldset>';?>
			  <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">'.$this->input->get('msg').'</label></fieldset>'; }?></center>
			
		   <form class="row pr-4 pl-4" method="post">
		   
         <div class="col-md-12">
			  <br><br>
			  <h6 class="m-0"> BOOK OF RECORDS (BOOKING KEEPING) *</h6><br>
			  <table class="table p-3 table-bordered table-striped">
			  <thead>
				<tr>
				  
				  <th scope="col">S. No.</th>
				  <th scope="col">Types of Record Books Updated</th>
				  <th scope="col">Yes or No</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				 <td style="font-weight:500;">1.</td>				 
				 <td style="font-weight:500;">Minutes of the Meeting Book*</td>
				 <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">2.</td>				 
				 <td style="font-weight:500;">Bank Book for all transactions*</td>
				   <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				<tr>
				 <td style="font-weight:500;">3.</td>				 
				 <td style="font-weight:500;">Saving Register*</td>
				   <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">4.</td>				 
				 <td style="font-weight:500;">Purchase Sale and Stock Register*</td>
				  <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">5.</td>				 
				 <td style="font-weight:500;">Stock Movement Register*</td>
				  <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">6.</td>				 
				 <td style="font-weight:500;">Bill Book and Receipt Book*</td>
				  <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">7.</td>				 
				 <td style="font-weight:500;">Doule Entry Cash Book*</td>
				  <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">8.</td>				 
				 <td style="font-weight:500;">Loan Ledger*</td>
				  <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>

 
 
				<tr>
				 <td style="font-weight:500;">9.</td>				 
				 <td style="font-weight:500;">Additional Book of Record as per requirement*<p  id="otherselect" style='display:none;'>Other*
				 <input type="text" class="form-control col-md-4"   ></p></td> </td>
				  <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7" onchange='CheckValue(this.value);'>
				    <option value="no">Yes</option>
					<option value="yes" >No</option>					
				  </select>
				  </td>
				</tr>
			  </tbody>
			</table>
			
			  
			  <div class="col-md-12 text-right mb-1">
			  <br>
			  <a class="btn btn-primary"  href="<?php echo base_url().'form-filling/4'; ?>" >Previous</a>
				<button class="btn btn-primary" type="button" name="submit" value="Signup" onclick="window.location='<?php echo base_url().'form-filling/6'; ?>'">Next</button>
			  </div>
				  
			
			</div>
			
		   </form>
			</div>
			</div>
			</div>
			<?php } ?>
			
			
			
			<?php 	if($this->uri->segment(2) == '6'){ ?>

			<div class="row mt-5">
			<div class="col-md-3">
				<div class="sidebar">
				<ul>
						<li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>form-filling" class="active">GT PG Panel</a></li>
						<li><a href="<?php echo base_url(); ?>memberpanel">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel">Approver Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel">Verifier Panel</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						
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
				<h4 class="m-0"> Tranings List</h4>
				</div>												
				</div>
				</div>
				<center>  <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error">'.$msg.'</label></fieldset>';?>
			  <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">'.$this->input->get('msg').'</label></fieldset>'; }?></center>
			
			<div class="row mt-4 ml-2 mr-2"> 
			
			 <div class="col-md-2"><button type="button" class="btn btn-<?php echo ($this->input->get('tltype') == false || $this->input->get('tltype') == 'agri')?'success':'primary'; ?>" onclick="window.location.href='<?php echo base_url(); ?>form-filling/6?tltype=agri'">Agricuture</button></div>
			 <div class="col-md-2"><button type="button" class="btn btn-<?php echo ($this->input->get('tltype') == 'horti')?'success':'primary'; ?>" onclick="window.location.href='<?php echo base_url(); ?>form-filling/6?tltype=horti'">Horticulture</button></div>
			 <div class="col-md-2"><button type="button" class="btn btn-<?php echo ($this->input->get('tltype') == 'livestocks')?'success':'primary'; ?>" onclick="window.location.href='<?php echo base_url(); ?>form-filling/6?tltype=livestocks'">Livestocks</button></div>
			 <div class="col-md-2"><button type="button" class="btn btn-<?php echo ($this->input->get('tltype') == 'fishery')?'success':'primary'; ?>" onclick="window.location.href='<?php echo base_url(); ?>form-filling/6?tltype=fishery'">Fishery</button></div>
			 <div class="col-md-2"><button type="button" class="btn btn-<?php echo ($this->input->get('tltype') == 'sericulture')?'success':'primary'; ?>" onclick="window.location.href='<?php echo base_url(); ?>form-filling/6?tltype=sericulture'">Sericulture</button></div>
			 <div class="col-md-2"><button type="button" class="btn btn-<?php echo ($this->input->get('tltype') == 'others')?'success':'primary'; ?>" onclick="window.location.href='<?php echo base_url(); ?>form-filling/6?tltype=others'">Others</button></div>
			 
			</div>
		 
		 <form class="row pr-4 pl-4" method="post">
		   
         <div class="col-md-12">
			  <br><br>
			  <h6 class="m-0"> Tranings List*</h6><br>
			  <table class="table p-3 table-bordered table-striped">
			  <thead>
				<tr>
				  
				  <th scope="col">S. No.</th>
				  <th scope="col">Types of Training</th>
				  
				  <th scope="col">Yes or No</th>
				</tr>
			  </thead>
			
			  <tbody>
			    <?php if($this->input->get('tltype') == false || $this->input->get('tltype') == 'agri'){ ?>
				<tr>
				 <td style="font-weight:500;">1.</td>				 
				 <td style="font-weight:500;">Basic Livelihoods Training</td>
				 <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">2.</td>				 
				 <td style="font-weight:500;">Farmers Field School</td>
				   <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				<tr>
				 <td style="font-weight:500;">3.</td>				 
				 <td style="font-weight:500;">Pashu Pathshala</td>
				   <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">4.</td>				 
				 <td style="font-weight:500;">Land preparation,ploughing,Tractorisation/Manual</td>
				   <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">5.</td>				 
				 <td style="font-weight:500;">Seed Sorting & treatment</td>
				   <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">6.</td>				 
				 <td style="font-weight:500;">Soil Nutrients Management</td>
				   <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">7.</td>				 
				 <td style="font-weight:500;">Pest Management</td>
				   <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">8.</td>				 
				 <td style="font-weight:500;">Irrigation</td>
				   <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">9.</td>				 
				 <td style="font-weight:500;">Bund formation,uprooting of weeds interculture,transplanting,harvesting,winnowing,Threeshing etc</td>
				   <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">10.</td>				 
				 <td style="font-weight:500;">Harvest Management</td>
				   <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">11.</td>				 
				 <td style="font-weight:500;">Post Harvest Management</td>
				   <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				
			
			<?php } ?>
			
			    <?php if($this->input->get('tltype') == 'livestocks'){ ?>
				<tr>
				 <td style="font-weight:500;">1.</td>				 
				 <td style="font-weight:500;">Basic Livelihoods Training</td>
				 <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">2.</td>				 
				 <td style="font-weight:500;">Farmers Field School</td>
				   <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				<tr>
				 <td style="font-weight:500;">3.</td>				 
				 <td style="font-weight:500;">Pashu Pathshala</td>
				   <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">4.</td>				 
				 <td style="font-weight:500;">Breed Selection</td>
				   <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">5.</td>				 
				 <td style="font-weight:500;">Sty/Shed prepation and management</td>
				   <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">6.</td>				 
				 <td style="font-weight:500;">Feed Management</td>
				   <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">7.</td>				 
				 <td style="font-weight:500;">Breeding</td>
				   <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">8.</td>				 
				 <td style="font-weight:500;">Health Care & Management</td>
				   <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">9.</td>				 
				 <td style="font-weight:500;">Slaughter hygiene management</td>
				   <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr>
				
				
			
			<?php } ?>
			  </tbody>
			</table>
			
			  
			  <div class="col-md-12 text-right mb-1">
			  <br>
			  <a class="btn btn-primary"  href="<?php echo base_url().'form-filling/5'; ?>" >Previous</a>
				<button class="btn btn-primary" type="button" name="submit" value="Signup" onclick="window.location='<?php echo base_url().'form-filling/7'; ?>'">Next</button>
			  </div>
				  
			
			</div>
			
		   </form>
			</div>
			</div>
			</div>
			<?php } ?>
			
			
			<?php 	if($this->uri->segment(2) == '7'){ ?>

			<div class="row mt-5">
			<div class="col-md-3">
				<div class="sidebar">
					<ul>
						<li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>form-filling" class="active">GT PG Panel</a></li>
						<li><a href="<?php echo base_url(); ?>memberpanel">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel">Approver Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel">Verifier Panel</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						
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
							<h4 class="m-0"> Finance Statement/ Support Recieved</h4>
						</div>												
						</div>
	       </div>
		   <center>  <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error">'.$msg.'</label></fieldset>';?>
			  <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">'.$this->input->get('msg').'</label></fieldset>'; }?></center>
			
		   
		   <form class="row pr-4 pl-4" method="post">
		  	<div class="col-md-12">

		
			  <div class="row">
			   <div class="col-md-11"><h6 class="m-0"> SUPPORT RECEIVED BY THE PRODUCERS GROUP MULTIPLE TIME</h6><br></div>
			   <div class="col-md-1">
			   <a href="#" class="btn-sm btn-info" title="Add Task"><i class="fa fa-plus"></i></a>
			   </div>
			   </div>
			  
		      <div class="col-md-12 row">
			   
			<table class="table p-3 table-bordered table-striped">
			  <thead>
				<tr>
				  
				  <th scope="col" >Source of fund</th>
				  <th scope="col">Type of fund</th>
				   <th scope="col">Amount*</th>
				  <th scope="col">Type of support</th>
				  <th scope="col">Amount*</th>
				  <th scope="col">Date</th>
				  <th scope="col">Purpose</th>
				  <th scope="col">Amount</br>(Rupees)</th>
				  <th scope="col">Other</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-12">
				    <option>CLF</option>
					<option>Bank loan</option>
					<option>Others</option>
				  </select>
				  </td>
				   <td class="col-md-3 px-2 text-center">
				  <select class="form-control  col-md-12">
				    <option>Other</option>
				    <option>Working Capital</option>				
				  </select>
				  </td>
				  <td class="col-md-2 px-2 text-center">
				  <input class="form-control" type="number" min="0" placeholder=" ">
				  </td>
				  <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-12">
				    <option>Grant</option>	
                    <option>Loan</option>
                    <option>Others</option>						
				  </select></td>
				  <td class="col-md-2 px-2 text-center">
				  <input class="form-control" type="number" min="0" placeholder=" "></td>
				  <td><input class="form-control " type="date" placeholder=" "></td>
				  <td><input type="text" class="form-control"></td>
				  <td><input type="text" class="form-control"></td>
				    <td class="col-md-3 px-2 text-center">
				  <input class="form-control" type="text" min="0" placeholder=" ">
				  </td>
				</tr>
				
				
				
				<!--tr>
				  <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7">
				    <option>CLF</option>				
				  </select>
				  </td>
				  <td></td>
				  <td></td>
				  <td></td>
				  <td></td>
				</tr-->
				
			   </tbody>
			  </table>
			  
			  <form class="row pr-4 pl-4" method="post">
		  	<div class="col-md-12">
			  <br><br>
			  <div class="row">
			   <div class="col-md-11"><h6 class="m-0"> PAYMENT MODE BY PG</h6><br></div>
			   <div class="col-md-1">
			   <a href="#" class="btn-sm btn-info" title="Add Task"><i class="fa fa-plus"></i></a>
			   </div>
			   </div>
			  
			  <table class="table p-3 table-bordered table-striped">
			  <thead>
				<tr>
				  
				  <th scope="col">Source of fund	</th>
				  <th scope="col">Repayment of principle</th>
				  <th scope="col">Intrest paidout</th>
				  
				  
				  
				</tr>
			  </thead>
			  <tbody>
				
				<tr>
				  <td class="col-md-4 px-2 text-center">
				  <select class="form-control  col-md-12">
				    <option>CLF</option>
					<option>Bank loan</option>
					<option>Others</option>
				  </select>
				  </td>
				  <td><input class="form-control" type="text" placeholder=" "></td>
				  <td><input class="form-control" type="text" placeholder=" "></td>
				  
				  
				</tr>
				
				<!--tr>
				  <td><input class="form-control" type="text" placeholder=" "></td>
				  <td><input class="form-control" type="text" placeholder=" "></td>
				  <td><input class="form-control" type="text" placeholder=" "></td>
				 
				</tr-->
				
			  </tbody>
			</table>
			
			  </div>
			  
			  <div class="col-md-12 text-right mb-1">
			  <br>
			  <a class="btn btn-primary"  href="<?php echo base_url().'form-filling/6'; ?>" >Previous</a>
				<button class="btn btn-primary" type="button" name="submit" value="Signup" onclick="window.location='<?php echo base_url().'form-filling/8'; ?>'">Next</button>
			  </div>
				  
			
			</div>
						
		   </form>
			</div>
			</div>
			</div>
			<?php } ?>
			
			
			<?php 	if($this->uri->segment(2) == '8'){ ?>
			
			<div class="row mt-5">
			<div class="col-md-3">
				<div class="sidebar">
					<ul>
						<li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>form-filling" class="active">GT PG Panel</a></li>
						<li><a href="<?php echo base_url(); ?>memberpanel">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel">Approver Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel">Verifier Panel</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						
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
			<?php } ?>
			
			
			<?php 	if($this->uri->segment(2) == '9'){ ?>

			<div class="row mt-5">
			<div class="col-md-3">
				<div class="sidebar">
					<ul>
						<li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>form-filling" class="active">GT PG Panel</a></li>
						<li><a href="<?php echo base_url(); ?>memberpanel">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel">Approver Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel">Verifier Panel</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						
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
							<h4 class="m-0">Monthly Business Summary</h4>
						</div>												
						</div>
	       </div>
		   <center>  <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error">'.$msg.'</label></fieldset>';?>
			  <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">'.$this->input->get('msg').'</label></fieldset>'; }?></center>
			
		   <form class="row pr-4 pl-4" method="post">
		   
		  	<div class="col-md-12">
			  <br>
			  <h4 class="m-0"> Monthly Business Summary:</h4><br><br>
			   <div class="row">
			   <div class="col-md-11"><h6 class="m-0"> COMMODITY WISE BUSINESS DURING THE MONTH</h6><br></div>
			   <div class="col-md-1">
			   <a href="#" class="btn-sm btn-info" title="Add Task"><i class="fa fa-plus"></i></a>
			   </div>
			   </div>
			  <table class="table p-3 table-bordered table-striped">
			  <thead>
				<tr>				  
				  <th scope="col">Commodity Name*</th>
				  <th scope="col">Opening <br/>stock* (Qtl.)</th>
				  <th scope="col">Procurement <br/>Quantity*(Qtl.)</th>
				  <th scope="col">Sale Quantity*(Qtl.)</th>
				  <th scope="col">Closing stock*(Qtl.) </th> 
				  <th scope="col">Surplus <br/>Quantity*(Qtl.)</th>
				</tr>
			  </thead>   
			  <tbody>
				
				
				<tr>
				  <td><input class="form-control" type="text" placeholder="TEXT"></td>
				  <td><input class="form-control" type="text" placeholder="In Fig">
				  <div class="row mt-2"> 
				  <div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="0"/> </div>
				  <div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
				  
				  </div>
				  </td>
				  <td><input class="form-control" type="text" placeholder="In Fig">
				   <div class="row mt-2"> 
				  <div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="0"/> </div>
				  <div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
				  </div></td>
				  
				  <td><input class="form-control" type="text" placeholder="In Fig">
				  <div class="row mt-2"> 
				  <div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="0"/> </div>
				  <div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
				  </div></td>
				  <td><input class="form-control" type="text" placeholder="In Fig">
				   <div class="row mt-2"> 
				  <div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="0"/> </div>
				  <div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
				  </div></td>
				  
				    <td><input class="form-control" type="text" placeholder="In Fig">
				  <div class="row mt-2"> 
				  <div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="0"/> </div>
				  <div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
				  </div></td>
				</tr>
				
			  </tbody>
			</table>
			  <table class="table p-3 table-bordered table-striped">
			  <thead>
				<tr>				  
				  <th scope="col">Commodity Name*</th>
				  <th scope="col">Opening <br/>Quantity* (Qtl.)</th>
				  <th scope="col">Wastage  <br/>Quantity*(Qtl.)</th>
				</tr>
			  </thead>
			  <tbody>
				
				
				<tr>
				  <td><input class="form-control" type="text" placeholder="TEXT"></td>
				  <td><input class="form-control" type="text" placeholder="In Fig">
				  <div class="row mt-2"> 
				  <div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="0"/> </div>
				  <div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
				  
				  </div>
				  </td>
				  <td><input class="form-control" type="text" placeholder="In Fig">
				   <div class="row mt-2"> 
				  <div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="0"/> </div>
				  <div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
				  </div></td>
				  
				  
				</tr>
				
			  </tbody>
			</table>
			<table class="table p-3 table-bordered table-striped">
			  <thead>
				<tr>				  
				  <th scope="col">Commodity Name*</th>
				  <th scope="col">Procurement<br/>Quantity* (Qtl.)</th>
				  <th scope="col">Wastage  <br/>Quantity*(Qtl.)</th>
				</tr>
			  </thead>
			  <tbody>
				
				
				<tr>
				  <td><input class="form-control" type="text" placeholder="TEXT"></td>
				  <td><input class="form-control" type="text" placeholder="In Fig">
				  <div class="row mt-2"> 
				  <div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="0"/> </div>
				  <div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
				  
				  </div>
				  </td>
				  <td><input class="form-control" type="text" placeholder="In Fig">
				   <div class="row mt-2"> 
				  <div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="0"/> </div>
				  <div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
				  </div></td>
				  
				  
				</tr>
				
			  </tbody>
			</table>
			<table class="table p-3 table-bordered table-striped">
			  <thead>
				<tr>				  
				  <th scope="col">Commodity Name*</th>
				  <th scope="col">Sale<br/>Quantitys* (Qtl.)</th>
				  <th scope="col">Wastage  <br/>Quantity*(Qtl.)</th>
				</tr>
			  </thead>
			  <tbody>
				
				
				<tr>
				  <td><input class="form-control" type="text" placeholder="TEXT"></td>
				  <td><input class="form-control" type="text" placeholder="In Fig">
				  <div class="row mt-2"> 
				  <div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="0"/> </div>
				  <div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
				  
				  </div>
				  </td>
				  <td><input class="form-control" type="text" placeholder="In Fig">
				   <div class="row mt-2"> 
				  <div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="0"/> </div>
				  <div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
				  </div></td>
				  
				  
				</tr>
				
			  </tbody>
			</table>
			<table class="table p-3 table-bordered table-striped">
			  <thead>
				<tr>				  
				  <th scope="col">Commodity Name*</th>
				  <th scope="col">Closing stock<br/> (Qtl.)</th>
				  <th scope="col">Wastage  <br/>Quantity*(Qtl.)</th>
				</tr>
			  </thead>
			  <tbody>
				
				
				<tr>
				  <td><input class="form-control" type="text" placeholder="TEXT"></td>
				  <td><input class="form-control" type="text" placeholder="In Fig">
				  <div class="row mt-2"> 
				  <div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="0"/> </div>
				  <div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
				  
				  </div>
				  </td>
				  <td><input class="form-control" type="text" placeholder="In Fig">
				   <div class="row mt-2"> 
				  <div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="0"/> </div>
				  <div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
				  </div></td>
				  
				  <table class="table p-3 table-bordered table-striped">
			  <thead>
				<tr>				  
				  <th scope="col">Commodity Name*</th>
				  <th scope="col">Surplus<br/>Quantity* (Qtl.)</th>
				  <th scope="col">Wastage  <br/>Quantity*(Qtl.)</th>
				</tr>
			  </thead>
			  <tbody>
				
				
				<tr>
				  <td><input class="form-control" type="text" placeholder="TEXT"></td>
				  <td><input class="form-control" type="text" placeholder="In Fig">
				  <div class="row mt-2"> 
				  <div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="0"/> </div>
				  <div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
				  
				  </div>
				  </td>
				  <td><input class="form-control" type="text" placeholder="In Fig">
				   <div class="row mt-2"> 
				  <div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="0"/> </div>
				  <div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
				  </div></td>
				  
				  
				</tr>
				
			  </tbody>
			</table>
				  
				  
				</tr>
				
			  </tbody>
			</table>
			
			<!--table class="table p-3 table-bordered table-striped">
			  <thead>
				<tr>				  
				  <th scope="col">Commodity Name*</th>
				  <th scope="col">Surplus<br/> (Amt.)</th>
				  <th scope="col">Surplus= Sale - Procurement </th>
				</tr>
			  </thead>
			  <tbody>
				
				
				<tr>
				  <td><input class="form-control" type="text" placeholder="TEXT"></td>
				  <td><input class="form-control" type="text" placeholder="In Fig">
				  <div class="row mt-2"> 
				  <div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="0"/> </div>
				  <div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
				  
				  </div>
				  </td>
				  <td><input class="form-control" type="text" placeholder="In Fig">
				   <div class="row mt-2"> 
				  <div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="0"/> </div>
				  <div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
				  </div></td>
				  
				  
				</tr>
				
			  </tbody>
			</table-->
			
			  <div class="col-md-12 text-right mb-1">
			  <br>
			  <a class="btn btn-primary"  href="<?php echo base_url().'form-filling/8'; ?>" >Previous</a>
				<button class="btn btn-primary" type="button" name="submit" value="Signup" onclick="window.location='<?php echo base_url().'form-filling/14'; ?>'">Next</button>
			  </div>
				  
			
			</div>
						
		   </form>
			</div>
			</div>
			</div>
			<?php } ?>
			
			<?php 	if($this->uri->segment(2) == '14'){ ?>
			
			<div class="row mt-5">
			<div class="col-md-3">
				<div class="sidebar">
					<ul>
						<li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>form-filling" class="active">GT PG Panel</a></li>
						<li><a href="<?php echo base_url(); ?>memberpanel">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel">Approver Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel">Verifier Panel</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						
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
							<h4 class="m-0">Surplus Use</h4>
						</div>												
						</div>
	       </div>
		   <center>  <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error">'.$msg.'</label></fieldset>';?>
			  <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">'.$this->input->get('msg').'</label></fieldset>'; }?></center>
			
		   <form class="row pr-4 pl-4" method="post">
		   
			
			
			<div class="col-md-12">
			<div class="row mt-4 mb-5">
			<div class="col-md-6">
			<div class="form-group"><label for="inputname" style="font-weight:500;" class="col-form-label">Payment to PG Member</label><input type="number" class="form-control col-md-8" min="0" id="inputname"></div>
			<br/>
			<div class="form-group"><label for="inputname" style="font-weight:500;" class="col-form-label">Payment Due to PG Member</label><input type="number" class="form-control col-md-8" min="0" id="inputname"></div>
			</div>
			
			<div class="col-md-6">
			<div class="form-group"><label for="inputname" style="font-weight:500;" class="col-form-label">Payment Due to PG Member</label><input type="number" class="form-control col-md-8" min="0" id="inputname"></div>
			<br/>
			<div class="form-group"><label for="inputname" style="font-weight:500;" class="col-form-label">Payment Due to Non PG Member</label><input type="number" class="form-control col-md-8" min="0" id="inputname"></div><br/>
			</div>
			
			<div class="col-md-12">
			<div class="form-group col-md-12 row"><label for="inputname" style="font-weight:500;" >Re Invest to PG: &nbsp;&nbsp;</label><div class="col-md-12">
			   
				  <div class="form-check">
					<input class="form-check-input addtnalact" name="inverttopg" type="radio" id="gridCheck1" onclick="enabletxtinvertopg('inputadditionalactothers1')">
					<label class="form-check-label" for="gridCheck1">
					 Infrastructure
					</label>
					<div class="form-group col-md-2"  style="display:none;" id="inputadditionalactothers1" >
					<input type="text" class="form-control">
					</div>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" name="inverttopg" type="radio" id="gridCheck1" onclick="enabletxtinvertopg('inputadditionalactothers2')" >
					<label class="form-check-label" for="gridCheck1">
					 Idle
					</label>
					<div class="form-group col-md-2" style="display:none;" id="inputadditionalactothers2" >
					<input type="text" class="form-control">
					</div>
				  </div>
				  
				  <div class="form-check">
					<input class="form-check-input addtnalact" name="inverttopg" type="radio" id="gridCheck1" onclick="enabletxtinvertopg('inputadditionalactothers3')">
					<label class="form-check-label" for="gridCheck1">
					 Others
					</label>
					<div class="form-group col-md-2"  style="display:none;" id="inputadditionalactothers3" >
					<input type="text" class="form-control">
					</div>
				  </div>
				</div><br/>
			</div>
		
			
			</div>		
						
			<div class="col-md-12 text-right mb-1">
			        <a class="btn btn-primary"  href="<?php echo base_url().'form-filling/9'; ?>" >Previous</a>
					<button class="btn btn-primary" type="button" name="submit" value="Signup" onclick="window.location='<?php echo base_url().'form-filling/10'; ?>'">Next</button>
			</div>
			
			</div>		
		   </form>
			</div>
			</div>
			</div>
			
			
			<?php } ?>
			
			
			<?php 	if($this->uri->segment(2) == '10'){ ?>

			<div class="row mt-5">
			<div class="col-md-3">
				<div class="sidebar">
					<ul>
						<li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>form-filling" class="active">GT PG Panel</a></li>
						<li><a href="<?php echo base_url(); ?>memberpanel">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel">Approver Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel">Verifier Panel</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						
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
							<h4 class="m-0"> Finance Transaction</h4>
						</div>												
						</div>
	       </div>
		   <center>  <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error">'.$msg.'</label></fieldset>';?>
			  <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">'.$this->input->get('msg').'</label></fieldset>'; }?></center>
			
			   <form class="row pr-4 pl-4" method="post">
		   
		  	<div class="col-md-12">
			  <br>
			  <h6 class="m-0"> MONTHLY FINANCIAL TRANSACTION DETAILS</h6><br><br>
			  <table class="table p-3 table-bordered table-striped">
			  <thead>
				<tr>				  
				  <th scope="col"></th>
				  <th scope="col">Cash in hand* (Cash Book in Rupees)</th>
				  <!--th scope="col">Cash in Bank*(Bank Book Rs.)</th-->
				  <th scope="col">Total (Rs.)</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <td style="font-weight:500;">A. Opening Balance (to be brought forward)*</td>
				  <td></td>
				  <!--td></td-->				 
				  <td><input class="form-control" type="text" placeholder=" "></td>
				</tr>
				
				<tr>
				  <td style="font-weight:500;">Receipts*</td>
				  <td style="font-weight:500;">Receipts*</td>
				  <!--td style="font-weight:500;">Payments*</td-->				 
				  <td><input class="form-control" type="text" placeholder=" "></td>
				</tr>
				
				<tr>
				  <td style="font-weight:500;">B1. Against sales proceeds*</td>
				  <td></td>
				   <!--td></td-->				 
				  <td><input class="form-control" type="text" placeholder=" "></td>
				</tr>
				
				<tr>
				  <td style="font-weight:500;">B2. Other receipts*</td>
				  <td></td>
				   <!--td></td-->				 
				  <td><input class="form-control" type="text" placeholder=" "></td>
				</tr>
				
				<tr>
				  <td style="font-weight:500;">B. Total Receipts*</td>
				  <td></td>
				   <!--td></td-->				 
				  <td><input class="form-control" type="text" placeholder=" "></td>
				</tr>
				
				
				<tr>
				  <td style="font-weight:500;">C1. Payment against procurement of commodities*</td>
				  <td>--------</td>
				   <!--td></td-->			 
				  <td><input class="form-control" type="text" placeholder=" "></td>
				</tr>
				
				<tr>
				  <td style="font-weight:500;">C2. Commission to Community Cadres* (variable payment)*</td>
				  <td>--------</td>
				   <!--td></td-->				 
				  <td><input class="form-control" type="text" placeholder=" "></td>
				</tr>
				
				<tr>
				  <td style="font-weight:500;">C3. Other expenditures*</td>
				  <td>--------</td>
				   <!--td></td-->					 
				  <td><input class="form-control" type="text" placeholder=" "></td>
				</tr>
				
				<tr>
				  <td style="font-weight:500;">C. Total Expenditure/Payments*</td>
				  <td>--------</td>
				   <!--td></td-->				 
				  <td><input class="form-control" type="text" placeholder=" "></td>
				</tr>
				
			  </tbody>
			</table>
			
			  <div class="col-md-12 text-right mb-1">
			  <br>
			  <a class="btn btn-primary"  href="<?php echo base_url().'form-filling/14'; ?>" >Previous</a>
				<button class="btn btn-primary" type="button" name="submit" value="Signup" onclick="window.location='<?php echo base_url().'form-filling/11'; ?>'">Next</button>
			  </div>
				  
			
			</div>
						
		   </form>
		   
		   
			</div>
			</div>
			</div>
			<?php } ?>
			
			
			
			<?php 	if($this->uri->segment(2) == '11'){ ?>
			<div class="row mt-5">
			<div class="col-md-3">
				<div class="sidebar">
					<ul>
						<li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>form-filling" class="active">GT PG Panel</a></li>
						<li><a href="<?php echo base_url(); ?>memberpanel">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel">Approver Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel">Verifier Panel</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						
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
			   <div class="col-md-11"><h6 class="m-0"> Closing Balance</h6><br></div>
			   <div class="col-md-1">
			   <a href="#" class="btn-sm btn-info" title="Add Task"><i class="fa fa-plus"></i></a>
			   </div>
			   </div>
				
	       </div>
		   <center>  <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error">'.$msg.'</label></fieldset>';?>
			  <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">'.$this->input->get('msg').'</label></fieldset>'; }?></center>
		  
		  <form class="row pr-4 pl-4" method="post">
		   
		  	<div class="col-md-12">
			  <br>
			  <h6 class="m-0"> CLOSING BALANCE (A+B-C)</h6><br><br>
			  <table class="table p-3 table-bordered table-striped">
			  <thead>
				<tr>				  
				  <th scope="col">Cash in hand* (Cash Book in Rupees)</th>
				  <th scope="col">Cash in Bank* (Bank Book in Rupees)</th>
				  <th scope="col">Total* (number in Rupees)</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <td><input class="form-control" type="text" placeholder=" "></td>
				  <td><input class="form-control" type="text" placeholder=" "></td>				 
				  <td><input class="form-control" type="text" placeholder=" "></td>
				</tr>
				
				
				
			  </tbody>
			</table>
			<br/>
			<h6 class="m-0">Payment yet to be received from the buyer* (in Rupees)</h6><br/>
			<input class="form-control" type="text" placeholder=" "><br/><br/>
			<h6 class="m-0">Payment yet to be made to producers member* (in rupees)</h6><br/>
			<input class="form-control" type="text" placeholder=" "><br/><br/>
			
			  <div class="col-md-12 text-right mb-1">
			  <br>
			  <a class="btn btn-primary"  href="<?php echo base_url().'form-filling/10'; ?>" >Previous</a>
				<button class="btn btn-primary" type="button" name="submit" value="Signup" onclick="window.location='<?php echo base_url().'form-filling/12'; ?>'">Next</button>
			  </div>
				  
			
			</div>
						
		   </form>
		   
			</div>
			</div>
			</div>	
			<?php } ?>
			
			<?php 	if($this->uri->segment(2) == '12'){ ?>
			<div class="row mt-5">
			<div class="col-md-3">
				<div class="sidebar">
					<ul>
						<li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>form-filling" class="active">GT PG Panel</a></li>
						<li><a href="<?php echo base_url(); ?>memberpanel">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel">Approver Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel">Verifier Panel</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						
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
							<h4 class="m-0"> Final</h4>
						</div>												
						</div>
	       </div>
		   <center>  <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error">'.$msg.'</label></fieldset>';?>
			  <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">'.$this->input->get('msg').'</label></fieldset>'; }?></center>
			
		   <form class="row pr-4 pl-4" method="post">
		   
			
			<div class="col-md-12">
			<div class="row mt-4 mb-5">
			<div class="col-md-6">
			<div class="form-group"><label for="inputname" style="font-weight:500;" class="col-form-label">Name  of Enumerator *</label><input type="text" class="form-control col-md-8" id="inputname"></div>
			<br/>
			<div class="form-group"><label for="inputname" style="font-weight:500;" class="col-form-label">Name of PG Secretary/President</label><input type="text" class="form-control col-md-8" id="inputname"></div>
			</div>
			
			<div class="col-md-6">
			<div class="form-group"><label for="inputname" style="font-weight:500;" class="col-form-label">Name of Enumerator*</label><input type="text" class="form-control col-md-8" id="inputname"></div>
			<br/>
			<div class="form-group"><label for="inputname" style="font-weight:500;" class="col-form-label">Name of Block Coordinator</label><input type="text" class="form-control col-md-8" id="inputname"></div><br/>
			</div>
			
			<div class="col-md-12">
			<div class="form-group col-md-12 row"><label for="inputname" style="font-weight:500;" >Date: *&nbsp;&nbsp;</label><input type="date" class="form-control col-md-5" id="inputname"></div><br/>
			</div>

			<div class="col-md-12">
			<div class="form-group col-md-12 row"><label for="inputname" style="font-weight:500;" >Place:&nbsp;&nbsp;&nbsp;</label><input type="text" class="form-control col-md-5" id="inputname"></div>
			</div>				
			
			</div>		
						
			<div class="col-md-12 text-right mb-1">
			        <a class="btn btn-primary"  href="<?php echo base_url().'form-filling/11'; ?>" >Previous</a>
					<button class="btn btn-primary" type="button" name="submit" value="Signup" onclick="window.location='<?php echo base_url().'form-filling/13'; ?>'">Next</button>
			</div>
			
			</div>		
		   </form>
			</div>
			</div>
			</div>
			<?php } ?>
			
			
			
			<?php 	if($this->uri->segment(2) == '13'){ ?>

			<div class="row mt-5">
			<div class="col-md-3">
				<div class="sidebar">
					<ul>
						<li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>form-filling" class="active">GT PG Panel</a></li>
						<li><a href="<?php echo base_url(); ?>memberpanel">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel">Approver Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel">Verifier Panel</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						
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
							<h4 class="m-0"> Review</h4>
						</div>												
						</div>
	       </div>
		   <center>  <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error">'.$msg.'</label></fieldset>';?>
			  <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">'.$this->input->get('msg').'</label></fieldset>'; }?></center>
			
		   <form class="row pr-4 pl-4" method="post">
		   
			<div class="row">
			<div class="col-md-12">
			<h6 class="m-0"> Coming Soon</h6>
			</div>
			
						
						
			<div class="col-md-12 text-right mb-1">
					<button class="btn btn-primary" type="button" name="submit" value="Signup" style="background:#2B78E4;">Submit</button>
					<button class="btn btn-primary" type="button" name="submit" value="Signup" style="background:#8E7CC3;">Review</button>
			</div>
						
		   </form>
			</div>
			</div>
			</div>
			<?php } ?>
			
		</div>		
	</div>
	<br/><br/><br/>
</section>

<script language='javascript' type='text/javascript'>

    function additionalactothers(){
		
		var checkBox = document.getElementById("vlothers");
		
		if (checkBox.checked == true){
			document.getElementById('inputadditionalactothers').style.display = "block";
		  } else {
			document.getElementById('inputadditionalactothers').style.display = "none";
		  }
			
	}
 
	
	function additionalactnota(){
		//alert($('.addtnalact').prop('checked'));
		//alert($(".addtnalact").is(':checked'));
		if($(".addtnalactnoa").is(':checked') == true){
		$('.addtnalact').prop('checked', false); 
		}
		
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
 
function CheckValue(val){
 var element=document.getElementById('otherselect');
 if(val=='yes')
   element.style.display='block';
 else  
   element.style.display='none';
}
 
function CheckValue(val){
 var element=document.getElementById('yesselect');
 if(val=='yes')
   element.style.display='block';
 else  
   element.style.display='none';
}

 
</script>

<script>
$(document).ready(function(){
    $('.colorRadio').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });
});

    function pgaddionalresponse(id,value,label){
		
		//alert(id);
		//alert(value);
		 var checkBox = document.getElementById(id);
		// alert(checkBox.checked); 
		  
		 if (checkBox.checked == true){
			document.getElementById(value).style.display = "block";
			document.getElementById(label).style.backgroundColor = "#28a745";
			document.getElementById(label).style.borderColor = "#28a745";
			document.getElementById('totalvlpgcoung').value = parseInt(document.getElementById('totalvlpgcoung').value) + 1;
			if(document.getElementById('totalvlpgcoung').value >= 1){
				
				document.getElementById('uspgainext').style.display = "inline-block"; 
				
			}
		  } else {
			document.getElementById(value).style.display = "none";
			document.getElementById(label).style.backgroundColor = "#990000";
			document.getElementById(label).style.borderColor = "#990000";
			document.getElementById('totalvlpgcoung').value = parseInt(document.getElementById('totalvlpgcoung').value) - 1;
			if(document.getElementById('totalvlpgcoung').value <= 0){
				
				document.getElementById('uspgainext').style.display = "none"; 
				
			}
		  }
	}

    </script>
 
       			<script>	
			$(function() {
			 $('#expradio').click(function() {
					$('.txbx').attr('hidden',false);
			});           
			$('#frsradio').click(function() {
					$('.txbx').attr('hidden',true);
				});
			});
			$(function() {
			 $('#expradio1').click(function() {
					$('.txbx1').attr('hidden',false);
			});           
			$('#frsradio1').click(function() {
					$('.txbx1').attr('hidden',true);
				});
			});
			$(function() {
			 $('#expradio2').click(function() {
					$('.txbx2').attr('hidden',false);
			});           
			$('#frsradio2').click(function() {
					$('.txbx2').attr('hidden',true);
				});
			});
			$(function() {
			 $('#expradio3').click(function() {
					$('.txbx3').attr('hidden',false);
			});           
			$('#frsradio3').click(function() {
					$('.txbx3').attr('hidden',true);
				});
			});
			
			function enabletxtinvertopg(itptype){
				
				document.getElementById(itptype).style.display = 'block';
				
				
			}
			</script>
