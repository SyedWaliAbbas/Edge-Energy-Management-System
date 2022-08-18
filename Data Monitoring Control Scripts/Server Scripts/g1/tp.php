
<?php
header('Content-Type: application/json');


$conn = mysqli_connect("localhost","pi","byco","orc2");

$sqlQuery = "SELECT tw,tva,tvar FROM gen11 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row["tw"];
	$data[] = $row["tva"];
	$data[] = $row["tvar"];
}

mysqli_close($conn);

echo json_encode($data,JSON_NUMERIC_CHECK);
?>