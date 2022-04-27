<?php

	$conn = mysqli_connect('localhost','root','','database1');
	
	if(!$conn){
		
		echo "Not connected!!";
	}
	else{
		
		
		$query="CREATE TABLE  product (Pro_id INT(5) PRIMARY KEY,
										Pro_name VARCHAR(50) NOT NULL,
										Pro_price INT(5) NOT NULL,
										Pro_qoh INT(5)
										)";
										
		if(mysqli_query($conn,$query))
		{
			echo "Table created";
			
		}
		else
		{
			
			echo "Error occured".mysqli_error($conn);
			
		}
		
	}
	mysqli_close($conn);

?>