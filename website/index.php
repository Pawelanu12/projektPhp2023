<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="UTF-8">

    	<title>Sign in form</title>

		<link rel="stylesheet" href="styles/main.css" type="text/css">
		
		<script type="text/javascript" src="scripts/main.js">
		</script> 
	</head>

	<body>
		<fieldset class="sign-in-box">
			<legend>Sign in form</legend>
			
			<form action="sign_in.php" method="GET">
    			<label>
					E-mail:
					<input name="sign-in-email" type="email" required><br>
				</label>

				<label>
    				Password:
					<input name="sign-in-password" type="password" required><br>
				</label>

    			<input name="sign-in-submit" type="submit" value="Sign in">

				<p>Haven't you account yet? register <a href="register_form.php">here</a>
			</form>
		</fieldset>
	</body>
</html>
