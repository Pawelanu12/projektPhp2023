-- Removing structure of database

DROP TABLE quiz_answers;
DROP TABLE quiz_questions;
DROP TABLE quizes;
DROP TABLE quiz_types;
DROP TABLE users;
DROP TABLE user_roles;
DROP TABLE languages;

-- Creating structure of database

CREATE TABLE languages
(
	language_id INT NOT NULL,
	
	alfa_2_code CHAR(2) NOT NULL,

	name VARCHAR(32) NOT NULL,

	PRIMARY KEY(language_id)
);

CREATE TABLE user_roles
(
	user_role_id INT NOT NULL,
	
	role_name VARCHAR(64),
	role_description VARCHAR(1024),
	
	PRIMARY KEY(user_role_id)
);

CREATE TABLE users
(
	user_id INT NOT NULL AUTO_INCREMENT,

	user_role_id INT NOT NULL,

	email_address VARCHAR(256) NOT NULL,
	password VARCHAR(32) NOT NULL,

	points_amount INT NOT NULL,
	quizes_amount INT NOT NULL,

	is_confirmed BOOL NOT NULL,
	is_active BOOL NOT NULL,

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
	language_id INT NOT NULL,

	name VARCHAR(64) NOT NULL,
	description VARCHAR(1024),

	created DATETIME NOT NULL,
	modified DATETIME,
	
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
