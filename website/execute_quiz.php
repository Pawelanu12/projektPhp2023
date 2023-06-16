<?php
	require('configuration/database_config.php');
	
	$dbConnection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

	if($dbConnection)
	{
		$quizId = $_GET["quiz_id"];
		
		$dbSelectedQuizQuery = 'SELECT name, description FROM quizes WHERE quiz_id = '.$quizId.';';

		$dbSelectedQuizQueryResult = mysqli_query($dbConnection, $dbSelectedQuizQuery);
		
		if($dbSelectedQuizQueryResult)
		{
			$quizInfo = mysqli_fetch_assoc($dbSelectedQuizQueryResult);

			$quizName = $quizInfo["name"];
			$quizDescription = $quizInfo["description"];

			echo('<form action="check_quiz_answers.php" method="GET">');			

			echo('<h1>'.$quizName.'</h1>');
			echo('<h2>'.$quizDescription.'</h2>');
		}
		else
		{
			echo("ERROR: Query result with quiz info WASN'T received.");
		}		

		$dbSelectedQuizQuestionsQuery = 'SELECT quiz_question_id, question_content FROM quiz_questions WHERE quiz_id = '.$quizId.';';
		//echo($dbSelectedQuizQuestionsQuery);

		$dbSelectedQuizQuestionsQueryResult = mysqli_query($dbConnection, $dbSelectedQuizQuestionsQuery);

		if($dbSelectedQuizQuestionsQueryResult)
		{
			//$questionsAmount = mysqli_num_rows($dbSelectedQuizQuestionsQueryResult);
			
			$questionNumber = 1;
			while($question = mysqli_fetch_assoc($dbSelectedQuizQuestionsQueryResult))
			{
				$questionId = $question["quiz_question_id"];
				$questionContent = $question["question_content"];
				
				echo('<p>');
				echo('<h3><b>Question '.$questionNumber.' : </b>'.$questionContent.'</h3>');
				
				$dbSelectedQuizAnswersQuery = 'SELECT quiz_answer_id, answer_content, answer_correct FROM quiz_answers WHERE quiz_question_id  = '.$questionId.';';

				$dbSelectedQuizAnswersQueryResult = mysqli_query($dbConnection, $dbSelectedQuizAnswersQuery);

				if($dbSelectedQuizAnswersQueryResult)
				{
					while($answer = mysqli_fetch_assoc($dbSelectedQuizAnswersQueryResult))
					{
						$answerId = $answer["quiz_answer_id"];

						$answerContent = $answer["answer_content"];
						$answerCorrect = $answer["answer_correct"];

						echo('<input name="question'.$questionId.'-answer'.$answerId.'" type="checkbox"> '.$answerContent.'<br>');
					}
				}
				else
				{
					echo("ERROR: Query result with quiz answers WASN'T received.");
				}



				echo('</p>');
				
				$questionNumber++;
			}
		}
		else
		{
			echo("ERROR: Query result with quiz questions WASN'T received.");
		}

		echo('<input name="reset-quiz" type="reset" value="Reset quiz">');
		echo('<input name="submit-quiz" type="submit" value="Send all answers.">');
		
		echo('</form>');

		mysqli_close($dbConnection);
	}
	else
	{
		echo("ERROR: Connection to database WASN'T created.");
	}
?>
