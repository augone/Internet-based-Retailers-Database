<?php

	try{$db = new PDO('mysql:host=localhost;dbname=ecommerce;
	charset=utf8','root','maxiaodong522488');
	}
	
	catch(Exception $e)
	{
		echo "connection failed";
	} 
	$firstQuery = "select E_id,Ssn,Name 
		from EMPLOYEE as e
		where e.Name like '%A%' or e.Name like '%a%'
		UNION
		(select E_id,Ssn,Name 
		from EMPLOYEE as e
		where e.Name like '%e%'or e.Name like '%E%') ;";
	echo "E-id"."\t"."Ssn "."\t"."Name"."<br/>";
	foreach($db->query($firstQuery) as $row)
	{
		echo htmlentities($row['E_id'])."\t".htmlentities($row['Ssn'])."\t".htmlentities($row['Name'])."\t"."<br/>";
	}
  
	  
		/* 	  #Query 1:Retrieve information about Employees whose names contains a or b

		select E_id,Ssn,Name 
		from EMPLOYEE as e
		where e.Name like '%A%' or e.Name like '%a%'
		UNION
		(select E_id,Ssn,Name 
		from EMPLOYEE as e
		where e.Name like '%e%'or e.Name like '%E%');


		# Query 2: Retrieve information about Employees who  work as both a Manager and a After_sale.

		select * from EMPLOYEE As E
		where E.E_id in 
		(select A.E_id from EMP_ROLE as A 
		inner join
		 EMP_ROLE as B 
		on A.E_id = B.E_id
		where A.Title = 'After_sale' and B.Title='Manager'
		) 
		order by E.E_id;

		#Query 3: Retrieve information about EMPLOYEES who work both as a Manager and a After_sale accounts, but
		#not a Accountant.

		select * from EMPLOYEE as E
		where E.E_id in
		(select A.E_id from EMP_ROLE as A  
		inner join
		EMP_ROLE as B 
		on A.E_id = B.E_id
		where A.Title = 'Accountant' and B.Title = 'Manager')
		and E_id not in
		(select E_id from EMP_ROLE where Title = 'Pre_sale');



		#Query 4: Retrieve information about Employees who work as all types of works. 
		select * from EMPLOYEE 
		inner join
		(select EMPLOYEE.E_id,count(*)as NUM from EMPLOYEE 
		left join EMP_ROLE
		on EMPLOYEE.E_id=EMP_ROLE.E_id
		group by EMPLOYEE.E_id
		having count(*)= (select count(distinct Title) from 
		 EMP_ROLE)) as temp
		 on EMPLOYEE.E_id=temp.E_id;

		 # Query 5: Retrieve information about each employee role, including
		 # number of workers who work in this title, and the average salary of this role  
		 select Title,count(*) as emp_num,AVG(Salary) as Average_sal
		 from EMP_ROLE
		 group by Title
		 order by AVG(Salary) desc;


		 # Query 6: Retrieve information about a employee¡¯s name and total salary
		 select Name,sum(Salary) as total_sal
		 from EMPLOYEE E
		 right join 
		 EMP_ROLE R
		 on E.E_id = R.E_id
		 group by E.Name
		 order by total_sal desc;

		 # Query 7: Retrieve information about a customer¡¯s name and address
		 select User_name,C_Address from CUSTOMER
		 left join
		 C_ADDRESS
		 on CUSTOMER.C_id = C_Address.C_id;

		 # Query 8: Retrieve information about a shop and its warehouse
		 select * from SHOP
		 inner join 
		 WAREHOUSE
		 on WAREHOUSE.W_num = SHOP.W_num;

		  # Query 9: Retrieve information about a shop and its warehouse
		  # outer join in SQL is represented as full join or full outer join
		 select * from SHOP
		 left join 
		 WAREHOUSE
		 on SHOP.W_num = WAREHOUSE.W_num
		 union
		  select * from SHOP
		 right join 
		 WAREHOUSE
		 on SHOP.W_num = WAREHOUSE.W_num;
		 #on WAREHOUSE.W_num = SHOP.W_num; */
?>