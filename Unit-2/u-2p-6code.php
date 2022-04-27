<?php

	$conn = mysqli_connect('localhost','root','','database1');
	
	if(!$conn)
	{
		echo "Connection failed!!";
	}
	else
	{
		$id=$_POST['id'];
		$qoh=$_POST['qoh'];
		$query ="UPDATE product SET Pro_qoh='$qoh' WHERE Pro_id=".$id; 
		
		if(mysqli_query($conn,$query))
		{
			echo "Updated!!";
		}
		else
		{
			echo "Error : ".mysqli_error($conn);
		}
		
		
	}
?>