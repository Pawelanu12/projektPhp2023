<?php
	require('../../configuration/database_config.php');

	$dbConnection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

	$userId = $_GET["user-id"];

	if($dbConnection)
	{
		
		$dbRemoveUserQuery = 'DELETE FROM users WHERE user_id = '.$userId.';';

		$dbRemoveUserQueryResult = mysqli_query($dbConnection, $dbRemoveUserQuery);

		if($dbRemoveUserQueryResult)
		{
			echo("The user has been removed.");
		}
		else
		{
			echo("The user has been NOT removed.");
		}
		
		echo('<br><br><a href="users_management.php">Return to users list</a><br>');
		
		mysqli_close($dbConnection);
	}
	else
	{
		echo("ERROR: Connection to database WASN'T created.");
	}

?>
