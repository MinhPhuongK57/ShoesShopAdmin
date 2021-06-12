<?php
    ob_start();
    session_start();
    if(!isset($_SESSION['login']))
    {
        header('location:login.php');
    }
?>
<?php
    $level ="";
    $isLogin = false;
    // $isRegister = false;
    $isForgotPassword = true;

    include $level."config.php";
    include $level."layout__account.php";
?>
            