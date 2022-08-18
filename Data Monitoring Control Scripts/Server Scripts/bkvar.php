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
$sql = "SELECT btvar FROM gen1 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g1=$row["btvar"];


$sql = "SELECT btvar FROM gen2 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g2=$row["btvar"];

$sql = "SELECT btvar FROM gen3 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g3=$row["btvar"];

$sql = "SELECT btvar FROM gen4 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g4=$row["btvar"];

$sql = "SELECT btvar FROM gen5 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g5=$row["btvar"];


$sql = "SELECT btvar FROM gen6 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g6=$row["btvar"];

$sql = "SELECT btvar FROM gen7 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g7=$row["btvar"];


$sql = "SELECT btvar FROM gen8 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g8=$row["btvar"];


$sql = "SELECT btvar FROM gen9 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g9=$row["btvar"];


$sql = "SELECT btvar FROM gen10 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g10=$row["btvar"];


$sql = "SELECT btvar FROM gen11 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g11=$row["btvar"];



$sql = "SELECT btvar FROM gen12 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g12=$row["btvar"];



$sql = "SELECT btvar FROM gen13 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g13=$row["btvar"];


$sql = "SELECT btvar FROM gen14 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g14=$row["btvar"];


$sql = "SELECT btvar FROM gen15 order by dt desc limit 1";
$result = $conn->query($sql);
$fin=0;$id=0;
$row = $result->fetch_assoc();
$g15=$row["btvar"];


if($g1>1){
	
echo $g1;
echo " kVAr";
}
elseif($g2>1){

echo $g2;
echo " kVAr";
}
elseif($g3>1){

echo $g3;
echo " kVAr";
}
elseif($g4>1){

echo $g4;
echo " kVAr";
}
elseif($g5>1){

echo $g5;
echo " kVAr";
}
elseif($g6>1){

echo $g6;
echo " kVAr";
}
elseif($g7>1){

echo $g7;
echo " kVAr";
}
elseif($g8>1){

echo $g8;
echo " kVAr";
}
elseif($g9>1){

echo $g9;
echo " kVAr";
}
elseif($g10>1){

echo $g10;
echo " kVAr";
}
elseif($g11>1){

echo $g11;
echo " kVAr";
}
elseif($g12>1){

echo $g12;
echo " kVAr";
}
elseif($g13>1){

echo $g13;
echo " kVAr";
}
elseif($g14>1){

echo $g14;
echo " kVAr";
}
else{
	
	
echo $g15;
echo " kVAr";
	
}







}





else {echo "-----";}

?>