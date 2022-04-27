<html>
	<head>
		<title>
		Unit-1 prog-9
		</title>
	</head>
	<body>
	<?php
	$a=array(87,52,98,1,8);
	sort($a);
	echo "Ascending Order<br>";
	foreach($a as $value){
		
		echo $value.'<br>';
	}
	echo "Descending Order<br>";
	rsort($a);
	foreach($a as $value){
		
		
		echo $value."<br>";
	}
	
	?>
	</body>
</html>