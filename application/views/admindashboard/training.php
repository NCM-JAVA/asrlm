<section>
    <div class="container-fluid">
        <div class="row list-view">
            <div class="col-md-2">
                <?php $this->load->view('include/sidebar'); ?>
            </div>
            <div class="col-md-10">
                <div class="content content-box">
                    <?php if ($this->uri->segment(2) !== '6' && $this->uri->segment(2) !== '7') { ?>
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="m-0"> Training</h4>
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

                        <?php if (isset($success_message)){ ?>
							<div class="alert alert-success alert-dismissible fade show" id="successMessage">
								<?php echo $success_message; ?>
							</div>

							<script>
								setTimeout(function () {
									$('#successMessage').fadeOut('slow');
								}, 5000); // change duration as needed
							</script>
						<?php } ?>
                        
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
                                    <div class="col-md-12 text-right">
                                        <input type="hidden" name="stepno" value="1">
                                        <input type="hidden" name="isedit" value="1">
                                        <input type="hidden" name="pgid"
                                            value="<?php echo ($this->session->userdata('pgid') == true) ? $this->session->userdata('pgid') : ''; ?>">
                                        <input type="submit" class="btn btn-primary" name="submit1" value="Next">
                                    </div>
                            </form>

                            <div>
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
                                                onclick="window.location.href='<?php echo base_url(); ?>training/6?tltype=agri'">Agricuture</button>
                                        </div>
                                        <div class="col-md-2"><button type="button"
                                                class="btn btn-<?php echo ($this->input->get('tltype') == 'horti') ? 'success' : 'primary'; ?>"
                                                onclick="window.location.href='<?php echo base_url(); ?>training/6?tltype=horti'">Horticulture</button>
                                        </div>
                                        <div class="col-md-2"><button type="button"
                                                class="btn btn-<?php echo ($this->input->get('tltype') == 'livestocks') ? 'success' : 'primary'; ?>"
                                                onclick="window.location.href='<?php echo base_url(); ?>training/6?tltype=livestocks'">Livestocks</button>
                                        </div>
                                        <div class="col-md-2"><button type="button"
                                                class="btn btn-<?php echo ($this->input->get('tltype') == 'fishery') ? 'success' : 'primary'; ?>"
                                                onclick="window.location.href='<?php echo base_url(); ?>training/6?tltype=fishery'">Fishery</button>
                                        </div>
                                        <div class="col-md-2"><button type="button"
                                                class="btn btn-<?php echo ($this->input->get('tltype') == 'sericulture') ? 'success' : 'primary'; ?>"
                                                onclick="window.location.href='<?php echo base_url(); ?>training/6?tltype=sericulture'">Sericulture</button>
                                        </div>
                                        <div class="col-md-2"><button type="button"
                                                class="btn btn-<?php echo ($this->input->get('tltype') == 'others') ? 'success' : 'primary'; ?>"
                                                onclick="window.location.href='<?php echo base_url(); ?>training/6?tltype=others'">Others</button>
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
                                                        <?php $TLAgriculture = explode(',', $training['TLAgriculture']); ?>
                                                        <tr>
                                                            <td style="font-weight:500;">1.</td>
                                                            <td style="font-weight:500;">Basic Livelihoods Training</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select class="form-control  col-md-7" name="TLAgriculture[]">
                                                                    <option value="Basic Livelihoods Training" <?php echo (stristr($TLAgriculture[0], 'Basic Livelihoods Training') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes
                                                                    </option>
                                                                    <option value="" <?php echo (stristr($TLAgriculture[0], 'Basic Livelihoods Training') == false ? 'selected="selected"' : ''); ?>>No
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">2.</td>
                                                            <td style="font-weight:500;">Farmers Field School</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select class="form-control  col-md-7" name="TLAgriculture[]">
                                                                    <option value="Farmers Field School" <?php echo (stristr($TLAgriculture[1], 'Farmers Field School') == true ? 'selected="selected"' : ''); ?>>Yes
                                                                    </option>
                                                                    <option value="" <?php echo (stristr($TLAgriculture[1], 'Farmers Field School') == false ? 'selected="selected"' : ''); ?>>No
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-weight:500;">3.</td>
                                                            <!-- <td style="font-weight:500;">Pashu Pathshala</td> -->
                                                            <td style="font-weight:500;">Irrigation and fertigation
                                                                management</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select class="form-control  col-md-7" name="TLAgriculture[]">
                                                                    <option value="Irrigation and fertigation management" <?php echo (stristr($TLAgriculture[2], 'Irrigation and fertigation management') == true ? 'selected="selected"' : ''); ?>>Yes</option>
                                                                    <option value="" <?php echo (stristr($TLAgriculture[2], 'Irrigation and fertigation management') == false ? 'selected="selected"' : ''); ?>>
                                                                        No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">4.</td>
                                                            <td style="font-weight:500;">Seed Sorting & treatment</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select class="form-control  col-md-7" name="TLAgriculture[]">
                                                                    <option value="Seed Sorting & treatment" <?php echo (stristr($TLAgriculture[3], 'Seed Sorting & treatment') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes
                                                                    </option>
                                                                    <option value="" <?php echo (stristr($TLAgriculture[3], 'Seed Sorting & treatment') == false ? 'selected="selected"' : ''); ?>>No
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">5.</td>
                                                            <!-- <td style="font-weight:500;">Land preparation,ploughing,Tractorisation/Manual</td> -->
                                                            <td style="font-weight:500;">Cutivation of harvest &
                                                                post-harvest management & value addition</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select class="form-control  col-md-7" name="TLAgriculture[]">
                                                                    <option
                                                                        value="Cutivation of harvest & post-harvest management & value addition"
                                                                        <?php echo (stristr($TLAgriculture[4], 'Cutivation of harvest & post-harvest management & value addition') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes
                                                                    </option>
                                                                    <option value="" <?php echo (stristr($TLAgriculture[4], 'Cutivation of harvest & post-harvest management & value addition') == false ? 'selected="selected"' : ''); ?>>No
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">6.</td>
                                                            <!-- <td style="font-weight:500;">Soil Nutrients Management</td> -->
                                                            <td style="font-weight:500;">Intregrated Pest management</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select class="form-control  col-md-7" name="TLAgriculture[]">
                                                                    <option value="Intregrated Pest management" <?php echo (stristr($TLAgriculture[5], 'Intregrated Pest management') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes</option>
                                                                    <option value="" <?php echo (stristr($TLAgriculture[5], 'Intregrated Pest management') == false ? 'selected="selected"' : ''); ?>>
                                                                        No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">7.</td>
                                                            <!-- <td style="font-weight:500;">Pest Management</td> -->
                                                            <td style="font-weight:500;">Branding, Sorting & Packaging</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select class="form-control  col-md-7" name="TLAgriculture[]">
                                                                    <option value="Branding, Sorting & Packaging" <?php echo (stristr($TLAgriculture[6], 'Branding, Sorting & Packaging') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes
                                                                    </option>
                                                                    <option value="" <?php echo (stristr($TLAgriculture[6], 'Branding, Sorting & Packaging') == false ? 'selected="selected"' : ''); ?>>No
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">8.</td>
                                                            <!-- <td style="font-weight:500;">Irrigation</td> -->
                                                            <td style="font-weight:500;">Organic Farming</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select class="form-control  col-md-7" name="TLAgriculture[]">
                                                                    <option value="Organic Farming" <?php echo (stristr($TLAgriculture[7], 'Organic Farming') == true ? 'selected="selected"' : ''); ?>>Yes</option>
                                                                    <option value="" <?php echo (stristr($TLAgriculture[7], 'Organic Farming') == false ? 'selected="selected"' : ''); ?>>No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">9.</td>
                                                            <!-- <td style="font-weight:500;">Bund formation,uprooting of weeds interculture,transplanting,harvesting,winnowing,Threeshing etc</td> -->
                                                            <td style="font-weight:500;">Supply chain & Market linkage</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select class="form-control  col-md-7" name="TLAgriculture[]">
                                                                    <option value="Supply chain & Market linkage" <?php echo (stristr($TLAgriculture[8], 'Supply chain & Market linkage') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes
                                                                    </option>
                                                                    <option value="" <?php echo (stristr($TLAgriculture[8], 'Supply chain & Market linkage') == false ? 'selected="selected"' : ''); ?>>No
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">10.</td>
                                                            <!-- <td style="font-weight:500;">Harvest Management</td> -->
                                                            <td style="font-weight:500;">Any training received from
                                                                Agriculture</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select class="form-control  col-md-7" name="TLAgriculture[]">
                                                                    <option value="Harvest Management" <?php echo (stristr($TLAgriculture[9], 'Harvest Management') == true ? 'selected="selected"' : ''); ?>>Yes</option>
                                                                    <option value="" <?php echo (stristr($TLAgriculture[9], 'Harvest Management') == false ? 'selected="selected"' : ''); ?>>No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <script type="text/javascript">
                                                            function CheckColors(val) {
                                                                var element = document.getElementById('othercolor');
                                                                if (val == 'yes')
                                                                    element.style.display = 'block';
                                                                else
                                                                    element.style.display = 'none';
                                                            }

                                                        </script>

                                                    <?php } ?>


                                                    <?php if ($this->input->get('tltype') == true && $this->input->get('tltype') == 'horti') { ?>
                                                        <?php $TLHorticulture = explode(',', $training['TLHorticulture']); ?>
                                                        <tr>
                                                            <td style="font-weight:500;">1.</td>
                                                            <td style="font-weight:500;">Basic Livelihoods Training</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLHorticulture[]" class="form-control  col-md-7">
                                                                    <option value="Basic Livelihoods Training" <?php echo (stristr($TLHorticulture[0], 'Basic Livelihoods Training') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes
                                                                    </option>
                                                                    <option value="" <?php echo (stristr($TLHorticulture[0], 'Basic Livelihoods Training') == false ? 'selected="selected"' : ''); ?>>No
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">2.</td>
                                                            <!-- <td style="font-weight:500;">Irrigation and Fertigation Management</td> -->
                                                            <td style="font-weight:500;">Farmers Field School</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLHorticulture[]" class="form-control  col-md-7">
                                                                    <option value="Farmers Field School" <?php echo (stristr($TLHorticulture[1], 'Farmers Field School') == true ? 'selected="selected"' : ''); ?>>Yes
                                                                    </option>
                                                                    <option value="" <?php echo (stristr($TLHorticulture[1], 'Farmers Field School') == false ? 'selected="selected"' : ''); ?>>No
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-weight:500;">3.</td>
                                                            <!-- <td style="font-weight:500;">Integrated Nutrient Management</td> -->
                                                            <td style="font-weight:500;">Irrigation and fertigation
                                                                management</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLHorticulture[]" class="form-control  col-md-7">
                                                                    <option value="Irrigation and fertigation management" <?php echo (stristr($TLHorticulture[2], 'Irrigation and fertigation management') == true ? 'selected="selected"' : ''); ?>>Yes</option>
                                                                    <option value="" <?php echo (stristr($TLHorticulture[2], 'Irrigation and fertigation management') == false ? 'selected="selected"' : ''); ?>>
                                                                        No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">4.</td>
                                                            <!-- <td style="font-weight:500;">Integrated Pest Management</td> -->
                                                            <td style="font-weight:500;">Seed sorting and treatment</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLHorticulture[]" class="form-control  col-md-7">
                                                                    <option value="Seed sorting and treatment" <?php echo (stristr($TLHorticulture[3], 'Seed sorting and treatment') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes
                                                                    </option>
                                                                    <option value="" <?php echo (stristr($TLHorticulture[3], 'Seed sorting and treatment') == false ? 'selected="selected"' : ''); ?>>No
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">5.</td>
                                                            <!-- <td style="font-weight:500;">Post Harvest Management</td> -->
                                                            <td style="font-weight:500;">Cultivation of harvest &
                                                                post-harvest management & value addition</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLHorticulture[]" class="form-control  col-md-7">
                                                                    <option
                                                                        value="Cultivation of harvest & post-harvest management & value addition"
                                                                        <?php echo (stristr($TLHorticulture[4], 'Cultivation of harvest & post-harvest management & value addition') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes
                                                                    </option>
                                                                    <option value="" <?php echo (stristr($TLHorticulture[4], 'Cultivation of harvest & post-harvest management & value addition') == false ? 'selected="selected"' : ''); ?>>No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">6.</td>
                                                            <!-- <td style="font-weight:500;">Supply Chain Management of Horticultural crops</td> -->
                                                            <td style="font-weight:500;">Branding, Sorting & Packaging</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLHorticulture[]" class="form-control  col-md-7">
                                                                    <option value="Branding, Sorting & Packaging" <?php echo (stristr($TLHorticulture[5], 'Branding, Sorting & Packaging') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes
                                                                    </option>
                                                                    <option value="" <?php echo (stristr($TLHorticulture[5], 'Branding, Sorting & Packaging') == false ? 'selected="selected"' : ''); ?>>No
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">7.</td>
                                                            <!-- <td style="font-weight:500;">Organic farming</td> -->
                                                            <td style="font-weight:500;">Package and storage of fresh
                                                                fruits/vegetables</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLHorticulture[]" class="form-control  col-md-7">
                                                                    <option
                                                                        value="Package and storage of fresh fruits/vegetables"
                                                                        <?php echo (stristr($TLHorticulture[6], 'Package and storage of fresh fruits/vegetables') == true ? 'selected="selected"' : ''); ?>>Yes</option>
                                                                    <option value="" <?php echo (stristr($TLHorticulture[6], 'Package and storage of fresh fruits/vegetables') == false ? 'selected="selected"' : ''); ?>>No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">8.</td>
                                                            <td style="font-weight:500;">Organic farming</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLHorticulture[]" class="form-control  col-md-7">
                                                                    <option value="Organic farming" <?php echo (stristr($TLHorticulture[7], 'Organic farming') == true ? 'selected="selected"' : ''); ?>>Yes</option>
                                                                    <option value="" <?php echo (stristr($TLHorticulture[7], 'Organic farming') == false ? 'selected="selected"' : ''); ?>>No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">9.</td>
                                                            <td style="font-weight:500;">Poly House and Green House
                                                                cultivation management</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLHorticulture[]" class="form-control  col-md-7">
                                                                    <option
                                                                        value="Poly House and Green House cultivation management"
                                                                        <?php echo (stristr($TLHorticulture[8], 'Poly House and Green House cultivation management') == true ? 'selected="selected"' : ''); ?>>Yes</option>
                                                                    <option value="" <?php echo (stristr($TLHorticulture[8], 'Poly House and Green House cultivation management') == false ? 'selected="selected"' : ''); ?>>No
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">10.</td>
                                                            <td style="font-weight:500;">Nursery raising and management.
                                                            </td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLHorticulture[]" class="form-control  col-md-7">
                                                                    <option value="Nursery raising and management" <?php echo (stristr($TLHorticulture[9], 'Nursery raising and management') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes</option>
                                                                    <option value="" <?php echo (stristr($TLHorticulture[9], 'Nursery raising and management') == false ? 'selected="selected"' : ''); ?>>
                                                                        No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">11.</td>
                                                            <!-- <td style="font-weight:500;">Marketing </td> -->
                                                            <td style="font-weight:500;">Supply chain & Market linkage </td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLHorticulture[]" class="form-control  col-md-7">
                                                                    <option value="Supply chain & Market linkage" <?php echo (stristr($TLHorticulture[10], 'Supply chain & Market linkage') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes
                                                                    </option>
                                                                    <option value="" <?php echo (stristr($TLHorticulture[10], 'Supply chain & Market linkage') == false ? 'selected="selected"' : ''); ?>>No
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">12.</td>
                                                            <!-- <td style="font-weight:500;">Marketing </td> -->
                                                            <td style="font-weight:500;">Disease of Horticulture crops </td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLHorticulture[]" class="form-control  col-md-7">
                                                                    <option value="Disease of Horticulture crops" <?php echo (stristr($TLHorticulture[11], 'Disease of Horticulture crops') == true ? 'selected="selected"' : ''); ?>>Yes
                                                                    </option>
                                                                    <option value="" <?php echo (stristr($TLHorticulture[11], 'Disease of Horticulture crops') == false ? 'selected="selected"' : ''); ?>>No
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">13.</td>
                                                            <!-- <td style="font-weight:500;">Marketing </td> -->
                                                            <td style="font-weight:500;">Intregrated Pest management </td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLHorticulture[]" class="form-control  col-md-7">
                                                                    <option value="Intregrated Pest management" <?php echo (stristr($TLHorticulture[12], 'Intregrated Pest management') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes</option>
                                                                    <option value="" <?php echo (stristr($TLHorticulture[12], 'Intregrated Pest management') == false ? 'selected="selected"' : ''); ?>>
                                                                        No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <script>
                                                            function CheckValues(val) {
                                                                var element = document.getElementById('othe');
                                                                if (val == 'yes')
                                                                    element.style.display = 'block';
                                                                else
                                                                    element.style.display = 'none';
                                                            }
                                                        </script>


                                                    <?php } ?>


                                                    <?php if ($this->input->get('tltype') == true && $this->input->get('tltype') == 'livestocks') { ?>
                                                        <?php $TLLivestock = explode(',', $training['TLLivestock']); ?>
                                                        <tr>
                                                            <td style="font-weight:500;">1.</td>
                                                            <td style="font-weight:500;">Basic Livelihoods Training</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLLivestock[]" class="form-control  col-md-7">
                                                                    <option value="Basic Livelihoods Training" <?php echo (stristr($TLLivestock[0], 'Basic Livelihoods Training') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes
                                                                    </option>
                                                                    <option value="" <?php echo (stristr($TLLivestock[0], 'Basic Livelihoods Training') == false ? 'selected="selected"' : ''); ?>>No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">2.</td>
                                                            <td style="font-weight:500;">Farmers Field School</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLLivestock[]" class="form-control  col-md-7">
                                                                    <option value="Farmers Field School" <?php echo (stristr($TLLivestock[1], 'Farmers Field School') == true ? 'selected="selected"' : ''); ?>>Yes</option>
                                                                    <option value="" <?php echo (stristr($TLLivestock[1], 'Farmers Field School') == false ? 'selected="selected"' : ''); ?>>
                                                                        No</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-weight:500;">3.</td>
                                                            <td style="font-weight:500;">Pashu Pathshala</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLLivestock[]" class="form-control  col-md-7">
                                                                    <option value="Farmers Field School" <?php echo (stristr($TLLivestock[2], 'Farmers Field School') == true ? 'selected="selected"' : ''); ?>>Yes</option>
                                                                    <option value="" <?php echo (stristr($TLLivestock[2], 'Farmers Field School') == false ? 'selected="selected"' : ''); ?>>
                                                                        No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">4.</td>
                                                            <td style="font-weight:500;">Breed Selection</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLLivestock[]" class="form-control  col-md-7">
                                                                    <option value="Farmers Field School" <?php echo (stristr($TLLivestock[3], 'Farmers Field School') == true ? 'selected="selected"' : ''); ?>>Yes</option>
                                                                    <option value="" <?php echo (stristr($TLLivestock[3], 'Farmers Field School') == false ? 'selected="selected"' : ''); ?>>
                                                                        No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">5.</td>
                                                            <td style="font-weight:500;">Sty/Shed prepation and management
                                                            </td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLLivestock[]" class="form-control  col-md-7">
                                                                    <option value="Farmers Field School" <?php echo (stristr($TLLivestock[4], 'Farmers Field School') == true ? 'selected="selected"' : ''); ?>>Yes</option>
                                                                    <option value="" <?php echo (stristr($TLLivestock[4], 'Farmers Field School') == false ? 'selected="selected"' : ''); ?>>
                                                                        No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">6.</td>
                                                            <td style="font-weight:500;">Feed Management</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLLivestock[]" class="form-control  col-md-7">
                                                                    <option value="Farmers Field School" <?php echo (stristr($TLLivestock[5], 'Farmers Field School') == true ? 'selected="selected"' : ''); ?>>Yes</option>
                                                                    <option value="" <?php echo (stristr($TLLivestock[5], 'Farmers Field School') == false ? 'selected="selected"' : ''); ?>>
                                                                        No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">7.</td>
                                                            <td style="font-weight:500;">Breeding</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLLivestock[]" class="form-control  col-md-7">
                                                                    <option value="Breeding" <?php echo (stristr($TLLivestock[6], 'Breeding') == true ? 'selected="selected"' : ''); ?>>Yes
                                                                    </option>
                                                                    <option value="" <?php echo (stristr($TLLivestock[6], 'Breeding') == false ? 'selected="selected"' : ''); ?>>No
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">8.</td>
                                                            <td style="font-weight:500;">Health Care & Management</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLLivestock[]" class="form-control  col-md-7">
                                                                    <option value="Health Care & Management" <?php echo (stristr($TLLivestock[7], 'Health Care & Management') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes</option>
                                                                    <option value="" <?php echo (stristr($TLLivestock[7], 'Health Care & Management') == false ? 'selected="selected"' : ''); ?>>
                                                                        No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">9.</td>
                                                            <td style="font-weight:500;">Slaughter hygiene management</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLLivestock[]" class="form-control  col-md-7">
                                                                    <option value="Slaughter hygiene management" <?php echo (stristr($TLLivestock[8], 'Slaughter hygiene management') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes</option>
                                                                    <option value="" <?php echo (stristr($TLLivestock[8], 'Slaughter hygiene management') == false ? 'selected="selected"' : ''); ?>>
                                                                        No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">10.</td>
                                                            <td style="font-weight:500;">Other*<p id="ootherselect"
                                                                    style='display:none;'>
                                                                    <input type="text" class="form-control col-md-4">
                                                                </p>
                                                            </td>
                                                            </td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select class="form-control  col-md-7"
                                                                    onchange='CheckValueo(this.value);'>
                                                                    <option value="Other" <?php echo (stristr($TLLivestock[9], 'Other') == true ? 'selected="selected"' : ''); ?>>No
                                                                    </option>
                                                                    <option value="yes" <?php echo (stristr($TLLivestock[9], 'Other') == false ? 'selected="selected"' : ''); ?>>
                                                                        Yes</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>


                                                    <?php if ($this->input->get('tltype') == true && $this->input->get('tltype') == 'fishery') { ?>
                                                        <?php $TLFishery = explode(',', $training['TLFishery']); ?>
                                                        <tr>
                                                            <td style="font-weight:500;">1.</td>
                                                            <td style="font-weight:500;">Basic Livelihoods Training</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLFishery[]" class="form-control  col-md-7">
                                                                    <option value="Basic Livelihoods Training" <?php echo (stristr($TLFishery[0], 'Basic Livelihoods Training') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes
                                                                    </option>
                                                                    <option value="" <?php echo (stristr($TLFishery[0], 'Basic Livelihoods Training') == false ? 'selected="selected"' : ''); ?>>No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">2.</td>
                                                            <td style="font-weight:500;">Pre-Stocking Management</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLFishery[]" class="form-control  col-md-7">
                                                                    <option value="Pre-Stocking Management" <?php echo (stristr($TLFishery[1], 'Pre-Stocking Management') == true ? 'selected="selected"' : ''); ?>>Yes</option>
                                                                    <option value="" <?php echo (stristr($TLFishery[1], 'Pre-Stocking Management') == false ? 'selected="selected"' : ''); ?>>
                                                                        No</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-weight:500;">(a).</td>
                                                            <td style="font-weight:500;">Pond Preparation and Renovation
                                                            </td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLFishery[]" class="form-control  col-md-7">
                                                                    <option value="Pre-Stocking Management" <?php echo (stristr($TLFishery[2], 'Pond Preparation and Renovation') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes</option>
                                                                    <option value="" <?php echo (stristr($TLFishery[2], 'Pond Preparation and Renovation') == false ? 'selected="selected"' : ''); ?>>No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">(b).</td>
                                                            <td style="font-weight:500;">Clearing of aquatic weeds</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLFishery[]" class="form-control  col-md-7">
                                                                    <option value="Pre-Stocking Management" <?php echo (stristr($TLFishery[3], 'Pond Preparation and Renovation') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes</option>
                                                                    <option value="" <?php echo (stristr($TLFishery[3], 'Pond Preparation and Renovation') == false ? 'selected="selected"' : ''); ?>>No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">(c).</td>
                                                            <td style="font-weight:500;">Eradication of Predator and weed
                                                                fishes</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLFishery[]" class="form-control  col-md-7">
                                                                    <option value="Pre-Stocking Management" <?php echo (stristr($TLFishery[4], 'Pond Preparation and Renovation') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes</option>
                                                                    <option value="" <?php echo (stristr($TLFishery[4], 'Pond Preparation and Renovation') == false ? 'selected="selected"' : ''); ?>>No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">(d).</td>
                                                            <td style="font-weight:500;">Liming, Fertilization, and Manuring
                                                            </td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLFishery[]" class="form-control  col-md-7">
                                                                    <option value="Pre-Stocking Management" <?php echo (stristr($TLFishery[5], 'Pond Preparation and Renovation') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes</option>
                                                                    <option value="" <?php echo (stristr($TLFishery[5], 'Pond Preparation and Renovation') == false ? 'selected="selected"' : ''); ?>>No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">3.</td>
                                                            <td style="font-weight:500;">Stocking and Post Stocking
                                                                management</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLFishery[]" class="form-control  col-md-7">
                                                                    <option value="Stocking and Post Stocking management" <?php echo (stristr($TLFishery[6], 'Stocking and Post Stocking management') == true ? 'selected="selected"' : ''); ?>>Yes
                                                                    </option>
                                                                    <option value="" <?php echo (stristr($TLFishery[6], 'Stocking and Post Stocking management') == false ? 'selected="selected"' : ''); ?>>
                                                                        No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">(a).</td>
                                                            <td style="font-weight:500;">Species combination, Feeding and
                                                                Manuring</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLFishery[]" class="form-control  col-md-7">
                                                                    <option value="Species combination, Feeding and Manuring"
                                                                        <?php echo (stristr($TLFishery[7], 'Species combination, Feeding and Manuring') == true ? 'selected="selected"' : ''); ?>>Yes</option>
                                                                    <option value="" <?php echo (stristr($TLFishery[7], 'Species combination, Feeding and Manuring') == false ? 'selected="selected"' : ''); ?>>No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">(b).</td>
                                                            <td style="font-weight:500;">Bottom racking and netting</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLFishery[]" class="form-control  col-md-7">
                                                                    <option value="Bottom racking and netting" <?php echo (stristr($TLFishery[8], 'Bottom racking and netting') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes
                                                                    </option>
                                                                    <option value="" <?php echo (stristr($TLFishery[8], 'Bottom racking and netting') == false ? 'selected="selected"' : ''); ?>>No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">(c).</td>
                                                            <td style="font-weight:500;">Water quality management</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLFishery[]" class="form-control  col-md-7">
                                                                    <option value="Water quality management" <?php echo (stristr($TLFishery[9], 'Water quality management') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes</option>
                                                                    <option value="" <?php echo (stristr($TLFishery[9], 'Water quality management') == false ? 'selected="selected"' : ''); ?>>No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">(d).</td>
                                                            <td style="font-weight:500;">Hatching and Hatchery Management
                                                            </td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLFishery[]" class="form-control  col-md-7">
                                                                    <option value="Hatching and Hatchery Management" <?php echo (stristr($TLFishery[10], 'Hatching and Hatchery Management') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes</option>
                                                                    <option value="" <?php echo (stristr($TLFishery[10], 'Hatching and Hatchery Management') == false ? 'selected="selected"' : ''); ?>>
                                                                        No</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-weight:500;">(e).</td>
                                                            <td style="font-weight:500;">Fish Health Management </td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLFishery[]" class="form-control  col-md-7">
                                                                    <option value="Fish Health Management" <?php echo (stristr($TLFishery[11], 'Fish Health Management') == true ? 'selected="selected"' : ''); ?>>Yes</option>
                                                                    <option value="" <?php echo (stristr($TLFishery[11], 'Fish Health Management') == false ? 'selected="selected"' : ''); ?>>No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">(f).</td>
                                                            <td style="font-weight:500;">Fish Harvest and Yield Management
                                                            </td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLFishery[]" class="form-control  col-md-7">
                                                                    <option value="Fish Harvest and Yield Management" <?php echo (stristr($TLFishery[12], 'Fish Harvest and Yield Management') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes</option>
                                                                    <option value="" <?php echo (stristr($TLFishery[12], 'Fish Harvest and Yield Management') == false ? 'selected="selected"' : ''); ?>>No</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-weight:500;">(g).</td>
                                                            <td style="font-weight:500;">Marketing </td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLFishery[]" class="form-control  col-md-7">
                                                                    <option value="Marketing" <?php echo (stristr($TLFishery[13], 'Marketing') == true ? 'selected="selected"' : ''); ?>>Yes
                                                                    </option>
                                                                    <option value="" <?php echo (stristr($TLFishery[13], 'Marketing') == false ? 'selected="selected"' : ''); ?>>No
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-weight:500;">4.</td>
                                                            <td style="font-weight:500;">Other*<p id="otherselectss"
                                                                    style='display:none;'>
                                                                    <input type="text" class="form-control col-md-4">
                                                                </p>
                                                            </td>
                                                            </td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select class="form-control  col-md-7" name="TLFishery[]"
                                                                    onchange='CheckValuess(this.value);'>
                                                                    <option value="Other" <?php echo (stristr($TLFishery[14], 'Other') == true ? 'selected="selected"' : ''); ?>>No
                                                                    </option>
                                                                    <option value="yes" <?php echo (stristr($TLFishery[14], 'Other') == false ? 'selected="selected"' : ''); ?>>
                                                                        Yes</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>


                                                    <?php if ($this->input->get('tltype') == true && $this->input->get('tltype') == 'sericulture') { ?>
                                                        <?php $TLSericulture = explode(',', $training['TLSericulture']); ?>
                                                        <tr>
                                                            <td style="font-weight:500;">1.</td>
                                                            <td style="font-weight:500;">Basic Livelihoods Training</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLSericulture[]" class="form-control  col-md-7">
                                                                    <option value="Basic Livelihoods Training" <?php echo (stristr($TLSericulture[0], 'Basic Livelihoods Training') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes
                                                                    </option>
                                                                    <option value="" <?php echo (stristr($TLSericulture[0], 'Basic Livelihoods Training') == false ? 'selected="selected"' : ''); ?>>No
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">2.</td>
                                                            <td style="font-weight:500;">Productivity Improvement Training –
                                                                Feeding crops</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLSericulture[]" class="form-control  col-md-7">
                                                                    <option
                                                                        value="Productivity Improvement Training – Feeding crops"
                                                                        <?php echo (stristr($TLSericulture[1], 'Productivity Improvement Training – Feeding crops') == true ? 'selected="selected"' : ''); ?>>Yes</option>
                                                                    <option value="" <?php echo (stristr($TLSericulture[1], 'Productivity Improvement Training – Feeding crops') == false ? 'selected="selected"' : ''); ?>>No
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-weight:500;">3.</td>
                                                            <td style="font-weight:500;">Cultivation techniques, Nutrition
                                                                and disease Management</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLSericulture[]" class="form-control  col-md-7">
                                                                    <option
                                                                        value="Cultivation techniques, Nutrition and disease Management"
                                                                        <?php echo (stristr($TLSericulture[2], 'Cultivation techniques, Nutrition and disease Management') == true ? 'selected="selected"' : ''); ?>>Yes</option>
                                                                    <option value="" <?php echo (stristr($TLSericulture[2], 'Cultivation techniques, Nutrition and disease Management') == false ? 'selected="selected"' : ''); ?>>No
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">4.</td>
                                                            <td style="font-weight:500;">Young age and Late age worm rearing
                                                                and Management</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLSericulture[]" class="form-control  col-md-7">
                                                                    <option
                                                                        value="Young age and Late age worm rearing and Management"
                                                                        <?php echo (stristr($TLSericulture[3], 'Young age and Late age worm rearing and Management') == true ? 'selected="selected"' : ''); ?>>Yes</option>
                                                                    <option value="" <?php echo (stristr($TLSericulture[3], 'Young age and Late age worm rearing and Management') == false ? 'selected="selected"' : ''); ?>>No
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">5.</td>
                                                            <td style="font-weight:500;">Seed cocoon production and loose
                                                                egg preservation Management</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLSericulture[]" class="form-control  col-md-7">
                                                                    <option
                                                                        value="Seed cocoon production and loose egg preservation Management"
                                                                        <?php echo (stristr($TLSericulture[4], 'Seed cocoon production and loose egg preservation Management') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes</option>
                                                                    <option value="" <?php echo (stristr($TLSericulture[4], 'Seed cocoon production and loose egg preservation Management') == false ? 'selected="selected"' : ''); ?>>No
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">6.</td>
                                                            <td style="font-weight:500;">Integrated pest Management</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLSericulture[]" class="form-control  col-md-7">
                                                                    <option value="Integrated pest Management" <?php echo (stristr($TLSericulture[5], 'Integrated pest Management') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes</option>
                                                                    <option value="" <?php echo (stristr($TLSericulture[5], 'Integrated pest Management') == false ? 'selected="selected"' : ''); ?>>
                                                                        No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">7.</td>
                                                            <td style="font-weight:500;">Mechanization of sericulture
                                                                reeling</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLSericulture[]" class="form-control  col-md-7">
                                                                    <option value="Mechanization of sericulture reeling" <?php echo (stristr($TLSericulture[6], 'Mechanization of sericulture reeling') == true ? 'selected="selected"' : ''); ?>>Yes</option>
                                                                    <option value="" <?php echo (stristr($TLSericulture[6], 'Mechanization of sericulture reeling') == false ? 'selected="selected"' : ''); ?>>No</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">8.</td>
                                                            <td style="font-weight:500;">Drudgery reduction through
                                                                ergonomically sound appliances / tools</td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLSericulture[]" class="form-control  col-md-7">
                                                                    <option
                                                                        value="Drudgery reduction through ergonomically sound appliances"
                                                                        <?php echo (stristr($TLSericulture[7], 'Drudgery reduction through ergonomically sound appliances') == true ? 'selected="selected"' : ''); ?>>
                                                                        Yes</option>
                                                                    <option value="" <?php echo (stristr($TLSericulture[7], 'Drudgery reduction through ergonomically sound appliances') == false ? 'selected="selected"' : ''); ?>>No
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">9.</td>
                                                            <td style="font-weight:500;">Marketing in sericulture sector
                                                            </td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select name="TLSericulture[]" class="form-control  col-md-7">
                                                                    <option value="Marketing in sericulture sector" <?php echo (stristr($TLSericulture[8], 'Marketing in sericulture sector') == true ? 'selected="selected"' : ''); ?>>Yes
                                                                    </option>
                                                                    <option value="" <?php echo (stristr($TLSericulture[8], 'Marketing in sericulture sector') == false ? 'selected="selected"' : ''); ?>>No
                                                                    </option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-weight:500;">10.</td>
                                                            <td style="font-weight:500;">Other*<p id="otherselectssss"
                                                                    style='display:none;'>
                                                                    <input type="text" class="form-control col-md-4">
                                                                </p>
                                                            </td>
                                                            </td>
                                                            <td class="col-md-2 px-2 text-center">
                                                                <select class="form-control  col-md-7" name="TLSericulture[]"
                                                                    onchange='CheckValuessss(this.value);'>
                                                                    <option value="Other" <?php echo (stristr($TLSericulture[9], 'Other') == true ? 'selected="selected"' : ''); ?>>No
                                                                    </option>
                                                                    <option value="yes" <?php echo (stristr($TLSericulture[9], 'Other') == false ? 'selected="selected"' : ''); ?>>
                                                                        Yes</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>

                                                    <?php if ($this->input->get('tltype') == true && $this->input->get('tltype') == 'others') {

                                                        $TLOther = explode(',', $training['TLOthers']); ?>

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
                    <?php if ($this->uri->segment(2) == '7') { ?>

                        <div class="row mt-5">
                            <div class="col-md-12 mb-3">
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
                                </form>

                                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                                    crossorigin="anonymous"></script>
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                                    crossorigin="anonymous"></script>

                                <?php
                                $agriculture = explode(',', $training['TLAgriculture']);
                                $horticulture = explode(',', $training['TLHorticulture']);
                                $livestock = explode(',', $training['TLLivestock']);
                                $fishery = explode(',', $training['TLFishery']);
                                $sericulture = explode(',', $training['TLSericulture']);
                                $others = explode(',', $training['TLOthers']);
                                ?>
                                <form class="pr-4 pl-4" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="agriculture-tab"
                                                        data-bs-toggle="tab" data-bs-target="#agriculture" type="button"
                                                        role="tab" aria-controls="agriculture"
                                                        aria-selected="true">Agriculture</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="horticulture-tab" data-bs-toggle="tab"
                                                        data-bs-target="#horticulture" type="button" role="tab"
                                                        aria-controls="horticulture"
                                                        aria-selected="false">Horticulture</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="livestocks-tab" data-bs-toggle="tab"
                                                        data-bs-target="#livestocks" type="button" role="tab"
                                                        aria-controls="livestocks" aria-selected="false">Livestocks</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="fishery-tab" data-bs-toggle="tab"
                                                        data-bs-target="#fishery" type="button" role="tab"
                                                        aria-controls="fishery" aria-selected="false">Fishery</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="sericulture-tab" data-bs-toggle="tab"
                                                        data-bs-target="#sericulture" type="button" role="tab"
                                                        aria-controls="sericulture"
                                                        aria-selected="false">Sericulture</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="others-tab" data-bs-toggle="tab"
                                                        data-bs-target="#others" type="button" role="tab"
                                                        aria-controls="others" aria-selected="false">Others</button>
                                                </li>
                                            </ul>

                                            <div class="tab-content mt-3" id="myTabContent">
                                                <div class="tab-pane fade show active" id="agriculture" role="tabpanel"
                                                    aria-labelledby="agriculture-tab">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <th width="40%">Types of Training</th>
                                                                <th> Yes or No </th>
                                                            </tr>
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

                                                <div class="tab-pane fade" id="horticulture" role="tabpanel"
                                                    aria-labelledby="horticulture-tab">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <th width="40%">Types of Training</th>
                                                                <th> Yes or No </th>
                                                            </tr>
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

                                                <div class="tab-pane fade" id="livestocks" role="tabpanel"
                                                    aria-labelledby="livestocks-tab">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <th width="40%">Types of Training</th>
                                                                <th> Yes or No </th>
                                                            </tr>
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

                                                <div class="tab-pane fade" id="fishery" role="tabpanel"
                                                    aria-labelledby="fishery-tab">
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

                                                <div class="tab-pane fade" id="sericulture" role="tabpanel"
                                                    aria-labelledby="sericulture-tab">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <th width="40%">Types of Training</th>
                                                                <th> Yes or No </th>
                                                            </tr>
                                                            <tr>
                                                                <td>Basic Livelihoods Training</td>
                                                                <td><?php echo $sericulture[0] ? 'Yes' : 'No'; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Farmers Field School</td>
                                                                <td><?php echo $sericulture[1] ? 'Yes' : 'No'; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pashu Pathshala</td>
                                                                <td><?php echo $sericulture[2] ? 'Yes' : 'No'; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Breed Selection</td>
                                                                <td><?php echo $sericulture[3] ? 'Yes' : 'No'; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sty/Shed prepation and management</td>
                                                                <td><?php echo $sericulture[4] ? 'Yes' : 'No'; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Feed Management</td>
                                                                <td><?php echo $sericulture[5] ? 'Yes' : 'No'; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Breeding</td>
                                                                <td><?php echo $sericulture[6] ? 'Yes' : 'No'; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Health Care & Management</td>
                                                                <td><?php echo $sericulture[7] ? 'Yes' : 'No'; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Slaughter hygiene management</td>
                                                                <td><?php echo $sericulture[8] ? 'Yes' : 'No'; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Other</td>
                                                                <td><?php echo $sericulture[9] ? 'Yes' : 'No'; ?></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>

                                                <div class="tab-pane fade" id="others" role="tabpanel"
                                                    aria-labelledby="others-tab">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <th width="20%">S.No.</th>
                                                                <th> Types of Training </th>
                                                            </tr>
                                                            <tr>
                                                                <td>1.</td>
                                                                <td><?php echo $others[0] ? $others[0] : '-'; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2.</td>
                                                                <td><?php echo $others[1] ? $others[1] : '-'; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3.</td>
                                                                <td><?php echo $others[2] ? $others[2] : '-'; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>4.</td>
                                                                <td><?php echo $others[3] ? $others[3] : '-'; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>5.</td>
                                                                <td><?php echo $others[4] ? $others[4] : '-'; ?></td>
                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-12 text-right">
                                        <a class="btn btn-primary" onclick="javascript:history.back()"
                                            style="color:#fff;">Previous</a>
                                            <input type="hidden" name="stepno7" value="7">
                                            <input type="hidden" name="isedit" value="1">
                                            <input type="submit" class="btn btn-primary" style="background:#2B78E4;" name="submit1" value="Submit">
                                        <!-- <button class="btn btn-primary" type="button" name="submit" value="Signup"
                                            style="background:#2B78E4;">Submit</button>
                                        <button class="btn btn-primary" type="button" name="submit" value="Signup"
                                            style="background:#8E7CC3;">Review</button> -->
                                    </div>

                                </form>
                            </div>
                        </div>
                    <?php } ?>
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