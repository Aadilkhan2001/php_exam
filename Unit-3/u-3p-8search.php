<?php
		$conn = mysqli_connect('localhost','root','','database1');
		
		if(!$conn)
		{
			echo "Connection Failed";
		}
		else
		{
			$data = $_GET['data'];
			
			$query="SELECT * FROM student WHERE id=".$data;
			
			$result = mysqli_query($conn,$query);
			
			if(mysqli_num_rows($result)>0)
			{
				echo "User Already exist!!";
			}
			else
			{
				echo "User Not Exist add using below form <br>
				
					<form action='u-3p-8insert.php' method='post'>
					Id : <input type='text' name='id'/><br>
					Name : <input type='text' name='name'/><br>
					mobile : <input type='text' name='mobile'/><br>
					Country : <input type='text' name='country'/><br>
					<button type='submit'>Add record</button>
					</form>
				
				";
			}
			
		}
?>