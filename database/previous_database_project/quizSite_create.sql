-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2023-06-09 07:17:32.861

-- tables
-- Table: Users
CREATE TABLE Users (
    User_ID int  NOT NULL,
    email varchar(64)  NOT NULL,
    haslo varchar(64)  NOT NULL,
    points_number int  NOT NULL,
    CONSTRAINT Users_pk PRIMARY KEY (User_ID)
);

-- Table: dificulty_level
CREATE TABLE dificulty_level (
    level_ID int  NOT NULL,
    level_name varchar(64)  NOT NULL,
    CONSTRAINT dificulty_level_pk PRIMARY KEY (level_ID)
);

-- Table: quetsion_base
CREATE TABLE quetsion_base (
    question_ID int  NOT NULL,
    content varchar(200)  NOT NULL,
    hint varchar(200)  NOT NULL,
    answare varchar(60)  NOT NULL,
    quiz_category_quiz_ID int  NOT NULL,
    CONSTRAINT quetsion_base_pk PRIMARY KEY (question_ID)
);

-- Table: quiz_category
CREATE TABLE quiz_category (
    quiz_ID int  NOT NULL,
    dificulty_level_level_ID int  NOT NULL,
    CONSTRAINT quiz_category_pk PRIMARY KEY (quiz_ID)
);

-- foreign keys
-- Reference: quetsion_base_quiz_category (table: quetsion_base)
ALTER TABLE quetsion_base ADD CONSTRAINT quetsion_base_quiz_category
    FOREIGN KEY (quiz_category_quiz_ID)
    REFERENCES quiz_category (quiz_ID)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: quiz_category_dificulty_level (table: quiz_category)
ALTER TABLE quiz_category ADD CONSTRAINT quiz_category_dificulty_level
    FOREIGN KEY (dificulty_level_level_ID)
    REFERENCES dificulty_level (level_ID)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- End of file.

