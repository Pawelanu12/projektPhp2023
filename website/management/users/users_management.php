<?php
	require('../configuration/database_config.php');

	$dbConnection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

	if($dbConnection)
	{
		$dbUsersListQuery = 'SELECT user_id, users.user_role_id, role_name, email_address, password, is_confirmed, is_active FROM users, user_roles WHERE users.user_role_id = user_roles.user_role_id;';
		
		$dbUsersListQueryResult = mysqli_query($dbConnection, $dbUsersListQuery);

		if($dbUsersListQueryResult)
		{
			echo('<table border="3">');

			echo('<tr><td>No.</td><td>Email address</td><td>Password</td><td>User role</td><td>Is confirmed</td><td>Is active</td><td></td><td></td></tr>');
	
			$userListPosition = 1;

			while($user = mysqli_fetch_assoc($dbUsersListQueryResult))
			{
				$userId = $user["user_id"];

				echo('<tr>');
				
				echo('<td>'.$userListPosition.'</td>');
				
				echo('<td>'.$user["email_address"].'</td>');
				echo('<td>'.$user["password"].'</td>');
				echo('<td>'.$user["role_name"].'</td>');
				echo('<td>'.$user["is_confirmed"].'</td>');
				echo('<td>'.$user["is_active"].'</td>');

				echo('<td><a href="change_user.php?user-id='.$userId.'">Change</a></td>');
				echo('<td><a href="remove_user.php?user-id='.$userId.'">Remove</td>');

				echo('</tr>');
				
				$userListPosition++;
			}

			echo("</table>");
		}
		else
		{
			echo('ERROR: Query result WASN\'T received.');
		}		

		mysqli_close($dbConnection);
	}
	else
	{
		echo('ERROR: Connection to database WASN\'T created.');
	}
?>
