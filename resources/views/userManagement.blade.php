<!DOCTYPE html>
<html lang="ar">

<!-- Mirrored from cartzilla.createx.studio/nft-account-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2022 18:19:25 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>{{$settings->website_name}} </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - قالب التجارة الإلكترونية Bootstrap">
    <meta name="keywords" content="bootstrap, متجر, التجارة الإلكترونية, السوق, حديث, استجابة, عمل, موبايل, bootstrap, html5, css3, js, معرض, شريط التمرير, لمسة, إبداعي, نظيف">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/' . ($settings->icon))}}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="mask-icon" color="#fe6a6a" href="{{ asset('safari-pinned-tab.svg') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/simplebar/dist/simplebar.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/tiny-slider/dist/tiny-slider.css') }}"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('css/theme.min.css') }}">
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

      .icon-container {
          display: flex;
          gap: 10px; /* Adjust the space between icons as needed */
          margin-top: 15px
      }

      .btn-small {
          font-size: 18px; /* Smaller font size for the delete button */
          padding: 0;
          border: none;
          background: none;
          color: #dc3545; /* Red color for the delete button */
      }

      .btn-small:hover {
          color: #c82333;
      }

      .avatar {
          width: 50px; /* Adjust size as needed */
          height: 50px;
          border-radius: 50%;
          margin-right: 10px;
      }
      .btn-close {
        position: absolute;
        top: 3rem; /* المسافة من الأعلى */
        left: 2rem; /* المسافة من اليسار */
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
            <!-- Sidebar-->
            @include('Includes.leftSideMenue')
            @if (session('success'))
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    Swal.fire({
                        icon: 'success',
                        title: 'نجاح',
                        text: '{{ session('success') }}',
                        showConfirmButton: false,
                        timer: 3000 // 3 seconds
                    });
                });
            </script>
        @elseif (session('error'))
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'خطأ',
                        text: '{{ session('error') }}',
                        showConfirmButton: false,
                        timer: 3000 // 3 seconds
                    });
                });
            </script>
        @endif
            <!-- Content-->
            <section class="col-lg-9 pt-lg-4 pb-4 mb-3">
              <div class="container-xl">
                  <div class="table-responsive">
                      <div class="table-wrapper">
                          <div class="table-title">
                              <div class="row">
                                  <div class="col-sm-5">
                                      <h2>إدارة <b>المستخدمين</b></h2>
                                  </div>
                              </div>
                          </div>
                          <table class="table table-striped table-hover">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>الصورة</th>
                                      <th>الاسم</th>
                                      <th>البريد الإلكتروني</th>
                                      <th>الهاتف</th>
                                      <th>الوصول</th>
                                      <th>تاريخ الإنشاء</th>
                                      <th>الإجراء</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>
                                            @if($user->image)
                                            <div style="margin-left: 20px" class="d-flex align-items-center ">
                                                    <img src="{{ asset('storage/' . $user->image) }}" class="avatar" alt="الصورة الشخصية">
                                                <form action="{{ route('deleteAvatar') }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                                    <button type="submit" class="btn-small" title="حذف الصورة">
                                                        <i class="material-icons">delete</i>
                                                    </button>
                                                </form>
                                            </div>
                                            @else
                                            <span>لا توجد صورة</span>
                                            @endif
                                        </td>
                                        <td>{{ $user->user_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->access }}</td>
                                        <td>{{ $user->created_at->format('d/m/Y') }}</td>
                                        <td class="action-buttons icon-container">
                                            <!-- Settings Button -->
                                            <a href="{{ route('editUser', ['id' => $user->id]) }}" class="icon-button" title="الإعدادات" data-toggle="tooltip">
                                                <i class="material-icons">settings</i>
                                            </a>
                                            
                                            <!-- Delete Button -->
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;" class="delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="icon-button" title="حذف" data-toggle="tooltip">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                          </table>
                          
                          <!-- Pagination would be here if needed -->
                      </div>
                  </div>
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
      <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item" href="nft-account-settings.html" data-bs-toggle="modal"><span class="handheld-toolbar-icon"><i class="ci-user"></i></span><span class="handheld-toolbar-label">الحساب</span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span class="handheld-toolbar-label">القائمة</span></a></div>
    </div>
    
    <!-- Back to Top Button-->
    <a class="btn-scroll-top" href="javascript:void(0)" data-scroll-to="#top">
      <i class="ci-arrow-up"></i>
    </a>
    <!-- Vendor Scripts-->
    <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <!-- Main Theme Script-->
    <script src="{{ asset('js/theme.min.js') }}"></script>
    <!-- SweetAlert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>
