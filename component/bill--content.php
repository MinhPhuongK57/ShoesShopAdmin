<?php
    include $level."index__data.php";

    /*-------------------Delte ------------------*/
    if(isset($_GET["id_bill"])){
        $id_bill= $_GET["id_bill"];
        $sql__delete = "DELETE FROM bill WHERE id_bill = '$id_bill'";
        $bill__delete = $connect->prepare($sql__delete);
        $bill__delete -> execute();
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><code>BILL</code></h1>

<!-- Database Shoes Shop -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List of bill</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Bill</th>
                        <th>Customer</th>
                        <th>Date</th>
                        <th>Total Price</th>
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
                            <td><?php echo $level.$arr__bill["id_customer"]?></td>
                            <td><?php echo date("d-m-Y",strtotime( $level.$arr__bill["date"]))?></td>
                            <td><?php echo $level.$arr__bill["totalprice"]?></td>
                            <td><?php echo ($level.$arr__bill["status"])?"Active":"Inactive"?></td>
                            <td><a href="<?php echo $level."insert__bill"?>" class="btn btn-primary">Add</a></td>
                            <td><a href="#" class="btn btn-success">Edit</a></td>
                            <td><a href="bill.php?id_bill=<?php echo $level.$arr__bill["id_bill"]?>" class="btn btn-danger">Delete</a></td>   
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>