<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=== Bootstrap Min CSS ===-->
    <link rel="stylesheet" href="/frontend/assets/css/bootstrap.min.css" />
    <!--=== Owl Carousel Min CSS ===-->
    <link rel="stylesheet" href="/frontend/assets/css/owl.carousel.min.css" />
    <!--=== Owl Theme Default Min CSS ===-->
    <link rel="stylesheet" href="/frontend/assets/css/owl.theme.default.min.css" />
    <!--=== Magnific Popup Min CSS ===-->
    <link rel="stylesheet" href="/frontend/assets/css/magnific-popup.min.css" />
    <!--=== FlatIcon CSS ===-->
    <link rel="stylesheet" href="/frontend/assets/css/flaticon.css" />
    <!--=== RemixIcon CSS ===-->
    <link rel="stylesheet" href="/frontend/assets/css/remixicon.css" />
    <!--=== Odometer Min CSS ===-->
    <link rel="stylesheet" href="/frontend/assets/css/odometer.min.css" />
    <!--=== Aos CSS ===-->
    <link rel="stylesheet" href="/frontend/assets/css/aos.css" />
    <!--=== Style CSS ===-->
    <link rel="stylesheet" href="/frontend/assets/css/style.css" />
    <!--=== Dark CSS ===-->
    <link rel="stylesheet" href="/frontend/assets/css/dark.css" />
    <!--=== Responsive CSS ===-->
    <link rel="stylesheet" href="/frontend/assets/css/responsive.css" />

    <!--=== Title & Favicon ===-->
    <title>Bitgovest - Bitgo Investment</title>
    <link rel="icon" type="image/png" href="/frontend/assets/images/favicon.png" />
</head>

<body data-bs-spy="scroll" data-bs-offset="70">
    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="loader"></div>
    </div>
    <!-- End Preloader Area -->


    <div class="currency-exchange-header-area">
        <!--Start Top Header-->
        <div class="currency-exchange-top-header-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="exchange-header-left-content">
                            <ul>
                                <li>
                                    <a href="tel:+095552348765"><i class="flaticon-phone-call-1"></i>Call: (+17)247
                                        321-032</a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-paper-plane"></i>Support@bitgovest.com</a>
                                </li>
                                {{-- <li>
                                    <a
                                        href=""><i
                                            class="flaticon-paper-plane"></i>Mail:
                                        <span class="__cf_email__"
                                            data-cfemail="34575b5a4055574074595558551a575b59">Support@bitgovest.com</span></a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="exchange-header-middle-content">
                            <span>Your Stop for
                                <a href="#"> Money </a>Needs!</span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="exchange-header-right-content">
                            <ul>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Help</a></li>
                                <li>
                                    <div class="language">
                                        <select>
                                            <option data-display="English">English</option>
                                            <option value="1">Türkçe</option>
                                            <option value="2">Español</option>
                                            <option value="4">Italiano</option>
                                            <option value="5">한국어</option>
                                            <option value="5">Polski</option>
                                        </select>
                                        <i class="ri-global-line"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Top Header-->

        <!-- Start Navbar Area -->
        <nav class="navbar navbar-expand-lg navbar-light nav-style10">
            <div class="container-fluid">
                <a class="navbar-brand" href="index-10.html">
                    <img src="/frontend/assets/images/logo/logo-12.png" height="40" width="150" alt="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonial">Testimonial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">Blog</a>
                        </li>
                    </ul>
                    <div class="others-options d-flex align-items-center style10">
                        <div class="option-item">
                            <a href="{{ route('login') }}">Login Now <i class="flaticon-right-arrow-3"></i></a>
                        </div>
                        <div class="option-item">
                            <div class="switch-box">
                                <label id="switch" class="switch">
                                    <input type="checkbox" onchange="toggleTheme()" id="slider" />
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- End Navbar Area -->
    </div>
    {{ $slot }}
    <!--================================= COPYRIGHT-1 START ==========================================-->
    <!--Start Copyright Area-->
    <div class="copy-right-area style9 bg-color-0a0a0a">
        <div class="container">
            <p>
                © Bitgovest is Proudly Owned by
                <a href="https:Bitgovest.com" target="_blank">Bitgovest</a>
            </p>
        </div>
    </div>
    <!--End Copyright Area-->

    <!-- Start Go Top Area -->
    <div class="go-top style10">
        <i class="ri-arrow-up-s-line"></i>
        <i class="ri-arrow-up-s-line"></i>
    </div>
    <!-- End Go Top Area -->

    <!--=== Jquery Min js ===-->
    <script data-cfasync="false" src="/frontend/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="/frontend/assets/js/jquery.min.js"></script>
    <!--=== Bootstrap Bundle Min JS ===-->
    <script src="/frontend/assets/js/bootstrap.bundle.min.js"></script>
    <!--=== Owl Carousel Min JS ===-->
    <script src="/frontend/assets/js/owl.carousel.min.js"></script>
    <!--=== Jquery Magnific Popup Min js ===-->
    <script src="/frontend/assets/js/jquery.magnific-popup.min.js"></script>
    <!--=== Aos JS ===-->
    <script src="/frontend/assets/js/aos.js"></script>
    <!--=== Odometer Min JS ===-->
    <script src="/frontend/assets/js/odometer.min.js"></script>
    <!--=== Appear Min JS ===-->
    <script src="/frontend/assets/js/appear.min.js"></script>
    <!-- DownCount js -->
    <script src="/frontend/assets/js/downCount.js"></script>
    <!--=== Mixitup Min js ===-->
    <script src="/frontend/assets/js/mixitup.min.js"></script>
    <!-- Particles js -->
    <script src="/frontend/assets/js/particles.min.js"></script>
    <!-- Form Validator js -->
    <script src="/frontend/assets/js/form-validator.min.js"></script>
    <!-- Contact Form Script js -->
    <script src="/frontend/assets/js/contact-form-script.js"></script>
    <!--=== AjaxChimp Min JS ===-->
    <script src="/frontend/assets/js/ajaxchimp.min.js"></script>
    <!--=== Custom JS ===-->
    <script src="/frontend/assets/js/custom.js"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6895d06ba4fc79192a7be00e/1j24jca0l';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>
