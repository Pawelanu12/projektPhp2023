<?php
	require('../../configuration/database_config.php');

	$dbConnection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

	if($dbConnection)
	{
		$quizTypeId = $_GET["quiz-type-id"];
		$quizLanguageId = $_GET["quiz-language-id"];
		
		$quizName = $_GET["quiz-name"];
		$quizDescription = $_GET["quiz-description"];
		
		//$created = $_GET["created"];
		//$modified = $_GET["modified"];

		$dbCreateNewQuizQuery = 'INSERT INTO quizes VALUES(NULL, '.$quizTypeId.', '.$quizLanguageId.', "'.$quizName.'", "'.$quizDescription.'", NOW(), NULL);';

		$dbCreateNewQuizQueryResult = mysqli_query($dbConnection, $dbCreateNewQuizQuery);
		
		if($dbCreateNewQuizQueryResult)
		{
			$quizId = mysqli_insert_id($dbConnection);
			$quizQuestionContent = $_GET["question-content-1"];			

			$dbQuizQuestionQuery = 'INSERT INTO quiz_questions VALUES(NULL, '.$quizId.', "'.$quizQuestionContent.'");';
			$dbQuizQuestionQueryResult = mysqli_query($dbConnection, $dbQuizQuestionQuery);

			if($dbQuizQuestionQueryResult)
			{
				$quizQuestionId = mysqli_insert_id($dbConnection);

				$quizAnswerContent = $_GET["answer-content-1-a"];
				$quizAnswerCorrect = $_GET["answer-correct-1-a"];

				$dbquizAnswerQuery = 'INSERT INTO quiz_answers VALUES(NULL, '.$quizQuestionId.', "'.$quizAnswerContent.'", '.$quizAnswerCorrect.');';
				echo("Quiz has been created<br><br>");
			}
			else
			{
				echo("ERROR: Question to quiz about quiz id: $quizId has not been created");
			}			

		}
		else
		{
			echo("ERROR: Quiz has NOT been created.");
		}	

		mysqli_close($dbConnection);
	}
	else
	{
		echo("ERROR: Connection to database WASN'T created.");
	}
	
	echo('<br><a href="quizes_management.php">Return to quizes list.</a><br>');
?>
