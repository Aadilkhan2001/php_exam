<html>
		<head>
				<title>
					Unit-3 pro-5.1
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
						xmlhttp=new ActivexObject("Microsoft.XMLHTTP");
					}
					
					var data= document.getElementsByTagName('input');
					var gen;
					for(var i=0;i<data.length;i++)
					{
						if(data[i].type == 'radio' && data[i].checked == true)
						{
							gen = data[i].value;
							console.log(gen);
						}
					}
					
					xmlhttp.open("GET",'u-3p-5.1code.php?data='+gen,true);
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
			Male <input type='radio' value='male' name='gender' onchange='show();'/>
			Female <input type='radio' value='female' name='gender' onchange='show();'/>
			
			<h1 id='info'></h1>
		</body>
</html>