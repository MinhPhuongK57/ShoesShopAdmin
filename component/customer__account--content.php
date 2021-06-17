<?php
    include $level."index__data.php";

    /*-------------------Delte product type------------------*/
    if(isset($_GET["id_card"])){
        $id_card = $_GET["id_card"];
        $sql__delete = "DELETE FROM customer_account WHERE id_card = '$id_card'";
        $customer_account__delete = $connect->prepare($sql__delete);
        $customer_account__delete -> execute();
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><code>CUSTOMER ACCOUNT</code></h1>

<!-- Database Shoes Shop -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List of customer account</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                    <?php foreach ($list__cus_account_rowsdata as $arr__cusaccount) 
                    {
                    ?>
                        <tr>
                            <td style="width:180px"><?php echo $level.$arr__cusaccount["username"]?></td>
                            <td><?php echo $level.$arr__cusaccount["phonenum"]?></td>
                            <td><?php echo $level.$arr__cusaccount["id_card"]?></td>
                            <td><?php echo $level.$arr__cusaccount["email"]?></td>
                            <td><?php echo $level.$arr__cusaccount["address"]?></td>
                            <td><?php echo $level.$arr__cusaccount["password"]?></td>
                            <td><?php echo ($level.$arr__cusaccount["status"])?"Active":"Inactive"?></td>
                            <td><a href="<?php echo $level."insert__customeraccount.php"?>" class="btn btn-primary">Add</a></td>
                            <td><a href="edit__cusaccount.php?id_card=<?php echo $level.$arr__cusaccount["id_card"]?>" class="btn btn-success">Edit</a></td>
                            <td><a href="customer__account.php?id_card=<?php echo $level.$arr__cusaccount["id_card"]?>" class="btn btn-danger">Delete</a></td>   
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>