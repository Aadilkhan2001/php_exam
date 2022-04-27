<?php

	$conn=mysqli_connect('localhost','root','','database1');
	
	if(!$conn)
	{
		echo "Connection failed!!";
	}
	else
	{
		$id=$_POST['search'];
		
		$query="SELECT * FROM product WHERE Pro_id=".$id;
		
		if(mysqli_query($conn,$query))
		{
			$result=mysqli_query($conn,$query);
			if(mysqli_num_rows($result)>0)
			{
				
				while($row=mysqli_fetch_assoc($result))
				{
					echo "Id : ".$row['Pro_id'].'<br>'.'Name : '.$row['Pro_name'].'<br>'.'Price'.$row['Pro_price'].'<br>'.'QOH : '.$row['Pro_qoh'];
				}
			}
			else
			{
				echo "Not found";
			}
		}
		else{
			echo "Error : ".mysqli_error($conn);
		}
	
	}
	mysqli_close($conn);


?>