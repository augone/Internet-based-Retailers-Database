<?php
	include 'dbconnect.php';
	if(mysql_query("drop database ecommerce",$con))
		echo "drop is done";
	else 
		echo "Error:".mysql_error();
?>