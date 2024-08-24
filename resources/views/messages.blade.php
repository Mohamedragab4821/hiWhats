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
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


    <!-- Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
    <style>
           body{
				background:#FDFDFF
			}
			.badge {
				border-radius: 8px;
				padding: 4px 8px;
				text-transform: uppercase;
				font-size: .7142em;
				line-height: 12px;
				background-color: transparent;
				border: 1px solid;
				margin-bottom: 5px;
				border-radius: .875rem;
			}
			.bg-green {
				background-color: #50d38a !important;
				color: #fff;
			}
			.bg-blush {
				background-color: #ff758e !important;
				color: #fff;
			}
			.bg-amber {
				background-color: #FFC107 !important;
				color: #fff;
			}
			.bg-red {
				background-color: #ec3b57 !important;
				color: #fff;
			}
			.bg-blue {
				background-color: #60bafd !important;
				color: #fff;
			}
			.card {
				background: #fff;
				margin-bottom: 30px;
				transition: .5s;
				border: 0;
				border-radius: .1875rem;
				display: inline-block;
				position: relative;
				width: 100%;
				box-shadow: none;
			}
			.inbox .action_bar .delete_all {
				margin-bottom: 0;
				margin-top: 8px
			}

			.inbox .action_bar .btn,
			.inbox .action_bar .search {
				margin: 0
			}

			.inbox .mail_list .list-group-item {
				border: 0;
				padding: 15px;
				margin-bottom: 1px
			}

			.inbox .mail_list .list-group-item:hover {
				background: #eceeef
			}

			.inbox .mail_list .list-group-item .media {
				margin: 0;
				width: 100%
			}

			.inbox .mail_list .list-group-item .controls {
				display: inline-block;
				margin-right: 10px;
				vertical-align: top;
				text-align: center;
				margin-top: 11px
			}

			.inbox .mail_list .list-group-item .controls .checkbox {
				display: inline-block
			}

			.inbox .mail_list .list-group-item .controls .checkbox label {
				margin: 0;
				padding: 10px
			}

			.inbox .mail_list .list-group-item .controls .favourite {
				margin-left: 10px
			}

			.inbox .mail_list .list-group-item .thumb {
				display: inline-block
			}

			.inbox .mail_list .list-group-item .thumb img {
				width: 40px
			}

			.inbox .mail_list .list-group-item .media-heading a {
				color: #555;
				font-weight: normal
			}

			.inbox .mail_list .list-group-item .media-heading a:hover,
			.inbox .mail_list .list-group-item .media-heading a:focus {
				text-decoration: none
			}

			.inbox .mail_list .list-group-item .media-heading time {
				font-size: 13px;
				margin-right: 10px
			}

			.inbox .mail_list .list-group-item .media-heading .badge {
				margin-bottom: 0;
				border-radius: 50px;
				font-weight: normal
			}

			.inbox .mail_list .list-group-item .msg {
				margin-bottom: 0px
			}

			.inbox .mail_list .unread {
				border-left: 2px solid
			}

			.inbox .mail_list .unread .media-heading a {
				color: #333;
				font-weight: 700
			}

			.inbox .btn-group {
				box-shadow: none
			}

			.inbox .bg-gray {
				background: #e6e6e6
			}

			@media only screen and (max-width: 767px) {
				.inbox .mail_list .list-group-item .controls {
					margin-top: 3px
				}
			}
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
                    <h1 class="h3 mb-4 pt-2 text-center text-sm-start">Messages</h1>
            
                    <!-- Display success or error messages -->
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @elseif (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
            
                    
            
                    <main class="content">
    <div class="container p-0">


		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
		<div class="container">
			<section class="content inbox">
				<div class="container-fluid">
					<div class="row clearfix">
						<div class="col-lg-12">
							<div class="card action_bar">
								<div class="body">
									<div class="row clearfix">
										<div class="col-lg-1 col-md-2 col-3">
										</div>
										<div class="col-lg-5 col-md-4 col-6">
											<form method="GET" action="{{ url('/messages') }}">
												<div class="input-group search">
													<input type="text" name="search" class="form-control" placeholder="Search..." value="{{ request()->input('search') }}">
													<span class="input-group-addon">
														<button type="submit" style="width: 38px;height: 100%;"><i class="zmdi zmdi-search"></i></button>
													</span>
												</div>
											</form>
										</div>                                                     
									</div>
								</div>
							</div>
						</div>           
					</div>        
					<div class="row clearfix">
						<div class="col-md-12 col-lg-12 col-xl-12">
							<ul class="mail_list list-group list-unstyled">
								@foreach ($contacts as $contact)
									<li class="list-group-item">
										<div class="media">
											<div class="pull-left">                                
												<div class="controls">
													
												</div>
												<div class="thumb hidden-sm-down m-r-20">
													<img src="assets/images/xs/avatar1.jpg" class="rounded-circle" alt="">
												</div>
											</div>
											<div class="media-body">
												<div class="media-heading">
													<p href="mail-single.html" class="m-r-10">{{$contact->name}}</p>
													<span class="badge bg-blue">{{$contact->product}}</span>
													<small class="float-right text-muted">
														<time class="hidden-sm-down" datetime="2017">{{$contact->created_at}}</time>
														<i class="zmdi zmdi-attachment-alt"></i>
													</small>
												</div>
												<p class="msg">Message: {{$contact->message}}</p>
												<p class="msg">Phone: {{$contact->phone}}</p>
												<p class="msg">Email: {{$contact->email}}</p>
											</div>
										</div>
									</li>
								@endforeach
							</ul>
							
							<!-- Pagination -->
							<div class="card m-t-5">
								<div class="body">
									{{ $contacts->appends(request()->input())->links() }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			</div>
				</div>
			</main>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>


  </body>

<!-- Mirrored from cartzilla.createx.studio/nft-account-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2022 18:19:25 GMT -->
</html>