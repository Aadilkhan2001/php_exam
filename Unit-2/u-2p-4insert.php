	<?php
		$conn = mysqli_connect('localhost','root','','database1');
		if(!$conn)
		{
		
			echo "Connection failed!!";
		}
		else
		{
			$id=$_POST['id'];
			$name=$_POST['name'];
			$price=$_POST['price'];
			$qoh=$_POST['qoh'];
			
			$query = "INSERT INTO product(Pro_id,Pro_name,Pro_price,Pro_qoh) values('$id','$name','$price','$qoh')";
			
			if(mysqli_query($conn,$query))
			{
				echo "Row Added!1";
			}
			else
			{
				echo "Error : ".mysqli_error($conn);
			}
		}
	mysqli_close($conn);
	
	?>