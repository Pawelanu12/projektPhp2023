<?php
	require('configuration/database_config.php');

	$dbConnection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

	if($dbConnection)
	{
		$dbQuizesListQuery = 'SELECT type_name, name, description FROM quizes, quiz_types WHERE quizes.quiz_type_id = quiz_types.quiz_type_id;';

		$dbQuizesListQueryResult = mysqli_query($dbConnection, $dbQuizesListQuery);

		if($dbQuizesListQuery)
		{
			$quizesAmount = mysqli_num_rows($dbQuizesListQueryResult);

			if($quizesAmount > 0)
			{
				echo('<table border="3">');
				echo('<tr><td>No.</td><td>Quiz type</td><td>Quiz name</td><td>Quiz descryption</td></tr>');
				
				$quizPosition = 0;
				while($quiz = mysqli_fetch_assoc($dbQuizesListQueryResult))
				{
					$quizPosition++;

					$quizTypeName = $quiz["type_name"];
					$quizName = $quiz["name"];
					$quizDescription = $quiz["description"];

					echo('<tr><td>'.$quizPosition.'</td><td>'.$quizTypeName.'</td><td>'.$quizName.'</td><td>'.$quizDescription.'</td></tr>');
				}
				
				echo('</table>');
			}
		}
		else
		{
			echo('ERROR: Query result WASN\'T received from database server.');
		}

		mysqli_close($dbConnecton);
	}
	else
	{
		echo('ERROR: Connection to database WASN\'T crated.');
	}
?>
