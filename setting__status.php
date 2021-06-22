<?php
    $level ="";
    include $level."DB/database.php";
?>

<?php 
    //Xét status product
    if(isset($_GET["id_product"]))
    {
        $id_pro = $_GET["id_product"];
        $sql = "SELECT status FROM product WHERE id_product = '$id_pro'";
        $sql__status = $connect->prepare($sql);
        $sql__status -> execute();
        $sql__select__status_pr = $sql__status ->fetchAll();
        
        $status_product = ($sql__select__status_pr['status'] = '0')?'1':'0';
        
        $sql_stt_select_pr= "UPDATE product SET status = '$status_product' WHERE id_product = '$id_pro'";
        $sql__exe__pro = $connect->prepare($sql_stt_select_pr);
        $sql__exe__pro -> execute();
        header("location:product.php");
    }
?>
<?php
    //Xét status product type
    if(isset($_GET["id_producttype"]))
    {
        $id_protype = $_GET["id_producttype"];
        $sql = "SELECT status FROM producttype WHERE id_producttype = '$id_protype'";
        $sql__status_type = $connect->prepare($sql);
        $sql__status_type -> execute();
        $sql__select__status_prt = $sql__status_type ->fetchAll();

        $status_producttype = ($sql__select__status_prt['status'] == '0')?'1':'0';
        $sql_stt_select_prt= "UPDATE producttype SET status = '$status_producttype' WHERE id_producttype = '$id_protype'";
        $sql__exe__prot = $connect->prepare($sql_stt_select_prt);
        $sql__exe__prot -> execute();
        header("location:product__type.php");
    }
?>
<?php
    //Xét status customer account
    if(isset($_GET["id_card"]))
    {
        $id_card = $_GET["id_card"];
        $sql = "SELECT status FROM customer_account WHERE id_card = '$id_card'";
        $sql__status_cus = $connect->prepare($sql);
        $sql__status_cus -> execute();
        $sql__select__status_cus = $sql__status_cus ->fetchAll();

        $status_cus= ($sql__select__status_cus['status'] == '0')?'1':'0';

        $sql_stt_select_cus= "UPDATE customer_account SET status = '$status_cus' WHERE id_card = '$id_card'";
        $sql__exe__cus = $connect->prepare($sql_stt_select_cus);
        $sql__exe__cus -> execute();
        header("location:customer__account.php");
    }
?>
<?php
    //Xét status provider
    if(isset($_GET["id_provider"]))
    {
        $id_provider = $_GET["id_provider"];
        $sql = "SELECT status FROM provider WHERE id_provider = '$id_provider'";
        $sql__status_prov = $connect->prepare($sql);
        $sql__status_prov -> execute();
        $sql__select__status_prov = $sql__status_prov ->fetchAll();

        $status_prov= ($sql__select__status_prov['status'] == '0')?'1':'0';

        $sql_stt_select_prov= "UPDATE provider SET status = '$status_prov' WHERE id_provider = '$id_provider'";
        $sql__exe__prov = $connect->prepare($sql_stt_select_prov);
        $sql__exe__prov -> execute();
        header("location:provider.php");
    }
?>
<?php
    //Xét status bill
    if(isset($_GET["id_bill"]))
    {
        $id_bill = $_GET["id_bill"];
        $sql = "SELECT status FROM bill WHERE id_bill = '$id_bill'";
        $sql__status_bill = $connect->prepare($sql);
        $sql__status_bill -> execute();
        $sql__select__status_bill = $sql__status_bill ->fetchAll();

        $status_bill= ($sql__select__status_bill['status'] == '0')?'1':'0';

        $sql_stt_select_bill= "UPDATE bill SET status = '$status_bill' WHERE id_bill = '$id_bill'";
        $sql__exe__bill = $connect->prepare($sql_stt_select_bill);
        $sql__exe__bill -> execute();
        header("location:bill.php");
    }
?>
<?php
    //Xét status bill detail
    if(isset($_GET["id_billdetail"]))
    {
        $id_billdetail = $_GET["id_billdetail"];
        $sql = "SELECT status FROM bill_detail WHERE id_billdetail = '$id_billdetail'";
        $sql__status_bd = $connect->prepare($sql);
        $sql__status_bd -> execute();
        $sql__select__status_bd = $sql__status_bd ->fetchAll();

        $status_bd= ($sql__select__status_bd['status'] == '0')?'1':'0';

        $sql_stt_select_bd= "UPDATE bill_detail SET status = '$status_bd' WHERE id_billdetail = '$id_billdetail'";
        $sql__exe__bd = $connect->prepare($sql_stt_select_bd);
        $sql__exe__bd -> execute();
        header("location:billdetail.php");
    }
?>
<?php
    //Xét status feedback
    if(isset($_GET["id_feedback"]))
    {
        $id_feedback = $_GET["id_feedback"];
        $sql = "SELECT status FROM feedback WHERE id_feedback = '$id_feedback'";
        $sql__status_fd = $connect->prepare($sql);
        $sql__status_fd -> execute();
        $sql__select__status_fd = $sql__status_fd ->fetchAll();

        $status_fd= ($sql__select__status_fd['status'] == '1')?'0':'1';

        $sql_stt_select_fd= "UPDATE feedback SET status = '$status_fd' WHERE id_feedback = '$id_feedback'";
        $sql__exe__feedback = $connect->prepare($sql_stt_select_fd);
        $sql__exe__feedback -> execute();
        header("location:feedback.php");
    }
?>
