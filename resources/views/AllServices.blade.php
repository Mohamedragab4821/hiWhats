<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from cartzilla.createx.studio/marketplace-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2022 18:16:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
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
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/' . ($settings->icon))}}">
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
                  <li class="breadcrumb-item"><a class="text-nowrap" href="{{ route('home') }}"><i class="ci-home"></i>Home</a></li>
                  {{-- <li class="breadcrumb-item text-nowrap"><a href="home-marketplace.html">Market</a> --}}
                  </li>
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

            <!-- Pagination-->
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
                  {{-- <button class="btn btn-light btn-icon btn-shadow fs-base mx-2" type="button"><i class="ci-cart"></i></button> --}}
                </div><a class="product-thumb-overlay"></a><img src="{{ asset('storage/'.$product->Product_img) }}" alt="Product">
              </div>
              <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var productModal = document.getElementById('signinnn-modal');
                    productModal.addEventListener('show.bs.modal', function(event) {
                        var button = event.relatedTarget; // Button that triggered the modal

                        // Get the product data from the button's data attributes
                        var productName = button.getAttribute('data-product-name');
                        var productImg = button.getAttribute('data-product-img');
                        var productSalary = button.getAttribute('data-product-salary');
                        var description = button.getAttribute('data-description');
                        var duration = button.getAttribute('data-duration');

                        // Find the modal elements
                        var modalProductName = productModal.querySelector('#modal-product-name');
                        var modalProductImg = productModal.querySelector('#modal-product-img');
                        var modalProductSalary = productModal.querySelector('#modal-product-salary');
                        var modalDescription = productModal.querySelector('#modal-description');
                        var modalDuration = productModal.querySelector('#modal-duration');

                        // Set the modal content
                        modalProductName.textContent = productName;
                        modalProductImg.src = productImg;
                        modalProductSalary.textContent = productSalary;
                        modalDescription.textContent = description;
                        modalDuration.textContent = duration;
                    });
                });
            </script>
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
        <div class="modal fade" id="signinnn-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-secondary">
                        <h5 class="modal-title">Product Details</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pb-0">
                      <div class="d-sm-flex justify-content-between mb-4 pb-3 pb-sm-2 border-bottom">
                          <div class="d-sm-flex text-center text-sm-start">
                              <a class="d-inline-block flex-shrink-0 mx-auto" style="width: 15rem;">
                                  <img id="modal-product-img" src="" alt="Product" style="width: 100%; height: auto;">
                              </a>
                              <div class="ps-sm-4 pt-2">
                                  <h3 id="modal-product-name" class="product-title fs-base mb-2"></h3>
                                  <div class="fs-sm"><span class="text-muted me-2">Description:</span><span id="modal-description"></span></div>
                                  <div class="fs-sm"><span class="text-muted me-2">Duration:</span><span id="modal-duration"></span></div>
                                  <div class="fs-lg text-accent pt-2">Price: <span id="modal-product-salary"></span></div>
                                  <div class="mt-3">
                                    <a href="{{ route('contacts.index') }}" class="btn btn-outline-primary">طلب الخدمه عبر الايميل</a>
                                    <a href="https://api.whatsapp.com/send?phone={{$settings->whatsapp}}&text=مرحبا"  class="btn btn-outline-success">طلب الخدمه عبر الواتساب</a>
  
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var productModal = document.getElementById('signinnn-modal');
                productModal.addEventListener('show.bs.modal', function(event) {
                    var button = event.relatedTarget; // Button that triggered the modal

                    // Get the product data from the button's data attributes
                    var productName = button.getAttribute('data-product-name');
                    var productImg = button.getAttribute('data-product-img');
                    var productSalary = button.getAttribute('data-product-salary');
                    var description = button.getAttribute('data-description');
                    var duration = button.getAttribute('data-duration');

                    // Find the modal elements
                    var modalProductName = productModal.querySelector('#modal-product-name');
                    var modalProductImg = productModal.querySelector('#modal-product-img');
                    var modalProductSalary = productModal.querySelector('#modal-product-salary');
                    var modalDescription = productModal.querySelector('#modal-description');
                    var modalDuration = productModal.querySelector('#modal-duration');

                    // Set the modal content
                    modalProductName.textContent = productName;
                    modalProductImg.src = productImg;
                    modalProductSalary.textContent = productSalary;
                    modalDescription.textContent = description;
                    modalDuration.textContent = duration;
                });
            });
        </script>
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
    @include('Includes.footer')

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
