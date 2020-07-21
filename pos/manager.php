
<!DOCTYPE html>
<html>
<head>
	<title>Manager | Admin</title>
	<link href="https://fonts.googleapis.com/css?family=Bowlby+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
</head>

<style type="text/css">


body, html {
    height: 100%;
    margin: 0;
    background-color: #21CBFB;
}



h1{
	font-family: 'Bowlby One', cursive;
	color: white;
	font-size: 45px;  
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

	height: 50%;
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

#general_buttons{
	
	width: 15%;
	height: 50px;
	font-size: 17px;
	border: none;
	background-color:#08B3F3;
	color: white;
	margin-left: 5px;
	margin-top: 5px;
}

#general_buttons1{
	width: 15%;
	
	height: 50px;
	font-size: 17px;
	border: none;
	background-color:#08B3F3;
	color: white;
	margin-left: 5px;
	margin-top: 5px;
}

#general_buttons1:hover{
	opacity: 0.6;
}

#general_buttons:hover{
	opacity: 0.6;
}

#button_area{
	height: 25%;
	width: 85%;
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

#employee_area{
	height: 40%;
	width: 85%;
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

#employee_area1{
	height: 75%;
	width: 85%;
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

#general_textbox{
	width: 230px;
	height: 40px;
	font-size: 16px;
	border: none;
	border-bottom: solid 3px grey;
}

#selector{
	width: 230px;
	height: 40px;
	font-size: 17px;
}

table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 99%;
}

table td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

table tr:nth-child(even){background-color: white;}

table tr:hover {background-color: #ddd;}

table th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}

</style>





<?php
include "config.php";
error_reporting(0);



$server_name = $_GET['server'];
$level = $_GET['level'];
$server_role = $_GET['level'];

$server_job = "";

if ($server_role == 4) {
	$server_job = "Supervisor";
}

elseif ($server_role == 5) {
	$server_job = "Manager";
}

elseif ($server_role == 6) {
	$server_job = "MOD Mode";
}

elseif ($server_role == 3) {
	$server_job = "Waiter";
}

elseif ($server_role == 2) {
	$server_job = "Busser";
}

elseif ($server_role == 1) {
	$server_job = "Bar";
}

else{
	$server_job = "Not recognided / User registration error";
}

if ($level == 5) {
	echo "<center><h1> Welcome $server_name | $server_job </h1></center>
	
	<div id = 'button_area'>
	<strong><center><p style = 'color:black; font-size:19px;'>Action Center</p></center></strong>
	<form method = 'post' >
	<input type = 'submit' name = 'home' value = 'Home' id = 'general_buttons'>
	<input type = 'submit' name = 'new_user' value = 'Register Employee' id = 'general_buttons'>
	<input type = 'submit' name = 'delete_user' value = 'Delete Employee' id = 'general_buttons'>
	<input type = 'submit' name = 'void' value = 'Void' id = 'general_buttons'>
	<input type = 'submit' name = 'close_sys' value = 'Close System' id = 'general_buttons'>
	<input type = 'submit' name = 'sales_report' value = 'Daily Sales Report' id = 'general_buttons'>
	<input type = 'submit' name = 'rov' value = 'Reg Online Voucher' id = 'general_buttons'>
	<input type = 'submit' name = 'rov_view' value = 'View Online Vouchers' id = 'general_buttons'>
	<input type = 'submit' name = 'rov_delete' value = 'Delete Online Voucher' id = 'general_buttons'>
	<input type = 'submit' name = 'stock_mode' value = 'Stock Items' id = 'general_buttons'>


	</form>
	</div>



	";
}

elseif ($level == 6) {
	$new1 = $_GET['valid'];
	
	echo "<center><h1> Welcome $new1 | $server_job </h1></center>
	
	<form method = 'post' >
	<div id = 'employee_area'>
	<input type = 'submit' name = 'home' value = 'Home' id = 'general_buttons'>
	<input type = 'submit' name = 'void' value = 'Void' id = 'general_buttons'>
	
	<input type = 'submit' name = 'sales_report' value = 'Daily Sales Report' id = 'general_buttons'>
	
	
	

	</form>
	</div>



	";
}

elseif ($level == 4) {
	echo "<center><h1> Welcome $server_name | $server_job </h1></center>
	<center><img src = 'admin.png' height= 150px></center>

	<form method = 'post' >
	
	<input type = 'submit' name = 'void' value = 'Void' id = 'general_buttons'>
	
	<input type = 'submit' name = 'sales_report' value = 'Daily Sales Report' id = 'general_buttons'>
	<input type = 'submit' name = 'home' value = 'Home' id = 'general_buttons'>
	
	

	</form>



	";
}



else{
	echo "
<center><h3>Please insert Manager or Supervisor Password</h3>


<div id='box'>

<img src='lock.png'>
<form method='post' name='login'>

<center><input type='password' name='passcode' maxlength='4' id='login_box' placeholder='Password'>
<input type='submit' name='login' value='Enter' id='submit_box'></center>
<input style = 'margin-top:40px' type = 'submit' name = 'back' value = 'Home ⇦' id = 'submit_box1'>
";

}


if (isset($_POST['login'])) {
	$password = $_POST['passcode'];
	
	$result = mysqli_query($conn, "SELECT * from users where password = '$password'");
	$result1 = mysqli_num_rows($result);
	if($result1 > 0){
		$search = mysqli_fetch_array($result);
		if ($search[2] > 3) {
			echo "<meta http-equiv='Refresh' content='0;url=manager.php?server=$search[0]&level=6&valid=$server_name&valid1=$server_role'>";
		}else{
			echo "
		<p id = 'warning1'> User identification doesn't have the privillage to open manager functions</p>";
		}

	}else{
		echo "
		<p id = 'warning1'> User identification has not been recognised</p>";
	}
}

elseif (isset($_POST['rov_view'])) {

	$validation1=mysqli_query($conn, "SELECT * from rov");
	$validation=mysqli_num_rows($validation1);
	echo "<strong><center><p id = 'new'> Displaying $validation Online Vouchers</p></strong></center>";


	for ($i=0; $i < $validation; $i++) { 
		$validation2 = mysqli_fetch_array($validation1);
		echo "
	<div id = 'helloworld'>
			<table>
  <tr>
    <th>Discount Name</th>
    <th>Voucher Code</th>
    <th>Discount Amount</th>
  	<th>Discount Type 'p/a'</th>
  	<th>Discount Type 'f/d/t'</th>
  </tr>	
  <tr>
    <td>$validation2[0]</td>
    <td>$validation2[1]</td>
    <td>$validation2[2]</td>
    <td>$validation2[3]</td>
    <td>$validation2[4]</td>
  </tr>
 
</table>
</div>
		";
	}echo "<form style = 'margin-top:10px;' method = 'post'><center><input id = 'general_buttons' type = 'submit' name = 'help1' value = 'Info'></center></form>";
}

elseif (isset($_POST['stock_mode'])) {
	
	echo "<center><p id = 'new' >Stock Item Mode</p></center>";
	$stock_query = mysqli_query($conn,"SELECT * from menu");
	$stock_count = mysqli_num_rows($stock_query);
	
	echo "<center><p id = 'new'>Minerals</p>";#enter category name for easy filtering.; 
	for ($a=0; $a < $stock_count ; $a++) { 
		$stock_values = mysqli_fetch_array($stock_query);
	echo "<center>

	<form method = 'post'>
	<input id = 'general_buttons' type = 'submit' value = '$stock_values[0]' name = 'item_name' > 
	</center>";
}

$stock_query = mysqli_query($conn,"SELECT * from menu");
echo "<p id = 'new'>Spirits</p>";#enter category name for easy filtering.; 
	for ($a=0; $a < $stock_count ; $a++) { 
	
	
	
	$stock_count = mysqli_num_rows($stock_query);
		$stock_values = mysqli_fetch_array($stock_query);
	echo "<center>
	<form method = 'post'>
	<input id = 'general_buttons' type = 'submit' value = '$stock_values[1]' name = 'item_name' > 
	</center>";
}

$stock_query = mysqli_query($conn,"SELECT * from menu");
echo "<p id = 'new'>Wine</p>";#enter category name for easy filtering.; 
	for ($a=0; $a < $stock_count ; $a++) { 
		
	
	$stock_count = mysqli_num_rows($stock_query);
		$stock_values = mysqli_fetch_array($stock_query);
	echo "<center>
	<form method = 'post'>
	<input id = 'general_buttons' type = 'submit' value = '$stock_values[2]' name = 'item_name' > 
	</center>";
}

$stock_query = mysqli_query($conn,"SELECT * from menu");
echo "<p id = 'new'>Juice</p>";#enter category name for easy filtering.; 
	for ($a=0; $a < $stock_count ; $a++) { 
		
	
	
	$stock_count = mysqli_num_rows($stock_query);
		$stock_values = mysqli_fetch_array($stock_query);
	echo "<center>
	<form method = 'post'>
	<input id = 'general_buttons' type = 'submit' value = '$stock_values[3]' name = 'item_name' > 
	</center>";
}

$stock_query = mysqli_query($conn,"SELECT * from menu");
echo "<p id = 'new'>Burgers</p>";#enter category name for easy filtering.; 
	for ($a=0; $a < $stock_count ; $a++) { 
		
	$stock_count = mysqli_num_rows($stock_query);
		$stock_values = mysqli_fetch_array($stock_query);
	echo "<center>
	<form method = 'post'>
	<input id = 'general_buttons' type = 'submit' value = '$stock_values[4]' name = 'item_name' > 
	</center>";
}
$stock_query = mysqli_query($conn,"SELECT * from menu");
echo "<p id = 'new'>Desserts</p>";#enter category name for easy filtering.; 
	for ($a=0; $a < $stock_count ; $a++) { 
	
	
	
	$stock_count = mysqli_num_rows($stock_query);
		$stock_values = mysqli_fetch_array($stock_query);
	echo "<center>
	<form method = 'post'>
	<input id = 'general_buttons' type = 'submit' value = '$stock_values[6]' name = 'item_name' > 
	</center>";
}
$stock_query = mysqli_query($conn,"SELECT * from menu");
echo "<p id = 'new'>Hot Drinks</p>";#enter category name for easy filtering.; 
	for ($a=0; $a < $stock_count ; $a++) { 
		
	$stock_count = mysqli_num_rows($stock_query);
		$stock_values = mysqli_fetch_array($stock_query);
	echo "<center>
	<form method = 'post'>
	<input id = 'general_buttons' type = 'submit' value = '$stock_values[7]' name = 'item_name' > 
	</center>";
}
}

elseif (isset($_POST['item_name'])) {
	$item_name = $_POST['item_name'];
	echo "<center><p id = 'new' >Select $item_name status</p></center>";
	echo "<center><form method = 'post'><input type = 'hidden' value = '$item_name' name = 'item_name1'><select name = 'stock_status'><option>In_Stock</option><option>Out_Of_Stock</option></select><p></p><input id = 'general_buttons' type = 'submit' name = 'stock_mode_done' value = 'Finish'></form></center>";	

}
elseif (isset($_POST['stock_mode_done'])) {
	$item_name = $_POST['item_name1'];
	$item_status = $_POST['stock_status'];
	
	$stock_check = mysqli_query($conn,"SELECT * from stock where item_name = '$item_name'");
	$stock_count1 = mysqli_num_rows($stock_check);
	if ($stock_count1 > 0) {
		mysqli_query($conn,"DELETE from stock where item_name = '$item_name' ");
		mysqli_query($conn,"INSERT into stock values ('$item_name', '$item_status', '')");
	echo "<center><p id = 'warning'>$item_name is now $item_status</p></center>";
	}
	else{
	mysqli_query($conn,"INSERT into stock values ('$item_name', '$item_status', '')");
	echo "<center><p id = 'warning'>$item_name is now $item_status</p></center>";
}
}
elseif (isset($_POST['rov_delete'])) {
	echo "<div id = 'employee_area'><center><p id = 'new' style = 'color:black;'>Delete Online Voucher </p></center>";
	echo "<center><p id ='general' style = 'color:black;'> Please Select Online Voucher To Be Deleted</p></center>";

	$validation1=mysqli_query($conn,"SELECT * from rov");
	$validation=mysqli_num_rows($validation1);
	for ($i=0; $i < $validation; $i++) { 
		$validation2 = mysqli_fetch_array($validation1);
		echo "<center><form method = 'post'><input id = 'general_buttons' type = 'submit' name = 'rov_delete_value' value = '$validation2[0]'></form></center>";

	}


	echo "</div>";
	
}

elseif (isset($_POST['help1'])) {
	echo "<center><strong><p id = 'new'>Discount Types: Information </p></strong>
	<p id = 'general'>p - Percentage Off </p>
	<p id = 'general'>a - Amount Off </p>
	<p id = 'general'>f - Food Discount Only </p>
	<p id = 'general'>d - Drinks Discount Only </p>
	<p id = 'general'>t - Total Bill Discount </p></center>";
}

elseif (isset($_POST['rov_delete_value'])) {
	$rov_delete_value = $_POST['rov_delete_value'];
	
	mysqli_query($conn,"DELETE from rov where discount_name = '$rov_delete_value' ");
	echo "<center><p id = 'general'>$rov_delete_value has been deleted successfully</p></center>";
}

elseif (isset($_POST['rov'])) {
	echo "<div id = 'employee_area1'><center><strong><p id = 'new' style = 'color:black;'>Register Online Voucher </p></strong></center>";
	echo "<center><p style = 'color:black;' id = 'general'> Please enter Voucher Details </p></center>";
	echo "<center><form method = 'post'><input id 
	 = 'general_textbox' name = 'discount_name' type = 'text' placeholder = 'Promotion Name' autocomplete = 'off' maxlength = '20'><p></p>
	 	<input id 
	 = 'general_textbox' name = 'voucher_code' type = 'text' placeholder = 'Voucher Code' autocomplete = 'off' maxlength = '20'><p></p>
	 <input id 
	 = 'general_textbox' name = 'discount_amount' type = 'text' placeholder = 'Discount Amount' maxlength = '3' autocomplete = 'off'><p></p>
	<input id 
	 = 'general_textbox' name = 'discount_type' type = 'text' placeholder = 'p/a' autocomplete = 'off' pattern='[p,a]' title = 'Please use lowercase letters to complete voucher registration'><p></p>
	 <input id 
	 = 'general_textbox' name = 'discount_type_1' type = 'text' placeholder = 'f/t/d' autocomplete = 'off' pattern='[f,t,d]' title = 'Please use lowercase letters to complete voucher registration'><p></p>
	 <input id = 'general_buttons' type = 'submit' name = 'rov_done' value = 'Register Voucher'>

	</form>

	<form method = 'post'><input id = 'general_buttons'type = 'submit' name = 'help' value = 'Help'></form></center></div>
	

	";
}

elseif (isset($_POST['rov_done'])) {
	$discount_name = $_POST['discount_name'];
	$discount_code = $_POST['voucher_code'];
	$discount_amount = $_POST['discount_amount'];
	$discount_type = $_POST['discount_type'];
	$discount_type1 = $_POST['discount_type_1'];

	
	mysqli_query($conn,"INSERT into ROV values('$discount_name', '$discount_code', '$discount_amount', '$discount_type', '$discount_type1', '') ");
	echo "<center><p id = 'warning1'>Voucher has been registered successfully</p></center>";
}
elseif (isset($_POST['help'])) {
	echo "
	<center><p id = 'general' style = 'color:red;'> NOTE : Type in 'p' to create percent off discount and 'a' to create a set amount discount</p></center>
	<center><p id = 'general' style = 'color:red;'> NOTE : Type in f to create Food Discount </p></center>
	<center><p id = 'general' style = 'color:red;'> NOTE : Type in t to create Total  Discount </p></center>
	<center><p id = 'general' style = 'color:red;'> NOTE : Type in d to create Drinks Discount </p></center>";
}
elseif (isset($_POST['new_user'])) {
	echo "
	
	
	
<div id = 'employee_area'>
<center><h3 id ='new1'>Configure Employee Account</h3></center>
	<center><form method = 'post'>
	<input type = 'text' placeholder = 'Username' autocomplete = 'off' name = 'username' id = 'general_textbox'> <p></p>
	<select id = 'selector' name = 'level'>
	<option value = 1>Bar</option><p></p>
	<option value = 2>Busser</option><p></p>
	<option value = 3>Waiter</option><p></p>
	<option value = 4>Supervisor</option>
	<option value = 5>Manager</option></select><p></p>

	<input type = 'text' placeholder = 'Passcode' autocomplete = 'off' name = 'passcode' id = 'general_textbox' maxlength = '4'><p></p>
	<input type = 'submit' value = 'Register' name = 'register' id = 'general_buttons'></form></center></div>


		
";
		
}elseif (isset($_POST['home'])) {
	$name1 = $_GET['valid'];
	$name2 = $_GET['valid1'];

	if (is_null($name1)) {
		echo "<meta http-equiv='Refresh' content='0;url=dashboard.php?data=$server_name&data1=$server_role'>";
	}
	else{
echo "<meta http-equiv='Refresh' content='0;url=dashboard.php?data=$name1&data1=$name2'>";
}

}

elseif (isset($_POST['void'])) {
	$valid5 = $_GET['valid'];
	$valid6 = $_GET['valid1'];

if ($server_role == 5) {
	# manager
	echo "<div id = 'employee_area'> ";
	echo "<strong><center><p style = 'color:black' id = 'new'>Void</p></center></strong>";
	echo "<center>
	<form method = 'post'><input style = 'margin-top:15px;' type = 'text' name = 'table' placeholder = 'Please enter table number' autocomplete = 'off' id = 'general_textbox'><p></p><input type = 'submit' name = 'done' value = 'done' id = 'general_buttons'></center></form>

	";
	echo "</div>";
}

elseif ($server_role == 4) {
	# supervisor

	echo "<center><p id = 'new'>Void</p></center>";
	echo "<center>
	<form method = 'post'><input type = 'text' name = 'table' placeholder = 'Please enter table number' autocomplete = 'off' id = 'general_textbox'><p></p><input type = 'submit' name = 'done' value = 'done' id = 'general_buttons'></center></form>

	";
}

else{
	echo "<center><p id = 'new'>Void</p></center>";
	echo "<center>
	<form method = 'post'><input type = 'text' name = 'table' placeholder = 'Please enter table number' autocomplete = 'off' id = 'general_textbox'><p></p><input type = 'submit' name = 'done' value = 'done' id = 'general_buttons'></center></form>

	";
}	
}

elseif (isset($_POST['done'])) {
	
	$table_num = $_POST['table'];
	


	$result3 = mysqli_query($conn,"SELECT * from billing where table_number = '$table_num' ");
	echo "<center><p id = 'new'>Void Items</p>";
	echo "<p id  = 'general'> Table Number : $table_num </p>";
	$num = mysqli_num_rows($result3);
	for ($i=0; $i < $num; $i++) { 
		$result4 = mysqli_fetch_array($result3);
		echo "<form method='post' action=''>
		<input type = 'hidden' value = '$table_num' name = 'table_num'>
		<input  type = 'submit' name = 'delete1' value = '$result4[1]' id = 'general_buttons1' ></br></form>
		";
		


	}
	echo "</center>";








	//echo "<input type = 'submit' name = 'delete' value = 'Delete' id = 'general_buttons1'></form>";
}

elseif (isset($_POST['back'])) {
	
echo "<meta http-equiv='Refresh' content='0;url=dashboard.php?data=$server_name&data1=$server_role'>";


}

elseif (isset($_POST['delete_user'])) {
	
	
	$new_data = mysqli_query($conn,"SELECT * from users");
	$number1  = mysqli_num_rows($new_data);
	echo "<div id = 'employee_area'>";
	echo "<center><p id = 'new' style = 'color:black'>Delete Employee Account</p></center>";
	echo "<center><p id = 'general' style = 'color:black' > Please select the employee account to be deleted</p></center>";
	for ($i=0; $i < $number1 ; $i++) { 
		$new_data1 = mysqli_fetch_array($new_data);
		echo "<center><form method = 'post'>
			<input style = 'float:left;' type = 'submit' name = 'delete_user1' value = '$new_data1[0]' id = 'general_buttons'>
			</form></center>
			

		";
	}
	echo "</div>";

	

}

elseif (isset($_POST['delete_user1'])) {

	$user = $_POST['delete_user1'];
	mysqli_query($conn,"DELETE from users where username = '$user' ");
	echo "<center><p id = 'warning1'> User Account : $user has been deleted successfully </p></center>";
}

elseif ($_POST['delete1']) {
	$table_num = $_POST['table_num'];
	
	$values1 = $_POST['delete1'];
	
	

	
	mysqli_query($conn,"DELETE from table_orders where table_number = '$table_num' and `order` = '$values1' LIMIT 1");
			mysqli_query($conn,"DELETE from table_orders where table_number = '$table_num' and food_order = '$values1' LIMIT 1");
			mysqli_query($conn,"DELETE from bar where table_number = '$table_num' and `order` = '$values1' LIMIT 1");
			mysqli_query($conn,"DELETE from bar_preview where table_number = '$table_num' and `order` = '$values1' LIMIT 1");
			mysqli_query($conn,"DELETE from billing where table_number = '$table_num' and `order` = '$values1' LIMIT 1");
			mysqli_query($conn,"DELETE from kitchen where table_number = '$table_num' and new_orders = '$values1' LIMIT 1");
			mysqli_query($conn,"DELETE from kitchen_preview where table_number = '$table_num' and `order` = '$values1' LIMIT 1");

	


}


elseif (isset($_POST['sales_report'])) {
	$server = $_GET['server'];
	$level = $_GET['level'];
	$valid3 = $_GET['valid'];
	$valid4 = $_GET['valid1'];
	if ($level == 5) {
		echo "<meta http-equiv='Refresh' content='0;url=daily_report.php?server=$server&level=5'>";

	}
	elseif ($level == 4) {
		echo "<meta http-equiv='Refresh' content='0;url=daily_report.php?server=$server&level=4'>";

	}
	elseif ($level == 6) {
		echo "<meta http-equiv='Refresh' content='0;url=daily_report.php?server=$server&level=6&valid=$valid3&valid1=$valid4'>";
	}
	else {
		echo "";
	}
}

elseif (isset($_POST['close_sys'])) {
	
	$check = mysqli_query($conn,"SELECT * from new_tables");
	$num = mysqli_num_rows($check);
	if ($num > 0) {
		echo "<p style = 'color:red;'id = 'general'> Please close all tables first</p>";
	for ($i=0; $i < $num ; $i++) { 
		$check1 = mysqli_fetch_array($check);
		echo "<p style = 'color:red;'id = 'general'>Open tables: T : $check1[0] </p>";
	}
	}else
	{
	
	echo "<center><p style= 'color:white; font-size:16px;margin-top:50px;'id = 'general'>Closing System Please wait ... </p></center>";
	$result2 = mysqli_query($conn,"SELECT SUM(amount) from server_check where payment_method = 'card' ");
	$result3 = mysqli_query($conn,"SELECT SUM(amount) from server_check where payment_method = 'cash' ");
	$result4 = mysqli_query($conn,"SELECT SUM(covers) from new_tables1");
	$card_payment_count = mysqli_num_rows($result);
	$cash_payment_count = mysqli_num_rows($result1);
	$total_cash_payment = mysqli_fetch_array($result2);
	$total_card_payment = mysqli_fetch_array($result3);
	$total_cash_payment = round($total_cash_payment[0],2);
	$total_card_payment = round($total_card_payment[0],2);
	$total_sales = $total_card_payment + $total_cash_payment;
	$cover_count = mysqli_fetch_array($result4);
	$total_discounts = mysqli_query($conn,"SELECT * from perm_discounts");

	$total_discounts = mysqli_num_rows($total_discounts);
	$discount_value = mysqli_query($conn,"SELECT SUM(price) from perm_discounts");
	$discount_value1 = mysqli_fetch_array($discount_value);
	$discount_value2 = round($discount_value1[0], 2);
	$discount_reason = mysqli_query($conn,"SELECT * from perm_discounts where name = '$server_name'");
	$discount_reason1 = mysqli_num_rows($discount_reason);
	$timezone = date_default_timezone_get();
	date_default_timezone_set($timezone);
	date_default_timezone_set('$timezone');
	$date = date('d/m/Y');

	mysqli_query($conn,"INSERT into bo_sales_reports values('$date','$total_card_payment', '$total_cash_payment', '$discount_value2','$total_sales','')");
	mysqli_query($conn,"DELETE from bar_preview");
	mysqli_query($conn,"DELETE from kitchen_preview");
	mysqli_query($conn,"DELETE from new_tables");
	mysqli_query($conn,"DELETE from new_tables1");
	mysqli_query($conn,"DELETE from server_check");
	mysqli_query($conn,"DELETE from perm_discounts");
	mysqli_query($conn,"DELETE from system");
	mysqli_query($conn,"INSERT into system values('offline', '')");

	echo "<meta http-equiv='Refresh' content='2.5;url=dashboard.php?data=$server_name&data1=$level'>";


	}

}

elseif (isset($_POST['register'])) {
	$username = $_POST['username'];
	$level = $_POST['level'];
	$passcode = $_POST['passcode'];
	if ($passcode == "") {
		echo "<center><p id = 'warning1'>Please make sure all the fields have been filled in</p></center> ";
	}else{
	
	$existing_passwords = mysqli_query($conn,"SELECT * from users where password = '$passcode'");
	$ep1 = mysqli_num_rows($existing_passwords);
	$user = mysqli_fetch_array($existing_passwords);
	
	if ($ep1 > 0) {
		echo "<center><p id = 'general'>The given passcode already exists on the system dedicated to $user[0]. Please use another passcode</p></center>";
	}

	else{
	mysqli_query($conn,"INSERT into users values('$username','$passcode','$level','') ");
	echo "<center><p id = 'general'>$username has been registered successfully</p></center>";
}
}


}//dont touch

echo "</div>"
?>


</body>
</html>