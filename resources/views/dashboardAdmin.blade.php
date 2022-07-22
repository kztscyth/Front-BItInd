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
                    <div class="col-sm-14">
                        <div class="card border-12 shadow rounded-3 my-5">
                            <div class="card-body p-12 p-sm-14">
                                <!-- Main Content -->
                                <div id="content">
                                    <!-- Begin Page Content -->
                                    <div class="container-fluid">
                                        <!-- Page Heading -->
                                        <div class="d-sm align-items-center justify-content-between mb-4">
                                            <h1 class="h3 mb-0 text-gray-800 text-center">HALAMAN USER</h1>
                                        </div>

                                        <!-- Table -->
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Full Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Email Verified</th>
                                                    <th scope="col">Bussiness Name</th>
                                                    <th scope="col">Country</th>
                                                    <th scope="col">City</th>
                                                    <th scope="col">Phone Number</th>
                                                    <th scope="col">Create at</th>
                                                    <th scope="col">Last Update</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Junaidi</td>
                                                    <td>juned@gmail.com</td>
                                                    <td>Sudah</td>
                                                    <td>Ternak Lele</td>
                                                    <td>Indonesia</td>
                                                    <td>Jakarta</td>
                                                    <td>081234567</td>
                                                    <td>02/02/2022</td>
                                                    <td>02/02/2023</td>
                                                    <td><button class="btn btn-primary">Edit</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Aleksander</td>
                                                    <td>alex@gmail.com</td>
                                                    <td>Sudah</td>
                                                    <td>Penjual Bakso</td>
                                                    <td>Indonesia</td>
                                                    <td>Yogyakarta</td>
                                                    <td>0822 9326 1818</td>
                                                    <td>02/02/2022</td>
                                                    <td>02/02/2023</td>
                                                    <td><button class="btn btn-primary">Edit</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Antok</td>
                                                    <td>antok@gmail.com</td>
                                                    <td>Sudah</td>
                                                    <td>Mafia Bola</td>
                                                    <td>Indonesia</td>
                                                    <td>Bantul</td>
                                                    <td>0822 9326 1818</td>
                                                    <td>02/02/2022</td>
                                                    <td>02/02/2023</td>
                                                    <td><button class="btn btn-primary">Edit</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
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
