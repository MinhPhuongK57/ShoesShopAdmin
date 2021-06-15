<?php
    ob_start();
    session_start();
    $level = "";
    include $level."DB/database.php";

    if(isset($_POST['login']))
    {
        
        $admin_name = $_POST['admin_name'];
        $password = $_POST['password'];

        //TẠO COOKIE
        if(isset($_POST['remember']))
        {
            //tạo cookie trong 3 ngày cho 1 tài khoản
            setcookie("admin_name",$admin_name,time() + (3600 * 3), "/");
            setcookie("password",$_POST['password'],time() + (3600 * 3), "/"); //86400 =  1 day
        }
        else{
            setcookie("admin_name",$admin_name,time() - (3600 * 3), "/"); 
            setcookie("password",$password,time() - (3600 * 3), "/"); 
        }

        $SQL_admin_name = "SELECT * from account__admin where admin_name = '$admin_name' and password = '$password' ";
        $list__admin_name = $connect->prepare($SQL_admin_name);
        $list__admin_name -> execute();
        $list__admin_name_rowsdata = $list__admin_name ->fetchAll();
        
        if(count($list__admin_name_rowsdata))
        {
            $_SESSION["login"] = $list__admin_name_rowsdata;
            header("location:index.php");
        }
    }
    
    //COOKIE
    $admin_name = "";
    $password= "";
    $check = false; //Check cookie remember me
    if(isset($_COOKIE["admin_name"]) && isset($_COOKIE["password"]))
    {
        $admin_name = $_COOKIE["admin_name"];
        $password = $_COOKIE["password"];
        $check = true;
    }
?>
<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                <form action="" method="post" class="user g-3 needs-validation" enctype="multipart/form-data" validate>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Enter Admin Name..." name="admin_name"  value="<?php echo $admin_name?>"  required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="password" value="<?php echo $password?>" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input <?php echo ($check)?"checked":""?> type="checkbox" class="custom-control-input"  name="remember" value="1" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <button type = "submit" name="login" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo $level."forgot-password.php"?>">Forgot Password?</a>
                                    </div>
                                    <!-- <a href="index.php" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                    </a>
                                    <a href="index.php" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                    </a> -->
                                </form>
                                <!-- <div class="text-center">
                                    <a class="small" href="<?php echo $level."register.php"?>">Create an Account!</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>