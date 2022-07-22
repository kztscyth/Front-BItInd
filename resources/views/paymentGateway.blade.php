@extends('layouts.dashmain')

@section('container')
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
                                        <h1 class="h3 mb-0 text-gray-800">PAYMENT GATEAWAY</h1>
                                    </div>

                                    <!-- Content Row -->
                                    <div class="row">
                                        <!-- BANK MANDIRI -->
                                        <div class="col-xl-12 col-md-12 mb-4">
                                            <div class="card shadow h-100 py-2" style="background-color: #51A9FC">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div
                                                                class="text-md font-weight-bold text-white text-uppercase mb-1">
                                                                <img src="https://cdn3.iconfinder.com/data/icons/banks-in-indonesia-logo-badge/100/Mandiri-512.png"
                                                                    alt="Logo Mandiri" width="50" height="50">
                                                                Bank Mandiri
                                                            </div>
                                                            <br>
                                                            <p class="text-white">A.N Bang Nofal</p>
                                                            <p class="text-white">1234</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- DANA -->
                                        <div class="col-xl-12 col-md-12 mb-4">
                                            <div class="card shadow h-100 py-2" style="background-color: #51A9FC">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div
                                                                class="text-md font-weight-bold text-white text-uppercase mb-1">
                                                                <img src="https://i.pinimg.com/originals/2b/1f/11/2b1f11dec29fe28b5137b46fffa0b25f.png"
                                                                    alt="Logo Dana" width="50" height="35">
                                                                Dana
                                                            </div>
                                                            <br>
                                                            <p class="text-white">A.N Bang Nofal</p>
                                                            <p class="text-white">1234</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Button Tambahan -->
                                        <div>
                                            <p>Setelah melakukan pembayaran, mohon konfirmasi bukti transfer dibawah ini
                                            </p>
                                            <a href="halamanadmin.html"><button class="d-sm btn btn-success"><i
                                                        class='bx bxl-whatsapp bx-lg'></i>
                                                </button></a>
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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
@endsection
