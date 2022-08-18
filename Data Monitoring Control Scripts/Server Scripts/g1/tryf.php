<?php
$dataPoints = array();
$dataPoints1 = array();
$dataPoints2 = array();
?>
<?php

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

<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>

<script>

window.onload = function() {
 
var dataPoints = <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>;
var dataPoints1 = <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>;
var dataPoints2 = <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>;

var chart = new CanvasJS.Chart("chartContainer", {
	theme: "dark1",
	zoomEnabled : true,
	animationEnabled : true,
	
	title: {
		text: "Live SCADA Speed"
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

 
};

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>

<script src="canvasjs.min.js"></script>
</body>
</html>