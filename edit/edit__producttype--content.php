<?php
    $level = "";
    include $level."index__data.php";

    $id = $_GET["id_producttype"];
    if(isset($_POST['producttypename']) )
    {
        $producttypename= $_POST['producttypename'];
        $status = $_POST['status'];
        
        /*-------------------Insert product------------------*/
        $sql__update__producttype = "UPDATE producttype SET producttypename = N'$producttypename', status = '$status' WHERE id_producttype = '$id'";
        $product__update__producttype = $connect->prepare($sql__update__producttype);
        $product__update__producttype -> execute();
        header("location:product__type.php");
    }   

?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><code>EDIT PRODUCT TYPE</code></h1>

<!-- Database Shoes Shop -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit product type</h6>
    </div>
    <div class="card-body">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="product__type.php?<?php echo $admin_name?>" class="btn btn-primary" type="button">Back to product type</a>
        </div>
        <?php foreach ($list__producttype_select_rowsdata as $row)
        {?>
        <form action="" method="post" class="row g-3 needs-validation" enctype="multipart/form-data" validate>
            <div class="col-md-4 p-4">
                <label for="validationCustom01" class="form-label">Product Type</label>
                <input type="text" class="form-control" id="validationCustom01" name="idproducttype" value="<?php echo $row["id_producttype"]?>" placeholder="Enter Product ID" required readonly>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 p-4">
                <label for="validationCustom02" class="form-label">Product Type Name</label>
                <input type="text" class="form-control" id="validationCustom02" name="producttypename" value="<?php echo $row["producttypename"]?>" placeholder="Enter Product Name"  required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-2 p-4">
                <label for="validationCustom08" class="form-label">Status</label>
                <input type="number" min="0" max="1" class="form-control" id="validationCustom08" name="status" value="<?php echo $row["status"]?>" placeholder="Status Selection" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-12 p-2 pl-4">
                <button class="btn btn-primary" type="submit" id="fun" onclick=click();>Update</button>
            </div>
        </form>  
        <?php } ?>
    </div>
</div>