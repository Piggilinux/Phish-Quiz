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


SHOW TABLES;
SELECT * FROM `subjects` WHERE 1;
