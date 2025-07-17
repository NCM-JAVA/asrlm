<section>
	<div class="container-fluid">
		<div class="row list-view">
 
			<?php 	if($this->uri->segment(2) == '' || $this->uri->segment(2) == '0'  || $this->uri->segment(2) == '1' ){ ?>
			<div class="col-md-2">
				<div class="sidebar">
					<ul>
						
						<li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>memberpanel" class="active">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel" >Approver Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel">Verifier Panel</a></li>
						<li><a href="<?php echo base_url(); ?>form-filling"> PG Panel</a></li>
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
			
			
			<?php 	if($this->uri->segment(2) == '2'){ ?>
			<div class="row mt-5">
			<div class="col-md-3">
				<div class="sidebar">
					<ul>
						<li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>memberpanel" class="active">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel" >Approver Panel</a></li>
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
				<input type="text"  class="form-control col-md-6" placeholder="0" required />
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
				
				<input type="text" class="form-control col-md-6" maxlength="12" min="0" placeholder="0"required />
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
				<input type="text" class="form-control col-md-6" placeholder="0" required />
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
				<input type="text" class="form-control col-md-6" placeholder="0" required />
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
				<input type="text" class="form-control col-md-6" placeholder="0" required />
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
			
			<?php 	if($this->uri->segment(2) == '3'){ ?>
			
			<div class="row mt-5">
				<div class="col-md-3">
				<div class="sidebar">
					<ul>
						 <li><a href="<?php echo base_url(); ?>user-profile">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>memberpanel" class="active">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel" >Approver Panel</a></li>
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
				<select class="custom-select col-md-6" id="validationTooltip04" required>
					<option selected disabled value="">Choose...</option>
					<option>Paddy (Dhaan)</option>
					<option>Groundnut (Badam)</option>
					<option>Sugarcane (Kuhiyar)</option>
					<option>Safflower</option>
					<option>Sunflower (Beliful)</option>
					
					
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
					Commodity 2 *
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select class="custom-select col-md-6" id="validationTooltip04" required>
					<option selected disabled value="">Choose...</option>
					<option>Paddy (Dhaan)</option>
					<option>Bajra</option>
					<option>Mungbean/ Urdbean (Moong Dal)</option>
					<option>Pulses / Lentil</option>
					<option>Sugarcane (Kuhiyar)</option>
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
				<select class="custom-select col-md-6" id="validationTooltip04" required>
					<option selected disabled value="">Choose...</option>
					<option>Paddy (Dhaan)</option>
					<option>Mungbean/ Urdbean (Mug Dail)</option>
					<option>Groundnut (Badam)</option>
					<option>Sunflower (Beliful)</option>
					
				
					
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
					Commodity 4 *
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select class="custom-select col-md-6" id="validationTooltip04" required>
					<option selected disabled value="">Choose...</option>
					<option>Oil Seed (Xoriyo)</option>
					<option>Mungbean/Urdean (Mug Dail)</option>
					<option>Chickpea (Kabuli Boot)</option>
					<option>Gram (Boot Dail)</option>
					<option>Masur (Mosoor Dail)</option>
					
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
				<select class="custom-select col-md-6" id="validationTooltip04" required>
					<option selected disabled value="">Choose...</option>
					    <option>Pulses/Lentil (Mahor Dail)</option>
						<option>Pea (Motor)</option>
						<option>Groundnut (Badam)</option>
						<option>Horse Gram</option>
						<option>Jute (Mora Paat)</option>

						
				</select>
				  <div class="invalid-tooltip">
					Please provide a valid zip.
				  </div>
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
				<select class="custom-select col-md-6" id="validationTooltip04" required>
					<option selected disabled value="">Choose...</option>
					<option>Banana</option>
					<option>Jackfruit (kathol)</option>
					<option>Pineapple (Anarokh)</option>
					<option>Assam Lemon (Nemu)</option>
					<option>Orange (Komola)</option>
					<option>Guava (Modhuriaam)</option>
					<option>Mango (Aam)</option>
					<option>Papaya (Omita)</option>
					<option>Sapota (Sopeta)</option>
					<option>Au Tenga</option>
					<option>Ash Gourd(Kumoora)</option>
					<option>Bitter Gourd (Tita Kerela)</option>
					<option>Bottle Gourd (Lau)</option>
					<option>Brinjal (Begena)</option>
					<option>Broccoli</option>
					<option>Cabbage (Bondhakobi)</option>
					<option>Capsicum</option>
					<option>Carrot (Gajor)</option>
					<option>Cauliflower (Phulkobi)</option>
					<option>Chow-Chow (Squash)</option>
					<option>Cowpea (Lesera/Dangbodi)</option>
					<option>Knol Khol (Oulkobi)</option>
					<option>Garlic (Nohoru)</option>
					<option>French Bean</option>
					<option>Ladies Finger(Bhendi)</option>
					<option>Drumstiick (Sajina)</option>
					<option>Cucumber (Tiyoh)</option>
					<option>Muskmelon(Siral)</option>
					<option>Spine Gourd (Bhat Kerela)</option>
					<option>Radish (Mula)</option>
					<option>Pea (Motor)</option>
					<option>Pointed Gourd (Potol)</option>
					<option>Lettuce (Lai xak)</option>
					<option>Sponge Gourd (Bhol)</option>
					
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
					Commodity 2 *
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select class="custom-select col-md-6" id="validationTooltip04" required>
					<option selected disabled value="">Choose...</option>
					<option>Carambola (Kordoi)</option>
					<option>Leteku</option>
					<option>Thekera</option>
					<option>Paniyal</option>
					<option>Rabab Tenga</option>
					<option>Tomato (Bilahi)</option>
					<option>Water Melon (Tormuj)</option>
					<option>Snake Gourd (Chichinda)</option>
					<option>Spinach Beet (Paleng Xak)</option>
					<option>Pumkin ( Ronga Lau)</option>
					<option>Cucurbits</option>
					<option>Yam (Ronga Alu)</option>
					<option>Garlic (Nohoru)</option>
					<option>Black Pepper(Jaluk)</option>
					<option>Cumin & Black Cumin (Jeera)</option>
					<option>Mint (Pudina)</option>
					<option>Fenegreek (Meethi)</option>
					<option>Bay Leaf (Tej Paat)</option>
					<option>Curry Leaf (N0roshingho)</option>
					<option>Vanilla</option>
					<option>Fennel (Souf)</option>
					<option>Marigold</option>
					<option>Zinnia</option>
					<option>Salvia</option>
					<option>Portulaca</option>
					<option>Petunia</option>
					<option>Carnation</option>
					<option>Teuberoac</option>
					<option>Gladioli</option>
					<option>Gerbera</option>
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
				<select class="custom-select col-md-6" id="validationTooltip04" required>
					<option selected disabled value="">Choose...</option>
					<option>Ash Gourd(Kumoora)</option>
					<option>Bitter Gourd (Tita Kerela)</option>
					<option>Bottle Gourd (Lau)</option>
				<option>Brinjal (Begena)</option>
				<option>Broccoli</option>
				<option>Bougainvillea</option>
				<option>Mussaenda</option>
				<option>Chrysanthemum</option>
				<option>Dahlia</option>
				<option>Orchids</option>
				<option>Antirrhinum</option>
				<option>Aster</option>
				<option>Balsam</option>
				<option>Calendula</option>
				<option>Amlakhi</option>
				<option>Tulshi</option>
				<option>Silikha </option>
				<option>Bhumura</option>
				<option>Bael Nefafu</option>
				<option>Brahmi Sak</option>
				<option>Maha Bhringaraj</option>
				<option></option>
				<option></option>
				<option></option>
				<option></option>
				<option></option>
				<option></option>
				<option></option>
				<option></option>
				<option></option>
				<option></option>
				<option></option>
				<option></option>
				<option></option>
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
					Commodity 4 *
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select class="custom-select col-md-6" id="validationTooltip04" required>
					<option selected disabled value="">Choose...</option>
					    <option>Potato (Aloo)</option>
						<option>Katha Alu</option>
						<option>Sweet Potato (Mitha Alu)</option>
						<option>Tapica (kosu)</option>
						<option>Yam (Ronga Alu)</option>
						<option>Modhusolen</option>
						<option>Sarpagandha</option>
						<option>Kalmegh</option>
						<option>Neem</option>
						<option>Safed Musil</option>
						<option>Citronella</option>
						<option>Coffee</option>
						<option>Agar</option>
						<option>Tea (Saah)</option>
						<option>Rubber</option>
						
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
				<select class="custom-select col-md-6" id="validationTooltip04" required>
					<option selected disabled value="">Choose...</option>
					<option>Coriander (Dhonia)</option>
					<option>Ginger (Adda)</option>
					<option>Chili (Jholokia)</option>
					<option>Turmeric (Halodhi)</option>
					<option>Onion (Piaz)</option>
					<option>Patchouli</option>
					<option>Lemon Grass</option>
					<option>Vetiver</option>
					<option>Areca Nut (Tamul)</option>
					<option>Coco Nut (Narikol)</option>
					<option>Cashew Nut (Kaju)</option>
					<option>Betel (Pan)</option>
					<option>Bamboo Plants</option>
					
				</select>
				  <div class="invalid-tooltip">
					Please provide a valid zip.
				  </div>
			     </div>
				 </div>
			   </div>
			   </div>
				  
				</div>
				  <div class="col-md-12 text-right mb-1"> <br/> <br/>
				   <a class="btn btn-primary" href="<?php echo base_url();?>memberpanel/2">Previous</a>
					<button class="btn btn-primary" type="button" name="submit" value="Signup" onclick="window.location='<?php echo base_url().'memberpanel/4'; ?>'">Next</button>
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
						<li><a href="<?php echo base_url(); ?>memberpanel" class="active">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel" >Approver Panel</a></li>
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
				<select class="custom-select col-md-6" id="validationTooltip04" required>
					<option selected disabled value="">Choose...</option>
					<option>Live Pig</option>
					<option>Cow (Goru)</option>
					<option>Bullock (Xaar Goru)</option>
					<option>Buffalo (Moah)</option>
					<option>Goat (Sagoli)</option>
					<option>Sheep (Bhera)</option>
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
			   <label class="form-check-label" for="gridCheck1" style="font-weight:500;">Commodity 2 * </label>
			   
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<select class="custom-select col-md-6" id="validationTooltip04" required>
					<option selected disabled value="">Choose...</option>
				<option>Backyard Poultry</option>
				<option>Pigeon (Paro)</option>
				<option>Broiler (Broiler)</option>
				<option>Layer Hen</option>
				<option>Duck</option>
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
				<select class="custom-select col-md-6" id="validationTooltip04" required>
					<option selected disabled value="">Choose...</option>
					<option>Cow (Goru)</option>
					<option>Pigeon (Paro)</option>
				<option>Broiler (Broiler)</option>
				<option>Layer Hen</option>
				<option>Duck</option>
					
					
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
				<select class="custom-select col-md-6" id="validationTooltip04" required>
					<option selected disabled value="">Choose...</option>
					<option>Bullock (Xaar Goru)</option>
					<option>Buffalo (Moah)</option>
					<option>Goat (Sagoli)</option>
					<option>Sheep (Bhera)</option>
					<option>Backyard Poultry</option>
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
				<select class="custom-select col-md-6" id="validationTooltip04" required>
					<option selected disabled value="">Choose...</option>
					<option>Goat (Sagoli)</option>
					<option>Sheep (Bhera)</option>
					<option>Backyard Poultry</option>
					<option>Backyard Poultry</option>
				<option>Pigeon (Paro)</option>
					
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
					<select class="form-control col-md-6" onchange="getserioptions(this.value)">
					<option>Catfish (Magur)</option>
					<option>Eel (Kusiya)</option>
					<option>Catla (Bahu)</option>
					<option>Hilsa (Elisha)</option>
					<option>Cosuatis Barb (Puthi)</option>
					<option>Feather Back (Kandulee)</option>
					<option>Grass Carp</option>
					<option>Rohu (Rau)</option>
					<option>Silver Carp</option>
					<option>Assamese Kingfish (Kadal)</option>
					<option>Humped Feather Back (Seetal)</option>
					<option>Indian Longfin Eel (Nadarbami)</option>
					<option>Mrigal (Mirika)</option>
				<option value="others">Other</option>
				    </select>
					<p style="display:none;max-width: 330px;" id="commodityseriothers"> <input type="text" class="form-control col-md-5 mt-2" name="commodityseriother"  placeholder="Other  " style="    max-width: 273px;"/>  <a href="#" class="btn-sm btn-info" title="Add Task" style="float: right;margin-top: -35px;"><i class="fa fa-plus"></i></span></a>
				  </div>
				  </div>
			   
			   <div class="col-md-12 form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-3" o  style="font-weight:500;">Sericulture</label>
			      <div class="form-group col-md-7">
					<select class="form-control col-md-6" onchange="getserioption(this.value)">
					<option>Eri</option>
					<option>Muga</option>
					<option>Tosser</option>
					<option>Paat</option>
					<option value="other">Other</option>
				    </select>
					<p style="display:none;max-width: 330px;" id="commodityseriother"> <input type="text" class="form-control col-md-5 mt-2" name="commodityseriother"  placeholder="Other Commodity" style="    max-width: 273px;"/>  <a href="#" class="btn-sm btn-info" title="Add Task" style="float: right;margin-top: -35px;"><i class="fa fa-plus"></i></span></a>
				  </div>
				  </div>
				 
				  
				  <div class="col-md-12 form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-3" style="font-weight:500;">Others</label>
			      <div class="form-group col-md-7">
					<input type="text" class="form-control col-md-6">
					  
				  </div>
			   </div>
				
				<div class="col-md-12 text-right mb-1">
				
				<!--div class="col-md-12 text-left mb-1"> <br/> <br/>
				   <a class="btn btn-primary" href="<?php echo base_url();?>memberpanel/3">Back</a>
					
				  </div>
				
				<button class="btn btn-primary" type="button" name="submit" value="Signup" onclick="window.location='<?php echo base_url().'memberpanel/4'; ?>'">Submit</button>
				<button class="btn btn-primary" type="button" name="submit" value="Signup" onclick="window.location='<?php echo base_url().'memberpanel/4'; ?>'">Review</button-->
				
				<a class="btn btn-primary" href="<?php echo base_url().'memberpanel/3'; ?>">Previous</a>
				<button class="btn btn-primary" type="button" name="submit" value="Next" onclick="window.location='<?php echo base_url().'memberpanel/5'; ?>'">Next</button>
				
				
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
						<li><a href="<?php echo base_url(); ?>memberpanel" class="active">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel" >Approver Panel</a></li>
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
				
				   <td><select class="form-control form-control">
				  <div class="col-md-8">
				  <option>Commodity name</option>
				</select>
				</div>
			   </div></td>
				   
				  <td><input class="form-control" type="number" name="saleqty" id="saleqty" placeholder="Enter Qty." min="0">
				  <!--div class="row mt-2"> 
				  <div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="0"> </div>
				  <div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"></div>
				  
				  </div-->
				  </td>
				  <td><input class="form-control" type="number"  name="saleamount" id="saleamount"  placeholder="Enter Price/Amount" min="0" >
				   <!--div class="row mt-2"> 
				  <div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="0"> </div>
				  <div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"></div>
				  </div-->
				  </td>
				   <td><input class="form-control" name="totalamount" id="totalamount" type="number" placeholder="Total Amount"  min="0"> </td>
				  
				</tr>
				
			  </tbody>
			</table>
			   
			   	<br/>
				<h6 class="m-0" style="font-size:18px;">Payment From PG</h6> <br/> 
				 
				<input class="form-control" type="number"  name="amountfrompg"  placeholder="Payment From PG Recieved" min="0" >
			   <br/><br/>
				<h6 class="m-0" style="font-size:18px;">Payment Due From PG</h6> <br/> 
				
				<input class="form-control" type="number"  name="amountduefrompg"  placeholder="Payment Due From PG" min="0" >
				<br/> 
				
			
				
				<div class="col-md-12 text-right mb-1">
				
				<div class="col-md-12 text-left mb-1"> <br/> <br/>
				   <a class="btn btn-primary" href="<?php echo base_url();?>memberpanel/4">Back</a>
					
				  </div>
				
				<button class="btn btn-primary" type="button" name="submit" value="Signup" onclick="window.location='<?php echo base_url().'memberpanel/5'; ?>'">Submit</button>
				<button class="btn btn-primary" type="button" name="submit" value="Signup" onclick="window.location='<?php echo base_url().'memberpanel/5'; ?>'">Review</button>
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