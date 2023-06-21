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
			
			$quizQuestionsAmount = $_GET["quiz-questions-amount"];

			for($questionIndex = 0; $questionIndex < $quizQuestionsAmount; $questionIndex++)
			{
				$quizQuestionContent = $_GET['question-content-'.$questionIndex];			

				$dbQuizQuestionQuery = 'INSERT INTO quiz_questions VALUES(NULL, '.$quizId.', "'.$quizQuestionContent.'");';
				$dbQuizQuestionQueryResult = mysqli_query($dbConnection, $dbQuizQuestionQuery);
	
				if($dbQuizQuestionQueryResult)
				{
					$quizQuestionId = mysqli_insert_id($dbConnection);
				
					$quizCurrentQuestionAnswersAmount = $_GET['quiz-question-'.$questionIndex.'-answers-amount'];

					for($answerIndex = 0; $answerIndex < $quizCurrentQuestionAnswersAmount; $answerIndex++)
					{
						$quizAnswerContent = $_GET['answer-content-'.$questionIndex.'-'.$answerIndex];
						$quizAnswerCorrect = $_GET['answer-correct-'.$questionIndex.'-'.$answerIndex];
		
						$dbQuizAnswerQuery = 'INSERT INTO quiz_answers VALUES(NULL, '.$quizQuestionId.', "'.$quizAnswerContent.'", '.$quizAnswerCorrect.');';

						$dbQuizAnswerQueryResult = mysqli_query($dbConnection, $dbQuizAnswerQuery);
	
						if($dbQuizAnswerQueryResult)
						{
						}
						else
						{
							echo("ERROR: Quiz answer has NOT been added to database.");
						}
					}
				}
				else
				{
					echo("ERROR: Quiz question to quiz about id: $quizId has not been created");
				}			
			}

			echo("Quiz has been created<br><br>");
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
