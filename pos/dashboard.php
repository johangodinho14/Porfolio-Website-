<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link href="https://fonts.googleapis.com/css?family=Bowlby+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
</head>

<style type="text/css">

body, html {
    height: 100%;
    margin: 0;
    background-color:#33D2FF;
}



h1{
	font-family: 'Bowlby One', cursive;
	color: white;
	font-size: 50px;  
	}

p{
	font-family: 'PT Sans', sans-serif;
	color: white;
	font-size: 17px;
}

#user_info_design{
	height: 25%;
	width: 50%;
	background: white;
	color: black;
	display: block;
	margin:auto;
	border-radius: 15px;
	font-family: 'PT Sans', sans-serif;
	font-size: 17px;
	padding: 15px;
}

#table_box{
	width: 30%;
	height: 50px;
	font-size: 17px;
	border: none;
	background-color:#08B3F3;
	color: white;
	font-size: 17px;
	margin-top: 10px;
}

#table_box:hover{
	background-color: #69D1F9;
}

#cover_count_box_submit:hover{
	opacity: 0.6;
}

#new_table_design{

	height: 45%;
	width: 50%;
	background: white;

	color: black;
	display: block;
	margin:auto;
	margin-top: 25px;
	border-radius: 15px;
	font-family: 'PT Sans', sans-serif;
	font-size: 17px;
	padding: 10px;
}

#table_number_box{
	width: 380px;
	height: 40px;
	font-size: 16px;
	border: none;
	border-bottom: solid 3px grey;
}

#cover_count_box{
	width: 380px;
	height: 40px;
	font-size: 16px;
	border: none;
	border-bottom: solid 3px grey;
}

#cover_count_box_submit{

	width: 380px;
	height: 40px;
	font-size: 17px;
	border: none;
	background-color:#08B3F3;
	color: white;
}

#cover_count_box_submit1{
	float: left;
	width: 15%;
	height: 50px;
	font-size: 17px;
	border: none;
	background-color:#08B3F3;
	color: white;
	margin-left: 5px;
	margin-top: 5px;
}

input:focus, textarea:focus, select:focus{
        outline: none;
    }
#closed_section{
	height: 35%;
	width: 50%;
	background: white;
	color: black;
	display: block;
	margin:auto;
	border-radius: 15px;
	font-family: 'PT Sans', sans-serif;
	font-size: 17px;
	padding: 15px;
}
#cover_count_box_submit1:hover{
	background-color: #69D1F9;
}

#open_tables_section{
	height: 40%;
	width: 50%;
	background: white;
	color: black;
	display: block;
	margin:auto;
	border-radius: 15px;
	font-family: 'PT Sans', sans-serif;
	font-size: 17px;
	padding: 15px;
}

</style>




<?php
include "config.php";
// error_reporting(0);
$username = $_GET['data'];
$level = $_GET['data1'];



$result4 = mysqli_query($conn,"SELECT * from system ORDER BY id DESC");
$result5 = mysqli_fetch_array($result4);


if ($result5[0] == "offline") {
	echo "
	
<center><h1>Welcome $username</h1></center>

<div id = 'closed_section'>

<center><p id  = 'simple' style = 'color:black;'>Please use available options to carry out different functions</p></center>

<center><p id = 'general' style = 'color:red;'> System Status : Offline | Closed </p></center>

<form method='post' action = 'index.php'>

<center><input type='submit' name='done1' value='Done' id='table_box'></center>

</form>
<form method = 'post'>
<center><input type='submit' name='reopen' value='Open System' id='table_box'></center>
</form>
</div>



";

if (isset($_POST['reopen'])) {
	$level2 = $_GET['data1'];
	if ($level2 == 5) {

	mysqli_query($conn,"INSERT into system values('online','')");
	echo "<center><p style = 'color:white;'id = 'general'> Opening System ... </center>";
	
	echo "<meta http-equiv='Refresh' content='3;url=dashboard.php?data=$username&data1=$level'>";
	}elseif ($level2 == 4) {
		
	mysqli_query($conn,"INSERT into system values('online','')");
	echo "<center><p style = 'color:white;'id = 'general'> Opening System ... </center>";
	echo "<meta http-equiv='Refresh' content='0;url=dashboard.php?data=$username&data1=$level'>";
	}else{
		echo "<center><p style = 'color:white;'id = 'general'> Account doesn't have the privillage to open manager or MOD functions</center>";
	}
	
	
}

}

else{

$username = $_GET['data'];
$level = $_GET['data1'];

echo "
<center><h1>Welcome $username</h1></center>

<center><p id = 'general'> System Status : Online </p></center>

<div id = 'user_info_design'>

<center><p style = 'color:black;'>Action Center</p></center>


<!-- all commands -->

<form method='post'>

	<input type='submit' name='create_tables' value='Create Tables' id='table_box'>
	<input type='submit' name='manager' value='Manager' id='table_box'>
	<input type='submit' name='open_tabs' value='Open Tables' id='table_box'>
	<input type='submit' name='server_check' value='Server Check' id='table_box'>
	<input type='submit' name='logout' value='Logout' id='table_box'>
	
</form>

<!--all commands end -->

</div>

";

?>


<?php



if(isset($_POST['create_tables'])){
	


	echo "
	<div id = 'new_table_design'>
	
	
	<center><p></p><p style = 'color:black;' id = 'new'>Please enter table number and cover count</p>
	<img id = 'tablelogo' src = 'tablenumber.png' height = '80px'>
	<p></p></center>
	<form   method = 'post' name = 'new_table_complete' onsubmit='return validateForm()'>

		<center><input type = 'text' name = 'table_number' id = 'table_number_box' placeholder = 'Table Number' autocomplete='off'><p></p>
		

		<p></p>
		<center><input type = 'text' name = 'cover_count_box' id = 'cover_count_box' placeholder = 'Cover Count' autocomplete='off'><p></p>
		<input type = 'submit' name = 'done' value = 'OK' id = 'cover_count_box_submit' ></center>
 
 
	</form></div>";

}




elseif (isset($_POST['done'])) {
	
	$table_number = $_POST['table_number'];
	$cover_count = $_POST['cover_count_box'];

	

	if ($table_number == "") {
		echo "<center><p id = 'warning1'> Table number needs to be entered </p></center>";
	}

	else{
		if(is_numeric($table_number)){


	$raw_check = 	mysqli_query($conn,"SELECT * from new_tables where table_number = $table_number");
	$check = mysqli_num_rows($raw_check);

	

	if ($check == 1) {
		echo "<center><p id = 'error1'>$table_number is already open</p></center>";
	}

	else{
		mysqli_query($conn,"INSERT into new_tables values('$table_number','','$cover_count','$username')");
		mysqli_query($conn,"INSERT into new_tables1 values('$table_number','','$cover_count','$username')");
		echo "<center><p id = 'error'> $table_number has been created successfully</p></center>";
	echo "<center><p id = 'error'> Cover Count : $cover_count</p></center>";
	}
}else{
	echo "<center><p id = 'warning1'>Please enter a valid table number</p></center>";



}


	
}}

elseif (isset($_POST['logout'])) {
	
	echo "<meta http-equiv='Refresh' content='0;url=index.php'>";
	}





elseif(isset($_POST['manager'])){
	 echo "<meta http-equiv='Refresh' content='0;url=manager.php?server=$username&level=$level'>";
}

elseif (isset($_POST['open_tabs'])) {

	$query = mysqli_query($conn,"SELECT * from new_tables ORDER BY id desc");
	$count = mysqli_num_rows($query);
	echo "<p></p><center><p id = 'new'>Displaying $count open tables</p></center>";
	echo "<div id = 'open_tables_section'>";
	for ($i=0; $i < $count ; $i++) { 
		$open_tables = mysqli_fetch_array($query);
		echo "

		
		<form method = 'post'>
		<input type = 'hidden' name = 'click_data' value = '$open_tables[0]' >
		<input type = 'submit' name = 'open_table' id = 'cover_count_box_submit1' value = '$open_tables[0]'></form>";
	}
	echo "</div>";
}

elseif (isset($_POST['open_table'])) {
	$table_data=$_POST['click_data'];
	echo "<meta http-equiv='Refresh' content='0;url=session.php?server=$username&level=$level&table=$table_data'>";
	}

elseif (isset($_POST['server_check'])) {
	$level = $_GET['data1'];
	if ($level > 3) {
		
		 echo "<center><p id = 'general' style = 'font-size:22px;'>Fetching Report...</p></center>";
		 echo "<meta http-equiv='Refresh' content='2.5;url=server_check.php?server=$username&level=$level'>";

}else{
	echo "
<center><h3>Please insert Manager or Supervisor Password</h3>


<div id='box'>

<img src='lock.png'>
<form method='post' name='login'>

<center><input type='password' name='passcode' maxlength='4' id='login_box' placeholder='Password'>
<input type='submit' name='login' value='Enter' id='submit_box'></center>";
}

}
	
elseif (isset($_POST['login'])) {
	$server_name = $_GET['data'];
	$password = $_POST['passcode'];

	$result = mysqli_query($conn,"SELECT * from users where password = '$password'");
	$result1 = mysqli_num_rows($result);
	if($result1 > 0){
		$search = mysqli_fetch_array($result);
		if ($search[2] > 3) {
			echo "<center><img src = 'anim.gif'></center>";
		 echo "<center><p id = 'general' style = 'font-size:22px;'>Fetching Report...</p></center>";
			echo "<meta http-equiv='Refresh' content='2.5;url=server_check.php?server=$server_name&level=$level'>";
		}else{
			echo "
		<center><p id = 'warning1'> User identification doesn't have the privillage to open manager functions</p></center>";
		}

	}else{
		echo "
		<center><p id = 'warning1'> User identification has not been recognised</p></center>";
	}
}
	

else{
	echo "";
}

}
?>