--
-- SQL to create sample database in SQLite.
--
-- Start SQLite using 
-- $ sqlite3 -column -header db.sqlite < file.sql
--
-- or when in sqlite3:
-- sqlite> .headers on
-- sqlite> .mode columns
--

--
-- CREATE TABLE
--
DROP TABLE IF EXISTS course;
CREATE TABLE course
(
    "code" TEXT PRIMARY KEY,
    "name" TEXT NOT NULL,
    "points" REAL DEFAULT 7.5,
    "term" INTEGER,
    "kmom" INTEGER,
    "done" DATETIME
);



--
-- INSERT INTO
--
INSERT INTO course VALUES ('DV1462', 'htmlphp', 7.5, 1, NULL, NULL);

INSERT INTO course (code, name, term) VALUES ('DV1531', 'python', 1);

INSERT INTO "course" ("code", "name", "term") VALUES 
    ('PA1436', 'design', 2),
    ('DV1532', 'javascript1', 2);
