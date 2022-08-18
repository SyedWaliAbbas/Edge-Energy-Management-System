
<!DOCTYPE html>
<html>
<title>BYCO POWER HOUSE ORC2</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">


<script src="jquery-latest.js"></script>
<script>
(function($)
{
    $(document).ready(function()
    { 
			
        $.ajaxSetup(
        {
            cache: false,
            success: function() {
                $('#v1').show();$('#v2').show();$('#v3').show();
				$('#v12').show();$('#v23').show();$('#v31').show();
				$('#pf1').show();$('#pf2').show();$('#pf3').show();$('#tpf').show();
				$('#starts').show();$('#i2').show();$('#i3').show();$('#i1').show();
				$('#tw').show();$('#tva').show();$('#tvar').show();
				$('#perc_w').show();$('#kwh').show();$('#kvah').show();$('#kvarh').show();
				$('#ert').show();$('#w1').show();$('#w2').show();$('#w3').show();
				$('#va1').show();$('#va2').show();$('#va3').show();
				$('#var1').show();$('#var2').show();$('#var3').show();
				
            }
        });
        var $v1 = $("#v1");var $v2 = $("#v2");var $v3 = $("#v3");
        $v1.load("gen/v1.php");
		$v2.load("gen/v2.php");
		$v3.load("gen/v3.php");
		
        var $v12 = $("#v12");var $v23 = $("#v23");var $v31 = $("#v31");
        $v12.load("gen/v12.php");
		$v23.load("gen/v23.php");
		$v31.load("gen/v31.php");
		
		
        var $pf1 = $("#pf1");var $pf2 = $("#pf2");var $pf3 = $("#pf3");var $tpf = $("#tpf");var $starts = $("#starts");
        $pf1.load("gen/pf1.php");
		$pf2.load("gen/pf2.php");
		$pf3.load("gen/pf3.php");
		$tpf.load("gen/tpf.php");
		$starts.load("gen/starts.php");
		
		
        var $i1 = $("#i1");var $i2 = $("#i2");var $i3 = $("#i3");
        $i1.load("gen/i1.php");
		$i2.load("gen/i2.php");
		$i3.load("gen/i3.php");
		
		
        var $tw = $("#tw");var $tva = $("#tva");var $tvar = $("#tvar");
        $tw.load("gen/tw.php");
		$tva.load("gen/tva.php");
		$tvar.load("gen/tvar.php");
		
		
        var $percw = $("#percw");var $kwh = $("#kwh");var $kvah = $("#kvah");var $kvarh = $("#kvarh");var $ert = $("#ert");
        $percw.load("gen/percw.php");
		$kvah.load("gen/kvah.php");$kwh.load("gen/kwh.php");
		$kvarh.load("gen/kvarh.php");
        $ert.load("gen/ert.php");
		
		
        var $w1 = $("#w1");var $w2 = $("#w2");var $w3 = $("#w3");
        $w1.load("gen/w1.php");
		$w2.load("gen/w2.php");
		$w3.load("gen/w3.php");
        
		var $va1 = $("#va1");var $va2 = $("#va2");var $va3 = $("#va3");
        $va1.load("gen/va1.php");
		$va2.load("gen/va2.php");
		$va3.load("gen/va3.php");
        var $var1 = $("#var1");var $var2 = $("#var2");var $var3 = $("#var3");
        $var1.load("gen/var1.php");
		$var2.load("gen/var2.php");
		$var3.load("gen/var3.php");
        
		
		
		
        var refreshId = setInterval(function()
        {
			
			$v1.load("gen/v1.php");
		$v2.load("gen/v2.php");
		$v3.load("gen/v3.php");
		
		
			$v12.load("gen/v12.php");
		$v23.load("gen/v23.php");
		$v31.load("gen/v31.php");
		
			
			$pf1.load("gen/pf1.php");
		$pf2.load("gen/pf2.php");
		$pf3.load("gen/pf3.php");
		$tpf.load("gen/tpf.php");
		$starts.load("gen/starts.php");
		
		
            $i1.load("gen/i1.php");
		$i2.load("gen/i2.php");
		$i3.load("gen/i3.php");
		
		
			
			$tw.load("gen/tw.php");
		$tva.load("gen/tva.php");
		$tvar.load("gen/tvar.php");
		
			$percw.load("gen/percw.php");
		$kvah.load("gen/kvah.php");$kwh.load("gen/kwh.php");
		$kvarh.load("gen/kvarh.php");
        $ert.load("gen/ert.php");
		
			$w1.load("gen/w1.php");
		$w2.load("gen/w2.php");
		$w3.load("gen/w3.php");
			
			$va1.load("gen/va1.php");
		$va2.load("gen/va2.php");
		$va3.load("gen/va3.php");
			$var1.load("gen/var1.php");
		$var2.load("gen/var2.php");
		$var3.load("gen/var3.php");
        
            
			
        }, 1);
    });
})(jQuery);
</script>
<style>


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





<div id='Phase1' style='Position:absolute;top:22%;left:3%;font-weight:bold;font-size:100%;width:14%;'> PHASE1 VOLTAGE</div>
<div id='Phase2' style='Position:absolute;top:28%;left:3%;font-weight:bold;font-size:100%;width:14%;'> PHASE2 VOLTAGE</div>
<div id='Phase3' style='Position:absolute;top:34%;left:3%;font-weight:bold;font-size:100%;width:14%;'> PHASE3 VOLTAGE</div>
<div id='Line12' style='Position:absolute;top:40%;left:3%;font-weight:bold;font-size:100%;width:14%;'> LINE 1,2  VOLTAGE</div>
<div id='Line23' style='Position:absolute;top:46%;left:3%;font-weight:bold;font-size:100%;width:14%;'> LINE 2,3  VOLTAGE</div>
<div id='Line31' style='Position:absolute;top:52%;left:3%;font-weight:bold;font-size:100%;width:14%;'> LINE 3,1 VOLTAGE</div>
<div id='Line12' style='Position:absolute;top:58%;left:3%;font-weight:bold;font-size:100%;width:14%;'> LINE 1  P.F</div>
<div id='Line23' style='Position:absolute;top:64%;left:3%;font-weight:bold;font-size:100%;width:14%;'> LINE 2  P.F</div>
<div id='Line31' style='Position:absolute;top:70%;left:3%;font-weight:bold;font-size:100%;width:14%;'> LINE 3  P.F</div>
<div id='Line23' style='Position:absolute;top:76%;left:3%;font-weight:bold;font-size:100%;width:14%;'> AVERAGE  P.F</div>
<div id='Line31' style='Position:absolute;top:82%;left:3%;font-weight:bold;font-size:100%;width:14%;'> TOTAL STARTS</div>



<div id='v1' style='Position:absolute;top:22%;left:16%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> PHASE1 VOLTAGE</div>
<div id='v2' style='Position:absolute;top:28%;left:16%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> PHASE2 VOLTAGE</div>
<div id='v3' style='Position:absolute;top:34%;left:16%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> PHASE3 VOLTAGE</div>
<div id='v12' style='Position:absolute;top:40%;left:16%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> LINE 1,2  VOLTAGE</div>
<div id='v23' style='Position:absolute;top:46%;left:16%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> LINE 2,3  VOLTAGE</div>
<div id='v31' style='Position:absolute;top:52%;left:16%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> LINE 3,1 VOLTAGE</div>
<div id='pf1' style='Position:absolute;top:58%;left:16%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> LINE 1  P.F</div>
<div id='pf2' style='Position:absolute;top:64%;left:16%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> LINE 2  P.F</div>
<div id='pf3' style='Position:absolute;top:70%;left:16%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> LINE 3  P.F</div>
<div id='tpf' style='Position:absolute;top:76%;left:16%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> AVERAGE  P.F</div>
<div id='starts' style='Position:absolute;top:82%;left:16%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> TOTAL STARTS</div>





<div id='Phase1' style='Position:absolute;top:22%;left:29%;font-weight:bold;font-size:100%;width:14%;'> LINE1 CURRENT</div>
<div id='Phase2' style='Position:absolute;top:28%;left:29%;font-weight:bold;font-size:100%;width:14%;'> LINE2 CURRENT</div>
<div id='Phase3' style='Position:absolute;top:34%;left:29%;font-weight:bold;font-size:100%;width:14%;'> LINE3 CURRENT</div>
<div id='Line12' style='Position:absolute;top:40%;left:29%;font-weight:bold;font-size:100%;width:14%;'> TOTAL KW</div>
<div id='Line23' style='Position:absolute;top:46%;left:29%;font-weight:bold;font-size:100%;width:14%;'> TOTAL VA</div>
<div id='Line31' style='Position:absolute;top:52%;left:29%;font-weight:bold;font-size:100%;width:14%;'> TOTAL KVAr</div>
<div id='Line12' style='Position:absolute;top:58%;left:29%;font-weight:bold;font-size:100%;width:14%;'> PERCENT LOAD</div>
<div id='Line23' style='Position:absolute;top:64%;left:29%;font-weight:bold;font-size:100%;width:14%;'> kWh</div>
<div id='Line31' style='Position:absolute;top:70%;left:29%;font-weight:bold;font-size:100%;width:14%;'> kVAh</div>
<div id='Line23' style='Position:absolute;top:76%;left:29%;font-weight:bold;font-size:100%;width:14%;'> kVArh</div>
<div id='Line31' style='Position:absolute;top:82%;left:29%;font-weight:bold;font-size:100%;width:14%;'> Running Hours</div>



<div id='i1' style='Position:absolute;top:22%;left:43%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> PHASE1 VOLTAGE</div>
<div id='i2' style='Position:absolute;top:28%;left:43%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> PHASE2 VOLTAGE</div>
<div id='i3' style='Position:absolute;top:34%;left:43%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> PHASE3 VOLTAGE</div>
<div id='tw' style='Position:absolute;top:40%;left:43%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> LINE 1,2  VOLTAGE</div>
<div id='tva' style='Position:absolute;top:46%;left:43%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> LINE 2,3  VOLTAGE</div>
<div id='tvar' style='Position:absolute;top:52%;left:43%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> LINE 3,1 VOLTAGE</div>
<div id='percw' style='Position:absolute;top:58%;left:43%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> LINE 1  P.F</div>
<div id='kwh' style='Position:absolute;top:64%;left:43%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> LINE 2  P.F</div>
<div id='kvah' style='Position:absolute;top:70%;left:43%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> LINE 3  P.F</div>
<div id='kvarh' style='Position:absolute;top:76%;left:43%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> AVERAGE  P.F</div>
<div id='ert' style='Position:absolute;top:82%;left:43%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> TOTAL STARTS</div>





<div id='Phase1' style='Position:absolute;top:22%;left:56%;font-weight:bold;font-size:100%;width:14%;'> LINE1 WATT</div>
<div id='Phase2' style='Position:absolute;top:28%;left:56%;font-weight:bold;font-size:100%;width:14%;'> LINE2 WATT</div>
<div id='Phase3' style='Position:absolute;top:34%;left:56%;font-weight:bold;font-size:100%;width:14%;'> LINE3 WATT</div>
<div id='Line12' style='Position:absolute;top:40%;left:56%;font-weight:bold;font-size:100%;width:14%;'> LINE1 VA</div>
<div id='Line23' style='Position:absolute;top:46%;left:56%;font-weight:bold;font-size:100%;width:14%;'> LINE2 VA</div>
<div id='Line31' style='Position:absolute;top:52%;left:56%;font-weight:bold;font-size:100%;width:14%;'> LINE3 VA</div>
<div id='Line12' style='Position:absolute;top:58%;left:56%;font-weight:bold;font-size:100%;width:14%;'> LINE1 VAr</div>
<div id='Line23' style='Position:absolute;top:64%;left:56%;font-weight:bold;font-size:100%;width:14%;'> LINE2 VAr</div>
<div id='Line31' style='Position:absolute;top:70%;left:56%;font-weight:bold;font-size:100%;width:14%;'> LINE3 VAr</div>



<div id='w1' style='Position:absolute;top:22%;left:69%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> PHASE1 VOLTAGE</div>
<div id='w2' style='Position:absolute;top:28%;left:69%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> PHASE2 VOLTAGE</div>
<div id='w3' style='Position:absolute;top:34%;left:69%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> PHASE3 VOLTAGE</div>
<div id='va1' style='Position:absolute;top:40%;left:69%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> LINE 1,2  VOLTAGE</div>
<div id='va2' style='Position:absolute;top:46%;left:69%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> LINE 2,3  VOLTAGE</div>
<div id='va3' style='Position:absolute;top:52%;left:69%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> LINE 3,1 VOLTAGE</div>
<div id='var1' style='Position:absolute;top:58%;left:69%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> LINE 1  P.F</div>
<div id='var2' style='Position:absolute;top:64%;left:69%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> LINE 2  P.F</div>
<div id='var3' style='Position:absolute;top:70%;left:69%;font-weight:bold;font-size:100%;width:14%;color:green;text-align:center;'> LINE 3  P.F</div>



















	
<img id="g1"  src="g1.png"></img>	






















	

</div>

</body>
</html>
