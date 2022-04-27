<html>

	<head>
	
		<title>
		
		Uniit-1 prog-6
		</title>
	</head>
	<body>
	
	<?php
	
	$student=array(array('ramesh','85','pass'),
					array('suresh','34','fail'),
					array('mahesh','89','pass'));
						
	for($i=0;$i<3;$i++){
		for($j=0;$j<3;$j++){
			echo $student[$i][$j].'<br>';
		}
	}
	
	
	?>
	</body>
</html>