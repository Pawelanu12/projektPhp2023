<?php
	require('configuration/database_config.php');

	$dbConnection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

	if($dbConnection)
	{
		//echo('Connection to database was created successfully.');
		
		$signInFormEmail = $_GET["sign-in-email"];
		$signInFormPassword = $_GET["sign-in-password"];

		$dbSignInQuery = 'SELECT user_id, password, is_confirmed, is_active FROM users WHERE email_address = "'.$signInFormEmail.'";';
				
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
					$userId = $user["user_id"];

					session_start();

					if(!isset($_COOKIE[$signInFormEmail]))
					{
    					setcookie($signInFormEmail, date("H:i:s"));
					}

					$sessionName = 'startUserSession';
					$_SESSION[$sessionName] = 'User: '.$signInFormEmail.' has been logged at '. date("Y-m-d H:i:s\n");
	
					//echo('<h1>'.$_SESSION[$sessionName].'</h1>');

					$logfile = fopen("logs\users_sign_in.log", "a");
					fwrite($logfile, $_SESSION[$sessionName]);
					fclose($logfile);
					
					echo('<h1>Welcome, '.$signInFormEmail.'</h1><br><br>');
					
					$userIsConfirmed = $user["is_confirmed"];

					if($userIsConfirmed)
					{
						$userIsActive = $user["is_active"];
					
						if($userIsActive)
						{
							//echo('Your account is active. Welcome again.');
							echo('<br><a href="quizes/show_quizes.php?user-id='.$userId.'">SHOW QUIZES LIST</a><br>');
							echo('<br><a href="ranking.php?user-id='.$userId.'">SHOW USERS RANKING</a><br>');
						}
						else
						{
							echo('Your account has been blocked. Please contact with administrator.');
						}
					}
					else
					{
						echo("Your account is not confirmed. Please check your email box.");
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
