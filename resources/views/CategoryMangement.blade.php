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
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/' . ($settings->logo))}}">
    <link rel="mask-icon" color="#fe6a6a" href="{{ asset('safari-pinned-tab.svg') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/simplebar/dist/simplebar.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/tiny-slider/dist/tiny-slider.css') }}"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('css/theme.min.css') }}">

    <style>
        .btn-close {
        position: absolute;
        top: 2rem; /* المسافة من الأعلى */
        left: 2rem; /* المسافة من اليسار */
        z-index: 1050; /* التأكد من بقاء الزر فوق المحتوى */
    }
    </style>
    <!-- Google Tag Manager-->

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
                    <section class="col-lg-8">
                        <!-- Toolbar-->
                        <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
                            <h6 class="fs-base text-light mb-0">List of items you added to wishlist:</h6>
                            <a class="btn btn-primary btn-sm" href="#category-modal" data-bs-toggle="modal">
                                <i class="ci-add me-2"></i>إضافة فئة
                            </a>
                        </div>
                        <form action="{{ route('Category.search') }}" method="GET" class="d-flex align-items-center">
                            <input type="text" name="search" placeholder="ابحث..." class="form-control me-2">
                            <button type="submit" class="btn btn-primary">بحث</button>
                        </form>

                        <!-- Modal for Adding Categories -->
                        <div class="modal fade" id="category-modal" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-secondary">
                                        <h5 class="modal-title">إضافة بحث</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" action="{{ route('storeCategory') }}" method="POST" enctype="multipart/form-data" novalidate>
                                            @csrf
                                            <!-- اسم التصنيف -->
                                            <div class="mb-3">
                                                <label class="form-label" for="category_name">اسم التصنيف</label>
                                                <input class="form-control" type="text" id="category_name" name="category_name" placeholder="أدخل اسم التصنيف" required>
                                                <div class="invalid-feedback">يرجى تقديم اسم تصنيف صالح.</div>
                                            </div>

                                            <!-- وصف التصنيف -->
                                            <div class="mb-3">
                                                <label class="form-label" for="category_description">وصف التصنيف</label>
                                                <textarea class="form-control" id="category_description" name="category_description" rows="3" placeholder="أدخل وصف التصنيف" required></textarea>
                                                <div class="invalid-feedback">يرجى تقديم وصف صالح.</div>
                                            </div>

                                            <!-- صورة التصنيف -->
                                            <div class="mb-3">
                                                <label class="form-label" for="category_img">صورة التصنيف</label>
                                                <input class="form-control" type="file" id="category_img" name="category_img">
                                            </div>

                                            <!-- زر الإضافة -->
                                            <button class="btn btn-primary btn-shadow d-block w-100" type="submit">إضافة التصنيف</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Category List -->
                        @foreach ($category as $cat)
                        <div class="d-sm-flex justify-content-between mt-lg-4 mb-4 pb-3 pb-sm-2 border-bottom">
                            <div class="d-block d-sm-flex align-items-start text-center text-sm-start">
                                <!-- Display category image -->
                                <a class="d-block flex-shrink-0 mx-auto me-sm-4" style="width: 10rem;">
                                    <img src="{{ asset('storage/' . $cat->category_img) }}" alt="صورة الفئة">
                                </a>
                                <div class="pt-2">
                                    <h3 class="product-title fs-base mb-2">{{ $cat->category_name }}</h3>
                                    <div class="fs-sm">
                                        <span class="text-muted me-2">وصف:</span>{{ $cat->category_description }}
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2 ps-sm-3 mx-auto mx-sm-0 text-center">
                                <!-- Delete Button -->
                                <form action="{{ route('destroyCategory', $cat->category_id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger btn-sm w-100" type="submit"><i class="ci-trash me-2"></i>ازالة</button>
                                </form>

                                <!-- Edit Button -->
                                <button class="btn btn-outline-primary btn-sm w-100" type="button" data-bs-toggle="modal" data-bs-target="#categoryy-modal"
                                    data-category-id="{{ $cat->category_id }}"
                                    data-category-name="{{ $cat->category_name }}"
                                    data-category-description="{{ $cat->category_description }}"
                                    data-category-img="{{ $cat->category_img }}">
                                    <i class="ci-edit me-2"></i>تعديل
                                </button>
                            </div>
                        </div>
                        @endforeach

                        <!-- Edit Modal -->
                        <div class="modal fade" id="categoryy-modal" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-secondary">
                                        <h5 class="modal-title">تعديل الفئة</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" method="POST" enctype="multipart/form-data" novalidate>
                                            @csrf
                                            @method('POST')

                                            <!-- Category Name -->
                                            <div class="mb-3">
                                                <label class="form-label" for="category_name">اسم الفئة</label>
                                                <input class="form-control" type="text" id="category_name" name="category_name" required>
                                                <div class="invalid-feedback">Please provide a valid category name.</div>
                                            </div>

                                            <!-- Category Description -->
                                            <div class="mb-3">
                                                <label class="form-label" for="category_description">وصف الفئة</label>
                                                <textarea class="form-control" id="category_description" name="category_description" rows="3" required></textarea>
                                                <div class="invalid-feedback">Please provide a valid description.</div>
                                            </div>

                                            <!-- Category Image -->
                                            <div class="mb-3">
                                                <label class="form-label" for="category_img">صورة الفئة</label>
                                                <input class="form-control" type="file" id="category_img" name="category_img">
                                            </div>

                                            <!-- Submit Button -->
                                            <button class="btn btn-primary btn-shadow d-block w-100" type="submit">تحديث</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pagination -->
                        <hr>
                        <nav class="d-flex justify-content-center pt-2 mb-4" aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item {{ $category->onFirstPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $category->previousPageUrl() }}">
                                        <i class="ci-arrow-right me-2"></i>السابق
                                    </a>
                                </li>
                            </ul>
                            <ul class="pagination">
                                @for ($i = 1; $i <= $category->lastPage(); $i++)
                                    <li class="page-item {{ $category->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $category->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                            </ul>
                            <ul class="pagination">
                                <li class="page-item {{ $category->hasMorePages() ? '' : 'disabled' }}">
                                    <a class="page-link" href="{{ $category->nextPageUrl() }}">
                                        التالي<i class="ci-arrow-left ms-2"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </section>
                </div>
            </div>
        </div>
    </main>

    <!-- Script for Handling Modal Data -->
    <script>
        var categoryModal = document.getElementById('categoryy-modal');
        categoryModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var categoryId = button.getAttribute('data-category-id');
            var categoryName = button.getAttribute('data-category-name');
            var categoryDescription = button.getAttribute('data-category-description');
            var categoryImg = button.getAttribute('data-category-img');

            var modalForm = categoryModal.querySelector('form');
            modalForm.action = "/profileSetting/categoryMangement/update/" + categoryId;

            modalForm.querySelector('#category_name').value = categoryName;
            modalForm.querySelector('#category_description').value = categoryDescription;
        });
    </script>

    <!-- Footer-->
    @include('Includes.footer')

    <!-- Toolbar for handheld devices (NFT Marketplace)-->
    @include('includes.toolbar')

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
