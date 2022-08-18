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
$sql = "SELECT bv2 FROM gen1 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g1=$row["bv2"];


$sql = "SELECT bv2 FROM gen2 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g2=$row["bv2"];

$sql = "SELECT bv2 FROM gen3 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g3=$row["bv2"];

$sql = "SELECT bv2 FROM gen4 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g4=$row["bv2"];

$sql = "SELECT bv2 FROM gen5 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g5=$row["bv2"];


$sql = "SELECT bv2 FROM gen6 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g6=$row["bv2"];

$sql = "SELECT bv2 FROM gen7 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g7=$row["bv2"];


$sql = "SELECT bv2 FROM gen8 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g8=$row["bv2"];


$sql = "SELECT bv2 FROM gen9 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g9=$row["bv2"];


$sql = "SELECT bv2 FROM gen10 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g10=$row["bv2"];


$sql = "SELECT bv2 FROM gen11 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g11=$row["bv2"];



$sql = "SELECT bv2 FROM gen12 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g12=$row["bv2"];



$sql = "SELECT bv2 FROM gen13 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g13=$row["bv2"];


$sql = "SELECT bv2 FROM gen14 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g14=$row["bv2"];


$sql = "SELECT bv2 FROM gen15 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g15=$row["bv2"];


if($g1>100){
	
echo $g1;
echo " Volts";
}
elseif($g2>100){

echo $g2;
echo " Volts";
}
elseif($g3>100){

echo $g3;
echo " Volts";
}
elseif($g4>100){

echo $g4;
echo " Volts";
}
elseif($g5>100){

echo $g5;
echo " Volts";
}
elseif($g6>100){

echo $g6;
echo " Volts";
}
elseif($g7>100){

echo $g7;
echo " Volts";
}
elseif($g8>100){

echo $g8;
echo " Volts";
}
elseif($g9>100){

echo $g9;
echo " Volts";
}
elseif($g10>100){

echo $g10;
echo " Volts";
}
elseif($g11>100){

echo $g11;
echo " Volts";
}
elseif($g12>100){

echo $g12;
echo " Volts";
}
elseif($g13>100){

echo $g13;
echo " Volts";
}
elseif($g14>100){

echo $g14;
echo " Volts";
}
else{
	
	
echo $g15;
echo " Volts";
	
}







}





else {echo "-----";}

?>