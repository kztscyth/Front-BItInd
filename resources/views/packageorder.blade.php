@extends('layouts.main')

@section('container')
<div class="row">
    <div class="col-sm-9">
        <div class="card border-12 shadow rounded-3 my-5">
            <div class="card-body p-4 p-sm-5">
                
                <h5 class="card-title text-center mb-5">Register</h5>
                <form id="registerForm">
                    <div class="form mb-3">
                        <label for="" class="form-label">Full Name</label>
                        <input type="text" name="fullname" id="fullName" class="form-control" placeholder="Full Name">
                    </div>
                    <div class="form mb-3">
                        <label for="" class="form-label">Business Name</label>
                        <input type="text" name="bussiness_name" id="businessName" class="form-control" placeholder="Business Name">
                    </div>
                    <div class="form mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form mb-3">
                        <label for="" class="form-label">New password, for your account</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    </div>

                    <div class="form mb-3">
                        <label for="" class="form-label">Country</label>
                        <input type="text" name="id_country" id="country" class="form-control" placeholder="Country">
                    </div>
                    <div class="form mb-3">
                        <label for="" class="form-label">City</label>
                        <input type="text" name="id_city" id="city" class="form-control" placeholder="City">
                    </div>
                    <div class="form mb-3">
                        <label for="" class="form-label">Phone Number</label>
                        <input type="number" name="phone_number" id="phoneNumber" class="form-control" placeholder="Phone Number">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-3 card-body p-4 bg-white shadow rounded-3 my-5">
        <div id="resultFullName1" class="card-body">
            <h1>Output</h1>
            <br><br>
            <li id="resultFullName" style="list-style:none;">Full Name</li>
            <li id="resultEmail" style="list-style:none;">Email</li>
            <li id="resultCountry" style="list-style:none;">Country</li>
            <li id="resultCity" style="list-style:none;">City</li>
            <li id="resultPhoneNumber" style="list-style:none;">+Phone</li>
            <br>
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <div class="mt-4">
                            <p>Ini Capta</p>
                        </div>
                    </tr>
                </tbody>
            </table>
            <br>
            <div class="d-grid gap-2 border-12">
                <button id="register" class="btn rounded-pill text-white" style="background-color: blueviolet;">Verify
                    Email</button>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-center" id="staticBackdropLabel">Please verify your email
                                </h5>
                            </div>
                            <div class="modal-body shadow rounded-3">
                                <input type="hidden" name="idRegister" id="idRegister" value="">
                                <p>You are almost there! We sent a verification code email</p>
                                <p id="emailModal">to: <b>muh.naufal@hotmail.com</b></p>
                                <p>check your <b>inbox</b> or <b>spam</b> folder</p>
                                <input type="text" name="emailCode" class="form-control" placeholder="xxxxxx">
                                <br>
                                <button type="button" id="buttonEmailCode" class="btn rounded-pill text-white" style="background-color: blueviolet;">Confirm</button>
                                <br><br>
                                <p>Still can't find the email? <a href="#" id="buttonResend" class="tooltip-test" style="text-decoration:none">Resend it!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection