DROP TABLE IF EXISTS answers;
DROP TABLE IF EXISTS subjects;
CREATE TABLE subjects(
    id VARCHAR(255) NOT NULL PRIMARY KEY,
    alignment VARCHAR(32) NOT NULL
);


CREATE TABLE answers(
    fk_id VARCHAR(255) NOT NULL,
    q1 VARCHAR(32),
    q2 VARCHAR(32),
    q3 VARCHAR(32),
    FOREIGN KEY (fk_id) REFERENCES subjects(id)
);

DROP TABLE IF EXISTS tmp_answ;
CREATE TABLE tmp_answ(
    auto_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    f_id VARCHAR(255) NOT NULL,
    answ VARCHAR(32) NOT NULL,
    FOREIGN KEY (f_id) REFERENCES subjects(id)
);


SHOW TABLES;
SELECT * FROM `subjects` WHERE 1;


DROP PROCEDURE If EXISTS insertAnswer;
DELIMITER //
CREATE PROCEDURE insertAnswer(sess VARCHAR(255), qNr VARCHAR(255), answ VARCHAR(255))
  BEGIN

    IF sess IN (SELECT answers.fk_id FROM answers)
      THEN
       UPDATE answers SET qNr = answ WHERE answers.fk_id = sess;
    ELSE
      INSERT INTO answers (fk_id, qNr) VALUES (sess, answ);
      END IF;
  END // DELIMITER ;

CALL insertAnswer($sess, $walker, $answer);



DROP PROCEDURE If EXISTS insertSubject;
DELIMITER //
CREATE PROCEDURE insertSubject(sess VARCHAR(255), field VARCHAR(255))
  BEGIN
    IF sess NOT IN (SELECT subjects.id FROM subjects)
      THEN
        INSERT INTO subjects (subjects.id, subjects.alignment) VALUES (sess, field);
      END IF;

  END // DELIMITER ;

CALL insertSubject($sess, $field);
