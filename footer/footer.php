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
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
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
                "lengthMenu": [ 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 60, 65, 70, 75, 80, 85, 90, 95, 100],
                selectTable: true,
                language: {
                    search :'Enter Search Data',
                    searchPlaceholder: "Search....."    
                },
            }
        );
        
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src=<?php echo $level.js__path."jquery-3.6.0.min.js";?>></script>
    <!--Sweet Alert-->
    <!--Xử lý popup-->
    <script src="<?php echo $level.js__path."sweetalert.min.js"?>"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

        //Popup question delete product
        $('.btn-del').on('click',function(e){
            e.preventDefault();
            const href = $(this).attr('href')
            Swal.fire({
                icon: 'warning',
                title: 'Are you sure you want to delete this?',
                text: 'Your product will be removed from stock..!',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#4e73df',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Delete it',
            }).then((result) => {
                if(result.value){
                    document.location.href = href;
                }
            })
        });

        //Alert delete successfully
        const flashdata = $('.flash-data').data('flashdata')
        if(flashdata){
            Swal.fire({
                icon: 'success',
                type: 'success',
                title: 'Deleted',
                text: 'Successful delete..!'
            })
        }

        //Show popup top-right
        // const Toast = Swal.mixin({
        // toast: true,
        // position: 'top-end',
        // showConfirmButton: false,
        // timer: 2000,
        // timerProgressBar: true,
        // didOpen: (toast) => {
        //     toast.addEventListener('mouseenter', Swal.stopTimer)
        //     toast.addEventListener('mouseleave', Swal.resumeTimer)
        // }
        // })

        // Toast.fire({
        // icon: 'success',
        // title: 'Hello Administrator'
        // })
        

    </script>

</body>

</html>