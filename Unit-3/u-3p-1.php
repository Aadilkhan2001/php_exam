<html>
	<head>
		<title>
			Unit-3 prog-1
		</title>
		<script>
		
		function showname(){
			
			var xmlhttp;
			if(window.XMLHttpRequest)
			{
				xmlhttp = new XMLHttpRequest();
			}
			else
			{
				xmlhttp =new ActivexObject("Microsoft.XMLHTTP");
			}
			var name = document.getElementById('name').value;
			xmlhttp.open("GET","u-3p-1code.php?name="+name,true);
			
			xmlhttp.onreadystatechange=function(){
				
				if(xmlhttp.readyState == 4  && xmlhttp.status ==200)
				{
					document.getElementById('info').innerHTML=xmlhttp.responseText;
				}
			}
			xmlhttp.send();
		}
		</script>
	</head>

	<body>
		<input id='name' type='text' name='name' onkeypress="showname();"/>
		<h1 id='info'></h1>
	</body>
</html>