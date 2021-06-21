<?php
    $level = "";
    include $level."index__data.php";
    if(isset($_POST['bill_code']) )
    {
        $bill_code = $_POST['bill_code'];
        $date = $_POST['date'];
        $id_customer = $_POST['id_customer'];
        $totalprice = $_POST['totalprice'];
        $status = $_POST['status'];
        
        /*-------------------Insert product------------------*/
        $sql__insert__bill = "INSERT INTO bill(bill_code,date, id_customer, totalprice, status) 
        VALUES('$bill_code','$date','$id_customer','$totalprice',$status)";
        $product__insert__bill = $connect->prepare($sql__insert__bill);
        $product__insert__bill -> execute();
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><code>INSERT BILL</code></h1>

<!-- Database Shoes Shop -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add new bill</h6>
    </div>
    <div class="card-body">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="<?php echo $level."bill.php"?>" class="btn btn-primary" type="button">Back to bill</a>
        </div>
        <form action="" method="post" class="row g-3 needs-validation" enctype="multipart/form-data" validate>
            <!-- <div class="col-md-4 p-4">
                <label for="username" class="form-label">Bill</label>
                <input type="text" class="form-control" id="validationCustom01" name="id_bill" value="" placeholder="Enter bill" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div> -->
            <div class="col-md-4 p-4">
                <label for="username" class="form-label">Bill Code</label>
                <input type="text" class="form-control" id="validationCustom01" name="bill_code" value="" placeholder="Enter bill code" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>

            <div class="col-md-4 p-4">
                <label for="validationCustom05" class="form-label">Customer</label>
                <input type="text" min = "0" max="150"class="form-control" id="validationCustom05" name="id_customer" value="" placeholder="Enter ID customer" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-3 p-4">
                <label for="validationCustom02" class="form-label" data-provide="datepicker" data-date-format="dd/mm/yyyy">Date</label>
                <input type="date" class="form-control" id="validationCustom02" name="date" value="" placeholder="Enter date"  autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-2 p-4">
                <label for="validationCustom06" class="form-label">Total Price</label>
                <input type="text" class="form-control" id="validationCustom06" name="totalprice" value="" placeholder="Enter total price" autocomplete="off" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-2 p-4">
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