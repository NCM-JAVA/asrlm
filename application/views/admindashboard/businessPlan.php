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
                                <h4 class="m-0"> Business Plan</h4>
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
                    <?php if ($this->session->tempdata('success')): ?>
                        <div class="alert alert-success">
                            <?= $this->session->tempdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="col-md-12 mt-4">

                        <form class="row pr-4 pl-4" method="post">
                            <div class="col-md-12">
                                <div class="row">

                                    <table id="bankdetailsfields" class="table p-3 table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col" width="10%">Financial Year*</th>
                                                <th scope="col" width="10%">Month*</th>
                                                <th scope="col" width="10%">District*</th>
                                                <th scope="col" width="10%">Block*</th>
                                                <th scope="col" width="10%">Gram Panchayat*</th>
                                                <th scope="col" width="10%">Village*</th>
                                                <th scope="col" width="10%">Name of Producer Group*</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <select class="form-control" required name="financial_year">
                                                        <option value="">Select Year</option>
                                                        <option value="2011-2012">2011-2012</option>
                                                            <option value="2012-2013">2012-2013</option>
                                                            <option value="2013-2014">2013-2014</option>
                                                            <option value="2014-2015">2014-2015</option>
                                                            <option value="2015-2016">2015-2016</option>
                                                            <option value="2017-2018">2017-2018</option>
                                                            <option value="2018-2019">2018-2019</option>
                                                            <option value="2019-2020">2019-2020</option>
                                                            <option value="2020-2021">2020-2021</option>
                                                            <option value="2021-2022">2021-2022</option>
                                                            <option value="2022-2023">2022-2023</option>
                                                            <option value="2023-2024">2023-2024</option>
                                                            <option value="2024-2025">2024-2025</option>
                                                            <option value="2025-2026">2025-2026</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control" name="month" required>
                                                        <option value="">Select Month </option>
                                                        <option option="january">January</option>
                                                        <option option="february">February</option>
                                                        <option option="march">March</option>
                                                        <option option="april">April</option>
                                                        <option option="may">May</option>
                                                        <option option="june">June</option>
                                                        <option option="july">July</option>
                                                        <option option="august">august</option>
                                                        <option option="september">Semptember</option>
                                                        <option option="october">October</option>
                                                        <option option="november">November</option>
                                                        <option option="december">December</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="custom-select" id="districtname" name="districtname">
                                                        <option value="">Choose...</option>
                                                        <?php foreach ($districts as $district) { ?>

                                                            <option value="<?php echo $district['district']; ?>" <?php if ($districtname == $district['district']) {
                                                                echo 'selected="selected"';
                                                            } ?>><?php echo ucfirst($district['district']); ?></option>

                                                        <?php } ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="custom-select" id="blocknames" name="blockname">
                                                        <option value="">Choose...</option>
                                                        <?php if ($blockname == true) {
                                                            echo ' <option value="' . $blockname . '"  selected="selected">' . ucfirst($blockname) . '</option>';
                                                        } ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control" name="gram_panchayat" id="grampanchayatname" required>
                                                        <option value="">Select Gram Panchayat </option>
                                                        <!-- <?php foreach ($grampanchayat as $val) { ?>
                                                            <option option="<?php echo ($val['grampanchayat']); ?>">
                                                                <?php echo ($val['grampanchayat']); ?>
                                                            </option>
                                                        <?php } ?> -->
                                                        <?php if ($grampanchayatname == true) {
                                                            echo ' <option value="' . $grampanchayatname . '"  selected="selected">' . ucfirst($grampanchayatname) . '</option>';
                                                        } ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="villagename[]" class="custom-select" id="villagename" multiple>
                                                        <option value="">Choose...</option>
                                                        <?php if ($villagename == true) {
                                                            $villages = explode(',', $villagename);
                                                            foreach ($villages as $village) {
                                                                echo ' <option value="' . $village . '"  selected="selected">' . ucfirst($village) . '</option>';
                                                            }
                                                        } ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control" name="producer_group" required>
                                                        <option value="">Name of Producer Group </option>
                                                        <?php foreach ($producergroup as $val) { ?>
                                                            <option option="<?php echo ($val['pgname']); ?>">
                                                                <?php echo ($val['pgname']); ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4> Business Plan Preparation </h4>
                                    </div>
                                    <div class="col-md-6 text-right"><a href="#" id="addTable"
                                            class="btn-sm btn-danger"><i class="fa fa-plus"></i></a></div>
                                </div>
                            </div><br>

                            <div class="table-wrapper">
                                <table id="bankdetailsfields" class="table p-3 table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">Business Plan Prepared</th>
                                            <th rowspan="2">Business Plan Submitted to CLF</th>
                                            <th colspan="3" scope="col">Business Plan Prepared for (Name of
                                                Commodity)</th>
                                            <th rowspan="2">Amount (Lakhs) of Business Plan</th>
                                            <th rowspan="2">Amount Required (Lakhs)</th>
                                        </tr>
                                        <tr>
                                            <th class="sub-header">Name of Category</th>
                                            <th class="sub-header">Sub Category</th>
                                            <th class="sub-header">Name of Commodity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select class="form-control" name="BPPreparation[]">
                                                    <option value="yes">YES</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="BPPreparation[]" >
                                                    <option value="yes">Yes </option>
                                                    <option value="no">No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control form-control categoryname" name="BPPreparation[]" id="categoryname">
                                                    <option>Select Category</option>
                                                    <?php foreach (array_filter($categories) as $categoryname) { ?>
                                                        <option value="<?php echo $categoryname['category']; ?>" <?php if ($category == $categoryname['category']) {
                                                                echo 'selected="selected"';
                                                            } ?>>
                                                            <?php echo ucfirst($categoryname['category']) ?></option>


                                                    <?php } ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="BPPreparation[]">
                                                    <option>Select Sub-Category</option>
                                                    <option value="primary">Primary </option>
                                                    <option value="secondary">Secondary</option>
                                                    <option value="tertiary">Tertiary</option>
                                                </select>
                                            </td>
                                            <td>
                                                <div class="category-wrapper">
                                                    <select class="form-control form-control commoditynewname" name="BPPreparation[]" id="commoditynewname">
                                                        <option>Select Commodity</option>
                                                        <option <?php if($commodityname != ''){ echo 'selected="selected"';  } ?>><?php echo ucfirst($commodityname) ?></option>				 
                                                    </select>
                                                </div>
                                                <div class="category-wrapper1" style="display:none">
                                                    <input type="text" class="form-control" name="BPPreparation[]" id="commoditynewname" placeholder="Enter Commodity" />
                                                </div>
                                            </td>

                                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                            <script>
                                                $(document).ready(function () {
                                                    // $('#categoryname').on('change', function () {
                                                     $(document).on('change', '.categoryname', function () {
                                                        var selectedVal = $(this).val().toLowerCase();
                                                        // alert(selectedVal);
                                                        var row = $(this).closest('tr');
                                                        // alert(row);
                                                        
                                                        if (selectedVal === 'others ') {
                                                            row.find('.category-wrapper').hide();
                                                            row.find('.category-wrapper1').show();
                                                        } else {
                                                            row.find('.category-wrapper1').hide();
                                                            row.find('.category-wrapper').show();
                                                        }
                                                    });
                                                });
                                            </script>
                                            <!-- <td>
                                                <input type="text" name="BPPreparation[]" class="form-control"
                                                    placeholder="Category" required />
                                            </td>
                                            <td>
                                                <input type="text" name="BPPreparation[]" class="form-control"
                                                    placeholder="Sub-Category" required />
                                            </td>
                                            <td>
                                                <input type="text" name="BPPreparation[]" class="form-control"
                                                    placeholder="Name of Commodity" required />
                                            </td> -->
                                            <td>
                                                <input type="number" name="BPPreparation[]" class="form-control" step="0.01"
                                                 placeholder="100000" />
                                            </td>
                                            <td>
                                                <input type="number" name="BPPreparation[]" class="form-control"
                                                    placeholder="100000" step="0.01" />
                                            </td>
                                            <!-- <td><input class="form-control" type="text" value="" name="ifsc[]" required placeholder="IFSC"></td>
                                                <td><input class="form-control" type="text" value="" name="branchname[]" required placeholder="Branch Name"></td>
                                                <td><input class="form-control" type="number" minlength="12" value="" name="accountno[]"  required placeholder="Account No."><input type="hidden" name="bnksavetype[]"  value='add'></td> -->
                                        </tr>
                                    </tbody>
                                </table>
                                <button class="btn-sm btn-danger removeTable mb-3" style="display:none;"><i class="fa fa-minus"></i></button>
                            </div>
                            <div id="tableContainer"></div>
                            <!-- <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4> Business Plan Preparation </h4>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <button name="add_business_plan" class="btn btn-success">+</button>
                                        </div>
                                    </div>
                                </div> -->

                            <!-- <button type="button" name="submit1" class="btn btn-danger text-right mb-3">Submit</button> -->
                            <input type="submit" class="btn btn-primary" name="submit1" value="Submit">
                        </form>


                        <script>
                            $(document).ready(function () {
                                // Add new table
                                $("#addTable").click(function () {
                                    var newTable = $(".table-wrapper:first").clone(); // Clone the first table
                                    newTable.find("input").val(""); // Clear input fields
                                    $("#tableContainer").append(newTable); // Append to container
                                    toggleRemoveButton();
                                });

                                //Remove table
                                function toggleRemoveButton() {
                                    $(".table-wrapper").each(function (index) {
                                        if (index >= 1) {
                                            $(this).find(".removeTable").show(); // Show for second table onwards
                                        } else {
                                            $(this).find(".removeTable").hide(); // Hide for the first table
                                        }
                                    });
                                }

                                // Initial check for the remove button
                                toggleRemoveButton();

                                $(document).on("click", ".removeTable", function () {
                                    if ($(".table-wrapper").length > 1) {
                                        $(this).closest(".table-wrapper").remove();
                                        toggleRemoveButton();
                                    } else {
                                        alert("At least one table must remain!");
                                    }
                                });

                                $(document).on('change', '.categoryname', function () {
                                    var categoryname = $(this).val();
                                    var $row = $(this).closest('.table-wrapper');
                                    var $commodityDropdown = $row.find('.commoditynewname');

                                    if (categoryname !== '') {
                                        $.ajax({
                                            url: "<?php echo base_url(); ?>pg/fetchcommodity",
                                            method: "POST",
                                            data: { categoryname: categoryname },
                                            success: function (data) {
                                                $commodityDropdown.html(data); // Populate only this row's commodity dropdown
                                            }
                                        });
                                    } else {
                                        $commodityDropdown.html('<option value="">Select Commodity</option>');
                                    }
                                });
                            });
                        </script>

                        <script>
                            $(document).ready(function(){
                           
                                $('#categoryname').change(function(){
                                    var categoryname = $('#categoryname').val();
                                    // alert(categoryname);
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

                        <script>
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
                                                $('#grampanchayatname').html(data);
                                            }
                                        });
                                    }
                                    else {
                                        $('#grampanchayatname').html('<option value="">Select Gram Pachayat</option>');
                                    }
                                });
                                $('#grampanchayatname').change(function () {
                                    var grampanchayat = $('#grampanchayatname').val();
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
                        </script>


                        <div>
                        </div>
                    </div>
                </div>
            </div>
</section>