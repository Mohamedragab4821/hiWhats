<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{$settings->website_name}} | رؤيتنا</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="{{$settings->vision_meta_d}}">
    <meta name="keywords" content="{{$settings->vision_meta_k}}">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/' . ($settings->icon))}}">
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
        height: 100%;
      }

      .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }

      .card-footer {
        flex-shrink: 0;
      }
      .card-img-top {
        width: 100%;
        height: 200px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
      }

      .card-img-top img {
        width: 100%;
        height: 200px;
        object-fit: cover;
      }
    </style>

    <!-- Google Tag Manager-->

  </head>

  <body class="handheld-toolbar-enabled"  style="display: block;direction: rtl; text-align: right;">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Sign in / sign up modal-->
    @include('Includes.signin_signup')

    <main class="page-wrapper">
      <!-- Navbar-->
      @include('Includes.account_header')

        {{-- Content --}}
        <section class="row g-0 mt-5">
            <div class="col-md-6 bg-position-center bg-size-cover bg-secondary" style="min-height: 15rem; background-image: url(img/about/02.jpg);"></div>
            <div class="col-md-6 px-3 px-md-5 py-5">
                <div class="mx-auto py-lg-5" style="max-width: 35rem;">
                    <h2 class="h3 pb-3">رؤيتنا للنجاح المستقبلي</h2>
                    <p class="fs-sm pb-3 text-muted">
                        في [<b>فكرة</b>]، نركز على تحقيق النجاح المستدام عبر الابتكار والمثابرة. رؤيتنا تتمثل في تقديم أفضل الحلول والخدمات التي تتجاوز توقعات عملائنا وتساهم في بناء علاقات طويلة الأمد معهم.
                    </p>
                    {{-- <a class="btn btn-primary btn-shadow" href="{{ route('vision') }}">تعرف على المزيد</a> --}}
                </div>
            </div>
        </section>

        <section class="row g-0 mb-5">
            <div class="col-md-6 bg-position-center bg-size-cover bg-secondary order-md-2" style="min-height: 15rem; background-image: url(img/about/01.jpg);"></div>
            <div class="col-md-6 px-3 px-md-5 py-5 order-md-1">
                <div class="mx-auto py-lg-5" style="max-width: 35rem;">
                    <h2 class="h3 pb-3">الابتكار في صميم كل شيء نقوم به</h2>
                    <p class="fs-sm pb-3 text-muted">
                        نحن نؤمن أن الابتكار هو المفتاح لتحقيق التفوق في السوق. رؤيتنا تركز على تبني التقنيات الحديثة وتطوير حلول مبتكرة لتلبية احتياجات عملائنا في عالم سريع التغير.
                    </p>
                    {{-- <a href="#" data-bs-toggle="modal" data-bs-target="#innovationModal" class="btn btn-accent btn-shadow">اكتشف حلولنا المبتكرة</a> --}}
                </div>
            </div>
        </section>
        {{-- Content --}}

        @include('Includes.footer')

      <!-- Toolbar for handheld devices-->
      @include('Includes.toolbar')

      <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">   </i></a>
      <!-- Vendor scripts: js libraries and plugins-->
      <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('vendor/simplebar/dist/simplebar.min.js') }}"></script>
      <script src="{{ asset('vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
      <script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
      <!-- Main theme script-->
      <script src="{{ asset('js/theme.min.js') }}"></script>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    </body>

  </html>
