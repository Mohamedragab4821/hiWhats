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
            <section class="col-lg-9 pt-lg-4 pb-4 mb-3">
              <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
                <h1 class="h3 mb-4 pt-2 text-center text-sm-start">Profile Settings</h1>
                <div class="bg-secondary rounded-3 p-4 mb-4 text-center text-sm-start">
                  <div class="d-flex flex-sm-row flex-column align-items-sm-start align-items-center"><img class="rounded mb-sm-0 mb-3" src="img/nft/vendor/avatar-square.jpg" width="90" alt="Createx Studio">
                    <div class="ms-n2 ps-sm-4">
                      <button class="btn btn-outline-accent mb-2 ms-2" type="button"><i class="ci-loading me-2"></i>Change <span class='d-none d-sm-inline'>avatar</span></button>
                      <button class="btn btn-outline-danger mb-2 ms-2" type="button"><i class="ci-trash me-2"></i>Delete</button>
                      <div class="pt-1 mb-0 fs-sm text-muted">We recommend an image of at least 400x400. Gifs work too :)</div>
                    </div>
                  </div>
                </div>
                <form>
                  <div class="row gy-3 mb-4 pb-md-3 mb-2">
                    <div class="col-sm-6">
                      <label class="form-label" for="profile-name">Full name</label>
                      <input class="form-control" id="profile-name" type="text" value="Robert Fox">
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="profile-username">Username</label>
                      <input class="form-control" id="profile-username" type="text" placeholder="@enter_name">
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="profile-uid">UID</label>
                      <input class="form-control" id="profile-uid" type="text" value="374702749">
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="profile-email">Email</label>
                      <input class="form-control" id="profile-email" type="email" value="example@gmail.com">
                    </div>
                    <div class="col-12">
                      <label class="form-label" for="profile-bio">Short bio</label>
                      <textarea class="form-control" id="profile-bio" rows="4" placeholder="Tell about yourself in few words"></textarea><span class="form-text">0 of 500 characters used.</span>
                    </div>
                  </div>
                  <h3 class="h5 mb-3">Social media profiles</h3>
                  <div class="row gy-3 mb-4 pb-2">
                    <div class="col-sm-6">
                      <label class="form-label" for="profile-website">Website</label>
                      <input class="form-control" id="profile-website" type="url" placeholder="Enter URL">
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="profile-twitter">Twitter</label>
                      <input class="form-control" id="profile-twitter" type="url" placeholder="Enter URL">
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="profile-facebook">Facebook</label>
                      <input class="form-control" id="profile-facebook" type="url" placeholder="Enter URL">
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="profile-instagram">Instagram</label>
                      <input class="form-control" id="profile-instagram" type="url" placeholder="Enter URL">
                    </div>
                    <div class="col-12"><a href="#"><i class="ci-add me-2"></i><ins>Add more</ins></a></div>
                  </div>
                  <!-- Submit-->
                  <div class="d-flex flex-sm-row flex-column">
                    <button class="btn btn-accent" type="submit">Update profile</button>
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
