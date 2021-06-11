<?php
    //Head
    include $level.com__path."head__account.php";

    //title
    if($isLogin == true)
    {
        include $level.tit__path."title__login.php";
    }
    // if($isRegister == true)
    // {
    //     include $level.tit__path."title__register.php";
    // }
    if($isForgotPassword == true)
    {
        include $level.tit__path."title__forgotpassword.php";
    }

    //Content
    if($isLogin == true)
    {
        include $level.com__path."login--content.php";
    }
    // if($isRegister == true)
    // {
    //     include $level.com__path."register--content.php";
    // }
    if($isForgotPassword == true)
    {
        include $level.com__path."forgot-password--content.php";
    }
    //Footer
    include $level.foo__path."content--end__account.php";
?>