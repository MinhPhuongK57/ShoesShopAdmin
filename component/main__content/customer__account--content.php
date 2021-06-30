<!-- Begin Page Content -->
<div class="container-fluid pt-2">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><code>CUSTOMER ACCOUNT</code></h1>

    <!-- Database Shoes Shop -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List of customer account</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width:180px">Username</th>
                            <th>Phone Number</th>
                            <th>ID Card</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Password</th>
                            <th>Status</th>
                            <th style="border-right:none"></th>
                            <th style="border-left:none;border-right:none"></th>
                            <th style="border-left:none;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list__cus_account_rowsdata as $arr__cusaccount) {
                        ?>
                            <tr>
                                <td style="width:180px"><?php echo $level . $arr__cusaccount["username"] ?></td>
                                <td><?php echo $level . $arr__cusaccount["phonenum"] ?></td>
                                <td><?php echo $level . $arr__cusaccount["id_card"] ?></td>
                                <td><?php echo $level . $arr__cusaccount["email"] ?></td>
                                <td><?php echo $level . $arr__cusaccount["address"] ?></td>
                                <td><?php echo $level . $arr__cusaccount["password"] ?></td>
                                <td><?php if ($arr__cusaccount['status'] == 1) : ?>
                                        <a href="setting__status.php?id_card=<?php echo $arr__cusaccount['id_card'] ?>" class="btn btn-success">Active</a>
                                        <!--<i class="far fa-thumbs-up"></i>-->
                                    <?php elseif ($arr__cusaccount['status'] == 0) : ?>
                                        <a href="setting__status.php?id_card=<?php echo $arr__cusaccount['id_card'] ?>" class="btn btn-danger">Deactive</a>
                                        <!--<i class="far fa-thumbs-down"></i>-->
                                    <?php endif ?>
                                </td>
                                <td><a href="<?php echo $level . "insert__customeraccount.php" ?>" class="btn btn-primary">Add</a></td>
                                <td><a href="edit__cusaccount.php?id_card=<?php echo $level . $arr__cusaccount["id_card"] ?>" class="btn btn-success">Edit</a></td>
                                <td><a href="delete__data.php?id_card=<?php echo $level . $arr__cusaccount["id_card"] ?>" class="btn btn-danger btn-del">Delete</a></td>
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