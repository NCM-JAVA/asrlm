
<section>
	<div class="container-fluid">
		<div class="row list-view">
			<div class="col-md-2">
                <?php $this->load->view('include/sidebar'); ?>
				<!-- <div class="sidebar"> -->
					<?php 
						// $user_data = $this->session->userdata('admin_session'); 
						// $current_segment = $this->uri->segment(1);
					?>

					<!-- <ul>
						<li><a href="<?php echo base_url(); ?>overview" class="<?php echo ($current_segment == 'overview') ? 'active' : ''; ?>">Overview</a></li>
						<li><a href="<?php echo base_url(); ?>pg-profile" class="<?php echo ($current_segment == 'pg-profile') ? 'active' : ''; ?>">PG Profile</a></li>
						<li><a href="<?php echo base_url(); ?>training" class="<?php echo ($current_segment == 'training') ? 'active' : ''; ?>">Training</a></li>
						<li><a href="<?php echo base_url(); ?>business-plan" class="<?php echo ($current_segment == 'business-plan') ? 'active' : ''; ?>">Business plan</a></li>
						<li><a href="<?php echo base_url(); ?>fund-disbursement" class="<?php echo ($current_segment == 'fund-disbursement') ? 'active' : ''; ?>">Fund Disbursement</a></li>
						<li><a href="<?php echo base_url(); ?>monthly-business-summary" class="<?php echo ($current_segment == 'monthly-business-summary') ? 'active' : ''; ?>">Monthly Business Summary</a></li>
						<li><a href="<?php echo base_url(); ?>user-profile" class="<?php echo ($current_segment == 'user-profile') ? 'active' : ''; ?>">Member profile</a></li>
						<?php if($this->session->userdata('admin_session')['user_group_id'] == '3'){ ?> 
                            <li><a href="<?php echo base_url(); ?>members/memberslist" class="<?php echo ($current_segment == 'members') ? 'active' : ''; ?>">Member Panel</a></li>
                            <li><a href="<?php echo base_url(); ?>member-transaction" class="<?php echo ($current_segment == 'member-transaction') ? 'active' : ''; ?>">Member transaction</a></li>
                            <li><a href="<?php echo base_url(); ?>buyers-details" class="<?php echo ($current_segment == 'buyers-details') ? 'active' : ''; ?>">Buyers Details</a></li>
                            <li><a href="<?php echo base_url(); ?>users-list" class="<?php echo ($current_segment == 'users-list') ? 'active' : ''; ?>">Users List</a></li>
                            <li><a href="<?php echo base_url(); ?>reports" class="<?php echo ($current_segment == 'reports') ? 'active' : ''; ?>">Reports</a></li>
                        <?php } ?>
                        <?php if($this->session->userdata('admin_session')['user_group_id'] == '1'){ ?> 
                            <li><a href="<?php echo base_url(); ?>verifierpanel" class="<?php echo ($current_segment == 'verifierpanel') ? 'active' : ''; ?>">Verify PG</a></li>
                        <?php } ?>
                        <?php if($this->session->userdata('admin_session')['user_group_id'] == '2'){ ?> 
                            <li><a href="<?php echo base_url(); ?>approverpanel" class="<?php echo ($current_segment == 'approverpanel') ? 'active' : ''; ?>">Approve PG</a></li>
                        <?php } ?>
                        <li><a href="<?php echo base_url(); ?>login/logout">Logout</a></li>
					</ul> -->
					
					<ul>
						<!-- <li><a href="<?php echo base_url(); ?>user-profile" class="<?php echo ($current_segment == 'user-profile') ? 'active' : ''; ?>">Profile</a></li>
						<li><a href="<?php echo base_url(); ?>admin-manager?atype=producergroupdetails" class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>"> PG Panel</a></li>
						<li><a href="<?php echo base_url(); ?>members/memberslist" class="<?php echo ($current_segment == 'members') ? 'active' : ''; ?>">Member Panel</a></li>
						<li><a href="<?php echo base_url(); ?>verifierpanel" class="<?php echo ($current_segment == 'verifierpanel') ? 'active' : ''; ?>">Verifier Panel</a></li>
						<li><a href="<?php echo base_url(); ?>approverpanel" class="<?php echo ($current_segment == 'approverpanel') ? 'active' : ''; ?>">Approver Panel</a></li>
						<li><a href="<?php echo base_url(); ?>buyerdetails-list" class="<?php echo ($current_segment == 'buyerdetails-list') ? 'active' : ''; ?>"> Buyer Details List</a></li> -->
						<!--li><a href="<?php echo base_url(); ?>state-list">State List</a></li-->
						<!-- <li><a href="<?php echo base_url(); ?>admin-manager" class="<?php echo ($current_segment == 'admin-manager') ? 'active' : ''; ?>">Reports</a></li> -->
						<?php // if($this->session->userdata('admin_session')['user_group_id'] == '3'){ ?>
						<!-- <li><a href="<?php echo base_url(); ?>users-list">Users List</a></li>  <?php // } ?> -->
						<!--li><a href="<?php echo base_url(); ?>change-password">Change Password</a></li-->
						
						<!-- <li><a href="<?php echo base_url(); ?>upload-data" class="<?php echo ($current_segment == 'upload-data') ? 'active' : ''; ?>">Upload/Sync Records(CSV)</a></li>
											
						<li><a href="<?php echo base_url(); ?>login/logout">Logout</a></li>-->
					</ul> 
					
				<!-- </div> -->
			</div>
			<div class="col-md-10">
				<div class="content content-box">
					<div class="card-header">
				        <div class="row">
				            <div class="col-md-12">
							    <h4 class="m-0"> Overview</h4>
						    </div>												
						</div>
	                </div>
                    <center>  <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error">'.$msg.'</label></fieldset>';?>
                    <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">'.$this->input->get('msg').'</label></fieldset>'; }?></center>
                    <div class="col-md-12 mt-4">
                        
                        <table class="table table-bordered">
                            <thead >
                                <tr>
                                    <th> S.No. </th>
                                    <th> Parameters </th>
                                    <th> Total </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Total No of PGs</td>
                                    <td><?php echo $list_of_data['pg_panel_count']['total_count']; ?></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>PG Having a Bank Account </td>
                                    <td><?php echo $list_of_data['pg_bankdetails_count']['total_count']; ?></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Total Nos of Members mapped with PGs</td>
                                    <td><?php echo $list_of_data['pg_mapped_member']['total_count']; ?></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Total Nos of Members mapped with FPC</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>PG received training </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>PG Prepared Business plan </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>PG received Working Capital</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>PG received an Infrastructure fund </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>PG received a Bank loan </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>PG Cumulative Income (Rs)</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table><br>
                    <div>
                </div>
            </div>
        </div> 
	</div>
</section>
