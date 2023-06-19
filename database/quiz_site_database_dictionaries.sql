-- removing all dictionary data

DELETE FROM quiz_types;
DELETE FROM user_roles;
DELETE FROM languages;


-- languages dictionary data

INSERT INTO languages VALUES(1, "en", "English");
INSERT INTO languages VALUES(2, "pl", "Polish");


-- user roles dictionary data

INSERT INTO user_roles VALUES(1, "Administrator", "Rola administratorów całego web serwisu."); 
INSERT INTO user_roles VALUES(2, "Redaktor", "Rola redaktorów zarządzających wyglądem i treścią serwisu."); 
INSERT INTO user_roles VALUES(3, "Edytor", "Rola autorów tworzących i edytujących nowe i istniejące quizy."); 

INSERT INTO user_roles VALUES(10, "Użytkownik zwykły", "Użytkownik z podstawową funkcjonalnością serwisu.");
INSERT INTO user_roles VALUES(11, "Użytkownik PREMIUM", "Użytkownik z dodatkowymi płatnymi funkcjonalnościami serwisu."); 


-- quiz types dictionary data

INSERT INTO quiz_types VALUES(1, "Quiz jednokrotnego wyboru", "Test z tylko i wyłącznie jedną prawidłową odpowiedzią.");
INSERT INTO quiz_types VALUES(2, "Quiz wielokrotnego wyboru", "Test z jedną lub wieloma prawidłowymi odpowiedziami.");
INSERT INTO quiz_types VALUES(3, "Quiz z uzupełnianiem luk", "Test z uzupełnianiem pustych miejsc w zdaniu.");
INSERT INTO quiz_types VALUES(4, "Quiz z pytaniami otwartymi", "Test z z udzielaniem odpowiedzi tekstowych.");
