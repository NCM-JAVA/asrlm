<!DOCTYPE html>
<html lang="en">
<head>
    <title>Assam  State Rural Livelihood  Mission (ASRLM) | Government of India</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="<?php echo base_url() ?>images/favicon.ico">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script-->
	<script type="text/javascript" src="<?php echo base_url(); ?>newdesign/js/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 <link rel="stylesheet" href="<?php echo base_url(); ?>newdesign/css/font-awesome.min.css">
 <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/modules/variable-pie.js"></script>
<style>


/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #8a2be2 ;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 25px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

body{ margin:0 auto; }
.small-box {
    border-radius: 0.25rem;
    box-shadow: 0 0 1px rgb(0 0 0 / 13%), 0 1px 3px rgb(0 0 0 / 20%);
    display: block;
    margin-bottom: 20px;
    position: relative;
	     
}
  .inner{  padding: 15px 35px;}
.bg-info, .bg-info>a {
    color: #fff!important;
}

.bg-info {
    background-color: #17a2b8!important;
}
.small-box .icon {
    color: rgba(0,0,0,.15);
    z-index: 0;
}
/* .small-box>.small-box-footer:hover {
    background-color: rgba(0,0,0,.15);
    color: #fff;
}

.small-box>.small-box-footer {
    background-color: rgba(0,0,0,.1);
    color: rgba(255,255,255,.8);
    display: block;
    padding: 3px 0;
    position: relative;
    text-align: center;
    text-decoration: none;
    z-index: 10;
} */
.bg-info, .bg-info>a {
    color: #fff!important;
}
a:hover {
    color: #0056b3;
    text-decoration: none;
}


element.style {
}
.small-box:hover .icon>i, .small-box:hover .icon>i.fa, .small-box:hover .icon>i.fab, .small-box:hover .icon>i.fad, .small-box:hover .icon>i.fal, .small-box:hover .icon>i.far, .small-box:hover .icon>i.fas, .small-box:hover .icon>i.ion {
      -webkit-transform: scale(1.1);  
    transform: scale(1.1);
}

.small-box .icon>i.fa, .small-box .icon>i.fab, .small-box .icon>i.fad, .small-box .icon>i.fal, .small-box .icon>i.far, .small-box .icon>i.fas, .small-box .icon>i.ion {
    font-size: 70px;
    top: 20px;
}
.small-box .icon>i {
    font-size: 90px;
    position: absolute;
    right: 15px;
    top: 15px;
    transition: -webkit-transform .3s linear;
    transition: transform .3s linear;
    transition: transform .3s linear,-webkit-transform .3s linear;
}
.infoboxtop{ margin:20px; }
.infoboxtop b{ color:#909bae }
.infoboxtop a{ color:#909bae }
.infoboxtop a:hover{ color:#0056b3 }
.infoboxtop h6{ color:#909bae }
.infoboxtop	h3{color:#3d5170; }
.card{ padding:10px;margin:5px;}
</style>
</head>
<body>


<div class="container-flued topnav">
<div class="col-md-12">
<div class="row">
<div class="col-md-3">
<div class="">
	<a  href="<?php echo base_url(); ?>" class="col-md-7 logo">
			<img src="<?php echo base_url();?>/images/ASRLMS-Logo-Transparent-English.png" style="max-height: 71px; border-radius: 5px;" alt="Logo"/>
		</a>
  </div>
</div>
<div class="col-md-8 row">
<form class="col-md-12 row" method="get">
<div class="col-md-4"  style="margin-top: 23px;">
<div class="input-group mt-4 mb-3">
 <select class="custom-select" id="districtname" name="districtname">
<option  value="">Choose District...</option>
  <?php foreach($districts as $district){ ?>
	
	<option value="<?php echo $district['district']; ?>"  <?php if($district['district']  == $this->input->get('districtname')){ echo 'selected="selected"'; } ?>><?php echo ucfirst($district['district']); ?></option>

  <?php } ?>					
</select>	
</div>
</div>
<div class="col-md-4" style="margin-top: 23px;">
<div class="input-group mt-4 mb-3" >
  <select class="custom-select" id="blocknames" name="blockname">
	<option value="">Choose Block...</option>
	<option value="<?php echo $this->input->get('blockname'); ?>"  <?php if($this->input->get('blockname') == true){ echo 'selected="selected"'; } ?>><?php echo ucfirst($this->input->get('blockname')); ?></option>
	
  </select>
</div>
</div>
<!--div class="col-md-2" style="margin-top: 23px;">
<div class="input-group mt-4 mb-3" >
  <select class="custom-select" id="inputGroupSelect02">
    <option selected>Commodity</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
</div>
</div-->
<div class="col-md-2" style="margin-top: 23px;">
<div class="input-group mt-4 mb-3">
<button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search</button>
</div>

</div>
</form>
</div>

<div class="col-md-1" style="margin-top: 23px;">
<div class="input-group mt-4 mb-3">
<button type="button" class="btn btn-default" onclick="window.location.href = '<?php echo base_url() ?>login'"><i class="fa fa-sign-in" aria-hidden="true"></i>
 &nbsp;Login</button>
</div>
</div>
  </div>
</div>
</div>
 
 <br><a type="button" class="btn btn-primary" href="<?php echo base_url() ?>buyer-details" style="float:right;margin-right:30px;background-color:#6610f2!important;">  <!--i class="fa fa-phone" aria-hidden="true"></i-->
&nbsp;<b>Buyer Details</b></a><br>  <br>

<div class="col-md-12">
<div class="row mb-5">
<?php

$dists =  array();

foreach($districts as $district){
$dists[] = ucfirst($district['district']);
}
$districtnames = implode(', ',$dists);

$blks =  array();

foreach($blocks as $block){
$blks[] = ucfirst($block['block']);
}
$blocknames = implode(', ',$blks);


$pgs =  array();

foreach($getpglist as $pg){
$pgs[] = ucfirst($pg['pgname']);
}
$pgnames = implode(PHP_EOL,$pgs);


$commoditys =  array();

foreach($commoditylists as $commoditylist){
$commoditys[] = ucfirst($commoditylist['commodity']);
}
$commoditynames = implode(PHP_EOL,$commoditys);


?>

<div class="col-md-2 text-center">
    <div class="infoboxtop card">
        <h6>
            <a href="#" title="<?php echo $districtnames; ?>">Districts&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color:#17C672;"></i></a></h6>
        <h3><?php echo count($districts) ?></h3>
    </div>
</div>
<div class="col-md-2 text-center">
    <div class="infoboxtop card">
        <h6><a href="#" title="<?php echo $blocknames; ?>">Blocks&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color:#17C672;"></i></a></h6>
        <h3><?php echo count($blocks) ?></h3>
    </div>
</div>
<div class="col-md-2 text-center">
    <div class="infoboxtop card">
        <h6><a href="#" title="<?php echo $pgnames; ?>">Producer Groups&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color:#17C672;"></i></a></h6>
        <h3><?php echo count($getpglist) ?></h3>
    </div>
</div>
<div class="col-md-2 text-center">
    <div class="infoboxtop card">
        <h6><a href="#" title="<?php echo count($pgmembers); ?>">PG Members&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color:#17C672;"></i></a></h6>
        <h3><?php echo count($pgmembers); ?></h3>
    </div>
</div>
<div class="col-md-2 text-center">
    <div class="infoboxtop card">
	<?php //echo '<pre/>';print_r($commoditynamelists);
    $comlist = array();
    foreach($commoditynamelists as $commoditynamelist){
		
	$comlist[] = implode(',',array_unique(array_filter($commoditynamelist)));
		
	}
	
	 
	 $strcommodity = implode(PHP_EOL,array_unique(explode(',', implode(',',$comlist))));
	 //echo '<pre/>';print_r($str);
	?>
        <h6><a href="#" title="<?php echo strtoupper($strcommodity); ?>">Commodities&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color:#17C672;"></i></a></h6>
        <h3><?php echo $commoditylists2;?></h3>
    </div>
</div>
<div class="col-md-2 text-center">
    <div class="infoboxtop card">
        <h6><a href="#" title="<?php echo 'Drying, Grading, Sorting, Processing, Storing, Packaging, Labelling, Weighing, Collective marketing, Others, None of The Above'; ?>">Value Addition&nbsp;<i class="fa fa-caret-down" aria-hidden="true" style="color:#17C672;"></i></a></h6>
        <h3><?php echo $vacount; ?></h3>
    </div>
</div>

</div>
<div class="row">
       <div class="col-md-1">
	   </div>
          <div class="col-md-2">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150 <sup style="font-size: 18px">Ton</sup> </h3>

                <p>Agriculture</p>
				 
              </div>
              <div class="icon">
               <img style="max-width: 45px;position: absolute;top: 21px;right: 13px;/* background: rgba(0,0,0,0.6); */background: #148A9D;padding: 5px;border-radius: 5px;" src="<?php echo base_url().'images/paddy.png' ?>">
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-sort-desc" aria-hidden="true"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-md-2">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner" style="color:#fff;">
                <h3>300<sup style="font-size: 18px">Kg</sup></h3>

                <p>Horticulture</p>
              </div>
              <div class="icon">
                <img style="max-width:45px;position: absolute;top: 21px;right: 13px;background: #228E3B;padding: 5px;border-radius: 5px;" src="<?php echo base_url().'images/fruits.png' ?>">
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-sort-desc" aria-hidden="true"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-md-2">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner" style="color:#fff;">
                <h3>474<sup style="font-size: 18px">Herd</sup></h3>

                <p>Livestocks</p>
              </div>
              <div class="icon">
               <img style="max-width:45px;min-height:44px;position: absolute;top: 21px;right: 13px;background:#D9A406;padding: 5px;border-radius: 5px;" src="<?php echo base_url().'images/pig.png' ?>">   <!--i class="ion ion-person-add"></i-->
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-sort-desc" aria-hidden="true"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-md-2">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner" style="color:#fff;">
                <h3>265<sup style="font-size: 18px">Kg</sup></h3>

                <p>Fishery</p>
              </div>
              <div class="icon">
                <img style="max-width:45px;min-height:44px;position: absolute;top: 21px;right: 13px;background:#BB2D3B;padding: 5px;border-radius: 5px;" src="<?php echo base_url().'images/fish.png' ?>">   <!--i class="ion ion-person-add"></i--><!--i class="ion ion-pie-graph"></i-->
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-sort-desc" aria-hidden="true"></i></a> -->
            </div>
          </div>
		   <div class="col-md-2">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner" style="color:#fff;">
                <h3>150<sup style="font-size: 18px">Kg</sup></h3>

                <p>Sericulture</p>
              </div>
              <div class="icon">
                 <img style="max-width:45px;min-height:44px;position: absolute;top: 21px;right: 13px;background:#148A9D;padding: 5px;border-radius: 5px;" src="<?php echo base_url().'images/silkwarm.png' ?>">   <!--i class="ion ion-person-add"></i--><!--i class="ion ion-pie-graph"></i--> <!--i class="ion ion-pie-graph"></i-->
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-sort-desc" aria-hidden="true"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
        </div>
</div>
<div class="col-md-12">
 
<div class="row">
<div class="col-md-12">

<div id="commodityvsblock" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<!--div id="chartContainer" style="height: 370px; width: 100%;"></div-->
</div>
<!--div class="col-md-6">
 
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
</div-->

</div>


<div class="row">
<div class="col-md-6">

<figure class="highcharts-figure">
 
    <div id="allcommodities"></div>
    <!--p class="highcharts-description">
        This chart may vary for showing a compact overview of a
        composition or comparison of All Commodity. 
    </p-->
</figure>
</div>
<div class="col-md-6">

<figure class="highcharts-figure">
 
    <div id="container2"></div>
    
</figure>
</div-->

</div>


 
<div class="col-md-6">
<figure class="highcharts-figure">
 
    <div id="container4"></div>
    <p class="highcharts-description">
        The charts may vary for showing a compact overview of a
        composition or comparison of Commodity. 
    </p>
</figure>

</div>
<div class="col-md-6">

<figure class="highcharts-figure">
 
    <div id="container3"></div>
    <!--p class="highcharts-description">
        This chart may vary for showing a compact overview of a
        composition or comparison of Agri Commodity. 
    </p-->
</figure>


</div>

</div>



</div>
<?php 
$CI =& get_instance();
$CI->load->model('main_model');
//$CI->main_model->getcommovsblockchartcount2($commotype,$district,$block);  
?>
<script>



// Create the chart
Highcharts.chart('commodityvsblock', {
    chart: {
        type: 'column',
        events: {
            drilldown: function (e) {
                if (!e.seriesOptions) {

                    var chart = this,
                        drilldowns = {
                            Paddy: {
                                name: 'Paddy',
                                data: [
								<?php foreach($agriculture1data as $agridata){
									
									$indcount = $CI->main_model->getcommovsblockchartcount2('agriculture1',$agridata['district'],$agridata['block']); 
									
									?>
									 ['<?php echo ucfirst($agridata["district"]); ?>,<?php echo ucfirst($agridata["block"]); ?>', <?php echo count($indcount); ?>],
									
								<?php }	?>
                                  
                                ]
                            },
							 Mustard: {
                                name: 'Mustard',
                                data: [
                                   <?php foreach($agriculture2data as $agridata){
									
									$indcount = $CI->main_model->getcommovsblockchartcount2('agriculture2',$agridata['district'],$agridata['block']); 
									
									?>
									 ['<?php echo ucfirst($agridata["district"]); ?>,<?php echo ucfirst($agridata["block"]); ?>', <?php echo count($indcount); ?>],
									
								<?php }	?>
                                ]
                            },
                            Arecanut: {
                                name: 'Arecanut',
                                data: [
                                   <?php foreach($horticulture1data as $agridata){
									
									$indcount = $CI->main_model->getcommovsblockchartcount2('horticulture1',$agridata['district'],$agridata['block']); 
									
									?>
									 ['<?php echo ucfirst($agridata["district"]); ?>,<?php echo ucfirst($agridata["block"]); ?>', <?php echo count($indcount); ?>],
									
								<?php }	?>
                                ]
                            },
							 Coconut: {
                                name: 'Coconut',
                                data: [
                                   <?php foreach($horticulture2data as $agridata){
									
									$indcount = $CI->main_model->getcommovsblockchartcount2('horticulture2',$agridata['district'],$agridata['block']); 
									
									?>
									 ['<?php echo ucfirst($agridata["district"]); ?>,<?php echo ucfirst($agridata["block"]); ?>', <?php echo count($indcount); ?>],
									
								<?php }	?>
                                ]
                            },
							 Orange: {
                                name: 'Orange',
                                data: [
                                     <?php foreach($horticulture3data as $agridata){
									
									$indcount = $CI->main_model->getcommovsblockchartcount2('horticulture3',$agridata['district'],$agridata['block']); 
									
									?>
									 ['<?php echo ucfirst($agridata["district"]); ?>,<?php echo ucfirst($agridata["block"]); ?>', <?php echo count($indcount); ?>],
									
								<?php }	?>
                                ]
                            },
                            BakcyardPoultry: {
                                name: 'Bakcyard Poultry',
                                data: [                                  
                                     <?php foreach($livestock1data as $agridata){
									
									$indcount = $CI->main_model->getcommovsblockchartcount2('livestock1',$agridata['district'],$agridata['block']); 
									
									?>
									 ['<?php echo ucfirst($agridata["district"]); ?>,<?php echo ucfirst($agridata["block"]); ?>', <?php echo count($indcount); ?>],
									
								<?php }	?>
                                ]
                            },
							 LocalBreedCarps: {
                                name: 'Local Breed Carps',
                                data: [
                                    <?php foreach($fisherydata as $agridata){
									
									$indcount = $CI->main_model->getcommovsblockchartcount2('fishery',$agridata['district'],$agridata['block']); 
									
									?>
									 ['<?php echo ucfirst($agridata["district"]); ?>,<?php echo ucfirst($agridata["block"]); ?>', <?php echo count($indcount); ?>],
									
								<?php }	?>
                                ]
                            }
                        },
                        series = drilldowns[e.point.name];

                    // Show the loading label
                    chart.showLoading('Simulating Ajax ...');

                    setTimeout(function () {
                        chart.hideLoading();
                        chart.addSeriesAsDrilldown(e.point, series);
                    }, 1000);
                }

            }
        }
    },
    title: {
        text: 'Commodity V/S Block '
    },
    xAxis: {
        type: 'category'
    },

    legend: {
        enabled: false
    },

    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true
            }
        }
    },

    series: [{
        name: 'Blocks',
        colorByPoint: true,
        data: [{
            name: 'Paddy',
            y: <?php echo count($agriculture1data); ?>,
            drilldown: true
        }, {
            name: 'Mustard',
            y: <?php echo count($agriculture2data); ?>,
            drilldown: true
        }, {
            name: 'Arecanut',
            y: <?php echo count($horticulture1data); ?>,
            drilldown: true
        }, {
            name: 'Coconut',
            y: <?php echo count($horticulture2data); ?>,
            drilldown: true
        }, {
            name: 'Orange',
            y: <?php echo count($horticulture3data); ?>,
            drilldown: true
        }, {
            name: 'BakcyardPoultry',
            y: <?php echo count($livestock1data); ?>,
            drilldown: true
        },
		{
            name: 'LocalBreedCarps',
            y: <?php echo count($fisherydata); ?>,
            drilldown: true
        },]
    }],

    drilldown: {
        series: []
    }
});


Highcharts.chart('container2', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Livestocks'
    },
    tooltip: {
        pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}{point.percentage:.1f}%</b><br/>' +
            // 'Area (In Bighas): <b>{point.y}</b><br/>' +
            'No of Farmers / PG members : <b>{point.z}</b><br/>'
    },
    accessibility: {
        point: {
            valueSuffix: ''
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                  format: '<b>{point.name}</b>: {point.percentage:.1f}% ',
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Pig',
            y: <?php  echo isset($landcountls5[0]['totalland'])?$landcountls5[0]['totalland']:'0'; ?>,
			z: <?php  echo isset($landcountls5[0]['totalmembers'])?$landcountls5[0]['totalmembers']:'0'; ?>,
            sliced: true,
            selected: true
        }, {
            name: 'BYP',
            y: <?php  echo isset($landcountls1[0]['totalland'])?$landcountls1[0]['totalland']:'0'; ?>,
			z: <?php  echo isset($landcountls1[0]['totalmembers'])?$landcountls1[0]['totalmembers']:'0'; ?>,
        }, {
            name: 'Duck',
            y: <?php  echo isset($landcountls2[0]['totalland'])?$landcountls2[0]['totalland']:'0'; ?>,
			z: <?php  echo isset($landcountls2[0]['totalmembers'])?$landcountls2[0]['totalmembers']:'0'; ?>,
        }, {
            name: 'Cow',
            y: <?php  echo isset($landcountls4[0]['totalland'])?$landcountls4[0]['totalland']:'0'; ?>,
			z: <?php  echo isset($landcountls4[0]['totalmembers'])?$landcountls4[0]['totalmembers']:'0'; ?>,
        }, {
            name: 'Goat',
            y: <?php  echo isset($landcountls3[0]['totalland'])?$landcountls3[0]['totalland']:'0'; ?>,
			z: <?php  echo isset($landcountls3[0]['totalmembers'])?$landcountls3[0]['totalmembers']:'0'; ?>,
        }]
    }]
});


Highcharts.chart('container3', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Agri Commodity'
    },
    tooltip: {
        //pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
		pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}{point.percentage:.1f}%</b><br/>' +
            // 'Area (In Bighas): <b>{point.y}</b><br/>' +
            'No of Farmers / PG members : <b>{point.z}</b><br/>'
    },
    accessibility: {
        point: {
            //valueSuffix: '%'
			valueSuffix: ''
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f}% ',
				/*format: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
            'Area (In Bighas): <b>{point.y}</b><br/>' +
            'No of Farmers / PG members - Production (In quintals): <b>{point.z}</b><br/>'*/
            }
        }
    },
    series: [{
        name: 'Commodity',
        colorByPoint: true,
        data: [{
            name: 'Paddy',
            y: <?php  echo isset($landcountagri1[0]['totalland'])?$landcountagri1[0]['totalland']:'0'; ?>,
			z: <?php  echo isset($landcountagri1[0]['totalmembers'])?$landcountagri1[0]['totalmembers']:'0'; ?>,
            sliced: true,
            selected: true
        },
		{
            name: 'Mustard',
            y: <?php  echo isset($landcountagri2[0]['totalland'])?$landcountagri2[0]['totalland']:'0'; ?>,
			z: <?php  echo isset($landcountagri2[0]['totalmembers'])?$landcountagri2[0]['totalmembers']:'0'; ?>
        },
		{
            name: 'Maize',
            y: <?php  echo isset($landcountagri3[0]['totalland'])?$landcountagri3[0]['totalland']:'0'; ?>,
			z: <?php  echo isset($landcountagri3[0]['totalmembers'])?$landcountagri3[0]['totalmembers']:'0'; ?>
        },
		{
            name: 'Vegetable',
            y: <?php  echo isset($landcountagri4[0]['totalland'])?$landcountagri4[0]['totalland']:'0'; ?>,
			z: <?php  echo isset($landcountagri4[0]['totalmembers'])?$landcountagri4[0]['totalmembers']:'0'; ?>
        },
		{
            name: 'Potato',
            y: <?php  echo isset($landcountagri5[0]['totalland'])?$landcountagri5[0]['totalland']:'0'; ?>,
			z: <?php  echo isset($landcountagri5[0]['totalmembers'])?$landcountagri5[0]['totalmembers']:'0'; ?>
        }
		]
    }]
});


Highcharts.chart('container4', {
    chart: {
        type: 'variablepie'
    },
    title: {
        text: 'Horticulture'
    },
    tooltip: {
        headerFormat: '',
		pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}{point.percentage:.1f}%</b><br/>' +
            // 'Area (In Bighas): <b>{point.y}</b><br/>' +
            'No of Farmers / PG members : <b>{point.z}</b><br/>'
    },
	 plotOptions: {
        variablepie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        minPointSize: 100,
        innerSize: '20%',
        zMin: 0,
        name: 'countries',
        data: [{
            name: 'Tea',
            y: <?php  echo isset($landcounthorti4[0]['totalland'])?$landcounthorti4[0]['totalland']:'0'; ?>,
			z: <?php  echo isset($landcounthorti4[0]['totalmembers'])?$landcounthorti4[0]['totalmembers']:'0'; ?>
        },{
            name: 'Vegetables',
            y: <?php  echo isset($landcounthorti5[0]['totalland'])?$landcounthorti5[0]['totalland']:'0'; ?>,
			z: <?php  echo isset($landcounthorti5[0]['totalmembers'])?$landcounthorti5[0]['totalmembers']:'0'; ?>
        },{
            name: 'Arecanut',
            y: <?php  echo isset($landcounthorti1[0]['totalland'])?$landcounthorti1[0]['totalland']:'0'; ?>,
			z: <?php  echo isset($landcounthorti1[0]['totalmembers'])?$landcounthorti1[0]['totalmembers']:'0'; ?>
        },{
            name: 'Lemon',
            y: <?php  echo isset($landcounthorti2[0]['totalland'])?$landcounthorti2[0]['totalland']:'0'; ?>,
			z: <?php  echo isset($landcounthorti2[0]['totalmembers'])?$landcounthorti2[0]['totalmembers']:'0'; ?>
        },{
            name: 'Tomato',
            y: <?php  echo isset($landcounthorti3[0]['totalland'])?$landcounthorti3[0]['totalland']:'0'; ?>,
			z: <?php  echo isset($landcounthorti3[0]['totalmembers'])?$landcounthorti3[0]['totalmembers']:'0'; ?>
        },{
            name: 'Bean',
            y: <?php  echo isset($landcounthorti6[0]['totalland'])?$landcounthorti6[0]['totalland']:'0'; ?>,
			z: <?php  echo isset($landcounthorti6[0]['totalmembers'])?$landcounthorti6[0]['totalmembers']:'0'; ?>
        },{
            name: 'Brinjal',
            y: <?php  echo isset($landcounthorti7[0]['totalland'])?$landcounthorti7[0]['totalland']:'0'; ?>,
			z: <?php  echo isset($landcounthorti7[0]['totalmembers'])?$landcounthorti7[0]['totalmembers']:'0'; ?>
        },{
            name: 'Potato',
            y: <?php  echo isset($landcounthorti8[0]['totalland'])?$landcounthorti8[0]['totalland']:'0'; ?>,
			z: <?php  echo isset($landcounthorti8[0]['totalmembers'])?$landcounthorti8[0]['totalmembers']:'0'; ?>
        }]
    }]
});


Highcharts.chart('allcommodities', {
    chart: {
        type: 'variablepie'
    },
    title: {
        text: 'All Commodity'
    },
    tooltip: {
        headerFormat: '',
      pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}{point.percentage:.1f}%</b><br/>' +
            // 'Area (In Bighas): <b>{point.y}</b><br/>' +
            'No of Farmers / PG members : <b>{point.z}</b><br/>'
    },
	   accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        variablepie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
         minPointSize: 100,
        innerSize: '20%',
        zMin: 0,
        name: 'commodity',
        data: [{
            name: 'Agriculture',
            y:  <?php  echo isset($landcount1[0]['totalland'])?$landcount1[0]['totalland']:'0'; ?>,
            z: <?php  echo isset($landcount1[0]['totalmembers'])?$landcount1[0]['totalmembers']:'0'; ?>
        }, {
            name: 'Horticulture',
            y: <?php  echo isset($landcount2[0]['totalland'])?$landcount2[0]['totalland']:'0'; ?>,
            z: <?php  echo isset($landcount2[0]['totalmembers'])?$landcount2[0]['totalmembers']:'0'; ?>
        }, {
            name: 'Livestocks',
            y: <?php  echo isset($landcount3[0]['totalland'])?$landcount3[0]['totalland']:'0'; ?>,
            z: <?php  echo isset($landcount3[0]['totalmembers'])?$landcount3[0]['totalmembers']:'0'; ?>
        }, {
            name: 'Fishery',
            y: <?php  echo isset($landcount4[0]['totalland'])?$landcount4[0]['totalland']:'0'; ?>,
            z: <?php  echo isset($landcount4[0]['totalmembers'])?$landcount4[0]['totalmembers']:'0'; ?>
        }, {
            name: 'Sericulture',
            y: <?php  echo isset($landcount5[0]['totalland'])?$landcount5[0]['totalland']:'0'; ?>,
            z: <?php  echo isset($landcount5[0]['totalmembers'])?$landcount5[0]['totalmembers']:'0'; ?>
        }]
    }]
});


Highcharts.chart('chartContainer', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Agriculture'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    }, /*{
            name: 'Pig',
            y: 61.41,
            sliced: true,
            selected: true
        }, */
    series: [{
        name: '',
        colorByPoint: true,
        data: [{
            name: 'Rabi Season',
            y: 40
        }, {
            name: 'Kharif Season',
            y: 28
        }, {
            name: 'Zaid Season',
            y: 32
        }]
    }]
});


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

</script>
 


</body>
</html>