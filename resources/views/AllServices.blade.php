<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{$settings->website_name}} | Products</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="{{$settings->product_meta_d}}">
    <meta name="keywords" content="{{$settings->product_meta_k}}">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
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
<body class="handheld-toolbar-enabled">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Sign in / sign up modal-->
    @include('Includes.signin_signup')

    <main class="page-wrapper">
      <!-- Navbar Marketplace-->
      @include('Includes.account_header')

      <!-- Used for marketplace templates with filters on top-->
      <div class="bg-accent pt-4 pb-5">
        <div class="container pt-2 pb-3 pt-lg-3 pb-lg-4">
          <div class="d-lg-flex justify-content-between pb-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                  <li class="breadcrumb-item"><a class="text-nowrap" href="{{ route('home') }}"><i class="ci-home"></i>Home</a></li>
                  <li class="breadcrumb-item text-nowrap active" aria-current="page">All Services</li>
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
        <div class="shadow-lg rounded-3 mt-n5 mb-4">
          <div class="d-flex align-items-center ps-2">
              <!-- Search-->
              <form action="{{ route('services.search') }}" method="GET" class="d-flex align-items-center">
                  <input type="text" name="search" placeholder="Search..." class="form-control me-2">
                  <button type="submit" class="btn btn-primary">Search</button>
              </form>
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
                <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="#signinnn-modal" data-bs-toggle="modal"
                    data-product-name="{{ $product->product_name }}"
                       data-product-img="{{ $product->Product_img ? asset('storage/' . $product->Product_img) : asset('img/default-product-image.jpg') }}"
                       data-product-salary="{{ $product->product_salary }}"
                       data-description="{{ $product->description }}"
                       data-duration="{{ $product->Duration_of_righteousness }}"
                       data-bs-target="#signinnn-modal"><i class="ci-eye"></i></a>
                </div><a class="product-thumb-overlay"></a><img src="{{ asset('storage/'.$product->Product_img) }}" alt="Product">
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
        <!-- Pagination-->
        <nav class="d-flex justify-content-between pt-2 mb-4" aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item {{ $products->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $products->previousPageUrl() }}"><i class="ci-arrow-left me-2"></i>السابق</a>
                </li>
            </ul>
            <ul class="pagination">
                @for ($i = 1; $i <= $products->lastPage(); $i++)
                    <li class="page-item {{ $products->currentPage() == $i ? 'active' : '' }}">
                        <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
            </ul>
            <ul class="pagination">
                <li class="page-item {{ $products->hasMorePages() ? '' : 'disabled' }}">
                    <a class="page-link" href="{{ $products->nextPageUrl() }}">التالي<i class="ci-arrow-right ms-2"></i></a>
                </li>
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
            <h6 class="d-inline-block pe-3 me-3 border-end border-light"><span class="text-primary">472 </span><span class="fw-normal text-white">Companies</span></h6>
          </div>
          <div class="col-md-6 text-center text-md-end">
            <ul class="nav nav-sm nav-light justify-content-center justify-content-md-end">
              <li class="nav-item"><a class="nav-link" href="#">Privacy Policy</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Terms of Service</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Help & FAQ</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- Back to top button-->
    <a class="btn btn-primary btn-icon btn-scroll-to-top" href="javascript:void(0)" data-scroll-to="#page-top">
        <i class="ci-arrow-up"></i>
    </a>
    <!-- Vendor Scripts-->
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('vendor/tiny-slider/dist/tiny-slider.js') }}"></script>
    <script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <!-- Main Theme Script-->
    <script src="{{ asset('js/theme.min.js') }}"></script>
    <!-- Custom JS for pagination and other features-->
    <script>
      function addToFavorites(productId) {
          // Implement your favorite logic here
          alert('Product ' + productId + ' added to favorites!');
      }
    </script>
</body>
</html>
