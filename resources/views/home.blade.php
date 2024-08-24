<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from cartzilla.createx.studio/home-nft.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2022 18:10:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Cartzilla | NFT Marketplace</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
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

      @include('Includes.home_header')

      <!-- Hero-->
      <section class="mb-lg-2 bg-faded-accent bg-size-cover" style="padding-top: 80px; background-image: url(img/nft/home/hero-bg.png);">
        <div class="container py-4">
          <div class="row align-items-center justify-content-center gy-3 py-3 text-lg-start text-center">
            <div class="col-lg-5 col-md-8 col-sm-10">
              <h1 class="mb-4 pb-lg-2">{{$settings->home_description1}}</h1>
              <p class="mb-lg-5 mb-4 fs-lg">{{$settings->home_description2}}</p>
              <div class="d-lg-flex d-none flex-sm-row flex-column justify-content-lg-start justify-content-center"><a class="btn btn-lg btn-accent me-sm-3 mb-sm-3 mb-2" href="nft-catalog-v1.html">تصفح خدماتنا</a><a class="btn btn-lg btn-outline-dark mb-sm-3 mb-2" href="nft-create-item.html">انشئ حساب</a></div>
            </div>
            <div class="col-lg-6 col-md-8 offset-lg-1 col-sm-10">
              <!-- Top auctions carousel-->
              <div class="tns-carousel tns-nav-enabled mb-4 mx-n2">
                <div class="tns-carousel-inner" data-carousel-options="{&quot;controls&quot;: false}">
                  <!-- Carousel item-->
                  <div class="px-2"><img class="rounded-3" src="img/nft/home/01.jpg" alt="Product">
                    <div class="position-relative">
                      <div class="position-absolute start-0 bottom-0 w-100 p-md-5 p-sm-4 p-3">
                        <div class="pt-sm-0 pt-2 px-sm-4 px-2 bg-white rounded shadow">
                          <div class="row gx-5">
                            <div class="col-sm-4 col-6 position-relative py-sm-3 py-2">
                              <h6 class="mb-1 fs-sm fw-normal text-muted">Current bid:</h6><span class="h6 mb-0">0.5 ETH</span>
                            </div>
                            <div class="col-sm-4 col-6 position-relative py-sm-3 py-2">
                              <hr class="hr-vertical position-absolute start-0 top-0 ml-n4">
                              <h6 class="mb-1 fs-sm fw-normal text-muted">Ends in:</h6><span class="h6 mb-0">18 hours</span>
                            </div>
                            <div class="col-sm-4 position-relative py-sm-3 py-2">
                              <hr class="hr-vertical position-absolute start-0 top-0 ml-n4 d-sm-block d-none">
                              <div class="d-flex align-items-center h-100"><a class="btn btn-sm btn-dark w-100" href="nft-single-auction-live.html">Start bid</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Carousel item-->
                  <div class="px-2"><img class="rounded-3" src="img/nft/home/02.jpg" alt="Product">
                    <div class="position-relative">
                      <div class="position-absolute start-0 bottom-0 w-100 p-md-5 p-sm-4 p-3">
                        <div class="pt-sm-0 pt-2 px-sm-4 px-2 bg-white rounded shadow">
                          <div class="row gx-5">
                            <div class="col-sm-4 col-6 position-relative py-sm-3 py-2">
                              <h6 class="mb-1 fs-sm fw-normal text-muted">Current bid:</h6><span class="h6 mb-0">0.8 ETH</span>
                            </div>
                            <div class="col-sm-4 col-6 position-relative py-sm-3 py-2">
                              <hr class="hr-vertical position-absolute start-0 top-0 ml-n4">
                              <h6 class="mb-1 fs-sm fw-normal text-muted">Ends in:</h6><span class="h6 mb-0">4 hours</span>
                            </div>
                            <div class="col-sm-4 position-relative py-sm-3 py-2">
                              <hr class="hr-vertical position-absolute start-0 top-0 ml-n4 d-sm-block d-none">
                              <div class="d-flex align-items-center h-100"><a class="btn btn-sm btn-dark w-100" href="nft-single-auction-live.html">Start bid</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Carousel item-->
                  <div class="px-2"><img class="rounded-3" src="img/nft/home/03.jpg" alt="Product">
                    <div class="position-relative">
                      <div class="position-absolute start-0 bottom-0 w-100 p-md-5 p-sm-4 p-3">
                        <div class="pt-sm-0 pt-2 px-sm-4 px-2 bg-white rounded shadow">
                          <div class="row gx-5">
                            <div class="col-sm-4 col-6 position-relative py-sm-3 py-2">
                              <h6 class="mb-1 fs-sm fw-normal text-muted">Current bid:</h6><span class="h6 mb-0">1.2 ETH</span>
                            </div>
                            <div class="col-sm-4 col-6 position-relative py-sm-3 py-2">
                              <hr class="hr-vertical position-absolute start-0 top-0 ml-n4">
                              <h6 class="mb-1 fs-sm fw-normal text-muted">Ends in:</h6><span class="h6 mb-0">10 hours</span>
                            </div>
                            <div class="col-sm-4 position-relative py-sm-3 py-2">
                              <hr class="hr-vertical position-absolute start-0 top-0 ml-n4 d-sm-block d-none">
                              <div class="d-flex align-items-center h-100"><a class="btn btn-sm btn-dark w-100" href="nft-single-auction-live.html">Start bid</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-lg-none d-flex flex-sm-row flex-column justify-content-lg-start justify-content-center"><a class="btn btn-lg btn-accent me-sm-3 mb-2" href="nft-catalog-v1.html">Explore marketplace</a><a class="btn btn-lg btn-outline-dark mb-2" href="nft-create-item.html">Create your NFT</a></div>
            </div>
          </div>
        </div>
      </section>
            <!-- Product carousel (Trending in)-->
            
          
          
          
            
          
      <!-- Product carousel (Recent Drops)-->
      <section class="container mb-2 py-lg-5 py-4">
        <div class="d-flex align-items-center justify-content-between mb-sm-3 mb-2">
          <h2 class="h3 mb-0">ابرز الأقسام</h2><a class="btn btn-outline-accent ms-3" href="nft-catalog-v1.html">اكتشف المزيد<i class="ci-arrow-right ms-2"></i></a>
        </div>
        <!-- Product carousel-->
        <div class="tns-carousel tns-controls-static tns-controls-outside mx-xl-n4 mx-n2 px-xl-4 px-0">
          <div class="tns-carousel-inner row gx-xl-0 gx-3 mx-0" data-carousel-options="{&quot;items&quot;: 2, &quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1,&quot;controls&quot;: false, &quot;gutter&quot;: 0},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}, &quot;1100&quot;:{&quot;items&quot;:4}, &quot;1278&quot;:{&quot;controls&quot;: true, &quot;nav&quot;: false, &quot;gutter&quot;: 30}}}">
            <!-- Product item-->
            {{-- @foreach ($products as $product)
            <div class="col py-3">
                <article class="card h-100 border-0 shadow">
                  <div class="card-img-top position-relative overflow-hidden"><a class="d-block" href="nft-single-auction-live.html"><img src="{{$product->image_url}}" alt="{{$product->image_meta}}"></a>
                    <!-- Countdown timer-->

                    <!-- Wishlist button-->
                    <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
                  </div>
                  <div class="card-body">
                    <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="nft-single-auction-live.html">{{$product->product_name}}</a></h3><span class="fs-sm text-muted">Current bid:</span>
                    <div class="d-flex align-items-center flex-wrap">
                      <h4 class="mt-1 mb-0 fs-base text-darker">{{$product->product_price}}</h4><span class="mt-1 ms-1 fs-xs text-muted">(≈ $ 595.76)</span>
                    </div>
                  </div>
                </article>
              </div>
            @endforeach --}}
            <div class="col py-3">
              <article class="card h-100 border-0 shadow">
                <div class="card-img-top position-relative overflow-hidden"><a class="d-block" href="nft-single-auction-live.html"><img src="img/nft/catalog/01.jpg" alt="Product image"></a>
                  <!-- Countdown timer-->
                  <div class="badge bg-dark m-3 fs-sm position-absolute top-0 start-0 zindex-5"><i class="ci-time me-1"></i>
                    <div class="countdown d-inline" data-countdown="12/31/2022 12:00:00 PM"><span class="countdown-hours mb-0 me-0"><span class="countdown-value">0</span><span class="countdown-label fs-lg">:</span></span><span class="countdown-minutes mb-0 me-0"><span class="countdown-value">0</span><span class="countdown-label fs-lg">:</span></span><span class="countdown-seconds mb-0 me-0"><span class="countdown-value">0</span></span></div>
                  </div>
                  <!-- Wishlist button-->
                  <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
                </div>
                <div class="card-body">
                  <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="nft-single-auction-live.html">3d aesthetics with shapes</a></h3><span class="fs-sm text-muted">Current bid:</span>
                  <div class="d-flex align-items-center flex-wrap">
                    <h4 class="mt-1 mb-0 fs-base text-darker">0.156 ETH</h4><span class="mt-1 ms-1 fs-xs text-muted">(≈ $ 595.76)</span>
                  </div>
                </div>
                <div class="card-footer mt-n1 py-0 border-0">
                  <div class="d-flex align-items-center position-relative mb-1 py-3 border-top"><img class="me-2 rounded-circle" src="img/nft/catalog/avatars/01.png" width="32" alt="Avatar"><a class="nav-link-style fs-sm stretched-link" href="nft-vendor.html">@foxnet_creator</a></div>
                </div>
              </article>
            </div>
            <!-- Product item-->
            <div class="col py-3">
              <article class="card h-100 border-0 shadow">
                <div class="card-img-top position-relative overflow-hidden"><a class="d-block" href="nft-single-auction-live.html"><img src="img/nft/catalog/02.jpg" alt="Product image"></a>
                  <!-- Countdown timer-->
                  <div class="badge bg-dark m-3 fs-sm position-absolute top-0 start-0 zindex-5"><i class="ci-time me-1"></i>
                    <div class="countdown d-inline" data-countdown="12/31/2022 09:00:00 PM"><span class="countdown-hours mb-0 me-0"><span class="countdown-value">0</span><span class="countdown-label fs-lg">:</span></span><span class="countdown-minutes mb-0 me-0"><span class="countdown-value">0</span><span class="countdown-label fs-lg">:</span></span><span class="countdown-seconds mb-0 me-0"><span class="countdown-value">0</span></span></div>
                  </div>
                  <!-- Wishlist button-->
                  <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
                </div>
                <div class="card-body">
                  <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="nft-single-auction-live.html">Ocean and sky</a></h3><span class="fs-sm text-muted">Current bid:</span>
                  <div class="d-flex align-items-center flex-wrap">
                    <h4 class="mt-1 mb-0 fs-base text-darker">0.5 ETH</h4><span class="mt-1 ms-1 fs-xs text-muted">(≈ $ 2,000.55)</span>
                  </div>
                </div>
                <div class="card-footer mt-n1 py-0 border-0">
                  <div class="d-flex align-items-center position-relative mb-1 py-3 border-top"><img class="me-2 rounded-circle" src="img/nft/catalog/avatars/02.png" width="32" alt="Avatar"><a class="nav-link-style fs-sm stretched-link" href="nft-vendor.html">@YunusKullebi</a></div>
                </div>
              </article>
            </div>
            <!-- Product item-->
            <div class="col py-3">
              <article class="card h-100 border-0 shadow">
                <div class="card-img-top position-relative overflow-hidden"><a class="d-block" href="nft-single-buy.html"><img src="img/nft/catalog/03.jpg" alt="Product image"></a>
                  <!-- Wishlist button-->
                  <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
                </div>
                <div class="card-body">
                  <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="nft-single-buy.html">Aesthetic art collage</a></h3><span class="fs-sm text-muted">Reserve price:</span>
                  <div class="d-flex align-items-center flex-wrap">
                    <h4 class="mt-1 mb-0 fs-base text-darker">0.6 ETH</h4><span class="mt-1 ms-1 fs-xs text-muted">(≈ $ 2,400.65)</span>
                  </div>
                </div>
                <div class="card-footer mt-n1 py-0 border-0">
                  <div class="d-flex align-items-center position-relative mb-1 py-3 border-top"><img class="me-2 rounded-circle" src="img/nft/catalog/avatars/03.png" width="32" alt="Avatar"><a class="nav-link-style fs-sm stretched-link" href="nft-vendor.html">@lulucollages</a></div>
                </div>
              </article>
            </div>
            <!-- Product item-->
            <div class="col py-3">
              <article class="card h-100 border-0 shadow">
                <div class="card-img-top position-relative overflow-hidden"><a class="d-block" href="nft-single-buy.html"><img src="img/nft/catalog/04.jpg" alt="Product image"></a>
                  <!-- Wishlist button-->
                  <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
                </div>
                <div class="card-body">
                  <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="nft-single-buy.html">Astronaut surrounded by lights</a></h3><span class="fs-sm text-muted">Reserve price:</span>
                  <div class="d-flex align-items-center flex-wrap">
                    <h4 class="mt-1 mb-0 fs-base text-darker">0.1 ETH</h4><span class="mt-1 ms-1 fs-xs text-muted">(≈ $ 400.19)</span>
                  </div>
                </div>
                <div class="card-footer mt-n1 py-0 border-0">
                  <div class="d-flex align-items-center position-relative mb-1 py-3 border-top"><img class="me-2 rounded-circle" src="img/nft/catalog/avatars/04.png" width="32" alt="Avatar"><a class="nav-link-style fs-sm stretched-link" href="nft-vendor.html">@DistroKid</a></div>
                </div>
              </article>
            </div>
            <!-- Product item-->
            <div class="col py-3">
              <article class="card h-100 border-0 shadow">
                <div class="card-img-top position-relative overflow-hidden"><a class="d-block" href="nft-single-auction-live.html"><img src="img/nft/catalog/09.jpg" alt="Product image"></a>
                  <!-- Wishlist button-->
                  <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
                </div>
                <div class="card-body">
                  <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="nft-single-auction-live.html">3d aesthetics with shapes</a></h3><span class="fs-sm text-muted">Current bid:</span>
                  <div class="d-flex align-items-center flex-wrap">
                    <h4 class="mt-1 mb-0 fs-base text-darker">0.156 ETH</h4><span class="mt-1 ms-1 fs-xs text-muted">(≈ $ 595.76)</span>
                  </div>
                </div>
                <div class="card-footer mt-n1 py-0 border-0">
                  <div class="d-flex align-items-center position-relative mb-1 py-3 border-top"><img class="me-2 rounded-circle" src="img/nft/catalog/avatars/09.png" width="32" alt="Avatar"><a class="nav-link-style fs-sm stretched-link" href="nft-vendor.html">@shubham_dhage</a></div>
                </div>
              </article>
            </div>
            <!-- Product item-->
            <div class="col py-3">
              <article class="card h-100 border-0 shadow">
                <div class="card-img-top position-relative overflow-hidden"><a class="d-block" href="nft-single-auction-live.html"><img src="img/nft/catalog/10.jpg" alt="Product image"></a>
                  <!-- Countdown timer-->
                  <div class="badge bg-dark m-3 fs-sm position-absolute top-0 start-0 zindex-5"><i class="ci-time me-1"></i>
                    <div class="countdown d-inline" data-countdown="12/31/2022 12:00:00 PM"><span class="countdown-hours mb-0 me-0"><span class="countdown-value">0</span><span class="countdown-label fs-lg">:</span></span><span class="countdown-minutes mb-0 me-0"><span class="countdown-value">0</span><span class="countdown-label fs-lg">:</span></span><span class="countdown-seconds mb-0 me-0"><span class="countdown-value">0</span></span></div>
                  </div>
                  <!-- Wishlist button-->
                  <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
                </div>
                <div class="card-body">
                  <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="nft-single-auction-live.html">Ocean and sky</a></h3><span class="fs-sm text-muted">Current bid:</span>
                  <div class="d-flex align-items-center flex-wrap">
                    <h4 class="mt-1 mb-0 fs-base text-darker">0.5 ETH</h4><span class="mt-1 ms-1 fs-xs text-muted">(≈ $ 2,000.55)</span>
                  </div>
                </div>
                <div class="card-footer mt-n1 py-0 border-0">
                  <div class="d-flex align-items-center position-relative mb-1 py-3 border-top"><img class="me-2 rounded-circle" src="img/nft/catalog/avatars/10.png" width="32" alt="Avatar"><a class="nav-link-style fs-sm stretched-link" href="nft-vendor.html">@MihailGreen</a></div>
                </div>
              </article>
            </div>
            <!-- Product item-->
            <div class="col py-3">
              <article class="card h-100 border-0 shadow">
                <div class="card-img-top position-relative overflow-hidden"><a class="d-block" href="nft-single-buy.html"><img src="img/nft/catalog/11.jpg" alt="Product image"></a>
                  <!-- Wishlist button-->
                  <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
                </div>
                <div class="card-body">
                  <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="nft-single-buy.html">Aesthetic art collage</a></h3><span class="fs-sm text-muted">Reserve price:</span>
                  <div class="d-flex align-items-center flex-wrap">
                    <h4 class="mt-1 mb-0 fs-base text-darker">0.6 ETH</h4><span class="mt-1 ms-1 fs-xs text-muted">(≈ $ 2,400.65)</span>
                  </div>
                </div>
                <div class="card-footer mt-n1 py-0 border-0">
                  <div class="d-flex align-items-center position-relative mb-1 py-3 border-top"><img class="me-2 rounded-circle" src="img/nft/catalog/avatars/11.png" width="32" alt="Avatar"><a class="nav-link-style fs-sm stretched-link" href="nft-vendor.html">@lulucollages</a></div>
                </div>
              </article>
            </div>
            <!-- Product item-->
            <div class="col py-3">
              <article class="card h-100 border-0 shadow">
                <div class="card-img-top position-relative overflow-hidden"><a class="d-block" href="nft-single-auction-live.html"><img src="img/nft/catalog/12.jpg" alt="Product image"></a>
                  <!-- Countdown timer-->
                  <div class="badge bg-dark m-3 fs-sm position-absolute top-0 start-0 zindex-5"><i class="ci-time me-1"></i>
                    <div class="countdown d-inline" data-countdown="12/31/2022 09:00:00 PM"><span class="countdown-hours mb-0 me-0"><span class="countdown-value">0</span><span class="countdown-label fs-lg">:</span></span><span class="countdown-minutes mb-0 me-0"><span class="countdown-value">0</span><span class="countdown-label fs-lg">:</span></span><span class="countdown-seconds mb-0 me-0"><span class="countdown-value">0</span></span></div>
                  </div>
                  <!-- Wishlist button-->
                  <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
                </div>
                <div class="card-body">
                  <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="nft-single-auction-live.html">Astronaut surrounded by lights</a></h3><span class="fs-sm text-muted">Reserve price:</span>
                  <div class="d-flex align-items-center flex-wrap">
                    <h4 class="mt-1 mb-0 fs-base text-darker">0.1 ETH</h4><span class="mt-1 ms-1 fs-xs text-muted">(≈ $ 400.19)</span>
                  </div>
                </div>
                <div class="card-footer mt-n1 py-0 border-0">
                  <div class="d-flex align-items-center position-relative mb-1 py-3 border-top"><img class="me-2 rounded-circle" src="img/nft/catalog/avatars/12.png" width="32" alt="Avatar"><a class="nav-link-style fs-sm stretched-link" href="nft-vendor.html">@Sharan_Pagadala</a></div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <section class="mb-4 py-5 bg-secondary">
        <div class="container py-lg-4">
            <div class="d-flex flex-wrap mb-3">
                <h2 class="h3 mb-0">الخدمات&nbsp;</h2>
                <div class="dropdown d-inline-block" data-bs-toggle="select">
                    <a class="h3 text-primary" href="#" data-bs-toggle="dropdown">
                        <span class="dropdown-toggle-label">ابرز</span>
                    </a>
                    <input type="hidden" name="trending-category">
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">All categories</span></a></li>
                        <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Premium</span></a></li>
                        <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Art</span></a></li>
                        <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Photography</span></a></li>
                        <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Music</span></a></li>
                        <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Gaming</span></a></li>
                        <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Sports</span></a></li>
                        <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Collections</span></a></li>
                        <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Utility</span></a></li>
                    </ul>
                </div>
            </div>
    
            <!-- Product carousel -->
            <div class="tns-carousel tns-controls-static tns-controls-outside mx-xl-n4 mx-n2 px-xl-4 px-0">
              <div class="tns-carousel-inner row gx-xl-0 gx-3 mx-0" data-carousel-options="{&quot;items&quot;: 2, &quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1,&quot;controls&quot;: false, &quot;gutter&quot;: 0},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}, &quot;1100&quot;:{&quot;items&quot;:4}, &quot;1278&quot;:{&quot;controls&quot;: true, &quot;gutter&quot;: 30}}}">
                  @foreach($products as $product)
                  <!-- Product item -->
                  <div class="col py-3">
                      <article class="card h-100 border-0">
                          <div class="card-img-top position-relative overflow-hidden" style="width: 285px;height: 285px;">
                              <a class="d-block" href="#">
                                  <img class="avatar" src="{{ $product->Product_img ? asset('storage/' . $product->Product_img) : asset('img/default-product-image.jpg') }}" alt="Product image">
                              </a>
                              <button 
                                  class="btn-wishlist btn-sm position-absolute top-0 end-0" 
                                  type="button" 
                                  data-bs-toggle="tooltip" 
                                  data-bs-placement="left" 
                                  title="Add to Favorites" 
                                  style="margin: 12px;"
                                  onclick="addToFavorites({{ $product->product_id }})"
                              >
                                  <i class="ci-heart"></i>
                              </button>
                          </div>
                          <div class="card-body">
                              <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="#">{{ $product->product_name }}</a></h3>
                              <span class="fs-sm text-muted">Current bid:</span>
                              <div class="d-flex align-items-center flex-wrap">
                                  <h4 class="mt-1 mb-0 fs-base text-darker">{{ $product->product_salary }} ETH</h4>
                              </div>
                          </div>
                      </article>
                  </div>
                  @endforeach
              </div>
          </div>
        </div>
    </section>


    <!-- Features-->
    <section class="container py-lg-5 py-4">
    <h2 class="mb-4 pb-md-3 pb-2">ابدأ رحلتك في التسويق الإلكتروني معنا!</h2>
    <!-- Features carousel-->
    <div class="tns-carousel mb-4">
      <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;nav&quot;: true, &quot;gutter&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1,&quot;controls&quot;: false},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}, &quot;1100&quot;:{&quot;items&quot;:4}, &quot;1278&quot;:{&quot;controls&quot;: true}}}">
        <!-- Carousel item-->
        <div><img class="mb-4" src="img/nft/features/wallet.svg" width="60" alt="Icon">
          <h4 class="mb-2 fs-lg text-body">حدد استراتيجيتك التسويقية</h4>
          <p class="mb-0 fs-sm text-muted">ابدأ بوضع استراتيجية تسويقية فعّالة لتحقيق أهدافك والوصول إلى جمهورك المستهدف.</p>
        </div>
        <!-- Carousel item-->
        <div><img class="mb-4" src="img/nft/features/add.svg" width="60" alt="Icon">
          <h4 class="mb-2 fs-lg text-body">أنشئ حملاتك الإعلانية</h4>
          <p class="mb-0 fs-sm text-muted">صمم حملات إعلانية جذابة على مختلف المنصات لتحقيق نتائج متميزة.</p>
        </div>
        <!-- Carousel item-->
        <div><img class="mb-4" src="img/nft/features/image.svg" width="60" alt="Icon">
          <h4 class="mb-2 fs-lg text-body">إدارة محتوى وسائل التواصل الاجتماعي</h4>
          <p class="mb-0 fs-sm text-muted">قم بإدارة حساباتك على وسائل التواصل الاجتماعي وزيادة التفاعل مع جمهورك.</p>
        </div>
        <!-- Carousel item-->
        <div><img class="mb-4" src="img/nft/features/shopping-cart.svg" width="60" alt="Icon">
          <h4 class="mb-2 fs-lg text-body">تتبع وتحليل النتائج</h4>
          <p class="mb-0 fs-sm text-muted">قم بتحليل أداء حملاتك وتحسينها باستمرار لتحقيق أفضل النتائج الممكنة.</p>
        </div>
      </div>
    </div>
  </section>

    </main>
    <!-- Bg shape-->
    <div class="pt-4 bg-secondary">

      <!-- Mail subscription-->
      <section class="container">
        <div class="card py-5 border-0 shadow">
          <div class="card-body py-md-4 py-3 px-4 text-center">
            <h3 class="mb-3">Never miss a drop!</h3>
            <p class="mb-4 pb-2">Subscribe to our ultra-exclusive drop list and be the first to know about upcoming drops.</p>
            <div class="widget mx-auto" style="max-width: 500px;">
              <form class="subscription-form validate" action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                <div class="input-group flex-nowrap"><i class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                  <input class="form-control rounded-start" type="email" name="EMAIL" placeholder="Your email" required>
                  <button class="btn btn-accent" type="submit" name="subscribe">Subscribe*</button>
                </div>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                  <input class="subscription-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                </div>
                <div class="form-text mt-3">*Receive early discount offers, updates and new products info.</div>
                <div class="subscription-status"></div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Footer-->
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

      </script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>


  </body>

<!-- Mirrored from cartzilla.createx.studio/home-nft.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2022 18:11:55 GMT -->
</html>
