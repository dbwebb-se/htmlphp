Föreläsning om SQLite
=========================

> Small. Fast. Reliable.
> Choose any three.



Öppna terminalen med sqlite3
------------------------

Vi behöver något att leka med så vi öppnar terminalen.



Om SQLite och SQL
------------------------

Gå till manualsidan: https://www.sqlite.org

Bra att veta:

* När skall man använda SQLite?
* FAQen, bra om man redan kan en annan databas.



Om attityd som open source utvecklare
------------------------

https://www.sqlite.org/about.html (se två sista styckena om attityd)



How to become a Hacker
------------------------

Mer om attityd.
http://www.catb.org/esr/faqs/hacker-howto.html



Om SQL med SQLite
------------------------

Ok, åter till ämnet.
Leta reda på SQL dokumentationen på sqlites hemsida.
https://www.sqlite.org/lang.html

Titta översiktligt på de vanliga SQL-kommandona.



Testa SQL
------------------------

Jobba igenom en databas "course" med SQL.

Spara SQL-kommandon i fil med kommentarer.

Separera SQL DDL, insert och DML (tips).

CREATE, DROP
INSERT, UPDATE, DELETE
SELECT



Kör SQL direkt vid terminalen
------------------------

$ sqlite3 -column -header db.sqlite "SELECT * FROM course;"
$ sqlite3 -column -header db.sqlite < fil.sql



PAUS
------------------------
