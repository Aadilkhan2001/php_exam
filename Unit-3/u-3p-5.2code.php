<?php
	$s=$_GET['hob'];
	$s=explode(' ',$s);
	for($i=0;$i<count($s);$i++)
	{
			echo "You selected : ".$s[$i]."<br>";
	}


?>