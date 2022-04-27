<html>
		<head>
				<title>
						Unit-3 prog-8
				</title>
				
				<script>
				
				
				function search(){
					var xmlhttp;
					if(window.XMLHttpRequest)
					{
						 xmlhttp = new XMLHttpRequest();
					}
					else
					{
						xmlhttp= new ActivexObject("Microsoft.XMLHTTP");
					}
					var data=document.getElementById('id').value;
					
					xmlhttp.open("GET",'u-3p-8search.php?data='+data,true);
					
					xmlhttp.onreadystatechange=function(){
						
						if(xmlhttp.readyState == 4 && xmlhttp.status == 200 )
						{
							document.getElementById('info').innerHTML=xmlhttp.responseText;
						}
					}
					xmlhttp.send();
					
				}
				</script>
		</head>
		<body>
		<input type='text' id='id' name='id' /><br>
		<button onclick='search();'>Search</button>
		<div id='info'></div>
		</body>
</html>