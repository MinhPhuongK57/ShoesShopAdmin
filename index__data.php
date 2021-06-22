<?php
    $level = "";
    include $level."DB/database.php";

    //Product
    $SQL_str_listproduct = "SELECT * from product";
    $list__product = $connect->prepare($SQL_str_listproduct);
    $list__product -> execute();
    $list__product_rowsdata = $list__product ->fetchAll();

    //Product__select--color
    $SQL_str_listproduct_color = "SELECT DISTINCT color from product";
    $list__product_color = $connect->prepare($SQL_str_listproduct_color);
    $list__product_color -> execute();
    $list__product_color_rowsdata = $list__product_color ->fetchAll();
    
    //Product Type
    $SQL_str_listproduct_type = "SELECT * from producttype";
    $list__product_type = $connect->prepare($SQL_str_listproduct_type);
    $list__product_type -> execute();
    $list__product_type_rowsdata = $list__product_type ->fetchAll();

    //Customer__account
    $SQL_str_listcus_account= "SELECT * from customer_account";
    $list__cus_account= $connect->prepare($SQL_str_listcus_account);
    $list__cus_account-> execute();
    $list__cus_account_rowsdata = $list__cus_account ->fetchAll();

    //Bill
    $SQL_str_listbill= "SELECT * from bill";
    $list__bill= $connect->prepare($SQL_str_listbill);
    $list__bill-> execute();
    $list__bill_rowsdata = $list__bill ->fetchAll();

    //Bill detail
    $SQL_str_listbill_detail= "SELECT * from bill_detail";
    $list__bill_detail= $connect->prepare($SQL_str_listbill_detail);
    $list__bill_detail-> execute();
    $list__bill_detail_rowsdata = $list__bill_detail ->fetchAll();
    
    //Provider
    $SQL_str_listprovider= "SELECT * from provider";
    $list__provider= $connect->prepare($SQL_str_listprovider);
    $list__provider-> execute();
    $list__provider_rowsdata = $list__provider->fetchAll();

    //Feedback
    $SQL_str_listfeedback= "SELECT * from feedback";
    $list__feedback= $connect->prepare($SQL_str_listfeedback);
    $list__feedback-> execute();
    $list__feedback_rowsdata = $list__feedback->fetchAll();

    //Edit product
    if(isset($_GET["id_product"]))
    {
        $id_product = $_GET["id_product"];
        $sql__select = "SELECT * from product where id_product = '$id_product'";
        $list__product_select = $connect->prepare($sql__select);
        $list__product_select -> execute();
        $list__product_select_rowsdata = $list__product_select ->fetchAll();
    }
    
    //Edit producttype
    if(isset($_GET["id_producttype"]))
    {
        $id = $_GET["id_producttype"];
        $sql__select__producttype = "SELECT * FROM producttype WHERE id_producttype = '$id'";
        $list__producttype_select = $connect->prepare($sql__select__producttype);
        $list__producttype_select -> execute();
        $list__producttype_select_rowsdata = $list__producttype_select ->fetchAll();
    }

    //Edit customeraccount
    if(isset($_GET["id_card"]))
    {
        $id_card = $_GET["id_card"];
        $sql__select = "SELECT * from customer_account where id_card = '$id_card'";
        $list__cusaccount_select = $connect->prepare($sql__select);
        $list__cusaccount_select -> execute();
        $list__cusaccount_select_rowsdata = $list__cusaccount_select ->fetchAll();
    }
    //Edit provider
    if(isset($_GET["id_provider"]))
    {
        $id_provider = $_GET["id_provider"];
        $sql__select = "SELECT * from provider where id_provider = '$id_provider'";
        $list__provider_select = $connect->prepare($sql__select);
        $list__provider_select -> execute();
        $list__provider_select_rowsdata = $list__provider_select ->fetchAll();
    }
    //Edit bill
    if(isset($_GET["id_bill"]))
    {
        $id_bill = $_GET["id_bill"];
        $sql__select = "SELECT * from bill where id_bill = '$id_bill'";
        $list__bill_select = $connect->prepare($sql__select);
        $list__bill_select -> execute();
        $list__bill_select_rowsdata = $list__bill_select ->fetchAll();
    }
    //Edit billdetail
    if(isset($_GET["id_billdetail"]))
    {
        $id_billdetail = $_GET["id_billdetail"];
        $sql__select = "SELECT * from bill_detail where id_billdetail = '$id_billdetail'";
        $list__billdetail_select = $connect->prepare($sql__select);
        $list__billdetail_select -> execute();
        $list__billdetail_select_rowsdata = $list__billdetail_select ->fetchAll();
    }
    //Edit feedback
    if(isset($_GET["id_feedback"]))
    {
        $id_feedback = $_GET["id_feedback"];
        $sql__select = "SELECT * from feedback where id_feedback = '$id_feedback'";
        $list__feedback_select = $connect->prepare($sql__select);
        $list__feedback_select -> execute();
        $list__feedback_select_rowsdata = $list__feedback_select ->fetchAll();
    }
