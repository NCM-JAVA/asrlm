<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" /> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<section>
	<div class="container-fluid">
		<div class="row list-view">
			<?php //print_r($pgdetail);
			
			if ($this->input->post('pgname') == true || $this->session->userdata('pgid') == true) {

				//print_r($this->input->post());
				//print_r($pgdetail);
				$pgname = $pgdetail[0]['pgname'];
				$districtname = $pgdetail[0]['district'];
				$blockname = $pgdetail[0]['block'];
				$grampanchayatname = $pgdetail[0]['grampanchayat'];
				$villagename = $pgdetail[0]['village'];
				$dof = $pgdetail[0]['dof'];
				$pramoted_uder = $pgdetail[0]['pramoted_uder'];
				$president_name = $pgdetail[0]['president_name'];
				$secretary_name = $pgdetail[0]['secretary_name'];
				$treasurer_name = $pgdetail[0]['treasurer_name'];
				$category = $pgdetail[0]['category'];
				$sub_category = $pgdetail[0]['sub_category'];
				$commodityname = $pgdetail[0]['commodityname'];
				$USname = $pgdetail[0]['USname'];
				$USnomember = $pgdetail[0]['USnomember'];
				$USnovillage = $pgdetail[0]['USnovillage'];
				$PSname = $pgdetail[0]['PSname'];
				$PSnomember = $pgdetail[0]['PSnomember'];
				$PSnovillage = $pgdetail[0]['PSnovillage'];
				$KSname = $pgdetail[0]['KSname'];
				$KSnomember = $pgdetail[0]['KSnomember'];
				$KSnovillage = $pgdetail[0]['KSnovillage'];
				$VAAUS = $pgdetail[0]['VAAUS'];
				$VAAPS = $pgdetail[0]['VAAPS'];
				$VAAKS = $pgdetail[0]['VAAKS'];
				$BOR = $pgdetail[0]['BOR'];
				$TLAgriculture = $pgdetail[0]['TLAgriculture'];
				$TLHorticulture = $pgdetail[0]['TLHorticulture'];
				$TLLivestock = $pgdetail[0]['TLLivestock'];
				$TLFishery = $pgdetail[0]['TLFishery'];
				$TLSericulture = $pgdetail[0]['TLSericulture'];
				$TLOthers = $pgdetail[0]['TLOthers'];
				$BPPreparation = $pgdetail[0]['BPPreparation'];
				$su_paymenttomember = $pgdetail[0]['su_paymenttomember'];
				$su_paymentduepgmember = $pgdetail[0]['su_paymentduepgmember'];
				$su_paymentduenonpgmember = $pgdetail[0]['su_paymentduenonpgmember'];
				$su_reinvesttopg = $pgdetail[0]['su_reinvesttopg'];
				$cb_cihcb = $pgdetail[0]['cb_cihcb'];
				$cb_cihbb = $pgdetail[0]['cb_cihbb'];
				$cb_total = $pgdetail[0]['cb_total'];
				$cb_frombuyer = $pgdetail[0]['cb_frombuyer'];
				$cb_payproducermember = $pgdetail[0]['cb_payproducermember'];
				$finalenumerator_name = $pgdetail[0]['finalenumerator_name'];
				$finalpresidentsec_name = $pgdetail[0]['finalpresidentsec_name'];
				$finalblockcoordinator = $pgdetail[0]['finalblockcoordinator'];
				$finaldate = $pgdetail[0]['finaldate'];
				$finalplace = $pgdetail[0]['finalplace'];
				$pathtype = 'edit';
			} else {
				$pgname = '';
				$districtname = '';
				$blockname = '';
				$grampanchayatname = '';
				$villagename = '';
				$dof = '';
				$pramoted_uder = '';
				$president_name = '';
				$secretary_name = '';
				$treasurer_name = '';
				$category = '';
				$sub_category = '';
				$commodityname = '';
				$USname = '';
				$USnomember = '';
				$USnovillage = '';
				$PSname = '';
				$PSnomember = '';
				$PSnovillage = '';
				$KSname = '';
				$KSnomember = '';
				$KSnovillage = '';
				$BOR = '';
				$TLAgriculture = '';
				$TLHorticulture = '';
				$TLLivestock = '';
				$TLFishery = '';
				$TLSericulture = '';
				$TLOthers = '';
				$BPPreparation = '';
				$su_paymenttomember = '';
				$su_paymentduepgmember = '';
				$su_paymentduenonpgmember = '';
				$su_reinvesttopg = '';
				$cb_cihcb = '';
				$cb_cihbb = '';
				$cb_total = '';
				$cb_frombuyer = '';
				$cb_payproducermember = '';
				$finalenumerator_name = '';
				$finalpresidentsec_name = '';
				$finalblockcoordinator = '';
				$finaldate = '';
				$finalplace = '';
				$pathtype = 'add';
			}
			?>
			<?php if ($this->uri->segment(2) == '' || $this->uri->segment(2) == '0' || $this->uri->segment(2) == '1') { ?>
				<div class="col-md-2">
					<div class="sidebar">
						<?php
						// $user_data = $this->session->userdata('admin_session'); 
						$current_segment = $this->uri->segment(1);
						?>

						<ul>
							<li><a href="<?php echo base_url(); ?>overview"
									class="<?php echo ($current_segment == 'overview') ? 'active' : ''; ?>">Overview</a>
							</li>
							<li><a href="<?php echo base_url(); ?>pg-profile"
									class="<?php echo ($current_segment == 'pg-profile') ? 'active' : ''; ?>">PG Profile</a>
							</li>
							<li><a href="<?php echo base_url(); ?>training"
									class="<?php echo ($current_segment == 'training') ? 'active' : ''; ?>">Training</a>
							</li>
							<li><a href="<?php echo base_url(); ?>business-plan"
									class="<?php echo ($current_segment == 'business-plan') ? 'active' : ''; ?>">Business
									plan</a></li>
							<li><a href="<?php echo base_url(); ?>fund-disbursement"
									class="<?php echo ($current_segment == 'fund-disbursement') ? 'active' : ''; ?>">Fund
									Disbursement</a></li>
							<li><a href="<?php echo base_url(); ?>monthly-business-summary"
									class="<?php echo ($current_segment == 'monthly-business-summary') ? 'active' : ''; ?>">Monthly
									Business Summary</a></li>
							<li><a href="<?php echo base_url(); ?>member-profile"
									class="<?php echo ($current_segment == 'member-profile') ? 'active' : ''; ?>">Member
									profile</a></li>
							<li><a href="<?php echo base_url(); ?>member-transaction"
									class="<?php echo ($current_segment == 'member-transaction') ? 'active' : ''; ?>">Member
									transaction</a></li>
							<li><a href="<?php echo base_url(); ?>buyers-details"
									class="<?php echo ($current_segment == 'buyers-details') ? 'active' : ''; ?>">Buyers
									Details</a></li>
							<li><a href="<?php echo base_url(); ?>reports"
									class="<?php echo ($current_segment == 'reports') ? 'active' : ''; ?>">Reports</a></li>
							<li><a href="<?php echo base_url(); ?>login/logout">Logout</a></li>
						</ul>
					</div>
				</div>


				<div class="col-md-10">
					<div class="content content-box">
						<div class="col-md-12 text-right mb-1 pt-3 pb-3">
							<button class="btn btn-sm btn-primary" style="padding: 5px 10px 5px 10px;" title="Delete"
								target="_blank"
								onclick="window.location.href='<?php echo base_url() ?>admin-manager?atype=producergroupdetails'"><i
									class="fa fa-refresh" aria-hidden="true"></i></button>&nbsp;
							<button class="btn btn-primary" type="button" name="pglist" value="PG List"
								onclick="window.location.href='<?php echo base_url() ?>admin-manager?atype=producergroupdetails'">PG
								List</button>

							<button class="btn btn-success" type="button" name="addpg" value="Add PG"
								onclick="window.location.href='<?php echo base_url() ?>form-filling'">Add PG</button>
						</div>
						<div class="card-header">
							<div class="row">
								<div class="col-md-12">
									<h4 class="m-0"> Basic Details</h4>
								</div>
							</div>
						</div>
						<center>
							<?php if (isset($msg) && $msg != '')
								echo '<fieldset id="error_fieldset"><label class="error">' . $msg . '</label></fieldset>'; ?>
							<?php if ($this->input->get('msg') == true) {
								echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">' . $this->input->get('msg') . '</label></fieldset>';
							} ?>
						</center>

						<form class="row pr-4 pl-4" id="frmbasicdetails" method="post">
							<div class="col-md-12 row mt-4">

								<div class="col-md-3">
									<h6 class="m-0"> Name of Producer Group*</h6>
								</div>
								<div class="col-md-9">
									<?php //print_r($getpglist); ?>
									<select class="custom-select col-md-12" name="pgname" id="validationTooltip04"
										onchange="validatepg(this)" required>

										<option value="">----- Select Producer Group ------</option>
										<?php foreach ($getpglist as $plist) { ?>
											<option value="<?php echo $plist['pgid']; ?>" <?php if ($this->session->userdata('pgid') == $plist['pgid']) {
												   echo 'selected="selected"';
											   } ?>><?php echo strtoupper($plist['pgname']); ?></option>

										<?php } ?>

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
											<select class="custom-select" id="districtname" name="districtname">
												<option value="">Choose...</option>
												<?php foreach ($districts as $district) { ?>

													<option value="<?php echo $district['district']; ?>" <?php if ($districtname == $district['district']) {
														   echo 'selected="selected"';
													   } ?>><?php echo ucfirst($district['district']); ?></option>

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
												<?php if ($blockname == true) {
													echo ' <option value="' . $blockname . '"  selected="selected">' . ucfirst($blockname) . '</option>';
												} ?>
											</select>
											<div class="invalid-tooltip">
												Please select a valid Block.
											</div>
										</div>
										<div class="col-md-3 mb-3">
											<label for="validationTooltip04"><b>Gram Panchayat</b></label>
											<select class="custom-select" id="grampachayatname" name="grampanchayatname">
												<option value="">Choose...</option>
												<?php if ($grampanchayatname == true) {
													echo ' <option value="' . $grampanchayatname . '"  selected="selected">' . ucfirst($grampanchayatname) . '</option>';
												} ?>
											</select>

										</div>
										<div class="col-md-3 mb-3">
											<label for="validationTooltip05"> <b>Village</b> <b>(multiple selection)</b>
											</label>
											<select name="villagename[]" class="custom-select" id="villagename" multiple>
												<option value="">Choose...</option>
												<?php if ($villagename == true) {
													$villages = explode(',', $villagename);
													foreach ($villages as $village) {
														echo ' <option value="' . $village . '"  selected="selected">' . ucfirst($village) . '</option>';
													}
												} ?>
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

										<!--input type="date" class="form-control" value="<?php echo date('d-m-Y', time()); ?>" required /-->
										<input type="text" class="form-control" name="dof" placeholder="dd-mm-yyyy"
											value="<?php echo $dof; ?>" placeholder="dd/mm/yy" required>
										<input type="hidden" name="pathtype" value="<?php echo $pathtype; ?>" />
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

												<th>Designation(President)</th>
												<td><input type="text" name="president_name"
														value="<?php echo $president_name; ?>" class="form-control"
														style="width:100%;"></td>
											</tr>
											<tr>
												<th>Designation(Secretary)</th>
												<td><input type="text" name="secretary_name"
														value="<?php echo $secretary_name; ?>" class="form-control"
														style="width:100%;"></td>
											</tr>
											<tr>
												<th>Designation(Treasurer)</th>
												<td><input type="text" name="treasurer_name"
														value="<?php echo $treasurer_name; ?>" class="form-control"
														style="width:100%;"></td>
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
									<select class="custom-select col-md-12" name="pramoted_uder" id="validationTooltip04"
										required>
										<option value=""></option>
										<option value="srlm-aap" <?php if ($pramoted_uder == 'srlm-aap') {
											echo 'selected="selected"';
										} ?>>SRLM-AAP</option>
										<option value="nretp" <?php if ($pramoted_uder == 'nretp') {
											echo 'selected="selected"';
										} ?>>NRETP</option>
									</select>
									<div class="invalid-tooltip">
										Please select a valid Producer Group.
									</div>
								</div>
							</div>
							<div class="col-md-12 text-right mb-1"><br />
								<?php //echo $this->session->userdata('pgid'); ?>
								<input type="hidden" name="stepno" value="1" />
								<input type="hidden" name="isedit" value="1" />
								<input type="hidden" name="pgid"
									value="<?php echo ($this->session->userdata('pgid') == true) ? $this->session->userdata('pgid') : ''; ?>" />
								<input type="submit" class="btn btn-primary" name="submit1" value="Next" />&nbsp;
								<!--button class="btn btn-primary" type="submit" name="submit2" value="Next">Next</button-->
							</div>
						</form>
					</div>
				</div>

			<?php } ?>
		</div>


		<?php if ($this->uri->segment(2) == '2') { ?>
			<div class="row mt-5">
				<div class="col-md-3">
					<div class="sidebar">
						<?php
						// $user_data = $this->session->userdata('admin_session'); 
						$current_segment = $this->uri->segment(1);
						?>

						<ul>
							<li><a href="<?php echo base_url(); ?>user-profile"
									class="<?php echo ($current_segment == 'user-profile') ? 'active' : ''; ?>">Profile</a>
							</li>
							<li><a href="<?php echo base_url(); ?>admin-manager?atype=producergroupdetails"
									class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>"> PG
									Panel</a></li>
							<li><a href="<?php echo base_url(); ?>members/memberslist"
									class="<?php echo ($current_segment == 'members') ? 'active' : ''; ?>">Member Panel</a>
							</li>
							<li><a href="<?php echo base_url(); ?>verifierpanel"
									class="<?php echo ($current_segment == 'verifierpanel') ? 'active' : ''; ?>">Verifier
									Panel</a></li>
							<li><a href="<?php echo base_url(); ?>approverpanel"
									class="<?php echo ($current_segment == 'approverpanel') ? 'active' : ''; ?>">Approver
									Panel</a></li>
							<li><a href="<?php echo base_url(); ?>buyerdetails-list"
									class="<?php echo ($current_segment == 'buyerdetails-list') ? 'active' : ''; ?>"> Buyer
									Details List</a></li>
							<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
							<li><a href="<?php echo base_url(); ?>admin-manager"
									class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>">Reports</a>
							</li>
							<?php // if($this->session->userdata('admin_session')['user_group_id'] == '3'){ ?>
							<li><a href="<?php echo base_url(); ?>users-list">Users List</a></li> <?php // } ?>
							<!--li><a href="<?php echo base_url(); ?>change-password">Change Password</a></li-->

							<li><a href="<?php echo base_url(); ?>upload-data"
									class="<?php echo ($current_segment == 'upload-data') ? 'active' : ''; ?>">Upload/Sync
									Records(CSV)</a></li>

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
						<center>
							<?php if (isset($msg) && $msg != '')
								echo '<fieldset id="error_fieldset"><label class="error">' . $msg . '</label></fieldset>'; ?>
							<?php if ($this->input->get('msg') == true) {
								echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">' . $this->input->get('msg') . '</label></fieldset>';
							} ?>
						</center>

						<form class="row pr-4 pl-4" action="<?php echo base_url() . 'form-filling/3'; ?>" method="post">

							<?php //print_r($userdetails); ?>
							<div class="col-md-12">
								<br /><br />
								<div class="row">
									<div class="col-md-11">
										<h6 class="m-0"> BANK ACCOUNT DETAILS *</h6><br />
									</div>
									<div class="col-md-1">
										<a class="btn-sm btn-info" title="Add Task" onclick="addBankFunction()"
											style="color:#fff;"><i class="fa fa-plus"></i></a>
									</div>
								</div>
								<table id="bankdetailsfields" class="table p-3 table-bordered table-striped">
									<thead>
										<tr>

											<th scope="col">Bank name:</th>
											<th scope="col">Type of Account</th>
											<th scope="col">IFSC Code</th>
											<th scope="col">Branch Location</th>
											<th scope="col">Account Number</th>
										</tr>
									</thead>
									<tbody>
										<?php //echo count($getbankdetails);
										
											if (count($getbankdetails) == 0) { ?>

											<tr>
												<td>
													<select class="form-control" required name="bankname[]">
														<option value="">Choose Bank</option>
														<option value="AGVB">AGVB</option>
														<option value="HDFC">HDFC</option>
														<option value="ICICI">ICICI</option>
														<option value="SBI">SBI</option>
														<option value="PNB">PNB</option>
														<option value="Central Bank of India">Central Bank of India</option>
														<option value="Canara Bank">Canara Bank</option>
														<option value="Bank of Baroda">Bank of Baroda</option>
														<option value="Bank of India">Bank of India</option>
														<option value="Indian Overseas">Indian Overseas</option>
														<option value="Union Bank">Union Bank</option>
														<option value="Kotak Mahindra Bank">Kotak Mahindra Bank</option>
													</select>
												</td>
												<td>
													<select class="form-control" name="typeofaccount[]">
														<option option="Saving">Saving</option>
														<option option="Current">Current</option>
													</select>
												</td>
												<td><input class="form-control" type="text" value="" name="ifsc[]" required
														placeholder="IFSC"></td>
												<td><input class="form-control" type="text" value="" name="branchname[]"
														required placeholder="Branch Name"></td>
												<td><input class="form-control" type="number" minlength="12" value=""
														name="accountno[]" required placeholder="Account No."><input
														type="hidden" name="bnksavetype[]" value='add'></td>
											</tr>



										<?php } else {


												foreach ($getbankdetails as $getbankdetail) { ?>

												<tr>
													<td>
														<select required name="bankname[]" class="form-control">
															<option value="<?php echo $getbankdetail['bankname']; ?>"
																selected="selected"><?php echo $getbankdetail['bankname']; ?>
															</option>
															<option value=""></option>
															<option value="AGVB">AGVB</option>
															<option value="HDFC">HDFC</option>
															<option value="ICICI">ICICI</option>
															<option value="SBI">SBI</option>
															<option value="PNB">PNB</option>
															<option value="Central Bank of India">Central Bank of India</option>
															<option value="Canara Bank">Canara Bank</option>
															<option value="Bank of Baroda">Bank of Baroda</option>
															<option value="Bank of India">Bank of India</option>
															<option value="Indian Overseas">Indian Overseas</option>
															<option value="Union Bank">Union Bank</option>
															<option value="Kotak Mahindra Bank">Kotak Mahindra Bank</option>
														</select>
													</td>
													<td>
														<select class="form-control" name="typeofaccount[]">
															<option option="Saving" <?php if ($getbankdetail['account_type'] == 'Saving') {
																echo 'selected="selected"';
															} ?>>Saving</option>
															<option option="Current" <?php if ($getbankdetail['account_type'] == 'Current') {
																echo 'selected="selected"';
															} ?>>Current</option>
														</select>
													</td>
													<td><input class="form-control" type="text" name="ifsc[]"
															value="<?php echo $getbankdetail['IFSC']; ?>" placeholder="IFSC"></td>
													<td><input class="form-control" type="text" name="branchname[]"
															value="<?php echo $getbankdetail['branchname']; ?>"
															placeholder="Branch Name"></td>
													<td><input class="form-control" type="number" minlength="12" maxlength="12"
															name="accountno[]" value="<?php echo $getbankdetail['accountno']; ?>"
															placeholder="Account No.">
														<input type="hidden" name="pgbdid[]"
															value='<?php echo $getbankdetail['id']; ?>' />
														<input type="hidden" name="bnksavetype[]" value='edit' />
													</td>
												</tr>



											<?php }

											}

											?>


									</tbody>
								</table>


								<br />
								<div class="row">
									<div class="col-md-11">
										<h6 class="m-0"> COMMODITY DETAILS</h6><br />
									</div>
									<div class="col-md-1">
										<!--a href="#" class="btn-sm btn-info" title="Add Task"><i class="fa fa-plus"></i></a-->
									</div>
								</div>

								<div class="col-md-12 row">
									<div class="col-md-4">

										<div class="form-group row">
											<label for="inputPassword" class="col-form-label col-md-4">Category*</label>
											<div class="col-md-8">
												<select class="form-control form-control" name="categoryname"
													id="categoryname">
													<option>Select Category</option>
													<?php /* if($category != ''){  ?> <option <?php if($category != ''){ echo 'selected="selected"'; } ?> value="<?php echo ($category) ?>"><?php echo ucfirst($category) ?></option> <?php } */ ?>
													<?php foreach (array_filter($categories) as $categoryname) { ?>
														<option value="<?php echo $categoryname['category']; ?>" <?php if ($category == $categoryname['category']) {
															   echo 'selected="selected"';
														   } ?>>
															<?php echo ucfirst($categoryname['category']) ?></option>


													<?php } ?>
												</select>
											</div>
										</div>

									</div>


									<div class="col-md-3">
										<div class="col-md-12">
											<div class="form-group row">

												<select class="form-control form-control" name="subcategoryname"
													id="subcategoryname">
													<div class="col-md-8">
														<option>Sub-Category</option>
														<option <?php if ($sub_category != '') {
															echo 'selected="selected"';
														} ?>><?php echo ucfirst($sub_category) ?></option>
												</select>
											</div>
										</div>

									</div>
									<div class="col-md-3">
										<div class="col-md-12">
											<div class="form-group row">

												<select class="form-control form-control" name="commoditynewname"
													id="commoditynewname">
													<option>Name of Commodity</option>
													<option <?php if ($commodityname != '') {
														echo 'selected="selected"';
													} ?>>
														<?php echo ucfirst($commodityname) ?></option>
												</select>
											</div>
										</div>

									</div>

									<div class="col-md-12 text-right mb-2">

										<br />
										<a class="btn btn-primary" onclick="javascript:history.back()"
											style="color:#fff;">Previous</a>
										<input type="hidden" name="stepno2" value="2" />
										<input type="hidden" name="isedit" value="1" />
										<input type="hidden" name="pgid"
											value="<?php echo ($this->session->userdata('pgid') == true) ? $this->session->userdata('pgid') : ''; ?>" />
										<input type="submit" class="btn btn-primary" name="submit1" value="Next" />&nbsp;
									</div>

						</form>
					</div>
				</div>
			</div>
		</div>

	<?php } ?>

	<?php if ($this->uri->segment(2) == '4') { ?>

		<div class="row mt-5">
			<div class="col-md-3">
				<div class="sidebar">
					<?php
					// $user_data = $this->session->userdata('admin_session'); 
					$current_segment = $this->uri->segment(1);
					?>

					<ul>
						<li><a href="<?php echo base_url(); ?>user-profile"
								class="<?php echo ($current_segment == 'user-profile') ? 'active' : ''; ?>">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>admin-manager?atype=producergroupdetails"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>"> PG Panel</a>
						</li>
						<li><a href="<?php echo base_url(); ?>members/memberslist"
								class="<?php echo ($current_segment == 'members') ? 'active' : ''; ?>">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel"
								class="<?php echo ($current_segment == 'verifierpanel') ? 'active' : ''; ?>">Verifier
								Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel"
								class="<?php echo ($current_segment == 'approverpanel') ? 'active' : ''; ?>">Approver
								Panel</a></li>
						<li><a href="<?php echo base_url(); ?>buyerdetails-list"
								class="<?php echo ($current_segment == 'buyerdetails-list') ? 'active' : ''; ?>"> Buyer
								Details List</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						<li><a href="<?php echo base_url(); ?>admin-manager"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>">Reports</a>
						</li>
						<?php // if($this->session->userdata('admin_session')['user_group_id'] == '3'){ ?>
						<li><a href="<?php echo base_url(); ?>users-list">Users List</a></li> <?php // } ?>
						<!--li><a href="<?php echo base_url(); ?>change-password">Change Password</a></li-->

						<li><a href="<?php echo base_url(); ?>upload-data"
								class="<?php echo ($current_segment == 'upload-data') ? 'active' : ''; ?>">Upload/Sync
								Records(CSV)</a></li>

						<li><a href="<?php echo base_url(); ?>login/logout">Logout</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-9">
				<div class="content content-box">
					<div class="card-header">
						<div class="row">
							<div class="col-md-12">
								<h4 class="m-0">ADDITIONAL Activities</h4>
							</div>
						</div>
					</div>
					<center>
						<?php if (isset($msg) && $msg != '')
							echo '<fieldset id="error_fieldset"><label class="error">' . $msg . '</label></fieldset>'; ?>
						<?php if ($this->input->get('msg') == true) {
							echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">' . $this->input->get('msg') . '</label></fieldset>';
						} ?>
					</center>

					<form class="row pr-4 pl-4" method="post">

						<?php //print_r($userdetails); ?>
						<div class="col-md-12">
							<br />
							<h6 class="m-0">VALUE ADDITIONAL ACTIVITY MANAGED BY Udyog Sakhi / Pashu Sakhi / Krishi Sakhi
							</h6> <br />

							<!--div class="row  col-md-12 mt-2">
				  <div>
					<label class="btn btn-success" id="uslabelva" style="margin-right: 14px;font-weight: 500;"><input type="checkbox" id="uscheckboxva"  name="uspgtypeva[]"  value="udyogsakhipg" checked="checked">&nbsp;Udyog Sakhi </label>
					<label class="btn btn-primary"  id="pslabelva"  style="margin-right: 14px;font-weight: 500;"><input type="checkbox" id="pscheckboxva" name="uspgtypeva[]" value="pashusakhipg">&nbsp;Pashu Sakhi</label>
					<label class="btn btn-primary"  id="kslabelva"   style="margin-right: 14px;font-weight: 500;"><input type="checkbox" id="kscheckboxva" name="uspgtypeva[]" value="krishisakhipg">&nbsp;Krishi Sakhi</label>
					<label class="btn btn-primary"  id="crplabelva"  style="margin-right: 14px;font-weight: 500;"><input type="checkbox" id="crpcheckboxva"  name="uspgtypeva[]" value="crppg">&nbsp;CRP</label>
				  </div>
				</div--> <br>

							<div class="row col-md-12">
								<div class="col-md-9"> </div>
								<div class="col-md-3 p-3  card" style="background-color: #e1e1e1;">
									<b>Contact Person</b>
									<a href="tel:+91 9990008970"><i class="fa fa-phone"
											aria-hidden="true"></i>&nbsp;<?php echo $president_name; ?></a>
								</div>
							</div>

							<div class="row col-md-12">
								<div class="col-md-6" id="udyogsakhipgva">
									<h4 style="text-decoration: underline;">Udyog Sakhi</h4>
									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="usaa[]" <?php echo (stristr($VAAUS, 'drying') == true ? 'checked' : ''); ?> value="drying"
											id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Drying
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="usaa[]"
											value="grading" <?php echo (stristr($VAAUS, 'grading') == true ? 'checked' : ''); ?>
											id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Grading
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="usaa[]" <?php echo (stristr($VAAUS, 'sorting') == true ? 'checked' : ''); ?> value="sorting"
											id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Sorting
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="usaa[]" <?php echo (stristr($VAAUS, 'processing') == true ? 'checked' : ''); ?> value="processing"
											id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Processing
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="usaa[]" <?php echo (stristr($VAAUS, 'storing') == true ? 'checked' : ''); ?> value="storing"
											id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Storing
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="usaa[]" <?php echo (stristr($VAAUS, 'packaging') == true ? 'checked' : ''); ?> value="packaging"
											id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Packaging
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="usaa[]" <?php echo (stristr($VAAUS, 'labelling') == true ? 'checked' : ''); ?> value="labelling"
											id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Labelling
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="usaa[]" <?php echo (stristr($VAAUS, 'weighing') == true ? 'checked' : ''); ?> value="weighing"
											id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Weighing
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="usaa[]" <?php echo (stristr($VAAUS, 'collective_marketing') == true ? 'checked' : ''); ?>
											value="collective_marketing" id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Collective marketing
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" id="vlothers" value='1'
											onclick="additionalactothers()" />
										<label class="form-check-label" for="gridCheck1">
											Others
										</label>

										<div class="form-group col-md-4" id="inputadditionalactothers"
											style="display:none;">
											<input type="text" name="usaao" class="form-control">
										</div>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalactnoa" type="checkbox" id="gridCheck1"
											value='nota' <?php echo (stristr($VAAUS, 'nota') == true ? 'checked' : ''); ?>
											onclick="additionalactnota()">
										<label class="form-check-label" for="gridCheck1">
											None of The Above
										</label>
									</div>
								</div>



								<div class="col-md-6" id="pashusakhipgga">
									<h4 style="text-decoration: underline;">Pashu Sakhi</h4>
									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="psaa[]"
											value="drying" <?php echo (stristr($VAAPS, 'drying') == true ? 'checked' : ''); ?>
											id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Drying
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="psaa[]"
											value="grading" <?php echo (stristr($VAAPS, 'grading') == true ? 'checked' : ''); ?>
											id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Grading
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="psaa[]"
											value="sorting" <?php echo (stristr($VAAPS, 'sorting') == true ? 'checked' : ''); ?>
											id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Sorting
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="psaa[]"
											value="processing" <?php echo (stristr($VAAPS, 'processing') == true ? 'checked' : ''); ?> id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Processing
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="psaa[]"
											value="storing" <?php echo (stristr($VAAPS, 'storing') == true ? 'checked' : ''); ?>
											id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Storing
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="psaa[]"
											value="packaging" <?php echo (stristr($VAAPS, 'packaging') == true ? 'checked' : ''); ?> id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Packaging
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="psaa[]"
											value="labelling" <?php echo (stristr($VAAPS, 'labelling') == true ? 'checked' : ''); ?> id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Labelling
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="psaa[]"
											value="weighing" <?php echo (stristr($VAAPS, 'weighing') == true ? 'checked' : ''); ?>
											id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Weighing
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="psaa[]"
											value="collective_marketing" <?php echo (stristr($VAAPS, 'collective_marketing') == true ? 'checked' : ''); ?>
											id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Collective marketing
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" id="vlothers" value='1'
											onclick="additionalactothers()" />
										<label class="form-check-label" for="gridCheck1">
											Others
										</label>

										<div class="form-group col-md-4" id="inputadditionalactothers"
											style="display:none;">
											<input type="text" name="psaao" class="form-control">
										</div>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalactnoa" type="checkbox" name="psaa[]"
											id="gridCheck1" value="nota" <?php echo (stristr($VAAPS, 'nota') == true ? 'checked' : ''); ?> onclick="additionalactnota()">
										<label class="form-check-label" for="gridCheck1">
											None of The Above
										</label>
									</div>
								</div>
							</div>
							<div class="row col-md-12">
								<div class="col-md-6" id="krishisakhipgga"> <br />
									<h4 style="text-decoration: underline;">Krishi Sakhi</h4>
									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="ksaa[]"
											value="drying" <?php echo (stristr($VAAKS, 'drying') == true ? 'checked' : ''); ?>
											id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Drying
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="ksaa[]"
											value="grading" <?php echo (stristr($VAAKS, 'grading') == true ? 'checked' : ''); ?>
											id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Grading
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="ksaa[]"
											value="sorting" <?php echo (stristr($VAAKS, 'sorting') == true ? 'checked' : ''); ?>
											id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Sorting
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="ksaa[]"
											value="processing" <?php echo (stristr($VAAKS, 'processing') == true ? 'checked' : ''); ?> id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Processing
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="ksaa[]"
											value="storing" <?php echo (stristr($VAAKS, 'storing') == true ? 'checked' : ''); ?>
											id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Storing
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="ksaa[]"
											value="packaging" <?php echo (stristr($VAAKS, 'packaging') == true ? 'checked' : ''); ?> id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Packaging
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="ksaa[]"
											value="labelling" <?php echo (stristr($VAAKS, 'labelling') == true ? 'checked' : ''); ?> id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Labelling
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="ksaa[]"
											value="weighing" <?php echo (stristr($VAAKS, 'weighing') == true ? 'checked' : ''); ?>
											id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Weighing
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" name="ksaa[]"
											value="collective_marketing" <?php echo (stristr($VAAKS, 'collective_marketing') == true ? 'checked' : ''); ?>
											id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											Collective marketing
										</label>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalact" type="checkbox" id="vlothers" value='1'
											onclick="additionalactothers()" />
										<label class="form-check-label" for="gridCheck1">
											Others
										</label>


										<div class="form-group col-md-2" id="inputadditionalactothers"
											style="display:none;">
											<input type="text" class="form-control" name="ksaao">
										</div>
									</div>

									<div class="form-check">
										<input class="form-check-input addtnalactnoa" type="checkbox" id="gridCheck1"
											value="nota" <?php echo (stristr($VAAKS, 'nota') == true ? 'checked' : ''); ?>
											onclick="additionalactnota()">
										<label class="form-check-label" for="gridCheck1">
											None of The Above
										</label>
									</div>
								</div>


								<!--div class="col-md-6"  id="crppgga"><br/>	
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
				</div-->
							</div>

							<div class="col-md-12 text-right mb-1"> <br />
								<a class="btn btn-primary" onclick="javascript:history.back()"
									style="color:#fff;">Previous</a>
								<input type="hidden" name="stepno4" value="4">
								<input type="hidden" name="isedit" value="1">
								<input type="hidden" name="pgid"
									value="<?php echo ($this->session->userdata('pgid') == true) ? $this->session->userdata('pgid') : ''; ?>">
								<input type="submit" class="btn btn-primary" name="submit1" value="Next">
							</div>

					</form>
				</div>
			</div>
		</div>
		</div>
	<?php } ?>

	<?php if ($this->uri->segment(2) == '3') { ?>

		<div class="row mt-5">
			<div class="col-md-3">
				<div class="sidebar">
					<?php
					// $user_data = $this->session->userdata('admin_session'); 
					$current_segment = $this->uri->segment(1);
					?>

					<ul>
						<li><a href="<?php echo base_url(); ?>user-profile"
								class="<?php echo ($current_segment == 'user-profile') ? 'active' : ''; ?>">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>admin-manager?atype=producergroupdetails"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>"> PG Panel</a>
						</li>
						<li><a href="<?php echo base_url(); ?>members/memberslist"
								class="<?php echo ($current_segment == 'members') ? 'active' : ''; ?>">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel"
								class="<?php echo ($current_segment == 'verifierpanel') ? 'active' : ''; ?>">Verifier
								Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel"
								class="<?php echo ($current_segment == 'approverpanel') ? 'active' : ''; ?>">Approver
								Panel</a></li>
						<li><a href="<?php echo base_url(); ?>buyerdetails-list"
								class="<?php echo ($current_segment == 'buyerdetails-list') ? 'active' : ''; ?>"> Buyer
								Details List</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						<li><a href="<?php echo base_url(); ?>admin-manager"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>">Reports</a>
						</li>
						<?php // if($this->session->userdata('admin_session')['user_group_id'] == '3'){ ?>
						<li><a href="<?php echo base_url(); ?>users-list">Users List</a></li> <?php // } ?>
						<!--li><a href="<?php echo base_url(); ?>change-password">Change Password</a></li-->

						<li><a href="<?php echo base_url(); ?>upload-data"
								class="<?php echo ($current_segment == 'upload-data') ? 'active' : ''; ?>">Upload/Sync
								Records(CSV)</a></li>

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
					<center>
						<?php if (isset($msg) && $msg != '')
							echo '<fieldset id="error_fieldset"><label class="error">' . $msg . '</label></fieldset>'; ?>
						<?php if ($this->input->get('msg') == true) {
							echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">' . $this->input->get('msg') . '</label></fieldset>';
						} ?>
					</center>

					<form class="row pr-4 pl-4" method="post">

						<?php //print_r($userdetails); ?>
						<div class="col-md-12">
							<br />
							<h6 class="m-0">VALUE ADDITIONAL ACTIVITY MANAGED BY Udyog Sakhi / Pashu Sakhi / Krishi Sakhi
							</h6> <br /> <br />


							<div class="buttons">
								<div class="row  col-md-12 mt-2">
									<div>
										<label class="btn btn-<?php echo ($USname == '') ? 'primary' : 'success'; ?>"
											id="uslabel" style="margin-right: 14px;font-weight: 500;"><input type="checkbox"
												id="uscheckbox" name="uspgtype[]"
												onclick="pgaddionalresponse('uscheckbox','udyogsakhipg','uslabel')"
												value="udyogsakhipg" <?php echo ($USname == '') ? '' : 'checked'; ?>>&nbsp;Udyog
											Sakhi </label>
										<label class="btn btn-<?php echo ($PSname == '') ? 'primary' : 'success'; ?>"
											id="pslabel" style="margin-right: 14px;font-weight: 500;"><input type="checkbox"
												id="pscheckbox" name="uspgtype[]"
												onclick="pgaddionalresponse('pscheckbox','pashusakhipg','pslabel')"
												value="pashusakhipg" <?php echo ($PSname == '') ? '' : 'checked'; ?>>&nbsp;Pashu
											Sakhi</label>
										<label class="btn btn-<?php echo ($KSname == '') ? 'primary' : 'success'; ?>"
											id="kslabel" style="margin-right: 14px;font-weight: 500;"><input type="checkbox"
												id="kscheckbox" name="uspgtype[]"
												onclick="pgaddionalresponse('kscheckbox','krishisakhipg','kslabel')"
												value="krishisakhipg" <?php echo ($KSname == '') ? '' : 'checked'; ?>>&nbsp;Krishi
											Sakhi</label>
										<!--label class="btn btn-primary"  id="crplabel"  style="margin-right: 14px;font-weight: 500;"><input type="checkbox" id="crpcheckbox"  name="uspgtype[]" onclick="pgaddionalresponse('crpcheckbox','crppg','crplabel')" value="crppg">&nbsp;CRP</label-->
									</div>
								</div> <br>


								<div id="udyogsakhipg" style="display:<?php echo ($USname == '') ? 'none' : 'block'; ?>">
									<h4 style="text-decoration: underline;">Udyog Sakhi</h4><br />
									<div class="form-group col-md-12 row">
										<div class="red box col-md-5 px-0 ">Name of Udyog Sakhi Associated with the PG</div>
										<div class="col-md-2">
											<div class="form-check">
												<input class="form-check-input" type="radio" name="pgus" id='expradio'
													value="Yes" <?php echo ($USname == '') ? '' : 'checked'; ?>>
												<label class="form-check-label" for="exampleRadios1">
													Yes
												</label>
												<div class="form-group col-md-11 px-0">
													<input type="text" class='txbx form-control' name="pgusname"
														value="<?php echo $USname; ?>" <?php echo ($USname == '') ? 'hidden' : ''; ?> />
												</div>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-check">
												<input class="form-check-input" type="radio" name="pgus" id='frsradio'
													value="No" <?php echo ($USname == '') ? 'checked' : ''; ?>>
												<label class="form-check-label" for="exampleRadios1">
													No
												</label>
											</div>
										</div>
									</div>

									<div class="form-group row">
										<label for="inputvallueaadion" class="col-form-label col-md-5">No. of Village
											Covered by PG</label>
										<div class="form-group col-md-7 px-0">
											<select class="form-control col-md-2" name="usnovillage">
												<?php for ($i = 0; $i <= 15; $i++) { ?>
													<option value="<?php echo $i; ?>" <?php echo ($USnovillage == $i) ? 'selected="selected"' : ''; ?>><?php echo $i; ?>
													</option>
												<?php } ?>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label for="inputvallueaadion" class="col-form-label col-md-5">No. of Member
											Associated with PG</label>
										<div class="form-group col-md-2 px-0">

											<input type="number" min='0' name="usnomember"
												value="<?php echo ($USnomember == '') ? '0' : $USnomember; ?>"
												class="form-control col-md-7">
										</div>
									</div>

					</form>
				</div>

				<div id="pashusakhipg" style="display:<?php echo ($PSname == '') ? 'none' : 'block'; ?>">
					<h4 style="text-decoration: underline;">Pashu Sakhi</h4><br />
					<div class="form-group col-md-12 row">
						<div class="red box col-md-5 px-0">Name of Pashu Sakhi Associated with the PG</div>


						<div class="col-md-2">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="pgps" id='expradio1' value="Yes" <?php echo ($PSname == '') ? '' : 'checked'; ?>>
								<label class="form-check-label" for="exampleRadios1">
									Yes
								</label>
								<div class="form-group col-md-11 px-0">
									<input type="text" name="pgpsname" class='txbx1 form-control'
										value="<?php echo $PSname; ?>" <?php echo ($PSname == '') ? 'hidden' : ''; ?> />
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="pgps" id='frsradio1' value="No" <?php echo ($PSname == '') ? 'checked' : ''; ?>>
								<label class="form-check-label" for="exampleRadios1">
									No
								</label>
							</div>
						</div>
					</div>

					<div class="form-group row">
						<label for="inputvallueaadion" class="col-form-label col-md-5">No. of Village Covered by PG</label>
						<div class="form-group col-md-7 px-0">
							<select class="form-control col-md-2" name="psnovillage">
								<?php for ($i = 0; $i <= 15; $i++) { ?>
									<option value="<?php echo $i; ?>" <?php echo ($PSnovillage == $i) ? 'selected="selected"' : ''; ?>><?php echo $i; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="inputvallueaadion" class="col-form-label col-md-5">No. of Member Associated with
							PG</label>
						<div class="form-group col-md-2 px-0">

							<input type="number" min="0" name="psnomember"
								value="<?php echo ($PSnomember == '') ? '0' : $PSnomember; ?>" class="form-control">
						</div>
					</div>

					<!--div class="form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-5">No. of Participants in PG</label>
				 <div class="form-group col-md-7 px-0">
					<select class="form-control col-md-2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				  </select>
				 </div>
			   </div-->

					</form>
				</div>


				<div id="krishisakhipg" style="display:<?php echo ($KSname == '') ? 'none' : 'block'; ?>">
					<h4 style="text-decoration: underline;">Krishi Sakhi</h4><br />
					<div class="form-group col-md-12 row">
						<div class="red box col-md-5 px-0">Name of Krishi Sakhi Associated with the PG</div>


						<div class="col-md-2">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="pgks" id='expradio2' value="yes" <?php echo ($KSname == '') ? '' : 'checked'; ?>>
								<label class="form-check-label" for="exampleRadios1">
									Yes
								</label>
								<div class="form-group col-md-11 px-0">
									<input type="text" class='txbx2 form-control' name="pgksname"
										value="<?php echo $KSname; ?>" <?php echo ($KSname == '') ? 'hidden' : ''; ?> />
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="pgks" id='frsradio2' value="no" <?php echo ($KSname == '') ? 'checked' : ''; ?>>
								<label class="form-check-label" for="exampleRadios1">
									No
								</label>
							</div>
						</div>
					</div>

					<div class="form-group row">
						<label for="inputvallueaadion" class="col-form-label col-md-5">No. of Village Covered by PG</label>
						<div class="form-group col-md-7 px-0">
							<select class="form-control col-md-2" name="ksnovillage">
								<?php for ($i = 0; $i <= 15; $i++) { ?>
									<option value="<?php echo $i; ?>" <?php echo ($KSnovillage == $i) ? 'selected="selected"' : ''; ?>><?php echo $i; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="inputvallueaadion" class="col-form-label col-md-5">No. of Member Associated with
							PG</label>
						<div class="form-group col-md-2 px-0">

							<input type="number" min="0" name="ksnomember" class="form-control"
								value="<?php echo ($KSnomember == '') ? '0' : $KSnomember; ?>">
						</div>
					</div>
					</form>
				</div>

				<!--div id="crppg" style="display:none">
			 <h4 style="text-decoration: underline;">CRP</h4><br/>
			 <div class="form-group col-md-12 row">
			 <div class="red bo col-md-5 px-0">Name of   Associated with the PG</div>
			 
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
				  <div class="form-group col-md-2 px-0">
					
					<input type="text" class="form-control">
				  </div>
			   </div>
					</div-->

				<div class="col-md-12 text-right mb-1">
					<input type="hidden" name="totalvlpgcoung" id="totalvlpgcoung" value="1">
					<a class="btn btn-primary" onclick="javascript:history.back()" style="color:#fff;">Previous</a>
					<input type="hidden" name="stepno3" value="3">
					<input type="hidden" name="isedit" value="1">
					<input type="hidden" name="pgid"
						value="<?php echo ($this->session->userdata('pgid') == true) ? $this->session->userdata('pgid') : ''; ?>">
					<input type="submit" class="btn btn-primary" name="submit1" value="Next">
				</div>

				</form>


			</div>
		</div>
		</div>
		</div>
	<?php } ?>


	<?php if ($this->uri->segment(2) == '5') { ?>

		<div class="row mt-5">
			<div class="col-md-3">
				<div class="sidebar">
					<?php
					// $user_data = $this->session->userdata('admin_session'); 
					$current_segment = $this->uri->segment(1);
					?>

					<ul>
						<li><a href="<?php echo base_url(); ?>user-profile"
								class="<?php echo ($current_segment == 'user-profile') ? 'active' : ''; ?>">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>admin-manager?atype=producergroupdetails"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>"> PG Panel</a>
						</li>
						<li><a href="<?php echo base_url(); ?>members/memberslist"
								class="<?php echo ($current_segment == 'members') ? 'active' : ''; ?>">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel"
								class="<?php echo ($current_segment == 'verifierpanel') ? 'active' : ''; ?>">Verifier
								Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel"
								class="<?php echo ($current_segment == 'approverpanel') ? 'active' : ''; ?>">Approver
								Panel</a></li>
						<li><a href="<?php echo base_url(); ?>buyerdetails-list"
								class="<?php echo ($current_segment == 'buyerdetails-list') ? 'active' : ''; ?>"> Buyer
								Details List</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						<li><a href="<?php echo base_url(); ?>admin-manager"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>">Reports</a>
						</li>
						<?php // if($this->session->userdata('admin_session')['user_group_id'] == '3'){ ?>
						<li><a href="<?php echo base_url(); ?>users-list">Users List</a></li> <?php // } ?>
						<!--li><a href="<?php echo base_url(); ?>change-password">Change Password</a></li-->

						<li><a href="<?php echo base_url(); ?>upload-data"
								class="<?php echo ($current_segment == 'upload-data') ? 'active' : ''; ?>">Upload/Sync
								Records(CSV)</a></li>

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
					<center>
						<?php if (isset($msg) && $msg != '')
							echo '<fieldset id="error_fieldset"><label class="error">' . $msg . '</label></fieldset>'; ?>
						<?php if ($this->input->get('msg') == true) {
							echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">' . $this->input->get('msg') . '</label></fieldset>';
						} ?>
					</center>

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
										<!-- <td style="font-weight:500;">Minutes of the Meeting Book*</td> -->
										<td style="font-weight:500;">Minutes of the Meeting Register*</td>
										<td class="col-md-2 px-2 text-center">
											<select class="form-control  col-md-7" name="bor[]">
												<option value="">No</option>
												<option value="Minutes of the Meeting Register" <?php echo (stristr($BOR, 'Minutes of the Meeting Register') == true ? 'selected="selected"' : ''); ?>>Yes</option>

											</select>
										</td>
									</tr>

									<tr>
										<td style="font-weight:500;">2.</td>
										<!-- <td style="font-weight:500;">Bank Book for all transactions*</td> -->
										<td style="font-weight:500;">Bank passbook*</td>
										<td class="col-md-2 px-2 text-center">
											<select class="form-control  col-md-7" name="bor[]">
												<option value="">No</option>
												<option value="Bank passbook" <?php echo (stristr($BOR, 'Bank passbook') == true) ? 'selected="selected"' : ''; ?>>Yes</option>

											</select>
										</td>
									</tr>
									<tr>
										<td style="font-weight:500;">3.</td>
										<td style="font-weight:500;">Saving Register*</td>
										<td class="col-md-2 px-2 text-center">
											<select class="form-control  col-md-7" name="bor[]">
												<option value="Saving Register" <?php echo (stristr($BOR, 'Saving Register') == true ? 'selected="selected"' : ''); ?>>Yes</option>
												<option value="">No</option>
											</select>
										</td>
									</tr>

									<tr>
										<td style="font-weight:500;">4.</td>
										<!-- <td style="font-weight:500;">Purchase Sale and Stock Register*</td> -->
										<td style="font-weight:500;">Membership fee Register*</td>
										<td class="col-md-2 px-2 text-center">
											<select class="form-control  col-md-7" name="bor[]">
												<option value="Membership fee Register" <?php echo (stristr($BOR, 'Membership fee Register') == true ? 'selected="selected"' : ''); ?>>Yes</option>
												<option value="">No</option>
											</select>
										</td>
									</tr>

									<tr>
										<td style="font-weight:500;">5.</td>
										<td style="font-weight:500;">Cash Book*</td>
										<td class="col-md-2 px-2 text-center">
											<select class="form-control  col-md-7" name="bor[]">
												<option value="Cash Book" <?php echo (stristr($BOR, 'Cash Book') == true ? 'selected="selected"' : ''); ?>>Yes</option>
												<option value="">No</option>
											</select>
										</td>
									</tr>

									<tr>
										<td style="font-weight:500;">6.</td>
										<!-- <td style="font-weight:500;">Bill Book and Receipt Book*</td> -->
										<td style="font-weight:500;">Daily Procurement and Sale Register*</td>
										<td class="col-md-2 px-2 text-center">
											<select class="form-control  col-md-7" name="bor[]">
												<option value="Daily Procurement and Sale Register" <?php echo (stristr($BOR, 'Daily Procurement and Sale Register') == true ? 'selected="selected"' : ''); ?>>Yes</option>
												<option value="">No</option>
											</select>
										</td>
									</tr>

									<tr>
										<td style="font-weight:500;">7.</td>
										<td style="font-weight:500;">Stock Movement Register*</td>
										<td class="col-md-2 px-2 text-center">
											<select class="form-control  col-md-7" name="bor[]">
												<option value="Stock Movement Register" <?php echo (stristr($BOR, 'Stock Movement Register') == true ? 'selected="selected"' : ''); ?>>Yes</option>
												<option value="">No</option>
											</select>
										</td>
									</tr>

									<tr>
										<td style="font-weight:500;">8.</td>
										<!-- <td style="font-weight:500;">Doule Entry Cash Book*</td> -->
										<td style="font-weight:500;">Voucher file*</td>
										<td class="col-md-2 px-2 text-center">
											<select class="form-control  col-md-7" name="bor[]">
												<option value="Voucher file" <?php echo (stristr($BOR, 'Voucher file') == true ? 'selected="selected"' : ''); ?>>Yes</option>
												<option value="">No</option>
											</select>
										</td>
									</tr>

									<tr>
										<td style="font-weight:500;">9.</td>
										<!-- <td style="font-weight:500;">Loan Ledger*</td> -->
										<td style="font-weight:500;">Member Loan Ledger*</td>
										<td class="col-md-2 px-2 text-center">
											<select class="form-control  col-md-7" name="bor[]">
												<option value="Member Loan Ledger" <?php echo (stristr($BOR, 'Member Loan Ledger') == true ? 'selected="selected"' : ''); ?>>Yes</option>
												<option value="">No</option>
											</select>
										</td>
									</tr>



									<tr>
										<td style="font-weight:500;">10.</td>
										<td style="font-weight:500;">Additional Book of Record as per requirement*<p
												id="otherselect" style='display:none;'>Other*
												<input type="text" class="form-control col-md-4">
											</p>
										</td>
										</td>
										<td class="col-md-2 px-2 text-center">
											<select class="form-control  col-md-7" name="bor[]"
												onchange='ChheckValue(this.value);'>
												<option value="no" <?php echo (stristr($BOR, 'no') == true ? 'selected="selected"' : ''); ?>>No</option>
												<option value="yes">Yes</option>
											</select>
										</td>
									</tr>
								</tbody>
							</table>


							<div class="col-md-12 text-right mb-1">
								<br>
								<a class="btn btn-primary" onclick="javascript:history.back()"
									style="color:#fff;">Previous</a>
								<input type="hidden" name="stepno5" value="5">
								<input type="hidden" name="isedit" value="1">
								<input type="hidden" name="pgid"
									value="<?php echo ($this->session->userdata('pgid') == true) ? $this->session->userdata('pgid') : ''; ?>">
								<input type="submit" class="btn btn-primary" name="submit1" value="Next">
							</div>


						</div>

					</form>
				</div>
			</div>
		</div>
	<?php } ?>



	<?php if ($this->uri->segment(2) == '6') { ?>

		<div class="row mt-5">
			<div class="col-md-3">
				<div class="sidebar">
					<?php
					// $user_data = $this->session->userdata('admin_session'); 
					$current_segment = $this->uri->segment(1);
					?>

					<ul>
						<li><a href="<?php echo base_url(); ?>user-profile"
								class="<?php echo ($current_segment == 'user-profile') ? 'active' : ''; ?>">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>admin-manager?atype=producergroupdetails"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>"> PG Panel</a>
						</li>
						<li><a href="<?php echo base_url(); ?>members/memberslist"
								class="<?php echo ($current_segment == 'members') ? 'active' : ''; ?>">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel"
								class="<?php echo ($current_segment == 'verifierpanel') ? 'active' : ''; ?>">Verifier
								Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel"
								class="<?php echo ($current_segment == 'approverpanel') ? 'active' : ''; ?>">Approver
								Panel</a></li>
						<li><a href="<?php echo base_url(); ?>buyerdetails-list"
								class="<?php echo ($current_segment == 'buyerdetails-list') ? 'active' : ''; ?>"> Buyer
								Details List</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						<li><a href="<?php echo base_url(); ?>admin-manager"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>">Reports</a>
						</li>
						<?php // if($this->session->userdata('admin_session')['user_group_id'] == '3'){ ?>
						<li><a href="<?php echo base_url(); ?>users-list">Users List</a></li> <?php // } ?>
						<!--li><a href="<?php echo base_url(); ?>change-password">Change Password</a></li-->

						<li><a href="<?php echo base_url(); ?>upload-data"
								class="<?php echo ($current_segment == 'upload-data') ? 'active' : ''; ?>">Upload/Sync
								Records(CSV)</a></li>

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
					<center>
						<?php if (isset($msg) && $msg != '')
							echo '<fieldset id="error_fieldset"><label class="error">' . $msg . '</label></fieldset>'; ?>
						<?php if ($this->input->get('msg') == true) {
							echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">' . $this->input->get('msg') . '</label></fieldset>';
						} ?>
					</center>

					<div class="row mt-4 ml-2 mr-2">

						<div class="col-md-2"><button type="button"
								class="btn btn-<?php echo ($this->input->get('tltype') == false || $this->input->get('tltype') == 'agri') ? 'success' : 'primary'; ?>"
								onclick="window.location.href='<?php echo base_url(); ?>form-filling/6?tltype=agri'">Agricuture</button>
						</div>
						<div class="col-md-2"><button type="button"
								class="btn btn-<?php echo ($this->input->get('tltype') == 'horti') ? 'success' : 'primary'; ?>"
								onclick="window.location.href='<?php echo base_url(); ?>form-filling/6?tltype=horti'">Horticulture</button>
						</div>
						<div class="col-md-2"><button type="button"
								class="btn btn-<?php echo ($this->input->get('tltype') == 'livestocks') ? 'success' : 'primary'; ?>"
								onclick="window.location.href='<?php echo base_url(); ?>form-filling/6?tltype=livestocks'">Livestocks</button>
						</div>
						<div class="col-md-2"><button type="button"
								class="btn btn-<?php echo ($this->input->get('tltype') == 'fishery') ? 'success' : 'primary'; ?>"
								onclick="window.location.href='<?php echo base_url(); ?>form-filling/6?tltype=fishery'">Fishery</button>
						</div>
						<div class="col-md-2"><button type="button"
								class="btn btn-<?php echo ($this->input->get('tltype') == 'sericulture') ? 'success' : 'primary'; ?>"
								onclick="window.location.href='<?php echo base_url(); ?>form-filling/6?tltype=sericulture'">Sericulture</button>
						</div>
						<div class="col-md-2"><button type="button"
								class="btn btn-<?php echo ($this->input->get('tltype') == 'others') ? 'success' : 'primary'; ?>"
								onclick="window.location.href='<?php echo base_url(); ?>form-filling/6?tltype=others'">Others</button>
						</div>

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
										<?php if ($this->input->get('tltype') == false || $this->input->get('tltype') == 'agri' || $this->input->get('tltype') == 'livestocks') { ?>
											<th scope="col">Yes or No</th>
										<?php } ?>
									</tr>
								</thead>

								<tbody>
									<?php if ($this->input->get('tltype') == false || $this->input->get('tltype') == 'agri') { ?>
										<tr>
											<td style="font-weight:500;">1.</td>
											<td style="font-weight:500;">Basic Livelihoods Training</td>
											<td class="col-md-2 px-2 text-center">
												<select class="form-control  col-md-7" name="TLAgriculture[]">
													<option value="Basic Livelihoods Training" <?php echo (stristr($TLAgriculture, 'Basic Livelihoods Training') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLAgriculture, 'Basic Livelihoods Training') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">2.</td>
											<td style="font-weight:500;">Farmers Field School</td>
											<td class="col-md-2 px-2 text-center">
												<select class="form-control  col-md-7" name="TLAgriculture[]">
													<option value="Farmers Field School" <?php echo (stristr($TLAgriculture, 'Farmers Field School') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLAgriculture, 'Farmers Field School') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td style="font-weight:500;">3.</td>
											<!-- <td style="font-weight:500;">Pashu Pathshala</td> -->
											<td style="font-weight:500;">Irrigation and fertigation management</td>
											<td class="col-md-2 px-2 text-center">
												<select class="form-control  col-md-7" name="TLAgriculture[]">
													<option value="Irrigation and fertigation management" <?php echo (stristr($TLAgriculture, 'Irrigation and fertigation management') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLAgriculture, 'Irrigation and fertigation management') == false ? 'selected="selected"' : ''); ?>>No
													</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">4.</td>
											<td style="font-weight:500;">Seed Sorting & treatment</td>
											<td class="col-md-2 px-2 text-center">
												<select class="form-control  col-md-7" name="TLAgriculture[]">
													<option value="Seed Sorting & treatment" <?php echo (stristr($TLAgriculture, 'Seed Sorting & treatment') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLAgriculture, 'Seed Sorting & treatment') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">5.</td>
											<!-- <td style="font-weight:500;">Land preparation,ploughing,Tractorisation/Manual</td> -->
											<td style="font-weight:500;">Cutivation of harvest & post-harvest management & value
												addition</td>
											<td class="col-md-2 px-2 text-center">
												<select class="form-control  col-md-7" name="TLAgriculture[]">
													<option
														value="Cutivation of harvest & post-harvest management & value addition"
														<?php echo (stristr($TLAgriculture, 'Cutivation of harvest & post-harvest management & value addition') == true ? 'selected="selected"' : ''); ?>>Yes
													</option>
													<option value="" <?php echo (stristr($TLAgriculture, 'Cutivation of harvest & post-harvest management & value addition') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">6.</td>
											<!-- <td style="font-weight:500;">Soil Nutrients Management</td> -->
											<td style="font-weight:500;">Intregrated Pest management</td>
											<td class="col-md-2 px-2 text-center">
												<select class="form-control  col-md-7" name="TLAgriculture[]">
													<option value="Intregrated Pest management" <?php echo (stristr($TLAgriculture, 'Intregrated Pest management') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLAgriculture, 'Intregrated Pest management') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">7.</td>
											<!-- <td style="font-weight:500;">Pest Management</td> -->
											<td style="font-weight:500;">Branding, Sorting & Packaging</td>
											<td class="col-md-2 px-2 text-center">
												<select class="form-control  col-md-7" name="TLAgriculture[]">
													<option value="Branding, Sorting & Packaging" <?php echo (stristr($TLAgriculture, 'Branding, Sorting & Packaging') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLAgriculture, 'Branding, Sorting & Packaging') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">8.</td>
											<!-- <td style="font-weight:500;">Irrigation</td> -->
											<td style="font-weight:500;">Organic Farming</td>
											<td class="col-md-2 px-2 text-center">
												<select class="form-control  col-md-7" name="TLAgriculture[]">
													<option value="Organic Farming" <?php echo (stristr($TLAgriculture, 'Organic Farming') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLAgriculture, 'Organic Farming') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">9.</td>
											<!-- <td style="font-weight:500;">Bund formation,uprooting of weeds interculture,transplanting,harvesting,winnowing,Threeshing etc</td> -->
											<td style="font-weight:500;">Supply chain & Market linkage</td>
											<td class="col-md-2 px-2 text-center">
												<select class="form-control  col-md-7" name="TLAgriculture[]">
													<option value="Supply chain & Market linkage" <?php echo (stristr($TLAgriculture, 'Supply chain & Market linkage') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLAgriculture, 'Supply chain & Market linkage') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">10.</td>
											<!-- <td style="font-weight:500;">Harvest Management</td> -->
											<td style="font-weight:500;">Any training received from Agriculture</td>
											<td class="col-md-2 px-2 text-center">
												<select class="form-control  col-md-7" name="TLAgriculture[]">
													<option value="Harvest Management" <?php echo (stristr($TLAgriculture, 'Harvest Management') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLAgriculture, 'Harvest Management') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<!-- <tr>
				 <td style="font-weight:500;">11.</td>				 
				 <td style="font-weight:500;">Post Harvest Management</td>
				   <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7" name="TLAgriculture[]">
					<option value="Post Harvest Management" <?php echo (stristr($TLAgriculture, 'Post Harvest Management') == true ? 'selected="selected"' : ''); ?>>Yes</option>
					<option value=""  <?php echo (stristr($TLAgriculture, 'Post Harvest Management') == false ? 'selected="selected"' : ''); ?>>No</option>
				  </select>
				  </td>
				</tr> -->

										<!--tr>
				 <td style="font-weight:500;">12.</td>				 
				 <td style="font-weight:500;">Others <br><div class="col-md-3"><input type="text" id="name" name="name" required
	   minlength="4" maxlength="8" size="10" class="form-control"></div>
</td>
				 
				 

				   <td class="col-md-2 px-2 text-center ">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr-->
										<script type="text/javascript">
											function CheckColors(val) {
												var element = document.getElementById('othercolor');
												if (val == 'yes')
													element.style.display = 'block';
												else
													element.style.display = 'none';
											}

										</script>
										<!-- <tr>
				 <td style="font-weight:500;">10.</td>				 
				 <td style="font-weight:500;">Other*<p  id="othercolor" style='display:none;'>
				 <input type="text" class="col-md-3 form-control" name="othercolor" /></td> </td>
				  <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-7" name="TLAgriculture[]" onchange='CheckColors(this.value);'>
					<option value="Other" <?php echo (stristr($TLAgriculture, 'Other') == true ? 'selected="selected"' : ''); ?>>No</option>
					<option value="yes" <?php echo (stristr($TLAgriculture, 'Other') == false ? 'selected="selected"' : ''); ?>>Yes</option>					
				  </select>
				  </td>
				</tr> -->

									<?php } ?>
									<?php if ($this->input->get('tltype') == true && $this->input->get('tltype') == 'horti') { ?>
										<tr>
											<td style="font-weight:500;">1.</td>
											<td style="font-weight:500;">Basic Livelihoods Training</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLHorticulture[]" class="form-control  col-md-7">
													<option value="Basic Livelihoods Training" <?php echo (stristr($TLHorticulture, 'Basic Livelihoods Training') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLHorticulture, 'Basic Livelihoods Training') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">2.</td>
											<!-- <td style="font-weight:500;">Irrigation and Fertigation Management</td> -->
											<td style="font-weight:500;">Farmers Field School</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLHorticulture[]" class="form-control  col-md-7">
													<option value="Farmers Field School" <?php echo (stristr($TLHorticulture, 'Farmers Field School') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLHorticulture, 'Farmers Field School') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td style="font-weight:500;">3.</td>
											<!-- <td style="font-weight:500;">Integrated Nutrient Management</td> -->
											<td style="font-weight:500;">Irrigation and fertigation management</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLHorticulture[]" class="form-control  col-md-7">
													<option value="Irrigation and fertigation management" <?php echo (stristr($TLHorticulture, 'Irrigation and fertigation management') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLHorticulture, 'Irrigation and fertigation management') == false ? 'selected="selected"' : ''); ?>>No
													</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">4.</td>
											<!-- <td style="font-weight:500;">Integrated Pest Management</td> -->
											<td style="font-weight:500;">Seed sorting and treatment</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLHorticulture[]" class="form-control  col-md-7">
													<option value="Seed sorting and treatment" <?php echo (stristr($TLHorticulture, 'Seed sorting and treatment') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLHorticulture, 'Seed sorting and treatment') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">5.</td>
											<!-- <td style="font-weight:500;">Post Harvest Management</td> -->
											<td style="font-weight:500;">Cultivation of harvest & post-harvest management &
												value addition</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLHorticulture[]" class="form-control  col-md-7">
													<option
														value="Cultivation of harvest & post-harvest management & value addition"
														<?php echo (stristr($TLHorticulture, 'Cultivation of harvest & post-harvest management & value addition') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLHorticulture, 'Cultivation of harvest & post-harvest management & value addition') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">6.</td>
											<!-- <td style="font-weight:500;">Supply Chain Management of Horticultural crops</td> -->
											<td style="font-weight:500;">Branding, Sorting & Packaging</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLHorticulture[]" class="form-control  col-md-7">
													<option value="Branding, Sorting & Packaging" <?php echo (stristr($TLHorticulture, 'Branding, Sorting & Packaging') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLHorticulture, 'Branding, Sorting & Packaging') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">7.</td>
											<!-- <td style="font-weight:500;">Organic farming</td> -->
											<td style="font-weight:500;">Package and storage of fresh fruits/vegetables</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLHorticulture[]" class="form-control  col-md-7">
													<option value="Package and storage of fresh fruits/vegetables" <?php echo (stristr($TLHorticulture, 'Package and storage of fresh fruits/vegetables') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLHorticulture, 'Package and storage of fresh fruits/vegetables') == false ? 'selected="selected"' : ''); ?>>No
													</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">8.</td>
											<td style="font-weight:500;">Organic farming</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLHorticulture[]" class="form-control  col-md-7">
													<option value="Organic farming" <?php echo (stristr($TLHorticulture, 'Organic farming') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLHorticulture, 'Organic farming') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">9.</td>
											<td style="font-weight:500;">Poly House and Green House cultivation management</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLHorticulture[]" class="form-control  col-md-7">
													<option value="Poly House and Green House cultivation management" <?php echo (stristr($TLHorticulture, 'Poly House and Green House cultivation management') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLHorticulture, 'Poly House and Green House cultivation management') == false ? 'selected="selected"' : ''); ?>>No
													</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">10.</td>
											<td style="font-weight:500;">Nursery raising and management.</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLHorticulture[]" class="form-control  col-md-7">
													<option value="Nursery raising and management" <?php echo (stristr($TLHorticulture, 'Nursery raising and management') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLHorticulture, 'Nursery raising and management') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">11.</td>
											<!-- <td style="font-weight:500;">Marketing </td> -->
											<td style="font-weight:500;">Supply chain & Market linkage </td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLHorticulture[]" class="form-control  col-md-7">
													<option value="Supply chain & Market linkage" <?php echo (stristr($TLHorticulture, 'Supply chain & Market linkage') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLHorticulture, 'Supply chain & Market linkage') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">12.</td>
											<!-- <td style="font-weight:500;">Marketing </td> -->
											<td style="font-weight:500;">Disease of Horticulture crops </td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLHorticulture[]" class="form-control  col-md-7">
													<option value="Disease of Horticulture crops" <?php echo (stristr($TLHorticulture, 'Disease of Horticulture crops') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLHorticulture, 'Disease of Horticulture crops') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">13.</td>
											<!-- <td style="font-weight:500;">Marketing </td> -->
											<td style="font-weight:500;">Intregrated Pest management </td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLHorticulture[]" class="form-control  col-md-7">
													<option value="Intregrated Pest management" <?php echo (stristr($TLHorticulture, 'Intregrated Pest management') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLHorticulture, 'Intregrated Pest management') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<!--tr>
				 <td style="font-weight:500;">12.</td>				 
				 <td style="font-weight:500;">Others <br><div class="col-md-3"><input type="text" id="name" name="name" required
	   minlength="4" maxlength="8" size="10" class="form-control"></div>
</td>
				 
				 

				   <td class="col-md-2 px-2 text-center ">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr-->
										<script>
											function CheckValues(val) {
												var element = document.getElementById('othe');
												if (val == 'yes')
													element.style.display = 'block';
												else
													element.style.display = 'none';
											}
										</script>
										<!-- <tr>
				 <td style="font-weight:500;">12.</td>				 
				 <td style="font-weight:500;">Other*<span  id="othe" style="display:none;"				 >
				 <input type="text" class="form-control col-md-4"    ></span></td> </td>
				  <td class="col-md-2 px-2 text-center">
				  <select name="TLHorticulture[]" class="form-control  col-md-7"  onchange='CheckValues(this.value);'>
					<option value="Other" <?php echo (stristr($TLHorticulture, 'Other') == true ? 'selected="selected"' : ''); ?>>No</option>
					<option value="yes" <?php echo (stristr($TLHorticulture, 'Other') == false ? 'selected="selected"' : ''); ?>>Yes</option>					
				  </select>
				  </td>
				</tr> -->


									<?php } ?>
									<?php if ($this->input->get('tltype') == true && $this->input->get('tltype') == 'livestocks') { ?>

										<tr>
											<td style="font-weight:500;">1.</td>
											<td style="font-weight:500;">Basic Livelihoods Training</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLLivestock[]" class="form-control  col-md-7">
													<option value="Basic Livelihoods Training" <?php echo (stristr($TLLivestock, 'Basic Livelihoods Training') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLLivestock, 'Basic Livelihoods Training') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">2.</td>
											<td style="font-weight:500;">Farmers Field School</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLLivestock[]" class="form-control  col-md-7">
													<option value="Farmers Field School" <?php echo (stristr($TLLivestock, 'Farmers Field School') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLLivestock, 'Farmers Field School') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td style="font-weight:500;">3.</td>
											<td style="font-weight:500;">Pashu Pathshala</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLLivestock[]" class="form-control  col-md-7">
													<option value="Farmers Field School" <?php echo (stristr($TLLivestock, 'Farmers Field School') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLLivestock, 'Farmers Field School') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">4.</td>
											<td style="font-weight:500;">Breed Selection</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLLivestock[]" class="form-control  col-md-7">
													<option value="Farmers Field School" <?php echo (stristr($TLLivestock, 'Farmers Field School') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLLivestock, 'Farmers Field School') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">5.</td>
											<td style="font-weight:500;">Sty/Shed prepation and management</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLLivestock[]" class="form-control  col-md-7">
													<option value="Farmers Field School" <?php echo (stristr($TLLivestock, 'Farmers Field School') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLLivestock, 'Farmers Field School') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">6.</td>
											<td style="font-weight:500;">Feed Management</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLLivestock[]" class="form-control  col-md-7">
													<option value="Farmers Field School" <?php echo (stristr($TLLivestock, 'Farmers Field School') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLLivestock, 'Farmers Field School') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">7.</td>
											<td style="font-weight:500;">Breeding</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLLivestock[]" class="form-control  col-md-7">
													<option value="Breeding" <?php echo (stristr($TLLivestock, 'Breeding') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLLivestock, 'Breeding') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">8.</td>
											<td style="font-weight:500;">Health Care & Management</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLLivestock[]" class="form-control  col-md-7">
													<option value="Health Care & Management" <?php echo (stristr($TLLivestock, 'Health Care & Management') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLLivestock, 'Health Care & Management') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">9.</td>
											<td style="font-weight:500;">Slaughter hygiene management</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLLivestock[]" class="form-control  col-md-7">
													<option value="Slaughter hygiene management" <?php echo (stristr($TLLivestock, 'Slaughter hygiene management') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLLivestock, 'Slaughter hygiene management') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">10.</td>
											<td style="font-weight:500;">Other*<p id="ootherselect" style='display:none;'>
													<input type="text" class="form-control col-md-4">
												</p>
											</td>
											</td>
											<td class="col-md-2 px-2 text-center">
												<select class="form-control  col-md-7" onchange='CheckValueo(this.value);'>
													<option value="Other" <?php echo (stristr($TLLivestock, 'Other') == true ? 'selected="selected"' : ''); ?>>No</option>
													<option value="yes" <?php echo (stristr($TLLivestock, 'Other') == false ? 'selected="selected"' : ''); ?>>Yes</option>
												</select>
											</td>
										</tr>
									<?php } ?>


									<?php if ($this->input->get('tltype') == true && $this->input->get('tltype') == 'fishery') { ?>
										<tr>
											<td style="font-weight:500;">1.</td>
											<td style="font-weight:500;">Basic Livelihoods Training</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLFishery[]" class="form-control  col-md-7">
													<option value="Basic Livelihoods Training" <?php echo (stristr($TLFishery, 'Basic Livelihoods Training') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLFishery, 'Basic Livelihoods Training') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">2.</td>
											<td style="font-weight:500;">Pre-Stocking Management</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLFishery[]" class="form-control  col-md-7">
													<option value="Pre-Stocking Management" <?php echo (stristr($TLFishery, 'Pre-Stocking Management') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLFishery, 'Pre-Stocking Management') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td style="font-weight:500;">(a).</td>
											<td style="font-weight:500;">Pond Preparation and Renovation</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLFishery[]" class="form-control  col-md-7">
													<option value="Pre-Stocking Management" <?php echo (stristr($TLFishery, 'Pond Preparation and Renovation') == true ? 'selected="selected"' : ''); ?>>Yes
													</option>
													<option value="" <?php echo (stristr($TLFishery, 'Pond Preparation and Renovation') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">(b).</td>
											<td style="font-weight:500;">Clearing of aquatic weeds</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLFishery[]" class="form-control  col-md-7">
													<option value="Pre-Stocking Management" <?php echo (stristr($TLFishery, 'Pond Preparation and Renovation') == true ? 'selected="selected"' : ''); ?>>Yes
													</option>
													<option value="" <?php echo (stristr($TLFishery, 'Pond Preparation and Renovation') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">(c).</td>
											<td style="font-weight:500;">Eradication of Predator and weed fishes</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLFishery[]" class="form-control  col-md-7">
													<option value="Pre-Stocking Management" <?php echo (stristr($TLFishery, 'Pond Preparation and Renovation') == true ? 'selected="selected"' : ''); ?>>Yes
													</option>
													<option value="" <?php echo (stristr($TLFishery, 'Pond Preparation and Renovation') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">(d).</td>
											<td style="font-weight:500;">Liming, Fertilization, and Manuring</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLFishery[]" class="form-control  col-md-7">
													<option value="Pre-Stocking Management" <?php echo (stristr($TLFishery, 'Pond Preparation and Renovation') == true ? 'selected="selected"' : ''); ?>>Yes
													</option>
													<option value="" <?php echo (stristr($TLFishery, 'Pond Preparation and Renovation') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">3.</td>
											<td style="font-weight:500;">Stocking and Post Stocking management</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLFishery[]" class="form-control  col-md-7">
													<option value="Stocking and Post Stocking management" <?php echo (stristr($TLFishery, 'Stocking and Post Stocking management') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLFishery, 'Stocking and Post Stocking management') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">(a).</td>
											<td style="font-weight:500;">Species combination, Feeding and Manuring</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLFishery[]" class="form-control  col-md-7">
													<option value="Species combination, Feeding and Manuring" <?php echo (stristr($TLFishery, 'Species combination, Feeding and Manuring') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLFishery, 'Species combination, Feeding and Manuring') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">(b).</td>
											<td style="font-weight:500;">Bottom racking and netting</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLFishery[]" class="form-control  col-md-7">
													<option value="Bottom racking and netting" <?php echo (stristr($TLFishery, 'Bottom racking and netting') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLFishery, 'Bottom racking and netting') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">(c).</td>
											<td style="font-weight:500;">Water quality management</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLFishery[]" class="form-control  col-md-7">
													<option value="Water quality management" <?php echo (stristr($TLFishery, 'Water quality management') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLFishery, 'Water quality management') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">(d).</td>
											<td style="font-weight:500;">Hatching and Hatchery Management </td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLFishery[]" class="form-control  col-md-7">
													<option value="Hatching and Hatchery Management" <?php echo (stristr($TLFishery, 'Hatching and Hatchery Management') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLFishery, 'Hatching and Hatchery Management') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td style="font-weight:500;">(e).</td>
											<td style="font-weight:500;">Fish Health Management </td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLFishery[]" class="form-control  col-md-7">
													<option value="Fish Health Management" <?php echo (stristr($TLFishery, 'Fish Health Management') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLFishery, 'Fish Health Management') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">(f).</td>
											<td style="font-weight:500;">Fish Harvest and Yield Management </td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLFishery[]" class="form-control  col-md-7">
													<option value="Fish Harvest and Yield Management" <?php echo (stristr($TLFishery, 'Fish Harvest and Yield Management') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLFishery, 'Fish Harvest and Yield Management') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td style="font-weight:500;">(g).</td>
											<td style="font-weight:500;">Marketing </td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLFishery[]" class="form-control  col-md-7">
													<option value="Marketing" <?php echo (stristr($TLFishery, 'Marketing') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLFishery, 'Marketing') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>
										<!--tr>
				 <td style="font-weight:500;">12.</td>				
				 <td style="font-weight:500;">Others <br><div class="col-md-3"><input type="text" id="name" name="name" required
	   minlength="4" maxlength="8" size="10" class="form-control"></div>
</td>
				 
				 

				   <td class="col-md-2 px-2 text-center ">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr-->
										<tr>
											<td style="font-weight:500;">4.</td>
											<td style="font-weight:500;">Other*<p id="otherselectss" style='display:none;'>
													<input type="text" class="form-control col-md-4">
												</p>
											</td>
											</td>
											<td class="col-md-2 px-2 text-center">
												<select class="form-control  col-md-7" name="TLFishery[]"
													onchange='CheckValuess(this.value);'>
													<option value="Other" <?php echo (stristr($TLFishery, 'Other') == true ? 'selected="selected"' : ''); ?>>No</option>
													<option value="yes" <?php echo (stristr($TLFishery, 'Other') == false ? 'selected="selected"' : ''); ?>>Yes</option>
												</select>
											</td>
										</tr>
									<?php } ?>


									<?php if ($this->input->get('tltype') == true && $this->input->get('tltype') == 'sericulture') { ?>
										<tr>
											<td style="font-weight:500;">1.</td>
											<td style="font-weight:500;">Basic Livelihoods Training</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLSericulture[]" class="form-control  col-md-7">
													<option value="Basic Livelihoods Training" <?php echo (stristr($TLSericulture, 'Basic Livelihoods Training') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLSericulture, 'Basic Livelihoods Training') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">2.</td>
											<td style="font-weight:500;">Productivity Improvement Training – Feeding crops</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLSericulture[]" class="form-control  col-md-7">
													<option value="Productivity Improvement Training – Feeding crops" <?php echo (stristr($TLSericulture, 'Productivity Improvement Training – Feeding crops') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLSericulture, 'Productivity Improvement Training – Feeding crops') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>
										<tr>
											<td style="font-weight:500;">3.</td>
											<td style="font-weight:500;">Cultivation techniques, Nutrition and disease
												Management</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLSericulture[]" class="form-control  col-md-7">
													<option value="Cultivation techniques, Nutrition and disease Management"
														<?php echo (stristr($TLSericulture, 'Cultivation techniques, Nutrition and disease Management') == true ? 'selected="selected"' : ''); ?>>Yes
													</option>
													<option value="" <?php echo (stristr($TLSericulture, 'Cultivation techniques, Nutrition and disease Management') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">4.</td>
											<td style="font-weight:500;">Young age and Late age worm rearing and Management</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLSericulture[]" class="form-control  col-md-7">
													<option value="Young age and Late age worm rearing and Management" <?php echo (stristr($TLSericulture, 'Young age and Late age worm rearing and Management') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLSericulture, 'Young age and Late age worm rearing and Management') == false ? 'selected="selected"' : ''); ?>>No
													</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">5.</td>
											<td style="font-weight:500;">Seed cocoon production and loose egg preservation
												Management</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLSericulture[]" class="form-control  col-md-7">
													<option value="Seed cocoon production and loose egg preservation Management"
														<?php echo (stristr($TLSericulture, 'Seed cocoon production and loose egg preservation Management') == true ? 'selected="selected"' : ''); ?>>Yes
													</option>
													<option value="" <?php echo (stristr($TLSericulture, 'Seed cocoon production and loose egg preservation Management') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">6.</td>
											<td style="font-weight:500;">Integrated pest Management</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLSericulture[]" class="form-control  col-md-7">
													<option value="Integrated pest Management" <?php echo (stristr($TLSericulture, 'Integrated pest Management') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLSericulture, 'Integrated pest Management') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">7.</td>
											<td style="font-weight:500;">Mechanization of sericulture reeling</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLSericulture[]" class="form-control  col-md-7">
													<option value="Mechanization of sericulture reeling" <?php echo (stristr($TLSericulture, 'Mechanization of sericulture reeling') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLSericulture, 'Mechanization of sericulture reeling') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">8.</td>
											<td style="font-weight:500;">Drudgery reduction through ergonomically sound
												appliances / tools</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLSericulture[]" class="form-control  col-md-7">
													<option value="Drudgery reduction through ergonomically sound appliances"
														<?php echo (stristr($TLSericulture, 'Drudgery reduction through ergonomically sound appliances') == true ? 'selected="selected"' : ''); ?>>
														Yes</option>
													<option value="" <?php echo (stristr($TLSericulture, 'Drudgery reduction through ergonomically sound appliances') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">9.</td>
											<td style="font-weight:500;">Marketing in sericulture sector</td>
											<td class="col-md-2 px-2 text-center">
												<select name="TLSericulture[]" class="form-control  col-md-7">
													<option value="Marketing in sericulture sector" <?php echo (stristr($TLSericulture, 'Marketing in sericulture sector') == true ? 'selected="selected"' : ''); ?>>Yes</option>
													<option value="" <?php echo (stristr($TLSericulture, 'Marketing in sericulture sector') == false ? 'selected="selected"' : ''); ?>>No</option>
												</select>
											</td>
										</tr>

										<tr>
											<td style="font-weight:500;">10.</td>
											<td style="font-weight:500;">Other*<p id="otherselectssss" style='display:none;'>
													<input type="text" class="form-control col-md-4">
												</p>
											</td>
											</td>
											<td class="col-md-2 px-2 text-center">
												<select class="form-control  col-md-7" name="TLSericulture[]"
													onchange='CheckValuessss(this.value);'>
													<option value="Other" <?php echo (stristr($TLSericulture, 'Other') == true ? 'selected="selected"' : ''); ?>>No</option>
													<option value="yes" <?php echo (stristr($TLSericulture, 'Other') == false ? 'selected="selected"' : ''); ?>>Yes</option>
												</select>
											</td>
										</tr>
									<?php } ?>

									<?php if ($this->input->get('tltype') == true && $this->input->get('tltype') == 'others') {

										$TLOther = explode(',', $TLOthers);

										?>
										<tr>
											<td style="font-weight:500;">1.</td>
											<td style="font-weight:500;">
												<div class="col-md-4">
													<input type="text" name="TLOthers[]"
														value="<?php echo isset($TLOther[0]) ? $TLOther[0] : ''; ?>"
														class="form-control">
											</td>

										</tr>

										<tr>
											<td style="font-weight:500;">2.</td>
											<td style="font-weight:500;">
												<div class="col-md-4">
													<input type="text" name="TLOthers[]"
														value="<?php echo isset($TLOther[1]) ? $TLOther[1] : ''; ?>"
														class="form-control">
											</td>

										</tr>
										<tr>
											<td style="font-weight:500;">3.</td>
											<td style="font-weight:500;">
												<div class="col-md-4">
													<input type="text" name="TLOthers[]"
														value="<?php echo isset($TLOther[2]) ? $TLOther[2] : ''; ?>"
														class="form-control">
											</td>

										</tr>

										<tr>
											<td style="font-weight:500;">4.</td>
											<td style="font-weight:500;">
												<div class="col-md-4">
													<input type="text" name="TLOthers[]"
														value="<?php echo isset($TLOther[3]) ? $TLOther[3] : ''; ?>"
														class="form-control">
											</td>

										</tr>

										<tr>
											<td style="font-weight:500;">5.</td>
											<td style="font-weight:500;">
												<div class="col-md-4">
													<input type="text" name="TLOthers[]"
														value="<?php echo isset($TLOther[4]) ? $TLOther[4] : ''; ?>"
														class="form-control">
											</td>

										</tr>
									<?php } ?>
								</tbody>
							</table>


							<div class="col-md-12 text-right mb-1">
								<br>
								<a class="btn btn-primary" onclick="javascript:history.back()"
									style="color:#fff;">Previous</a>
								<input type="hidden" name="stepno6" value="6">
								<input type="hidden" name="isedit" value="1">
								<input type="hidden" name="pgid"
									value="<?php echo ($this->session->userdata('pgid') == true) ? $this->session->userdata('pgid') : ''; ?>">
								<input type="submit" class="btn btn-primary" name="submit1" value="Next">
							</div>


						</div>

					</form>
				</div>
			</div>
		</div>
	<?php } ?>


	<?php if ($this->uri->segment(2) == '9') { ?>

		<div class="row mt-5">
			<div class="col-md-3">
				<div class="sidebar">
					<?php
					// $user_data = $this->session->userdata('admin_session'); 
					$current_segment = $this->uri->segment(1);
					?>

					<ul>
						<li><a href="<?php echo base_url(); ?>user-profile"
								class="<?php echo ($current_segment == 'user-profile') ? 'active' : ''; ?>">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>admin-manager?atype=producergroupdetails"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>"> PG Panel</a>
						</li>
						<li><a href="<?php echo base_url(); ?>members/memberslist"
								class="<?php echo ($current_segment == 'members') ? 'active' : ''; ?>">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel"
								class="<?php echo ($current_segment == 'verifierpanel') ? 'active' : ''; ?>">Verifier
								Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel"
								class="<?php echo ($current_segment == 'approverpanel') ? 'active' : ''; ?>">Approver
								Panel</a></li>
						<li><a href="<?php echo base_url(); ?>buyerdetails-list"
								class="<?php echo ($current_segment == 'buyerdetails-list') ? 'active' : ''; ?>"> Buyer
								Details List</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						<li><a href="<?php echo base_url(); ?>admin-manager"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>">Reports</a>
						</li>
						<?php // if($this->session->userdata('admin_session')['user_group_id'] == '3'){ ?>
						<li><a href="<?php echo base_url(); ?>users-list">Users List</a></li> <?php // } ?>
						<!--li><a href="<?php echo base_url(); ?>change-password">Change Password</a></li-->

						<li><a href="<?php echo base_url(); ?>upload-data"
								class="<?php echo ($current_segment == 'upload-data') ? 'active' : ''; ?>">Upload/Sync
								Records(CSV)</a></li>

						<li><a href="<?php echo base_url(); ?>login/logout">Logout</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-9">
				<div class="content content-box">
					<div class="card-header">
						<div class="row">
							<div class="col-md-12">
								<h4 class="m-0"> Support Recieved</h4>
							</div>
						</div>
					</div>
					<center>
						<?php if (isset($msg) && $msg != '')
							echo '<fieldset id="error_fieldset"><label class="error">' . $msg . '</label></fieldset>'; ?>
						<?php if ($this->input->get('msg') == true) {
							echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">' . $this->input->get('msg') . '</label></fieldset>';
						} ?>
					</center>


					<form class="row pr-4 pl-4" method="post">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-11">
									<h6 class="m-0"> SUPPORT RECEIVED BY THE PRODUCERS GROUP</h6><br>
								</div>
								<div class="col-md-1">
									<a class="btn-sm btn-info" title="Add Support Recieved"
										onclick="addSupportRecieveFunction()" style="color:#fff;"><i
											class="fa fa-plus"></i></a>
								</div>
							</div>

							<div id="supportrecievedfields">
								<?php
								//echo count($pgsr);
								if (count($pgsr) == 0) { ?>

									<div class="col-md-12 row">
										<table class="table p-3 table-bordered table-striped">
											<thead>
												<tr>
													<th scope="col">Source of fund</th>
													<th scope="col">Type of fund</th>
													<th scope="col">Amount*</th>
													<th scope="col">Type of support</th>
													<th scope="col">Amount*</th>
													<th scope="col">Date</th>
													<th scope="col">Purpose</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="col-md-2 px-2 text-center">
														<select class="form-control  col-md-12" name="SRPGsof[]">
															<option value="clf">CLF</option>
															<option value="bankloan">Bank loan</option>
															<option value="others">Others</option>
														</select>
													</td>
													<td class="col-md-3 px-2 text-center">
														<select class="form-control  col-md-12" name="SRPGtof[]">
															<option value="other">Other</option>
															<option value="workingcapital">Working Capital</option>
														</select>
													</td>
													<td class="col-md-2 px-2 text-center">
														<input class="form-control" type="number" min="0" name="SRPGamount[]"
															placeholder=" ">
													</td>
													<td class="col-md-2 px-2 text-center">
														<select class="form-control  col-md-12" name="SRPGtos[]">
															<option value="grant">Grant</option>
															<option value="loan">Loan</option>
															<option value="others">Others</option>
														</select>
													</td>
													<td class="col-md-2 px-2 text-center">
														<input class="form-control" type="number" min="0" name="SRPGtosamount[]"
															placeholder=" ">
													</td>
													<td><input class="form-control " type="date" name="SRPGdate[]"
															placeholder=" "></td>
													<td><input type="text" class="form-control" name="SRPGpurpose[]"></td>

												</tr>
											</tbody>
										</table>
										<div class="col-md-12">

											<div class="row">
												<div class="col-md-11">
													<h6 class="m-0"> PAYMENT MODE BY PG 123</h6><br>
												</div>
											</div>
											<table class="table p-3 table-bordered table-striped">
												<thead>
													<tr>
														<th scope="col">Source of fund </th>
														<th scope="col">Repayment of principle</th>
														<th scope="col">Rate of Interest</th>
														<th scope="col"> Monthly EMI</th>
														<th scope="col"> Amount Due</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="col-md-3 px-2 text-center">
															<select class="form-control  col-md-12" name="PMPGsof[]">
																<option value="clf">CLF</option>
																<option value="bankloan">Bank loan</option>
																<option value="others">Others</option>
															</select>
														</td>
														<td><input class="form-control" type="text" name="PMPGrp[]"
																placeholder=" "></td>
														<td><input class="form-control" type="text" name="PMPGinterest_rate[]"
																placeholder=" "></td>
														<td><input class="form-control" type="text" name="PMPGmonthlyemi[]"
																placeholder=" "></td>
														<td><input class="form-control" type="text" name="PMPGamountdue[]"
																placeholder=" "></td>
													</tr>
												</tbody>
											</table>

										</div>
										<div class="col-md-12">

											<div class="row">
												<div class="col-md-11">
													<h6 class="m-0"> </h6>
												</div>
												<div class="col-md-1">

												</div>
											</div>

											<table class="table p-3 table-bordered table-striped">
												<thead>
													<tr>
														<th scope="col">Duration of Loan </th>
														<th scope="col">Date of Commencement </th>
														<th scope="col">Date of Completion</th>

													</tr>
												</thead>
												<tbody>

													<tr>
														<td><input class="form-control" type="number" min="0"
																name="loanduration[]"></td>
														<td><input class="form-control" type="date" name="commencement_date[]">
														</td>
														<td><input class="form-control" type="date" name="completion_date[]">
															<input type="hidden" name="pgssavetype[]" value="add">
														</td>
													</tr>

													<!--tr>
				  <td><input class="form-control" type="text" placeholder=" "></td>
				  <td><input class="form-control" type="text" placeholder=" "></td>
				  <td><input class="form-control" type="text" placeholder=" "></td>
				 
				</tr-->

												</tbody>
											</table>
										</div>
									</div>

								<?php } else { ?>
									<!-- // print_r($pgsr);
			// die();  -->
									<?php
									$i = 0;
									foreach ($pgsr as $sr) { ?>

										<div class="col-md-12 row">
											<table class="table p-3 table-bordered table-striped">
												<thead>
													<tr>

														<th scope="col">Source of fund</th>
														<th scope="col">Type of fund</th>
														<th scope="col">Amount*</th>
														<!-- <th scope="col">Type of support</th>
				  <th scope="col">Amount*</th> -->
														<th scope="col">Date</th>
														<th scope="col">Purpose</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="col-md-2 px-2 text-center">
															<select class="form-control  col-md-12" name="SRPGsof[]">
																<option value="clf" <?php echo ($sr['SRPGsof'] == 'clf') ? 'selected="selected"' : ''; ?>>CLF
																</option>
																<option value="bankloan" <?php echo ($sr['SRPGsof'] == 'bankloan') ? 'selected="selected"' : ''; ?>>Bank
																	loan</option>
																<option value="others" <?php echo ($sr['SRPGsof'] == 'others') ? 'selected="selected"' : ''; ?>>Others
																</option>
															</select>
														</td>
														<td class="col-md-3 px-2 text-center">
															<select class="form-control  col-md-12" name="SRPGtof[]">
																<option value="other" <?php echo ($sr['SRPGtof'] == 'other') ? 'selected="selected"' : ''; ?>>Other
																</option>
																<option value="workingcapital" <?php echo ($sr['SRPGtof'] == 'workingcapital') ? 'selected="selected"' : ''; ?>>
																	Working Capital</option>
																<option value="infrastructurefund" <?php echo ($sr['SRPGtof'] == 'infrastructurefund') ? 'selected="selected"' : ''; ?>>Infrastructure Fund</option>
															</select>
														</td>
														<td class="col-md-2 px-2 text-center">
															<input class="form-control" type="number" min="0" name="SRPGamount[]"
																value="<?php echo $sr['SRPGamount']; ?>" placeholder=" ">
														</td>
														<!-- <td class="col-md-2 px-2 text-center">
				  <select class="form-control  col-md-12" name="SRPGtos[]">
					<option value="grant" <?php echo ($sr['SRPGtos'] == 'grant') ? 'selected="selected"' : ''; ?>>Grant</option>	
					<option value="loan" <?php echo ($sr['SRPGtos'] == 'loan') ? 'selected="selected"' : ''; ?>>Loan</option>
					<option value="others" <?php echo ($sr['SRPGtos'] == 'others') ? 'selected="selected"' : ''; ?>>Others</option>						
				  </select></td>
				  <td class="col-md-2 px-2 text-center">
				  <input class="form-control" type="number" min="0"  name="SRPGtosamount[]" value="<?php echo $sr['SRPGtosamount']; ?>"  placeholder=" "></td> -->
														<td><input class="form-control " type="date" name="SRPGdate[]"
																value="<?php echo $sr['SRPGdate']; ?>" placeholder=" "></td>
														<td><input type="text" class="form-control" name="SRPGpurpose[]"
																value="<?php echo $sr['SRPGpurpose']; ?>"></td>

													</tr>
												</tbody>
											</table>
											<div class="col-md-12">

												<div class="row">
													<div class="col-md-11">
														<h6 class="m-0"> PAYMENT MODE BY PG</h6><br>
													</div>
												</div>
												<table class="table p-3 table-bordered table-striped">
													<thead>
														<tr>
															<th scope="col">Source of fund </th>
															<th scope="col">Repayment of principle</th>
															<th scope="col">Rate of Interest</th>
															<th scope="col"> Monthly EMI</th>
															<th scope="col"> Amount Due</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="col-md-3 px-2 text-center">
																<select class="form-control  col-md-12" name="PMPGsof[]">
																	<option value="clf" <?php echo ($sr['PMPGsof'] == 'clf') ? 'selected="selected"' : ''; ?>>CLF
																	</option>
																	<option value="bankloan" <?php echo ($sr['PMPGsof'] == 'bankloan') ? 'selected="selected"' : ''; ?>>
																		Bank loan</option>
																	<option value="others" <?php echo ($sr['PMPGsof'] == 'others') ? 'selected="selected"' : ''; ?>>
																		Others</option>
																</select>
															</td>
															<td><input class="form-control" type="text" name="PMPGrp[]"
																	value="<?php echo $sr['PMPGrp']; ?>" placeholder=" "></td>
															<td><input class="form-control" type="text" name="PMPGinterest_rate[]"
																	value="<?php echo $sr['PMPGinterest_rate']; ?>" placeholder=" ">
															</td>
															<td><input class="form-control" type="text" name="PMPGmonthlyemi[]"
																	value="<?php echo $sr['PMPGmonthlyemi']; ?>" placeholder=" ">
															</td>
															<td><input class="form-control" type="text" name="PMPGamountdue[]"
																	value="<?php echo $sr['PMPGamountdue']; ?>" placeholder=" ">
															</td>
														</tr>
													</tbody>
												</table>

											</div>
											<div class="col-md-12">

												<div class="row">
													<div class="col-md-11">
														<h6 class="m-0"> </h6>
													</div>
													<div class="col-md-1">

													</div>
												</div>

												<table class="table p-3 table-bordered table-striped">
													<thead>
														<tr>
															<th scope="col">Duration of Loan </th>
															<th scope="col">Date of Commencement </th>
															<th scope="col">Date of Completion</th>

														</tr>
													</thead>
													<tbody>

														<tr>
															<td><input class="form-control" type="number" min="0"
																	name="loanduration[]"
																	value="<?php echo $sr['loanduration']; ?>"></td>
															<td><input class="form-control" type="date" name="commencement_date[]"
																	value="<?php echo $sr['commencement_date']; ?>"></td>
															<td><input class="form-control" type="date" name="completion_date[]"
																	value="<?php echo $sr['completion_date']; ?>">
																<input type="hidden" name="pgsupportid[]"
																	value="<?php echo $sr['id']; ?>">
																<input type="hidden" name="pgssavetype[]" value="update">
															</td>
														</tr>

														<!--tr>
				  <td><input class="form-control" type="text" placeholder=" "></td>
				  <td><input class="form-control" type="text" placeholder=" "></td>
				  <td><input class="form-control" type="text" placeholder=" "></td>
				 
				</tr-->

													</tbody>
												</table>
											</div>
										</div>



										<?php
										$i++;

									}

								}

								?>


							</div>
							<div class="col-md-12 text-right mb-1">
								<br>
								<a class="btn btn-primary" onclick="javascript:history.back()"
									style="color:#fff;">Previous</a>
								<input type="hidden" name="stepno9" value="9">
								<input type="hidden" name="isedit" value="1">
								<input type="hidden" name="pgid"
									value="<?php echo ($this->session->userdata('pgid') == true) ? $this->session->userdata('pgid') : ''; ?>">
								<!-- <a class="btn btn-primary" class="btn btn-primary" onclick="javascript:history.back()" style="color:#fff;"> Next </a> -->
								<input type="submit" class="btn btn-primary" name="submit1" value="Next">
								<!-- <button class="btn btn-primary" type="button" name="submit" value="Signup" onclick="window.location='<?php echo base_url() . 'form-filling/8'; ?>'">Next</button> -->
								<!-- <button class="btn btn-primary" type="button" name="submit" value="Signup" onclick="window.location='<?php echo base_url() . 'form-filling/14'; ?>'">Next</button> -->

							</div>
					</form>
				</div>
			</div>
		</div>
	<?php } ?>


	<?php if ($this->uri->segment(2) == '8') { ?>

		<div class="row mt-5">
			<div class="col-md-3">
				<div class="sidebar">
					<?php
					// $user_data = $this->session->userdata('admin_session'); 
					$current_segment = $this->uri->segment(1);
					?>

					<ul>
						<li><a href="<?php echo base_url(); ?>user-profile"
								class="<?php echo ($current_segment == 'user-profile') ? 'active' : ''; ?>">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>admin-manager?atype=producergroupdetails"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>"> PG Panel</a>
						</li>
						<li><a href="<?php echo base_url(); ?>members/memberslist"
								class="<?php echo ($current_segment == 'members') ? 'active' : ''; ?>">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel"
								class="<?php echo ($current_segment == 'verifierpanel') ? 'active' : ''; ?>">Verifier
								Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel"
								class="<?php echo ($current_segment == 'approverpanel') ? 'active' : ''; ?>">Approver
								Panel</a></li>
						<li><a href="<?php echo base_url(); ?>buyerdetails-list"
								class="<?php echo ($current_segment == 'buyerdetails-list') ? 'active' : ''; ?>"> Buyer
								Details List</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						<li><a href="<?php echo base_url(); ?>admin-manager"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>">Reports</a>
						</li>
						<?php // if($this->session->userdata('admin_session')['user_group_id'] == '3'){ ?>
						<li><a href="<?php echo base_url(); ?>users-list">Users List</a></li> <?php // } ?>
						<!--li><a href="<?php echo base_url(); ?>change-password">Change Password</a></li-->

						<li><a href="<?php echo base_url(); ?>upload-data"
								class="<?php echo ($current_segment == 'upload-data') ? 'active' : ''; ?>">Upload/Sync
								Records(CSV)</a></li>

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
					<center>
						<?php if (isset($msg) && $msg != '')
							echo '<fieldset id="error_fieldset"><label class="error">' . $msg . '</label></fieldset>'; ?>
						<?php if ($this->input->get('msg') == true) {
							echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">' . $this->input->get('msg') . '</label></fieldset>';
						} ?>
					</center>

					<form class="row pr-4 pl-4" method="post">

						<div class="col-md-12">
							<br><br>
							<div class="row">
								<div class="col-md-11">
									<h6 class="m-0"> MONTHLY STRENGTH OF MEMBERS OF THE PG</h6><br>
								</div>
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
												<div class="col-md-6"> <input class="form-control" type="text"
														placeholder="Name"></div>
											</div>
											<div class="row mt-2">

												<div class="col-md-5"> <label><b>Husband / Father Name</b></label></div>
												<div class="col-md-6"> <input class="form-control" type="text"
														placeholder="Husband / Father Name"></div>
											</div>
											<div class="row mt-2">

												<div class="col-md-5"> <label><b>Commodity</b></label></div>
												<div class="col-md-6"> <input class="form-control" type="text"
														placeholder="Commodity"></div>
											</div>

											<div class="row mt-2">

												<div class="col-md-5"> <label><b>Rate</b></label></div>
												<div class="col-md-6"> <input class="form-control" type="number"
														placeholder="Rate" min="0"></div>
											</div>

											<div class="row mt-2">

												<div class="col-md-5"> <label><b>Amount</b></label></div>
												<div class="col-md-6"> <input class="form-control" type="number"
														placeholder="Amount" min="0"></div>
											</div>
										</td>
										<td><input class="form-control" type="text" placeholder=" "><br>
											<div class="row mt-2">

												<div class="col-md-5"> <label><b>Name</b></label></div>
												<div class="col-md-6"> <input class="form-control" type="text"
														placeholder="Name"></div>
											</div>
											<div class="row mt-2">

												<div class="col-md-5"> <label><b>Husband / Father Name</b></label></div>
												<div class="col-md-6"> <input class="form-control" type="text"
														placeholder="Husband / Father Name"></div>
											</div>
											<div class="row mt-2">

												<div class="col-md-5"> <label><b>Commodity</b></label></div>
												<div class="col-md-6"> <input class="form-control" type="text"
														placeholder="Commodity"></div>
											</div>
											<div class="row mt-2">

												<div class="col-md-5"> <label><b>Quantity</b></label></div>
												<div class="col-md-6"> <input class="form-control" type="number"
														placeholder="Quantity" min="0"></div>
											</div>
											<div class="row mt-2">
												<div class="col-md-5"> <label><b>Rate</b></label></div>
												<div class="col-md-6"> <input class="form-control" type="number"
														placeholder="Rate" min="0"></div>
											</div>

											<div class="row mt-2">

												<div class="col-md-5"> <label><b>Amount</b></label></div>
												<div class="col-md-6"> <input class="form-control" type="number"
														placeholder="Amount" min="0"></div>
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
								<a class="btn btn-primary" onclick="javascript:history.back()"
									style="color:#fff;">Previous</a>
								<button class="btn btn-primary" type="button" name="submit" value="Signup"
									onclick="window.location='<?php echo base_url() . 'form-filling/9'; ?>'">Next</button>
							</div>


						</div>

					</form>
				</div>
			</div>
		</div>
	<?php } ?>

	<?php if ($this->uri->segment(2) == '16') { ?>

		<div class="row mt-5">
			<div class="col-md-3">
				<div class="sidebar">
					<?php
					// $user_data = $this->session->userdata('admin_session'); 
					$current_segment = $this->uri->segment(1);
					?>

					<ul>
						<li><a href="<?php echo base_url(); ?>user-profile"
								class="<?php echo ($current_segment == 'user-profile') ? 'active' : ''; ?>">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>admin-manager?atype=producergroupdetails"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>"> PG Panel</a>
						</li>
						<li><a href="<?php echo base_url(); ?>members/memberslist"
								class="<?php echo ($current_segment == 'members') ? 'active' : ''; ?>">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel"
								class="<?php echo ($current_segment == 'verifierpanel') ? 'active' : ''; ?>">Verifier
								Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel"
								class="<?php echo ($current_segment == 'approverpanel') ? 'active' : ''; ?>">Approver
								Panel</a></li>
						<li><a href="<?php echo base_url(); ?>buyerdetails-list"
								class="<?php echo ($current_segment == 'buyerdetails-list') ? 'active' : ''; ?>"> Buyer
								Details List</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						<li><a href="<?php echo base_url(); ?>admin-manager"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>">Reports</a>
						</li>
						<?php // if($this->session->userdata('admin_session')['user_group_id'] == '3'){ ?>
						<li><a href="<?php echo base_url(); ?>users-list">Users List</a></li> <?php // } ?>
						<!--li><a href="<?php echo base_url(); ?>change-password">Change Password</a></li-->

						<li><a href="<?php echo base_url(); ?>upload-data"
								class="<?php echo ($current_segment == 'upload-data') ? 'active' : ''; ?>">Upload/Sync
								Records(CSV)</a></li>

						<li><a href="<?php echo base_url(); ?>login/logout">Logout</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-9">
				<div class="content content-box">
					<div class="card-header">
						<div class="row">
							<div class="col-md-12">
								<h4 class="m-0">Business Plan Preparation</h4>
							</div>
						</div>
					</div>
					<center>
						<?php if (isset($msg) && $msg != '')
							echo '<fieldset id="error_fieldset"><label class="error">' . $msg . '</label></fieldset>'; ?>
						<?php if ($this->input->get('msg') == true) {
							echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">' . $this->input->get('msg') . '</label></fieldset>';
						} ?>
					</center>

					<form class="row pr-4 pl-4" method="post">

						<div class="col-md-12">
							<br><br>
							<h6 class="m-0"> Business Plan Preparation </h6><br>
							<?php $BPPreparation = explode(',', $BPPreparation); ?>
							<table class="table p-3 table-bordered table-striped">
								<thead>
									<tr>
										<th scope="col">S. No.</th>
										<th scope="col">Business Plan</th>
										<th scope="col">Yes or No</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="font-weight:500;">1.</td>
										<td style="font-weight:500;">Business Plan Prepared</td>
										<td class="col-md-2 px-2 text-center">
											<select class="form-control col-md-7" name="BPPreparation[]"
												onchange='ChheckValue(this.value);'>
												<option value="yes" <?php echo (stristr($BPPreparation[0], 'yes') == true ? 'selected="selected"' : ''); ?>>Yes</option>
												<option value="no" <?php echo (stristr($BPPreparation[0], 'no') == true ? 'selected="selected"' : ''); ?>>No</option>
											</select>
										</td>
									</tr>
									<tr>
										<td style="font-weight:500;">2.</td>
										<td style="font-weight:500;">Business Plan submitted to CLF</td>
										<td class="col-md-2 px-2 text-center">
											<select class="form-control col-md-7" name="BPPreparation[]"
												onchange='ChheckValue(this.value);'>
												<option value="yes" <?php echo (stristr($BPPreparation[1], 'yes') == true ? 'selected="selected"' : ''); ?>>Yes</option>
												<option value="no" <?php echo (stristr($BPPreparation[1], 'no') == true ? 'selected="selected"' : ''); ?>>No</option>
											</select>
										</td>
									</tr>
									<tr>
										<td style="font-weight:500;">3.</td>
										<td style="font-weight:500;">Business plan Prepared for (Name of Commodity) </td>
										<td class="col-md-2 px-2 text-center">
											<input type="text" name="BPPreparation[]"
												value="<?php echo isset($BPPreparation[2]) ? $BPPreparation[2] : ''; ?>"
												class="form-control col-md-7">
										</td>
									</tr>
									<tr>
										<td style="font-weight:500;">4.</td>
										<td style="font-weight:500;">Amount (Lakhs) of Business Plan </td>
										<td class="col-md-2 px-2 text-center">
											<input type="number" name="BPPreparation[]"
												value="<?php echo isset($BPPreparation[3]) ? $BPPreparation[3] : ''; ?>"
												class="form-control col-md-7" min="100000" required />
										</td>
									</tr>
								</tbody>
							</table>


							<div class="col-md-12 text-right mb-1">
								<br>
								<a class="btn btn-primary" onclick="javascript:history.back()"
									style="color:#fff;">Previous</a>
								<input type="hidden" name="stepno16" value="16">
								<input type="hidden" name="isedit" value="1">
								<input type="hidden" name="pgid"
									value="<?php echo ($this->session->userdata('pgid') == true) ? $this->session->userdata('pgid') : ''; ?>">
								<input type="submit" class="btn btn-primary" name="submit1" value="Next">
							</div>


						</div>

					</form>

				</div>
			</div>
		</div>

	<?php } ?>

	<?php if ($this->uri->segment(2) == '7') { ?>

		<div class="row mt-5">
			<div class="col-md-3">
				<div class="sidebar">
					<?php
					// $user_data = $this->session->userdata('admin_session'); 
					$current_segment = $this->uri->segment(1);
					?>

					<ul>
						<li><a href="<?php echo base_url(); ?>user-profile"
								class="<?php echo ($current_segment == 'user-profile') ? 'active' : ''; ?>">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>admin-manager?atype=producergroupdetails"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>"> PG Panel</a>
						</li>
						<li><a href="<?php echo base_url(); ?>members/memberslist"
								class="<?php echo ($current_segment == 'members') ? 'active' : ''; ?>">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel"
								class="<?php echo ($current_segment == 'verifierpanel') ? 'active' : ''; ?>">Verifier
								Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel"
								class="<?php echo ($current_segment == 'approverpanel') ? 'active' : ''; ?>">Approver
								Panel</a></li>
						<li><a href="<?php echo base_url(); ?>buyerdetails-list"
								class="<?php echo ($current_segment == 'buyerdetails-list') ? 'active' : ''; ?>"> Buyer
								Details List</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						<li><a href="<?php echo base_url(); ?>admin-manager"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>">Reports</a>
						</li>
						<?php // if($this->session->userdata('admin_session')['user_group_id'] == '3'){ ?>
						<li><a href="<?php echo base_url(); ?>users-list">Users List</a></li> <?php // } ?>
						<!--li><a href="<?php echo base_url(); ?>change-password">Change Password</a></li-->

						<li><a href="<?php echo base_url(); ?>upload-data"
								class="<?php echo ($current_segment == 'upload-data') ? 'active' : ''; ?>">Upload/Sync
								Records(CSV)</a></li>

						<li><a href="<?php echo base_url(); ?>login/logout">Logout</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-9">
				<div class="content content-box">
					<div class="card-header">
						<div class="row">
							<div class="col-md-12">
								<h4 class="m-0">Monthly Business Summary </h4>
							</div>
						</div>
					</div>
					<center>
						<?php if (isset($msg) && $msg != '')
							echo '<fieldset id="error_fieldset"><label class="error">' . $msg . '</label></fieldset>'; ?>
						<?php if ($this->input->get('msg') == true) {
							echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">' . $this->input->get('msg') . '</label></fieldset>';
						} ?>
					</center>

					<form class="row pr-4 pl-4" method="post">

						<div class="col-md-12">
							<br>
							<h4 class="m-0"> Monthly Business Summary:<br><br>
								<!-- <a class="btn btn-primary ml-5" href="#"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;PG Member</a><br><br> -->
								<!-- <a class="btn btn-primary ml-5" href="#"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;NON PG Member</a></h4><br><br> -->
								<div class="row">
									<div class="col-md-11">
										<h6 class="m-0"> COMMODITY WISE BUSINESS DURING THE MONTH</h6><br>
									</div>
									<div class="col-md-1">
										<a href="#" onClick="addMonthlyBusinessSummaryFunction();" class="btn-sm btn-info"
											title="Add Task"><i class="fa fa-plus"></i></a>
									</div>
								</div>

								<?php
								if (count($csdt) == 0) {
									?>

									<div class="monthly-business-table-set">
										<table class="table p-3 table-bordered table-striped ">
											<thead>
												<tr>
													<th scope="col" width="15%">Commodity Category*</th>
													<th scope="col" width="20%">Commodity Sub-Category*</th>
													<th scope="col" width="15%">Commodity Name*</th>
													<th scope="col">Opening <br />stock* (Qtl./Ltr./Num.)</th>
													<th scope="col">Procurement <br />Quantity*(Qtl./Ltr./Num.)</th>
													<th scope="col">Wastage <br />Quantity*(Qtl./Ltr./Num.)</th>
												</tr>
											</thead>
											<tbody>

												<tr>
													<td>
														<select class="form-control" name="commoditycategory[]">
															<!-- <option value="clf" <?php echo ($sr['PMPGsof'] == 'clf') ? 'selected="selected"' : ''; ?>>CLF</option> -->
															<option value="agriculture">Agriculture</option>
															<option value="horticulture">Horticulture</option>
															<option value="apiculture">Apiculture</option>
															<option value="sericulture">Sericulture</option>
															<option value="livestock">Livestock</option>
															<option value="fishery">Fishery</option>
															<option value="plantation">Plantation</option>
															<option value="spices">Spices</option>
															<option value="poultry">Poultry</option>
															<option value="mushroomscultivation">Mushrooms Cultivation</option>
															<option value="vermicompost">Vermicompost</option>
														</select>
													</td>
													<td>
														<select class="form-control" name="commoditysubcategory[]">
															<option value="primary">Primary</option>
															<option value="secondary">Secondary</option>
															<option value="tertiary">Tertiary</option>
														</select>
													</td>
													<td><input name="commodity[]" class="form-control" type="text"
															placeholder="TEXT"></td>
													<td><input name="opstock[]" class="form-control" type="text"
															placeholder="In Fig">
														<div class="row mt-2">
															<div class="col-md-6"><input name="opamount[]" class="form-control"
																	type="number" placeholder="Amount" min="100000" /> </div>
															<div class="col-md-6"> <input name="oprate[]" class="form-control"
																	type="number" placeholder="Rate" min="0" /></div>

														</div>
													</td>
													<td><input name="procureqty[]" class="form-control" type="text"
															placeholder="In Fig">
														<div class="row mt-2">
															<div class="col-md-6"><input name="procureamount[]"
																	class="form-control" type="number" placeholder="Amount"
																	min="100000" /> </div>
															<div class="col-md-6"> <input name="procurerate[]"
																	class="form-control" type="number" placeholder="Rate"
																	min="0" /></div>
														</div>
													</td>

													<td><input name="procurewastageqty[]" class="form-control" type="text"
															placeholder="In Fig">
														<div class="row mt-2">
															<div class="col-md-6"><input name="procurewastageamount[]"
																	class="form-control" type="number" placeholder="Amount"
																	min="100000" /> </div>
															<div class="col-md-6"> <input name="procurewastagerate[]"
																	class="form-control" type="number" placeholder="Rate"
																	min="0" /></div>
														</div>
													</td>

												</tr>

											</tbody>
										</table>
										<table class="table p-3 table-bordered table-striped ">
											<thead>
												<tr>

													<th scope="col">Other Expenditures <br> Quantity*(Qtl./Ltr./Num.)</th>
													<th scope="col">Sale Quantity* <br> (Qtl./Ltr./Num.)</th>
													<th scope="col">Closing stock* <br> (Qtl./Ltr./Num.) </th>
													<th scope="col">Surplus <br />Quantity*(Qtl./Ltr./Num.)</th>
													<th scope="col">Cumulative Sales/Income <br />Quantity*(Qtl./Ltr./Num.)</th>
												</tr>
											</thead>
											<tbody>


												<tr>
													<td><input name="otherexpenditureqty[]" class="form-control" type="text"
															placeholder="In Fig">
														<div class="row mt-2">
															<div class="col-md-6"><input name="otherexpenditureamount[]"
																	class="form-control" type="number" placeholder="Amount"
																	min="100000" /> </div>
															<div class="col-md-6"> <input name="otherexpenditurerate[]"
																	class="form-control" type="number" placeholder="Rate"
																	min="0" /></div>
														</div>
													</td>

													<td><input name="saleqty[]" class="form-control" type="text"
															placeholder="In Fig">
														<div class="row mt-2">
															<div class="col-md-6"><input name="saleamount[]"
																	class="form-control" type="number" placeholder="Amount"
																	min="100000" /> </div>
															<div class="col-md-6"> <input name="salerate[]" class="form-control"
																	type="number" placeholder="Rate" min="0" /></div>
														</div>
													</td>
													<td><input name="closingstockqty[]" class="form-control" type="text"
															placeholder="In Fig">
														<div class="row mt-2">
															<div class="col-md-6"><input name="closingstockamount[]"
																	class="form-control" type="number" placeholder="Amount"
																	min="100000" /> </div>
															<div class="col-md-6"> <input name="closingstockrate[]"
																	class="form-control" type="number" placeholder="Rate"
																	min="0" /></div>
														</div>
													</td>

													<td><input name="surplusqty[]" class="form-control" type="text"
															placeholder="In Fig">
														<div class="row mt-2">
															<div class="col-md-6"><input name="surplusamount[]"
																	class="form-control" type="number" placeholder="Amount"
																	min="100000" /> </div>
															<div class="col-md-6"> <input name="surplusrate[]"
																	class="form-control" type="number" placeholder="Rate"
																	min="0" /></div>
														</div>
													</td>

													<td>
														<input name="cumulativesalesqty[]" class="form-control" type="text"
															placeholder="In Fig">
														<div class="row mt-2">
															<div class="col-md-6"><input name="cumulativesalesamount[]"
																	class="form-control" type="number" placeholder="Amount"
																	min="100000" /> </div>
															<div class="col-md-6"> <input name="cumulativesalesrate[]"
																	class="form-control" type="number" placeholder="Rate"
																	min="0" /></div>
															<input type="hidden" name="pgssavetype[]" value="add">
														</div>
													</td>
												</tr>

											</tbody>
											<!-- </table>
				<table class="table p-3 table-bordered table-striped">
				<thead>
					<tr>				  
					<th scope="col">Commodity Name*</th>
					<th scope="col">Opening <br/>Quantity* (Qtl./Ltr./Num.)</th>
					<th scope="col">Wastage  <br/>Quantity*(Qtl./Ltr./Num.)</th>
					</tr>
				</thead>
				<tbody>
					
					
					<tr>
					<td><input class="form-control" type="text" placeholder="TEXT"></td>
					<td><input class="form-control" type="text" placeholder="In Fig">
					<div class="row mt-2"> 
					<div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="100000"/> </div>
					<div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
					
					</div>
					</td>
					<td><input class="form-control" type="text" placeholder="In Fig">
					<div class="row mt-2"> 
					<div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="100000"/> </div>
					<div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
					</div></td>
					
					
					</tr>
					
				</tbody>
				</table>
				<table class="table p-3 table-bordered table-striped">
				<thead>
					<tr>				  
					<th scope="col">Commodity Name*</th>
					<th scope="col">Procurement<br/>Quantity* (Qtl./Ltr./Num.)</th>
					<th scope="col">Wastage  <br/>Quantity*(Qtl./Ltr./Num.)</th>
					</tr>
				</thead>
				<tbody>
					
					
					<tr>
					<td><input class="form-control" type="text" placeholder="TEXT"></td>
					<td><input class="form-control" type="text" placeholder="In Fig">
					<div class="row mt-2"> 
					<div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="100000"/> </div>
					<div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
					
					</div>
					</td>
					<td><input class="form-control" type="text" placeholder="In Fig">
					<div class="row mt-2"> 
					<div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="100000"/> </div>
					<div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
					</div></td>
					
					
					</tr>
					
				</tbody>
				</table>
				<table class="table p-3 table-bordered table-striped">
				<thead>
					<tr>				  
					<th scope="col">Commodity Name*</th>
					<th scope="col">Sale<br/>Quantitys* (Qtl./Ltr./Num.)</th>
					<th scope="col">Wastage  <br/>Quantity*(Qtl./Ltr./Num.)</th>
					</tr>
				</thead>
				<tbody>
					
					
					<tr>
					<td><input class="form-control" type="text" placeholder="TEXT"></td>
					<td><input class="form-control" type="text" placeholder="In Fig">
					<div class="row mt-2"> 
					<div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="100000"/> </div>
					<div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
					
					</div>
					</td>
					<td><input class="form-control" type="text" placeholder="In Fig">
					<div class="row mt-2"> 
					<div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="100000"/> </div>
					<div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
					</div></td>
					
					
					</tr>
					
				</tbody>
				</table>
				<table class="table p-3 table-bordered table-striped">
				<thead>
					<tr>				  
					<th scope="col">Commodity Name*</th>
					<th scope="col">Closing stock<br/> (Qtl./Ltr./Num.)</th>
					<th scope="col">Wastage  <br/>Quantity*(Qtl./Ltr./Num.)</th>
					</tr>
				</thead>
				<tbody>
					
					
					<tr>
					<td><input class="form-control" type="text" placeholder="TEXT"></td>
					<td><input class="form-control" type="text" placeholder="In Fig">
					<div class="row mt-2"> 
					<div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="100000"/> </div>
					<div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
					
					</div>
					</td>
					<td><input class="form-control" type="text" placeholder="In Fig">
					<div class="row mt-2"> 
					<div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="100000"/> </div>
					<div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
					</div></td>
					
					<table class="table p-3 table-bordered table-striped">
				<thead>
					<tr>				  
					<th scope="col">Commodity Name*</th>
					<th scope="col">Surplus<br/>Quantity* (Qtl./Ltr./Num.)</th>
					<th scope="col">Wastage  <br/>Quantity*(Qtl./Ltr./Num.)</th>
					</tr>
				</thead>
				<tbody>
					
					
					<tr>
					<td><input class="form-control" type="text" placeholder="TEXT"></td>
					<td><input class="form-control" type="text" placeholder="In Fig">
					<div class="row mt-2"> 
					<div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="100000"/> </div>
					<div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
					
					</div>
					</td>
					<td><input class="form-control" type="text" placeholder="In Fig">
					<div class="row mt-2"> 
					<div class="col-md-6"><input class="form-control" type="number" placeholder="Amount" min="100000"/> </div>
					<div class="col-md-6"> <input class="form-control" type="number" placeholder="Rate" min="0"/></div>
					</div></td>
					
					
					</tr>
					
				</tbody>
				</table> -->


											</tr>

											</tbody>
										</table>
									</div>

									<?php
								} else {
									$i = 0;
									foreach ($csdt as $sr) {
										?>

										<div class="monthly-business-table-set">
											<table class="table p-3 table-bordered table-striped ">
												<thead>
													<tr>
														<th scope="col" width="15%">Commodity Category*</th>
														<th scope="col" width="20%">Commodity Sub-Category*</th>
														<th scope="col" width="15%">Commodity Name*</th>
														<th scope="col">Opening <br />stock* (Qtl./Ltr./Num.)</th>
														<th scope="col">Procurement <br />Quantity*(Qtl./Ltr./Num.)</th>
														<th scope="col">Wastage <br />Quantity*(Qtl./Ltr./Num.)</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<select class="form-control" name="commoditycategory[]">
																<option value="agriculture" <?php echo ($sr['commoditycategory'] == 'agriculture') ? 'selected="selected"' : ''; ?>>Agriculture</option>
																<option value="horticulture" <?php echo ($sr['commoditycategory'] == 'horticulture') ? 'selected="selected"' : ''; ?>>Horticulture</option>
																<option value="apiculture" <?php echo ($sr['commoditycategory'] == 'apiculture') ? 'selected="selected"' : ''; ?>>Apiculture</option>
																<option value="sericulture" <?php echo ($sr['commoditycategory'] == 'sericulture') ? 'selected="selected"' : ''; ?>>Sericulture</option>
																<option value="livestock" <?php echo ($sr['commoditycategory'] == 'livestock') ? 'selected="selected"' : ''; ?>>Livestock</option>
																<option value="fishery" <?php echo ($sr['commoditycategory'] == 'fishery') ? 'selected="selected"' : ''; ?>>Fishery</option>
																<option value="plantation" <?php echo ($sr['commoditycategory'] == 'plantation') ? 'selected="selected"' : ''; ?>>Plantation</option>
																<option value="spices" <?php echo ($sr['commoditycategory'] == 'spices') ? 'selected="selected"' : ''; ?>>Spices</option>
																<option value="poultry" <?php echo ($sr['commoditycategory'] == 'poultry') ? 'selected="selected"' : ''; ?>>Poultry</option>
																<option value="mushroomscultivation" <?php echo ($sr['commoditycategory'] == 'mushroomscultivation') ? 'selected="selected"' : ''; ?>>Mushrooms Cultivation</option>
																<option value="vermicompost" <?php echo ($sr['commoditycategory'] == 'vermicompost') ? 'selected="selected"' : ''; ?>>Vermicompost</option>
															</select>
														</td>

														<td>
															<select class="form-control" name="commoditysubcategory[]">
																<option value="primary" <?php echo ($sr['commoditysubcategory'] == 'primary') ? 'selected="selected"' : ''; ?>>Primary</option>
																<option value="secondary" <?php echo ($sr['commoditysubcategory'] == 'secondary') ? 'selected="selected"' : ''; ?>>Secondary</option>
																<option value="tertiary" <?php echo ($sr['commoditysubcategory'] == 'tertiary') ? 'selected="selected"' : ''; ?>>Tertiary</option>
															</select>
														</td>

														<td><input name="commodity[]" value="<?php echo $sr['commodity']; ?>"
																class="form-control" type="text" placeholder="TEXT"></td>
														<td><input name="opstock[]" value="<?php echo $sr['opstock']; ?>"
																class="form-control" type="text" placeholder="In Fig">
															<div class="row mt-2">
																<div class="col-md-6"><input name="opamount[]"
																		value="<?php echo $sr['opamount']; ?>" class="form-control"
																		type="number" placeholder="Amount" min="100000" /> </div>
																<div class="col-md-6"> <input name="oprate[]"
																		value="<?php echo $sr['oprate']; ?>" class="form-control"
																		type="number" placeholder="Rate" min="0" /></div>
															</div>
														</td>

														<td><input name="procureqty[]" value="<?php echo $sr['procureqty']; ?>"
																class="form-control" type="text" placeholder="In Fig">
															<div class="row mt-2">
																<div class="col-md-6"><input name="procureamount[]"
																		value="<?php echo $sr['procureamount']; ?>"
																		class="form-control" type="number" placeholder="Amount"
																		min="100000" /> </div>
																<div class="col-md-6"> <input name="procurerate[]"
																		value="<?php echo $sr['procurerate']; ?>"
																		class="form-control" type="number" placeholder="Rate"
																		min="0" /></div>
															</div>
														</td>

														<td>
															<input name="procurewastageqty[]"
																value="<?php echo $sr['procurewastageqty']; ?>" class="form-control"
																type="text" placeholder="In Fig">
															<div class="row mt-2">
																<div class="col-md-6"><input name="procurewastageamount[]"
																		value="<?php echo $sr['procurewastageamount']; ?>"
																		class="form-control" type="number" placeholder="Amount"
																		min="100000" /> </div>
																<div class="col-md-6"> <input name="procurewastagerate[]"
																		value="<?php echo $sr['procurewastagerate']; ?>"
																		class="form-control" type="number" placeholder="Rate"
																		min="0" /></div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>

											<table class="table p-3 table-bordered table-striped ">
												<thead>
													<tr>
														<th scope="col">Other Expenditures <br> Quantity*(Qtl./Ltr./Num.)</th>
														<th scope="col">Sale Quantity* <br> (Qtl./Ltr./Num.)</th>
														<th scope="col">Closing stock* <br> (Qtl./Ltr./Num.) </th>
														<th scope="col">Surplus <br />Quantity*(Qtl./Ltr./Num.)</th>
														<th scope="col">Cumulative Sales/Income <br />Quantity*(Qtl./Ltr./Num.)</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><input name="otherexpenditureqty[]"
																value="<?php echo $sr['otherexpenditureqty']; ?>"
																class="form-control" type="text" placeholder="In Fig">
															<div class="row mt-2">
																<div class="col-md-6"><input name="otherexpenditureamount[]"
																		value="<?php echo $sr['otherexpenditureamount']; ?>"
																		class="form-control" type="number" placeholder="Amount"
																		min="100000" /> </div>
																<div class="col-md-6"> <input name="otherexpenditurerate[]"
																		value="<?php echo $sr['otherexpenditurerate']; ?>"
																		class="form-control" type="number" placeholder="Rate"
																		min="0" /></div>
															</div>
														</td>

														<td>
															<input name="saleqty[]" value="<?php echo $sr['saleqty']; ?>"
																class="form-control" type="text" placeholder="In Fig">
															<div class="row mt-2">
																<div class="col-md-6"><input name="saleamount[]"
																		value="<?php echo $sr['saleamount']; ?>"
																		class="form-control" type="number" placeholder="Amount"
																		min="100000" /> </div>
																<div class="col-md-6"> <input name="salerate[]"
																		value="<?php echo $sr['salerate']; ?>" class="form-control"
																		type="number" placeholder="Rate" min="0" /></div>
															</div>
														</td>

														<td>
															<input name="closingstockqty[]"
																value="<?php echo $sr['closingstockqty']; ?>" class="form-control"
																type="text" placeholder="In Fig">
															<div class="row mt-2">
																<div class="col-md-6"><input name="closingstockamount[]"
																		value="<?php echo $sr['closingstockamount']; ?>"
																		class="form-control" type="number" placeholder="Amount"
																		min="100000" /> </div>
																<div class="col-md-6"> <input name="closingstockrate[]"
																		value="<?php echo $sr['closingstockrate']; ?>"
																		class="form-control" type="number" placeholder="Rate"
																		min="0" /></div>
															</div>
														</td>

														<td>
															<input name="surplusqty[]" value="<?php echo $sr['surplusqty']; ?>"
																class="form-control" type="text" placeholder="In Fig">
															<div class="row mt-2">
																<div class="col-md-6"><input name="surplusamount[]"
																		value="<?php echo $sr['surplusamount']; ?>"
																		class="form-control" type="number" placeholder="Amount"
																		min="100000" /> </div>
																<div class="col-md-6"> <input name="surplusrate[]"
																		value="<?php echo $sr['surplusrate']; ?>"
																		class="form-control" type="number" placeholder="Rate"
																		min="0" /></div>
															</div>
														</td>

														<td>
															<input name="cumulativesalesqty[]"
																value="<?php echo $sr['cumulativesalesqty']; ?>"
																class="form-control" type="text" placeholder="In Fig">
															<div class="row mt-2">
																<div class="col-md-6"><input name="cumulativesalesamount[]"
																		value="<?php echo $sr['cumulativesalesamount']; ?>"
																		class="form-control" type="number" placeholder="Amount"
																		min="100000" /> </div>
																<div class="col-md-6"> <input name="cumulativesalesrate[]"
																		value="<?php echo $sr['cumulativesalesrate']; ?>"
																		class="form-control" type="number" placeholder="Rate"
																		min="0" /></div>
																<input type="hidden" name="pgssavetype[]" value="update">
																<input type="hidden" name="pgsupportid[]"
																	value="<?php echo $sr['id']; ?>">
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>

										<?php
									}
								}
								?>

								<div id="tableContainerMonthlyBusiness"></div>

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
									<a class="btn btn-primary" onclick="javascript:history.back()"
										style="color:#fff;">Previous</a>
									<!-- <button class="btn btn-primary" type="button" name="submit" value="Signup" onclick="window.location='<?php echo base_url() . 'form-filling/14'; ?>'">Next</button> -->

									<input type="hidden" name="stepno7" value="7">
									<input type="hidden" name="isedit" value="1">
									<input type="hidden" name="pgid"
										value="<?php echo ($this->session->userdata('pgid') == true) ? $this->session->userdata('pgid') : ''; ?>">
									<!-- <button class="btn btn-primary" type="button" name="submit1" value="Signup" onclick="window.location='<?php echo base_url() . 'form-filling/9'; ?>'">Next</button> -->
									<input type="submit" class="btn btn-primary" name="submit1" value="Next">
								</div>


						</div>

					</form>
				</div>
			</div>
		</div>
	<?php } ?>

	<?php if ($this->uri->segment(2) == '14') { ?>

		<div class="row mt-5">
			<div class="col-md-3">
				<div class="sidebar">
					<ul>
						<li><a href="<?php echo base_url(); ?>user-profile"
								class="<?php echo ($current_segment == 'user-profile') ? 'active' : ''; ?>">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>admin-manager?atype=producergroupdetails"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>"> PG Panel</a>
						</li>
						<li><a href="<?php echo base_url(); ?>members/memberslist"
								class="<?php echo ($current_segment == 'members') ? 'active' : ''; ?>">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel"
								class="<?php echo ($current_segment == 'verifierpanel') ? 'active' : ''; ?>">Verifier
								Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel"
								class="<?php echo ($current_segment == 'approverpanel') ? 'active' : ''; ?>">Approver
								Panel</a></li>
						<li><a href="<?php echo base_url(); ?>buyerdetails-list"
								class="<?php echo ($current_segment == 'buyerdetails-list') ? 'active' : ''; ?>"> Buyer
								Details List</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						<li><a href="<?php echo base_url(); ?>admin-manager"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>">Reports</a>
						</li>
						<?php // if($this->session->userdata('admin_session')['user_group_id'] == '3'){ ?>
						<li><a href="<?php echo base_url(); ?>users-list"
								class="<?php echo ($current_segment == 'users-list') ? 'active' : ''; ?>">Users List</a>
						</li>
						<?php // } ?>
						<!--li><a href="<?php echo base_url(); ?>change-password">Change Password</a></li-->

						<li><a href="<?php echo base_url(); ?>upload-data"
								class="<?php echo ($current_segment == 'upload-data') ? 'active' : ''; ?>">Upload/Sync
								Records(CSV)</a></li>

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
					<center>
						<?php if (isset($msg) && $msg != '')
							echo '<fieldset id="error_fieldset"><label class="error">' . $msg . '</label></fieldset>'; ?>
						<?php if ($this->input->get('msg') == true) {
							echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">' . $this->input->get('msg') . '</label></fieldset>';
						} ?>
					</center>

					<form class="row pr-4 pl-4" method="post">



						<div class="col-md-12">
							<div class="row mt-4 mb-5">
								<div class="col-md-6">
									<div class="form-group">
										<label for="inputname" style="font-weight:500;" class="col-form-label">Payment to
											Member</label>
										<input type="number" name="su_paymenttomember"
											value="<?php echo $su_paymenttomember; ?>" class="form-control col-md-8" min="0"
											id="inputname">
									</div>
								</div>

								<!-- <div class="form-group">
			<label for="inputname" style="font-weight:500;" class="col-form-label">Payment Due to Non PG Member</label>
			<input type="number" class="form-control col-md-8" name="su_paymentduenonpgmember" value="<?php echo $su_paymentduenonpgmember; ?>" min="0" id="inputname"></div>
			</div> -->

								<div class="col-md-6">

									<!--div class="form-group"><label for="inputname" style="font-weight:500;" class="col-form-label">Payment Due to   Member</label><input type="number" class="form-control col-md-8" min="0" id="inputname"></div-->

									<div class="form-group"><label for="inputname" style="font-weight:500;"
											class="col-form-label">Payment Due to PG Member</label>
										<input type="number" name="su_paymentduepgmember" class="form-control col-md-8"
											min="0" value="<?php echo $su_paymentduepgmember; ?>" id="inputname">
									</div>

								</div>

								<div class="col-md-12">
									<div class="form-group col-md-12 row"><label for="inputname" style="font-weight:500;">Re
											Invest to PG: &nbsp;&nbsp;</label>
										<div class="col-md-12">

											<!--div class="col-md-2">
				  <div class="form-check">
				  <input class="form-check-input" type="radio" name="pgus" id='expradio' value="Yes"  <?php /*echo ($USname == '')?'':'checked'; ?>>
<label class="form-check-label" for="exampleRadios1">
Yes
</label>
<div class="form-group col-md-11 px-0">
<input type="text" class='txbx form-control' name="pgusname" value="<?php echo $USname ; ?>" <?php echo ($USname == '')?'hidden':''; ?>/>  
</div>
</div>
</div>

<div class="col-md-3">
<div class="form-check">
<input class="form-check-input" type="radio" name="pgus" id='frsradio' value="No" <?php echo ($USname == '')?'checked':''; */ ?>>
				  <label class="form-check-label" for="exampleRadios1">
					No
				  </label>				 
				  </div>
				</div--->




										<div class="form-check">
											<input class="form-check-input addtnalact" name="inverttopg" type="radio"
												id="gridCheck1"
												onclick="enabletxtinvertopg('inputadditionalactothers1')">
											<label class="form-check-label" for="gridCheck1">
												Infrastructure
											</label>
											<div class="form-group col-md-2" style="display:none;"
												id="inputadditionalactothers1">
												<input type="text" class="form-control">
											</div>
										</div>

										<div class="form-check">
											<input class="form-check-input addtnalact" name="inverttopg" type="radio"
												id="gridCheck1"
												onclick="enabletxtinvertopg('inputadditionalactothers2')">
											<label class="form-check-label" for="gridCheck1">
												Working Capital
											</label>
											<div class="form-group col-md-2" style="display:none;"
												id="inputadditionalactothers2">
												<input type="text" class="form-control">
											</div>
										</div>

										<div class="form-check">
											<input class="form-check-input addtnalact" name="inverttopg" type="radio"
												id="gridCheck1"
												onclick="enabletxtinvertopg('inputadditionalactothers3')">
											<label class="form-check-label" for="gridCheck1">
												Idle
											</label>
											<div class="form-group col-md-2" style="display:none;"
												id="inputadditionalactothers3">
												<input type="text" class="form-control">
											</div>
										</div>

										<div class="form-check">
											<input class="form-check-input addtnalact" name="inverttopg" type="radio"
												id="gridCheck1"
												onclick="enabletxtinvertopg('inputadditionalactothers4')">
											<label class="form-check-label" for="gridCheck1">
												Others
											</label>
											<div class="form-group col-md-2" style="display:none;"
												id="inputadditionalactothers4">
												<input type="text" class="form-control">
											</div>
										</div>
									</div><br />
								</div>


							</div>

							<div class="col-md-12 text-right mb-1"> <br />
								<a class="btn btn-primary" onclick="javascript:history.back()"
									style="color:#fff;">Previous</a>
								<input type="hidden" name="stepno14" value="14">
								<input type="hidden" name="isedit" value="1">
								<input type="hidden" name="pgid"
									value="<?php echo ($this->session->userdata('pgid') == true) ? $this->session->userdata('pgid') : ''; ?>">
								<input type="submit" class="btn btn-primary" name="submit1" value="Next">
							</div>

						</div>
				</form>
			</div>
		</div>
	</div>


	<?php } ?>


	<?php if ($this->uri->segment(2) == '10') { ?>

	<div class="row mt-5">
		<div class="col-md-3">
			<div class="sidebar">
				<ul>
					<li><a href="<?php echo base_url(); ?>user-profile"
							class="<?php echo ($current_segment == 'user-profile') ? 'active' : ''; ?>">Profile</a></li>
					<li><a href="<?php echo base_url(); ?>admin-manager?atype=producergroupdetails"
							class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>"> PG Panel</a>
					</li>
					<li><a href="<?php echo base_url(); ?>members/memberslist"
							class="<?php echo ($current_segment == 'members') ? 'active' : ''; ?>">Member Panel</a></li>
					<li><a href="<?php echo base_url(); ?>verifierpanel"
							class="<?php echo ($current_segment == 'verifierpanel') ? 'active' : ''; ?>">Verifier
							Panel</a></li>
					<li><a href="<?php echo base_url(); ?>approverpanel"
							class="<?php echo ($current_segment == 'approverpanel') ? 'active' : ''; ?>">Approver
							Panel</a></li>
					<li><a href="<?php echo base_url(); ?>buyerdetails-list"
							class="<?php echo ($current_segment == 'buyerdetails-list') ? 'active' : ''; ?>"> Buyer
							Details List</a></li>
					<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						<li><a href="<?php echo base_url(); ?>admin-manager"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>">Reports</a>
						</li>
						<?php // if($this->session->userdata('admin_session')['user_group_id'] == '3'){ ?>
						<li><a href="<?php echo base_url(); ?>users-list">Users List</a></li> <?php // } ?>
						<!--li><a href="<?php echo base_url(); ?>change-password">Change Password</a></li-->

						<li><a href="<?php echo base_url(); ?>upload-data"
								class="<?php echo ($current_segment == 'upload-data') ? 'active' : ''; ?>">Upload/Sync
								Records(CSV)</a></li>

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
					<center>
						<?php if (isset($msg) && $msg != '')
							echo '<fieldset id="error_fieldset"><label class="error">' . $msg . '</label></fieldset>'; ?>
						<?php if ($this->input->get('msg') == true) {
							echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">' . $this->input->get('msg') . '</label></fieldset>';
						} ?>
					</center>
					<?php //print_r($mtd); ?>
					<form class="row pr-4 pl-4" method="post">

						<div class="col-md-12">
							<br>
							<h6 class="m-0"> MONTHLY TRANSACTION DETAILS</h6><br><br>
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
										<td><input class="form-control" type="text" name="openingbalance"
												value="<?php echo isset($mtd[0]['openingbalance']) ? $mtd[0]['openingbalance'] : ''; ?>"
												placeholder=" "></td>
									</tr>

									<tr>
										<td style="font-weight:500;">Receipts*</td>
										<td style="font-weight:500;">Receipts*</td>
										<!--td style="font-weight:500;">Payments*</td-->
										<td><input class="form-control" type="text" name="receipts"
												value="<?php echo isset($mtd[0]['receipts']) ? $mtd[0]['receipts'] : ''; ?>"
												placeholder=" "></td>
									</tr>

									<tr>
										<td style="font-weight:500;">B1. Against sales proceeds*</td>
										<td></td>
										<!--td></td-->
										<td><input class="form-control" type="text" name="asp"
												value="<?php echo isset($mtd[0]['asp']) ? $mtd[0]['asp'] : ''; ?>"
												placeholder=" "></td>
									</tr>

									<tr>
										<td style="font-weight:500;">B2. Other receipts*</td>
										<td></td>
										<!--td></td-->
										<td><input class="form-control" type="text" name="otherr"
												value="<?php echo isset($mtd[0]['otherr']) ? $mtd[0]['otherr'] : ''; ?>"
												placeholder=" "></td>
									</tr>

									<tr>
										<td style="font-weight:500;">B. Total Receipts*</td>
										<td></td>
										<!--td></td-->
										<td><input class="form-control" type="text" name="totalreceipts"
												value="<?php echo isset($mtd[0]['totalreceipts']) ? $mtd[0]['totalreceipts'] : ''; ?>"
												placeholder=" "></td>
									</tr>


									<tr>
										<td style="font-weight:500;">C1. Payment against procurement of commodities*</td>
										<td>--------</td>
										<!--td></td-->
										<td><input class="form-control" type="text" name="papc"
												value="<?php echo isset($mtd[0]['papc']) ? $mtd[0]['papc'] : ''; ?>"
												placeholder=" "></td>
									</tr>

									<tr>
										<td style="font-weight:500;">C2. Commission to Community Cadres* (variable payment)*
										</td>
										<td>--------</td>
										<!--td></td-->
										<td><input class="form-control" type="text" name="ctcc"
												value="<?php echo isset($mtd[0]['ctcc']) ? $mtd[0]['ctcc'] : ''; ?>"
												placeholder=" "></td>
									</tr>

									<tr>
										<td style="font-weight:500;">C3. Other expenditures*</td>
										<td>--------</td>
										<!--td></td-->
										<td><input class="form-control" type="text" name="otherex"
												value="<?php echo isset($mtd[0]['otherex']) ? $mtd[0]['otherex'] : ''; ?>"
												placeholder=" "></td>
									</tr>

									<tr>
										<td style="font-weight:500;">C. Total Expenditure/Payments*</td>
										<td>--------</td>
										<!--td></td-->
										<td><input class="form-control" type="text" name="totalexppay"
												value="<?php echo isset($mtd[0]['totalexppay']) ? $mtd[0]['totalexppay'] : ''; ?>"
												placeholder=" "></td>
									</tr>

								</tbody>
							</table>

							<div class="col-md-12 text-right mb-1">
								<br>
								<a class="btn btn-primary" onclick="javascript:history.back()"
									style="color:#fff;">Previous</a>
								<input type="hidden" name="stepno10" value="10">
								<input type="hidden" name="isedit" value="1">
								<input type="hidden" name="pgid"
									value="<?php echo ($this->session->userdata('pgid') == true) ? $this->session->userdata('pgid') : ''; ?>">
								<input type="submit" class="btn btn-primary" name="submit1" value="Next">
							</div>


						</div>

					</form>


				</div>
			</div>
		</div>
	<?php } ?>

	<?php if ($this->uri->segment(2) == '15') { ?>
		<div class="row mt-5">
			<div class="col-md-3">
				<div class="sidebar">
					<ul>
						<li><a href="<?php echo base_url(); ?>user-profile"
								class="<?php echo ($current_segment == 'user-profile') ? 'active' : ''; ?>">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>admin-manager?atype=producergroupdetails"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>"> PG Panel</a>
						</li>
						<li><a href="<?php echo base_url(); ?>members/memberslist"
								class="<?php echo ($current_segment == 'members') ? 'active' : ''; ?>">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel"
								class="<?php echo ($current_segment == 'verifierpanel') ? 'active' : ''; ?>">Verifier
								Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel"
								class="<?php echo ($current_segment == 'approverpanel') ? 'active' : ''; ?>">Approver
								Panel</a></li>
						<li><a href="<?php echo base_url(); ?>buyerdetails-list"
								class="<?php echo ($current_segment == 'buyerdetails-list') ? 'active' : ''; ?>"> Buyer
								Details List</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						<li><a href="<?php echo base_url(); ?>admin-manager"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>">Reports</a>
						</li>
						<?php // if($this->session->userdata('admin_session')['user_group_id'] == '3'){ ?>
						<li><a href="<?php echo base_url(); ?>users-list">Users List</a></li> <?php // } ?>
						<!--li><a href="<?php echo base_url(); ?>change-password">Change Password</a></li-->

						<li><a href="<?php echo base_url(); ?>upload-data"
								class="<?php echo ($current_segment == 'upload-data') ? 'active' : ''; ?>">Upload/Sync
								Records(CSV)</a></li>

						<li><a href="<?php echo base_url(); ?>login/logout">Logout</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-9">
				<div class="content content-box">
					<div class="card-header">
						<div class="row">
							<div class="col-md-12">
								<h4 class="m-0"> Cash Book</h4>
							</div>
						</div>
					</div>

					<center>
						<?php if (isset($msg) && $msg != '')
							echo '<fieldset id="error_fieldset"><label class="error">' . $msg . '</label></fieldset>'; ?>
						<?php if ($this->input->get('msg') == true) {
							echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">' . $this->input->get('msg') . '</label></fieldset>';
						} ?>
					</center>
					<?php //print_r($cashbook); ?>
					<form class="row pr-4 pl-4" method="post">
						<div class="col-md-12">
							<br>
							<h6 class="m-0"> DETAILS OF COMMODITY</h6><br><br>
							<table class="table p-3 table-bordered table-striped">
								<tbody>
									<tr>
										<td style="font-weight:500;">Name of the Commodity 1.(Primary Commodity)*</td>
										<td><input class="form-control" type="text" name="commodityfirst"
												value="<?php echo isset($cashbook['0']['commodityfirst']) ? $cashbook['0']['commodityfirst'] : '' ?>"
												placeholder=" "></td>
									</tr>

									<tr>
										<td style="font-weight:500;">Description of Commodities</td>
										<td>
											<textarea name="commodityfirstdesc" class="form-control">
																<?php echo (isset($cashbook['0']['commodityfirstdesc']) ? $cashbook['0']['commodityfirstdesc'] : '') ?>
															</textarea>
										</td>
									</tr>

									<tr>
										<td style="font-weight:500;">Name of the Commodity 2.(Secondary Commodity)*</td>
										<td><input class="form-control" type="text" name="commoditysecond"
												value="<?php echo isset($cashbook['0']['commoditysecond']) ? $cashbook['0']['commoditysecond'] : ''; ?>"
												placeholder=" "></td>
									</tr>

									<tr>
										<td style="font-weight:500;">Description of Commodities</td>
										<td>
											<textarea name="commodityseconddesc" class="form-control">
																<?php echo (isset($cashbook['0']['commodityseconddesc']) ? $cashbook['0']['commodityseconddesc'] : '') ?>
															</textarea>
										</td>
									</tr>

									<tr>
										<td style="font-weight:500;">Nos of active members sold their products.(Current
											month) </td>
										<td><input class="form-control" type="text" name="activemembers"
												value="<?php echo isset($cashbook['0']['activemembers']) ? $cashbook['0']['activemembers'] : ''; ?>"
												placeholder=" "></td>
									</tr>
								</tbody>
							</table>

							<div class="col-md-12 text-right mb-1">
								<br>
								<a class="btn btn-primary" onclick="javascript:history.back()"
									style="color:#fff;">Previous</a>
								<input type="hidden" name="stepno15" value="15">
								<input type="hidden" name="pgid"
									value="<?php echo ($this->session->userdata('pgid') == true) ? $this->session->userdata('pgid') : ''; ?>">
								<input type="submit" class="btn btn-primary" name="submit1" value="Next">
								<input type="hidden" name="isedit" value="1">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	<?php } ?>

	<?php if ($this->uri->segment(2) == '11') { ?>
		<div class="row mt-5">
			<div class="col-md-3">
				<div class="sidebar">
					<ul>
						<li><a href="<?php echo base_url(); ?>user-profile"
								class="<?php echo ($current_segment == 'user-profile') ? 'active' : ''; ?>">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>admin-manager?atype=producergroupdetails"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>"> PG Panel</a>
						</li>
						<li><a href="<?php echo base_url(); ?>members/memberslist"
								class="<?php echo ($current_segment == 'members') ? 'active' : ''; ?>">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel"
								class="<?php echo ($current_segment == 'verifierpanel') ? 'active' : ''; ?>">Verifier
								Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel"
								class="<?php echo ($current_segment == 'approverpanel') ? 'active' : ''; ?>">Approver
								Panel</a></li>
						<li><a href="<?php echo base_url(); ?>buyerdetails-list"
								class="<?php echo ($current_segment == 'buyerdetails-list') ? 'active' : ''; ?>"> Buyer
								Details List</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						<li><a href="<?php echo base_url(); ?>admin-manager"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>">Reports</a>
						</li>
						<?php // if($this->session->userdata('admin_session')['user_group_id'] == '3'){ ?>
						<li><a href="<?php echo base_url(); ?>users-list">Users List</a></li> <?php // } ?>
						<!--li><a href="<?php echo base_url(); ?>change-password">Change Password</a></li-->

						<li><a href="<?php echo base_url(); ?>upload-data"
								class="<?php echo ($current_segment == 'upload-data') ? 'active' : ''; ?>">Upload/Sync
								Records(CSV)</a></li>

						<li><a href="<?php echo base_url(); ?>login/logout">Logout</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-9">
				<div class="content content-box">
					<div class="card-header">
						<div class="row">
							<div class="col-md-11">
								<h6 class="m-0"> Closing Balance</h6><br>
							</div>
							<div class="col-md-1">
								<a href="#" class="btn-sm btn-info" title="Add Task"><i class="fa fa-plus"></i></a>
							</div>
						</div>

					</div>
					<center>
						<?php if (isset($msg) && $msg != '')
							echo '<fieldset id="error_fieldset"><label class="error">' . $msg . '</label></fieldset>'; ?>
						<?php if ($this->input->get('msg') == true) {
							echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">' . $this->input->get('msg') . '</label></fieldset>';
						} ?>
					</center>

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
										<td><input class="form-control" name="cb_cihcb" id="cb_cihcb"
												value="<?php echo $cb_cihcb; ?>" type="text" placeholder=" "></td>
										<td><input class="form-control" name="cb_cihbb" id="cb_cihbb"
												value="<?php echo $cb_cihbb; ?>" type="text" placeholder=" "></td>
										<td><input class="form-control" name="cb_total" id="cb_total"
												value="<?php echo $cb_total; ?>" type="text" placeholder=" "></td>
									</tr>



								</tbody>
							</table>
							<br />
							<h6 class="m-0">Payment yet to be received from the buyer* (in Rupees)</h6><br />
							<input class="form-control" type="text" name="cb_frombuyer" value="<?php echo $cb_frombuyer; ?>"
								placeholder=" "><br /><br />
							<h6 class="m-0">Payment yet to be made to producers member* (in rupees)</h6><br />
							<input class="form-control" type="text" name="cb_payproducermember"
								value="<?php echo $cb_payproducermember; ?>" placeholder=" "><br /><br />

							<div class="col-md-12 text-right mb-1"> <br />
								<a class="btn btn-primary" onclick="javascript:history.back()"
									style="color:#fff;">Previous</a>
								<input type="hidden" name="stepno11" value="11">
								<input type="hidden" name="isedit" value="1">
								<input type="hidden" name="pgid"
									value="<?php echo ($this->session->userdata('pgid') == true) ? $this->session->userdata('pgid') : ''; ?>">
								<input type="submit" class="btn btn-primary" name="submit1" value="Next">
							</div>


						</div>

					</form>

				</div>
			</div>
		</div>
	<?php } ?>

	<?php if ($this->uri->segment(2) == '12') { ?>
		<div class="row mt-5">
			<div class="col-md-3">
				<div class="sidebar">
					<ul>
						<li><a href="<?php echo base_url(); ?>user-profile"
								class="<?php echo ($current_segment == 'user-profile') ? 'active' : ''; ?>">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>admin-manager?atype=producergroupdetails"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>"> PG Panel</a>
						</li>
						<li><a href="<?php echo base_url(); ?>members/memberslist"
								class="<?php echo ($current_segment == 'members') ? 'active' : ''; ?>">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel"
								class="<?php echo ($current_segment == 'verifierpanel') ? 'active' : ''; ?>">Verifier
								Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel"
								class="<?php echo ($current_segment == 'approverpanel') ? 'active' : ''; ?>">Approver
								Panel</a></li>
						<li><a href="<?php echo base_url(); ?>buyerdetails-list"
								class="<?php echo ($current_segment == 'buyerdetails-list') ? 'active' : ''; ?>"> Buyer
								Details List</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						<li><a href="<?php echo base_url(); ?>admin-manager"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>">Reports</a>
						</li>
						<?php // if($this->session->userdata('admin_session')['user_group_id'] == '3'){ ?>
						<li><a href="<?php echo base_url(); ?>users-list">Users List</a></li> <?php // } ?>
						<!--li><a href="<?php echo base_url(); ?>change-password">Change Password</a></li-->

						<li><a href="<?php echo base_url(); ?>upload-data"
								class="<?php echo ($current_segment == 'upload-data') ? 'active' : ''; ?>">Upload/Sync
								Records(CSV)</a></li>

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
					<center>
						<?php if (isset($msg) && $msg != '')
							echo '<fieldset id="error_fieldset"><label class="error">' . $msg . '</label></fieldset>'; ?>
						<?php if ($this->input->get('msg') == true) {
							echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">' . $this->input->get('msg') . '</label></fieldset>';
						} ?>
					</center>

					<form class="row pr-4 pl-4" method="post">


						<div class="col-md-12">
							<div class="row mt-4 mb-5">
								<div class="col-md-6">
									<div class="form-group"><label for="inputname" style="font-weight:500;"
											class="col-form-label">Name of Enumerator *</label>
										<input type="text" name="finalenumerator_name"
											value="<?php echo $finalenumerator_name; ?>" class="form-control col-md-8"
											id="inputname">
									</div>

									<div class="form-group"><label for="inputname" style="font-weight:500;"
											class="col-form-label">Name of Block Coordinator</label>
										<input type="text" name="finalpresidentsec_name"
											value="<?php echo $finalpresidentsec_name; ?>" class="form-control col-md-8"
											id="inputname">
									</div> <br />
								</div><br />

								<div class="col-md-6">
									<!--div class="form-group"><label for="inputname" style="font-weight:500;" class="col-form-label">Name of Enumerator*</label><input type="text" class="form-control col-md-8" id="inputname"></div-->

									<div class="form-group"><label for="inputname" style="font-weight:500;"
											class="col-form-label">Name of PG Secretary/President</label>
										<input type="text" name="finalblockcoordinator"
											value="<?php echo $finalblockcoordinator; ?>" class="form-control col-md-8"
											id="inputname">
									</div><br />
								</div>

								<div class="col-md-12">
									<div class="form-group col-md-12 row"><label for="inputname"
											style="font-weight:500;">Date: *&nbsp;&nbsp;</label>
										<input type="date" name="finaldate" value="<?php echo $finaldate; ?>"
											class="form-control col-md-5" id="inputname">
									</div><br />
								</div>

								<div class="col-md-12">
									<div class="form-group col-md-12 row"><label for="inputname"
											style="font-weight:500;">Place:&nbsp;&nbsp;&nbsp;</label>
										<input type="text" name="finalplace" value="<?php echo $finalplace; ?>"
											class="form-control col-md-5" id="inputname">
									</div>
								</div>

							</div>

							<div class="col-md-12 text-right mb-1"> <br />
								<a class="btn btn-primary" onclick="javascript:history.back()"
									style="color:#fff;">Previous</a>
								<input type="hidden" name="stepno12" value="12">
								<input type="hidden" name="isedit" value="1">
								<input type="hidden" name="pgid"
									value="<?php echo ($this->session->userdata('pgid') == true) ? $this->session->userdata('pgid') : ''; ?>">
								<input type="submit" class="btn btn-primary" name="submit1" value="Next">
							</div>

						</div>
					</form>
				</div>
			</div>
		</div>
	<?php } ?>



	<?php if ($this->uri->segment(2) == '13') { ?>

		<div class="row mt-5">
			<div class="col-md-3">
				<div class="sidebar">
					<ul>
						<li><a href="<?php echo base_url(); ?>user-profile"
								class="<?php echo ($current_segment == 'user-profile') ? 'active' : ''; ?>">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>admin-manager?atype=producergroupdetails"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>"> PG Panel</a>
						</li>
						<li><a href="<?php echo base_url(); ?>members/memberslist"
								class="<?php echo ($current_segment == 'members') ? 'active' : ''; ?>">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel"
								class="<?php echo ($current_segment == 'verifierpanel') ? 'active' : ''; ?>">Verifier
								Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel"
								class="<?php echo ($current_segment == 'approverpanel') ? 'active' : ''; ?>">Approver
								Panel</a></li>
						<li><a href="<?php echo base_url(); ?>buyerdetails-list"
								class="<?php echo ($current_segment == 'buyerdetails-list') ? 'active' : ''; ?>"> Buyer
								Details List</a></li>
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						<li><a href="<?php echo base_url(); ?>admin-manager"
								class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>">Reports</a>
						</li>
						<?php // if($this->session->userdata('admin_session')['user_group_id'] == '3'){ ?>
						<li><a href="<?php echo base_url(); ?>users-list">Users List</a></li> <?php // } ?>
						<!--li><a href="<?php echo base_url(); ?>change-password">Change Password</a></li-->

						<li><a href="<?php echo base_url(); ?>upload-data"
								class="<?php echo ($current_segment == 'upload-data') ? 'active' : ''; ?>">Upload/Sync
								Records(CSV)</a></li>

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
					<center>
						<?php if (isset($msg) && $msg != '')
							echo '<fieldset id="error_fieldset"><label class="error">' . $msg . '</label></fieldset>'; ?>
						<?php if ($this->input->get('msg') == true) {
							echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">' . $this->input->get('msg') . '</label></fieldset>';
						} ?>
					</center>

					<form class="pr-4 pl-4" method="post">

						<div class="row">
							<div class="col-md-12">

								<?php
								$pgname = $pgdetail[0]['pgname'];
								$districtname = $pgdetail[0]['district'];
								$blockname = $pgdetail[0]['block'];
								$grampanchayatname = $pgdetail[0]['grampanchayat'];
								$villagename = $pgdetail[0]['village'];
								$dof = $pgdetail[0]['dof'];
								$pramoted_uder = $pgdetail[0]['pramoted_uder'];
								$president_name = $pgdetail[0]['president_name'];
								$secretary_name = $pgdetail[0]['secretary_name'];
								$treasurer_name = $pgdetail[0]['treasurer_name'];
								$category = $pgdetail[0]['category'];
								$sub_category = $pgdetail[0]['sub_category'];
								$commodityname = $pgdetail[0]['commodityname'];
								$USname = $pgdetail[0]['USname'];
								$USnomember = $pgdetail[0]['USnomember'];
								$USnovillage = $pgdetail[0]['USnovillage'];
								$PSname = $pgdetail[0]['PSname'];
								$PSnomember = $pgdetail[0]['PSnomember'];
								$PSnovillage = $pgdetail[0]['PSnovillage'];
								$KSname = $pgdetail[0]['KSname'];
								$KSnomember = $pgdetail[0]['KSnomember'];
								$KSnovillage = $pgdetail[0]['KSnovillage'];
								$VAAUS = $pgdetail[0]['VAAUS'];
								$VAAPS = $pgdetail[0]['VAAPS'];
								$VAAKS = $pgdetail[0]['VAAKS'];
								$BOR = $pgdetail[0]['BOR'];
								$TLAgriculture = $pgdetail[0]['TLAgriculture'];
								$TLHorticulture = $pgdetail[0]['TLHorticulture'];
								$TLLivestock = $pgdetail[0]['TLLivestock'];
								$TLFishery = $pgdetail[0]['TLFishery'];
								$TLSericulture = $pgdetail[0]['TLSericulture'];
								$TLOthers = $pgdetail[0]['TLOthers'];
								$BPPreparation = $pgdetail[0]['BPPreparation'];
								$su_paymenttomember = $pgdetail[0]['su_paymenttomember'];
								$su_paymentduepgmember = $pgdetail[0]['su_paymentduepgmember'];
								$su_paymentduenonpgmember = $pgdetail[0]['su_paymentduenonpgmember'];
								$su_reinvesttopg = $pgdetail[0]['su_reinvesttopg'];
								$cb_cihcb = $pgdetail[0]['cb_cihcb'];
								$cb_cihbb = $pgdetail[0]['cb_cihbb'];
								$cb_total = $pgdetail[0]['cb_total'];
								$cb_frombuyer = $pgdetail[0]['cb_frombuyer'];
								$cb_payproducermember = $pgdetail[0]['cb_payproducermember'];
								$finalenumerator_name = $pgdetail[0]['finalenumerator_name'];
								$finalpresidentsec_name = $pgdetail[0]['finalpresidentsec_name'];
								$finalblockcoordinator = $pgdetail[0]['finalblockcoordinator'];
								$finaldate = $pgdetail[0]['finaldate'];
								$finalplace = $pgdetail[0]['finalplace'];
								?>

								<div class="row">
									<div class="col-md-12">
										<h4 class="mt-4"><strong>Basic Details:</strong></h4><br>

										<table class="table table-bordered">
											<tbody>

												<tr>
													<th width="40%">Name of Producer Group</th>
													<td><?php echo htmlspecialchars(ucfirst($pgname) ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
													</td>
												</tr>
												<tr>
													<th rowspan="4" width="40%">Location</th>
													<td><strong>District:</strong>
														<?php echo htmlspecialchars(ucfirst($districtname) ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
													</td>
												</tr>
												<tr>
													<td><strong>Block:</strong>
														<?php echo htmlspecialchars(ucfirst($blockname) ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
													</td>
												</tr>
												<tr>
													<td><strong>Gram Panchayat:</strong>
														<?php echo htmlspecialchars(ucfirst($grampanchayatname) ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
													</td>
												</tr>
												<tr>
													<td><strong>Village:</strong>
														<?php echo htmlspecialchars(ucfirst($villagename) ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
													</td>
												</tr>
												<tr>
													<th width="40%">Date of Formation</th>
													<td><?php echo ($dof ?? 'N/A'); ?></td>
												</tr>
												<tr>
													<th width="40%">Designation(President)</th>
													<td><?php echo ucfirst($president_name); ?></td>
												</tr>
												<tr>
													<th width="40%">Designation(Secretary)</th>
													<td><?php echo ucfirst($secretary_name); ?></td>
												</tr>
												<tr>
													<th width="40%">Designation(Treasurer)</th>
													<td><?php echo ucfirst($treasurer_name); ?></td>
												</tr>
												<tr>
													<th width="40%">PG promoted under</th>
													<td><?php echo htmlspecialchars(ucfirst($pramoted_uder) ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
													</td>
												</tr>

											</tbody>
										</table>

										<h4 class="mt-4"><strong>Bank / Commodity Details:</strong></h4>
										<h6>BANK ACCOUNT DETAILS</h6><br>

										<table class="table table-bordered">
											<tbody>

												<?php
												foreach ($getbankdetails as $getbankdetail) {
													?>
													<tr>
														<th width="40%">Bank Name</th>
														<td><?php echo htmlspecialchars($getbankdetail['bankname'] ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
														</td>
													</tr>
													<tr>
														<th width="40%">Type of Account</th>
														<td><?php echo htmlspecialchars($getbankdetail['account_type'] ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
														</td>
													</tr>
													<tr>
														<th width="40%">IFSC Code</th>
														<td><?php echo htmlspecialchars($getbankdetail['IFSC'] ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
														</td>
													</tr>
													<tr>
														<th width="40%">Branch Location</th>
														<td><?php echo htmlspecialchars($getbankdetail['branchname'] ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
														</td>
													</tr>
													<tr>
														<th width="40%">Account Number</th>
														<td><?php echo htmlspecialchars($getbankdetail['accountno'] ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
														</td>
													</tr>
												<?php } ?>
												<tr>
													<th rowspan="4" width="40%">Commodity Details</th>
													<td><strong>Category:</strong>
														<?php echo htmlspecialchars($category ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
													</td>
												</tr>
												<tr>
													<td><strong>Sub-Category:</strong>
														<?php echo htmlspecialchars($sub_category ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
													</td>
												</tr>
												<tr>
													<td><strong>Name of Commodity:</strong>
														<?php echo htmlspecialchars($commodityname ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
													</td>
												</tr>
											</tbody>
										</table>

										<h4 class="mt-4"><strong>Udyog Sakhi And PG Details</strong></h4>
										<h6>VALUE ADDITIONAL ACTIVITY MANAGED BY Udyog Sakhi / Pashu Sakhi / Krishi Sakhi:
										</h6><br>

										<table class="table table-bordered">
											<tbody>
												<?php if (!empty($USname)) { ?>
													<tr>
														<th rowspan="3" width="40%">Udyog Sakhi</th>
														<td>
															<strong>Name of Udyog Sakhi Associated with the PG : </strong>
															<?php echo $USname == '' ? 'No' : 'Yes'; ?>
															(<?php echo $USname ?>)
														</td>
													</tr>
													<tr>
														<td>
															<strong>No. of Village Covered by PG : </strong>
															<?php echo $USnovillage; ?>
														</td>
													</tr>
													<tr>
														<td>
															<strong>No. of Member Associated with PG : </strong>
															<?php echo $USnomember; ?>
														</td>
													</tr>
												<?php } ?>

												<?php if (!empty($PSname)) { ?>
													<tr>
														<th rowspan="3" width="40%">Pashu Sakhi</th>
														<td>
															<strong>Name of Pashu Sakhi Associated with the PG : </strong>
															<?php echo $PSname == '' ? 'No' : 'Yes'; ?>
															(<?php echo $PSname ?>)
														</td>
													</tr>
													<tr>
														<td>
															<strong>No. of Village Covered by PG : </strong>
															<?php echo $PSnovillage; ?>
														</td>
													</tr>
													<tr>
														<td>
															<strong>No. of Member Associated with PG : </strong>
															<?php echo $PSnomember; ?>
														</td>
													</tr>
												<?php } ?>

												<?php if (!empty($KSname)) { ?>
													<tr>
														<th rowspan="3" width="40%">Krishi Sakhi</th>
														<td>
															<strong>Name of Krishi Sakhi Associated with the PG : </strong>
															<?php echo $KSname == '' ? 'No' : 'Yes'; ?>
															(<?php echo $KSname ?>)
														</td>
													</tr>
													<tr>
														<td>
															<strong>No. of Village Covered by PG : </strong>
															<?php echo $KSnovillage; ?>
														</td>
													</tr>
													<tr>
														<td>
															<strong>No. of Member Associated with PG : </strong>
															<?php echo $KSnomember; ?>
														</td>
													</tr>
												<?php } ?>

											</tbody>
										</table>

										<h4 class="mt-4"><strong>Additional Activities</strong></h4>
										<h6>VALUE ADDITIONAL ACTIVITY MANAGED BY Udyog Sakhi / Pashu Sakhi / Krishi Sakhi:
										</h6><br>

										<table class="table table-bordered">
											<?php
											$vaaus = explode(',', $VAAUS);
											$vaaps = explode(',', $VAAPS);
											$vaaks = explode(',', $VAAKS);
											?>
											<tbody>
												<tr>
													<th width="40%">Udyog Sakhi</th>
													<td>
														<?php foreach ($vaaus as $val) {
															echo ucfirst($val);
															?>
															<br>
														<?php } ?>
													</td>
												</tr>
												<tr>
													<th width="40%">Pashu Sakhi</th>
													<td>
														<?php foreach ($vaaps as $val) {
															echo ucfirst($val);
															?>
															<br>
														<?php } ?>
													</td>
												</tr>
												<tr>
													<th width="40%">Krishi Sakhi</th>
													<td>
														<?php foreach ($vaaks as $val) {
															echo ucfirst($val);
															?>
															<br>
														<?php } ?>
													</td>
												</tr>
											</tbody>
										</table>

										<h4 class="mt-4"><strong>Book Of Records</strong></h4>
										<h6>BOOK OF RECORDS (BOOKING KEEPING):</h6><br>

										<table class="table table-bordered">
											<tbody>
												<tr>
													<th width="40%">Types of Record Books Updated</th>
													<th> Yes or No </th>
												</tr>
												<?php $bor = explode(',', $BOR); ?>
												<tr>
													<td>Minutes of the Meeting Register</td>
													<td><?php echo $bor[0] ? 'Yes' : 'No'; ?></td>
												</tr>
												<tr>
													<td>Bank passbook</td>
													<td><?php echo $bor[1] ? 'Yes' : 'No'; ?></td>
												</tr>
												<tr>
													<td>Saving Register</td>
													<td><?php echo $bor[2] ? 'Yes' : 'No'; ?></td>
												</tr>
												<tr>
													<td>Membership fee Register</td>
													<td><?php echo $bor[3] ? 'Yes' : 'No'; ?></td>
												</tr>
												<tr>
													<td>Cash Book</td>
													<td><?php echo $bor[4] ? 'Yes' : 'No'; ?></td>
												</tr>
												<tr>
													<td>Daily Procurement and Sale Register</td>
													<td><?php echo $bor[5] ? 'Yes' : 'No'; ?></td>
												</tr>
												<tr>
													<td>Stock Movement Register</td>
													<td><?php echo $bor[6] ? 'Yes' : 'No'; ?></td>
												</tr>
												<tr>
													<td>Voucher file</td>
													<td><?php echo $bor[7] ? 'Yes' : 'No'; ?></td>
												</tr>
												<tr>
													<td>Member Loan Ledger</td>
													<td><?php echo $bor[8] ? 'Yes' : 'No'; ?></td>
												</tr>
												<tr>
													<td>Additional Book of Record as per requirement</td>
													<td><?php echo $bor[9] ? 'Yes' : 'No'; ?></td>
												</tr>
											</tbody>
										</table>

										<h4 class="mt-4"><strong>Training List</strong></h4>

										<ul class="nav nav-tabs" id="trainingTabs" role="tablist">
											<li class="nav-item" role="presentation">
												<button class="nav-link active" id="agriculture-tab" data-bs-toggle="tab"
													data-bs-target="#agriculture" type="button"
													role="tab">Agriculture</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link" id="horticulture-tab" data-bs-toggle="tab"
													data-bs-target="#horticulture" type="button"
													role="tab">Horticulture</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link" id="livestock-tab" data-bs-toggle="tab"
													data-bs-target="#livestock" type="button" role="tab">Livestock</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link" id="fishery-tab" data-bs-toggle="tab"
													data-bs-target="#fishery" type="button" role="tab">Fishery</button>
											</li>
										</ul>

										<!-- Tab Content -->
										<div class="container mt-4">
											<div class="tab-content mt-3" id="trainingTabsContent">
												<!-- Agriculture Tab -->
												<div class="tab-pane fade show active" id="agriculture" role="tabpanel">
													<table class="table table-bordered">
														<tbody>
															<tr>
																<th width="40%">Types of Training</th>
																<th> Yes or No </th>
															</tr>
															<?php $agriculture = explode(',', $TLAgriculture); ?>
															<tr>
																<td>Basic Livelihoods Training</td>
																<td><?php echo $agriculture[0] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Farmers Field School</td>
																<td><?php echo $agriculture[1] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Irrigation and fertigation management</td>
																<td><?php echo $agriculture[2] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Seed Sorting & treatment</td>
																<td><?php echo $agriculture[3] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Cutivation of harvest & post-harvest management & value
																	addition</td>
																<td><?php echo $agriculture[4] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Intregrated Pest management</td>
																<td><?php echo $agriculture[5] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Branding, Sorting & Packaging</td>
																<td><?php echo $agriculture[6] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Organic Farming</td>
																<td><?php echo $agriculture[7] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Supply chain & Market linkage</td>
																<td><?php echo $agriculture[8] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Any training received from Agriculture</td>
																<td><?php echo $agriculture[9] ? 'Yes' : 'No'; ?></td>
															</tr>
														</tbody>
													</table>
												</div>

												<!-- Horticulture Tab -->
												<div class="tab-pane fade" id="horticulture" role="tabpanel">
													<table class="table table-bordered">
														<tbody>
															<tr>
																<th width="40%">Types of Training</th>
																<th> Yes or No </th>
															</tr>
															<?php $horticulture = explode(',', $TLHorticulture); ?>
															<tr>
																<td>Basic Livelihoods Training</td>
																<td><?php echo $horticulture[0] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Farmers Field School</td>
																<td><?php echo $horticulture[1] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Irrigation and fertigation management</td>
																<td><?php echo $horticulture[2] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Seed Sorting & treatment</td>
																<td><?php echo $horticulture[3] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Cutivation of harvest & post-harvest management & value
																	addition</td>
																<td><?php echo $horticulture[4] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Branding, Sorting & Packaging</td>
																<td><?php echo $horticulture[5] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Package and storage of fresh fruits/vegetables</td>
																<td><?php echo $horticulture[6] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Organic Farming</td>
																<td><?php echo $horticulture[7] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Poly House and Green House cultivation management</td>
																<td><?php echo $horticulture[8] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Nursery raising and management</td>
																<td><?php echo $horticulture[9] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Supply chain & Market linkage</td>
																<td><?php echo $horticulture[10] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Disease of Horticulture crops</td>
																<td><?php echo $horticulture[11] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Intregrated Pest management</td>
																<td><?php echo $horticulture[12] ? 'Yes' : 'No'; ?></td>
															</tr>
														</tbody>
													</table>
												</div>

												<!-- Livestocks Tab -->
												<div class="tab-pane fade" id="livestock" role="tabpanel">
													<table class="table table-bordered">
														<tbody>
															<tr>
																<th width="40%">Types of Training</th>
																<th> Yes or No </th>
															</tr>
															<?php $livestock = explode(',', $TLLivestock); ?>
															<tr>
																<td>Basic Livelihoods Training</td>
																<td><?php echo $livestock[0] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Farmers Field School</td>
																<td><?php echo $livestock[1] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Pashu Pathshala</td>
																<td><?php echo $livestock[2] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Breed Selection</td>
																<td><?php echo $livestock[3] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Sty/Shed prepation and management</td>
																<td><?php echo $livestock[4] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Feed Management</td>
																<td><?php echo $livestock[5] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Breeding</td>
																<td><?php echo $livestock[6] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Health Care & Management</td>
																<td><?php echo $livestock[7] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Slaughter hygiene management</td>
																<td><?php echo $livestock[8] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td>Other</td>
																<td><?php echo $livestock[9] ? 'Yes' : 'No'; ?></td>
															</tr>

														</tbody>
													</table>
												</div>

												<!-- Fishery Tab -->
												<div class="tab-pane fade" id="fishery" role="tabpanel">
													<table class="table table-bordered">
														<tbody>
															<tr>
																<th width="40%">Types of Training</th>
																<th> Yes or No </th>
															</tr>
															<?php $fishery = explode(',', $TLFishery); ?>
															<tr>
																<td>Basic Livelihoods Training</td>
																<td><?php echo $fishery[0] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<th rowspan="5">Pre-Stocking Management</th>
																<td><?php echo $fishery[1] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td> <strong> Pond Preparation and Renovation : </strong>
																	<?php echo $fishery[2] ? 'Yes' : 'No'; ?> </td>
															</tr>
															<tr>
																<td> <strong> Clearing of aquatic weeds : </strong>
																	<?php echo $fishery[3] ? 'Yes' : 'No'; ?> </td>
															</tr>
															<tr>
																<td> <strong> Eradication of Predator and weed fishes :
																	</strong> <?php echo $fishery[4] ? 'Yes' : 'No'; ?>
																</td>
															</tr>
															<tr>
																<td> <strong> Liming, Fertilization, and Manuring :
																	</strong> <?php echo $fishery[5] ? 'Yes' : 'No'; ?>
																</td>
															</tr>
															<tr>
																<th rowspan="8">Stocking and Post Stocking management</td>
																<td><?php echo $livestock[6] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td><strong>Species combination, Feeding and
																		Manuring:</strong>
																	<?php echo $fishery[7] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td><strong>Bottom racking and netting:</strong>
																	<?php echo $fishery[8] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td><strong>Water quality management:</strong>
																	<?php echo $fishery[9] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td><strong>Hatching and Hatchery Management:</strong>
																	<?php echo $fishery[10] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td><strong>Fish Health Management:</strong>
																	<?php echo $fishery[11] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td><strong>Fish Harvest and Yield Management:</strong>
																	<?php echo $fishery[12] ? 'Yes' : 'No'; ?></td>
															</tr>
															<tr>
																<td><strong>Marketing:</strong><?php echo $fishery[13] ? 'Yes' : 'No'; ?>
																</td>
															</tr>
															<tr>
																<td>Others</td>
																<td><?php echo $fishery[14] ? 'Yes' : 'No'; ?></td>
															</tr>
														</tbody>
													</table>
												</div>

											</div>
										</div>

									</div>
								</div>

							</div>



							<div class="col-md-12 text-right mb-1">
								<a class="btn btn-primary" onclick="javascript:history.back()"
									style="color:#fff;">Previous</a>
								<button class="btn btn-primary" type="button" name="submit" value="Signup"
									style="background:#2B78E4;">Submit</button>
								<button class="btn btn-primary" type="button" name="submit" value="Signup"
									style="background:#8E7CC3;">Review</button>
							</div>

					</form>
				</div>
			</div>
		</div>
	<?php } ?>

	</div>
	</div>
	<br /><br /><br />
</section>

<script language='javascript' type='text/javascript'>

	function additionalactothers() {

		var checkBox = document.getElementById("vlothers");

		if (checkBox.checked == true) {
			document.getElementById('inputadditionalactothers').style.display = "block";
		} else {
			document.getElementById('inputadditionalactothers').style.display = "none";
		}

	}


	function additionalactnota() {
		//alert($('.addtnalact').prop('checked'));
		//alert($(".addtnalact").is(':checked'));
		if ($(".addtnalactnoa").is(':checked') == true) {
			$('.addtnalact').prop('checked', false);
		}

	}

	function check(input) {

		if (document.getElementById('password').value != '') {
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
	function CheckValuesssss(val) {
		var element = document.getElementById('otherse');
		if (val == 'yes')
			element.style.display = 'block';
		else
			element.style.display = 'none';
	}
	function CheckValueo(val) {
		var element = document.getElementById('ootherselect');
		if (val == 'yes')
			element.style.display = 'block';
		else
			element.style.display = 'none';
	}
	function ChheckValue(val) {
		var element = document.getElementById('otherselect');
		if (val == 'yes')
			element.style.display = 'block';
		else
			element.style.display = 'none';
	}
	function CheckValue(val) {
		var element = document.getElementById('otherselects');
		if (val == 'yes')
			element.style.display = 'block';
		else
			element.style.display = 'none';
	}
	function CheckValuess(val) {
		var element = document.getElementById('otherselectss');
		if (val == 'yes')
			element.style.display = 'block';
		else
			element.style.display = 'none';
	}
	function CheckValuessss(val) {
		var element = document.getElementById('otherselectssss');
		if (val == 'yes')
			element.style.display = 'block';
		else
			element.style.display = 'none';
	}
	/*
   function CheckValue(val){
	var element=document.getElementById('yesselect');
	if(val=='yes')
	  element.style.display='block';
	else  
	  element.style.display='none';
   }*/


</script>

<script>
	$(document).ready(function () {
		$('.colorRadio').click(function () {
			var inputValue = $(this).attr("value");
			var targetBox = $("." + inputValue);
			$(".box").not(targetBox).hide();
			$(targetBox).show();
		});
	});

	function pgaddionalresponse(id, value, label) {

		//alert(id);
		//alert(value);
		var checkBox = document.getElementById(id);
		// alert(checkBox.checked); 

		if (checkBox.checked == true) {
			document.getElementById(value).style.display = "block";
			document.getElementById(label).style.backgroundColor = "#28a745";
			document.getElementById(label).style.borderColor = "#28a745";
			document.getElementById('totalvlpgcoung').value = parseInt(document.getElementById('totalvlpgcoung').value) + 1;
			if (document.getElementById('totalvlpgcoung').value >= 1) {

				document.getElementById('uspgainext').style.display = "inline-block";

			}
		} else {
			document.getElementById(value).style.display = "none";
			document.getElementById(label).style.backgroundColor = "#990000";
			document.getElementById(label).style.borderColor = "#990000";
			document.getElementById('totalvlpgcoung').value = parseInt(document.getElementById('totalvlpgcoung').value) - 1;
			if (document.getElementById('totalvlpgcoung').value <= 0) {

				document.getElementById('uspgainext').style.display = "none";

			}
		}
	}

</script>

<script>
	$(function () {
		$('#expradio').click(function () {
			$('.txbx').attr('hidden', false);
		});
		$('#frsradio').click(function () {
			$('.txbx').attr('hidden', true);
		});
	});
	$(function () {
		$('#expradio1').click(function () {
			$('.txbx1').attr('hidden', false);
		});
		$('#frsradio1').click(function () {
			$('.txbx1').attr('hidden', true);
		});
	});
	$(function () {
		$('#expradio2').click(function () {
			$('.txbx2').attr('hidden', false);
		});
		$('#frsradio2').click(function () {
			$('.txbx2').attr('hidden', true);
		});
	});
	$(function () {
		$('#expradio3').click(function () {
			$('.txbx3').attr('hidden', false);
		});
		$('#frsradio3').click(function () {
			$('.txbx3').attr('hidden', true);
		});
	});

	function enabletxtinvertopg(itptype) {

		document.getElementById(itptype).style.display = 'block';


	}

	function validatepg(e) {

		var selectedpg = e.options[e.selectedIndex].value;
		//alert(selectedpg);
		document.getElementById("frmbasicdetails").submit();


	}
</script>

<script>

	$(document).ready(function () {
		$('#categoryname').change(function () {
			var categoryname = $('#categoryname').val();

			if (categoryname != '') {
				$.ajax({
					url: "<?php echo base_url(); ?>pg/fetchsubcategory",
					method: "POST",
					data: { categoryname: categoryname },
					success: function (data) {
						// alert(data);
						$('#subcategoryname').html(data);

					}
				});
			}
			else {
				$('#categoryname').html('<option value="">Select Category</option>');
				$('#subcategoryname').html('<option value="">Select SubCategory</option>');
			}
		});

		$('#subcategoryname').change(function () {
			var subcategoryname = $('#subcategoryname').val();
			//alert(subcategoryname);
			if (subcategoryname != '') {
				$.ajax({
					url: "<?php echo base_url(); ?>pg/fetchcommodity",
					method: "POST",
					data: { subcategoryname: subcategoryname },
					success: function (data) {
						//alert(data);
						$('#commoditynewname').html(data);
					}
				});
			}
			else {
				$('#commoditynewname').html('<option value="">Select Commodity</option>');
			}
		});

	});

	$(document).ready(function () {
		$('#districtname').change(function () {
			var districtname = $('#districtname').val();

			if (districtname != '') {
				$.ajax({
					url: "<?php echo base_url(); ?>admin-manager/fetch_block",
					method: "POST",
					data: { districtname: districtname },
					success: function (data) {
						// alert(data);
						$('#blocknames').html(data);

					}
				});
			}
			else {
				$('#districtname').html('<option value="">Select Distict</option>');
				$('#blocknames').html('<option value="">Select Block</option>');
			}
		});

		$('#blocknames').change(function () {
			var blocknames = $('#blocknames').val();
			//alert(blocknames);
			if (blocknames != '') {
				$.ajax({
					url: "<?php echo base_url(); ?>admin-manager/fetchgrampachayat",
					method: "POST",
					data: { blocknames: blocknames },
					success: function (data) {
						//alert(data);
						$('#grampachayatname').html(data);
					}
				});
			}
			else {
				$('#grampachayatname').html('<option value="">Select Gram Pachayat</option>');
			}
		});
		$('#grampachayatname').change(function () {
			var grampanchayat = $('#grampachayatname').val();
			//alert(villagename);
			if (villagename != '') {
				$.ajax({
					url: "<?php echo base_url(); ?>admin-manager/fetchvillage",
					method: "POST",
					data: { grampanchayat: grampanchayat },
					success: function (data) {
						//alert(data);
						$('#villagename').html(data);
					}
				});
			}
			else {
				$('#villagename').html('<option value="">Select Villagename</option>');
			}
		});
	});

	function addBankFunction() {
		var table = document.getElementById("bankdetailsfields");
		var rowlen = table.rows.length;
		var row = table.insertRow(rowlen);
		row.id = rowlen;
		var arr = ['textboxfiledname'];
		for (i = 0; i < 5; i++) {
			var x = row.insertCell(i)
			if (i == 0) {
				//  x.innerHTML = "<input type='button' onclick='removeCell(" + row.id + ")' value=Delete>"
				x.innerHTML = '<select class="form-control" required name="bankname[]"><option value="">Choose Bank</option><option value="AGVB">AGVB</option><option value="HDFC">HDFC</option><option value="ICICI">ICICI</option><option value="SBI">SBI</option><option value="PNB">PNB</option><option value="Central Bank of India">Central Bank of India</option><option value="Canara Bank">Canara Bank</option><option value="Bank of Baroda">Bank of Baroda</option><option value="Bank of India">Bank of India</option><option value="Indian Overseas">Indian Overseas</option><option value="Union Bank">Union Bank</option><option value="Kotak Mahindra Bank">Kotak Mahindra Bank</option></select>';
			}
			else if (i == 1) {

				//  x.innerHTML = "<input type='button' onclick='removeCell(" + row.id + ")' value=Delete>"
				x.innerHTML = '<select class="form-control" name="typeofaccount[]"><option option="Saving" >Saving</option><option option="Current" >Current</option></select>';

			}
			else if (i == 2) {

				//  x.innerHTML = "<input type='button' onclick='removeCell(" + row.id + ")' value=Delete>"
				x.innerHTML = '<input class="form-control" type="text" value="" name="ifsc[]" required placeholder="IFSC">';

			}
			else if (i == 3) {

				//  x.innerHTML = "<input type='button' onclick='removeCell(" + row.id + ")' value=Delete>"
				x.innerHTML = '<input class="form-control" type="text" value="" name="branchname[]" required placeholder="Branch Name">';

			}
			else if (i == 4) {

				//  x.innerHTML = "<input type='button' onclick='removeCell(" + row.id + ")' value=Delete>"
				x.innerHTML = '<input class="form-control" type="number" minlength="12" value="" name="accountno[]"  required placeholder="Account No."><input type="hidden" name="bnksavetype[]"  value="add">';

			}
			else {

			}
		}
	}

	function addSupportRecieveFunction() {


		const div = document.createElement('div');

		div.className = 'col-md-12 row';

		div.innerHTML = '<div class="col-md-12 row" style="margin-top: 45px;"><table class="table p-3 table-bordered table-striped"><thead><tr><th scope="col" >Source of fund</th><th scope="col">Type of fund</th><th scope="col">Amount*</th><th scope="col">Date</th><th scope="col">Purpose</th></tr></thead><tbody><tr><td class="col-md-2 px-2 text-center"><select class="form-control  col-md-12" name="SRPGsof[]"><option value="clf">CLF</option><option value="bankloan">Bank loan</option><option value="others">Others</option></select></td><td class="col-md-3 px-2 text-center"><select class="form-control  col-md-12" name="SRPGtof[]"><option value="other">Other</option><option value="workingcapital">Working Capital</option><option value="infrastructurefund">Infrastructure Fund</option></select></td><td class="col-md-2 px-2 text-center"><input class="form-control" type="number" min="0" name="SRPGamount[]" placeholder=" "></td><td><input class="form-control " type="date" name="SRPGdate[]" placeholder=" "></td><td><input type="text" class="form-control" name="SRPGpurpose[]"></td></tr></tbody></table><div class="col-md-12"><div class="row"><div class="col-md-11"><h6 class="m-0"> PAYMENT MODE BY PG</h6><br></div></div><table class="table p-3 table-bordered table-striped"><thead><tr><th scope="col">Source of fund</th><th scope="col">Repayment of principle</th><th scope="col">Rate of Interest</th><th scope="col"> Monthly EMI</th><th scope="col"> Amount Due</th></tr></thead><tbody><tr><td class="col-md-3 px-2 text-center"><select class="form-control  col-md-12" name="PMPGsof[]"><option value="clf">CLF</option><option value="bankloan">Bank loan</option><option value="others">Others</option></select></td><td><input class="form-control" type="text" name="PMPGrp[]"  placeholder=" "></td><td><input class="form-control" type="text" name="PMPGinterest_rate[]"  placeholder=" "></td><td><input class="form-control" type="text" name="PMPGmonthlyemi[]"  placeholder=" "></td><td><input class="form-control" type="text" name="PMPGamountdue[]"  placeholder=" "></td></tr></tbody></table></div><div class="col-md-12"><div class="row"><div class="col-md-11"><h6 class="m-0">  </h6></div><div class="col-md-1"></div></div><table class="table p-3 table-bordered table-striped"><thead><tr><th scope="col">Duration of Loan</th><th scope="col">Date of Commencement</th><th scope="col">Date of Completion</th></tr></thead><tbody><tr><td><input class="form-control" type="number"  min="0" name="loanduration[]" ></td><td><input class="form-control" type="date" name="commencement_date[]"></td><td><input class="form-control" type="date" name="completion_date[]" ><input type="hidden" name="pgssavetype[]" value="add"></td></tr></tbody></table></div>';

		document.getElementById('supportrecievedfields').appendChild(div);

	}

	function removeCell(rowid) {
		var table = document.getElementById(rowid).remove();
	}
</script>

<!-- Created add more for the Monthly business summary -->
<script>
	function addMonthlyBusinessSummaryFunction() {
		let newTable = $(".monthly-business-table-set:first").clone();
		newTable.css('margin-top', '50px');
		$("#tableContainerMonthlyBusiness").append(newTable);
	}
</script>