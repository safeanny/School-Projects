<?php
    /* Written by: Sean Feanny
         ID: 052-980-067
    */
    session_start();
    if($_SESSION[valid_login] == true){
        include_once('safeanny_a3_library.php');
        // clear $_SESSION stored variables, expire the cookie and close the session
        $_SESSION = array();
        setcookie("PHPSESSID","", time() - 9600, "/");
        session_destroy();
        header('Location: safeanny_a3_login');
    }
    else{
        header('Location: safeanny_a3_login');
    }
?>