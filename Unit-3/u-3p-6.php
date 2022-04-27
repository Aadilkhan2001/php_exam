<html>

		<head>
			<title>
				Unit-3 prog-6
			</title>
			
			<script>
			function validate(){
				
				var data = document.getElementById('name').value;
				var len = data.length;
				
				if(len<5 || len == 0){
					alert("Field is not leave blank and enter atleast 6 charachter!!");
				}
				else{
					alert("congrats!! Enter right input");
				}
				
			}
			</script>
		</head>
		<body>
		
			Enter Name : <input autofocus type="text" name="name" id="name" />
			<br>
			<button onclick='validate()'>Submit</button>
		</body>
</html>