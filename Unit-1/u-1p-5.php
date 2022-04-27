<html>

	<head>
	
	
		<title>
		Unit-1 prog-5
		</title>
	</head>
	<body>
	
	<?php
	
	
	$student= array('name'=>'ramesh',
					'marks'=>85,
					'result'=>'Distinction');
					
	foreach($student as $key => $value)
	{
		echo $key.'='.$value.'<br>';
		
	}
	
	
	?>
	</body>
	
</html>