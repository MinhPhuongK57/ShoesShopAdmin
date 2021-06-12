<?php
    include $level."index__data.php";
?>
<?php
    //staff__login
    if(isset($_POST["email"]))
    { 
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';

        $SQL_staffemail = "SELECT email from staff where email = '$email' and password = '$password' ";
        $list__staffemail = $connect->prepare($SQL_staffemail);
        $list__staffemail -> execute();
        $list__staffemail_rowsdata = $list__staffemail ->fetchAll();
        // $id_staff = $list__staffemail_rowsdata[0][0];
        $emailtest = $list__staffemail_rowsdata[0][4];
        $passwordtest = $list__staffemail_rowsdata[0][7];
        if($email != "" && $password != "")
        {
            header("location:login.php");
        }
        else{
            header("location:index.php?email=$email");
        }
    }
?>
<?php
	// $id_staff = $list__staffemail_rowsdata[0][0];
					
    // if($id_staff !="")
    // {
    //     header("location:index.php?email=$id_staff");
    // }
    // else
    // {	
    //     header("location:login.php");
    // }	
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
                                        <input type="email" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address..." name="email" value="" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="password" value="" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck" required>
                                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                                        </div>
                                    </div>
                                    <hr>
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