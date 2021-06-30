<!-- Begin Page Content -->
<div class="container-fluid pt-2">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><code>FEEDBACK</code></h1>

    <!-- Database Shoes Shop -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List infomation feedback</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Feedback</th>
                            <th>Product</th>
                            <th>Customer</th>
                            <th>Date</th>
                            <th style="width:350px;">Description</th>
                            <th>status</th>
                            <th style="border-left:none;border-right:none"></th>
                            <th style="border-left:none;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list__feedback_rowsdata as $arr__feed) {
                        ?>
                            <tr>
                                <td><?php echo $level . $arr__feed["id_feedback"] ?></td>
                                <td><?php echo $level . $arr__feed["id_product"] ?></td>
                                <td><?php echo $level . $arr__feed["email"] ?></td>
                                <td><?php echo date("d/m/Y H:i:s", strtotime($level . $arr__feed["date"])) ?></td>
                                <td style="width:350px;"><?php echo $level . $arr__feed["description"] ?></td>
                                <td><?php if ($arr__feed['status'] == '1') : ?>
                                        <a href="setting__status.php?id_feedback=<?php echo $arr__feed['id_feedback'] ?>" class="btn btn-success">Active</a>
                                        <!--<i class="far fa-thumbs-up"></i>-->
                                    <?php else : ?>
                                        <a href="setting__status.php?id_feedback=<?php echo $arr__feed['id_feedback'] ?>" class="btn btn-danger">Deactive</a>
                                        <!--<i class="far fa-thumbs-down"></i>-->
                                    <?php endif ?>
                                </td>
                                <td><a href="edit__feedback.php?id_feedback=<?php echo $level . $arr__feed["id_feedback"] ?>" class="btn btn-success">Edit</a></td>
                                <td><a href="delete__data.php?id_feedback=<?php echo $level . $arr__feed["id_feedback"] ?>" class="btn btn-danger btn-del">Delete</a></td>
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