<?php

	try{$db = new PDO('mysql:host=localhost;dbname=ecommerce;
	charset=utf8','root','maxiaodong522488');
	}
	
	catch(Exception $e)
	{
		echo "connection failed";
	} 
	$secondQuery = "select * from EMPLOYEE As E
		where E.E_id in 
		(select A.E_id from EMP_ROLE as A 
		inner join
		 EMP_ROLE as B 
		on A.E_id = B.E_id
		where A.Title = 'After_sale' and B.Title='Manager'
		) 
		order by E.E_id;";
	echo "E-id"."\t". "E-Ssn"."\t"."Name"."\t"."Emp_address"."\t"."Email"."\t"."E_tele"."\t"."Shop_num"."<br/>";
	foreach($db->query($secondQuery) as $row)
	{
		echo htmlentities($row['E_id'])."\t".htmlentities($row['Ssn'])."\t".htmlentities($row['Name'])."\t".
		htmlentities($row['Emp_address'])."\t".htmlentities($row['Email'])."\t".htmlentities($row['E_tele'])."\t".htmlentities($row['Shop_num'])."\t"."<br/>";
	}

?>