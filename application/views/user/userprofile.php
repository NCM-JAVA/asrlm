<section>
	<div class="container-fluid">
		<div class="row list-view">
			<div class="col-md-2">
				<?php $this->load->view('include/sidebar'); ?>
			</div>
			<div class="col-md-10">
				<div class="content content-box">
					<div class="card-header">
						<div class="row">
							<div class="col-md-12">
								<h4 class="m-0"> User Profile</h4>
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
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputFullName">Full Name</label>
								<input type="text" name="fullname" class="form-control" id="exampleInputFullName"
									aria-describedby="fullNameHelp" placeholder="Full Name"
									value="<?php echo $userdetails['name']; ?>" required />
								<input type="hidden" name="isupdate" value="<?php echo $this->uri->segment(2); ?>" />
								<small id="fullNameHelp" class="form-text text-danger d-none">Full name is
									required</small>
							</div>
							<div class="form-group">
								<label for="exampleInputFullName">Unique ID</label>
								<input type="text" class="form-control" id="exampleInputUniqueID"
									aria-describedby="UniqueIDHelp" placeholder="Enter Unique ID"
									value="<?php echo $userdetails['id']; ?>" readonly />
								<small id="UniqueIDHelp" class="form-text text-danger d-none">Full name is
									required</small>
							</div>
							<div class="form-group">
								<label for="exampleInputMobileNo">Mobile No</label>
								<input type="tel" class="form-control" name="mobile" id="exampleInputMobileNo"
									aria-describedby="mobileNoHelp" placeholder="Mobile No"
									value="<?php echo $userdetails['mobile']; ?>" pattern="^\d{10}$"
									title="Enter 10 Digit Number" required="required" />
								<small id="mobileNoHelp" class="form-text text-danger d-none">Mobile no required</small>
							</div>

							<div class="form-group">
								<label for="exampleInputState">State</label>
								<!-- <select class="form-control" id="exampleInputState" name="usrstate" aria-describedby="stateHelp" required>
										<option value="">--Select State--</option>
											<option value="Haryana" <?php echo ($userdetails['state'] == 'Haryana') ? 'selected="Selected"' : ''; ?> >Haryana</option>
											<option value="Rajasthan" <?php echo ($userdetails['state'] == 'Rajasthan') ? 'selected="Selected"' : ''; ?>>Rajasthan</option>
											<option value="Gujarat" <?php echo ($userdetails['state'] == 'Gujarat') ? 'selected="Selected"' : ''; ?>>Gujarat</option>
											<option value="Karnataka" <?php echo ($userdetails['state'] == 'Karnataka') ? 'selected="Selected"' : ''; ?>>Karnataka</option>
											<option value="UP" <?php echo ($userdetails['state'] == 'UP') ? 'selected="Selected"' : ''; ?>>Uttar Pradesh</option>
											<option value="Assam" <?php echo ($userdetails['state'] == 'Assam') ? 'selected="Selected"' : ''; ?>>Assam</option>	
											<option value="TamilNadu" <?php echo ($userdetails['state'] == 'TamilNadu') ? 'selected="Selected"' : ''; ?>>TamilNadu</option>	
											<option value="Uttarakhand" <?php echo ($userdetails['state'] == 'Uttarakhand') ? 'selected="Selected"' : ''; ?>>Uttarakhand</option>				
										</select> -->
								<input type="text" class="form-control" id="exampleInputState" name="usrstate"
									value="<?php echo $userdetails['state'] ?>" readonly />
								<small id="stateHelp" class="form-text text-danger d-none">Please select state</small>
							</div>

							<div class="form-group">
								<label for="block">Block</label>
								<select class="form-control" id="block" name="block" required>
									<option value="">-- Select Block --</option>
									<?php
									if ($userdetails['block']) {
										?>

										<option value="<?php echo $block; ?>" <?php echo (!empty($userdetails['block']) && $userdetails['block'] == $userdetails['block']) ? 'selected' : ''; ?>>
											<?php echo $userdetails['block']; ?></option>

										<?php
									}
									?>
								</select>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control" name="email" id="exampleInputEmail1"
									aria-describedby="emailHelp" placeholder="Enter email"
									value="<?php echo $userdetails['email']; ?>" required readonly />
								<small id="emailHelp" class="form-text text-danger d-none">Email id is required</small>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">New Password</label>
								<input type="password" class="form-control" name="password" id="password"
									placeholder="Password" />
								<small id="emailHelp" class="form-text text-danger d-none">Password is required</small>
							</div>
							<div class="form-group">
								<label for="exampleInputConfirmPassword">Confirm Password</label>
								<input type="password" class="form-control" id="cpassword" name="cpassword"
									onblur="check(this)" aria-describedby="confirmPasswordHelp"
									placeholder="Confirm Password" value="">
								<small id="confirmPasswordHelp" class="form-text text-danger d-none">Confirm password is
									required</small>
							</div>

							<div class="form-group">
								<label for="exampleInputState">District</label>

								<select class="form-control" id="dist" name="dist" required>
									<option value="">-- Select District --</option>
									<?php foreach ($districts as $district): ?>
										<option value="<?php echo $district; ?>" <?php echo (!empty($userdetails['district']) && $userdetails['district'] == $district) ? 'selected' : ''; ?>><?php echo $district; ?></option>
									<?php endforeach; ?>
								</select>
							</div>

							<?php  //if($this->session->userdata('admin_session')['user_group_id'] == '3'){ ?>
							<div class="form-group">
								<label for="exampleInputRole">Role
									<?php //  echo $userdetails['user_group_id']; ?></label>
								<select class="form-control" id="exampleInputRole" name="usrrole"
									aria-describedby="roleHelp" <?php echo ($this->session->userdata('admin_session')['user_group_id'] == 3 ? '' : 'disabled') ?>>
									<option>--Select Role--</option>
									<option value="1" <?php echo ($userdetails['user_group_id'] == '1') ? 'selected="Selected"' : ''; ?>>Verifier
									</option>
									<option value="2" <?php echo ($userdetails['user_group_id'] == '2') ? 'selected="Selected"' : ''; ?>>Approver
									</option>
									<option value="3" <?php echo ($userdetails['user_group_id'] == '3') ? 'selected="Selected"' : ''; ?>>PG Admin
									</option>
									<option value="12" <?php echo ($userdetails['user_group_id'] == '12') ? 'selected="Selected"' : ''; ?>>Data Entry
									</option>
									<!-- <option value="4" <?php echo ($userdetails['user_group_id'] == '4') ? 'selected="Selected"' : ''; ?>>Member
									</option> -->

								</select>
								<small id="roleHelp" class="form-text text-danger d-none">Please select role</small>
							</div>
							<?php // } ?>
							<!--div class="form-group">
							<label for="exampleInputBranch">Organization</label>
							<select class="form-control" name="branch" id="sel1">
												<option>--Select Branch--</option>
												<option option="Branch A" <?php echo ($userdetails['branch'] == 'Branch A') ? 'selected="Selected"' : ''; ?> >Branch A</option>
												<option option="Branch B" <?php echo ($userdetails['branch'] == 'Branch B') ? 'selected="Selected"' : ''; ?> >Branch B</option>
												<option option="Branch C" <?php echo ($userdetails['branch'] == 'Branch C') ? 'selected="Selected"' : ''; ?> >Branch C</option>
											</select>
							<small id="branchHelp" class="form-text text-danger d-none">Please select branch</small>
						</div-->
						</div>
						<div class="col-md-12 text-center mb-1">
							<button class="btn btn-primary" type="submit" name="submit" value="Signup">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<script language='javascript' type='text/javascript'>
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

</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	$(document).ready(function () {
		$('#dist').change(function () {
			var district = $(this).val();

			if (district !== "") {
				$.ajax({
					url: "<?php echo base_url('get-dist-blocks'); ?>",
					type: "POST",
					data: { district: district },
					dataType: "json",
					success: function (response) {
						console.log("Response : ", response); // Debugging: Check response in console
						$('#block').html('<option value="">-- Select Block --</option>');
						$.each(response, function (index, block) {
							$('#block').append('<option value="' + block.block + '">' + block.block + '</option>');
						});
					},
					error: function (xhr, status, error) {
						console.log("error123 : ", xhr.responseText); // Show errors in console
						console.log("AJAX Error Status: ", status);
						console.log("AJAX Error: ", error);
						console.log("AJAX Response: ", xhr.responseText);
					}
				});
			} else {
				$('#block').html('<option value="">-- Select Block --</option>');
			}
		});
	});
</script>