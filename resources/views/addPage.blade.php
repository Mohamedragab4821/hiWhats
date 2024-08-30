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
                <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
                    <h1 class="h3 mb-4 pt-2 text-center text-sm-start">Website Settings</h1>
            
                    <!-- Display success or error messages -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                     @endif
            
                    <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog">
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
                                <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="product-form" action="{{ route('ads.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Product Name -->
                                    <div class="bg-secondary rounded-3 p-4 mb-4 text-center text-sm-start">
                                        <div class="d-flex flex-sm-row flex-column align-items-sm-start align-items-center">
                                            <div class="ms-n2 ps-sm-4">
                                                <label class="form-label" for="icon">الصوره</label>
                                                <input class="form-control" type="file" id="icon" name="image">
                                                <div class="invalid-feedback">Please provide a valid product salary.</div>
                                            </div>
                                        </div>
                                    </div>
      
      
                               
                                    <!-- Product Salary -->
                                    <div class="mb-3">
                                        <label class="form-label" for="product_salary">اسم الصفحه</label>
                                        <input class="form-control" type="text" id="product_salary" name="pageName" placeholder="Enter product salary" required>
                                    </div>
      
                                    <!-- Description -->
                                    <div class="mb-3">
                                        <label class="form-label" for="description">محتوى الصفحه</label>
                                        <input type="text-area" class="form-control" id="description" name="end_date"  required></input>
                                    </div>
      
                                    <!-- Duration of Righteousness -->
                                    
      
                                    <!-- Product Image -->
                                    
      
                                    <!-- Submit Button -->
                                    <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Add</button>
                                </form>
      
                            </div>
                          </div>
                        </div>
                    </div>
                    

                    <br>
                    <a class="btn btn-lg btn-outline-dark mb-sm-3 mb-2" href="#signup-modal" data-bs-toggle="modal">اضف اعلان</a></div>
                    <table class="table table-bordered">
                        <thead>
                                
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Description</th>
                            <th scope="col">start Late</th>
                            <th scope="col">Button Url</th>
                            <th scope="col">Image</th>
                            <th scope="col">Delete</th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            @php
                               $i=0; 
                            @endphp
                            {{-- @foreach ($home_ads as $item)
                            @php
                               $i++; 
                            @endphp
                            <th scope="row">{{$i}}</th>
                            <td>{{$item->description}}</td>
                            <td>{{$item->satrt_date}}</td>
                            <td>{{$item->button_url}}</td>
                            <td><img class="rounded mb-sm-0 mb-3" src="{{ asset('storage/' . ($item->image ?? 'default_icon.jpg')) }}" width="90" alt="Icon"></td>
                            <td><form action="{{ route('ads.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger btn-sm" type="submit"><i class="ci-trash me-2"></i>delete</button>
                            </form></td>
                            
                            @endforeach --}}
                          </tr>
                        </tbody>
                      </table>
                </div>
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

  </body>

<!-- Mirrored from cartzilla.createx.studio/nft-account-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2022 18:19:25 GMT -->
</html>