<!DOCTYPE html>
<html lang="en">
<head>
<title>ASLRM</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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
} */

/* .small-box>.small-box-footer {
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
</style>
</head>
<body>


<div class="container-flued topnav">
<div class="col-md-12 row">

<div class="col-md-3">
<div class="">
	<a  href="<?php echo base_url(); ?>" class="col-md-7 logo">
			<img src="data:image/png;base64,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" style="max-height: 85px; border-radius: 5px;" alt="Logo"/>
		</a>
  </div>
</div>

<div class="col-md-2"  style="margin-top: 23px;">
<div class="input-group mt-4 mb-3">
  <select class="custom-select" id="inputGroupSelect02">
    <option selected>District</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
</div>
</div>
<div class="col-md-2" style="margin-top: 23px;">
<div class="input-group mt-4 mb-3" >
  <select class="custom-select" id="inputGroupSelect02">
    <option selected>Block</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
</div>
</div>
<div class="col-md-2" style="margin-top: 23px;">
<div class="input-group mt-4 mb-3" >
  <select class="custom-select" id="inputGroupSelect02">
    <option selected>Commodity</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
</div>
</div>
<div class="col-md-2" style="margin-top: 23px;">
<div class="input-group mt-4 mb-3">
<button type="button" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search</button>
</div>

</div>
<div class="col-md-1" style="margin-top: 23px;">
<div class="input-group mt-4 mb-3">
<button type="button" class="btn btn-default" onclick="window.location.href = '<?php echo base_url() ?>login'"><i class="fa fa-sign-in" aria-hidden="true"></i>
 &nbsp;Login</button>
</div>
</div>
  </div>
</div>
 <br><br>
 <br>
<div class="col-md-12">
 
<div class="row">
       <div class="col-md-1">
	   </div>
          <div class="col-md-2">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150 <sup style="font-size: 20px">Ton</sup> </h3>

                <p>Agriculture</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-sort-desc" aria-hidden="true"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-md-2">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner" style="color:#fff;">
                <h3>300<sup style="font-size: 20px">Kg</sup></h3>

                <p>Horticulture</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-sort-desc" aria-hidden="true"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-md-2">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner" style="color:#fff;">
                <h3>474<sup style="font-size: 20px">Herd</sup></h3>

                <p>Livestocks</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-sort-desc" aria-hidden="true"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-md-2">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner" style="color:#fff;">
                <h3>265<sup style="font-size: 20px">Kg</sup></h3>

                <p>Fishery</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-sort-desc" aria-hidden="true"></i></a> -->
            </div>
          </div>
		   <div class="col-md-2">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner" style="color:#fff;">
                <h3>150<sup style="font-size: 20px">Kg</sup></h3>

                <p>Sericulture</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-sort-desc" aria-hidden="true"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
        </div>
</div>
<div class="col-md-12">
 
<div class="row">
<div class="col-md-6">

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<!--div id="chartContainer" style="height: 370px; width: 100%;"></div-->
</div>
<div class="col-md-6">
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
</div>

</div>


<div class="row">
<div class="col-md-6">

<figure class="highcharts-figure">
    <div id="container5"></div>
    <p class="highcharts-description">
        This charts are very  for showing a compact overview of a
        composition or comparison of commodities. 
    </p>
</figure>
</div>
<div class="col-md-6">

<figure class="highcharts-figure">
    <div id="container2"></div>
    <p class="highcharts-description">
        This charts are very  for showing a compact overview of a
        composition or comparison of commodities. 
    </p>
</figure>
</div>

</div>


<div class="row">
<div class="col-md-6">
<figure class="highcharts-figure">
    <div id="container4"></div>
    <p class="highcharts-description">
        This charts are very  for showing a compact overview of a
        composition or comparison of commodities. 
    </p>
</figure>

</div>
<div class="col-md-6">

<figure class="highcharts-figure">
    <div id="container3"></div>
    <p class="highcharts-description">
        This charts are very  for showing a compact overview of a
        composition or comparison of commodities. 
    </p>
</figure>


</div>

</div>



</div>
<script>



// Create the chart
Highcharts.chart('container', {
    chart: {
        type: 'column',
        events: {
            drilldown: function (e) {
                if (!e.seriesOptions) {

                    var chart = this,
                        drilldowns = {
                            Groundnut: {
                                name: 'Groundnut',
                                data: [
                                    ['Udalguri,Rowta', 2],
                                    ['Udalguri,Mazbat', 3]
									['Udalguri,Bhergaon', 3]
                                ]
                            },
                            AgriCommodity: {
                                name: 'Paddy',
                                data: [
                                    ['Udalguri,Rowta', 5],
                                    ['Udalguri,Mazbat', 7],
                                    ['Udalguri,Bhergaon', 2]
                                ]
                            },
                            Livestock: {
                                name: 'Pork',
                                data: [
                                    ['Rowta', 1],
                                    ['Bhergaon', 2],
                                    ['Udalguri', 5]
                                ]
                            },
							 Horticulture: {
                                name: 'Green Vegetables, Potato etc.',
                                data: [
                                    ['Rowta', 1],
                                    ['Bhergaon', 2],
                                    ['Udalguri', 5]
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
            name: 'Groundnut',
            y: 5,
            drilldown: true
        }, {
            name: 'AgriCommodity',
            y: 2,
            drilldown: true
        }, {
            name: 'Livestock',
            y: 4,
            drilldown: true
        },
		{
            name: 'Horticulture',
            y: 2,
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
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Pig',
            y: 61.41,
            sliced: true,
            selected: true
        }, {
            name: 'Poultry',
            y: 11.84
        }, {
            name: 'BYP',
            y: 10.85
        }, {
            name: 'Duck',
            y: 4.67
        }, {
            name: 'Goat',
            y: 4.18
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
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Paddy',
            y: 97.29,
            sliced: true,
            selected: true
        },
		{
            name: 'Other',
            y: 2.61
        }]
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
        pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
            'Area (square km): <b>{point.y}</b><br/>' +
            'Production density (Crops per square km): <b>{point.z}</b><br/>'
    },
    series: [{
        minPointSize: 10,
        innerSize: '20%',
        zMin: 0,
        name: 'countries',
        data: [{
            name: 'Potato',
            y: 505370,
            z: 92.9
        }, {
            name: 'Vegetables',
            y: 551500,
            z: 118.7
        }, {
            name: 'Fruits',
            y: 312685,
            z: 124.6
        }]
    }]
});


Highcharts.chart('container5', {
    chart: {
        type: 'variablepie'
    },
    title: {
        text: 'All Commodity'
    },
    tooltip: {
        headerFormat: '',
        pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
            'Area (square km): <b>{point.y}</b><br/>' +
            'Production density (per /): <b>{point.z}</b><br/>'
    },
    series: [{
        minPointSize: 10,
        innerSize: '20%',
        zMin: 0,
        name: 'commodity',
        data: [{
            name: 'Agriculture',
            y: 505370,
            z: 92.9
        }, {
            name: 'Horticulture',
            y: 551500,
            z: 118.7
        }, {
            name: 'Livestocks',
            y: 312685,
            z: 124.6
        }, {
            name: 'Fishery',
            y: 78867,
            z: 137.5
        }, {
            name: 'Sericulture',
            y: 301340,
            z: 201.8
        }]
    }]
});


window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2",
	animationEnabled: true,
	title: {
		text: ""
	},
	
	data: [{
		type: "pie",
		indexLabelFontSize: 18,
		radius: 80,
		indexLabel: "{label} - {y}",
		yValueFormatString: "###0.0\"%\"",
		click: explodePie,
		dataPoints: [
			{ y: 33, label: "Ravi Season" },
			{ y: 33, label: "Kharif Season"},
			{ y: 33, label: "Zaid Season" }
		]
	}]
});
chart.render();

function explodePie(e) {
	for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
		if(i !== e.dataPointIndex)
			e.dataSeries.dataPoints[i].exploded = false;
	}
}
 
}
</script>
 


</body>
</html>