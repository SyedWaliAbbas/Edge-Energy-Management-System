<?php

session_start();
if(!(isset($_SESSION['a']))){
	
	$_SESSION['a']=$_POST["Name"];
$_SESSION['b']=$_POST["pwd"];	


	
}

?>

<!DOCTYPE html>
<html>
<title>BYCO POWER HOUSE ORC2</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">

<script src="jquery-latest.js"></script>


<style>
body,h2 {font-family: sans-serif; 
}
body, html {height: 100%;width:100%}
.bgimg {
  background-image: url('black.png');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}






/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

#box1{

border: 4px solid blue ;
-webkit-animation: mymove 15s infinite; /* Chrome, Safari, Opera */
 animation: mymove 15s infinite;
}


/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
  from {border-color: red;}
  to {border-color: blue;}
}

/* Standard syntax */
@keyframes mymove {
  from {border-color: red;}
  to {border-color: blue;}
}

#gen{

width:60px;
height:20%;
padding: 5px 5px;}

#busbar{
height:18.5%;
margin-left:1%;
margin-right:2%;
width:177%;
padding:0 0 0 0;
position:absolute;
top:20% ;
left:0 ;}

#breaker{
margin-top:8%;
width:60px;
height:70px;
padding-left:12px;}



#cable1{
width:4%;
height:11%;
position:absolute;
top:30.2%;
left:0.5% ;

}
#cable2{
width:4%;
height:11%;
position:absolute;
top:30.2%;
left:6.5% ;

}
#cable3{
width:4%;
height:11%;
position:absolute;
top:30.2%;
left:13.5% ;

}
#cable4{
width:4%;
height:11%;
position:absolute;
top:30.2%;
left:20% ;

}
#cable5{
width:4%;
height:11%;
position:absolute;
top:30.2%;
left:26.5% ;

}
#cable6{
width:4%;
height:11%;
position:absolute;
top:30.2%;
left:33% ;

}
#cable7{
width:4%;
height:11%;
position:absolute;
top:30.2%;
left:39.5% ;

}
#cable8{
width:4%;
height:11%;
position:absolute;
top:30.2%;
left:46% ;

}
#cable9{
width:4%;
height:11%;
position:absolute;
top:30.2%;
left:52.5% ;

}
#cable10{
width:4%;
height:11%;
position:absolute;
top:30.2%;
left:59% ;

}
#cable11{
width:4%;
height:11%;
position:absolute;
top:30.2%;
left:66.5% ;

}
#cable12{
width:4%;
height:11%;
position:absolute;
top:30.2%;
left:72% ;

}
#cable13{
width:4%;
height:11%;
position:absolute;
top:30.2%;
left:78.5% ;

}
#cable14{
width:4%;
height:11%;
position:absolute;
top:30.2%;
left:85% ;

}
#cable15{
width:4%;
height:11%;
position:absolute;
top:30.2%;
left:91.5% ;

}
















#breaker1{
width:2%;
height:10%;
position:absolute;
top:40%;
left:1.3% ;
margin-left:5px;

}
#breaker2{
width:2%;
height:10%;
position:absolute;
top:40%;
left:7.5% ;

}
#breaker3{
width:2%;
height:10%;
position:absolute;
top:40%;
left:14.5% ;

}
#breaker4{
width:2%;
height:10%;
position:absolute;
top:40%;
left:21% ;

}
#breaker5{
width:2%;
height:10%;
position:absolute;
top:40%;
left:27.5% ;

}
#breaker6{
width:2%;
height:10%;
position:absolute;
top:40%;
left:34.1% ;

}
#breaker7{
width:2%;
height:10%;
position:absolute;
top:40%;
left:40.5% ;

}
#breaker8{
width:2%;
height:10%;
position:absolute;
top:40%;
left:47.1% ;

}
#breaker9{
width:2%;
height:10%;
position:absolute;
top:40%;
left:53.5% ;

}
#breaker10{
width:2%;
height:10%;
position:absolute;
top:40%;
left:60.3% ;

}
#breaker11{
width:2%;
height:10%;
position:absolute;
top:40%;
left:67.5% ;

}
#breaker12{
width:2%;
height:10%;
position:absolute;
top:40%;
left:73.1% ;

}
#breaker13{
width:2%;
height:10%;
position:absolute;
top:40%;
left:79.5% ;

}
#breaker14{
width:2%;
height:10%;
position:absolute;
top:40%;
left:86.1% ;

}
#breaker15{
width:2%;
height:10%;
position:absolute;
top:40%;
left:92.5% ;

}








#c1{
width:4%;
height:11%;
position:absolute;
top:50%;
left:0.5% ;


}
#c2{
width:4%;
height:11%;
position:absolute;
top:50%;
left:6.5% ;

}
#c3{
width:4%;
height:11%;
position:absolute;
top:50%;
left:13.5% ;

}
#c4{
width:4%;
height:11%;
position:absolute;
top:50%;
left:20% ;

}
#c5{
width:4%;
height:11%;
position:absolute;
top:50%;
left:26.5% ;

}
#c6{
width:4%;
height:11%;
position:absolute;
top:50%;
left:33% ;

}
#c7{
width:4%;
height:11%;
position:absolute;
top:50%;
left:39.5% ;

}
#c8{
width:4%;
height:11%;
position:absolute;
top:50%;
left:46% ;

}
#c9{
width:4%;
height:11%;
position:absolute;
top:50%;
left:52.5% ;

}
#c10{
width:4%;
height:11%;
position:absolute;
top:50%;
left:59% ;

}
#c11{
width:4%;
height:11%;
position:absolute;
top:50%;
left:66.5% ;

}
#c12{
width:4%;
height:11%;
position:absolute;
top:50%;
left:72% ;

}
#c13{
width:4%;
height:11%;
position:absolute;
top:50%;
left:78.5% ;

}
#c14{
width:4%;
height:11%;
position:absolute;
top:50%;
left:85% ;

}
#c15{
width:4%;
height:11%;
position:absolute;
top:50%;
left:91.5% ;
}


#g1a{
width:6.1%;
height:75px;
position:absolute;
top:56.5%;
left:0.5% ;

}

#g2{
width:6.1%;
height:75px;
margin-left:10px;
position:absolute;
top:56.5%;
left:6.5% ;

}
#g3{
width:6.1%;
height:75px;
margin-left:10px;
position:absolute;
top:56.5%;
left:13.5% ;

}
#g4{
width:6.1%;
height:75px;
margin-left:10px;
position:absolute;
top:56.5%;
left:20% ;

}
#g5{
width:6.1%;
height:75px;
margin-left:10px;
position:absolute;
top:56.5%;
left:26.5% ;

}
#g6{
width:6.1%;
height:75px;
margin-left:10px;
position:absolute;
top:56.5%;
left:33% ;

}
#g7{
width:6.1%;
height:75px;
margin-left:10px;
position:absolute;
top:56.5%;
left:39.5% ;

}
#g8{
width:6.1%;
height:75px;
margin-left:10px;
position:absolute;
top:56.5%;
left:46% ;

}
#g9{
width:6.1%;
height:75px;
margin-left:10px;
position:absolute;
top:56.5%;
left:52.5% ;

}
#g10{
width:6.1%;
height:75px;
margin-left:10px;
position:absolute;
top:56.5%;
left:59% ;

}
#g11{
width:6.1%;
height:75px;
margin-left:10px;
position:absolute;
top:56.5%;
left:65.5% ;

}
#g12{
width:6.1%;
height:75px;
margin-left:10px;
position:absolute;
top:56.5%;
left:72% ;

}
#g13{
width:6.1%;
height:75px;
margin-left:10px;
position:absolute;
top:56.5%;
left:78.5% ;

}
#g14{
width:6.1%;
height:75px;
margin-left:10px;
position:absolute;
top:56.5%;
left:85% ;

}
#g15{
width:6.1%;
height:75px;
margin-left:10px;
position:absolute;
top:56.5%;
left:91.5% ;

}


#boxx{
position:absolute;
top:99.9%;
width:100%;
background-image:url('black.png');}





#g2:hover {
  box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);
}
#g3:hover {
  box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);
}
#g4:hover {
  box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);
}
#g5:hover {
  box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);
}
#g6:hover {
  box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);
}
#g7:hover {
  box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);
}
#g8:hover {
  box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);
}
#g9:hover {
  box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);
}
#g10:hover {
  box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);
}
#g11:hover {
  box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);
}
#g12:hover {
  box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);
}
#g13:hover {
  box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);
}
#g14:hover {
  box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);
}
#g15:hover {
  box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);
}
#g1a:hover {
  box-shadow: 0 0 5px 5px rgba(0, 140, 186, 0.5);
}




* {
  box-sizing: border-box;
}



[class*="col-"] {
  float: left;
  padding: 15px;
  border: 1px solid red;
}

.col-1 {width: 8.33%;
position:absolute;
top:60%;
margin-top:50%;
  padding: 15px;
  border: 1px solid red;
}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}
</style>

</style>
		<?php
			$already=0;
			//session_start();
			if (isset($_SESSION['id'])){$already=1;$id=$_SESSION['id'];}
			else {$already=0;}
			
			if ($already==1){
			$servername = "localhost";
$username = "pi";
$password = "byco";
$dbname = "orc2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM userdata where id=$id";
$result = $conn->query($sql);
$fin=0;$id=0;

    // output data of each row
	
    while($row = $result->fetch_assoc()) 
        {$fin=1;$id=$row["id"];
			$name=$row["username"];
			$pwd=$row["password"];
			$level=$row["level"];
			$_SESSION['c']=$row["level"];
			break;}

 

		$conn->close();
			
			
			
			
			}
			
			
if($already==0)		{	
$check=1;
$name=$pwd="";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(isset($_SESSION['a'])){
	
$_POST["Name"]=$_SESSION['a'];
$_POST["pwd"]=$_SESSION['b'];	
	
}

//Name Validation
$name = test_input($_POST["Name"]);
$pwd = test_input($_POST["pwd"]);

}

?>


<?php

if($already==0){
	if($check!=0)
		
	{	
$servername = "localhost";
$username = "pi";
$password = "byco";
$dbname = "orc2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM userdata";
$result = $conn->query($sql);
$fin=0;
if ($result->num_rows > 0) {
    // output data of each row
	for( $i=0;$i<($result->num_rows);$i++){
    while($row = $result->fetch_assoc()) {
        if ($row["username"]!= $name){break;}
		else if ($row["password"]!=$pwd){break;}
		else {$fin=1;$id=$row["id"];
			$name=$row["username"];
			$pwd=$row["password"];
			$level=$row["level"];
			$_SESSION['c']=$row["level"];
			break;}
}}
} else {
    echo "0 results";
}
$conn->close();


if($fin==0){echo "<h1 id='msg' style='position:absolute;top:20%'>NO SUCH USER EXIST </h1>";}
	
	}
else
	{echo "<h1 ><a id='ord' href='login.html'>SUBMIT FORM AGAIN</a></h1>";}
}
?>





<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  
  <div class="w3-display-topleft w3-padding-large w3-xlarge">
    
	Byco Petroleum Pakistan Limited
  </div>
 <!-- Navbar -->
<div class="w3-top">
<br><br>
	<div class="w3-bar w3-black w3-card"> 
	<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <button onclick="location.href='scada.php' " style="width:auto" class= "w3-bar-item,w3-button,w3-padding-large,w3-hide-small">HOME </button>
    <button onclick ="location.href='logout.php'"  style="width:auto" class="w3-bar-item,w3-button,w3-padding-large,w3-hide-small"> LOGOUT</button>
	</div>


	
	
	
	
</div>
  
  <?php
  
  
if($fin==0){echo "<h1 id='msg' style='position:absolute;top:20%;color:white;'>NO SUCH USER EXIST </h1>";}
  
  if (($fin!=0)||($already==1)){

//  session_start(); // start the session 
$_SESSION['id']=$id;






  echo "
 <ul id='box1' style='position:absolute;top:18%;height:40%;width:100%;padding:0 0 0 0;display:inline;margin-top:6%;' > 
 <div style='border: 0px solid blue;width:20%;position:absolute;top:1%;left:1%;padding:1 1 1 1;font-weight:bold;text-align:center'> </div>
 <div style='border: 0px solid blue;width:20%;position:absolute;top:9.5%;left:1%;padding:1 1 1 1;font-weight:bold;text-align:center;font-size:150%;'>Bus Parameters </div>
 <div style='border: 0px solid blue;width:20%;position:absolute;top:18%;left:1%;padding:1 1 1 1;font-weight:bold;text-align:center'> </div>
 
 <div style='border: 0px solid blue;width:10%;position:absolute;top:1%;left:22%;padding:1 1 1 1;font-weight:bold;text-align:center'>VL1-N: </div>
 <div style='border: 0px solid blue;width:10%;position:absolute;top:9.5%;left:22%;padding:1 1 1 1;font-weight:bold;text-align:center'>VL2-N: </div>
 <div style='border: 0px solid blue;width:10%;position:absolute;top:18%;left:22%;padding:1 1 1 1;font-weight:bold;text-align:center'>VL3-N: </div>
 
 <div id='BVL1N' style='border: 0px solid blue;width:9%;position:absolute;top:1%;left:30%;padding:1 1 1 1;font-weight:bold;text-align:center;color:green;'>240.1 Volts </div>
 <div id='BVL2N' style='border: 0px solid blue;width:9%;position:absolute;top:9.5%;left:30%;padding:1 1 1 1;font-weight:bold;text-align:center;color:green;'>240.1 Volts </div>
 <div id='BVL3N' style='border: 0px solid blue;width:9%;position:absolute;top:18%;left:30%;padding:1 1 1 1;font-weight:bold;text-align:center;color:green;'>240.1 Volts </div>
 
 <div  style='border: 0px solid blue;width:10%;position:absolute;top:1%;left:40%;padding:1 1 1 1;font-weight:bold;text-align:center'>VL1-L2: </div>
 <div style='border: 0px solid blue;width:10%;position:absolute;top:9.5%;left:40%;padding:1 1 1 1;font-weight:bold;text-align:center'>VL2-L3: </div>
 <div style='border: 0px solid blue;width:10%;position:absolute;top:18%;left:40%;padding:1 1 1 1;font-weight:bold;text-align:center'>VL3-L1: </div>
 
 <div id='BVL12' style='border: 0px solid blue;width:9%;position:absolute;top:1%;left:48%;padding:1 1 1 1;font-weight:bold;text-align:center;color:green;'>400.1 Volts </div>
 <div id='BVL23'  style='border: 0px solid blue;width:9%;position:absolute;top:9.5%;left:48%;padding:1 1 1 1;font-weight:bold;text-align:center;color:green;'>400.1 Volts </div>
 <div id='BVL31' style='border: 0px solid blue;width:9%;position:absolute;top:18%;left:48%;padding:1 1 1 1;font-weight:bold;text-align:center;color:green;'>400.5 Volts </div>
 

<div style='border: 0px solid blue;width:10%;position:absolute;top:5.5%;left:60%;padding:1 1 1 1;font-weight:bold;text-align:left'>Bus kW </div>
 <div style='border: 0px solid blue;width:10%;position:absolute;top:12%;left:60%;padding:1 1 1 1;font-weight:bold;text-align:left'>Bus kVAr </div>
 
 <div id='BKW' style='border: 0px solid blue;width:9%;position:absolute;top:5.5%;left:68%;padding:1 1 1 1;font-weight:bold;text-align:left;color:green;'>400.1 KW </div>
 <div id='BKVAR' style='border: 0px solid blue;width:9%;position:absolute;top:12%;left:68%;padding:1 1 1 1;font-weight:bold;text-align:left;color:green;'>400.5 kVAr </div>
 

 
 
 
<img id='busbar' src='busbar.png'  width='100%'>
<img id='cable1' src='c1.png'  width='10px'>
<img id='cable2' src='c1.png'  width='10px'>
<img id='cable3' src='c1.png'  width='10px'>
<img id='cable4' src='c1.png'  width='10px'>
<img id='cable5' src='c1.png'  width='10px'>
<img id='cable6' src='c1.png'  width='10px'>
<img id='cable7' src='c1.png'  width='10px'>
<img id='cable8' src='c1.png'  width='10px'>
<img id='cable9' src='c1.png'  width='10px'>
<img id='cable10' src='c1.png'  width='10px'>
<img id='cable11' src='c1.png'  width='10px'>
<img id='cable12' src='c1.png'  width='10px'>
<img id='cable13' src='c1.png'  width='10px'>
<img id='cable14' src='c1.png'  width='10px'>
<img id='cable15' src='c1.png'  width='10px'>
<img id='breaker1' src='b.png'  width='100%'>


<img id='breaker2' src='b.png'  width='10px'>
<img id='breaker3' src='b.png'  width='10px'>
<img id='breaker4' src='b.png'  width='100%'>
<img id='breaker5' src='b.png'  width='100%'>
<img id='breaker6' src='b.png'  width='100%'>
<img id='breaker7' src='b.png'  width='100%'>
<img id='breaker8' src='b.png'  width='100%'>
<img id='breaker9' src='b.png'  width='100%'>
<img id='breaker10' src='b.png'  width='100%'>
<img id='breaker11' src='b.png'  width='100%'>
<img id='breaker12' src='b.png'  width='100%'>
<img id='breaker13' src='b.png'  width='100%'>
<img id='breaker14' src='b.png'  width='100%'>
<img id='breaker15' src='b.png'  width='100%'>

<img id='c1' src='c1.png'  width='10px'>
<img id='c2' src='c1.png'  width='10px'>
<img id='c3' src='c1.png'  width='10px'>
<img id='c4' src='c1.png'  width='10px'>
<img id='c5' src='c1.png'  width='10px'>
<img id='c6' src='c1.png'  width='10px'>
<img id='c7' src='c1.png'  width='10px'>
<img id='c8' src='c1.png'  width='10px'>
<img id='c9' src='c1.png'  width='10px'>
<img id='c10' src='c1.png'  width='10px'>
<img id='c11' src='c1.png'  width='10px'>
<img id='c12' src='c1.png'  width='10px'>
<img id='c13' src='c1.png'  width='10px'>
<img id='c14' src='c1.png'  width='10px'>
<img id='c15' src='c1.png'  width='10px'>";


if($level==3){
echo "
<a href='g1/main.php' ><img id='g1a' src='g3.png'  width='60px'></a>
<a href='g2/main.php' ><img id='g2'  src='g3.png'  width='60px'></a>
<a href='g3/main.php' > <img id='g3'  src='g3.png'  width='60px'></a>
<a href='g4/main.php' >  <img id='g4'  src='g3.png'  width='60px'> </a>
<a href='g5/main.php' > <img id='g5'  src='g3.png'  width='60px'></a>
<a href='g6/main.php' >  <img id='g6'  src='g3.png'  width='60px'> </a>
<a href='g7/main.php' > <img id='g7'  src='g3.png'  width='60px'></a>
<a href='g8/main.php' >  <img id='g8'  src='g3.png'  width='60px'> </a>
<a href='g9/main.php' > <img id='g9'  src='g3.png'  width='60px'></a>
<a href='g10/main.php' >  <img id='g10'  src='g3.png'  width='60px'> </a>
<a href='g11/main.php' > <img id='g11'  src='g3.png'  width='60px'></a>
<a href='g12/main.php' >  <img id='g12'  src='g3.png'  width='60px'> </a>
<a href='g13/main.php' > <img id='g13'  src='g3.png'  width='60px'></a>
<a href='g14/main.php' >  <img id='g14'  src='g3.png'  width='60px'> </a>
<a href='g15/main.php' > <img id='g15'  src='g3.png'  width='60px'></a>";}


if($level==2){
echo "
<a href='g1/main.php' ><img id='g1a' src='g3.png'  width='60px'></a>
<a href='g2/main.php' ><img id='g2'  src='g3.png'  width='60px'></a>
<a href='g3/main.php' > <img id='g3'  src='g3.png'  width='60px'></a>
<a href='g4/main.php' >  <img id='g4'  src='g3.png'  width='60px'> </a>
<a href='g5/main.php' > <img id='g5'  src='g3.png'  width='60px'></a>
<a href='g6/main.php' >  <img id='g6'  src='g3.png'  width='60px'> </a>
<a href='g7/main.php' > <img id='g7'  src='g3.png'  width='60px'></a>
<a href='g8/main.php' >  <img id='g8'  src='g3.png'  width='60px'> </a>
<a href='g9/main.php' > <img id='g9'  src='g3.png'  width='60px'></a>
<a href='g10/main.php' >  <img id='g10'  src='g3.png'  width='60px'> </a>
<a href='g11/main.php' > <img id='g11'  src='g3.png'  width='60px'></a>
<a href='g12/main.php' >  <img id='g12'  src='g3.png'  width='60px'> </a>
<a href='g13/main.php' > <img id='g13'  src='g3.png'  width='60px'></a>
<a href='g14/main.php' >  <img id='g14'  src='g3.png'  width='60px'> </a>
<a href='g15/main.php' > <img id='g15'  src='g3.png'  width='60px'></a>";}


if($level==1){
echo "
<img id='g1a' src='g3.png'  width='60px'>
<img id='g2'  src='g3.png'  width='60px'>
<img id='g3'  src='g3.png'  width='60px'>
<img id='g4'  src='g3.png'  width='60px'>
<img id='g5'  src='g3.png'  width='60px'>
<img id='g6'  src='g3.png'  width='60px'>
<img id='g7'  src='g3.png'  width='60px'>
<img id='g8'  src='g3.png'  width='60px'>
<img id='g9'  src='g3.png'  width='60px'>
<img id='g10'  src='g3.png'  width='60px'>
<img id='g11'  src='g3.png'  width='60px'>
<img id='g12'  src='g3.png'  width='60px'>
<img id='g13'  src='g3.png'  width='60px'>
<img id='g14'  src='g3.png'  width='60px'>
<img id='g15'  src='g3.png'  width='60px'>";}
 
 
 echo "
 <div style='border: 2px solid blue;width:5.5%;height100%;position:absolute;top:85%;left:1%;padding:1 1 1 1;background-color:gray;font-weight:bold;text-align:center;color:black;';>Gen01</div>
 <div style='border: 2px solid blue;width:5.5%;height100%;position:absolute;top:85%;left:8%;padding:1 1 1 1;background-color:gray;font-weight:bold;text-align:center;color:black;'>Gen02</div>
<div style='border: 2px solid blue;width:5.5%;height100%;position:absolute;top:85%;left:15%;padding:1 1 1 1;background-color:gray;font-weight:bold;text-align:center;color:black;'>Gen03</div>
<div style='border: 2px solid blue;width:5.5%;height100%;position:absolute;top:85%;left:21.5%;padding:1 1 1 1;background-color:gray;font-weight:bold;text-align:center;color:black;'>Gen04</div>
<div style='border: 2px solid blue;width:5.5%;height100%;position:absolute;top:85%;left:28.5%;padding:1 1 1 1;background-color:gray;font-weight:bold;text-align:center;color:black;'>Gen05</div>
<div style='border: 2px solid blue;width:5.5%;height100%;position:absolute;top:85%;left:35%;padding:1 1 1 1;background-color:gray;font-weight:bold;text-align:center;color:black;'>Gen06</div>
<div style='border: 2px solid blue;width:5.5%;height100%;position:absolute;top:85%;left:41.5%;padding:1 1 1 1;background-color:gray;font-weight:bold;text-align:center;color:black;'>Gen07</div>
<div style='border: 2px solid blue;width:5.5%;height100%;position:absolute;top:85%;left:48%;padding:1 1 1 1;background-color:gray;font-weight:bold;text-align:center;color:black;'>Gen08</div>
<div style='border: 2px solid blue;width:5.5%;height100%;position:absolute;top:85%;left:54.5%;padding:1 1 1 1;background-color:gray;font-weight:bold;text-align:center;color:black;'>Gen09</div>
<div style='border: 2px solid blue;width:5.5%;height100%;position:absolute;top:85%;left:60.5%;padding:1 1 1 1;background-color:gray;font-weight:bold;text-align:center;color:black;'>Gen10</div>
<div style='border: 2px solid blue;width:5.5%;height100%;position:absolute;top:85%;left:67%;padding:1 1 1 1;background-color:gray;font-weight:bold;text-align:center;color:black;'>Gen11</div>
<div style='border: 2px solid blue;width:5.5%;height100%;position:absolute;top:85%;left:73.5%;padding:1 1 1 1;background-color:gray;font-weight:bold;text-align:center;color:black;'>Gen12</div>
<div style='border: 2px solid blue;width:5.5%;height100%;position:absolute;top:85%;left:80.2%;padding:1 1 1 1;background-color:gray;font-weight:bold;text-align:center;color:black;'>Gen13</div>
<div style='border: 2px solid blue;width:5.5%;height100%;position:absolute;top:85%;left:86.5%;padding:1 1 1 1;background-color:gray;font-weight:bold;text-align:center;color:black;'>Gen14</div>
<div style='border: 2px solid blue;width:5.5%;height100%;position:absolute;top:85%;left:93%;padding:1 1 1 1;background-color:gray;font-weight:bold;text-align:center;color:black;'>Gen15</div>






















  </ul>

 


</div>";

  echo " <div id='G1KW' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:71%;left:1%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
 <div id='G2KW' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:71%;left:8%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G3KW' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:71%;left:15%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G4KW' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:71%;left:21.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G5KW'  style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:71%;left:28.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G6KW'  style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:71%;left:35%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G7KW' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:71%;left:41.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G8KW' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:71%;left:48%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G9KW' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:71%;left:54.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G10KW' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:71%;left:60.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G11KW' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:71%;left:67%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G12KW' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:71%;left:73.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G13KW' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:71%;left:80.2%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G14KW' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:71%;left:86.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G15KW' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:71%;left:93%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>";


  
echo " <div id='G1KVAR' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:75%;left:1%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
 <div id='G2KVAR'  style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:75%;left:8%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G3KVAR'  style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:75%;left:15%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G4KVAR' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:75%;left:21.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G5KVAR' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:75%;left:28.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G6KVAR' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:75%;left:35%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G7KVAR' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:75%;left:41.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G8KVAR' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:75%;left:48%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G9KVAR' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:75%;left:54.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G10KVAR' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:75%;left:60.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G11KVAR' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:75%;left:67%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G12KVAR' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:75%;left:73.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G13KVAR' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:75%;left:80.2%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G14KVAR' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:75%;left:86.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G15KVAR' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:75%;left:93%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>";

echo " <div id='G1L' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:79%;left:1%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
 <div id='G2L' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:79%;left:8%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G3L' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:79%;left:15%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G4L' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:79%;left:21.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G5L' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:79%;left:28.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G6L' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:79%;left:35%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G7L' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:79%;left:41.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G8L' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:79%;left:48%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G9L' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:79%;left:54.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G10L' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:79%;left:60.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G11L' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:79%;left:67%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G12L' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:79%;left:73.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G13L' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:79%;left:80.2%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G14L' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:79%;left:86.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G15L' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:79%;left:93%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>";

echo " <div id='G1PF' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:83%;left:1%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
 <div id='G2PF'  style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:83%;left:8%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G3PF'  style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:83%;left:15%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G4PF' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:83%;left:21.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G5PF' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:83%;left:28.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G6PF' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:83%;left:35%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G7PF' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:83%;left:41.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G8PF' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:83%;left:48%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G9PF' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:83%;left:54.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G10PF' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:83%;left:60.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G11PF' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:83%;left:67%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G12PF' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:83%;left:73.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G13PF' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:83%;left:80.2%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G14PF' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:83%;left:86.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div id='G15PF' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:83%;left:93%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>";

echo " <div id='G1F' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:87%;left:1%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
 <div  id='G2F' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:87%;left:8%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div  id='G3F' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:87%;left:15%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div  id='G4F' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:87%;left:21.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div  id='G5F' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:87%;left:28.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div  id='G6F' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:87%;left:35%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div  id='G7F' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:87%;left:41.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div  id='G8F' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:87%;left:48%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div  id='G9F' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:87%;left:54.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div  id='G10F' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:87%;left:60.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div  id='G11F' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:87%;left:67%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div  id='G12F' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:87%;left:73.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div  id='G13F' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:87%;left:80.2%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div  id='G14F' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:87%;left:86.5%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>
<div  id='G15F' style='border: 2px solid black;width:5.9%;height100%;position:absolute;top:87%;left:93%;padding:1 1 1 1;background-color:black;font-weight:bold;text-align:center;color:white;font-size:100%;';></div>";

  }
  


?>

  
  
<script>
var green = new Image(); 
green.src='g4.png';
var yellow = new Image(); 
yellow.src='g5.png';
var grey = new Image(); 
grey.src='g3.png';
var blue = new Image(); 
blue.src='g1.png';
var black = new Image(); 
black.src='busbar2.png';
var buss = new Image(); 
buss.src='busbar.png';
var bclose = new Image(); 
bclose.src='b.png';
var bopen = new Image(); 
bopen.src='b1.png';
var x1=document.getElementById('g1a');
var x2=document.getElementById('g2');
var x3=document.getElementById('g3');
var x4=document.getElementById('g4');
var x5=document.getElementById('g5');
var x6=document.getElementById('g6');
var x7=document.getElementById('g7');
var x8=document.getElementById('g8');
var x9=document.getElementById('g9');
var x10=document.getElementById('g10');
var x11=document.getElementById('g11');
var x12=document.getElementById('g12');
var x13=document.getElementById('g13');
var x14=document.getElementById('g14');
var x15=document.getElementById('g15');
var bus=document.getElementById('busbar');
var status1=null;var status2=null;var status3=null;var status4=null;var status5=null;
var status6=null;var status7=null;var status8=null;var status9=null;var status10=null;
var status11=null;var status12=null;var status13=null;var status14=null;var status15=null;

var b1=document.getElementById('breaker1');
var b2=document.getElementById('breaker2');
var b3=document.getElementById('breaker3');
var b4=document.getElementById('breaker4');
var b5=document.getElementById('breaker5');
var b6=document.getElementById('breaker6');
var b7=document.getElementById('breaker7');
var b8=document.getElementById('breaker8');
var b9=document.getElementById('breaker9');
var b10=document.getElementById('breaker10');
var b11=document.getElementById('breaker11');
var b12=document.getElementById('breaker12');
var b13=document.getElementById('breaker13');
var b14=document.getElementById('breaker14');
var b15=document.getElementById('breaker15');




setInterval(function () { updateChart() }, 500);
 


function updateChart() {


$.post("status.php",
                function (data)
                {  
				
				ccc=data;
				status1=ccc[0];status2=ccc[1];status3=ccc[2];status4=ccc[3];status5=ccc[4];
				
				status6=ccc[5];status7=ccc[6];status8=ccc[7];status9=ccc[8];status10=ccc[9];
				
				
				status11=ccc[10];status12=ccc[11];status13=ccc[12];status14=ccc[13];status15=ccc[14];
 				



 
 
				});








$.post("bvl1n.php",
                function (data)
                {  
				
				////alert("data");
				////alert(data);
				
				ccc=data;
 document.getElementById("BVL1N").innerHTML = (ccc[0])+" V";
 document.getElementById("BVL2N").innerHTML = (ccc[1])+" V";
 document.getElementById("BVL3N").innerHTML = (ccc[2])+" V";
  document.getElementById("BVL12").innerHTML = (ccc[3])+" V";
 document.getElementById("BVL23").innerHTML = (ccc[4])+" V";
 document.getElementById("BVL31").innerHTML = (ccc[5])+" V";
 
document.getElementById("BKW").innerHTML = (ccc[6])+" kW";
 document.getElementById("BKVAR").innerHTML = (ccc[7])+" kVAr";
 				
				
if (ccc[1]<100){
				
				//alert('hey');
				bus.setAttribute('src',black.src);
			}

else {
	
				bus.setAttribute('src',buss.src);
	
}


 
 
				});

$.post("g1.php",
                function (data)
                {  
				
				////alert("data");
				////alert(data);
				
				ccc=data;
document.getElementById("G1KW").innerHTML = (ccc[0])+" kW";
 document.getElementById("G1KVAR").innerHTML = (ccc[1])+" kVAr";
 document.getElementById("G1L").innerHTML = (ccc[2])+" %";
 document.getElementById("G1PF").innerHTML = (ccc[3])+" pf";
 document.getElementById("G1F").innerHTML = (ccc[4])+" Hz";
 
 if(ccc[2]>3){b1.setAttribute('src',bclose.src);}
 else{ b1.setAttribute('src',bopen.src);}
 
 
 //	alert(typeof(ccc[4]));			
 if (status1>0){
if (ccc[4]>23){
				
				//alert('hey');
				x1.setAttribute('src',green.src);
			}
				
if (ccc[4]<=23){
				
				//alert('hey');
				x1.setAttribute('src',blue.src);
 }}
 else{
	 x1.setAttribute('src',grey.src);
 }




 
 
				});
				

$.post("g2.php",
                function (data)
                {  
				
				////alert("data");
				////alert(data);
				
				ccc=data;
document.getElementById("G2KW").innerHTML = (ccc[0])+" kW";
 document.getElementById("G2KVAR").innerHTML = (ccc[1])+" kVAr";
 document.getElementById("G2L").innerHTML = (ccc[2])+" %";
 document.getElementById("G2PF").innerHTML = (ccc[3])+" pf";
 document.getElementById("G2F").innerHTML = (ccc[4])+" Hz";
 	//alert(typeof(ccc[4]));	
	
	if(ccc[2]>3){b2.setAttribute('src',bclose.src);}
 else{ b2.setAttribute('src',bopen.src);}
 
if(status2>0){	
 if (ccc[4]>23){
				
				//alert('hey');
				x2.setAttribute('src',green.src);
			}
				
if (ccc[4]<=23){
				
				//alert('hey');
				x2.setAttribute('src',blue.src);
			}}
 else{
	 x2.setAttribute('src',grey.src);
 }


				});				
				

$.post("g3.php",
                function (data)
                {  
				
				////alert("data");
				////alert(data);
				
				ccc=data;
document.getElementById("G3KW").innerHTML = (ccc[0])+" kW";
 document.getElementById("G3KVAR").innerHTML = (ccc[1])+" kVAr";
 document.getElementById("G3L").innerHTML = (ccc[2])+" %";
 document.getElementById("G3PF").innerHTML = (ccc[3])+" pf";
 document.getElementById("G3F").innerHTML = (ccc[4])+" Hz";
 if(ccc[2]>3){b3.setAttribute('src',bclose.src);}
 else{ b3.setAttribute('src',bopen.src);}
 
 			if(status3>0){	
if (ccc[4]>23){
				
				//alert('hey');
				x3.setAttribute('src',green.src);
			}
				
if (ccc[4]<=23){
				
				//alert('hey');
				x3.setAttribute('src',blue.src);
			}}
 else{
	 x3.setAttribute('src',grey.src);
 }
 
				});	
				

$.post("g4.php",
                function (data)
                {  
				
				////alert("data");
				////alert(data);
				
				ccc=data;
document.getElementById("G4KW").innerHTML = (ccc[0])+" kW";
 document.getElementById("G4KVAR").innerHTML = (ccc[1])+" kVAr";
 document.getElementById("G4L").innerHTML = (ccc[2])+" %";
 document.getElementById("G4PF").innerHTML = (ccc[3])+" pf";
 document.getElementById("G4F").innerHTML = (ccc[4])+" Hz";
 if(ccc[2]>3){b4.setAttribute('src',bclose.src);}
 else{ b4.setAttribute('src',bopen.src);}
 
 if(status4>0){
 if (ccc[4]>23){
				
				//alert('hey');
				x4.setAttribute('src',green.src);
			}
				
if (ccc[4]<=23){
				
				//alert('hey');
				x4.setAttribute('src',blue.src);
			}}
 else{
	 x4.setAttribute('src',grey.src);
 }
 				
				});
				
				

$.post("g5.php",
                function (data)
                {  
				
				////alert("data");
				////alert(data);
				
				ccc=data;
document.getElementById("G5KW").innerHTML = (ccc[0])+" kW";
 document.getElementById("G5KVAR").innerHTML = (ccc[1])+" kVAr";
 document.getElementById("G5L").innerHTML = (ccc[2])+" %";
 document.getElementById("G5PF").innerHTML = (ccc[3])+" pf";
 document.getElementById("G5F").innerHTML = (ccc[4])+" Hz";
 if(ccc[2]>3){b5.setAttribute('src',bclose.src);}
 else{ b5.setAttribute('src',bopen.src);}
 
 if(status5>0){
 if (ccc[4]>23){
				
				//alert('hey');
				x5.setAttribute('src',green.src);
			}
				
if (ccc[4]<=23){
				
				//alert('hey');
				x5.setAttribute('src',blue.src);
			}}
 else{
	 x5.setAttribute('src',grey.src);
 }
 				
				});
				
				

$.post("g6.php",
                function (data)
                {  
				
				////alert("data");
				////alert(data);
				
				ccc=data;
document.getElementById("G6KW").innerHTML = (ccc[0])+" kW";
 document.getElementById("G6KVAR").innerHTML = (ccc[1])+" kVAr";
 document.getElementById("G6L").innerHTML = (ccc[2])+" %";
 document.getElementById("G6PF").innerHTML = (ccc[3])+" pf";
 document.getElementById("G6F").innerHTML = (ccc[4])+" Hz";
 if(ccc[2]>3){b6.setAttribute('src',bclose.src);}
 else{ b6.setAttribute('src',bopen.src);}
 
 if(status6>0){
 if (ccc[4]>23){
				
				//alert('hey');
				x6.setAttribute('src',green.src);
			}
				
if (ccc[4]<=23){
				
				//alert('hey');
				x6.setAttribute('src',blue.src);
			}}
 else{
	 x6.setAttribute('src',grey.src);
 }
 				
				});

$.post("g7.php",
                function (data)
                {  
				
				////alert("data");
				////alert(data);
				
				ccc=data;
document.getElementById("G7KW").innerHTML = (ccc[0])+" kW";
 document.getElementById("G7KVAR").innerHTML = (ccc[1])+" kVAr";
 document.getElementById("G7L").innerHTML = (ccc[2])+" %";
 document.getElementById("G7PF").innerHTML = (ccc[3])+" pf";
 document.getElementById("G7F").innerHTML = (ccc[4])+" Hz";
 if(ccc[2]>3){b7.setAttribute('src',bclose.src);}
 else{ b7.setAttribute('src',bopen.src);}
 
 if(status7>0){
 if (ccc[4]>23){
				
				//alert('hey');
				x7.setAttribute('src',green.src);
			}
				
if (ccc[4]<=23){
				
				//alert('hey');
				x7.setAttribute('src',blue.src);
			}}
 else{
	 x7.setAttribute('src',grey.src);
 }
 				
				});
				

$.post("g8.php",
                function (data)
                {  
				
				////alert("data");
				////alert(data);
				
				ccc=data;
document.getElementById("G8KW").innerHTML = (ccc[0])+" kW";
 document.getElementById("G8KVAR").innerHTML = (ccc[1])+" kVAr";
 document.getElementById("G8L").innerHTML = (ccc[2])+" %";
 document.getElementById("G8PF").innerHTML = (ccc[3])+" pf";
 document.getElementById("G8F").innerHTML = (ccc[4])+" Hz";
 if(ccc[2]>3){b8.setAttribute('src',bclose.src);}
 else{ b8.setAttribute('src',bopen.src);}
 
 if(status8>0){
 				if (ccc[4]>23){
				
				//alert('hey');
				x8.setAttribute('src',green.src);
			}
				
if (ccc[4]<=23){
				
				//alert('hey');
				x8.setAttribute('src',blue.src);
			}}
 else{
	 x8.setAttribute('src',grey.src);
 }
				});
	
$.post("g9.php",
                function (data)
                {  
				
				////alert("data");
				////alert(data);
				
				ccc=data;
document.getElementById("G9KW").innerHTML = (ccc[0])+" kW";
 document.getElementById("G9KVAR").innerHTML = (ccc[1])+" kVAr";
 document.getElementById("G9L").innerHTML = (ccc[2])+" %";
 document.getElementById("G9PF").innerHTML = (ccc[3])+" pf";
 document.getElementById("G9F").innerHTML = (ccc[4])+" Hz";
 if(ccc[2]>3){b9.setAttribute('src',bclose.src);}
 else{ b9.setAttribute('src',bopen.src);}
 
 if(status9>0){
 				if (ccc[4]>23){
				
				//alert('hey');
				x9.setAttribute('src',green.src);
			}
				
if (ccc[4]<=23){
				
				//alert('hey');
				x9.setAttribute('src',blue.src);
			}}
 else{
	 x9.setAttribute('src',grey.src);
 }
				});
				

$.post("g10.php",
                function (data)
                {  
				
				////alert("data");
				////alert(data);
				
				ccc=data;
document.getElementById("G10KW").innerHTML = (ccc[0])+" kW";
 document.getElementById("G10KVAR").innerHTML = (ccc[1])+" kVAr";
 document.getElementById("G10L").innerHTML = (ccc[2])+" %";
 document.getElementById("G10PF").innerHTML = (ccc[3])+" pf";
 document.getElementById("G10F").innerHTML = (ccc[4])+" Hz";
 if(ccc[2]>3){b10.setAttribute('src',bclose.src);}
 else{ b10.setAttribute('src',bopen.src);}
 
 
 if(status10>0){
 if (ccc[4]>23){
				
				//alert('hey');
				x10.setAttribute('src',green.src);
			}
				
if (ccc[4]<=23){
				
				//alert('hey');
				x10.setAttribute('src',blue.src);
			}}
 else{
	 x10.setAttribute('src',grey.src);
 }
 				
				});

$.post("g11.php",
                function (data)
                {  
				
				////alert("data");
				////alert(data);
				
				ccc=data;
document.getElementById("G11KW").innerHTML = (ccc[0])+" kW";
 document.getElementById("G11KVAR").innerHTML = (ccc[1])+" kVAr";
 document.getElementById("G11L").innerHTML = (ccc[2])+" %";
 document.getElementById("G11PF").innerHTML = (ccc[3])+" pf";
 document.getElementById("G11F").innerHTML = (ccc[4])+" Hz";
 if(ccc[2]>3){b11.setAttribute('src',bclose.src);}
 else{ b11.setAttribute('src',bopen.src);}
 
 if(status11>0){
 if (ccc[4]>23){
				
				//alert('hey');
				x11.setAttribute('src',green.src);
			}
				
if (ccc[4]<=23){
				
				//alert('hey');
				x11.setAttribute('src',blue.src);
			}}
 else{
	 x11.setAttribute('src',grey.src);
 }
 				
				});
		
$.post("g12.php",
                function (data)
                {  
				
				////alert("data");
				////alert(data);
				
				ccc=data;
document.getElementById("G12KW").innerHTML = (ccc[0])+" kW";
 document.getElementById("G12KVAR").innerHTML = (ccc[1])+" kVAr";
 document.getElementById("G12L").innerHTML = (ccc[2])+" %";
 document.getElementById("G12PF").innerHTML = (ccc[3])+" pf";
 document.getElementById("G12F").innerHTML = (ccc[4])+" Hz";
 if(ccc[2]>3){b12.setAttribute('src',bclose.src);}
 else{ b12.setAttribute('src',bopen.src);}
 
 
 if(status12>0){
 				if (ccc[4]>23){
				
				//alert('hey');
				x12.setAttribute('src',green.src);
			}
				
if (ccc[4]<=23){
				
				//alert('hey');
				x12.setAttribute('src',blue.src);
			}}
 else{
	 x12.setAttribute('src',grey.src);
 }
				});		
				
$.post("g13.php",
                function (data)
                {  
				
				////alert("data");
				////alert(data);
				
				ccc=data;
document.getElementById("G13KW").innerHTML = (ccc[0])+" kW";
 document.getElementById("G13KVAR").innerHTML = (ccc[1])+" kVAr";
 document.getElementById("G13L").innerHTML = (ccc[2])+" %";
 document.getElementById("G13PF").innerHTML = (ccc[3])+" pf";
 document.getElementById("G13F").innerHTML = (ccc[4])+" Hz";
 if(ccc[2]>3){b13.setAttribute('src',bclose.src);}
 else{ b13.setAttribute('src',bopen.src);}
 
 if(status13>0){
 				if (ccc[4]>23){
				
				//alert('hey');
				x13.setAttribute('src',green.src);
			}
				
if (ccc[4]<=23){
				
				//alert('hey');
				x13.setAttribute('src',blue.src);
			}}
 else{
	 x13.setAttribute('src',grey.src);
 }
				});
	
$.post("g14.php",
                function (data)
                {  
				
				////alert("data");
				////alert(data);
				
				ccc=data;
document.getElementById("G14KW").innerHTML = (ccc[0])+" kW";
 document.getElementById("G14KVAR").innerHTML = (ccc[1])+" kVAr";
 document.getElementById("G14L").innerHTML = (ccc[2])+" %";
 document.getElementById("G14PF").innerHTML = (ccc[3])+" pf";
 document.getElementById("G14F").innerHTML = (ccc[4])+" Hz";
 if(ccc[2]>3){b14.setAttribute('src',bclose.src);}
 else{ b14.setAttribute('src',bopen.src);}
 
 if(status14>0){
 if (ccc[4]>23){
				
				//alert('hey');
				x14.setAttribute('src',green.src);
			}
				
if (ccc[4]<=23){
				
				//alert('hey');
				x14.setAttribute('src',blue.src);
			}}
 else{
	 x14.setAttribute('src',grey.src);
 }
 				
				});	


$.post("g15.php",
                function (data)
                {  
				
				////alert("data");
				////alert(data);
				
				ccc=data;
document.getElementById("G15KW").innerHTML = (ccc[0])+" kW";
 document.getElementById("G15KVAR").innerHTML = (ccc[1])+" kVAr";
 document.getElementById("G15L").innerHTML = (ccc[2])+" %";
 document.getElementById("G15PF").innerHTML = (ccc[3])+" pf";
 document.getElementById("G15F").innerHTML = (ccc[4])+" Hz";
 if(ccc[2]>3){b15.setAttribute('src',bclose.src);}
 else{ b15.setAttribute('src',bopen.src);}
 
 if(status15>0){
 if (ccc[4]>23){
				
				//alert('hey');
				x15.setAttribute('src',green.src);
			}
				
if (ccc[4]<=23){
				
				//alert('hey');
				x15.setAttribute('src',blue.src);
			}}
 else{
	 x15.setAttribute('src',grey.src);
 }
 				
				});				
				
};
</script>
  
  
  
  
  
  
  
  
</body>
</html>
