<?php
    $level ="";
    $admin_name=isset($_COOKIE["admin_name"])?$_COOKIE["admin_name"]:""; 
?>
<!-- Footer -->
<footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Website Shoes Shop Administrator</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo $level."login.php"?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo $level.js__path."sb-admin-2.min.js"?>"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo $level.js__path."demo/chart-area-demo.js"?>"></script>
    <script src="<?php echo $level.js__path."demo/chart-pie-demo.js"?>"></script>
    <script src="<?php echo $level.js__path."demo/chart-bar-demo.js"?>"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script>
        $('#dataTable').DataTable(
            {
                "lengthMenu": [ 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 60, 65, 70, 75, 80, 85, 90, 95, 100]
            }
        );
    </script>




    <!--Sweet Alert-->
    <script src="<?php echo $level.js__path."sweetalert.min.js"?>"></script>
    <!-- <script>
        swal("Good job!", "You success to login!", "success");
    </script> -->
    <!-- <script>
        function validation(){
            var admin_name = $_SESSION['admin_name'];
            var password = $_SESSION['password'];

            var admin_Name = document.getElementById('admin_name').value;
            var passWord = document.getElementById('password').value;
            
            if((admin_name == admin_Name) && (password == passWord))
            {
                swal("Good job!", "You success to login!", "success");
                header("location:index.php");
            }
            else{
                sweetalert("Oops...!", "Adminname and password was wrong!", "error");
                header("location:login.php");
            }
        }
    </script> -->
</body>

</html>