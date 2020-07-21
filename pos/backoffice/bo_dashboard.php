<!DOCTYPE html>
<html>
<head>
	<title>BO | Dashboard</title>
</head>
<body>
<style type="text/css">

body{
	margin: 0;
}	

#menu{
	height: 200px;
	width: 100%;
	background: #70E1F7;
	font-family: arial;
	
	font-size: 20px;
	margin-top: -19px;
}

#general{
	font-family: arial;
	font-size: 16px;
}

#general_buttons{
	height: 40px;
	width: 130px;
	font-family: arial;
	font-size: 16px;
	float: left;
	background: #1FA3F9;
	color: white;
}

#general_buttons1{
	font-family: calibri;
	background-color:#0D86EA; 
	margin-top: 20px;
	height: 45px;
	width:170px;
	border-radius: 20px;
	padding: 0;
	font-size: 16px;
	color: white;
}

#general_textbox{
height:30px;
width: 250px;
font-size: 16px;
font-family: arial;
}
#helloworld{
	
	font-family: arial, sans-serif;
}
#helloworld table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#helloworld td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

#helloworld tr:nth-child(even) {
    background-color: #dddddd;
}

</style>

<?php

$username = $_GET['user'];
$level = $_GET['level'];

#all menu options have been displayed below using the form button element

echo "<div id = 'menu'><center><p>Dashboard - Back Office</p><p id = 'general'>Please use available options</p></center>

<p id = 'general'>Current User : $username    </p>
<p></p>
<p></p>

<form method = 'post'>

<input id = 'general_buttons1' type = 'submit' name = 'view_reports' value = 'Reports'>
<input id = 'general_buttons1' type = 'submit' name = 'employee_checkout' value = 'Employee Checkout'>

<input id = 'general_buttons1' type = 'submit' name = 'logout' value = 'Logout'>
</form>

</div>";

#listening for any ongoing events which may be created when the form buttons in the menu are triggered.

if (isset($_POST['view_reports'])) {
	echo "<center><p id = 'general'>Please Select Report Type</p><form method = 'post'>
		<select name = 'report_type'>
			<option  value = '1'>Revenue Sales Reports</option>
			<option value = '2'>Discount Reports</option>
			<option value = '3'>Employee Checkout Reports</option>
			</select>
			<p></p>
			<input id = 'general_buttons1' type = 'submit' name = 'report_option' value = 'Done'>
			
		</form></center>

	";
}

elseif (isset($_POST['all_reports'])) {
	echo "<center><p id = 'general'>Please Select Report Type</p><form method = 'post'>
		<select name = 'report_type1'>
			<option  value = '1'>Revenue Sales Reports</option>
			<option value = '2'>Discount Reports</option>
			<option value = '3'>Employee Checkout Reports</option>
			</select>
			<p></p>
			<input id = 'general_buttons1' type = 'submit' name = 'all_report_option' value = 'Done'>
			
		</form></center>

	";
}

elseif (isset($_POST['all_report_option'])) {
	$option  = $_POST['report_type1'];
	if ($option == 1) {
		mysql_connect("localhost", "root", "");
		mysql_select_db("pos");#work in this section to allow all the reports to be produced.

	}
	elseif ($option == 2) {
		mysql_connect("localhost", "root", "");
		mysql_select_db("pos");
	}

	elseif ($option == 3) {
		mysql_connect("localhost", "root", "");
		mysql_select_db("pos");
	}

	else{
		echo "<center><p style = 'color:red;' id = 'general'>The option that has been selected has not been recognised.</p></center>";
	}

}

elseif (isset($_POST['logout'])) {
	echo "<meta http-equiv='Refresh' content='0;url=index.php'>";
}
#displaying the relevant date option based on the type of report that has been selected
elseif (isset($_POST['report_option'])) {
		$report_option = $_POST['report_type'];
		if ($report_option == '1') {
			echo "<center><p id = 'general'>Please enter date to view revenue sales reports</p><form method = 'post'>

	<input id = 'general_textbox' type = 'text' autocomplete = 'off' name = 'date' placeholder = 'Please enter D/M/Y'>
	<input id = 'general_buttons1' type = 'submit' name = 'date_complete' value = 'Done'>

</form></center>


	";
		}

		elseif ($report_option == '3') {
			echo "<center><p id = 'general'>Please select Employee</p></center><p></p>";
	mysql_connect("localhost", "root", "");
	mysql_select_db("pos");
	$employee_names_data = mysql_query("SELECT * from users");
	$employee_names_count = mysql_num_rows($employee_names_data);
	for ($i=0; $i < $employee_names_count; $i++) { 
		$employee_names = mysql_fetch_array($employee_names_data);
		echo "<form method = 'post'>

		<center><input style = 'margin-top:0px;' id = 'general_buttons1' type = 'submit' name = 'employee_names_report' value = '$employee_names[0]'></center>

	</form>";
		}}

		elseif ($report_option == '2') {
			echo "<center><p id = 'general'>Please enter date to view discount reports</p><form method = 'post'>

	<input id = 'general_textbox' type = 'text' autocomplete = 'off' name = 'date' placeholder = 'Please enter D/M/Y'>
	<input id = 'general_buttons1' type = 'submit' name = 'discount_date_complete' value = 'Done'>

</form></center>


	";
		}

		else{
			echo "<center><p id = 'general'>The option that has been selected has not been recognised</p></center>";
		}
}

elseif (isset($_POST['employee_names_report'])) {
	$employee_names1 = $_POST['employee_names_report'];
	echo "<center><p id = 'general'>Please enter date to view Employee Checkout Reports</p><form method = 'post'>

	<input type = 'hidden' name = 'employee_names1' value = '$employee_names1'>
	<input id = 'general_textbox' type = 'text' autocomplete = 'off' name = 'date' placeholder = 'Please enter D/M/Y'>
	<input id = 'general_buttons1' type = 'submit' name = 'employee_report_date_complete' value = 'Done'>

</form></center>


	";
}

elseif (isset($_POST['employee_report_date_complete'])) {
	$date1 = $_POST['date'];
	
	$employee_names1 = $_POST['employee_names1'];
	mysql_connect("localhost", "root", "");
	mysql_select_db("pos");
	$employee_checkout_data = mysql_query("SELECT * from perm_server_check where server_name = '$employee_names1' and `date` = '$date1' ");

	$employee_report_count = mysql_num_rows($employee_checkout_data);
	for ($i=0; $i < $employee_report_count ; $i++) { 
		$employee_checkout_report = mysql_fetch_array($employee_checkout_data);

			echo "
	<div id = 'helloworld'>
			<table>
  <tr>
    <th>Employee Name</th>
    <th>Cash Payments</th>
    <th>Card Payments</th>
    <th>Admin Adjusts</th>
  	<th>Date</th>
  	
  </tr>	
  <tr>
    <td>$employee_checkout_report[0]</td>
    <td>£ $employee_checkout_report[4]</td>
    <td>£ $employee_checkout_report[1]</td>
    <td>£ $employee_checkout_report[5]</td>
    <td>$employee_checkout_report[3]</td>
    
  </tr>
 
	</table>
	</div>
";
	}

	
}

elseif (isset($_POST['date_complete'])) {
	$date = $_POST['date'];
	mysql_connect("localhost", "root", "");
	mysql_select_db("pos");
	$sales_report_data = mysql_query("SELECT * from bo_sales_reports where `date` = '$date' ");
	
	$sales_report_count = mysql_num_rows($sales_report_data);
	echo "<center><p id = 'general'>Please use Control + P to print</p></center>";
	for ($i=0; $i < $sales_report_count ; $i++) { 
			$sales_report = mysql_fetch_array($sales_report_data);
			
			echo "
	<div id = 'helloworld'>
			<table>
  <tr>
    <th>Date</th>
    <th>Cash Payments</th>
    <th>Card Payments</th>
  	<th>Total Discounted Amount</th>
  	<th>Total Sales</th>
  </tr>	
  <tr>
    <td>$sales_report[0]</td>
    <td>£ $sales_report[1]</td>
    <td>£ $sales_report[2]</td>
    <td>£ $sales_report[3]</td>
    <td>£ $sales_report[4]</td>
  </tr>
 
	</table>
	</div>
";
	}

}

elseif (isset($_POST['employee_checkout'])) {
	echo "<center><p id = 'general'>Please select Employee</p></center><p></p>";
	mysql_connect("localhost", "root", "");
	mysql_select_db("pos");
	$employee_names_data = mysql_query("SELECT * from users");
	$employee_names_count = mysql_num_rows($employee_names_data);
	for ($i=0; $i < $employee_names_count; $i++) { 
		$employee_names = mysql_fetch_array($employee_names_data);
		echo "<form method = 'post'>

		<center><input style = 'margin-top:0px;' id = 'general_buttons1' type = 'submit' name = 'employee_names_done' value = '$employee_names[0]'></center>

	</form>";
	}

	

}

elseif (isset($_POST['employee_names_done'])) {
	$selected_employee = $_POST['employee_names_done'];
	mysql_connect("localhost", "root", "");
	mysql_select_db("pos");
	$server_check_cash = mysql_query("SELECT SUM(amount) from server_check where server_name = '$selected_employee' and payment_method = 'cash' ");
	$server_check_card = mysql_query("SELECT SUM(amount) from server_check where server_name = '$selected_employee' and payment_method = 'card' ");
	$admin_adjust = mysql_query("SELECT SUM(amount) from server_check where server_name = '$selected_employee' and payment_method = 'admin_adjust' ");
	$server_check_cash = mysql_fetch_array($server_check_cash);
	$server_check_cash = round($server_check_cash[0],2);
	$server_check_card = mysql_fetch_array($server_check_card);
	$server_check_card = round($server_check_card[0], 2);
	$admin_adjust = mysql_fetch_array($admin_adjust);
	$admin_adjust = round($admin_adjust[0], 2);

	$total = $server_check_cash + $server_check_card + $admin_adjust;
	echo "<center><p id = 'general'>Selected Employee : $selected_employee</p></center>";
	echo "<p id = 'general'>Adjusted Amount : £ $admin_adjust</p>";
	echo "<p id = 'general'>Pending Cash Payments : £ $server_check_cash</p>";
	echo "<p id = 'general'>Pending Card Payments : £ $server_check_card</p>";
	echo "<p id = 'general'>Total Pending Amount : £ $total </p>";
	 echo "<center><p style = 'color:red;' id = 'general'>Please checkout employee even if the pending total is £0</p></center>";
	echo "<form method = 'post'>

		<center><input type = 'hidden' name = 'checkout_value_cash' value = '$server_check_cash'>
		<center><input type = 'hidden' name = 'selected_employee' value = '$selected_employee'>
		<input type = 'hidden' name = 'checkout_value_card' value = '$server_check_card'>
		<input type = 'submit' id = 'general_buttons1' name = 'adjust' value = 'Adjust Checkout'> </center>
		<input type = 'submit' id = 'general_buttons1' name = 'checkout' value = 'Checkout'> </center>

	</form>";

}

elseif (isset($_POST['adjust'])) {
	$selected_employee = $_POST['selected_employee'];
	echo "<form method = 'post'>

		<center><p id = 'general'>Checkout Adjustment</p>
		<center><input type = 'text' name = 'adjust_value' placeholder = 'Amount' id ='general_textbox' autocomplete = 'off'>
		<input type = 'hidden' name = 'selected_employee' value = '$selected_employee'>
		<input type = 'submit' id = 'general_buttons1' name = 'adjust_finished' value = 'Finish'> </center>

	</form>";


}
elseif (isset($_POST['adjust_finished'])) {
	$adjust_value = $_POST['adjust_value'];
	$selected_employee = $_POST['selected_employee'];
	mysql_connect("localhost", "root", "");
	mysql_select_db("pos");
	mysql_query("INSERT into server_check values('$selected_employee','admin_adjust','-$adjust_value','','') ");
	echo "<center><p id = 'general'>An Adjustment of £ $adjust_value has been made to $selected_employee 's Account | You can now check the server check or checkout the user</p></center>";

}

elseif (isset($_POST['checkout'])) {
	$selected_employee = $_POST['selected_employee'];
	mysql_connect("localhost", "root", "");
	mysql_select_db("pos");
	$admin_adjust = mysql_query("SELECT SUM(amount) from server_check where server_name = '$selected_employee' and payment_method = 'admin_adjust' ");
	$admin_adjust = mysql_fetch_array($admin_adjust);
    $admin_adjust = round($admin_adjust[0], 2);
	$checkout_cash = $_POST['checkout_value_cash'];
	$checkout_card = $_POST['checkout_value_card'];
	$checkout_total = $checkout_card+$checkout_cash+$admin_adjust;
	
	$timezone = date_default_timezone_get();
		date_default_timezone_set($timezone);
		date_default_timezone_set('Europe/London');
		$date = date('d/m/Y');
			mysql_connect("localhost", "root", "");
	mysql_select_db("pos");
	mysql_query("INSERT into perm_server_check values('$selected_employee','$checkout_card', '','$date','$checkout_cash','$admin_adjust')");
	
	echo "<center><p id = 'general'>$selected_employee has been checked out successfully</p></center>";

}

elseif (isset($_POST['discount_date_complete'])) {
	$date = $_POST['date'];
	mysql_connect("localhost", "root", "");
	mysql_select_db("pos");
	$sales_report_data = mysql_query("SELECT * from bo_discount_reports where `date` = '$date' ");
	
	$sales_count = mysql_num_rows($sales_report_data);
	echo "<center><p id = 'general'>Please use Control + P to print</p></center>";
	for ($i=0; $i < $sales_count; $i++) { 
		$sales_report = mysql_fetch_array($sales_report_data);
			echo "
	<div id = 'helloworld'>
			<table>
  <tr>
    <th>Date</th>
  	<th>Total Discounted Amount</th>
  	<th>Discount Types</th>
  	<th>Employee</th>
  </tr>	
  <tr>
    <td>$sales_report[5]</td>
    <td>£ $sales_report[2]</td>
    <td> $sales_report[1]</td>
    <td> $sales_report[0]</td>

  </tr>
  <p></p>
 
	</table>
	</div>
";
	}



}



?>

</body>
</html>