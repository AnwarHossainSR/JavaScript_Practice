<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>XCOMPANY</title>
		<link rel="stylesheet" href="loginstyle.css">
		<script>
			function validateForm() {
            var un = document.loginform.uname.value;
            var pw = document.loginform.pass.value;
            var username = "mahedi"; 
            var password = "12345";
            if ((uname == username) && (pass == password)) {
            return true;
             }
             else {
            alert ("Login was unsuccessful, please check your username and password");
            return false;
            }
          }
		</script>
</head>
<body>
	
	<center>
	<div class="content_area2">
		<h1>LOGIN</h1>
		<form method="post">
			<table>
				
				<tr>
					<td><b>Username :</b></td>
					<td><input type="text" name="uname"/></td>
					
				</tr>
				
				<tr>
					<td><b>Password :</b></td>
					<td><input type="password" name="pass"/></td>
					
				</tr>
				

				<tr>
					<td align="center" colspan="2"><input type="submit" value="Login" /></td>
					
				</tr>
				
			</table>

		
		</form>
	
	</div>
	</center>
	
	
</body>
</html>