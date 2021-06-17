<?php
    $level = "";
    include $level."index__data.php";
    $id=$_GET["id_billdetail"];
    if(isset($_POST['id_bill']) )
    {
        $id_bill = $_POST['id_bill'];
        $id_product = $_POST['id_product'];
        $number = $_POST['number'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $total = $_POST['total'];
        $status = $_POST['status'];
        
        /*-------------------Insert product------------------*/
        $sql__insert__billdetail = "UPDATE bill_detail SET id_bill = '$id_bill',id_product='$id_product',
        number = '$number',price = '$price',discount = '$discount',total = '$total',status = '$status' WHERE id_billdetail = '$id'";
        $product__insert__billdetail = $connect->prepare($sql__insert__billdetail);
        $product__insert__billdetail -> execute();
        header("location:billdetail.php");
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><code>UPDATE BILLDETTAIL</code></h1>

<!-- Database Shoes Shop -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List information billdetail</h6>
    </div>
    <div class="card-body">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="<?php echo $level."billdetail.php"?>" class="btn btn-primary" type="button">Back to billdetail</a>
        </div>
        <?php foreach($list__billdetail_select_rowsdata as $row){?>
        <form action="" method="post" class="row g-3 needs-validation" enctype="multipart/form-data" validate>
            <div class="col-md-3 p-4">
                <label for="username" class="form-label">Bill Detail</label>
                <input type="text" class="form-control" id="validationCustom01" name="id_billdetail" value="<?php echo $id?>" placeholder="Enter bill detail" autocomplete="off" required disabled>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-3 p-4">
                <label for="username" class="form-label">Bill</label>
                <select class="form-control" id="validationCustom03" name="id_bill" value="">
                    <option value=""><?php echo $row['id_bill']?></option>
                    <?php foreach ($list__bill_rowsdata as $arr_bill) 
                    {  
                    ?>
                        <option value="<?php echo $arr_bill["id_bill"]?>"><?php echo $arr_bill["id_bill"]?></option>
                    <?php
                    } 
                    ?>
                </select>
            </div>
            <div class="col-md-3 p-4">
                <label for="username" class="form-label">Product</label>
                <select class="form-control" id="validationCustom03" name="id_product" value="">
                    <option value=""><?php echo $row['id_product']?></option>
                    <?php foreach ($list__product_rowsdata as $arr_pro) 
                    {  
                    ?>
                        <option value="<?php echo $arr_pro["id_product"]?>"><?php echo $arr_pro["id_product"]?></option>
                    <?php
                    } 
                    ?>
                </select>
            </div>

            <div class="col-md-3 p-4">
                <label for="validationCustom05" class="form-label">Number</label>
                <input type="number" min = "0" max="150"class="form-control" id="validationCustom05" name="number" value="<?php echo $row['number']?>" placeholder="Choose number" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>

            <div class="col-md-3 p-4">
                <label for="validationCustom05" class="form-label">Price</label>
                <input type="text" class="form-control" id="validationCustom05" name="price" value="<?php echo $row['price']?>" placeholder="Enter price" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-3 p-4">
                <label for="validationCustom06" class="form-label">Discount</label>
                <input type="text" class="form-control" id="validationCustom06" name="discount" value="<?php echo $row['discount']?>" placeholder="Enter discount" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-3 p-4">
                <label for="validationCustom06" class="form-label">Total</label>
                <input type="text" class="form-control" id="validationCustom06" name="total" value="<?php echo $row['total']?>" placeholder="Enter total price" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-3 p-4">
                <label for="validationCustom08" class="form-label">Status</label>
                <input type="number" min="0" max="1" class="form-control" id="validationCustom08" name="status" value="<?php echo $row['status']?>" placeholder="Choose status" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-12 p-2">
                <button class="btn btn-primary" type="submit" id="fun" onclick=click();>Update</button>
            </div>
        </form>  
        <?php }?>
        
    </div>
</div>