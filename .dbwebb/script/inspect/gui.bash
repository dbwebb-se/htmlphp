#!/usr/bin/env bash

# Include ./functions.bash
DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
source "$DIR/../functions.bash"



# Preconditions
hash dialog 2>/dev/null \
    || die "You need to install 'dialog'."



# Settings
source "$DIR/../../../.dbwebb.course"
COURSE="$DBW_COURSE"
BACKTITLE="dbwebb/$COURSE"
TITLE="Work with kmoms"



#
#
#
gui-firstpage()
{
    local message

    read -r -d "" message << EOD
This is a graphical gui for working with inspect.
You can inspect a students kmom, you can do potatoe and you can download and inspect locally - with or without using docker.

You need to start and stop docker before using inspect within a docker container.

EOD
    
    dialog \
        --backtitle "$BACKTITLE" \
        --title "$TITLE" \
        --msgbox "$message" \
        20 80 \
        3>&1 1>&2 2>&3 3>&-
}



#
#
#
gui-main-menu()
{
    dialog \
        --backtitle "$BACKTITLE" \
        --title "$TITLE" \
        --menu "Main menu" \
        20 80 \
        20 \
        "i" "Inspect kmom" \
        "d" "Inspect kmom (download)" \
        "o" "Inspect kmom (download, docker)" \
        "u" "Docker up -d" \
        "s" "Docker stop" \
        "p" "Potatoe student" \
        "r" "Readme" \
        "q" "Quit" \
        3>&1 1>&2 2>&3 3>&-
}




#
#
#
gui-read-kmom()
{
    dialog \
        --backtitle "$BACKTITLE" \
        --title "$TITLE" \
        --default-item "$kmom" \
        --menu "Select kmom" \
        20 80 \
        20 \
        "kmom01" "kmom01" \
        "kmom02" "kmom02" \
        "kmom03" "kmom03" \
        "kmom04" "kmom04" \
        "kmom05" "kmom05" \
        "kmom06" "kmom06" \
        "kmom10" "kmom10" \
        3>&1 1>&2 2>&3 3>&-
}



#
#
#
gui-read-acronym()
{
    dialog \
        --backtitle "$BACKTITLE" \
        --title "$TITLE" \
        --inputbox "Select student acronym" \
        20 80 \
        "$1" \
        3>&1 1>&2 2>&3 3>&-
}



#
# Main function
#
main()
{
    local output
    local acronym=

    gui-firstpage
    while true; do
        output=$( gui-main-menu )
        case $output in
            i)
                acronym=$( gui-read-acronym $acronym )
                kmom=$( gui-read-kmom $kmom )
                [[ acronym && kmom ]] \
                    && unbuffer dbwebb --yes inspect $COURSE $kmom  $acronym | tee inspect.output
                pressEnterToContinue
                ;;
            d)
                acronym=$( gui-read-acronym $acronym )
                kmom=$( gui-read-kmom $kmom )
                [[ acronym && kmom ]] \
                    && dbwebb --force --yes download $kmom  $acronym \
                    && make inspect options="--yes" what="$kmom" | tee inspect.output
                pressEnterToContinue
                ;;
            o)
                acronym=$( gui-read-acronym $acronym )
                kmom=$( gui-read-kmom $kmom )
                [[ acronym && kmom ]] \
                    && dbwebb --force --yes download $kmom  $acronym \
                    && make docker-run container="web" what="make inspect what=$kmom options='--yes'" | tee inspect.output
                pressEnterToContinue
                ;;
            u)
                make docker-up container="web"
                pressEnterToContinue
                ;;
            s)
                make docker-stop
                pressEnterToContinue
                ;;
            p)
                potatoe $acronym
                pressEnterToContinue
                ;;
            r)
                gui-firstpage
                ;;
            # r)
            #     acronym=$( gui-read-acronym $acronym )
            #     $DIR/run_and_verify_exam.bash $acronym && acronym=
            #     pressEnterToContinue
            #     ;;
            q)
                exit 0
                ;;
        esac
    done
}
main
