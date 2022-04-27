<html>
		<head>
				<title>
				Unit-3 prog-3
				</title>
				
				<script>
				
				function convert(){
					
					var xmlhttp;
					if(window.XMLHttpRequest)
					{
						xmlhttp = new XMLHttpRequest();
					}
					else
					{
						xmlhttp = new ActivexObject("Microsoft.XMLHTTP");
					}
					var string = document.getElementById('string').value;
					
					xmlhttp.open("GET",'u-3p-3code.php?str='+string,true);
					xmlhttp.onreadystatechange=function(){
						
						
						if(xmlhttp.readyState == 4 && xmlhttp.status==200)
						{
							document.getElementById('info').innerHTML=xmlhttp.responseText;
						}
					}
					xmlhttp.send();
				}
				</script>
		</head>
		<body>
		<input type='text' id='string' name='string'/>
		<button onclick='convert();'> Submit </button>
		<h1 id='info'></h1>
		</body>
</html>