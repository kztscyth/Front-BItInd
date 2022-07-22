@extends('layouts.dashmain')

@section('container')
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-5">HALAMAN LOGIN</h5>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form mb-3">
                            <input type="email" name="emailLogin" id="emailLogin" class="form-control" placeholder="Email">
                        </div>
                        <div class="form mb-3">
                            <input type="password" name="passwordLogin" id="passwordLogin" class="form-control" id="floatingPassword" placeholder="Password">
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                            <label class="form-check-label" for="rememberPasswordCheck">
                                Remember password
                            </label>
                        </div>
                        <div class="d-grid">
                            <button id="buttonLogin" class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">LOGIN</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
