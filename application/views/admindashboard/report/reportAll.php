<section>
    <div class="container-fluid">
        <div class="row list-view">
            <div class="col-md-2">
                <?php $this->load->view('include/sidebar'); ?>
            </div>

            <div class="col-md-10">

            <!-- <?php if ($this->uri->segment(2) == '' || $this->uri->segment(2) == '0' || $this->uri->segment(2) == '1') { ?>
                <input type="hidden" name="stepno" value="1" />
                <input type="submit" class="btn btn-primary" name="submit1" value="Producer Group Report" />
            <?php } ?> -->

            <div class="row mr-2">
                <div class="col-md-3"><button type="button" style="width:100%"
                        class="btn btn-<?php echo $this->uri->segment(2) == '1' ? 'success' : 'primary' ?>"
                        onclick="window.location.href='<?php echo base_url(); ?>reports/1'">Producer Group Report</button>
                </div>
                <div class="col-md-3"><button type="button" style="width:100%"
                        class="btn btn-<?php echo $this->uri->segment(2) == '2' ? 'success' : 'primary' ?>"
                        onclick="window.location.href='<?php echo base_url(); ?>reports/2'">Member Details Report</button>
                </div>
            </div>

            <?php if ($this->uri->segment(2) == '1') { ?>
                <div class="row mt-4 mr-2">
                    <div class="col-md-2" ><button type="button" style="width:100%"
                            class="btn btn-<?php echo ($this->input->get('tltype') == 'commodities') ? 'success' : 'primary'; ?>"
                            onclick="window.location.href='<?php echo base_url(); ?>reports/1?tltype=commodities'">Commodities Details</button>
                    </div>
                    <div class="col-md-2"><button type="button" style="width:100%"
                            class="btn btn-<?php echo ($this->input->get('tltype') == 'valueaddition') ? 'success' : 'primary'; ?>"
                            onclick="window.location.href='<?php echo base_url(); ?>reports/1?tltype=valueaddition'">Value Addition</button>
                    </div>
                    <div class="col-md-2"><button type="button" style="width:100%"
                            class="btn btn-<?php echo ($this->input->get('tltype') == 'businessummary') ? 'success' : 'primary'; ?>"
                            onclick="window.location.href='<?php echo base_url(); ?>reports/1?tltype=businessummary'">Business Summary</button>
                    </div>
                    <div class="col-md-2"><button type="button" style="width:100%"
                            class="btn btn-<?php echo ($this->input->get('tltype') == 'financialtransaction') ? 'success' : 'primary'; ?>"
                            onclick="window.location.href='<?php echo base_url(); ?>reports/1?tltype=financialtransaction'">Financial Transaction</button>
                    </div>
                    <div class="col-md-2"><button type="button" style="width:100%"
                            class="btn btn-<?php echo ($this->input->get('tltype') == 'trainingrecords') ? 'success' : 'primary'; ?>"
                            onclick="window.location.href='<?php echo base_url(); ?>reports/1?tltype=trainingrecords'">Training Records</button>
                    </div>
                    <div class="col-md-2"><button type="button" style="width:100%"
                            class="btn btn-<?php echo ($this->input->get('tltype') == 'booksrecords') ? 'success' : 'primary'; ?>"
                            onclick="window.location.href='<?php echo base_url(); ?>reports/1?tltype=booksrecords'">Books Records</button>
                    </div>
                </div>
            <?php } ?>

            <?php if ($this->uri->segment(2) == '2') { ?>
                <div class="row mt-4 mr-2">
                    <div class="col-md-2"><button type="button" style="width:100%"
                            class="btn btn-<?php echo ($this->input->get('tltype') == 'memberdetails') ? 'success' : 'primary'; ?>"
                            onclick="window.location.href='<?php echo base_url(); ?>reports/2?tltype=memberdetails'">Member Details</button>
                    </div>
                    <div class="col-md-2"><button type="button" style="width:100%"
                            class="btn btn-<?php echo ($this->input->get('tltype') == 'commoditydetails') ? 'success' : 'primary'; ?>"
                            onclick="window.location.href='<?php echo base_url(); ?>reports/2?tltype=commoditydetails'">Commodities Details</button>
                    </div>
                    <div class="col-md-2"><button type="button" style="width:100%"
                            class="btn btn-<?php echo ($this->input->get('tltype') == 'saletopg') ? 'success' : 'primary'; ?>"
                            onclick="window.location.href='<?php echo base_url(); ?>reports/2?tltype=saletopg'">Sale to PG</button>
                    </div>
                </div>
            <?php } ?>

            <!-- Reports -->
            <!-- Producer Group Report -->
            <?php if ($this->input->get('tltype') == true && $this->input->get('tltype') == 'commodities') { ?>
                <div class="card mt-3">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="m-0">Commodities Details Report</h4>
                        <button class="btn btn-success" onclick="exportTableToExcel('commodities_details_report', 'results')">Export to Excel</button>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="row">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>District</th>
                                            <th>Block</th>
                                            <th>GP</th>
                                            <th>Producer Group</th>
                                            <th>CLF Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select class="form-control" id="dist" name="dist">
                                                    <option value="">-- Select District --</option>
                                                    <?php foreach ($districts as $district): ?>
                                                        <option value="<?php echo $district; ?>" <?php echo (!empty($userdetails['district']) && $userdetails['district'] == $district) ? 'selected' : ''; ?>>
                                                            <?php echo $district; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" id="block" name="block">
                                                    <option value="">-- Select Block --</option>
                                                    <?php if (!empty($userdetails['block'])): ?>
                                                        <option value="<?php echo $userdetails['block']; ?>" selected>
                                                            <?php echo $userdetails['block']; ?>
                                                        </option>
                                                    <?php endif; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="gram_panchayat">
                                                    <option value="">Select Gram Panchayat</option>
                                                    <?php foreach ($grampanchayat as $val): ?>
                                                        <option value="<?php echo $val['grampanchayat']; ?>">
                                                            <?php echo $val['grampanchayat']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="producer_group">
                                                    <option value="">Name of Producer Group</option>
                                                    <?php foreach ($producergroup as $val): ?>
                                                        <option value="<?php echo $val['pgname']; ?>">
                                                            <?php echo $val['pgname']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="clf">
                                                    <option value="">Select CLF Name</option>
                                                    <?php foreach ($clf as $val): ?>
                                                        <option value="<?php echo $val['clf']; ?>">
                                                            <?php echo $val['clf']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Model CLF</th>
                                            <th>Commodity Category</th>
                                            <th>Sub-category</th>
                                            <th>Commodity Name</th>
                                            <th>Date Range</th>
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
                                                <select class="form-control" name="category" id="categoryname">
                                                    <option value="">Select Category</option>
                                                    <?php foreach (array_filter($categories) as $categoryname): ?>
                                                        <option value="<?php echo $categoryname['category']; ?>">
                                                            <?php echo ucfirst($categoryname['category']); ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="sub_category">
                                                    <option value="">Sub-Category</option>
                                                    <option value="primary">Primary</option>
                                                    <option value="secondary">Secondary</option>
                                                    <option value="tertiary">Tertiary</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control form-control" name="commodityname" id="commoditynewname">
                                                    <option value="">Select Commodity</option>
                                                    <option <?php if($commodityname != ''){ echo 'selected="selected"';  } ?> value="<?php echo $commodityname ?>"><?php echo ucfirst($commodityname) ?></option>				 
                                                </select>
                                            </td>
                                            <td>
                                                <input type="date" name="date_from" class="form-control" />
                                                to
                                                <input type="date" name="date_to" class="form-control" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="text-right">
                                <input type="hidden" name="CommoditiesDetailsReport" value="1">
                                <input type="hidden" name="pgid" value="<?php echo $this->session->userdata('pgid') ?? ''; ?>">
                                <input type="submit" class="btn btn-primary" name="filters" value="Generate Report">
                            </div>
                        </form>

                        <table class="table table-bordered table-striped mt-3" id="commodities_details_report">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>PG Name</th>
                                    <th>Commodity Name</th>
                                    <th>Commodity Category</th>
                                    <th>President Name</th>
                                    <th>Secretary Name</th>
                                    <th>Treasurer Name</th>
                                    <th>District</th>
                                    <th>Block</th>
                                    <th>CLF Name</th>
                                    <th>Model CLF</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if (!empty($results) && count($results) > 0){
                                    $i = 1;
                                    foreach($results as $val){
                                ?>
                                    <tr>
                                        <td><?php echo $i++; ?> </td>
                                        <td><?php echo $val['pgname'] ? $val['pgname'] : '-'; ?></td>                   
                                        <td><?php echo $val['commodityname'] ? $val['commodityname'] : '-'; ?></td>                   
                                        <td><?php echo $val['category'] ? $val['category'] : '-'; ?></td>                   
                                        <td><?php echo $val['president_name'] ? $val['president_name'] : '-'; ?></td>                   
                                        <td><?php echo $val['secretary_name'] ? $val['secretary_name'] : '-'; ?></td>                   
                                        <td><?php echo $val['treasurer_name'] ? $val['treasurer_name'] : '-'; ?></td>                   
                                        <td><?php echo $val['district'] ? $val['district'] : '-'; ?></td>                   
                                        <td><?php echo $val['block'] ? $val['block'] : '-'; ?></td>                   
                                        <td><?php echo $val['clf'] ? $val['clf'] : '-'; ?></td>                   
                                        <td><?php echo $val['clf_model'] ? $val['clf_model'] : '-'; ?></td>                   
                                    </tr>
                                <?php } } else{?>
                                    <tr>
                                        <td colspan="11">No Records Found.... </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                        <!-- Pagination Links -->
                        <!-- <div class="pagination">
                            <?php echo $pagination_links; ?>
                        </div> -->


                    </div>
                </div>
            <?php } ?>

            <?php if ($this->input->get('tltype') == true && $this->input->get('tltype') == 'valueaddition') { ?>
                <div class="card mt-3">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="m-0">Value Addition Details Report</h4>
                        <button class="btn btn-success" onclick="exportTableToExcel('value_addition_details_report', 'value_addition_details')">Export to Excel</button>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="row">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>District</th>
                                            <th>Block</th>
                                            <th>GP</th>
                                            <th>CLF Name</th>
                                            <th>Model CLF</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select class="form-control" id="dist" name="dist">
                                                    <option value="">-- Select District --</option>
                                                    <?php foreach ($districts as $district): ?>
                                                        <option value="<?php echo $district; ?>" <?php echo (!empty($userdetails['district']) && $userdetails['district'] == $district) ? 'selected' : ''; ?>>
                                                            <?php echo $district; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" id="block" name="block">
                                                    <option value="">-- Select Block --</option>
                                                    <?php if (!empty($userdetails['block'])): ?>
                                                        <option value="<?php echo $userdetails['block']; ?>" selected>
                                                            <?php echo $userdetails['block']; ?>
                                                        </option>
                                                    <?php endif; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="gram_panchayat">
                                                    <option value="">Select Gram Panchayat</option>
                                                    <?php foreach ($grampanchayat as $val): ?>
                                                        <option value="<?php echo $val['grampanchayat']; ?>">
                                                            <?php echo $val['grampanchayat']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="clf">
                                                    <option value="">Select CLF Name</option>
                                                    <?php foreach ($clf as $val): ?>
                                                        <option value="<?php echo $val['clf']; ?>">
                                                            <?php echo $val['clf']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="clf_model">
                                                    <option value="">Select CLF Model</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            
                                            <th>Commodity Category</th>
                                            <th>Sub-category</th>
                                            <th>Commodity Name</th>
                                            <th>Date Range</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select class="form-control" name="category" id="categoryname">
                                                    <option value="">Select Category</option>
                                                    <?php foreach (array_filter($categories) as $categoryname): ?>
                                                        <option value="<?php echo $categoryname['category']; ?>">
                                                            <?php echo ucfirst($categoryname['category']); ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="sub_category">
                                                    <option value="">Sub-Category</option>
                                                    <option value="primary">Primary</option>
                                                    <option value="secondary">Secondary</option>
                                                    <option value="tertiary">Tertiary</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control form-control" name="commodityname" id="commoditynewname">
                                                    <option value="">Select Commodity</option>
                                                    <option <?php if($commodityname != ''){ echo 'selected="selected"';  } ?> value="<?php echo $commodityname ?>"><?php echo ucfirst($commodityname) ?></option>				 
                                                </select>
                                            </td>
                                            <td>
                                                <input type="date" name="date_from" class="form-control" />
                                                to
                                                <input type="date" name="date_to" class="form-control" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="text-right">
                                <input type="hidden" name="ValueAdditionDetails" value="1">
                                <input type="hidden" name="pgid" value="<?php echo $this->session->userdata('pgid') ?? ''; ?>">
                                <input type="submit" class="btn btn-primary" name="filters" value="Generate Report">
                            </div>
                        </form>

                        <table class="table table-bordered table-striped mt-3" id="value_addition_details_report">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>PG Name</th>
                                    <th>Commodity Name</th>
                                    <th>Commodity Category</th>
                                    <th>President Name</th>
                                    <th>Secretary Name</th>
                                    <th>Treasurer Name</th>
                                    <th>District</th>
                                    <th>Block</th>
                                    <th>CLF Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if (!empty($value_addition_details) && count($value_addition_details) > 0){
                                    $i = 1;
                                    foreach($value_addition_details as $val){
                                ?>
                                    <tr>
                                        <td><?php echo $i++; ?> </td>
                                        <td><?php echo $val['pgname']; ?></td>                   
                                        <td><?php echo $val['commodityname']; ?></td>                   
                                        <td><?php echo $val['category']; ?></td>                   
                                        <td><?php echo $val['president_name']; ?></td>                   
                                        <td><?php echo $val['secretary_name']; ?></td>                   
                                        <td><?php echo $val['treasurer_name']; ?></td>                   
                                        <td><?php echo $val['district']; ?></td>                   
                                        <td><?php echo $val['block']; ?></td>                   
                                        <td><?php echo $val['clf']; ?></td>                   
                                    </tr>
                                <?php } } else{?>
                                    <tr>
                                        <td colspan="10">No Records Found.... </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                        <!-- Pagination Links -->
                        <div>
                            <?php echo $pagination_links; ?>
                        </div>


                    </div>
                </div>
            <?php } ?>

            <?php if ($this->input->get('tltype') == true && $this->input->get('tltype') == 'businessummary') { ?>
                <div class="card mt-3">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="m-0">Business Summary Report</h4>
                        <button class="btn btn-success" onclick="exportTableToExcel('business_summary_details_report', 'business_summary_details')">Export to Excel</button>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="row">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>District</th>
                                            <th>Block</th>
                                            <th>GP</th>
                                            <th>Producer Group</th>
                                            <th>CLF Name</th>                                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select class="form-control" id="dist" name="dist">
                                                    <option value="">-- Select District --</option>
                                                    <?php foreach ($districts as $district): ?>
                                                        <option value="<?php echo $district; ?>" <?php echo (!empty($userdetails['district']) && $userdetails['district'] == $district) ? 'selected' : ''; ?>>
                                                            <?php echo $district; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" id="block" name="block">
                                                    <option value="">-- Select Block --</option>
                                                    <?php if (!empty($userdetails['block'])): ?>
                                                        <option value="<?php echo $userdetails['block']; ?>" selected>
                                                            <?php echo $userdetails['block']; ?>
                                                        </option>
                                                    <?php endif; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="gram_panchayat">
                                                    <option value="">Select Gram Panchayat</option>
                                                    <?php foreach ($grampanchayat as $val): ?>
                                                        <option value="<?php echo $val['grampanchayat']; ?>">
                                                            <?php echo $val['grampanchayat']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="producer_group">
                                                    <option value="">Name of Producer Group</option>
                                                    <?php foreach ($producergroup as $val): ?>
                                                        <option value="<?php echo $val['pgname']; ?>">
                                                            <?php echo $val['pgname']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="clf">
                                                    <option value="">Select CLF Name</option>
                                                    <?php foreach ($clf as $val): ?>
                                                        <option value="<?php echo $val['clf']; ?>">
                                                            <?php echo $val['clf']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Model CLF</th>
                                            <!-- <th>Monthly Transactions</th> -->
                                            <th>Financial Year</th>
                                            <th>Month</th>
                                            <th>Date Range</th>
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
                                            <!-- <td>
                                                <input type="text" class="form-control" name="monthly_transaction" />
                                            </td> -->
                                            <td>
                                                <select class="form-control" name="financial_year">
                                                    <option value="">Financial Year</option>
                                                    <option value="2025-2026">2025-2026</option>
                                                            <option value="2024-2025">2024-2025</option>
                                                            <option value="2023-2024">2023-2024</option>
                                                            <option value="2022-2023">2022-2023</option>
                                                            <option value="2021-2022">2021-2022</option>
                                                            <option value="2020-2021">2020-2021</option>
                                                            <option value="2019-2020">2019-2020</option>
                                                            <option value="2018-2019">2018-2019</option>
                                                            <option value="2017-2018">2017-2018</option>
                                                            <option value="2017-2018">2016-2017</option>
                                                            <option value="2015-2016">2015-2016</option>
                                                            <option value="2014-2015">2014-2015</option>
                                                            <option value="2013-2014">2013-2014</option>
                                                            <option value="2012-2013">2012-2013</option>
                                                            <option value="2011-2012">2011-2012</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="month">
                                                    <option value="">Select Month </option>			 
                                                    <option value="january">January </option>			 
                                                    <option value="february">February </option>			 
                                                    <option value="march">March </option>			 
                                                    <option value="april">April </option>			 
                                                    <option value="may">May </option>			 
                                                    <option value="june">June </option>			 
                                                    <option value="july">July </option>			 
                                                    <option value="august">August </option>			 
                                                    <option value="september">September </option>			 
                                                    <option value="october">October </option>			 
                                                    <option value="november">November </option>			 
                                                    <option value="december">December </option>			 
                                                </select>
                                            </td>
                                            <td>
                                                <input type="date" name="date_from" class="form-control" />
                                                to
                                                <input type="date" name="date_to" class="form-control" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="text-right">
                                <input type="hidden" name="BusinessSummaryReport" value="1">
                                <input type="hidden" name="pgid" value="<?php echo $this->session->userdata('pgid') ?? ''; ?>">
                                <input type="submit" class="btn btn-primary" name="filters" value="Generate Report">
                            </div>
                        </form>

                        <table class="table table-bordered table-striped mt-3" id="business_summary_details_report">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>PG Name</th>
                                    <th>Commodity Name</th>
                                    <th>Opening Stock</th>
                                    <th>Procurement Amount</th>
                                    <th>Wastage Amount</th>
                                    <th>Other Expenditures Amount</th>
                                    <th>Sale Amount</th>
                                    <th>Income Profit</th>
                                    <th>Closing stock</th>
                                    <th>Cumulative Sales/Income Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if (!empty($business_summary_details) && count($business_summary_details) > 0){
                                    $i = 1;
                                    foreach($business_summary_details as $val){
                                ?>
                                    <tr>
                                        <td><?php echo $i++; ?> </td>
                                        <td><?php echo $val['pgname'] ? $val['pgname'] : '-'; ?></td>                   
                                        <td><?php echo $val['commodity'] ? $val['commodity'] : '-'; ?></td>                   
                                        <td><?php echo $val['opstock'] ? $val['opstock'] : 0; ?></td>                   
                                        <td><?php echo $val['procureamount'] ? $val['procureamount'] : 0; ?></td>                   
                                        <td><?php echo $val['procurewastageamount'] ? $val['procurewastageamount'] : 0; ?></td>                   
                                        <td><?php echo $val['otherexpenditureamount'] ? $val['otherexpenditureamount'] : 0; ?></td>                   
                                        <td><?php echo $val['saleamount'] ? $val['saleamount'] : 0; ?></td>
                                        <td><?php echo $val['income_profit'] ? $val['income_profit'] : 0; ?></td>                    
                                        <td><?php echo $val['closingstockamount'] ? $val['closingstockamount'] : 0; ?></td>                    
                                        <td><?php echo $val['cumulativesalesamount'] ? $val['cumulativesalesamount'] : 0; ?></td>                   
                                    </tr>
                                <?php } } else{?>
                                    <tr>
                                        <td colspan="11">No Records Found.... </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            <?php } ?>

            <?php if ($this->input->get('tltype') == true && $this->input->get('tltype') == 'financialtransaction') { ?>
                <div class="card mt-3">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="m-0">Financial Transactions Report</h4>
                        <button class="btn btn-success" onclick="exportTableToExcel('financial_transaction_details_report', 'financial_transaction_details')">Export to Excel</button>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="row">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>District</th>
                                            <th>Block</th>
                                            <th>GP</th>
                                            <th>Producer Group</th>
                                            <th>CLF Name</th>                                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select class="form-control" id="dist" name="dist">
                                                    <option value="">-- Select District --</option>
                                                    <?php foreach ($districts as $district): ?>
                                                        <option value="<?php echo $district; ?>" <?php echo (!empty($userdetails['district']) && $userdetails['district'] == $district) ? 'selected' : ''; ?>>
                                                            <?php echo $district; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" id="block" name="block">
                                                    <option value="">-- Select Block --</option>
                                                    <?php if (!empty($userdetails['block'])): ?>
                                                        <option value="<?php echo $userdetails['block']; ?>" selected>
                                                            <?php echo $userdetails['block']; ?>
                                                        </option>
                                                    <?php endif; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="gram_panchayat">
                                                    <option value="">Select Gram Panchayat</option>
                                                    <?php foreach ($grampanchayat as $val): ?>
                                                        <option value="<?php echo $val['grampanchayat']; ?>">
                                                            <?php echo $val['grampanchayat']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="producer_group">
                                                    <option value="">Name of Producer Group</option>
                                                    <?php foreach ($producergroup as $val): ?>
                                                        <option value="<?php echo $val['pgname']; ?>">
                                                            <?php echo $val['pgname']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="clf">
                                                    <option value="">Select CLF Name</option>
                                                    <?php foreach ($clf as $val): ?>
                                                        <option value="<?php echo $val['clf']; ?>">
                                                            <?php echo $val['clf']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Model CLF</th>
                                            <!-- <th>Monthly Transactions</th> -->
                                            <th>Financial Year</th>
                                            <th>Month</th>
                                            <th>Date Range</th>
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
                                            <!-- <td>
                                                <input type="text" class="form-control" name="monthly_transaction" />
                                            </td> -->
                                            <td>
                                                <select class="form-control" name="financial_year">
                                                    <option value="">Financial Year</option>
                                                    <option value="2025-2026">2025-2026</option>
                                                    <option value="2024-2025">2024-2025</option>
                                                    <option value="2023-2024">2023-2024</option>
                                                    <option value="2022-2023">2022-2023</option>
                                                    <option value="2021-2022">2021-2022</option>
                                                    <option value="2020-2021">2020-2021</option>
                                                    <option value="2019-2020">2019-2020</option>
                                                    <option value="2018-2019">2018-2019</option>
                                                    <option value="2017-2018">2017-2018</option>
                                                    <option value="2017-2018">2016-2017</option>
                                                    <option value="2015-2016">2015-2016</option>
                                                    <option value="2014-2015">2014-2015</option>
                                                    <option value="2013-2014">2013-2014</option>
                                                    <option value="2012-2013">2012-2013</option>
                                                    <option value="2011-2012">2011-2012</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="month">
                                                    <option value="">Select Month </option>			 
                                                    <option value="january">January </option>			 
                                                    <option value="february">February </option>			 
                                                    <option value="march">March </option>			 
                                                    <option value="april">April </option>			 
                                                    <option value="may">May </option>			 
                                                    <option value="june">June </option>			 
                                                    <option value="july">July </option>			 
                                                    <option value="august">August </option>			 
                                                    <option value="september">September </option>			 
                                                    <option value="october">October </option>			 
                                                    <option value="november">November </option>			 
                                                    <option value="december">December </option>			 
                                                </select>
                                            </td>
                                            <td>
                                                <input type="date" name="date_from" class="form-control" />
                                                to
                                                <input type="date" name="date_to" class="form-control" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="text-right">
                                <input type="hidden" name="FinancialTransactionDetails" value="1">
                                <input type="hidden" name="pgid" value="<?php echo $this->session->userdata('pgid') ?? ''; ?>">
                                <input type="submit" class="btn btn-primary" name="filters" value="Generate Report">
                            </div>
                        </form>

                        <table class="table table-bordered table-striped mt-3" id="financial_transaction_details_report">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>PG Name</th>
                                    <th>Source of Fund</th>
                                    <th>Type of Fund</th>
                                    <th>Loan Amount (Rs)</th>
                                    <th>Date of Receipt</th>
                                    <th>Purpose</th>
                                    <th>Mode of Payment by PG</th>
                                    <th>Rate of Interest</th>
                                    <th>Loan Duration (Month)</th>
                                    <th>Principle Amount(Rs)</th>
                                    <th>Interest Amount Paid(Rs)</th>
                                    <th>Total Outstanding Amount(Rs)</th>
                                    <th>Total Loan Paid Amount(Rs)</th>
                                    <th>Date of Commencement</th>
                                    <th>Date of Completion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if (!empty($financial_transaction_details) && count($financial_transaction_details) > 0){
                                    $i = 1;
                                    foreach($financial_transaction_details as $val){
                                ?>
                                    <tr>
                                        <td><?php echo $i++; ?> </td>
                                        <td><?php echo $val['pgname']; ?></td>                   
                                        <td><?php echo $val['SRPGsof'] ? $val['SRPGsof'] : '-'; ?></td>                   
                                        <td><?php echo $val['SRPGtof'] ? $val['SRPGtof'] : '-'; ?></td>                   
                                        <td><?php echo $val['SRPGamount'] ? $val['SRPGamount'] : 0; ?></td>                   
                                        <td><?php echo $val['SRPGdate'] ? $val['SRPGdate'] : '-'; ?></td>                   
                                        <td><?php echo $val['SRPGpurpose'] ? $val['SRPGpurpose'] : '-'; ?></td>                   
                                        <td><?php echo $val['PMPGpaymentmode'] ? $val['PMPGpaymentmode'] : '-'; ?></td>                   
                                        <td><?php echo $val['PMPGinterest_rate'] ? $val['PMPGinterest_rate'] : 0; ?></td>                   
                                        <td><?php echo $val['loanduration'] ? $val['loanduration'] : 0; ?></td>                   
                                        <td><?php echo $val['PMPGrp'] ? $val['PMPGrp'] : 0; ?></td>                   
                                        <td><?php echo $val['PMPGmonthlyemi'] ? $val['PMPGmonthlyemi'] : 0; ?></td>                   
                                        <td><?php echo $val['PMPGoutstandingamt'] ? $val['PMPGoutstandingamt'] : 0; ?></td>                   
                                        <td><?php echo $val['PMPGtotalloanpaidamt'] ? $val['PMPGtotalloanpaidamt'] : 0; ?></td>                   
                                        <td><?php echo $val['commencement_date'] ? $val['commencement_date'] : '-'; ?></td>                   
                                        <td><?php echo $val['completion_date'] ? $val['completion_date'] : '-'; ?></td>                   
                                    </tr>
                                <?php } } else{?>
                                    <tr>
                                        <td colspan="16">No Records Found.... </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            <?php } ?>

            <?php if ($this->input->get('tltype') == true && $this->input->get('tltype') == 'trainingrecords') { ?>
                <div class="card mt-3">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="m-0">Training Records Report</h4>
                        <button class="btn btn-success" onclick="exportTableToExcel('trainging_records', 'trainging_records_report')">Export to Excel</button>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="row">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>District</th>
                                            <th>Block</th>
                                            <th>GP</th>
                                            <th>Producer Group</th>
                                            <th>CLF Name</th>                                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select class="form-control" id="dist" name="dist">
                                                    <option value="">-- Select District --</option>
                                                    <?php foreach ($districts as $district): ?>
                                                        <option value="<?php echo $district; ?>" <?php echo (!empty($userdetails['district']) && $userdetails['district'] == $district) ? 'selected' : ''; ?>>
                                                            <?php echo $district; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" id="block" name="block">
                                                    <option value="">-- Select Block --</option>
                                                    <?php if (!empty($userdetails['block'])): ?>
                                                        <option value="<?php echo $userdetails['block']; ?>" selected>
                                                            <?php echo $userdetails['block']; ?>
                                                        </option>
                                                    <?php endif; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="gram_panchayat">
                                                    <option value="">Select Gram Panchayat</option>
                                                    <?php foreach ($grampanchayat as $val): ?>
                                                        <option value="<?php echo $val['grampanchayat']; ?>">
                                                            <?php echo $val['grampanchayat']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="producer_group">
                                                    <option value="">Name of Producer Group</option>
                                                    <?php foreach ($producergroup as $val): ?>
                                                        <option value="<?php echo $val['pgname']; ?>">
                                                            <?php echo $val['pgname']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="clf">
                                                    <option value="">Select CLF Name</option>
                                                    <?php foreach ($clf as $val): ?>
                                                        <option value="<?php echo $val['clf']; ?>">
                                                            <?php echo $val['clf']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Model CLF</th>
                                            <!-- <th>Type of Trainging</th> -->
                                            <th>Financial Year</th>
                                            <th>Month</th>
                                            <th>Type of Training</th>
                                            <th>Date Range</th>
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
                                            <!-- <td>
                                                <input type="text" class="form-control" name="training_type" />
                                            </td> -->
                                            <td>
                                                <select class="form-control" name="financial_year">
                                                    <option value="">Financial Year</option>
                                                    <option value="2025-2026">2025-2026</option>
                                                    <option value="2024-2025">2024-2025</option>
                                                    <option value="2023-2024">2023-2024</option>
                                                    <option value="2022-2023">2022-2023</option>
                                                    <option value="2021-2022">2021-2022</option>
                                                    <option value="2020-2021">2020-2021</option>
                                                    <option value="2019-2020">2019-2020</option>
                                                    <option value="2018-2019">2018-2019</option>
                                                    <option value="2017-2018">2017-2018</option>
                                                    <option value="2017-2018">2016-2017</option>
                                                    <option value="2015-2016">2015-2016</option>
                                                    <option value="2014-2015">2014-2015</option>
                                                    <option value="2013-2014">2013-2014</option>
                                                    <option value="2012-2013">2012-2013</option>
                                                    <option value="2011-2012">2011-2012</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="month">
                                                    <option value="">Select Month </option>			 
                                                    <option value="january">January </option>			 
                                                    <option value="february">February </option>			 
                                                    <option value="march">March </option>			 
                                                    <option value="april">April </option>			 
                                                    <option value="may">May </option>			 
                                                    <option value="june">June </option>			 
                                                    <option value="july">July </option>			 
                                                    <option value="august">August </option>			 
                                                    <option value="september">September </option>			 
                                                    <option value="october">October </option>			 
                                                    <option value="november">November </option>			 
                                                    <option value="december">December </option>			 
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="training_type" id="training_type" onchange="showOtherInput(this)">
                                                    <option value="">---Select---</option>
                                                    <option value="Agriculture">Agriculture</option>
                                                    <option value="Horticulture">Horticulture</option>
                                                    <option value="Animal Husbandry">Animal Husbandry</option>
                                                    <option value="Fishery">Fishery</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                                <input type="text" class="form-control mt-2" name="other_training_type" id="other_training_type" placeholder="Please specify" style="display: none;">
                                                <script>
                                                    function showOtherInput(select) {
                                                        const otherInput = document.getElementById('other_training_type');
                                                        if (select.value === 'Other') {
                                                            otherInput.style.display = 'block';
                                                        } else {
                                                            otherInput.style.display = 'none';
                                                            otherInput.value = ''; 
                                                        }
                                                    }
                                                </script>
                                            </td>
                                            <td>
                                                <input type="date" name="date_from" class="form-control" />
                                                to
                                                <input type="date" name="date_to" class="form-control" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="text-right">
                                <input type="hidden" name="TrainingRecordsReport" value="1">
                                <input type="hidden" name="pgid" value="<?php echo $this->session->userdata('pgid') ?? ''; ?>">
                                <input type="submit" class="btn btn-primary" name="filters" value="Generate Report">
                            </div>
                        </form>

                        <table class="table table-bordered table-striped mt-3" id="trainging_records">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>PG Name</th>
                                    <th>Category</th>
                                    <th>Sub-Category</th>
                                    <th>Agriculture</th>
                                    <th>Horticulture</th>
                                    <th>Livestocks</th>
                                    <th>Fishery</th>
                                    <th>Sericulture</th>
                                    <th>Others</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if (!empty($trainging_records_report) && count($trainging_records_report) > 0){
                                    $i = 1;
                                    foreach($trainging_records_report as $val){
                                ?>
                                    <tr>
                                        <td><?php echo $i++; ?> </td>
                                        <td><?php echo $val['pgname']; ?></td>                   
                                        <td><?php echo $val['category']; ?></td>                   
                                        <td><?php echo $val['sub_category']; ?></td>  
                                        <td>
                                            <?php 
                                                $agri_items = explode(',', $val['TLAgriculture']);
                                                foreach($agri_items as $item){
                                                    echo htmlspecialchars(trim($item)) . ",<br>";
                                                }
                                            ?>
                                        </td>                    
                                        <td>
                                            <?php 
                                                $agri_items = explode(',', $val['TLHorticulture']);
                                                foreach($agri_items as $item){
                                                    echo htmlspecialchars(trim($item)) . ",<br>";
                                                }
                                            ?>
                                        </td>                    
                                        <td>
                                            <?php 
                                                $agri_items = explode(',', $val['TLLivestock']);
                                                foreach($agri_items as $item){
                                                    echo htmlspecialchars(trim($item)) . ",<br>";
                                                }
                                            ?>
                                        </td>                    
                                        <td>
                                            <?php 
                                                $agri_items = explode(',', $val['TLFishery']);
                                                foreach($agri_items as $item){
                                                    echo htmlspecialchars(trim($item)) . ",<br>";
                                                }
                                            ?>
                                        </td>                    
                                        <td>
                                            <?php 
                                                $agri_items = explode(',', $val['TLSericulture']);
                                                foreach($agri_items as $item){
                                                    echo htmlspecialchars(trim($item)) . ",<br>";
                                                }
                                            ?>
                                        </td>                    
                                        <td>
                                            <?php 
                                                $agri_items = explode(',', $val['TLOthers']);
                                                foreach($agri_items as $item){
                                                    echo htmlspecialchars(trim($item)) . ",<br>";
                                                }
                                            ?>
                                        </td>                    
                                    </tr>
                                <?php } } else{?>
                                    <tr>
                                        <td colspan="10">No Records Found.... </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            <?php } ?>

            <?php if ($this->input->get('tltype') == true && $this->input->get('tltype') == 'booksrecords') { ?>
                <div class="card mt-3">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="m-0">Books of Records Report</h4>
                        <button class="btn btn-success" onclick="exportTableToExcel('book_records', 'book_records_report')">Export to Excel</button>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="row">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>District</th>
                                            <th>Block</th>
                                            <th>GP</th>
                                            <th>Producer Group</th>
                                            <th>CLF Name</th>                                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select class="form-control" id="dist" name="dist">
                                                    <option value="">-- Select District --</option>
                                                    <?php foreach ($districts as $district): ?>
                                                        <option value="<?php echo $district; ?>" <?php echo (!empty($userdetails['district']) && $userdetails['district'] == $district) ? 'selected' : ''; ?>>
                                                            <?php echo $district; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" id="block" name="block">
                                                    <option value="">-- Select Block --</option>
                                                    <?php if (!empty($userdetails['block'])): ?>
                                                        <option value="<?php echo $userdetails['block']; ?>" selected>
                                                            <?php echo $userdetails['block']; ?>
                                                        </option>
                                                    <?php endif; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="gram_panchayat">
                                                    <option value="">Select Gram Panchayat</option>
                                                    <?php foreach ($grampanchayat as $val): ?>
                                                        <option value="<?php echo $val['grampanchayat']; ?>">
                                                            <?php echo $val['grampanchayat']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="producer_group">
                                                    <option value="">Name of Producer Group</option>
                                                    <?php foreach ($producergroup as $val): ?>
                                                        <option value="<?php echo $val['pgname']; ?>">
                                                            <?php echo $val['pgname']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="clf">
                                                    <option value="">Select CLF Name</option>
                                                    <?php foreach ($clf as $val): ?>
                                                        <option value="<?php echo $val['clf']; ?>">
                                                            <?php echo $val['clf']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Model CLF</th>
                                            <!-- <th>Type of Record Books Maintained</th> -->
                                            <th>Financial Year</th>
                                            <th>Month</th>
                                            <th>Date Range</th>
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
                                            <!-- <td>
                                                <input type="text" class="form-control" name="maintained_book" />
                                            </td> -->
                                            <td>
                                                <select class="form-control" name="financial_year">
                                                    <option value="">Financial Year</option>
                                                    <option value="2025-2026">2025-2026</option>
                                                    <option value="2024-2025">2024-2025</option>
                                                    <option value="2023-2024">2023-2024</option>
                                                    <option value="2022-2023">2022-2023</option>
                                                    <option value="2021-2022">2021-2022</option>
                                                    <option value="2020-2021">2020-2021</option>
                                                    <option value="2019-2020">2019-2020</option>
                                                    <option value="2018-2019">2018-2019</option>
                                                    <option value="2017-2018">2017-2018</option>
                                                    <option value="2017-2018">2016-2017</option>
                                                    <option value="2015-2016">2015-2016</option>
                                                    <option value="2014-2015">2014-2015</option>
                                                    <option value="2013-2014">2013-2014</option>
                                                    <option value="2012-2013">2012-2013</option>
                                                    <option value="2011-2012">2011-2012</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="month">
                                                    <option value="">Select Month </option>			 
                                                    <option value="january">January </option>			 
                                                    <option value="february">February </option>			 
                                                    <option value="march">March </option>			 
                                                    <option value="april">April </option>			 
                                                    <option value="may">May </option>			 
                                                    <option value="june">June </option>			 
                                                    <option value="july">July </option>			 
                                                    <option value="august">August </option>			 
                                                    <option value="september">September </option>			 
                                                    <option value="october">October </option>			 
                                                    <option value="november">November </option>			 
                                                    <option value="december">December </option>			 
                                                </select>
                                            </td>
                                            <td>
                                                <input type="date" name="date_from" class="form-control" />
                                                to
                                                <input type="date" name="date_to" class="form-control" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="text-right">
                                <input type="hidden" name="BooksOfRecords" value="1">
                                <input type="hidden" name="pgid" value="<?php echo $this->session->userdata('pgid') ?? ''; ?>">
                                <input type="submit" class="btn btn-primary" name="filters" value="Generate Report">
                            </div>
                        </form>

                        <table class="table table-bordered table-striped mt-3" id="book_records">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>PG Name</th>
                                    <th>Name of the Commodity (Primary Commodity)</th>
                                    <th>Description of Commodities (Primary Commodity)</th>
                                    <th>Name of the Commodity (Secondary Commodity)</th>
                                    <th>Description of Commodities (Secondary Commodity)</th>
                                    <th>Nos of active members sold their products.(Current month)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if (!empty($book_records_report) && count($book_records_report) > 0){
                                    $i = 1;
                                    foreach($book_records_report as $val){
                                ?>
                                    <tr>
                                        <td><?php echo $i++; ?> </td>
                                        <td><?php echo $val['pgname'] ? $val['pgname'] : '-'; ?></td>                   
                                        <td><?php echo $val['commodityfirst'] ? $val['commodityfirst'] : '-'; ?></td>                   
                                        <td><?php echo $val['commodityfirstdesc'] ? $val['commodityfirstdesc'] : '-'; ?></td>  
                                        <td><?php echo $val['commoditysecond'] ? $val['commoditysecond'] : "-"; ?></td>  
                                        <td><?php echo $val['commodityseconddesc'] ? $val['commodityseconddesc'] : '-'; ?></td>  
                                        <td><?php echo $val['activemembers'] ? $val['activemembers'] : 0; ?></td>                                                                   
                                    </tr>
                                <?php } } else{?>
                                    <tr>
                                        <td colspan="7">No Records Found.... </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            <?php } ?>

            <!-- Member Details Report -->
            <?php if ($this->input->get('tltype') == true && $this->input->get('tltype') == 'memberdetails') { ?>
                <div class="card mt-3">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="m-0">Member Details - Land Area Report</h4>
                        <button class="btn btn-success" onclick="exportTableToExcel('member_details', 'member_details_report')">Export to Excel</button>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="row">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>District</th>
                                            <th>Block</th>
                                            <th>GP</th>
                                            <th>Producer Group</th>
                                            <th>CLF Name</th>                                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select class="form-control" id="dist" name="dist">
                                                    <option value="">-- Select District --</option>
                                                    <?php foreach ($districts as $district): ?>
                                                        <option value="<?php echo $district; ?>" <?php echo (!empty($userdetails['district']) && $userdetails['district'] == $district) ? 'selected' : ''; ?>>
                                                            <?php echo $district; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" id="block" name="block">
                                                    <option value="">-- Select Block --</option>
                                                    <?php if (!empty($userdetails['block'])): ?>
                                                        <option value="<?php echo $userdetails['block']; ?>" selected>
                                                            <?php echo $userdetails['block']; ?>
                                                        </option>
                                                    <?php endif; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="gram_panchayat">
                                                    <option value="">Select Gram Panchayat</option>
                                                    <?php foreach ($grampanchayat as $val): ?>
                                                        <option value="<?php echo $val['grampanchayat']; ?>">
                                                            <?php echo $val['grampanchayat']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="producer_group">
                                                    <option value="">Name of Producer Group</option>
                                                    <?php foreach ($producergroup as $val): ?>
                                                        <option value="<?php echo $val['pgname']; ?>">
                                                            <?php echo $val['pgname']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="clf">
                                                    <option value="">Select CLF Name</option>
                                                    <?php foreach ($clf as $val): ?>
                                                        <option value="<?php echo $val['clf']; ?>">
                                                            <?php echo $val['clf']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Model CLF</th>
                                            <th>FPC Member</th>
                                            <th>Financial Year</th>
                                            <th>Month</th>
                                            <th>Date Range</th>
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
                                                <select class="form-control" name="fpc_member">
                                                    <option value="">Select FPC Member</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="financial_year">
                                                    <option value="">Financial Year</option>
                                                    <option value="2025-2026">2025-2026</option>
                                                    <option value="2024-2025">2024-2025</option>
                                                    <option value="2023-2024">2023-2024</option>
                                                    <option value="2022-2023">2022-2023</option>
                                                    <option value="2021-2022">2021-2022</option>
                                                    <option value="2020-2021">2020-2021</option>
                                                    <option value="2019-2020">2019-2020</option>
                                                    <option value="2018-2019">2018-2019</option>
                                                    <option value="2017-2018">2017-2018</option>
                                                    <option value="2017-2018">2016-2017</option>
                                                    <option value="2015-2016">2015-2016</option>
                                                    <option value="2014-2015">2014-2015</option>
                                                    <option value="2013-2014">2013-2014</option>
                                                    <option value="2012-2013">2012-2013</option>
                                                    <option value="2011-2012">2011-2012</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="month">
                                                    <option value="">Select Month </option>			 
                                                    <option value="january">January </option>			 
                                                    <option value="february">February </option>			 
                                                    <option value="march">March </option>			 
                                                    <option value="april">April </option>			 
                                                    <option value="may">May </option>			 
                                                    <option value="june">June </option>			 
                                                    <option value="july">July </option>			 
                                                    <option value="august">August </option>			 
                                                    <option value="september">September </option>			 
                                                    <option value="october">October </option>			 
                                                    <option value="november">November </option>			 
                                                    <option value="december">December </option>			 
                                                </select>
                                            </td>
                                            <td>
                                                <input type="date" name="date_from" class="form-control" />
                                                to
                                                <input type="date" name="date_to" class="form-control" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="text-right">
                                <input type="hidden" name="MemberDetailsLandAreaReport" value="1">
                                <input type="hidden" name="pgid" value="<?php echo $this->session->userdata('pgid') ?? ''; ?>">
                                <input type="submit" class="btn btn-primary" name="filters" value="Generate Report">
                            </div>
                        </form>

                        <table class="table table-bordered table-striped mt-3" id="member_details">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>PG Name</th>
                                    <th>Member Name</th>
                                    <th>Education</th>
                                    <th>Contact No.</th>
                                    <th>Aadhar No.</th>
                                    <th>Membership Type</th>
                                    <th>Agricultural Land</th>
                                    <th>Irrigated Land</th>
                                    <th>Non Irrigated Land</th>
                                    <th>Total Water Body</th>
                                    <th>Grazing Land</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if (!empty($member_details_report) && count($member_details_report) > 0){
                                    $i = 1;
                                    foreach($member_details_report as $val){
                                ?>
                                    <tr>
                                        <td><?php echo $i++; ?> </td>
                                        <td><?php echo $val['pgname'] ? $val['pgname'] : '-'; ?></td>                   
                                        <td><?php echo $val['name'] ? $val['name'] : '-'; ?></td>                   
                                        <td><?php echo $val['education'] ? $val['education'] : '-'; ?></td>                   
                                        <td><?php echo $val['contactno'] ? $val['contactno'] : '-'; ?></td>                   
                                        <td><?php echo $val['aadharno'] ? $val['aadharno'] : '0'; ?></td>                   
                                        <td><?php echo $val['membershiptype'] ? $val['membershiptype'] : '-'; ?></td>                   
                                        <td><?php echo $val['landarea'] ? $val['landarea'] : 0; ?></td>                   
                                        <td><?php echo $val['irrigatedland'] ? $val['irrigatedland'] : 0; ?></td>                   
                                        <td><?php echo $val['nonirrigatedland'] ? $val['nonirrigatedland'] : 0; ?></td>                   
                                        <td><?php echo $val['totalwaterbody'] ? $val['totalwaterbody'] : 0; ?></td>                   
                                        <td><?php echo $val['grazingland'] ? $val['grazingland'] : 0; ?></td>                   
                                    </tr>
                                <?php } } else{?>
                                    <tr>
                                        <td colspan="12">No Records Found.... </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            <?php } ?>

            <?php if ($this->input->get('tltype') == true && $this->input->get('tltype') == 'commoditydetails') { ?>
                <div class="card mt-3">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="m-0">Commodity Details Report</h4>
                        <button class="btn btn-success" onclick="exportTableToExcel('member_details', 'member_details_report')">Export to Excel</button>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="row">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>District</th>
                                            <th>Block</th>
                                            <th>GP</th>
                                            <th>Producer Group</th>
                                            <th>CLF Name</th>                                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select class="form-control" id="dist" name="dist">
                                                    <option value="">-- Select District --</option>
                                                    <?php foreach ($districts as $district): ?>
                                                        <option value="<?php echo $district; ?>" <?php echo (!empty($userdetails['district']) && $userdetails['district'] == $district) ? 'selected' : ''; ?>>
                                                            <?php echo $district; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" id="block" name="block">
                                                    <option value="">-- Select Block --</option>
                                                    <?php if (!empty($userdetails['block'])): ?>
                                                        <option value="<?php echo $userdetails['block']; ?>" selected>
                                                            <?php echo $userdetails['block']; ?>
                                                        </option>
                                                    <?php endif; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="gram_panchayat">
                                                    <option value="">Select Gram Panchayat</option>
                                                    <?php foreach ($grampanchayat as $val): ?>
                                                        <option value="<?php echo $val['grampanchayat']; ?>">
                                                            <?php echo $val['grampanchayat']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="producer_group">
                                                    <option value="">Name of Producer Group</option>
                                                    <?php foreach ($producergroup as $val): ?>
                                                        <option value="<?php echo $val['pgname']; ?>">
                                                            <?php echo $val['pgname']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="clf">
                                                    <option value="">Select CLF Name</option>
                                                    <?php foreach ($clf as $val): ?>
                                                        <option value="<?php echo $val['clf']; ?>">
                                                            <?php echo $val['clf']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Model CLF</th>
                                            <th>Category</th>
                                            <th>Sub-Category</th>
                                            <th>Commodity Name</th>
                                            <th>Date Range</th>
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
                                                <select class="form-control" name="category" id="categoryname">
                                                    <option value="">Select Category</option>
                                                    <?php foreach (array_filter($categories) as $categoryname): ?>
                                                        <option value="<?php echo $categoryname['category']; ?>">
                                                            <?php echo ucfirst($categoryname['category']); ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="sub_category">
                                                    <option value="">Sub-Category</option>
                                                    <option value="primary">Primary</option>
                                                    <option value="secondary">Secondary</option>
                                                    <option value="tertiary">Tertiary</option>
                                                    <option value="commodity">Commodity</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control form-control" name="commodityname" id="commoditynewname">
                                                    <option value="">Select Commodity</option>
                                                    <option <?php if($commodityname != ''){ echo 'selected="selected"';  } ?> value="<?php echo $commodityname ?>"><?php echo ucfirst($commodityname) ?></option>				 
                                                </select>
                                            </td>
                                            <td>
                                                <input type="date" name="date_from" class="form-control" />
                                                to
                                                <input type="date" name="date_to" class="form-control" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="text-right">
                                <input type="hidden" name="CommodityDetails" value="1">
                                <input type="hidden" name="pgid" value="<?php echo $this->session->userdata('pgid') ?? ''; ?>">
                                <input type="submit" class="btn btn-primary" name="filters" value="Generate Report">
                            </div>
                        </form>

                        <table class="table table-bordered table-striped mt-3" id="member_details">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>PG Name</th>
                                    <th>Member Name</th>
                                    <th>Commodity</th>
                                    <th>Agriculture</th>
                                    <th>Horticulture</th>
                                    <th>Livestocks</th>
                                    <th>Fishery</th>
                                    <th>Sericulture</th>
                                    <th>Others</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if (!empty($member_details_report) && count($member_details_report) > 0){
                                    $i = 1;
                                    foreach($member_details_report as $val){
                                ?>
                                    <tr>
                                        <td><?php echo $i++; ?> </td>
                                        <td><?php echo $val['pgname'] ? $val['pgname'] : '-'; ?></td>                   
                                        <td><?php echo $val['name'] ? $val['name'] : '-'; ?></td>                   
                                        <td><?php echo $val['commodity'] ? $val['commodity'] : '-'; ?></td>                   
                                        <td>
                                            <?php
                                                $agricultureData = array_filter([
                                                    $val['agriculture1'] ?? '',
                                                    $val['agriculture2'] ?? '',
                                                    $val['agriculture3'] ?? '',
                                                    $val['agriculture4'] ?? '',
                                                    $val['agriculture5'] ?? ''
                                                ]);
                                                echo implode(', ', $agricultureData);
                                            ?>
                                        </td>                   
                                        <td>
                                            <?php
                                                $horticultureData = array_filter([
                                                    $val['horticulture1'] ?? '',
                                                    $val['horticulture2'] ?? '',
                                                    $val['horticulture3'] ?? '',
                                                    $val['horticulture4'] ?? '',
                                                    $val['horticulture5'] ?? ''
                                                ]);
                                                echo implode(', ', $horticultureData);
                                            ?>
                                        </td>                   
                                        <td>
                                            <?php
                                                $livestocksData = array_filter([
                                                    $val['livestock1'] ?? '',
                                                    $val['livestock2'] ?? '',
                                                    $val['livestock3'] ?? '',
                                                    $val['livestock4'] ?? '',
                                                    $val['livestock5'] ?? ''
                                                ]);
                                                echo implode(', ', $livestocksData);
                                            ?>
                                        </td>                                     
                                        <td><?php echo $val['fishery']; ?></td>                   
                                        <td><?php echo $val['sericulture']; ?></td>                   
                                        <td><?php echo $val['others']; ?></td>                   
                                    </tr>
                                <?php } } else{?>
                                    <tr>
                                        <td colspan="10">No Records Found.... </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            <?php } ?>

            <?php if ($this->input->get('tltype') == true && $this->input->get('tltype') == 'saletopg') { ?>
                <div class="card mt-3">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="m-0">Sale to PG Report</h4>
                        <button class="btn btn-success" onclick="exportTableToExcel('sale_to_pg_details_report', 'sale_to_pg_details')">Export to Excel</button>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="row">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>District</th>
                                            <th>Block</th>
                                            <th>GP</th>
                                            <th>Producer Group</th>
                                            <th>CLF Name</th>                                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select class="form-control" id="dist" name="dist">
                                                    <option value="">-- Select District --</option>
                                                    <?php foreach ($districts as $district): ?>
                                                        <option value="<?php echo $district; ?>" <?php echo (!empty($userdetails['district']) && $userdetails['district'] == $district) ? 'selected' : ''; ?>>
                                                            <?php echo $district; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" id="block" name="block">
                                                    <option value="">-- Select Block --</option>
                                                    <?php if (!empty($userdetails['block'])): ?>
                                                        <option value="<?php echo $userdetails['block']; ?>" selected>
                                                            <?php echo $userdetails['block']; ?>
                                                        </option>
                                                    <?php endif; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="gram_panchayat">
                                                    <option value="">Select Gram Panchayat</option>
                                                    <?php foreach ($grampanchayat as $val): ?>
                                                        <option value="<?php echo $val['grampanchayat']; ?>">
                                                            <?php echo $val['grampanchayat']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="producer_group">
                                                    <option value="">Name of Producer Group</option>
                                                    <?php foreach ($producergroup as $val): ?>
                                                        <option value="<?php echo $val['pgname']; ?>">
                                                            <?php echo $val['pgname']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="clf">
                                                    <option value="">Select CLF Name</option>
                                                    <?php foreach ($clf as $val): ?>
                                                        <option value="<?php echo $val['clf']; ?>">
                                                            <?php echo $val['clf']; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Model CLF</th>
                                            <th>Category</th>
                                            <th>Sub-Category</th>
                                            <th>Commodity Name</th>
                                            <th>Date Range</th>
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
                                                <select class="form-control" name="category" id="categoryname">
                                                    <option value="">Select Category</option>
                                                    <?php foreach (array_filter($categories) as $categoryname): ?>
                                                        <option value="<?php echo $categoryname['category']; ?>">
                                                            <?php echo ucfirst($categoryname['category']); ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="sub_category">
                                                    <option value="">Sub-Category</option>
                                                    <option value="primary">Primary</option>
                                                    <option value="secondary">Secondary</option>
                                                    <option value="tertiary">Tertiary</option>
                                                    <!-- <option value="commodity">Commodity</option> -->
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control form-control" name="commodityname" id="commoditynewname">
                                                    <option value="">Select Commodity</option>
                                                    <option <?php if($commodityname != ''){ echo 'selected="selected"';  } ?> value="<?php echo $commodityname ?>"><?php echo ucfirst($commodityname) ?></option>				 
                                                </select>
                                            </td>
                                            <td>
                                                <input type="date" name="date_from" class="form-control" />
                                                to
                                                <input type="date" name="date_to" class="form-control" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Volume of Production(qty/ltr/nos)</th>
                                            <th>Volume of Sale(qty/ltr/nos)</th>
                                            <th>Rate of Commodity(Lakhs)</th>
                                            <th>Total Expenditure(Lakhs)</th>
                                            <th>Income Profit(Lakhs)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                        </tr>
                                    </tbody>
                                </table> -->
                            </div>

                            <div class="text-right">
                                <input type="hidden" name="SaleToPG" value="1">
                                <input type="hidden" name="pgid" value="<?php echo $this->session->userdata('pgid') ?? ''; ?>">
                                <input type="submit" class="btn btn-primary" name="filters" value="Generate Report">
                            </div>
                        </form>

                        <table class="table table-bordered table-striped mt-3" id="sale_to_pg_details_report">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>PG Name</th>
                                    <th>Member Name</th>
                                    <th>Education</th>
                                    <th>Contact No.</th>
                                    <th>Aadhar No.</th>
                                    <th>Membership Type</th>
                                    <th>Land Area</th>
                                    <th>Irrigated Land</th>
                                    <th>Non Irrigated Land</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if (!empty($sale_to_pg_details) && count($sale_to_pg_details) > 0){
                                    $i = 1;
                                    foreach($sale_to_pg_details as $val){
                                ?>
                                    <tr>
                                        <td><?php echo $i++; ?> </td>
                                        <td><?php echo $val['pgname']; ?></td>                   
                                        <td><?php echo $val['name']; ?></td>                   
                                        <td><?php echo $val['education']; ?></td>                   
                                        <td><?php echo $val['contactno']; ?></td>                   
                                        <td><?php echo $val['aadharno']; ?></td>                   
                                        <td><?php echo $val['membershiptype']; ?></td>                   
                                        <td><?php echo $val['landarea']; ?></td>                   
                                        <td><?php echo $val['irrigatedland']; ?></td>                   
                                        <td><?php echo $val['nonirrigatedland']; ?></td>                   
                                    </tr>
                                <?php } } else{?>
                                    <tr>
                                        <td colspan="10">No Records Found.... </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            <?php } ?>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    <script>
        function exportTableToExcel(tableID, filename = 'results') {
            alert(tableID);
            const table = document.getElementById(tableID);
            const wb = XLSX.utils.table_to_book(table, {sheet: "Sheet 1"});
            XLSX.writeFile(wb, filename ? filename + '.xlsx' : 'excel_data.xlsx');
        }
    </script>

</section>