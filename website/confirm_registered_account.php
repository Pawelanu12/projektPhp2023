<?php
	require('configuration/database_config.php');
	require('configuration/confirmation_config.php');

	$dbConnection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

	if($dbConnection)
	{
		$confirmationEmail = $_GET["email"];
		$confirmationToken = $_GET["token"];
		
		if($confirmationToken == $defaultConfirmationToken)
		{
			$dbConfirmUserAccountQuery = 'UPDATE users SET is_confirmed = TRUE WHERE email_address = "'.$confirmationEmail.'";';
			//echo('<h1>'.$dbConfirmUserAccountQuery.'</h1>');

			$dbConfirmUserAccountQueryResult = mysqli_query($dbConnection, $dbConfirmUserAccountQuery);

			if($dbConfirmUserAccountQueryResult)
			{
				echo('<br>Account for user '.$confirmationEmail.' was confirmed successfully.<br><br>');
				echo('<br><a href="index.php">Please, sign in to account</a><br>');
			}
			else
			{
				echo('ERROR: Query result was not received.');
			}
 
		}
		else
		{
			echo('User account confirmation has been cancelled. Confirmation token is incorrect. Please, try again.');
		}

		mysqli_close($dbConnection);
	}
	else
	{
		echo('ERROR: Connection to database WAS NOT created.');
	}
?>
