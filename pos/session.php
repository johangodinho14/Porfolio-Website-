

<head><title>Order Panel</title> </head>
<style type="text/css">
	body, html{
	margin:0;
	background-color: #33D2FF;
}
input:focus, textarea:focus, select:focus{
        outline: none;
    }

h1{
	background: #0D86EA;
	margin-top: 0;
	color: white;
	height: 50px;
	font-family: calibri;
	

}



#general_buttons{
background-color:red; 
margin-left: 30px;
		height: 45px;
		width:220px;
		font-size: 17px;
		color: white;
		border:none;
}

#general_buttons:hover{
	background-color: #FBA8A8;
}

#general_buttons1:hover{
	background-color: #FBA8A8;
}

#login_box{

	width: 320px;
	height: 50px;
	font-family: calibri;
	font-size: 20px;
}

#submit_box{
	margin-top: 20px;
	width: 80px;
	height: 57px;
	background-color:#30B1EF ;
	color: white;
	font-size: 18px;
}
#submit_box1{
	margin-top: 20px;
	width: 380px;
	height: 57px;
	background-color:#30B1EF ;
	color: white;
	font-size: 18px;
}

#error{
	color: red;
	font-family: calibri;
	font-size: 20px;
}

#box{
	display: block;
	margin:auto;
	width: 500px;
	height: 300px;
	background: #168BD8;
	margin-top: 40px
	
	
}

h2, h3{
	font-family: arial;
	

}

#new1{
	margin-top: -10px;
}
img{
	display: block;
	margin:auto;

}

#identify{
	height: 160px;

}

#warning1{
	font-family: arial;
	color: red;
	margin-top: 10px;
	font-size: 18px;
}

#warning{
	font-family: arial;
	color: red;
	
	font-size: 18px;
}

#general_textbox{
height:30px;
width: 250px;
font-size: 16px;
font-family: arial;
margin-left: 30px;



}

#general_textbox1{
height:30px;
width: 250px;
font-size: 16px;
font-family: arial;
margin-left: 30px;



}


#general{
	font-family: arial;
	font-size: 16px;
	margin-left: 30px;

}

#new{
	font-family: arial;
	font-size: 19px;
	margin-left: 30px;
	margin-top: -450px;
	text-align: center;
    border-bottom: 6px solid lightgrey;
    background-color:#0D86EA ;
    color: white;

}

#general_buttons1{
	font-family: calibri;
	background-color:#0D86EA; 
	margin-top: -200px;
	margin-left: 30px;
		height: 45px;
		width:100px;
		font-size: 15px;
		color: white;
		border:none;

}
	body{
		margin: 0;
	}
	#categor{
		float: bottom;
		background-color: #0D86EA  ;
		height: 50px;
		width:100px;
		color: white;
		font-size: 16px;
		border:none;
		
	}

	h1{
		background: #0D86EA;

	margin-top: 0;
	color: white;
	height: 50px;
	font-family: calibri;
	}

	#small_info{
		font-family: "calibri";
		font-size: 15px;
	}

	#cash{
		font-family: Arial;
		margin-top: -300px;
		height: 40px;
		width: 150px;
		font-size: 16px;
		
	}

	#drinks{
		
		margin-left: 1px;
		margin-top: 1px;
		float: left;
		background-color:  #F60000;
		height: 50px;
		width:200px;
		color: white;
		font-size: 16px;
		border:none;
		padding: 5px;
	}

	#drinks:hover{
		background-color: #F66B6B;
	}

	#price_style{
		font-family: arial;
		font-size: 18px;
		
		
	}

	#holder2{
		margin-top: -230px;
	}

	#home{
		
		background-color: #0D86EA;
		font-size:16px;
		color: white;
		height: 50px;
		width:100px;
		border:none;
		
		
	}


	.ScrollStyle
{
    
overflow-y: scroll;
max-height: 226px;
font-family: arial;

   

}

#send{
		float: bottom;
		background-color:#73BAFA ;
		height: 50px;
		width:100px;
		color: black;
		font-size: 16px;
		border:none;
		color: white;
}

#send:hover{
	background-color: #A8D3FB;
}
#warning{
	font-family: Arial;
	color: white;
}

#warning1{
	font-family: Arial;
	color: red;
	margin-top: -350px;
}

#pay{
	background-color:#00F64D   ;
		height: 50px;
		width:100px;
		font-size: 16px;
		border:none;

		
		}

#pay:hover{
	background-color: #73FA9D;
}


#info{
	font-family: Arial;
	color: green;
	text-align: center;
	margin-top: -300px;
	
}

#card{
	
		float: bottom;
		background-color:#2FF921  ;
		height: 60px;
		width:120px;
		font-size: 16px;
		border:none;

		
}

#card:hover{
	background-color: #86FF7D;
}

#drinks_holder{
	margin-top:-651px;
	margin-left: auto;



}

#home:hover{
	background-color: #27AEF9;

}

#categor:hover{
	background-color: #27AEF9;

}

#main_table{

		width: 40%;
		float: right;
		margin-left: auto;
		padding: 15px;
		margin-right: 10px;
		background-color: white;
		font-family: arial;
		border: none;
		border-radius: 9px;
	}

	#bill_infor{
		border-bottom: solid 2px black;
		border-top: solid 2px black;
	}

	#button_holder{
	float: left;
	display: block;
	width: 50%;
	border-radius: 9px;
	background-color: white;
	padding: 5px;	

	}
	#all_buttons{

		width: 60%;
		float: left;
		margin-left: 25%;
		margin-top: 108px;
		
	}



	
</style>

<?php
error_reporting(0);

include "config.php";
	
$table_number = $_GET['table'];
$quantity2 = $_GET['quantity'];
echo "<center><h1 id = 'simple'>Order Selection T: $table_number</h1></center>";
echo "<p id = 'warning'>Quantity : $quantity2 </p>";
//echo "<center><p id = 'small_info'>You can add items to your table here</p></center>";


//order preview and information//
	echo "<div id = 'main_table'>";
	$table_number_preview = $_GET['table'];
	$server_name = $_GET['server'];

	$info4 = mysqli_query($conn, "SELECT * from billing  where table_number = $table_number_preview ORDER BY id desc");
	
	$info6 = mysqli_num_rows($info4);
	$information3 = mysqli_query($conn, "SELECT * from total where table_number = $table_number");
	$information4 = mysqli_num_rows($information3);
	$information5 = mysqli_fetch_array($information3);

	if($info6 > 0){

		echo "<div id = 'printarea'>";
		echo "<center><h3>RMS</h3></center>";
		echo "<p>Server : $server_name </p>";
		$timezone = date_default_timezone_get();
		date_default_timezone_set($timezone);
		$date = date('d/m/Y h:i:s a', time());
		$date1 = date('d/m/Y'); 

		echo "       $date    ";

		echo "<p id = 'bill_infor'>Bill Information</p>";

		echo "<div class = 'ScrollStyle'>";

	for ($i=0; $i < $info6; $i++) { 
	
	$info5 = mysqli_fetch_array($info4);
	
	
	echo "<li style = 'list-style:none; margin-left:2px;'>$info5[1]</li>";	
	echo " <li style = 'margin-left:200px; margin-top:-15px;list-style:none;'> £ $info5[2]</li>";
	

	

	}
	echo "<p>Thanks for your visit";
	echo "</div>";
	if ($information4 > 0) {
		$total4 = mysqli_query($conn,"SELECT SUM(price) from billing where table_number = $table_number_preview");
	$total4 = mysqli_fetch_array($total4);
		
		

		echo "<p>Total : £ ";
		$new_total1 = ($total4[0] - $information5[0]);
		$new_total1 = round($new_total1, 2);
		echo $new_total1;
		$total = [];
		$total[0] = $new_total1;

		echo "<p> promotional savings : $information5[3] </p><p>Total Saved:  £ $information5[0]</p>"; 
		echo "</div>";

	}else{
		$total = mysqli_query($conn,"SELECT SUM(price) from billing where table_number = $table_number_preview");
	$total = mysqli_fetch_array($total);
	echo "<p>Total : £ ";
	$tota = round($total[0],2);
	echo $tota;


	echo "</div>";
}
	echo "<form method = 'post'>
			<input type = 'submit' value = 'Send'name = 'send'  id = 'send'>
			<input type = 'submit' value = 'Pay'name = 'pay'  id = 'pay'>
		

			
		
			<input type = 'submit' value = 'Print Bill' name = 'bill'  id = 'pay'>
			<input type = 'submit' name = 'void' value = 'Void' id = 'pay'>
			<input  style = 'margin-top: 5px;' type = 'submit' name = 'discount' value = 'Discount' id = 'pay'>
			<input  style = 'margin-top: 5px;' type = 'submit' name = 'quantity' value = 'Quantity' id = 'pay'>
			<input  style = 'margin-top: 5px;' type = 'submit' name = 'ov' value = 'Voucher' id = 'pay'>
			<input  style = 'margin-top: 5px;' type = 'submit' name = 'split' value = 'Split T' id = 'pay'>
			<input  style = 'margin-top: 5px;' type = 'submit' name = 'message' value = 'Message' id = 'pay'>
			</form>
			";

	
	

	
	}


	else{
		echo "<center><p style = 'font-family:Arial;color:red'>Nothing has been added to table $table_number_preview 's cart</p></center><form method = 'post'>
			<input type = 'submit' value = 'Send'name = 'send'  id = 'send'>
			<input type = 'submit' value = 'Pay'name = 'pay'  id = 'pay'>
		

			
		
			<input type = 'submit' value = 'Print Bill' name = 'bill'  id = 'pay'>
			<input type = 'submit' name = 'void' value = 'Void' id = 'pay'>
			<input  style = 'margin-top: 5px;' type = 'submit' name = 'discount' value = 'Discount' id = 'pay'>
			<input  style = 'margin-top: 5px;' type = 'submit' name = 'quantity' value = 'Quantity' id = 'pay'>
			<input  style = 'margin-top: 5px;' type = 'submit' name = 'ov' value = 'Voucher' id = 'pay'>
			<input  style = 'margin-top: 5px;' type = 'submit' name = 'split' value = 'Split T' id = 'pay'>
			<input  style = 'margin-top: 5px;' type = 'submit' name = 'message' value = 'Message' id = 'pay'>
			</form>";


	}

	echo "</div>";
	
	


	//order preview and information end//
	
	$username = $_GET['server'];
	$level = $_GET['level'];

	echo "	<div id = 'button_holder'>
	<p></p>
			<form method = 'post'id = 'home' action = 'dashboard.php?data=$username&data1=$level'>
			<input type = 'hidden' name = 'home' value = 'home'>
			<input type = 'submit' value = 'Home'name = 'home'  id = 'home'>
			</form>
			<form method = 'post'>
			<input type = 'hidden' name = 'categ' value = 'c1'>
			<input type = 'submit' value = 'Minerals' name = 'done1'  id = 'categor'>
			</form>
			<form method = 'post'>
			<input type = 'hidden' name = 'categ' value = 'c2'>
			<input type = 'submit' value = 'Spirits' name = 'done2'  id = 'categor'>
			</form>
			<form method = 'post'id = 'categor'>
			<input type = 'hidden' name = 'categ' value = 'c3'>
			<input type = 'submit' value = 'Wine' name = 'done3'  id = 'categor'>
			</form>
			<form method = 'post'id = 'categor'>
			<input type = 'hidden' name = 'categ' value = 'c4'>
			<input type = 'submit' value = 'Juices' name = 'done4'  id = 'categor'>
			</form>
			<form method = 'post'id = 'categor'>
			<input type = 'hidden' name = 'categ' value = 'c5'>
			<input type = 'submit' value = 'Burgers'name = 'done5'  id = 'categor'>
			</form>
			<form method = 'post'id = 'categor'>
			<input type = 'hidden' name = 'categ' value = 'c6'>
			<input type = 'submit' value = 'Desserts'name = 'done6'  id = 'categor'>
			</form>
			<form method = 'post'id = 'categor'>
			<input type = 'hidden' name = 'categ' value = 'c7'>
			<input type = 'submit' value = 'Hot Drinks'name = 'done7'  id = 'categor'>
			</form>
			
			
			

	";
	
//server name // order // price // table number // id

// all buttons and prices to show up aka form submit buttons//
echo "<div id = 'all_buttons'>";
if (isset($_POST['done1'])) { // Minerals information sub categ
	$order_type = $_POST['categ'];
	$info2 = mysqli_query($conn, "SELECT minerals from menu");
	$info3 = mysqli_query($conn, "SELECT mineral_prices from prices");
	
	$number = mysqli_num_rows($info2);
	
		for ($i=0; $i < $number ; $i++) { 
			$data=mysqli_fetch_array($info2);
		$data1=mysqli_fetch_array($info3);
		$stock_info = mysqli_query($conn,"SELECT * from stock where item_name = '$data[0]' ");
		$stock_count = mysqli_fetch_array($stock_info);
		if ($stock_count[1] == 'Out_Of_Stock') {
			echo "<div id = 'drinks_holder'>
	<form method = 'post'>
			<input type = 'hidden' name = 'minerals' value = '$data[0]'>
			<input type = 'hidden' name = 'bill' value = '$data[0]'>
			<input type = 'hidden' name = 'price_submit' value = '$data1[0]'>
			<input style = 'background-color:lightgrey; color:black;' type = 'submit' value = '$data[0]' name = 'add_to_cart'  id = 'drinks' disabled >
			</form>
			</div>
			";
		}
		else{
		
		echo "<div id = 'drinks_holder'>
	<form method = 'post'>
			<input type = 'hidden' name = 'minerals' value = '$data[0]'>
			<input type = 'hidden' name = 'bill' value = '$data[0]'>
			<input type = 'hidden' name = 'price_submit' value = '$data1[0]'>
			<input type = 'submit' value = '$data[0]' name = 'add_to_cart'  id = 'drinks'>
			</form>
			</div>
			";
		}
		}
		

	
			

	

	
}

elseif (isset($_POST['message'])) {
 echo "<p id = 'new'>Enter Message</p>";
 echo "<center><form method = 'post'>

 <input  id = 'general_textbox' type = 'text' name = 'message_value' autocomplete = 'off' placeholder = 'Message' maxlength = '25' value = 'message : '>
 <select name = 'sendoption' >
<option value = 'Kitchen'>Kitchen</option>
<option value = 'Bar'>Bar</option>
 </selection>
 <input style = 'margin-top:10px;' id = 'general_buttons' type = 'submit' name = 'message_done' value = 'Done'>

 </form></center> ";
}

elseif (isset($_POST['message_done'])) {
	$sendoption = $_POST['sendoption'];
	$message = $_POST['message_value'];
	
	if ($sendoption == 'Kitchen') {
		mysqli_query($conn,"INSERT into kitchen_preview values ('$server_name','$message', '', '$table_number', '', '$date', '1') ");
		echo "<center><p id = 'warning1'> Message has been sent to the $sendoption successfully</p></center>";
	}else{
		mysqli_query($conn,"INSERT into bar_preview values ('$server_name','$message', '', '$table_number', '', '$date', '1') ");
		echo "<center><p id = 'warning1'> Message has been sent to the $sendoption successfully</p></center>";
	}
	
}

elseif (isset($_POST['ov'])) {
	echo "<p id = 'new'>Online Voucher Validation</p>";
	echo "<center><form method = 'post'><input id = 'general_textbox' type = 'text' name = 'voucher_code' placeholder = 'Voucher Code' autocomplete = 'off'><p></p><input id = 'general_buttons' type = 'submit' name = 'ov_done' value = 'Apply'></form></center>";
}

elseif (isset($_POST['ov_done'])) {
	$voucher_code = $_POST['voucher_code'];
	$voucher_check = mysqli_query($conn,"SELECT * from rov where voucher_code = '$voucher_code' ");
	$voucher_check1 = mysqli_num_rows($voucher_check);
	if ($voucher_check1 == 1) {
		$voucher_data=mysqli_fetch_array($voucher_check);
		$discount_name = $voucher_data[0];
		$discount_code= $voucher_data[1];
		$discount_amount= $voucher_data[2];
		$discount1_type= $voucher_data[3];
		$discount_type1= $voucher_data[4];

		if ($discount1_type == 'p' and $discount_type1 == 't') {
			$calculation = ($discount_amount / 100) * $total[0];
			$calculation = round($calculation, 2);
			

			$valdiate_discount = mysqli_query($conn,"SELECT * from total where table_number = '$table_number' ");
			$valdiate_discount1 = mysqli_num_rows($valdiate_discount);
			if ($valdiate_discount1 > 0) {
				echo "<center><p id = 'warning1'>Table already has a voucher applied to it. Remove discount to apply online voucher.</p></center>";
			}else{
				mysqli_query($conn,"INSERT into total values('$calculation', '$table_number', '', '$discount_name')");
				mysqli_query($conn,"INSERT into perm_discounts values('$server_name', '$discount_name', '$calculation','', '$table_number')");	
				mysqli_query($conn,"INSERT into bo_discount_reports values('$server_name', '$discount_name', '$calculation','', '$table_number', '$date1')");	
				echo "<meta http-equiv='refresh' content='0'>";
			}
		}elseif ($discount1_type == 'p' and $discount_type1 == 'f') {
			$discount_total = mysqli_query($conn,"SELECT SUM(price) from kitchen where table_number = $table_number and TRIM(new_orders) > ''  ");
			$discount_total1 = mysqli_fetch_array($discount_total);
			
			$calculation = ($discount_amount / 100) * $discount_total1[0];
			$calculation = round($calculation, 2);
			

			$valdiate_discount = mysqli_query($conn,"SELECT * from total where table_number = '$table_number' ");
			$valdiate_discount1 = mysqli_num_rows($valdiate_discount);
			if ($valdiate_discount1 > 0) {
				echo "<center><p id = 'warning1'>Table already has a voucher applied to it. Remove discount to apply online voucher.</p></center>";
			}else{
				mysqli_query($conn,"INSERT into total values('$calculation', '$table_number', '', '$discount_name')");
				mysqli_query($conn,"INSERT into perm_discounts values('$server_name', '$discount_name', '$calculation','', '$table_number')");	
				mysqli_query($conn,"INSERT into bo_discount_reports values('$server_name', '$discount_name', '$calculation','', '$table_number', '$date1')");
				echo "<meta http-equiv='refresh' content='0'>";
			}
		}elseif ($discount1_type == 'p' and $discount_type1 == 'd') {
			$discount_total = mysqli_query($conn,"SELECT SUM(price) from bar where table_number = $table_number and TRIM(`order`) > ''  ");
			$discount_total1 = mysqli_fetch_array($discount_total);
			
			$calculation = ($discount_amount / 100) * $discount_total1[0];
			$calculation = round($calculation, 2);
			

			$valdiate_discount = mysqli_query($conn,"SELECT * from total where table_number = '$table_number' ");
			$valdiate_discount1 = mysqli_num_rows($valdiate_discount);
			if ($valdiate_discount1 > 0) {
				echo "<center><p id = 'warning1'>Table already has a voucher applied to it. Remove discount to apply online voucher.</p></center>";
			}else{
				mysqli_query($conn,"INSERT into total values('$calculation', '$table_number', '', '$discount_name')");
				mysqli_query($conn,"INSERT into perm_discounts values('$server_name', '$discount_name', '$calculation','', '$table_number')");	
				mysqli_query($conn,"INSERT into bo_discount_reports values('$server_name', '$discount_name', '$calculation','', '$table_number', '$date1')");
				echo "<meta http-equiv='refresh' content='0'>";
			}
		}elseif ($discount1_type == 'a' and $discount_type1 == 't') {
			//$discount_total = mysqli_query("SELECT SUM(price) from bar where table_number = $table_number and TRIM(`order`) > ''  ");
			//$discount_total1 = mysqli_fetch_array($discount_total);
			
			

			$valdiate_discount = mysqli_query($conn,"SELECT * from total where table_number = '$table_number' ");
			$valdiate_discount1 = mysqli_num_rows($valdiate_discount);
			if ($valdiate_discount1 > 0) {
				echo "<center><p id = 'warning1'>Table already has a voucher applied to it. Remove discount to apply online voucher.</p></center>";
			}else{
				if ($total[0] > $discount_amount) {
					mysqli_query($conn,"INSERT into total values('$discount_amount', '$table_number', '', '$discount_name')");
				mysqli_query($conn,"INSERT into perm_discounts values('$server_name', '$discount_name', '$discount_amount','', '$table_number')");	
				mysqli_query($conn,"INSERT into bo_discount_reports values('$server_name', '$discount_name', '$discount_amount','', '$table_number', '$date1')");
				echo "<meta http-equiv='refresh' content='0'>";
				}
				else{
					echo "<center><p id = 'warning1'>Please make sure that the sale is greater than the discount amount </p></center>";
				}
				
			}
	}elseif ($discount1_type == 'a' and $discount_type1 == 'f') {
			$discount_total = mysqli_query($conn,"SELECT SUM(price) from kitchen where table_number = $table_number and TRIM(new_orders) > ''  ");
			$discount_total1 = mysqli_fetch_array($discount_total);
			
			

			$valdiate_discount = mysqli_query($conn,"SELECT * from total where table_number = '$table_number' ");
			$valdiate_discount1 = mysqli_num_rows($valdiate_discount);
			if ($valdiate_discount1 > 0) {
				echo "<center><p id = 'warning1'>Table already has a voucher applied to it. Remove discount to apply online voucher.</p></center>";
			}else{
				if ($discount_total1[0] > $discount_amount) {
					mysqli_query($conn,"INSERT into total values('$discount_amount', '$table_number', '', '$discount_name')");
				mysqli_query($conn,"INSERT into perm_discounts values('$server_name', '$discount_name', '$discount_amount','', '$table_number')");	
				mysqli_query($conn,"INSERT into bo_discount_reports values('$server_name', '$discount_name', '$discount_amount','', '$table_number', '$date1')");
				echo "<meta http-equiv='refresh' content='0'>";
				}
				else{

					echo "<center><p id = 'warning1'>Please make sure that the sale is greater than the discount amount </p></center>";
				}
				
			}
}elseif ($discount1_type == 'a' and $discount_type1 == 'd') {
			$discount_total = mysqli_query($conn,"SELECT SUM(price) from bar where table_number = $table_number and TRIM(`order`) > ''  ");
			$discount_total1 = mysqli_fetch_array($discount_total);
			
			

			$valdiate_discount = mysqli_query($conn,"SELECT * from total where table_number = '$table_number' ");
			$valdiate_discount1 = mysqli_num_rows($valdiate_discount);
			if ($valdiate_discount1 > 0) {
				echo "<center><p id = 'warning1'>Table already has a voucher applied to it. Remove discount to apply online voucher.</p></center>";
			}else{
				if ($discount_total1[0] > $discount_amount) {
					mysqli_query($conn,"INSERT into total values('$discount_amount', '$table_number', '', '$discount_name')");
				mysqli_query($conn,"INSERT into perm_discounts values('$server_name', '$discount_name', '$discount_amount','', '$table_number')");	
				mysqli_query($conn,"INSERT into bo_discount_reports values('$server_name', '$discount_name', '$discount_amount','', '$table_number', '$date1')");
				echo "<meta http-equiv='refresh' content='0'>";
				}else{
					echo "<center><p id = 'warning1'>Please make sure that the sale is greater than the discount amount </p></center>";
				}
				
			}
}}}
elseif (isset($_POST['void'])) {
	
	$table_num = $_GET['table'];
	
	if ($level == 5) {

	$result3 = mysqli_query($conn,"SELECT * from billing where table_number = '$table_num' ORDER BY id desc ");
	
	echo "<p id = 'new'>Void Items</p>";
	echo "<p id  = 'general'> Table Number : $table_num </p>";
	$num = mysqli_num_rows($result3);
	for ($i=0; $i < $num; $i++) { 
		$result4 = mysqli_fetch_array($result3);
		echo "<div id = 'newone'>
		<form method='post'>
		<input type = 'hidden' value = '$table_num' name = 'table_num'>
		<input  type = 'submit' name = 'delete1' value = '$result4[1]' id = 'general_buttons'> </br></form>
		</div>
		";
		


	}



	}


	elseif ($level == 4) {
	
	$result3 = mysqli_query($conn,"SELECT * from billing where table_number = '$table_num' ");
	
	echo "<p id = 'new'>Void Items</p>";
	echo "<p id  = 'general'> Table Number : $table_num </p>";
	$num = mysqli_num_rows($result3);
	for ($i=0; $i < $num; $i++) { 
		$result4 = mysqli_fetch_array($result3);
		echo "<div id = 'newone'>
		<form method='post'>
		<input type = 'hidden' value = '$table_num' name = 'table_num'>
		<input  type = 'submit' name = 'delete1' value = '$result4[1]' id = 'general_buttons'> </br></form>
		</div>
		";
		


	}
	}

	else{
		echo "<center><p id = 'warning1'>Account is not allowed to complete direct voids. Please use manager panel to complete void.</p></center>";
	}
	
}


elseif ($_POST['delete1']) {
	$table_num = $_POST['table_num'];
	
	$values1 = $_POST['delete1'];
	$quantity3 = $_GET['quantity'];
	if ($quantity3 > 1) {
		for ($i=0; $i < $quantity3 ; $i++) { 
			mysqli_query($conn,"DELETE from table_orders where table_number = '$table_num' and `order` = '$values1' LIMIT 1");
			mysqli_query($conn,"DELETE from table_orders where table_number = '$table_num' and food_order = '$values1' LIMIT 1");
			mysqli_query($conn,"DELETE from bar where table_number = '$table_num' and `order` = '$values1' LIMIT 1");
			mysqli_query($conn,"DELETE from bar_preview where table_number = '$table_num' and `order` = '$values1' LIMIT 1");
			mysqli_query($conn,"DELETE from billing where table_number = '$table_num' and `order` = '$values1' LIMIT 1");
			mysqli_query($conn,"DELETE from kitchen where table_number = '$table_num' and new_orders = '$values1' LIMIT 1");
			mysqli_query($conn,"DELETE from kitchen_preview where table_number = '$table_num' and `order` = '$values1' LIMIT 1");
			
	echo "<meta http-equiv='refresh' content='0'>";
		}
	}else{
	

	mysqli_query($conn,"DELETE from table_orders where table_number = '$table_num' and `order` = '$values1' LIMIT 1");
	mysqli_query($conn,"DELETE from table_orders where table_number = '$table_num' and food_order = '$values1' LIMIT 1");
	mysqli_query($conn,"DELETE from bar where table_number = '$table_num' and `order` = '$values1' LIMIT 1");
	mysqli_query($conn,"DELETE from bar_preview where table_number = '$table_num' and `order` = '$values1' LIMIT 1");
	mysqli_query($conn,"DELETE from billing where table_number = '$table_num' and `order` = '$values1' LIMIT 1");
	mysqli_query($conn,"DELETE from kitchen where table_number = '$table_num' and new_orders = '$values1' LIMIT 1");
	mysqli_query($conn,"DELETE from kitchen_preview where table_number = '$table_num' and `order` = '$values1' LIMIT 1");
	
	echo "<meta http-equiv='refresh' content='0'>";
}

}

elseif (isset($_POST['quantity'])) {
	echo "<form method = 'post'>
	<div id = 'holder2'>
		<center><input  type = 'text' autocomplete = 'off' name = 'numpad_value' id = 'general_textbox1' placeholder = 'Quantity Amount' maxlength = 1></br>
		<input style = 'margin-top:10px;' type = 'submit' value = 'Done' name = 'num'  id = 'general_buttons'></center>
	</div>
	</form>";
}

elseif (isset($_POST['split'])) {
	$split = $_GET['split'];

	if ($split == "") {
		echo "<p id = 'new'>Split Table</p>";
	echo "<center><form method = 'post'><input id = 'general_textbox' type = 'text' name = 'new_table_num' placeholder = 'Table Number' autocomplete = 'off' ><input style = 'margin-top:10px;' id = 'general_textbox' name = 'new_cover_count' type = 'text' placeholder = 'Cover Count' autocomplete = 'off' ><input style = 'margin-top:10px;' id = 'general_buttons' type = 'submit' name = 'split_order_done' value = 'Split'></form></center>";
	}

	else{
		$all_information = mysqli_query($conn,"SELECT * from billing where table_number = '$table_number' ");
	$all_information_count = mysqli_num_rows($all_information);
	echo "<p id = 'new'>Please Select Items To Be Split</p>";
	for ($i=0; $i < $all_information_count; $i++) { 
		$all_information1 = mysqli_fetch_array($all_information);
		echo "<center><form method = 'post'><input type = 'hidden' name = 'price4' value = '$all_information1[2]'>
		<input id = 'general_buttons' type = 'submit' value = '$all_information1[1]' name = 'split_order_value'></form></center>";


	}



	


	}

	}
	


elseif (isset($_POST['split_order_value'])) {
	$order_value3 = $_POST['split_order_value'];
	$new_price = $_POST['price4'];
	$split = $_GET['split'];
	if ($quantity > 0) {
		for ($i=0; $i < $quantity; $i++) { 
			mysqli_query($conn,"DELETE from billing where table_number = '$table_number' LIMIT 1 ");
	mysqli_query($conn,"INSERT into billing values('$server_name', '$order_value3', '$new_price', '$split', '')");

	echo "<meta http-equiv='refresh' content='2'>";
	echo "<center><p id = 'warning1'>$order_value3 has been added to T: $split</p></center>";
		}
	}else{
		mysqli_query($conn,"DELETE from billing where table_number = '$table_number' LIMIT 1 ");
	mysqli_query($conn,"INSERT into billing values('$server_name', '$order_value3', '$new_price', '$split', '')");

	echo "<meta http-equiv='refresh' content='2'>";
	echo "<center><p id = 'warning1'>$order_value3 has been added to T: $split</p></center>";
	}
	
}

elseif (isset($_POST['split_order_done'])) {

	$new_table_num = $_POST['new_table_num'];
	$new_cover_count = $_POST['new_cover_count'];
	if ($new_table_num == "") {
		echo "<center><p id = 'warning1'>Table Number Needs To Be Entered</p></center>";
	}
	else{

	$checker4 = mysqli_query($conn,"SELECT * from new_tables where table_number = '$new_table_num' ");
	$checker5 = mysqli_num_rows($checker4);
	if ($checker5 > 0) {
		echo "<center><p id = 'warning1'>$new_table_num is already open please use a different table number</p></center>";
	}
	else{
		$quantity = $_GET[''];
	mysqli_query($conn,"INSERT into new_tables values('$new_table_num', '', '$new_cover_count', '$server_name')");
	echo "<meta http-equiv='Refresh' content='0;url=session.php?server=$server_name&level=$level&table=$table_number&split=$new_table_num'&quantity='$quantity'>";
	

	
}}

}

elseif (isset($_POST['num'])) {
	
	$quantity = $_POST['numpad_value'];
	echo "<meta http-equiv='Refresh' content='0;url=session.php?server=$server_name&level=$level&table=$table_number&quantity=$quantity'>";
}


elseif (isset($_POST['discount'])) {
	if ($level > 3) {
		//discount options
	echo "<form method = 'post' >
	
	<center><p id = 'warning1'> Please select discount type </p></center>
	<input style = 'width:150px;' type = 'submit' name = 'percent_discount' value = '% Total Bill ' id = 'pay'>
	<input style = 'width:130px;' type = 'submit' name = 'local_discount' id = 'pay' value = 'Local Activity'>
	<input style = 'width:150px; margin-top:10px;' type = 'submit' name = 'food_discount' id = 'pay' value = '% Food Discount'>
	
	
	<center><input style = 'width:280px; margin-top:10px;color:white; background-color:red;' type = 'submit' name = 'remove_discounts' id = 'pay' value = 'Remove All Discounts'></center>
	</form>
	";
	}else{
		echo "<center><p id = 'warning1'> Account doesn't have the privillage to add discounts </p></center>";
	
	//add dallas key if needed
	}}

	


elseif (isset($_POST['local_discount'])) {
	echo "<center><p id = 'warning1' style = 'color:black; margin-left:30px; '> Please enter Discount Amount </p></center>
	<form  method = 'post'>
	<center><input type = 'text' autocomplete = 'off' id = 'general_textbox' placeholder = '£' name = 'local_discount_value'>
	<input style = 'margin-top:10px;'type = 'submit' name = 'local_discount_done' value = 'Apply' id = 'general_buttons'>
	</center></form>"; 
}

elseif (isset($_POST['food_discount'])) {
	echo "<center><p id = 'warning1' style = 'color:black; margin-left:30px; '> Please enter Food Discount % | For discount to work please make sure to send the order first </p></center>
	<form  method = 'post'>
	<center><input type = 'text' autocomplete = 'off' maxlength = '3' id = 'general_textbox' placeholder = '%' name = 'food_discount_value'>
	<input style = 'margin-top:10px;'type = 'submit' name = 'food_discount_done' value = 'Apply' id = 'general_buttons'>
	</center></form>"; 
}

elseif (isset($_POST['food_discount_done'])) {
	$amount4 = $_POST['food_discount_value'];
		$discount_type = " $amount4 %  off food ";
	
	$discount = mysqli_query($conn,"SELECT SUM(price) from kitchen where table_number = $table_number and TRIM(new_orders) > ''  ");
	$discount_value = mysqli_fetch_array($discount);
	$discount_value1 = round($discount_value[0], 2);
	
	$calc = ($amount4 / 100) * $discount_value1;
	$calc = round($calc, 2);
	

	
	$information1 = mysqli_query($conn,"SELECT * from total where table_number = $table_number");
	$information2 = mysqli_fetch_array($information1);
	$checker = mysqli_num_rows($information1);
	if ($checker > 0) {
		echo "<center><p id = 'warning1'>Table already has $information2[3] added to it. Delete Discount to apply a different type.</p></center> ";
	}else{
	mysqli_query($conn,"INSERT into total values('$calc', '$table_number', '','$discount_type')");	
	mysqli_query($conn,"INSERT into perm_discounts values('$server_name', '$discount_type', '$calc','', '$table_number')");
	mysqli_query($conn,"INSERT into bo_discount_reports values('$server_name', '$discount_type', '$calc','', '$table_number', '$date1')");	
	echo "<meta http-equiv='refresh' content='0'>";

}
}
elseif (isset($_POST['percent_discount'])) {
	mysqli_connect("localhost", "root", "");
	mysqli_select_db("pos");
	
	echo "<center><p id = 'warning1' style = 'color:black; margin-left:30px; '> Please enter Discount Percentage </p></center>
	<form  method = 'post'>
	<center><input type = 'text' autocomplete = 'off' maxlength = '3' id = 'general_textbox' placeholder = '%' name = 'percent_discount_value'>
	<input style = 'margin-top:10px;'type = 'submit' name = 'percent_discount_done' value = 'Apply' id = 'general_buttons'>
	</center></form>"; 

	

	
	
}

elseif ($_POST['local_discount_done']) {
	$amount4 = $_POST['local_discount_value'];
		$discount_type = "£ $amount4  off total ";
		$price = mysqli_query($conn,"SELECT * from billing where table_number = $table_number ");
	$discount_value = mysqli_query($conn,"SELECT SUM(price) from billing where table_number = $table_number ");
	$discount_value1 = mysqli_fetch_array($discount_value);
	$discount_value1 = round($discount_value1[0], 2);
	$calc = $amount4;
	$calc = round($calc, 2);
	
	
	$information1 = mysqli_query($conn,"SELECT * from total where table_number = $table_number");
	$information2 = mysqli_fetch_array($information1);
	$checker = mysqli_num_rows($information1);
	if ($checker > 0) {
		echo "<center><p id = 'warning1'>Table already has $information2[3] added to it. Delete Discount to apply a different type.</p></center> ";
	}else{
	mysqli_query($conn,"INSERT into total values('$calc', '$table_number', '','$discount_type')");	
	mysqli_query($conn,"INSERT into perm_discounts values('$server_name', '$discount_type', '$calc','','$table_number')");	
	mysqli_query($conn,"INSERT into bo_discount_reports values('$server_name', '$discount_type', '$calc','', '$table_number', '$date1')");
	echo "<meta http-equiv='refresh' content='0'>";

}
}

elseif (isset($_POST['remove_discounts'])) {
	
	mysqli_query($conn,"DELETE from total where table_number = '$table_number'");
	mysqli_query($conn,"DELETE from perm_discounts where table_number = '$table_number'");
	mysqli_query($conn,"DELETE from bo_discount_reports where table_number = '$table_number'");
	echo "<center><p id = 'warning1'>All discounts have been removed </p></center>";
	echo "<meta http-equiv='refresh' content='0'>";
}

elseif (isset($_POST['percent_discount_done'])) {
		
		$amount4 = $_POST['percent_discount_value'];
		$discount_type = "$amount4 % off total ";
		$price = mysqli_query($conn,"SELECT * from billing where table_number = $table_number ");
	$discount_value = mysqli_query($conn,"SELECT SUM(price) from billing where table_number = $table_number ");
	$discount_value1 = mysqli_fetch_array($discount_value);
	$discount_value1 = round($discount_value1[0], 2);
	$calc = ($amount4 / 100) * $total[0];
	$calc = round($calc, 2);
	
	$new_total = ($tota - $calc);
	$information1 = mysqli_query($conn,"SELECT * from total where table_number = $table_number");
	$information2 = mysqli_fetch_array($information1);
	$checker = mysqli_num_rows($information1);
	if ($checker > 0) {
		echo "<center><p id = 'warning1'>Table already has $information2[3] added to it. Delete Discount to apply a different type.</p></center> ";
	}else{
	mysqli_query($conn,"INSERT into total values('$calc', '$table_number', '','$discount_type')");	
	mysqli_query($conn,"INSERT into perm_discounts values('$server_name', '$discount_type', '$calc','','$table_number')");	
	mysqli_query($conn,"INSERT into bo_discount_reports values('$server_name', '$discount_type', '$calc','', '$table_number', '$date1')");
	echo "<meta http-equiv='refresh' content='0'>";

}
}
	
elseif (isset($_POST['done2'])) {//spirits information sub categ
	$order_type = $_POST['categ'];

	$info2 = mysqli_query($conn,"SELECT spirits from menu");
	$info3 = mysqli_query($conn,"SELECT spirit_prices from prices");

	$number = mysqli_num_rows($info2);

	for ($i=0; $i < $number; $i++) { 
		$data=mysqli_fetch_array($info2);
	$data1=mysqli_fetch_array($info3);
	$stock_info = mysqli_query($conn,"SELECT * from stock where item_name = '$data[0]' ");
		$stock_count = mysqli_fetch_array($stock_info);
		if ($stock_count[1] == 'Out_Of_Stock') {
			echo "<div id = 'drinks_holder'>
	<form method = 'post'>
			<input type = 'hidden' name = 'minerals' value = '$data[0]'>
			<input type = 'hidden' name = 'bill' value = '$data[0]'>
			<input type = 'hidden' name = 'price_submit' value = '$data1[0]'>
			<input style = 'background-color:lightgrey; color:black;' type = 'submit' value = '$data[0]' name = 'add_to_cart'  id = 'drinks' disabled >
			</form>
			</div>
			";
		}
		else{
		
		echo "<div id = 'drinks_holder'>
	<form method = 'post'>
			<input type = 'hidden' name = 'minerals' value = '$data[0]'>
			<input type = 'hidden' name = 'bill' value = '$data[0]'>
			<input type = 'hidden' name = 'price_submit' value = '$data1[0]'>
			<input type = 'submit' value = '$data[0]' name = 'add_to_cart'  id = 'drinks'>
			</form>
			</div>
			";
		}
	}
	

	
	
}

elseif (isset($_POST['done3'])) {// wine information sub categ
	$order_type = $_POST['categ'];
	

	$info2 = mysqli_query($conn,"SELECT wine from menu");
	$info3 = mysqli_query($conn,"SELECT wine_prices from prices");
	$number = mysqli_num_rows($info2);
	for ($i=0; $i < $number ; $i++) { 
		$data=mysqli_fetch_array($info2);
	$data1=mysqli_fetch_array($info3);
	$stock_info = mysqli_query($conn,"SELECT * from stock where item_name = '$data[0]' ");
		$stock_count = mysqli_fetch_array($stock_info);
		if ($stock_count[1] == 'Out_Of_Stock') {
			echo "<div id = 'drinks_holder'>
	<form method = 'post'>
			<input type = 'hidden' name = 'minerals' value = '$data[0]'>
			<input type = 'hidden' name = 'bill' value = '$data[0]'>
			<input type = 'hidden' name = 'price_submit' value = '$data1[0]'>
			<input style = 'background-color:lightgrey; color:black;' type = 'submit' value = '$data[0]' name = 'add_to_cart'  id = 'drinks' disabled >
			</form>
			</div>
			";
		}
		else{
		
		echo "<div id = 'drinks_holder'>
	<form method = 'post'>
			<input type = 'hidden' name = 'minerals' value = '$data[0]'>
			<input type = 'hidden' name = 'bill' value = '$data[0]'>
			<input type = 'hidden' name = 'price_submit' value = '$data1[0]'>
			<input type = 'submit' value = '$data[0]' name = 'add_to_cart'  id = 'drinks'>
			</form>
			</div>
			";
		}
	}
	

	
	
}
	


elseif (isset($_POST['done4'])) {// juices information sub categ
	$order_type = $_POST['categ'];
	
	
	$info2 = mysqli_query($conn,"SELECT juices from menu");
	$info3 = mysqli_query($conn,"SELECT juice_prices from prices");
	$number = mysqli_num_rows($info2);
	for ($i=0; $i <$number ; $i++) { 
		$data=mysqli_fetch_array($info2);
	$data1=mysqli_fetch_array($info3);
	$stock_info = mysqli_query($conn,"SELECT * from stock where item_name = '$data[0]' ");
		$stock_count = mysqli_fetch_array($stock_info);
		if ($stock_count[1] == 'Out_Of_Stock') {
			echo "<div id = 'drinks_holder'>
	<form method = 'post'>
			<input type = 'hidden' name = 'minerals' value = '$data[0]'>
			<input type = 'hidden' name = 'bill' value = '$data[0]'>
			<input type = 'hidden' name = 'price_submit' value = '$data1[0]'>
			<input style = 'background-color:lightgrey; color:black;' type = 'submit' value = '$data[0]' name = 'add_to_cart'  id = 'drinks' disabled >
			</form>
			</div>
			";
		}
		else{
		
		echo "<div id = 'drinks_holder'>
	<form method = 'post'>
			<input type = 'hidden' name = 'minerals' value = '$data[0]'>
			<input type = 'hidden' name = 'bill' value = '$data[0]'>
			<input type = 'hidden' name = 'price_submit' value = '$data1[0]'>
			<input type = 'submit' value = '$data[0]' name = 'add_to_cart'  id = 'drinks'>
			</form>
			</div>
			";
		}
	}
	

	
	
}
	


elseif (isset($_POST['done5'])) {// burgers information sub categ
	$order_type = $_POST['categ'];
	$order_type = $_POST['categ'];

	$info2 = mysqli_query($conn,"SELECT burgers from menu");
	$info3 = mysqli_query($conn,"SELECT burger_prices from prices");
	$number = mysqli_num_rows($info2);
	for ($i=0; $i < $number ; $i++) { 
		$data=mysqli_fetch_array($info2);
	$data1=mysqli_fetch_array($info3);
	$stock_info = mysqli_query($conn,"SELECT * from stock where item_name = '$data[0]' ");
		$stock_count = mysqli_fetch_array($stock_info);
		if ($stock_count[1] == 'Out_Of_Stock') {
			echo "<div id = 'drinks_holder'>
	<form method = 'post'>
			
			<input type = 'hidden' name = 'bill' value = '$data[0]'>
			<input type = 'hidden' name = 'food' value = '$data[0]'>
			<input type = 'hidden' name = 'price_submit' value = '$data1[0]'>
			<input style = 'background-color:lightgrey; color:black;' type = 'submit' value = '$data[0]' name = 'add_to_cart'  id = 'drinks' disabled >
			</form>
			</div>
			";
		}
		else{
		
		echo "<div id = 'drinks_holder'>
	<form method = 'post'>
			
			<input type = 'hidden' name = 'bill' value = '$data[0]'>
			<input type = 'hidden' name = 'food' value = '$data[0]'>
			<input type = 'hidden' name = 'price_submit' value = '$data1[0]'>
			<input type = 'submit' value = '$data[0]' name = 'add_to_cart'  id = 'drinks'>
			</form>
			</div>
			";
		}
	}
}
///
elseif (isset($_POST['done6'])) {// desserts information sub categ
	$order_type = $_POST['categ'];
	$order_type = $_POST['categ'];
	

	$info2 = mysqli_query($conn,"SELECT Desserts from menu");
	$info3 = mysqli_query($conn,"SELECT dessert_prices from prices");
	$number = mysqli_num_rows($info2);
	for ($i=0; $i < $number ; $i++) { 
		$data=mysqli_fetch_array($info2);
	$data1=mysqli_fetch_array($info3);
	$stock_info = mysqli_query($conn,"SELECT * from stock where item_name = '$data[0]' ");
		$stock_count = mysqli_fetch_array($stock_info);
		if ($stock_count[1] == 'Out_Of_Stock') {
			echo "<div id = 'drinks_holder'>
	<form method = 'post'>
			
			<input type = 'hidden' name = 'bill' value = '$data[0]'>
			<input type = 'hidden' name = 'price_submit' value = '$data1[0]'>
			<input type = 'hidden' name = 'food' value = '$data[0]'>
			<input style = 'background-color:lightgrey; color:black;' type = 'submit' value = '$data[0]' name = 'add_to_cart'  id = 'drinks' disabled >
			</form>
			</div>
			";
		}
		else{
		
		echo "<div id = 'drinks_holder'>
	<form method = 'post'>
			
			<input type = 'hidden' name = 'bill' value = '$data[0]'>
			<input type = 'hidden' name = 'price_submit' value = '$data1[0]'>
			<input type = 'hidden' name = 'food' value = '$data[0]'>
			<input type = 'submit' value = '$data[0]' name = 'add_to_cart'  id = 'drinks'>
			</form>
			</div>
			";
		}
	}
}

elseif (isset($_POST['done7'])) {// hot drinks information sub categ
	$order_type = $_POST['categ'];
	$order_type = $_POST['categ'];
	
	$info2 = mysqli_query($conn,"SELECT hot_drinks from menu");
	$info3 = mysqli_query($conn,"SELECT hot_drink_prices from prices");
	$number = mysqli_num_rows($info2);
	for ($i=0; $i < $number ; $i++) { 
		$data=mysqli_fetch_array($info2);
	$data1=mysqli_fetch_array($info3);
	$stock_info = mysqli_query($conn,"SELECT * from stock where item_name = '$data[0]' ");
		$stock_count = mysqli_fetch_array($stock_info);
		if ($stock_count[1] == 'Out_Of_Stock') {
			echo "<div id = 'drinks_holder'>
	<form method = 'post'>
			<input type = 'hidden' name = 'minerals' value = '$data[0]'>
			<input type = 'hidden' name = 'bill' value = '$data[0]'>
			<input type = 'hidden' name = 'price_submit' value = '$data1[0]'>
			<input style = 'background-color:lightgrey; color:black;' type = 'submit' value = '$data[0]' name = 'add_to_cart'  id = 'drinks' disabled >
			</form>
			</div>
			";
		}
		else{
		
		echo "<div id = 'drinks_holder'>
	<form method = 'post'>
			<input type = 'hidden' name = 'minerals' value = '$data[0]'>
			<input type = 'hidden' name = 'bill' value = '$data[0]'>
			<input type = 'hidden' name = 'price_submit' value = '$data1[0]'>
			<input type = 'submit' value = '$data[0]' name = 'add_to_cart'  id = 'drinks'>
			</form>
			</div>
			";
		}
	
	}
}

	
elseif (isset($_POST['add_to_cart'])) {

	$server_name = $_GET['server'];
	$table_number = $_GET['table'];
	$order_value = $_POST['minerals'];//drinks
	$order_value1 = $_POST['food'];//food
	$bill_order = $_POST['bill'];//billing info
	$timezone = date_default_timezone_get();
	date_default_timezone_set($timezone);
	date_default_timezone_set('Europe/London');
	$date = date('d/m/Y h:i:s a', time());
	
	$order_price = $_POST['price_submit'];


	

	$quantity1 = $_GET['quantity'];

			if ($quantity1 > 0) {
				for ($i=0; $i < $quantity1 ; $i++) { 
				mysqli_query($conn,"INSERT into billing values('$server_name','$bill_order','$order_price','$table_number','')");//order info for billing information	
				//mysqli_query("INSERT into perm_tables values('$server_name','$bill_order','$order_price','$table_number','','$date')");//order info for billing information	
			
				mysqli_query($conn,"INSERT into table_orders values('$server_name','$order_value','$order_price','$table_number','','$order_value1')"); //order info for kitchen and bar

		}
	}

		else{
			mysqli_query($conn,"INSERT into billing values('$server_name','$bill_order','$order_price','$table_number','')");//order info for billing information
			//mysqli_query("INSERT into perm_tables values('$server_name','$bill_order','$order_price','$table_number','','$date')");//order info for billing information	
			mysqli_query($conn,"INSERT into table_orders values('$server_name','$order_value','$order_price','$table_number','','$order_value1')"); //order info for kitchen and bar
		}


	

	


echo "<head>
  <meta http-equiv='refresh' content='0'>
</head>";

}

///sending tickets to the kitchen and bar seperately.


elseif (isset($_POST['send'])) {
	
	echo "<center><p id = 'warning1'>Order has been sent</p></center>";
	$server_name = $_GET['server'];
	$table_number = $_GET['table'];

	$check_existing_order = mysqli_query($conn,"SELECT * from kitchen where table_number = $table_number");
	$check_value = mysqli_num_rows($check_existing_order);
	
	
		$order_info = mysqli_query($conn,"SELECT * from table_orders where table_number = $table_number");
		$order_info1 = mysqli_num_rows($order_info);
		for ($i=0; $i < $order_info1 ; $i++) { 
			$actual_order = mysqli_fetch_array($order_info);
			//echo $actual_order[1]; -- drink
			//echo $actual_order[5]; -- food
			//echo $actual_order[2]; -- price
			//echo $acutal_order[0]; -- server_name
			
		$timezone = date_default_timezone_get();
		date_default_timezone_set($timezone);
		date_default_timezone_set('Europe/London');
		$date = date('d/m/Y h:i:s a', time());
		$quantity6 = 1;

		mysqli_query($conn,"INSERT into kitchen values('$actual_order[0]','$actual_order[5]','$actual_order[2]','$table_number','')"); //kitchen insert query
		mysqli_query($conn,"INSERT into kitchen_preview values('$actual_order[0]','$actual_order[5]','$actual_order[2]','$table_number','','$date', '$quantity6')"); //kitchen preview insert query
		mysqli_query($conn,"INSERT into bar values('$actual_order[0]','$actual_order[1]','$actual_order[2]','$table_number','')");
		mysqli_query($conn,"INSERT into bar_preview values('$actual_order[0]','$actual_order[1]','$actual_order[2]','$table_number','','$date', '$quantity6')");

		
		mysqli_query($conn,"DELETE from table_orders where table_number = $table_number");
		
				}


				
				



			
		
		

		
		
	}


elseif (isset($_POST['pay'])) {

	$check1 = mysqli_query($conn,"SELECT * from table_orders where table_number = $table_number");
	$check2 = mysqli_num_rows($check1);
	if ($check2 > 0) {
		echo "<center><p id = 'warning1'>Please send the order first</p></center>";
	}else{


	echo "<center><p id = 'info'>Please select Payment method first.</p></center>";
	echo "<center><form method = 'post'id = 'card1'>
			<input type = 'hidden' name = 'card' value = 'card'>
			<input type = 'submit' value = 'Card Payment'name = 'card'  id = 'card'>
			</form></center>

			<center><form method = 'post'id = 'card1'>
			<input type = 'hidden' name = 'cash' value = 'cash'>
			<input type = 'submit' value = 'Cash'name = 'cash'  id = 'card'>
			</form></center>

			


			";
		}
}

elseif (isset($_POST['cash'])) {
	echo "<center><form method = 'post'><input type = 'text' name = 'cash_amount' id = 'cash' placeholder = 'Amount' autocomplete = 'off'><input type = 'submit' name = 'cash_submit' id = 'cash' value = 'Done'></form></center>";

	
}




elseif (isset($_POST['cash_submit'])) {
	
		$pay_method = 'cash';
		$amount = $_POST['cash_amount'];
		
	
		mysqli_query($conn,"INSERT into checkout values('$server_name', '$pay_method', '$amount', '', '$table_number')");
		
		$amount2 = mysqli_query($conn,"SELECT SUM(amount) from checkout where table_number = $table_number");
		$amount2 = mysqli_fetch_array($amount2);
		$amount3 = mysqli_query($conn,"SELECT SUM(amount) from checkout1 where table_number = $table_number");
		$amount3 = mysqli_fetch_array($amount3);
		
		if ($amount2[0]>$total[0]) {

			$balance = ($amount2[0] - $total[0]);
			$new_balance = ($total[0]- $amount3[0]);
			$balance = round($balance, 2);
			echo "<center><p id = 'warning1'>Your change is £ $balance (The table will close in 5 seconds)</p></center>";

		mysqli_query($conn,"INSERT into server_check values('$server_name', '$pay_method', '$new_balance', '', '$table_number')");
			mysqli_query($conn,"DELETE from bar where table_number = $table_number");
		mysqli_query($conn,"DELETE from billing where table_number = $table_number");
		mysqli_query($conn,"DELETE from kitchen where table_number = $table_number");
		mysqli_query($conn,"DELETE from new_tables where table_number = $table_number");
		mysqli_query($conn,"DELETE from checkout where table_number = $table_number");
		mysqli_query($conn,"DELETE from checkout1 where table_number = $table_number");
		mysqli_query($conn,"DELETE from total where table_number = $table_number");

		echo "<script>alert('Table $table_number has been closed')</script>";
		echo "<meta http-equiv='Refresh' content='4;url=dashboard.php?data=$server_name&data1=$level'>";
		}

		elseif ($amount2[0]==$total[0]) {
			$pay_method = 'cash';
		$amount = $_POST['cash_amount'];
		

		
		mysqli_query($conn,"INSERT into checkout values('$server_name', '$pay_method', '$amount', '', '$table_number')");
		
		$amount2 = mysqli_query($conn,"SELECT SUM(amount) from checkout where table_number = $table_number");
		$amount2 = mysqli_fetch_array($amount2);
		
		mysqli_query($conn,"INSERT into server_check values('$server_name', '$pay_method', '$amount', '', '$table_number')");
		echo "<center><p id = 'warning1'>Your change is £ 0 (The table will close in 5 seconds)</p></center>";

			mysqli_query($conn,"DELETE from bar where table_number = $table_number");
		mysqli_query($conn,"DELETE from billing where table_number = $table_number");
		mysqli_query($conn,"DELETE from kitchen where table_number = $table_number");
		mysqli_query($conn,"DELETE from new_tables where table_number = $table_number");
		mysqli_query($conn,"DELETE from checkout where table_number = $table_number");
		mysqli_query($conn,"DELETE from checkout1 where table_number = $table_number");
		mysqli_query($conn,"DELETE from total where table_number = $table_number");

		echo "<script>alert('Table $table_number has been closed')</script>";

		echo "<meta http-equiv='Refresh' content='4;url=dashboard.php?data=$server_name&data1=$level'>";
		}
		
		elseif($amount2[0]<$total[0]){
			mysqli_query($conn,"INSERT into checkout1 values('$server_name', '$pay_method', '$amount', '', '$table_number')");

			mysqli_query($conn,"INSERT into server_check values('$server_name', '$pay_method', '$amount', '', '$table_number')");

			$balance = ($total[0] - $amount2[0]);
			$balance = round($balance, 2);
			echo "<center><p id = 'warning1'> Please finish payment of £ $balance to close table</p>";
			
		}
		else{
			echo "";
		}
		
}


elseif (isset($_POST['card'])) {
	echo "<center><form method = 'post'><input type = 'text' name = 'card_amount' id = 'cash' placeholder = 'Amount' autocomplete = 'off'><input type = 'submit' name = 'card_submit' id = 'cash' value = 'Done'></form></center>";
}

elseif (isset($_POST['card_submit'])) {
	
		$pay_method = 'card';
		$amount = $_POST['card_amount'];
		
		mysqli_query($conn,"INSERT into checkout values('$server_name', '$pay_method', '$amount', '', '$table_number')");

		
		$amount2 = mysqli_query($conn,"SELECT SUM(amount) from checkout where table_number = $table_number");
		$amount2 = mysqli_fetch_array($amount2);
		mysqli_query($conn,"INSERT into server_check values('$server_name', '$pay_method', '$amount ', '', '$table_number')");
		if ($amount2[0]>=$total[0]) {
			$balance = ($amount2[0] - $total[0]);
			echo "<center><p id = 'warning1'>(The table will close in 5 seconds | Dont forget to keep the merchants copy as evidence of payment)</p></center>";
			
			mysqli_query($conn,"DELETE from bar where table_number = $table_number");
		mysqli_query($conn,"DELETE from billing where table_number = $table_number");
		mysqli_query($conn,"DELETE from kitchen where table_number = $table_number");
		mysqli_query($conn,"DELETE from new_tables where table_number = $table_number");
		mysqli_query($conn,"DELETE from checkout where table_number = $table_number");
		mysqli_query($conn,"DELETE from checkout1 where table_number = $table_number");
		mysqli_query($conn,"DELETE from total where table_number = $table_number");

		echo "<script>alert('Table $table_number has been closed')</script>";
		echo "<meta http-equiv='Refresh' content='4;url=dashboard.php?data=$server_name&data1=$level'>";
		}
		
		else{
			mysqli_query($conn,"INSERT into checkout1 values('$server_name', '$pay_method', '$amount', '', '$table_number')");
			$balance = ($total[0] - $amount2[0]);
			$balance = round($balance, 2);
			echo "<center><p id = 'warning1'> Please finish payment of £ $balance to close table</p>";
			
		}
		
		

}

elseif (isset($_POST['bill'])) {
	echo "<script type='text/javascript'>
	var prtContent = document.getElementById('printarea');
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
WinPrint.close();
</script>";

echo "<style>@media print {
  * { display: none; }/* Hide everything ... */
  #printarea { display: block; }/* ... except the required div */
}</style>";
}

else{
	echo "";
}


?>