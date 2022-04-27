<html>

		<head>
				<title>
				Unit-3 prog-4
				</title>
				<script>
				
				function showchange()
				{
					
					var xmlhttp;
					if(window.XMLHttpRequest)
					{
						xmlhttp = new XMLHttpRequest();
					}
					else
					{
						xmlhttp = new ActivexObject("Microsoft.XMLHTTP");
					}
					
					var data=document.getElementById('pro').value;
					xmlhttp.open("GET",'u-3p-4code.php?data='+data,true);
					xmlhttp.onreadystatechange=function(){
						if(xmlhttp.readyState==4 && xmlhttp.status==200)
						{
							document.getElementById('info').innerHTML=xmlhttp.responseText;
						}
						
					}
					xmlhttp.send();
					
				}
				
				</script>
		</head>
		<body>
		
			<select name='pro' id='pro' onchange='showchange();'>
			<option value='Shoes'>Shoes</option>
			<option value='t-shirt'>t-shirt</option>
			<option value='Shirt'>Shirt</option>
			</select>
			<h1 id='info'></h1>
		</body>
</html>