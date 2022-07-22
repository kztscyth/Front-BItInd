@extends('layouts.dashmain')

@section('container')
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #51A9FC">
            <!-- Nav Item - User Information -->
            <li class="nav-item">
                <a class="nav-link">
                    <img class="img-profile rounded-circle" src="undraw_profile.svg">
                    <span>ADMIN</span>
                    <a class="nav-link collapsed" href="#" data-toggle="modal" data-target="#logoutModal"
                        data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true"
                        aria-controls="collapseUtilities">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-white-400"></i>
                    </a>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1"
                    aria-expanded="true" aria-controls="collapseUtilities" id="Order">
                    <i class="fas fa-fw fa-file-code"></i>
                    <span>Order</span>
                </a>
                <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="halamanadmin.html">Payment</a>
                        <a class="collapse-item" href="halamanorder.html">Order</a>
                        <a class="collapse-item" href="halamanuser.html">User</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Landing Page Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-file-code"></i>
                    <span>Landing Page</span>
                </a>
                <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="">Package</a>
                    </div>
                </div>
            </li>
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card border-12 shadow rounded-3 my-5">
                            <div class="card-body p-12 p-sm-12">
                                <!-- Main Content -->
                                <div id="content">
                                    <!-- Begin Page Content -->
                                    <div class="d-sm align-items-center justify-content-between mb-4">
                                        <h1 class="h3 mb-0 text-gray-800 text-center">HALAMAN REVISI</h1>
                                    </div>
                                    <!-- Content Row -->
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 mb-4">
                                            <div class="card shadow h-100 p-5" style="background-color: #51A9FC">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div
                                                                class="text-md font-weight-bold text-white text-uppercase mb-1">
                                                                User Data
                                                            </div>
                                                            <br>
                                                            <p class="text-white">Username : Anton</p>
                                                            <p class="text-white">Order Date : 11 June 2022</p>
                                                            <p class="text-white">Package : Water Package</p>
                                                            <div class="d-flex btn-toolbar mx-auto" role="toolbar"
                                                                aria-label="Toolbar with button groups">
                                                                <p class="text-white my-auto">Status Order : </p>&nbsp;
                                                                <div class="dropdown">
                                                                    <button class="btn btn-light dropdown-toggle"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="true">
                                                                        Status
                                                                    </button>
                                                                    <ul class="dropdown-menu drop-out">
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Preferred</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Building</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Revision</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Finished</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Earnings (Monthly) Card Example -->
                                        <div class="col-xl-12 col-md-12 mb-4">
                                            <div class="card shadow h-100 p-5" style="background-color: #51A9FC">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div
                                                                class="text-md font-weight-bold text-white text-uppercase mb-1">
                                                                Revision 1
                                                            </div>
                                                            <br>
                                                            <form>
                                                                <textarea class="form-control" id="" rows="4" cols="50"></textarea>
                                                                <br>
                                                                <img src="/img/undraw_profile.svg" width="100px"
                                                                    class="rounded my-3 mr-3" alt="...">
                                                                <img src="/img/undraw_profile.svg" width="100px"
                                                                    class="rounded my-3 mr-3" alt="...">
                                                                <img src="/img/undraw_profile.svg" width="100px"
                                                                    class="rounded my-3 mr-3" alt="...">
                                                                <img src="/img/undraw_profile.svg" width="100px"
                                                                    class="rounded my-3 mr-3" alt="...">
                                                                <br>
                                                                <div class="d-grid gap-2 col-2 mx-auto">
                                                                    <button class="btn rounded-pill text-white"
                                                                        style="background-color: blueviolet;">Submit</button>
                                                                    <a href="/halamanorder.html"><button
                                                                            class="btn rounded-pill text-white"
                                                                            style="background-color: blueviolet;">Cancel</button></a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

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
                    <a class="btn btn-primary" href="login.html">Logout</a>
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
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <script>
        $(function() {

            $(".drop-out li a").click(function() {

                $(".btn:first-child").text($(this).text());
                $(".btn:first-child").val($(this).text());

            });

        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
@endsection
