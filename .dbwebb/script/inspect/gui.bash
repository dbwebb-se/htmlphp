#!/usr/bin/env bash
#
#

# ---------------------------- Application wide settings ------------------

VERSION="v1.5.0 (2019-10-25)"


# Get current dir 
# @TODO Make this more flexible to be run at any level and find the
#       course repo automatically.
DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

# Source the config file if it exists
DBWEBB_GUI_CONFIG_FILE="$HOME/.dbwebb/gui_config.bash"
# shellcheck source=$HOME/.dbwebb.gui_config.bash
[[ -f $DBWEBB_GUI_CONFIG_FILE ]] && source "$DBWEBB_GUI_CONFIG_FILE"

# Save INSPECT_PID to be able to kill it
DBWEBB_INSPECT_PID=

# Preconditions
hash dialog 2>/dev/null \
    || die "You need to install 'dialog'."

# Preconditions
hash tree 2>/dev/null \
    || die "You need to install 'tree'."



# Settings
# shellcheck source=./../../../.dbwebb.course
source "$DIR/../../../.dbwebb.course"
COURSE="$DBW_COURSE"
LOGFILE="log-gui-main.ansi"
LOGFILE_INSPECT="log-gui-inspect.ansi"
LOGFILE_TEXT="log-gui-text.ansi"
BACKTITLE="dbwebb/$COURSE"
TITLE="Work with kmoms"
REDOVISA_HTTP_PREFIX="http://www.student.bth.se"
REDOVISA_HTTP_POSTFIX="me/redovisa/htdocs"

# OS specific default settings
BROWSER="firefox"
TO_CLIPBOARD="xclip -selection c"
OS_TERMINAL=""

if [[ "$OSTYPE" == "linux-gnu" ]]; then   # Linux, use defaults
    OS_TERMINAL="linux"
elif [[ "$OSTYPE" == "darwin"* ]]; then   # Mac OSX
    OS_TERMINAL="macOS"
    TO_CLIPBOARD="iconv -t macroman | pbcopy"
    BROWSER="open /Applications/Firefox.app"
elif [[ "$OSTYPE" == "cygwin" ]]; then    # Cygwin
    OS_TERMINAL="cygwin"
    TO_CLIPBOARD="cat - > /dev/clipboard"
    BROWSER="/cygdrive/c/Program Files (x86)/Google/Chrome/Application/chrome.exe"
elif [[ "$OSTYPE" == "msys" ]]; then
    :
    # Lightweight shell and GNU utilities compiled for Windows (part of MinGW)
fi

# Use defaults or overwrite from configuration/environment settings
BROWSER=${DBWEBB_BROWSER:-$BROWSER}
TO_CLIPBOARD=${DBWEBB_TO_CLIPBOARD:-$TO_CLIPBOARD}
TEACHER_SIGNATURE=${DBWEBB_TEACHER_SIGNATURE:-"// XXX"}


# Useful defaults which are used within the application
dockerContainer="mysql"


# Remember last menu choice (or set defaults)
mainMenuSelected=1


# ---------------------------- General functions -------------------------
# # Include ./functions.bash
# DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
# # shellcheck source=.
# source "$DIR/../functions.bash"

#
# Press enter to continue
#
pressEnterToContinue()
{
    local void

    if [[ ! $YES ]]; then
        printf "\nPress enter to continue..."
        read void
    fi
}



#
# Read input from user supporting a default value for reponse.
#
# @arg1 string the message to display.
# @arg2 string the default value.
#
input()
{
    read -r -p "$1 [$2]: "
    echo "${REPLY:-$2}"
}



#
# Read input from user replying with yY or nN.
#
# @arg1 string the message to display.
# @arg2 string the default value, y or n.
#
yesNo()
{
    
    read -r -p "$1 (y/n) [$2]: "
    echo "${REPLY:-$2}"
}



#
# Display information message and wait for user input to continue, exit if
# user presses 'q'.
#
# @arg1 string the message to display.
#
info()
{
    echo -e "\n$1"
    read -r -p ""
    case "$REPLY" in
        q)
            exit 1
            ;;
    esac
}



#
# Fail, die and present error message.
#
# @arg1 string the message to display.
# @arg2 string exit status (default -1).
#
die()
{
    local message="$1"
    local status="${2:-1}"

    printf "$MSG_FAILED $message\n" >&2
    exit $status
}



#
# Set correct settings of the remote student files, populary called "potatoe".
#
# @arg1 string the acronym.
#
potatoe()
{
    local acronym
    local course="$COURSE"

    if [[ $2 = "false" ]]; then
        course=
    fi

    acronym=$( input "Akronym att uppdatera rättigheter för?" "$1" )
    dbwebb run "sudo /usr/local/sbin/setpre-dbwebb-kurser.bash $acronym $course"
    #dbwebb run "sudo /usr/local/sbin/setpre-dbwebb-kurser.bash $acronym"
}



#
# Create a config file that are sourced each time the application starts.
#
createConfigFile()
{
    local source="$DIR/gui_config.bash"
    local reply=

    if [[ -f $DBWEBB_GUI_CONFIG_FILE ]]; then
        reply=$( yesNo "Du har redan en konfigurationsfil, vill du skriva över den?" "n" )
        case "$reply" in
            [yY]) ;;
            *) printf "Ignoring..." && return ;;
        esac
    fi

    install -d "$( dirname $DBWEBB_GUI_CONFIG_FILE )"
    cp "$source" "$DBWEBB_GUI_CONFIG_FILE" \
        && printf "Konfigurationsfilen är nu skapad, redigera den i en texteditor.\n" \
        && ls -l "$DBWEBB_GUI_CONFIG_FILE"

    # shellcheck source=$HOME/.dbwebb.gui_config.bash
    [[ -f $DBWEBB_GUI_CONFIG_FILE ]] && source "$DBWEBB_GUI_CONFIG_FILE"
}



#
# Goto directory and check its status on .git
# @arg1 string the path to move to.
#
check_dir_for_git()
{
    pushd $1
    if [ ! -d .git ]; then
        echo "No git-repo on highest level: $1"
        ls -l
        return
    fi

    # Show details
    git log --pretty=format:"%h %ad | %s%d [%an]" --graph --date=short
    echo "$1"
    git remote -v
    git tag

    # Checkout version and set it up
    TAG=$( input "Checkout tag" "" )
    git checkout $TAG
    npm install
    popd
}



#
#
#
gui-firstpage()
{
    local message

    read -r -d "" message << EOD
README ($VERSION)
================================================

This is a graphical gui for working with inspect.
You can inspect a students kmom, you can do potatoe and you can download (overwrites me/) and inspect locally - with or without using docker.

Make sure you have a initiated and updated course repo with development utilities installed.
 dbwebb update
 dbwebb init-me # Will be overwritten on download
 make install # For local inspects

The output from inspect is written to files, keep it open in your editor (and use package language-ansi-styles to get colors):
 log-gui-main.ansi (Main output file, excluding inspect)
 log-gui-inspect.ansi (Inspect output file)

Review the admin menu for customizing and creating a configuration file where you can store customized settings.
 $DBWEBB_GUI_CONFIG_FILE

Basic feedback text is created from files in txt/kmom??.txt, add your own teacher signature through the configuration file (see Admin Menu).

/Mikael
EOD
    
    dialog \
        --backtitle "$BACKTITLE" \
        --title "$TITLE" \
        --msgbox "$message" \
        24 80 \
        3>&1 1>&2 2>&3 3>&-
}



#
#
#
gui-show-configuration()
{
    local message

    read -r -d "" message << EOD
SETTINGS
================================================

These are your current settings that are currently used.

 BROWSER="$BROWSER"
 OS_TERMINAL="$OS_TERMINAL"
 TEACHER_SIGNATURE="$TEACHER_SIGNATURE"
 TO_CLIPBOARD="$TO_CLIPBOARD"

All these are set with default values (within the script) and you can override them by setting the following environment variabels, preferably using the configuration file.

 DBWEBB_BROWSER="$DBWEBB_BROWSER"
 DBWEBB_TEACHER_SIGNATURE="$DBWEBB_TEACHER_SIGNATURE"
 DBWEBB_TO_CLIPBOARD="$DBWEBB_TO_CLIPBOARD"

These are default settings for opening the browser.
 windows (cygwin): export BROWSER="/cygdrive/c/Program Files (x86)/Google/Chrome/Application/chrome.exe"
 macOs:            export BROWSER="open /Applications/Firefox.app"
 linux:            export BROWSER="firefox"

These are the default settings for using the clipboard when the feedback text is available through ctrl-v/cmd-v.
 windows (cygwin): export TO_CLIPBOARD="cat - > /dev/clipboard"
 macOs:            export TO_CLIPBOARD="iconv -t macroman | pbcopy"
 linux:            export TO_CLIPBOARD="xclip -selection c"

/Mikael
EOD
    
    dialog \
        --backtitle "$BACKTITLE" \
        --title "$TITLE" \
        --msgbox "$message" \
        24 80 \
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
        --default-item "$mainMenuSelected" \
        --menu "Main menu" \
        24 80 \
        20 \
        "1" "Inspect kmom (download, docker)" \
        "2" "Inspect kmom (docker)" \
        "3" "Inspect kmom (download, local)" \
        "4" "Inspect kmom (local)" \
        "" "---" \
        "d" "Download student me/" \
        "w" "Open student me/redovisa in browser" \
        "p" "Potatoe student" \
        "" "---" \
        "a" "Admin menu" \
        "t" "Database menu" \
        "o" "Docker menu" \
        "r" "Readme" \
        "q" "Quit" \
        3>&1 1>&2 2>&3 3>&-
}



#
#
#
gui-admin-menu()
{
    dialog \
        --backtitle "$BACKTITLE" \
        --title "$TITLE" \
        --menu "Main » Admin menu" \
        24 80 \
        20 \
        "c" "Create a default configuration file ~/.dbwebb/gui_config.bash" \
        "s" "Show configuration settings" \
        "b" "Back" \
        3>&1 1>&2 2>&3 3>&-
}



#
#
#
gui-database-menu()
{
    dialog \
        --backtitle "$BACKTITLE" \
        --title "$TITLE" \
        --menu "Main » Database menu" \
        24 80 \
        20 \
        "u" "Create users dbwebb:password and user:pass into docker mysql" \
        "l" "Load standard kmom database dump into docker mysql" \
        "1" "Load student skolan/reset_part1.bash into docker mysql" \
        "2" "Load student skolan/reset_part2.bash into docker mysql" \
        "3" "Load student skolan/reset_part3.bash into docker mysql" \
        "4" "Load student skolan/skolan.sql into docker mysql" \
        "b" "Back" \
        3>&1 1>&2 2>&3 3>&-
}



#
#
#
gui-docker-menu()
{
    dialog \
        --backtitle "$BACKTITLE" \
        --title "$TITLE" \
        --menu "Main » Docker menu" \
        24 80 \
        20 \
        "u" "Docker up -d [$dockerContainer]" \
        "r" "Docker run [$dockerContainer] bash" \
        "s" "Docker start [$dockerContainer]" \
        "t" "Docker stop" \
        "b" "Back" \
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
        24 80 \
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
        --inputbox "Select student acronym (ctrl-u to clear)" \
        24 80 \
        "$1" \
        3>&1 1>&2 2>&3 3>&-
}



#
#
#
gui-read-docker-container()
{
    dialog \
        --backtitle "$BACKTITLE" \
        --title "$TITLE" \
        --inputbox "Select docker container" \
        24 80 \
        "$1" \
        3>&1 1>&2 2>&3 3>&-
}



#
#
#
main-admin-menu()
{
    local output

    while true; do
        output=$( gui-admin-menu )
        case $output in
            c)
                createConfigFile
                pressEnterToContinue
                ;;
            s)
                gui-show-configuration
                ;;
            b|"")
                return
                ;;
        esac
    done
}



#
# Drop and create the databases
#
# Arg 1: The file[.sql] to load
# Arg 2: Optional username
# Arg 3: Optional password
# Arg 4: Optional database
#
runSqlScript()
{
    local sql="$1"
    local user=${2:-root}
    local password=${3:-}
    local host="-hmysql"
    local database=${4:-}

    if [[ ! -z $password ]]; then
        password="-p$password"
    fi

    if [[ ! -f "$sql" ]]; then
        printf "%s: The SQL file '%s' does not exists.\n" "${FUNCNAME[0]}" "$sql"
        exit 1
    fi

    printf "%s\n" "$sql"
    cat "$sql" \
        | make docker-run what="mysql --table $host -u$user $password $database"
}



#
#
#
main-database-menu()
{
    local output
    local path

    while true; do
        output=$( gui-database-menu )
        case $output in
            u)
                runSqlScript "example/sql/create-user-dbwebb.sql"
                runSqlScript "example/sql/create-user-user.sql" "dbwebb"
                runSqlScript "example/sql/check-users.sql" "dbwebb"
                pressEnterToContinue
                ;;
            l)
                kmom=$( gui-read-kmom $kmom )
                [[ -z $kmom ]] && continue

                for file in $DIR/kmom.d/$kmom/dump_*.sql; do
                    runSqlScript "$file" "dbwebb"
                done
                pressEnterToContinue
                ;;
            1)
                runSqlScript "example/sql/inspect/setup_skolan.sql" "dbwebb"
                make docker-run what="bash me/skolan/reset_part1.bash"
                pressEnterToContinue
                ;;
            2)
                runSqlScript "example/sql/inspect/setup_skolan.sql" "dbwebb"
                make docker-run what="bash me/skolan/reset_part2.bash"
                pressEnterToContinue
                ;;
            3)
                runSqlScript "example/sql/inspect/setup_skolan.sql" "dbwebb"
                make docker-run what="bash me/skolan/reset_part3.bash"
                pressEnterToContinue
                ;;
            4)
                path="me/skolan/skolan.sql"
                if [[ -f "$path" ]]; then
                    runSqlScript "example/sql/inspect/setup_skolan.sql" "dbwebb"
                    runSqlScript "$path" "dbwebb" "" "skolan"
                else
                    printf "The file '%s' does not exists.\n" "$path"
                fi
                pressEnterToContinue
                ;;
            b|"")
                return
                ;;
        esac
    done
}



#
#
#
main-docker-menu()
{
    local output

    while true; do
        output=$( gui-docker-menu )
        case $output in
            u)
                dockerContainer=$( gui-read-docker-container "$dockerContainer" )
                make docker-up container="$dockerContainer"
                pressEnterToContinue
                ;;
            r)
                dockerContainer=$( gui-read-docker-container "$dockerContainer" )
                make docker-run container="$dockerContainer" what="bash"
                pressEnterToContinue
                ;;
            s)
                dockerContainer=$( gui-read-docker-container "$dockerContainer" )
                make docker-start container="$dockerContainer"
                pressEnterToContinue
                ;;
            t)
                make docker-stop
                pressEnterToContinue
                ;;
            b|"")
                return
                ;;
        esac
    done
}



#
# Write a header with descriptive text.
#
header()
{
    printf "\n\n\033[0;30;42m>>> ======= %-25s =======\033[0m\n\n" "$1"

    if [[ $2 ]]; then
        printf "%s\n" "$2"
    fi
}



#
# Echo feedback text  to log and add to clipboard
#
initLogfile()
{
    local acronym="$1"
    local what="$2"

    header "GUI Inspect" | tee "$LOGFILE"

    printf "%s\n%s %s %s\n%s\nInspect GUI %s\n" "$( date )" "$COURSE" "$kmom" "$acronym" "$what" "$VERSION" | tee -a "$LOGFILE"
}



#
# Echo feedback text to log and add to clipboard
#
feedback()
{
    local kmom="$1"
    local output

    header "Feedback" | tee "$LOGFILE_TEXT"

    output=$( eval echo "\"$( cat "$DIR/text/$kmom.txt" )"\" )
    #output=$(< "$DIR/text/$kmom.txt" )
    printf "\n%s\n\n" "$output" | tee -a "$LOGFILE_TEXT"
    printf "%s" "$output" | eval $TO_CLIPBOARD

    if [[ -f "$DIR/text/${kmom}_extra.txt" ]]; then
        #output=$( eval echo "\"$( cat "$DIR/text/${kmom}_extra.txt" )"\" )
        output=$(< "$DIR/text/${kmom}_extra.txt" )
        printf "\n\033[32;01m---> Vanliga feedbacksvar\033[0m\n\n%s\n\n" "$output" | tee -a "$LOGFILE_TEXT"
    fi
}



#
# Download student files and do potatoe if needed
#
downloadPotato()
{
    local acronym="$1"

    header "Download (and potato)" "Doing a silent download, potatoe if needed." | tee -a "$LOGFILE"

    if ! dbwebb --force --yes download me $acronym > /dev/null; then
        printf "\n\033[32;01m---> Doing a Potato\033[0m\n\033[0;30;43mACTION NEEDED...\033[0m\n" | tee -a "$LOGFILE"
        potatoe $acronym
        if ! dbwebb --force --yes --silent download me $acronym; then
            printf "\n\033[0;30;41mFAILED!\033[0m Doing a full potatoe, as a last resort...\n" | tee -a "$LOGFILE"
            potatoe $acronym "false"
            if ! dbwebb --force --yes --silent download me $acronym; then
                printf "\n\033[0;30;41mFAILED!\033[0m Doing a full potatoe, as a last resort...\n" | tee -a "$LOGFILE"
                exit 1
            fi
        fi
    fi
}



#
# Open redovisa in browser.
#
openRedovisaInBrowser()
{
    local acronym="$1"

    #printf "$REDOVISA_HTTP_PREFIX/~$acronym/dbwebb-kurser/$COURSE/$REDOVISA_HTTP_POSTFIX\n" 2>&1 | tee -a "$LOGFILE"

    #eval "$BROWSER" "$REDOVISA_HTTP_PREFIX/~$acronym/dbwebb-kurser/$COURSE/$REDOVISA_HTTP_POSTFIX" &
}



#
# Make a local inspect.
#
makeInspectLocal()
{
    local kmom="$1"

    #header "dbwebb inspect" "Do dbwebb inspect in the background and write output to logfile '$LOGFILE_INSPECT'." | tee -a "$LOGFILE"
    header "dbwebb inspect" | tee -a "$LOGFILE"

    #(make inspect options="--yes" what="$kmom" 2>&1 > "$LOGFILE_INSPECT" &)
    make inspect options="--yes" what="$kmom" 2>&1 | tee -a "$LOGFILE"
}



#
# Make a inspect using docker.
#
makeInspectDocker()
{
    local kmom="$1"

    header "dbwebb inspect" "Do dbwebb inspect in the background and write output to logfile '$LOGFILE_INSPECT'." | tee -a "$LOGFILE"
    #header "dbwebb inspect" | tee -a "$LOGFILE"

    if [[ ! -z $DBWEBB_INSPECT_PID ]]; then
        echo "Killing $DBWEBB_INSPECT_PID" | tee "$LOGFILE_INSPECT"
        kill -9 $DBWEBB_INSPECT_PID
        DBWEBB_INSPECT_PID=
    fi

    if [ $OS_TERMINAL == "linux" ]; then
        setsid make docker-run what="make inspect what=$kmom options='--yes'" > "$LOGFILE_INSPECT" 2>&1 &
        DBWEBB_INSPECT_PID="$!"
    else
        make docker-run what="make inspect what=$kmom options='--yes'" > "$LOGFILE_INSPECT" 2>&1 &
        DBWEBB_INSPECT_PID="$!"
    fi

    #make docker-run what="make inspect what=$kmom options='--yes'" 2>&1  | tee -a "$LOGFILE"
}



#
# Run extra testscripts using docker.
#
makeDockerRunExtras()
{
    local kmom="$1"
    local acronym="$2"

    header "Docker Run Extra" | tee -a "$LOGFILE"

    echo 'make docker-run-server container="server" what="bash .dbwebb/script/inspect/kmom.d/run.bash $kmom $acronym"' | tee -a "$LOGFILE"
    make docker-run-server container="server" what="bash .dbwebb/script/inspect/kmom.d/run.bash $kmom $acronym" 2>&1 | tee -a "$LOGFILE"
}



#
# Run extra testscripts that are executed before inspect.
#
runPreExtras()
{
    local kmom="$1"
    local path=".dbwebb/script/inspect/kmom.d/$kmom/pre.bash"

    header "Docker Run Extra (pre)" | tee -a "$LOGFILE"

    if [[ -f "$path" ]]; then
        # shellcheck source=.dbwebb/script/inspect/kmom.d/$kmom/pre.bash
        source "$path" 2>&1 | tee -a "$LOGFILE"
    fi
}



#
# Run extra testscripts that are executed after inspect.
#
runPostExtras()
{
    local kmom="$1"
    local path=".dbwebb/script/inspect/kmom.d/$kmom/post.bash"

    header "Docker Run Extra (post)" | tee -a "$LOGFILE"

    if [[ -f "$path" ]]; then
        # shellcheck source=.dbwebb/script/inspect/kmom.d/$kmom/post.bash
        source "$path" 2>&1 | tee -a "$LOGFILE"
    fi
}



#
# Main function
#
main()
{
    local acronym=

    gui-firstpage
    while true; do
        mainMenuSelected=$( gui-main-menu )
        case $mainMenuSelected in
            a)
                main-admin-menu
                ;;
            t)
                main-database-menu
                ;;
            o)
                main-docker-menu
                ;;
            4)
                acronym=$( gui-read-acronym $acronym )
                [[ -z $acronym ]] && continue

                kmom=$( gui-read-kmom $kmom )
                [[ -z $kmom ]] && continue

                initLogfile "$acronym" "local"
                openRedovisaInBrowser "$acronym"
                feedback "$kmom"
                runPreExtras "$kmom"
                makeInspectLocal "$kmom"
                runPostExtras "$kmom"
                pressEnterToContinue
                ;;
            3)
                acronym=$( gui-read-acronym $acronym )
                [[ -z $acronym ]] && continue

                kmom=$( gui-read-kmom $kmom )
                [[ -z $kmom ]] && continue

                initLogfile "$acronym" "download, local"
                openRedovisaInBrowser "$acronym"
                feedback "$kmom"
                if ! downloadPotato "$acronym"; then
                    pressEnterToContinue;
                    continue
                fi
                runPreExtras "$kmom"
                makeInspectLocal "$kmom"
                runPostExtras "$kmom"
                pressEnterToContinue
                ;;
            2)
                acronym=$( gui-read-acronym $acronym )
                [[ -z $acronym ]] && continue

                kmom=$( gui-read-kmom $kmom )
                [[ -z $kmom ]] && continue

                initLogfile "$acronym" "docker"
                openRedovisaInBrowser "$acronym"
                feedback "$kmom"
                runPreExtras "$kmom"
                makeInspectDocker "$kmom"
                makeDockerRunExtras "$kmom" "$acronym"
                runPostExtras "$kmom"
                pressEnterToContinue
                ;;
            1)
                acronym=$( gui-read-acronym $acronym )
                [[ -z $acronym ]] && continue

                kmom=$( gui-read-kmom $kmom )
                [[ -z $kmom ]] && continue

                initLogfile "$acronym" "download, docker"
                openRedovisaInBrowser "$acronym"
                feedback "$kmom"
                if ! downloadPotato "$acronym"; then
                    pressEnterToContinue;
                    continue
                fi
                runPreExtras "$kmom"
                makeInspectDocker "$kmom"
                makeDockerRunExtras "$kmom" "$acronym"
                runPostExtras "$kmom"
                pressEnterToContinue
                ;;
            d)
                acronym=$( gui-read-acronym $acronym )
                [[ -z $acronym ]] && continue

                dbwebb --force --yes download me "$acronym"
                pressEnterToContinue
                ;;
            w)
                acronym=$( gui-read-acronym $acronym )
                [[ -z $acronym ]] && continue

                openRedovisaInBrowser "$acronym"
                pressEnterToContinue
                ;;
            p)
                potatoe $acronym
                pressEnterToContinue
                ;;
            r)
                gui-firstpage
                ;;
            q)
                exit 0
                ;;
        esac
    done
}
main
