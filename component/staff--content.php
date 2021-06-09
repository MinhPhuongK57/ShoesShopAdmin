<?php
    include $level."index__data.php"
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
                    <?php foreach ($list__staff_rowsdata as $arrstaff) 
                    {
                    ?>
                        <tr>
                            <td><?php echo $level.$arrstaff["id_staff"]?></td>
                            <td><?php echo $level.$arrstaff["staffname"]?></td>
                            <td><?php echo $level.$arrstaff["salary"]?></td>
                            <td><?php echo $level.$arrstaff["phonenum"]?></td>
                            <td><?php echo $level.$arrstaff["email"]?></td>
                            <td><?php echo $level.$arrstaff["address"]?></td>
                            <td><a href="<?php echo $level."insert__staff"?>" class="btn btn-primary">Add</a></td>
                            <td><a href="#" class="btn btn-success">Edit</a></td>
                            <td><a href="#" class="btn btn-danger">Delete</a></td>   
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>