<?php
    session_destroy(); //session
    header("location:login.php");
    setcookie("email",$email,time() - (86400 * 3), "/"); //cookie
    setcookie("password",$password,time() - (86400 * 3), "/"); //cookie
?>