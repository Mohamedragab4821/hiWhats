<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from cartzilla.createx.studio/home-nft.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2022 18:10:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>{{$settings->website_name}} | من نـحـن </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="{{$settings->home_meta_d}}">
    <meta name="keywords" content="{{$settings->home_meta_k}}">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/' . ($settings->icon))}}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="mask-icon" color="#fe6a6a" href="{{ asset('safari-pinned-tab.svg') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/simplebar/dist/simplebar.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/tiny-slider/dist/tiny-slider.css') }}"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('css/theme.min.css') }}">
    <style>
      body{
        display: block;
      }
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

    </style>

    <!-- Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
  </head>

  <body class="handheld-toolbar-enabled" style="display: block">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Sign in / sign up modal-->
    @include('Includes.signin_signup')

    <main class="page-wrapper">
      <!-- Navbar for NFT Marketplace demo-->
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->

      @include('Includes.account_header')
        {{-- Content --}}

        <section class="row g-0">
            <div class="col-md-6 bg-position-center bg-size-cover bg-secondary" style="min-height: 15rem; background-image: url(img/about/01.jpg);"></div>
            <div class="col-md-6 px-3 px-md-5 py-5">
                <div class="mx-auto py-lg-5" style="max-width: 35rem;">
                    <h2 class="h3 pb-3" style="direction: rtl; text-align: right;">حلول رسائل واتساب بسهولة</h2>
                    <p class="fs-sm pb-3 text-muted" style="direction: rtl; text-align: right;">
                        في فكره، نحن متخصصون في تقديم حلول رسائل واتساب المميزة والخدمات ذات الصلة. منصتنا تتيح لك اختيار وتخصيص وشراء الحزم التي تناسب احتياجات عملك بكل سهولة. سواء كنت تتواصل مع العملاء أو تروج لعروض جديدة، فإننا نوفر لك طريقة بسيطة وفعالة.
                    </p>
                    <a class="btn btn-primary btn-shadow" href="{{ route('services') }}">استكشاف العروض</a>
                </div>
            </div>
        </section>

        {{-- _____________________________________ --}}

        <section class="row g-0">
            <div class="col-md-6 bg-position-center bg-size-cover bg-secondary order-md-2" style="min-height: 15rem; background-image: url(img/about/02.jpg);"></div>
            <div class="col-md-6 px-3 px-md-5 py-5 order-md-1">
                <div class="mx-auto py-lg-5" style="max-width: 35rem;">
                    <h2 class="h3 pb-3" style="direction: rtl; text-align: right;">وصول عالمي وتسليم سريع</h2>
                    <p class="fs-sm pb-3 text-muted" style="direction: rtl; text-align: right;">
                        خدماتنا متاحة في جميع أنحاء العالم، مما يضمن تسليمًا سريعًا ودعمًا موثوقًا بغض النظر عن مكان عملك. مع حزم قابلة للتخصيص والتزام بالجودة، نساعدك على البقاء متصلاً بجمهورك بطريقة فعالة وشخصية.
                    </p>
                    <a href="https://api.whatsapp.com/send?phone={{$settings->whatsapp}}&text=مرحبا" class="btn btn-accent btn-shadow">طلب الخدمه عبر الواتساب</a>
                </div>
            </div>
        </section>

        {{-- Content --}}


        @include('Includes.footer')

      <!-- Toolbar for handheld devices (NFT Marketplace)-->
      <div class="handheld-toolbar">
        <div class="d-table table-layout-fixed w-100"><a class="d-none handheld-toolbar-item" href="#vendor-sidebar" data-bs-toggle="offcanvas"><span class="handheld-toolbar-icon"><i class="ci-sign-in"></i></span><span class="handheld-toolbar-label">Sidebar</span></a><a class="d-table-cell handheld-toolbar-item" href="#signin-modal" data-bs-toggle="modal"><span class="handheld-toolbar-icon"><i class="ci-user"></i></span><span class="handheld-toolbar-label">Account</span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a><a class="d-table-cell handheld-toolbar-item" href="nft-connect-wallet.html"><span class="handheld-toolbar-icon"><i class="ci-wallet"></i></span><span class="handheld-toolbar-label text-nowrap">Connect wallet</span></a>
        </div>
      </div>
      <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">   </i></a>
      <!-- Vendor scrits: js libraries and plugins-->
      <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('vendor/simplebar/dist/simplebar.min.js') }}"></script>
      <script src="{{ asset('vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
      <script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
      <!-- Main theme script-->
      <script src="{{ asset('js/theme.min.js') }}"></script>


        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>


    </body>

  <!-- Mirrored from cartzilla.createx.studio/home-nft.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2022 18:11:55 GMT -->
  </html>
