<!DOCTYPE html>
<html lang="ar" dir="rtl">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon_webency.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/sal.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>وثيقة</title>
    <script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
    <script>
      var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"WhatsApp Us","cornerRadius":40,"marginBottom":100,"marginLeft":20,"marginRight":20,"btnPosition":"right","whatsAppNumber":"+201283370658","welcomeMessage":"Hello","zIndex":999999,"btnColorScheme":"light"};
      var wa_widgetSetting = {"title":"فكره","subTitle":"Typically replies in a day","headerBackgroundColor":"#FBFFC8","headerColorScheme":"dark","greetingText":"Hi there! \nHow can I help you?","ctaText":"Start Chat","btnColor":"#1A1A1A","cornerRadius":40,"welcomeMessage":"Hello","btnColorScheme":"light","brandImage":"https://uploads-ssl.webflow.com/5f68a65cd5188c058e27c898/6204c4267b92625c9770f687_whatsapp-chat-widget-dummy-logo.png","darkHeaderColorScheme":{"title":"#333333","subTitle":"#4F4F4F"}};  
      window.onload = () => {
        _waEmbed(wa_btnSetting, wa_widgetSetting);
      };
</script>
    
    <style>
        /* إزالة أي هوامش وتباعد غير مرغوب فيه */
        body, html {
            margin: 0;
            padding: 0;
            direction: rtl;
        }

        /* تأكد من أن العناصر تأخذ كامل عرض الصفحة */
        .container-fluid {
            padding: 0;
            margin: 0;
            width: 100%;
        }

        /* اخفاء input إذا لم يكن له استخدام */
        .subscription-form-antispam {
            display: none;
        }

        /* تحسين عرض الـ input إذا كان مرئيًا */
        input {
            box-sizing: border-box;
            width: 100%;
        }

        /* تخصيص إعدادات الـ navbar */
        .navbar {
            margin: 0 auto;
            width: 100%;
            /* background: #001e64 !important; */

        } 
        .navbar-expand-lg .navbar-light{
            background: #001e64 !important;
        }
        .tj-menu-area li:last-child {
    margin-right: 55px !important;
}
.tj-header-area.sticky{
    background: #001e64;
}
.sub-menu{
    margin-left: 10%
}

    </style>
</head>
<body >
    <script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
    <script>
        var whatsappNumber = @json($settings->whatsapp);
  </script>
  <script>
    var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"تواصل معنا عبر واتساب","cornerRadius":40,"marginBottom":100,"marginLeft":20,"marginRight":20,"btnPosition":"right","whatsAppNumber":whatsappNumber,"welcomeMessage":"مرحبًا","zIndex":999999,"btnColorScheme":"light"};
        var wa_widgetSetting = {"title":"فكره","subTitle":"عادةً ما يرد في غضون يوم","headerBackgroundColor":"#FBFFC8","headerColorScheme":"dark","greetingText":"مرحبًا! \nكيف يمكنني مساعدتك؟","ctaText":"ابدأ الدردشة","btnColor":"#1A1A1A","cornerRadius":40,"welcomeMessage":"مرحبًا","btnColorScheme":"light","brandImage":"https://uploads-ssl.webflow.com/5f68a65cd5188c058e27c898/6204c4267b92625c9770f687_whatsapp-chat-widget-dummy-logo.png","darkHeaderColorScheme":{"title":"#333333","subTitle":"#4F4F4F"}};  
        window.onload = () => {
            _waEmbed(wa_btnSetting, wa_widgetSetting);
        };
    </script>

    <header class="navbar navbar-sticky navbar-expand-lg navbar-light" style="padding-right: 10%;padding-left: 10%;background: #001e64 !important;
">
        <div class="container-fluid">
            <a class="navbar-brand d-none d-sm-block me-4 order-lg-1" href="{{route('home')}}">
                <img src="{{ asset('storage/' . ($settings->logo ?? 'default_logo.jpg')) }}" width="142" alt="فكرة">
            </a>
            <a class="navbar-brand d-sm-none me-2 order-lg-1" href="{{route('home')}}">
                <img src="{{ asset('storage/' . ($settings->logo ?? 'default_logo.jpg')) }}" width="74" alt="فكرة">
            </a>
            <div class="navbar-toolbar d-flex align-items-center order-lg-3">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>

                {{-- <div class="dropdown-menu dropdown-menu-end">
                    <div style="min-width: 14rem;">
                        <h6 class="dropdown-header">@foxnet_creator</h6>
                        <a class="dropdown-item d-flex align-items-center" href="nft-account-settings.html"><i class="ci-settings opacity-60 me-2"></i>إعدادات الموقع</a>
                        <a class="dropdown-item d-flex align-items-center" href="nft-account-my-items.html"><i class="ci-image opacity-60 me-2"></i>عناصري<span class="fs-xs text-muted ms-auto">5</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="nft-account-my-collections.html"><i class="ci-view-list opacity-60 me-2"></i>مجموعاتي<span class="fs-xs text-muted ms-auto">2</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="nft-account-favorites.html"><i class="ci-heart opacity-60 me-2"></i>المفضلة<span class="fs-xs text-muted ms-auto">3</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="nft-account-notifications.html"><i class="ci-bell opacity-60 me-2"></i>الإشعارات</a>
                    </div>
                </div> --}}
            </div>
            <div class="collapse navbar-collapse me-auto order-lg-2" id="navbarCollapse">
                <!-- بحث (موبايل)-->
                <div class="d-lg-none py-3">
                    <div class="input-group"><i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                        <input class="form-control rounded-start" type="text" placeholder="ماذا تحتاج؟">
                    </div>
                </div>
                <!-- القائمة الرئيسية-->
                <div class="tj-menu-area d-lg-block d-none" id="main-menu" >
                    <nav id="mobile-menu">
                        <ul >
                            <li>
                                <a href="{{route('home')}}">الصفحه الرئيسه</a</a>
                            </li>
                            <li>
                                <a href="{{route('services')}}">كل الخدمات</a>
                            </li>
                            <li class="has-dropdown">
                                <a href="">الاقسام</a>
                                <ul class="sub-menu">
                                    @foreach($categories as $category)
                                    <li>
                                        <a href="{{ route('categories', $category->category_id) }}">{{ $category->category_name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <a href="{{route('contacts.index')}}">طلب خدمه</a>
                            </li>
                            <li><a href="{{ route('whoAreWe') }}">من نحن</a></li>
                            <li ><a  href="{{ route('ourVision') }}">رؤيتنا</a></li>
                            @foreach($pages as $page)
                            @if($page->add_to=='header'&&$page->status=='published')
                            <li ><a  href="{{ route('page.show',['slug'=>$page->slug]) }}">{{$page->title}}</a></li>
                            @endif
                            @endforeach
                            @if(Auth::user())
                            
                            <li class="has-dropdown" style="margin-right: 55px;">
                                <a href="" >حسابي</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('profileSetting') }}">إعدادات الحساب</a></li>
                                    <li><a href="{{ route('favorites.index') }}">المفضلات</a></li>
                                    @if(Auth::user()->access == 'admin')
                                        <li><a href="{{ route('messages.index') }}">الرسائل</a></li>
                                        <li><a href="{{ route('settings.index') }}">إعدادات الموقع</a></li>
                                        <li><a href="{{ route('ads.index') }}">إعدادات الإعلانات</a></li>
                                        <li><a href="{{ route('pages.index') }}">إعدادات الصفحات</a></li>
                                        <li><a href="{{ route('productMangement') }}">إدارة المنتجات</a></li>
                                        <li><a href="{{ route('categoryMangement') }}">إدارة الفئات</a></li>
                                    @endif
                                    <li><a href="{{ route('logout') }}">تسجيل الخروج</a></li>
                                    
                                </ul>
                            </li>
                            @endif
                        </ul>
                    </nav>
                    
                </div>
            </div>
        </div>
        <!-- انهيار البحث-->
    </header>

    <!-- Input المخفي -->
    <input class="subscription-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/meanmenu.js') }}"></script>
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
<script src="{{ asset('assets/js/sal.js') }}"></script>
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/validate.min.js') }}"></script>

<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
