<?php
	require('../configuration/database_config.php');

	$dbConnection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

	if($dbConnection)
	{
		//echo('Connection to database was created successfully.');
		
		$signInFormEmail = $_GET["sign-in-email"];
		$signInFormPassword = $_GET["sign-in-password"];

		$dbSignInQuery = 'SELECT user_id, users.user_role_id, role_name, password, is_confirmed, is_active FROM users, user_roles WHERE users.user_role_id = user_roles.user_role_id AND users.user_role_id < 10 AND email_address = "'.$signInFormEmail.'";';
				
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
					$userRoleName = $user["role_name"];

					echo('<h1>Welcome, '.$signInFormEmail.'  [ '.$userRoleName.' ]</h1><br><br>');
					
					$userIsActive = $user["is_active"];
					
					if($userIsActive)
					{
						$userRoleId = $user["user_role_id"];
						$userRoleName = $user["role_name"];

						if($userRoleId == 1)
						{
							echo('<br><a href="users/users_management.php?user-id='.$userId.'">MANAGE USERS</a><br>');
							echo('<br><a href="quizes/quizes_management.php?user-id='.$userId.'">MANAGE QUIZES</a><br>');
						}
						else if($userRoleId == 2)
						{		
							echo('<br><a href="quizes/quizes_management.php?user-id='.$userId.'">MANAGE QUIZES</a><br>');
						}
						else if($userRoleId == 3)
						{
							echo('<br><a href="quizes/quizes_management.php?user-id='.$userId.'">MANAGE QUIZES</a><br>');
						}
						else
						{
							echo("ERROR: Uknown role.<br>");
							echo("<h1>ACCESS DENIED</h1>");
						}
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
