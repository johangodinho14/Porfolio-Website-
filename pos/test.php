<?php
include "config.php";
$som = mysqli_query("SELECT * FROM users");
$num = mysqli_num_rows($som);
echo $num;
?>