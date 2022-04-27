<?php
	$conn = mysqli_connect('localhost','root','','database1');
	
	if(!$conn)
	{
		echo "Connection Failed!!";
	}
	else
	{
		$id=$_POST['id'];
		$name=$_POST['name'];
		$mobile=$_POST['mobile'];
		$country=$_POST['country'];
		
		$query = "INSERT INTO student(id,name,mobile,country) values('$id','$name','$mobile','$country')";
		
		if(mysqli_query($conn,$query))
		{
			echo "Added";
		}
		else
		{
			echo "Error !! : ".$mysqli_error($conn);
		}
	}

?>