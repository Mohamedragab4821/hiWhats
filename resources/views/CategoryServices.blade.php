<!DOCTYPE html>
<html lang="en">

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
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/' . ($settings->icon))}}">
<link rel="mask-icon" color="#fe6a6a" href="{{ asset('safari-pinned-tab.svg') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<!-- Vendor Styles including: Font Icons, Plugins, etc.-->
<link rel="stylesheet" media="screen" href="{{ asset('vendor/simplebar/dist/simplebar.min.css') }}">
<link rel="stylesheet" media="screen" href="{{ asset('vendor/tiny-slider/dist/tiny-slider.css') }}">
<!-- Main Theme Styles + Bootstrap-->
<link rel="stylesheet" media="screen" href="{{ asset('css/theme.min.css') }}">

    <!-- Google Tag Manager-->
    
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
        <div class="bg-accent pt-4 pb-5" style="background-color: #f6f9fc !important">
            <div class="container pt-2 pb-3 pt-lg-3 pb-lg-4">
                <div class="d-lg-flex justify-content-between pb-3">
                    <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                                <li class="breadcrumb-item"><a style="color:black" class="text-nowrap" href="{{ route('home') }}"><i class="ci-home"></i>الصفحه الرئيسيه</a></li>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                        <h1 class="h3 text-dark mb-0"> اقسام {{$settings->website_name}}</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pb-5 mb-2 mb-md-4">
            <!-- Toolbar-->
            <div class="row">
                <div class="shadow-lg mt-n5 mb-4">
                    <div class="d-flex align-items-center ps-2">
                        <!-- Search -->
                        <form action="{{ route('category.search') }}" method="GET" class="d-flex align-items-center">
                            <input type="text" id="search-input" name="search" placeholder="Search..." class="form-control me-2">
                            <input type="hidden" name="category_id" value="{{ isset($id) ? $id : '' }}">
                            <i class="ci-search" style="font-size: 1.5rem; color: #007bff;"></i>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Products grid-->
            <section class="tj-service-section">
                <div class="container">
                    <div class="row" dir="rtl">
                        @foreach ($products as $product)
                        <div class="col-lg-3 col-md-6 col-sm-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                            <!-- Favorite button -->
                            <button class="favorite-icon" onclick="addToFavorites({{ $product->product_id }})" title="Add to Favorites">
                                @if(Auth::check() && $product->is_fav)
                                    <i id="favorite-icon-{{ $product->product_id }}" class="fa-solid fa-heart" style="color: red;"></i>
                                @else
                                    <i id="favorite-icon-{{ $product->product_id }}" class="fa-regular fa-heart"></i>
                                @endif
                            </button>
            
                            <!-- Service item card -->
                            <div class="tj-service-item text-center" style="position: relative;">
                                <div class="service-inner">
                                    <!-- Product image -->
                                    <div class="service-icon">
                                        <img class="image-1" src="{{ $product->Product_img ? asset('storage/' . $product->Product_img) : asset('img/default-product-image.jpg') }}" style="border-radius: 15px;margin-right:10px">
                                    </div>
            
                                    <!-- Modal trigger for product details -->
                                    <a href="#signinnn-modal" data-bs-toggle="modal"
                                        data-product-name="{{ $product->product_name }}"
                                        data-product-img="{{ $product->Product_img ? asset('storage/' . $product->Product_img) : asset('img/default-product-image.jpg') }}"
                                        data-product-salary="{{ $product->product_salary }}"
                                        data-description="{{ $product->description }}"
                                        data-duration="{{ $product->Duration_of_righteousness }}"
                                        data-bs-target="#signinnn-modal">
                                        <div class="service-content">
                                            <h4 class="title-link">{{ $product->product_name }}</h4>
                                            <p>{{ $product->description }}</p>
                                            <p>Price : {{ $product->product_salary }}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
            
                    <!-- Background shapes -->
                    <div class="service-section-shape">
                        <div class="service-bg-shape pulse">
                            <img src="/assets/images/shape/shape-14.svg" alt="Shape" />
                        </div>
                        <div class="service-bg-shape1">
                            <img src="/assets/images/shape/shape-15.svg" alt="Shape" />
                        </div>
                        <div class="service-bg-shape2">
                            <img src="/assets/images/shape/shape-14.svg" alt="Shape" />
                        </div>
                        <div class="service-bg-shape3 pulse">
                            <img src="/assets/images/shape/shape-15.svg" alt="Shape" />
                        </div>
                        <div class="service-bg-shape4 pulse">
                            <img src="/assets/images/shape/shape-16.svg" alt="Shape" />
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Modal for product details -->
            <div class="modal fade" id="signinnn-modal" tabindex="-1" role="dialog" style="direction: rtl; text-align: right;">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">تفاصيل المنتج</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body pb-0">
                            <div class="d-sm-flex justify-content-between mb-4 pb-3 pb-sm-2 border-bottom">
                                <div class="d-sm-flex text-center text-sm-start" style="width: 100%;">
                                    <!-- Product image in modal -->
                                    <a class="d-inline-block flex-shrink-0 mx-auto" style="width: 50%; margin: 5px !important; padding: 30px !important; align-content: center;">
                                        <img id="modal-product-img" src="" alt="Product" style="width: 100%;">
                                    </a>
                                    <div class="ps-sm-4 pt-2" style="width: 50%; padding: 10px;">
                                        <h3 id="modal-product-name" class="product-title fs-base mb-2"></h3>
                                        <div class="fs-sm mt-2"><span class="text-muted me-2">Description:</span><span id="modal-description"></span></div>
                                        <div class="fs-sm mt-2"><span class="text-muted me-2">Duration:</span><span id="modal-duration"></span></div>
                                        <div class="fs-lg text-accent pt-2 mt-2">Price: <span id="modal-product-salary"></span></div>
                                        <div class="mt-5">
                                            <a href="{{ route('contacts.index') }}" class="btn btn-outline-primary">طلب الخدمة عبر الايميل</a>
                                            <a href="https://api.whatsapp.com/send?phone={{ $settings->whatsapp }}&text=مرحبا" class="btn btn-outline-success">طلب الخدمة عبر الواتساب</a>
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
                        var button = event.relatedTarget;
                        
                        var productName = button.getAttribute('data-product-name');
                        var productImg = button.getAttribute('data-product-img');
                        var productSalary = button.getAttribute('data-product-salary');
                        var description = button.getAttribute('data-description');
                        var duration = button.getAttribute('data-duration');
            
                        var modalProductName = productModal.querySelector('#modal-product-name');
                        var modalProductImg = productModal.querySelector('#modal-product-img');
                        var modalProductSalary = productModal.querySelector('#modal-product-salary');
                        var modalDescription = productModal.querySelector('#modal-description');
                        var modalDuration = productModal.querySelector('#modal-duration');
            
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
            {{-- <nav class="d-flex justify-content-between pt-2 mb-4" aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item {{ $categories->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $categories->previousPageUrl() }}"><i class="ci-arrow-left me-2"></i>السابق</a>
                    </li>
                </ul>
                <ul class="pagination">
                    @for ($i = 1; $i <= $categories->lastPage(); $i++)
                        <li class="page-item {{ $categories->currentPage() == $i ? 'active' : '' }}">
                            <a class="page-link" href="{{ $categories->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor
                </ul>
                <ul class="pagination">
                    <li class="page-item {{ $categories->hasMorePages() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $categories->nextPageUrl() }}">التالي<i class="ci-arrow-right ms-2"></i></a>
                    </li>
                </ul>
            </nav> --}}





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
    @include('Includes.footer')

    <!-- Toolbar for handheld devices-->
    @include('Includes.toolbar')


    <!-- Back to top button-->
    <a class="btn-scroll-top" href="#top" data-scroll=""><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up"></i></a>

    <!-- Vendor scrits: js libraries and plugins-->
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <!-- Main theme script-->
    <script src="{{ asset('js/theme.min.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}

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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('search-input');
            const productCards = document.querySelectorAll('.product-card-alt');
    
            searchInput.addEventListener('input', function() {
                const searchTerm = searchInput.value.toLowerCase();
    
                productCards.forEach(card => {
                    const productName = card.querySelector('.product-title a').textContent.toLowerCase();
                    if (productName.includes(searchTerm)) {
                        card.style.display = 'block'; // Show matching products
                    } else {
                        card.style.display = 'none'; // Hide non-matching products
                    }
                });
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>





    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/meanmenu.js') }}"></script>
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
<script src="{{ asset('assets/js/sal.js') }}"></script>
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/validate.min.js') }}"></script>

<script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
