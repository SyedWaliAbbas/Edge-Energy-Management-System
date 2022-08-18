
<?php
header('Content-Type: application/json');


$conn = mysqli_connect("localhost","pi","byco","orc2");

$sqlQuery = "SELECT i1,i2,i3 FROM gen11 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row["i1"];
	$data[] = $row["i2"];
	$data[] = $row["i3"];
}

mysqli_close($conn);

echo json_encode($data,JSON_NUMERIC_CHECK);
?>