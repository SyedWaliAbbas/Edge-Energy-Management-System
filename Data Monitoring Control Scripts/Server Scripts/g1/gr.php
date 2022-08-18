
<!DOCTYPE html>
<html>
<title>BYCO POWER HOUSE ORC2</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
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

#datee{

position:absolute;
top:40%;
left:17%;
width:70%;
height:50%;
display: inline-block;
font-weight:bold;
font-size:35px;
}




#g1{

width:15%;
height:22%;
position:absolute;
bottom:1%;
left:80%;

}



/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
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

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw2 {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>

</style>






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
    <button onclick="location.href='/byco/scada.php'" style="width:auto" class= "w3-bar-item,w3-button,w3-padding-large,w3-hide-small">HOME </button>
    <button onclick ="location.href='main.php'"  style="width:auto" class="w3-bar-item,w3-button,w3-padding-large,w3-hide-small"> ENGINE</button>
	<button onclick="location.href='generator.php'" style="width:auto" class= "w3-bar-item,w3-button,w3-padding-large,w3-hide-small">GENERATOR </button>
    <button onclick ="location.href='tables.php'"  style="width:auto" class="w3-bar-item,w3-button,w3-padding-large,w3-hide-small"> DATABASE</button>
    <button onclick ="location.href='trends.php'"  style="width:auto" class="w3-bar-item,w3-button,w3-padding-large,w3-hide-small"> TRENDS</button>
	<button onclick ="location.href='gr.php'"  style="width:auto" class="w3-bar-item,w3-button,w3-padding-large,w3-hide-small"> CUSTOMIZED GRAPH</button>
	
	</div>



</div>



<form id='datee' action="g.php" method='Post'>
  <h1 style="position:absolute;left:1%;font-weight:bold;"  >Select Parameter for graph</h1> 
  <select name="parameter" style="position:absolute;left:50%;width:50%;" >
    <option value="op">Oil Pressure</option>
    <option value="ct">Coolant Temperature</option>
    <option value="cav">Charging Alternator Voltage</option>
    <option value="ebv">Battery voltage</option>
	<option value="rpm">RPM</option>
	<option value="gf">Generator Frequency</option>
    <option value="v1">Phase A voltage</option>
    <option value="v2">Phase B voltage</option>
	<option value="v3">Phase C voltage</option>
    <option value="v12">Line 12 voltage</option>
    <option value="v23">Line 23 voltage</option>
	<option value="v31">Line 31 voltage</option>
    <option value="i1">Line 1 Current</option>
    <option value="i2">Line 2 Current</option>
	<option value="i3">Line 3 Current</option>
    <option value="ie">Earth Current</option>
    <option value="w1">Line 1 kW</option>
	<option value="w2">Line 2 kW</option>
    <option value="w3">Line 3 kW</option>
    <option value="bf">Bus Frequency</option>
	<option value="bv1">Bus Phase A voltage</option>
    <option value="bv2">Bus Phase B voltage</option>
	<option value="bv3">Bus Phase C voltage</option>
    <option value="bv12">Bus Line 12 voltage</option>
    <option value="bv23">Bus Line 23 voltage</option>
	<option value="bv31">Bus Line 31 voltage</option>
	<option value="tw">Total kW</option>
	<option value="va1">Line 1 VA</option>
	<option value="va2">Line 2 VA</option>
    <option value="va3">Line 3 VA</option>
	<option value="tva">Total VA</option>
    <option value="var1">Line 1 VAr</option>
	<option value="var2">Line 2 VAr</option>
    <option value="var3">Line 3 VAr</option>
	<option value="tvar">Total VAr</option>
    <option value="pf1">Line 1 pf</option>
	<option value="pf2">Line 2 pf</option>
    <option value="pf3">Line 3 pf</option>
	<option value="tpf">Total pf</option>
	<option value="perc_w">% kW</option>
    <option value="perc_w">% VAr</option>
	<option value="btw">Bus Total kW</option>
    <option value="btvar">Bus Total VAr</option>
    <option value="ert">Engine run time</option>
    <option value="kwh">kWh</option>
    <option value="kvah">kVAh</option>
	<option value="kvah">kVArh</option>
    <option value="starts">starts</option>
	</select>
  <br>
  <h1 style="position:absolute;left:1%;font-weight:bold;"  >From (date and time): </h1>
  <input type="datetime-local" style="position:absolute;left:50%;width:50%;" name="from">
  <br>  
  <h1 style="position:absolute;left:1%;font-weight:bold;"  >From (date and time): </h1>
  <input type="datetime-local" style="position:absolute;left:50%;width:50%;" name="to">
  <br><br>  
  
  <input type="submit">
</form>


	
<img id="g1"  src="g1.png"></img>	






















	

</div>

</body>
</html>
