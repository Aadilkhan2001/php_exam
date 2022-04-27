<html>

		<head>
				<title>
					Unit-3 prog-5.2
				</title>
				<script>
				function show(){
					
					var xmlhttp;
					
					if(window.XMLHttpRequest)
					{
						xmlhttp = new XMLHttpRequest();
					}
					else
					{
						xmlhttp = new ActivexObject("Microsoft.XMLHTTP");
					}
					var data = document.getElementsByName('hobbie');
					var hob="";
					for(var i=0; i<data.length;i++)
					{
						if(data[i].checked == true)
						{
							hob += data[i].value+" ";
						}
					}
					xmlhttp.open("GET","u-3p-5.2code.php?hob="+hob,true);
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
		Cricket <input type='checkbox' value='Cricket' name='hobbie' onclick='show();' /> <br>
		Hockey <input type='checkbox' value='Hockey' name='hobbie' onclick='show();' /> <br>
		Football <input type='checkbox' value='Football' name='hobbie' onclick='show();' /> <br>
		Vollyball <input type='checkbox' value='Vollyball' name='hobbie' onclick='show();' /> <br>
		<h1 id='info'></h1>
		</body>
</html>