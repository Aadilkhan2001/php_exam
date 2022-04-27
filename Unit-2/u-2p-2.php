<?php

	$conn = mysqli_connect('localhost','root','');
	
	if(!$conn){
		
		echo "Not Connected !!";
	}
	else{
		
		$query = "CREATE DATABASE database1";
		if(mysqli_query($conn,$query))
		{
			echo "Database created!!";
		}
		else{
			echo "Error Occured!!".mysqli_error($conn);
		}
	}
	mysqli_close($conn);
?>