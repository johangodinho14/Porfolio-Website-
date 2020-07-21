<!DOCTYPE html>
<html>
<head>
	<title>Server Check</title>
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

h3{

	font-family: arial;
	border-bottom: solid 6px #0D86EA;
	background-color: lightgrey;
	font-size: 20px;
}

#general{
	font-family: arial;
	
	padding: 5px;
}

#pay{	
		margin-top: 20px;
		float: bottom;
		background-color:#0D86EA   ;
		height: 50px;
		width:130px;
		border-radius: 20px;
		padding: 0;
		font-size: 16px;
		color: white;

}

#home{

		float: center;
		background-color: #0D86EA;
		font-size:16px;
		color: white;
		height: 50px;
		width:130px;
		border-radius: 20px;
		margin-top: 10px;
		
		
	}

	.ScrollStyle
{
    
overflow-y: scroll;
max-height: 80px;
font-family: arial;

   

}

</style>

<body>

<center><h1>Server Check</h1></center>

<?php
error_reporting(0);
include "config.php";
$server_name = $_GET['server'];
$server_name1 = $_GET['server'];
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

//gathering information from server check database //


$result = mysqli_query($conn,"SELECT * from server_check where server_name = '$server_name' and payment_method = 'card' ");
$result1 = mysqli_query($conn,"SELECT * from server_check where server_name = '$server_name' and payment_method = 'cash' ");
$result2 = mysqli_query($conn,"SELECT SUM(amount) from server_check where server_name = '$server_name' and payment_method = 'card' ");
$result3 = mysqli_query($conn,"SELECT SUM(amount) from server_check where server_name = '$server_name' and payment_method = 'cash' ");
$result4 = mysqli_query($conn,"SELECT SUM(covers) from new_tables1 where owner = '$server_name' ");
$card_payment_count = mysqli_num_rows($result);
$cash_payment_count = mysqli_num_rows($result1);
$total_cash_payment = mysqli_fetch_array($result2);
$total_card_payment = mysqli_fetch_array($result3);
$total_cash_payment = round($total_cash_payment[0],2);
$total_card_payment = round($total_card_payment[0],2);
$total_sales = $total_card_payment + $total_cash_payment;
$cover_count = mysqli_fetch_array($result4);
$total_discounts = mysqli_query($conn,"SELECT * from perm_discounts where name = '$server_name'");
$total_discounts1 = mysqli_num_rows($total_discounts);
$discount_value = mysqli_query($conn,"SELECT SUM(price) from perm_discounts where name = '$server_name'");
$discount_value1 = mysqli_fetch_array($discount_value);
$discount_value1 = round($discount_value1[0]);
$discount_reason = mysqli_query($conn,"SELECT * from perm_discounts where name = '$server_name'");
$discount_reason1 = mysqli_num_rows($discount_reason);

//gathering information end//
//server_name payment method amount id table_number

echo "
<div id = 'printarea'>
	<center><h3>General Information</h3></center> 
	<p id = 'general'> Name : $server_name</p> 
	<p id = 'general'> Job Role : $server_job</p>

	<center><h3> Sales Information</h3></center>
	<p id = 'general'>Card Payment Count : $card_payment_count</p>
	<p id = 'general'>Cash Payment Count : $cash_payment_count</p>
	<p id = 'general'>Total Card Payment : £ $total_cash_payment</p>
	<p id = 'general'>Total Cash Payment : £ $total_card_payment</p>

	<center><h3> Performance Stats</h3></center>
	<p id = 'general'>Total Covers Served : $cover_count[0] </p>
	<p id = 'general'>Total Sales :  £ $total_sales</p>

	<center><h3> Discounts</h3></center>
	<p id = 'general'>Total Discounts Count : $total_discounts1</p>
	<p id = 'general'>Total Discounted Amount : £ $discount_value1</p>

";
echo "<p id = 'general'>Discount Types :</p>";
echo "<div class = 'ScrollStyle'>";
for ($i=0; $i < $discount_reason1 ; $i++) { 
	$discount_reason2 = mysqli_fetch_array($discount_reason);
	
	echo "<li id = 'general'> $discount_reason2[1] </li>";
	
}
echo "</div>";
echo "




	</div>
	<center><form method = 'post'><input type = 'submit' value = 'Print Report' name = 'bill'  id = 'pay'></form></center>
	<center><form method = 'post' action = 'dashboard.php?data=$server_name&data1=$server_role'>
			
			<input type = 'submit' value = 'Done'name = 'home'  id = 'home'>
			</form></center>

";

if (isset($_POST['bill'])) {
	echo "<script type='text/javascript'>
	var prtContent = document.getElementById('printarea');
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
WinPrint.close();
</script>";
}


?>

</body>
</html>