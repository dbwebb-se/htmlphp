Kmom10 noteringar
========================



Läsperiod 2 kurser
------------------------

Startar nov 5.

* design (program + kp webprog)
* javascript1 (program + kp webutv)

Kort koll på lektionsplan & studieplan samt julen.



Vårterminens kurser
------------------------

lp3

* oopython
* databas

lp4

* webapp
* oophp



Redovisning av projekten
------------------------

Kolla lektionsplanen för redovisningstid.

* Campus redovisning sal
* Distans redovisning hangout/video (boka https://goo.gl/QL5UWz)
* Kurspaket redovisning video

Bedömning och betygsättning.

* Om poängberäkningen.



Om projekten
------------------------

https://dbwebb.se/repo/htmlphp/example/

Varför BMO?
Varför NVM?

Skillnader/likheter i grundmaterialet?

* Vanliga frågor, forum FAQ: https://dbwebb.se/forum/viewtopic.php?f=4&t=1047
* Bilder/bildkvalitet
* Databasens tabellstruktur
* Använda andra bilder?



Att uppdatera databasen
------------------------

--
-- Move all nvm objects to own table
--
DROP TABLE IF EXISTS object;
CREATE TABLE object AS SELECT * FROM article WHERE 0;

INSERT INTO object SELECT * FROM article WHERE substr(title, 0, 2) = '0';
INSERT INTO object SELECT * FROM article WHERE substr(title, 0, 2) = '1';
DELETE FROM article WHERE substr(title, 0, 2) = '0';
DELETE FROM article WHERE substr(title, 0, 2) = '1';
