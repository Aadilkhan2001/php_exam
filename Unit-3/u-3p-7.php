<html>

		<head>
				<title>
					Unit-3 prog-7
				</title>
				
				<script>
				function validate(obj){
					
					var regex = /(^\w+\@\w+\.\w+)/;
					var match= regex.exec(obj);
					if(!match)
					{
						alert("Invalid E-Mail");
					}
					
					
				}
				/*function validate1(obj)
				{
					var regex=/(^\w+\@\w+\.)/;
					var match=regex.exec(obj);
					
					if(!match)
					{
						document.getElementById('error').style.color='red';
						document.getElementById('error').innerHTML="Invalid Email!!";
					}
					
				}*/
				</script>
		</head>
		<body>
		Enter a E-Mail : <input name="email" id='email' onblur='validate(this.value)'>
		
		
		<div id="error"></div>
		</body>
</html>