<section>
    <div class="container-fluid">
        <div class="row list-view">
            <div class="col-md-2">
                <?php $this->load->view('include/sidebar'); ?>
            </div>

            <?php if ($this->uri->segment(2) < '2') { ?>
                <div class="col-md-10">
                    <div class="content content-box">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="m-0"> Monthly Business Transaction</h4>
                                </div>
                            </div>
                        </div>
                        <center>
                            <?php if (isset($msg) && $msg != '')
                                echo '<fieldset id="error_fieldset"><label class="error">' . $msg . '</label></fieldset>'; ?>
                            <?php if ($this->input->get('msg') == true) {
                                echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">' . $this->input->get('msg') . '</label></fieldset>';
                            } ?>

                            <?php if ($this->session->flashdata('error')): ?>
                                <script>alert("<?= $this->session->flashdata('error'); ?>");</script>
                            <?php endif; ?>
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
                                                        <select class="form-control" name="producer_group" id="producergroupname" required>
                                                            <option value="">Name of Producer Group </option>
                                                            <!-- <?php foreach ($producergroup as $val) { ?>
                                                                <option option="<?php echo ($val['pgname']); ?>">
                                                                    <?php echo ($val['pgname']); ?>
                                                                </option>
                                                            <?php } ?> -->
                                                             <?php if ($producergroupname == true) {
                                                                echo ' <option value="' . $producergroupname . '"  selected="selected">' . ucfirst($producergroupname) . '</option>';
                                                            } ?>
                                                        </select>
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
                                        <input type="submit" class="btn btn-primary" name="submit1" value="Next">
                                    </div>
                            </form>
                        </div>
                    </div>
                <?php } ?>

                <div class="col-md-10">
                    <div>
                        <div class="list-view">

                            <?php if ($this->uri->segment(2) == '2') { ?>

                                <div class="row mt-5">
                                    <div class="col-md-12">
                                        <div class="content content-box">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h4 class="m-0">Monthly Business Summary </h4>
                                                    </div>
                                                </div>
                                            </div>

                                            <form class="row pr-4 pl-4" method="post">

                                                <div class="col-md-12">
                                                    <br>
                                                    <h4 class="m-0"> Monthly Business Summary:<br><br>
                                                        <div class="row">
                                                            <div class="col-md-11">
                                                                <h6 class="m-0"> COMMODITY WISE BUSINESS DURING THE
                                                                    MONTH</h6><br>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <!-- <a href="#" onClick="addMonthlyBusinessSummaryFunction();"
                                                                    class="btn-sm btn-info" title="Add Task"><i
                                                                        class="fa fa-plus"></i></a> -->
                                                                <a href="#" id="addTable"
                                                                    class="btn-sm btn-danger" title="Add Task"><i
                                                                        class="fa fa-plus"></i></a>
                                                            </div>
                                                        </div>

                                                        <?php
                                                        if (count($csdt) == 0) {
                                                            ?>

                                                            <div class="monthly-business-table-set">
                                                                <table class="table p-3 table-bordered table-striped ">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col" width="15%">Commodity Category</th>
                                                                            <th scope="col" width="20%">Commodity Sub-Category</th>
                                                                            <th scope="col" width="15%">Commodity Name </th>
                                                                            <th scope="col">Opening stock</th>
                                                                            <th scope="col">Procurement </th>
                                                                            <th scope="col">Wastage Quantity </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <select class="form-control categoryname"
                                                                                    name="commoditycategory[]" id="categoryname">
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
                                                                                <select class="form-control"
                                                                                    name="commoditysubcategory[]">
                                                                                    <option value="primary">Primary
                                                                                    </option>
                                                                                    <option value="secondary">Secondary
                                                                                    </option>
                                                                                    <option value="tertiary">Tertiary
                                                                                    </option>
                                                                                </select>
                                                                            </td>
                                                                            <td>
                                                                                <select class="form-control commoditynewname" name="commodityname[]" id="commoditynewname">
                                                                                    <option>Select Commodity</option>
                                                                                    <option <?php if($commodityname != ''){ echo 'selected="selected"';  } ?>><?php echo ucfirst($commodityname) ?></option>				 
                                                                                </select>
                                                                            </td>
                                                                            <td>
                                                                                <input name="opstock[]" class="form-control"
                                                                                    type="text" placeholder="In Fig">
                                                                                    <input name="opamount[]"
                                                                                            class="form-control mt-1" type="number"
                                                                                            placeholder="Amount" step="0.01" />
                                                                                    <input name="oprate[]" class="form-control mt-1"
                                                                                            type="number" placeholder="Rate"
                                                                                            step="0.01" />
                                                                                    <select class="form-control mt-1" name="opstocktype[]">
                                                                                        <option value="">Select Unit</option>
                                                                                        <option value="qtl">Qtl. </option>
                                                                                        <option value="ltr">Ltr.</option>
                                                                                        <option value="num">Num.</option>
                                                                                    </select>                                                                                    
                                                                            </td>
                                                                            <td>
                                                                                <input name="procureqty[]" class="form-control"
                                                                                    type="text" placeholder="In Fig">
                                                                                <input
                                                                                            name="procureamount[]"
                                                                                            class="form-control mt-1" type="number"
                                                                                            placeholder="Amount" step="0.01" />
                                                                                <input
                                                                                            name="procurerate[]"
                                                                                            class="form-control mt-1" type="number"
                                                                                            placeholder="Rate" step="0.01" />
                                                                                <select class="form-control mt-1" name="procuretype[]">
                                                                                    <option value="">Select Unit</option>
                                                                                    <option value="qtl">Qtl. </option>
                                                                                    <option value="ltr">Ltr.</option>
                                                                                    <option value="num">Num.</option>
                                                                                </select>
                                                                            </td>

                                                                            <td>
                                                                                <input name="procurewastageqty[]"
                                                                                    class="form-control" type="text"
                                                                                    placeholder="In Fig">
                                                                                <input
                                                                                            name="procurewastageamount[]"
                                                                                            class="form-control mt-1" type="number"
                                                                                            placeholder="Amount" step="0.01" />
                                                                                <input
                                                                                            name="procurewastagerate[]"
                                                                                            class="form-control mt-1" type="number"
                                                                                            placeholder="Rate" step="0.01" />
                                                                                <select class="form-control mt-1" name="procurewastagetype[]">
                                                                                    <option value="">Select Unit</option>
                                                                                    <option value="qtl">Qtl. </option>
                                                                                    <option value="ltr">Ltr.</option>
                                                                                    <option value="num">Num.</option>
                                                                                </select>
                                                                            </td>

                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                                <table class="table p-3 table-bordered table-striped ">
                                                                    <thead>
                                                                        <tr>

                                                                            <th scope="col">Other Expenditures </th>
                                                                            <th scope="col">Current Month Sale </th>
                                                                            <th scope="col">Income Profit</th>
                                                                            <th scope="col">Closing stock </th>
                                                                            <!-- <th scope="col">Surplus
                                                                                <br />Quantity(Qtl./Ltr./Num.)
                                                                            </th> -->
                                                                            <th scope="col">Cumulative Sales/Income </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>


                                                                        <tr>
                                                                            <td>
                                                                                <input name="otherexpenditureqty[]"
                                                                                    class="form-control" type="text"
                                                                                    placeholder="In Fig">
                                                                                <input
                                                                                            name="otherexpenditureamount[]"
                                                                                            class="form-control mt-1" type="number"
                                                                                            placeholder="Amount" step="0.01" />
                                                                                <input
                                                                                            name="otherexpenditurerate[]"
                                                                                            class="form-control mt-1" type="number"
                                                                                            placeholder="Rate" step="0.01" />
                                                                                <select class="form-control mt-1" name="otherexpendituretype[]">
                                                                                    <option value="">Select Unit</option>
                                                                                    <option value="qtl">Qtl. </option>
                                                                                    <option value="ltr">Ltr.</option>
                                                                                    <option value="num">Num.</option>
                                                                                </select>
                                                                            </td>

                                                                            <td>
                                                                                <input name="saleqty[]" class="form-control"
                                                                                    type="text" placeholder="In Fig">
                                                                                <input
                                                                                            name="saleamount[]"
                                                                                            class="form-control mt-1" type="number"
                                                                                            placeholder="Amount" step="0.01" />
                                                                                <input
                                                                                            name="salerate[]"
                                                                                            class="form-control mt-1" type="number"
                                                                                            placeholder="Rate" step="0.01" />
                                                                                <select class="form-control mt-1" name="saletype[]">
                                                                                    <option value="">Select Unit</option>
                                                                                    <option value="qtl">Qtl. </option>
                                                                                    <option value="ltr">Ltr.</option>
                                                                                    <option value="num">Num.</option>
                                                                                </select>
                                                                            </td>

                                                                            <td>
                                                                                <input type="Number" step="0.01" name="income_profit[]" class="form-control" placeholder="Income Profit" />
                                                                            </td>

                                                                            <td>
                                                                                <input name="closingstockqty[]"
                                                                                    class="form-control" type="text"
                                                                                    placeholder="In Fig">
                                                                                <input
                                                                                            name="closingstockamount[]"
                                                                                            class="form-control mt-1" type="number"
                                                                                            placeholder="Amount" step="0.01" />
                                                                                <input
                                                                                            name="closingstockrate[]"
                                                                                            class="form-control mt-1" type="number"
                                                                                            placeholder="Rate" step="0.01" />
                                                                                <select class="form-control mt-1" name="closingstocktype[]">
                                                                                    <option value="">Select Unit</option>
                                                                                    <option value="qtl">Qtl. </option>
                                                                                    <option value="ltr">Ltr.</option>
                                                                                    <option value="num">Num.</option>
                                                                                </select>
                                                                            </td>

                                                                            <!-- <td>
                                                                                <input name="surplusqty[]" class="form-control"
                                                                                    type="text" placeholder="In Fig">
                                                                                <input
                                                                                            name="surplusamount[]"
                                                                                            class="form-control mt-1" type="number"
                                                                                            placeholder="Amount" step="0.01" />
                                                                                <input
                                                                                            name="surplusrate[]"
                                                                                            class="form-control mt-1" type="number"
                                                                                            placeholder="Rate" step="0.01" />
                                                                                <select class="form-control mt-1" name="surplustype[]">
                                                                                    <option value="">Select Type</option>
                                                                                    <option value="qtl">Qtl. </option>
                                                                                    <option value="ltr">Ltr.</option>
                                                                                    <option value="num">Num.</option>
                                                                                </select>
                                                                            </td> -->

                                                                            <td>
                                                                                <input name="cumulativesalesqty[]"
                                                                                    class="form-control" type="text"
                                                                                    placeholder="In Fig">
                                                                                <input
                                                                                            name="cumulativesalesamount[]"
                                                                                            class="form-control mt-1" type="number"
                                                                                            placeholder="Amount" step="0.01" />
                                                                                <input
                                                                                            name="cumulativesalesrate[]"
                                                                                            class="form-control mt-1" type="number"
                                                                                            placeholder="Rate" step="0.01" />
                                                                                <select class="form-control mt-1" name="cumulativesalestype[]">
                                                                                    <option value="">Select Unit</option>
                                                                                    <option value="qtl">Qtl. </option>
                                                                                    <option value="ltr">Ltr.</option>
                                                                                    <option value="num">Num.</option>
                                                                                </select>
                                                                                    <input type="hidden" name="pgssavetype[]"
                                                                                        value="add">
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                    </tbody>



                                                                    </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                            <?php
                                                        } else {
                                                            $i = 1;
                                                            
                                                            if($csdt_previous_month_data){
                                                                foreach($csdt_previous_month_data as $key => $sr){
                                                                    $csdt_new = $csdt[$key];
                                                        ?>
                                                            <div class="monthly-business-table-set">
                                                                    <table class="table p-3 table-bordered table-striped ">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col" width="15%">Commodity
                                                                                    Category</th>
                                                                                <th scope="col" width="20%">Commodity
                                                                                    Sub-Category</th>
                                                                                <th scope="col" width="15%">Commodity Name
                                                                                </th>
                                                                                <th scope="col" width="15%">Opening stock </th>
                                                                                <th scope="col">Procurement </th>
                                                                                <th scope="col">Wastage </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr data-row="<?php echo $i++; ?>">
                                                                            <td>
                                                                                <select class="form-control categoryname" name="categoryname[]" id="categoryname">
                                                                                    <option value="">Select Category</option>
                                                                                    <?php foreach (array_filter($categories) as $categoryname) { ?>
                                                                                        
                                                                                        <option value="<?php echo $categoryname['category']; ?>"
                                                                                            <?php if ( $sr['commoditycategory'] == $categoryname['category']) echo 'selected'; ?>>
                                                                                            <?php echo ucfirst($categoryname['category']); ?>
                                                                                        </option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </td>
                                                                            <td>
                                                                                <select class="form-control" name="sub_category[]">
                                                                                    <option value="">Select Sub-Category</option>
                                                                                    <option value="primary" <?php echo ($sr['commoditysubcategory'] == 'primary') ? 'selected' : ''; ?>>Primary</option>
                                                                                    <option value="secondary" <?php echo ($sr['commoditysubcategory'] == 'secondary') ? 'selected' : ''; ?>>Secondary</option>
                                                                                    <option value="tertiary" <?php echo ($sr['commoditysubcategory'] == 'tertiary') ? 'selected' : ''; ?>>Tertiary</option>
                                                                                </select>

                                                                            </td>
                                                                            <td>
                                                                                <select class="form-control form-control commoditynewname" name="commodityname[]" id="commoditynewname">
                                                                                    <option value="">Select Commodity</option>
                                                                                    <option <?php if($sr['commodity'] != ''){ echo 'selected="selected"';  } ?>><?php echo ucfirst( $sr['commodity']) ?></option>				 
                                                                                </select>
                                                                            </td>

                                                                                <td>
                                                                                    <input name="opstock[]"
                                                                                        value="<?php echo $sr['closingstockqty']; ?>"
                                                                                        class="form-control" type="number" step="0.01"
                                                                                        placeholder="In Fig">
                                                                                    <input name="opamount[]"
                                                                                                value="<?php echo $sr['closingstockamount']; ?>"
                                                                                                class="form-control mt-1" type="number"
                                                                                                placeholder="Amount" step="0.01" />
                                                                                    <input name="oprate[]"
                                                                                                value="<?php echo $sr['closingstockrate']; ?>"
                                                                                                class="form-control mt-1" type="number"
                                                                                                placeholder="Rate" step="0.01" />
                                                                                    <select class="form-control mt-1" name="opstocktype[]">
                                                                                        <option value="">Select Unit</option>
                                                                                        <option value="qtl" <?php if ($sr['opstockunit'] == 'qtl') echo 'selected'; ?>>Qtl. </option>
                                                                                        <option value="ltr" <?php if ($sr['opstockunit'] == 'ltr') echo 'selected'; ?>>Ltr.</option>
                                                                                        <option value="num" <?php if ($sr['opstockunit'] == 'num') echo 'selected'; ?>>Num.</option>
                                                                                    </select>
                                                                                </td>

                                                                                <td>
                                                                                    <input name="procureqty[]"
                                                                                        value=""
                                                                                        class="form-control" type="number" step="0.01"
                                                                                        placeholder="In Fig">
                                                                                    <input name="procureamount[]"
                                                                                            value=""
                                                                                            class="form-control mt-1" type="number"
                                                                                            placeholder="Amount" step="0.01" />
                                                                                    <input name="procurerate[]"
                                                                                            value=""
                                                                                            class="form-control mt-1" type="number"
                                                                                            placeholder="Rate" step="0.01" />
                                                                                    <select class="form-control mt-1" name="procuretype[]">
                                                                                        <option value="">Select Unit</option>
                                                                                        <option value="qtl" <?php if ($sr['procureunit'] == 'qtl') echo 'selected'; ?>>Qtl. </option>
                                                                                        <option value="ltr" <?php if ($sr['procureunit'] == 'ltr') echo 'selected'; ?>>Ltr.</option>
                                                                                        <option value="num" <?php if ($sr['procureunit'] == 'num') echo 'selected'; ?>>Num.</option>
                                                                                    </select>
                                                                                </td>

                                                                                <td>
                                                                                    <input name="procurewastageqty[]"
                                                                                        value=""
                                                                                        class="form-control" type="number" step="0.01"
                                                                                        placeholder="In Fig">
                                                                                    <input name="procurewastageamount[]"
                                                                                        value=""
                                                                                        class="form-control mt-1" type="number"
                                                                                        placeholder="Amount" step="0.01" />
                                                                                    <input name="procurewastagerate[]"
                                                                                        value=""
                                                                                        class="form-control mt-1" type="number"
                                                                                        placeholder="Rate" step="0.01" />
                                                                                    <select class="form-control mt-1" name="procurewastagetype[]">
                                                                                        <option value="">Select Unit</option>
                                                                                        <option value="qtl" <?php if ($sr['procurewastageunit'] == 'qtl') echo 'selected'; ?>>Qtl. </option>
                                                                                        <option value="ltr" <?php if ($sr['procurewastageunit'] == 'ltr') echo 'selected'; ?>>Ltr.</option>
                                                                                        <option value="num" <?php if ($sr['procurewastageunit'] == 'num') echo 'selected'; ?>>Num.</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                    <table class="table p-3 table-bordered table-striped ">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">Other Expenditures </th>
                                                                                <th scope="col">Current Month Sale </th>
                                                                                <th scope="col">Income Profit (Rs)</th>
                                                                                <th scope="col">Closing stock </th>
                                                                                <!-- <th scope="col">Surplus </th> -->
                                                                                <th scope="col">Cumulative Sales/Income </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <input name="otherexpenditureqty[]"
                                                                                        value=""
                                                                                        class="form-control" type="number" step="0.01"
                                                                                        placeholder="In Fig">
                                                                                    <input name="otherexpenditureamount[]"
                                                                                        value=""
                                                                                        class="form-control mt-1" type="number"
                                                                                        placeholder="Amount" step="0.01" />
                                                                                    <input name="otherexpenditurerate[]"
                                                                                        value=""
                                                                                        class="form-control mt-1" type="number"
                                                                                        placeholder="Rate" step="0.01" />
                                                                                    <select class="form-control mt-1" name="otherexpendituretype[]">
                                                                                        <option value="">Select Unit</option>
                                                                                        <option value="qtl" <?php if ($sr['otherexpenditureunit'] == 'qtl') echo 'selected'; ?>>Qtl. </option>
                                                                                        <option value="ltr" <?php if ($sr['otherexpenditureunit'] == 'ltr') echo 'selected'; ?>>Ltr.</option>
                                                                                        <option value="num" <?php if ($sr['otherexpenditureunit'] == 'num') echo 'selected'; ?>>Num.</option>
                                                                                    </select>
                                                                                </td>

                                                                                <td>
                                                                                    <input name="saleqty[]"
                                                                                        value=""
                                                                                        class="form-control" type="number" step="0.01"
                                                                                        placeholder="In Fig">
                                                                                    <input name="saleamount[]"
                                                                                                value=""
                                                                                                class="form-control mt-1" type="number"
                                                                                                placeholder="Amount" step="0.01" />
                                                                                    <input name="salerate[]"
                                                                                                value=""
                                                                                                class="form-control mt-1" type="number"
                                                                                                placeholder="Rate" step="0.01" />
                                                                                    <select class="form-control mt-1" name="saletype[]">
                                                                                        <option value="">Select Unit</option>
                                                                                        <option value="qtl" <?php if ($sr['saleunit'] == 'qtl') echo 'selected'; ?>>Qtl. </option>
                                                                                        <option value="ltr" <?php if ($sr['saleunit'] == 'ltr') echo 'selected'; ?>>Ltr.</option>
                                                                                        <option value="num" <?php if ($sr['saleunit'] == 'num') echo 'selected'; ?>>Num.</option>
                                                                                    </select>
                                                                                </td>

                                                                                <td>
                                                                                    <input type="Number" step="0.01" name="income_profit[]" class="form-control" value="<?php echo $sr['income_profit'] ?>" placeholder="Income Profit" />
                                                                                </td>

                                                                                <td>
                                                                                    <input name="closingstockqty[]"
                                                                                        value=""
                                                                                        class="form-control" type="number" step="0.01"
                                                                                        placeholder="In Fig">
                                                                                    <input
                                                                                                name="closingstockamount[]"
                                                                                                value=""
                                                                                                class="form-control mt-1" type="number"
                                                                                                placeholder="Amount" step="0.01" />
                                                                                    <input
                                                                                                name="closingstockrate[]"
                                                                                                value=""
                                                                                                class="form-control mt-1" type="number"
                                                                                                placeholder="Rate" step="0.01" />
                                                                                    <select class="form-control mt-1" name="closingstocktype[]">
                                                                                        <option value="">Select Unit</option>
                                                                                        <option value="qtl" <?php if ($sr['closingstockunit'] == 'qtl') echo 'selected'; ?>>Qtl. </option>
                                                                                        <option value="ltr" <?php if ($sr['closingstockunit'] == 'ltr') echo 'selected'; ?>>Ltr.</option>
                                                                                        <option value="num" <?php if ($sr['closingstockunit'] == 'num') echo 'selected'; ?>>Num.</option>
                                                                                    </select>
                                                                                </td>

                                                                                <!-- <td>
                                                                                    <input name="surplusqty[]"
                                                                                        value="<?php echo $sr['surplusqty']; ?>"
                                                                                        class="form-control" type="number" step="0.01"
                                                                                        placeholder="In Fig">
                                                                                    <input
                                                                                                name="surplusamount[]"
                                                                                                value="<?php echo $sr['surplusamount']; ?>"
                                                                                                class="form-control mt-1" type="number"
                                                                                                placeholder="Amount" step="0.01" />
                                                                                    <input
                                                                                                name="surplusrate[]"
                                                                                                value="<?php echo $sr['surplusrate']; ?>"
                                                                                                class="form-control mt-1" type="number"
                                                                                                placeholder="Rate" step="0.01" />
                                                                                    <select class="form-control mt-1" name="surplustype[]">
                                                                                        <option value="">Select Unit</option>
                                                                                        <option value="qtl">Qtl. </option>
                                                                                        <option value="ltr">Ltr.</option>
                                                                                        <option value="num">Num.</option>
                                                                                    </select>
                                                                                </td> -->

                                                                                <td>
                                                                                    <input type="hidden" name="cumulativeqty[]" value="<?php echo $sr['cumulativesalesqty']; ?>" />
                                                                                    <input type="hidden" name="cumulativeamount[]" value="<?php echo $sr['cumulativesalesamount']; ?>" />
                                                                                    <input name="cumulativesalesqty[]"
                                                                                        value="<?php echo $sr['cumulativesalesqty']; ?>"
                                                                                        class="form-control" type="number" step="0.01"
                                                                                        placeholder="In Fig">
                                                                                    <input
                                                                                                name="cumulativesalesamount[]"
                                                                                                id="cumulativesalesamount"
                                                                                                value="<?php echo $sr['cumulativesalesamount']; ?>"
                                                                                                class="form-control mt-1" type="number"
                                                                                                placeholder="Amount" step="0.01" />
                                                                                    <input
                                                                                                name="cumulativesalesrate[]"
                                                                                                value="<?php echo $sr['cumulativesalesrate']; ?>"
                                                                                                class="form-control mt-1" type="number"
                                                                                                placeholder="Rate" step="0.01" />
                                                                                    <select class="form-control mt-1" name="cumulativesalestype[]">
                                                                                        <option value="">Select Unit</option>
                                                                                        <option value="qtl" <?php if ($sr['cumulativesalesunit'] == 'qtl') echo 'selected'; ?>>Qtl. </option>
                                                                                        <option value="ltr" <?php if ($sr['cumulativesalesunit'] == 'ltr') echo 'selected'; ?>>Ltr.</option>
                                                                                        <option value="num" <?php if ($sr['cumulativesalesunit'] == 'num') echo 'selected'; ?>>Num.</option>
                                                                                    </select>
                                                                                        <input type="hidden" name="pgssavetype[]"
                                                                                            value="update">
                                                                                        <input type="hidden" name="pgsupportid[]"
                                                                                            value="<?php echo $csdt_new['id']; ?>">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                </div>

                                                        <?php
                                                                }
                                                            }else{
                                                               foreach ($csdt as $sr) {
                                                                ?>

                                                                <div class="monthly-business-table-set">
                                                                    <table class="table p-3 table-bordered table-striped ">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col" width="15%">Commodity
                                                                                    Category</th>
                                                                                <th scope="col" width="20%">Commodity
                                                                                    Sub-Category</th>
                                                                                <th scope="col" width="15%">Commodity Name
                                                                                </th>
                                                                                <th scope="col" width="15%">Opening stock </th>
                                                                                <th scope="col">Procurement </th>
                                                                                <th scope="col">Wastage </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr data-row="<?php echo $i++; ?>">
                                                                            <td>
                                                                                <select class="form-control categoryname" name="categoryname[]" id="categoryname">
                                                                                    <option value="">Select Category</option>
                                                                                    <?php foreach (array_filter($categories) as $categoryname) { ?>
                                                                                        
                                                                                        <option value="<?php echo $categoryname['category']; ?>"
                                                                                            <?php if ($sr['commoditycategory'] == $categoryname['category']) echo 'selected'; ?>>
                                                                                            <?php echo ucfirst($categoryname['category']); ?>
                                                                                        </option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </td>
                                                                            <td>
                                                                                <select class="form-control" name="sub_category[]">
                                                                                    <option value="">Select Sub-Category</option>
                                                                                    <option value="primary" <?php echo ($sr['commoditysubcategory'] == 'primary') ? 'selected' : ''; ?>>Primary</option>
                                                                                    <option value="secondary" <?php echo ($sr['commoditysubcategory'] == 'secondary') ? 'selected' : ''; ?>>Secondary</option>
                                                                                    <option value="tertiary" <?php echo ($sr['commoditysubcategory'] == 'tertiary') ? 'selected' : ''; ?>>Tertiary</option>
                                                                                </select>

                                                                            </td>
                                                                            <td>
                                                                                <select class="form-control form-control commoditynewname" name="commodityname[]" id="commoditynewname">
                                                                                    <option value="">Select Commodity</option>
                                                                                    <option <?php if($sr['commodity'] != ''){ echo 'selected="selected"';  } ?>><?php echo ucfirst($sr['commodity']) ?></option>				 
                                                                                </select>
                                                                            </td>

                                                                                <td>
                                                                                    <input name="opstock[]"
                                                                                        value="<?php echo $sr['opstock']; ?>"
                                                                                        class="form-control" type="number" step="0.01"
                                                                                        placeholder="In Fig">
                                                                                    <input name="opamount[]"
                                                                                                value="<?php echo $sr['opamount']; ?>"
                                                                                                class="form-control mt-1" type="number"
                                                                                                placeholder="Amount" step="0.01" />
                                                                                    <input name="oprate[]"
                                                                                                value="<?php echo $sr['oprate']; ?>"
                                                                                                class="form-control mt-1" type="number"
                                                                                                placeholder="Rate" step="0.01" />
                                                                                    <select class="form-control mt-1" name="opstocktype[]">
                                                                                        <option value="">Select Unit</option>
                                                                                        <option value="qtl" <?php if ($sr['opstockunit'] == 'qtl') echo 'selected'; ?>>Qtl. </option>
                                                                                        <option value="ltr" <?php if ($sr['opstockunit'] == 'ltr') echo 'selected'; ?>>Ltr.</option>
                                                                                        <option value="num" <?php if ($sr['opstockunit'] == 'num') echo 'selected'; ?>>Num.</option>
                                                                                    </select>
                                                                                </td>

                                                                                <td>
                                                                                    <input name="procureqty[]"
                                                                                        value="<?php echo $sr['procureqty']; ?>"
                                                                                        class="form-control" type="number" step="0.01"
                                                                                        placeholder="In Fig">
                                                                                    <input name="procureamount[]"
                                                                                            value="<?php echo $sr['procureamount']; ?>"
                                                                                            class="form-control mt-1" type="number"
                                                                                            placeholder="Amount" step="0.01" />
                                                                                    <input name="procurerate[]"
                                                                                            value="<?php echo $sr['procurerate']; ?>"
                                                                                            class="form-control mt-1" type="number"
                                                                                            placeholder="Rate" step="0.01" />
                                                                                    <select class="form-control mt-1" name="procuretype[]">
                                                                                        <option value="">Select Unit</option>
                                                                                        <option value="qtl" <?php if ($sr['procureunit'] == 'qtl') echo 'selected'; ?>>Qtl. </option>
                                                                                        <option value="ltr" <?php if ($sr['procureunit'] == 'ltr') echo 'selected'; ?>>Ltr.</option>
                                                                                        <option value="num" <?php if ($sr['procureunit'] == 'num') echo 'selected'; ?>>Num.</option>
                                                                                    </select>
                                                                                </td>

                                                                                <td>
                                                                                    <input name="procurewastageqty[]"
                                                                                        value="<?php echo $sr['procurewastageqty']; ?>"
                                                                                        class="form-control" type="number" step="0.01"
                                                                                        placeholder="In Fig">
                                                                                    <input name="procurewastageamount[]"
                                                                                        value="<?php echo $sr['procurewastageamount']; ?>"
                                                                                        class="form-control mt-1" type="number"
                                                                                        placeholder="Amount" step="0.01" />
                                                                                    <input name="procurewastagerate[]"
                                                                                        value="<?php echo $sr['procurewastagerate']; ?>"
                                                                                        class="form-control mt-1" type="number"
                                                                                        placeholder="Rate" step="0.01" />
                                                                                    <select class="form-control mt-1" name="procurewastagetype[]">
                                                                                        <option value="">Select Unit</option>
                                                                                        <option value="qtl" <?php if ($sr['procurewastageunit'] == 'qtl') echo 'selected'; ?>>Qtl. </option>
                                                                                        <option value="ltr" <?php if ($sr['procurewastageunit'] == 'ltr') echo 'selected'; ?>>Ltr.</option>
                                                                                        <option value="num" <?php if ($sr['procurewastageunit'] == 'num') echo 'selected'; ?>>Num.</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                    <table class="table p-3 table-bordered table-striped ">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">Other Expenditures </th>
                                                                                <th scope="col">Current Month Sale </th>
                                                                                <th scope="col">Income Profit (Rs)</th>
                                                                                <th scope="col">Closing stock </th>
                                                                                <!-- <th scope="col">Surplus </th> -->
                                                                                <th scope="col">Cumulative Sales/Income </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <input name="otherexpenditureqty[]"
                                                                                        value="<?php echo $sr['otherexpenditureqty']; ?>"
                                                                                        class="form-control" type="number" step="0.01"
                                                                                        placeholder="In Fig">
                                                                                    <input name="otherexpenditureamount[]"
                                                                                        value="<?php echo $sr['otherexpenditureamount']; ?>"
                                                                                        class="form-control mt-1" type="number"
                                                                                        placeholder="Amount" step="0.01" />
                                                                                    <input name="otherexpenditurerate[]"
                                                                                        value="<?php echo $sr['otherexpenditurerate']; ?>"
                                                                                        class="form-control mt-1" type="number"
                                                                                        placeholder="Rate" step="0.01" />
                                                                                    <select class="form-control mt-1" name="otherexpendituretype[]">
                                                                                        <option value="">Select Unit</option>
                                                                                        <option value="qtl" <?php if ($sr['otherexpenditureunit'] == 'qtl') echo 'selected'; ?>>Qtl. </option>
                                                                                        <option value="ltr" <?php if ($sr['otherexpenditureunit'] == 'ltr') echo 'selected'; ?>>Ltr.</option>
                                                                                        <option value="num" <?php if ($sr['otherexpenditureunit'] == 'num') echo 'selected'; ?>>Num.</option>
                                                                                    </select>
                                                                                </td>

                                                                                <td>
                                                                                    <input name="saleqty[]"
                                                                                        value="<?php echo $sr['saleqty']; ?>"
                                                                                        class="form-control" type="number" step="0.01"
                                                                                        placeholder="In Fig">
                                                                                    <input name="saleamount[]"
                                                                                                value="<?php echo $sr['saleamount']; ?>"
                                                                                                class="form-control mt-1" type="number"
                                                                                                placeholder="Amount" step="0.01" />
                                                                                    <input name="salerate[]"
                                                                                                value="<?php echo $sr['salerate']; ?>"
                                                                                                class="form-control mt-1" type="number"
                                                                                                placeholder="Rate" step="0.01" />
                                                                                    <select class="form-control mt-1" name="saletype[]">
                                                                                        <option value="">Select Unit</option>
                                                                                        <option value="qtl" <?php if ($sr['saleunit'] == 'qtl') echo 'selected'; ?>>Qtl. </option>
                                                                                        <option value="ltr" <?php if ($sr['saleunit'] == 'ltr') echo 'selected'; ?>>Ltr.</option>
                                                                                        <option value="num" <?php if ($sr['saleunit'] == 'num') echo 'selected'; ?>>Num.</option>
                                                                                    </select>
                                                                                </td>

                                                                                <td>
                                                                                    <input type="Number" step="0.01" name="income_profit[]" class="form-control" value="<?php echo $sr['income_profit'] ?>" placeholder="Income Profit" />
                                                                                </td>

                                                                                <td>
                                                                                    <input name="closingstockqty[]"
                                                                                        value="<?php echo $sr['closingstockqty']; ?>"
                                                                                        class="form-control" type="number" step="0.01"
                                                                                        placeholder="In Fig">
                                                                                    <input
                                                                                                name="closingstockamount[]"
                                                                                                value="<?php echo $sr['closingstockamount']; ?>"
                                                                                                class="form-control mt-1" type="number"
                                                                                                placeholder="Amount" step="0.01" />
                                                                                    <input
                                                                                                name="closingstockrate[]"
                                                                                                value="<?php echo $sr['closingstockrate']; ?>"
                                                                                                class="form-control mt-1" type="number"
                                                                                                placeholder="Rate" step="0.01" />
                                                                                    <select class="form-control mt-1" name="closingstocktype[]">
                                                                                        <option value="">Select Unit</option>
                                                                                        <option value="qtl" <?php if ($sr['closingstockunit'] == 'qtl') echo 'selected'; ?>>Qtl. </option>
                                                                                        <option value="ltr" <?php if ($sr['closingstockunit'] == 'ltr') echo 'selected'; ?>>Ltr.</option>
                                                                                        <option value="num" <?php if ($sr['closingstockunit'] == 'num') echo 'selected'; ?>>Num.</option>
                                                                                    </select>
                                                                                </td>

                                                                                <!-- <td>
                                                                                    <input name="surplusqty[]"
                                                                                        value="<?php echo $sr['surplusqty']; ?>"
                                                                                        class="form-control" type="number" step="0.01"
                                                                                        placeholder="In Fig">
                                                                                    <input
                                                                                                name="surplusamount[]"
                                                                                                value="<?php echo $sr['surplusamount']; ?>"
                                                                                                class="form-control mt-1" type="number"
                                                                                                placeholder="Amount" step="0.01" />
                                                                                    <input
                                                                                                name="surplusrate[]"
                                                                                                value="<?php echo $sr['surplusrate']; ?>"
                                                                                                class="form-control mt-1" type="number"
                                                                                                placeholder="Rate" step="0.01" />
                                                                                    <select class="form-control mt-1" name="surplustype[]">
                                                                                        <option value="">Select Unit</option>
                                                                                        <option value="qtl">Qtl. </option>
                                                                                        <option value="ltr">Ltr.</option>
                                                                                        <option value="num">Num.</option>
                                                                                    </select>
                                                                                </td> -->

                                                                                <td>
                                                                                    <input type="hidden" name="cumulativeqty[]" value="<?php echo $sr['cumulativesalesqty']; ?>" />
                                                                                    <input type="hidden" name="cumulativeamount[]" value="<?php echo $sr['cumulativesalesamount']; ?>" />
                                                                                    <input name="cumulativesalesqty[]"
                                                                                        value="<?php echo $sr['cumulativesalesqty']; ?>"
                                                                                        class="form-control" type="number" step="0.01"
                                                                                        placeholder="In Fig">
                                                                                    <input
                                                                                                name="cumulativesalesamount[]"
                                                                                                id="cumulativesalesamount"
                                                                                                value="<?php echo $sr['cumulativesalesamount']; ?>"
                                                                                                class="form-control mt-1" type="number"
                                                                                                placeholder="Amount" step="0.01" />
                                                                                    <input
                                                                                                name="cumulativesalesrate[]"
                                                                                                value="<?php echo $sr['cumulativesalesrate']; ?>"
                                                                                                class="form-control mt-1" type="number"
                                                                                                placeholder="Rate" step="0.01" />
                                                                                    <select class="form-control mt-1" name="cumulativesalestype[]">
                                                                                        <option value="">Select Unit</option>
                                                                                        <option value="qtl" <?php if ($sr['cumulativesalesunit'] == 'qtl') echo 'selected'; ?>>Qtl. </option>
                                                                                        <option value="ltr" <?php if ($sr['cumulativesalesunit'] == 'ltr') echo 'selected'; ?>>Ltr.</option>
                                                                                        <option value="num" <?php if ($sr['cumulativesalesunit'] == 'num') echo 'selected'; ?>>Num.</option>
                                                                                    </select>
                                                                                        <input type="hidden" name="pgssavetype[]"
                                                                                            value="update">
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

                                                            
                                                        }
                                                        ?>
                                                        <!-- <button class="btn btn-danger removeTable mb-3" style="display:none;">-</button> -->
                                                        <div id="tableContainerMonthlyBusiness"></div>

                                                        <div class="col-md-12 text-right mb-1">
                                                            <br>
                                                            <a class="btn btn-primary" onclick="javascript:history.back()"
                                                                style="color:#fff;">Previous</a>
                                                            <!-- <button class="btn btn-primary" type="button" name="submit" value="Signup" onclick="window.location='<?php echo base_url() . 'form-filling/14'; ?>'">Next</button> -->

                                                            <input type="hidden" name="stepno2" value="2">
                                                            <input type="hidden" name="isedit" value="1">
                                                            <input type="hidden" name="pgid"
                                                                value="<?php echo ($this->session->userdata('pgid') == true) ? $this->session->userdata('pgid') : ''; ?>">
                                                            <!-- <button class="btn btn-primary" type="button" name="submit1" value="Signup" onclick="window.location='<?php echo base_url() . 'form-filling/9'; ?>'">Next</button> -->
                                                            <input type="submit" class="btn btn-primary" name="submit1"
                                                                value="Next">
                                                        </div>


                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if ($this->uri->segment(2) == '3') { ?>

                                <div class="row mt-5">

                                    <div class="col-md-12">
                                        <div class="content content-box">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h4 class="m-0"> Finance Transaction</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <?php //print_r($mtd); ?>
                                            <form class="row pr-4 pl-4" method="post">

                                                <div class="col-md-12">
                                                    <br>
                                                    <h6 class="m-0"> MONTHLY TRANSACTION DETAILS</h6><br><br>
                                                    <table class="table p-3 table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col"></th>
                                                                <th scope="col">Cash in hand (Cash Book in Rupees)
                                                                </th>
                                                                <!--th scope="col">Cash in Bank(Bank Book Rs.)</th-->
                                                                <th scope="col">Total (Rs.)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style="font-weight:500;">A. Opening Balance (to
                                                                    be brought forward)</td>
                                                                <td></td>
                                                                <!--td></td-->
                                                                <td><input class="form-control" type="text"
                                                                        name="openingbalance"
                                                                        value="<?php echo isset($mtd[0]['openingbalance']) ? $mtd[0]['openingbalance'] : ''; ?>"
                                                                        placeholder=" "></td>
                                                            </tr>

                                                            <tr>
                                                                <td style="font-weight:500;">Receipts</td>
                                                                <td style="font-weight:500;">Receipts</td>
                                                                <!--td style="font-weight:500;">Payments</td-->
                                                                <td><input class="form-control" type="text" name="receipts"
                                                                        value="<?php echo isset($mtd[0]['receipts']) ? $mtd[0]['receipts'] : ''; ?>"
                                                                        placeholder=" "></td>
                                                            </tr>

                                                            <tr>
                                                                <td style="font-weight:500;">B1. Against sales
                                                                    proceeds</td>
                                                                <td></td>
                                                                <!--td></td-->
                                                                <td><input class="form-control" type="text" name="asp"
                                                                        value="<?php echo isset($mtd[0]['asp']) ? $mtd[0]['asp'] : ''; ?>"
                                                                        placeholder=" "></td>
                                                            </tr>

                                                            <tr>
                                                                <td style="font-weight:500;">B2. Other receipts
                                                                </td>
                                                                <td></td>
                                                                <!--td></td-->
                                                                <td><input class="form-control" type="text" name="otherr"
                                                                        value="<?php echo isset($mtd[0]['otherr']) ? $mtd[0]['otherr'] : ''; ?>"
                                                                        placeholder=" "></td>
                                                            </tr>

                                                            <tr>
                                                                <td style="font-weight:500;">B. Total Receipts</td>
                                                                <td></td>
                                                                <!--td></td-->
                                                                <td><input class="form-control" type="text"
                                                                        name="totalreceipts"
                                                                        value="<?php echo isset($mtd[0]['totalreceipts']) ? $mtd[0]['totalreceipts'] : ''; ?>"
                                                                        placeholder=" "></td>
                                                            </tr>


                                                            <tr>
                                                                <td style="font-weight:500;">C1. Payment against
                                                                    procurement of commodities</td>
                                                                <td>--------</td>
                                                                <!--td></td-->
                                                                <td><input class="form-control" type="text" name="papc"
                                                                        value="<?php echo isset($mtd[0]['papc']) ? $mtd[0]['papc'] : ''; ?>"
                                                                        placeholder=" "></td>
                                                            </tr>

                                                            <tr>
                                                                <td style="font-weight:500;">C2. Commission to
                                                                    Community Cadres (variable payment)</td>
                                                                <td>--------</td>
                                                                <!--td></td-->
                                                                <td><input class="form-control" type="text" name="ctcc"
                                                                        value="<?php echo isset($mtd[0]['ctcc']) ? $mtd[0]['ctcc'] : ''; ?>"
                                                                        placeholder=" "></td>
                                                            </tr>

                                                            <tr>
                                                                <td style="font-weight:500;">C3. Other expenditures
                                                                </td>
                                                                <td>--------</td>
                                                                <!--td></td-->
                                                                <td><input class="form-control" type="text" name="otherex"
                                                                        value="<?php echo isset($mtd[0]['otherex']) ? $mtd[0]['otherex'] : ''; ?>"
                                                                        placeholder=" "></td>
                                                            </tr>

                                                            <tr>
                                                                <td style="font-weight:500;">C. Total
                                                                    Expenditure/Payments</td>
                                                                <td>--------</td>
                                                                <!--td></td-->
                                                                <td><input class="form-control" type="text"
                                                                        name="totalexppay"
                                                                        value="<?php echo isset($mtd[0]['totalexppay']) ? $mtd[0]['totalexppay'] : ''; ?>"
                                                                        placeholder=" "></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>

                                                    <div class="col-md-12 text-right mb-1">
                                                        <br>
                                                        <a class="btn btn-primary" onclick="javascript:history.back()"
                                                            style="color:#fff;">Previous</a>
                                                        <input type="hidden" name="stepno3" value="3">
                                                        <input type="hidden" name="isedit" value="1">
                                                        <input type="hidden" name="pgid"
                                                            value="<?php echo ($this->session->userdata('pgid') == true) ? $this->session->userdata('pgid') : ''; ?>">
                                                        <input type="submit" class="btn btn-primary" name="submit1"
                                                            value="Next">
                                                    </div>


                                                </div>

                                            </form>


                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if ($this->uri->segment(2) == '4') { ?>
                                <div class="row mt-5">
                                    <div class="col-md-12">
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
                                                                <td style="font-weight:500;">Name of the Commodity
                                                                    1.(Primary Commodity)</td>
                                                                <td><input class="form-control" type="text"
                                                                        name="commodityfirst"
                                                                        value="<?php echo isset($cashbook['0']['commodityfirst']) ? $cashbook['0']['commodityfirst'] : '' ?>"
                                                                        placeholder=" "></td>
                                                            </tr>

                                                            <tr>
                                                                <td style="font-weight:500;">Description of
                                                                    Commodities</td>
                                                                <td>
                                                                    <textarea name="commodityfirstdesc"
                                                                        class="form-control">
                                                                                                                                                    <?php echo (isset($cashbook['0']['commodityfirstdesc']) ? $cashbook['0']['commodityfirstdesc'] : '') ?>
                                                                                                                                                </textarea>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td style="font-weight:500;">Name of the Commodity
                                                                    2.(Secondary Commodity)</td>
                                                                <td><input class="form-control" type="text"
                                                                        name="commoditysecond"
                                                                        value="<?php echo isset($cashbook['0']['commoditysecond']) ? $cashbook['0']['commoditysecond'] : ''; ?>"
                                                                        placeholder=" "></td>
                                                            </tr>

                                                            <tr>
                                                                <td style="font-weight:500;">Description of
                                                                    Commodities</td>
                                                                <td>
                                                                    <textarea name="commodityseconddesc"
                                                                        class="form-control">
                                                                                                                                                    <?php echo (isset($cashbook['0']['commodityseconddesc']) ? $cashbook['0']['commodityseconddesc'] : '') ?>
                                                                                                                                                </textarea>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td style="font-weight:500;">Nos of active members
                                                                    sold their products.(Current month) </td>
                                                                <td><input class="form-control" type="text"
                                                                        name="activemembers"
                                                                        value="<?php echo isset($cashbook['0']['activemembers']) ? $cashbook['0']['activemembers'] : ''; ?>"
                                                                        placeholder=" "></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <div class="col-md-12 text-right mb-1">
                                                        <br>
                                                        <a class="btn btn-primary" onclick="javascript:history.back()"
                                                            style="color:#fff;">Previous</a>
                                                        <input type="hidden" name="stepno4" value="4">
                                                        <input type="hidden" name="pgid"
                                                            value="<?php echo ($this->session->userdata('pgid') == true) ? $this->session->userdata('pgid') : ''; ?>">
                                                        <input type="submit" class="btn btn-primary" name="submit1"
                                                            value="Next">
                                                        <input type="hidden" name="isedit" value="1">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if ($this->uri->segment(2) == '5') { ?>
                                <div class="row mt-5">
                                    <div class="col-md-12">
                                        <div class="content content-box">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-11">
                                                        <h6 class="m-0"> Closing Balance</h6><br>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <a href="#" class="btn-sm btn-info" title="Add Task"><i
                                                                class="fa fa-plus"></i></a>
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
                                                                <th scope="col">Cash in hand (Cash Book in Rupees)
                                                                </th>
                                                                <th scope="col">Cash in Bank (Bank Book in Rupees)
                                                                </th>
                                                                <th scope="col">Total (number in Rupees)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input class="form-control" name="cb_cihcb"
                                                                        id="cb_cihcb" value="<?php echo $pgdetails[0]['cb_total']; ?>"
                                                                        type="text" placeholder=" "></td>
                                                                <td><input class="form-control" name="cb_cihbb"
                                                                        id="cb_cihbb" value="<?php echo $pgdetails[0]['cb_cihbb']; ?>"
                                                                        type="text" placeholder=" "></td>
                                                                <td><input class="form-control" name="cb_total"
                                                                        id="cb_total" value="<?php echo $pgdetails[0]['cb_total']; ?>"
                                                                        type="text" placeholder=" "></td>
                                                            </tr>



                                                        </tbody>
                                                    </table>
                                                    <br />
                                                    <h6 class="m-0">Payment yet to be received from the buyer (in
                                                        Rupees)</h6><br />
                                                    <input class="form-control" type="text" name="cb_frombuyer"
                                                        value="<?php echo $pgdetails[0]['cb_frombuyer']; ?>" placeholder=" "><br /><br />
                                                    <h6 class="m-0">Payment yet to be made to producers member (in
                                                        rupees)</h6><br />
                                                    <input class="form-control" type="text" name="cb_payproducermember"
                                                        value="<?php echo $pgdetails[0]['cb_payproducermember']; ?>"
                                                        placeholder=" "><br /><br />

                                                    <div class="col-md-12 text-right mb-1"> <br />
                                                        <a class="btn btn-primary" onclick="javascript:history.back()"
                                                            style="color:#fff;">Previous</a>
                                                        <input type="hidden" name="stepno5" value="5">
                                                        <input type="hidden" name="isedit" value="1">
                                                        <input type="hidden" name="pgid"
                                                            value="<?php echo ($this->session->userdata('pgid') == true) ? $this->session->userdata('pgid') : ''; ?>">
                                                        <input type="submit" class="btn btn-primary" name="submit1"
                                                            value="Next">
                                                    </div>


                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if ($this->uri->segment(2) == '6') { ?>
                                <div class="row mt-5">
                                    <div class="col-md-12">
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
                                                            <div class="form-group"><label for="inputname"
                                                                    style="font-weight:500;" class="col-form-label">Name
                                                                    of Enumerator
                                                                    </label>
                                                                <input type="text" name="finalenumerator_name"
                                                                    value="<?php echo $pgdetails[0]['finalenumerator_name']; ?>"
                                                                    class="form-control col-md-8" id="inputname">
                                                            </div>

                                                            <div class="form-group"><label for="inputname"
                                                                    style="font-weight:500;" class="col-form-label">Name
                                                                    of Block
                                                                    Coordinator</label>
                                                                <input type="text" name="finalpresidentsec_name"
                                                                    value="<?php echo $pgdetails[0]['finalpresidentsec_name']; ?>"
                                                                    class="form-control col-md-8" id="inputname">
                                                            </div> <br />
                                                        </div><br />

                                                        <div class="col-md-6">
                                                            <!--div class="form-group"><label for="inputname" style="font-weight:500;" class="col-form-label">Name of Enumerator</label><input type="text" class="form-control col-md-8" id="inputname"></div-->

                                                            <div class="form-group"><label for="inputname"
                                                                    style="font-weight:500;" class="col-form-label">Name
                                                                    of PG
                                                                    Secretary/President</label>
                                                                <input type="text" name="finalblockcoordinator"
                                                                    value="<?php echo $pgdetails[0]['finalblockcoordinator']; ?>"
                                                                    class="form-control col-md-8" id="inputname">
                                                            </div><br />
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group col-md-12 row"><label for="inputname"
                                                                    style="font-weight:500;">Date:
                                                                    &nbsp;&nbsp;</label>
                                                                <input type="date" name="finaldate"
                                                                    value="<?php echo $pgdetails[0]['finaldate']; ?>"
                                                                    class="form-control col-md-5" id="inputname">
                                                            </div><br />
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group col-md-12 row"><label for="inputname"
                                                                    style="font-weight:500;">Place:&nbsp;&nbsp;&nbsp;</label>
                                                                <input type="text" name="finalplace"
                                                                    value="<?php echo $pgdetails[0]['finalplace']; ?>"
                                                                    class="form-control col-md-5" id="inputname">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-md-12 text-right mb-1"> <br />
                                                        <a class="btn btn-primary" onclick="javascript:history.back()"
                                                            style="color:#fff;">Previous</a>
                                                        <input type="hidden" name="stepno6" value="6">
                                                        <input type="hidden" name="isedit" value="1">
                                                        <input type="hidden" name="pgid"
                                                            value="<?php echo ($this->session->userdata('pgid') == true) ? $this->session->userdata('pgid') : ''; ?>">
                                                        <input type="submit" class="btn btn-primary" name="submit1"
                                                            value="Next">
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if ($this->uri->segment(2) == '7') { ?>

                                <div class="row mt-5">

                                    <div class="col-md-12">
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

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h4 class="mt-4"><strong>Monthly Business Summary:</strong></h4>
                                                                <h6 class="mt-4">COMMODITY WISE BUSINESS DURING THE MONTH</h6>
                                                                <br>

                                                                <?php
                                                                    $i = 1;
                                                                    foreach($csdt as $mbs){
                                                                ?>
                                                                <table class="table table-bordered">
                                                                    <tbody>

                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th><?php echo $i++; ?></th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th width="40%">Commodity Category
                                                                            </th>
                                                                            <td><?php echo ucfirst($mbs['commoditycategory']) ?? 'N/A'; ?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th width="40%">Commodity Sub-Category
                                                                            </th>
                                                                            <td><?php echo ucfirst($mbs['commoditysubcategory']) ?? 'N/A'; ?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th width="40%">Commodity Name
                                                                            </th>
                                                                            <td><?php echo ucfirst($mbs['commodity']) ?? 'N/A'; ?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th width="40%" rowspan="3">Opening stock (Qtl./Ltr./Num.) </th>
                                                                            <td>
                                                                                <strong>Opening Stock Quantity : </strong>
                                                                                <?php echo ucfirst($mbs['opstock']) ?? 'N/A'; ?> 
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <strong>Opening Rate : </strong>
                                                                                <?php echo ucfirst($mbs['oprate']) ?? 'N/A'; ?> 
                                                                            </td>   
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <strong>Opening Amount : </strong>
                                                                                <?php echo ucfirst($mbs['opamount']) ?? 'N/A'; ?>
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <th width="40%" rowspan="3">Procurement Quantity (Qtl./Ltr./Num.) </th>
                                                                            <td>
                                                                                <strong>Procurement Quantity : </strong>
                                                                                <?php echo ucfirst($mbs['procureqty']) ?? 'N/A'; ?> 
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <strong>Procurement Rate : </strong>
                                                                                <?php echo ucfirst($mbs['procurerate']) ?? 'N/A'; ?> 
                                                                            </td>   
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <strong>Procurement Amount : </strong>
                                                                                <?php echo ucfirst($mbs['procureamount']) ?? 'N/A'; ?>
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <th width="40%" rowspan="3">Wastage Quantity (Qtl./Ltr./Num.) </th>
                                                                            <td>
                                                                                <strong>Wastage Quantity : </strong>
                                                                                <?php echo ucfirst($mbs['procurewastageqty']) ?? 'N/A'; ?> 
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <strong>Wastage Rate : </strong>
                                                                                <?php echo ucfirst($mbs['procurewastagerate']) ?? 'N/A'; ?> 
                                                                            </td>   
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <strong>Wastage Amount : </strong>
                                                                                <?php echo ucfirst($mbs['procurewastageamount']) ?? 'N/A'; ?>
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <th width="40%" rowspan="3">Other Expenditure Quantity (Qtl./Ltr./Num.) </th>
                                                                            <td>
                                                                                <strong>Other Expenditure Quantity : </strong>
                                                                                <?php echo ucfirst($mbs['otherexpenditureqty']) ?? 'N/A'; ?> 
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <strong>Other Expenditure Rate : </strong>
                                                                                <?php echo ucfirst($mbs['otherexpenditurerate']) ?? 'N/A'; ?> 
                                                                            </td>   
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <strong>Other Expenditure Amount : </strong>
                                                                                <?php echo ucfirst($mbs['otherexpenditureamount']) ?? 'N/A'; ?>
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <th width="40%" rowspan="3">Sale Quantity (Qtl./Ltr./Num.) </th>
                                                                            <td>
                                                                                <strong>Sale Quantity : </strong>
                                                                                <?php echo ucfirst($mbs['saleqty']) ?? 'N/A'; ?> 
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <strong>Sale Rate : </strong>
                                                                                <?php echo ucfirst($mbs['salerate']) ?? 'N/A'; ?> 
                                                                            </td>   
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <strong>Sale Amount : </strong>
                                                                                <?php echo ucfirst($mbs['saleamount']) ?? 'N/A'; ?>
                                                                            </td>    
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Income Profit</th>
                                                                            <td>
                                                                                <?php echo ucfirst($mbs['income_profit']) ?? '0' ?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th width="40%" rowspan="3">Closing Stock (Qtl./Ltr./Num.) </th>
                                                                            <td>
                                                                                <strong>Closing Stock Quantity : </strong>
                                                                                <?php echo ucfirst($mbs['closingstockqty']) ?? 'N/A'; ?> 
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <strong>Closing Stock Rate : </strong>
                                                                                <?php echo ucfirst($mbs['closingstockrate']) ?? 'N/A'; ?> 
                                                                            </td>   
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <strong>Closing Stock Amount : </strong>
                                                                                <?php echo ucfirst($mbs['closingstockamount']) ?? 'N/A'; ?>
                                                                            </td>    
                                                                        </tr>
                                                                        <!-- <tr>
                                                                            <th width="40%" rowspan="3">Surplus Quantity (Qtl./Ltr./Num.) </th>
                                                                            <td>
                                                                                <strong>Surplus Quantity : </strong>
                                                                                <?php echo ucfirst($mbs['surplusqty']) ?? 'N/A'; ?> 
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <strong>Surplus Rate : </strong>
                                                                                <?php echo ucfirst($mbs['surplusrate']) ?? 'N/A'; ?> 
                                                                            </td>   
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <strong>Surplus Amount : </strong>
                                                                                <?php echo ucfirst($mbs['surplusamount']) ?? 'N/A'; ?>
                                                                            </td>    
                                                                        </tr> -->
                                                                        <tr>
                                                                            <th width="40%" rowspan="3">Cumulative Sales/Income Quantity (Qtl./Ltr./Num.) </th>
                                                                            <td>
                                                                                <strong>Cumulative Sales/Income Quantity : </strong>
                                                                                <?php echo ucfirst($mbs['cumulativesalesqty']) ?? 'N/A'; ?> 
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <strong>Cumulative Sales/Income Rate : </strong>
                                                                                <?php echo ucfirst($mbs['cumulativesalesrate']) ?? 'N/A'; ?> 
                                                                            </td>   
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <strong>Cumulative Sales/Income Amount : </strong>
                                                                                <?php echo ucfirst($mbs['cumulativesalesamount']) ?? 'N/A'; ?>
                                                                            </td>    
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <?php
                                                                    }
                                                                ?>

                                                                <!-- <h4 class="mt-4"><strong>Finance Transaction:</strong></h4>
                                                                <h6>MONTHLY TRANSACTION DETAILS</h6><br>

                                                                <table class="table p-3 table-bordered table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col"></th>
                                                                            <th scope="col">Total (Rs.)</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th width="40%">A. Opening Balance (to be brought forward)</th>
                                                                            <td><?php echo isset($mtd[0]['openingbalance']) ? $mtd[0]['openingbalance'] : ''; ?></td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th width="40%">Receipts</th>
                                                                            <td><?php echo isset($mtd[0]['receipts']) ? $mtd[0]['receipts'] : ''; ?></td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th width="40%">B1. Against sales proceeds</th>
                                                                            <td><?php echo isset($mtd[0]['asp']) ? $mtd[0]['asp'] : ''; ?></td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th width="40%">B2. Other receipts </th>
                                                                            <td><?php echo isset($mtd[0]['otherr']) ? $mtd[0]['otherr'] : ''; ?></td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th width="40%">B. Total Receipts</th>
                                                                            <td><?php echo isset($mtd[0]['totalreceipts']) ? $mtd[0]['totalreceipts'] : ''; ?></td>
                                                                        </tr>


                                                                        <tr>
                                                                            <th width="40%">C1. Payment against procurement of commodities</th>
                                                                            <td><?php echo isset($mtd[0]['papc']) ? $mtd[0]['papc'] : ''; ?> </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th width="40%">C2. Commission to Community Cadres (variable payment)</th>
                                                                            <td><?php echo isset($mtd[0]['ctcc']) ? $mtd[0]['ctcc'] : ''; ?></td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th width="40%">C3. Other expenditures </th>
                                                                            <td><?php echo isset($mtd[0]['otherex']) ? $mtd[0]['otherex'] : ''; ?></td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th width="40%">C. Total Expenditure/Payments</th>
                                                                            <td><?php echo isset($mtd[0]['totalexppay']) ? $mtd[0]['totalexppay'] : ''; ?></td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table> -->

                                                                <!-- <h4 class="mt-4"><strong>Cash Book:</strong></h4>
                                                                <h6>Details of Commodity</h6><br>
                                                                    
                                                                <table class="table p-3 table-bordered table-striped">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th width="40%">Name of the Commodity 1.(Primary Commodity)</th>
                                                                            <td><?php echo isset($cashbook['0']['commodityfirst']) ? $cashbook['0']['commodityfirst'] : '' ?></td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th width="40%">Description of Commodities</th>
                                                                            <td>
                                                                                <?php echo (isset($cashbook['0']['commodityfirstdesc']) ? $cashbook['0']['commodityfirstdesc'] : '') ?>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th width="40%">Name of the Commodity 2.(Secondary Commodity)</th>
                                                                            <td><?php echo isset($cashbook['0']['commoditysecond']) ? $cashbook['0']['commoditysecond'] : ''; ?></td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th width="40%">Description of Commodities</th>
                                                                            <td>
                                                                                <?php echo (isset($cashbook['0']['commodityseconddesc']) ? $cashbook['0']['commodityseconddesc'] : '') ?>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th width="40%">Nos of active members sold their products.(Current month) </th>
                                                                            <td><?php echo isset($cashbook['0']['activemembers']) ? $cashbook['0']['activemembers'] : ''; ?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table> -->

                                                                <!-- <h4 class="mt-4"><strong>Closing Balance:</strong></h4>
                                                                <h6>CLOSING BALANCE (A+B-C)</h6><br>

                                                                <table class="table p-3 table-bordered table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">Cash in hand (Cash Book in Rupees)</th>
                                                                            <th scope="col">Total (number in Rupees)</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th width="40%">Cash in hand (Cash Book in Rupees)</th>
                                                                            <td><?php echo $pgdetails[0]['cb_cihcb']; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th width="40%">Cash in Bank (Bank Book in Rupees)</th>
                                                                            <td><?php echo $pgdetails[0]['cb_cihbb']; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th width="40%">Total (number in Rupees)</th>
                                                                            <td><?php echo $pgdetails[0]['cb_total']; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th width="40%">Payment yet to be received from the buyer (in Rupees)</th>
                                                                            <td><?php echo $pgdetails[0]['cb_frombuyer']; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th width="40%">Payment yet to be made to producers member (in rupees)</th>
                                                                            <td><?php echo $pgdetails[0]['cb_payproducermember']; ?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table> -->

                                                                <h4 class="mt-4"><strong>Final:</strong> </h4><br>

                                                                <table class="table table-bordered">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th width="40%">Name of Enumerator</th>
                                                                            <td> <?php echo $pgdetails[0]['finalenumerator_name']; ?> </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th width="40%">Name of PG Secretary/President</th>
                                                                            <td> <?php echo $pgdetails[0]['finalpresidentsec_name']; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th width="40%">Name of Block Coordinator</th>
                                                                            <td> <?php echo $pgdetails[0]['finalblockcoordinator']; ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th width="40%">Date</th>
                                                                            <td> <?php echo $pgdetails[0]['finaldate']; ?> </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th width="40%">Place</th>
                                                                            <td> <?php echo $pgdetails[0]['finalplace']; ?> </td>
                                                                        </tr>
                                                                       
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                        </div>

                                                    </div>



                                                    <div class="col-md-12 text-right mb-1">
                                                        <a class="btn btn-primary" onclick="javascript:history.back()"
                                                            style="color:#fff;">Previous</a>
                                                        <input type="hidden" name="stepno7" value="7">
                                                        <input type="hidden" name="isedit" value="1">
                                                        <input type="submit" class="btn btn-primary" style="background:#2B78E4;" name="submit1" value="submit">
                                                        <!-- <button class="btn btn-primary" type="button" name="submit"
                                                            value="Signup" style="background:#2B78E4;">Submit</button>
                                                        <button class="btn btn-primary" type="button" name="submit"
                                                            value="Signup" style="background:#8E7CC3;">Review</button> -->
                                                    </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>

                    <script>
                        $(document).ready(function () {

                           $('#categoryname').change(function(){
                                var categoryname = $(this).val();
                                var row = $(this).closest('tr');
                                var commodityDropdown = row.find('.commoditynewname'); // no id now

                                if (categoryname !== '') {
                                    $.ajax({
                                        url: "<?php echo base_url(); ?>pg/fetchcommodity",
                                        method: "POST",
                                        data: { categoryname: categoryname },
                                        success: function (data) {
                                            commodityDropdown.html(data);
                                        }
                                    });
                                } else {
                                    commodityDropdown.html('<option value="">Select Commodity</option>');
                                }
                            });


                            // $('#categoryname').change(function(){
                            //     var row = $(this).data('row');
                            //     // alert(row);
                            //     var categoryname = $('#categoryname').val();
                            //     //alert(subcategoryname);
                            //     if(categoryname != '')
                            //     {
                            //         $.ajax({
                            //             url:"<?php echo base_url(); ?>pg/fetchcommodity",
                            //             method:"POST",
                            //             data:{categoryname:categoryname},
                            //             success:function(data)
                            //             {
                            //                 //alert(data);
                            //             $('.commoditynewname').html(data);
                            //             }
                            //         });
                            //     }
                            //     else
                            //     {
                            //         $('#commoditynewname').html('<option value="">Select Commodity</option>');
                            //     }
                            // });
                            
                            // $('#categoryname').change(function () {
                            //     var categoryname = $('#categoryname').val();

                            //     if (categoryname != '') {
                            //         $.ajax({
                            //             url: "<?php echo base_url(); ?>pg/fetchsubcategory",
                            //             method: "POST",
                            //             data: { categoryname: categoryname },
                            //             success: function (data) {
                            //                 // alert(data);
                            //                 $('#subcategoryname').html(data);

                            //             }
                            //         });
                            //     }
                            //     else {
                            //         $('#categoryname').html('<option value="">Select Category</option>');
                            //         $('#subcategoryname').html('<option value="">Select SubCategory</option>');
                            //     }
                            // });

                            // $('#subcategoryname').change(function () {
                            //     var subcategoryname = $('#subcategoryname').val();
                            //     //alert(subcategoryname);
                            //     if (subcategoryname != '') {
                            //         $.ajax({
                            //             url: "<?php echo base_url(); ?>pg/fetchcommodity",
                            //             method: "POST",
                            //             data: { subcategoryname: subcategoryname },
                            //             success: function (data) {
                            //                 //alert(data);
                            //                 $('#commoditynewname').html(data);
                            //             }
                            //         });
                            //     }
                            //     else {
                            //         $('#commoditynewname').html('<option value="">Select Commodity</option>');
                            //     }
                            // });

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
                                if (grampanchayat != '') {
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

                            $('#villagename').change(function () {
                                var villagename = $('#villagename').val();
                                //alert(villagename);
                                if (villagename != '') {
                                    $.ajax({
                                        url: "<?php echo base_url(); ?>admin-manager/fetchproducergroup",
                                        method: "POST",
                                        data: { villagename: villagename },
                                        success: function (data) {
                                            console.log(data);
                                            $('#producergroupname').html(data);
                                        }
                                    });
                                }
                                else {
                                    $('#producergroupname').html('<option value="">Select Producer Group</option>');
                                }
                            });
                        });
                    </script>

                    <!-- Created add more for the Monthly business summary -->
                    <script>
                        $(document).ready(function () {
                            // Add new table
                            $("#addTable").click(function () {
                                var newTable = $(".monthly-business-table-set:first").clone();
                                newTable.find("input").val("");
                                newTable.css('margin-top', '50px');
                                newTable.append('<button class="btn-sm btn-danger removeTable"><i class="fa fa-minus"></i></button>');
                                $("#tableContainerMonthlyBusiness").append(newTable);
                                toggleRemoveButton();
                            });

                            //Remove table
                            function toggleRemoveButton() {
                                $(".monthly-business-table-set").each(function (index) {
                                    if (index >= 1) {
                                        $(this).find(".removeTable").show(); 
                                    } else {
                                        $(this).find(".removeTable").hide();
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

                           $(document).on('change', '.categoryname', function () {
                                var categoryname = $(this).val();
                                var $row = $(this).closest('.monthly-business-table-set');
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

                    <!-- <script>
                        $(document).ready(function () {
                            $(document).on('change', '.categoryname', function () {
                                alert('new commodity');
                                var categoryname = $(this).val();
                                var $row = $(this).closest('.monthly-business-table-set');
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
                    </script> -->

                    <!-- Calculations -->
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function() {

                            var comulativeRate = $('input[name="cumulativesalesrate[]"]').val();
                            var comulativeAmount = $('input[name="cumulativesalesamount[]"]').val();
                            var comulativeQty = $('input[name="cumulativesalesqty[]"]').val();

                            //Opening stock
                            $(document).on('input','input[name="opstock[]"], input[name="oprate[]"]', function() {
                                var row = $(this).closest('.monthly-business-table-set');
                                var n1 = parseFloat(row.find('input[name="opstock[]"]').val()) || 0;
                                var n2 = parseFloat(row.find('input[name="oprate[]"]').val()) || 0;
                                var total = n1 * n2;
                                row.find('input[name="opamount[]"]').val(total);

                                updateClosingStock(row);
                                updateIncomeProfit(row);
                            });

                            //Procurement Quantity
                            $(document).on('input','input[name="procureqty[]"], input[name="procurerate[]"]', function() {
                                var row = $(this).closest('.monthly-business-table-set');
                                var n1 = parseFloat(row.find('input[name="procureqty[]"]').val()) || 0;
                                var n2 = parseFloat(row.find('input[name="procurerate[]"]').val()) || 0;
                                var total = n1 * n2;
                                row.find('input[name="procureamount[]"]').val(total);

                                updateClosingStock(row);
                                updateIncomeProfit(row);
                            });

                            //Wastage Quantity
                            $(document).on('input','input[name="procurewastageqty[]"], input[name="procurewastagerate[]"]', function() {
                                var row = $(this).closest('.monthly-business-table-set');
                                var n1 = parseFloat(row.find('input[name="procurewastageqty[]"]').val()) || 0;
                                var n2 = parseFloat(row.find('input[name="procurewastagerate[]"]').val()) || 0;
                                var total = n1 * n2;
                                row.find('input[name="procurewastageamount[]"]').val(total);

                                updateClosingStock(row);
                                updateIncomeProfit(row);
                            });

                            //Other Expenditure
                            $(document).on('input','input[name="otherexpenditureqty[]"], input[name="otherexpenditurerate[]"], input[name="otherexpenditureamount[]"]', function() {
                                var row = $(this).closest('.monthly-business-table-set');
                                var n1 = parseFloat(row.find('input[name="otherexpenditureqty[]"]').val()) || 0;
                                var n2 = parseFloat(row.find('input[name="otherexpenditurerate[]"]').val()) || 0;
                                // var total = n1 * n2;
                                // row.find('input[name="otherexpenditureamount[]"]').val(total);

                                var amountField = row.find('input[name="otherexpenditureamount[]"]');
                                if (!amountField.is(':focus')) {
                                    var total = n1 * n2;
                                    amountField.val(total);
                                }

                                updateClosingStock(row);
                                updateIncomeProfit(row);
                            });

                            //Sale Quantity
                            $(document).on('input','input[name="saleqty[]"], input[name="salerate[]"]', function() {
                                var row = $(this).closest('.monthly-business-table-set');
                                var n1 = parseFloat(row.find('input[name="saleqty[]"]').val()) || 0;
                                var n2 = parseFloat(row.find('input[name="salerate[]"]').val()) || 0;
                                var total = n1 * n2;
                                row.find('input[name="saleamount[]"]').val(total);

                                updateClosingStock(row);
                                updateIncomeProfit(row);
                            });

                            //Closing Stock
                            // $(document).on('input','input[name="closingstockqty[]"], input[name="closingstockrate[]"]', function() {
                            //     var row = $(this).closest('.monthly-business-table-set');
                            //     var opstock = parseFloat(row.find('input[name="opstock[]"]').val()) || 0;
                            //     var oprate = parseFloat(row.find('input[name="oprate[]"]').val()) || 0;
                            //     var opamount = parseFloat(row.find('input[name="opamount[]"]').val()) || 0;
                                
                            //     var total = n1 * n2;
                            //     row.find('input[name="saleamount[]"]').val(total);
                            // });
                            function updateClosingStock(row) {
                                var opstock = parseFloat(row.find('input[name="opstock[]"]').val()) || 0;
                                var opamount = parseFloat(row.find('input[name="opamount[]"]').val()) || 0;
                                var oprate = parseFloat(row.find('input[name="oprate[]"]').val()) || 0;                                

                                var procureqty = parseFloat(row.find('input[name="procureqty[]"]').val()) || 0;
                                var procureamount = parseFloat(row.find('input[name="procureamount[]"]').val()) || 0;
                                var procurerate = parseFloat(row.find('input[name="procurerate[]"]').val()) || 0;

                                var wastageqty = parseFloat(row.find('input[name="procurewastageqty[]"]').val()) || 0;
                                var wastageamount = parseFloat(row.find('input[name="procurewastageamount[]"]').val()) || 0;

                                var otherexpenditureqty = parseFloat(row.find('input[name="otherexpenditureqty[]"]').val()) || 0;
                                var otherexpenditureamount = parseFloat(row.find('input[name="otherexpenditureamount[]"]').val()) || 0;

                                var saleqty = parseFloat(row.find('input[name="saleqty[]"]').val()) || 0;
                                var saleamount = parseFloat(row.find('input[name="saleamount[]"]').val()) || 0;

                                var closingStockQty = opstock + procureqty - wastageqty - otherexpenditureqty - saleqty;
                                var closingStockAmount = opamount + procureamount - wastageamount - otherexpenditureamount - saleamount;
                                if (closingStockQty < 0) {
                                    closingStockQty = 0;
                                }
                                if (closingStockAmount < 0) {
                                    closingStockAmount = 0;
                                }

                                row.find('input[name="closingstockqty[]"]').val(closingStockQty);
                                row.find('input[name="closingstockamount[]"]').val(closingStockAmount);
                                row.find('input[name="closingstockrate[]"]').val(oprate ? oprate : procurerate);
                            }

                            function updateIncomeProfit(row){
                                var opstock = parseFloat(row.find('input[name="opstock[]"]').val()) || 0;
                                var opamount = parseFloat(row.find('input[name="opamount[]"]').val()) || 0;
                                var oprate = parseFloat(row.find('input[name="oprate[]"]').val()) || 0;

                                var procurerate = parseFloat(row.find('input[name="procurerate[]"]').val()) || 0;

                                var wastageqty = parseFloat(row.find('input[name="procurewastageqty[]"]').val()) || 0;
                                var wastageamount = parseFloat(row.find('input[name="procurewastageamount[]"]').val()) || 0;

                                var otherexpenditureqty = parseFloat(row.find('input[name="otherexpenditureqty[]"]').val()) || 0;
                                var otherexpenditureamount = parseFloat(row.find('input[name="otherexpenditureamount[]"]').val()) || 0;

                                var saleqty = parseFloat(row.find('input[name="saleqty[]"]').val()) || 0;
                                var saleamount = parseFloat(row.find('input[name="saleamount[]"]').val()) || 0;
                                var salerate = parseFloat(row.find('input[name="salerate[]"]').val()) || 0;

                                var cumulativesalesqty = parseFloat(row.find("input[name='cumulativeqty[]").val()) || 0;
                                var cumulativesalesamount = parseFloat(row.find("input[name='cumulativeamount[]").val()) || 0;

                                var incomeProfitRate = salerate - (oprate ? oprate : procurerate);
                                var incomeProfitAmount =  (incomeProfitRate * saleqty) - otherexpenditureamount;

                                row.find('input[name="income_profit[]"]').val(incomeProfitAmount);

                                /** Cumulative Profit */                           
                                console.log(cumulativesalesamount, incomeProfitAmount);
                                comulativeAmount = cumulativesalesamount + incomeProfitAmount;
                                comulativeQty = cumulativesalesqty + saleqty;

                                row.find('input[name="cumulativesalesamount[]"]').val(comulativeAmount);
                                row.find('input[name="cumulativesalesqty[]"]').val(comulativeQty);
                                row.find('input[name="cumulativesalesrate[]"]').val(incomeProfitRate);
                            }

                            //Surplus Quantity
                            // $(document).on('input','input[name="surplusqty[]"], input[name="surplusrate[]"]', function() {
                            //     var row = $(this).closest('.monthly-business-table-set');
                            //     var n1 = parseFloat(row.find('input[name="surplusqty[]"]').val()) || 0;
                            //     var n2 = parseFloat(row.find('input[name="surplusrate[]"]').val()) || 0;
                            //     var total = n1 * n2;
                            //     row.find('input[name="surplusamount[]"]').val(total);
                            // });

                            //Cumulative Sales/Income Quantity
                            $(document).on('input','input[name="cumulativesalesqty[]"], input[name="cumulativesalesrate[]"]', function() {
                                var row = $(this).closest('.monthly-business-table-set');
                                var n1 = parseFloat(row.find('input[name="cumulativesalesqty[]"]').val()) || 0;
                                var n2 = parseFloat(row.find('input[name="cumulativesalesrate[]"]').val()) || 0;
                                var total = n1 * n2;
                                row.find('input[name="cumulativesalesamount[]"]').val(total);
                            });
                        });
                    </script>

                </div>

            </div>
        </div>
    </div>
</section>



