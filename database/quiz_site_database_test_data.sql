-- users test data

INSERT INTO users VALUES(1, "administrator@quiz-site.pl", "administrator#pass", 0, 0, TRUE, TRUE);
INSERT INTO users VALUES(11, "pawel@interia.pl", "pawel#pass", 2147, 541, TRUE, TRUE);
INSERT INTO users VALUES(12, "aldona@gmail.com", "aldona#pass", 1300, 400, FALSE, TRUE);
INSERT INTO users VALUES(13, "krzysztof@wp.pl", "krzysztof#pass", 1250, 388, FALSE, FALSE);
INSERT INTO users VALUES(14, "zbigniew@yahoo.com", "zbigniew#pass", 2000, 600, TRUE, FALSE);


-- quizes test data

INSERT INTO quizes VALUES(1, 1, "Test wiedzy o samochodach sportowych.", "Test sprawdza podstawowa wiedzę o samochodach sportowych produkowanych na całym świecie.");
INSERT INTO quizes VALUES(2, 1, "Sprawdzian wiadomości o historii najnowszej.", "Czy wiesz co to był PRL i dlaczego upadł związek radziecki i skąd się wzieła syrenka na polskich drogach?");
INSERT INTO quizes VALUES(3, 2, "Quiz about English irregular verbs.", "Are you know all irregular verbs forms? Test yourself.");


-- quiz questions test data

INSERT INTO quiz_questions VALUES(1, 1, "W którym roku powstał pierwszy seryjny model Ferrari?");
INSERT INTO quiz_questions VALUES(2, 1, "Jaki jest najpopularniejszy sportowy model SUV BMW?");

INSERT INTO quiz_questions VALUES(3, 2, "Jakie jest rozwinięcie skrótu PRL?");
INSERT INTO quiz_questions VALUES(4, 2, "W którym roku upadł związek radziecki?");

INSERT INTO quiz_questions VALUES(5, 3, "Which irregular forms of take verb are correct?");
INSERT INTO quiz_questions VALUES(6, 3, "Which irregular forms of break verb are correct?");
INSERT INTO quiz_questions VALUES(7, 3, "Which irregular forms of eat verb are correct?");


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
