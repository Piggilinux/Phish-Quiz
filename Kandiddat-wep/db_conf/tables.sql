DROP TABLE IF EXISTS answers;
DROP TABLE IF EXISTS answers2;
DROP TABLE IF EXISTS tmp_answ;
DROP TABLE IF EXISTS subjects;
CREATE TABLE subjects(
    id VARCHAR(255) NOT NULL PRIMARY KEY,
    alignment VARCHAR(32) NOT NULL,
    test_type VARCHAR(32) NOT NULL
);


CREATE TABLE answers(
    fk_id VARCHAR(255) NOT NULL,
    q1 VARCHAR(32),
    q2 VARCHAR(32),
    q3 VARCHAR(32),
    q4 VARCHAR(32),
    q5 VARCHAR(32),
    FOREIGN KEY (fk_id) REFERENCES subjects(id)
);


CREATE TABLE tmp_answ(
    auto_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    f_id VARCHAR(255) NOT NULL,
    answ VARCHAR(32) NOT NULL,
    DateTime TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (f_id) REFERENCES subjects(id)
);


CREATE TABLE answers2(
    fk_id_p2 VARCHAR(255) NOT NULL,
    q1_p2 VARCHAR(32),
    q2_p2 VARCHAR(32),
    q3_p2 VARCHAR(32),
    FOREIGN KEY (fk_id_p2) REFERENCES subjects(id)
);

-- **********************************************************************************



DROP PROCEDURE If EXISTS insertAnswer;
DELIMITER //
CREATE PROCEDURE insertAnswer(sess VARCHAR(255), question1 VARCHAR(255), question2 VARCHAR(255), question3 VARCHAR(255), question4 VARCHAR(255), question5 VARCHAR(255))
  BEGIN

    IF sess NOT IN (SELECT answers.fk_id FROM answers)
      THEN
        INSERT INTO answers (answers.fk_id, answers.q1, answers.q2, answers.q3, answers.q4, answers.q5) VALUES (sess, question1, question2, question3, question4, question5);
      END IF;
  END // DELIMITER ;


DROP PROCEDURE If EXISTS insertAnswer2;
DELIMITER //
CREATE PROCEDURE insertAnswer2(sess VARCHAR(255), question1 VARCHAR(255), question2 VARCHAR(255), question3 VARCHAR(255))
  BEGIN

    IF sess NOT IN (SELECT answers2.fk_id_p2 FROM answers2)
      THEN
        INSERT INTO answers2 (answers2.fk_id_p2, answers2.q1_p2, answers2.q2_p2, answers2.q3_p2) VALUES (sess, question1, question2, question3);
      END IF;
  END // DELIMITER ;



DROP PROCEDURE IF EXISTS insertSubject;
DELIMITER //
CREATE PROCEDURE insertSubject(sess VARCHAR(255), field VARCHAR(255))
  BEGIN
  DECLARE testType VARCHAR(32);
  SET testType = (SELECT COUNT(subjects.alignment) FROM subjects WHERE subjects.alignment = field);
  SET testType = (SELECT MOD(testType, 2));
    IF sess NOT IN (SELECT subjects.id FROM subjects)
      THEN
        INSERT INTO subjects (subjects.id, subjects.alignment, subjects.test_type) VALUES (sess, field, testType);
      END IF;

  END // DELIMITER ;

  DROP PROCEDURE If EXISTS getTestType;
  DELIMITER //
  CREATE PROCEDURE getTestType(session VARCHAR(250))
    BEGIN
      DECLARE testType INT;
      DECLARE align VARCHAR(32);
      SET align = (SELECT subjects.alignment FROM subjects WHERE subjects.id = session);
      SELECT COUNT(subjects.alignment) AS type FROM subjects WHERE subjects.alignment = align;
    END // DELIMITER ;



-- DROP TABLE IF EXISTS answers;
-- DROP TABLE IF EXISTS tmp_answ;
-- DROP TABLE IF EXISTS subjects;
-- CREATE TABLE subjects(
--     id VARCHAR(255) NOT NULL PRIMARY KEY,
--     alignment VARCHAR(32) NOT NULL,
--     test_type VARCHAR(32) NOT NULL
-- );
--
--
-- CREATE TABLE answers(
--     fk_id VARCHAR(255) NOT NULL,
--     q1 VARCHAR(32),
--     q2 VARCHAR(32),
--     q3 VARCHAR(32),
--     FOREIGN KEY (fk_id) REFERENCES subjects(id)
-- );
--
--
-- CREATE TABLE tmp_answ(
--     auto_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
--     f_id VARCHAR(255) NOT NULL,
--     answ VARCHAR(32) NOT NULL,
--     FOREIGN KEY (f_id) REFERENCES subjects(id)
-- );
--
-- -- ************************ COPY (PART 2) *******************************************
--
-- CREATE TABLE answers2(
--     fk_id_p2 VARCHAR(255) NOT NULL,
--     q1_p2 VARCHAR(32),
--     q2_p2 VARCHAR(32),
--     q3_p2 VARCHAR(32),
--     FOREIGN KEY (fk_id_p2) REFERENCES subjects(id)
-- );
--
--
-- CREATE TABLE tmp_answ(
--     auto_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
--     f_id VARCHAR(255) NOT NULL,
--     answ VARCHAR(32) NOT NULL,
--     FOREIGN KEY (f_id) REFERENCES subjects(id)
-- );
-- -- **********************************************************************************
--
--
-- SHOW TABLES;
-- SELECT * FROM `subjects` WHERE 1;
--
--
-- DROP PROCEDURE If EXISTS insertAnswer;
-- DELIMITER //
-- CREATE PROCEDURE insertAnswer(sess VARCHAR(255), qNr VARCHAR(255), answ VARCHAR(255))
--   BEGIN
--
--     IF sess IN (SELECT answers.fk_id FROM answers)
--       THEN
--        UPDATE answers SET qNr = answ WHERE answers.fk_id = sess;
--     ELSE
--       INSERT INTO answers (fk_id, qNr) VALUES (sess, answ);
--       END IF;
--   END // DELIMITER ;
--
-- CALL insertAnswer($sess, $walker, $answer);
--
--
--
-- DROP PROCEDURE IF EXISTS insertSubject;
-- DELIMITER //
-- CREATE PROCEDURE insertSubject(sess VARCHAR(255), field VARCHAR(255))
--   BEGIN
--   DECLARE testType VARCHAR(32);
--   SET testType = (SELECT COUNT(subjects.alignment) FROM subjects WHERE subjects.alignment = field);
--   SET testType = (SELECT MOD(testType, 2));
--     IF sess NOT IN (SELECT subjects.id FROM subjects)
--       THEN
--         INSERT INTO subjects (subjects.id, subjects.alignment, subjects.test_type) VALUES (sess, field, testType);
--       END IF;
--
--   END // DELIMITER ;
--
-- CALL insertSubject($sess, $field);
--
--
--
-- DROP FUNCTION IF EXISTS getTestType;
-- DELIMITER //
-- CREATE FUNCTION getTestType (session VARCHAR(250))
-- RETURNS INT
-- DETERMINISTIC
-- BEGIN
--   DECLARE testType INT;
--   DECLARE align VARCHAR(32);
--   SET align = (SELECT subjects.alignment FROM subjects WHERE subjects.id = session);
--   SET testType = (SELECT COUNT(subjects.alignment) AS totalInAlignment FROM subjects WHERE subjects.alignment = align);
--   RETURN testType;
-- END// DELIMITER ;
-- SELECT getTestType('a8c8e32fd60e3ff7ab93092ab0404173');
--
-- DROP PROCEDURE If EXISTS getTestType;
-- DELIMITER //
-- CREATE PROCEDURE getTestType(session VARCHAR(250))
--   BEGIN
--     DECLARE testType INT;
--     DECLARE align VARCHAR(32);
--     SET align = (SELECT subjects.alignment FROM subjects WHERE subjects.id = session);
--     SELECT COUNT(subjects.alignment) AS type FROM subjects WHERE subjects.alignment = align;
--   END // DELIMITER ;
--
-- CALL getTestType('a8c8e32fd60e3ff7ab93092ab0404173');
