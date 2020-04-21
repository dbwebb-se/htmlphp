--
-- Setup a user, create a database and grant access for the user
-- to the database.
--

-- Create databases if they do not exists
CREATE DATABASE IF NOT EXISTS htmlphp;
CREATE DATABASE IF NOT EXISTS dbwebb;

-- Create the users
CREATE USER IF NOT EXISTS 'user'@'%'
    IDENTIFIED
    -- WITH mysql_native_password
    BY 'pass'
;

CREATE USER IF NOT EXISTS 'dbwebb'@'%'
    IDENTIFIED
    -- WITH mysql_native_password
    BY 'pass'
;

-- Grant the user all privilegies on the database.
GRANT ALL PRIVILEGES
    ON *.*
    TO 'user'@'%'
;

GRANT ALL PRIVILEGES
    ON *.*
    TO 'dbwebb'@'%'
;
