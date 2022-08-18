
<?php
header('Content-Type: application/json');


$conn = mysqli_connect("localhost","pi","byco","orc2");

$sqlQuery = "SELECT v1,v2,v3 FROM gen11 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row["v1"];
	$data[] = $row["v2"];
	$data[] = $row["v3"];
}

mysqli_close($conn);

echo json_encode($data,JSON_NUMERIC_CHECK);
?>