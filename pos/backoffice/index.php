<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>

<style type="text/css">

body{
	margin: 0;


}
	
h1{
	
	background: #0D86EA;

	margin-top: 0;
	color: white;
	height: 50px;
	font-family: calibri;

}

#login_box{
	width: 320px;
	height: 50px;
	font-family: calibri;
	font-size: 20px;
}

#login_box1{
	width: 320px;
	height: 50px;
	font-family: calibri;
	font-size: 20px;
	margin-left: -84px;
}

#submit_box{
	margin-top: 20px;
	width: 80px;
	height: 57px;
	background-color:#30B1EF ;
	color: white;
	border-radius: 15%;
	font-size: 18px;
}

#error{
	color: red;
	font-family: calibri;
	font-size: 20px;
}

#box{
	width: 500px;
	height: 400px;
	background: #168BD8;
	border-radius: 5%;
	display: block;
	margin:auto;
	margin-top: 50px;
}

h2, h3{
	font-family: arial;

}
img{
	display: block;
	margin:auto;

}

#identify{
	height: 160px;

}
</style>

<body>

<center><h1>Welcome to RMS | Back Office</h1></center>

<center><img id = "identify" src="logo.png"></center>
<center><h3>Please login to the system</h3>


<div id="box">
<center><img id = "identify" src="lock.png"></center>

<center><form method="post" name="login">
	<p></p>
<input type="text" name="username"  id="login_box1" placeholder="Username" autocomplete="off">
<input type="password" name="passcode"  id="login_box" placeholder="Password" autocomplete="off">
<input type="submit" name="login" value="Enter" id="submit_box">



</form></center>
</div>

<?php 
error_reporting(0);
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$passcode = $_POST['passcode'];
	mysql_connect("localhost", "root", "");
	mysql_select_db("pos");
	$check_info = mysql_query("SELECT * from bo_users where username = '$username' and password = '$passcode' ");
	$level_info = mysql_fetch_array($check_info);
	$level = $level_info[2];
	$check = mysql_num_rows($check_info);
	if ($check > 0) {
		echo "<meta http-equiv='Refresh' content='0;url=bo_dashboard.php?user=$username&level=$level'>";
	}
	else{
		echo "<center><p id = 'error'>Identification has not been recognised</p></center>";

	}
}
 ?>

</body>
</html>


