<?php
    $level = "";
    include $level."index__data.php";

    $id = $_GET["id_card"];
    if(isset($_POST['username']) )
    {
        $username = $_POST['username'];
        $phonenum = $_POST['phonenum'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $status = $_POST['status'];
        
        /*-------------------Update Customer Account------------------*/
        $sql__update__customeraccount = "UPDATE customer_account SET username = '$username',phonenum = '$phonenum',email = '$email',address = '$address',
        password = '$password',status = '$status' WHERE id_card = '$id'";
        $update__customeraccount = $connect->prepare($sql__update__customeraccount);
        $update__customeraccount -> execute();
        header("location:customer__account.php");
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid pt-2">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><code>UPDATE CUSTOMER ACCOUNT</code></h1>

<!-- Database Shoes Shop -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List information customer account</h6>
    </div>
    <div class="card-body">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="<?php echo $level."customer__account.php"?>" class="btn btn-primary" type="button">Back to customer account</a>
        </div>
        <?php foreach($list__cusaccount_select_rowsdata as $row) {?>
        <form action="" method="post" class="row g-3 needs-validation" enctype="multipart/form-data" validate>
            <div class="col-md-3 p-4">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="validationCustom01" name="username" value="<?php echo $row['username']?>" placeholder="Enter your username" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-3 p-4">
                <label for="validationCustom02" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="validationCustom02" name="phonenum" value="<?php echo $row['phonenum']?>" placeholder="Enter your phone number" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-3 p-4">
                <label for="validationCustom02" class="form-label">ID Card</label>
                <input type="text" class="form-control" id="validationCustom02" name="id_card" value="<?php echo $row['id_card']?>" placeholder="Enter your ID card" autocomplete="off" required readonly>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>

            <div class="col-md-3 p-4">
                <label for="validationCustom05" class="form-label">Email</label>
                <input type="email" min = "0" max="150"class="form-control" id="validationCustom05" name="email" value="<?php echo $row['email']?>" placeholder="Enter your email" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-3 p-4">
                <label for="validationCustom06" class="form-label">Address</label>
                <input type="text" class="form-control" id="validationCustom06" name="address" value="<?php echo $row['address']?>" placeholder="Enter your address" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-3 p-4">
                <label for="pass" class="form-label">Password</label>
                <input type="text" minlength="7" maxlength="12" class="form-control" id="validationCustom08" value="<?php echo $row['password']?>" name="password" placeholder="Enter your password" value="" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-3 p-4">
                <label for="validationCustom08" class="form-label">Status</label>
                <input type="number" min="1" max="2" class="form-control" id="validationCustom08" name="status" value="<?php echo $row['status']?>" placeholder="Choose status" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-12 p-2 pl-4">
                <button class="btn btn-primary" type="submit" id="fun" onclick=click();>Update</button>
            </div>
        </form>  
        <?php } ?>
        
    </div>
</div>