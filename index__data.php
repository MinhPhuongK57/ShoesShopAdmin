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
    

    //staff
    $SQL_str_liststaff= "SELECT * from staff";
    $list__staff= $connect->prepare($SQL_str_liststaff);
    $list__staff -> execute();
    $list__staff_rowsdata = $list__staff ->fetchAll();

    //customer__account
    $SQL_str_listcus_account= "SELECT * from customer_account";
    $list__cus_account= $connect->prepare($SQL_str_listcus_account);
    $list__cus_account-> execute();
    $list__cus_account_rowsdata = $list__cus_account ->fetchAll();

    //bill
    $SQL_str_listbill= "SELECT * from bill";
    $list__bill= $connect->prepare($SQL_str_listbill);
    $list__bill-> execute();
    $list__bill_rowsdata = $list__bill ->fetchAll();

    //bill detail
    $SQL_str_listbill_detail= "SELECT * from bill_detail";
    $list__bill_detail= $connect->prepare($SQL_str_listbill_detail);
    $list__bill_detail-> execute();
    $list__bill_detail_rowsdata = $list__bill_detail ->fetchAll();
    
    //provider
    $SQL_str_listprovider= "SELECT * from provider";
    $list__provider= $connect->prepare($SQL_str_listprovider);
    $list__provider-> execute();
    $list__provider_rowsdata = $list__provider->fetchAll();
    
    