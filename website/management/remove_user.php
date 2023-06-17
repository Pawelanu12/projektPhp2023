<?php
	require('../configuration/database_config.php');

	$dbConnection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

	if($dbConnection)
	{
		
		$dbRemoveUserQuery = 'DELETE FROM users WHERE user_id = 11;';
		
		mysqli_close($dbConnection);
	}
	echo
	{
		echo("ERROR: Connection to database WASN'T created.");
	}

?>
