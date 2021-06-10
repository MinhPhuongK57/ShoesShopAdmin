<?php
    include $level."index__data.php";

        /*-------------------Delte product type------------------*/
        if(isset($_GET["id_producttype"])){
            $id_producttype = $_GET["id_producttype"];
            $sql__delete = "DELETE FROM producttype WHERE id_producttype = '$id_producttype'";
            $producttype__delete = $connect->prepare($sql__delete);
            $producttype__delete -> execute();
        }
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><code>PRODUCT TYPE</code></h1>

<!-- Database Shoes Shop -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List of product type</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Product Type</th>
                        <th>Product Name</th>
                        <th>Status</th>
                        <th style="border-right:none"></th>
                        <th style="border-left:none;border-right:none"></th>
                        <th style="border-left:none;"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list__product_type_rowsdata as $arr__protype) 
                    {
                    ?>
                        <tr>
                            <td><?php echo $level.$arr__protype["id_producttype"]?></td>
                            <td><?php echo $level.$arr__protype["producttypename"]?></td>
                            <td><?php echo ($level.$arr__protype["status"])?"Active":"Inactive"?></td>
                            <td><a href="<?php echo $level."insert__producttype.php"?>" class="btn btn-primary">Add</a></td>
                            <td><a href="insert__producttype.php?id_producttype=<?php echo $level.$arr__protype["id_producttype"]?>" class="btn btn-success">Edit</a></td>
                            <td><a href="product__type.php?id_producttype=<?php echo $level.$arr__protype["id_producttype"]?>" class="btn btn-danger">Delete</a></td> 
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>