<!-- Begin Page Content -->
<div class="container-fluid pt-2">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><code>PROVIDER</code></h1>

    <!-- Database Shoes Shop -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List of provider</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Provider</th>
                            <th>Provider Name</th>
                            <th>ID card</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th style="border-right:none"></th>
                            <th style="border-left:none;border-right:none"></th>
                            <th style="border-left:none;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list__provider_rowsdata as $arr__provider) {
                        ?>
                            <tr>
                                <td><?php echo $level . $arr__provider["id_provider"] ?></td>
                                <td><?php echo $level . $arr__provider["providername"] ?></td>
                                <td><?php echo $level . $arr__provider["id_card"] ?></td>
                                <td><?php echo $level . $arr__provider["email"] ?></td>
                                <td><?php echo $level . $arr__provider["address"] ?></td>
                                <td><?php if ($arr__provider['status'] == 1) : ?>
                                        <a href="setting__status.php?id_provider=<?php echo $arr__provider['id_provider'] ?>" class="btn btn-success">Active</a>
                                        <!--<i class="far fa-thumbs-up"></i>-->
                                    <?php else : ?>
                                        <a href="setting__status.php?id_provider=<?php echo $arr__provider['id_provider'] ?>" class="btn btn-danger">Deactive</a>
                                        <!--<i class="far fa-thumbs-down"-->
                                    <?php endif ?>
                                </td>
                                <td><a href="<?php echo $level . "insert__provider" ?>" class="btn btn-primary">Add</a></td>
                                <td><a href="edit__provider.php?id_provider=<?php echo $level . $arr__provider["id_provider"] ?>" class="btn btn-success">Edit</a></td>
                                <td><a href="delete__data.php?id_provider=<?php echo $level . $arr__provider["id_provider"] ?>" class="btn btn-danger btn-del">Delete</a></td>
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