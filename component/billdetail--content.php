<?php
    include $level."index__data.php"
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><code>BILL DETAILS</code></h1>

<!-- Database Shoes Shop -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List of bill details</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Bill Detail</th>
                        <th>Bill</th>
                        <th>Product</th>
                        <th>Number</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Total Price</th>
                        <th>Status</th>
                        <th style="border-right:none"></th>
                        <th style="border-left:none;border-right:none"></th>
                        <th style="border-left:none;"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list__bill_detail_rowsdata as $arr__billdetail) 
                    {
                    ?>
                        <tr>
                            <td><?php echo $level.$arr__billdetail["id_billdetail"]?></td>
                            <td><?php echo $level.$arr__billdetail["id_bill"]?></td>
                            <td><?php echo $level.$arr__billdetail["id_product"]?></td>
                            <td><?php echo $level.$arr__billdetail["number"]?></td>
                            <td><?php echo $level.$arr__billdetail["price"]?></td>
                            <td><?php echo $level.$arr__billdetail["discount"]?></td>
                            <td><?php echo $level.$arr__billdetail["totalprice"]?></td>
                            <td><?php echo ($level.$arr__billdetail["status"])?"Active":"Inactive"?></td>
                            <td><a href="<?php echo $level."insert__billdetail" ?>" class="btn btn-primary">Add</a></td>
                            <td><a href="#" class="btn btn-success">Edit</a></td>
                            <td><a href="#" class="btn btn-danger">Delete</a></td> 
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>