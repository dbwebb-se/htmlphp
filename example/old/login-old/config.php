<?php
// Start the session
$name = substr(preg_replace('/[^a-z\d]/i', '', __DIR__), -30);
session_name($name);
session_start();



// Create an array of the valid users
$users = [
    'doe' => [
        'name'=> "John/Jane Doe",
        'password' => password_hash("doe", PASSWORD_DEFAULT)
    ],
    'admin' => [
        'name'=> "Allmight Administrator",
        'password' => password_hash("admin", PASSWORD_DEFAULT)
    ],
];



/**
 * Get incoming variable from $_POST or set default value.
 *
 * @param $key     use this as key to $_POST.
 * @param $default use this as default it $key is not set in $_POST.
 *
 * @return mixed as either value for $key or $default.
 */
function getPostValueFor($key, $default)
{
    return isset($_POST[$key])
        ? $_POST[$key]
        : $default;
}



/**
 * Check if the user can login with supplied credentials.
 *
 * @param $user     the supplied acronym of the user.
 * @param $password the supplied pasword of the user
 *
 * @return boolean true if user and password matches, else false.
 */
function checkUserAndPassword($user, $password)
{
    global $users;

    $passwordHash = isset($users[$user])
        ? $users[$user]['password']
        : false;
    
    $res = password_verify($password, $passwordHash);
    return $res;
}



/**
 * Login user and set session if user and password matches.
 *
 * @param $user     the supplied acronym of the user.
 * @param $password the supplied pasword of the user
 *
 * @return boolean true if user and password matches, else false.
 */
function loginUser($user, $password)
{
    $res = checkuserAndPassword($user, $password);

    if ($res === true) {
        $_SESSION['user'] = $user;
    }
    
    return $res;
}



/**
 * Get details of the logged in user, or false if user is not logged in.
 *
 * @return []|boolean array with details or false if user is not logged in.
 */
function getLoggedInUser()
{
    global $users;
    
    $user = isset($_SESSION['user'])
        ? $_SESSION['user']
        : false;
    
    if ($user === false) {
        return false;
    }
    
    $res['user'] = $user;
    $res['name'] = $users[$user]['name'];
    $res['password'] = $users[$user]['password'];
    
    return $res;
}



/**
 * Logout user and remove details from the session.
 *
 * @return void.
 */
function logoutUser()
{
    unset($_SESSION['user']);
}
