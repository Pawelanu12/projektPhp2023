<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="UTF-8">

    	<title>Register form</title>

		<link rel="stylesheet" href="styles/main.css" type="text/css">
		
		<script type="text/javascript" src="scripts/main.js">
		</script> 
	</head>

	<body>
		<fieldset class="sign-in-box">
			<legend>Register account form</legend>
			
			<form action="register.php" method="GET">
    			<label>
					E-mail:
					<input name="register-email" type="email" required><br>
				</label>

				<label>
    				Password:
					<input name="register-password" type="password" required><br>
				</label>

				<label>
    				Confirm password:
					<input name="register-confirm-password" type="password" required><br>
				</label>

    			<input name="register-submit" type="submit" value="Register account">

				<p>Have you already account? Please sign in <a href="index.php">here</a></p>
			</form>
		</fieldset>
	</body>
</html>
