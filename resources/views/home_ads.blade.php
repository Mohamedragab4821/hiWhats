<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <title>{{$settings->website_name}} </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - قالب للتجارة الإلكترونية من Bootstrap">
    <meta name="keywords" content="bootstrap, متجر, تجارة إلكترونية, سوق, حديث, متجاوب, عمل, موبايل, bootstrap, html5, css3, js, معرض, شريط تمرير, تفاعلي, نظيف">
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
            <section class="col-lg-9 pt-lg-4 pb-4 mb-3">
                <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
                    <h1 class="h3 mb-4 pt-2 text-center text-sm-end">إعدادات الموقع</h1>
            
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
                                <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true">إضافة منتج</a></li>
                              </ul>
                              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body tab-content py-4">
                                <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="product-form" action="{{ route('ads.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Product Name -->
                                    <div class="bg-secondary rounded-3 p-4 mb-4 text-center text-sm-start">
                                        <div class="d-flex flex-sm-row flex-column align-items-sm-start align-items-center">
                                            <div class="ms-n2 ps-sm-4">
                                                <label class="form-label" for="icon">الصورة</label>
                                                <input class="form-control" type="file" id="icon" name="image">
                                                <div class="invalid-feedback">يرجى تقديم صورة صحيحة.</div>
                                            </div>
                                        </div>
                                    </div>
      
                                    <!-- Product Description -->
                                    <div class="mb-3">
                                        <label class="form-label" for="product_salary">الوصف</label>
                                        <input class="form-control" type="text" id="product_salary" name="description" placeholder="أدخل الوصف" required>
                                    </div>
      
                                    <!-- End Date -->
                                    <div class="mb-3">
                                        <label class="form-label" for="description">تاريخ الانتهاء</label>
                                        <input type="date" class="form-control" id="description" name="end_date" required>
                                        <div class="invalid-feedback">يرجى تقديم تاريخ انتهاء صحيح.</div>
                                    </div>
      
                                    <!-- Button URL -->
                                    <div class="mb-3">
                                        <label class="form-label" for="Duration_of_righteousness">رابط الزر</label>
                                        <input class="form-control" type="text" id="Duration_of_righteousness" name="button_url" required>
                                    </div>
      
                                    <!-- Submit Button -->
                                    <button class="btn btn-primary btn-shadow d-block w-100" type="submit">إضافة</button>
                                </form>
                            </div>
                          </div>
                        </div>
                    </div>


                    <br>
                    <a class="btn btn-lg btn-outline-dark mb-sm-3 mb-2" href="#signup-modal" data-bs-toggle="modal">أضف إعلان</a></div>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">الوصف</th>
                            <th scope="col">تاريخ البدء</th>
                            <th scope="col">رابط الزر</th>
                            <th scope="col">الصورة</th>
                            <th scope="col">حذف</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                             $i=0; 
                          @endphp
                          @foreach ($home_ads as $item)
                          @php
                             $i++; 
                          @endphp
                          <tr>
                            <th scope="row">{{$i}}</th>
                            <td>{{$item->description}}</td>
                            <td>{{$item->start_date}}</td>
                            <td>{{$item->button_url}}</td>
                            <td><img class="rounded mb-sm-0 mb-3" src="{{ asset('storage/' . ($item->image ?? 'default_icon.jpg')) }}" width="90" alt="Icon"></td>
                            <td>
                                <form action="{{ route('ads.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger btn-sm" type="submit"><i class="ci-trash me-2"></i>حذف</button>
                                </form>
                            </td>
                          </tr>
                          @endforeach
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

    <!-- Toolbar for handheld devices-->
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100">
        <a class="d-table-cell handheld-toolbar-item" href="nft-account-settings.html" data-bs-toggle="modal"><span class="handheld-toolbar-icon"><i class="ci-user"></i></span><span class="handheld-toolbar-label">الحساب</span></a>
        <a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span class="handheld-toolbar-label">القائمة</span></a>
        <a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#searchModal"><span class="handheld-toolbar-icon"><i class="ci-search"></i></span><span class="handheld-toolbar-label">بحث</span></a>
      </div>
    </div>
    <!-- Vendor Scripts-->
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <!-- Main Theme Script-->
    <script src="{{ asset('js/theme.min.js') }}"></script>
    <!-- Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
</body>
</html>
