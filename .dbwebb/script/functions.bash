#!/usr/bin/env bash

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
