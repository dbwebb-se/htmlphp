#!/usr/bin/env bash

printf ">>> -------------- Pre inspect -------------------------\n"

# # Open localhost:1337 in browser
# printf "Open localhost:1337/eshop/index in browser\n"
# eval "$BROWSER" "http://127.0.0.1:1337/eshop/index" &

# # Open me/kmom01/redovisa
# printf "$REDOVISA_HTTP_PREFIX/~$acronym/dbwebb-kurser/$COURSE/me/kmom01/guess\n" 2>&1
# 
# eval "$BROWSER" "$REDOVISA_HTTP_PREFIX/~$acronym/dbwebb-kurser/$COURSE/me/kmom01/guess" &

# Open github
url=$( cat me/redovisa/github.txt )
printf "$url/commits/master\n" 2>&1

eval "$BROWSER" "$url/commits/master" &

echo
