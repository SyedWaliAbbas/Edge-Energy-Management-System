
<?php
header('Content-Type: application/json');


$conn = mysqli_connect("localhost","pi","byco","orc2");

$sqlQuery = "SELECT UNIX_TIMESTAMP(dt) as t FROM gen111";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = ($row["t"])*1000;
}

mysqli_close($conn);

echo json_encode($data);
?>
