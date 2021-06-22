<?php
    $level = "";
    include $level."index__data.php";

    $id = $_GET["id_feedback"];
    if(isset($_POST['description']) )
    {
        $description = $_POST['description'];
        
        /*-------------------Update Customer Account------------------*/
        $sql__update__feedback = "UPDATE feedback SET description = '$description' WHERE id_feedback = '$id'";
        $update__feedback = $connect->prepare($sql__update__feedback);
        $update__feedback -> execute();
        header("location:feedback.php");
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid pt-2">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><code>UPDATE FEEDBACK</code></h1>

<!-- Database Shoes Shop -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List information feedback</h6>
    </div>
    <div class="card-body">
        <?php foreach($list__feedback_select_rowsdata as $row) {?>
        <form action="" method="post" class="row g-3 needs-validation" enctype="multipart/form-data" validate>
            <div class="col-md-2 p-4">
                <label for="username" class="form-label">Feedback</label>
                <input type="text" class="form-control" id="validationCustom01" name="id_feedback" value="<?php echo $id ?>" placeholder="" autocomplete="off" readonly>
            </div>
            <div class="col-md-2 p-4">
                <label for="validationCustom02" class="form-label">Product</label>
                <input type="text" class="form-control" id="validationCustom02" name="id_product" value="<?php echo $row['id_product']?>" placeholder="" autocomplete="off" readonly>
            </div>
            <div class="col-md-2 p-4">
                <label for="validationCustom05" class="form-label">Date</label>
                <input type="date" class="form-control" id="validationCustom05" name="date" value="<?php echo $row['date']?>" placeholder="" autocomplete="off" readonly>
            </div>
            <div class="col-md-2 p-4">
                <label for="validationCustom05" class="form-label">Status</label>
                <input type="number" class="form-control" id="validationCustom05" name="status" value="<?php echo $row['status']?>" placeholder="" autocomplete="off" readonly>
            </div>
            <div class="col-md-4 p-4">
                <label for="validationCustom02" class="form-label">Email</label>
                <input type="email" class="form-control" id="validationCustom02" name="email" value="<?php echo $row['email']?>" placeholder="" autocomplete="off" readonly>
            </div>
            <div class="col-md-12 p-4 mb-2">
                <label for="validationCustom06" class="form-label">Description</label>
                <input type="text" class="form-control" id="validationCustom06" style="height:70px;"  name="description" value="<?php echo $row['description']?>" placeholder="" autocomplete="off" required>
            </div>
            <div class="col-12 p-2 pl-4">
                <button class="btn btn-primary" type="submit" id="fun" onclick=click();>Update</button>
            </div>
        </form>  
        <?php } ?>
        
    </div>
</div>