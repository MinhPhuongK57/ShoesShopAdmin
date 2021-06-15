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
    $isProductType=false;
    $isInfopage = false;
    $isCustomerAccount = false;
    $isInformationAdmin = false;
    //Insert
    $isInsertProduct = false;
    $isInsertProductType = false;
    $isInsertCustomerAccount = false;
    $isInsertProvider = false;
    $isInsertBill = false;
    $isInsertBillDetail = true;

    //Update
    $isEditProduct = false;
    $isEditProductType = false;
    $isAdminAccount =  false;

    
    $isBill = false;
    $isBillDetail = false;
    $isProvider = false;
    include $level."config.php";
    include $level."layout.php";
?>