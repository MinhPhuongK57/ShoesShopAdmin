<!-- Begin Page Content -->
<div class="container-fluid pt-2">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><code>BILL</code></h1>

<!-- Database Shoes Shop -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List of bill</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Bill</th>
                        <th>Bill Code</th>
                        <th>Date</th>
                        <th>Customer</th>
                        <th>Total Price</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th style="border-right:none"></th>
                        <th style="border-left:none;border-right:none"></th>
                        <th style="border-left:none;"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list__bill_rowsdata as $arr__bill) 
                    {
                    ?>
                        <tr>
                            <td><?php echo $level.$arr__bill["id_bill"]?></td>
                            <td><?php echo $level.$arr__bill["bill_code"]?></td>
                            <td><?php echo date("d/m/Y",strtotime( $level.$arr__bill["date"]))?></td>
                            <td><?php echo $level.$arr__bill["id_customer"]?></td>
                            <td><?php echo $level.$arr__bill["totalprice"]?></td>
                            <td><?php echo $level.$arr__bill["address"]?></td>
                            <td><?php if($arr__bill['status'] == 1):?>
                                        <a href="setting__status.php?id_bill=<?php echo $arr__bill['id_bill']?>" class="btn btn-success">Active</a> <!--<i class="far fa-thumbs-up"></i>-->
                                <?php else: ?>
                                        <a href="setting__status.php?id_bill=<?php echo $arr__bill['id_bill']?>" class="btn btn-danger">Deactive</a> <!--<i class="far fa-thumbs-down"></i>-->
                                <?php endif ?>
                            </td>
                            <td><a href="<?php echo $level."insert__bill.php"?>" class="btn btn-primary">Add</a></td>
                            <td><a href="edit__bill.php?id_bill=<?php echo $level.$arr__bill["id_bill"]?>" class="btn btn-success">Edit</a></td>
                            <td><a href="delete__data.php?id_bill=<?php echo $level.$arr__bill["id_bill"]?>" class="btn btn-danger btn-del">Delete</a></td>   
                            <!--SweetAlert-->
                            <?php if(isset($_GET['ken'])) :  ?> 
                                <div class="flash-data" data-flashdata="<?= $_GET['ken'];?>"></div>
                            <?php endif;?>
                            <!--SweetAlert-->
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>