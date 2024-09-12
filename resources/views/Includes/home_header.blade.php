<script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
    <script>
      var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"WhatsApp Us","cornerRadius":40,"marginBottom":100,"marginLeft":20,"marginRight":20,"btnPosition":"right","whatsAppNumber":"+201283370658","welcomeMessage":"Hello","zIndex":999999,"btnColorScheme":"light"};
      var wa_widgetSetting = {"title":"فكره","subTitle":"Typically replies in a day","headerBackgroundColor":"#FBFFC8","headerColorScheme":"dark","greetingText":"Hi there! \nHow can I help you?","ctaText":"Start Chat","btnColor":"#1A1A1A","cornerRadius":40,"welcomeMessage":"Hello","btnColorScheme":"light","brandImage":"https://uploads-ssl.webflow.com/5f68a65cd5188c058e27c898/6204c4267b92625c9770f687_whatsapp-chat-widget-dummy-logo.png","darkHeaderColorScheme":{"title":"#333333","subTitle":"#4F4F4F"}};  
      window.onload = () => {
        _waEmbed(wa_btnSetting, wa_widgetSetting);
      };
</script>
<style>
    .tj-menu-area li:last-child {
    margin-right: 55px !important;
}
.tj-header-area.sticky{
    background: #001e64;
}
</style>
<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="lines">
            <span class="line line-1"></span>
            <span class="line line-2"></span>
            <span class="line line-3"></span>
            <span class="line line-4"></span>
            <span class="line line-5"></span>
            <span class="line line-6"></span>
            <span class="line line-7"></span>
            <span class="line line-8"></span>
            <span class="line line-9"></span>
        </div>
        <div class="text">Loading</div>
    </div>
</div>
<!-- end: Preloader -->

<!-- start: Mobile Menu -->
<div id="tj-overlay-bg2" class="tj-overlay-canvas d-lg-none"></div>
<div class="tj-offcanvas-area d-lg-none">
    <div class="tj-offcanvas-header d-flex align-items-center justify-content-between">
        <div class="logo-area text-center">
            <a href="index.html"><img src="assets/images/logo/white-logo.png" alt="Logo" /></a>
        </div>
        <div class="offcanvas-icon">
            <a id="canva_close" href="#">
                <i class="fa-light fa-xmark"></i>
            </a>
        </div>
    </div>
    <div class="tj-search-box">
        <form action="#">
            <input type="text" name="search" id="search" placeholder="Search" />
            <a href="#"> <i class="fal fa-search"></i></a>
        </form>
    </div>
    <nav class="right_menu_togle mobile-navbar-menu d-lg-none" id="mobile-navbar-menu"></nav>
    <div class="mobile-contact">
        <div class="contact-menu">
            <ul class="dot-style">
                <li>
                    <span><i class="fa-sharp fa-regular fa-envelope"></i></span>
                    <a href="mailto:Info@gmail.com">Info@gmail.com</a>
                </li>
                <li>
                    <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                    <a href="#">225 Marion Street, Columbia</a>
                </li>
                <li>
                    <span><i class="fa-solid fa-phone-volume"></i></span>
                    <a href="tel:+00123456789">+ 00 123 456 789</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="mobile-share">
        <ul class="dot-style">
            <li>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-brands fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            </li>
        </ul>
    </div>
    <div class="header-button">
        <a class="btn tj-black-btn" href="contact.html">Contact Us</a>
    </div>
    
</div>
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
                    <div class="tj-menu-area d-lg-block d-none" id="main-menu" >
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
                    <div class="tj-canva-icon d-lg-none">
                        <a class="canva_expander nav-menu-link menu-button" href="#">
                            <span class="dot1"></span>
                            <span class="dot2"></span>
                            <span class="dot3"></span>
                            <span class="dot4"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>