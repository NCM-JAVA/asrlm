<!DOCTYPE html>
<html lang="en">
<head>
<title>Assam  State Rural Livelihood  Mission (ASRLM) | Government of India</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="icon" type="image/x-icon" href="<?php echo base_url() ?>images/favicon.ico">
<link rel="stylesheet" id="" href="<?php echo base_url();?>newdesign/css/bootstrap.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo base_url();?>newdesign/css/font-awesome.min.css">
<link rel="stylesheet" id="" href="<?php echo base_url();?>newdesign/css/style.css" type="text/css" media="all">
<link href="<?php echo base_url(); ?>charts/css/c3.css" rel="stylesheet" type="text/css">
<script src="https://d3js.org/d3.v5.min.js" charset="utf-8"></script>
<script src="<?php echo base_url(); ?>charts/js/c3.js"></script>
</head>
<body >

<section class="page-container">
<header>
  <div class="container-fluid">
	<div class="row header-logo">
    <a  href="<?php echo base_url(); ?>" class="col-md-4 logo">
	<img class="col-md-2 logo"  src="<?php echo base_url();?>/images/ASRLMS-Logo-Transparent-English.png"   class="logo"	style="max-width:130px;height:75px;" alt="Logo"/>
</a>		
		
		<a  href="<?php echo base_url(); ?>" class="col-md-4 logo">
			<img  src="<?php echo base_url();?>images/emblem-dark.png" alt="Logo" style="max-width: 71px;padding: 10px;margin-left:15px;text-align:center;"/>
			</a>
		<!--div class="row  col-md-3">
		<a class="col-md-4 mr-5 mt-4" href="?ptype=login" style="padding: 10px;background: #000;color: #fff;height: 45px;border-radius: 5px;padding: 10px 22px;"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;&nbsp;Log In</a>
		<a class="col-md-5 mt-4" href="register?ptype=register" style="padding: 10px;background: #000;color: #fff;height: 45px;border-radius: 5px;padding: 10px 22px;"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;&nbsp;Register</a>
		</div-->
		
			<img src="<?php echo base_url();?>newdesign/images/logo-2.png" height="auto" style="height: 70px !important;width: 163px !important;"	alt="Logo"/>
		
		
	</div>
  </div>
  <style>
  body {
    margin: 0;
    background-image: url('<?php echo base_url();?>images/_BIK4355.JPG');
    background-position: center;
    /* position: static; */
    background-position: cover;
    background-repeat: no-repeat;
    background-size: cover;
}
header {
    padding-top: 12px;
    background: rgba(255,255,255,0.8);
}
footer {
    bottom: 0;
    width: 100%;
    padding: 5px 15px;
    background: rgba(255,255,255,0.3);
    text-align: center;
    margin-top: 10px;
    position: absolute;
}

.form-box{     margin: 100px auto 0 auto;    box-shadow: 0 0 50px rgb(0 0 0 / 20%);
    background-color: rgba(255,255,255,0.8);
    max-width: 26%; }
  </Style>
</header>

<section>
	<div class="containerxcc<?php // if($this->input->get('ptype') != 'login'){  echo '-fluid';  } ?>">
	 <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset" style="background: #555;"><label class="error">'.$msg.'</label></fieldset>';?>
			  <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset" style="background: #555;"><label class="error" style="color:green;">'.$this->input->get('msg').'</label></fieldset>'; }?>
	<?php if($this->input->get('ptype') == false){ ?>
		<form action="<?php echo base_url(); ?>login" id="login" method="post"  name="Login_Form" class="form-signin"> 	
        <div class="col-md-12 row">		
		<div class="col-md-6">	
		</div>
		<div class="col-md-6 form-box mr-2">
			<h1 class="form-title">Login</h1>
			  <?php if(isset($msg) && $msg !='') echo '<fieldset id="error_fieldset"><label class="error">'.$msg.'</label></fieldset>';?>
			  <?php if($this->input->get('msg') == true){ echo '<fieldset id="error_fieldset"><label class="error" style="color:green;">'.$this->input->get('msg').'</label></fieldset>'; }?>
			
			<div class="input-container">
				<i class="fa fa-envelope icon"></i>
				 <input type="email" class="input-field" name="email" value="<?= isset($_COOKIE['username'])?$_COOKIE['username']:'' ?>" placeholder="Email/Username" required /><br>
			  
			</div>
			<div class="input-container">
				<i class="fa fa-lock icon"></i>
				<input class="input-field" type="password" placeholder="Password" value="<?= isset($_COOKIE['password'])?$_COOKIE['password']:'' ?>"  name="password" required>
			</div>
			<div class="checkbox">
			  <label><input type="checkbox" value="" required title="Please accept terms & Condition">Accept Terms & Condition</label>
			</div>
			<div class="btn-box">
				<!--a href="user-profile.html" class="btn">Log In</a-->
				<button class="btn"  name="login" value="Login" type="Submit">Log In</button>
			</div>
			<div class="form-bottom-link">
				<div class="trouble-login">
					<!--a href="#" data-toggle="modal" data-target="#myModal">Trouble Login In?</a-->
				</div>
				<div class="new-user">
					<span>New User? <a href="<?php echo base_url();?>register">Sign Up</a></span>
				</div>
			</div>
		</div>
		</div>
		</form>	
	<?php }else{  ?>
	<div class="row mt-5">
	<div class="col-md-5">
	
	<!--img src="<?php echo base_url(); ?>images/ffcf4999-17e5-477e-be63-70043e564123.png" /-->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<!--li data-target="#carouselExampleIndicators" data-slide-to="2"></li-->
	  </ol>
	  <div class="carousel-inner">
		<div class="carousel-item active">
		  <img class="d-block w-100" src="<?php echo base_url(); ?>images/12.jpg" style="max-height:500px;min-height:500px;" alt="First slide">
		</div>
		<div class="carousel-item">
		  <img class="d-block w-100" src="<?php echo base_url(); ?>images/IMG-20191015-WA0043.jpg" style="max-height:500px;min-height:500px;" alt="Second slide">
		</div>
		<!--div class="carousel-item">
		  <img class="d-block w-100" src="<?php echo base_url(); ?>images/WhatsApp Image 2021-06-16 at 16.43.26.jpeg" alt="Third slide">
		</div-->
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>
 
	</div>
	
	<div class="col-md-7 mt-0" style="padding:10px;background: rgba(255,255,255,0.9);">
	 <h6 class="m-0 ml-3"><b>Commodity</b></h6><br/>
	<div id="chart"></div>
	
	</div>
	</div>

	<?php } ?>	
	</div>
</section>

<footer id="footer" style="margin-top:150px;">
    <div class="text-center padder">
      <!--p>
        <small style="color:#215DAC;">Design & Developed by ASRLM <br>&copy; <?php echo date('Y',time()); ?> </small>
      </p-->
	    <div class="copyright">
      &copy; Copyright <strong><span>ASRLM <?php echo date('Y'); ?></span></strong>. All Rights Reserved
    </div>
    
    </div>
  </footer>
</section>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Forgot Password</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
	  <div class="row">
	   <div class="col-md-12">
      <input class="form-control" type="text" placeholder="Please Enter Your Email Id" name="email">				
      </div>
	     </div>
 </div>
      <!-- Modal footer -->
      <div class="modal-footer forgot-btn">
	    <button type="submit" class="btn btn-sbmt">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>newdesign/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>newdesign/js/bootstrap.js"></script>
 <script>
					  var chart = c3.generate({
						data: {
						json: [{label: "Groundbut", value:200400},{label: "Paddy",value:345000},{label: "Green Vegetables, Potato, Tomato etc",value:45000},{label: "Water melon, starwberry, Pumpkin,",value:35000},{label: "Pulses",value:24500},{label: "Cotton",value:64500}],
									keys: {
										x: 'label',
										value: ["value"],
									},
						 /* columns: [
							['data1', 1030, 1200, 1100, 1400, 1150, 1250],
						  //  ['data2', 2130, 2100, 2140, 2200, 2150, 1850]
				//           ['data1', 30, 200, 100, 400, 150, 250],
				//           ['data2', 130, 100, 140, 200, 150, 50]
						  ],*/
						  //row:['data1',22,33,55,66,44,55],
						  type: 'bar',
						  onclick: function (d, element) { console.log("onclick", d, element); },
						  onmouseover: function (d) { console.log("onmouseover", d); },
						  onmouseout: function (d) { console.log("onmouseout", d); }
						},
						axis: {
						  x: {
							type: 'categorized'
						  }
						},
						bar: {
						  width: {
							ratio: 0.3,
				//            max: 30
						  },
						}
					  });
					</script>
<script>

$('.carousel').carousel({
  interval: 4000
})
</script>
</body>
</html>
