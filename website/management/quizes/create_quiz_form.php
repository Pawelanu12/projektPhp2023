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

			<input name="quiz-questions-amount" type="hidden" value="3">

			<label>
				Question 1:
				<input name="question-content-0" type="text">
			</label><br><br>
	
			<input name="quiz-question-0-answers-amount" type="hidden" value="4">

			<label>
				Answer 1A:
				<input name="answer-content-0-0" type="text">
			</label>
			
			<select name="answer-correct-0-0" size="1">
				<option value="TRUE">Correct</option>
				<option value="TRUE" selected>Incorrect</option>
			</select><br>

			<label>
				Answer 1B:
				<input name="answer-content-0-1" type="text">
			</label>
			
			<select name="answer-correct-0-1" size="1">
				<option value="TRUE">Correct</option>
				<option value="TRUE" selected>Incorrect</option>
			</select><br>

			<label>
				Answer 1C:
				<input name="answer-content-0-2" type="text">
			</label>
			
			<select name="answer-correct-0-2" size="1">
				<option value="TRUE">Correct</option>
				<option value="TRUE" selected>Incorrect</option>
			</select><br>

			<label>
				Answer 1D:
				<input name="answer-content-0-3" type="text">
			</label>
			
			<select name="answer-correct-0-3" size="1">
				<option value="TRUE">Correct</option>
				<option value="TRUE" selected>Incorrect</option>
			</select><br><br><br>

			<label>
				Question 2:
				<input name="question-content-1" type="text">
			</label><br><br>
	
			<input name="quiz-question-1-answers-amount" type="hidden" value="4">

			<label>
				Answer 2A:
				<input name="answer-content-1-0" type="text">
			</label>
			
			<select name="answer-correct-1-0" size="1">
				<option value="TRUE">Correct</option>
				<option value="TRUE" selected>Incorrect</option>
			</select><br>

			<label>
				Answer 2B:
				<input name="answer-content-1-1" type="text">
			</label>
			
			<select name="answer-correct-1-1" size="1">
				<option value="TRUE">Correct</option>
				<option value="TRUE" selected>Incorrect</option>
			</select><br>

			<label>
				Answer 2C:
				<input name="answer-content-1-2" type="text">
			</label>
			
			<select name="answer-correct-1-2" size="1">
				<option value="TRUE">Correct</option>
				<option value="TRUE" selected>Incorrect</option>
			</select><br>

			<label>
				Answer 2D:
				<input name="answer-content-1-3" type="text">
			</label>
			
			<select name="answer-correct-1-3" size="1">
				<option value="TRUE">Correct</option>
				<option value="TRUE" selected>Incorrect</option>
			</select><br><br><br>

			<label>
				Question 3:
				<input name="question-content-2" type="text">
			</label><br><br>

			<input name="quiz-question-2-answers-amount" type="hidden" value="4">

			<label>
				Answer 3A:
				<input name="answer-content-2-0" type="text">
			</label>
			
			<select name="answer-correct-2-0" size="1">
				<option value="TRUE">Correct</option>
				<option value="TRUE" selected>Incorrect</option>
			</select><br>

			<label>
				Answer 3B:
				<input name="answer-content-2-1" type="text">
			</label>
			
			<select name="answer-correct-2-1" size="1">
				<option value="TRUE">Correct</option>
				<option value="TRUE" selected>Incorrect</option>
			</select><br>

			<label>
				Answer 3C:
				<input name="answer-content-2-2" type="text">
			</label>
			
			<select name="answer-correct-2-2" size="1">
				<option value="TRUE">Correct</option>
				<option value="TRUE" selected>Incorrect</option>
			</select><br>

			<label>
				Answer 3D:
				<input name="answer-content-2-3" type="text">
			</label>
			
			<select name="answer-correct-2-3" size="1">
				<option value="TRUE">Correct</option>
				<option value="TRUE" selected>Incorrect</option>
			</select><br><br><br>

			<input name="create-quiz-submit" type="submit" value="Create new quiz">

		</fieldset>

	</form>
</body>
</html>
