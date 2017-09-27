SQL example with SQLite
==============================

Setup
------------------------------

```
sqlite3 -header -column ladok.sqlite < ddl_course.sql
```



Test
------------------------------

```
sqlite3 -header -column ladok.sqlite < dml_course.sql
```



Work
------------------------------

```
sqlite3 -header -column ladok.sqlite
```



PHP from commandline
------------------------------

```
php -f select.php
php -f search.php "%web%"
```
