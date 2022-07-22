@extends('layouts.dashmain')

@section('container')
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5">HALAMAN SIGN UP</h5>
                    <form>
                        <div class="form mb-3">
                            <input type="text" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="form mb-3">
                            <input type="text" class="form-control" placeholder="Business Name">
                        </div>
                        <div class="form mb-3">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        </div>
                        <div class="form mb-3">
                            <input type="text" class="form-control" placeholder="Country">
                        </div>
                        <div class="form mb-3">
                            <input type="text" class="form-control" placeholder="City">
                        </div>
                        <div class="form mb-3">
                            <input type="" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-login text-uppercase fw-bold"
                                type="submit">REGISTER</button>
                            <a href="/login">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
