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
    $isInfopage = true;
    $isCustomerAccount = false;
    $isInformationAdmin = false;
    $isAdminAccount =  false;
    $isBill = false;
    $isBillDetail = false;
    $isProvider = false;
    $isFeedback = false;
    
    //Insert
    $isInsertProduct = false;
    $isInsertProductType = false;
    $isInsertCustomerAccount = false;
    $isInsertProvider = false;
    $isInsertBill = false;
    $isInsertBillDetail = false;

    //Edit
    $isEditProduct = false;
    $isEditProductType = false;
    $isEditCustomerAccount = false;
    $isEditProvider = false;
    $isEditBill = false;
    $isEditBillDetail = false;
    $isEditFeedback = false;
    
    include $level."config.php";
    include $level."layout.php";
?>