htmlphp kmom06
============================



Inledning
----------------------------

* Om fusk
    * https://dbwebb.se/kurser/faq/fusk-och-disciplinarende
* Om PHP 7.2 versus 7.3 array_key_first och EOD
    * https://dbwebb.se/t/8761
    * https://dbwebb.se/t/8783
* Om krav 5/6 i kmom05 multisida jetty (samt uppbyggnad av URL).
    * https://dbwebb.se/t/8779
    * Se Niklas genomgång i går



Säkerhet skydda dig
----------------------------

1. Lita aldrig på inkommande värden
2. Validera inkommande värden på serversidan
3. Skriv ut data i webbsidan med htmlentities (städa utskriften)
4. Använd alltid === vid jämförelser
5. Använd prepared statements
6. Stäng av felutskrifter i produktionsmiljö (men logga dem)



Säkerhet XSS
----------------------------

* Cross-Site Scripting
* Användaren kan spara ett JavaScript på din webbsida som körs av andra användare
* Löses med städa utskriften via htmlentites



Säkerhet Loose comparisom
----------------------------

* Använd alltid === vid jämförelser
* == Jämför värden (type juggling)
* === Jämför värde och typ

```
if (strcmp($pwd, $_POST["pwd"]) == 0) {
    // Works for 0, null, false
    // secrets
}
```



Säkerhet SQL injection
----------------------------

* Användaren kan köra SQL-frågor i din webbplats, via querysträngen eller formulär
* Löses (till stor del) med prepared statements

```
SELECT * FROM user WHERE id = ?;"
SELECT * FROM user WHERE id = " . $_GET["id"] . ";"

?id=1 OR 1
```



Säkerhet stäng av felmeddelanden
----------------------------

* Stressade system ger tydliga felmeddelanden
* https://dbwebb.se/repo/slides/img/max-connections.png



Säkerhet skydda dig (summering)
----------------------------

1. Lita aldrig på inkommande värden
2. Validera inkommande värden på serversidan
3. Skriv ut data i webbsidan med htmlentities (städa utskriften)
4. Använd alltid === vid jämförelser
5. Använd prepared statements
6. Stäng av felutskrifter i produktionsmiljö (men logga dem)
