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
                                <h4 class="m-0">Member Transaction Details</h4>
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
                        <?php if ($this->uri->segment(2) < '2') { ?>
                        <form class="row pr-4 pl-4" method="post">
                            <div class="col-md-12">
                                <div class="row">

                                    <table id="bankdetailsfields" class="table p-3 table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col" width="10%">District*</th>
                                                <th scope="col" width="10%">Block*</th>
                                                <th scope="col" width="10%">Gram Panchayat*</th>
                                                <th scope="col" width="10%">village*</th>
                                                <th scope="col" width="10%">Name of Producer Group*</th>
                                                <th scope="col" width="10%">Name of Member</th>
                                                <th scope="col" width="10%">Financial Year*</th>
                                                <th scope="col" width="10%">Month*</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
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
                                                    <select class="form-control" name="producer_group" id="producer_group">
                                                        <option value="">Name of Producer Group </option>
                                                        <?php foreach ($producergroup as $val) { ?>
                                                            <option option="<?php echo ($val['pgname']); ?>">
                                                                <?php echo ($val['pgname']); ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <!-- <select class="form-control" required name="member_name">
                                                        <option value="">Name of Member </option>
                                                        <?php foreach ($producergroup as $val) { ?>
                                                            <option option="<?php echo ($val['pgname']); ?>">
                                                                <?php echo ($val['pgname']); ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select> -->
                                                    <select class="form-control" id="member_name" name="member_name" >
                                                        <option value="">Name of Member</option>
                                                    </select>

                                                    <script>
                                                        $(document).ready(function() {
                                                            $('#producer_group').on('change', function() {
                                                                var pgname = $(this).val();

                                                                if (pgname) {
                                                                    $.ajax({
                                                                        url:"<?php echo base_url(); ?>member-transaction/get-members-by-id",
                                                                        type: "POST",
                                                                        data: { pgname: pgname },
                                                                        dataType: "json",
                                                                        success: function(response) {
                                                                            console.log('member transaction',response);
                                                                            $('#member_name').empty().append('<option value="">Name of Member</option>');
                                                                            $.each(response, function(index, member) {
                                                                                $('#member_name').append('<option value="' + member.name + '">' + member.name + '</option>');
                                                                            });
                                                                        },
                                                                        error: function() {
                                                                            alert('Failed to fetch members.');
                                                                        }
                                                                    });
                                                                } else {
                                                                    $('#member_name').empty().append('<option value="">Name of Member</option>');
                                                                }
                                                            });
                                                        });

                                                    </script>
                                                </td>
                                                <td>
                                                    <select class="form-control" required name="financial_year">
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
                                                    <select class="form-control" name="month">
                                                        <option value="">Select Month </option>
                                                        <option value="january">January</option>
                                                        <option value="february">February</option>
                                                        <option value="march">March</option>
                                                        <option value="april">April</option>
                                                        <option value="may">May</option>
                                                        <option value="june">June</option>
                                                        <option value="july">July</option>
                                                        <option value="august">august</option>
                                                        <option value="september">Semptember</option>
                                                        <option value="october">October</option>
                                                        <option value="november">November</option>
                                                        <option value="december">December</option>
                                                    </select>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <input type="hidden" name="stepno" value="1">
                                <input type="hidden" name="isedit" value="1">
                                <input type="hidden" name="pgid"
                                    value="<?php echo ($this->session->userdata('pgid') == true) ? $this->session->userdata('pgid') : ''; ?>">
                                <input type="submit" class="btn btn-primary" name="submit1" value="Next">
                            </div>
                        </form>
                        <?php } ?>

                        <?php if ($this->uri->segment(2) == '2') { ?>
                        <form method="post">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4> Member Transaction Details </h4>
                                    </div>
                                    <div class="col-md-6 text-right"><a href="#" id="addTable"
                                            class="btn-sm btn-danger"><i class="fa fa-plus"></i></a></div>
                                </div>
                            </div><br>

                            <?php if(count($member_transaction_data) == 0){ ?>
                            <div class="monthly-business-table-set">
                                <table id="bankdetailsfields" class="table p-3 table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Sub-category</th>
                                            <th>Commodity Name</th>
                                            <th>Volume of Production(Qtl/Ltr/Nos)</th>
                                            <th>Volume of Sale(Qtl/Ltr/Nos)</th>
                                            <th>Rate of Commodity(Lakh)</th>
                                            <th>Total Expenditure(Lakh)</th>
                                            <th>Income Profit(Lakh)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select class="form-control form-control categoryname" name="categoryname[]" id="categoryname">
                                                    <option value="">Select Category</option>
                                                    <?php foreach (array_filter($categories) as $categoryname) { ?>
                                                        <option value="<?php echo $categoryname['category']; ?>" <?php if ($member_transaction_data['category'] == $categoryname['category']) {
                                                                echo 'selected="selected"';
                                                            } ?>>
                                                            <?php echo ucfirst($categoryname['category']) ?></option>
                                                    <?php } ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="sub_category[]">
                                                    <option value="">Select Sub-Category</option>
                                                    <option value="primary" <?php if ($member_transaction_data['subcategory'] == 'primary') echo 'selected'; ?>>Primary</option>
                                                    <option value="secondary" <?php if ($member_transaction_data['subcategory'] == 'secondary') echo 'selected'; ?>>Secondary</option>
                                                    <option value="tertiary" <?php if ($member_transaction_data['subcategory'] == 'tertiary') echo 'selected'; ?>>Tertiary</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control form-control commoditynewname" name="commodityname[]" id="commoditynewname">
                                                    <option value="">Select Commodity</option>
                                                    <option <?php if($commodityname != ''){ echo 'selected="selected"';  } ?>><?php echo ucfirst($commodityname) ?></option>				 
                                                </select>
                                            </td>
                                            <td>
                                                <input type="number" name="production_volume[]" class="form-control"
                                                    placeholder="Volume of Production" step="0.01" value="<?php echo $member_transaction_data['volume_of_production']; ?>" />
                                                <select class="form-control mt-1" name="production_unit[]">
                                                    <option value=""> Units</option>
                                                    <option value="qtl" <?php if ($mtd['qtl'] == 'qtl') echo 'selected'; ?>>QTL</option>
                                                    <option value="ltr" <?php if ($mtd['ltr'] == 'ltr') echo 'selected'; ?>>LTR</option>
                                                    <option value="num" <?php if ($mtd['num'] == 'num') echo 'selected'; ?>>NUM</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="number" name="sale_volume[]" class="form-control"
                                                    placeholder="Volume of Sale" step="0.01" value="<?php echo $member_transaction_data['volume_of_sale']; ?>" />
                                                <select class="form-control mt-1" name="sale_unit[]">
                                                    <option value=""> Units</option>
                                                    <option value="qtl" <?php if ($mtd['qtl'] == 'qtl') echo 'selected'; ?>>QTL</option>
                                                    <option value="ltr" <?php if ($mtd['ltr'] == 'ltr') echo 'selected'; ?>>LTR</option>
                                                    <option value="num" <?php if ($mtd['num'] == 'num') echo 'selected'; ?>>NUM</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="number" name="commodity_rate[]" class="form-control"
                                                step="0.01" placeholder="100000" value="<?php echo $member_transaction_data['rate_of_commodity']; ?>" />
                                            </td>
                                            <td>
                                                <input type="number" name="total_expenditure[]" class="form-control" step="0.01"
                                                    placeholder="100000" value="<?php echo $member_transaction_data['total_expenditure']; ?>" />
                                            </td>
                                            <td>
                                                <input type="number" name="income_profit[]" class="form-control" step="0.01"
                                                    placeholder="100000" value="<?php echo $member_transaction_data['income_profit']; ?>" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button class="btn-sm btn-danger removeTable mb-3" style="display:none;"><i class="fa fa-minus"></i></button>
                                <input type="hidden" name="pgssavetype[]" value="add">
                            </div>
                            <?php 
                                }else{ 
                                    $i = 1;
                                    foreach($member_transaction_data as $mtd){
                            ?>
                            <div class="monthly-business-table-set">
                                <table id="bankdetailsfields" class="table p-3 table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Sub-category</th>
                                            <th>Commodity Name</th>
                                            <th>Volume of Production(Qtl/Ltr/Nos)</th>
                                            <th>Volume of Sale(Qtl/Ltr/Nos)</th>
                                            <th>Rate of Commodity(Lakh)</th>
                                            <th>Total Expenditure(Lakh)</th>
                                            <th>Income Profit(Lakh)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select class="form-control form-control categoryname" name="categoryname[]" id="categoryname">
                                                    <option value="">Select Category</option>
                                                    <?php foreach (array_filter($categories) as $categoryname) { ?>
                                                        <option value="<?php echo $categoryname['category']; ?>" <?php if ($mtd['category'] == $categoryname['category']) {
                                                                echo 'selected="selected"';
                                                            } ?>>
                                                            <?php echo ucfirst($categoryname['category']) ?></option>
                                                    <?php } ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="sub_category[]">
                                                    <option value="">Select Sub-Category</option>
                                                    <option value="primary" <?php if ($mtd['subcategory'] == 'primary') echo 'selected'; ?>>Primary</option>
                                                    <option value="secondary" <?php if ($mtd['subcategory'] == 'secondary') echo 'selected'; ?>>Secondary</option>
                                                    <option value="tertiary" <?php if ($mtd['subcategory'] == 'tertiary') echo 'selected'; ?>>Tertiary</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control form-control commoditynewname" name="commodityname[]" id="commoditynewname">
                                                    <option value="">Select Commodity</option>
                                                    <option <?php if($commodityname != ''){ echo 'selected="selected"';  } ?>><?php echo ucfirst($commodityname) ?></option>				 
                                                </select>
                                            </td>
                                            <td>
                                                <input type="number" name="production_volume[]" class="form-control"
                                                    placeholder="Volume of Production" step="0.01" value="<?php echo $mtd['volume_of_production']; ?>" />
                                                <select class="form-control mt-1" name="production_unit[]">
                                                    <option value=""> Units</option>
                                                    <option value="qtl" <?php if ($mtd['unit_of_production'] == 'qtl') {echo 'selected="selected"';} ?>>QTL</option>
                                                    <option value="ltr" <?php if ($mtd['unit_of_production'] == 'ltr') {echo 'selected="selected"';} ?>>LTR</option>
                                                    <option value="num" <?php if ($mtd['unit_of_production'] == 'num') {echo 'selected="selected"';} ?>>NUM</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="number" name="sale_volume[]" class="form-control"
                                                    placeholder="Volume of Sale" step="0.01" value="<?php echo $mtd['volume_of_sale']; ?>" />
                                                <select class="form-control mt-1" name="sale_unit[]">
                                                    <option value=""> Units</option>
                                                    <option value="qtl" <?php if ($mtd['unit_of_production'] == 'qtl') {echo 'selected="selected"';} ?>>QTL</option>
                                                    <option value="ltr" <?php if ($mtd['unit_of_production'] == 'ltr') {echo 'selected="selected"';} ?>>LTR</option>
                                                    <option value="num" <?php if ($mtd['unit_of_production'] == 'num') {echo 'selected="selected"';} ?>>NUM</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="number" name="commodity_rate[]" class="form-control"
                                                step="0.01" placeholder="100000" value="<?php echo $mtd['rate_of_commodity']; ?>" />
                                            </td>
                                            <td>
                                                <input type="number" name="total_expenditure[]" class="form-control" step="0.01"
                                                    placeholder="100000" value="<?php echo $mtd['total_expenditure']; ?>" />
                                            </td>
                                            <td>
                                                <input type="number" name="income_profit[]" class="form-control" step="0.01"
                                                    placeholder="100000" value="<?php echo $mtd['income_profit']; ?>" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <input type="hidden" name="pgssavetype[]"
                                    value="update">
                                <input type="hidden" name="pgsupportid[]"
                                    value="<?php echo $mtd['id']; ?>">
                                <button class="btn-sm btn-danger removeTable mb-3" style="display:none;"><i class="fa fa-minus"></i></button>
                            </div>
                            <?php 
                                    } 
                                    $i++;
                                }
                            ?>
                            <div id="tableContainer"></div>

                            <div class="col-md-12 text-right"> 
								<a class="btn btn-primary" onclick="javascript:history.back()"
									style="color:#fff;">Previous</a>
								<input type="hidden" name="stepno2" value="2">
								<input type="hidden" name="isedit" value="1">
								<input type="hidden" name="pgid"
									value="<?php echo ($this->session->userdata('pgid') == true) ? $this->session->userdata('pgid') : ''; ?>">
								<input type="submit" class="btn btn-primary" name="submit1" value="Next">
                                <br /><br />
							</div>
                        </form>
                        <?php } ?>

                        <?php if ($this->uri->segment(2) == '3') { ?>
                        <form method="post">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4> Payment from PG </h4>
                                    </div>
                                </div>
                            </div><br>
                            <div class="table-wrapper">
                                <table id="bankdetailsfields" class="table p-3 table-bordered ">
                                    <tbody>
                                        <tr>
                                            <th width="80%">Current Month Payment (Rs)</th>
                                            <td><input type="number" name="currentmonthpayment" class="form-control" step="0.01" value="<?php echo $member_transaction_data_current_month['current_month_payment'] ?>" /></td>
                                        </tr>
                                        <tr>
                                            <th width="80%">Cumulative Payment (Rs)</th>
                                            <td><input type="number" name="cumulativepayment" class="form-control" step="0.01" value="<?php echo $member_transaction_data_current_month['cumulative_payment'] ?>" /></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- <button class="btn btn-danger removeTable mb-3" style="display:none;">-</button> -->
                            </div>

                            <div class="col-md-12 text-right mb-1"> <br />
								<a class="btn btn-primary" onclick="javascript:history.back()"
									style="color:#fff;">Previous</a>
								<input type="hidden" name="stepno3" value="3">
								<input type="hidden" name="isedit" value="1">
								<input type="hidden" name="pgid"
									value="<?php echo ($this->session->userdata('pgid') == true) ? $this->session->userdata('pgid') : ''; ?>">
								<input type="submit" class="btn btn-primary" name="submit1" value="Next">
							</div><br>
                        </form>
                        <?php } ?>

                        <?php if ($this->uri->segment(2) == '4') { ?>
                        <form method="post">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4> Payment Due from PG </h4>
                                    </div>
                                </div>
                            </div><br>
                            <div class="table-wrapper">
                                <table id="bankdetailsfields" class="table p-3 table-bordered ">
                                    <tbody>
                                        <tr>
                                            <th width="80%">Due Payment (Rs)</th>
                                            <td><input type="number" name="due_payment" class="form-control" step="0.01" value="<?php echo $member_transaction_data_current_month['due_payment']; ?>" /></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button class="btn btn-danger removeTable mb-3" style="display:none;">-</button>
                            </div>
                            <div class="col-md-12 text-right mb-1"> <br />
								<a class="btn btn-primary" onclick="javascript:history.back()"
									style="color:#fff;">Previous</a>
								<input type="hidden" name="stepno4" value="4">
								<input type="hidden" name="isedit" value="1">
								<input type="hidden" name="pgid"
									value="<?php echo ($this->session->userdata('pgid') == true) ? $this->session->userdata('pgid') : ''; ?>">
								<input type="submit" class="btn btn-primary" name="submit1" value="Next">
							</div><br>
                        </form>
                        <?php } ?>

                        <?php if($this->uri->segment(2) == '5') { ?>
                        <form class="pr-4 pl-4" method="post">
                            <div class="col-md-12">
                                <div class="row">
                                    <h4 class="mt-4"><strong>Member Transaction Details:</strong></h4><br>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th width="40%">PG Name</th>
                                                <td><?php echo $member_transaction_data[0]['pg_name']; ?></td>
                                            </tr>
                                            <tr>
                                                <th width="40%">Member Name</th>
                                                <td><?php echo $member_transaction_data[0]['member_name'] ?? '-'; ?></td>
                                            </tr>
                                            <?php 
                                                $i = 1;
                                                foreach($member_transaction_data as $mtd){
                                            ?>
                                            <tr>
                                                <th width="40%">#</th>
                                                <td> <strong><?php echo $i++; ?></strong> </td>
                                            </tr>
                                            <tr>
                                                <th width="40%">Category</th>
                                                <td><?php echo htmlspecialchars(ucfirst($mtd['category']) ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="40%">Sub-Category</th>
                                                <td>
                                                    <?php echo htmlspecialchars(ucfirst($mtd['subcategory']) ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="40%">Commodity Name</th>
                                                <td>
                                                    <?php echo htmlspecialchars(ucfirst($mtd['commodity']) ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="40%">Volume of Production(Qtl/Ltr/Nos)</th>
                                                <td>
                                                    <?php echo htmlspecialchars(ucfirst($mtd['volume_of_production']) ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
                                                </td>
                                            </tr> 
                                            <tr>
                                                <th width="40%">Volume of Sale(Qtl/Ltr/Nos)</th>
                                                <td>
                                                    <?php echo htmlspecialchars(ucfirst($mtd['volume_of_sale']) ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
                                                </td>
                                            </tr> 
                                            <tr>
                                                <th width="40%">Rate of Commodity(Lakh)</th>
                                                <td>
                                                    <?php echo htmlspecialchars(ucfirst($mtd['rate_of_commodity']) ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
                                                </td>
                                            </tr> 
                                            <tr>
                                                <th width="40%">Total Expenditure(Lakh)</th>
                                                <td>
                                                    <?php echo htmlspecialchars(ucfirst($mtd['total_expenditure']) ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
                                                </td>
                                            </tr> 
                                            <tr>
                                                <th width="40%">Income Profit(Lakh)</th>
                                                <td>
                                                    <?php echo htmlspecialchars(ucfirst($mtd['income_profit']) ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
                                                </td>
                                            </tr> 
                                            <?php } ?>
                                        </tbody>
                                    </table>

                                    <h4 class="mt-4"><strong>Payment from PG:</strong></h4><br>
                                    <table class="table table-bordered">
                                        <tbody>

                                            <tr>
                                                <th width="40%">Current Month Payment</th>
                                                <td><?php echo htmlspecialchars(ucfirst($member_transaction_data_current_month['current_month_payment']) ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="40%">Cumulative Payment</th>
                                                <td>
                                                    <?php echo htmlspecialchars(ucfirst($member_transaction_data_current_month['cumulative_payment']) ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>

                                    <h4 class="mt-4"><strong>Payment due from PG:</strong></h4><br>
                                    <table class="table table-bordered">
                                        <tbody>

                                            <tr>
                                                <th width="40%">Due Payment</th>
                                                <td><?php echo htmlspecialchars(ucfirst($member_transaction_data_current_month['due_payment']) ?? 'N/A', ENT_QUOTES, 'UTF-8'); ?>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                            <div class="col-md-12 text-right mb-1">
								<a class="btn btn-primary" onclick="javascript:history.back()"
									style="color:#fff;">Previous</a>
                                <input type="hidden" name="stepno5" value="5">
								<input type="hidden" name="isedit" value="1">
								<input type="submit" class="btn btn-primary" style="background:#2B78E4;" name="submit1" value="Submit">
								
							</div><br>
                        </form>
                        <?php } ?>


                        <script>
                            $(document).ready(function () {
                                // Add new table
                                $("#addTable").click(function () {
                                    var newTable = $(".monthly-business-table-set:first").clone(); // Clone the first table
                                    newTable.find("input").val(""); // Clear input fields
                                    $("#tableContainer").append(newTable); // Append to container
                                    toggleRemoveButton();
                                });

                                //Remove table
                                function toggleRemoveButton() {
                                    $(".monthly-business-table-set").each(function (index) {
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
                                    if ($(".monthly-business-table-set").length > 1) {
                                        $(this).closest(".monthly-business-table-set").remove();
                                        toggleRemoveButton();
                                    } else {
                                        alert("At least one table must remain!");
                                    }
                                });

                            });
                        </script>

                        <script>
                            $(document).ready(function () {
                                $(document).on('change', '.categoryname', function () {
                                    
                                    var categoryname = $(this).val();
                                    var $row = $(this).closest('.monthly-business-table-set');
                                    var $commodityDropdown = $row.find('.commoditynewname');

                                    if (categoryname !== '') {
                                        // alert('hello');
                                        $.ajax({
                                            url: "<?php echo base_url(); ?>pg/fetchcommodity",
                                            method: "POST",
                                            data: { categoryname: categoryname },
                                            success: function (data) {
                                                // console.log('commodity - ', data);
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