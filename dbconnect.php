<?php
	$dbhost = 'localhost';
	$username = 'root';
	$password = 'maxiaodong522488';
	$mydatabase = 'ecommerce_final';
	
	$con = mysql_connect("$dbhost","$username","$password");
	if(!$con)
	echo "connection failed";
	/* mysql_select_db($mydatabase);
	echo "connected"; */
	
	/* try{
	$db = new PDO('mysql:host=localhost;dbname=ecommerce_final;
	charset=utf8','root','maxiaodong522488');
	}
	catch(Exception $e)
	{
		echo "connection failed";
	} */
	//echo "well done";
?>