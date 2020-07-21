<!DOCTYPE html>
<html>
<head>
	<title>Bar Server</title>

  <meta http-equiv="refresh" content="5">

</head>

<style type="text/css">
	body{
		margin:0;
	}
	h1{
		background: #0D86EA;

	margin-top: 0;
	color: white;
	height: 50px;
	font-family: calibri;	}

	#order_area{
		margin-top: 10px;
		font-family: arial;
		float: left;
    	background-color: lightgrey;
    	padding: 10px;
    	border-right: solid 6px #0D86EA;
    	border-bottom: solid 6px #0D86EA;
    	
    



	}

	#complete_style{
		width: 150px;
		height: 40px;
		font-size: 14px;
		background-color: #0D86EA;
		
		color: white;
		font-size: 16px;
	}

	#general{
		font-family: arial;
		font-size: 20px;
		color:#9BDA33;
		margin-top: 0px;
	}
	#warning{
		font-family: Arial;
		color: red;
		margin-left: 10px;
		font-size: 19px;
	}
	#warning1{
		font-family: Arial;
		color: red;
		margin-left: 10px;
		font-size: 15px;
	}
	




</style>
<body>

<center><h1>Incoming Orders - Bar </h1></center>
<!--<img src='logo.png' height='80' width='50'></img> 
!-->
<?php


include "config.php";


//sorting process












//sorting process end

$table_query = mysqli_query($conn,"SELECT distinct table_number from bar_preview ORDER BY id DESC");
$table_numbers = mysqli_num_rows($table_query);

for ($u=0; $u < $table_numbers; $u++) { 
	$table_info = mysqli_fetch_array($table_query); 
	 $order_query = mysqli_query($conn, "SELECT distinct `order` from bar_preview where table_number = '$table_info[0]' ORDER BY id desc");
	 $order_numbers = mysqli_num_rows($order_query);
	 $order_query1 = mysqli_query($conn, "SELECT * from bar_preview where table_number = '$table_info[0]' ORDER BY id DESC");
	 $order_info = mysqli_fetch_array($order_query1);
    
    echo "<div id = 'order_area'><center><p id = 'warning'>$table_info[0]</p>";    
    echo "<form method = 'post' >
		<input type = 'hidden' value = '$order_info[3]' name = 'table_num'>
		<input type = 'submit' value = 'Complete - ✔' name = 'complete' id = 'complete_style'>

 	</form>";

 	echo "<p id = 'warning1'>Server Name : $order_info[0]</p></center>";
   $order_query = mysqli_query($conn, "SELECT distinct `order` from bar_preview where table_number = '$table_info[0]' ORDER BY id DESC ");
    $order_numbers = mysqli_num_rows($order_query);
      


    for ($i=0; $i < $order_numbers ; $i++) { 

    $order_info = mysqli_fetch_array($order_query);
     $check1 = mysqli_query($conn, "SELECT SUM(quantity) from bar_preview where `order` = '$order_info[0]' and table_number = '$table_info[0]' ");
    $check = mysqli_fetch_array($check1);
    




    if ($order_info[0] != "" ) {

        echo "
    
    
    <p>$check[0] x $order_info[0]</p> 
     
   

    
   


";
}


else{
	echo "
	
	";
}

}

if(isset($_POST['complete'])){
	$tab = $_POST['table_num'];
	mysqli_query($conn,"DELETE from bar_preview where table_number = $tab");
	
}	

else{
	echo "";
}


echo "</div>";









}


	

?>

</body>
</html>