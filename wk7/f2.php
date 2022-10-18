<?php
session_start(); //must be the first line to use the PHP session.
if(!$_SESSION['user_logged_in']){ // check if session doesn't contain the user_logged_in key or its value is false.
    header("Location: f1.php?err=some message");
    exit;
}


//unset($_SESSION['user_logged_in']); // delete session. 

?>

<h1>Welcome!</h1>
