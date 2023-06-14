<?php
	require('../configuration/database_config.php');

	$dbConnection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

	if($dbConnection)
	{
		//echo('Connection to database was created successfully.');
		
		$signInFormEmail = $_GET["sign-in-email"];
		$signInFormPassword = $_GET["sign-in-password"];

		$dbSignInQuery = 'SELECT email_address, points_amount, quizes_amount, is_confirmed, is_active FROM users;';
				
		//echo('<h1>'.$dbSignInQuery.'</h1>');

		$dbSignInQueryResult = mysqli_query($dbConnection, $dbSignInQuery);

		if($dbSignInQueryResult)
		{
			//echo('Query result was received successfully.');

			$usersAmount = mysqli_num_rows($dbSignInQueryResult);

			//echo('users rows amount returned from database: '.$usersAmount);
			
			if($usersAmount > 0)
			{
				$user = mysqli_fetch_assoc($dbSignInQueryResult);
				$userValidPassword = $user["password"];

				if($signInFormPassword == $userValidPassword)
				{
					echo('Welcome, '.$signInFormEmail);
					
					$userIsActive = $user["is_active"];
					
					if($userIsActive)
					{
						echo('Your account is active. Welcome again.');
					}
					else
					{
						echo('Your account has been blocked. Please contact with administrator.');
					}
				}
				else
				{
					echo('ERROR: Password incorrect for user '.$signInForEmail);
            	}
			}
			else
			{
				echo('ERROR: User '.$signInFormEmail.' does not exists.');
			}
		

			
		}
		else
		{
			echo('ERROR: Query result WASN\'t received.');
		}

		mysqli_close($dbConnection);
	}
	else
	{
		echo('ERROR: Connection to database WASN\'T created.');
	}
?>
