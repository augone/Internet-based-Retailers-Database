<!DOCTYPE html>
<html>
	<head>
		<title>
			This is my dabase!
		</title>
		<link rel="stylesheet" href = "mainpage.css"/>
		<script type = "text/javascript" src = "jquery.js"></script>
	</head>
	<body>
		<div id="main">
		<p><h4> CREATE A DATABASE</h4></p>	
		</div>
		<form>
		<ul>
		<li>
		<input type = "button" value="Connect to MySql" onclick="buttonClick1();"/>
		<br/><br/><br/>
		</li>
		<li>
		<input type = "button" value="Create A Database" onclick="buttonClick2();"/>
		<br/><br/><br/>
		</li>
		<li>
		<input type = "button" value="Create Tables" onclick="buttonClick3();"/>
		<br/><br/><br/>
		</li>
		<li>
		<input type = "button" value="Drop Database" onclick="buttonClick4();"/>
		<br/><br/><br/>
		</li>
		<li>
		<input type = "button" value="insertData" onclick="buttonClick5();"/>
		<br/><br/><br/>
		</li>
		<li>
		
		<a href = "querypage.php"> <input type = "button" value="enter query page" /></a>
		</li>
		</ul>
		
		
		
		
		


		</form>
		<div id = 'result'>
		</div>
		<script type = "text/javascript">
			function buttonClick1()
			{	
				var name= 'xiaodong';
				$.post('dbconnect.php',{postname:name},
				function(data)
				{
					$('#result').html(data);
				});
				//document.write("what");
			}
			function buttonClick2()
			{	
				var name= 'xiaodong';
				$.post('createDB.php',{postname:name},
				function(data)
				{
					$('#result').html(data);
				});

				//document.write("what");
			}
			function buttonClick3()
			{	
				var name= 'xiaodong';
				$.post('createTB.php',{postname:name},
				function(data)
				{
					$('#result').html(data);
				});

				//document.write("what");
			}
			function buttonClick4()
			{	
				var name= 'xiaodong';
				$.post('dropDatabase.php',{postname:name},
				function(data)
				{
					$('#result').html(data);
				});

				//document.write("what");
			}
			function buttonClick5()
			{	
				var name= 'xiaodong';
				$.post('insertData2.php',{postname:name},
				function(data)
				{
					$('#result').html(data);
				});

				//document.write("what");
			}
		</script>
	</body>
</html>