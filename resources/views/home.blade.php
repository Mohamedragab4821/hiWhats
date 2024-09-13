<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>{{$settings->website_name}} | الصفحة الرئيسية</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="{{$settings->home_meta_d}}">
    <meta name="keywords" content="{{$settings->home_meta_k}}">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/storage/' . ($settings->icon))}}">
    <link rel="mask-icon" color="#fe6a6a" href="{{ asset('safari-pinned-tab.svg') }}">
    <!-- Site Title -->


    <!-- CSS here -->
    
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon_webency.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/sal.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>

<body>
    <!-- start: Preloader -->
    
    <!-- end: Mobile Menu -->
    @include('Includes.signin_signup')

    <!-- start: Header Area -->
    @include('Includes.home_header')

    <!-- end: Header Area -->

    <main class="site-content">
        <!-- start: Hero Area -->
        <section class="tj-hero-section" style="direction: rtl; text-align: right; position: relative;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="hero-left-content" data-sal="slide-up" data-sal-duration="1000"
                            data-sal-delay="100">
                            <div class="tj-sec-heading">
                                <span class="hero-sub-title"> Creative Thinking</span>
                                <h1 class="hero-title">
                                    {{$settings->home_description1}} <span class="title"> طور عملك!</span>
                                </h1>
                                <div class="desc">
                                    <p>
                                        {{$settings->home_description2}}
                                    </p>
                                </div>

                                <div class="hero-button d-flex">
                                    <a class="tj-primary-btn" href="contact.html"> تعرف على المزيد</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="hero-image-group">
                            <div class="group-image1 shake-y" style="-webkit-animation: shakeY 2.5s ease-in-out infinite;animation: shakeY 8.5s ease-in-out infinite !important;">
                                    <img class="image" src="{{ asset('storage/' . ($settings->home1_img ?? 'assets/images/hero/hero-1.png')) }}" alt="Image" />
                                </div>
                                <div class="group-image2 pulse">
                                    <img data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100"
                                        src="{{ asset('storage/' . ($settings->home2_img ?? 'assets/images/hero/hero-2.png')) }}" alt="Image" />
                                </div>
                            <img class="group-image3" src="assets/images/shape/shape-5.svg" alt="Image" />
                            <img class="group-image4 pulse" src="assets/images/shape/shape-6.svg" alt="Image" />
                            <img class="group-image5 pulse" src="assets/images/shape/shape-7.svg" alt="Image" />
                            <img class="group-image6 pulse" src="assets/images/shape/shape-8.svg" alt="Image" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-shape">
                <img src="assets/images/shape/shape-1.svg" alt="Shape" />
            </div>
            <div class="hero-shape1">
                <img src="assets/images/shape/shape-2.svg" alt="Shape" />
            </div>
            <div class="hero-shape2 pulse">
                <img src="assets/images/shape/shape-3.svg" alt="Shape" />
            </div>
            <div class="hero-shape3 shake-y" >
                <img src="assets/images/shape/shape-4.svg" alt="Shape" />
            </div>
            <div class="hero-scroll">
                <img src="assets/images/icon/scroll-bg.svg" alt="Bg" />
                <div class="scroll-icon jump">
                    <a href="#scroll-bottom"><img src="assets/images/icon/scroll.svg" alt="Icon" /></a>
                </div>
            </div>
        </section>
        <!-- end: Hero Area -->

        <!-- start: About Area -->
        <section id="scroll-bottom" class="tj-about-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-12">
                        <div class="about-image-group">
                            <div class="about-circle-box">
                                <img class="circle-one" src="assets/images/shape/ab-shape.svg" alt="Shape" />
                                <div class="ab-circle">
                                        <svg class="shape-1" viewBox="0 0 100 100" width="100" height="100">
                                            <defs>
                                                <path id="circle" d="
                                                      M 50, 50
                                                      m -37, 0
                                                      a 37,37 0 1,1 74,0
                                                      a 37,37 0 1,1 -74,0" />
                                            </defs>
                                            <text font-size="15">
                                                <textPath xlink:href="#circle" class="shape-1">
                                                    Creative Minds_, Creative Minds_
                                                </textPath>
                                            </text>
                                        </svg>
                                    </div>
                            </div>
                            <div class="about-image1 pulse">
                                <img src="{{ asset('img/about_us1.svg') }}" alt="Image" />
                            </div>
                            
                            <div class="about-image3 pulse">
                                <img src="{{ asset('img/about-us3.svg') }}" alt="Image" />
                            </div>
                            <div class="about-image4 pulse">
                                <img src="{{ asset('img/about-us3.svg') }}" alt="Image" />
                            </div>
                            <div class="about-shape1 shake-y"  style="-webkit-animation: shakeY 2.5s ease-in-out infinite;animation: shakeY 8.5s ease-in-out infinite !important;">
                                <img src="assets/images/shape/shape-9.svg" alt="Shape" />
                            </div>
                            <div class="about-shape2 pulse">
                                <img src="assets/images/shape/shape-10.svg" alt="Shape" />
                            </div>
                            <div class="about-shape3 pulse">
                                <img src="assets/images/shape/shape-13.svg" alt="Shape" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="about-content-one" data-sal="slide-left" data-sal-duration="1000"
                            data-sal-delay="600">
                            <div class="tj-sec-heading">
                                <span class="sub-title"> من نحن</span>
                                <h2 class="sec-title">جعل عملك أكثر تفردًا</h2>
                                <div class="desc">
                                    <p>
                                        هناك العديد من الاختلافات المتاحة لمقاطع لوريم إيبسوم، ولكن
                                        الأغلبية خضعت للتغيير في شكل ما، عن طريق إدخال الفكاهة، أو
                                        الكلمات العشوائية التي لا تبدو قابلة للتصديق حتى قليلاً.
                                    </p>
                                    <p>
                                        هناك العديد من الاختلافات المتاحة لنصوص لوريم إيبسوم، ولكن الأغلبية خضعت للتغيير في شكل ما،
                                    </p>
                                    <p>
                                        من خلال إدخال الفكاهة، أو الكلمات العشوائية التي لا تبدو قابلة للتصديق حتى ولو قليلاً.
                                    </p>
                                </div>
                                <div class="about-button d-flex">
                                    <a href="{{ route('whoAreWe') }}" class="tj-secondary-btn btn-border"><span>Read
                                            More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-section-shape pulse">
                <img src="assets/images/shape/shape-37.svg" alt="Shape" />
            </div>
        </section>
        <!-- end: About Area -->

        <!-- start: Counter Area -->

        <!-- end: Counter Area -->

        <!-- start: Service Area -->
        <section class="tj-service-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tj-sec-heading text-center" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="600">
                            <span class="sub-title">الأقسام</span>
                            <h2 class="sec-title">العروض المتاحة للتسويق الإلكتروني</h2>
                            <div class="desc">
                                <p>
                                    نقدم لك مجموعة متميزة من العروض التي تشمل خدمات التسويق الإلكتروني، بما في ذلك إدارة الحملات الإعلانية، تطوير استراتيجيات التسويق عبر وسائل التواصل الاجتماعي، وإعداد المحتوى الرقمي لترويج المنتجات. تم تصميم هذه العروض لمساعدتك في تعزيز تواجدك الرقمي وزيادة مبيعاتك بشكل فعال.
                                </p>
                            </div>
                        </div>
                    </div>

            </div>

                <div class="row" dir="rtl">
                    @foreach ($categories as $category)
                    <div class="col-lg-3 col-md-6 col-sm-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                        <div class="tj-service-item text-center">
                            <div class="service-inner">
                                <div class="service-icon">
                                    <img class="image-1" src="{{ asset('storage/' . ($category->category_img )) }}" alt="Shape" />
                                </div>
                                <div class="service-content">
                                    <h4 class="title-link">
                                        <a href="{{ route('categories',['id'=>$category->category_id]) }}">{{ $category->category_name }}</a>
                                    </h4>
                                    <p>
                                        {{ $category->category_description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>


                <div class="service-button text-center">
                    <a href="service-details.html" class="tj-secondary-btn btn-border"><span>View Details</span></a>
                </div>


            </div>
            <div class="service-section-shape">
                <div class="service-bg-shape pulse">
                    <img src="assets/images/shape/shape-14.svg" alt="Shape" />
                </div>
                <div class="service-bg-shape1">
                    <img src="assets/images/shape/shape-15.svg" alt="Shape" />
                </div>
                <div class="service-bg-shape2">
                    <img src="assets/images/shape/shape-14.svg" alt="Shape" />
                </div>
                <div class="service-bg-shape3 pulse">
                    <img src="assets/images/shape/shape-15.svg" alt="Shape" />
                </div>
                <div class="service-bg-shape4 pulse">
                    <img src="assets/images/shape/shape-16.svg" alt="Shape" />
                </div>
            </div>
        </section>
        <!-- end: Service Area -->
        <section class="tj-service-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tj-sec-heading text-center" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="600">
                            <span class="sub-title"> خدماتنا</span>
                            <h2 class="sec-title">الخدمات التي نقدمها</h2>
                            <div class="desc">
                                <p>
                                    لقد صمدت هذه الخدمات لأكثر من خمسة قرون، كما أنها اجتازت مرحلة الانتقال إلى الطباعة الإلكترونية، وبقيت دون تغيير يذكر. وقد اشتهرت في الستينيات مع إطلاقها.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" dir="rtl">
                @foreach ($products as $product)
                <div class="col-lg-3 col-md-6 col-sm-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                    <div class="tj-service-item text-center">
                        <div class="service-inner">
                            <div class="service-icon">
                                <img class="image-1" src="{{ $product->Product_img ? asset('storage/' . $product->Product_img) : asset('img/default-product-image.jpg') }}">
                            </div>
                            <div class="service-content">
                                <h4 class="title-link">
                                    <a>{{ $product->product_name }}</a>
                                </h4>
                                <p>
                                    {{ $product->product_description }}
                                </p>
                                <p>
                                  Price : {{ $product->product_salary }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>



                <div class="service-button text-center">
                    <a href="{{ route('services') }}" class="tj-secondary-btn btn-border"><span>View Details</span></a>
                </div>


            </div>
            <div class="service-section-shape">
                <div class="service-bg-shape pulse">
                    <img src="assets/images/shape/shape-14.svg" alt="Shape" />
                </div>
                <div class="service-bg-shape1">
                    <img src="assets/images/shape/shape-15.svg" alt="Shape" />
                </div>
                <div class="service-bg-shape2">
                    <img src="assets/images/shape/shape-14.svg" alt="Shape" />
                </div>
                <div class="service-bg-shape3 pulse">
                    <img src="assets/images/shape/shape-15.svg" alt="Shape" />
                </div>
                <div class="service-bg-shape4 pulse">
                    <img src="assets/images/shape/shape-16.svg" alt="Shape" />
                </div>
            </div>
        </section>
        <!-- start: Testimonial Area -->
   
        <!-- end: Testimonial Area -->

        <!-- start: Team Area -->

        <!-- end: Team Area -->


        <!-- end: Portfolio Area -->


        <!-- end: FAQ Area -->


        <!-- end: Blog Area -->
        @include('Includes.contact')

        <!-- start: Contact Area -->
        <!-- end: Contact Area -->

        <!-- BEGIN: Contact Form Success Modal Message -->
        <div class="modal" id="message_sent" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header alert alert-success">
                        <h5 class="modal-title">Message Sent Successfully</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Thank you for contacting us. We will get back to you shortly.<br>Have a great day!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Contact Form Success Modal Message -->

        <!-- BEGIN: Contact Form Fail Modal Message -->
        <div class="modal" id="message_fail" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header alert alert-danger">
                        <h5 class="modal-title">Error</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Oops! Something went wrong, please try again.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Contact Form Fail Modal Message End -->

    </main>

    <!-- start: Footer Area -->
    <footer class="tj-footer-area">
        <div class="footer-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-widget footer1-col-1">
                            <div class="footer-content-info">
                                <div class="footer-logo">
                                    <a href="index.html">
                                        <img src="assets/images/logo/footer-logo.png" alt="Logo" />
                                    </a>
                                </div>
                                <p>
                                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                    of letters, as opposed to using 'Content here.
                                </p>
                                <div class="footer-share">
                                    <ul class="dot-style">
                                        <li>
                                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.51962 6.1948L13.8489 0H12.586L7.95861 5.37887L4.26275 0H0L5.58887 8.13379L0 14.63H1.26293L6.14957 8.94974L10.0527 14.63H14.3154L8.51929 6.1948H8.51962ZM1.71797 0.950725H3.65775L12.5866 13.7225H10.6468L1.71797 0.950725Z"
                                                        fill="#161616" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget footer1-col-2">
                            <h4 class="footer_title">Departments</h4>
                            <div class="widget_nav_menu">
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="#">Family Medicine</a></li>
                                        <li><a href="#">Radiology</a></li>
                                        <li><a href="#">Women’s Health</a></li>
                                        <li><a href="#">Optician</a></li>
                                        <li><a href="#">Pediatrics</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget footer1-col-3">
                            <h4 class="footer_title">Useful Link</h4>
                            <div class="widget_nav_menu">
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="#">Blog Grid</a></li>
                                        <li><a href="#">Blog Standard</a></li>
                                        <li><a href="#">Blog Details</a></li>
                                        <li><a href="#">Our Services</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget footer1-col-4">
                            <h4 class="footer_title">Company</h4>
                            <div class="widget_nav_menu">
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Out Team</a></li>
                                        <li><a href="#">Pricing</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget footer1-col-5">
                            <h4 class="footer_title">Contact Us</h4>
                            <div class="widget_contact_menu">
                                <div class="footer-menu">
                                    <ul>
                                        <li>
                                            <span><i class="fa-sharp fa-regular fa-envelope"></i></span>
                                            <a href="mailto:Info@gmail.com">Info@gmail.com</a>
                                        </li>
                                        <li>
                                            <span><i class="fa-solid fa-globe"></i></span><a
                                                href="#">www.website.com</a>
                                        </li>
                                        <li>
                                            <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                            <a href="#">225 Marion Street, Columbia</a>
                                        </li>
                                        <li>
                                            <span><i class="fa-solid fa-phone-volume"></i></span>
                                            <a href="tel:+00123456789">+ 00 123 456 789</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-content-area">
                            <div class="copyright-left-content">
                                <p>
                                    Copyright © 2023 <a href="#" target="_blank"> ThemeJunction. </a> All Rights
                                    Reserved.
                                </p>
                            </div>
                            <div class="copyright-menu">
                                <ul>
                                    <li><a href="#">Setting & Privacy</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-section-shape">
            <div class="footer-bg-shape">
                <img src="assets/images/banner-bg/footer-bg-shape.svg" alt="Shape" />
            </div>
            <div class="footer-bg-shape1">
                <img src="assets/images/banner-bg/footer-bg-shape1.svg" alt="Shape" />
            </div>
            <div class="footer-bg-shape2 shake-y">
                <img src="assets/images/shape/shape-35.svg" alt="Shape" />
            </div>
            <div class="footer-bg-shape3 pulse">
                <img src="assets/images/shape/shape-36.svg" alt="Shape" />
            </div>
        </div>
    </footer>
    <!-- end: Footer Area -->

    <!-- start: Scroll Area -->
    <div class="webency-scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="
                        transition: stroke-dashoffset 10ms linear 0s;
                        stroke-dasharray: 307.919px, 307.919px;
                        stroke-dashoffset: 71.1186px;
                    "></path>
        </svg>
        <div class="webency-scroll-top-icon">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em"
                viewBox="0 0 24 24" data-icon="mdi:arrow-up" class="iconify iconify--mdi">
                <path fill="currentColor" d="M13 20h-2V8l-5.5 5.5l-1.42-1.42L12 4.16l7.92 7.92l-1.42 1.42L13 8v12Z">
                </path>
            </svg>
        </div>
    </div>
    <!-- end: Scroll Area -->

    <!-- JS here -->
    <script>
        function addToFavorites(productId) {
      console.log('Adding product to favorites with ID:', productId);
  
      $.ajax({
          url: '{{ route('favorites.store') }}',
          type: 'POST',
          data: {
              _token: '{{ csrf_token() }}',
              product_id: productId
          },
          success: function(response) {
              console.log('Success:', response);
              Swal.fire({
                  icon: 'success',
                  title: 'Success',
                  text: response.message,
                  confirmButtonText: 'OK'
              });
          },
          error: function(xhr) {
              console.error('AJAX Error:', xhr);
              Swal.fire({
                  icon: 'error',
                  title: 'Error',
                  text: 'Error adding to favorites: ' + xhr.responseText,
                  confirmButtonText: 'OK'
              });
          }
      });
  }
  
  document.addEventListener('DOMContentLoaded', function () {
          setTimeout(function () {
              let alert = document.querySelectorAll('.alert-dismissible');
              alert.forEach(function (el) {
                  el.classList.add('fade-out');
              });
          }, 3000); // 3 seconds
  
          // Completely remove the alert after the fade-out animation
          setTimeout(function () {
              let alert = document.querySelectorAll('.alert-dismissible');
              alert.forEach(function (el) {
                  el.style.display = 'none';
              });
          }, 3500); // Wait 0.5 seconds more for the fade-out to complete
      });
  
  
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  
  
  
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
  <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
  <script src="{{ asset('assets/js/sal.js') }}"></script>
  <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
  <script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
  <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
  <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/js/validate.min.js') }}"></script>
  
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>