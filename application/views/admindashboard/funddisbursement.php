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
                                <h4 class="m-0">Fund Disbursement</h4>
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
                                                    <select class="form-control" required name="financial_year" id="financial_year">
                                                        <option value="">Select Year</option>
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
                                                    <select class="form-control" name="month" id="month" required>
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
                                                <!-- <td>
                                                    <select class="custom-select" id="grampachayatname" name="grampanchayatname">
                                                        <option value="">Choose...</option>
                                                        <?php if ($grampanchayatname == true) {
                                                            echo ' <option value="' . $grampanchayatname . '"  selected="selected">' . ucfirst($grampanchayatname) . '</option>';
                                                        } ?>
                                                    </select>
                                                </td> -->
                                                <td>
                                                    <select class="form-control" name="producer_group" id="producer_group" required>
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

                            <script>
                                $(document).ready(function() {
                                    function fetchEditFields() {
                                        var fy = $('#financial_year').val();
                                        var month = $('#month').val();
                                        var gp = $('#grampanchayatname').val();
                                        var pg = $('#producer_group').val();

                                        if (fy && month && gp && pg) {
                                            $.ajax({
                                                url: '<?= base_url('fund-disbursement') ?>',
                                                type: 'POST',
                                                data: {
                                                    financial_year: fy,
                                                    month: month,
                                                    gram_panchayat: gp,
                                                    producer_group: pg
                                                },
                                                dataType: 'json',
                                                success: function(response) {
                                                    console.log(response);
                                                    if (response.success) {
                                                        $('#amount').val(response.data.SRPGamount);
                                                        $('#source_of_fund').val(response.data.SRPGsof);
                                                        $('#type_of_fund').val(response.data.SRPGtof);
                                                        $('#date').val(response.data.SRPGdate);
                                                        $('#purpose').val(response.data.SRPGpurpose);
                                                        $('#payment_mode_by_pg').val(response.data.PMPGpaymentmode);
                                                        $('#PMPG_source_of_fund').val(response.data.PMPGsof);
                                                        $('#repayment_of_principles').val(response.data.PMPGrp);
                                                        $('#rate_of_interest').val(response.data.PMPGinterest_rate);
                                                        $('#monthly_emi').val(response.data.PMPGmonthlyemi);
                                                        $('#loan_duration').val(response.data.loanduration);
                                                        $('#date_of_commencement').val(response.data.commencement_date);
                                                        $('#date_of_completion').val(response.data.completion_date);
                                                        $('#total_outstanding_amount').val(response.data.PMPGoutstandingamt);
                                                        $('#toal_loan_paid_amount').val(response.data.PMPGtotalloanpaidamt);
                                                        
                                                        // $('#editFields').show();
                                                    } else {
                                                        alert('No records found.');
                                                        // $('#editFields').hide();
                                                    }
                                                }
                                            });
                                        }
                                    }

                                    $('#financial_year, #month, #grampanchayatname, #producer_group').change(function() {
                                        fetchEditFields();
                                    });
                                });

                            </script>

                            <div class="col-md-12">
                                <div class="row">
                                    <h4> Funding Details: </h4><br><br>

                                    <table id="bankdetailsfields" class="table p-3 table-bordered table-striped">
                                        <thead>
                                            <tr>

                                                <th scope="col">Source of Fund</th>
                                                <th scope="col">Type of Fund</th>
                                                <th scope="col">Loan Amount (in Lakh)</th>
                                                <th scope="col">Date of Receipt</th>
                                                <th scope="col">Purpose</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <select class="form-control" required name="source_of_fund" id="source_of_fund">
                                                        <option value="">Select Source of Fund</option>
                                                        <option value="clf">CLF</option>
                                                        <option value="bank">Bank</option>
                                                        <option value="others">Others</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control" name="type_of_fund" id="type_of_fund">
                                                        <option value="">Select Type of Fund </option>
                                                        <option option="working_capital">Working Capital</option>
                                                        <option option="infrstructure">Infrastructure Fund </option>
                                                        <option option="others">Others</option>
                                                    </select>
                                                </td>
                                                <td> <input type="Number" step="0.01" class="form-control" 
                                                        name="amount" placeholder="Loan amount" id="amount" /> </td>
                                                <td> <input class="form-control" type="date" name="date" id="date" /> </td>
                                                <td> <input class="form-control" type="text" name="purpose" id="purpose"
                                                        placeholder="Purpose" /> </td>

                                            </tr>
                                        </tbody>
                                    </table>

                                    <h4> Loan Repayment Details: </h4><br><br>

                                    <table id="bankdetailsfields" class="table p-3 table-bordered table-striped">
                                        <thead>
                                            <tr>

                                                <th scope="col" width="10%">Mode of payment by PG</th>
                                                <th scope="col" width="10%">Rate of Interest (%)</th>
                                                <th scope="col" width="10%">Loan Duration (Months)</th>
                                                <!-- <th scope="col">Source of Fund</th> -->
                                                <th scope="col" width="15%">Principle Amount Paid (Rs)</th>
                                                <!-- <th scope="col">Monthly EMI (Rs)</th> -->
                                                <th scope="col" width="10%">Interest Amount Paid (Rs)</th>
                                                <!-- <th scope="col">Repayment of Principal (Rs)</th> -->
                                                <th scope="col" width="10%">Total Outstanding Amount (Rs)</th>
                                                <th scope="col" width="15%">Total Loan Paid Amount (Rs)</th>
                                                <th scope="col" width="10%">Date of Commencement</th>
                                                <th scope="col" width="10%">Date of Completion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <!-- <input type="text" class="form-control" name="payment_mode_by_pg" id="payment_mode_by_pg" /> -->
                                                    <select class="form-control" name="payment_mode_by_pg" id="payment_mode_by_pg">
                                                        <option value="">Select Payment Mode</option>
                                                        <option value="cash">Cash</option>
                                                        <option value="cheque">Cheque</option>
                                                        <option value="digital">Digital</option>
                                                    </select>
                                                </td>
                                                <td><input type="Number" step="0.01" class="form-control" name="rate_of_interest" id="rate_of_interest" placeholder="Rate of interest" /> </td>
                                                <td><input type="Number" class="form-control" name="loan_duration" id="loan_duration" placeholder="Loan Duration" /> </td>
                                                <!-- <td><select class="form-control" required name="PMPG_source_of_fund" id="PMPG_source_of_fund">
                                                        <option value="">Select Source of Fund</option>
                                                        <option value="clf">CLF</option>
                                                        <option value="bank">Bank</option>
                                                        <option value="others">Others</option>
                                                    </select>
                                                </td> -->
                                                <td><input type="Number" step="0.01" class="form-control" name="repayment_of_principles" id="repayment_of_principles" placeholder="Principle Amount" /></td>
                                                <td><input type="Number" step="0.01" class="form-control" name="monthly_emi" id="monthly_emi" placeholder="Interest Amount" /></td>
                                                <td><input type="Number" step="0.01" class="form-control" name="total_outstanding_amount" id="total_outstanding_amount" placeholder="Total Outstanding Amount" /></td>
                                                <td><input type="Number" step="0.01" class="form-control" name="toal_loan_paid_amount" id="toal_loan_paid_amount" placeholder="Total Loan Paid" /></td>
                                                <td><input type="date" class="form-control" name="date_of_commencement" id="date_of_commencement" /></td>
                                                <td><input type="date" class="form-control" name="date_of_completion" id="date_of_completion" /> </td>

                                            </tr>
                                        </tbody>
                                    </table>

                                    <input type="submit" class="btn btn-danger" name="submit1" value="Submit" />
                                </div>
                        </form>

                        <div>
                        </div>
                    </div>
                </div>
            </div>

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
</section>