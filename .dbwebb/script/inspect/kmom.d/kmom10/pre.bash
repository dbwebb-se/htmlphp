#!/usr/bin/env bash

printf ">>> -------------- Pre inspect -------------------------\n"

# Open me/kmom10/proj
printf "$REDOVISA_HTTP_PREFIX/~$acronym/dbwebb-kurser/$COURSE/me/kmom10/proj/htdocs\n" 2>&1

eval "$BROWSER" "$REDOVISA_HTTP_PREFIX/~$acronym/dbwebb-kurser/$COURSE/me/kmom10/proj/htdocs" &
