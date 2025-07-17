<style>
@media print
{    
    .no-print, .no-print 
    {
        display: none !important;
    }
}
</style>
<section>
	<div class="container-fluid">
	<?php //print_r($memberdetail); ?>
	<center class="no-print"><button type="button" class="btn btn-danger" value="Print" style="color:#fff;font-weight:500;" onclick="window.print();
">&nbsp;<i class="fa fa-print" aria-hidden="true"></i>&nbsp;Print&nbsp;&nbsp;&nbsp;</button></center>
		<div class="row list-view">
			<div class="col-md-12" style="border-bottom:2px dotted #000;">
				
		  	
		 <div class="col-md-12 row mt-4">
		   <div class="col-md-3 ">
		   <h6 class="m-0"> Name of Producer Group</h6>
		   </div>
		    <div class="col-md-9">
			<label style="text-transform: capitalize;text-decoration: underline;"><?php echo str_replace('pg','',$memberdetail[0]['pgname']); ?> PG</label>
		   </div>
		   </div>
		   
		    <div class="col-md-12 row mt-4">
		   <div class="col-md-3">
		   <h6 class="m-0">Name</h6>
		   </div>
		    <div class="col-md-9">
			<div class="input-group">			 
			<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['name']); ?></label>
			 </div>
		   </div>
		   </div>
		   
		   <div class="col-md-12 row mt-4">
		   <div class="col-md-3">
		   <h6 class="m-0">SHG Name</h6>
		   </div>
		    <div class="col-md-9">
			<div class="input-group">			 
			<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['SHGname']); ?></label>
			 </div>
		   </div>
		   </div>
		    <div class="col-md-12 row mt-4">
		   <div class="col-md-3">
		   <h6 class="m-0">SHG Code</h6>
		   </div>
		    <div class="col-md-9">
			<div class="input-group">
			<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['SHGcode']); ?></label>
			 </div>
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
				  <br/><label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['district']); ?></label>
				</div>
				<div class="col-md-3 mb-3">
				  <label for="validationTooltip04"><b>Block</b></label>
				  <br/><label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['block']); ?></label>
				</div>
				<div class="col-md-3 mb-3">
				  <label for="validationTooltip04"> <b>Gram Panchayat</b></label>
				  	 <br/><label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['grampanchayat']); ?></label>
				</div>
				<div class="col-md-3 mb-3">
				  <label for="validationTooltip05"> <b>Village</b></label>
				  <br/><label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['grampanchayat']); ?></label>
				</div>
			  </div>
		   </div>
		   </div>
		   
		   
		      <div class="col-md-12 row mt-4">
		   <div class="col-md-3">
		   <h6 class="m-0">Name of the Husband / Father of Women Member</h6>
		   </div>
		    <div class="col-md-9">
			<div class="input-group">			 
			<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['middlename']); ?></label>
			 </div>
		   </div>
		   </div>
		   
		   
		    <div class="col-md-12 row mt-4">
		   <div class="col-md-3">
		   <h6 class="m-0">Education</h6>
		   </div>
		    <div class="col-md-9">
			<div class="input-group">			 
			<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['education']); ?></label>
			 </div>
		   </div>
		   </div>
		   
		     <div class="col-md-12 row mt-4">
		   <div class="col-md-3">
		   <h6 class="m-0">Contact No</h6>
		   </div>
		    <div class="col-md-9">
			<div class="input-group">			 
			<div class="input-group">
			<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['contactno']); ?></label>			
			 </div>
			 </div>
		   </div>
		   </div>
		   
		   <div class="col-md-12 row mt-4">
		   <div class="col-md-3">
		   <h6 class="m-0"> Identity Document </h6>
		   </div>
		    <div class="col-md-9">
			<div class="input-group">			 
			<div class="input-group">			 
				<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['doctype']) . ' :  '.$memberdetail[0]['docidno']; ?></label>
			 </div>
			 </div>
		   </div>
		   </div>
		   
		     <div class="col-md-12 row mt-4">
		   <div class="col-md-3">
		   <h6 class="m-0">Membership Type</h6>
		   </div>
		    <div class="col-md-9">
			<div class="input-group">			 
			<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['membershiptype']); ?></label>
			 </div>
		   </div>
		   </div>
		   
		  
		
		    <div class="col-md-12 text-right mb-1" style="/border-bottom: 2px dotted #000;/"><br/>
				
		    </div>				
		
			</div>
			
			<!---  Land area -->
			<div class="col-md-12 mt-1" style="border-bottom:2px dotted #000;">
		
		  
		     <div class="col-md-12">
			  <br/>
			  <div class="row">
			  <div class="col-md-11"><h5 class="m-0"> Land area</h5><br/></div>
			
			   </div>
		 <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					 Total Agricultural land(bighas)
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['landarea']); ?></label>
				 </div>
				 </div>
			   </div>
			   </div>
			   
			   <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Total Irrigated Land(bighas)
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">	
				<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['irrigatedland']); ?></label>
				 </div>
				 </div>
			   </div>
			   </div>
			   
			   <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					 Total Non Irrigated land(bighas)
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
			    <label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['nonirrigatedland']); ?></label>
				 </div>
				 </div>
			   </div>
			   </div>
			   
			   <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					 Total Water bodies(bighas)
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['totalwaterbody']); ?></label>
				 </div>
				 </div>
			   </div>
			   </div>
			   
			   <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Grazing land(bighas)
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">	
                <input type="hidden" name="stepno2" value="2" />		
                 <input type="hidden" name="memberid" value="<?php echo $this->uri->segment(2); ?>" />						
				<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['grazingland']); ?></label>
				 </div>
				 </div>
			   </div>
			   </div>
			
			
			<br/>
			
			</div>
			</div>
			
			
			<!--Commodites---> 
			<div class="col-md-12 mt-3" style="border-bottom:2px dotted #000;">
		
		  
		   
		   <?php //print_r($userdetails); ?>
		       <div class="col-md-12 pr-4 pl-4">
				<br/>
				<h5 class="m-0">Commodites </h5> <br/> <br/>
				
				<div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Commodity 1 
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['agriculture1']); ?></label>
			     </div>
				 </div>
			   </div>
			   </div>
			   
				<div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Commodity 2 
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['agriculture2']); ?></label>
			     </div>
				 </div>
			   </div>
			   </div>
			   <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Commodity 3 
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['agriculture3']); ?></label>
			     </div>
				 </div>
			   </div>
			   </div>
			   <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Commodity 4 
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['agriculture4']); ?></label>
			     </div>
				 </div>
			   </div>
			   </div>
			    <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Commodity 5 
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['agriculture5']); ?></label>
			     </div>
				 </div>
			   </div>
			   </div>
			   <br/>
			   
			    <h6 class="m-0">Horticulture</h6> <br/> 
			   <div class="col-md-12">
			   <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Commodity 1 
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['horticulture1']); ?></label>
			     </div>
				 </div>
			   </div>
			   </div>
				  
			  <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Commodity 2 
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['horticulture2']); ?></label>
			     </div>
				 </div>
			   </div>
			   </div>
			   <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Commodity 3 
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['horticulture3']); ?></label>
			     </div>
				 </div>
			   </div>
			   </div>
				  
				
				<div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Commodity 4 
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['horticulture4']); ?></label>
			     </div>
				 </div>
			   </div>
			   </div>
				  
				
				<div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1">
					Commodity 5 
			    </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<div class="input-group">			 
				<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['horticulture5']); ?></label>
			     </div>
				 </div>
			   </div>
			   </div>
				  <br/>
				</div>
				 
				</div>
			</div>
	
			
			</div>
			</div>
			</div>	
			
			
			<!---- commodities --->
			
				<div class="col-md-12" style="border-bottom:2px dotted #000;">
		 
		   <?php //print_r($userdetails); ?>
		       <div class="col-md-12">
					<br/>
			  <h5 class="m-0">Livestocks/Fishery/Sericulture/Others   </h5> <br/>
		 <br>

		 <div class="col-md-12">
				<br/>
				<h6 class="m-0" style="font-size:18px;">Livestocks</h6> <br/> 
				<br/> 
				
			<div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1" style="font-weight:500;">Commodity 1  </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['livestock1']); ?></label>
				 </div>
			   </div>
			   </div>
				  
			  <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1" style="font-weight:500;">Commodity 2  </label>
			   
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['livestock2']); ?></label>
				 </div>
			   </div>
			   </div>
			   <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1" style="font-weight:500;">Commodity 3  </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['livestock3']); ?></label>
				 </div>
			   </div>
			   </div>
			   
			   <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1" style="font-weight:500;">Commodity 4  </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['livestock4']); ?></label>
				 </div>
			   </div>
			   </div>
			   
			   <div class="col-md-12 row mt-4">
			   <div class="col-md-3">
			   <label class="form-check-label" for="gridCheck1" style="font-weight:500;">Commodity 5  </label>
			   </div>
				<div class="col-md-9">
				<div class="input-group">			 
				<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['livestock5']); ?></label>
				 </div>
			   </div>
			   </div>
			   
			   		   
			   <br/><br/>
			   
			   <div class="col-md-12 form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-3" style="font-weight:500;">Fishery</label>
			     <div class="form-group col-md-7">
					<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['fishery']); ?></label>
				  </div>
				  </div>
			   
			   <div class="col-md-12 form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-3"   style="font-weight:500;">Sericulture</label>
			      <div class="form-group col-md-7">
					<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['sericulture']); ?></label>
				  </div>
				  </div>
				 
				  
				  <div class="col-md-12 form-group row">
			   <label for="inputvallueaadion" class="col-form-label col-md-3" style="font-weight:500;">Others</label>
			      <div class="form-group col-md-7">
					<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['others']); ?></label>
				  </div>
			   </div>
		
			
			</div>
			</div>
			</div>
			
			
			<!---- sale to pg ---->
			
			<div class="col-md-12" style="border-bottom:2px dotted #000;">
			 
			
		   <?php //print_r($userdetails); ?>
		       <div class="col-md-12">
				<br/>
				<h6 class="m-0" style="font-size:18px;">Sale to PG</h6> <br/> 
				<br/> 
				
			    <table class="table p-3 table-bordered table-striped">
			  <thead>
				<tr>				  
				  <th scope="col">Commodity Name*</th>
				   <th scope="col">Qty.</th>
				  <th scope="col">Price</th>
				  <th scope="col">Sale</th>
				</tr>
			  </thead>
			  <tbody>
				
				
				<tr>
				
				   <td><label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['commodity']); ?></label>
				</div>
			  
			   </td>
			   
				  <td><label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['qty']); ?></label>
				   </td>
				  <td><label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['price']); ?></label>
				  </td>
				   <td><label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['saleamount']); ?></label></td>
				  
				</tr>
				
			  </tbody>
			</table>
			   
			   	<br/>
				<h6 class="m-0" style="font-size:18px;">Payment From PG</h6> <br/> 
				 
				<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['paymentrecieved']); ?></label>
			   <br/><br/>
				<h6 class="m-0" style="font-size:18px;">Payment Due From PG</h6> <br/> 
				
				<label style="text-transform: capitalize;"><?php echo ucfirst($memberdetail[0]['paymentdue']); ?></label>
				<br/> 
				
			
			
				   </div>
			</div>
			
			
			
			
			</div>
			
	</div>
</section>
		