<html>

	<head>
		<title>
			Unit-1 prog-4
		</title>
	</head>
	<body>
	
	<?php
	$sub=array('Python','PHP','C++','HTML','CSS');
	$len=count($sub);
	for($i=0;$i<$len;$i++)
	{
	
		echo $sub[$i]."<br>";
	}
	echo "<b>For each statement</b><br>";
	
	foreach($sub as $value)
	{
		echo $value.'<br>'; 
	}

	?>
	</body>

</html>