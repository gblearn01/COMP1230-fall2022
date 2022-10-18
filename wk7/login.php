<?php
session_start(); // must be the first line to use the PHP session.
define('USER_NAME','admin');    // temp username and password usually the info comes from databse.
define('PASSWORD','@123abc$');

$username = $_POST['uname'] ?? '';  // form submitted with post meethod containg the following parameters.
$passwrod = $_POST['pass'] ?? '';   // uname , password and remember_me
$remember = $_POST['remember_me'] ?? '';


if($remember) // if remember_me check box was seleced create/update the cookie
    setcookie('remember_me',1,strtotime('+10 days'));
else  // else back date the cookie to expire it.
    setcookie('remember_me',1,strtotime('-1 days'));

    /// $is_valid_user is a flag to check if username and password is correct.
$is_valid_user = ($username == USER_NAME && $passwrod == PASSWORD);

if(!$is_valid_user) // redirect user to login page if either username or pass is wrong.
{
  header("Location: f1.php?err=some message"); // redirect and send a get message 
  exit;                                        //(you may use session to store the error message as well.)
}
// if username and password is correct creat/set the session and redirect the user to dashboard (next page)
$_SESSION['user_logged_in'] = true;
header('Location: f2.php');

