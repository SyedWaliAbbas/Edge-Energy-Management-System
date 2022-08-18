<?php

session_start();
if(!(isset($_SESSION['a']))){
	
	$_SESSION['a']=$_POST["Name"];
$_SESSION['b']=$_POST["pwd"];	


	
}
?>


<?php
$dataPoints = array();
$dataPoints1 = array();
$dataPoints2 = array();
?>
<?php
$dataPointsi = array();
$dataPointsi1 = array();
$dataPointsi2 = array();
?>
<?php
//******* Total Power *****
$dataPointstp = array();
$dataPointstp1 = array();
$dataPointstp2 = array();

?>
<?php
//******* RPM/Freq *****
$dataPointsR = array();
$dataPointsF = array();
$dataPointsOP = array();
$dataPointsCT = array();
$dataPointsPF = array();
?>


<?php
//************************************ LINE VOLTAGES ***************************************************
$conn = mysqli_connect("localhost","pi","byco","orc2");

$sqlQuery = "SELECT v1,v2,v3,UNIX_TIMESTAMP(dt) as t FROM gen11 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);

//$data = array();
$i=0;
foreach ($result as $row) {
	
	array_push($dataPoints, array("x" => (($row["t"] )*1000), "y" => $row["v1"]));
	array_push($dataPoints1, array("x" => (($row["t"] )*1000), "y" => $row["v2"]));
	array_push($dataPoints2, array("x" => (($row["t"] )*1000), "y" => $row["v3"]));$i+=1;
}

mysqli_close($conn);

?>


<?php
//************************************ TOTAL POWER ***************************************************
$conn = mysqli_connect("localhost","pi","byco","orc2");

$sqlQuery = "SELECT tw,tva,tvar,UNIX_TIMESTAMP(dt) as t FROM gen11 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);

//$data = array();
$i=0;
foreach ($result as $row) {
	
	array_push($dataPointstp, array("x" => (($row["t"] )*1000), "y" => $row["tw"]));
	array_push($dataPointstp1, array("x" => (($row["t"] )*1000), "y" => $row["tva"]));
	array_push($dataPointstp2, array("x" => (($row["t"] )*1000), "y" => $row["tvar"]));
	$i+=1;
}

mysqli_close($conn);

?>

<?php
//************************************ LINE CURRENT ***************************************************
$conn = mysqli_connect("localhost","pi","byco","orc2");

$sqlQuery = "SELECT i1,i2,i3,UNIX_TIMESTAMP(dt) as t FROM gen11 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);

//$data = array();
$i=0;
foreach ($result as $row) {
	
	array_push($dataPointsi, array("x" => (($row["t"] )*1000), "y" => $row["i1"]));
	array_push($dataPointsi1, array("x" => (($row["t"] )*1000), "y" => $row["i2"]));
	array_push($dataPointsi2, array("x" => (($row["t"] )*1000), "y" => $row["i3"]));$i+=1;
}

mysqli_close($conn);

?>


<?php
//**********************************************frequency rpm op and ct ******************
$conn = mysqli_connect("localhost","pi","byco","orc2");

$sqlQuery = "SELECT rpm,gf,op,ct,tpf,UNIX_TIMESTAMP(dt) as t FROM gen11 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);

//$data = array();
$i=0;
foreach ($result as $row) {
	
	array_push($dataPointsR, array("x" => (($row["t"] )*1000), "y" => $row["rpm"]));
	array_push($dataPointsF, array("x" => (($row["t"] )*1000), "y" => $row["gf"]));
	array_push($dataPointsOP, array("x" => (($row["t"] )*1000), "y" => $row["op"]));
	array_push($dataPointsCT, array("x" => (($row["t"] )*1000), "y" => $row["ct"]));$i+=1;
	array_push($dataPointsPF, array("x" => (($row["t"] )*1000), "y" => $row["tpf"]));
}

mysqli_close($conn);

?>




<!DOCTYPE html>
<html>
<title>BYCO POWER HOUSE ORC2</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">


<script src="jquery-latest.js"></script>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>

<script>

window.onload = function() {
 
//rpm and ct op frequency
 
var dataPointsR = <?php echo json_encode($dataPointsR, JSON_NUMERIC_CHECK); ?>;
var dataPointsF = <?php echo json_encode($dataPointsF, JSON_NUMERIC_CHECK); ?>;
var dataPointsOP = <?php echo json_encode($dataPointsOP, JSON_NUMERIC_CHECK); ?>;
var dataPointsCT = <?php echo json_encode($dataPointsCT, JSON_NUMERIC_CHECK); ?>;
var dataPointsPF = <?php echo json_encode($dataPointsPF, JSON_NUMERIC_CHECK); ?>;
 // Vn
 
var dataPoints = <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>;
var dataPoints1 = <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>;
var dataPoints2 = <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>;

//Ia

var dataPointsi = <?php echo json_encode($dataPointsi, JSON_NUMERIC_CHECK); ?>;
var dataPointsi1 = <?php echo json_encode($dataPointsi1, JSON_NUMERIC_CHECK); ?>;
var dataPointsi2 = <?php echo json_encode($dataPointsi2, JSON_NUMERIC_CHECK); ?>;

//Total Power

var dataPointstp = <?php echo json_encode($dataPointstp, JSON_NUMERIC_CHECK); ?>;
var dataPointstp1 = <?php echo json_encode($dataPointstp1, JSON_NUMERIC_CHECK); ?>;
var dataPointstp2 = <?php echo json_encode($dataPointstp2, JSON_NUMERIC_CHECK); ?>;




// RPM FREQ CY OP**************************************

var extra = new CanvasJS.Chart("EE", {
	theme: "dark1",
	zoomEnabled : true,
	animationEnabled : true,
	
	title: {
		text: "Engine Parameters"
	},
	axisX:{
		
		title: "DateTime",
		
	},
	axisY:{
		includeZero: false,
		
	},
	legend: {
            cursor: "pointer",
            itemclick: function (e) {
                //console.log("legend click: " + e.dataPointIndex);
                //console.log(e);
                if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                } else {
                    e.dataSeries.visible = true;
                }

                e.chart.render();
            }
        },
	data: [{
		type: "line",
		name:"Engine RPM",
		color:"red",
		xValueType: "dateTime",
		showInLegend:true, 
		xValueFormatString: "YYYY-MM-DD hh:mm:ss TT",
		yValueFormatString: "#,##0.0#",
		dataPoints: dataPointsR
	},
	{
		type: "line",
		name:"Frequency Hz",
		color:"yellow",
		xValueType: "dateTime",
		showInLegend:true,
		xValueFormatString: "YYYY-MM-DD hh:mm:ss TT",
		yValueFormatString: "#,##0.0#",
		dataPoints: dataPointsF
	},
	{
		type: "line",
		name:"Coolant Tempeature *C",
		color:"blue",
		xValueType: "dateTime",
		showInLegend:true,
		xValueFormatString: "YYYY-MM-DD hh:mm:ss TT",
		yValueFormatString: "#,##0.0#",
		dataPoints: dataPointsCT
	},
	{
		type: "line",
		name:"Oil Pressure bar",
		color:"green",
		xValueType: "dateTime",
		showInLegend:true,
		xValueFormatString: "YYYY-MM-DD hh:mm:ss TT",
		yValueFormatString: "#,##0.0#",
		dataPoints: dataPointsOP
	},
	{
		type: "line",
		name:"Power Factor",
		color:"white",
		xValueType: "dateTime",
		showInLegend:true,
		xValueFormatString: "YYYY-MM-DD hh:mm:ss TT",
		yValueFormatString: "#,##0.0#",
		dataPoints: dataPointsPF
	}
	
	
	
	
	]
});

extra.render();






//Current*************************************************************************************
var current = new CanvasJS.Chart("I1", {
	theme: "dark1",
	zoomEnabled : true,
	animationEnabled : true,
	
	title: {
		text: "Line Current"
	},
	axisX:{
		
		title: "DateTime",
		
	},
	axisY:{
		includeZero: false,
		suffix: " Ampere"
	},
	legend: {
            cursor: "pointer",
            itemclick: function (e) {
                //console.log("legend click: " + e.dataPointIndex);
                //console.log(e);
                if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                } else {
                    e.dataSeries.visible = true;
                }

                e.chart.render();
            }
        },
	data: [{
		type: "line",
		name:"Current Ia",
		color:"red",
		xValueType: "dateTime",
		showInLegend:true, 
		xValueFormatString: "YYYY-MM-DD hh:mm:ss TT",
		yValueFormatString: "#,##0.0#",
		dataPoints: dataPointsi
	},
	{
		type: "line",
		name:"Current Ib",
		color:"yellow",
		xValueType: "dateTime",
		showInLegend:true,
		xValueFormatString: "YYYY-MM-DD hh:mm:ss TT",
		yValueFormatString: "#,##0.0#",
		dataPoints: dataPointsi1
	},
	{
		type: "line",
		name:"Current Ic",
		color:"blue",
		xValueType: "dateTime",
		showInLegend:true,
		xValueFormatString: "YYYY-MM-DD hh:mm:ss TT",
		yValueFormatString: "#,##0.0#",
		dataPoints: dataPointsi2
	}
	
	
	
	]
});

current.render();




//******************************************************** TOTAL POWER ********************************************************

var power = new CanvasJS.Chart("TP1", {
	theme: "dark1",
	zoomEnabled : true,
	animationEnabled : true,
	
	title: {
		text: "Total Power"
	},
	axisX:{
		
		title: "DateTime",
		
	},
	axisY:{
		includeZero: false,
		suffix: " k"
	},
	legend: {
            cursor: "pointer",
            itemclick: function (e) {
                //console.log("legend click: " + e.dataPointIndex);
                //console.log(e);
                if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                } else {
                    e.dataSeries.visible = true;
                }

                e.chart.render();
            }
        },
	data: [{
		type: "line",
		name:"Total kW",
		color:"red",
		xValueType: "dateTime",
		showInLegend:true, 
		xValueFormatString: "YYYY-MM-DD hh:mm:ss TT",
		yValueFormatString: "#,##0.0#",
		dataPoints: dataPoints
	},
	{
		type: "line",
		name:"Total kVA",
		color:"yellow",
		xValueType: "dateTime",
		showInLegend:true,
		xValueFormatString: "YYYY-MM-DD hh:mm:ss TT",
		yValueFormatString: "#,##0.0#",
		dataPoints: dataPointsi1
	},
	{
		type: "line",
		name:"Total kVAr",
		color:"blue",
		xValueType: "dateTime",
		showInLegend:true,
		xValueFormatString: "YYYY-MM-DD hh:mm:ss TT",
		yValueFormatString: "#,##0.0#",
		dataPoints: dataPointstp2
	}
	
	
	
	]
});

power.render();




//*********************************************************** Vn **************************************
var chart = new CanvasJS.Chart("V1", {
	theme: "dark1",
	zoomEnabled : true,
	animationEnabled : true,
	
	title: {
		text: "Phase Voltages"
	},
	axisX:{
		
		title: "DateTime",
		
	},
	axisY:{
		includeZero: false,
		suffix: " Volt"
	},
	legend: {
            cursor: "pointer",
            itemclick: function (e) {
                //console.log("legend click: " + e.dataPointIndex);
                //console.log(e);
                if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                } else {
                    e.dataSeries.visible = true;
                }

                e.chart.render();
            }
        },
	data: [{
		type: "line",
		name:"Voltage Va",
		color:"red",
		xValueType: "dateTime",
		showInLegend:true, 
		xValueFormatString: "YYYY-MM-DD hh:mm:ss TT",
		yValueFormatString: "#,##0.0#",
		dataPoints: dataPoints
	},
	{
		type: "line",
		name:"Voltage Vb",
		color:"yellow",
		xValueType: "dateTime",
		showInLegend:true,
		xValueFormatString: "YYYY-MM-DD hh:mm:ss TT",
		yValueFormatString: "#,##0.0#",
		dataPoints: dataPoints1
	},
	{
		type: "line",
		name:"Voltage Vc",
		color:"blue",
		xValueType: "dateTime",
		showInLegend:true,
		xValueFormatString: "YYYY-MM-DD hh:mm:ss TT",
		yValueFormatString: "#,##0.0#",
		dataPoints: dataPoints2
	}
	
	
	
	]
});

chart.render();
 
var updateInterval = 1000;
setInterval(function () { updateChart() }, updateInterval);
 

var xValue = dataPoints.length;

var yValue = dataPoints[dataPoints.length - 1].y;
var x2= labelss.length;

function updateChart() {
	
var ccc=null;
$.post("vn.php",
                function (data)
                {  
				
				////alert("data");
				////alert(data);
				
				ccc=data;
				
				
				
//volt=ccc;
var xValue = dataPoints[dataPoints.length - 1].x;
var yValue = dataPoints[dataPoints.length - 1].y;
var x2= 0;
//alert('numbers');
//alert('xValue');
//alert(xValue);
//alert('x2');
//alert(x2);

//alert("volt");
		
//alert(volt);
	
	//var xcxc2=null;
//var ts=null;
//var ccc2=null;
//var xv=null;
var c1=null;
var c2=null;
var c3=null;
$.post("t.php",
                function (data)
                {  //alert("labels");
				//alert(data);
				x2=parseInt(data);
				//alert('label in ccc2');
				/* ccc2=data;
				//alert(ccc2);
				xcxc2=ccc2[xValue];
			 
				//alert(typeof(xcxc2));
				ts=parseInt(ccc2[xValue])+0;
				//alert('ts');
				//alert(ts);
				//alert('nums');
				//alert((x2));
				//alert((xValue));
				
				 */
				
				
	//alert('near loop');
	
	
	//alert(typeof(xValue));
	//alert(typeof((x2)));
if (xValue<x2){
	//alert('in loop');
	//alert('y-axis');
	//alert((volt[xValue]));
	
	//xv=ccc[xValue];
	//xv=xv.toString();
	//alert(typeof(xv));
	//alert('x-axis');
	//alert(x2);
	//alert(ccc);
	c1=ccc[0];
	c2=ccc[1];
	c3=ccc[2];
	
	c1=parseInt(c1);
	c2=parseInt(c2);
	c3=parseInt(c3);
	
	dataPoints.push({ x: x2, y: c1 });
	dataPoints1.push({ x: x2, y: c2 });
	dataPoints2.push({ x: x2, y: c3 });
	xValue++;
	chart.render();
};
				
				});
	
				
				
								
                    
				}
				
				);
				
				
				
				
	
ccc=null;
$.post("i.php",
                function (data)
                {  
				
				////alert("data");
				////alert(data);
				
				ccc=data;
				
				
				
//volt=ccc;
var xValue = dataPointsi[dataPointsi.length - 1].x;
var yValue = dataPointsi[dataPointsi.length - 1].y;
var x2= 0;
//alert('numbers');
//alert('xValue');
//alert(xValue);
//alert('x2');
//alert(x2);

//alert("volt");
		
//alert(volt);
	
	//var xcxc2=null;
//var ts=null;
//var ccc2=null;
//var xv=null;
var c1=null;
var c2=null;
var c3=null;
$.post("t.php",
                function (data)
                {  //alert("labels");
				//alert(data);
				x2=parseInt(data);
				//alert('label in ccc2');
				/* ccc2=data;
				//alert(ccc2);
				xcxc2=ccc2[xValue];
			 
				//alert(typeof(xcxc2));
				ts=parseInt(ccc2[xValue])+0;
				//alert('ts');
				//alert(ts);
				//alert('nums');
				//alert((x2));
				//alert((xValue));
				
				 */
				
				
	//alert('near loop');
	
	
	//alert(typeof(xValue));
	//alert(typeof((x2)));
if (xValue<x2){
	//alert('in loop');
	//alert('y-axis');
	//alert((volt[xValue]));
	
	//xv=ccc[xValue];
	//xv=xv.toString();
	//alert(typeof(xv));
	//alert('x-axis');
	//alert(x2);
	//alert(ccc);
	c1=ccc[0];
	c2=ccc[1];
	c3=ccc[2];
	
	c1=parseInt(c1);
	c2=parseInt(c2);
	c3=parseInt(c3);
	
	dataPointsi.push({ x: x2, y: c1 });
	dataPointsi1.push({ x: x2, y: c2 });
	dataPointsi2.push({ x: x2, y: c3 });
	
	current.render();
};
				
				});
	
				
				
								
                    
				}
				
				);				
				
				
				
				





ccc=null;
$.post("tp.php",
                function (data)
                {  
				
				////alert("data");
				////alert(data);
				
				ccc=data;
				
				
				
//volt=ccc;
var xValue = dataPointstp[dataPointstp.length - 1].x;
var yValue = dataPointstp[dataPointstp.length - 1].y;
var x2= 0;
//alert('numbers');
//alert('xValue');
//alert(xValue);
//alert('x2');
//alert(x2);

//alert("volt");
		
//alert(volt);
	
	//var xcxc2=null;
//var ts=null;
//var ccc2=null;
//var xv=null;
var c1=null;
var c2=null;
var c3=null;
$.post("t.php",
                function (data)
                {  //alert("labels");
				//alert(data);
				x2=parseInt(data);
				//alert('label in ccc2');
				/* ccc2=data;
				//alert(ccc2);
				xcxc2=ccc2[xValue];
			 
				//alert(typeof(xcxc2));
				ts=parseInt(ccc2[xValue])+0;
				//alert('ts');
				//alert(ts);
				//alert('nums');
				//alert((x2));
				//alert((xValue));
				
				 */
				
				
	//alert('near loop');
	
	
	//alert(typeof(xValue));
	//alert(typeof((x2)));
if (xValue<x2){
	//alert('in loop');
	//alert('y-axis');
	//alert((volt[xValue]));
	
	//xv=ccc[xValue];
	//xv=xv.toString();
	//alert(typeof(xv));
	//alert('x-axis');
	//alert(x2);
	//alert(ccc);
	c1=ccc[0];
	c2=ccc[1];
	c3=ccc[2];
	
	c1=parseInt(c1);
	c2=parseInt(c2);
	c3=parseInt(c3);
	
	dataPointstp.push({ x: x2, y: c1 });
	dataPointstp1.push({ x: x2, y: c2 });
	dataPointstp2.push({ x: x2, y: c3 });
	
	power.render();
};
				
				});
	
				
				
								
                    
				}
				
				);




//extras update****************************************************************************


ccc=null;
$.post("extra.php",
                function (data)
                {  
				
				////alert("data");
				////alert(data);
				
				ccc=data;
				
				
				
//volt=ccc;
var xValue = dataPointstp[dataPointsR.length - 1].x;
var yValue = dataPointstp[dataPointsR.length - 1].y;
var x2= 0;
//alert('numbers');
//alert('xValue');
//alert(xValue);
//alert('x2');
//alert(x2);

//alert("volt");
		
//alert(volt);
	
	//var xcxc2=null;
//var ts=null;
//var ccc2=null;
//var xv=null;
var c1=null;
var c2=null;
var c3=null;
var c4=null;
var c5=null;
$.post("t.php",
                function (data)
                {  //alert("labels");
				//alert(data);
				x2=parseInt(data);
				//alert('label in ccc2');
				/* ccc2=data;
				//alert(ccc2);
				xcxc2=ccc2[xValue];
			 
				//alert(typeof(xcxc2));
				ts=parseInt(ccc2[xValue])+0;
				//alert('ts');
				//alert(ts);
				//alert('nums');
				//alert((x2));
				//alert((xValue));
				
				 */
				
				
	//alert('near loop');
	
	
	//alert(typeof(xValue));
	//alert(typeof((x2)));
if (xValue<x2){
	//alert('in loop');
	//alert('y-axis');
	//alert((volt[xValue]));
	
	//xv=ccc[xValue];
	//xv=xv.toString();
	//alert(typeof(xv));
	//alert('x-axis');
	//alert(x2);
	//alert(ccc);
	c1=ccc[0];
	c2=ccc[1];
	c3=ccc[2];
	c4=ccc[3];
	c5=ccc[4];
	c1=parseInt(c1);
	c2=parseInt(c2);
	c3=parseInt(c3);
	c4=parseInt(c4);
	c5=parseInt(c5);
	
	dataPointsR.push({ x: x2, y: c1 });
	dataPointsF.push({ x: x2, y: c2 });
	dataPointsOP.push({ x: x2, y: c3 });
	dataPointsCT.push({ x: x2, y: c4 });
	dataPointsPF.push({ x: x2, y: c5 });
	
	extra.render();
};
				
				});
	
				
				
								
                    
				}
				
				);

				

//before here 
};

}

</script>

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

#datee{

position:absolute;
top:40%;
left:17%;
width:70%;
height:50%;
display: inline-block;
font-weight:bold;
font-size:35px;
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
    <button onclick="location.href='/byco/scada.php'" style="width:auto" class= "w3-bar-item,w3-button,w3-padding-large,w3-hide-small">HOME </button>
    <button onclick ="location.href='main.php'"  style="width:auto" class="w3-bar-item,w3-button,w3-padding-large,w3-hide-small"> ENGINE</button>
	<button onclick="location.href='generator.php'" style="width:auto" class= "w3-bar-item,w3-button,w3-padding-large,w3-hide-small">GENERATOR </button>
    <button onclick ="location.href='tables.php'"  style="width:auto" class="w3-bar-item,w3-button,w3-padding-large,w3-hide-small"> DATABASE</button>
    <button onclick ="location.href='trends.php'"  style="width:auto" class="w3-bar-item,w3-button,w3-padding-large,w3-hide-small"> TRENDS</button>
	<button onclick ="location.href='gr.php'"  style="width:auto" class="w3-bar-item,w3-button,w3-padding-large,w3-hide-small"> CUSTOMIZED GRAPH</button>
	
	</div>



</div>
<?php {

echo "
<div id='V1' style='height: 45%; width: 100%;position:absolute;top:25%;border-style:solid;' ></div>

<div id='I1' style='height: 45%; width: 100%;position:absolute;top:72%;border-style:solid'></div>

<div id='TP1' style='height: 45%; width: 100%;position:absolute;top:119%;border-style:solid'></div>

<div id='EE' style='height: 45%; width: 100%;position:absolute;top:166%;border-style:solid'></div>
<script src='canvasjs.min.js'></script>";}?>



</div>

</body>
</html>


















