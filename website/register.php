<?php
	require('configuration/database_config.php');
	require('configuration/registration_config.php');

	$dbConnection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

	if($dbConnection)
	{
		$registerFormEmail = $_GET["register-email"];
		$registerFormPassword = $_GET["register-password"];
		$registerFormConfirmPassword = $_GET["register-confirm-password"];
		
		if($registerFormPassword == $registerFormConfirmPassword)
		{
			$dbRegisterUserQuery = 'INSERT INTO users VALUES(NULL, 10, "'.$registerFormEmail.'", "'.$registerFormPassword.'", 0, 0, '.$defaultIsConfirmed.', '.$defaultIsActive.');';

			$dbRegisterUserQueryResult = mysqli_query($dbConnection, $dbRegisterUserQuery);

			if($dbRegisterUserQueryResult)
			{
				echo('<br>New user '.$registerFormEmail.' was created successfully.<br><br>');
				echo('<br><a href="index.php">Please, sign in to account</a><br>');
			}
			else
			{
				echo('ERROR: Query result was not received.');
			}
 
		}
		else
		{
			echo('Registration cancelled. Passwords are different. Please, try again.');
		}

		mysqli_close($dbConnection);
	}
	else
	{
		echo('ERROR: Connection to database WAS NOT created.');
	}
?>
