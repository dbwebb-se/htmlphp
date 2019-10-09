#!/usr/bin/env bash

awk -v RS='\n\n\n\n' '{print > (NR + 100 ".txt")}' README.md

for slide in ???.txt; do
    clear
    printf "\n"
    sed -i -e 's/^/   /' "$slide"
    sed -i -e 's/```//' "$slide"
    sed -i -e 's/\\\\/\\/g' "$slide"
    cat "$slide"
    #printf "\n\n\n%s" "$slide"
    printf "\n"
    read -r _
done
