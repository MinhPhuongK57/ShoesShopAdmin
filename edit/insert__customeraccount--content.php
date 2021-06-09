<?php
    $level = "";
    include $level."index__data.php";
    if(isset($_POST['username']) )
    {
        $username = $_POST['username'];
        $phonenum = $_POST['phonenum'];
        $id_card = $_POST['id_card'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $status = $_POST['status'];
        
        /*-------------------Insert product------------------*/
        $sql__insert__customeraccount = "INSERT INTO customer_account VALUES('$username',$phonenum,'$id_card','$email','$address','$password',$status)";
        $product__insert__customeraccount = $connect->prepare($sql__insert__customeraccount);
        $product__insert__customeraccount -> execute();
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><code>INSERT CUSTOMER ACCOUNT</code></h1>

<!-- Database Shoes Shop -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add new customer account</h6>
    </div>
    <div class="card-body">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="<?php echo $level."customer__account.php"?>" class="btn btn-primary" type="button">Back to customer account</a>
        </div>
        <form action="" method="post" class="row g-3 needs-validation" enctype="multipart/form-data" validate>
            <div class="col-md-3 p-4">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="validationCustom01" name="username" value="" placeholder="Enter your username" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-3 p-4">
                <label for="validationCustom02" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="validationCustom02" name="phonenum" value="" placeholder="Enter your phone number" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-3 p-4">
                <label for="validationCustom02" class="form-label">ID Card</label>
                <input type="text" class="form-control" id="validationCustom02" name="id_card" value="" placeholder="Enter your ID card" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>

            <div class="col-md-3 p-4">
                <label for="validationCustom05" class="form-label">Email</label>
                <input type="email" min = "0" max="150"class="form-control" id="validationCustom05" name="email" value="" placeholder="Enter your email" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-3 p-4">
                <label for="validationCustom06" class="form-label">Address</label>
                <input type="text" class="form-control" id="validationCustom06" name="address" value="" placeholder="Enter your address" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-3 p-4">
                <label for="pass" class="form-label">Password</label>
                <input type="text" minlength="7" maxlength="12" class="form-control" id="validationCustom08" name="password" placeholder="Enter your password" value="" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-3 p-4">
                <label for="validationCustom08" class="form-label">Status</label>
                <input type="number" min="0" max="1" class="form-control" id="validationCustom08" name="status" value="" placeholder="Choose status" required>
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
                <button class="btn btn-primary" type="submit" id="fun" onclick=click();>Insert</button>
            </div>
        </form>  
        
    </div>
</div>