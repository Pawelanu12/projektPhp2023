<html>
<head>
	<meta charset="UTF-8">

	<title>Create new quiz</title>
</head>
<body>
	<h1>Create new quiz form</h1>

	<form name="crate-quiz-form" action="create_quiz.php" method="GET">
		<fieldset>
			<legend>Create quiz form</legend>
		
			<label>
				Quiz name:	
				<input name="quiz-name" type="text" size="64" maxlength="64" required>
			</label>
			<br>

			<label>
				Quiz description:
				<input name="quiz-description" type="text" size="150" maxlength="1024" required>
			</label>
			<br>
			
			Quiz type:
			<select name="quiz-type-id" size="1">
				<option value="1">One answer test</option>
				<option value="2">Multiple answers test</option>
				<option value="3">Gap question</option>
				<option value="4">Open question</option>
			</select><br>
			
			Quiz language:
			<select name="quiz-language-id" size="1">
				<option value="1">English</option>
				<option value="2" selected>Polish</option>
			</select><br><br>

			<label>
				Question 1:
				<input name="question-content-1" type="text">
			</label><br><br>

			<label>
				Answer 1A:
				<input name="answer-content-1-a" type="text">
			</label>
			
			<select name="answer-correct-1-a" size="1">
				<option value="TRUE">Correct</option>
				<option value="TRUE" selected>Incorrect</option>
			</select><br>

			<label>
				Answer 1B:
				<input name="answer-content-1-b" type="text">
			</label>
			
			<select name="answer-correct-1-b" size="1">
				<option value="TRUE">Correct</option>
				<option value="TRUE" selected>Incorrect</option>
			</select><br>

			<label>
				Answer 1C:
				<input name="answer-content-1-c" type="text">
			</label>
			
			<select name="answer-correct-1-c" size="1">
				<option value="TRUE">Correct</option>
				<option value="TRUE" selected>Incorrect</option>
			</select><br>

			<label>
				Answer 1D:
				<input name="answer-content-1-d" type="text">
			</label>
			
			<select name="answer-correct-1-d" size="1">
				<option value="TRUE">Correct</option>
				<option value="TRUE" selected>Incorrect</option>
			</select><br><br><br>

			<label>
				Question 2:
				<input name="question-content-2" type="text">
			</label><br><br>

			<label>
				Answer 2A:
				<input name="answer-content-2-a" type="text">
			</label>
			
			<select name="answer-correct-2-a" size="1">
				<option value="TRUE">Correct</option>
				<option value="TRUE" selected>Incorrect</option>
			</select><br>

			<label>
				Answer 2B:
				<input name="answer-content-2-b" type="text">
			</label>
			
			<select name="answer-correct-2-b" size="1">
				<option value="TRUE">Correct</option>
				<option value="TRUE" selected>Incorrect</option>
			</select><br>

			<label>
				Answer 2C:
				<input name="answer-content-2-c" type="text">
			</label>
			
			<select name="answer-correct-2-c" size="1">
				<option value="TRUE">Correct</option>
				<option value="TRUE" selected>Incorrect</option>
			</select><br>

			<label>
				Answer 2D:
				<input name="answer-content-2-d" type="text">
			</label>
			
			<select name="answer-correct-2-d" size="1">
				<option value="TRUE">Correct</option>
				<option value="TRUE" selected>Incorrect</option>
			</select><br><br><br>

			<label>
				Question 3:
				<input name="question-content-3" type="text">
			</label><br><br>

			<label>
				Answer 3A:
				<input name="answer-content-3-a" type="text">
			</label>
			
			<select name="answer-correct-3-a" size="1">
				<option value="TRUE">Correct</option>
				<option value="TRUE" selected>Incorrect</option>
			</select><br>

			<label>
				Answer 3B:
				<input name="answer-content-3-b" type="text">
			</label>
			
			<select name="answer-correct-3-b" size="1">
				<option value="TRUE">Correct</option>
				<option value="TRUE" selected>Incorrect</option>
			</select><br>

			<label>
				Answer 3C:
				<input name="answer-content-3-c" type="text">
			</label>
			
			<select name="answer-correct-3-c" size="1">
				<option value="TRUE">Correct</option>
				<option value="TRUE" selected>Incorrect</option>
			</select><br>

			<label>
				Answer 3D:
				<input name="answer-content-3-d" type="text">
			</label>
			
			<select name="answer-correct-3-d" size="1">
				<option value="TRUE">Correct</option>
				<option value="TRUE" selected>Incorrect</option>
			</select><br><br><br>

			<input name="create-quiz-submit" type="submit" value="Create new quiz">

		</fieldset>

	</form>
</body>
</html>
