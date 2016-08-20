<?php
	include 'dbconnect.php';
	if(mysql_query("create database ecommerce",$con))
		echo "Database \"ECOMMERCE\" is Created";
	else 
		echo "Error:".mysql_error();
?>