--
-- Work with the tables course and status.
--

--
-- Show content of the tables.
--
SELECT * FROM course;
SELECT * FROM status;


--
-- Show all courses in termin 1 order by kurskod
--
SELECT
    termin,
    kurskod,
    namn
FROM course
WHERE
    termin = 1
ORDER BY kurskod
;



--
-- Show all courses containing *web* in the name, order by termin
--
SELECT
    termin,
    kurskod,
    namn
FROM course
WHERE
    namn LIKE "%web%"
ORDER BY termin
;



--
-- Calculate poang per termin
--
SELECT
    termin,
    SUM(poang)
FROM course
GROUP BY termin
ORDER BY termin
;



--
-- Find all courses being classified as amne PT
--
SELECT
    termin,
    kurskod,
    namn,
    amne
FROM course
WHERE
    amne LIKE "%PT%"
ORDER BY termin, kurskod
;



--
-- Calculate poang for courses classified as PT
--
SELECT
    termin,
    SUM(poang)
FROM course
WHERE
    amne LIKE "%PT%"
GROUP BY termin
ORDER BY termin
;



--
-- Insert values into table status
--
INSERT INTO status (kurskod, poang) VALUES
("DV1531", 2.5),
("PA1439", 5)
;

SELECT * FROM status;
