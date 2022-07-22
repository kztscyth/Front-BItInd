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
                <a class="nav-link" href="/dashuser">
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
        <?php
        $data = ['status' => 3];
        ?>
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
                                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                            <h1 class="h3 mb-0 text-gray-800">Your Landing Page Timeline</h1>
                                        </div>
                                        <div class="container">
                                            <div class=" swiper-container-wrapper swiper-container-wrapper--timeline">
                                                <!-- Timeline -->
                                                <ul class="swiper-pagination-custom">
                                                    <li class='swiper-pagination-switch first <?php echo $data['status'] == 1 ? 'active' : ''; ?>'><span
                                                            class='switch-title'>1</span>
                                                    </li>
                                                    <li class='swiper-pagination-switch <?php echo $data['status'] == 2 ? 'active' : ''; ?>'><span
                                                            class='switch-title'>2</span></li>
                                                    <li class='swiper-pagination-switch <?php echo $data['status'] == 3 ? 'active' : ''; ?>'><span
                                                            class='switch-title'>3</span></li>
                                                    <li class='swiper-pagination-switch <?php echo $data['status'] == 4 ? 'active' : ''; ?> last'><span
                                                            class='switch-title'>4</span></li>
                                                </ul>
                                                <!-- Progressbar -->
                                                <div
                                                    class="swiper-pagination swiper-pagination-progressbar swiper-pagination-horizontal">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Content Row -->
                                        <div class="row">
                                            <!-- Earnings (Monthly) Card Example -->
                                            <?php if ($data['status'] == 1) : ?>
                                            <div class="col-xl-12 col-md-12 mb-4">
                                                <div class="card shadow h-100 py-2" style="background-color: #51A9FC">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-md font-weight-bold text-white text-uppercase mb-1">
                                                                    Preparing your request
                                                                </div>
                                                                <br>
                                                                <p class="text-white">Url reference : <a
                                                                        href="http://google.com"
                                                                        class="text-white">http://google.com</a></p>
                                                                <p class="text-white">Color reference : <input
                                                                        type="color" id="" value="#FF0000">
                                                                    <input type="color" id="" value="#332FFF">
                                                                    <input type="color" id="" value="#0BB83B">
                                                                </p>
                                                                <p class="text-white">File reference : <a href="#"
                                                                        class="text-white">view</a></p>
                                                                <p class="text-white">Business reference : Food & Beverage
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php elseif ($data['status'] == 2) : ?>
                                            <!-- Earnings (Monthly) Card Example -->
                                            <div class="col-xl-12 col-md-12 mb-4">
                                                <div class="card shadow h-100 py-2" style="background-color: #51A9FC">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-md font-weight-bold text-white text-uppercase mb-1">
                                                                    Building Your Landing Page
                                                                </div>
                                                                <br>
                                                                <p class="text-white">See your landing page progress in this
                                                                    URL : <a href="https://www.youtube.com/"
                                                                        class="text-white">https://www.youtube.com/</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php elseif ($data['status'] == 3) : ?>
                                            <!-- Earnings (Monthly) Card Example -->
                                            <div class="col-xl-8 col-md-8 mb-4">
                                                <div class="card shadow h-100 py-2" style="background-color: #51A9FC">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-md font-weight-bold text-white text-uppercase mb-1">
                                                                    Revision Your Landing Page
                                                                </div>
                                                                <br>
                                                                <p class="text-white">See your landing page progress in
                                                                    this URL : <a
                                                                        href="https://www.youtube.com/">https://www.youtube.com/</a>
                                                                </p>
                                                                <form>
                                                                    <textarea class="form-control" id="" rows="4" cols="50"></textarea>
                                                                    <br>
                                                                    <input type="file" id=""
                                                                        class="text-white">
                                                                    <br>

                                                                    <img src="/img/undraw_profile.svg" width="100px"
                                                                        class="rounded my-3 mr-3" alt="...">
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
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4 mb-4">
                                                <div class="card shadow h-100 py-2" style="background-color: #51A9FC">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-md font-weight-bold text-white text-uppercase mb-1">
                                                                    Revision List
                                                                </div>
                                                                <br>
                                                                <p class="text-white">First Revision : <a
                                                                        href="https://www.youtube.com/">https://www.youtube.com/</a>
                                                                </p>
                                                                <button class="btn rounded-pill text-white"
                                                                    style="background-color: blueviolet;">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php elseif ($data['status'] == 4) : ?>
                                            <div class="col-xl-12 col-md-12 mb-4">
                                                <div class="card shadow h-100 py-2" style="background-color: #51A9FC">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-md font-weight-bold text-white text-uppercase mb-1">
                                                                    your project has been completed!</div>
                                                                <br>
                                                                <p class="text-white">Thank you for your order!!! :)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif ?>
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
