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
    $isIndex = false;
    $isProduct = false;
    $isProductType=true;
    $isInfopage = false;
    $isStaff = false;
    $isCustomerAccount = false;

    //Insert
    $isInsertProduct = false;
    $isInsertProductType = false;
    $isInsertCustomerAccount = false;
    $isInsertStaff = false;
    $isInsertProvider = false;
    $isInsertBill = false;
    $isInsertBillDetail = false;

    //Edit
    $isEditProduct = false;
    $isBill = false;
    $isBillDetail = false;
    $isProvider = false;
    include $level."config.php";
    include $level."layout.php";
?>