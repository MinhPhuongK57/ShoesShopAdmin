<?php
    session_destroy(); //session
    header("location:login.php");
    setcookie("email",$email,time() - (3600 * 3), "/"); //cookie
    setcookie("password",$password,time() - (3600 * 3), "/"); //cookie
?>