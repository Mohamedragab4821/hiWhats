<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from cartzilla.createx.studio/nft-account-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2022 18:19:25 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Cartzilla | NFT Marketplace - Account</title>
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
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header bg-secondary">
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true"><i class="ci-unlocked me-2 mt-n1"></i>Sign in</a></li>
              <li class="nav-item"><a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab" role="tab" aria-selected="false"><i class="ci-user me-2 mt-n1"></i>Sign up</a></li>
            </ul>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body tab-content py-4">
            <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
              <div class="mb-3">
                <label class="form-label" for="si-email">Email address</label>
                <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="si-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="si-password" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <div class="mb-3 d-flex flex-wrap justify-content-between">
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" id="si-remember">
                  <label class="form-check-label" for="si-remember">Remember me</label>
                </div><a class="fs-sm" href="#">Forgot password?</a>
              </div>
              <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign in</button>
            </form>
            <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
              <div class="mb-3">
                <label class="form-label" for="su-name">Full name</label>
                <input class="form-control" type="text" id="su-name" placeholder="John Doe" required>
                <div class="invalid-feedback">Please fill in your name.</div>
              </div>
              <div class="mb-3">
                <label for="su-email">Email address</label>
                <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="su-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="su-password-confirm">Confirm password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password-confirm" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <main class="page-wrapper">
      <!-- Navbar for NFT Marketplace demo-->
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      <header class="navbar d-block navbar-sticky navbar-expand-lg navbar-light bg-light">
        <div class="container"><a class="navbar-brand d-none d-sm-block me-4 order-lg-1" href="index.html"><img src="img/logo-dark.png" width="142" alt="Cartzilla"></a><a class="navbar-brand d-sm-none me-2 order-lg-1" href="index.html"><img src="img/logo-icon.png" width="74" alt="Cartzilla"></a>
          <div class="navbar-toolbar d-flex align-items-center order-lg-3">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool d-none d-lg-flex" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#searchBox" role="button" aria-expanded="false" aria-controls="searchBox"><span class="navbar-tool-tooltip">Search</span>
              <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-search"></i></div></a>
            <div class="navbar-tool dropdown ms-lg-3 ms-2"><a class="navbar-tool-icon-box d-inline-block w-auto h-auto dropdown-toggle mt-n1" href="nft-account-settings.html"><img src="img/nft/vendor/avatar-sm.png" width="36" alt="User"></a>
              <div class="dropdown-menu dropdown-menu-end">
                <div style="min-width: 14rem;">
                  <h6 class="dropdown-header">@foxnet_creator</h6><a class="dropdown-item d-flex align-items-center" href="nft-account-settings.html"><i class="ci-settings opacity-60 me-2"></i>Profile Settings</a><a class="dropdown-item d-flex align-items-center" href="nft-account-my-items.html"><i class="ci-image opacity-60 me-2"></i>My Items<span class="fs-xs text-muted ms-auto">5</span></a><a class="dropdown-item d-flex align-items-center" href="nft-account-my-collections.html"><i class="ci-view-list opacity-60 me-2"></i>My Collections<span class="fs-xs text-muted ms-auto">2</span></a><a class="dropdown-item d-flex align-items-center" href="nft-account-favorites.html"><i class="ci-heart opacity-60 me-2"></i>Favorites<span class="fs-xs text-muted ms-auto">3</span></a><a class="dropdown-item d-flex align-items-center" href="nft-account-notifications.html"><i class="ci-bell opacity-60 me-2"></i>Notifications</a>
                </div>
              </div>
            </div><a class="btn btn-sm btn-accent rounded-1 ms-lg-4 ms-3" href="nft-create-item.html">Create</a>
          </div>
          <div class="collapse navbar-collapse me-auto order-lg-2" id="navbarCollapse">
            <!-- Search (mobile)-->
            <div class="d-lg-none py-3">
              <div class="input-group"><i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                <input class="form-control rounded-start" type="text" placeholder="What do you need?">
              </div>
            </div>
            <!-- Primary menu-->
            <ul class="navbar-nav">
              <li class="nav-item dropdown"><a class="nav-link" href="home-nft.html">Home</a></li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Catalog</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="nft-catalog-v1.html">Catalog v.1</a></li>
                  <li><a class="dropdown-item" href="nft-catalog-v2.html">Catalog v.2</a></li>
                  <li><a class="dropdown-item" href="nft-single-auction-live.html">Single Item - Auction Live</a></li>
                  <li><a class="dropdown-item" href="nft-single-auction-ended.html">Single Item - Auction Ended</a></li>
                  <li><a class="dropdown-item" href="nft-single-buy.html">Single Item - Buy Now</a></li>
                  <li><a class="dropdown-item" href="nft-vendor.html">Vendor Page</a></li>
                  <li><a class="dropdown-item" href="nft-connect-wallet.html">Connect Wallet</a></li>
                  <li><a class="dropdown-item" href="nft-create-item.html">Create New Item</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Account</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="nft-account-settings.html">Profile Settings</a></li>
                  <li><a class="dropdown-item" href="nft-account-my-items.html">My Items</a></li>
                  <li><a class="dropdown-item" href="nft-account-my-collections.html">My Collections</a></li>
                  <li><a class="dropdown-item" href="nft-account-favorites.html">Favorites</a></li>
                  <li><a class="dropdown-item" href="nft-account-notifications.html">Notifications</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="index.html">Back to main demo</a></li>
            </ul>
          </div>
        </div>
        <!-- Search collapse-->
        <div class="search-box collapse" id="searchBox">
          <div class="container py-2">
            <div class="input-group"><i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
              <input class="form-control rounded-start" type="text" placeholder="What do you need?">
            </div>
          </div>
        </div>
      </header>
      <div class="page-title-overlap bg-accent pt-4">
        <div class="container d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-between align-items-center mb-2 pt-2">
          <div class="d-flex align-items-center">
            <div class="img-thumbnail rounded-circle position-relative flex-shrink-0" style="width: 6.375rem;"><img class="rounded-circle" src="img/nft/vendor/avatar.png" alt="@foxnet_creator"></div>
            <div class="ps-3">
              <h3 class="h5 mb-2 text-light">@foxnet_creator</h3><span class="d-block text-light fs-sm opacity-60">Joined July 2021</span>
            </div>
          </div>
          <div class="my-sm-0 my-3 text-sm-end pt-1">
            <div class="d-flex align-items-center text-nowrap fs-sm">
              <div class="mb-2 me-sm-3 me-2 text-muted"><span class='fw-medium text-light'>766</span> <span class='text-white opacity-70'>followers</span></div>
              <div class="mb-2 ps-sm-3 ps-2 border-start border-light text-muted"><span class='fw-medium text-light'>2K</span> <span class='text-white opacity-70'>following</span></div>
            </div><a class="text-light" href="#">0x1dDB2C08s97...9Ecd<i class="ci-copy ms-2 fs-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy"></i></a>
          </div>
        </div>
      </div>
      <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="#">Account</a>
                </li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">Products</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">My Products</h1>
          </div>
        </div>
      </div>
      <div class="container mb-5 pb-3">
        <div class="bg-light shadow-lg rounded-3 overflow-hidden">
          <div class="row">
            <!-- Sidebar-->
            <aside class="col-lg-3 pe-xl-5">
              <!-- Account menu toggler (hidden on screens larger 992px)-->
              <div class="d-block d-lg-none p-4"><a class="btn btn-outline-accent d-block" href="#account-menu" data-bs-toggle="collapse"><i class="ci-menu me-2"></i>Account menu</a></div>
              <!-- Actual menu-->
              <div class="h-100 border-end mb-2">
                <div class="d-lg-block collapse" id="account-menu">
                  <ul class="list-unstyled mb-0">
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="nft-account-settings.html"><i class="ci-settings opacity-60 me-2"></i>Profile Settings</a></li>
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="nft-account-my-items.html"><i class="ci-image opacity-60 me-2"></i>My Items<span class="fs-sm text-muted ms-auto">5</span></a></li>
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="nft-account-my-collections.html"><i class="ci-view-list opacity-60 me-2"></i>My Collections<span class="fs-sm text-muted ms-auto">2</span></a></li>
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="nft-account-favorites.html"><i class="ci-heart opacity-60 me-2"></i>Favorites<span class="fs-sm text-muted ms-auto">3</span></a></li>
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="nft-account-notifications.html"><i class="ci-bell opacity-60 me-2"></i>Notifications</a></li>
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('productMangement') }}"><i class="ci-bell opacity-60 me-2"></i>Product Mangement</a></li>
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('categoryMangement') }}"><i class="ci-bell opacity-60 me-2"></i>Category Mangement</a></li>
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-signin.html"><i class="ci-sign-out opacity-60 me-2"></i>Sign out</a></li>
                  </ul>
                </div>
              </div>
            </aside>
            <!-- Content-->
            <section class="col-lg-8">
                <!-- Toolbar-->
                <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
                  <h6 class="fs-base text-light mb-0">List of items you added to wishlist:</h6><a class="btn btn-primary btn-sm" href="#product-modal" data-bs-toggle="modal">Add Product</a>
                </div>
                <div class="modal fade" id="product-modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header bg-secondary">
                          <ul class="nav nav-tabs card-header-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true">Add Product</a></li>
                          </ul>
                          <img src="" alt="">
                          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body tab-content py-4">
                            <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="product-form" action="{{ route('storeProduct') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Product Name -->
                                <div class="mb-3">
                                    <label class="form-label" for="product_name">Product Name</label>
                                    <input class="form-control" type="text" id="product_name" name="product_name" placeholder="Enter product name" required>
                                    <div class="invalid-feedback">Please provide a valid product name.</div>
                                </div>

                                <!-- Category ID -->
                                <div class="mb-3">
                                    <label class="form-label" for="category_id">Category ID</label>
                                    <input class="form-control" type="number" id="category_id" name="category_id" placeholder="Enter category ID" required>
                                    <div class="invalid-feedback">Please provide a valid category ID.</div>
                                </div>

                                <!-- Category Name -->
                                <div class="mb-3">
                                    <label class="form-label" for="category_name">Category Name</label>
                                    <input class="form-control" type="text" id="category_name" name="category_name" placeholder="Enter category name" required>
                                    <div class="invalid-feedback">Please provide a valid category name.</div>
                                </div>

                                <!-- Product Salary -->
                                <div class="mb-3">
                                    <label class="form-label" for="product_salary">Product Salary</label>
                                    <input class="form-control" type="number" id="product_salary" name="product_salary" placeholder="Enter product salary" required>
                                    <div class="invalid-feedback">Please provide a valid product salary.</div>
                                </div>

                                <!-- Description -->
                                <div class="mb-3">
                                    <label class="form-label" for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter product description" required></textarea>
                                    <div class="invalid-feedback">Please provide a valid description.</div>
                                </div>

                                <!-- Duration of Righteousness -->
                                <div class="mb-3">
                                    <label class="form-label" for="Duration_of_righteousness">Duration of Righteousness</label>
                                    <input class="form-control" type="text" id="Duration_of_righteousness" name="Duration_of_righteousness" placeholder="Enter duration of righteousness" required>
                                    <div class="invalid-feedback">Please provide a valid duration.</div>
                                </div>

                                <!-- Product Image -->
                                <div class="mb-3">
                                    <label class="form-label" for="Product_img">Product Image</label>
                                    <input class="form-control" type="file" id="Product_img" name="Product_img" required>
                                    <div class="invalid-feedback">Please upload a product image.</div>
                                </div>

                                <!-- Submit Button -->
                                <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Add Product</button>
                            </form>

                        </div>
                      </div>
                    </div>
                </div>
                <!-- Wishlist-->
                <!-- Item-->
                @foreach ($products as $product)
                <div class="d-sm-flex justify-content-between mt-lg-4 mb-4 pb-3 pb-sm-2 border-bottom">
                    <div class="d-block d-sm-flex align-items-start text-center text-sm-start">
                        <a class="d-block flex-shrink-0 mx-auto me-sm-4" href="shop-single-v1.html" style="width: 10rem;">
                            <img src="{{ asset('storage/' . $product->Product_img) }}" alt="Product">
                        </a>
                        <div class="pt-2">
                            <h3 class="product-title fs-base mb-2">
                                <a href="shop-single-v1.html">{{ $product->product_name }}</a>
                            </h3>
                            <div class="fs-sm">
                                <span class="text-muted me-2"> وصــف : </span> {{ $product->description }}
                            </div>
                            <div class="fs-sm">
                                <span class="text-muted me-2">تاريخ الانتهاء :</span>{{ $product->Duration_of_righteousness }}
                            </div>
                            <div class="fs-lg text-accent pt-2">{{ $product->product_salary}}</div>
                        </div>
                    </div>
                    <div class="pt-2 ps-sm-3 mx-auto mx-sm-0 text-center">
                        <form action="{{ route('deleteProduct', ['product_id' => $product->product_id]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger btn-sm" type="submit"><i class="ci-trash me-2"></i>Remove</button>
                        </form>
                    </div>
                </div>
            @endforeach


                <!-- Item-->

              </section>
          </div>
        </div>
      </div>
    </main>
    <!-- Footer-->
    <footer class="footer bg-darker">
      <div class="bg-dark">
        <div class="container py-5">
          <div class="row py-lg-4">
            <div class="col-lg-4 mb-lg-0 mb-4">
              <div class="widget pb-3 mb-lg-4">
                <h3 class="widget-title text-light pb-1">Stay informed</h3>
                <form class="subscription-form validate" action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                  <div class="input-group flex-nowrap"><i class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                    <input class="form-control rounded-start" type="email" name="EMAIL" placeholder="Your email" required>
                    <button class="btn btn-accent" type="submit" name="subscribe">Subscribe*</button>
                  </div>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true">
                    <input class="subscription-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                  </div>
                  <div class="form-text text-light opacity-50">*Subscribe to our newsletter to receive early discount offers, updates and new products info.</div>
                  <div class="subscription-status"></div>
                </form>
              </div>
              <div><a class="btn-social bs-light bs-twitter me-2 mb-2" href="#"><i class="ci-twitter"></i></a><a class="btn-social bs-light bs-facebook me-2 mb-2" href="#"><i class="ci-facebook"></i></a><a class="btn-social bs-light bs-instagram me-2 mb-2" href="#"><i class="ci-instagram"></i></a><a class="btn-social bs-light bs-pinterest me-2 mb-2" href="#"><i class="ci-pinterest"></i></a><a class="btn-social bs-light bs-youtube me-2 mb-2" href="#"><i class="ci-youtube"></i></a></div>
            </div>
            <div class="col-lg-6 offset-lg-1">
              <div class="d-flex flex-sm-row flex-column justify-content-sm-between mt-n4 mx-lg-n3">
                <div class="widget widget-links widget-light mt-4 px-lg-3 px-sm-n2">
                  <h3 class="widget-title text-light">Company</h3>
                  <ul class="widget-list">
                    <li class="widget-list-item"><a class="widget-list-link" href="#">About Us</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">How It Works</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Create an NFT With Us</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Support</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Blog</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">My Account</a></li>
                  </ul>
                </div>
                <div class="widget widget-links widget-light mt-4 px-lg-3 px-sm-n2">
                  <h3 class="widget-title text-light">Marketplace</h3>
                  <ul class="widget-list">
                    <li class="widget-list-item"><a class="widget-list-link" href="#">All NFTs</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">New</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Art</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Music</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Photography</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Utility</a></li>
                  </ul>
                </div>
                <div class="widget widget-links widget-light mt-4 px-lg-3 px-sm-n2">
                  <h3 class="widget-title text-light">Help</h3>
                  <ul class="widget-list">
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Terms and Conditions</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Privacy Policy</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">FAQ</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container my-lg-4 my-3 py-2">
        <div class="d-flex flex-md-row flex-column-reverse align-items-center justify-content-md-between">
          <div class="fs-xs text-light opacity-50">&copy; All rights reserved. Made by <a class="text-light" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></div>
          <div class="d-flex align-items-start mb-md-0 mb-3 mx-n1">
            <div class="px-1"><a class="btn-market btn-apple bg-dark" href="#"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">App Store</span></a></div>
            <div class="px-1"><a class="btn-market btn-google bg-dark" href="#"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">Google Play</span></a></div>
          </div>
        </div>
      </div>
    </footer>
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
