<html>
<head>
	<meta charset="UTF-8">

	<title>Create new quiz</title>
</head>
<body>
	<h1>Create new quiz form</h1>

	<form name="crate-quiz-form" action="create_quiz" method="GET">
		<fieldset>
			<legend>Create quiz form</legend>
			
			<input name="quiz-name" type="text" required><br>
			<input name="quiz-description" type="text" required><br>

			<select name="quiz-type" size="1">
				<option value="1">One answer test</option>
				<option value="2">Multiple answers test</option>
				<option value="3">Gap question</option>
				<option value="4">Open question</option>
			</select><br>
			
			<select name="language" size="1">
				<option value="1">English</option>
				<option value="2">English</option>
			</select><br><br>

			<label>
				question 1:
				<input name="question-1" type="text">
			</label><br>

			<label>
				answer 1:
				<input name="answer-1" type="text">
			</label><br>

			<input name="create-quiz-submit" type="submit" value="Create next">

		</fieldset>

	</form>
</body>
</html>
