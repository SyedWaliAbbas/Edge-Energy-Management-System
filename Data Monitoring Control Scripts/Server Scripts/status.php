
<?php
header('Content-Type: application/json');


$conn = mysqli_connect("localhost","pi","byco","orc2");

$sqlQuery = "SELECT status FROM gen1 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();
$g1=$row["status"];

$data = array();
$data[] = $row["status"];

$sqlQuery = "SELECT status FROM gen2 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();
$data[] = $row["status"];

$sqlQuery = "SELECT status FROM gen3 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();
$data[] = $row["status"];

$sqlQuery = "SELECT status FROM gen4 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();
$data[] = $row["status"];

$sqlQuery = "SELECT status FROM gen5 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();
$data[] = $row["status"];

$sqlQuery = "SELECT status FROM gen6 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();
$data[] = $row["status"];

$sqlQuery = "SELECT status FROM gen7 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();
$data[] = $row["status"];

$sqlQuery = "SELECT status FROM gen8 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();
$data[] = $row["status"];


$sqlQuery = "SELECT status FROM gen9 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();
$data[] = $row["status"];
$sqlQuery = "SELECT status FROM gen10 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();
$data[] = $row["status"];

$sqlQuery = "SELECT status FROM gen11 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();
$data[] = $row["status"];

$sqlQuery = "SELECT status FROM gen12 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();
$data[] = $row["status"];

$sqlQuery = "SELECT status FROM gen13 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();
$data[] = $row["status"];

$sqlQuery = "SELECT status FROM gen14 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();
$data[] = $row["status"];

$sqlQuery = "SELECT status FROM gen15 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();
$data[] = $row["status"];


mysqli_close($conn);

echo json_encode($data,JSON_NUMERIC_CHECK);
?>