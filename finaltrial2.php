<!DOCTYPE html>
<html>
	<head>
		<title>
			This is my dabase!
		</title>
		
	</head>
	<body>
	<?php
		echo "how are you?"."<br/>";
		$createDB = true;
		if($createDB)
		{
			include 'dbconnect.php';
			$createDB = false;
		}
		
		if(!$createDB)echo "asdfa";
			
		/* <p><h1> CREATE A DATABASE</h1></p>	
		<form>
		<input type = "button" value="CREATE a Database" onclick="buttonClick();"/>
		</form>
		<div id = 'result'>
		</div> */
	?>
	<br/>
	<input type = "button" value="CREATE a Database" onclick="buttonClick();"/>
	<script type = "text/javascript">
	buttonClick()
	{
		$createDB = true;
		if
	}
	</script>
	</body>
</html>