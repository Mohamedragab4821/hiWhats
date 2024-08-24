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
                <h6 class="fs-base text-light mb-0">List of items you added to wishlist:</h6><a class="btn btn-primary btn-sm" href="#category-modal" data-bs-toggle="modal" ><i class="ci-add me-2"></i>Add Categores</a>
              </div>
              <div class="modal fade" id="category-modal" tabindex="-1" role="dialog">
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
                          <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="category-form" action="{{ route('storeCategory') }}" method="POST" enctype="multipart/form-data">
                              @csrf

                              <!-- Category Name -->
                              <div class="mb-3">
                                  <label class="form-label" for="category_name">Category Name</label>
                                  <input class="form-control" type="text" id="category_name" name="category_name" placeholder="Enter category name" required>
                                  <div class="invalid-feedback">Please provide a valid category name.</div>
                              </div>

                              <!-- Category Description -->
                              <div class="mb-3">
                                  <label class="form-label" for="category_description">Category Description</label>
                                  <textarea class="form-control" id="category_description" name="category_description" rows="3" placeholder="Enter category description" required></textarea>
                                  <div class="invalid-feedback">Please provide a valid description.</div>
                              </div>

                              <!-- Category Image -->
                              <div class="mb-3">
                                  <label class="form-label" for="category_img">Category Image</label>
                                  <input class="form-control" type="file" id="category_img" name="category_img">
                                  <div class="invalid-feedback">Please upload a category image.</div>
                              </div>

                              <!-- Submit Button -->
                              <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Add Category</button>
                          </form>
                      </div>
                    </div>
                  </div>
              </div>
              <!-- Wishlist-->
              <!-- Item-->
              @foreach ($category as $category)
              <div class="d-sm-flex justify-content-between mt-lg-4 mb-4 pb-3 pb-sm-2 border-bottom">
                  <div class="d-block d-sm-flex align-items-start text-center text-sm-start">
                      <!-- Display category image -->
                      <a class="d-block flex-shrink-0 mx-auto me-sm-4" href="shop-single-v1.html" style="width: 10rem;">
                          <img src="{{ asset('storage/' . $category->category_img) }}" alt="Category Image">
                      </a>
                      <div class="pt-2">
                          <h3 class="product-title fs-base mb-2">
                              <a>{{ $category->category_name }}</a>
                          </h3>
                          <div class="fs-sm">
                              <span class="text-muted me-2">Description:</span>{{ $category->category_description }}
                          </div>
                      </div>
                  </div>

                  <div class="pt-2 ps-sm-3 mx-auto mx-sm-0 text-center">
                      <!-- Form to delete category -->
                      <form action="{{ route('destroyCategory', $category->category_id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-outline-danger btn-sm" type="submit"><i class="ci-trash me-2"></i>Remove</button>
                      </form>

                      <div class="pt-2 ps-sm-3 mx-auto mx-sm-0 text-center">
                          <!-- Edit Button -->
                          <button class="btn btn-outline-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#categoryy-modal"
                              data-category-id="{{ $category->category_id }}"
                              data-category-name="{{ $category->category_name }}"
                              data-category-description="{{ $category->category_description }}"
                              data-category-img="{{ $category->category_img }}">
                              <i class="ci-edit me-2"></i>Edit
                          </button>
                      </div>
                  </div>
              </div>
          @endforeach

          <!-- Edit Modal -->
          <div class="modal fade" id="categoryy-modal" tabindex="-1" role="dialog">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                      <div class="modal-header bg-secondary">
                          <h5 class="modal-title">Edit Category</h5>
                          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form class="needs-validation" id="category-form" method="POST" enctype="multipart/form-data" novalidate>
                              @csrf
                              @method('POST')

                              <!-- Category Name -->
                              <div class="mb-3">
                                  <label class="form-label" for="category_name">Category Name</label>
                                  <input class="form-control" type="text" id="category_name" name="category_name" required>
                                  <div class="invalid-feedback">Please provide a valid category name.</div>
                              </div>

                              <!-- Category Description -->
                              <div class="mb-3">
                                  <label class="form-label" for="category_description">Category Description</label>
                                  <textarea class="form-control" id="category_description" name="category_description" rows="3" required></textarea>
                                  <div class="invalid-feedback">Please provide a valid description.</div>
                              </div>

                              <!-- Category Image -->
                              <div class="mb-3">
                                  <label class="form-label" for="category_img">Category Image</label>
                                  <input class="form-control" type="file" id="category_img" name="category_img">
                                  <div class="invalid-feedback">Please upload a category image.</div>
                              </div>

                              <!-- Submit Button -->
                              <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Update Category</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Script for Handling Modal Data -->
          <script>
              // When the modal is shown, populate the form fields with the category data
              var categoryModal = document.getElementById('categoryy-modal');
              categoryModal.addEventListener('show.bs.modal', function (event) {
                  var button = event.relatedTarget; // Button that triggered the modal
                  var categoryId = button.getAttribute('data-category-id');
                  var categoryName = button.getAttribute('data-category-name');
                  var categoryDescription = button.getAttribute('data-category-description');
                  var categoryImg = button.getAttribute('data-category-img');

                  // Update the form inputs
                  var modalForm = categoryModal.querySelector('form');
                  modalForm.action = "/profileSetting/categoryMangement/update/" + categoryId;  // Set form action with the category ID

                  modalForm.querySelector('#category_name').value = categoryName;
                  modalForm.querySelector('#category_description').value = categoryDescription;
                  // The image field will be empty for uploading new ones, but you can leave it to upload new images if needed
              });
          </script>
              <!-- Item-->

              <!-- Item-->

            </section>
          <!--End Content-->
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
