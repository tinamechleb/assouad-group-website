<!DOCTYPE html>
<html lang="zxx">

<head>
<meta charset="UTF-8">
<meta name="description" content="Staging Template">
<meta name="keywords" content="Staging, unica, creative, html">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>{{$page_title}}</title>
<!-- Google Font -->
<link href="../../../fonts.googleapis.com/css2ceae.css?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
<link href="../../../fonts.googleapis.com/css2d31e.css?family=Aldrich&amp;display=swap" rel="stylesheet">
<!-- Css Styles -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/slick.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
</head>
<body>

<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>
<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__logo">
        <a href="#"><img src="img/logo.png" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <!-- <div class="offcanvas__widget">
        <span>Call us for any questions</span>
        <h4>+01 123 456 789</h4>
    </div> -->
</div>
<!-- Offcanvas Menu End -->
<!-- Header Section Begin -->
<header class="header" id="header">
    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="#"><img src="img/logo.png" alt="" id="header-logo" class="header-logo"></a>
                </div>
            </div>
            <div class="col-md-8 col-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{URL::to('/')}}">Home</a></li>
                        <li><a href="{{URL::to('/').'/'.'about'}}">About</a></li>
                        <li><a href="{{URL::to('/').'/'.'about'}}">The Group</a>
                            <ul class="dropdown">
                                <li><a href="{{URL::to('/').'/'.'group/tecmo'}}">Tecmo</a></li>
                                <li><a href="{{URL::to('/').'/'.'group/meeting-point'}}">Meeting Point</a></li>
                                <li><a href="{{URL::to('/').'/'.'group'}}">All</a></li>
                            </ul>
                        </li>
                        <li><a href="{{URL::to('/').'/'.'projects'}}">Projects</a></li>
                        <li><a href="{{URL::to('/').'/'.'services'}}">Services</a></li>
                        <li><a href="{{URL::to('/').'/'.'contact'}}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <!-- <div class="col-lg-3">
                <div class="header__widget">
                    <span>Call us for any questions</span>
                    <h4>+01 123 456 789</h4>
                </div>
            </div> -->
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header Section End -->


@yield('page')

<!-- Footer Section Begin -->
<footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
<div class="container">
<div class="footer__top">
<div class="row">
<div class="col-lg-8 col-md-6">
<div class="footer__top__text">
<h2>Ready To Work With Us?</h2>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="footer__top__newslatter">
<form action="#">
<input type="text" placeholder="Enter your email...">
<button type="submit"><i class="fa fa-send"></i></button>
</form>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 mr-3 col-md-6 col-sm-6">
<div class="footer__about">
<div class="footer__logo">
<a href="#"><img src="img/logo.png" alt=""></a>
</div>
<p>The Assouad Group is a consortium of companies owed by the Assouad family. The group started with the creation of Tecmo four decades ago and has customers in thirty countries across three continents.</p>

<div class="footer__social">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-instagram"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
<div class="col-lg-2 ml-md-5 col-md-3 col-sm-6">
<div class="footer__widget">
<h6>Company</h6>
<ul>
<li><a href="#">About Us</a></li>
<li><a href="#">Services</a></li>
<li><a href="#">The Group</a></li>
<li><a href="#">Our Works</a></li>
<li><a href="#">Careers</a></li>
</ul>
</div>
</div>
<div class="col-lg-2 col-md-7 col-sm-6">
<div class="footer__widget">
<h6>Services</h6>
<ul>
<li><a href="#">Architecture</a></li>
<li><a href="#">Interior Design</a></li>
<li><a href="#">Exterior Design</a></li>
<li><a href="#">Planning</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-5 col-sm-6">
<div class="footer__address footer__widget">
<h6>Get In Touch</h6>
<p>Tecmo Center, Army Highway <br/>Baadba, Lebanon</p>
<ul>
<li><a href="mailto:info@assouadgroup.com">info@assouadgroup.com</a></li>
<li><a href="tel:+961 5 454 534">+961 5 454 534</a></li>
<li>Fax: +961 5 952 055</li>
<li>P.O. Box: 10 Hazmieh, Lebanon</li>
</ul>
</div>
</div>
</div>
<div class="copyright">
<div class="row">
<div class="col-lg-8 col-md-7">
<div class="copyright__text">
<p>Copyright © <script>document.write(new Date().getFullYear());</script> Assouad Group | All rights reserved </a>
</p>
</div>
</div>
<div class="col-lg-4 col-md-5">
<div class="copyright__widget">
<a href="#">Terms of use</a>
<a href="#">Privacy Policy</a>
</div>
</div>
</div>
</div>
</div>
</footer>
<!-- Footer Section End -->
<div class="scroll-to-top"></div>
<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','UA-23581568-13');</script>
<script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        //petit
        document.getElementById("header").style.backgroundColor = "#000";
        document.getElementById("header-logo").style.height = "50px";
    } else {
        document.getElementById("header").style.backgroundColor = "transparent";
        document.getElementById("header-logo").style.height = "85px";
    }
    }

    //Scroll back to top
	
		var offset = 300;
		var duration = 400;
		jQuery(window).on('scroll', function() {
			if (jQuery(this).scrollTop() > offset) {
				jQuery('.scroll-to-top').fadeIn(duration);
			} else {
				jQuery('.scroll-to-top').fadeOut(duration);
			}
		});
				
		jQuery('.scroll-to-top').on('click', function(event) {
			event.preventDefault();
			jQuery('html, body').animate({scrollTop: 0}, duration);
			return false;
		})
</script>
</body>

</html>