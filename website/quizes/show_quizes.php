<?php
	require('../configuration/database_config.php');

	$dbConnection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

	if($dbConnection)
	{
		$dbQuizesListQuery = 'SELECT quiz_id, type_name, languages.name AS language_name, quizes.name, description FROM quizes, quiz_types, languages WHERE quizes.quiz_type_id = quiz_types.quiz_type_id AND quizes.language_id = languages.language_id;';

		$dbQuizesListQueryResult = mysqli_query($dbConnection, $dbQuizesListQuery);

		if($dbQuizesListQuery)
		{
			$quizesAmount = mysqli_num_rows($dbQuizesListQueryResult);

			if($quizesAmount > 0)
			{
				echo('<table border="3">');
				echo('<tr><td>No.</td><td>Language</td><td>Quiz type</td><td>Quiz name</td><td>Quiz description</td><td></td></tr>');
				
				$quizPosition = 0;
				while($quiz = mysqli_fetch_assoc($dbQuizesListQueryResult))
				{
					$quizPosition++;
	
					$quizLanguage = $quiz["language_name"];
					$quizId = $quiz["quiz_id"];
					$quizTypeName = $quiz["type_name"];
					$quizName = $quiz["name"];
					$quizDescription = $quiz["description"];

					echo('<tr><td>'.$quizPosition.'</td><td>'.$quizLanguage.'</td><td>'.$quizTypeName.'</td><td>'.$quizName.'</td><td>'.$quizDescription.'</td><td><a href="execute_quiz.php?quiz_id='.$quizId.'">Start</a></td></tr>');
				}
				
				echo('</table>');
			}
		}
		else
		{
			echo('ERROR: Query result WASN\'T received from database server.');
		}

		mysqli_close($dbConnection);
	}
	else
	{
		echo('ERROR: Connection to database WASN\'T crated.');
	}
?>
