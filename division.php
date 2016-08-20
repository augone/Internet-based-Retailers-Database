<?php

	try{$db = new PDO('mysql:host=localhost;dbname=ecommerce;
	charset=utf8','root','maxiaodong522488');
	}
	
	catch(Exception $e)
	{
		echo "connection failed";
	} 
	$fourthQuery = "select * from EMPLOYEE 
		inner join
		(select EMPLOYEE.E_id,count(*)as NUM from EMPLOYEE 
		left join EMP_ROLE
		on EMPLOYEE.E_id=EMP_ROLE.E_id
		group by EMPLOYEE.E_id
		having count(*)= (select count(distinct Title) from 
		 EMP_ROLE)) as temp
		 on EMPLOYEE.E_id=temp.E_id;";
	echo "E-id"."\t". "E-Ssn"."\t"."Name"."\t"."Emp_address"."\t"."Email"."\t"."E_tele"."\t"."Shop_num"."\t"."NUM"."<br/><br/>";
	foreach($db->query($fourthQuery) as $row)
	{
		echo htmlentities($row['E_id'])."\t".htmlentities($row['Ssn'])."\t".htmlentities($row['Name'])."\t".
		htmlentities($row['Emp_address'])."\t".htmlentities($row['Email'])."\t".htmlentities($row['E_tele'])."\t".htmlentities($row['Shop_num']).htmlentities($row['NUM'])."\t"."<br/>";
	}
?>