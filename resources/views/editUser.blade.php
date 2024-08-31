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

    <!-- Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
    <style>
        
    </style>
  </head>
  <!-- Body-->
  <body class="handheld-toolbar-enabled">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Sign in / sign up modal-->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header bg-secondary">
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true"><i class="ci-unlocked me-2 mt-n1"></i>Sign in</a></li>
              <li class="nav-item"><a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab" role="tab" aria-selected="false"><i class="ci-user me-2 mt-n1"></i>Sign up</a></li>
            </ul>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body tab-content py-4">
            <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
              <div class="mb-3">
                <label class="form-label" for="si-email">Email address</label>
                <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="si-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="si-password" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <div class="mb-3 d-flex flex-wrap justify-content-between">
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" id="si-remember">
                  <label class="form-check-label" for="si-remember">Remember me</label>
                </div><a class="fs-sm" href="#">Forgot password?</a>
              </div>
              <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign in</button>
            </form>
            <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
              <div class="mb-3">
                <label class="form-label" for="su-name">Full name</label>
                <input class="form-control" type="text" id="su-name" placeholder="John Doe" required>
                <div class="invalid-feedback">Please fill in your name.</div>
              </div>
              <div class="mb-3">
                <label for="su-email">Email address</label>
                <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="su-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="su-password-confirm">Confirm password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password-confirm" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <main class="page-wrapper">

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
          
                  <!-- Success and error messages using SweetAlert2 -->
                  @if (session('success'))
                      <script>
                          document.addEventListener('DOMContentLoaded', function () {
                              Swal.fire({
                                  icon: 'success',
                                  title: 'Success',
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
                                  title: 'Error',
                                  text: '{{ session('error') }}',
                                  showConfirmButton: false,
                                  timer: 3000 // 3 seconds
                              });
                          });
                      </script>
                  @endif
          
                  <div class="bg-secondary rounded-3 p-4 mb-4 text-center text-sm-start">
                      <div class="d-flex flex-sm-row flex-column align-items-sm-start align-items-center">
                          <!-- Display the user's profile image -->
                          <img class="rounded mb-sm-0 mb-3" src="{{ $user->image ? asset('storage/' . $user->image) : asset('img/nft/vendor/avatar-square.jpg') }}" width="90" alt="Image">
                      </div>
                  </div>
                  <!-- Form for updating user data, including avatar -->
                  <form method="POST" action="{{ route('updateUser',['id'=>$user->id] ) }}" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div class="row gy-3 mb-4 pb-md-3 mb-2">
                          <div class="col-sm-6">
                              <label class="form-label" for="profile-name">Full name</label>
                              <input class="form-control" id="profile-name" type="text" value="{{ $user->user_name }}" name="user_name">
                          </div>
                          <div class="col-sm-6">
                              <label class="form-label" for="profile-phone">Phone</label>
                              <input class="form-control" id="profile-phone" type="text" value="{{ $user->phone }}" name="phone">
                          </div>
                          <div class="col-sm-6">
                              <label class="form-label" for="profile-email">Email</label>
                              <input class="form-control" id="profile-email" type="email" value="{{ $user->email }}" name="email">
                          </div>
                          <div class="col-sm-6">
                              <label class="form-label" for="profile-avatar">Avatar</label>
                              <input class="form-control" id="profile-avatar" type="file" name="image">
                          </div>
                          <div class="col-sm-6">
                            <label class="form-label" for="profile-access">Access Level</label>
                            <select class="form-control" id="profile-access" name="access">
                                <option value="User" {{ old('access', $user->access) == 'User' ? 'selected' : '' }}>User</option>
                                <option value="Admin" {{ old('access', $user->access) == 'Admin' ? 'selected' : '' }}>Admin</option>
                            </select>
                          </div>                                                               
                      </div>
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
    <footer class="footer bg-darker">
      <div class="bg-dark">
        <div class="container py-5">
          <div class="row py-lg-4">
            <div class="col-lg-4 mb-lg-0 mb-4">
              <div class="widget pb-3 mb-lg-4">
                <h3 class="widget-title text-light pb-1">Stay informed</h3>
                <form class="subscription-form validate" action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                  <div class="input-group flex-nowrap"><i class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                    <input class="form-control rounded-start" type="email" name="EMAIL" placeholder="Your email" required>
                    <button class="btn btn-accent" type="submit" name="subscribe">Subscribe*</button>
                  </div>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true">
                    <input class="subscription-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                  </div>
                  <div class="form-text text-light opacity-50">*Subscribe to our newsletter to receive early discount offers, updates and new products info.</div>
                  <div class="subscription-status"></div>
                </form>
              </div>
              <div><a class="btn-social bs-light bs-twitter me-2 mb-2" href="#"><i class="ci-twitter"></i></a><a class="btn-social bs-light bs-facebook me-2 mb-2" href="#"><i class="ci-facebook"></i></a><a class="btn-social bs-light bs-instagram me-2 mb-2" href="#"><i class="ci-instagram"></i></a><a class="btn-social bs-light bs-pinterest me-2 mb-2" href="#"><i class="ci-pinterest"></i></a><a class="btn-social bs-light bs-youtube me-2 mb-2" href="#"><i class="ci-youtube"></i></a></div>
            </div>
            <div class="col-lg-6 offset-lg-1">
              <div class="d-flex flex-sm-row flex-column justify-content-sm-between mt-n4 mx-lg-n3">
                <div class="widget widget-links widget-light mt-4 px-lg-3 px-sm-n2">
                  <h3 class="widget-title text-light">Company</h3>
                  <ul class="widget-list">
                    <li class="widget-list-item"><a class="widget-list-link" href="#">About Us</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">How It Works</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Create an NFT With Us</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Support</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Blog</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">My Account</a></li>
                  </ul>
                </div>
                <div class="widget widget-links widget-light mt-4 px-lg-3 px-sm-n2">
                  <h3 class="widget-title text-light">Marketplace</h3>
                  <ul class="widget-list">
                    <li class="widget-list-item"><a class="widget-list-link" href="#">All NFTs</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">New</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Art</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Music</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Photography</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Utility</a></li>
                  </ul>
                </div>
                <div class="widget widget-links widget-light mt-4 px-lg-3 px-sm-n2">
                  <h3 class="widget-title text-light">Help</h3>
                  <ul class="widget-list">
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Terms and Conditions</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Privacy Policy</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">FAQ</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container my-lg-4 my-3 py-2">
        <div class="d-flex flex-md-row flex-column-reverse align-items-center justify-content-md-between">
          <div class="fs-xs text-light opacity-50">&copy; All rights reserved. Made by <a class="text-light" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></div>
          <div class="d-flex align-items-start mb-md-0 mb-3 mx-n1">
            <div class="px-1"><a class="btn-market btn-apple bg-dark" href="#"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">App Store</span></a></div>
            <div class="px-1"><a class="btn-market btn-google bg-dark" href="#"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">Google Play</span></a></div>
          </div>
        </div>
      </div>
    </footer>
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

  </body>

</html>