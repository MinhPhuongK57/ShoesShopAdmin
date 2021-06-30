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
<div class="container-fluid pt-2">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><code>PRODUCTS</code></h1>

    <!-- Database Shoes Shop -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List of products</h6>
        </div>
        <!-- <div class="col-md-12">
        <h5 class="text-left mt-3">Search Standard</h5>
        <div class="row">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Standard</label>
                    </div>
                    <select class="custom-select" id="select__product">
                        <?php foreach ($list__product_rowsdata as $r) { ?>
                            <option value='<?php echo $r['status'] ?>'><?php echo $r['status'] ?></option> 
                        <?php } ?>
                    </select>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
        </div>
    </div> -->
        <div class="card-body">
            <div class="table-responsive">
                <div class="input-group mb-3">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="5%">Product</th>
                                <th>Product Name</th>
                                <th>Product Type</th>
                                <th>Provider</th>
                                <th>Product Images</th>
                                <th>Total</th>
                                <th>Price</th>
                                <th>Color</th>
                                <th>Size</th>
                                <th>Discount</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th style="border-right:none"></th>
                                <th style="border-left:none;border-right:none"></th>
                                <th style="border-left:none;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list__product_rowsdata as $arr__product) {
                            ?>
                                <tr>
                                    <td><?php echo $level . $arr__product["id_product"] ?></td>
                                    <td style="width:170px;"><?php echo $level . $arr__product["productname"] ?></td>
                                    <td><?php echo $level . $arr__product["id_producttype"] ?></td>
                                    <td><?php echo $level . $arr__product["id_provider"] ?></td>
                                    <td><img src="<?php echo $level . img__path . $arr__product["productimage"] ?>" alt="No photo" style="width:80px;"></td>
                                    <td><?php echo $level . $arr__product["total"] ?></td>
                                    <td><?php echo $level . $arr__product["price"] ?>$</td>
                                    <td><?php echo $level . $arr__product["color"] ?></td>
                                    <td><?php echo $level . $arr__product["size"] ?></td>
                                    <td><?php echo $level . $arr__product["discount"] ?></td>
                                    <td><?php echo $level . $arr__product["description"] ?></td>
                                    <!-- <td><?php echo ($level . $arr__product["status"]) ? "Active" : "Deactive" ?></td> -->
                                    <td><?php if ($arr__product['status'] == 1) : ?>
                                            <a href="setting__status.php?id_product=<?php echo $arr__product['id_product'] ?>" class="btn btn-success">Active</a>
                                            <!--<i class="far fa-thumbs-up"></i> -->
                                        <?php else : ?>
                                            <a href="setting__status.php?id_product=<?php echo $arr__product['id_product'] ?>" class="btn btn-danger">Deactive</a>
                                            <!--<i class="far fa-thumbs-down"></i>-->
                                        <?php endif ?>
                                    </td>
                                    <td><a href="<?php echo $level . "insert__products.php" ?>" class="btn btn-primary">Add</a></td>
                                    <td><a href="edit__products.php?id_product=<?php echo $level . $arr__product["id_product"] ?>" class="btn btn-success">Edit</a></td>
                                    <td><a href="delete__data.php?id_product=<?php echo $level . $arr__product["id_product"] ?>" class="btn btn-danger btn-del">Delete</a></td>

                                    <!--SweetAlert-->
                                    <?php if (isset($_GET['ken'])) :  ?>
                                        <div class="flash-data" data-flashdata="<?= $_GET['ken']; ?>"></div>
                                    <?php endif; ?>
                                    <!--SweetAlert-->
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>