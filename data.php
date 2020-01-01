<?php
include('config.php');
include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width" />
<meta name="description" content="white cap"/>
<meta name="keywords" content="whitecap,home service,plumbing,electrician,décors,interior,building design"/>
<meta name="author" content="shashi"/>
<title>White cap</title>
<!-- Font -->
<link href="http://allfont.net/allfont.css?fonts=comic-sans-ms" rel="stylesheet" type="text/css" />

<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
<link rel="stylesheet" href="css/datacss.css">

<link href='delstyle.css' rel='stylesheet' type='text/css'>
<script src='jquery-3.0.0.js' type='text/javascript'></script>
<script src='script.js' type='text/javascript'></script>



<style media="screen">
#ana{
	background-color:green;
	height:40px;
	border:none;
	cursor:pointer;
	color:white;
	font-weight:bold;
}
</style>

<script src="js/modaljqueryjs.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="css/modaljquerycss.css" type="text/css" media="screen" />



<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
function load_data1()
{
var name=document.getElementById( "myorders1" );
 if(name)
 {
  $.ajax({
  type: 'post',
  url: 'dataphp/orders.php',
  data: {
 'showallorders':name.value,
  },
  success: function (response) {
   $( '#display_info1' ).html(response);
  }
  });
 }

 else
 {
  $( '#display_info1' ).html("Please Enter Some Words");
 }
}

function load_data2()
{
var name=document.getElementById( "reg1" );
 if(name)
 {
  $.ajax({
  type: 'post',
  url: 'dataphp/orders.php',
  data: {
 'proff_reg':name.value,
  },
  success: function (response) {
   $( '#display_info2' ).html(response);
  }
  });
 }

 else
 {
  $( '#display_info2' ).html("Please Enter Some Words");
 }
}


function load_data3()
{
var name=document.getElementById( "reg2" );
 if(name)
 {
  $.ajax({
  type: 'post',
  url: 'dataphp/orders.php',
  data: {
 'supp_reg':name.value,
  },
  success: function (response) {
   $( '#display_info3' ).html(response);
  }
  });
 }

 else
 {
  $( '#display_info3' ).html("Please Enter Some Words");
 }
}


function load_data4()
{
var name=document.getElementById( "reg3" );
 if(name)
 {
  $.ajax({
  type: 'post',
  url: 'dataphp/orders.php',
  data: {
 'part_reg':name.value,
  },
  success: function (response) {
   $( '#display_info4' ).html(response);
  }
  });
 }

 else
 {
  $( '#display_info4' ).html("Please Enter Some Words");
 }
}



function load_data5()
{
var name=document.getElementById( "reg4" );
 if(name)
 {
  $.ajax({
  type: 'post',
  url: 'dataphp/orders.php',
  data: {
 'inves_reg':name.value,
  },
  success: function (response) {
   $( '#display_info5' ).html(response);
  }
  });
 }

 else
 {
  $( '#display_info5' ).html("Please Enter Some Words");
 }
}



function load_data6()
{
var name=document.getElementById( "reg5" );
 if(name)
 {
  $.ajax({
  type: 'post',
  url: 'dataphp/orders.php',
  data: {
 'inbox_reg':name.value,
  },
  success: function (response) {
   $( '#display_info6' ).html(response);
  }
  });
 }

 else
 {
  $( '#display_info6' ).html("Please Enter Some Words");
 }
}

</script>
</head>
<body>
<header>
  <img src="img/logo.png"/>
  <a href="data.php"><Button>HOME</Button></a>
<a href="<?php echo BASE_URL; ?>logout.php"><Button>LOGOUT</Button></a>
</header>
<article>
<script src="js/adminhide.js"></script>



<div class="dbox1" id="dbox1">

<a href="#" onclick="switchVisibleadmin2();"><div class="blo1">
  <img src="img/or.png"/>
  <p>Orders</p>
</div></a>

<a href="#" onclick="switchVisibleadmin3();"><div class="blo2">
  <img src="img/prof.png"/>
  <p>Professionals</p>
</div></a>

<a href="#" onclick="switchVisibleadmin4();"><div class="blo3">
  <img src="img/sup.png"/>
  <p>Suppliers</p>
</div></a>


<a href="#" onclick="switchVisibleadmin5();"><div class="blo4">
  <img src="img/par.png"/>
  <p>Partners</p>
</div></a>

<a href="#" onclick="switchVisibleadmin6();"><div class="blo5">
  <img src="img/inv.png"/>
  <p>Investors</p>
</div></a>

<a href="#" onclick="switchVisibleadmin7();"><div class="blo6">
  <img src="img/cot.png"/>
  <p>Inbox</p>
</div></a>
</div>




<div class="dbox2" id="dbox2">
<center>
<fieldset>
<legend>Your Orders Will Be  Displayed Below</legend>
<br>
<label>Clik Me to See Orders: </label>
<input type="submit" name="showallorders" id="myorders1" onclick="load_data1()" Value="SHOW ALL"/>
<br><br>
</fieldset>
<br>
<div id="display_info1"></div>
</center>
</div>






<div class="dbox3" id="dbox3">
  <center>
  <fieldset>
  <legend>Registered Professionals Will Be  Displayed Below</legend>
  <br>
  <label>Clik Me to See Registrations: </label>
  <input type="submit" name="proff_reg" id="reg1" onclick="load_data2()" Value="SHOW ALL"/>
  <br><br>
  </fieldset>
  <br>
  <div id="display_info2"></div>
  </center>
</div>


<div class="dbox4" id="dbox4">
  <center>
  <fieldset>
  <legend>Registered Suppliers Will Be  Displayed Below</legend>
  <br>
  <label>Clik Me to See Registrations: </label>
  <input type="submit" name="supp_reg" id="reg2" onclick="load_data3()" Value="SHOW ALL"/>
  <br><br>
  </fieldset>
  <br>
  <div id="display_info3"></div>
  </center>
</div>


<div class="dbox5" id="dbox5">
  <center>
  <fieldset>
  <legend>Registered Partners Will Be  Displayed Below</legend>
  <br>
  <label>Clik Me to See Registrations: </label>
  <input type="submit" name="part_reg" id="reg3" onclick="load_data4()" Value="SHOW ALL"/>
  <br><br>
  </fieldset>
  <br>
  <div id="display_info4"></div>
  </center>
</div>



<div class="dbox6" id="dbox6">
  <center>
  <fieldset>
  <legend>Registered Investors Will Be  Displayed Below</legend>
  <br>
  <label>Clik Me to See Registrations: </label>
  <input type="submit" name="inves_reg" id="reg4" onclick="load_data5()" Value="SHOW ALL"/>
  <br><br>
  </fieldset>
  <br>
  <div id="display_info5"></div>
  </center>
</div>


<div class="dbox7" id="dbox7">
  <center>
  <fieldset>
  <legend>People Who Inboxed Will Be  Displayed Below</legend>
  <br>
  <label>Clik Me to See Messages: </label>
  <input type="submit" name="inbox_reg" id="reg5" onclick="load_data6()" Value="SHOW ALL"/>
  <br><br>
  </fieldset>
  <br>
  <div id="display_info6"></div>
  </center>
</div>



<br>
<center>
<a href="#dan1" rel="modal:open">
<input id="ana" type="submit" value="SERVICES ANALYSIS"/></a>
</center>
<br>
<div id="dan1" style="display:none;">
<?php
 
$dataPoints = array( 
	array("label"=>"Interior Design", "y"=>46.6),
	array("label"=>"Modular Kitchens", "y"=>20.1),
	array("label"=>"Renovation", "y"=>25.5),
	array("label"=>"Painting", "y"=>7.8)
)
 
?>
<script>
window.onload = function() {
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "theme2",
	animationEnabled: true,
	title: {
		text: "Services Statistics of WhiteCaphs in 2018"
	},
	data: [{
		type: "pie",
		indexLabel: "{y}",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "#36454F",
		indexLabelFontSize: 18,
		indexLabelFontWeight: "bolder",
		showInLegend: true,
		legendText: "{label}",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>

<div id="chartContainer" style="height:450px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<a href="#" rel="modal:close"></a>
</div>

</article>


<footer>
  <p align="center">&copy All Rights Reserved to Whitecaphs-2018</p>
</footer>
</body>
</html>
