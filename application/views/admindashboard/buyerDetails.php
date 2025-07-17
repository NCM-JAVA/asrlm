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
                                <h4 class="m-0">Buyer Information</h4>
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
                        <?php if ($this->uri->segment(2) < '2') { ?>
                            <form class="row pr-4 pl-4" method="post">
                                <div class="col-md-12">
                                    <div class="row">

                                        <table id="bankdetailsfields" class="table p-3 table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">District</th>
                                                    <th scope="col">Block</th>
                                                    <th scope="col">Contact Number</th>
                                                    <th scope="col">Email ID</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control" name="name"
                                                            placeholder="Enter Name" />
                                                    </td>
                                                    <td>
                                                        <select class="form-control" id="dist" name="dist" required>
                                                            <option value="">-- Select District --</option>
                                                            <?php foreach ($districts as $district): ?>
                                                                <option value="<?php echo $district; ?>" <?php echo (!empty($userdetails['district']) && $userdetails['district'] == $district) ? 'selected' : ''; ?>>
                                                                    <?php echo $district; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control" id="block" name="block" required>
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
                                                        <input type="number" class="form-control" name="contact_number"
                                                        digits="10" placeholder="Enter Contact Number" />
                                                    </td>
                                                    <td>
                                                        <input type="email" class="form-control" name="email"
                                                            placeholder="Enter Email" />
                                                    </td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>Commodity Details</h4>
                                        </div>
                                        <div class="col-md-6 text-right"><a href="#" id="addTable"
                                                class="btn-sm btn-danger"><i class="fa fa-plus"></i></a></div>
                                    </div>
                                </div>

                                <div class="col-md-12 ">
                                    <div class="table-wrapper">
                                        <table id="bankdetailsfields" class="table p-3 table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Commodity Category</th>
                                                    <th scope="col">Sub-category</th>
                                                    <th scope="col">Commodity Name</th>
                                                    <th scope="col">Volume of Sale(qtl/ltr/num)</th>
                                                    <th scope="col">Rate of Commodity (Rs)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <select class="form-control form-control" name="categoryname[]"
                                                            id="categoryname">
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
                                                        <select class="form-control form-control"  name="subcategoryname[]" id="subcategoryname" >
                                                            <div class="col-md-8">
                                                            <option>Sub-Category</option>
                                                            <option value="primary">Primary</option>			 
                                                            <option value="secondary">Secondary</option>			 
                                                            <option value="tertiary">Tertiary </option>			 
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control form-control" name="commodityname[]" id="commoditynewname">
                                                            <option>Select Commodity</option>
                                                            <option <?php if($commodityname != ''){ echo 'selected="selected"';  } ?>><?php echo ucfirst($commodityname) ?></option>				 
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="volume_of_sale[]"
                                                            placeholder="Enter Volume of Sale" />
                                                        <select class="form-control mt-1" name="sale_unit[]">
                                                            <option value=""> Units</option>
                                                            <option value="qtl" <?php if ($mtd['qtl'] == 'qtl') echo 'selected'; ?>>QTL</option>
                                                            <option value="ltr" <?php if ($mtd['ltr'] == 'ltr') echo 'selected'; ?>>LTR</option>
                                                            <option value="num" <?php if ($mtd['num'] == 'num') echo 'selected'; ?>>NUM</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="rate_of_commodity[]"
                                                            placeholder="Enter Rate of Commodity" />
                                                    </td>

                                                </tr>
                                            </tbody>
                                        </table>
                                        <a href="#" class="btn-sm btn-danger removeTable mb-3" style="display:none;"><i
                                                class="fa fa-minus"></i></a>
                                    </div>

                                    <div id="tableContainer"></div>
                                </div>




                                <div class="col-md-12 text-right">
                                    <input type="submit" class="btn btn-primary" name="submit1" value="Submit">
                                </div>
                            </form>
                        <?php } ?>





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
                            });
                        </script>


                        <div>
                        </div>
                    </div>
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
                // $('#categoryname').change(function(){
                // var categoryname = $('#categoryname').val();

                // if(categoryname != '')
                // {
                // $.ajax({
                //     url:"<?php echo base_url(); ?>pg/fetchsubcategory",
                //     method:"POST",
                //     data:{categoryname:categoryname},
                //     success:function(data)
                //     {
                //         // alert(data);
                //     $('#subcategoryname').html(data);
                    
                //     }
                // });
                // }
                // else
                // {
                // $('#categoryname').html('<option value="">Select Category</option>');
                // $('#subcategoryname').html('<option value="">Select SubCategory</option>');
                // }
                // });

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