<!DOCTYPE html>
<html>
	<head>
		<title>
			QUERY PAGE
		</title>
		<script type = "text/javascript" src = "jquery.js"></script>
		<link rel ="stylesheet" href = "querypagestyle.css"/>
	</head>
	<body>
		<div id = "theme">
		<p><h1> Select A Query</h1></p>	
		</div>
		<div id = "query">
		
		
		<h5>Query1:Retrieve E_id,Ssn,Name information about Employees whose names contains a(A) or b(B)</h5>
		<a href = "UNION.php">
		<input type = "button" value="UNION" />
		</a>
		<br/>
		
		<h5>Query 2: Retrieve information about Employees who both work as a Manager and a After_sale.</h5>
		<a href = "intersection.php">
		<input type = "button" value="intersection" />
		</a>
		<br/>
		
		<h5>Query 3: Retrieve information about EMPLOYEES who work both as a Manager and a Accountant accounts, but not a Pre_sale.</h5>
		<a href = "difference.php">
		<input type = "button" value="difference" />
		</a>
		<br/>
		
		<h5>Query 4: Retrieve information about Employees who work as all types of works.</h5>
		<a href = "division.php">
		<input type = "button" value="division" />
		</a>
		<br/>
		
		<h5>Query 5: Retrieve information about each employee role, including number of workers who work in this title, and the average salary of this role </h5>
		<a href = "aggregation.php">
		<input type = "button" value="aggregation"/>
		</a>
		<br/>
		
		<h5>Query 6: Retrieve information about a shop and its warehouse</h5>
		<a href = "innerjoin.php">
		<input type = "button" value="inner join"/>
		</a>
		<br/>
		
		<h5>Query 7: Retrieve information about a shop and its warehouse, and keep all the information</h5>
		<a href = "outerjoin.php">
		<input type = "button" value="outer join"/>
		</a>
		</div>

		
	</body>
</html>