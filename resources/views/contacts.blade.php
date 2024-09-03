<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from cartzilla.createx.studio/contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2022 18:19:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>{{$settings->website_name}} </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/' . ($settings->icon))}}">
    <link rel="mask-icon" color="#fe6a6a" href="{{ asset('safari-pinned-tab.svg') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <style></style>
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/simplebar/dist/simplebar.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/tiny-slider/dist/tiny-slider.css') }}"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('css/theme.min.css') }}">

    <!-- Google Tag Manager-->

  </head>
  <!-- Body-->
  <body class="handheld-toolbar-enabled" style="background-color: white; overflow-x: hidden">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Sign in / sign up modal-->
    @include('Includes.signin_signup')

    <main class="page-wrapper">
      <!-- Navbar 3 Level (Light)-->
      @include('Includes.account_header')

      <!-- Page Title (Light)-->
      <div class="bg-secondary py-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3"  style="direction: rtl; text-align: right;">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="{{route('home')}}"><i class="ci-home"></i>الصفحه الرئيسية</a></li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 mb-0">تواصل</h1>
          </div>
        </div>
      </div>
      <!-- Contact detail cards-->
      <section class="container-fluid pt-grid-gutter">
        <div class="row" style="display: flex;justify-content: center">
          <div class="col-xl-3 col-sm-6 mb-grid-gutter">
            <div class="card h-100">
              <div class="card-body text-center"><i class="ci-phone h3 mt-2 mb-4 text-primary"></i>
                <h3 class="h6 mb-3">ارقام الاتصال</h3>
                <ul class="list-unstyled fs-sm mb-0">
                  <li><span class="text-muted me-1">واتساب:</span><a class="nav-link-style" href="https://api.whatsapp.com/send?phone={{$settings->whatsapp}}&text=مرحبا">{{$settings->whatsapp}}</a></li>
                  <li><span class="text-muted me-1">مكالمات:</span><a class="nav-link-style" href="tel:{{$settings->phone}}">{{$settings->phone}}</a></li>

                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-grid-gutter">
            <div class="card h-100">
              <div class="card-body text-center"><i class="ci-mail h3 mt-2 mb-4 text-primary"></i>
                <h3 class="h6 mb-3">ايميل الاتصال</h3>
                <ul class="list-unstyled fs-sm mb-0">
                  <li><span class="text-muted me-1"></span><a class="nav-link-style" href="mailto:{{$settings->email}}">{{$settings->email}}</a></li>
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
            <h2 class="h4 mb-4" style="direction: rtl; text-align: right;">تواصل معنا</h2>

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
            @elseif (session('error'))
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: '{{ session('error') }}',
                            showConfirmButton: false,
                            timer: 3000 // 3 seconds
                        });
                    });
                </script>
            @endif

            <form class="needs-validation mb-3" novalidate action="{{ route('contacts.store') }}" method="POST" style="direction: rtl; text-align: right;">
                @csrf
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label class="form-label" for="cf-name">الاسم:&nbsp;<span class="text-danger">*</span></label>
                        <input class="form-control" type="text" id="cf-name" placeholder="John Doe" required name="name">
                        <div class="invalid-feedback">Please fill in your name!</div>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="cf-email">الايميل:&nbsp;<span class="text-danger">*</span></label>
                        <input class="form-control" type="email" id="cf-email" placeholder="johndoe@email.com" required name="email">
                        <div class="invalid-feedback">Please provide a valid email address!</div>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="cf-phone">الهاتف:&nbsp;<span class="text-danger">*</span></label>
                        <input class="form-control" type="text" id="cf-phone" placeholder="+1 (212) 00 000 000" required name="phone">
                        <div class="invalid-feedback">Please provide a valid phone number!</div>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="cf-subject">الخدمه:</label>
                        <input class="form-control" type="text" id="cf-subject" name="product">
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="cf-message">ارساله:&nbsp;<span class="text-danger">*</span></label>
                        <textarea class="form-control" id="cf-message" rows="6" placeholder="Please describe in detail your request" required name="message"></textarea>
                        <div class="invalid-feedback">Please write a message!</div>
                        <button class="btn btn-primary mt-4" type="submit">ارسال</button>
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
    @include('Includes.toolbar')

    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <!-- Main theme script-->
    <script src="{{ asset('js/theme.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </body>

<!-- Mirrored from cartzilla.createx.studio/contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2022 18:20:10 GMT -->
</html>
