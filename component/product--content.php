<?php
    // if(isset($_GET["id_product"])){
    //     $id = $_GET["id_product"];
    //     $sql = "SELECT status from product WHERE id_product = '$id";
    //     $sql__status = $connect->prepare($sql);
    //     $sql__status -> execute();
    //     $sql__select__status = $sql__status ->fetchAll();

    //     if($sql__select__status == '0')
    //     {
    //         $sql_1 = "UPDATE product SET status = '1' WHERE id_product = '$id";
    //         $sql__status1 = $connect->prepare($sql_1);
    //         $sql__status1 -> execute();
    //         $sql__select1__status = $sql__status1 ->fetchAll();
    //         header("location:product.php");
    //     }
    //     else
    //     {
    //         $sql_0 = "UPDATE product SET status = '0' WHERE id_product = '$id";
    //         $sql__status0 = $connect->prepare($sql_0);
    //         $sql__status0 -> execute();
    //         $sql__select0__status = $sql__status0 ->fetchAll();
    //         header("location:product.php");
    //     }
    // }
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
                            <td><img src="<?php echo $level.img__path.$arr__product["productimage"]?>" alt="No photo" style="width:80px;"></td>
                            <td><?php echo $level.$arr__product["total"]?></td>
                            <td><?php echo $level.$arr__product["price"]?></td>
                            <td><?php echo $level.$arr__product["color"]?></td>
                            <td style="width:40px;"><?php echo $level.$arr__product["size"]?></td>
                            <td><?php echo $level.$arr__product["description"]?></td>
                            <!-- <td><?php echo ($level.$arr__product["status"])?"Active":"Inactive"?></td> -->
                            <td><?php if($arr__product['status'] == 1):?>
                                        <a href="setting__status.php?id_product=<?php echo $arr__product['id_product']?>" class="btn btn-success"><i class="far fa-thumbs-up"></i></a>
                                <?php else: ?>
                                        <a href="setting__status.php?id_product=<?php echo $arr__product['id_product']?>" class="btn btn-danger"><i class="far fa-thumbs-down"></i></a>
                                <?php endif ?>
                            </td>
                            <td><a href="<?php echo $level."insert__products.php"?>" class="btn btn-primary">Add</a></td>
                            <td><a href="edit__products.php?id_product=<?php echo $level.$arr__product["id_product"]?>" class="btn btn-success">Edit</a></td>
                            <td><a href="delete__data.php?id_product=<?php echo $level.$arr__product["id_product"]?>" class="btn btn-danger">Delete</a></td>  
                            
                            
                            <!-- <td><a href="product.php?id_product=<?php echo $level.$arr__product["id_product"]?>" data-toggle="modal" data-target="#exampleModal" class="btn btn-danger">Delete</a></td> -->
                            <!-- Modal -->
                            <!-- Popup-->
                            <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete product <code><?php echo $level.$arr__product["productname"]?></code></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure to delete product -> <em class="h4"><code><?php echo $level.$arr__product["productname"]?></code>
                                        </em> <strong>#<?php echo $level.$arr__product["id_product"]?></strong>
                                        <p style="text-align:center;"><img src="<?php echo $level.img__path.$arr__product["productimage"]?>" alt="No photo" style="width:150px;"></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                        <a href="delete__data.php?id_product=<?php echo $level.$arr__product["id_product"]?>" class="btn btn-danger" name="delete">Delete</a>
                                    </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- Modal -->
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
