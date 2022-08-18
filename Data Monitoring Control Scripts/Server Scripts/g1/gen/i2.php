<?php


			$servername = "localhost";
$username = "pi";
$password = "byco";
$dbname = "orc2";
$fail=0;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	$fail=1;
} 


if($fail!=1){
$sql = "SELECT i2 FROM gen1 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;

    // output data of each row
	
   
			/*  */
			
			
			

$row = $result->fetch_assoc();






echo $row["i2"];
echo "  Amp";}





else {echo "-----";}

?>














