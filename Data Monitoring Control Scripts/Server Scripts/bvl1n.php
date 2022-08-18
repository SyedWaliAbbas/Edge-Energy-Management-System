



<?php
header('Content-Type: application/json');


$conn = mysqli_connect("localhost","pi","byco","orc2");

$sqlQuery = "SELECT bv1,bv2,bv3,bv12,bv23,bv31,btw,btvar FROM gen1 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();


if($row["bv1"]>0){
$data = array();
foreach ($result as $row) {
	
		$data[] = $row["bv1"];
	$data[] = $row["bv2"];
	$data[] = $row["bv3"];
	$data[] = $row["bv12"];
	$data[] = $row["bv23"];
	$data[] = $row["bv31"];
	$data[] = $row["btw"];
	$data[] = $row["btvar"];

}}

else
{
$sqlQuery = "SELECT bv1,bv2,bv3,bv12,bv23,bv31,btw,btvar FROM gen2 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();


if($row["bv1"]>0){
$data = array();
foreach ($result as $row) {
	
		$data[] = $row["bv1"];
	$data[] = $row["bv2"];
	$data[] = $row["bv3"];
	$data[] = $row["bv12"];
	$data[] = $row["bv23"];
	$data[] = $row["bv31"];
	$data[] = $row["btw"];
	$data[] = $row["btvar"];

}}
else{
	$sqlQuery = "SELECT bv1,bv2,bv3,bv12,bv23,bv31,btw,btvar FROM gen3 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();


if($row["bv1"]>0){
$data = array();
foreach ($result as $row) {
	
		$data[] = $row["bv1"];
	$data[] = $row["bv2"];
	$data[] = $row["bv3"];
	$data[] = $row["bv12"];
	$data[] = $row["bv23"];
	$data[] = $row["bv31"];
	$data[] = $row["btw"];
	$data[] = $row["btvar"];

}}
	else{
		
		$sqlQuery = "SELECT bv1,bv2,bv3,bv12,bv23,bv31,btw,btvar FROM gen4 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();


if($row["bv1"]>0){
$data = array();
foreach ($result as $row) {
	
		$data[] = $row["bv1"];
	$data[] = $row["bv2"];
	$data[] = $row["bv3"];
	$data[] = $row["bv12"];
	$data[] = $row["bv23"];
	$data[] = $row["bv31"];
	$data[] = $row["btw"];
	$data[] = $row["btvar"];

}}
else{
	$sqlQuery = "SELECT bv1,bv2,bv3,bv12,bv23,bv31,btw,btvar FROM gen5 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();


if($row["bv1"]>0){
$data = array();
foreach ($result as $row) {
	
		$data[] = $row["bv1"];
	$data[] = $row["bv2"];
	$data[] = $row["bv3"];
	$data[] = $row["bv12"];
	$data[] = $row["bv23"];
	$data[] = $row["bv31"];
	$data[] = $row["btw"];
	$data[] = $row["btvar"];

}}
else {
	$sqlQuery = "SELECT bv1,bv2,bv3,bv12,bv23,bv31,btw,btvar FROM gen6 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();


if($row["bv1"]>0){
$data = array();
foreach ($result as $row) {
	
		$data[] = $row["bv1"];
	$data[] = $row["bv2"];
	$data[] = $row["bv3"];
	$data[] = $row["bv12"];
	$data[] = $row["bv23"];
	$data[] = $row["bv31"];
	$data[] = $row["btw"];
	$data[] = $row["btvar"];

}}


else{
	$sqlQuery = "SELECT bv1,bv2,bv3,bv12,bv23,bv31,btw,btvar FROM gen7 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();


if($row["bv1"]>0){
$data = array();
foreach ($result as $row) {
	
		$data[] = $row["bv1"];
	$data[] = $row["bv2"];
	$data[] = $row["bv3"];
	$data[] = $row["bv12"];
	$data[] = $row["bv23"];
	$data[] = $row["bv31"];
	$data[] = $row["btw"];
	$data[] = $row["btvar"];

}}
	else{
		$sqlQuery = "SELECT bv1,bv2,bv3,bv12,bv23,bv31,btw,btvar FROM gen8 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();


if($row["bv1"]>0){
$data = array();
foreach ($result as $row) {
	
		$data[] = $row["bv1"];
	$data[] = $row["bv2"];
	$data[] = $row["bv3"];
	$data[] = $row["bv12"];
	$data[] = $row["bv23"];
	$data[] = $row["bv31"];
	$data[] = $row["btw"];
	$data[] = $row["btvar"];

}}

else{
	$sqlQuery = "SELECT bv1,bv2,bv3,bv12,bv23,bv31,btw,btvar FROM gen9 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();


if($row["bv1"]>0){
$data = array();
foreach ($result as $row) {
	
		$data[] = $row["bv1"];
	$data[] = $row["bv2"];
	$data[] = $row["bv3"];
	$data[] = $row["bv12"];
	$data[] = $row["bv23"];
	$data[] = $row["bv31"];
	$data[] = $row["btw"];
	$data[] = $row["btvar"];

}}
	else{
		$sqlQuery = "SELECT bv1,bv2,bv3,bv12,bv23,bv31,btw,btvar FROM gen10 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();


if($row["bv1"]>0){
$data = array();
foreach ($result as $row) {
	
		$data[] = $row["bv1"];
	$data[] = $row["bv2"];
	$data[] = $row["bv3"];
	$data[] = $row["bv12"];
	$data[] = $row["bv23"];
	$data[] = $row["bv31"];
	$data[] = $row["btw"];
	$data[] = $row["btvar"];

}}
else{
	$sqlQuery = "SELECT bv1,bv2,bv3,bv12,bv23,bv31,btw,btvar FROM gen11 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();


if($row["bv1"]>0){
$data = array();
foreach ($result as $row) {
	
		$data[] = $row["bv1"];
	$data[] = $row["bv2"];
	$data[] = $row["bv3"];
	$data[] = $row["bv12"];
	$data[] = $row["bv23"];
	$data[] = $row["bv31"];
	$data[] = $row["btw"];
	$data[] = $row["btvar"];

}}
	else{
		$sqlQuery = "SELECT bv1,bv2,bv3,bv12,bv23,bv31,btw,btvar FROM gen12 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();


if($row["bv1"]>0){
$data = array();
foreach ($result as $row) {
	
		$data[] = $row["bv1"];
	$data[] = $row["bv2"];
	$data[] = $row["bv3"];
	$data[] = $row["bv12"];
	$data[] = $row["bv23"];
	$data[] = $row["bv31"];
	$data[] = $row["btw"];
	$data[] = $row["btvar"];

}}
else{
	$sqlQuery = "SELECT bv1,bv2,bv3,bv12,bv23,bv31,btw,btvar FROM gen13 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();


if($row["bv1"]>0){
$data = array();
foreach ($result as $row) {
	
		$data[] = $row["bv1"];
	$data[] = $row["bv2"];
	$data[] = $row["bv3"];
	$data[] = $row["bv12"];
	$data[] = $row["bv23"];
	$data[] = $row["bv31"];
	$data[] = $row["btw"];
	$data[] = $row["btvar"];

}}
	else{
		$sqlQuery = "SELECT bv1,bv2,bv3,bv12,bv23,bv31,btw,btvar FROM gen14 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();


if($row["bv1"]>0){
$data = array();
foreach ($result as $row) {
	
		$data[] = $row["bv1"];
	$data[] = $row["bv2"];
	$data[] = $row["bv3"];
	$data[] = $row["bv12"];
	$data[] = $row["bv23"];
	$data[] = $row["bv31"];
	$data[] = $row["btw"];
	$data[] = $row["btvar"];

}}
		else{
			$sqlQuery = "SELECT bv1,bv2,bv3,bv12,bv23,bv31,btw,btvar FROM gen15 order by dt desc limit 1";

$result = mysqli_query($conn,$sqlQuery);
$row = $result->fetch_assoc();


if($row["bv1"]>0){
$data = array();
foreach ($result as $row) {
	
		$data[] = $row["bv1"];
	$data[] = $row["bv2"];
	$data[] = $row["bv3"];
	$data[] = $row["bv12"];
	$data[] = $row["bv23"];
	$data[] = $row["bv31"];
	$data[] = $row["btw"];
	$data[] = $row["btvar"];

}}
			else{
				
	$data[] = 0;
	$data[] = 0;
	$data[] = 0;
	$data[] = 0;
	$data[] = 0;
	$data[] = 0;
	$data[] = 0;
	$data[] = 0;
				
				
			}
			
			
		}
		
	}
	
}
		
		
		
	}
	
}
		
		
	}
	
	
}
		
		
	}
	
	
	
}
	
	
}
	
	
}
		
		
		
	}
	
	
}






}	




mysqli_close($conn);

echo json_encode($data,JSON_NUMERIC_CHECK);
?>