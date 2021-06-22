<?php
    include $level."index__data.php";
    
    $id = $_GET["id_product"];

    if(isset($_POST["productname"]))
    {
        $productname= $_POST['productname'];
        $id_producttype = $_POST['id_producttype'];
        $id_provider = $_POST['id_provider'];
        $total = $_POST['total'];
        $price = $_POST['price'];
        $color = $_POST['color'];
        $size = $_POST['size'];
        $description = $_POST['description'];
        $status = $_POST['status'];
        //Image
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($image_tmp,'img/'.$image);
        
        /*-------------------Update product------------------*/
        
        $sql__update = "UPDATE product SET productname = '$productname',id_producttype = '$id_producttype',id_provider= '$id_provider',
        productimage = '$image',total = '$total', price = '$price' , color = '$color' , size = '$size' , description = N'$description',status = '$status'
        WHERE id_product = '$id'";
        $list__update__product = $connect->prepare($sql__update);
        $list__update__product ->execute();
        header("location:product.php");
    }
?>

<!-- Begin Page Content -->
<div class="container-fluid pt-2">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><code>UPDATE PRODUCTS</code></h1>

<!-- Database Shoes Shop -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Update product</h6>
    </div>
    <div class="card-body">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="product.php" class="btn btn-primary" type="button">Back to product</a>
        </div>
        <?php foreach ($list__product_select_rowsdata as $list__select){ ?>
            <form action="" method="post" class="row g-3 needs-validation" enctype="multipart/form-data" validate>
            <div class="col-md-4 p-4">
                <label for="validationCustom01" class="form-label">Product ID</label>
                <input type="text" class="form-control" id="validationCustom01" name="idproduct" value="<?php echo $id?>" placeholder="Enter Product ID" readonly>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 p-4">
                <label for="validationCustom02" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="validationCustom02" name="productname" value="<?php echo $list__select['productname']?>" placeholder="Enter Product Name"  required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 p-4">
                <label for="validationCustom03" class="form-select">Product Type</label>
                <select class="form-control" id="validationCustom03" name="id_producttype" value="" required>
                    <?php foreach ($list__product_type_rowsdata as $arr_producttype) 
                    {  
                    ?>
                        <option value="<?php echo $arr_producttype["id_producttype"]?>"><?php echo $arr_producttype["producttypename"]?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-4 p-4">
                <label for="validationCustom04" class="form-label">Provider</label>
                <select class="form-control" id="validationCustom04" name="id_provider" value="" required>
                    <?php foreach ($list__provider_rowsdata as $arr_provider) 
                    {  
                    ?>
                        <option value="<?php echo $arr_provider["id_provider"]?>"><?php echo $arr_provider["providername"]?></option>
                    <?php
                    } 
                    ?>
                </select>
            </div>

            <div class="col-lg-2 p-4">
                <label for="validationCustom05" class="form-label">Total</label>
                <input type="number" min = "0" max="150"class="form-control" id="validationCustom05" name="total" value="<?php echo $list__select['total']?>" placeholder="Choose Total" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-2 p-4">
                <label for="validationCustom06" class="form-label">Price</label>
                <input type="text" class="form-control" id="validationCustom06" name="price" value="<?php echo $list__select['price']?>" placeholder="Enter Price" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 p-4">
                <label for="validationCustom07" class="form-label">Color</label>
                <select class="form-control" id="validationCustom04" name="color" value="" required>
                    <?php foreach ($list__product_color_rowsdata as $arr_product) 
                    {  
                    ?>
                        <option value="<?php echo $arr_product["color"]?>"><?php echo $arr_product["color"]?></option>
                    <?php
                    } 
                    ?>
                </select>
            </div>
            <div class="col-md-2 p-4">
                <label for="validationCustom07" class="form-label">Size</label>
                <input type="number" min="35" max="47" class="form-control" id="validationCustom08" name="size" placeholder="Choose Size" value="<?php echo $list__select['size']?>" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-2 p-4">
                <label for="validationCustom08" class="form-label">Status</label>
                <input type="number" min="0" max="1" class="form-control" id="validationCustom08" name="status" value="<?php echo $list__select['status']?>" placeholder="Status Selection" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 p-4">
                <label for="validationCustom09" class="form-label">Description</label>
                <input type="text" class="form-control" id="validationCustom06" name="description" value="<?php echo $list__select['description']?>" placeholder="Enter Discription" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="mb-3 p-4">
                <label for="validationCustom10" class="form-label">Product Image</label>
                <div class="col-md-4"><img src="<?php echo $level.img__path.$list__select['productimage']?>" alt="Old picture" style="background-size:cover;oject-fit:center;width:200px; height:200px;"></div>
                <input type="file" class="form-control" data-bs-toggle="collapse" name="image" value="<?php echo $list__select['productimage']?>" data-bs-target="#collapseExample" aria-expanded="false" aria-label="file collapseExample example">
                <div class="invalid-feedback">Example invalid form file feedback</div>
            </div>
            <div class="col-12 p-2 pl-4">
                <button class="btn btn-primary" type="submit" value="Update" name="update" id="fun" onclick=click();>Update</button>
            </div>
        </form>  
        <?php } ?>
    </div>
</div>