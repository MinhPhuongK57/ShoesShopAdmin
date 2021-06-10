<?php
    include $level."index__data.php";

    /*-------------------Delte staff------------------*/
    if(isset($_GET["id_staff"])){
        $id_staff = $_GET["id_staff"];
        $sql__delete = "DELETE FROM staff WHERE id_staff = '$id_staff'";
        $staff__delete = $connect->prepare($sql__delete);
        $staff__delete -> execute();
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><code>STAFF</code></h1>

<!-- Database Shoes Shop -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List of staff</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID Staff</th>
                        <th>Staff Name</th>
                        <th>Salary</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th style="border-right:none"></th>
                        <th style="border-left:none;border-right:none"></th>
                        <th style="border-left:none;"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list__staff_rowsdata as $arr__staff) 
                    {
                    ?>
                        <tr>
                            <td><?php echo $level.$arr__staff["id_staff"]?></td>
                            <td><?php echo $level.$arr__staff["staffname"]?></td>
                            <td><?php echo $level.$arr__staff["salary"]?></td>
                            <td><?php echo $level.$arr__staff["phonenum"]?></td>
                            <td><?php echo $level.$arr__staff["email"]?></td>
                            <td><?php echo $level.$arr__staff["address"]?></td>
                            <td><a href="<?php echo $level."insert__staff"?>" class="btn btn-primary">Add</a></td>
                            <td><a href="#" class="btn btn-success">Edit</a></td>
                            <td><a href="staff.php?id_staff=<?php echo $level.$arr__staff["id_staff"]?>" class="btn btn-danger">Delete</a></td>   
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>