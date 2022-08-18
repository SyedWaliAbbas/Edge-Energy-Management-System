<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>BYCO POWER HOUSE ORC2</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="jquery-latest.js"></script>
<link rel="stylesheet" href="w3.css">
<style>
body,h2 {font-family: sans-serif; 
}
body, html {height: 100%;width:100%}


.bgimg {
  background-image: url('black.png');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}

#g1{

width:15%;
height:22%;
position:absolute;
bottom:1%;
left:80%;

}



/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw2 {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>






<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  
  <div class="w3-display-topleft w3-padding-large w3-xlarge">
    
	Byco Petroleum Pakistan Limited
  </div>
 <!-- Navbar -->
<div class="w3-top">
<br><br>
	<div class="w3-bar w3-black w3-card"> 
	<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <button onclick="location.href='/byco/scada.php' " style="width:auto" class= "w3-bar-item,w3-button,w3-padding-large,w3-hide-small">HOME </button>
    <button onclick ="location.href='main.php'"  style="width:auto" class="w3-bar-item,w3-button,w3-padding-large,w3-hide-small"> ENGINE</button>
	<button onclick="location.href='generator.php' " style="width:auto" class= "w3-bar-item,w3-button,w3-padding-large,w3-hide-small">GENERATOR </button>
    <button onclick ="location.href='tables.php'"  style="width:auto" class="w3-bar-item,w3-button,w3-padding-large,w3-hide-small"> DATABASE</button>
    <button onclick ="location.href='trends.php'"  style="width:auto" class="w3-bar-item,w3-button,w3-padding-large,w3-hide-small"> TRENDS</button>
	<button onclick ="location.href='gr.php'"  style="width:auto" class="w3-bar-item,w3-button,w3-padding-large,w3-hide-small"> CUSTOMIZED GRAPH</button>
	
	</div>
	


</div>
  
<script  src="gauge.min.js"></script>

<canvas id="gauge1" style="position:absolute;top:20%;left:5%;" ></canvas>
<div id="label01" style="position:absolute;top:61%;left:40%;font-size:20px;font-weight:bold;"> BATTERY VOLTAGE</div>
<div id="label02" style="position:absolute;top:61%;left:60%;font-size:20px;font-weight:bold;"> CHARGING ALTERNATOR <BR> VOLTAGE</div>
<div id="label03" style="position:absolute;top:61%;left:83%;font-size:20px;font-weight:bold;"> OIL PRESSURE</div>
<div id="label05" style="position:absolute;top:92%;left:42%;font-size:20px;font-weight:bold;"> COOLANT TEMPERATURE</div>

<h2 id="label04" style="position:absolute;top:76%;left:70%;font-size:20px;font-weight:bold;background-color:green;padding:2 2 2 2;border-radius:20%;"> </h2>

<canvas id="gauge2" style="position:absolute;top:20%;left:38%;" ></canvas>
<canvas id="gauge3" style="position:absolute;top:20%;left:59%;" ></canvas>
<canvas id="gauge4" style="position:absolute;top:20%;left:79%;" ></canvas>
<canvas id="gauge5" style="position:absolute;top:70%;left:38%;" ></canvas>



<img id="g1"  src="g1.png"></img>	

<script>

var RPM =new RadialGauge({
    renderTo: 'gauge1',
    width: 450,
    height: 450,
    units: 'RPM',
    title: false,
    value: 0,
    minValue: 0,
    maxValue: 1750,
    majorTicks: [
        '0','1200','1250','1300','1350','1400','1450','1500','1550','1600','1650','1700','1750'
    ],
    minorTicks: 2,
    strokeTicks: false,
    highlights: [
        { from: 0, to: 900, color: 'rgba(255,30,0,1.25)' },
		{ from: 900, to: 1400, color: 'rgba(0,255,0,4.15)' },
		{ from: 1400, to: 1600, color: 'rgba(0,255,0,4.15)' },
        { from: 1600, to: 1750, color: 'rgba(255,30,0,1.25)' }
    ],
    colorPlate: '#222',
    colorMajorTicks: '#f5f5f5',
    colorMinorTicks: '#ddd',
    colorTitle: '#fff',
    colorUnits: '#ccc',
    colorNumbers: '#eee',
    colorNeedle: 'rgba(240, 128, 128, 1)',
    colorNeedleEnd: 'rgba(255, 160, 122, .9)',
    valueBox: true,
    animationRule: 'bounce',
    animationDuration: 1
}).draw();
RPM.value=0;

var BV=new RadialGauge({ renderTo: 'gauge2',
width: 250,
    height: 250,
    units: 'Volts',
    title: false,
    value: 0,
    minValue: 0,
    maxValue: 30,
    majorTicks: [
        '0','20','21','22','23','24','25','26','27','28','29','30'
    ],
    minorTicks: 2,
    strokeTicks: false,
    highlights: [
	{ from: 0, to: 21, color: 'rgba(255,30,0,1.25)' },
        { from: 25, to: 28, color: 'rgba(0,255,0,4.15)' },
        { from: 21, to: 25, color: 'rgba(0,255,0,4.15)' },
		{ from: 28, to: 30, color: 'rgba(255,30,0,1.25)' }
    ],
	colorPlate: '#C9C9C9',
    valueBox: true,
    animationRule: 'bounce',
    animationDuration: 1 }).draw();
	
	
	
	
var CAV=new RadialGauge({ renderTo: 'gauge3',
width: 250,
    height: 250,
    units: 'Volts',
    title: false,
    value: 0,
    minValue: 0,
    maxValue: 30,
    majorTicks: [
        '0','20','21','22','23','24','25','26','27','28','29','30'
    ],
    minorTicks: 2,
    strokeTicks: false,
    highlights: [
        { from: 0, to: 21, color: 'rgba(255,30,0,1.25)' },
        { from: 25, to: 28, color: 'rgba(0,255,0,4.15)' },
        { from: 21, to: 25, color: 'rgba(0,255,0,4.15)' },
		{ from: 28, to: 30, color: 'rgba(255,30,0,1.25)' }
    ],
	colorPlate: '#C9C9C9',
    valueBox: true,
    animationRule: 'bounce',
    animationDuration: 1 }).draw();


var OP=new RadialGauge({ renderTo: 'gauge4',
width: 250,
    height: 250,
    units: 'bar',
    title: false,
    value: 0,
    minValue: 0,
    maxValue: 16,
    majorTicks: [
        '0','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16'
    ],
    minorTicks: 2,
    strokeTicks: false,
    highlights: [
        { from: 0, to: 5, color: 'rgba(255,30,0,4.25)' },
        { from: 5, to: 10, color: 'rgba(0,255,0,4.15)' },
        { from: 10, to: 13, color: 'rgba(0,255,0,4.15)' },
        { from: 13, to: 16, color: 'rgba(255,0,225,4.25)' },
    ],
	colorPlate: '#C9C9C9',
    valueBox: true,
    animationRule: 'bounce',
    animationDuration: 1 }).draw();
	
var CT=new LinearGauge({ renderTo: 'gauge5' ,
 width: 400,
    height:150,
    units:'°C',
    title:false,
    minValue:0,
    maxValue:110,
    majorTicks:['0','10','20','30','40','50','60','70','80','90','100','110'],
    minorTicks:5,
    strokeTicks:true,
    ticksWidth:15,
    ticksWidthMinor:7.5,
    highlights:[
	{from: -50, to: 0, color: 'rgba(0,0, 255, .3)'},
        {from: 0, to: 50, color: 'rgba(255, 0, 0, .3)'} ,],
    colorMajorTicks:'#ffe66a',
    colorMinorTicks:'#ffe66a',
    colorTitle:'#eee',
    colorUnits:'#ccc',
    colorNumbers:'#eee',
    colorPlate:'#000000',
    colorPlateEnd:'#000000',
    borderShadowWidth:0,
    borders:false,
    borderRadius:10,
    needleType:'arrow',
    needleWidth:3,
    animationDuration:1500,
    animationRule:'linear',
    colorNeedle:'#228B22',
    colorBarProgress:'#327ac0',
    colorBar:'#f5f5f5',
    barStroke:0,
    barWidth:8,
    barBeginCircle:false,
	valueBox: true,
	
   

}).draw();

var $c=$("#gauge1");
var sped;
$c.load('rpm/rpm.php');
var $c2=$("#gauge2");
var bv;
$c2.load('bv/bv.php');
var $c3=$("#gauge3");
var cav;
$c3.load('cav/cav.php');
var $c4=$("#gauge4");
var op;
$c4.load('op/op.php');
var $c5=$("#label04");
var ct;
$c5.load('ct/ct.php');


(function($)
{
	
	$(document).ready(function()
    {
        $.ajaxSetup(
        {
            cache: false,
            success: function() {
             
				
            }
        });

			
    var refreshId = setInterval(function()
        {
			
			
			$c.load('rpm/rpm.php');
			sped= $c.html();
			sped=parseFloat(sped)
			RPM.value=$c.html();
			RPM.update({valueText: (sped)});
			
			
			$c2.load('bv/bv.php');
			bv= $c2.html();
			bv=parseFloat(bv)
			BV.value=$c2.html();
			BV.update({valueText: (bv)});
			
			
			$c3.load('cav/cav.php');
			cav= $c3.html();
			cav=parseFloat(cav)
			CAV.value=$c3.html();
			CAV.update({valueText: (cav)});
			
			
			$c4.load('op/op.php');
			op= $c4.html();
			op=parseFloat(op);
			OP.value=$c4.html();
			OP.update({valueText: (op)});
			
			
			$c5.load('ct/ct.php');
			ct= $c5.html();
			ct=parseFloat(ct);
			CT.update({value: $c5.html()});
			
		},100);
	})
})(jQuery);	
		
</script>














	

</div>

</body>
</html>
