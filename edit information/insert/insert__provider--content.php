<?php
    $level = "";
    include $level."index__data.php";
    if(isset($_POST['id_provider']) )
    {
        $id_provider = $_POST['id_provider'];
        $providername = $_POST['providername'];
        $id_card = $_POST['id_card'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $status = $_POST['status'];
        
        /*-------------------Insert product------------------*/
        $sql__insert__provider = "INSERT INTO provider VALUES('$id_provider','$providername',$id_card,'$email','$address',$status)";
        $product__insert__provider = $connect->prepare($sql__insert__provider);
        $product__insert__provider -> execute();
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid pt-2">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><code>INSERT PROVIDER</code></h1>

<!-- Database Shoes Shop -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add new provider</h6>
    </div>
    <div class="card-body">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="<?php echo $level."provider.php"?>" class="btn btn-primary" type="button">Back to provider</a>
        </div>
        <form action="" method="post" class="row g-3 needs-validation" enctype="multipart/form-data" validate>
            <div class="col-md-3 p-4">
                <label for="username" class="form-label">Provider</label>
                <input type="text" class="form-control" id="validationCustom01" name="id_provider" value="" placeholder="Enter provider" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-3 p-4">
                <label for="validationCustom02" class="form-label">Provider Name</label>
                <input type="text" class="form-control" id="validationCustom02" name="providername" value="" placeholder="Enter provider name" autocomplete="off" required>
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
                <label for="validationCustom08" class="form-label">Status</label>
                <input type="number" min="0" max="1" class="form-control" id="validationCustom08" name="status" value="" placeholder="Choose status" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-12 p-2 pl-4">
                <button class="btn btn-primary" type="submit" id="fun" onclick=click();>Insert</button>
            </div>
        </form>  
        
    </div>
</div>