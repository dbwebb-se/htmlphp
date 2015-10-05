-- $ sqlite3 ladok.sqlite
-- sqlite> .read statements.sql


--
-- Skapa tabell Lärare
--
DROP TABLE Larare;

CREATE TABLE Larare
(
  akronymLarare CHAR(3) PRIMARY KEY,
  avdelningLarare CHAR(3),
  namnLarare CHAR(20),
  lonLarare INT,
  foddLarare DATETIME
);

--
-- Lägg till rader i tabellen Lärare
--
INSERT INTO Larare VALUES ('MOS', 'APS', 'Mikael',   15000, '1968-03-07');
INSERT INTO Larare VALUES ('MOL', 'AIS', 'Mats-Ola', 15000, '1978-12-07');
INSERT INTO Larare VALUES ('BBE', 'APS', 'Betty',    15000, '1968-07-07');
INSERT INTO Larare VALUES ('AJA', 'APS', 'Andreas',  15000, '1988-08-07');
INSERT INTO Larare VALUES ('CJH', 'APS', 'Conny',    15000, '1943-01-07');
INSERT INTO Larare VALUES ('CSA', 'APS', 'Charlie',  15000, '1969-04-07');
INSERT INTO Larare VALUES ('BHR', 'AIS', 'Birgitta', 15000, '1964-02-07');
INSERT INTO Larare VALUES ('MAP', 'APS', 'Marie',    15000, '1972-06-07');
INSERT INTO Larare VALUES ('LRA', 'APS', 'Linda',    15000, '1975-03-07');
INSERT INTO Larare VALUES ('ACA', 'APS', 'Anders',   15000, '1967-09-07');


--
-- Radera rader från en tabell
--
-- DELETE FROM Larare WHERE namnLarare = 'Mikael';



-- Ändra befintlig tabell
-- ALTER TABLE Larare ADD COLUMN kompetensLarare INT;



--
-- Uppdatera ett värde
--
-- UPDATE Larare SET namnLarare = 'Charles' WHERE akronymLarare = 'CSA';




--    Visa alla rader i tabellen där avdelningLarare = ‘AIS’.
--    Visa de rader som har en akronym som börjar med bokstaven ‘M’ (ledtråd LIKE).
--    Visa de rader vars lärares namn innehåller bokstaven ‘o’.
--    Visa de rader där lärarna tjänar 20 000 eller mer.
--    Visa de rader där lärarens kompetens är större än 5 och lönen är 20 000 eller större.
--    Visa rader som innehåller lärarna MOS, MOL, BBE (ledtråd IN).

-- order by
-- alias



-- 
-- group by
-- 
-- Hur många lärare jobbar på de olika avdelningarna?
-- Hur mycket betalar respektive avdelning ut i lön varje månad?
-- Hur mycket är medellönen för de olika avdelningar



-- sqlite> .read ddl.sql

DROP TABLE Kurs;

CREATE TABLE Kurs (
    kodKurs 	CHAR(6) PRIMARY KEY NOT NULL,
    namnKurs 	CHAR(40),
    poangKurs 	FLOAT
);

INSERT INTO Kurs VALUES
    ('DV1462', 'htmlphp', 7.5),
    ('DV1485', 'oophp', 7.5),
    ('DV1486', 'phpmvc', 7.5);



--
-- Local settings for sqlite
--
.header on
.mode column
.schema
