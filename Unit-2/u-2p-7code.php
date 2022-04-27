<?php

	$conn = mysqli_connect('localhost','root','','database1');
	
	if(!$conn)
	{
		echo "Connection failed!!";
	}
	else
	{
		$id=$_POST['id'];
		$query = 'DELETE FROM product WHERE Pro_id='.$id;
		if(mysqli_query($conn,$query))
		{
			echo "DELETED!!";
		}
		else
		{
			echo "Error : ".mysqli_error($conn);
		}
	}

?>