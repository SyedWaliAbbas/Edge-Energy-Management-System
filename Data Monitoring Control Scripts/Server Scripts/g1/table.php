<?php

session_start();
if(!(isset($_SESSION['day']))){
	
	$_SESSION['day']=$_POST["day"];



	
}

?>
<!DOCTYPE html>
<html>
<title>BYCO POWER HOUSE ORC2</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">


<style>

body, html {overflow:auto;}
table#t01{
   width:400%;
    table-layout: fixed;
    border-collapse: collapse;
}

table#t01 thead tbody{display:block;}

table#t01 tbody{
  width: 100%;
  overflow-y: auto;
  overflow-x: auto;
  overflow:auto;
  height: 200px;
}


table#t01 thead {
  background: black;
  color:#fff;
}




table, th, td {
    border: 1px solid blue;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;width: 10px;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
	color:black;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
color:black;
}
table#t01 th {
    background-color: black;
    color: white;
	position: sticky;
	
	
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



</style>




<body>

	<?php

$servername = "localhost";
$username = "pi";
$password = "byco";
$dbname = "orc2";
$datatable = "gen1"; // MySQL table name
$results_per_page = 3000; // number of results per page
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $results_per_page;
$dayy=$_SESSION['day'];


$sql = "SELECT COUNT(*) AS total FROM ".$datatable." WHERE DATE(dt) = ' ".$dayy." ' ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($row["total"]>0)
{

$sql = "SELECT * FROM ".$datatable." WHERE DATE(dt) = ' ".$dayy." ' ORDER BY dt ASC LIMIT $start_from, ".$results_per_page;

$rs_result = $conn->query($sql);



echo "<table  id='t01'>
<thead >
  <tr >
    <th>DateTime</th>
    <th>Controller Status</th> 
	<th>Oil Pressure</th>
	<th>Coolant Temperature</th>
	<th>Charge Alternator Voltage</th>
	<th>Battery Voltage</th>
	<th>Engine Speed</th>
	<th>Generator Frequency</th>
	<th>Phase1 Voltage</th>
	<th>Phase2 Voltage</th>
	<th>Phase3 Voltage</th>
	<th>L12 Voltage </th>
	<th>L23 Voltage </th>
	<th>L31 Voltage </th>
	<th>Line1 Current</th>
	<th>Line2 Current</th>
	<th>Line3 Current</th>
	<th>Earth Current</th>
	<th>Line1 Watts</th>
	<th>Line2 Watts</th>
	<th>Line3 Watts</th>
	<th>Bus Frequency</th>
	<th>Bus Phase1 Voltage</th>
	<th>Bus Phase2 Voltage</th>
	<th>Bus Phase3 Voltage</th>
	<th>Bus L12 Voltage </th>
	<th>Bus L23 Voltage </th>
	<th>Bus L31 Voltage </th>
	<th>Generator Total Watts</th>
	<th>Line1 VA </th>
	<th>Line2 VA </th>
	<th>Line3 VA </th>
	<th>Generator Total VA </th>
	<th>Line1 VAr </th>
	<th>Line2 VAr </th>
	<th>Line3 VAr </th>
	<th>Generator Total VAr </th>
	<th>Line1 pf </th>
	<th>Line2 pf </th>
	<th>Line3 pf </th>
	<th>Generator Average pf</th>
	<th>Percentage Loading</th>
	<th>Percentage VAr</th>
	<th>Bus total Watts</th>
	<th>Bus total VAr</th>
	<th>Engine Run time</th>
	<th>Generator kWh</th>
	<th>Generator kVAh</th>
	<th>Generator kVArh</th>
	<th>Number of Starts</th>
	
	
	
	
	
	
	
  </tr>
  </thead>
<tbody>";
   $xx=0;
 while($row = $rs_result->fetch_assoc()) {
 $xx=$xx+1;
          	echo "<tr>";
   echo "<td >".$row['dt']."</td>";
    echo "<td>".$row['status']."</td>";
	echo "<td width='145%'>".$row['op']."</td>";
    echo "<td>".$row['ct']."</td>";
	echo "<td>".$row['cav']."</td>";
    echo "<td>".$row['ebv']."</td>";
	echo "<td>".$row['rpm']."</td>";
    echo "<td>".$row['gf']."</td>";
	echo "<td>".$row['v1']."</td>";
    echo "<td>".$row['v2']."</td>";
	echo "<td>".$row['v3']."</td>";
    echo "<td>".$row['v12']."</td>";
	echo "<td>".$row['v23']."</td>";
    echo "<td>".$row['v31']."</td>";
	echo "<td>".$row['i1']."</td>";
    echo "<td>".$row['i2']."</td>";
	echo "<td>".$row['i3']."</td>";
    echo "<td>".$row['ie']."</td>";
	echo "<td>".$row['w1']."</td>";
    echo "<td>".$row['w2']."</td>";
	echo "<td>".$row['w3']."</td>";
    echo "<td>".$row['bf']."</td>";
	echo "<td>".$row['bv1']."</td>";
    echo "<td>".$row['bv2']."</td>";
	echo "<td>".$row['bv3']."</td>";
    echo "<td>".$row['bv12']."</td>";
	echo "<td>".$row['bv23']."</td>";
    echo "<td>".$row['bv31']."</td>";
	echo "<td>".$row['tw']."</td>";
    echo "<td>".$row['va1']."</td>";
	echo "<td>".$row['va2']."</td>";
    echo "<td>".$row['va3']."</td>";
	echo "<td>".$row['tva']."</td>";
    echo "<td>".$row['var1']."</td>";
	echo "<td>".$row['var2']."</td>";
    echo "<td>".$row['var3']."</td>";
	echo "<td>".$row['tvar']."</td>";
    echo "<td>".$row['pf1']."</td>";
	echo "<td>".$row['pf2']."</td>";
    echo "<td>".$row['pf3']."</td>";
	echo "<td>".$row['tpf']."</td>";
    echo "<td>".$row['perc_w']."</td>";
	echo "<td>".$row['perc_var']."</td>";
    echo "<td>".$row['btw']."</td>";
	echo "<td>".$row['btvar']."</td>";
    echo "<td>".$row['ert']."</td>";
	echo "<td>".$row['kwh']."</td>";
    echo "<td>".$row['kvah']."</td>";
	echo "<td>".$row['kvarh']."</td>";
    echo "<td>".$row['starts']."</td>";
    echo "</tr>";
	
	if($xx%10==0){
	echo"<tr >
    <th>DateTime</th>
    <th>Controller Status</th> 
	<th>Oil Pressure</th>
	<th>Coolant Temperature</th>
	<th>Charge Alternator Voltage</th>
	<th>Battery Voltage</th>
	<th>Engine Speed</th>
	<th>Generator Frequency</th>
	<th>Phase1 Voltage</th>
	<th>Phase2 Voltage</th>
	<th>Phase3 Voltage</th>
	<th>L12 Voltage </th>
	<th>L23 Voltage </th>
	<th>L31 Voltage </th>
	<th>Line1 Current</th>
	<th>Line2 Current</th>
	<th>Line3 Current</th>
	<th>Earth Current</th>
	<th>Line1 Watts</th>
	<th>Line2 Watts</th>
	<th>Line3 Watts</th>
	<th>Bus Frequency</th>
	<th>Bus Phase1 Voltage</th>
	<th>Bus Phase2 Voltage</th>
	<th>Bus Phase3 Voltage</th>
	<th>Bus L12 Voltage </th>
	<th>Bus L23 Voltage </th>
	<th>Bus L31 Voltage </th>
	<th>Generator Total Watts</th>
	<th>Line1 VA </th>
	<th>Line2 VA </th>
	<th>Line3 VA </th>
	<th>Generator Total VA </th>
	<th>Line1 VAr </th>
	<th>Line2 VAr </th>
	<th>Line3 VAr </th>
	<th>Generator Total VAr </th>
	<th>Line1 pf </th>
	<th>Line2 pf </th>
	<th>Line3 pf </th>
	<th>Generator Average pf</th>
	<th>Percentage Loading</th>
	<th>Percentage VAr</th>
	<th>Bus total Watts</th>
	<th>Bus total VAr</th>
	<th>Engine Run time</th>
	<th>Generator kWh</th>
	<th>Generator kVAh</th>
	<th>Generator kVArh</th>
	<th>Number of Starts</th>
	
	
	
	
	
	
	
	</tr>";}
  

}; 
echo "</tbody>";
echo "</table>";

$sql = "SELECT COUNT(*) AS total FROM ".$datatable." WHERE DATE(dt) = ' ".$dayy." ' ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results
  
  echo "<div >";
  
for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
			
            echo "<a style='font-size:190%;color:#FFFF00;font-weight:bold;' href='table.php?page=".$i."'";
            if ($i==$page)  echo " class='curPage'";
            echo ">".$i."</a> "; 
}; 

echo "</div>";
}
else {
	
	echo "<div style='position:absolute;top:17%;left:1%;font-size:19px;color:white;'> No Data Found</div>";
}

?>















<img id="g1"  src="g1.png"></img>	


<button onclick="location.href='tables.php' " style="width:auto;position:absolute;right:1%;" class= "w3-bar-item,w3-button,w3-padding-large,w3-hide-small">BACK</button>
	





















	



</body>
</html>
