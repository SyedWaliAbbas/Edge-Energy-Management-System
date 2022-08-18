
<?php
header('Content-Type: application/json');


$conn = mysqli_connect("localhost","pi","byco","orc2");

$sqlQuery = "SELECT dt,volt FROM gen111";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row["volt"];
}

mysqli_close($conn);

echo json_encode($data,JSON_NUMERIC_CHECK);
?>
