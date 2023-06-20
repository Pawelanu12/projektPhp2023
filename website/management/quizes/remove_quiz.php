<?php
	require('../../configuration/database_config.php');

	$dbConnection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

	$quizId = $_GET["quiz-id"];

	if($dbConnection)
	{
		
		$dbRemoveQuizQuery = 'DELETE FROM quizes WHERE quiz_id = '.$quizId.';';

		$dbRemoveQuizQueryResult = mysqli_query($dbConnection, $dbRemoveQuizQuery);

		if($dbRemoveQuizQueryResult)
		{
			echo("Quiz has been removed.");
		}
		else
		{
			echo("Quiz has been NOT removed.");
		}
		
		echo('<br><br><a href="quizes_management.php">Return to quize management site</a><br>');
		
		mysqli_close($dbConnection);
	}
	else
	{
		echo("ERROR: Connection to database WASN'T created.");
	}

?>
