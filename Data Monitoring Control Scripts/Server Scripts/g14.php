
<?php
header('Content-Type: application/json');


$conn = mysqli_connect("localhost","pi","byco","orc2");

$sqlQuery = "SELECT tw,tvar,perc_w,tpf,gf FROM gen14 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row["tw"];
	$data[] = $row["tvar"];
	$data[] = $row["perc_w"];
	$data[] = $row["tpf"];
	$data[] = $row["gf"];
}

mysqli_close($conn);

echo json_encode($data,JSON_NUMERIC_CHECK);
?>