<section>
    <div class="container-fluid">
        <div class="row list-view">
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
                        <li><a href="<?php echo base_url(); ?>user-profile"
                                class="<?php echo ($current_segment == 'user-profile') ? 'active' : ''; ?>">Member
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

            <?php if ($this->uri->segment(2) < '2') { ?>
                <div class="col-md-10">
                    <div class="content content-box">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="m-0"> Commodities Details Report</h4>
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
                        <div class="col-md-12 mt-4">

                            <form class="row pr-4 pl-4" method="post">
                                <div class="col-md-12">
                                    <div class="row">
                                        <?php
                                        // print_r($producergroup); die(); 
                                        ?>
                                        <table id="bankdetailsfields" class="table p-3 table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">District </th>
                                                    <th scope="col">Block</th>
                                                    <th scope="col">GP</th>
                                                    <th scope="col">Producer Group</th>
                                                    <th scope="col">CLF Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <select class="form-control" id="dist" name="dist" >
                                                            <option value="">-- Select District --</option>
                                                            <?php foreach ($districts as $district): ?>
                                                                <option value="<?php echo $district; ?>" <?php echo (!empty($userdetails['district']) && $userdetails['district'] == $district) ? 'selected' : ''; ?>>
                                                                    <?php echo $district; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control" id="block" name="block" >
                                                            <option value="">-- Select Block --</option>
                                                            <?php
                                                            if ($userdetails['block']) {
                                                                ?>

                                                                <option value="<?php echo $block; ?>" <?php echo (!empty($userdetails['block']) && $userdetails['block'] == $userdetails['block']) ? 'selected' : ''; ?>>
                                                                    <?php echo $userdetails['block']; ?>
                                                                </option>

                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="gram_panchayat">
                                                            <option value="">Select Gram Panchayat </option>
                                                            <?php foreach ($grampanchayat as $val) { ?>
                                                                <option option="<?php echo ($val['grampanchayat']); ?>">
                                                                    <?php echo ($val['grampanchayat']); ?>
                                                                </option>
                                                            <?php } ?>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="producer_group">
                                                            <option value="">Name of Producer Group </option>
                                                            <?php foreach ($producergroup as $val) { ?>
                                                                <option option="<?php echo ($val['pgname']); ?>">
                                                                    <?php echo ($val['pgname']); ?>
                                                                </option>
                                                            <?php } ?>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="clf">
                                                            <option value="">Select CLF Name </option>
                                                            <?php foreach ($clf as $val) { ?>
                                                                <option option="<?php echo ($val['clf']); ?>">
                                                                    <?php echo ($val['clf']); ?>
                                                                </option>
                                                            <?php } ?>
                                                        </select>
                                                    </td>

                                                </tr>
                                            </tbody>
                                        </table>

                                        <table id="bankdetailsfields" class="table p-3 table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Model CLF </th>
                                                    <th scope="col">Commodity Category </th>
                                                    <th scope="col">Sub-category </th>
                                                    <th scope="col">Commodity Name </th>
                                                    <th scope="col">Date Range </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <select class="form-control" name="clf_model">
                                                            <option value="">Select CLF Model</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control form-control" name="category"
                                                            id="categoryname">
                                                            <option value="">Select Category</option>
                                                            <?php foreach (array_filter($categories) as $categoryname) { ?>
                                                                <option value="<?php echo $categoryname['category']; ?>" <?php if ($category == $categoryname['category']) {
                                                                        echo 'selected="selected"';
                                                                    } ?>>
                                                                    <?php echo ucfirst($categoryname['category']) ?></option>


                                                            <?php } ?>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control form-control"  name="sub_category" id="subcategoryname" >
                                                            <div class="col-md-8">
                                                            <option value="">Sub-Category</option>
                                                            <option value="primary">Primary</option>			 
                                                            <option value="secondary">Secondary</option>			 
                                                            <option value="tertiary">Tertiary </option>			 
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control form-control" name="commodityname" id="commoditynewname">
                                                            <option value="">Select Commodity</option>
                                                            <option <?php if($commodityname != ''){ echo 'selected="selected"';  } ?>><?php echo ucfirst($commodityname) ?></option>				 
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="date" name="date_from" class="form-control" />
                                                        to <input type="date" name="date_to" class="form-control" />
                                                    </td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <input type="hidden" name="stepno" value="1">
                                        <input type="hidden" name="isedit" value="1">
                                        <input type="hidden" name="pgid"
                                            value="<?php echo ($this->session->userdata('pgid') == true) ? $this->session->userdata('pgid') : ''; ?>">
                                        <input type="submit" class="btn btn-primary" name="filters" value="Generate Report">
                                    </div>
                            </form>

                        <div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

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

    <script>
        $(document).ready(function(){
            $('#categoryname').change(function(){
                var categoryname = $('#categoryname').val();
                //alert(subcategoryname);
                if(categoryname != '')
                {
                $.ajax({
                    url:"<?php echo base_url(); ?>pg/fetchcommodity",
                    method:"POST",
                    data:{categoryname:categoryname},
                    success:function(data)
                    {
                        //alert(data);
                    $('#commoditynewname').html(data);
                    }
                });
                }
                else
                {
                $('#commoditynewname').html('<option value="">Select Commodity</option>');
                }
            });
        });
    </script>
</section>