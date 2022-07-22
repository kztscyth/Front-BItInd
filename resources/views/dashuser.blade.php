@extends('layouts.dashmain')

@section('container')
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #51A9FC">
            <!-- Nav Item - User Information -->
            <li class="nav-item">
                <a class="nav-link">
                    <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                    <span>Naufal Beng-beng</span>
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
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Cart</span>
                </a>
            </li>

            <!-- Nav Item - Landing Page Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-file-code"></i>
                    <span>Landing Page</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="">Foodish</a>
                        <a class="collapse-item" href="">Milkita</a>
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
                                    <div class="container-fluid">
                                        <!-- Page Heading -->
                                        <div class="d-sm align-items-center text-center justify-content-between mb-4">
                                            <h1 class="h3 mb-0 text-gray-800">Dashboard User</h1>
                                        </div>

                                        <!-- Content Row -->
                                        <div class="row">
                                            <!-- Earnings (Monthly) Card Example -->
                                            <div class="col-xl-12 col-md-12 mb-4">
                                                <div class="card shadow h-100 py-2" style="background-color: #51A9FC">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2 p-5">
                                                                <div
                                                                    class="text-md font-weight-bold text-white text-uppercase mb-1">
                                                                    User Information
                                                                </div>
                                                                <br>
                                                                <img src="/img/undraw_profile.svg" style="width: 100px;"
                                                                    alt="">
                                                                <p class="text-white">Nama Lengkap : Naufal Beng-Beng</p>
                                                                <p class="text-white">Alamat : Ki. Gardujati No. 70,
                                                                    Bengkulu 96649, Maluku </p>
                                                                <p class="text-white">Kota : Maluku </p>
                                                                <p class="text-white">Country : Indonesia</p>
                                                                <p class="text-white">Phone Number : +62 825 4331 1451</p>
                                                                <p class="text-white">Business reference : Food & Beverage
                                                                </p>
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
    </div>
@endsection
