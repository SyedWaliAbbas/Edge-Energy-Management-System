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
$sql = "SELECT btw FROM gen1 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g1=$row["btw"];


$sql = "SELECT btw FROM gen2 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g2=$row["btw"];

$sql = "SELECT btw FROM gen3 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g3=$row["btw"];

$sql = "SELECT btw FROM gen4 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g4=$row["btw"];

$sql = "SELECT btw FROM gen5 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g5=$row["btw"];


$sql = "SELECT btw FROM gen6 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g6=$row["btw"];

$sql = "SELECT btw FROM gen7 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g7=$row["btw"];


$sql = "SELECT btw FROM gen8 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g8=$row["btw"];


$sql = "SELECT btw FROM gen9 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g9=$row["btw"];


$sql = "SELECT btw FROM gen10 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g10=$row["btw"];


$sql = "SELECT btw FROM gen11 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g11=$row["btw"];



$sql = "SELECT btw FROM gen12 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g12=$row["btw"];



$sql = "SELECT btw FROM gen13 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g13=$row["btw"];


$sql = "SELECT btw FROM gen14 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g14=$row["btw"];


$sql = "SELECT btw FROM gen15 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g15=$row["btw"];


if($g1>1){
	
echo $g1;
echo " KW";
}
elseif($g2>1){

echo $g2;
echo " KW";
}
elseif($g3>1){

echo $g3;
echo " KW";
}
elseif($g4>1){

echo $g4;
echo " KW";
}
elseif($g5>1){

echo $g5;
echo " KW";
}
elseif($g6>1){

echo $g6;
echo " KW";
}
elseif($g7>1){

echo $g7;
echo " KW";
}
elseif($g8>1){

echo $g8;
echo " KW";
}
elseif($g9>1){

echo $g9;
echo " KW";
}
elseif($g10>1){

echo $g10;
echo " KW";
}
elseif($g11>1){

echo $g11;
echo " KW";
}
elseif($g12>1){

echo $g12;
echo " KW";
}
elseif($g13>1){

echo $g13;
echo " KW";
}
elseif($g14>1){

echo $g14;
echo " KW";
}
else{
	
	
echo $g15;
echo " KW";
	
}







}





else {echo "-----";}

?>