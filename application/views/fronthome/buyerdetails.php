
<div class="container-fluid">
<button class="btn btn-primary" style="padding: 5px 10px 5px 10px;" onclick="window.location='<?php echo base_url() ?>user-profile'"><i class="" aria-hidden="true"></i>&nbsp;Back</button>




<section>
	<div class="container-fluid">
		<div class="row list-view">
			<div class="col-md-1">
				<div class="sidebar">
			 
				</div>
			</div>
			<div class="col-md-10">
				<div class="content content-box">
					<div class="card-header">
				<div class="row">
				<div class="col-md-12">
							<h4 class="m-0"> Add Buyer Details</h4>
						</div>												
						</div>
	       </div>
 
					<center>
  <?php $msg = $this->input->get('msg');
  
  if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error"  style="color:green;font-weight:bolder;">'.$msg.'</label></fieldset>';?>
			 
			  </center>
		   <form class="row pr-4 pl-4" method="post">
		   
 
		       <div class="col-md-12">
			    <div class="row">	
			     <div class="col-md-6">
				 <div class="form-group">
					<label for="exampleInputFullName">Full Name*</label>
					<input type="text" name="fullname" class="form-control" id="exampleInputFullName" aria-describedby="fullNameHelp" placeholder="Full Name"   required />
					<input type="hidden" name="isupdate" value="<?php echo $this->uri->segment(2); ?>" />
					<small id="fullNameHelp" class="form-text text-danger d-none">Full Name </small>
				  </div>
				 </div>
				</div>
					<?php// print_r($districts); ?>		

				<div class="row">	
				<div class="col-md-6">
				<div class="form-group">
				<label for="exampleInputFullName">District*</label>
				<select class="custom-select" id="districtname" name="districtname">
				<option  value="">Choose District...</option>
				
				
  <?php  foreach($districts as $district){ ?>
	
	<option value="<?php echo $district['district']; ?>"  <?php if($district['district']  == $this->input->get('districtname')){ echo 'selected="selected"'; } ?>><?php echo ucfirst($district['district']); ?></option>

  <?php } ?>	
								
				</select>
				</div>
			   </div>
			   
			   <?php //print_r($blocks); ?>
			   
				     <div class="col-md-6">
					  <div class="form-group">
						<label for="exampleInputFullName">Block*</label>
					  <select class="custom-select" id="blocknames" name="blockname">
	<option value="">Choose Block...</option>
	<option value="<?php echo $this->input->get('blockname'); ?>"  <?php if($this->input->get('blockname') == true){ echo 'selected="selected"'; } ?>><?php echo ucfirst($this->input->get('blockname')); ?></option>
	
  </select>
					  </div>
				   </div>

			   </div>
<?php

$dists =  array();

foreach($districts1 as $district){
$dists[] = ucfirst($district['district']);
}
$districtnames = implode(', ',$dists);

$blks =  array();

foreach($blocks as $block){
$blks[] = ucfirst($block['block']);
}
$blocknames = implode(', ',$blks);

 


?>			   
		<div class="row">		   
			   <div class="col-md-6">
						<div class="form-group">
						<label for="exampleInputMobileNo">Contact No*</label>
						<input type="tel" class="form-control col" name="contact" id="exampleInputMobileNo" aria-describedby="mobileNoHelp" placeholder="Contact No"    pattern="^\d{10}$" title="Enter 10 Digit Number"  required="required" />
						<small id="mobileNoHelp" class="form-text text-danger d-none">Contact No</small>
						</div>
				</div>
			   
			   <div class="col-md-6">
				 <div class="form-group">
					<label for="exampleInputMobileNo">E-mail ID</label>
					<input type="Email" class="form-control" name="email" id="exampleInputMobileNo" aria-describedby="Email" placeholder="E-mail ID"    title="Email ID" />
					<small id="mobileNoHelp" class="form-text text-danger d-none">E-mail</small>
				  </div>
			 </div>
	    </div>
		<?php //echo '<pre/>';print_r($commoditynamelists);   
    $comlist = array();
    foreach($commoditynamelists as $commoditynamelist){
		
	$comlist[] = implode(',',array_unique(array_filter($commoditynamelist)));
		
	}
	
	 
	 $strcommodity = implode(', ',array_unique(explode(',', implode(',',$comlist))));
	 //echo  $strcommodity;
	 //echo '<pre/>';print_r($strcommodity);
	 //print_r($strcommodity); 
	?>
  <?php //print_r($strcommodity); ?>
			<div class="row">		   
				  <div class="col-md-6">
				 <div class="form-group">
				 <label for="exampleInputFullName">Commodity* </label>
				 <input type="text" name="commodity" class="form-control" id="exampleInputFullName" aria-describedby="fullNameHelp" placeholder="Commodity"   required />
					<input type="hidden" name="isupdate" value="<?php echo $this->uri->segment(2); ?>" />
					<small id="fullNameHelp" class="form-text text-danger d-none">Commodity </small>
				 
				
				  
	<option value="<?php echo $this->input->get('commoditynamelist'); ?>"  <?php if($this->input->get('commoditynamelist') == true){ echo 'selected="selected"'; } ?>><?php echo ucfirst($this->input->get('commoditynamelist')); ?></option>					
				</select>
			 </div>
		 </div>
	 </div>
  
   
 
		 
		   <div class="row col-md-8">
				 <div class="form-group">
					<label for="exampleInputFullName"> Decription</label>
					<textarea id=" " class="form-control" name="decription" rows="4" cols="72"></textarea>					
				  </div>
		  </div>
						 
			<div class="col-md-12 text-center mb-5">
			 <div class="col-md-12">
				<button class="btn btn-primary" type="submit" name="submit" value="Signup" >SUBMIT</button>
			  </div>
			</div>
			</form>
			</div>
		</div>		
	</div>
</section>
<script>


$(document).ready(function(){
 $('#districtname').change(function(){
  var districtname = $('#districtname').val();

  if(districtname != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>admin-manager/fetch_block",
    method:"POST",
    data:{districtname:districtname},
    success:function(data)
    {
		 // alert(data);
     $('#blocknames').html(data);
     
    }
   });
  }
  else
  {
   //$('#districtname').html('<option value="">Select Distict</option>');
   $('#blocknames').html('<option value="">Select Block</option>');
  }
 });

 
});





$(document).ready(function(){
 $('#blocknames').change(function(){
  var blocknames = $('#blocknames').val();

  if(blocknames != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>admin-manager/fetch_block",
    method:"POST",
    data:{blocknames:blocknames},
    success:function(data)
    {
		 // alert(data);
     $('#commodityname').html(data);
     
    }
   });
  }
  else
  {
   //$('#districtname').html('<option value="">Select Distict</option>');
   $('#commodityname').html('<option value="">Select Commodity</option>');
  }
 });

 
});



</script>