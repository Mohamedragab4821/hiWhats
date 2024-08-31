<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <title>{{$settings->website_name}}</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - قالب التجارة الإلكترونية Bootstrap">
    <meta name="keywords" content="bootstrap, متجر, تجارة إلكترونية, سوق, حديث, استجابة, عمل, موبايل, bootstrap, html5, css3, js, معرض, شريط تمرير, لمسة, إبداعي, نظيف">
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
    <!-- Material Icons for delete button -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
      .icon-button {
          border: none;
          background: none;
          color: #dc3545; /* Red color for the delete button */
          cursor: pointer;
          font-size: 24px;
          padding: 0;
      }
      .icon-button:hover {
        color: #c82333;
      }
      .avatar {
          width: 90px; /* Adjust size as needed */
          height: 90px;
          border-radius: 50%;
          margin-right: 10px;
      }
      .d-flex {
        display: flex;
        align-items: center;
      }
    </style>
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
                            <h1 class="h3 mb-4 pt-2 text-center text-sm-end">إعدادات الملف الشخصي</h1>
                            <div class="bg-secondary rounded-3 p-4 mb-4 text-center text-sm-start">
                                <div class="d-flex flex-sm-row flex-column align-items-sm-start align-items-center">
                                    <!-- عرض صورة الملف الشخصي للمستخدم -->
                                    <div class="d-flex align-items-center">
                                        <img class="avatar" src="{{ Auth::user()->image ? asset('storage/' . Auth::user()->image) : asset('img/nft/vendor/avatar-square.jpg') }}" alt="الصورة">
                                        <!-- Delete button for profile image -->
                                        @if(Auth::user()->image)
                                            <form action="{{ route('deleteAvatar') }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                <button type="submit" class="icon-button" title="حذف الصورة">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- نموذج لتحديث بيانات المستخدم، بما في ذلك الصورة الرمزية -->
                            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row gy-3 mb-4 pb-md-3 mb-2">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="profile-name">الاسم الكامل</label>
                                        <input class="form-control" id="profile-name" type="text" value="{{ Auth::user()->user_name }}" name="user_name">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="profile-phone">الهاتف</label>
                                        <input class="form-control" id="profile-phone" type="text" value="{{ Auth::user()->phone }}" name="phone">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="profile-email">البريد الإلكتروني</label>
                                        <input class="form-control" id="profile-email" type="email" value="{{ Auth::user()->email }}" name="email">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="profile-avatar">الصورة الرمزية</label>
                                        <input class="form-control" id="profile-avatar" type="file" name="image">
                                    </div>
                                </div>
                                <div class="d-flex flex-sm-row flex-column">
                                    <button class="btn btn-accent" type="submit">تحديث الملف الشخصي</button>
                                </div>
                            </form>
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
        <div class="d-table table-layout-fixed w-100">
            <a class="d-table-cell handheld-toolbar-item" href="nft-account-settings.html" data-bs-toggle="modal">
                <span class="handheld-toolbar-icon"><i class="ci-user"></i></span>
                <span class="handheld-toolbar-label">الحساب</span>
            </a>
            <a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)">
                <span class="handheld-toolbar-icon"><i class="ci-menu"></i></span>
                <span class="handheld-toolbar-label">القائمة</span>
            </a>
            <a class="d-table-cell handheld-toolbar-item" href="nft-create-item.html">
                <span class="handheld-toolbar-icon"><i class="ci-add"></i></span>
                <span class="handheld-toolbar-label">إنشاء عنصر</span>
            </a>
        </div>
    </div>
    <!-- Back To Top Button-->
    <a class="btn-scroll-top" href="#top" data-scroll>
        <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">أعلى</span>
        <i class="btn-scroll-top-icon ci-arrow-up"></i>
    </a>
    <!-- Vendor scripts: js libraries and plugins-->
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <!-- Main theme script-->
    <script src="{{ asset('js/theme.min.js') }}"></script>
    <!-- SweetAlert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
