<?php
	require('../../configuration/database_config.php');

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
				echo('<tr><td>No.</td><td>Language</td><td>Quiz type</td><td>Quiz name</td><td>Quiz description</td><td></td><td></td></tr>');
				
				$quizPosition = 0;
				while($quiz = mysqli_fetch_assoc($dbQuizesListQueryResult))
				{
					$quizPosition++;
	
					$quizLanguage = $quiz["language_name"];
					$quizId = $quiz["quiz_id"];
					$quizTypeName = $quiz["type_name"];
					$quizName = $quiz["name"];
					$quizDescription = $quiz["description"];

					echo('<tr>');
					echo('<td>'.$quizPosition.'</td>');
					echo('<td>'.$quizLanguage.'</td>');
					echo('<td>'.$quizTypeName.'</td>');
					echo('<td>'.$quizName.'</td>');
					echo('<td>'.$quizDescription.'</td>');
					
					echo('<td><a href="change_quiz.php?quiz-id='.$quizId.'">Change</a></td>');
					echo('<td><a href="remove_quiz.php?quiz-id='.$quizId.'">Remove</a></td>');
					
					echo('</tr>');
				}
				
				echo('</table>');


				echo('<a href="create_quiz_form.php">Create new quiz</a>');
			}
		}
		else
		{
			echo('ERROR: Query result WASN\'T received from database server.');
		}

		echo('<br><br><a href="..">Return to main management site</a><br>');

		mysqli_close($dbConnection);
	}
	else
	{
		echo('ERROR: Connection to database WASN\'T crated.');
	}
?>
