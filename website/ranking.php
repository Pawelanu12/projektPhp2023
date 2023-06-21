<?php
	require('configuration/database_config.php');

	$dbConnection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

	if($dbConnection)
	{
		$dbUserDataQuery = 'SELECT user_id, email_address, points_amount, quizes_amount FROM users ORDER BY points_amount DESC, quizes_amount DESC;';
		
		$dbUserDataQueryResult = mysqli_query($dbConnection, $dbUserDataQuery);
		
		if($dbUserDataQueryResult)
		{
			echo('<table border="3">');
			
			echo('<tr><td>Position number</td><td>Email address</td><td>Points amount</td><td>Quizes amount</td></tr>');
			
			$positionNumber = 0;
			
			while($userData = mysqli_fetch_assoc($dbUserDataQueryResult))
			{
				$positionNumber++;

				echo('<tr>');
				
				echo('<td>'.$positionNumber.'</td>');

				echo('<td>'.$userData["email_address"].'</td>');

				echo('<td>'.$userData["points_amount"].'</td>');
				echo('<td>'.$userData["quizes_amount"].'</td>');
				
				echo('</tr>');				
			}

			echo('</table>');
		}
		else
		{
			echo("ERROR: Result query was NOT received.");
		}

		mysqli_close($dbConnection);
	}
	else
	{
		echo("ERROR: Connection to database was NOT created.");
	}

?>
