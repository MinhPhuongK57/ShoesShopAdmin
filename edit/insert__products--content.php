<?php
    $level = "";
    include $level."index__data.php";
?>
<?php
    if(isset($_POST['productname']) )
    {
        $productname= $_POST['productname'];
        $id_producttype = $_POST['idproducttype'];
        $id_provider = $_POST['idprovider'];
        $total = $_POST['total'];
        $price = $_POST['price'];
        $color = $_POST['color'];
        $size = $_POST['size'];
        $description = $_POST['description'];
        $status = $_POST['status'];
        //Image
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        
        /*-------------------Insert product------------------*/
        $sql__insert = "INSERT INTO product(productname,id_producttype,id_provider,productimage,total,price,color,size,description,status)
        VALUES('$productname','$id_producttype','$id_provider','$image',$total,$price,'$color',$size,'$description',$status)";
        move_uploaded_file($image_tmp,'img/'.$image);
        $product__insert = $connect->prepare($sql__insert);
        $product__insert -> execute();
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><code>INSERT PRODUCTS</code></h1>

<!-- Database Shoes Shop -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add new products</h6>
    </div>
    <div class="card-body">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="<?php echo $level."product.php"?>" class="btn btn-primary" type="button">Back to product</a>
        </div>
        <form action="" method="post" class="row g-3 needs-validation" enctype="multipart/form-data" validate>
            <div class="col-md-4 p-4">
                <label for="validationCustom02" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="validationCustom02" name="productname" value="" placeholder="Enter Product Name"  required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 p-4">
                <label for="validationCustom03" class="form-select">Product Type</label>
                <select class="form-control" id="validationCustom03" name="idproducttype" value="" required>
                        <option value="0">Choose Product Type</option>
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
                <select class="form-control" id="validationCustom04" name="idprovider" value="" required>
                        <option value="">Choose Provider</option>
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
                <input type="number" min = "0" max="150"class="form-control" id="validationCustom05" name="total" value="" placeholder="Choose Total" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-2 p-4">
                <label for="validationCustom06" class="form-label">Price</label>
                <input type="text" class="form-control" id="validationCustom06" name="price" value="" placeholder="Enter Price" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 p-4">
                <label for="validationCustom07" class="form-label">Color</label>
                <select class="form-control" id="validationCustom04" name="color" value="" required>
                        <option value="">Choose Color</option>
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
                <input type="number" min="35" max="47" class="form-control" id="validationCustom08" name="size" placeholder="Choose Size" value="" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-2 p-4">
                <label for="validationCustom08" class="form-label">Status</label>
                <input type="number" min="0" max="1" class="form-control" id="validationCustom08" name="status" value="" placeholder="Status Selection" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 p-4">
                <label for="validationCustom09" class="form-label">Description</label>
                <input type="text" class="form-control" id="validationCustom06" name="description" value="" placeholder="Enter Discription" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="mb-3 p-4">
                <label for="validationCustom10" class="form-label">Product Image</label>
                <input type="file" class="form-control" data-bs-toggle="collapse" name="image" data-bs-target="#collapseExample" aria-expanded="false" aria-label="file collapseExample example" placeholder="Choose your photo" required>
                <div class="invalid-feedback">Example invalid form file feedback</div>
            </div>
            <div class="col-12 p-2 pl-4">
                <button class="btn btn-primary" type="submit" id="fun" onclick=click();>Insert</button>
            </div>
        </form>  
    </div>
</div>