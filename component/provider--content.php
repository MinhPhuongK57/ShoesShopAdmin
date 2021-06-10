<?php
    include $level."index__data.php"
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><code>PROVIDER</code></h1>

<!-- Database Shoes Shop -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List of provider</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                    <?php foreach ($list__provider_rowsdata as $arr__provider) 
                    {
                    ?>
                        <tr>
                            <td><?php echo $level.$arr__provider["id_provider"]?></td>
                            <td><?php echo $level.$arr__provider["providername"]?></td>
                            <td><?php echo $level.$arr__provider["id_card"]?></td>
                            <td><?php echo $level.$arr__provider["email"]?></td>
                            <td><?php echo $level.$arr__provider["address"]?></td>
                            <td><?php echo ($level.$arr__provider["status"])?"Active":"Inactive"?></td>
                            <td><a href="<?php echo $level."insert__provider"?>" class="btn btn-primary">Add</a></td>
                            <td><a href="#" class="btn btn-success">Edit</a></td>
                            <td><a href="#" class="btn btn-danger">Delete</a></td>   
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>