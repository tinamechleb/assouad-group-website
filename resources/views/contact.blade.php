@extends('layouts.main')

@section('page')

<!-- Contact Section Begin -->
<div style="height:120px;background-color:#000;width:100%;"></div>
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact__text">
                    <div class="section-title">
                        <span>Information</span>
                        <h2>Contact Details</h2>
                    </div>
                    <p>The Assouad Group is head-quartered in Hazmieh, Lebanon, as are Tecmo and Cedra. Meeting Point and Mecanix Shops are head-quartered in Sin-el-Fil, Lebanon.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="contact__widget__item">
                    <div class="contact__widget__item__icon">
                        <img src="img/contact/xci-1.png.pagespeed.ic.YxZft4u0xh.png" alt="">
                    </div>
                    <div class="contact__widget__item__text">
                        <h5>Phone Number</h5>
                        <span>+961 5 952 055</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="contact__widget__item">
                    <div class="contact__widget__item__icon">
                        <img src="img/contact/xci-2.png.pagespeed.ic.ixEBjqLZs6.png" alt="">
                    </div>
                    <div class="contact__widget__item__text">
                        <h5>Email Address</h5>
                        <span>info@assouadgroup.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="contact__widget__item last__item">
                    <div class="contact__widget__item__icon">
                        <img src="img/contact/ci-3.png" alt="">
                    </div>
                    <div class="contact__widget__item__text">
                        <h5>Office Location</h5>
                        <span>Hazmieh, Lebanon</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12087.069761554938!2d-74.2175599360452!3d40.767139456514954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c254b5958982c3%3A0xb6ab3931055a2612!2sEast%20Orange%2C%20NJ%2C%20USA!5e0!3m2!1sen!2sbd!4v1581710470843!5m2!1sen!2sbd"
                height="460" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <div class="contact__form__text">
                    <div class="section-title">
                        <span>Contact by email</span>
                        <h2>Get in touch</h2>
                    </div>
                    <p>We would love to hear from you.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="contact__form">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input type="text" placeholder="Name">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input type="text" placeholder="Email">
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Message"></textarea>
                                <button type="submit" class="site-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
@endsection