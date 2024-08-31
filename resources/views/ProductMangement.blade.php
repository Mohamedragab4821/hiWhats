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
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
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
        top: 1rem; /* المسافة من الأعلى */
        left: 1rem; /* المسافة من اليسار */
        z-index: 1050; /* التأكد من بقاء الزر فوق المحتوى */
    }
    </style>
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
      @include('Includes.account_header')

      @include('Includes.navBar')

      <div class="container mb-5 pb-3">

        <div class="bg-light shadow-lg rounded-3 overflow-hidden">
          <div class="row">
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

            <!-- Sidebar-->
            @include('Includes.leftSideMenue')

            <!-- Content-->
            <section class="col-lg-8">
              <!-- Toolbar-->
              <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
                <h6 class="fs-base text-light mb-0">List of items you added to wishlist:</h6><a class="btn btn-primary btn-sm" href="#productt-modal" data-bs-toggle="modal">إضافة منتج</a>
              </div>
              <form action="{{ route('Product.search') }}" method="GET" class="d-flex align-items-center">
                <input type="text" name="search" placeholder="Search..." class="form-control me-2">
                <button type="submit" class="btn btn-primary">بحث</button>
            </form>
              <div class="modal fade" id="productt-modal" tabindex="-1" role="dialog">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-secondary">
                        <ul class="nav nav-tabs card-header-tabs" role="tablist">
                          <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true">إضافة منتج</a></li>
                        </ul>
                        <img src="" alt="">
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body tab-content py-4">
                        <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="product-form" action="{{ route('storeProduct') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            
                            <!-- اسم المنتج -->
                            <div class="mb-3">
                                <label class="form-label" for="product_name">اسم المنتج</label>
                                <input class="form-control" type="text" id="product_name" name="product_name" placeholder="أدخل اسم المنتج" required>
                                <div class="invalid-feedback">يرجى إدخال اسم منتج صحيح.</div>
                            </div>
                        
                            <!-- اسم الفئة -->
                            <div class="mb-3">
                                <label class="form-label" for="category_id">اسم الفئة</label>
                                <select class="form-control" id="category_id" name="category_id" required>
                                    <option value="" disabled selected>اختر فئة</option>
                                    @foreach($category1 as $category)
                                        <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">يرجى اختيار فئة صحيحة.</div>
                            </div>
                        
                            <!-- راتب المنتج -->
                            <div class="mb-3">
                                <label class="form-label" for="product_salary">سعر المنتج</label>
                                <input class="form-control" type="number" id="product_salary" name="product_salary" placeholder="أدخل راتب المنتج" required>
                                <div class="invalid-feedback">يرجى إدخال راتب المنتج بشكل صحيح.</div>
                            </div>
                        
                            <!-- الوصف -->
                            <div class="mb-3">
                                <label class="form-label" for="description">الوصف</label>
                                <textarea class="form-control" id="description" name="description" rows="3" placeholder="أدخل وصف المنتج" required></textarea>
                                <div class="invalid-feedback">يرجى إدخال وصف صحيح.</div>
                            </div>
                        
                            <!-- مدة الصلاحية -->
                            <div class="mb-3">
                                <label class="form-label" for="Duration_of_righteousness">مدة الصلاحية</label>
                                <input class="form-control" type="text" id="Duration_of_righteousness" name="Duration_of_righteousness" placeholder="أدخل مدة الصلاحية" required>
                                <div class="invalid-feedback">يرجى إدخال مدة صلاحية صحيحة.</div>
                            </div>
                        
                            <!-- صورة المنتج -->
                            <div class="mb-3">
                                <label class="form-label" for="Product_img">صورة المنتج</label>
                                <input class="form-control" type="file" id="Product_img" name="Product_img" required>
                                <div class="invalid-feedback">يرجى رفع صورة للمنتج.</div>
                            </div>
                        
                            <!-- زر الإرسال -->
                            <button class="btn btn-primary btn-shadow d-block w-100" type="submit">إضافة المنتج</button>
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
                      <a class="d-block flex-shrink-0 mx-auto me-sm-4"  style="width: 10rem;">
                          <img src="{{ asset('storage/' . $product->Product_img) }}" alt="Product">
                      </a>
                      <div class="pt-2">
                          <h3 class="product-title fs-base mb-2">
                              <a>{{ $product->product_name }}</a>
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
                          <button class="btn btn-outline-danger btn-sm" type="submit"><i class="ci-trash me-2"></i>مسح</button>
                      </form>
                          <!-- Edit Button -->
                          <button
                                class="btn btn-outline-primary btn-sm"
                                type="button"
                                data-bs-toggle="modal"
                                data-bs-target="#product-modal"
                                data-product-id="{{ $product->product_id }}"
                                data-product-name="{{ $product->product_name }}"
                                data-category-name="{{ $product->category_name }}"
                                data-product-salary="{{ $product->product_salary }}"
                                data-description="{{ $product->description }}"
                                data-duration="{{ $product->Duration_of_righteousness }}"
                                data-product-img="{{ $product->Product_img }}">
                                <i class="ci-edit me-2"></i>تعديل
                            </button>

                      <script>

                      document.addEventListener('DOMContentLoaded', function () {
                                    var productModal = document.getElementById('product-modal');
                                    productModal.addEventListener('show.bs.modal', function (event) {
                                        var button = event.relatedTarget; // Button that triggered the modal

                                        // Extract data attributes from the button
                                        var productId = button.getAttribute('data-product-id');
                                        var productName = button.getAttribute('data-product-name');
                                        var categoryName = button.getAttribute('data-category-id'); // Assuming this is the category ID
                                        var productSalary = button.getAttribute('data-product-salary');
                                        var description = button.getAttribute('data-description');
                                        var duration = button.getAttribute('data-duration');
                                        var productImg = button.getAttribute('data-product-img');

                                        // Update the form inputs in the modal
                                        var modalForm = productModal.querySelector('form');
                                        modalForm.action = "/profileSetting/productMangement/edit-product/" + productId; // Set form action with the product ID

                                        modalForm.querySelector('#product_name').value = productName;
                                        modalForm.querySelector('#product_salary').value = productSalary;

                                        modalForm.querySelector('#description').value = description;
                                        modalForm.querySelector('#Duration_of_righteousness').value = duration;

                                        // Set the selected category
                                        var categorySelect = modalForm.querySelector('#category_name');

                                // Loop through options to find the one that matches the categoryName
                                Array.from(categorySelect.options).forEach(function(option) {
                                    if (option.value === categoryName) {
                                        option.selected = true; // Set the matching option as selected
                                    }
                                });

                                        // If you want to display the image in the form, set the src attribute
                                        var imgElement = modalForm.querySelector('#Product_img_display');
                                        if (imgElement) {
                                            imgElement.src = "/storage/" + productImg;
                                        }
                                    });


                                });

                    </script>


                  </div>

              </div>
              <div class="modal fade" id="product-modal" tabindex="-1" role="dialog">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                          <div class="modal-header bg-secondary">
                              <h5 class="modal-title">تعديل المنتج</h5>
                              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form class="needs-validation" autocomplete="off" novalidate id="product-form" action="{{ route('editProduct', ['product_id' => $product->product_id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT') <!-- استخدم PUT لتحديث المنتج -->
                                
                                <!-- اسم المنتج -->
                                <div class="mb-3">
                                    <label class="form-label" for="product_name">اسم المنتج</label>
                                    <input class="form-control" type="text" id="product_name" name="product_name" value="{{ old('product_name', $product->product_name) }}" required>
                                    <div class="invalid-feedback">يرجى إدخال اسم المنتج بشكل صحيح.</div>
                                </div>
                            
                                <!-- اسم الفئة -->
                                <div class="mb-3">
                                    <label class="form-label" for="category_id">اسم الفئة</label>
                                    <select class="form-control" id="category_id" name="category_id" required>
                                        <option value="" disabled selected>اختر فئة</option>
                                        @foreach($category1 as $category)
                                            <option value="{{ $category->category_id }}" {{ $product->category_id == $category->category_id ? 'selected' : '' }}>
                                                {{ $category->category_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">يرجى اختيار فئة صحيحة.</div>
                                </div>
                            
                                <!-- راتب المنتج -->
                                <div class="mb-3">
                                    <label class="form-label" for="product_salary">راتب المنتج</label>
                                    <input class="form-control" type="number" id="product_salary" name="product_salary" value="{{ old('product_salary', $product->product_salary) }}" required>
                                    <div class="invalid-feedback">يرجى إدخال راتب المنتج بشكل صحيح.</div>
                                </div>
                            
                                <!-- الوصف -->
                                <div class="mb-3">
                                    <label class="form-label" for="description">الوصف</label>
                                    <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $product->description) }}</textarea>
                                    <div class="invalid-feedback">يرجى إدخال وصف صحيح.</div>
                                </div>
                            
                                <!-- مدة الصلاحية -->
                                <div class="mb-3">
                                    <label class="form-label" for="Duration_of_righteousness">مدة الصلاحية</label>
                                    <input class="form-control" type="text" id="Duration_of_righteousness" name="Duration_of_righteousness" value="{{ old('Duration_of_righteousness', $product->Duration_of_righteousness) }}" required>
                                    <div class="invalid-feedback">يرجى إدخال مدة صلاحية صحيحة.</div>
                                </div>
                            
                                <!-- صورة المنتج -->
                                <div class="mb-3">
                                    <label class="form-label" for="Product_img">صورة المنتج</label>
                                    <input class="form-control" type="file" id="Product_img" name="Product_img">
                                    <div class="invalid-feedback">يرجى رفع صورة للمنتج.</div>
                                </div>
                            
                                <!-- زر الإرسال -->
                                <button class="btn btn-primary btn-shadow d-block w-100" type="submit">تحديث المنتج</button>
                            </form>
                            
                          </div>
                      </div>
                  </div>
              </div>

          @endforeach


              <!-- Item-->

            </section>
            <hr>
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
        </div>
      </div>
    </main>
    <!-- Footer-->
    @include('Includes.footer')

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
