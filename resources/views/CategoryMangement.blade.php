<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <title>{{$settings->website_name}}</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - قالب التجارة الإلكترونية Bootstrap">
    <meta name="keywords" content="bootstrap, متجر, التجارة الإلكترونية, سوق, حديث, استجابة, أعمال, موبايل, bootstrap, html5, css3, js, معرض, شريط تمرير, لمسة, إبداعي, نظيف">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/' . ($settings->icon))}}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="mask-icon" color="#fe6a6a" href="{{ asset('safari-pinned-tab.svg') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <style>
        .btn-close {
        position: absolute;
        top: 1rem; /* المسافة من الأعلى */
        left: 1rem; /* المسافة من اليسار */
        z-index: 1050; /* التأكد من بقاء الزر فوق المحتوى */
    }
    </style>
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/simplebar/dist/simplebar.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/tiny-slider/dist/tiny-slider.css') }}"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('css/theme.min.css') }}">
</head>
<body class="handheld-toolbar-enabled">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Sign in / sign up modal-->
    @include('Includes.signin_signup')

    <main class="page-wrapper">
        <!-- Navbar for NFT Marketplace demo-->
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
                            <h6 class="fs-base text-light mb-0">قائمة العناصر التي أضفتها إلى قائمة الأمنيات:</h6>
                            <a class="btn btn-primary btn-sm" href="#category-modal" data-bs-toggle="modal">
                                <i class="ci-add me-2"></i>إضافة فئات
                            </a>
                        </div>
                        <form action="{{ route('Category.search') }}" method="GET" class="d-flex align-items-center mb-4">
                            <input type="text" name="search" placeholder="بحث..." class="form-control me-2">
                            <button type="submit" class="btn btn-primary">بحث</button>
                        </form>

                        <!-- Modal for Adding Categories -->
                        <div class="modal fade" id="category-modal" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-secondary">
                                        <h5 class="modal-title">إضافة فئة</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="إغلاق"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" action="{{ route('storeCategory') }}" method="POST" enctype="multipart/form-data" novalidate>
                                            @csrf
                                            <!-- Category Name -->
                                            <div class="mb-3">
                                                <label class="form-label" for="category_name">اسم الفئة</label>
                                                <input class="form-control" type="text" id="category_name" name="category_name" placeholder="أدخل اسم الفئة" required>
                                                <div class="invalid-feedback">يرجى تقديم اسم فئة صحيح.</div>
                                            </div>

                                            <!-- Category Description -->
                                            <div class="mb-3">
                                                <label class="form-label" for="category_description">وصف الفئة</label>
                                                <textarea class="form-control" id="category_description" name="category_description" rows="3" placeholder="أدخل وصف الفئة" required></textarea>
                                                <div class="invalid-feedback">يرجى تقديم وصف صحيح.</div>
                                            </div>

                                            <!-- Category Image -->
                                            <div class="mb-3">
                                                <label class="form-label" for="category_img">صورة الفئة</label>
                                                <input class="form-control" type="file" id="category_img" name="category_img">
                                            </div>

                                            <!-- Submit Button -->
                                            <button class="btn btn-primary btn-shadow d-block w-100" type="submit">إضافة فئة</button>
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
                                <a class="d-block flex-shrink-0 mx-auto me-sm-4" href="shop-single-v1.html" style="width: 10rem;">
                                    <img src="{{ asset('storage/' . $cat->category_img) }}" alt="صورة الفئة">
                                </a>
                                <div class="pt-2">
                                    <h3 class="product-title fs-base mb-2">{{ $cat->category_name }}</h3>
                                    <div class="fs-sm">
                                        <span class="text-muted me-2">الوصف:</span>{{ $cat->category_description }}
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2 ps-sm-3 mx-auto mx-sm-0 text-center">
                                <!-- Delete Button -->
                                <form action="{{ route('destroyCategory', $cat->category_id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد أنك تريد حذف هذه الفئة؟');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger btn-sm w-100" type="submit"><i class="ci-trash me-2"></i>إزالة</button>
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

                        <!-- Pagination -->
                        <nav class="d-flex justify-content-between">
                            <ul class="pagination pagination-lg mb-4">
                                <li class="page-item {{ $category->currentPage() == 1 ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $category->previousPageUrl() }}" aria-label="السابق">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                @for ($i = 1; $i <= $category->lastPage(); $i++)
                                <li class="page-item {{ $category->currentPage() == $i ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $category->url($i) }}">{{ $i }}</a>
                                </li>
                                @endfor
                                <li class="page-item {{ $category->currentPage() == $category->lastPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $category->nextPageUrl() }}" aria-label="التالي">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                        <!-- Edit Modal -->
                        <div class="modal fade" id="categoryy-modal" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-secondary">
                                        <h5 class="modal-title">تعديل الفئة</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="إغلاق"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" method="POST" enctype="multipart/form-data" novalidate>
                                            @csrf
                                            @method('POST')

                                            <!-- Category Name -->
                                            <div class="mb-3">
                                                <label class="form-label" for="category_name">اسم الفئة</label>
                                                <input class="form-control" type="text" id="category_name" name="category_name" required>
                                                <div class="invalid-feedback">يرجى تقديم اسم فئة صحيح.</div>
                                            </div>

                                            <!-- Category Description -->
                                            <div class="mb-3">
                                                <label class="form-label" for="category_description">وصف الفئة</label>
                                                <textarea class="form-control" id="category_description" name="category_description" rows="3" required></textarea>
                                                <div class="invalid-feedback">يرجى تقديم وصف صحيح.</div>
                                            </div>

                                            <!-- Category Image -->
                                            <div class="mb-3">
                                                <label class="form-label" for="category_img">صورة الفئة</label>
                                                <input class="form-control" type="file" id="category_img" name="category_img">
                                            </div>

                                            <!-- Submit Button -->
                                            <button class="btn btn-primary btn-shadow d-block w-100" type="submit">تحديث الفئة</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <!-- Footer -->
        @include('Includes.footer')
    </main>

    <!-- Vendor Scripts -->
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <!-- Main Theme Script -->
    <script src="{{ asset('js/theme.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom Scripts -->
    <script>
        // Handle the data for the edit modal
        document.addEventListener('DOMContentLoaded', function () {
            var editButtons = document.querySelectorAll('[data-bs-toggle="modal"][data-bs-target="#categoryy-modal"]');
            editButtons.forEach(function (button) {
                button.addEventListener('click', function () {
                    var modal = new bootstrap.Modal(document.getElementById('categoryy-modal'));
                    var categoryId = button.getAttribute('data-category-id');
                    var categoryName = button.getAttribute('data-category-name');
                    var categoryDescription = button.getAttribute('data-category-description');
                    var categoryImg = button.getAttribute('data-category-img');

                    var form = document.querySelector('#categoryy-modal form');
                    form.action = `/updateCategory/${categoryId}`;

                    document.getElementById('category_name').value = categoryName;
                    document.getElementById('category_description').value = categoryDescription;
                    // For image, you might need a way to preview it if updated
                    modal.show();
                });
            });
        });
    </script>
</body>
</html>
