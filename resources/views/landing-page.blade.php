@extends('layouts.main')

@section('container')
<div class="landingPage">
    <div class="container-fluid vh-100 ">
        <div class="d-flex align-content-center flex-wrap h-100">
            <div class="justify-content-center">
                <h1 class="display-3">Make Your own Landing Page! <br>
                    for your small business</h1>
                <div class="row row-cols-2 my-3">
                    <p>Quickly design and customize responsive mobile-first sites with Bootstrap,
                        the world’s most popular front-end open source toolkit,
                        featuring Sass variables and mixins, responsive grid system,
                        extensive prebuilt components, and powerful JavaScript plugins.</p>
                </div>
                <div>
                    <button type="button" class="btn btn-primary">Start</button>
                    <button type="button" class="btn btn-outline-primary text-primary">Ask Something</button>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5" id="packages">
        <h1>Our Packages</h1>
        <hr class="solid-header2">
        <div class="container">
            <div class="row row-cols-2 my-5 d-flex justify-content-between text-purple2">
                @if ($code === 200)
                @foreach ($data['data'] as $data)
                <div class="card m-3 border border-purple2 shadow" style="width: 18rem; background-image: url('<?= $data["product_image"] ?>'); background-position: 0% 100%; background-size: 105% 75%; background-repeat: no-repeat">
                    <div class="d-flex align-items-start flex-column bd-highlight mb-3 card-body">
                        <div class="mb-auto p-2 bd-highlight">
                            <div class="row">
                                <h5 class="card-title card-title-package">
                                    {{$data['package_name']}}
                                </h5>
                                <hr class="solid-header3" style="background : <?= $data['color'] ?>">
                            </div>
                            <h6 class="card-subtitle mb-2 text-muted card-content">Price <?= $data['price'] / 1000 ?>K</h6>
                            <br>
                        </div>

                        <div class="p-2 bd-highlight">
                            <p class="card-text card-content fw-normal" style="color : <?= $data['font_color'] ?>"><?php echo $data['product_description'] ?></p>
                            <a href="/order/{{$data['id']}}" type="button" class="btn btn-purple2">Order</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="card m-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Error Load Package</h5>

                    </div>
                </div>
                @endif

            </div>
        </div>
        <h1>No package you found?
            try to find more with us</h1>
    </div>
    <div class="mt-5">
        <h1>Template</h1>
        <hr class="solid-header2">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-6 g-4">

                <div class="col-md-2">
                    <div class="hovereffects">
                        <img src="/img/templates.webp" height="100%" width="100%" alt="images" class="radius-template">
                        <div class="overlay">
                            <a class="info" href="">more info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="hovereffects">
                        <img src="/img/templates.webp" height="100%" width="100%" alt="images" class="radius-template">
                        <div class="overlay">
                            <a class="info" href="">more info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="hovereffects">
                        <img src="/img/templates.webp" height="100%" width="100%" alt="images" class="radius-template">
                        <div class="overlay">
                            <a class="info" href="">more info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="hovereffects">
                        <img src="/img/templates.webp" height="100%" width="100%" alt="images" class="radius-template">
                        <div class="overlay">
                            <a class="info" href="">more info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="hovereffects">
                        <img src="/img/templates.webp" height="100%" width="100%" alt="images" class="radius-template">
                        <div class="overlay">
                            <a class="info" href="">more info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="hovereffects">
                        <img src="/img/templates.webp" height="100%" width="100%" alt="images" class="radius-template">
                        <div class="overlay">
                            <a class="info" href="">more info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="hovereffects">
                        <img src="/img/templates.webp" height="100%" width="100%" alt="images" class="radius-template">
                        <div class="overlay">
                            <a class="info" href="">more info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="hovereffects">
                        <img src="/img/templates.webp" height="100%" width="100%" alt="images" class="radius-template">
                        <div class="overlay">
                            <a class="info" href="">more info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="hovereffects">
                        <img src="/img/templates.webp" height="100%" width="100%" alt="images" class="radius-template">
                        <div class="overlay">
                            <a class="info" href="">more info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="hovereffects">
                        <img src="/img/templates.webp" height="100%" width="100%" alt="images" class="radius-template">
                        <div class="overlay">
                            <a class="info" href="">more info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="hovereffects">
                        <img src="/img/templates.webp" height="100%" width="100%" alt="images" class="radius-template">
                        <div class="overlay">
                            <a class="info" href="">more info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="hovereffects">
                        <img src="/img/templates.webp" height="100%" width="100%" alt="images" class="radius-template">
                        <div class="overlay">
                            <a class="info" href="">more info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center m-3">
            <h2>Or Bring Your Page Recomendation</h2>
        </div>

    </div>
    <div class="mt-5">
        <h1>Our Clients</h1>
        <hr class="solid-header2">
        <div class="mt-5">
            <div class="container">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <div class="card2">
                                <div class="img-wrapper"><img src="/img/client.jpg" class="d-block w-100 rounded-top" alt="..."></div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 1</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <div class="card2">
                                <div class="img-wrapper"><img src="/img/client.jpg" class="d-block w-100 rounded-top" alt="..."></div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 2</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card2">
                                <div class="img-wrapper"><img src="/img/client.jpg" class="d-block w-100 rounded-top" alt="..."></div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 3</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card2">
                                <div class="img-wrapper"><img src="/img/client.jpg" class="d-block w-100 rounded-top" alt="..."></div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 4</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card2">
                                <div class="img-wrapper"><img src="/img/client.jpg" class="d-block w-100 rounded-top" alt="..."></div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title 5</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

