<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from cartzilla.createx.studio/home-nft.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2022 18:10:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/simplebar/dist/simplebar.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/tiny-slider/dist/tiny-slider.css') }}"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('css/theme.min.css') }}">



    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/flaticon_webency.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/sal.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}" />
{{-- <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}" /> --}}
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
      .card {
        height: 100%; /* Ensures the card fills the container height */
      }

      .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between; /* Distributes space between the card title and description */
      }

      .card-footer {
        flex-shrink: 0; /* Prevents the footer from shrinking */
      }
      .card-img-top {
    width: 100%; /* Full width of the card */
    height: 200px; /* Fixed height for the image container */
    overflow: hidden; /* Hide any overflowed content */
    display: flex;
    align-items: center; /* Center the image vertically */
    justify-content: center; /* Center the image horizontally */
    position: relative; /* Ensure proper positioning of overlay elements */
  }

  .card-img-top img {
    width: 100%;
    height: 200px; /* Ensure the image fills the container */
    object-fit: cover; /* Cover the container, maintaining aspect ratio */
  }

  .small-alert {
        font-size: 0.875rem; /* Smaller font size */
        padding: 0.5rem 1rem; /* Smaller padding */
    }

    /* Optional: Fade-out animation */
    .fade-out {
        transition: opacity 0.5s ease-in-out;
        opacity: 0;
    }
    .btn-close {
        position: absolute;
        top: 3rem; /* المسافة من الأعلى */
        left: 2rem; /* المسافة من اليسار */
        z-index: 1050; /* التأكد من بقاء الزر فوق المحتوى */
    }
   .responsive-img {
  width: 100%;
    max-height: 80vh; /* Ensure the maximum height is also 85% of the viewport height */
  object-fit: cover; /* Maintain aspect ratio and cover the area */
}
.bg-opacity {
            background-color: rgba(0, 0, 0, 0.5); /* Default background color with opacity */
            transition: background-color 0.3s ease; /* Smooth transition effect */
        }

        .bg-opacity:hover {
            background-color: rgba(0, 0, 0, 0.8); /* Background color with higher opacity on hover */
        }
        .text-end {
    text-align: right;
}

.d-flex {
    display: flex;
}

.align-items-center {
    align-items: center;
}

.justify-content-end {
    justify-content: flex-end;
}

.product-title, .fs-base {
    /* Ensures the font size is consistent */
    font-size: 1.25rem; /* Example size; adjust as needed */
}

.fs-sm {
    font-size: 0.875rem; /* Example size; adjust as needed */
}

.text-muted {
    color: #6c757d; /* Example muted color; adjust as needed */
}

.text-darker {
    color: #343a40; /* Example darker color; adjust as needed */
}

.btn-outline-primary{
    margin-bottom: 30px;
}

.card {
  width: 100%;
  height: 100%;
}
.card img {
  width: 100%;
  height: 100%;
}


/* Optional: Adjust max-width for different screen sizes */
@media (max-width: 576px) { /* For extra small devices */
  .responsive-img {
    max-width: 100%;
  }

  .pt-sm-0{
      /*height:20vh;*/
  }
}
    @media (max-width: 768px) {
      .bg-size-cover{
        margin-top: 100px
      }
    }
    @media (max-width:305px){
        .img-container{
      height:45vh;
  }
    }



    </style>

    <!-- Google Tag Manager-->

  </head>
  <!-- Body-->
  <body class="handheld-toolbar-enabled" style="background-color: white;">
    <!-- Google Tag Manager (noscript)-->

    <!-- Sign in / sign up modal-->
    @include('Includes.signin_signup')

    <main class="page-wrapper">
      <!-- Navbar for NFT Marketplace demo-->
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->

      @include('Includes.home_header')

      @if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 3000 // 3 seconds
            });
        });
    </script>
@endif

<!-- Check if there are any errors -->
@if ($errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let errorMessage = '';
            @foreach ($errors->all() as $error)
                errorMessage += '{{ $error }}\n';
            @endforeach

            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: errorMessage,
                showConfirmButton: false,
                timer: 3000 // 3 seconds
            });
        });
    </script>
@endif
      <!-- Hero-->
      <section class="tj-hero-section" style="direction: rtl; text-align: right; position: relative;">
        <!-- Semi-transparent overlay for better contrast -->
        <div style="background-color: rgba(0, 0, 0, 0.5); position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>

        <div class="container" style="position: relative; z-index: 1;">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="hero-left-content" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                        <div class="tj-sec-heading">
                            <span style="padding-top:10%" class="hero-sub-title"></span>
                            <h1 class="hero-title" style="color: white; text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);">
                                نقدم حلول تسويق إلكتروني شاملة لتحقيق أهداف عملك الرقمية. <span class="title"> طور من عملك !</span>
                            </h1>
                            <div class="desc">
                                <p style="color: #f0f0f0; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">
                                    نساعدك على زيادة ظهورك الرقمي والوصول إلى جمهورك المستهدف من خلال استراتيجيات تسويقية فعّالة.
                                </p>
                            </div>

                            <div class="hero-button d-flex">
                                <a class="tj-primary-btn" href="contact.html" style="background-color: #ff8800; color: white;"> تصفح خدماتنا</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hero-image-group">
                      <div class="group-image1 shake-y">
                        <img class="image" src="{{ asset('storage/' . ($settings->home1_img ?? 'assets/images/hero/hero-1.png')) }}" alt="Image" />
                    </div>
                    <div class="group-image2 pulse">
                        <img data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100"
                            src="{{ asset('storage/' . ($settings->home2_img ?? 'assets/images/hero/hero-2.png')) }}" alt="Image" />
                    </div>
                    <img class="group-image3" src="{{ asset('assets/images/shape/shape-5.svg') }}" alt="Image" />
                    <img class="group-image4 pulse" src="{{ asset('assets/images/shape/shape-6.svg') }}" alt="Image" />
                    <img class="group-image5 pulse" src="{{ asset('assets/images/shape/shape-7.svg') }}" alt="Image" />
                    <img class="group-image6 pulse" src="{{ asset('assets/images/shape/shape-8.svg') }}" alt="Image" />

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
        <div class="hero-shape3 shake-y">
            <img src="assets/images/shape/shape-4.svg" alt="Shape" />
        </div>
        <div class="hero-scroll">
            <img src="assets/images/icon/scroll-bg.svg" alt="Bg" />
            <div class="scroll-icon jump">
                <a href="#scroll-bottom"><img src="assets/images/icon/scroll.svg" alt="Icon" /></a>
            </div>
        </div>
    </section>
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
                        <div class="about-shape1 shake-y">
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
                            <span class="sub-title"> About Us</span>
                            <h2 class="sec-title">Making Your Business More Unique</h2>
                            <div class="desc">
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered alteration in some form, by injected humour, or
                                    randomised words which don't look even slightly believable.
                                </p>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered alteration in some form,
                                </p>
                                <p>
                                    by injected humour, or randomised words which don't look even slightly
                                    believable.
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
            <!-- Product carousel (Trending in)-->
      <!-- Product carousel (Recent Drops)-->
      <section style="background-color: #f8f9fa;" class="py-5">
        <div class="container text-center py-5 animate__animated animate__fadeInUp">
            <h4 class="mt-4 mb-5 fw-bold text-end display-5"><strong>أبرز الأقسام</strong></h4>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-sec-heading text-center" data-sal="slide-up" data-sal-duration="1000"
                        data-sal-delay="600">
                        <span class="sub-title"> اقسامنا</span>
                        <h2 class="sec-title">نحن نقدم العديد من الاقسام</h2>
                        <div class="desc">
                            <p>
                                It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                with the release
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
              @foreach ($categories as $category)
                <div class="col-lg-3 col-md-6 col-sm-6" data-sal="slide-up" data-sal-duration="1000"
                    data-sal-delay="100">
                    <div class="tj-service-item text-center">
                        <div class="service-inner">
                            <div class="service-icon">
                                <img class="image-1" src="{{ asset('storage/' . ($category->category_img )) }}" alt="Shape" />
                            </div>
                            <div class="service-content">
                                <h4 class="title-link">
                                  <a class="d-block text-truncate" href="{{ route('categories', $category->category_id) }}">{{ $category->category_name }}</a>
                                </h4>
                                <p>
                                  {{ $category->category_description }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-4 py-5 bg-secondary">
    <div class="container py-lg-4">
        <div class="d-flex flex-wrap mb-3" style="direction: rtl; text-align: right;">
            <h2 class="h3 mb-0" style="direction: rtl; text-align: right;">ابرز الخدمات</h2>
        </div>

        <!-- Product carousel -->
        <div class="tns-carousel tns-controls-static tns-controls-outside mx-xl-n4 mx-n2 px-xl-4 px-0">
            <div class="tns-carousel-inner row gx-xl-0 gx-3 mx-0" data-carousel-options="{&quot;items&quot;: 2, &quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1,&quot;controls&quot;: false, &quot;gutter&quot;: 0},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}, &quot;1100&quot;:{&quot;items&quot;:4}, &quot;1278&quot;:{&quot;controls&quot;: true, &quot;gutter&quot;: 30}}}">
                @foreach($products as $product)
                <div class="col py-3">
                    <article class="card h-100 border-0 shadow" style="width: 100%;">
                        <div class="card-img-top position-relative overflow-hidden">
                            <img class="avatar" src="{{ $product->Product_img ? asset('public/storage/' . $product->Product_img) : asset('img/default-product-image.jpg') }}" alt="Product image">
                            @auth
                                <button
                                    class="btn-wishlist btn-sm position-absolute top-0 end-0"
                                    type="button"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="left"
                                    title="Add to Favorites"
                                    style="margin: 12px;"
                                    onclick="addToFavorites({{ $product->product_id }})">
                                    <i class="ci-heart" style="line-height: 1.5rem;"></i>
                                </button>
                            @endauth
                        </div>

<div class="card-body">
    <a href="#signinnn-modal" data-bs-toggle="modal"
       data-product-name="{{ $product->product_name }}"
       data-product-img="{{ $product->Product_img ? asset('public/storage/' . $product->Product_img) : asset('img/default-product-image.jpg') }}"
       data-product-salary="{{ $product->product_salary }}"
       data-description="{{ $product->description }}"
       data-duration="{{ $product->Duration_of_righteousness }}"
       data-bs-target="#signinnn-modal">
        <div class="text-end">
            <h3 class="product-title mb-2 fs-base">{{ $product->product_name }}</h3>
            <span class="fs-sm text-muted">السعر:</span>
            <div class="d-flex align-items-center flex-wrap justify-content-end">
                <h4 class="mt-1 mb-0 fs-base text-darker">{{ $product->product_salary }} SAR</h4>
            </div>
        </div>
    </a>
</div>
                    </article>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@include('Includes.contact')


    <div class="modal fade" id="signinnn-modal" tabindex="-1" role="dialog"  style="direction: rtl; text-align: right;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-secondary" >
                    <h5 class="modal-title">Product Details</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-0">
                    <div class="d-sm-flex justify-content-between mb-4 pb-3 pb-sm-2 border-bottom">
                        <div class="d-sm-flex text-center text-sm-start">
                            <a class="d-inline-block flex-shrink-0 mx-auto" style="width: 15rem;">
                                <img id="modal-product-img" src="" alt="Product" style="width: 100%; height: auto;">
                            </a>
                            <div class="ps-sm-4 pt-2">
                                <h3 id="modal-product-name" class="product-title fs-base mb-2"></h3>
                                <div class="fs-sm"><span class="text-muted me-2">Description:</span><span id="modal-description"></span></div>
                                <div class="fs-sm"><span class="text-muted me-2">Duration:</span><span id="modal-duration"></span></div>
                                <div class="fs-lg text-accent pt-2">Price: <span id="modal-product-salary"></span></div>
                                <div class="mt-3">
                                  <a href="{{ route('contacts.index') }}" class="btn btn-outline-primary">طلب الخدمه عبر الايميل</a>
                                  <a href="https://api.whatsapp.com/send?phone={{$settings->whatsapp}}&text=مرحبا"  class="btn btn-outline-success">طلب الخدمه عبر الواتساب</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Styles -->
    <style>
        .card {
            transition: box-shadow 0.3s ease; /* Smooth transition for the shadow effect */
            width: 300px; /* Adjust the width as needed */
            height: 400px; /* Adjust the height as needed */
        }

        .card-img-top img {
            width: 100%; /* Make the image cover the card width */
            height: 200px; /* Adjust the height as needed */
            object-fit: cover; /* Ensure the image covers the area without distortion */
        }

        .modal-dialog {
            max-width: 800px; /* Adjust the width of the modal as needed */
        }

        .modal-content {
            padding: 1.5rem; /* Adjust the padding inside the modal as needed */
        }

        .modal-body {
            padding: 2rem; /* Adjust the padding inside the modal body as needed */
        }

        .card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Change the values as needed */
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var productModal = document.getElementById('signinnn-modal');
            productModal.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget; // Button that triggered the modal

                // Get the product data from the button's data attributes
                var productName = button.getAttribute('data-product-name');
                var productImg = button.getAttribute('data-product-img');
                var productSalary = button.getAttribute('data-product-salary');
                var description = button.getAttribute('data-description');
                var duration = button.getAttribute('data-duration');

                // Find the modal elements
                var modalProductName = productModal.querySelector('#modal-product-name');
                var modalProductImg = productModal.querySelector('#modal-product-img');
                var modalProductSalary = productModal.querySelector('#modal-product-salary');
                var modalDescription = productModal.querySelector('#modal-description');
                var modalDuration = productModal.querySelector('#modal-duration');

                // Set the modal content
                modalProductName.textContent = productName;
                modalProductImg.src = productImg;
                modalProductSalary.textContent = productSalary;
                modalDescription.textContent = description;
                modalDuration.textContent = duration;
            });
        });
    </script>


    <!-- Features-->
    <section class="container py-lg-5 py-4">
    <h2 class="mb-4 pb-md-3 pb-2" style="direction: rtl; text-align: right;">ابدأ رحلتك في التسويق الإلكتروني معنا!</h2>
    <!-- Features carousel-->
    <div class="tns-carousel mb-4">
      <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;nav&quot;: true, &quot;gutter&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1,&quot;controls&quot;: false},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}, &quot;1100&quot;:{&quot;items&quot;:4}, &quot;1278&quot;:{&quot;controls&quot;: true}}}">
        <!-- Carousel item-->
        <div style="direction: rtl; text-align: right;"><img class="mb-4" src="img/nft/features/wallet.svg" width="60" alt="Icon">
          <h4 class="mb-2 fs-lg text-body">حدد استراتيجيتك التسويقية</h4>
          <p class="mb-0 fs-sm text-muted">ابدأ بوضع استراتيجية تسويقية فعّالة لتحقيق أهدافك والوصول إلى جمهورك المستهدف.</p>
        </div>
        <!-- Carousel item-->
        <div style="direction: rtl; text-align: right;"> <img class="mb-4" src="img/nft/features/add.svg" width="60" alt="Icon">
          <h4 class="mb-2 fs-lg text-body">أنشئ حملاتك الإعلانية</h4>
          <p class="mb-0 fs-sm text-muted">صمم حملات إعلانية جذابة على مختلف المنصات لتحقيق نتائج متميزة.</p>
        </div>
        <!-- Carousel item-->
        <div style="direction: rtl; text-align: right;"><img class="mb-4" src="img/nft/features/image.svg" width="60" alt="Icon">
          <h4 class="mb-2 fs-lg text-body">إدارة محتوى وسائل التواصل الاجتماعي</h4>
          <p class="mb-0 fs-sm text-muted">قم بإدارة حساباتك على وسائل التواصل الاجتماعي وزيادة التفاعل مع جمهورك.</p>
        </div>
        <!-- Carousel item-->
        <div style="direction: rtl; text-align: right;"><img class="mb-4" src="img/nft/features/shopping-cart.svg" width="60" alt="Icon">
          <h4 class="mb-2 fs-lg text-body">تتبع وتحليل النتائج</h4>
          <p class="mb-0 fs-sm text-muted">قم بتحليل أداء حملاتك وتحسينها باستمرار لتحقيق أفضل النتائج الممكنة.</p>
        </div>
      </div>
    </div>
  </section>

    </main>
    <!-- Bg shape-->

    <!-- Footer-->
    @include('Includes.footer')

    <!-- Toolbar for handheld devices (NFT Marketplace)-->
    @include('includes.toolbar')

    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <!-- Main theme script-->
    <script src="{{ asset('js/theme.min.js') }}"></script>

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
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,  // Animation duration in ms
        once: true       // Whether animation should happen only once or every time you scroll
    });
</script>

  </body>

<!-- Mirrored from cartzilla.createx.studio/home-nft.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2022 18:11:55 GMT -->
</html>
