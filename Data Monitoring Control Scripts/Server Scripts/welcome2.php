
<!doctype html>
<html>

<head>
<title>Raspbian Real Time Smart Meter</title>
<link rel="stylesheet" type="text/css"  href="firstfile.css">
<script type="text/javascript" src="jquery-3.2.1.min.js" ></script>
<style type="text/css">
	#spp{ font-weight:bold;
		font-size:230%;
		color:#FFFF00;
		}
	#s{ float:left;
	    font-weight:bold;
	    font-size:150%;
            color:#FFFFFF;
	    width:75%;
		}
	#err{color:#FFFF00;
		font-size:150%;
		font-weight:bold;}
	#msg{color:#FFFF00;
		font-size:100%;
		font-weight:bold;
	}
	#ord{color:#00FFFF;
		font-size:80%;
		font-weight:bold;}
	#ord:hover{ color:#FFFFFF;}
	#q1{ font-size:110%;
	color:#FFFF00;}
</style>
</head>

<body>

			<?php
			$already=0;
			session_start();
			if (isset($_SESSION['id'])){$already=1;$id=$_SESSION['id'];}
			else {$already=0;}
			
			if ($already==1){
			$servername = "localhost";
$username = "wali";
$password = "pi";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM UserData where id=$id";
$result = $conn->query($sql);
$fin=0;$id=0;

    // output data of each row
	
    while($row = $result->fetch_assoc()) 
        {$fin=1;$id=$row["id"];
			$name=$row["username"];
			$email=$row["email"];
			$pwd=$row["password"];
			$city=$row["city"];
			$area=$row["area"];
			$consno=$row["consno"];
			$mobno=$row["mobno"];
			$meterno=$row["meterno"];
			$CNIC=$row["CNIC"];
			$reg_date=$row["reg_date"];break;}

 

		$conn->close();
			
			
			
			
			}
			
			
if($already==0)		{	
$check=1;
$name=$email=$pwd="";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
//Name Validation
$name = test_input($_POST["Name"]);
$pwd = test_input($_POST["pwd"]);

if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  echo  "<h1 id='err'>ERROR IN SUBMITTING FORM<br></h1>";
  echo  "<div id='msg'>Only letters and white space allowed in name Plz fill the form correctly !!!</div>";
  $check=0;
}
//EmailAddress Validation
$email = test_input($_POST["EmailAddress"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "<br>","<div id='msg'>Invalid email format Plz Fill form correctly !!!</div>";
  $check=0;  
}
}

?>


<?php

if($already==0){
	if($check!=0)
		
	{	
$servername = "localhost";
$username = "wali";
$password = "pi";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id ,username,city,area,consno,CNIC,meterno,mobno,password,email,reg_date FROM UserData";
$result = $conn->query($sql);
$fin=0;
if ($result->num_rows > 0) {
    // output data of each row
	for( $i=0;$i<($result->num_rows);$i++){
    while($row = $result->fetch_assoc()) {
        if ($row["username"]!= $name){break;}
		else if ($row["password"]!=$pwd){break;} 
		else if($row["email"]!=$email){break;}
		else {$fin=1;$id=$row["id"];
			$name=$row["username"];
			$email=$row["email"];
			$pwd=$row["pwd"];
			$city=$row["city"];
			$area=$row["area"];
			$consno=$row["consno"];
			$mobno=$row["mobno"];
			$meterno=$row["meterno"];
			$CNIC=$row["CNIC"];
			$reg_date=$row["reg_date"];break;}
}}
} else {
    echo "0 results";
}
$conn->close();


if ($fin!=0)
{/*$myfile=fopen("log.txt","w");
		fwrite($myfile,$name);
		fwrite($myfile,"<br>");
		fwrite($myfile,$email);
		fwrite($myfile,"<br>");
		fwrite($myfile,$pwd);
		fwrite($myfile,"<br>"); */
		
		
	
}
if($fin==0){echo "<h1 id='msg'>NO SUCH USER EXIST </h1>";}
	
	}
else
	{echo "<h1 ><a id='ord' href='login.html'>SUBMIT FORM AGAIN</a></h1>";}
}
?>
  
<?php if (($fin!=0)||($already==1))
	{echo " <div  id='container'>
		<div id='MC'>
			<div id='content'>
				<h1 id='Titl'>Raspbian Real Time Smart Meter</h1>
				<div id='box' width='109%'>
					<h2 id='sty'>FYP  2014-15</h2>
				</div>
			</div>";
			  
			 
			
			
			echo "<ul id='menu' >
				<li><a href='welcome2.php'>$name profile</a></li>
				<li><a href='bill.php'>Bill</a></li>
				<li><a href='dbb.php'>Database</a></li>
				<li><a href='contact.php'>Contact Us</a></li>
				<li><a href='index1.php'>Log Out</a></li>
			</ul>
				}
			
	</div>";
	echo "<div id='test'>
	

	<img src='reb1.gif' height='60px' width='105%' /></div>";
	
	

		
		
	echo	"<h3 id='spp' >YOUR PROFILE INFORMATION </h3>
				<p id='q1'></p>
				<ul id='q1'>
					<li><pre style='font-size:250%;'>UserName is    :$name</li></pre><br>
					<li><pre style='font-size:250%;'>UserID   is    :$id</li></pre><br>
					<li><pre style='font-size:250%;'>EmailAddress   :$email</li></pre><br>
					<li><pre style='font-size:250%;'>CNIC           :$CNIC</li></pre><br>
					<li><pre style='font-size:250%;'>Consumer No    :$consno</li></pre><br>
					<li><pre style='font-size:250%;'>Mobile No      :$mobno</li></pre><br>
					<li><pre style='font-size:250%;'>Meter No       :$meterno</li></pre><br>
					<li><pre style='font-size:250%;'>City           :$city</li></pre><br>
					<li><pre style='font-size:250%;'>Area           :$area</li></pre><br>
				<br>
				<br><br><br><br>
				</ul>
			    


</div>";
		
		echo 	"<br>
			<br>";
session_start(); // start the session 
$_SESSION['id']=$id;


  
  
  
  
  }
  ?>
  
  
	<div id="test">
	

	<img src="reb1.gif" height="60px" width="103%" /></div>
	<div id="bottom">Copyrights NEDUET</div>

</body>

</html>

