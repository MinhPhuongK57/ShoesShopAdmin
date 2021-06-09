<?php
    include $level."index__data.php";

    /*-------------------Delte product------------------*/
    if(isset($_GET['id_product']))
    {
        $sql__delete = "DELETE FROM product WHERE id_product = ".$_GET['id_product']."";
        $product__delete = $connect->prepare($sql__delete);
        $product__delete -> execute();
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><code>PRODUCTS</code></h1>

<!-- Database Shoes Shop -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List of products</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Product Name</th>
                        <th>Product Type</th>
                        <th>Provider</th>
                        <th>Product Images</th>
                        <th>Total</th>
                        <th>Price</th>
                        <th>Color</th>
                        <th style="width:40px;">Size</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th style="border-right:none"></th>
                        <th style="border-left:none;border-right:none"></th>
                        <th style="border-left:none;"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list__product_rowsdata as $arr__product) 
                    {
                    ?>
                        <tr>
                            <td><?php echo $level.$arr__product["id_product"]?></td>
                            <td><?php echo $level.$arr__product["productname"]?></td>
                            <td><?php echo $level.$arr__product["id_producttype"]?></td>
                            <td><?php echo $level.$arr__product["id_provider"]?></td>
                            <td><img src="<?php echo $level.img__path.$arr__product["productimage"]?>" alt="<?php echo $level.img__path.$arr__product["productimage"]?>" style="width:80px;"></td>
                            <td><?php echo $level.$arr__product["total"]?></td>
                            <td><?php echo $level.$arr__product["price"]?></td>
                            <td><?php echo $level.$arr__product["color"]?></td>
                            <td style="width:40px;"><?php echo $level.$arr__product["size"]?></td>
                            <td><?php echo $level.$arr__product["description"]?></td>
                            <td><?php echo ($level.$arr__product["status"])?"Active":"Inactive"?></td>
                            <td><a href="<?php echo $level."insert__products.php"?>" class="btn btn-primary">Add</a></td>
                            <td><a href="edit__products.php?id_product=<?php echo $level.$arr__product["id_product"]?>" class="btn btn-success">Edit</a></td>
                            <td><a href="product.php?id_product=<?php echo $level.$arr__product["id_product"]?>" class="btn btn-danger">Delete</a></td>   
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>