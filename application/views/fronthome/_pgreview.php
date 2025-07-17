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
	<?php //print_r($pgdetail); ?>
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
			
				
				<div class="col-md-3">
				<?php echo ucfirst($pgdetail[0]['USname']); ?> 
				</div>	
			    </div>
				
			   <div class="form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-5">No. of Village Covered by PG</label>
			     <div class="form-group col-md-7 px-0">
					<?php echo ucfirst($pgdetail[0]['USnovillage']); ?> 
				 </div>
			   </div>
			   
			     <div class="form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-5">No. of Member Associated with PG</label>
			      <div class="form-group col-md-2 px-0">
					<?php echo ucfirst($pgdetail[0]['USnomember']); ?> 
				  </div>
			   </div>

			</form>			
			</div>
			
			<div id="pashusakhipg">
			 <h4 style="text-decoration: underline;">Pashu Sakhi</h4><br/>
             <div class="form-group col-md-12 row">
			 <div class="red box col-md-5 px-0">Name of Pashu Sakhi Associated with the PG</div>
			 		
				<div class="col-md-4">
				  <?php echo ucfirst($pgdetail[0]['PSname']); ?> 
				</div>	
			    </div>
				
			   <div class="form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-5">No. of Village Covered by PG</label>
			     <div class="form-group col-md-7 px-0">
					<?php echo ucfirst($pgdetail[0]['PSnovillage']); ?> 
				 </div>
			   </div>
			   
			   <div class="form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-5">No. of Member Associated with PG</label>
			      <div class="form-group col-md-2 px-0">
					
					<?php echo ucfirst($pgdetail[0]['PSnomember']); ?> 
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
			 
				
				<div class="col-md-4">
				 <?php echo ucfirst($pgdetail[0]['KSname']); ?> 
				</div>	
			    </div>
				
			   <div class="form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-5">No. of Village Covered by PG</label>
			     <div class="form-group col-md-7 px-0">
					<?php echo ucfirst($pgdetail[0]['KSnovillage']); ?> 
				 </div>
			   </div>
			   
		   <div class="form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-5">No. of Member Associated with PG</label>
			      <div class="form-group col-md-2 px-0">
					
					<?php echo ucfirst($pgdetail[0]['KSnomember']); ?> 
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
				<b>Contact Person</b>
			   <a ><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;<?php echo $pgdetail[0]['president_name']; ?></a>
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
			
			<!--- Tranings List --->
			
				<div class="col-md-12" style="border-bottom:2px dotted #000;">
			  <br><br>
				<div class="">
				<h4 class="m-0"> Tranings List</h4>
			
			
			<div class="row mt-4 ml-2 mr-2"> 
			
			 <div class="col-md-2"><h4 class="m-0">Agricuture</h4></div>
			  <div class="col-md-2"><h4 class="m-0">Horticulture</h4></div>
			   <div class="col-md-2"><h4 class="m-0">Livestocks</h4></div>
			    <div class="col-md-2"><h4 class="m-0">Fishery</h4></div>
				 <div class="col-md-2"><h4 class="m-0">Sericulture</h4></div>
				  <div class="col-md-2"><h4 class="m-0">Others</h4></div>
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
				  <?php if($this->input->get('tltype') == false || $this->input->get('tltype') == 'agri' || $this->input->get('tltype') == 'livestocks'){ ?>
				  <th scope="col" >Yes or No</th>
				  <?php } ?>
				</tr>
			  </thead>
			
			  <tbody>
			    <?php if($this->input->get('tltype') == false || $this->input->get('tltype') == 'agri'){ ?>
				<tr>
				 <td style="font-weight:500;">1.</td>				 
				 <td style="font-weight:500;">Basic Livelihoods Training</td>
				 <td class="col-md-2 px-2 text-left">
				 <?php echo (stristr($pgdetail[0]['TLAgriculture'],'Basic Livelihoods Training') == true ?'Yes':'No'); ?>
				  </td>
				</tr>
				
				<tr>
				 <td style="font-weight:500;">2.</td>				 
				 <td style="font-weight:500;">Farmers Field School</td>
				   <td class="col-md-2 px-2 text-left">
					<?php echo (stristr($pgdetail[0]['TLAgriculture'],'Farmers Field School') == true ?'Yes':'No'); ?>
				  </td>
				</tr>
				<tr>
				 <td style="font-weight:500;">3.</td>				 
				 <td style="font-weight:500;">Pashu Pathshala</td>
				  <td class="col-md-2 px-2 text-left">
					<?php echo (stristr($pgdetail[0]['TLAgriculture'],'Pashu Pathshala') == true ?'Yes':'No'); ?>
				  </td>				 
				</tr>
				
				<tr>
				 <td style="font-weight:500;">4.</td>				 
				 <td style="font-weight:500;">Land preparation,ploughing,Tractorisation/Manual</td>
				 <td class="col-md-2 px-2 text-left">
					<?php echo (stristr($pgdetail[0]['TLAgriculture'],'Land preparation,ploughing') == true ?'Yes':'No'); ?>
				  </td>					  
				</tr>
				
				<tr>
				 <td style="font-weight:500;">5.</td>				 
				 <td style="font-weight:500;">Seed Sorting & treatment</td>
				   <td class="col-md-2 px-2 text-left">
					<?php echo (stristr($pgdetail[0]['TLAgriculture'],'Seed Sorting & treatment') == true ?'Yes':'No'); ?>
				  </td>		
				 
				</tr>
				
				<tr>
				 <td style="font-weight:500;">6.</td>				 
				 <td style="font-weight:500;">Soil Nutrients Management</td>
				  <td class="col-md-2 px-2 text-left">
					<?php echo (stristr($pgdetail[0]['TLAgriculture'],'Soil Nutrients Management') == true ?'Yes':'No'); ?>
				  </td>					 
				</tr>
				
				<tr>
				 <td style="font-weight:500;">7.</td>				 
				 <td style="font-weight:500;">Pest Management</td>
				   <td class="col-md-2 px-2 text-left">
					<?php echo (stristr($pgdetail[0]['TLAgriculture'],'Pest Management') == true ?'Yes':'No'); ?>
				  </td>
				  
				</tr>
				
				<tr>
				 <td style="font-weight:500;">8.</td>				 
				 <td style="font-weight:500;">Irrigation</td>
				 <td class="col-md-2 px-2 text-left">
					<?php echo (stristr($pgdetail[0]['TLAgriculture'],'Irrigation') == true ?'Yes':'No'); ?>
				  </td>
				   
				</tr>
				
				<tr>
				 <td style="font-weight:500;">9.</td>				 
				 <td style="font-weight:500;">Bund formation,uprooting of weeds interculture,transplanting,harvesting,winnowing,Threeshing etc</td>
				   <td class="col-md-2 px-2 text-left">
					<?php echo (stristr($pgdetail[0]['TLAgriculture'],'Bund formation,uprooting of weeds interculture') == true ?'Yes':'No'); ?>
				  </td>
				 
				</tr>
				
				<tr>
				 <td style="font-weight:500;">10.</td>				 
				 <td style="font-weight:500;">Harvest Management</td>
				  <td class="col-md-2 px-2 text-left">
					<?php echo (stristr($pgdetail[0]['TLAgriculture'],'Harvest Management') == true ?'Yes':'No'); ?>
				  </td>
				  
				</tr>
				
				<tr>
				 <td style="font-weight:500;">11.</td>				 
				 <td style="font-weight:500;">Post Harvest Management</td>
				  <td class="col-md-2 px-2 text-left">
					<?php echo (stristr($pgdetail[0]['TLAgriculture'],'Post Harvest Management') == true ?'Yes':'No'); ?>
				  </td>
				  
				</tr>
				
				<!--tr>
				 <td style="font-weight:500;">12.</td>				 
				 <td style="font-weight:500;">Others <br><div class="col-md-3"><input type="text" id="name" name="name" required
       minlength="4" maxlength="8" size="10" class="form-control"></div>
</td>
				 
				 

				   <td class="col-md-2 px-2 text-center ">
				  <select class="form-control  col-md-7">
					<option>Yes</option>
					<option>No</option>
				  </select>
				  </td>
				</tr-->
					<tr>
				 <td style="font-weight:500;">12.</td>				 
				 <td style="font-weight:500;">Other*<p  id="otherse" style='display:none;'>
				 <input type="text" class="form-control col-md-4"    ></p></td> </td>
				  <td class="col-md-2 px-2 text-left">
					<?php echo (stristr($pgdetail[0]['TLAgriculture'],'Other') == true ?'Yes':'No'); ?>
				  </td>
				  
				</tr>
			
			<?php } ?>

			
	
			  </tbody>
			</table>
			
			  
			  <div class="col-md-12 text-right mb-1">
			  <br>
			 
			  </div>
				  
			
			</div>
			
		   </form>
			</div>
			</div>
			
			
		<div class="col-md-12 mt-3" style="border-bottom:2px dotted #000;">
				<div>
			<div class="row">
				<div class="col-md-12">
							<h4 class="m-0">Surplus Use</h4>
						</div>												
						</div>		
		 	
			<div class="col-md-12">
			<div class="row mt-4 mb-0">
			<div class="col-md-6">
			<div class="form-group">
			<label for="inputname" style="font-weight:500;" class="col-form-label">Payment to   Member</label>
			<br/>
			<?php echo $pgdetail[0]['su_paymenttomember']; ?>	</div>
			<br/>
			<div class="form-group">
			<label for="inputname" style="font-weight:500;" class="col-form-label">Payment Due to Non PG Member</label>
			<br/>
			<?php echo $pgdetail[0]['su_paymentduenonpgmember']; ?>	</div>
			
			</div>
			
			</div>
			
			<div class="col-md-6">
			
			<!--div class="form-group"><label for="inputname" style="font-weight:500;" class="col-form-label">Payment Due to   Member</label><input type="number" class="form-control col-md-8" min="0" id="inputname"></div-->
			<br/>
			<div class="form-group"><label for="inputname" style="font-weight:500;" class="col-form-label">Payment Due to PG Member</label>
			<br/>
			<?php echo $pgdetail[0]['su_paymentduepgmember']; ?>	</div>
			<br/>
			</div>
			<br/>
			</div>
			
			<div class="col-md-12">
			<div class="form-group col-md-12 row"><label for="inputname" style="font-weight:500;" >Re Invest to PG: &nbsp;&nbsp;</label>
			
			<div class="col-md-12">
			<br/>
			<?php echo $pgdetail[0]['su_reinvesttopg']; ?>	</div>
			<br/>
			 
				  
			
				  
				 
				</div><br/>
			</div>
		
			
			</div>		
						
			
			</div>		
			</div>
			</div>
			</div>
			
			<!----- Finance Transaction-->
			
			<div class="col-md-12 mt-3" style="border-bottom:2px dotted #000;">
			<div>
			
		  	<div class="col-md-12">
			  <br>
			  <h6 class="m-0"> MONTHLY FINANCIAL TRANSACTION DETAILS</h6><br><br>
			  <table class="table p-3 table-bordered table-striped">
			  <thead>
				<tr>				  
				  <th scope="col"></th>
				  <th scope="col">Cash in hand* (Cash Book in Rupees)</th>
				  <!--th scope="col">Cash in Bank*(Bank Book Rs.)</th-->
				  <th scope="col">Total (Rs.)</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <td style="font-weight:500;">A. Opening Balance (to be brought forward)*</td>
				  <td></td>
				  <!--td></td-->				 
				  <td><input class="form-control" type="text" placeholder=" "></td>
				</tr>
				
				<tr>
				  <td style="font-weight:500;">Receipts*</td>
				  <td style="font-weight:500;">Receipts*</td>
				  <!--td style="font-weight:500;">Payments*</td-->				 
				  <td><input class="form-control" type="text" placeholder=" "></td>
				</tr>
				
				<tr>
				  <td style="font-weight:500;">B1. Against sales proceeds*</td>
				  <td></td>
				   <!--td></td-->				 
				  <td><input class="form-control" type="text" placeholder=" "></td>
				</tr>
				
				<tr>
				  <td style="font-weight:500;">B2. Other receipts*</td>
				  <td></td>
				   <!--td></td-->				 
				  <td><input class="form-control" type="text" placeholder=" "></td>
				</tr>
				
				<tr>
				  <td style="font-weight:500;">B. Total Receipts*</td>
				  <td></td>
				   <!--td></td-->				 
				  <td><input class="form-control" type="text" placeholder=" "></td>
				</tr>
				
				
				<tr>
				  <td style="font-weight:500;">C1. Payment against procurement of commodities*</td>
				  <td>--------</td>
				   <!--td></td-->			 
				  <td><input class="form-control" type="text" placeholder=" "></td>
				</tr>
				
				<tr>
				  <td style="font-weight:500;">C2. Commission to Community Cadres* (variable payment)*</td>
				  <td>--------</td>
				   <!--td></td-->				 
				  <td><input class="form-control" type="text" placeholder=" "></td>
				</tr>
				
				<tr>
				  <td style="font-weight:500;">C3. Other expenditures*</td>
				  <td>--------</td>
				   <!--td></td-->					 
				  <td><input class="form-control" type="text" placeholder=" "></td>
				</tr>
				
				<tr>
				  <td style="font-weight:500;">C. Total Expenditure/Payments*</td>
				  <td>--------</td>
				   <!--td></td-->				 
				  <td><input class="form-control" type="text" placeholder=" "></td>
				</tr>
				
			  </tbody>
			</table>
			</div>	
			</div>
			</div>
			
			<!--- Closing Balance --->
			
			<div class="col-md-12 mt-3" style="border-bottom:2px dotted #000;">
			<div>
		  	<div class="col-md-12">
			  <br>
			  <h6 class="m-0"> CLOSING BALANCE (A+B-C)</h6><br><br>
			  <table class="table p-3 table-bordered table-striped">
			  <thead>
				<tr>				  
				  <th scope="col">Cash in hand* (Cash Book in Rupees)</th>
				  <th scope="col">Cash in Bank* (Bank Book in Rupees)</th>
				  <th scope="col">Total* (number in Rupees)</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <td><input class="form-control" name="cb_cihcb" value="<?php echo $pgdetail[0]['cb_cihcb']; ?>" type="text" placeholder=" " readonly></td>
				  <td><input class="form-control" name="cb_cihbb" value="<?php echo $pgdetail[0]['cb_cihbb']; ?>" type="text" placeholder=" " readonly></td>				 
				  <td><input class="form-control" name="cb_total" value="<?php echo $pgdetail[0]['cb_total']; ?>" type="text" placeholder=" " readonly></td>
				</tr>
				
				
				
			  </tbody>
			</table>
			<br/>
			<h6 class="m-0">Payment yet to be received from the buyer* (in Rupees)</h6>
			<?php echo $pgdetail[0]['cb_frombuyer']; ?><br/><br/>
			<h6 class="m-0">Payment yet to be made to producers member* (in rupees)</h6>
			<?php echo $pgdetail[0]['cb_payproducermember']; ?> <br/> <br/> <br/>
			</div>
			</div>
			</div>
			
			
			<!--- Final --->
			
			<div class="col-md-12 mt-3" style="border-bottom:2px dotted #000;">
			<div>
			<div class="col-md-12">
							<h4 class="m-0"> Final</h4>
						</div>		
		<div class="col-md-12">
			<div class="row mt-4 mb-5">
			<div class="col-md-6">
			<div class="form-group"><label for="inputname" style="font-weight:500;" class="col-form-label">Name  of Enumerator *</label>
			<?php echo $pgdetail[0]['finalenumerator_name']; ?>
			<div class="form-group"><label for="inputname" style="font-weight:500;" class="col-form-label">Name of Block Coordinator</label>
			<?php echo $pgdetail[0]['finalpresidentsec_name']; ?>
			 <br/>
			</div><br/>
			
			<div class="col-md-6">
			<!--div class="form-group"><label for="inputname" style="font-weight:500;" class="col-form-label">Name of Enumerator*</label><input type="text" class="form-control col-md-8" id="inputname"></div-->
		 
			<div class="form-group"><label for="inputname" style="font-weight:500;" class="col-form-label">Name of PG Secretary/President</label>
			<?php echo $pgdetail[0]['finalblockcoordinator']; ?>
			</div><br/>
			</div>
			
			<div class="col-md-12">
			<div class="form-group col-md-12 row"><label for="inputname" style="font-weight:500;" >Date: *&nbsp;&nbsp;</label>
			<?php echo $pgdetail[0]['finaldate']; ?>
			</div><br/>
			</div>

			<div class="col-md-12">
			<div class="form-group col-md-12 row"><label for="inputname" style="font-weight:500;" >Place:&nbsp;&nbsp;&nbsp;</label>
			<?php echo $pgdetail[0]['finalplace']; ?>
			</div>
			</div>				
			
			</div>		
						
			
			
			</div>	
			</div>
			</div>
			
			</div>
			
	</div>
</section>
		