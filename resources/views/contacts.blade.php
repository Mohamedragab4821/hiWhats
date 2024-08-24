<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from cartzilla.createx.studio/contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2022 18:19:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Cartzilla | Contacts</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="mask-icon" color="#fe6a6a" href="{{ asset('safari-pinned-tab.svg') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/simplebar/dist/simplebar.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/tiny-slider/dist/tiny-slider.css') }}"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('css/theme.min.css') }}">

    <!-- Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
  </head>
  <!-- Body-->
  <body class="handheld-toolbar-enabled">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Sign in / sign up modal-->
    @include('Includes.signin_signup')

    <main class="page-wrapper">
      <!-- Navbar 3 Level (Light)-->
      @include('Includes.home_header')
      <br><br><br><br>
      <!-- Page Title (Light)-->
      <div class="bg-secondary py-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="{{route('home')}}"><i class="ci-home"></i>Home</a></li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">Contacts</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 mb-0">Contacts</h1>
          </div>
        </div>
      </div>
      <!-- Contact detail cards-->
      <section class="container-fluid pt-grid-gutter">
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-grid-gutter"><a class="card h-100" href="#map" data-scroll>
              <div class="card-body text-center"><i class="ci-location h3 mt-2 mb-4 text-primary"></i>
                <h3 class="h6 mb-2">Main store address</h3>
                <p class="fs-sm text-muted">396 Lillian Blvd, Holbrook, NY 11741, USA</p>
                <div class="fs-sm text-primary">Click to see map<i class="ci-arrow-right align-middle ms-1"></i></div>
              </div></a></div>
          <div class="col-xl-3 col-sm-6 mb-grid-gutter">
            <div class="card h-100">
              <div class="card-body text-center"><i class="ci-time h3 mt-2 mb-4 text-primary"></i>
                <h3 class="h6 mb-3">Working hours</h3>
                <ul class="list-unstyled fs-sm text-muted mb-0">
                  <li>Mon - Fri: 10AM - 7PM</li>
                  <li class="mb-0">Sta: 11AM - 5PM</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-grid-gutter">
            <div class="card h-100">
              <div class="card-body text-center"><i class="ci-phone h3 mt-2 mb-4 text-primary"></i>
                <h3 class="h6 mb-3">Phone numbers</h3>
                <ul class="list-unstyled fs-sm mb-0">
                  <li><span class="text-muted me-1">For customers:</span><a class="nav-link-style" href="tel:+108044357260">+1 (080) 44 357 260</a></li>
                  <li class="mb-0"><span class="text-muted me-1">Tech support:</span><a class="nav-link-style" href="tel:+100331697720">+1 00 33 169 7720</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-grid-gutter">
            <div class="card h-100">
              <div class="card-body text-center"><i class="ci-mail h3 mt-2 mb-4 text-primary"></i>
                <h3 class="h6 mb-3">Email addresses</h3>
                <ul class="list-unstyled fs-sm mb-0">
                  <li><span class="text-muted me-1">For customers:</span><a class="nav-link-style" href="mailto:+108044357260">customer@example.com</a></li>
                  <li class="mb-0"><span class="text-muted me-1">Tech support:</span><a class="nav-link-style" href="mailto:support@example.com">support@example.com</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Split section: Map + Contact form-->
      <div class="container-fluid px-0" id="map">
        <div class="row g-0">
          <!-- Display success or error messages -->
          

          <div class="col-lg-12 px-8 px-xl-10 py-10 border-top">
            <h2 class="h4 mb-4">Drop us a line</h2>
            @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @elseif (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <form class="needs-validation mb-3" novalidate action="{{route('contacts.store')}}" method="POST">
              @csrf
              <div class="row g-3">
                <div class="col-sm-6">
                  <label class="form-label" for="cf-name">الاسم:&nbsp;<span class="text-danger">*</span></label>
                  <input class="form-control" type="text" id="cf-name" placeholder="John Doe" required name="name">
                  <div class="invalid-feedback">Please fill in you name!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="cf-email">الايميل:&nbsp;<span class="text-danger">*</span></label>
                  <input class="form-control" type="email" id="cf-email" placeholder="johndoe@email.com" required name="email">
                  <div class="invalid-feedback">Please provide valid email address!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="cf-phone">الهاتف:&nbsp;<span class="text-danger">*</span></label>
                  <input class="form-control" type="text" id="cf-phone" placeholder="+1 (212) 00 000 000" required name="phone">
                  <div class="invalid-feedback">Please provide valid phone number!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="cf-subject">الخدمه:</label>
                  <input class="form-control" type="text" id="cf-subject" name="product">
                </div>
                <div class="col-12">
                  <label class="form-label" for="cf-message">ارساله:&nbsp;<span class="text-danger">*</span></label>
                  <textarea class="form-control" id="cf-message" rows="6" placeholder="Please describe in detail your request" required name="message"></textarea>
                  <div class="invalid-feedback">Please write a message!</div>
                  <button class="btn btn-primary mt-4" type="submit">Send message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
    <!-- Footer-->
    @include('Includes.footer')

    <!-- Toolbar for handheld devices (Default)-->
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item" href="account-wishlist.html"><span class="handheld-toolbar-icon"><i class="ci-heart"></i></span><span class="handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a><a class="d-table-cell handheld-toolbar-item" href="shop-cart.html"><span class="handheld-toolbar-icon"><i class="ci-cart"></i><span class="badge bg-primary rounded-pill ms-1">4</span></span><span class="handheld-toolbar-label">$265.00</span></a></div>
    </div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <!-- Main theme script-->
    <script src="{{ asset('js/theme.min.js') }}"></script>

  </body>

<!-- Mirrored from cartzilla.createx.studio/contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2022 18:20:10 GMT -->
</html>