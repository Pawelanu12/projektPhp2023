CREATE TABLE users
(
	user_id INT NOT NULL AUTO_INCREMENT,

	username VARCHAR(16) NOT NULL,
	password VARCHAR(32) NOT NULL,

	points_amount INT NOT NULL,
	quizes_amount INT NOT NULL,

	PRIMARY KEY(user_id)
);

CREATE TABLE quiz_types
(
	quiz_type_id INT NOT NULL,

	type_name VARCHAR(64) NOT NULL,
	type_description VARCHAR(1024),

	PRIMARY KEY(quiz_type_id)	
);

CREATE TABLE quizes
(
	quiz_id INT NOT NULL AUTO_INCREMENT,

	quiz_type_id INT NOT NULL,

	name VARCHAR(64) NOT NULL,
	description VARCHAR(1024),
	
	PRIMARY KEY(quiz_id)
);

CREATE TABLE quiz_questions
(
	quiz_question_id INT NOT NULL AUTO_INCREMENT,

	quiz_id INT NOT NULL,

	question_content VARCHAR(1024) NOT NULL,

	PRIMARY KEY(quiz_question_id)
);

CREATE TABLE quiz_answers
(
	quiz_answer_id INT NOT NULL AUTO_INCREMENT,

	quiz_question_id INT NOT NULL,
	
	answer_content VARCHAR(1024) NOT NULL,
	answer_correct BOOL NOT NULL,

	PRIMARY KEY(quiz_answer_id)
);
