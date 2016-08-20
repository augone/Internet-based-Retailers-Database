<?php

	try{$db = new PDO('mysql:host=localhost;dbname=ecommerce;
	charset=utf8','root','maxiaodong522488');
	}
	
	catch(Exception $e)
	{
		echo "connection failed";
	} 
	$fifthQuery = " select Title,count(*) as emp_num,AVG(Salary) as Average_sal
		 from EMP_ROLE
		 group by Title
		 order by AVG(Salary) desc;";
	echo "Title"."\t". "emp_num"."\t"."Average_sal"."<br/><br/>";
	foreach($db->query($fifthQuery) as $row)
	{
		echo htmlentities($row['Title'])."\t".htmlentities($row['emp_num'])."\t".htmlentities($row['Average_sal'])."\t"."<br/>";
	}

?>