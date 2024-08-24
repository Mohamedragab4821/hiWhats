<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from cartzilla.createx.studio/marketplace-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2022 18:16:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>{{$settings->website_name}} | Categoris</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="{{$settings->category_meta_d}}">
    <meta name="keywords" content="{{$settings->category_meta_k}}">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/' . ($settings->logo))}}">
<link rel="manifest" href="{{ asset('site.webmanifest') }}">
<link rel="mask-icon" color="#fe6a6a" href="{{ asset('safari-pinned-tab.svg') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<!-- Vendor Styles including: Font Icons, Plugins, etc.-->
<link rel="stylesheet" media="screen" href="{{ asset('vendor/simplebar/dist/simplebar.min.css') }}">
<link rel="stylesheet" media="screen" href="{{ asset('vendor/tiny-slider/dist/tiny-slider.css') }}">
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
      <!-- Navbar Marketplace-->
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      @include('Includes.account_header')

      <!-- Used for marketplace templates with filters on top-->
      <div class="bg-accent pt-4 pb-5">
        <div class="container pt-2 pb-3 pt-lg-3 pb-lg-4">
          <div class="d-lg-flex justify-content-between pb-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                  <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
                  <li class="breadcrumb-item text-nowrap"><a href="home-marketplace.html">Market</a>
                  </li>
                  <li class="breadcrumb-item text-nowrap active" aria-current="page">Inside category</li>
                </ol>
              </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
              <h1 class="h3 text-light mb-0">Marketplace category</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="container pb-5 mb-2 mb-md-4">
        <!-- Toolbar-->
        <div class="bg-light shadow-lg rounded-3 mt-n5 mb-4">
          <div class="d-flex align-items-center ps-2">
            <!-- Search-->
            <div class="input-group"><i class="ci-search position-absolute top-50 start-0 translate-middle-y fs-md ms-3"></i>
              <input class="form-control border-0 shadow-none" type="text" placeholder="Search in this category...">
            </div>
            <!-- Sort-->
            <div class="d-flex align-items-center">
              <div class="dropdown py-4 border-start"><a class="nav-link-style fs-md fw-medium dropdown-toggle p-4" href="#" data-bs-toggle="dropdown"><span class="d-inline-block py-1"><i class="ci-thumb-up align-middle opacity-60 mt-n1 me-2"></i>Popular</span></a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="#"><i class="ci-flag me-2 opacity-60"></i>Newest</a></li>
                  <li><a class="dropdown-item" href="#"><i class="ci-rocket me-2 opacity-60"></i>Bestsellers</a></li>
                  <li><a class="dropdown-item" href="#"><i class="ci-loading me-2 opacity-60"></i>Updated</a></li>
                  <li><a class="dropdown-item" href="#"><i class="ci-arrow-down me-2 opacity-60"></i>Low Price</a></li>
                  <li><a class="dropdown-item" href="#"><i class="ci-arrow-up me-2 opacity-60"></i>High Price</a></li>
                </ul>
              </div>
            </div>
            <!-- Pagination-->
            <div class="d-none d-md-flex align-items-center border-start ps-4"><span class="fs-md text-nowrap me-4">Pages&nbsp; 1 / 5</span><a class="nav-link-style p-4 border-start" href="#"><span class="d-inline-block py-1"><i class="ci-arrow-left"></i></span></a><a class="nav-link-style p-4 border-start" href="#"><span class="d-inline-block py-1"><i class="ci-arrow-right"></i></span></a></div>
          </div>
        </div>
        <!-- Products grid-->
        <div class="row pt-3 mx-n2">
          <!-- Product-->
          @foreach($products as $product)

          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
            <div class="card product-card-alt">
              <div class="product-thumb" style="height: 280px;width: 280px;" >
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
                <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="marketplace-single.html"><i class="ci-eye"></i></a>
                  <button class="btn btn-light btn-icon btn-shadow fs-base mx-2" type="button"><i class="ci-cart"></i></button>
                </div><a class="product-thumb-overlay" href="marketplace-single.html"></a><img src="{{ asset('storage/'.$product->Product_img) }}" alt="Product">
              </div>
              <div class="card-body">
                
                <h3 class="product-title fs-sm mb-2"><a href="marketplace-single.html">{{ $product->product_name }}</a></h3>
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                  <div class="fs-sm me-2"><i class="ci-download text-muted me-1"></i>{{ $product->category_name }}</div>
                  <div class="bg-faded-accent text-accent rounded-1 py-1 px-2">{{ $product->product_name }}</div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <hr class="my-3">
        <!-- Pagination-->
        <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#"><i class="ci-arrow-left me-2"></i>Prev</a></li>
          </ul>
          <ul class="pagination">
            <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
            <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">5</a></li>
          </ul>
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#" aria-label="Next">Next<i class="ci-arrow-right ms-2"></i></a></li>
          </ul>
        </nav>
      </div>
    </main>
    <!-- Footer-->
    <footer class="footer bg-dark pt-5">
      <div class="container pt-2 pb-3">
        <div class="row">
          <div class="col-md-6 text-center text-md-start mb-4">
            <div class="text-nowrap mb-3"><a class="d-inline-block align-middle mt-n2 me-2" href="#"><img class="d-block" src="img/footer-logo-light.png" width="117" alt="Cartzilla"></a><span class="d-inline-block align-middle h5 fw-light text-white mb-0">Marketplace</span></div>
            <p class="fs-sm text-white opacity-70 pb-1">High quality items created by our global community.</p>
            <h6 class="d-inline-block pe-3 me-3 border-end border-light"><span class="text-primary">65,478 </span><span class="fw-normal text-white">Products</span></h6>
            <h6 class="d-inline-block pe-3 me-3 border-end border-light"><span class="text-primary">2,521 </span><span class="fw-normal text-white">Members</span></h6>
            <h6 class="d-inline-block me-3"><span class="text-primary">897 </span><span class="fw-normal text-white">Vendors</span></h6>
            <div class="widget mt-4 text-md-nowrap text-center text-md-start"><a class="btn-social bs-light bs-twitter me-2 mb-2" href="#"><i class="ci-twitter"></i></a><a class="btn-social bs-light bs-facebook me-2 mb-2" href="#"><i class="ci-facebook"></i></a><a class="btn-social bs-light bs-dribbble me-2 mb-2" href="#"><i class="ci-dribbble"></i></a><a class="btn-social bs-light bs-behance me-2 mb-2" href="#"><i class="ci-behance"></i></a><a class="btn-social bs-light bs-pinterest me-2 mb-2" href="#"><i class="ci-pinterest"></i></a></div>
          </div>
          <!-- Mobile dropdown menu (visible on screens below md)-->
          <div class="col-12 d-md-none text-center mb-4 pb-2">
            <div class="btn-group dropdown d-block mx-auto mb-3">
              <button class="btn btn-outline-light border-light dropdown-toggle" type="button" data-bs-toggle="dropdown">Categories</button>
              <ul class="dropdown-menu my-1">
                <li><a class="dropdown-item" href="#">Photos</a></li>
                <li><a class="dropdown-item" href="#">Graphics</a></li>
                <li><a class="dropdown-item" href="#">UI Design</a></li>
                <li><a class="dropdown-item" href="#">Web Themes</a></li>
                <li><a class="dropdown-item" href="#">Fonts</a></li>
                <li><a class="dropdown-item" href="#">Add-Ons</a></li>
              </ul>
            </div>
            <div class="btn-group dropdown d-block mx-auto">
              <button class="btn btn-outline-light border-light dropdown-toggle" type="button" data-bs-toggle="dropdown">For members</button>
              <ul class="dropdown-menu my-1">
                <li><a class="dropdown-item" href="#">Licenses</a></li>
                <li><a class="dropdown-item" href="#">Return policy</a></li>
                <li><a class="dropdown-item" href="#">Payment methods</a></li>
                <li><a class="dropdown-item" href="#">Become a vendor</a></li>
                <li><a class="dropdown-item" href="#">Become an affiliate</a></li>
                <li><a class="dropdown-item" href="#">Marketplace benefits</a></li>
              </ul>
            </div>
          </div>
          <!-- Desktop menu (visible on screens above md)-->
          <div class="col-md-3 d-none d-md-block text-center text-md-start mb-4">
            <div class="widget widget-links widget-light pb-2">
              <h3 class="widget-title text-light">Categories</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Photos</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Graphics</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">UI Design</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Web Themes</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Fonts</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Add-Ons</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 d-none d-md-block text-center text-md-start mb-4">
            <div class="widget widget-links widget-light pb-2">
              <h3 class="widget-title text-light">For members</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Licenses</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Return policy</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Payment methods</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Become a vendor</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Become an affiliate</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Marketplace benefits</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Second row-->
      <div class="pt-5 bg-darker">
        <div class="container">
          <div class="widget w-100 mb-4 pb-3 text-center mx-auto" style="max-width: 28rem;">
            <h3 class="widget-title text-light pb-1">Subscribe to newsletter</h3>
            <form class="subscription-form validate" action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
              <div class="input-group flex-nowrap"><i class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                <input class="form-control rounded-start" type="email" name="EMAIL" placeholder="Your email" required>
                <button class="btn btn-primary" type="submit" name="subscribe">Subscribe*</button>
              </div>
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;" aria-hidden="true">
                <input class="subscription-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
              </div>
              <div class="form-text text-light opacity-50">*Receive early discount offers, updates and new products info.</div>
              <div class="subscription-status"></div>
            </form>
          </div>
          <hr class="hr-light mb-3">
          <div class="d-md-flex justify-content-between pt-4">
            <div class="pb-4 fs-xs text-light opacity-50 text-center text-md-start">© All rights reserved. Made by <a class="text-light" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></div>
            <div class="widget widget-links widget-light pb-4">
              <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
                <li class="widget-list-item ms-4"><a class="widget-list-link fs-ms" href="#">Help Center</a></li>
                <li class="widget-list-item ms-4"><a class="widget-list-link fs-ms" href="#">Affiliates</a></li>
                <li class="widget-list-item ms-4"><a class="widget-list-link fs-ms" href="#">Support</a></li>
                <li class="widget-list-item ms-4"><a class="widget-list-link fs-ms" href="#">Terms &amp; Conditions</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Toolbar for handheld devices (Marketplace)-->
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item" href="dashboard-favorites.html"><span class="handheld-toolbar-icon"><i class="ci-heart"></i></span><span class="handheld-toolbar-label">Favorites</span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a><a class="d-table-cell handheld-toolbar-item" href="marketplace-cart.html"><span class="handheld-toolbar-icon"><i class="ci-cart"></i><span class="badge bg-primary rounded-pill ms-1">3</span></span><span class="handheld-toolbar-label">$56.00</span></a></div>
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
                _token: $('meta[name="csrf-token"]').attr('content'),
                product_id: productId
            },
            success: function(response) {
                console.log('Success:', response);

                // Check if the response indicates the product was already added
                if (response.status === 'already_added') {
                    Swal.fire({
                        icon: 'info',
                        title: 'Already Added',
                        text: 'This product is already in your favorites.',
                        confirmButtonText: 'OK'
                    });
                } else {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.message,
                        confirmButtonText: 'OK'
                    });
                }
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

<!-- Mirrored from cartzilla.createx.studio/marketplace-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2022 18:16:59 GMT -->
</html>