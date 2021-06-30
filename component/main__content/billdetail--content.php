<!-- Begin Page Content -->
<div class="container-fluid pt-2">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><code>BILL DETAILS</code></h1>

    <!-- Database Shoes Shop -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List of bill details</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Bill Detail</th>
                            <th>Bill Code</th>
                            <th>Product</th>
                            <th>Number</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th style="border-right:none"></th>
                            <th style="border-left:none;border-right:none"></th>
                            <th style="border-left:none;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list__bill_detail_rowsdata as $arr__billdetail) {
                        ?>
                            <tr>
                                <td><?php echo $level . $arr__billdetail["id_billdetail"] ?></td>
                                <td><?php echo $level . $arr__billdetail["bill_code"] ?></td>
                                <td><?php echo $level . $arr__billdetail["id_product"] ?></td>
                                <td><?php echo $level . $arr__billdetail["number"] ?></td>
                                <td><?php echo $level . $arr__billdetail["price"] ?></td>
                                <td><?php echo $level . $arr__billdetail["discount"] ?></td>
                                <td><?php echo $level . $arr__billdetail["total"] ?></td>
                                <td><?php if ($arr__billdetail['status'] == 1) : ?>
                                        <a href="setting__status.php?id_billdetail=<?php echo $arr__billdetail['id_billdetail'] ?>" class="btn btn-success">Active</a>
                                        <!--<i class="far fa-thumbs-up"-->
                                    <?php else : ?>
                                        <a href="setting__status.php?id_billdetail=<?php echo $arr__billdetail['id_billdetail'] ?>" class="btn btn-danger">Deactive</a>
                                        <!--<i class="far fa-thumbs-down"></i>-->
                                    <?php endif ?>
                                </td>
                                <td><a href="<?php echo $level . "insert__billdetail.php" ?>" class="btn btn-primary">Add</a></td>
                                <td><a href="edit__billdetail.php?id_billdetail=<?php echo $level . $arr__billdetail["id_billdetail"] ?>" class="btn btn-success">Edit</a></td>
                                <td><a href="delete__data.php?id_billdetail=<?php echo $level . $arr__billdetail["id_billdetail"] ?>" class="btn btn-danger btn-del">Delete</a></td>
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