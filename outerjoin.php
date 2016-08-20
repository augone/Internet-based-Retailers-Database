<?php

	try{$db = new PDO('mysql:host=localhost;dbname=ecommerce;
	charset=utf8','root','maxiaodong522488');
	}
	
	catch(Exception $e)
	{
		echo "connection failed";
	} 
	$seventhQuery = "select * from SHOP
					 left join 
					 WAREHOUSE
					 on SHOP.W_num = WAREHOUSE.W_num
					 union
					  select * from SHOP
					 right join 
					 WAREHOUSE
					 on SHOP.W_num = WAREHOUSE.W_num;
					 #on WAREHOUSE.W_num = SHOP.W_num; ";
	echo "Shop_num"."\t". "Email_addr"."\t"."Shop_address"."\t"."L_num"."\t"."W_num"."\t"."W_name"."\t"."Tele_num"."\t"."Email"."\t"."S_num"."<br/><br/>";
	foreach($db->query($seventhQuery) as $row)
	{
		echo htmlentities($row['Shop_num'])."\t".htmlentities($row['Email_addr'])."\t".htmlentities($row['Shop_address'])."\t".htmlentities($row['L_num'])."\t".
		htmlentities($row['W_num'])."\t".htmlentities($row['W_name'])."\t".htmlentities($row['Tele_num'])."\t".htmlentities($row['Email'])."\t".htmlentities($row['S_num'])."\t"."<br/>";
	}

?>