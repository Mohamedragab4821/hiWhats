<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <title>{{ $settings->website_name }}</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - قالب التجارة الإلكترونية Bootstrap">
    <meta name="keywords" content="bootstrap, متجر, تجارة إلكترونية, سوق, حديث, استجابة, عمل, موبايل, bootstrap, html5, css3, js, معرض, شريط تمرير, لمسة, إبداعي, نظيف">
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
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/simplebar/dist/simplebar.min.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/tiny-slider/dist/tiny-slider.css') }}">
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('css/theme.min.css') }}">
    <!-- Material Icons for delete button -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

        /* Center the section */
        section.content {
            display: flex;
            justify-content: center;
            margin-top: 30px; /* Adjust top margin as needed */
        }

        .container-fluid {
            max-width: 900px; /* Adjust max width as needed */
        }
    </style>
</head>

<body class="handheld-toolbar-enabled">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
        <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display:none;visibility:hidden;"></iframe>
    </noscript>

    <!-- Sign in / sign up modal-->
    @include('Includes.signin_signup')

    <main class="page-wrapper">
        <!-- Navbar for NFT Marketplace demo-->
        @include('Includes.account_header')

        @include('Includes.navBar')

		<div class="container mb-5 pb-3">
			<div class="bg-light shadow-lg rounded-3 overflow-hidden">
				<div class="row flex-nowrap">
					<!-- Sidebar-->
					@include('Includes.leftSideMenue')
		
					<!-- Content-->
					<section class="content inbox">
						<div class="container-fluid">
							<div style="margin-left: 30%" class="row justify-content-center">
								<div class="col-lg-10">
									<div class="card action_bar mb-4">
										<div class="card-body">
											<h1 class="text-center mb-4">الرسائل</h1>
											<div class="row mb-4">
												<div class="col-lg-12 d-flex justify-content-center">
													<form method="GET" action="{{ url('/messages') }}" class="d-inline">
														<div class="input-group">
															<input type="text" name="search" class="form-control" placeholder="ابحث..." value="{{ request()->input('search') }}">
															<button type="submit" class="btn btn-primary">
																<i class="fas fa-search"></i>
															</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
		
									<div class="row">
										<div class="col-md-12 col-lg-12 col-xl-12">
											<ul class="mail_list list-group list-unstyled">
												@foreach ($contacts as $contact)
													<li class="list-group-item">
														<div class="media d-flex align-items-start justify-content-center">
															<div class="me-3">
																<img src="assets/images/xs/avatar1.jpg" class="rounded-circle" alt="" width="50">
															</div>
															<div class="media-body text-center">
																<h5 class="mt-0">{{ $contact->name }}</h5>
																<span class="badge bg-primary">{{ $contact->product }}</span>
																<small class="text-muted d-block mb-2">
																	<time datetime="2017">{{ $contact->created_at }}</time>
																	<i class="zmdi zmdi-attachment-alt"></i>
																</small>
																<p class="mb-2">رسالة: {{ $contact->message }}</p>
																<p class="mb-2">الهاتف: {{ $contact->phone }}</p>
																<p>البريد الإلكتروني: {{ $contact->email }}</p>
															</div>
														</div>
													</li>
												@endforeach
											</ul>
		
											<!-- Pagination -->
											<div class="card mt-4">
												<div class="card-body text-center">
													{{ $contacts->appends(request()->input())->links() }}
												</div>
											</div>
										</div>
									</div>
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
