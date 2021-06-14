<?php
    $level = "";
    include $level."DB/database.php";
    $email=isset($_COOKIE["email"]) ? $_COOKIE["email"] : "Admin"; 
    //staff__account
    // $SQL_staff_account= "SELECT * from staff where email = $email";
    // $list__staffaccount= $connect->prepare($SQL_staff_account);
    // $list__staffaccount -> execute();
    // $list__staffaccount_rowsdata = $list__staffaccount ->fetchAll();
    if(isset($_POST['staffname']) )
    {
        $staffname = $_POST['staffname'];
        $phonenum = $_POST['phonenum'];
        $email__staff= $_POST['email'];
        $address = $_POST['address'];
        
        /*-------------------Insert product------------------*/
        $sql__staffupdate = "UPDATE staff SET staffname = N'$staffname', phonenum = '$phonenum', email = '$email__staff' , address = N'$address' WHERE  email = '$email'";
        $staff__account = $connect->prepare($sql__staffupdate);
        $staff__account -> execute();
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><code>EDIT ACCOUNT STAFF</code></h1>

<!-- Database Shoes Shop -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Staff Information</h6>
    </div>
    <div class="card-body">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="<?php echo $level."index.php"?>" class="btn btn-primary" type="button">Back Home</a>
        </div>
        <form action="" method="post" class="row g-3 needs-validation" enctype="multipart/form-data" validate>
            <div class="col-md-3 p-4">
                <label for="validationCustom01" class="form-label">Staff name</label>
                <input type="text" class="form-control" id="validationCustom01" name="staffname" value="" placeholder="Enter your name" required>
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
                <label for="validationCustom06" class="form-label">Address</label>
                <input type="text" class="form-control" id="validationCustom04" name="address" value="" placeholder="Enter your address" required>
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
                <button class="btn btn-primary" type="submit" value = " update account" id="fun" onclick=click();>Update account</button>
            </div>
        </form> 
    </div>
</div>