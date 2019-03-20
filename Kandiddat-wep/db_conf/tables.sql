DROP TABLE IF EXISTS subjects
CREATE TABLE subjects(
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    alignment VARCHAR(32) NOT NULL
);

DROP TABLE IF EXISTS answers;
CREATE TABLE answers(
    fk_id INT(11) NOT NULL,
    q1 SMALLINT,
    q2 SMALLINT,
    q3 SMALLINT,
    FOREIGN KEY (fk_id) REFERENCES subjects(id)
);


SHOW TABLES;
SELECT * FROM `subjects` WHERE 1;
