<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from cartzilla.createx.studio/nft-account-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2022 18:19:25 GMT -->
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
                    <h1 class="h3 mb-4 pt-2 text-center text-sm-start">Website Settings</h1>
            
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
                                <img class="rounded mb-sm-0 mb-3" src="{{ asset('storage/' . ($settings->logo ?? 'default_logo.jpg')) }}" width="90" alt="Logo">
                                <div class="ms-n2 ps-sm-4">
                                    <label class="form-label" for="logo">Logo</label>
                                    <input class="form-control" type="file" id="logo" name="logo">
                                </div>
                            </div>
                        </div>
                
                        <div class="bg-secondary rounded-3 p-4 mb-4 text-center text-sm-start">
                            <div class="d-flex flex-sm-row flex-column align-items-sm-start align-items-center">
                                <img class="rounded mb-sm-0 mb-3" src="{{ asset('storage/' . ($settings->icon ?? 'default_icon.jpg')) }}" width="90" alt="Icon">
                                <div class="ms-n2 ps-sm-4">
                                    <label class="form-label" for="icon">Icon</label>
                                    <input class="form-control" type="file" id="icon" name="icon">
                                </div>
                            </div>
                        </div>
                        <div class="row gy-3 mb-4 pb-md-3 mb-2">
                            <div class="col-sm-6">
                                <label class="form-label" for="website_name">Website Name</label>
                                <input class="form-control" id="website_name" name="website_name" type="text" value="{{ old('website_name', $settings->website_name ?? '') }}">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label" for="website_description">Website Description</label>
                                <input class="form-control" id="website_description" name="website_description" type="text" placeholder="Enter description" value="{{ old('website_description', $settings->website_description ?? '') }}">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label" for="whatsapp">Whatsapp Number</label>
                                <input class="form-control" id="whatsapp" name="whatsapp" type="text" placeholder="Enter whatsapp" value="{{ old('whatsapp', $settings->whatsapp ?? '') }}">
                            </div>
                            <div class="col-sm-6">
                              <label class="form-label" for="website_name">Home Description 1</label>
                              <input class="form-control" id="website_name" name="home_description1" type="text" placeholder="Enter description" value="{{ old('home_description1', $settings->home_description1 ?? '') }}">
                          </div>
                          <div class="col-sm-6">
                              <label class="form-label" for="website_description">Home Description 2</label>
                              <input class="form-control" id="website_description" name="home_description2" type="text" placeholder="Enter description" value="{{ old('home_description2', $settings->home_description2 ?? '') }}">
                          </div>
            
                            <h6>SEO Settings</h6>
                            <div class="col-12">
                                <label class="form-label" for="home_meta_k">Home Meta Keywords</label>
                                <textarea class="form-control" id="home_meta_k" name="home_meta_k" rows="4" placeholder="ex. word1,word2">{{ old('home_meta_k', $settings->home_meta_k ?? '') }}</textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="home_meta_d">Home Meta Description</label>
                                <textarea class="form-control" id="home_meta_d" name="home_meta_d" rows="4" placeholder="ex. word1,word2">{{ old('home_meta_d', $settings->home_meta_d ?? '') }}</textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="product_meta_k">Product Meta Keywords</label>
                                <textarea class="form-control" id="product_meta_k" name="product_meta_k" rows="4" placeholder="ex. word1,word2">{{ old('product_meta_k', $settings->product_meta_k ?? '') }}</textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="product_meta_d">Product Meta Description</label>
                                <textarea class="form-control" id="product_meta_d" name="product_meta_d" rows="4" placeholder="ex. word1,word2">{{ old('product_meta_d', $settings->product_meta_d ?? '') }}</textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="category_meta_k">Category Meta Keywords</label>
                                <textarea class="form-control" id="category_meta_k" name="category_meta_k" rows="4" placeholder="ex. word1,word2">{{ old('category_meta_k', $settings->category_meta_k ?? '') }}</textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="category_meta_c">Category Meta Description</label>
                                <textarea class="form-control" id="category_meta_c" name="category_meta_c" rows="4" placeholder="ex. word1,word2">{{ old('category_meta_c', $settings->category_meta_c ?? '') }}</textarea>
                            </div>
            
                            <h6>Social Media Links</h6>
                            <div class="col-12">
                                <label class="form-label" for="facebook_url">Facebook URL</label>
                                <input class="form-control" id="facebook_url" name="facebook_url" type="text" value="{{ old('facebook_url', $settings->facebook_url ?? '') }}">
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="twitter_url">Twitter URL</label>
                                <input class="form-control" id="twitter_url" name="twitter_url" type="text" value="{{ old('twitter_url', $settings->twitter_url ?? '') }}">
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="insta_url">Instagram URL</label>
                                <input class="form-control" id="insta_url" name="insta_url" type="text" value="{{ old('insta_url', $settings->insta_url ?? '') }}">
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="youtube_url">YouTube URL</label>
                                <input class="form-control" id="youtube_url" name="youtube_url" type="text" value="{{ old('youtube_url', $settings->youtube_url ?? '') }}">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary px-5" type="submit">Save Changes</button>
                        </div>
                    </form>
                </div>
            </section>
            
            
          </div>
        </div>
      </div>
    </main>
    <!-- Footer-->
    @include('Includes.footer')

    <!-- Toolbar for handheld devices (NFT Marketplace)-->
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item" href="nft-account-settings.html" data-bs-toggle="modal"><span class="handheld-toolbar-icon"><i class="ci-user"></i></span><span class="handheld-toolbar-label">Account</span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a><a class="d-table-cell handheld-toolbar-item" href="nft-create-item.html"><span class="handheld-toolbar-icon"><i class="ci-add"></i></span><span class="handheld-toolbar-label">Create item</span></a>
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

  </body>

<!-- Mirrored from cartzilla.createx.studio/nft-account-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2022 18:19:25 GMT -->
</html>