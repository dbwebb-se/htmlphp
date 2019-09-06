#!/usr/bin/env bash
#
# Sample configuration file to use with dbwebb gui for inspect and
# equal things.
# This file can be stored in your home directory as ~/.dbwebb/gui_config.bash
# and it will then be read each time you start the gui-application.
#

# Teacher signature used in feedback text
export DBWEBB_TEACHER_SIGNATURE="// Mikael (mos@bth.se)"



#
# Below settings have default values, depending on your OS and terminal.
# The gui-application finds these out, and you can overwrite those settings
# by defining the following variables.
#

# How to open a web browser

# windows (cygwin)
#export DBWEBB_BROWSER="/cygdrive/c/Program Files (x86)/Google/Chrome/Application/chrome.exe"
#export DBWEBB_BROWSER="/cygdrive/c/Program Files (x86)/Firefox Developer Edition/firefox.exe"

# macOs
#export DBWEBB_BROWSER="open /Applications/Firefox.app"

# linux
#export DBWEBB_BROWSER="firefox"



# How to add data to clipboard, pasteble by ctrl-v

# windows (cygwin)
#export DBWEBB_TO_CLIPBOARD="cat - > /dev/clipboard"

# macOs
#export DBWEBB_TO_CLIPBOARD="iconv -t macroman | pbcopy"

# linux
#export DBWEBB_TO_CLIPBOARD="xclip -selection c"
