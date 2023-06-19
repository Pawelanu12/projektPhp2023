-- removing all data from test data

DELETE FROM quiz_answers;
DELETE FROM quiz_questions;
DELETE FROM quizes;
DELETE FROM users;

-- users test data

INSERT INTO users VALUES(1, 1, "administrator@quiz-site.pl", "administrator#pass", 0, 0, TRUE, TRUE);
INSERT INTO users VALUES(2, 2, "pawel@interia.pl", "pawel#pass", 2147, 541, TRUE, TRUE);
INSERT INTO users VALUES(3, 3, "aldona@gmail.com", "aldona#pass", 1300, 400, FALSE, TRUE);
INSERT INTO users VALUES(10, 10, "krzysztof@wp.pl", "krzysztof#pass", 1250, 388, TRUE, TRUE);
INSERT INTO users VALUES(11, 11, "zbigniew@yahoo.com", "zbigniew#pass", 2000, 600, TRUE, TRUE);


-- quizes test data

INSERT INTO quizes VALUES(1, 1, 2, "Test wiedzy o samochodach sportowych.", "Test sprawdza podstawowa wiedzę o samochodach sportowych produkowanych na całym świecie.");
INSERT INTO quizes VALUES(2, 1, 2, "Sprawdzian wiadomości o historii najnowszej.", "Czy wiesz co to był PRL i dlaczego upadł związek radziecki i skąd się wzieła syrenka na polskich drogach?");
INSERT INTO quizes VALUES(3, 2, 1, "Quiz about English irregular verbs.", "Are you know all irregular verbs forms? Test yourself.");
INSERT INTO quizes VALUES(4, 2, 2, "Test znajomości angielskich czasowników nieregularnych.", "Czy znasz wszystkie formy nieregularnych czasowników angielskich? Sprawdź siebie.");
INSERT INTO quizes VALUES(5, 3, 1, "Quiz about English frazes and sentences.", "Find out how correct is your English.");


-- quiz questions test data

INSERT INTO quiz_questions VALUES(1, 1, "W którym roku powstał pierwszy seryjny model Ferrari?");
INSERT INTO quiz_questions VALUES(2, 1, "Jaki jest najpopularniejszy sportowy model SUV BMW?");

INSERT INTO quiz_questions VALUES(3, 2, "Jakie jest rozwinięcie skrótu PRL?");
INSERT INTO quiz_questions VALUES(4, 2, "W którym roku upadł związek radziecki?");

INSERT INTO quiz_questions VALUES(5, 3, "Which irregular forms of take verb are correct?");
INSERT INTO quiz_questions VALUES(6, 3, "Which irregular forms of break verb are correct?");
INSERT INTO quiz_questions VALUES(7, 3, "Which irregular forms of eat verb are correct?");

INSERT INTO quiz_questions VALUES(8, 4, "Jakie są poprawne formy czasownika <b>take</b>?");
INSERT INTO quiz_questions VALUES(9, 4, "Wybierz poprawne formy czasownika <b>break</b>?");
INSERT INTO quiz_questions VALUES(10, 4, "Zaznacz wszystkie właściwe formy czasownika <b>eat</b>?");

INSERT INTO quiz_questions VALUES(11, 5, "You can't take part in the elections <input name=gap-1 type=text> you are a citizen of Poland.");


-- quiz answers test data

INSERT INTO quiz_answers VALUES(1, 1, "W roku 1874", FALSE);
INSERT INTO quiz_answers VALUES(2, 1, "W roku 2001", FALSE);
INSERT INTO quiz_answers VALUES(3, 1, "W roku 1947", TRUE);
INSERT INTO quiz_answers VALUES(4, 1, "W roku 1949", FALSE);

INSERT INTO quiz_answers VALUES(5, 2, "BMW 3 series", FALSE);
INSERT INTO quiz_answers VALUES(6, 2, "BMW Sport M", FALSE);
INSERT INTO quiz_answers VALUES(7, 2, "BMW 5 series", FALSE);
INSERT INTO quiz_answers VALUES(8, 2, "BMW X1", FALSE);



INSERT INTO quiz_answers VALUES(9, 3, "Polski Rower Letni", FALSE);
INSERT INTO quiz_answers VALUES(10, 3, "Polska Republika Ludowa", TRUE);
INSERT INTO quiz_answers VALUES(11, 3, "Państwowy Ratownik Ludowy", FALSE);
INSERT INTO quiz_answers VALUES(12, 3, "Płacz Rozpacz Lament", FALSE);

INSERT INTO quiz_answers VALUES(13, 4, "W roku 1974", FALSE);
INSERT INTO quiz_answers VALUES(14, 4, "W roku 2002", FALSE);
INSERT INTO quiz_answers VALUES(15, 4, "W roku 1986", FALSE);
INSERT INTO quiz_answers VALUES(16, 4, "W roku 1991", TRUE);


INSERT INTO quiz_answers VALUES(17, 5, "took", TRUE);
INSERT INTO quiz_answers VALUES(18, 5, "token", FALSE);
INSERT INTO quiz_answers VALUES(19, 5, "take", TRUE);
INSERT INTO quiz_answers VALUES(20, 5, "taken", TRUE);

INSERT INTO quiz_answers VALUES(21, 6, "braek", FALSE);
INSERT INTO quiz_answers VALUES(22, 6, "broke", TRUE);
INSERT INTO quiz_answers VALUES(23, 6, "break", TRUE);
INSERT INTO quiz_answers VALUES(24, 6, "broken", TRUE);

INSERT INTO quiz_answers VALUES(25, 7, "ate", TRUE);
INSERT INTO quiz_answers VALUES(26, 7, "eight", FALSE);
INSERT INTO quiz_answers VALUES(27, 7, "eaten", TRUE);
INSERT INTO quiz_answers VALUES(28, 7, "eat", TRUE);


INSERT INTO quiz_answers VALUES(29, 8, "took", TRUE);
INSERT INTO quiz_answers VALUES(30, 8, "token", FALSE);
INSERT INTO quiz_answers VALUES(31, 8, "take", TRUE);
INSERT INTO quiz_answers VALUES(32, 8, "taken", TRUE);

INSERT INTO quiz_answers VALUES(33, 9, "braek", FALSE);
INSERT INTO quiz_answers VALUES(34, 9, "broke", TRUE);
INSERT INTO quiz_answers VALUES(35, 9, "break", TRUE);
INSERT INTO quiz_answers VALUES(36, 9, "broken", TRUE);

INSERT INTO quiz_answers VALUES(37, 10, "ate", TRUE);
INSERT INTO quiz_answers VALUES(38, 10, "eight", FALSE);
INSERT INTO quiz_answers VALUES(39, 10, "eaten", TRUE);
INSERT INTO quiz_answers VALUES(40, 10, "eat", TRUE);


INSERT INTO quiz_answers VALUES(41, 11, "because", TRUE);
