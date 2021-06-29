<?php
    $level = "";
    include $level."index__data.php";
    $admin_name=isset($_COOKIE["admin_name"])?$_COOKIE["admin_name"]:""; 
    //staff
    $SQL_select__admin= "SELECT * from account__admin where admin_name = '$admin_name'";
    $list__admin__show= $connect->prepare($SQL_select__admin);
    $list__admin__show -> execute();
    $list__admin__show_rowsdata = $list__admin__show ->fetchAll();
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><code>INFORMATION ADMIN</code></h1>

<!-- Database Shoes Shop -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Admin Information List</h6>
    </div>
    <div class="card-body">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="index.php?<?php echo $admin_name?>" class="btn btn-primary" type="button">Back Home</a>
            </div>
        <?php foreach ($list__admin__show_rowsdata as $list__admin) {?>
        <form action="admin__account.php?<?php echo $admin_name?>" method="post" class="row g-3 needs-validation" enctype="multipart/form-data" validate>
            <div class="col-md-3 p-4">
                <label for="username" class="form-label">Admin Name</label>
                <input type="text" class="form-control" id="validationCustom01" name="admin_name" value="<?php echo $list__admin["admin_name"]?>" disabled>
            </div>
            <div class="col-md-3 p-4">
                <label for="validationCustom02" class="form-label">Email</label>
                <input type="text" class="form-control" id="validationCustom02" name="email" value="<?php echo $list__admin["email"]?>" disabled>
            </div>
            <div class="col-md-3 p-4">
                <label for="validationCustom02" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="validationCustom02" name="phonenum" value="<?php echo $list__admin["phonenum"]?>" disabled>
            </div>

            <div class="col-md-3 p-4">
                <label for="validationCustom05" class="form-label">Password</label>
                <input type="text" min = "0" max="150"class="form-control" id="validationCustom05" name="password" value="<?php echo $list__admin["password"]?>" disabled>
            </div>
            <div class="col-12 p-2 m-3">
                <button class="btn btn-primary" type="submit" value="Update" name="update" id="fun" onclick=click();>EDIT ACCOUNT</button>
            </div>
        </form>  
        <?php }?>
    </div>
</div>