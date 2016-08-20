<?php
	include"..\mywork\dbconnect.php";//include other php file in this php  file
	//$query = "INSERT INTO "
	$result = mysql_query("SELECT * FROM shop");
	if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

	while($row = mysql_fetch_array($result))
	  {
	  echo $row['Email_addr'] . " " . $row['Shop_num'];
	  echo "<br />";
	  }
	  $query1 = "select * from EMPLOYEE 
		inner join
		(select EMPLOYEE.E_id,count(*)as NUM from EMPLOYEE 
		left join EMP_ROLE
		on EMPLOYEE.E_id=EMP_ROLE.E_id
		group by EMPLOYEE.E_id
		having count(*)= (select count(distinct Title) from 
		 EMP_ROLE)) as temp
		 on EMPLOYEE.E_id=temp.E_id";
	$result1 = mysql_query($query1);
	if($result1 === FALSE) { 
    die(mysql_error()); // TODO: better error handling
	}
	echo 'no content';
	while($row = mysql_fetch_array($result))
	  {
	  echo $row['E_id'] . " " . $row['Name'];
	  echo "<br />";
	  }
	//mysql_close($con);
	 
 $query2 = "select Title,count(*) as emp_num,AVG(Salary) as Average_sal
 from EMP_ROLE
 group by Title
 order by AVG(Salary) desc";
	$result2 = mysql_query($query2);
	if($result2 === FALSE) { 
    die(mysql_error()); // TODO: better error handling
	}
	while($row = mysql_fetch_array($result2))
	  {
	  echo $row['Title'] . " " . $row['Average_sal'];
	  echo "<br />";
	  }
?>