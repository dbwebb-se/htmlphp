-- $ sqlite3 ladok.sqlite


DROP TABLE Student;

CREATE TABLE Student ( 
    id INTEGER PRIMARY KEY,
    name TEXT,
    lastName TEXT,
    birth DATE
);

-- INSERT INTO Student VALUES ("Mikael", "Roos", "1968-03-07");
 
INSERT INTO Student (name, lastName, birth) 
    VALUES 
        ("Mikael", "Roos", "1968-03-07"),
        ("Mats", "Moped", "1971-04-23"),
        ("Mumin", "Trollet", "1974-09-18");

.header on
.mode column
.schema

SELECT * FROM Student;


-- ALTER TABLE

-- sqlite> .read ddl.sql

-- DELETE FROM Student;

-- sqlite> delete from Student where name = "Mats" AND lastName = "Roos"; LIMIT 1;

-- sqlite> SELECT * from Student where name LIKE "%a%";

-- sqlite> SELECT * from Student order by name DESC;

-- sqlite> SELECT name, lastName from Student;

-- sqlite> UPDATE Student SET lastName = "Andersson";

-- sqlite> UPDATE Student SET lastName = "Andersson" WHERE id = 2;
