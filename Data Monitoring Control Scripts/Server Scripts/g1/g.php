<?php

session_start();
if(!(isset($_SESSION['parameter']))){
	
	$_SESSION['p']=$_POST["parameter"];
	$_SESSION['from']=$_POST["from"];
	$_SESSION['to']=$_POST["to"];



	
}

?>


	<?php
$dataPoints = array();
?>


	<?php

$servername = "localhost";
$username = "pi";
$password = "byco";
$dbname = "orc2";
$datatable = "gen1"; // MySQL table name
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$p=$_SESSION['p'];
$from=$_SESSION['from'];
$from=substr($from,0,10)." ".substr($from,11,17);

$to=$_SESSION['to'];
$to=substr($to,0,10)." ".substr($to,11,17);

$sqlQuery = "SELECT ".$p.",UNIX_TIMESTAMP(dt) as t From ".$datatable." WHERE dt >= '".$from."' AND dt<= '".$to."'";
//echo $sqlQuery;
//$sqlQuery = "SELECT dt From gen22 where dt>= '2017-01-01 00:00' AND dt<='2019-07-01 12:00' ";
//echo $sqlQuery;
$result = mysqli_query($conn,$sqlQuery);
foreach ($result as $row) {
	
	array_push($dataPoints, array("x" => (($row["t"] )*1000), "y" => $row[$p]));
	//echo $row[$p];
}

mysqli_close($conn);

//echo json_encode($dataPoints, JSON_NUMERIC_CHECK); 
//echo $sqlQuery;


?>


<!DOCTYPE HTML>
<html>

<title>BYCO POWER HOUSE ORC2</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>

<script>
window.onload = function() {
 
var dataPoints = <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>;




 
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "dark1",
	zoomEnabled : true,
	animationEnabled : true,
	
	title: {
		text:"Selected parameter graph"
	},
	axisX:{
		
		title: "Time in millisecond",
		
	},
	axisY:{
		includeZero: false,
		suffix: " "
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
		xValueType: "dateTime",
		
		xValueFormatString: "YYYY-MM-DD hh:mm:ss TT",
		yValueFormatString: "#,##0.0#",
		dataPoints: dataPoints
	}]
});
chart.render();
 
var updateInterval = 150;
setInterval(function () { updateChart() }, updateInterval);
 	

var xValue = dataPoints.length;

var yValue = dataPoints[dataPoints.length - 1].y;
var x2= labelss.length;
function updateChart() {
	

 
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
    <button onclick="location.href='gback.php' " style="width:auto" class= "w3-bar-item,w3-button,w3-padding-large,w3-hide-small">BACK</button>
	
	</div>
	


</div>




<div id="chartContainer" style="height: 45%; width: 100%;position:absolute;top:25%;border-style:solid"></div>
<div style="height: 45%; width: 100%;position:absolute;top:75%;"> Selected Parameter :<?php
 if ($_SESSION['p']=='op'){echo "oil pressure";}
if ($_SESSION['p']=='ct'){echo "coolant temperature";}
if ($_SESSION['p']=='cav'){echo "charging alternator voltage";}
if ($_SESSION['p']=='ebv'){echo "Battery Voltage";}
if ($_SESSION['p']=='rpm'){echo "RPM";}
if ($_SESSION['p']=='gf'){echo "Generator Frequency";}
if ($_SESSION['p']=='v1'){echo "Phase A voltage";}
if ($_SESSION['p']=='v2'){echo "Phase B voltage";}
if ($_SESSION['p']=='v3'){echo "Phase C voltage";}
if ($_SESSION['p']=='v12'){echo "Line 12 voltage";}
if ($_SESSION['p']=='v23'){echo "Line 23 voltage";}
if ($_SESSION['p']=='v31'){echo "Line 31 voltage";}
if ($_SESSION['p']=='i1'){echo "Line 1 Current";}
if ($_SESSION['p']=='i2'){echo "Line 2 Current";}
if ($_SESSION['p']=='i3'){echo "Line 3 Current";}
if ($_SESSION['p']=='ie'){echo "Earth Current";}
if ($_SESSION['p']=='w1'){echo "Line 1 kW";}
if ($_SESSION['p']=='w2'){echo "Line 2 kW";}
if ($_SESSION['p']=='w3'){echo "Line 3 kW";}
if ($_SESSION['p']=='bf'){echo "Bus Frequency";}
if ($_SESSION['p']=='bv1'){echo "Bus Phase A voltage";}
if ($_SESSION['p']=='bv2'){echo "Bus Phase B voltage";}
if ($_SESSION['p']=='bv3'){echo "Bus Phase C voltage";}
if ($_SESSION['p']=='bv12'){echo "Bus Line 12 voltage";}
if ($_SESSION['p']=='bv23'){echo "Bus Line 23 voltage";}
if ($_SESSION['p']=='bv31'){echo "Bus Line 31 voltage";}
if ($_SESSION['p']=='tw'){echo "Total kW";}
if ($_SESSION['p']=='va1'){echo "Line 1 VA";}
if ($_SESSION['p']=='va2'){echo "Line 2 VA";}
if ($_SESSION['p']=='va3'){echo "Line 3 VA";}
if ($_SESSION['p']=='tva'){echo "Total VA";}
if ($_SESSION['p']=='var1'){echo "Line 1 VAr";}
if ($_SESSION['p']=='var2'){echo "Line 2 VAr";}
if ($_SESSION['p']=='var3'){echo "Line 3 VAr";}
if ($_SESSION['p']=='tvar'){echo "Total VAr";}
if ($_SESSION['p']=='pf1'){echo "Line 1 pf";}
if ($_SESSION['p']=='pf2'){echo "Line 2 pf";}
if ($_SESSION['p']=='pf3'){echo "Line 3 pf";}
if ($_SESSION['p']=='tpf'){echo "Total pf";}
if ($_SESSION['p']=='perc_w'){echo "Percentage kW";}
if ($_SESSION['p']=='perc_w'){echo "% VAr";}
if ($_SESSION['p']=='btw'){echo "Bus Total kW";}
if ($_SESSION['p']=='btvar'){echo "Bus Total VAr";}
if ($_SESSION['p']=='ert'){echo "Engine run time";}
if ($_SESSION['p']=='kwh'){echo "kWh";}
if ($_SESSION['p']=='kvah'){echo "kVAh";}
if ($_SESSION['p']=='kvah'){echo "kVArh ";}
if ($_SESSION['p']=='starts'){echo "starts";}


?></div>
<div style="height: 45%; width: 100%;position:absolute;top:78%;"> From DateTime :<?php echo $from;?></div>
<div style="height: 45%; width: 100%;position:absolute;top:81%;"> To DateTime :<?php echo $to;?></div>


<script src="canvasjs.min.js"></script>











<img id="g1"  src="g1.png"></img>	







	

</div>

</body>
</html>
