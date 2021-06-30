        <?php
        $admin_name = isset($_COOKIE["admin_name"]) ? $_COOKIE["admin_name"] : "Administrator";
        ?>
        <?php
        $level = "";
        include $level . "index__data.php";
        // include $level."search__data.php";
        //COUNT FEEDBACK

        $sql__totalfeedback = $connect->query("select count(id_feedback) from feedback where status = '0'")->fetchColumn();
        $sql__totalcusaccount = $connect->query("select count(id_card) from customer_account where status = '0'")->fetchColumn();
        ?>
        <?php
        $format = 'Y-m-d H:i';
        $sql__fee = "SELECT * from feedback where status = '0'";
        $list__feedback = $connect->prepare($sql__fee);
        $list__feedback->execute();
        $list__feedback_show = $list__feedback->fetchAll();


        $sql__cus = "SELECT * from customer_account where status = '0'";
        $list__cusacc = $connect->prepare($sql__cus);
        $list__cusacc->execute();
        $list__cusacc_show = $list__cusacc->fetchAll();

        ?>
        <?php
        //Show
        // if(isset($_GET["id_product"]))
        // {
        //     $id_product = $_GET["id_product"];
        //     $sql__select = "SELECT username from customer__account,feedback where feedback.id_product = custome'$id_product'";
        //     $list__feedback_name = $connect->prepare($sql__select);
        //     $list__feedback_name -> execute();
        //     $list__feedback_name_rowsdata = $list__feedback_name ->fetchAll();
        //     var_dump($list__feedback_name_rowsdata);
        //     die();
        // }
        ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <h1 class="h3 mb-0 text-gray-800 ml-2"><code>ADMINISTRATOR</code></h1>

                    <!-- Topbar Search -->
                    <!-- <form action="product.php" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" 
                    enctype="multipart/form-data">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" name="search__data" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2" value="">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" name="submit" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->


                    <!-- Modal -->
                    <!-- Popup-->
                    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                    </div> -->
                    <!-- Modal -->


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto mr-2">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">
                                    <?php
                                    if ($sql__totalcusaccount) {
                                        echo $sql__totalcusaccount;
                                    } else {
                                        echo "";
                                    }
                                    ?>
                                </span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Notification Center
                                </h6>
                                <div style="height:242px;overflow-y:auto">
                                    <?php foreach ($list__cusacc_show as $row__cus) { ?>
                                        <a class="dropdown-item d-flex align-items-center" href="edit__cusaccount.php?id_card=<?php echo $row__cus['id_card'] ?>">
                                            <div class="dropdown-list-image mr-2">
                                                <img class="rounded-circle" src="<?php echo $level . img__path . "undraw_profile_2.svg" ?>" alt="...">
                                                <div class="status-indicator bg-success"></div>
                                            </div>
                                            <div>
                                                <div class="font-weight-bold text-gray-600"><?php echo $level . $row__cus['username'] ?></div>
                                                <div class="small">Account register</div>
                                                <span class="small text-gray-600">Email: <?php echo $level . $row__cus['email'] ?></span>
                                            </div>
                                        </a>
                                    <?php } ?>
                                </div>
                                <a class="dropdown-item text-center small text-gray-500" href="<?php echo $level . "customer__account.php" ?>">Show notification details</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">
                                    <?php
                                    if ($sql__totalfeedback) {
                                        echo $sql__totalfeedback;
                                    } else {
                                        echo "";
                                    }
                                    ?>
                                </span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <div style="height:235px;overflow-y:auto">
                                    <?php foreach ($list__feedback_show as $select) { ?>
                                        <a class="dropdown-item d-flex align-items-center" href="edit__feedback.php?id_feedback=<?php echo $select['id_feedback'] ?>">
                                            <div class="dropdown-list-image mr-2">
                                                <img class="rounded-circle" src="<?php echo $level . img__path . "undraw_profile_2.svg" ?>" alt="...">
                                                <div class="status-indicator bg-success"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><?php echo $level . $select['description'] ?></div>
                                                <div class="small text-gray-500">
                                                    <?php echo $level . $select['email'] ?>
                                                    <em class="ml-4"><?php echo date("d/m/Y H:i:s", strtotime($level . $select["date"])) ?></em>
                                                </div>
                                            </div>
                                        </a>
                                    <?php } ?>
                                </div>
                                <!-- <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a> -->
                                <a class="dropdown-item text-center small text-gray-500" href="<?php echo $level . "feedback.php" ?>">Show comment details</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <!--Echo email-->
                                    <?php
                                    echo strtoupper($admin_name);
                                    ?>
                                </span>
                                <img class="img-profile rounded-circle" src="<?php echo $level . img__path . "undraw_profile.svg" ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="information__admin.php?Admin = <?php echo $admin_name ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="admin__account.php?Admin = <?php echo $admin_name ?>">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo $level . "logout.php" ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->