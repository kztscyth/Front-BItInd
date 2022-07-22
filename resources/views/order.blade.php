@extends('layouts.main')

@section('container')
<div class="container">
    <div class="mt-5 row">
        <div class="col-sm-9">
            <div class="card border-12 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5">HALAMAN PACKAGE ORDER</h5>
                    <form id="myform" method="POST" action="{{url('/packageorder')}}" enctype="multipart/form-data">
                        @csrf
                        <h3>{{ $data['data'][0]['package_name'] }} Package</h3>
                        <p>Landing Page Website <?php echo $data['data'][0]['price'] / 1000  ?>K</p>
                        <div class="form mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <input type="hidden" name="id_product" id="id_product" value="{{ $data['data'][0]['id'] }}">
                                    <input type="text" name="domainInput" id="domainInput" class="form-control col-10 @error('domainInput') is-invalid @enderror" placeholder="Input your domain and check it">
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                @error('domainInput')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="col-4">
                                    <select name="domainExt" id="domainExt" class="form-control col-2 @error('domainInput') is-invalid @enderror">
                                        <option value=".com">.com</option>
                                        <option value=".co.id">.co.id</option>
                                        <option value=".id">.id</option>
                                    </select>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn text-white " id="cekDomain" style="background-color: blueviolet;">
                                        CHECK
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="errorDomain align-item-end mt-2">
                                    <!-- Flexbox container for aligning the toasts -->
                                    <div class="toast border-danger">
                                        <div class="toast-header">
                                            <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                            <strong class="me-auto">Ups Domain Unavailable</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
                                        </div>
                                        <div class="toast-body">
                                            Hello, world! This is a toast message.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-content-center radius-bitind border border-1 my-3 p-2">
                                <input class="m-1 color-border @error('color1') is-invalid @enderror" type="color" name="color1" id="color1" value="#FFA500">
                                @error('color1')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <input class="m-1 color-border" type="color" name="color2" id="color2" value="#0000FF">
                                <input class="m-1 color-border" type="color" name="color3" id="color3" value="#FF1694">
                            </div>
                            <div class="form mb-3">
                                <input type="url_reference" name="url_reference" class="form-control @error('url_reference') is-invalid @enderror" placeholder="Url Reference">
                                @error('url_reference')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                {{-- <input class="form-control @error('image_reference.0') is-invalid @enderror" name="image_reference[0]" type="file" id="formFile">
                                @error('image_reference.0')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror --}}
                            </div>
                            <div class="form mb-3">
                                <input type="text" name="bussiness_name" class="form-control @error('bussiness_name') is-invalid @enderror" placeholder="Category Business">
                                @error('bussiness_name')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-3 card-body p-4 bg-white shadow rounded-3 my-5">
            <div class="card-body">
                <h1>Billing</h1>
                <br><br>
                <table class="table table-border">
                    <tbody>
                        <tr>
                            <td>{{ $data['data'][0]['package_name'] }} Package<br><small>1 Tahun</small></td>
                            <td>Rp{{$data['data'][0]['price']}}</td>
                        </tr>
                        <tr>
                            <td>Pajak & Biaya Tambahan<br><small>PPN 11%</small></td>
                            <td>Rp0</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td>GRAND TOTAL</td>
                            <td><b>{{$data['data'][0]['price']}}</b></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <div class="d-grid gap-2 border-12">

                    <button class="btn rounded-pill text-white" form="myform" style="background-color: blueviolet;" id="submitForm">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <div class="border-1 p-sm-5 rounded-3 shadow-lg">
                <div class="form mb-3">
                    <h6 class="mb-3">Tell us about website that you want</h6>
                    <textarea form="myform" class="form-control @error('description_detail') is-invalid @enderror" name="description_detail" id="exampleFormControlTextarea1" rows="6" placeholder="My website must ..."></textarea>
                    @error('description_detail')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
@endsection