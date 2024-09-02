<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    <script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
    <script>
      var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"WhatsApp Us","cornerRadius":40,"marginBottom":100,"marginLeft":20,"marginRight":20,"btnPosition":"right","whatsAppNumber":"+201283370658","welcomeMessage":"Hello","zIndex":999999,"btnColorScheme":"light"};
      var wa_widgetSetting = {"title":"فكره","subTitle":"Typically replies in a day","headerBackgroundColor":"#FBFFC8","headerColorScheme":"dark","greetingText":"Hi there! \nHow can I help you?","ctaText":"Start Chat","btnColor":"#1A1A1A","cornerRadius":40,"welcomeMessage":"Hello","btnColorScheme":"light","brandImage":"https://uploads-ssl.webflow.com/5f68a65cd5188c058e27c898/6204c4267b92625c9770f687_whatsapp-chat-widget-dummy-logo.png","darkHeaderColorScheme":{"title":"#333333","subTitle":"#4F4F4F"}};  
      window.onload = () => {
        _waEmbed(wa_btnSetting, wa_widgetSetting);
      };
    </script>
    
    @if($errors->has('error'))
    <div class="alert alert-danger">
        {{ $errors->first('error') }}
    </div>
@endif

    <header class="navbar d-block navbar-sticky navbar-expand-lg navbar-light position-absolute w-100" style="direction: rtl; text-align: right;">
        <div class="container">
            <a class="navbar-brand d-none d-sm-block me-4 order-lg-1" href="{{route('home')}}">
                <img  src="{{ asset('storage/' . ($settings->logo ?? 'default_logo.jpg')) }}" width="142" height="10" alt="فكرة">
            </a>
            <a class="navbar-brand d-sm-none me-2 order-lg-1" href="index.html">
                <img src="{{ asset('storage/' . ($settings->logo ?? 'default_logo.jpg')) }}" width="74" alt="فكرة">
            </a>
            <div class="navbar-toolbar d-flex align-items-center order-lg-3">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                @if(!Auth::user())
                <a class="navbar-tool ms-lg-2" href="#signin-modal" data-bs-toggle="modal">
                    <span class="navbar-tool-tooltip">تسجيل</span>
                        <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-user"></i></div>
                    </a>
                    @endif
                </div>
                <div class="collapse navbar-collapse me-auto order-lg-2" id="navbarCollapse">
                    <!-- Search (mobile)-->
                    <!-- Primary menu-->
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a class="nav-link" href="{{route('home')}}">الصفحه الرئيسه</a></li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              الاقسام
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

                        <li class="nav-item "><a class="nav-link" href="{{route('services')}}">كل الخدمات</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('contacts.index')}}">طلب خدمه</a></li>
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
            <!-- Search collapse-->
            <div class="search-box collapse" id="searchBox">
                <div class="container py-2">
                    <div class="input-group"><i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                        <input class="form-control rounded-start" type="text" placeholder="What do you need?">
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>