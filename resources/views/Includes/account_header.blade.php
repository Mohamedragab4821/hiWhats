<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>وثيقة</title>
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
        }
    </style>
</head>
<body >
    <script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
    <script>
        var whatsappNumber = @json($settings->whatsapp);
  </script>
  <script>
    var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"تواصل معنا عبر واتساب","cornerRadius":40,"marginBottom":100,"marginLeft":20,"marginRight":20,"btnPosition":"left","whatsAppNumber":whatsappNumber,"welcomeMessage":"مرحبًا","zIndex":999999,"btnColorScheme":"light"};
        var wa_widgetSetting = {"title":"فكره","subTitle":"عادةً ما يرد في غضون يوم","headerBackgroundColor":"#FBFFC8","headerColorScheme":"dark","greetingText":"مرحبًا! \nكيف يمكنني مساعدتك؟","ctaText":"ابدأ الدردشة","btnColor":"#1A1A1A","cornerRadius":40,"welcomeMessage":"مرحبًا","btnColorScheme":"light","brandImage":"https://uploads-ssl.webflow.com/5f68a65cd5188c058e27c898/6204c4267b92625c9770f687_whatsapp-chat-widget-dummy-logo.png","darkHeaderColorScheme":{"title":"#333333","subTitle":"#4F4F4F"}};  
        window.onload = () => {
            _waEmbed(wa_btnSetting, wa_widgetSetting);
        };
    </script>

    <header class="navbar navbar-sticky navbar-expand-lg navbar-light bg-light" style="padding-right: 10%;padding-left: 10%">
        <div class="container-fluid">
            <a class="navbar-brand d-none d-sm-block me-4 order-lg-1" href="{{route('home')}}">
                <img src="{{ asset('storage/' . ($settings->logo ?? 'default_logo.jpg')) }}" width="142" alt="فكرة">
            </a>
            <a class="navbar-brand d-sm-none me-2 order-lg-1" href="{{route('home')}}">
                <img src="{{ asset('storage/' . ($settings->logo ?? 'default_logo.jpg')) }}" width="74" alt="فكرة">
            </a>
            <div class="navbar-toolbar d-flex align-items-center order-lg-3">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>

                <div class="dropdown-menu dropdown-menu-end">
                    <div style="min-width: 14rem;">
                        <h6 class="dropdown-header">@foxnet_creator</h6>
                        <a class="dropdown-item d-flex align-items-center" href="nft-account-settings.html"><i class="ci-settings opacity-60 me-2"></i>إعدادات الموقع</a>
                        <a class="dropdown-item d-flex align-items-center" href="nft-account-my-items.html"><i class="ci-image opacity-60 me-2"></i>عناصري<span class="fs-xs text-muted ms-auto">5</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="nft-account-my-collections.html"><i class="ci-view-list opacity-60 me-2"></i>مجموعاتي<span class="fs-xs text-muted ms-auto">2</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="nft-account-favorites.html"><i class="ci-heart opacity-60 me-2"></i>المفضلة<span class="fs-xs text-muted ms-auto">3</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="nft-account-notifications.html"><i class="ci-bell opacity-60 me-2"></i>الإشعارات</a>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse me-auto order-lg-2" id="navbarCollapse">
                <!-- بحث (موبايل)-->
                <div class="d-lg-none py-3">
                    <div class="input-group"><i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                        <input class="form-control rounded-start" type="text" placeholder="ماذا تحتاج؟">
                    </div>
                </div>
                <!-- القائمة الرئيسية-->
                <ul class="navbar-nav">
                    <li class="nav-item active"><a class="nav-link" href="{{route('home')}}">الصفحة الرئيسية</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            الأقسام
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                            @foreach($categories as $category)
                                <li>
                                    <a class="dropdown-item" href="{{ route('categories', $category->category_id) }}">
                                        {{ $category->category_name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('services')}}">كل الخدمات</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('contacts.index')}}">طلب خدمة</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('whoAreWe') }}">من نحن</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('ourVision') }}">رؤيتنا</a></li>
                    @foreach($pages as $page)
                        @if($page->add_to=='header'&&$page->status=='published')
                        <li class="nav-item"><a class="nav-link" href="{{ route('page.show',['slug'=>$page->slug]) }}">{{$page->title}}</a></li>
                        @endif
                        @endforeach
                        @if(Auth::user())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">حسابي</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('profileSetting')}}">Profile Settings</a></li>
                                <li><a class="dropdown-item" href="{{route('favorites.index')}}">Favorites</a></li>
                                @if(Auth::user()->access=='admin')
                                <li><a class="dropdown-item" href="{{route('messages.index')}}">Messages</a></li>
                                <li><a class="dropdown-item" href="{{route('settings.index')}}">Website Settings</a></li>
                                <li><a class="dropdown-item" href="{{route('ads.index')}}">Ads Settings</a></li>
                                <li><a class="dropdown-item" href="{{route('pages.index')}}">Pades Settings</a></li>
                                <li><a class="dropdown-item" href="{{route('productMangement')}}">Product Mangement</a></li>
                                <li><a class="dropdown-item" href="{{route('categoryMangement')}}">Category Mangement</a></li>
                                @endif
                                <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                            </ul>
                        </li>
                        @endif
                </ul>
            </div>
        </div>
        <!-- انهيار البحث-->
    </header>

    <!-- Input المخفي -->
    <input class="subscription-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
</body>
</html>
