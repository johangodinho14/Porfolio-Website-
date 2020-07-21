<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href="https://fonts.googleapis.com/css?family=Bowlby+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	
	<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
</head>

<style type="text/css">
body, html {
    height: 100%;
    margin: 0;
    background-color: #33D2FF;
}




	
input:focus, textarea:focus, select:focus{
        outline: none;
    }

h1{
	font-family: 'Bowlby One', cursive;
	color: white;
	font-size: 100px;  
	}



h3{
	font-family: 'PT Sans', sans-serif;
	color: black;

}

#passcode_section{
	background: white;
	width: 500px;
	height: 250px;
	display: block;
	margin:auto;
	border-radius: 20px;
	padding: 20px;

}

#other_options{
	background: white;
	width: 500px;
	height: 220px;
	display: block;
	margin:auto;
	border-radius: 20px;
	padding: 20px;
	margin-top: 20px;

}

#passcode_design{
	width: 430px;
	height: 40px;
	font-size: 16px;
	border: none;
	border-bottom: solid 3px grey;

}

#done_design{
	width: 430px;
	height: 40px;
	font-size: 17px;
	border: none;
	background-color:#08B3F3;
	color: white;
}

#done_design1{

	width: 230px;
	height: 50px;
	font-size: 17px;
	border: none;
	background-color:#08B3F3;
	color: white;

	font-size: 17px;
}

#done_design:hover{
	opacity: 0.6;
}

#done_design1:hover{
	opacity: 0.6;
}
h4{
	font-family: 'PT Sans', sans-serif;
	color: black;

}

#error{
	font-family: 'PT Sans', sans-serif;
	color: white;
	font-size: 20px;
}

</style>






<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$timezone = date_default_timezone_get();
date_default_timezone_set('Europe/London');

$date = date('d/m/Y h:i:s a', time());
$date1 = date('d/m/Y'); 
echo "<div class = 'bg'>";
echo "
<body>

<center><h1>RMS</h1></center>
<div id='passcode_section'>
<center><h4>$date</h4></center>
<center><h3>Please enter your passcode </h3>
<form method='post' name='login'>

<center><input type='password' name='passcode' maxlength='4' id='passcode_design' placeholder='Passcode'></p>
<input type='submit' name='login' value='Done' id='done_design'></center></p>



</form>
</div>

<div id = 'other_options'>
	<center><h3>Other Options</h3>
	<form method = 'post'>
	<input type='submit' value='Kitchen' id='done_design1' name = 'kitchen'></p>
	<input type='submit' value='Bar' id='done_design1' name = 'bar'></center>
	</form>
</div>


";





// error_reporting(0);
if(isset($_POST['login'])){
	$password = $_POST['passcode'];
	include "config.php";
	$query = mysqli_query($conn,"SELECT * from users where password = '$password' ");
	$information = mysqli_fetch_array($query);
	$username = $information[0];
	$level = $information[2];
	$auth_result = mysqli_num_rows($query);
	if ($auth_result == 1) {
		echo "<meta http-equiv='Refresh' content='0;url=dashboard.php?data=$username&data1=$level'>";
	}else{
		echo "<center><p id = 'error'>Identification has not been recognised</p></center>";
		echo "<script>alert('User has not been recognised')</script>";
	}
}

elseif (isset($_POST['bar'])) {
	echo "<meta http-equiv='Refresh' content='0;url=bar.php'>";
}

elseif (isset($_POST['kitchen'])) {
	echo "<meta http-equiv='Refresh' content='0;url=kitchen.php'>";
}

echo "<div></body></html>";

?>


