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
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/' . ($settings->logo))}}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="mask-icon" color="#fe6a6a" href="{{ asset('safari-pinned-tab.svg') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/simplebar/dist/simplebar.min.css') }}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/tiny-slider/dist/tiny-slider.css') }}"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('css/theme.min.css') }}">

    <style>
      .custom-card {
        /* Increase card size */
        width: 100%;
        height: 100%;
        max-width: 300px; /* Adjust this value as needed */
    }

    .custom-card .card-img-top img {
        /* Ensure image fills the card properly */
        width: 100%;
        height: 200px; /* Adjust height as needed */
        object-fit: cover;
    }

    .custom-card .card-body {
        padding: 1.5rem; /* Increase padding inside the card */
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
            <!-- Sidebar-->
            @include('Includes.leftSideMenue')
            <!-- Content-->
            <section class="col-lg-9 pt-lg-4 pb-4 mb-3">
                <div class="container py-lg-4">
                    <div class="d-flex flex-wrap mb-3">
                      <div class="dropdown d-inline-block">
                        <a class="h3 text-primary" href="#" data-bs-toggle="dropdown">
                          <span class="dropdown-toggle-label">مفضلاتك</span>
                        </a>
                      </div>
                    </div>
                
                    <!-- Product carousel -->
                    <div class="tns-carousel tns-controls-static tns-controls-outside mx-xl-n4 mx-n2 px-xl-4 px-0">
                      <div class="container mb-5 pb-3">
                          <div class="bg-light shadow-lg rounded-3 overflow-hidden">
                              <div class="row">
                                  <!-- Content -->
                                  <section class="col-lg-12 pt-lg-4 pb-4 mb-3">
                                      <div class="container py-lg-4">
                                          <!-- Product grid -->
                                          <div class="row">
                                              @foreach($favorites as $favorite)
                                              <div class="col-md-4 col-lg-3 py-3">
                                                  <article class="card h-100 border-0 custom-card">
                                                      <div class="card-img-top position-relative overflow-hidden">
                                                          <a class="d-block" href="#">
                                                              <img class="avatar img-fluid" src="{{ $favorite->product->Product_img ? asset('storage/' . $favorite->product->Product_img) : asset('img/default-product-image.jpg') }}" alt="صورة المنتج">
                                                          </a>
                                                          <button 
                                                              class="btn-delete btn-sm position-absolute top-0 end-0" 
                                                              type="button" 
                                                              data-bs-toggle="tooltip" 
                                                              data-bs-placement="left" 
                                                              title="إزالة من المفضلات" 
                                                              style="margin: 12px; border: none;"
                                                              onclick="removeFromFavorites({{ $favorite->id }})"
                                                          >
                                                              <i class="ci-trash"></i>
                                                          </button>
                                                      </div>
                                                      <div class="card-body">
                                                          <h5 class="card-title mb-2 fs-base">
                                                              <a class="d-block text-truncate" href="#">
                                                                  {{ $favorite->product->product_name }}
                                                              </a>
                                                          </h5>
                                                          <p class="card-text">{{ $favorite->product->product_salary }} ETH</p>
                                                      </div>
                                                  </article>
                                              </div>
                                              @endforeach
                                          </div>
                                      </div>
                                  </section>
                              </div>
                          </div>
                      </div>
                  </div>
                    
                  </div>
            </section>
                
              </section>
              
          
          
          
          
          
          
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
     function removeFromFavorites(favoriteId) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            fetch(`/favorites/${favoriteId}`, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire(
                        'Deleted!',
                        'Your favorite has been deleted.',
                        'success'
                    ).then(() => {
                        location.reload(); // Reload the page to reflect changes
                    });
                } else {
                    Swal.fire(
                        'Error!',
                        data.message || 'Failed to delete the favorite.',
                        'error'
                    );
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire(
                    'Error!',
                    'Something went wrong.',
                    'error'
                );
            });
        }
    });
}

    </script>
      
  </body>

<!-- Mirrored from cartzilla.createx.studio/nft-account-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2022 18:19:25 GMT -->
</html>
