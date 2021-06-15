<?php
    $level = "";
    include $level."DB/database.php";
    $admin_name=isset($_COOKIE["admin_name"])?$_COOKIE["admin_name"]:"Administrator"; 
    if(isset($_POST['admin_name']) )
    {
        $admin= $_POST['admin_name'];
        $email= $_POST['email'];
        $phonenum = $_POST['phonenum'];
        $password = $_POST['password'];
        
        /*-------------------Insert product------------------*/
        $sql__adminupdate = "UPDATE account__admin SET admin_name = '$admin', email = N'$email', phonenum = '$phonenum', password = '$password' WHERE admin_name = '$admin_name'";
        $admin__account = $connect->prepare($sql__adminupdate);
        $admin__account -> execute();
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><code>EDIT ACCOUNT ADMIN</code></h1>

<!-- Database Shoes Shop -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Admin Information</h6>
    </div>
    <div class="card-body">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="index.php?<?php echo $admin_name?>" class="btn btn-primary" type="button">Back Home</a>
        </div>
        <form action="" method="post" class="row g-3 needs-validation" enctype="multipart/form-data" validate>
            <div class="col-md-3 p-4">
                <label for="validationCustom02" class="form-label">Admin Name</label>
                <input type="text" class="form-control" id="validationCustom02" name="admin_name" value="" placeholder="Enter your email"  required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-3 p-4">
                <label for="validationCustom02" class="form-label">Email</label>
                <input type="email" class="form-control" id="validationCustom02" name="email" value="" placeholder="Enter your email"  required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>

            <div class="col-md-3 p-4">
                <label for="validationCustom05" class="form-label">Phone Number</label>
                <input type="text" min = "0" max="20"class="form-control" id="validationCustom03" name="phonenum" value="" placeholder="Enter your phone number" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-3 p-4">
                <label for="validationCustom06" class="form-label">Password</label>
                <input type="text" class="form-control" id="validationCustom04" name="password" value="" placeholder="Enter your address" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
            <div class="col-12 p-2">
                <button class="btn btn-primary" type="submit" name="update" value = " update account" id="fun" onclick=click();>Update account</button>
            </div>
        </form> 
    </div>
</div>