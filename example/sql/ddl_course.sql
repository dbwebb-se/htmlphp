--
-- Create a table for course and status and insert values.
--
DROP TABLE IF EXISTS course;
CREATE TABLE course (
    kurskod	TEXT,
    termin INTEGER,
    namn TEXT,
    poang REAL,
    amne TEXT,
    klass TEXT,
    smeknamn TEXT,
    oblig TEXT
);

DROP TABLE IF EXISTS status;
CREATE TABLE status (
    kurskod	TEXT,
    poang REAL,
    kommentar TEXT
);

INSERT INTO course
VALUES
("DV1531", 1, "Programmering och problemlösning i Python", 7.5, "DV/PT", "G1N", "python", "obl"),
("PA1439", 1, "Webbteknologier", 7.5, "DV/PT", "G1N", "htmlphp", "obl"),
("DV1561", 1, "Programmering med JavaScript", 7.5, "DV/PT", "G1F", "javascript1", "obl"),
("PA1436", 1, "Teknisk Webbdesign och Användbarhet", 7.5, "DV/PT", "G1F", "design", "obl"),
("DV1547", 2, "Programmera webbtjänster på Linux", 7.5, "DV/PT", "G1F", "linux", "obl"),
("PA1437", 2, "Objektorienterad design och programmering med Python", 7.5, "DV/PT", "G1F", "oopython", "obl"),
("DV1546", 2, "Webbapplikationer för mobila enheter", 7.5, "DV/PT", "G1F", "webapp", "obl"),
("PA1440", 2, "Objektorienterade Webbteknologier", 7.5, "DV/PT", "G1F", "oophp", "obl"),
("PA1414", 3, "Individuellt Programvaruprojekt", 7.5, "PT", "G1F", "indproj", null),
("PA1441", 3, "Webbaserade ramverk 1", 7.5, "DV/PT", "G1F", "ramverk1", "obl"),
("PA1442", 3, "Webbaserade ramverk 2", 7.5, "DV/PT", "G1F", "ramverk2", "obl"),
("MA1477", 3, "Matematisk modellering", 7.5, "MA", "G1F", "matmod", null),
("ET1447", 4, "Data- och Telekommunikation", 7.5, "ET/DV/PT", "G1F", "telecom", null),
("PA1417", 4, "Grundläggande systemverifiering", 7.5, "PT", "G1F", "sysver", null),
("PA1438", 4, "Examensarbete i programvaruteknik för högskoleexamen i Webbprogrammering", 15, "PT", "G1E", "exjobb", null);

SELECT * FROM course;
SELECT * FROM status;
