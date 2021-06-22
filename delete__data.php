<?php
    include $level."index__data.php";
?>
<?php
    /*-------------------Delte product------------------*/
    if(isset($_GET["id_product"])){
        $id_product = $_GET["id_product"];
        $sql__delete = "DELETE FROM product WHERE id_product = '$id_product'";
        $product__delete = $connect->prepare($sql__delete);
        $product__delete -> execute();
        header("location:product.php");
    }
?>
<?php
    /*-------------------Delete bill ------------------*/
    if(isset($_GET["id_bill"])){
        $id_bill= $_GET["id_bill"];
        $sql__delete = "DELETE FROM bill WHERE id_bill = '$id_bill'";
        $bill__delete = $connect->prepare($sql__delete);
        $bill__delete -> execute();
        header("location: bill.php");
    }
?>
<?php
    /*-------------------Delete billdetail------------------*/
    if(isset($_GET["id_billdetail"])){
        $id_billdetail = $_GET["id_billdetail"];
        $sql__delete = "DELETE FROM bill_detail WHERE id_billdetail = '$id_billdetail'";
        $bill_detail__delete = $connect->prepare($sql__delete);
        $bill_detail__delete -> execute();
        header("location: billdetail.php");
    }
?>
<?php
    /*-------------------Delte customer account------------------*/
    if(isset($_GET["id_card"])){
        $id_card = $_GET["id_card"];
        $sql__delete = "DELETE FROM customer_account WHERE id_card = '$id_card'";
        $customer_account__delete = $connect->prepare($sql__delete);
        $customer_account__delete -> execute();
        header("location: customer__account.php");
    }
?>
<?php
    /*-------------------Delte provider------------------*/
    if(isset($_GET["id_provider"])){
        $id_provider= $_GET["id_provider"];
        $sql__delete = "DELETE FROM provider WHERE id_provider = '$id_provider'";
        $provider__delete = $connect->prepare($sql__delete);
        $provider__delete -> execute();
        header("location: provider.php");
    }
?>
<?php
    /*-------------------Delte product type------------------*/
        if(isset($_GET["id_producttype"])){
            $id_producttype = $_GET["id_producttype"];
            $sql__delete = "DELETE FROM producttype WHERE id_producttype = '$id_producttype'";
            $producttype__delete = $connect->prepare($sql__delete);
            $producttype__delete -> execute();
            header("location: product__type.php");
        }
?>
<?php
    /*-------------------Delte product type------------------*/
    if(isset($_GET["id_feedback"])){
        $id_feedback = $_GET["id_feedback"];
        $sql__delete = "DELETE FROM feedback WHERE id_feedback = '$id_feedback'";
        $feedback__delete = $connect->prepare($sql__delete);
        $feedback__delete -> execute();
        header("location:feedback.php");
    }
?>

