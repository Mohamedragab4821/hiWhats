<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cartzilla | Marketplace category</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive, business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/simplebar/dist/simplebar.min.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/tiny-slider/dist/tiny-slider.css') }}">
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('css/theme.min.css') }}">

    <!-- Google Tag Manager-->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WKV3GT5');
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

        <!-- Category Heading -->
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
                    <form action="{{ route('category.search') }}" method="GET" class="d-flex align-items-center">
                      <input type="text" name="search" placeholder="Search..." class="form-control me-2">
                      <button type="submit" class="btn btn-primary">Search</button>
                  </form>
                  

                    <!-- Sort-->
                    <div class="d-flex align-items-center">
                        <div class="dropdown py-4 border-start">
                            <a class="nav-link-style fs-md fw-medium dropdown-toggle p-4" href="#" data-bs-toggle="dropdown">
                                <span class="d-inline-block py-1"><i class="ci-thumb-up align-middle opacity-60 mt-n1 me-2"></i>Popular</span>
                            </a>
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
                    <div class="d-none d-md-flex align-items-center border-start ps-4">
                        <span class="fs-md text-nowrap me-4">Pages&nbsp; 1 / 5</span>
                        <a class="nav-link-style p-4 border-start" href="#"><span class="d-inline-block py-1"><i class="ci-arrow-left"></i></span></a>
                        <a class="nav-link-style p-4 border-start" href="#"><span class="d-inline-block py-1"><i class="ci-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>

            <!-- Products grid-->
            <div class="row pt-3 mx-n2">
                <!-- Product-->
                @foreach($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
                    <div class="card product-card-alt">
                        <div class="product-thumb" style="height: 280px;width: 280px;">
                            <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;" onclick="addToFavorites({{ $product->product_id }})">
                                <i class="ci-heart"></i>
                            </button>
                            <div class="product-card-actions">
                                <a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="marketplace-single.html"><i class="ci-eye"></i></a>
                                <button class="btn btn-light btn-icon btn-shadow fs-base mx-2" type="button"><i class="ci-cart"></i></button>
                            </div>
                            <a class="product-thumb-overlay" href="marketplace-single.html"></a>
                            <img src="{{ asset('storage/'.$product->Product_img) }}" alt="Product">
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
                    <li class="page-item active"><span class="page-link">1</span></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Next<i class="ci-arrow-right ms-2"></i></a></li>
                </ul>
            </nav>
        </div>
    </main>

    <!-- Footer-->
    @include('Includes.footer')

    <!-- Toolbar for handheld devices-->
    <div class="handheld-toolbar">
        <div class="d-table table-layout-fixed w-100">
            <a class="d-table-cell handheld-toolbar-item" href="#"><span class="handheld-toolbar-icon"><i class="ci-home"></i></span><span class="handheld-toolbar-label">Home</span></a>
            <a class="d-table-cell handheld-toolbar-item" href="#"><span class="handheld-toolbar-icon"><i class="ci-cart"></i></span><span class="handheld-toolbar-label">Cart</span></a>
            <a class="d-table-cell handheld-toolbar-item" href="#"><span class="handheld-toolbar-icon"><i class="ci-heart"></i></span><span class="handheld-toolbar-label">Favorites</span></a>
        </div>
    </div>

    <!-- Back to top button-->
    <a class="btn-scroll-top" href="#top" data-scroll=""><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up"></i></a>

    <!-- Vendor scrits: js libraries and plugins-->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/simplebar.min.js') }}"></script>
    <script src="{{ asset('js/tiny-slider.js') }}"></script>
    <script src="{{ asset('js/smooth-scroll.polyfills.min.js') }}"></script>

    <!-- Main theme script-->
    <script src="{{ asset('js/theme.min.js') }}"></script>

    <!-- Add to Favorites functionality -->
    <script>
        function addToFavorites(productId) {
            // Get the existing favorites from local storage
            let favorites = JSON.parse(localStorage.getItem('favorites')) || [];

            // Check if the product is already in favorites
            if (!favorites.includes(productId)) {
                // Add the product ID to the favorites array
                favorites.push(productId);
                localStorage.setItem('favorites', JSON.stringify(favorites));
                
                // Show a success message (you can use SweetAlert here)
                alert("Product added to favorites!");
            } else {
                // If the product is already in favorites, show a message
                alert("Product is already in your favorites.");
            }
        }
    </script>
</body>

</html>
