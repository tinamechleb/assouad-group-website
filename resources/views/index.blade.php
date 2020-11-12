@extends('layouts.main')

@section('page')

<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__items set-bg" data-setbg="img/projectss.jpg">
            <div class="header__overlay"></div>
            <div class="hero__text">
                <h2>Turn-Key Projects</h2>
                <a href="#" class="primary-btn">Tecmo</a>
            </div>
        </div>
        <div class="hero__items set-bg" data-setbg="img/dunkin.jpg">
            <div class="header__overlay"></div>
            <div class="hero__text">
                <h2>Leading Coffee Shop Brand</h2>
                <a href="#" class="primary-btn">Dunkin Donuts</a>
            </div>
        </div>

        <div class="hero__items set-bg" data-setbg="img/energymanagement.jpg">
            <div class="header__overlay"></div>
            <div class="hero__text">
                <h2>energy management systems</h2>
                <a href="#" class="primary-btn">Cedra Ingenierie</a>
            </div>
        </div>
    </div>
    <div class="slide-num" id="snh-1"></div>
    <div class="slider__progress"><span></span></div>
</section>
<!-- Hero Section End -->
<!-- About Section Begin -->
<section class="about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about__text">
                    <div class="section-title">
                        <span>who are we</span>
                        <h2>Innovative products and superior services since 1961</h2>
                    </div>
                    <div class="about__para__text">
                        <p>The Assouad Group is a consortium of companies owed by the Assouad family. The group started with the creation of Tecmo four decades ago and has customers in thirty countries across three continents.</p>
                        <p>We are a key player in the Lebanese industry, supporting numerous industrial production and storage facilities. We also have a complete range of products and services for hotels, centers and restaurants.</p>
                    </div>
                    <a href="about" class="primary-btn normal-btn">Learn More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__pic">
                    <div class="about__pic__inner">
                        <img src="img/about-pic.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->
<!-- Project Section Begin -->
<section class="project">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <span>Our works</span>
                    <h2>Latest projects</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="project__slider owl-carousel">
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="img/project/project-1.jpg">
                        <div class="project__slider__item__hover">
                            <span>interiors</span>
                            <h5>Lower River Street Astoria</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="img/project/project-2.jpg">
                        <div class="project__slider__item__hover">
                            <span>interiors</span>
                            <h5>Lower River Street Astoria</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="img/project/project-3.jpg">
                        <div class="project__slider__item__hover">
                            <span>interiors</span>
                            <h5>Lower River Street Astoria</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="img/project/project-4.jpg">
                        <div class="project__slider__item__hover">
                            <span>interiors</span>
                            <h5>Lower River Street Astoria</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="img/project/project-2.jpg">
                        <div class="project__slider__item__hover">
                            <span>interiors</span>
                            <h5>Lower River Street Astoria</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Project Section End -->
<!-- Services Section Begin -->
<section class="services spad">
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
        <div class="row justify-content-center">
            <a href="services" class="primary-btn normal-btn">More Services</a>
        </div>
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
<!-- Services Section End -->
<!-- Team Section Begin -->
<section class="team spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-6">
                <div class="section-title">
                    <span>Our Team</span>
                    <h2>Meet our team</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="team__btn">
                    <a href="#" class="primary-btn normal-btn">View All</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="img/team/team-1.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Dolores Webster</h5>
                            <span>CEO & Founder</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        <div class="team__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="img/team/team-2.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Dana Vaughn</h5>
                            <span>Architect</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        <div class="team__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team__item set-bg" data-setbg="img/team/team-3.jpg">
                    <div class="team__text">
                        <div class="team__title">
                            <h5>Jonathan Mcdaniel</h5>
                            <span>Architect</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                            porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                            ultricies nisl sit amet.</p>
                        <div class="team__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Section End -->
<!-- Call To Action Section Begin -->
<section class="callto spad set-bg" data-setbg="img/call-bg.jpg">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 text-center">
                <div class="callto__text">
                    <span>Why choose us?</span>
                    <h2>Our Ability To Deliver Outstanding Results For Our Clients Starts With Our Team Of Smart.
                    </h2>
                    <a href="#" class="primary-btn">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section Begin -->
<section class="testimonial spad set-bg" data-setbg="img/testimonial/testimonial-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <span>Testimonials</span>
                    <h2>What our clients say</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial__carousel">
                    <div class="testimonial__item">
                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-9 col-lg-10">
                                <p>“1. Fast and accurate at solving mental math problems involving addition,
                                    subtraction, multiplication, division and percentages but without high-level
                                    skills that might be required in jobs requiring complex calculation and
                                    analysis.”</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__item">
                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-9 col-lg-10">
                                <p>“2. Fast and accurate at solving mental math problems involving addition,
                                    subtraction, multiplication, division and percentages but without high-level
                                    skills that might be required in jobs requiring complex calculation and
                                    analysis.”</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__item">
                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-9 col-lg-10">
                                <p>“3. Fast and accurate at solving mental math problems involving addition,
                                    subtraction, multiplication, division and percentages but without high-level
                                    skills that might be required in jobs requiring complex calculation and
                                    analysis.”</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__item">
                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-9 col-lg-10">
                                <p>“4. Fast and accurate at solving mental math problems involving addition,
                                    subtraction, multiplication, division and percentages but without high-level
                                    skills that might be required in jobs requiring complex calculation and
                                    analysis.”</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__item">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-9">
                                <p>“5. Fast and accurate at solving mental math problems involving addition,
                                    subtraction, multiplication, division and percentages but without high-level
                                    skills that might be required in jobs requiring complex calculation and
                                    analysis.”</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-7 col-sm-10 ">
                <div class="testimonial__client">
                    <div class="testimonial__client__item add">
                        <div class="testimonial__client__pic">
                            <img src="img/testimonial/ta-1.png" alt="">
                        </div>
                        <div class="testimonial__client__text">
                            <h5>Renee Calhoun</h5>
                            <span>CEO Woolley</span>
                        </div>
                    </div>
                    <div class="testimonial__client__item">
                        <div class="testimonial__client__pic">
                            <img src="img/testimonial/ta-2.png" alt="">
                        </div>
                        <div class="testimonial__client__text">
                            <h5>Renee Calhoun</h5>
                            <span>CEO Woolley</span>
                        </div>
                    </div>
                    <div class="testimonial__client__item">
                        <div class="testimonial__client__pic">
                            <img src="img/testimonial/ta-3.png" alt="">
                        </div>
                        <div class="testimonial__client__text">
                            <h5>Renee Calhoun</h5>
                            <span>CEO Woolley</span>
                        </div>
                    </div>
                    <div class="testimonial__client__item">
                        <div class="testimonial__client__pic">
                            <img src="img/testimonial/ta-4.png" alt="">
                        </div>
                        <div class="testimonial__client__text">
                            <h5>Renee Calhoun</h5>
                            <span>CEO Woolley</span>
                        </div>
                    </div>
                    <div class="testimonial__client__item">
                        <div class="testimonial__client__pic">
                            <img src="img/testimonial/ta-5.png" alt="">
                        </div>
                        <div class="testimonial__client__text">
                            <h5>Renee Calhoun</h5>
                            <span>CEO Woolley</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="logo__carousel owl-carousel">
                    <div class="logo__carousel__item">
                        <a href="#"><img src="{{asset('img/clients/coca-cola.svg')}}" alt=""></a>
                    </div>
                    <div class="logo__carousel__item">
                        <a href="#"><img src="{{asset('img/clients/dominos.svg')}}" alt=""></a>
                    </div>
                    <div class="logo__carousel__item">
                        <a href="#"><img src="{{asset('img/clients/pizzahut.png')}}" alt=""></a>
                    </div>
                    <div class="logo__carousel__item">
                        <a href="#"><img src="{{asset('img/clients/gandour.png')}}" alt=""></a>
                    </div>
                    <div class="logo__carousel__item">
                        <a href="#"><img src="{{asset('img/clients/spinneys.png')}}" alt=""></a>
                    </div>
                    <div class="logo__carousel__item">
                        <a href="#"><img src="{{asset('img/clients/kfc.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->
<!-- Call To Action Section End -->
<!-- Latest Section Begin -->
<!-- <section class="latest spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-6">
                <div class="section-title">
                    <span>Latest News</span>
                    <h2>From our blog</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="latest__btn">
                    <a href="#" class="primary-btn normal-btn">View All</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="latest__item">
                    <div class="latest__item__pic">
                        <img src="img/blog/latest-1.jpg" alt="">
                    </div>
                    <div class="latest__item__text">
                        <span>Architecture</span>
                        <h4>Target and Amazon Shopping List for Home Stagers</h4>
                        <a href="#">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="latest__item">
                    <div class="latest__item__pic">
                        <img src="img/blog/latest-2.jpg" alt="">
                    </div>
                    <div class="latest__item__text">
                        <span>Interior</span>
                        <h4>6 Ideas for Team Building and Employee Appreciation for Home Stagers</h4>
                        <a href="#">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="latest__item">
                    <div class="latest__item__pic">
                        <img src="img/blog/latest-3.jpg" alt="">
                    </div>
                    <div class="latest__item__text">
                        <span>Planning</span>
                        <h4>How to Find the Best Price Structure for Your Home Staging Services</h4>
                        <a href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Latest Section End -->

@endsection