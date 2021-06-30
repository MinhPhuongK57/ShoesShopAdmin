	<!--- start-content---->
	<?php
    // $level = "";
    // include $level."DB/database.php";
    // $err = [];
    // if(isset($_POST['fullname']) )
    // {
    // 	$fullname = $_POST['fullname'];
    // 	$phonenum = $_POST['phonenum'];
    // 	$id_card = $_POST['id_card'];
    // 	$email = $_POST['email'];
    // 	$address = $_POST['address'];
    // 	$password = $_POST['password'];
    // 	$cpassword = $_POST['cpassword'];
    // 	if(empty($fullname))
    // 	{
    // 		$err['fullname'] = "Please enter your name";	
    // 	}
    // 	if(empty($phonenum))
    // 	{
    // 		$err['phonenum'] = "Please enter your phone number";	
    // 	}
    // 	if(empty($id_card))
    // 	{
    // 		$err['id_card'] = "Please enter your ID Card";	
    // 	}
    // 	if(empty($email))
    // 	{
    // 		$err['email'] = "Please enter your email";	

    // 	}
    // 	if(empty($address))
    // 	{
    // 		$err['address'] = "Please enter your address";	
    // 	}
    // 	if(empty($password))
    // 	{
    // 		$err['password'] = "Please enter your password";	
    // 	}
    // 	if(empty($cpassword))
    // 	{
    // 		$err['cpassword'] = "Please enter your confirm password";	
    // 	}
    // 	if($password != $cpassword)
    // 	{
    // 		$err['fullname'] = "Please check your confirm password";	
    // 	}
    // 	if(empty($err))
    // 	{
    // 		$a = "insert into customer_account value(N'$fullname','$phonenum','$id_card','$email','$address','$password', 0)";
    // 		$account_customer = $connect->prepare($a);
    // 		$account_customer -> execute();
    // 	}

    // }

    ?>

	<body class="bg-gradient-primary">

	    <div class="container">

	        <div class="card o-hidden border-0 shadow-lg my-5">
	            <div class="card-body p-0">
	                <!-- Nested Row within Card Body -->
	                <div class="row">
	                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
	                    <div class="col-lg-7">
	                        <div class="p-5">
	                            <div class="text-center">
	                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
	                            </div>
	                            <form action="" method="post" class="user g-3 needs-validation" enctype="multipart/form-data" validate>
	                                <div class="form-group">
	                                    <input type="text" class="form-control form-control-user" name="fullname" id="exampleFirstName" placeholder="Full name" autocomplete="off" required>
	                                </div>
	                                <div class="form-group">
	                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" autocomplete="off" required>
	                                </div>
	                                <div class="form-group row">
	                                    <div class="col-sm-6 mb-3 mb-sm-0">
	                                        <input type="text" class="form-control form-control-user" id="exampleInputPhoneNumber" placeholder="Phone Number" pattern="0.9}" autocomplete="off" required>
	                                    </div>
	                                    <div class="col-sm-6">
	                                        <input type="text" class="form-control form-control-user" id="exampleInputAddress" placeholder="Address" autocomplete="off" required>
	                                    </div>
	                                </div>
	                                <div class="form-group row">
	                                    <div class="col-sm-6 mb-3 mb-sm-0">
	                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" autocomplete="off" required>
	                                    </div>
	                                    <div class="col-sm-6">
	                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" autocomplete="off" required>
	                                    </div>
	                                </div>
	                                <button type="submit" href="login.php" class="btn btn-primary btn-user btn-block" onclick=click();>
	                                    Register Account
	                                </button>
	                                <hr>
	                                <a href="#" class="btn btn-google btn-user btn-block">
	                                    <i class="fab fa-google fa-fw"></i> Register with Google
	                                </a>
	                                <a href="#" class="btn btn-facebook btn-user btn-block">
	                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
	                                </a>
	                            </form>
	                            <hr>
	                            <div class="text-center">
	                                <a class="small" href="<?php echo $level . "forgot-password.php" ?>">Forgot Password?</a>
	                            </div>
	                            <div class="text-center">
	                                <a class="small" href="<?php echo $level . "login.php" ?>">Already have an account? Login!</a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>

	    </div>