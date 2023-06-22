<?php
	require('../configuration/database_config.php');
	
	$dbConnection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
	
	if($dbConnection)
	{
		$userId = $_GET["user-id"];
		$quizId = $_GET["quiz-id"];

		$quizAnswersQuery = 'SELECT quiz_answer_id, answer_correct FROM quiz_answers WHERE quiz_question_id IN (SELECT quiz_question_id FROM quiz_questions WHERE quiz_id = '.$quizId.');';

		$quizAnswersQueryResult = mysqli_query($dbConnection, $quizAnswersQuery);

		if($quizAnswersQueryResult)
		{
			$quizPointsAmount = 0;

			while($answer = mysqli_fetch_assoc($quizAnswersQueryResult))
			{
				$answerId = $answer["quiz_answer_id"];
				$answerCorrect = $answer["answer_correct"];
				
				//echo('<h3>Answer id: '.$answerId.'</h3>');
				//echo('<h3>Answer correct: '.$answerCorrect.'</h3>');

				$answerGivenName = 'answer-id-'.$answerId;
				if(isset($answerGivenName))
				{

					$answerGiven = $_GET[$answerGivenName];
					//echo('<h3>Answer given: '.$answerGiven.'</h3>');

					if($answerGiven == $answerCorrect)
					{
						$quizPointsAmount++;
					}
				}
				else
				{
					$answerGiven = '0';
				}
			}

			echo('<h1>Your points amount is : '.$quizPointsAmount.' points</h1>');
			
			$dbUpdateUserDataQuery = 'UPDATE users SET points_amount = points_amount + '.$quizPointsAmount.', quizes_amount = quizes_amount + 1 WHERE user_id = 2;';
			
			$dbUpdateUserDataQueryResult = mysqli_query($dbConnection, $dbUpdateUserDataQuery);

			if($dbUpdateUserDataQueryResult)
			{
				echo('Congratulations! Your points has been added to your account.');
			}
			else
			{
				echo('ERROR: Sorry! Your points has been NOT added to your account.');
			}

			echo('<br><br><a href="show_quizes.php">Return to quizes list</a><br>');

		}
		else
		{
			echo('ERROR: Query result WASN\'T correctly received.');
		}	

		mysqli_close($dbConnection);
	}
	else
	{
		echo("ERROR: Connection with database WASN'T created.");
	}
?>
