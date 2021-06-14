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
    $isStaff = true;
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
    $isStaffAccount =  false;

    
    $isBill = false;
    $isBillDetail = false;
    $isProvider = false;
    include $level."config.php";
    include $level."layout.php";
?>