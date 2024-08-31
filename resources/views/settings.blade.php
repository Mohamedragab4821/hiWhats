<!DOCTYPE html>
<html lang="ar" dir="rtl">
  
<!-- Mirrored from cartzilla.createx.studio/nft-account-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2022 18:19:25 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>{{$settings->website_name}} </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - قالب التجارة الإلكترونية بوتستراب">
    <meta name="keywords" content="بوتستراب، متجر، تجارة إلكترونية، سوق، حديث، متجاوب، أعمال، موبايل، بوتستراب، HTML5، CSS3، JS، معرض، شريط تمرير، تفاعلي، أنيق">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/' . ($settings->icon))}}">
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
      <!-- Navbar for NFT Marketplace demo-->
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      @include('Includes.account_header')

      @include('Includes.navBar')

      <div class="container mb-5 pb-3">
        <div class="bg-light shadow-lg rounded-3 overflow-hidden">
          <div class="row">
            <!-- Sidebar-->
            @include('Includes.leftSideMenue')

            <!-- Content-->

            <section class="col-lg-9 pt-lg-4 pb-4 mb-3">
                <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
                    <h1 class="h3 mb-4 pt-2 text-center text-sm-end">إعدادات الموقع</h1>
            
                    <!-- Display success or error messages -->
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @elseif (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
            
                    
            
                    <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="bg-secondary rounded-3 p-4 mb-4 text-center text-sm-start">
                            <div class="d-flex flex-sm-row flex-column align-items-sm-start align-items-center">
                                <img class="rounded mb-sm-0 mb-3" src="{{ asset('storage/' . ($settings->logo ?? 'default_logo.jpg')) }}" width="90" alt="الشعار">
                                <div class="ms-n2 ps-sm-4">
                                    <label class="form-label" for="logo">الشعار</label>
                                    <input class="form-control" type="file" id="logo" name="logo">
                                </div>
                            </div>
                        </div>
                
                        <div class="bg-secondary rounded-3 p-4 mb-4 text-center text-sm-start">
                            <div class="d-flex flex-sm-row flex-column align-items-sm-start align-items-center">
                                <img class="rounded mb-sm-0 mb-3" src="{{ asset('storage/' . ($settings->icon ?? 'default_icon.jpg')) }}" width="90" alt="الرمز">
                                <div class="ms-n2 ps-sm-4">
                                    <label class="form-label" for="icon">الرمز</label>
                                    <input class="form-control" type="file" id="icon" name="icon">
                                </div>
                            </div>
                        </div>
                        <div class="row gy-3 mb-4 pb-md-3 mb-2">
                            <div class="col-sm-6">
                                <label class="form-label" for="website_name">اسم الموقع</label>
                                <input class="form-control" id="website_name" name="website_name" type="text" value="{{ old('website_name', $settings->website_name ?? '') }}">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label" for="website_description">وصف الموقع</label>
                                <input class="form-control" id="website_description" name="website_description" type="text" placeholder="أدخل الوصف" value="{{ old('website_description', $settings->website_description ?? '') }}">
                            </div>

                            <div class="col-sm-6">
                                <label class="form-label" for="whatsapp">Whatsapp Number</label>
                                <input class="form-control" id="whatsapp" name="whatsapp" type="text" placeholder="Enter whatsapp" value="{{ old('whatsapp', $settings->whatsapp ?? '') }}">
                            </div>
                            <div class="col-sm-6">
                              <label class="form-label" for="home_description1">وصف الصفحة الرئيسية 1</label>
                              <input class="form-control" id="home_description1" name="home_description1" type="text" placeholder="أدخل الوصف" value="{{ old('home_description1', $settings->home_description1 ?? '') }}">
                          </div>
                          <div class="col-sm-6">
                              <label class="form-label" for="home_description2">وصف الصفحة الرئيسية 2</label>
                              <input class="form-control" id="home_description2" name="home_description2" type="text" placeholder="أدخل الوصف" value="{{ old('home_description2', $settings->home_description2 ?? '') }}">
                          </div>
            
                            <h6>إعدادات SEO</h6>
                            <div class="col-12">
                                <label class="form-label" for="home_meta_k">الكلمات الرئيسية لصفحة المنزل</label>
                                <textarea class="form-control" id="home_meta_k" name="home_meta_k" rows="4" placeholder="مثال: كلمة1،كلمة2">{{ old('home_meta_k', $settings->home_meta_k ?? '') }}</textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="home_meta_d">وصف ميتا لصفحة المنزل</label>
                                <textarea class="form-control" id="home_meta_d" name="home_meta_d" rows="4" placeholder="مثال: وصف مختصر">{{ old('home_meta_d', $settings->home_meta_d ?? '') }}</textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="product_meta_k">الكلمات الرئيسية للمنتجات</label>
                                <textarea class="form-control" id="product_meta_k" name="product_meta_k" rows="4" placeholder="مثال: كلمة1،كلمة2">{{ old('product_meta_k', $settings->product_meta_k ?? '') }}</textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="product_meta_d">وصف ميتا للمنتجات</label>
                                <textarea class="form-control" id="product_meta_d" name="product_meta_d" rows="4" placeholder="مثال: وصف مختصر">{{ old('product_meta_d', $settings->product_meta_d ?? '') }}</textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="category_meta_k">الكلمات الرئيسية للفئات</label>
                                <textarea class="form-control" id="category_meta_k" name="category_meta_k" rows="4" placeholder="مثال: كلمة1،كلمة2">{{ old('category_meta_k', $settings->category_meta_k ?? '') }}</textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="category_meta_d">وصف ميتا للفئات</label>
                                <textarea class="form-control" id="category_meta_d" name="category_meta_d" rows="4" placeholder="مثال: وصف مختصر">{{ old('category_meta_d', $settings->category_meta_d ?? '') }}</textarea>
                            </div>
                        </div>
                        <div class="text-center text-sm-start">
                            <button class="btn btn-primary" type="submit">تحديث</button>
                        </div>
                    </form>
                </div>
            </section>
          </div>
        </div>
      </div>

      <!-- Footer-->
      @include('Includes.footer')
    </main>
    
    <!-- Vendor Scripts-->
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <!-- Main Theme Script-->
    <script src="{{ asset('js/theme.min.js') }}"></script>
    <!-- Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
  </body>
</html>
