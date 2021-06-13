<?php
     $level ="";
?>
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo $level."index.php"?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ShoesShop<sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo $level."index.php"?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home page</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                function managment
            </div>

            <!--Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">The main components :</h6>
                        <a class="collapse-item" href="product.php">Product</a>
                        <a class="collapse-item" href="product__type.php">Product Type</a>
                        <a class="collapse-item" href="customer__account.php">Customer Account</a>
                        <a class="collapse-item" href="staff.php">Staff</a>
                        <a class="collapse-item" href="provider.php">Provider</a>
                        <a class="collapse-item" href="bill.php">Bill</a>
                        <a class="collapse-item" href="billdetail.php">Bill Detail</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

            <!-- Heading
            <div class="sidebar-heading">
                Addons
            </div> -->

            <!-- Nav Item - Pages Collapse Menu
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Accounts</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.php">Login</a> -->
                        <!-- <a class="collapse-item" href="register.php">Register</a> -->
                        <!-- <a class="collapse-item" href="forgot-password.php">Forgot Password</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li> -->

            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Other Pages
            </div>
            <!--Other pages-->
            <li class="nav-item active">
                <a class="nav-link collapsed"  href="<?php echo $level."Infopage.php" ?>">
                    <i class="fas fa-fw fa-info"></i>
                    <span>Infomation Page</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>Website Shoes Shop</strong> </br>Visit your Website</p>
                <a class="btn btn-success btn-sm" href="http://localhost/Website%20Shoes%20Shop/index.php">Shoes Shop Administrator</a>
            </div>

        </ul>
        <!-- End of Sidebar -->