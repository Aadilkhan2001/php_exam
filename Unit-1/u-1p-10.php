<html>
		<head>
			<title>
				Unit-1 prog-10
			</title>
		</head>
		<body>
		
		<?php
		
		
		$number = array(1,2,5,4,4,4,85,7,7,8,85,4);
		
		function count_elements($arr,$val)
		{
			$count=0;
			foreach($arr as $value){
				if($value == $val){
					$count++;
				}
			}
			echo $val."Element occurs in array :".$count.'times';
		}
		count_elements($number,1);
		
		?>
		</body>
</html>