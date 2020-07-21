<?php

mysql_connect("localhost", "root", "");
mysql_select_db("pos");

mysql_query("INSERT into menu values('pepsi','vodka','house white', 'orange', 'classic cheese')");
mysql_query("INSERT into menu values('diet pepsi','bacardi','house red', 'apple', 'classic beef')");
mysql_query("INSERT into menu values('lemonade','triple sec','shiraz', 'pineapple', 'bacon cheese')");
mysql_query("INSERT into menu values('tango','bombay saphire','zinfandel', 'passion fruit', 'triple cheese')");




//mysql_query("INSERT into prices values('3.99','4.50','5.00', '3.00', '12.00')");
//mysql_query("INSERT into prices values('3.39','5.50','4.80', '3.00', '9.95')");
//mysql_query("INSERT into prices values('3.39','4.70','6.00', '3.00', '14.00')");
//mysql_query("INSERT into prices values('3.39','5.00','5.75', '3.00', '16.00')");

?>