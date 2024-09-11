<script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
    <script>
      var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"WhatsApp Us","cornerRadius":40,"marginBottom":100,"marginLeft":20,"marginRight":20,"btnPosition":"right","whatsAppNumber":"+201283370658","welcomeMessage":"Hello","zIndex":999999,"btnColorScheme":"light"};
      var wa_widgetSetting = {"title":"فكره","subTitle":"Typically replies in a day","headerBackgroundColor":"#FBFFC8","headerColorScheme":"dark","greetingText":"Hi there! \nHow can I help you?","ctaText":"Start Chat","btnColor":"#1A1A1A","cornerRadius":40,"welcomeMessage":"Hello","btnColorScheme":"light","brandImage":"https://uploads-ssl.webflow.com/5f68a65cd5188c058e27c898/6204c4267b92625c9770f687_whatsapp-chat-widget-dummy-logo.png","darkHeaderColorScheme":{"title":"#333333","subTitle":"#4F4F4F"}};  
      window.onload = () => {
        _waEmbed(wa_btnSetting, wa_widgetSetting);
      };
</script>
<style>
    /* Header Area */
    .tj-header-area {
        background-color: #ffffff; /* White background for the header */
        color: #000000; /* Default text color */
        padding: 10px 0; /* Add padding for spacing */
        border-bottom: 1px solid #e0e0e0; /* Optional: Light border to distinguish the header */
    }
    .tj-header-area.header-sticky.sticky {
        background-color: #ffffff; /* Ensure sticky header has white background */
        color: #000000; /* Default text color */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Optional: Add shadow for sticky effect */
        position: fixed; /* Fix position at the top */
        width: 100%; /* Full width */
        top: 0; /* Stick to the top */
        z-index: 9999; /* Ensure it stays above other content */
    }
    /* Main Menu Links */
    #mobile-menu a {
        color: #000000; /* Default text color */
        text-decoration: none; /* Remove underline from links */
        transition: color 0.3s, background-color 0.3s;
    }

    #mobile-menu a:hover,
    #mobile-menu a:active {
        color: #3078CD; /* White text color on hover and active states */
        background-color: #3078CD; /* Blue background on hover and active states */
        border-radius: 4px; /* Rounded corners for hover effect */
        padding: 10px; /* Add padding for a better look */
    }

    /* Dropdown Menu */
    .has-dropdown:hover .sub-menu {
        display: block; /* Show sub-menu on hover */
        background-color: #ffffff; /* White background for sub-menu */
        border: 1px solid #e0e0e0; /* Optional: Light border for sub-menu */
    }

    .sub-menu li a {
        color: #000000; /* Default text color */
        padding: 10px; /* Add padding to sub-menu items */
        transition: background-color 0.3s, color 0.3s;
    }

    .sub-menu li a:hover,
    .sub-menu li a:active {
        background-color: #3078CD; /* Blue background on hover and active states */
        color: #3078CD; /* White text color on hover and active states */
    }

    /* Logo Area */
    .logo img {
        height: 14vh; /* Ensure logo scales properly */
        transition: transform 0.3s;
    }

    .logo img:hover {
        transform: scale(1.05); /* Slight zoom effect on hover */
    }

    /* Header Button */
    .header-button a {
        background-color: #3078CD; /* Button background color */
        color: #ffffff; /* Button text color */
        border: 1px solid #3078CD; /* Border color */
        padding: 10px 20px; /* Add padding for the button */
        border-radius: 4px; /* Rounded corners for the button */
        text-decoration: none; /* Remove underline from button text */
        transition: background-color 0.3s, color 0.3s;
    }

    .header-button a:hover,
    .header-button a:active {
        background-color: #ffffff; /* White background on hover and active states */
        color: #3078CD; /* Blue text color on hover and active states */
        border: 1px solid #3078CD; /* Border color on hover and active states */
    }
</style>

<header class="tj-header-area header-sticky" style="direction: rtl; text-align: right;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="header-content-area">
                    <div class="logo-area">
                        <div class="logo">
                            <a class="navbar-brand d-none d-sm-block me-4 order-lg-1" href="{{route('home')}}">
                                <img  src="{{ asset('storage/' . ($settings->logo ?? 'default_logo.jpg')) }}" width="142" height="10" alt="فكرة">
                            </a>                        
                        </div>
                    </div>
                    <div class="tj-menu-area d-lg-block d-none" id="main-menu" style="width: 70%">
                        <nav id="mobile-menu">
                            <ul>
                                <li>
                                    <a href="{{route('home')}}">الصفحه الرئيسه</a</a>
                                </li>
                                <li>
                                    <a href="{{route('services')}}">كل الخدمات</a>
                                </li>
                                <li class="has-dropdown">
                                    <a href="service.html">الاقسام</a>
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
                                    <a href="service.html" >حسابي</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('profileSetting')}}">Profile Settings</a></li>
                                        <li><a href="{{route('favorites.index')}}">Favorites</a></li>
                                        @if(Auth::user()->access=='admin')
                                        <li><a href="{{route('messages.index')}}">Messages</a></li>
                                        <li><a href="{{route('settings.index')}}">Website Settings</a></li>
                                        <li><a href="{{route('ads.index')}}">Ads Settings</a></li>
                                        <li><a href="{{route('pages.index')}}">Pages Settings</a></li>
                                        <li><a href="{{route('productMangement')}}">Product Mangement</a></li>
                                        <li><a href="{{route('categoryMangement')}}">Category Mangement</a></li>
                                        @endif
                                        <li><a href="{{route('logout')}}">Logout</a></li>
                                    </ul>
                                </li>
                                @endif
                            </ul>
                        </nav>
                        
                    </div>
                    <div class="header-button d-none d-lg-block">
                        <a class="tj-secondary-btn btn-border" style="    background: white;
    border: none;"  href="#signin-modal" data-bs-toggle="modal"><span>تسجيل دخول / تسجيل</span></a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</header>