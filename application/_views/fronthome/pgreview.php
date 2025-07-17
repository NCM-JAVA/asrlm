<style>
@media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}
</style>
<section>
	<div class="container-fluid">
	<?php print_r($pgdetail); ?>
	<center class="no-print"><button type="button" class="btn btn-danger" value="Print" style="color:#fff;font-weight:500;" onclick="window.print();
">&nbsp;<i class="fa fa-print" aria-hidden="true"></i>&nbsp;Print&nbsp;&nbsp;&nbsp;</button></center>
		<div class="row list-view">
			<div class="col-md-12" style="border-bottom:2px dotted #000;">
				
		  	
		 <div class="col-md-12 row mt-4">
		   <div class="col-md-3 ">
		   <h6 class="m-0"> Name of Producer Group*</h6>
		   </div>
		    <div class="col-md-9">
			<label style="text-transform: capitalize;text-decoration: underline;"><?php echo str_replace('pg','',$pgdetail[0]['pgname']); ?> PG</label>
		   </div>
		   </div>
		   
		   <div class="col-md-12 row mt-4">
		   <div class="col-md-3">
		   <h6 class="m-0">Location</h6>
		   </div>
		    <div class="col-md-9">
			  <div class="form-row">
				<div class="col-md-3 mb-3">
				  <label for="validationTooltip03"><b>District</b></label>
				  <br/><label style="text-transform: capitalize;"><?php echo ucfirst($pgdetail[0]['district']); ?></label>
				</div>
				<div class="col-md-3 mb-3">
				  <label for="validationTooltip04"><b>Block</b></label>
				  <br/><label style="text-transform: capitalize;"><?php echo ucfirst($pgdetail[0]['block']); ?></label>
				</div>
				<div class="col-md-3 mb-3">
				  <label for="validationTooltip04"> <b>Gram Panchayat</b></label>
				  	 <br/><label style="text-transform: capitalize;"><?php echo ucfirst($pgdetail[0]['grampanchayat']); ?></label>
				</div>
				<div class="col-md-3 mb-3">
				  <label for="validationTooltip05"> <b>Village</b></label>
				  <br/><label style="text-transform: capitalize;"><?php echo ucfirst($pgdetail[0]['grampanchayat']); ?></label>
				</div>
			  </div>
		   </div>
		   </div>
		   
		   <div class="col-md-12 row mt-1">
		   <div class="col-md-3">
		   <h6 class="m-0">Date of Formation</h6>
		   </div>
		    <div class="col-md-9">
			<div class="input-group">			 
			<label style="text-transform: capitalize;"><?php echo ucfirst($pgdetail[0]['dof']); ?></label>
			 </div>
		   </div>
		   </div>
		   
		   <div class="col-md-12 row mt-4">
		   <div class="col-md-12">
		  <table class="table p-3 table-bordered table-striped">
		  <thead>
			<tr>
			  
			  <th scope="col"></th>
			  <th scope="col">Name</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <th>Designation(President/Secretary/ Treasurer)</th>
			  <td><label style="text-transform: capitalize;"><?php echo ucfirst($pgdetail[0]['president_name']); ?></label></td>
			</tr>
			<tr>
			  <th>Designation(President/Secretary/ Treasurer)</th>
			  <td><label style="text-transform: capitalize;"><?php echo ucfirst($pgdetail[0]['secretary_name']); ?></label></td>
			</tr>
			<tr>
			  <th>Designation(President/Secretary/ Treasurer)</th>
			  <td><label style="text-transform: capitalize;"><?php echo ucfirst($pgdetail[0]['treasurer_name']); ?></label></td>
			</tr>
		  </tbody>
		</table>
		   </div>
		    
		   </div>
		   
		   <div class="col-md-12 row mt-4">
		   <div class="col-md-3">
		   <h6 class="m-0"> PG promoted under</h6>
		   </div>
		    <div class="col-md-9">
			 <label style="text-transform: capitalize;"><?php echo strtoupper($pgdetail[0]['pramoted_uder']); ?></label>
		   </div>
		   </div>
		
		    <div class="col-md-12 text-right mb-1" style="/*border-bottom: 2px dotted #000;*/"><br/>
				
		    </div>				
		
			</div>
			
			<!--- Bank Details -->
			<div class="col-md-12 mt-3" style="border-bottom:2px dotted #000;">
		
		  
		     <div class="col-md-12">
			  <br/><br/>
			  <div class="row">
			  <div class="col-md-11"><h6 class="m-0"> BANK ACCOUNT DETAILS *</h6><br/></div>
			
			   </div>
			  <table class="table p-3 table-bordered table-striped">
			  <thead>
				<tr>
				  
				  <th scope="col">Bank name:</th>
				  <th scope="col">Type of Account</th>
				  <th scope="col">IFSC Code</th>
				  <th scope="col">Branch Location</th>
				  <th scope="col">Account Number</th>
				</tr>
			  </thead>
			  <tbody>
			  <?php foreach($getbankdetails as $getbankdetail){ ?>
				  
				  <tr>
				  <td>				  
				  <?php echo ucfirst($getbankdetail['bankname']);?>
				  </td>
				  <td>
				   <?php echo ucfirst($getbankdetail['account_type']);?>				 
				  </td>
				  <td><?php echo $getbankdetail['IFSC'];?></td>
				  <td><?php echo $getbankdetail['branchname'];?></td>
				  <td><?php echo $getbankdetail['accountno'];?></td>
				</tr>
				<?php }  ?>
				
				
			  </tbody>
			</table>
			
			
			<br/>
			   <div class="row">
			   <div class="col-md-11"><h6 class="m-0"> COMMODITY DETAILS</h6><br/></div>
			  
			   </div>
			   
		      <div class="col-md-12 row">
			   <div class="col-md-4">
			  
			   <div class="form-group row">
				<label for="inputPassword" class="col-form-label">Category:</label>
				<div class="col-md-8 mt-2">
				<?php echo ucfirst($pgdetail[0]['category']); ?>
				</div>
			   </div>
			   
			   </div>
			   
			   
			   <div class="col-md-4">
			   <div class="col-md-12">
			   <div class="form-group row">
				<label for="inputPassword" class="col-form-label ">Sub Category:</label>
				 <?php echo ucfirst($pgdetail[0]['sub_category']); ?>
				</div>
			   </div>
			   
			   </div>
			   <div class="col-md-4">
			   <div class="col-md-12">
			   <div class="form-group row">
				 <label for="inputPassword" class="col-form-label">Name of Commodity:</label>
				 <?php echo ucfirst($pgdetail[0]['commodityname']); ?>
				</div>
			   </div>
			   
			   </div>
			  
			 
			</div>
			</div>
			</div>
			
			
			<!--UDYOG SAKHI AND PG DETAILS---> 
			<div class="col-md-12 mt-3" style="border-bottom:2px dotted #000;">
		
		  
		   
		   <?php //print_r($userdetails); ?>
		       <div class="col-md-12 pr-4 pl-4">
				<br/>
				<h6 class="m-0">VALUE ADDITIONAL ACTIVITY MANAGED BY Udyog Sakhi / Pashu Sakhi / Krishi Sakhi  </h6> <br/> <br/>
			 
		
      <div class="buttons">
       <br> 
	 
		     <div id="udyogsakhipg" >
			 <h4 style="text-decoration: underline;">Udyog Sakhi</h4><br/>
             <div class="form-group col-md-12 row">
			 <div class="red box col-md-5 px-0 ">Name of Udyog Sakhi Associated with the PG</div>
				<div class="col-md-2">
				  <div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id='expradio' value="option1"  checked>
				  <label class="form-check-label" for="exampleRadios1">
					Yes
				  </label>
				   <div class="form-group col-md-11 px-0">
					<input type="text" class='txbx form-control'  hidden="true"/>  
					</div>
				  </div>
				</div>
				
				<div class="col-md-3">
				  <div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id='frsradio' value="option1" checked>
				  <label class="form-check-label" for="exampleRadios1">
					No
				  </label>				 
				  </div>
				</div>	
			    </div>
				
			   <div class="form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-5">No. of Village Covered by PG</label>
			     <div class="form-group col-md-7 px-0">
					<select class="form-control col-md-2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				  </select>
				 </div>
			   </div>
			   
			     <div class="form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-5">No. of Member Associated with PG</label>
			      <div class="form-group col-md-2 px-0">
					
					<input type="text" class="form-control">
				  </div>
			   </div>

			</form>			
			</div>
			
			<div id="pashusakhipg">
			 <h4 style="text-decoration: underline;">Pashu Sakhi</h4><br/>
             <div class="form-group col-md-12 row">
			 <div class="red box col-md-5 px-0">Name of Pashu Sakhi Associated with the PG</div>
			 
				
				<div class="col-md-2">
				  <div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id='expradio1' value="option1" checked>
				  <label class="form-check-label" for="exampleRadios1">
					Yes
				  </label>
				   <div class="form-group col-md-7 px-0">
					<input type="text" class='txbx1 form-control' hidden="true"/>  
					</div>
				  </div>
				</div>
				
				<div class="col-md-4">
				  <div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id='frsradio1' value="option1" checked>
				  <label class="form-check-label" for="exampleRadios1">
					No
				  </label>				 
				  </div>
				</div>	
			    </div>
				
			   <div class="form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-5">No. of Village Covered by PG</label>
			     <div class="form-group col-md-7 px-0">
					<select class="form-control col-md-2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				  </select>
				 </div>
			   </div>
			   
			   <div class="form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-5">No. of Member Associated with PG</label>
			      <div class="form-group col-md-2 px-0">
					
					<input type="text" class="form-control">
				  </div>
			   </div>
			   
			   <!--div class="form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-5">No. of Participants in PG</label>
			     <div class="form-group col-md-7 px-0">
					<select class="form-control col-md-2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				  </select>
				 </div>
			   </div-->
							
			</div>
			
			<div id="krishisakhipg">
			 <h4 style="text-decoration: underline;">Krishi Sakhi</h4><br/>
             <div class="form-group col-md-12 row">
			 <div class="red box col-md-5 px-0">Name of Krishi Sakhi Associated with the PG</div>
			 
				
					<div class="col-md-2">
				  <div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id='expradio2' value="option1" checked>
				  <label class="form-check-label" for="exampleRadios1">
					Yes
				  </label>
				   <div class="form-group col-md-7 px-0">
					<input type="text" class='txbx2 form-control' hidden="true"/>  
					</div>
				  </div>
				</div>
				
				<div class="col-md-4">
				  <div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id='frsradio2' value="option1" checked>
				  <label class="form-check-label" for="exampleRadios1">
					No
				  </label>				 
				  </div>
				</div>	
			    </div>
				
			   <div class="form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-5">No. of Village Covered by PG</label>
			     <div class="form-group col-md-7 px-0">
					<select class="form-control col-md-2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				  </select>
				 </div>
			   </div>
			   
		   <div class="form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-5">No. of Member Associated with PG</label>
			      <div class="form-group col-md-2 px-0">
					
					<input type="text" class="form-control">
				  </div>
			   </div>		
			</div> 
			
			
			</div>
			</div>
			</div>	
			
			
			<!---- value addition --->
			
				<div class="col-md-12" style="border-bottom:2px dotted #000;">
		 
		   <?php //print_r($userdetails); ?>
		       <div class="col-md-12">
					<br/>
			  <h6 class="m-0">VALUE ADDITIONAL ACTIVITY MANAGED BY Udyog Sakhi / Pashu Sakhi / Krishi Sakhi   </h6> <br/>
		 <br>

			<div class="row col-md-12">
			<div class="col-md-9"> </div> 
			<div class="col-md-3 p-3  card"  style="background-color: #e1e1e1;"> 
				<b>Shubham Sharma</b>
			   <a href="tel:+91 9990008970" ><i class="fa fa-phone" aria-hidden="true"></i>+91 9990008970</a>
			</div>
			</div>

                <div class="row col-md-12"> 
			    <div class="col-md-6"  id="udyogsakhipgva">		
				  <h4 style="text-decoration: underline;">Udyog Sakhi: </h4> <label style="text-transform:capitalize;"><?php echo (ucfirst($pgdetail[0]['VAAUS']) == '')?'NA':$pgdetail[0]['VAAUS']; ?></label>		   
				</div>
				
				
				
				 <div class="col-md-6"  id="pashusakhipgga"> 
					 <h4 style="text-decoration: underline;">Pashu Sakhi: </h4> <label style="text-transform:capitalize;"><?php echo (ucfirst($pgdetail[0]['VAAPS']) == '')?'NA':$pgdetail[0]['VAAPS']; ?></label>
				</div>
				</div>
				<div class="row col-md-12"> 
				 <div class="col-md-6"  id="krishisakhipgga">	<br/>	
				  <h4 style="text-decoration: underline;">Krishi Sakhi: </h4>				 
				   <label style="text-transform:capitalize;"><?php echo (ucfirst($pgdetail[0]['VAAKS']) == '')?'NA':$pgdetail[0]['VAAKS']; ?></label>		   
			
				</div>
				
				
				</div>
			</div>
			</div>
			
			
			<!---- Book Of Records ---->
			
			<div class="col-md-12" style="border-bottom:2px dotted #000;">
			  <br><br>
			  <h6 class="m-0"> BOOK OF RECORDS (BOOKING KEEPING) *</h6><br>
			 <?php //echo $pgdetail[0]['BOR'];?>
			  <table class="table p-3 table-bordered table-striped">
			  <thead>
				<tr>
				  
				  <th scope="col" width="10%">S. No.</th>
				  <th scope="col" width="70%">Types of Record Books Updated</th>
				  <th scope="col" width="20%">Yes or No</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				 <td style="font-weight:500;">1.</td>				 
				 <td style="font-weight:500;">Minutes of the Meeting Book*</td>
				 <td class="col-md-2 px-2 text-left">
				   <?php  echo (stristr($pgdetail[0]['BOR'],'minutes of meeting book') == true)?'Yes':'No'; ?>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">2.</td>				 
				 <td style="font-weight:500;">Bank Book for all transactions*</td>
				   <td class="col-md-2 px-2 text-left">
				   <?php  echo (stristr($pgdetail[0]['BOR'],'bank book for all transactions') == true)?'Yes':'No'; ?>
				  </td>
				</tr>
				<tr>
				 <td style="font-weight:500;">3.</td>				 
				 <td style="font-weight:500;">Saving Register*</td>
				    <td class="col-md-2 px-2 text-left">
				   <?php  echo (stristr($pgdetail[0]['BOR'],'savings register') == true)?'Yes':'No'; ?>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">4.</td>				 
				 <td style="font-weight:500;">Purchase Sale and Stock Register*</td>
				  <td class="col-md-2 px-2 text-left">
				   <?php  echo (stristr($pgdetail[0]['BOR'],'purchase sale & stock register') == true)?'Yes':'No'; ?>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">5.</td>				 
				 <td style="font-weight:500;">Stock Movement Register*</td>
				   <td class="col-md-2 px-2 text-left">
				   <?php  echo (stristr($pgdetail[0]['BOR'],'Stock Movement Register') == true)?'Yes':'No'; ?>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">6.</td>				 
				 <td style="font-weight:500;">Bill Book and Receipt Book*</td>
				  <td class="col-md-2 px-2 text-left">
				   <?php  echo (stristr($pgdetail[0]['BOR'],'Bill Book and Receipt Book') == true)?'Yes':'No'; ?>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">7.</td>				 
				 <td style="font-weight:500;">Doule Entry Cash Book*</td>
				   <td class="col-md-2 px-2 text-left">
				   <?php  echo (stristr($pgdetail[0]['BOR'],'Doule Entry Cash Book') == true)?'Yes':'No'; ?>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">8.</td>				 
				 <td style="font-weight:500;">Loan Ledger*</td>
				  <td class="col-md-2 px-2 text-left">
				   <?php  echo (stristr($pgdetail[0]['BOR'],'Loan Ledger') == true)?'Yes':'No'; ?>
				  </td>
				</tr>
				<tr>
				 <td style="font-weight:500;">9.</td>				 
				 <td style="font-weight:500;">Additional Book of Record as per requirement*<p  id="otherselect" style='display:none;'>Other*
				 <input type="text" class="form-control col-md-4"    ></p></td> </td>
				  <td class="col-md-2 px-2 text-left">
				   <?php  echo (stristr($pgdetail[0]['BOR'],'Additional Book of Record') == true)?'Yes':'No'; ?>
				  </td>
				</tr>
			  </tbody>
			</table>
			</div>
			
			
			
			
			</div>
			
	</div>
</section>
		