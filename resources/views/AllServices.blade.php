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
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/' . ($settings->icon))}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

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

      <!-- Used for marketplace templates with filters on top-->
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
              <h1 class="h3 text-dark mb-0">خدمات {{$settings->website_name}}</h1>
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
        <section class="tj-service-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tj-sec-heading text-center" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="600">
                            <span class="sub-title">خدماتنا</span>
                            <h2 class="sec-title">الخدمات التي نقدمها</h2>
                            <div class="desc">
                                <p>
                                    لقد صمدت هذه الخدمات لأكثر من خمسة قرون، كما أنها اجتازت مرحلة الانتقال إلى الطباعة الإلكترونية، وبقيت دون تغيير يذكر. وقد اشتهرت في الستينيات مع إطلاقها.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" dir="rtl">
                    @foreach ($products as $product)
                    <div class="col-lg-3 col-md-6 col-sm-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                        <button class="favorite-icon" onclick="addToFavorites({{ $product->product_id }})" title="Add to Favorites">
                            @if(Auth::check() && $product->is_fav)
                                <!-- إذا كان المنتج مضافًا إلى المفضلة، أظهر القلب باللون الأحمر -->
                                <i id="favorite-icon-{{ $product->product_id }}" class="fa-solid fa-heart" style="color: red;"></i>
                            @else
                                <!-- إذا لم يكن مضافًا، اترك القلب فارغًا -->
                                <i id="favorite-icon-{{ $product->product_id }}" class="fa-regular fa-heart"></i>
                            @endif
                        </button>
                        <div class="tj-service-item text-center" style="position: relative;"> <!-- Add relative positioning -->
                            <div class="service-inner">

                                <div class="service-icon">
                                    <img class="image-1" src="{{ $product->Product_img ? asset('storage/' . $product->Product_img) : asset('img/default-product-image.jpg') }}" style="border-radius: 15px;margin-right:10px">
                                </div>
                                <a href="#signinnn-modal" data-bs-toggle="modal"
                                    data-product-name="{{ $product->product_name }}"
                                    data-product-img="{{ $product->Product_img ? asset('storage/' . $product->Product_img) : asset('img/default-product-image.jpg') }}"
                                    data-product-salary="{{ $product->product_salary }}"
                                    data-description="{{ $product->description }}"
                                    data-duration="{{ $product->Duration_of_righteousness }}"
                                    data-bs-target="#signinnn-modal">
                                    <div class="service-content">
                                        <h4 class="title-link">{{ $product->product_name }}</h4>
                                        <p>{{ $product->product_description }}</p>
                                        <p>Price : {{ $product->product_salary }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Button to show more products -->
                {{-- <div class="service-button text-center">
                    <a href="{{ route('services') }}" class="tj-secondary-btn btn-border"><span>أظهر المزيد</span></a>
                </div>
            </div> --}}

            <!-- Background shapes -->
            <div class="service-section-shape">
                <div class="service-bg-shape pulse">
                    <img src="assets/images/shape/shape-14.svg" alt="Shape" />
                </div>
                <div class="service-bg-shape1">
                    <img src="assets/images/shape/shape-15.svg" alt="Shape" />
                </div>
                <div class="service-bg-shape2">
                    <img src="assets/images/shape/shape-14.svg" alt="Shape" />
                </div>
                <div class="service-bg-shape3 pulse">
                    <img src="assets/images/shape/shape-15.svg" alt="Shape" />
                </div>
                <div class="service-bg-shape4 pulse">
                    <img src="assets/images/shape/shape-16.svg" alt="Shape" />
                </div>
            </div>
        </section>

        <div class="modal fade" id="signinnn-modal" tabindex="-1" role="dialog" style="direction: rtl; text-align: right;">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">تفاصيل المنتج</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" style="margin-left:0 !important;margin: -1.7rem -0.625rem -0.5rem auto !important;"></button>
                    </div>
                    <div class="modal-body pb-0">
                        <div class="d-sm-flex justify-content-between mb-4 pb-3 pb-sm-2 border-bottom">
                            <div class="d-sm-flex text-center text-sm-start" style="width: 100%;">
                                <a class="d-inline-block flex-shrink-0 mx-auto" style="width: 50%;margin: 5px !important;padding: 30px !important;align-content: center;">
                                    <img id="modal-product-img" src="" alt="Product" style="width: 100%;">
                                </a>
                                <div class="ps-sm-4 pt-2" style="width: 50%; padding: 10px">
                                    <h3 id="modal-product-name" class="product-title fs-base mb-2"></h3>
                                    <div class="fs-sm mt-2"><span class="text-muted me-2">Description:</span><span id="modal-description"></span></div>
                                    <div class="fs-sm mt-2"><span class="text-muted me-2">Duration:</span><span id="modal-duration"></span></div>
                                    <div class="fs-lg text-accent pt-2 mt-2">Price: <span id="modal-product-salary"></span></div>
                                    <div class="mt-5">
                                        <a href="{{ route('contacts.index') }}" class="btn btn-outline-primary" style="color: white">طلب الخدمة عبر الايميل</a>
                                        <a href="https://api.whatsapp.com/send?phone={{$settings->whatsapp}}&text=مرحبا" class="btn btn-outline-success" style="color: white; background-color: #28a745">طلب الخدمة عبر الواتساب</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>/* Style for the modal content */
            #signinnn-modal .modal-header {
                background-color: #001e64; /* Secondary background color */
                color: #fff; /* White text for the title */
                border-bottom: 1px solid #dee2e6;
            }

            #signinnn-modal .modal-title {
                font-size: 1.25rem;
                font-weight: bold;
                color: white
            }

            #signinnn-modal .modal-body {
                padding: 1.5rem;
            }

            /* Style for the image container */
            #signinnn-modal .modal-body img {
                border-radius: 0.5rem;
                max-width: 100%;
                height: auto;
                object-fit: cover;
            }

            /* Product Title */
            #modal-product-name {
                font-size: 1.5rem;
                font-weight: 600;
                margin-bottom: 0.5rem;
            }

            /* Product details (description, duration, price) */
            #signinnn-modal .fs-sm {
                font-size: 1rem;
                line-height: 1.6;
            }

            #signinnn-modal .text-muted {
                color: #6c757d;
                font-weight: 500;
            }

            #signinnn-modal .fs-lg {
                font-size: 1.25rem;
                font-weight: bold;
                color: #dc3545; /* Accent color for the price */
            }

            #signinnn-modal .btn {
                width: 100%;
                margin-top: 0.75rem;
            }

            /* Style for the buttons */
            #signinnn-modal .btn-outline-primary {
                color: #007bff;
                border-color: #007bff;
            }

            #signinnn-modal .btn-outline-primary:hover {
                background-color: #007bff;
                color: #fff;
            }

            #signinnn-modal .btn-outline-success {
                color: #28a745;
                border-color: #28a745;
            }

            #signinnn-modal .btn-outline-success:hover {
                background-color: #28a745;
                color: #fff;
            }

            /* Responsive adjustments */
            @media (max-width: 576px) {
                #signinnn-modal .modal-dialog {
                    max-width: 90%;
                    margin: 1.75rem auto;
                }

                #signinnn-modal .modal-body img {
                    width: 100%;
                }

                #signinnn-modal .ps-sm-4 {
                    padding-left: 0 !important;
                }

                #signinnn-modal .text-center {
                    text-align: center !important;
                }

                #signinnn-modal .d-sm-flex {
                    flex-direction: column;
                }
            }

            /* Adjustments for RTL layout */
            [dir="rtl"] #signinnn-modal .ps-sm-4 {
                padding-left: 0 !important;
                padding-right: 1rem !important;
            }

            [dir="rtl"] #signinnn-modal .modal-header {
                text-align: right;
            }
            .btn-close {
            background-color: transparent;
            border: none;
            opacity: 1;
            margin-bottom: 1rem;
                    }
            .modal .btn-close {
                color: white !important;
            }
            .btn-close:hover {
                opacity: 0.7;
            }
        </style>

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

    <!-- Toolbar for handheld devices (Marketplace)-->
    @include('Includes.toolbar')

    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <!-- Main Theme Script-->
    <script src="{{ asset('js/theme.min.js') }}"></script>
    <!-- Custom JS for pagination and other features-->
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
     document.addEventListener('DOMContentLoaded', function () {
        setTimeout(function () {
            let alert = document.querySelectorAll('.alert-dismissible');
            alert.forEach(function (el) {
                el.classList.add('fade-out');
            });
        }, 3000); // 3 seconds

        // Completely remove the alert after the fade-out animation
        setTimeout(function () {
            let alert = document.querySelectorAll('.alert-dismissible');
            alert.forEach(function (el) {
                el.style.display = 'none';
            });
        }, 3500); // Wait 0.5 seconds more for the fade-out to complete
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
