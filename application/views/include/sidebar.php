<div class="sidebar">
    <?php
    $current_segment = $this->uri->segment(1);
    $admin_session = $this->session->userdata('admin_session');
    ?>

    <ul>
        <li><a href="<?php echo base_url(); ?>overview" class="<?php echo ($current_segment == 'overview') ? 'active' : ''; ?>">Overview</a></li>
        <li><a href="<?php echo base_url(); ?>pg-profile" class="<?php echo ($current_segment == 'pg-profile') ? 'active' : ''; ?>">Add PG</a></li>
        <li><a href="<?php echo base_url(); ?>training" class="<?php echo ($current_segment == 'training') ? 'active' : ''; ?>">Training</a></li>
        <li><a href="<?php echo base_url(); ?>business-plan" class="<?php echo ($current_segment == 'business-plan') ? 'active' : ''; ?>">Business plan</a></li>
        <li><a href="<?php echo base_url(); ?>fund-disbursement" class="<?php echo ($current_segment == 'fund-disbursement') ? 'active' : ''; ?>">Fund Disbursement And Repayment Record</a></li>
        <li><a href="<?php echo base_url(); ?>monthly-business-summary" class="<?php echo ($current_segment == 'monthly-business-summary') ? 'active' : ''; ?>">Monthly Business Summary</a></li>
        <li><a href="<?php echo base_url(); ?>user-profile" class="<?php echo ($current_segment == 'user-profile') ? 'active' : ''; ?>">User profile</a></li>
        
        <?php if($this->session->userdata('admin_session')['user_group_id'] == '3'){ ?> 
            <li><a href="<?php echo base_url(); ?>members/memberslist" class="<?php echo ($current_segment == 'members') ? 'active' : ''; ?>">Add PG Member</a></li>
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
        
        <li><a href="<?php echo base_url(); ?>register">User Registration</a></li>
        <li><a href="<?php echo base_url(); ?>login/logout">Logout</a></li>
    </ul>
</div>
