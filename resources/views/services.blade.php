@extends('layouts.main')

@section('page')

<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Our Services</h2>
                    <div class="breadcrumb__links">
                        <a href="index.html">Home</a>
                        <span>Our Services</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->
<!-- Services Section Begin -->
<section class="services services-page spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Our specialization</span>
                    <h2>What we do</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="services__item">
                    <img src="img/tecmo.jpg" alt="">
                    <h4>Industrial Division</h4>
                    <p>7 departments including general contracting, industrial refrigeration, packaging solutions, aluminium structures and energy management systems.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="services__item">
                    <img src="img/mecanixshops.jpg" alt="">
                    <h4>Distribution and Sales</h4>
                    <p>National leader in industrial cleaning equipment, pneumatic and electronic omponents and controls, and conveying belts.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="services__item">
                    <img src="img/meeting-point.jpg" alt="">
                    <h4>Restaurant Management</h4>
                    <p>Meeting Point owns and operates the Dunkin Donuts franchise in Lebanon. Granted the Best Worldwide Franchise Award.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="services__item">
                    <img src="img/cedra.jpg" alt="">
                    <h4>Consulting Services</h4>
                    <p>Engineering Consulting, including technical studies, information systems, product design and energy saving tools.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->
<!-- Counter Section End -->
<section class="counter spad set-bg" data-setbg="img/counter-bg.jpg">
    <div class="container">
        <div class="counter__content">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__number">
                            <h2 class="count">85</h2>
                        </div>
                        <div class="counter__item__text">
                            <h5>Projects<br /> Completed</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__number">
                            <h2 class="count">127</h2>
                        </div>
                        <div class="counter__item__text">
                            <h5>Happy<br /> Clients</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__number">
                            <h2 class="count">36</h2>
                        </div>
                        <div class="counter__item__text">
                            <h5>Awards<br /> Received</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__number">
                            <h2 class="count">74</h2>
                        </div>
                        <div class="counter__item__text">
                            <h5>Cups Of<br /> Coffee</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter Section End -->
<!-- Client Section Begin -->
<section class="clients spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <div class="section-title">
                    <span>Branding</span>
                    <h2>Our Clients</h2>
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <a href="#"><img src="{{asset('img/clients/coca-cola.svg')}}" alt=""></a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <a href="#"><img src="{{asset('img/clients/dominos.svg')}}" alt=""></a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <a href="#"><img src="{{asset('img/clients/pizzahut.png')}}" alt=""></a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <a href="#"><img src="{{asset('img/clients/gandour.png')}}" alt=""></a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <a href="#"><img src="{{asset('img/clients/spinneys.png')}}" alt=""></a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <a href="#"><img src="{{asset('img/clients/kfc.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Client Section End -->
@endsection